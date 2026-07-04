<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult)) {
    return '';
}

$strReturn = '<div class="projects-page__breadcrumbs">';

foreach ($arResult as $key => $item) {
    if (array_key_last($arResult) !== $key) {
        $strReturn .= '<a class="projects-page__crumb-link" href="' . $item['LINK'] . '">' . $item['TITLE'] . '</a>
            <span class="projects-page__crumb-sep">/</span>';
    } else {
        $strReturn .= '<span class="projects-page__crumb-current">' . $item['TITLE'] . '</span>';
    }
}

$strReturn .= '</div>';

return $strReturn;
