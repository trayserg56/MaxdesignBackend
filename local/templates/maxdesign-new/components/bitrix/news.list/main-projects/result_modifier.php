<?php

use Bitrix\Iblock\ElementTable;
use Bitrix\Iblock\SectionElementTable;
use Bitrix\Iblock\SectionTable;
use Bitrix\Main\ORM\Fields\ExpressionField;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */


// 1. Получаем все разделы первого уровня нужного инфоблока
$sectionsQuery = SectionTable::query()
    ->where('IBLOCK_ID', $arResult['ID'])
    ->where('DEPTH_LEVEL', 1)
    ->setSelect(['ID', 'NAME', 'LEFT_MARGIN', 'RIGHT_MARGIN'])
    ->setCacheTtl(3600); // кэшируем список разделов

$sections = $sectionsQuery->exec();

$arResult['CATEGORIES'] = [];

while ($section = $sections->fetch()) {
    // 2. Для каждого раздела первого уровня находим все его подразделы (включая его самого)
    $subSections = SectionTable::query()
        ->where('IBLOCK_ID', $arResult['ID'])
        ->where('LEFT_MARGIN', '>=', $section['LEFT_MARGIN'])
        ->where('RIGHT_MARGIN', '<=', $section['RIGHT_MARGIN'])
        ->addSelect('ID')
        ->exec()
        ->fetchAll();

    $subIds = array_column($subSections, 'ID');

    if (empty($subIds)) {
        $result[] = [
            'ID'    => $section['ID'],
            'NAME'  => $section['NAME'],
            'COUNT' => 0,
        ];
        continue;
    }

    // 3. Считаем уникальные активные элементы, привязанные к любому из этих подразделов
    $countQuery = SectionElementTable::query()
        ->registerRuntimeField('ELEMENT', [
            'data_type' => ElementTable::class,
            'reference' => [
                '=this.IBLOCK_ELEMENT_ID' => 'ref.ID',
            ],
            'join_type' => 'inner',
        ])
        ->whereIn('IBLOCK_SECTION_ID', $subIds)
        ->where('ELEMENT.ACTIVE', 'Y')
        ->addSelect(new ExpressionField('CNT', 'COUNT(DISTINCT %s)', ['IBLOCK_ELEMENT_ID']))
        ->exec();

    $row = $countQuery->fetch();
    $row['COUNT'] = $row ? (int) $row['CNT'] : 0;

    if (in_array($row['COUNT'], [11, 12, 13, 14], true)) {
        $section['COUNT'] = $row['COUNT'] . ' проектов';
    } else {
        $section['COUNT'] = match ($row['COUNT'] % 10) {
            1 => $row['COUNT'] . ' проект',
            2,3,4 => $row['COUNT'] . ' проекта',
            5,6,7,8,9,0 => $row['COUNT'] . ' проектов',
        };
    }

    $arResult['CATEGORIES'][] = $section;
}


$rsData = \Bitrix\Iblock\SectionTable::getList([
    'filter' => [
        'IBLOCK_ID' => $arResult['ID'],
        'ID' => array_column($arResult['ITEMS'], 'IBLOCK_SECTION_ID'),
    ],
    'select' => [
        'ID',
        'NAME',
    ],
    'cache' => [
        'ttl' => 3600,
    ]
]);

$sections = [];
while ($arData = $rsData->fetch()) {
    $sections[(int) $arData['ID']] = $arData['NAME'];
}

foreach ($arResult['ITEMS'] as $key => $item) {
    $arResult['ITEMS'][$key]['SECTION_NAME'] = $sections[(int) $item['IBLOCK_SECTION_ID']];
}
