<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */


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
