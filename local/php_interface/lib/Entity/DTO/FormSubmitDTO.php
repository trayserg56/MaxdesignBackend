<?php

namespace Entity\DTO;

use Bitrix\Main\Validation\Rule\Email;
use Bitrix\Main\Validation\Rule\Phone;
use Bitrix\Main\Validation\Rule\NotEmpty;

class FormSubmitDTO
{
    public static function createFromArray(array $array): self
    {
        return new static(
            formCode: $array['formCode'] ?: null,
            email: $array['email'] ?: null,
            phone: $array['phone'] ?: null,
            location: $array['location'] ?: null,
            name: $array['name'] ?: null,
            type: $array['type'] ?: null,
            area: (int)$array['area'] ?: null,
            consent: $array['consent'] ?: null,
        );
    }

    public function __construct(
        #[NotEmpty(errorMessage: 'Значения поля "formCode" не может быть пустым')]
        private ?string $formCode,
        #[Email]
        private ?string $email,
        #[Phone]
        private ?string $phone,
        #[NotEmpty(errorMessage: 'Значения поля "Местонахождение" не может быть пустым')]
        private ?string $location,
        #[NotEmpty(errorMessage: 'Значения поля "Имя не может" быть пустым')]
        private ?string $name,
        #[NotEmpty(errorMessage: 'Значения поля "Тип помещения" не может быть пустым')]
        private ?string $type,
        #[NotEmpty(errorMessage: 'Значения поля "Площадь" не может быть пустым')]
        private ?int $area,
        #[NotEmpty(errorMessage: 'Не дано согласие на обработку персональных данных')]
        private ?string $consent
    )
    {
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function getFormCode(): ?string
    {
        return $this->formCode;
    }

    public function getConsent(): ?string
    {
        return $this->consent;
    }
}
