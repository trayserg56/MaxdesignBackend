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

$firstItem = $arResult["ITEMS"][array_key_first($arResult["ITEMS"])];
unset($arResult["ITEMS"][array_key_first($arResult["ITEMS"])]);
?>
<?if($_GET['SORT_BY'] == "AUTHOR"):?>
	<?
		usort($arResult['ITEMS'], function($a, $b){
			return $a["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'] > $b["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'];
		})
	?>
<?endif?>
<div class="blog-page__posts" data-filter-content>
    <section class="blog-first-post">
        <div class="container">
            <article class="blog-first-post__card" data-category="<?= $firstItem['IBLOCK_SECTION_ID'] ?>">
                <a class="blog-first-post__link"
                                                                                   href="<?= $firstItem['DETAIL_PAGE_URL'] ?>"
                                                                                   aria-label="<?= $firstItem['NAME'] ?> — Читать">
                    <div class="blog-first-post__media"><img class="blog-first-post__image"
                                                             src="<?= $firstItem['PREVIEW_PICTURE']['SRC'] ?>" alt=""
                                                             loading="eager" decoding="async" width="860"
                                                             height="467"></div>
                    <div class="blog-first-post__content">
                        <div class="blog-first-post__body">
                            <div class="blog-first-post__meta">
                                <time class="blog-first-post__date" datetime="<?= str_replace('.', '-', $arResult['ACTIVE_FROM']) ?>"><?= str_replace('.', '-', $arResult['DISPLAY_ACTIVE_FROM']) ?></time>
                                <span class="blog-first-post__divider" aria-hidden="true"></span><span
                                        class="blog-first-post__category"><?= $firstItem['SECTION_NAME'] ?></span></div>
                            <h2 class="blog-first-post__title">
                                <span class="blog-first-post__title-line"><?= $firstItem['NAME'] ?></span>
<!--                                <span class="blog-first-post__title-line">--><?php //= $firstItem['PREVIEW_TEXT'] ?><!--</span>-->
                            </h2><span class="blog-first-post__more">Читать</span></div>
                    </div>
                </a></article>
        </div>
    </section>
    <section class="blog-posts-list">
        <div class="container">
            <div class="blog-posts-list__inner">
                <div class="blog-posts-list__grid">
                    <?php foreach($arResult['ITEMS'] as $arItem) { ?>
                        <article class="blog-posts-list__card" data-category="<?= $arItem['IBLOCK_SECTION_ID'] ?>"><a
                                    class="blog-posts-list__link" href="<?= $arItem['DETAIL_PAGE_URL'] ?>"
                                    aria-label="<?= $arItem['NAME'] ?> — Читать">
                                <div class="blog-posts-list__content">
                                    <div class="blog-posts-list__body">
                                        <div class="blog-posts-list__meta">
                                            <time class="blog-posts-list__date" datetime="<?= str_replace('.', '-', $arResult['ACTIVE_FROM']) ?>"><?= $arItem['DISPLAY_ACTIVE_FROM'] ?>
                                            </time>
                                            <span class="blog-posts-list__divider" aria-hidden="true"></span><span
                                                    class="blog-posts-list__category"><?= $arItem['SECTION_NAME'] ?></span></div>
                                        <div class="blog-posts-list__text"><h2 class="blog-posts-list__title">
                                                <?= $arItem['NAME'] ?></h2>
                                            <p class="blog-posts-list__excerpt"><?= $arItem['PREVIEW_TEXT'] ?></p></div>
                                        <span class="blog-posts-list__more">Читать</span></div>
                                </div>
                                <div class="blog-posts-list__media">
                                    <img class="blog-posts-list__image"
                                         src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt=""
                                                                         loading="eager" decoding="async"
                                                                         width="675" height="339"></div>
                            </a></article>
                    <?php } ?>
                </div>
                <?= $arResult['NAV_STRING'] ?>
            </div>
        </div>
    </section>
</div>
