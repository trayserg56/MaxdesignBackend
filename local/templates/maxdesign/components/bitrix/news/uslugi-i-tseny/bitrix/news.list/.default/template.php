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
<section id="activities">
<div class="container">
<div class="activities-container">
<?
	// echo '<pre>';
    // var_dump($arResult['ITEMS']);
    // echo '/<pre>';
?>
<?foreach($arResult["ITEMS"] as $arItem):?>
<?if($arResult['SECTION'] == false && $arItem['IBLOCK_SECTION_ID']):?>
<?continue?>
<?endif?>
<?
	$cntImg = count($arItem['DISPLAY_PROPERTIES']['SLIDER_IMG']['FILE_VALUE']);
	if($cntImg === 2){
		$addClass = 'activities-nocar';
		$itemsClass = 'activities-img';
		$itemClass = 'activities-imgbox';
	} elseif( $cntImg === 0) {
		$addClass = 'activities-full';
		$itemsClass = '';
		$itemClass = '';
	} else {
		$addClass = '';
		$itemsClass = 'owl-carousel activities-slider';
		$itemClass = 'item';
	}
	?>
<div class="activities-row <?=$addClass?>">
	<div class="activities-text">
		<span><?=$arItem['NAME'];?></span>
		<p><?=$arItem['PREVIEW_TEXT']?></p>
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="btn">Подробнее</a>
	</div>
	<?if($cntImg > 0):?>
		<div class="<?=$itemsClass?>">
			<?foreach($arItem['DISPLAY_PROPERTIES']['SLIDER_IMG']['FILE_VALUE'] as $img):?>
				<div class="<?=$itemClass?>"><a href="#">
					<img src="<?=$img['SRC']?>" alt="" />
				</a></div>
			<?endforeach;?>
		</div>
	<?endif;?>
</div>
<?endforeach;?>
</div>
</div>
</section>
<section class="new-feedback">
	<div class="container">
		
	</div>
</section>