<?php

namespace Entity;

final class Form extends BaseEntity
{
    private array $fields;

    public static function getEntityCode(): string
    {
        return 'Form';
    }

    public static function getPrimaryField(): string
    {
        return 'UF_CODE';
    }

    /**
     * @param string $key
     * @return array name, placeholder, type, values
     */
    public function getFields(string $key): array
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        if (!isset($this->fields[$key])) {
            $fields = [];
            $selectsCnt = 0;
            $rangeCnt = 0;
            foreach ($this->items[$key]['UF_FIELDS_CODE'] as $key1 => $item) {
                if ($this->items[$key]['UF_FIELDS_PLACEHOLDERS'][$key1] && $this->items[$key]['UF_FIELDS_TYPE'][$key1]) {
                    $field = [
                        'name' => $item,
                        'placeholder' => $this->items[$key]['UF_FIELDS_PLACEHOLDERS'][$key1],
                        'type' => $this->items[$key]['UF_FIELDS_TYPE'][$key1],
                    ];

                    if ($field['type'] === 'select') {
                        $field['values'] = explode(',', $this->items[$key]['UF_SELECTS_VALUES'][$selectsCnt]);
                        $selectsCnt++;
                    } elseif ($field['type'] === 'range') {
                        $field['values'] = explode('-', $this->items[$key]['UF_RANGE_VALUES'][$rangeCnt]);
                        $rangeCnt++;
                    }

                    $fields[] = $field;
                }
            }

            $this->fields[$key] = $fields;
        }

        return $this->fields[$key];
    }

    public function getConsentText(string $key): string
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return $this->items[$key]['UF_CONSENT_TEXT'];
    }


    public function getSubmitText(string $key): string
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return $this->items[$key]['UF_SUBMIT_TEXT'];
    }

    public function getYandexMapLink(string $key): string
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return $this->items[$key]['UF_YANDEX_MAP_LINK'];
    }

    public function getYandexMapTitle(string $key): string
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        return $this->items[$key]['UF_YANDEX_MAP_TITLE'];
    }
}