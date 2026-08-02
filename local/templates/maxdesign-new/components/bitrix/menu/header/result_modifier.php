<?php

use Bitrix\Iblock\Elements\ElementPortfolioFiltersTable;
use Bitrix\Iblock\Elements\ElementServicesTable;
use Bitrix\Iblock\SectionTable;
use Helpers\IblockHelper;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var $arParams */
/** @var $arResult */

$arParams['HAS_DROPDOWN'] = array_unique(explode(',', $arParams['HAS_DROPDOWN']));
$arResult['DROPDOWN'] = [];

foreach ($arParams['HAS_DROPDOWN'] as $code) {
    switch ($code) {
        case 'portfolio':
            $rsData = ElementPortfolioFiltersTable::getList([
                'filter' => [
                    'CODE' => 'TYPE_OBJECT',
                    'FILTER_AUTOCOMPLETE.VALUE' => false,
                    'FILTER_MAIN_PAGE.VALUE' => false,
                    'ACTIVE' => 'Y',
                ],
                'select' => [
                    'FILTER_PROGRAMMING_VALUE' => 'FILTER_PROGRAMMING.VALUE',
                    'FILTER_VALUES_VALUE' => 'FILTER_VALUES.VALUE',
                ],
            ]);

            $values = [
                'VALUE' => [
                    'Все проекты',
                ],
                'XML_ID' => [
                    '',
                ],
            ];

            while ($arData = $rsData->fetch()) {
                if (!in_array($arData['FILTER_VALUES_VALUE'], $values['VALUE'], true)) {
                    $values['VALUE'][] = $arData['FILTER_VALUES_VALUE'];
                }

                if (!in_array($arData['FILTER_PROGRAMMING_VALUE'], $values['XML_ID'], true)) {
                    $values['XML_ID'][] = $arData['FILTER_PROGRAMMING_VALUE'];
                }
            }

            $i = 0;
            $k = 0;
            foreach (array_combine($values['XML_ID'], $values['VALUE']) as $xmlId => $text) {
                if ($i === 3) {
                    $k++;
                    $i = 0;
                }

                $arResult['DROPDOWN'][$code][$k]['LINK'] = "/$code/";
                $arResult['DROPDOWN'][$code][$k]['ITEMS'][$xmlId] = $text;
                $i++;
            }
            break;

        case 'uslugi':
            $rsData = SectionTable::getList([
                'filter' => [
                    'ACTIVE' => 'Y',
                    'IBLOCK_ID' => IblockHelper::getIblockIdByCode('services'),
                ],
                'select' => [
                    'ID',
                    'NAME',
                    'CODE',
                ],
            ]);

            while ($arData = $rsData->fetch()) {
                $arResult['DROPDOWN'][$code][(int) $arData['ID']] = [
                    'TITLE' => $arData['NAME'],
                    'LINK' => "/$code/{$arData['CODE']}/",
                    'ITEMS' => [],
                ];
            }

            $rsData = ElementServicesTable::getList([
                'filter' => [
                    'ACTIVE' => 'Y',
                    'IBLOCK_SECTION_ID' => array_keys($arResult['DROPDOWN'][$code]),
                ],
                'select' => [
                    'IBLOCK_SECTION_ID',
                    'NAME',
                    'CODE',
                ],
            ]);

            while ($arData = $rsData->fetch()) {
                $arResult['DROPDOWN'][$code][(int) $arData['IBLOCK_SECTION_ID']]['ITEMS'][$arData['CODE']] = $arData['NAME'];
            }
            break;

        default: //todo реализовать стандартную логику (пункт О студии)
            break;
    }
}
