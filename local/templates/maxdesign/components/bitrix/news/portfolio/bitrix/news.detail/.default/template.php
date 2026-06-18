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

<div class="fluid-header fluid-header-portfolio">
	<div class="portfolio-slider">
		<?foreach($arResult['DISPLAY_PROPERTIES']['SLIDER']['VALUE'] as $img):?>
			<?$file = CFile::ResizeImageGet($img, array('width'=>'1920', 'height'=>'1080'), BX_RESIZE_IMAGE_EXACT, true);?>
			<div class="portfolio-item fluid-bg" style="background-image: url('<?=$file['src']?>')">
			</div>
		<?endforeach;?>
	</div>
</div>

<div class="portfolio-detail" id="portfoli-viewer">
<!--    <div class="including">--><?//=$arResult["PROPERTIES"]["FLEXBLOCK"]["VALUE"];?><!--</div>-->
	<div class="portfolio-detail-container">
        <?if($APPLICATION->GetCurPage() == '/portfolio/dizayn-interera/gostinitsy-i-apart-oteli/dizayn-interera-apart-otelya-na-nab-leytenanta-shmidta'  or  $APPLICATION->GetCurPage() == '/portfolio/dizayn-interera/kvartiry/interer-elitnykh-apartamentov-v-zhk-royal-park'):?>

        <?elseif ($APPLICATION->GetCurPage() == '/portfolio/dizayn-interera/kvartiry/appartamenty-maggiolina-v-milane' ):?>
        <div class="container">
            <div class="descr descr-milan">
                <h1><?=$arResult["NAME"]?></h1>
                <br>
                <p><b>Место:</b> <?=$arResult["DISPLAY_PROPERTIES"]['ADDRESS']['VALUE'];?></p>
                <p><b>Площадь:</b> <?=$arResult["DISPLAY_PROPERTIES"]['SQUARE']['VALUE'];?> м2</p>
                <p><b>Стиль:</b> <?=$arResult["DISPLAY_PROPERTIES"]['STYLE']['VALUE'];?></p>
                <p><b>Автор проекта:</b> <?=$arResult["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'];?> </p>
                <br>
                <p><?=$arResult["DISPLAY_PROPERTIES"]['DETAIL']['VALUE']['TEXT'];?></p>
            </div>
        </div>
        <?else:?>
		<div class="descr">
			<h1><?=$arResult["NAME"]?></h1>
			<br>
			<p><b>Место:</b> <?=$arResult["DISPLAY_PROPERTIES"]['ADDRESS']['VALUE'];?></p>
			<p><b>Площадь:</b> <?=$arResult["DISPLAY_PROPERTIES"]['SQUARE']['VALUE'];?> м2</p>
			<p><b>Стиль:</b> <?=$arResult["DISPLAY_PROPERTIES"]['STYLE']['VALUE'];?></p>
			<p><b>Автор проекта:</b> <?=$arResult["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'];?> </p>
			<p><b>Детальное описание:</b> <?=$arResult["DISPLAY_PROPERTIES"]['DETAIL']['~VALUE']['TEXT'];?></p>
		</div>
        <?endif;?>



		<div class="gallery-row tester">

			<?echo($arResult["DETAIL_TEXT"]);?>

            <?if($arResult['PROPERTIES']['INCLUDING']['VALUE']):?>
                <?if($arResult['PROPERTIES']['INCLUDING']['VALUE'] == 'milan.php'):?>
                    <? $APPLICATION->IncludeFile('/include/milan.php', array(), array('MODE' => 'html')); ?>
                <?endif;?>
            <?endif;?>
		</div>

	</div>
</div>