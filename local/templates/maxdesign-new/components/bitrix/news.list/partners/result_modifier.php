<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    if ($item['CODE'] === 'description') {
        unset($arResult['ITEMS'][$key]);
        $arResult['DESCRIPTION'] = $item;
        break;
    }
}

$arResult['ITEMS'] = array_values($arResult['ITEMS']);

