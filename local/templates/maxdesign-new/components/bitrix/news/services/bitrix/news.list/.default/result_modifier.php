<?php

use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Entity\ExpressionField;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

$arId = array_column($arResult['ITEMS'], 'IBLOCK_SECTION_ID');
$rsData = SectionTable::getList([
    'filter' => [
        '@ID' => $arId
    ],
    'select' => [
        'ID',
        'CODE',
        'NAME',
    ],
    'cache' => [
        'ttl' => 360000
    ],
    'runtime' => [
        new ExpressionField(
            'CUSTOM_SORT',
            'FIELD(%s, ' . implode(',', $arId) . ')',
            ['ID']
        )
    ],
    'order' => [
        'CUSTOM_SORT' => 'ASC'
    ]
]);


while ($arData = $rsData->fetch()) {
    $arData['ITEMS'] = [];
    $arResult['SECTIONS'][(int) $arData['ID']] = $arData;
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['SECTIONS'][(int) $item['IBLOCK_SECTION_ID']]['ITEMS'][$key] = $item;
}
