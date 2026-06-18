<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
usort($arResult['ITEMS'], function($a, $b){
	return $a["DISPLAY_PROPERTIES"]['YEAR']['VALUE'] < $b["DISPLAY_PROPERTIES"]['YEAR']['VALUE'];
});
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?if( mb_strtolower($arItem["DISPLAY_PROPERTIES"]['STATUS']['VALUE']) != mb_strtolower('Завершен')):?>
<tr>
<?else:?>
<tr class="new-refrence-tr" data-href="<?=$arItem['DETAIL_PAGE_URL']?>">
<?endif;?>
	<td>
		<?=$arItem['NAME']?>
	</td>
	<td>
		<?=$arItem["DISPLAY_PROPERTIES"]['SQUARE']['VALUE']?>
	</td>
	<td>
		<?=$arItem["DISPLAY_PROPERTIES"]['ADDRESS']['VALUE']?>
	</td>
	<td>
		<?=$arItem["DISPLAY_PROPERTIES"]['YEAR']['VALUE']?>
	</td>
	<td>
	<?=$arItem["DISPLAY_PROPERTIES"]['TYPE']['VALUE']?>
	</td>
	<td>
	<?=$arItem["DISPLAY_PROPERTIES"]['STYLE']['VALUE']?>
	</td>
</tr>
<?endforeach;?>