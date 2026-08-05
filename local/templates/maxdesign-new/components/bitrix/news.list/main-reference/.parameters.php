<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arTemplateParameters = [
    'TITLE' => [
        'NAME' => 'Заголовок',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => 'Референс-лист',
    ],
    'HEADING' => [
        'NAME' => 'Подзаголовок',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => 'Реализованные объекты',
    ],
];
