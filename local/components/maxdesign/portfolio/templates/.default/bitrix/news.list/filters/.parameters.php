<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) {
	die();
}

$arTemplateParameters = [
    'ACTIVE_FILTERS_RAW' => [
        'NAME' => 'Активные фильтры (raw)',
        'TYPE' => 'LIST',
        'DEFAULT' => 'Y',
        'HIDDEN' => 'Y',
    ],
    'ACTIVE_FILTERS' => [
        'NAME' => 'Активные фильтры',
        'TYPE' => 'LIST',
        'DEFAULT' => 'Y',
        'HIDDEN' => 'Y',
    ],
    'SEF_FILTERS' => [
        "NAME" => "Поля для ЧПУ фильтров",
        "DEFAULT" => ["TYPE_OBJECT", "STYLE"],
        "TYPE" => "LIST",
        "MULTIPLE" => "Y",
        "HIDDEN" => "Y",
    ],
    'SEF_FOLDER' => [
        'NAME' => 'SEF_FOLDER',
        'TYPE' => 'STRING',
        'HIDDEN' => 'Y',
    ],
];
