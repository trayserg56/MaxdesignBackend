<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return '';
}

$strReturn = '<nav class="breadcrumbs" aria-label="Хлебные крошки">';

foreach ($arResult as $key => $item) {
    $strReturn .= '<span class="breadcrumbs__item">';

    if (array_key_first($arResult) !== $key) {
        $strReturn .= '<span class="breadcrumbs__sep">/</span>';
    }

    if (array_key_last($arResult) !== $key) {
        $strReturn .= '<a class="breadcrumbs__link" href="' . $item['LINK'] . '">' . $item['TITLE'] . '</a>';
    } else {
        $strReturn .= '<span class="breadcrumbs__current">' . $item['TITLE'] . '</span>';
    }

    $strReturn .= '</span>';
}

$strReturn .= '</nav>';

return $strReturn;

