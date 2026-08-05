<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arTemplateParameters = [
    'LIST_TEXT' => [
        'NAME' => 'Текст перехода в список',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => 'Все партнёры',
    ],
    'LIST_LINK' => [
        'NAME' => 'Ссылка перехода в список',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => '/partnery/',
    ],
];
