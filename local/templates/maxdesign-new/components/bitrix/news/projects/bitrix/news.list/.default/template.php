<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

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
<div class="projects-page__catalog-section">
    <section class="home-project projects-page__catalog js-home-project">
        <div class="home-project__inner">
            <div class="home-project__grid-viewport">
                <div class="home-project__grid" data-pagination-container="projects">
                    <?php foreach ($arResult['ITEMS'] as $item) { ?>
                        <article class="home-project__card"><a class="home-project__card-link"
                                                               href="<?= $item['DETAIL_PAGE_URL'] ?>"
                                                               aria-label="<?= $item['NAME'] ?>">
                                <div class="home-project__media" style="--ratio: 74.6%;"><img
                                            class="home-project__image" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                            alt="<?= $item['NAME'] ?>" loading="eager" decoding="async"
                                            width="327" height="327"></div>
                                <div class="home-project__meta"><h3 class="home-project__card-title"><?= $item['NAME'] ?></h3>
                                    <p class="home-project__card-sub">
                                        <span class="home-project__card-year"><?= $item['PROPERTIES']['YEAR']['VALUE'] ?></span>
                                        <span
                                                class="home-project__card-sep"
                                                aria-hidden="true"></span><span
                                                class="home-project__card-cat"><?= $item['SECTION_NAME'] ?></span></p>
                                </div>
                            </a></article>
                    <?php } ?>
                </div>
            </div>
            <?= $arResult['NAV_STRING'] ?>
        </div>
    </section>
</div>
