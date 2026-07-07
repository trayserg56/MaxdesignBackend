<?php

use Bitrix\Iblock\Elements\ElementPortfolioTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

$rsData = ElementPortfolioTable::getList([
    'filter' => [
        'ACTIVE' => 'Y',
    ],
    'select' => [
        'TYPE_VALUE' => 'TYPE.VALUE',
    ],
]);

$arResult['CATEGORIES'] = [];

while ($arData = $rsData->fetch()) {
    if (!$arData['TYPE_VALUE']) {
        continue;
    }

    $name = ucfirst(trim($arData['TYPE_VALUE']));
    $arResult['CATEGORIES'][$name]['NAME'] = $name;
    $arResult['CATEGORIES'][$name]['COUNT']++;
}

foreach ($arResult['CATEGORIES'] as $key => $value) {
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

$rsData = \Bitrix\Iblock\SectionTable::getList([
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
}
