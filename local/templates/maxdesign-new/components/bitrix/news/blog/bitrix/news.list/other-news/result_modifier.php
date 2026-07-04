<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult **/

foreach ($arResult['ITEMS'] as $key =>  $item) {
    $rs = \Bitrix\Iblock\SectionTable::getById($item['IBLOCK_SECTION_ID']);
    
    if ($section = $rs->fetchObject()) {
        $arResult['ITEMS'][$key]['SECTION_NAME'] = $section->getName();
    }
}
