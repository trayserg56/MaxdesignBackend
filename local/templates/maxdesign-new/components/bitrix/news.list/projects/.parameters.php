<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$arTemplateParameters = [
    'TITLE' => [
        'NAME' => 'Заголовок',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => 'Реализованные проекты',
    ],
    'LIST_TEXT' => [
        'NAME' => 'Текст перехода в список',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => 'Смотреть все',
    ],
    'LIST_LINK' => [
        'NAME' => 'Ссылка перехода в список',
        'PARENT' => 'BASE',
        'TYPE' => 'STRING',
        'DEFAULT' => '/portfolio/',
    ],
];
