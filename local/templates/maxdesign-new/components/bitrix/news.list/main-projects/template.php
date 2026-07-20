<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

?>
<section class="home-project js-home-project home-project--no-expand is-collapsed" id="projects" aria-labelledby="projects-heading">
    <div class="home-project__inner"><h2 class="home-project__title" id="projects-heading">Проекты</h2>
        <div class="home-project__tabs" role="tablist" aria-label="Категории проектов">
            <span
                    class="home-project__tab-separator" aria-hidden="true"></span>
            <?php foreach ($arResult['CATEGORIES'] as $item) { ?>
                <a href="/portfolio/?type=<?= $item['NAME'] ?>" class="home-project__tab" type="button" role="tab" aria-selected="false"><span
                            class="home-project__tab-label"><?= $item['NAME'] ?></span>
                    <span class="home-project__tab-count"><?= $item['COUNT'] ?></span>
                </a>
                <span class="home-project__tab-separator" aria-hidden="true"></span>
            <?php } ?>

        </div>
        <div class="home-project__grid-viewport">
            <div class="home-project__grid" data-pagination-container="projects-main">
                <?php foreach ($arResult['ITEMS'] as $item) { ?>
                    <article class="home-project__card"><a class="home-project__card-link" href="<?= $item['DETAIL_PAGE_URL'] ?>"
                                                           aria-label="<?= $item['NAME'] ?>">
                            <div class="home-project__media" style="--ratio: <?= $item['PROPERTIES']['RATIO']['VALUE'] ?: '74.6' ?>%;">
                                <img
                                    class="home-project__image" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                    alt="<?= $item['NAME'] ?>" loading="eager" decoding="async" width="327"
                                    height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title"><?= $item['NAME'] ?></h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year"><?= $item['PROPERTIES']['YEAR']['VALUE'] ?></span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat"><?= $item['SECTION_NAME'] ?></span></p></div>
                        </a></article>
                <?php } ?>
            </div>
        </div>
        <?= $arResult['NAV_STRING'] ?>
    </div>
</section>
