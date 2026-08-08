<?php

use Bitrix\Iblock\Elements\ElementPortfolioFiltersTable;
use Bitrix\Iblock\Elements\ElementPortfolioTable;
use Bitrix\Iblock\Elements\ElementServicesTable;
use Helpers\IblockHelper;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var $arParams */
/** @var $arResult */

$arParams['HAS_DROPDOWN'] = array_unique(explode(',', $arParams['HAS_DROPDOWN']));
$arResult['ITEMS'] = $arResult;
$arResult['DROPDOWN'] = [];

foreach ($arParams['HAS_DROPDOWN'] as $code) {
    switch ($code) {
        case 'portfolio':
            $propCode = 'TYPE_OBJECT';
            $rsData = ElementPortfolioFiltersTable::getList([
                'filter' => [
                    'CODE' => $propCode,
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

            $rsData = ElementPortfolioTable::getList([
                'filter' => [
                    'ACTIVE' => 'Y',
                ],
                'select' => [
                    $propCode . '_ITEM_XML_ID' => $propCode . '.ITEM.XML_ID',
                ],
            ]);

            $allowed = [];
            while ($arData = $rsData->fetch()) {
                if (in_array($arData[$propCode . '_ITEM_XML_ID'], $allowed, true)) {
                    continue;
                }

                $allowed[] = $arData[$propCode . '_ITEM_XML_ID'];
            }

            $i = 0;
            $k = 0;
            foreach (array_combine($values['XML_ID'], $values['VALUE']) as $xmlId => $text) {
                if (!in_array($xmlId, $allowed, true)) {
                    continue;
                }

                if ($i === 3) {
                    $k++;
                    $i = 0;
                }

                $arResult['DROPDOWN'][$code][$k]['LINK'] = "/filter/$code/";
                $arResult['DROPDOWN'][$code][$k]['ITEMS'][$xmlId] = $text;
                $i++;
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
                    'UF_REMOVE_PREFIX',
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

            foreach ($arResult['DROPDOWN'][$code] as $key => $dropdown) {
                if (count($dropdown['ITEMS']) <= 0) {
                    unset($arResult['DROPDOWN'][$code][$key]);
                }
            }
            break;

        default:
            break;
    }
}

$k = 0;
$i = 0;
$categories = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    if ($i === 2) {
        $k++;
        $i = 0;
    }

    $explode = explode('>', $item['TEXT']);

    if (count($explode) <= 1) {
        continue;
    }

    $category = trim($explode[0]);
    $menuItem = trim($explode[1]);

    $item['TEXT'] = $menuItem;
    $arResult['DROPDOWN'][$category][$i]['ITEMS'][$item['LINK']] = $item['TEXT'];

    if (!in_array($category, $categories)) {
        $arResult['ITEMS'][$key]['TEXT'] = $category;
        $categories[] = $category;
    } else {
        unset($arResult['ITEMS'][$key]);
    }
    $i++;
}
