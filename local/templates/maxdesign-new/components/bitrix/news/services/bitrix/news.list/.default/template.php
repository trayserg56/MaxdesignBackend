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
<section class="services-list" data-filter-content>
    <div class="container">
        <div class="services-list__wrap">
            <?php foreach ($arResult['SECTIONS'] as $section) { ?>
                <div class="services-list__category <?= count($section['ITEMS']) === 1 ? 'services-list__category--paired' : '' ?>"
                     data-category="<?= $section['ID'] ?>">
                    <h2 class="services-list__title"><?= $section['NAME'] ?></h2>
                    <?php foreach ($section['ITEMS'] as $key => $item) {
                        $key++;
                        ?>
                        <div class="services-card">
                            <div class="services-card__img">
                                <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="Картинка: <?= $item['NAME'] ?>">
                            </div>
                            <div>
                                <div class="services-card__tag"><?= ($key < 10 ? '0' : '') . $key ?></div>
                                <h3 class="services-card__title"><?= $item['NAME'] ?></h3>
                                <div class="services-card__descr">
                                    <?= $item['PREVIEW_TEXT'] ?>
                                </div>
                                <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="button button--big button--secondary">Подробнее</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
