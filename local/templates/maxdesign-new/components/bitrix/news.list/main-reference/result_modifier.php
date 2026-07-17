<?php

use Bitrix\Iblock\Elements\ElementPortfolioTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

$objects = [];
foreach ($arResult['ITEMS'] as $item) {
    if ($item['PROPERTIES']['OBJECT']['VALUE']) {
        $objects[] = $item['PROPERTIES']['OBJECT']['VALUE'];
    }

    if (!isset($arResult['DOWNLOAD_FILE']) && $item['PROPERTIES']['DOWNLOAD_FILE']['VALUE']) {
       $arResult['DOWNLOAD_FILE'] = \CFile::GetPath($item['PROPERTIES']['DOWNLOAD_FILE']['VALUE']);
    }
}

$rsData = ElementPortfolioTable::getList([
    'filter' => [
        'ID' => $objects,
    ],
    'select' => [
        'ID',
        'SQUARE_VALUE' => 'SQUARE.VALUE',
        'ADDRESS_VALUE' => 'ADDRESS.VALUE',
        'YEAR_VALUE' => 'YEAR.VALUE',
        'IBLOCK_SECTION_ID',
        'IBLOCK_ID',
    ],
    'cache' => [
        'ttl' => 3600,
    ],
]);

$data = [];
while ($arData = $rsData->fetch()) {
    $data[(int) $arData['ID']] = $arData;
}

$rsData = \Bitrix\Iblock\SectionTable::getList([
    'filter' => [
        'ID' => array_column($data, 'IBLOCK_SECTION_ID'),
        'IBLOCK_ID' => array_column($data, 'IBLOCK_ID'),
    ],
    'select' => [
        'ID',
        'NAME',
    ],
    'cache' => [
        'ttl' => 3600,
    ],
]);

$sections = [];
while ($arData = $rsData->fetch()) {
    $sections[(int) $arData['ID']] = $arData['NAME'];
}

foreach ($arResult['ITEMS'] as $key => $item) {

    $object = (int) $item['PROPERTIES']['OBJECT']['VALUE'];

    if (!$object) {
        continue;
    }

    if ((int) (float) $data[$object]['YEAR_VALUE'] !== 0) {
        $arResult['ITEMS'][$key]['YEAR'] = (int) (float) $data[$object]['YEAR_VALUE'];
    }

    $arResult['ITEMS'][$key]['SQUARE'] = $data[$object]['SQUARE_VALUE'];
    $arResult['ITEMS'][$key]['ADDRESS'] = $data[$object]['ADDRESS_VALUE'];
    $arResult['ITEMS'][$key]['SECTION_NAME'] = $sections[(int) $data[$object]['IBLOCK_SECTION_ID']];
}
