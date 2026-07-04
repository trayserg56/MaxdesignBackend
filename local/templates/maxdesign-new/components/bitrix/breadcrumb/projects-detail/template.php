<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return '';
}

$strReturn = '<div class="project-hero__breadcrumbs" aria-label="Хлебные крошки">';

foreach ($arResult as $key => $item) {
    if (array_key_last($arResult) !== $key) {
        $strReturn .= '<a class="project-hero__crumb-link" href="' . $item['LINK'] . '">' . $item['TITLE'] . '</a><span
                    class="project-hero__crumb-sep">/</span>';
    } else {
        $strReturn .= '<span class="project-hero__crumb-current">' . $item['TITLE'] . '</span>';
    }
}

$strReturn .= '</div>';

return $strReturn;
