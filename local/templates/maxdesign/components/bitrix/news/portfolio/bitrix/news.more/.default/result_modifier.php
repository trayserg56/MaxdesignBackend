<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (CModule::IncludeModule('iblock')) {
    
    foreach($arResult['ITEMS'] as $cell => $arItem){
        if(!isFinish($arItem)){
            unset($arResult['ITEMS'][$cell]);
        }

        if(isset($_GET['GROUP_BY'])){
            // $arItem['NAME'] = 'жата';
        }

    }

}

function isFinish($arItem){
	return mb_strtolower($arItem["DISPLAY_PROPERTIES"]['STATUS']['VALUE']) == mb_strtolower('Завершен');
}