<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH."/css/imgslider.css"?>">
<div class="portfolio-detail" id="portfoli-viewer">
    <div class="fluid-header fluid-header-portfolio">
        <div class="portfolio-slider">
            <?foreach($arResult['DISPLAY_PROPERTIES']['SLIDER']['VALUE'] as $img):?>
                <?$file = CFile::ResizeImageGet($img, array('width'=>'1920', 'height'=>'1080'), BX_RESIZE_IMAGE_EXACT, true);?>
                <div class="portfolio-item fluid-bg" style="background-image: url('<?=$file['src']?>')">
                    <div class="portfolio-detail-container">
                        <div class="portfolio-detail__head-content">
                            <?if($arResult['PROPERTIES']['YEAR']['VALUE']):?>
                                <div class="portfolio-detal__date"><?=$arResult['PROPERTIES']['YEAR']['VALUE']?></div>
                            <?endif;?>
                            <h1><?=$arResult["NAME"]?></h1>
                            <div class="portfolio-detal__preview"><?=$arResult["PREVIEW_TEXT"]?></div>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>

    <div class="portfolio-detail-container">
        <div class="descr !descr-milan">
            <?if($arResult["DISPLAY_PROPERTIES"]['ADDRESS']['VALUE']):?>
                <p><b>Место:</b> <?=$arResult["DISPLAY_PROPERTIES"]['ADDRESS']['VALUE'];?></p>
            <?endif;?>
            <?if($arResult["DISPLAY_PROPERTIES"]['SQUARE']['VALUE']):?>
                <p><b>Площадь:</b> <?=$arResult["DISPLAY_PROPERTIES"]['SQUARE']['VALUE'];?> м2</p>
            <?endif;?>
            <?if($arResult["DISPLAY_PROPERTIES"]['STYLE']['VALUE']):?>
                <p><b>Стиль:</b> <?=$arResult["DISPLAY_PROPERTIES"]['STYLE']['VALUE'];?></p>
            <?endif;?>
            <?if($arResult["DISPLAY_PROPERTIES"]['TYPE']['VALUE']):?>
                <p><b>Тип:</b> <?=$arResult["DISPLAY_PROPERTIES"]['TYPE']['VALUE'];?> </p>
            <?endif;?>
            <?if($arResult["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']):?>
                <p><b>Автор проекта:</b> <?=$arResult["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'];?> </p>
            <?endif;?>

            <?if($arResult["DISPLAY_PROPERTIES"]['DETAIL']['VALUE']):?>
                <p><?=$arResult["DISPLAY_PROPERTIES"]['DETAIL']['~VALUE']['TEXT'];?></p>
            <?endif;?>
        </div>

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
<script>

</script>