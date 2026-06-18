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

	<div class="portfolio-container">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="portfolio-box">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<div class="portfolio-img">
					<img 
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
				</div>
				<div class="portfolio-info">
					<p><?=$arItem["NAME"]?></p>
					<div class="portfolio-like">
					<?=$arItem["DISPLAY_PROPERTIES"]['SQUARE']['VALUE']?> м2
					</div>
				</div>
			</a>
		</div>
		<?endforeach;?>
	</div>