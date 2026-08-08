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

foreach ($arResult as $key => $item) {
    $code = str_replace('/', '', $item['LINK']);
    $arResult['ITEMS'][$code] = $item;

    unset($arResult[$key]);
}

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

            foreach (array_combine($values['XML_ID'], $values['VALUE']) as $xmlId => $text) {
                $arResult['DROPDOWN'][$code][0]['LINK'] = "/filter/$code/";
                $arResult['DROPDOWN'][$code][0]['ITEMS'][$xmlId] = $text;
            }
            break;

        case 'uslugi':
            $entity = \Bitrix\Iblock\Model\Section::compileEntityByIblock(
                IblockHelper::getIblockIdByCode('services')
            );

            $rsData = $entity::getList([
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
                    'LINK' => (int)$arData['UF_REMOVE_PREFIX'] ? "/{$arData['CODE']}/" : "/$code/{$arData['CODE']}/",
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

        default:
            break;
    }
}

$categories = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    $explode = explode('>', $item['TEXT']);

    if (count($explode) <= 1) {
        continue;
    }

    $category = trim($explode[0]);
    $menuItem = trim($explode[1]);

    $item['TEXT'] = $menuItem;
    $arResult['DROPDOWN'][$category][0]['TITLE'] = $category;
    $arResult['DROPDOWN'][$category][0]['ITEMS'][$item['LINK']] = $item['TEXT'];

    if (!in_array($category, $categories)) {
        $arResult['ITEMS'][$key]['TEXT'] = $category;
        $categories[] = $category;
    } else {
        unset($arResult['ITEMS'][$key]);
    }
}
