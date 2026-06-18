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
<?if(count($arResult['ITEMS'])):?>
<div class="more-container">
	<p class="more-title">Посмотреть другие проекты</p>
	<div class="more-items">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<a  href="<?=$arItem['DETAIL_PAGE_URL']?>" class="more-item">
			<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" >
			<p class="more-item-title"><?=$arItem['NAME']?></p>
			<p class="more-item-address"><?=$arItem['DISPLAY_PROPERTIES']['ADDRESS']['VALUE']?></p>
		</a>
		<?endforeach;?>
</div>
</div>
<?endif?>