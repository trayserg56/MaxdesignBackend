<?php

use Bitrix\Main\Web\Json;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */


try {
    $detailPage = Json::decode($arResult['PROPERTIES']['DETAIL_PAGE']['~VALUE'])['blocks'];
} catch (Exception $e) {
    $detailPage = [];
}

if ($detailPage[0]['name'] === 'htag' && $detailPage[0]['type'] === 'h1' && $detailPage[0]['value']) {
    $arResult['SUBTITLE'] = $detailPage[0]['value'];
    unset($detailPage[0]);
}

if ($detailPage[1]['name'] === 'complex_subtitle' && $detailPage[1]['textfield']['value']) {
    $arResult['SUBTITLE'] = $detailPage[1]['textfield']['value'];
    unset($detailPage[1]);
}

if ($detailPage[2]['name'] === 'complex_award') {
    $arResult['AWARD'] = $detailPage[2];
    unset($detailPage[2]);
}

$anchors = [];

foreach ($detailPage as $key => $block) {
    if ($block['name'] === 'complex_interior') {
        if (!$block['textfield']['value']) {
            continue;
        }

        $anchors['interior'] = $block['textfield']['value'];
    } elseif ($block['name'] === 'complex_gallery') {
        $anchors['gallery'] = 'Галерея';
    } elseif (!$block['htag'] || $block['htag']['type'] !== 'h2') {
        continue;
    }

    if ((!$block['htag']['value'] || !$block['htag']['anchor']) && !in_array($block['name'], ['complex_interior', 'complex_gallery'])) {
        continue;
    }

    if ($block['name'] === 'complex_layout') {
        $pos = array_search('interior', array_keys($anchors), true);
        $anchors = array_merge(
            array_slice($anchors, 0, $pos),
            [$block['htag']['anchor'] => $block['htag']['value']],
            array_slice($anchors, $pos)
        );
        continue;
    }

    $anchors[$block['htag']['anchor']] = $block['htag']['value'];
}

$arResult['DETAIL_PAGE'] = $detailPage;
$arResult['ANCHORS'] = $anchors;
