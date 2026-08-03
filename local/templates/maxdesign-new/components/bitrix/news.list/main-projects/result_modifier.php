<?php

use Bitrix\Iblock\Elements\ElementPortfolioTable;
use Bitrix\Iblock\Elements\ElementPortfolioFiltersTable;
use Bitrix\Iblock\PropertyEnumerationTable;
use Bitrix\Iblock\SectionTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

$arResult['FILTER_CODE'] = 'TYPE_OBJECT';

$rsData = ElementPortfolioFiltersTable::getList([
    'filter' => [
        'ACTIVE' => 'Y',
        'CODE' => $arResult['FILTER_CODE'],
        'FILTER_AUTOCOMPLETE_VALUE' => false,
        '!FILTER_MAIN_PAGE_VALUE' => false,
    ],
    'select' => [
        'FILTER_MAIN_PAGE_VALUE' => 'FILTER_MAIN_PAGE.VALUE',
        'FILTER_AUTOCOMPLETE_VALUE' => 'FILTER_AUTOCOMPLETE.VALUE',
        'FILTER_VALUE' => 'FILTER_VALUES.VALUE',
        'FILTER_PROGRAMMING_VALUE' => 'FILTER_PROGRAMMING.VALUE',
    ],
]);

$categories = [
    'VALUE' => [],
    'XML_ID' => [],
];

while ($arData = $rsData->fetch()) {
    if (!in_array($arData['FILTER_VALUE'], $categories['VALUE'])) {
        $categories['VALUE'][] = $arData['FILTER_VALUE'];
    }

    if (!in_array($arData['FILTER_PROGRAMMING_VALUE'], $categories['XML_ID'])) {
        $categories['XML_ID'][] = $arData['FILTER_PROGRAMMING_VALUE'];
    }
}

$arResult['CATEGORIES'] = [];
foreach ($categories['VALUE'] as $key => $value) {
    $code = $categories['XML_ID'][$key];
    $arResult['CATEGORIES'][$code] = [
        'CODE' => $code,
        'NAME' => $value,
        'COUNT' => [],
    ];
}

$rsData = ElementPortfolioTable::getList([
    'filter' => [
        'ACTIVE' => 'Y',
        '!TYPE_VALUE' => false,
    ],
    'select' => [
        'ID',
        'TYPE_VALUE' => 'TYPE_OBJECT.VALUE',
        'PROPERTY_LIST_' => 'PE',
    ],
    'runtime' => [
        'PE' => [
            'data_type' => PropertyEnumerationTable::class,
            'reference' => [
                '=this.TYPE_VALUE' => 'ref.ID'
            ],
        ],
    ]
]);

if (!$arResult['CATEGORIES']) {
    while ($arData = $rsData->fetch()) {
        if (!$arData['TYPE_VALUE'] || !$arData['PROPERTY_LIST_VALUE']) {
            continue;
        }

        $name = ucfirst(trim($arData['PROPERTY_LIST_VALUE']));
        $arResult['CATEGORIES'][$name]['NAME'] = $name;
        if (!in_array($arData['ID'], $arResult['CATEGORIES'][$name]['COUNT'])) {
            $arResult['CATEGORIES'][$name]['COUNT'][] = $arData['ID'];
        }
    }
} else {
    while ($arData = $rsData->fetch()) {
        if (!$arData['TYPE_VALUE'] || !$arData['PROPERTY_LIST_XML_ID']) {
            continue;
        }

        $haystack = $arData['PROPERTY_LIST_XML_ID'];

        foreach ($arResult['CATEGORIES'] as $name => $data) {
            $needle = $data['XML_ID'];

            if (str_contains($haystack, $needle) && !in_array($arData['ID'], $arResult['CATEGORIES'][$haystack]['COUNT'])) {
                $arResult['CATEGORIES'][$haystack]['COUNT'][] = $arData['ID'];
            }
        }
    }
}

foreach ($arResult['CATEGORIES'] as $key => $value) {
    $value['COUNT'] = count($value['COUNT']);
    if (in_array($value['COUNT'], [11, 12, 13, 14], true)) {
        $arResult['CATEGORIES'][$key]['COUNT'] = $value['COUNT'] . ' проектов';
    } else {
        $arResult['CATEGORIES'][$key]['COUNT'] = match ($value['COUNT'] % 10) {
            1 => $value['COUNT'] . ' проект',
            2,3,4 => $value['COUNT'] . ' проекта',
            5,6,7,8,9,0 => $value['COUNT'] . ' проектов',
        };
    }
}

$rsData = SectionTable::getList([
    'filter' => [
        'IBLOCK_ID' => $arResult['ID'],
        'ID' => array_column($arResult['ITEMS'], 'IBLOCK_SECTION_ID'),
    ],
    'select' => [
        'ID',
        'NAME',
    ],
    'cache' => [
        'ttl' => 3600,
    ]
]);

$sections = [];
while ($arData = $rsData->fetch()) {
    $sections[(int) $arData['ID']] = $arData['NAME'];
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['SECTION_NAME'] = $sections[(int) $item['IBLOCK_SECTION_ID']];
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = \CFile::ResizeImageGet($item['PREVIEW_PICTURE'], [
        'width' => 500,
        'height' => 500,
    ])['src'];
}
