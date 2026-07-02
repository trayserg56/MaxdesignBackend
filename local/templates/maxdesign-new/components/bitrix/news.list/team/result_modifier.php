<?php

use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Entity\ExpressionField;
use Bitrix\Iblock\PropertyEnumerationTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

$arId = array_column($arResult['ITEMS'], 'IBLOCK_SECTION_ID');
$rsData = \CIBlockSection::GetList(
    arFilter: [
        'ID' => $arId,
        'IBLOCK_ID' => $arResult['ID'],
    ],
    arSelect: [
        'ID',
        'CODE',
        'NAME',
        'DESCRIPTION',
        'UF_ACHIEVEMENT'
    ]
);

$listFilter = [];
while ($arData = $rsData->Fetch()) {
    $listFilter += $arData['UF_ACHIEVEMENT'];
    $arData['ITEMS'] = [];
    $arResult['SECTIONS'][(int)$arData['ID']] = $arData;
}


$rsEnum = \CUserFieldEnum::GetList(
    aFilter: [
        'ID' => $listFilter
    ]
);

$enum = [];
while ($arData = $rsEnum->Fetch()) {
    $enum[(int) $arData['ID']] = [
        'XML' => $arData['XML_ID'],
        'VALUE' => $arData['VALUE'],
    ];
}

foreach ($arResult['SECTIONS'] as $key => $section) {
    foreach ($section['UF_ACHIEVEMENT'] as $id) {
        $id = (int) $id;

        if (isset($enum[$id])) {
            $arResult['SECTIONS'][$key]['ACHIEVEMENT'][$enum[$id]['XML']] = $enum[$id]['VALUE'];
        }
    }
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['SECTIONS'][(int)$item['IBLOCK_SECTION_ID']]['ITEMS'][$key] = $item;
}
