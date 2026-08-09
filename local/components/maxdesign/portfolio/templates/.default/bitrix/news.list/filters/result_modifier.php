<?php

use Bitrix\Iblock\PropertyTable;
use Bitrix\Iblock\PropertyEnumerationTable;
use Bitrix\Iblock\Elements\ElementPortfolioTable;

/** @var array $arResult */
/** @var array $arParams */

$filterCodes = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    if ($item['PROPERTIES']['FILTER_MAIN_PAGE']['VALUE']) {
        unset($arResult['ITEMS'][$key]);
        continue;
    }

    if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) {
        $filterCodes[] = $item['CODE'];
    }
}

$filterTypes = [];

if ($filterCodes) {
    $rsFilters = \Bitrix\Iblock\ElementPropertyTable::getList([
        'filter' => [
            'PB.ACTIVE' => 'Y',
            'PB.CODE' => $filterCodes,
            'PB.IBLOCK_ID' => $arResult['ID'],
        ],
        'select' => [
            'PROPERTY_ID' => 'PB.ID',
            'PROPERTY_CODE' => 'PB.CODE',
            'PROPERTY_VALUE' => 'VALUE',
            'PROPERTY_LIST_XML_ID' => 'PE.XML_ID',
            'PROPERTY_LIST_VALUE' => 'PE.VALUE',
            'PROPERTY_TYPE' => 'PB.PROPERTY_TYPE',
        ],
        'runtime' => [
            'PE' => [
                'data_type' => PropertyEnumerationTable::class,
                'reference' => [
                    '=this.IBLOCK_PROPERTY_ID' => 'ref.PROPERTY_ID',
                    '=this.VALUE' => 'ref.ID'
                ],
            ],
            'PB' => [
                'data_type' => PropertyTable::class,
                'reference' => [
                    '=this.IBLOCK_PROPERTY_ID' => 'ref.ID',
                ],
            ],
        ],
        'cache' => [
            'ttl' => 3600,
            'cache_joins' => true
        ]
    ]);

    $filters = [];
    while ($arFilter = $rsFilters->fetch()) {
        $filters[$arFilter['PROPERTY_CODE']]['ID'] = $arFilter['PROPERTY_ID'];
        $filterTypes[$arFilter['PROPERTY_CODE']] = $arFilter['PROPERTY_TYPE'];
        if (!$arFilter['PROPERTY_LIST_VALUE']) {
            $filters[$arFilter['PROPERTY_CODE']]['VALUE'][] = trim($arFilter['PROPERTY_VALUE']);
        } else {
            $filters[$arFilter['PROPERTY_CODE']]['VALUE'][] = trim($arFilter['PROPERTY_LIST_VALUE']);
            $filters[$arFilter['PROPERTY_CODE']]['XML_ID'][] = trim($arFilter['PROPERTY_LIST_XML_ID']);
        }
    }

    foreach ($filters as $key => $filter) {
        $arResult['AUTOCOMPLETE'][$key]['VALUE'] = array_unique($filter['VALUE']);
        if ($filter['XML_ID']) {
            $arResult['AUTOCOMPLETE'][$key]['XML_ID'] = array_unique($filter['XML_ID']);
        }
    }
} else {
    $rsFilters = \Bitrix\Iblock\ElementPropertyTable::getList([
        'filter' => [
            'PB.ACTIVE' => 'Y',
            'PB.CODE' => array_column($arResult['ITEMS'], 'CODE'),
            'PB.IBLOCK.CODE' => 'portfolio',
        ],
        'select' => [
            'PROPERTY_CODE' => 'PB.CODE',
            'PROPERTY_TYPE' => 'PB.PROPERTY_TYPE',
        ],
        'runtime' => [
            'PB' => [
                'data_type' => PropertyTable::class,
                'reference' => [
                    '=this.IBLOCK_PROPERTY_ID' => 'ref.ID',
                ],
            ],
        ],
        'cache' => [
            'ttl' => 3600,
            'cache_joins' => true
        ]
    ]);

    while ($arFilter = $rsFilters->fetch()) {
        if (isset($filterTypes[$arFilter['PROPERTY_CODE']])) {
            continue;
        }

        $filterTypes[$arFilter['PROPERTY_CODE']] = $arFilter['PROPERTY_TYPE'];
    }
}


// Блокируем фильтры чтобы не получать пустую выдачу
$arResult['ALLOWED_VALUES'] = [];

$select = ['ID', 'NAME'];
foreach ($arResult['ITEMS'] as $key => $item) {
    if (isset($filterTypes[$item['CODE']]) && $filterTypes[$item['CODE']] === 'L') {
        $select["{$item['CODE']}_VALUE"] = "{$item['CODE']}.ITEM.XML_ID";
    } else {
        $select["{$item['CODE']}_VALUE"] = "{$item['CODE']}.VALUE";
    }
}

$filters = [
    'ACTIVE' => 'Y',
];

