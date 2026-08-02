<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) {
    die();
}

$arTemplateParameters = [
    'HAS_DROPDOWN' => [
        'NAME' => 'Пункты меню с выпадающим окном (через запятую)',
        'TYPE' => 'STRING',
        'MULTIPLE' => 'N',
        'DEFAULT' => 'portfolio,uslugi',
        'REFRESH'=> 'Y',
    ],
];
