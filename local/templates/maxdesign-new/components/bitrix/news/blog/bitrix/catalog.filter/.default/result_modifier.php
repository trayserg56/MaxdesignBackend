<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) {
    die();
}

/** @var $arResult */

$items = $arResult['ITEMS'];
unset($arResult['ITEMS']);

foreach ($items as $code => $item) {
    if ($code === 'SECTION_ID') {
        foreach ($item['LIST'] as $id => $sect) {
            if (!$id) {
                continue;
            }

            $arResult['ITEMS'][$id] = trim(str_replace('.', '', $sect));
        }
    }
}

unset($items);
