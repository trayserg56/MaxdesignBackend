<?php

namespace Entity;

use Bitrix\Main\Result;
use Entity\DTO\FormSubmitDTO;

final class FormSubmits extends BaseEntity
{
    public static function getEntityCode(): string
    {
        return 'FormSubmits';
    }

    public static function getPrimaryField(): string
    {
        return 'ID';
    }
    public function add(FormSubmitDTO $dto): Result
    {
        return $this->dataClass::add([
            'UF_FORM_CODE' => $dto->getFormCode(),
            'UF_NAME' => $dto->getName(),
            'UF_PHONE' => $dto->getPhone(),
            'UF_EMAIL' => $dto->getEmail(),
            'UF_LOCATION' => $dto->getLocation(),
            'UF_TYPE' => $dto->getType(),
            'UF_AREA' => $dto->getArea(),
        ]);
    }
}