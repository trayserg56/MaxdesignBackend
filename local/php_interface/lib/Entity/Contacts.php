<?php

namespace Entity;

final class Contacts extends BaseEntity
{
    public static function getEntityCode(): string
    {
        return 'Contacts';
    }

    public static function getPrimaryField(): string
    {
        return 'UF_CODE';
    }

    public function get(string $key)
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return $this->items[$key]['UF_VALUE'];
    }

    public function getName(string $key)
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return $this->items[$key]['UF_NAME'];
    }

    public function getFormatedPhone(string $key): string
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return str_replace([
            '(', ')', '-', ' '
        ], '', $this->items[$key]['UF_VALUE']);
    }
}