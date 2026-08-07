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
                    'form' => [
                        'message' => 'Ошибка при получении данных',
                    ]
                ]
            ]);
        }

        /** @var \Bitrix\Main\Validation\ValidationService $validationService */
        $validationService = ServiceLocator::getInstance()->get('main.validation.service');

        $formRequest = FormSubmitDTO::createFromArray($requestArray);
        $result = $validationService->validate($formRequest);

        if ($result->getErrors()) {
            $errors = [];
            foreach ($result->getErrors() as $error) {
                $errors[$error->getCode()]['message'] = $error->getMessage();
            }

            return Json::encode([
                'success' => false,
                'errors' => $errors,
            ]);
        }

        sendTelegram("maxdesign.pro: Новая заявка\nИмя: {$formRequest->getName()}\nЭл.почта: {$formRequest->getEmail()}\nТелефон: {$formRequest->getPhone()}\nУкажите тип помещения: {$formRequest->getType()}\nМестонахождение объекта: {$formRequest->getLocation()}");

        try {
            $result = FormSubmits::getInstance()->add($formRequest);

            if (!$result->isSuccess()) {
                return Json::encode([
                    'success' => false,
                    'errors' => [
                        'form' => [
                            'message' => 'Ошибка при сохранении данных: ' . implode('; ', $result->getErrorMessages())
                        ]
                    ]
                ]);
            }
        } catch (\Throwable $e) {
            return Json::encode([
                'success' => false,
                'errors' => [
                    'form' => [
                        'message' => 'Ошибка при сохранении данных: ' . $e->getMessage()
                    ]
                ]
            ]);
        }

        return Json::encode([
            'success' => true
        ]);
    }
}