if ($arParams['ACTIVE_FILTERS']) {
    foreach ($arParams['ACTIVE_FILTERS'] as $code => $values) {
        if (in_array($code, ['TYPE_OBJECT', 'STYLE_FILTER'])) {
            $filter = [
                "!$code.VALUE" => false,
                0 => [
                    'LOGIC' => 'OR',
                ],
            ];

            foreach (array_diff($values, [null]) as $value) {
                $filter[0][]["$code.VALUE"] = $value;
            }
        }

        if ($code === 'SQUARE_OBJECT') {
            $filter = [
                'LOGIC' => 'OR',
            ];

            foreach ($values as $key => $square) {
                if (!str_contains($square, 'AND')) {
                    $char = !is_numeric($square[1]) ? mb_substr($square, 0, 2) : mb_substr($square, 0, 1);
                    $filter[$key][$char . 'SQUARE_OBJECT.VALUE'] = mb_substr($square, strlen($char));
                    continue;
                }

                foreach (explode('AND', $square) as $item) {
                    $item = trim($item);
                    $char = !is_numeric($item[1]) ? mb_substr($item, 0, 2) : mb_substr($item, 0, 1);
                    $filter[$key][$char . 'SQUARE_OBJECT.VALUE'] = mb_substr($item, strlen($char));
                }
            }
        }

        if (in_array($code, ['ADDRESS', 'YEAR'])) {
            $filter = [
                'LOGIC' => 'OR',
            ];

            foreach ($values as $key => $value) {
                $filter[$key][$code === 'YEAR' ?: '?' . "$code.VALUE"][] = $value;
            }
        }

        if (isset($filter)) {
            $filters[] = $filter;
        }

        if (!$arParams['ACTIVE_FILTERS']['TYPE_OBJECT'] || count($arParams['ACTIVE_FILTERS']) !== 1) {
            unset($select["{$code}_VALUE"]);
        }
    }
}

$rsData = ElementPortfolioTable::getList([
    'filter' => $filters,
    'select' => $select,
]);


while ($arData = $rsData->fetch()) {
    foreach ($arData as $field => $value) {
        $field = str_replace('_VALUE', '', $field);

        if ($field === 'TYPE_OBJECT' && $arParams['ACTIVE_FILTERS']['TYPE_OBJECT'] && count($arParams['ACTIVE_FILTERS']) === 1) {
            $value = 'all';
        }

        if (!isset($value)){
            continue;
        }

        if ($field === 'SQUARE_OBJECT' && preg_match('/\d+/', str_replace(' ', '', $value), $matches)) {
            $value = (int) $matches[0];
        }

        if (is_numeric($value)) {
            $value = (int) $value;
        }

        $arResult['ALLOWED_VALUES'][$field][] = $value;
    }
}

$conditions = [];
foreach ($arResult['ALLOWED_VALUES']['SQUARE_OBJECT'] as $key => $value) {
    foreach ($arResult['ITEMS'] as $item) {
        if ($item['CODE'] !== 'SQUARE_OBJECT') {
            continue;
        }

        foreach ($item['PROPERTIES']['FILTER_PROGRAMMING']['~VALUE'] as $condition) {
            if (in_array($condition, $conditions)) {
                continue;
            }

            if (evaluateCondition($condition, $value)) {
                $conditions[] = $condition;
            }
        }
    }
}

$arResult['ALLOWED_VALUES']['SQUARE_OBJECT'] = $conditions;

/**
 * Вычисляет логическое выражение вида ">=200 AND <1000" для заданного значения
 *
 * @param string $expression Строка с условием (поддерживаются AND / OR)
 * @param int|float $value Проверяемое число
 * @return bool Результат проверки
 * @throws InvalidArgumentException Если выражение не удаётся разобрать
 */
function evaluateCondition(string $expression, $value): bool
{
    // Нормализуем пробелы
    $expression = preg_replace('/\s+/', ' ', trim($expression));

    // Разбиваем по AND / OR с сохранением разделителей
    $tokens = preg_split('/(\s+AND\s+|\s+OR\s+)/i', $expression, -1, PREG_SPLIT_DELIM_CAPTURE);

    // Если разделителей нет — обрабатываем как одно условие
    if (count($tokens) === 1) {
        return evaluateSingleCondition($expression, $value);
    }

    // Идём по токенам: сначала условие, потом оператор, потом условие...
    $result = null;
    $currentOperator = null;

    foreach ($tokens as $token) {
        $trimmed = trim($token);
        if ($trimmed === '') continue;

        // Определяем, является ли токен логическим оператором
        if (preg_match('/^(AND|OR)$/i', $trimmed)) {
            $currentOperator = strtoupper($trimmed);
            continue;
        }

        // Это условие
        $conditionResult = evaluateSingleCondition($trimmed, $value);

        if ($result === null) {
            $result = $conditionResult;
        } else {
            if ($currentOperator === 'AND') {
                $result = $result && $conditionResult;
            } elseif ($currentOperator === 'OR') {
                $result = $result || $conditionResult;
            } else {
                // Если оператор не задан, по умолчанию AND (на случай, если выражение без явного оператора)
                $result = $result && $conditionResult;
            }
        }
    }

    return (bool)$result;
}

/**
 * Проверяет одно простое условие (например, "<200" или ">=1000")
 */
function evaluateSingleCondition(string $condition, $value): bool
{
    $condition = trim($condition);
    // Регулярка: захватывает оператор (>=, <=, !=, <>, =, >, <) и число (целое или дробное)
    if (!preg_match('/^(>=|<=|!=|<>|=|>|<)\s*([\d.]+)$/', $condition, $matches)) {
        throw new InvalidArgumentException("Не удалось разобрать условие: '$condition'");
    }

    $operator = $matches[1];
    $threshold = (float)$matches[2];

    switch ($operator) {
        case '>=': return $value >= $threshold;
        case '<=': return $value <= $threshold;
        case '!=':
        case '<>': return $value != $threshold;
        case '=':  return $value == $threshold;
        case '>':  return $value > $threshold;
        case '<':  return $value < $threshold;
        default:   throw new InvalidArgumentException("Неизвестный оператор: '$operator'");
    }
}
