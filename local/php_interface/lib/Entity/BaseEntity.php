<?php

namespace Entity;

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Loader;
use Bitrix\Main\ObjectNotFoundException;
use Bitrix\Main\SystemException;

abstract class BaseEntity
{
    protected static array $instances = [];
    protected ?string $dataClass;
    protected array $items;

    abstract public static function getEntityCode(): string;

    abstract public static function getPrimaryField(): ?string;

    protected function __construct()
    {
    }

    /**
     * Получает записи из highload-блока по фильтру.
     *
     * @param array $filter Фильтр для выборки (стандартный массив фильтра Битрикс).
     * @param array $order Сортировка (по умолчанию по ID возрастанию).
     * @return array Массив записей (каждая запись – ассоциативный массив).
     */
    protected function getItems(
        array $filter = [],
        array $order = ['ID' => 'ASC'],
        ?int $limit = 100,
        array $cache = [],
    ): array {
        if (!$this->dataClass) {
            return [];
        }

        $params = [
            'filter' => $filter,
            'select' => ['*'],
            'order' => $order,
            'cache' => [
                'ttl' => 36000,
            ]
        ];

        if ($limit) {
            $params['limit'] = $limit;
        }

        if ($cache) {
            $params['cache'] = $cache;
        }

        $rsData = $this->dataClass::getList($params);

        $result = [];
        $primary = static::getPrimaryField();

        while ($arData = $rsData->fetch()) {
            if ($primary && $code = $arData[$primary]) {
                unset($arData[$primary]);
                $result[$code] = $arData;
            } else {
                $result[] = $arData;
            }
        }

        return $result;
    }

    public static function getInstance(): static
    {
        if (isset(static::$instances[static::class])) {
            return static::$instances[static::class];
        }

        if (!Loader::includeModule('highloadblock')) {
            throw new SystemException('Модуль highloadblock не установлен или не загружен.');
        }

        $hlb = HighloadBlockTable::getRow([
            'filter' => ['=NAME' => static::getEntityCode()],
            'select' => ['ID'],
            'cache' => [
                'ttl' => 360000
            ]
        ]);

        if (!$hlb) {
            throw new ObjectNotFoundException("Highload-блок с кодом '" . static::getEntityCode() . "' не найден.");
        }

        $instance = new static();
        $instance->dataClass = HighloadBlockTable::compileEntity((int)$hlb['ID'])->getDataClass();

        return static::$instances[static::class] = $instance;
    }
}
