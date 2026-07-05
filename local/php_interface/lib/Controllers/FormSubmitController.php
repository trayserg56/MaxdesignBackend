<?php

namespace Controllers;

use Bitrix\Main\Context;
use Bitrix\Main\DI\ServiceLocator;
use Bitrix\Main\Web\Json;
use Entity\DTO\FormSubmitDTO;
use Entity\FormSubmits;

class FormSubmitController
{
    public static function handlePostRequests(): string
    {
        $request = Context::getCurrent()->getRequest();

        $requestArray = $request->getPostList()->toArray();

        if (!$requestArray) {
            return Json::encode([
                'success' => false,
                'errors' => [
                    ['message' => 'Ошибка при получении данных',]
                ]
            ]);
        }

        /** @var \Bitrix\Main\Validation\ValidationService $validationService */
        $validationService = ServiceLocator::getInstance()->get('main.validation.service');

        $formRequest = FormSubmitDTO::createFromArray($requestArray);
        $result = $validationService->validate($formRequest);

        if ($result->getErrors()) {
            return Json::encode([
                'success' => false,
                'errors' => $result->getErrors()
            ]);
        }

        try {
            $result = FormSubmits::getInstance()->add($formRequest);

            if (!$result->isSuccess()) {
                return Json::encode([
                    'success' => false,
                    'errors' => [
                        ['message' => 'Ошибка при сохранении данных: ' . implode('; ', $result->getErrorMessages())]
                    ]
                ]);
            }
        } catch (\Throwable $e) {
            return Json::encode([
                'success' => false,
                'errors' => [
                    ['message' => 'Ошибка при сохранении данных: ' . $e->getMessage()]
                ]
            ]);
        }

        return Json::encode([
            'success' => true
        ]);
    }
}
