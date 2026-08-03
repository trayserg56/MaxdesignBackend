<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) {
    return;
}

$arTypesEx = CIBlockParameters::GetIBlockTypes();

$arIBlocks = [];
$iblockFilter = [
    'ACTIVE' => 'Y',
];
if (!empty($arCurrentValues['IBLOCK_TYPE']))
{
    $iblockFilter['TYPE'] = $arCurrentValues['IBLOCK_TYPE'];
}
if (isset($_REQUEST['site']))
{
    $iblockFilter['SITE_ID'] = $_REQUEST['site'];
}
$db_iblock = CIBlock::GetList(["SORT"=>"ASC"], $iblockFilter);
while($arRes = $db_iblock->Fetch())
{
    $arIBlocks[$arRes["ID"]] = "[" . $arRes["ID"] . "] " . $arRes["NAME"];
}

$arSorts = [
    "ASC"=>"По возрастанию",
    "DESC"=>"По убыванию",
];
$arSortFields = [
    "ID"=>"ID",
    "NAME"=>"Название",
    "ACTIVE_FROM"=>"Дата начала активности",
    "SORT"=>"Сортировка",
    "TIMESTAMP_X"=>"Дата последнего изменения",
];


$arTemplateParameters = array(
	"DISPLAY_DATE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_DATE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PICTURE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_PICTURE"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"DISPLAY_PREVIEW_TEXT" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_TEXT"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"USE_SHARE" => Array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_USE_SHARE"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"VALUE" => "Y",
		"DEFAULT" =>"N",
		"REFRESH"=> "Y",
	),
    'IBLOCK_TYPE_FILTERS' => [
        "PARENT" => "BASE",
        "NAME" => 'Фильтры: Тип инфоблока',
        "TYPE" => "LIST",
        "VALUES" => $arTypesEx,
        "DEFAULT" => "news",
        "REFRESH" => "Y",
    ],
    'IBLOCK_ID_FILTERS' => [
        "PARENT" => "BASE",
        "NAME" => 'Фильтры: ID инфоблока',
        "TYPE" => "LIST",
        "VALUES" => $arIBlocks,
        "DEFAULT" => '={$_REQUEST["ID"]}',
        "ADDITIONAL_VALUES" => "Y",
        "REFRESH" => "Y",
    ],
    "NEWS_COUNT_FILTERS" => [
        "PARENT" => "BASE",
        "NAME" => 'Фильтры: кол-во элементов',
        "TYPE" => "STRING",
        "DEFAULT" => "20",
    ],
    "SORT_BY1_FILTERS" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Фильтры: Сортировка по полю 1:',
        "TYPE" => "LIST",
        "DEFAULT" => "ACTIVE_FROM",
        "VALUES" => $arSortFields,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "SORT_ORDER1_FILTERS" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Фильтры: Тип сортировки 1:',
        "TYPE" => "LIST",
        "DEFAULT" => "DESC",
        "VALUES" => $arSorts,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "SORT_BY2_FILTERS" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Фильтры: Сортировка по полю 2:',
        "TYPE" => "LIST",
        "DEFAULT" => "SORT",
        "VALUES" => $arSortFields,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "SORT_ORDER2_FILTERS" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Фильтры: Тип сортировки 2:',
        "TYPE" => "LIST",
        "DEFAULT" => "ASC",
        "VALUES" => $arSorts,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "FILTER_NAME_FILTERS" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Фильтры: название переменной с фильтром',
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ],
    'IBLOCK_TYPE_SLIDER' => [
        "PARENT" => "BASE",
        "NAME" => 'Слайдер: Тип инфоблока',
        "TYPE" => "LIST",
        "VALUES" => $arTypesEx,
        "DEFAULT" => "news",
        "REFRESH" => "Y",
    ],
    'IBLOCK_ID_SLIDER' => [
        "PARENT" => "BASE",
        "NAME" => 'Слайдер: ID инфоблока',
        "TYPE" => "LIST",
        "VALUES" => $arIBlocks,
        "DEFAULT" => '={$_REQUEST["ID"]}',
        "ADDITIONAL_VALUES" => "Y",
        "REFRESH" => "Y",
    ],
    "NEWS_COUNT_SLIDER" => [
        "PARENT" => "BASE",
        "NAME" => 'Слайдер: кол-во элементов',
        "TYPE" => "STRING",
        "DEFAULT" => "20",
    ],
    "SORT_BY1_SLIDER" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Слайдер: Сортировка по полю 1:',
        "TYPE" => "LIST",
        "DEFAULT" => "ACTIVE_FROM",
        "VALUES" => $arSortFields,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "SORT_ORDER1_SLIDER" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Слайдер: Тип сортировки 1:',
        "TYPE" => "LIST",
        "DEFAULT" => "DESC",
        "VALUES" => $arSorts,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "SORT_BY2_SLIDER" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Слайдер: Сортировка по полю 2:',
        "TYPE" => "LIST",
        "DEFAULT" => "SORT",
        "VALUES" => $arSortFields,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "SORT_ORDER2_SLIDER" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Слайдер: Тип сортировки 2:',
        "TYPE" => "LIST",
        "DEFAULT" => "ASC",
        "VALUES" => $arSorts,
        "ADDITIONAL_VALUES" => "Y",
    ],
    "FILTER_NAME_SLIDER" => [
        "PARENT" => "DATA_SOURCE",
        "NAME" => 'Слайдер: название переменной с фильтром',
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ],
);

if ($arCurrentValues["USE_SHARE"] == "Y")
{
	$arTemplateParameters["SHARE_HIDE"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_HIDE"),
		"TYPE" => "CHECKBOX",
		"VALUE" => "Y",
		"DEFAULT" => "N",
	);

	$arTemplateParameters["SHARE_TEMPLATE"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_TEMPLATE"),
		"DEFAULT" => "",
		"TYPE" => "STRING",
		"MULTIPLE" => "N",
		"COLS" => 25,
		"REFRESH"=> "Y",
	);
	
	if (strlen(trim($arCurrentValues["SHARE_TEMPLATE"])) <= 0)
		$shareComponentTemlate = false;
	else
		$shareComponentTemlate = trim($arCurrentValues["SHARE_TEMPLATE"]);

	include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/components/bitrix/main.share/util.php");

	$arHandlers = __bx_share_get_handlers($shareComponentTemlate);

	$arTemplateParameters["SHARE_HANDLERS"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SYSTEM"),
		"TYPE" => "LIST",
		"MULTIPLE" => "Y",
		"VALUES" => $arHandlers["HANDLERS"],
		"DEFAULT" => $arHandlers["HANDLERS_DEFAULT"],
	);

	$arTemplateParameters["SHARE_SHORTEN_URL_LOGIN"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_LOGIN"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	);
	
	$arTemplateParameters["SHARE_SHORTEN_URL_KEY"] = array(
		"NAME" => GetMessage("T_IBLOCK_DESC_NEWS_SHARE_SHORTEN_URL_KEY"),
		"TYPE" => "STRING",
		"DEFAULT" => "",
	);
}

?>
