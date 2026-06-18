<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (CModule::IncludeModule('iblock')) {
    
    foreach($arResult['ITEMS'] as $cell => $arItem){
//        if(!isFinish($arItem)){
//            unset($arResult['ITEMS'][$cell]);
//        }else{
            if($arItem['PREVIEW_PICTURE']){
                $file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>350, 'height'=>350), BX_RESIZE_IMAGE_EXACT, true);
                $arResult['ITEMS'][$cell]['PREVIEW_PICTURE']['SRC'] = $file['src'];
            }
//        }


        if(isset($_GET['GROUP_BY'])){
            // $arItem['NAME'] = 'жата';
        }

    }

}

function isFinish($arItem){
	return mb_strtolower($arItem["DISPLAY_PROPERTIES"]['STATUS']['VALUE']) == mb_strtolower('Завершен');
}