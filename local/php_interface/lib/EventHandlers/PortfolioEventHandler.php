<?php

namespace EventHandlers;

use Bitrix\Iblock\Elements\ElementPortfolioFiltersTable;
use Bitrix\Iblock\PropertyTable;
use CIBlockPropertyEnum;
use Helpers\IblockHelper;

final class PortfolioEventHandler
{

    /**
     * Обновляем значения в списке TYPE_OBJECT (свойство инфоблока "Портфолио")
     * @param array $arFields
     * @return void
     */
    public static function portfolioFiltersAfterSaved(array $arFields): void
    {
        if (!in_array($arFields['CODE'], ['TYPE_OBJECT', 'STYLE_FILTER'])
            || (int) $arFields['IBLOCK_ID'] !== IblockHelper::getIblockIdByCode('portfolio-filters')) {
            return;
        }

        self::updateEnum($arFields['CODE'], $arFields['ID']);
    }

    private static function updateEnum(string $enumToUpdate, string $updatedEntityId): void
    {
        $rsData = ElementPortfolioFiltersTable::getList([
            'filter' => [
                'ID' => $updatedEntityId,
            ],
            'select' => [
                'FILTER_VALUES_VALUE' => 'FILTER_VALUES.VALUE',
                'FILTER_PROGRAMMING_VALUE' => 'FILTER_PROGRAMMING.VALUE',
            ],
        ]);

        $values = [
            'VALUE' => [],
            'XML_ID' => [],
        ];
        while ($arData = $rsData->fetch()) {
            if (!in_array($arData['FILTER_VALUES_VALUE'], $values['VALUE'], true)) {
                $values['VALUE'][] = $arData['FILTER_VALUES_VALUE'];
            }

            if (!in_array($arData['FILTER_PROGRAMMING_VALUE'], $values['XML_ID'], true)) {
                $values['XML_ID'][] = $arData['FILTER_PROGRAMMING_VALUE'];
            }
        }

        $saveValues = [];
        foreach (array_combine($values['XML_ID'], $values['VALUE']) as $code => $value) {
            $saveValues[] = [
                'VALUE' => $value,
                'XML_ID' => $code,
            ];
        }

        $propId = PropertyTable::getList([
            'filter' => [
                'CODE' => $enumToUpdate,
                'IBLOCK_ID' => IblockHelper::getIblockIdByCode('portfolio'),
            ],
            'select' => ['ID'],
        ])->fetch()['ID'];

        $rsData = CIBlockPropertyEnum::GetList(arFilter: [
            'PROPERTY_ID' => $propId,
            'IBLOCK_ID' => IblockHelper::getIblockIdByCode('portfolio'),
        ]);

        $existingValues = [];
        while ($arData = $rsData->Fetch()) {
            $existingValues[$arData['XML_ID']] = [
                'ID' => $arData['ID'],
                'SORT' => $arData['SORT'],
                'VALUE' => $arData['VALUE'],
            ];
        }

        foreach ($saveValues as $sort => $value) {
            // Битрикс некорректно обрабатывает сортировку 0
            ++$sort;

            $currentExistingValue = $existingValues[$value['XML_ID']];
            $isset = isset($currentExistingValue);
            $equal = $currentExistingValue['VALUE'] === $value && $currentExistingValue['SORT'] === $sort;

            if ($isset && $equal) {
                unset($existingValues[$value['XML_ID']]);
                continue;
            }

            if ($isset && !$equal) {
                CIBlockPropertyEnum::Update($currentExistingValue['ID'], [
                    'VALUE' => $value['VALUE'],
                    'SORT' => $sort,
                ]);
                unset($existingValues[$value['XML_ID']]);
                continue;
            }

            if (!$isset) {
                CIBlockPropertyEnum::Add([
                    'IBLOCK_ID' => IblockHelper::getIblockIdByCode('portfolio'),
                    'PROPERTY_ID' => $propId,
                    'XML_ID' => $value['XML_ID'],
                    'VALUE' => $value['VALUE'],
                    'SORT' => $sort,
                ]);
                unset($existingValues[$value['XML_ID']]);
            }
        }

        // Оставшиеся существующие поля, которых нет в новых значениях, удаляем
        foreach ($existingValues as $value) {
            CIBlockPropertyEnum::Delete($value['ID']);
        }
    }
}
