<?php

use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\PropertyEnumerationTable;


/** @var array $arResult */
/** @var array $arParams */

$filterCodes = [];
foreach ($arResult['ITEMS'] as $item) {
    if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) {
        $filterCodes[] = $item['CODE'];
    }
}

if (!$filterCodes) {
    return;
}

$rsFilters = \Bitrix\Iblock\ElementPropertyTable::getList([
    'filter' => [
        'PB.ACTIVE' => 'Y',
        'PB.CODE' => $filterCodes,
        'PB.IBLOCK.CODE' => 'portfolio',
    ],
    'select' => [
        'PROPERTY_ID' => 'PB.ID',
        'PROPERTY_CODE' => 'PB.CODE',
        'PROPERTY_VALUE' => 'VALUE',
        'PROPERTY_LIST_XML_ID' => 'PE.XML_ID',
        'PROPERTY_LIST_VALUE' => 'PE.VALUE',
    ],
    'runtime' => [
        'PE' => [
            'data_type' => PropertyEnumerationTable::class,
            'reference' => [
                '=this.IBLOCK_PROPERTY_ID' => 'ref.PROPERTY_ID',
                '=this.VALUE' => 'ref.ID'
            ],
        ],
        'PB' => [
            'data_type' => PropertyTable::class,
            'reference' => [
                '=this.IBLOCK_PROPERTY_ID' => 'ref.ID',
            ],
        ],
    ],
    'cache' => [
        'ttl' => 3600,
        'cache_joins' => true
    ]
]);

$filters = [];
while ($arFilter = $rsFilters->fetch()) {
    $filters[$arFilter['PROPERTY_CODE']]['ID'] = $arFilter['PROPERTY_ID'];
    if (!$arFilter['PROPERTY_LIST_VALUE']) {
        $filters[$arFilter['PROPERTY_CODE']]['VALUE'][] = trim($arFilter['PROPERTY_VALUE']);
    } else {
        $filters[$arFilter['PROPERTY_CODE']]['VALUE'][] = trim($arFilter['PROPERTY_LIST_VALUE']);
        $filters[$arFilter['PROPERTY_CODE']]['XML_ID'][] = trim($arFilter['PROPERTY_LIST_XML_ID']);
    }
}

foreach ($filters as $key => $filter) {
    $arResult['AUTOCOMPLETE'][$key]['VALUE'] = array_unique($filter['VALUE']);
    if ($filter['XML_ID']) {
        $arResult['AUTOCOMPLETE'][$key]['XML_ID'] = array_unique($filter['XML_ID']);
    }
}
