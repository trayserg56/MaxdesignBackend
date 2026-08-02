<?php

namespace Helpers;

use Bitrix\Iblock\IblockTable;
use Bitrix\Main\Loader;

class IblockHelper
{
    protected static array $iblocks = [];
    public static function getIblockIdByCode(string $code): int
    {
        if (isset(static::$iblocks[$code])) {
            return static::$iblocks[$code];
        }

        try {
            Loader::includeModule('iblock');
        } catch (\Throwable) {
            return 0;
        }

        $rsData = IblockTable::getList([
            'filter' => ['CODE' => $code],
            'limit' => 1,
            'select' => ['ID'],
        ]);

        if ($arData = $rsData->fetch()) {
            static::$iblocks[$code] = (int) $arData['ID'];
        }

        return static::$iblocks[$code] ?? 0;
    }
}
