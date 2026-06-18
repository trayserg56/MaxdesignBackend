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
<section id="portfoliopage">

    <div class="container">

        <? if($APPLICATION->GetCurPage() == '/'): ?>
        
        <?else:?>
        <h1 class="services__title common-title">Реализованные проекты</h1>
        <?endif;?>

        <?if(isset($_GET['GROUP_BY'])):?>
        <?
            $type = $_GET['GROUP_BY'];
            $res = [];
            foreach($arResult['ITEMS'] as $arItem){
                    if(!array_key_exists($arItem["DISPLAY_PROPERTIES"][$type]['VALUE'], $res)){
                        $res[$arItem["DISPLAY_PROPERTIES"][$type]['VALUE']] = array();
                    }
                    array_push($res[$arItem["DISPLAY_PROPERTIES"][$type]['VALUE']], $arItem);
            }
            if ($type == "YEAR"){
                $reversed = $res;
                ksort($reversed);
                $res = array_reverse($reversed, true);
            } else {
                ksort($res);
            }
        ?>
        <?foreach($res as $type => $arItems):?>
        <div class="portfolio-wrapper">
        <div class="sort-val">
            <?=$type;?>
        </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row">
                <?foreach($arItems as $arItem):?>
                <div class="portfolio-col">
                    <div class="portfolio-box m-0 w-100 h-unset">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                <div class="portfolio-img">
                                <img data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" src=""class="lazy" />
                                </div>
                                <div class="portfolio-info r--100">
                                    <p><?=$arItem['NAME']?></p>
                                    <div class="portfolio-like"><?=$arItem["DISPLAY_PROPERTIES"]['SQUARE']['VALUE']?> м2</div>
                                </div>
                    </a>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </div>
        <?endforeach;?>
        <?else:?>
        <div class="portfolio-wrapper">
            <div class="row">

                <?foreach($arResult['ITEMS'] as $arItem):?>
                <div class="portfolio-col">
                    <div class="portfolio-box m-0 w-100 h-unset">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                                    <div class="portfolio-img">
                                    <img
                                    data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                                    width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                                    height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                                    alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                                    title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                                    src=""
                                class="lazy"
                                    />
                                    </div>
                                    <div class="portfolio-info r--100">
                                        <p><?=$arItem['NAME']?></p>
                                        <div class="portfolio-like"><?=$arItem["DISPLAY_PROPERTIES"]['SQUARE']['VALUE']?> м2</div>
                                    </div>
                        </a>
                    </div>
                </div>
                <?endforeach;?>
            </div>
        </div>
        <?endif;?>
    </div>
</section>
