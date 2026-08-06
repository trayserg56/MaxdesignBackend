<?php

namespace Entity;

final class Form extends BaseEntity
{
    private array $fields;
    private array $fieldsJson;

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

    public function getFieldsJson(string $key): string
    {
        if (!isset($this->items)) {
            $this->items = $this->getItems();
        }

        if (!isset($this->fieldsJson[$key])) {
            $fields = [];
            $selectsCnt = 0;
            $rangeCnt = 0;
            foreach ($this->items[$key]['UF_FIELDS_CODE'] as $key1 => $item) {
                if ($this->items[$key]['UF_FIELDS_PLACEHOLDERS'][$key1] && $this->items[$key]['UF_FIELDS_TYPE'][$key1]) {
                    $field = [
                        'name' => $item,
                        'placeholder' => $this->items[$key]['UF_FIELDS_PLACEHOLDERS'][$key1],
                        'type' => $this->items[$key]['UF_FIELDS_TYPE'][$key1],
                        'label' => null,
                        'id' => "$key-$item",
                        'required' => (bool) $this->items[$key]['UF_REQUIRED'][$key1]
                    ];

                    if ($field['type'] === 'select') {
                        $field['options'] = explode(',', $this->items[$key]['UF_SELECTS_VALUES'][$selectsCnt]);
                        $field['label'] = $field['placeholder'];
                        $field['placeholder'] = 'Выберите из списка';
                        $selectsCnt++;
                    } elseif ($field['type'] === 'range') {
                        $field['options'] = explode('-', $this->items[$key]['UF_RANGE_VALUES'][$rangeCnt]);
                        $field['inputmode'] = 'numeric';
                        $rangeCnt++;
                    } elseif ($field['type'] === 'email') {
                        $field['mask'] = "'alias': 'email'";
                    } elseif ($field['type'] === 'tel') {
                        $field['mask'] = "'mask': '+ 7(999) 999-99-99'";
                    }

                    $fields[] = $field;
                }
            }

            $this->fieldsJson[$key] = $fields;
        }

        return json_encode($this->fieldsJson[$key], JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_QUOT | JSON_HEX_APOS);
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

    public function getYandexMapCoords(string $key): string
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