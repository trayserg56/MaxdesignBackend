<?php

namespace Entity;

final class Socials extends BaseEntity
{
    public static function getEntityCode(): string
    {
        return 'Socials';
    }

    public static function getPrimaryField(): ?string
    {
        return null;
    }

    public function get(): array
    {
        $items =  $this->getItems(order: [
            'UF_SORT' => 'ASC'
        ]);

        foreach ($items as $key => $item) {
            $items[$key]['UF_ICON'] = \CFile::GetPath($item['UF_ICON']);
        }

        return $items;
    }
}