<?php

use Bitrix\Main\Web\Json;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

if (!check_bitrix_sessid()) {
    echo Json::encode([
        'success' => false,
        'errors' => [
            ['message' => 'Ошибка безопасности: сессия истекла или токен неверный',]
        ]
    ]);
} else {
    echo \Controllers\FormSubmitController::handlePostRequests();
}
