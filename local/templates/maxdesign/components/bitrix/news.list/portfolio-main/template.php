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

 <section id="slider-portfolio">
	<div class="slider-container">
		<div id="slider-carusel-2" class="owl-carousel">
			<?foreach($arResult['ITEMS'] as $arItem):?>
            	<div class="item">
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>">
						<div class="owl-slide" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')"></div>
					</a>
				</div>
			<?endforeach;?>
		</div>
	</div>
 </section>
