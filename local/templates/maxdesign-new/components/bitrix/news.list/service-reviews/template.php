<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<div class="swiper swiper-horizontal swiper-backface-hidden" data-swiper=""
     data-swiper-pagination="custom">
    <div class="swiper-wrapper">
        <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <div class="swiper-slide">
                <div class="client-reviews__card">
                    <div class="client-reviews__quote-icon">
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#quote"></use>
                        </svg>
                    </div>
                    <p class="client-reviews__text"><?= $item['PREVIEW_TEXT'] ?></p></div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="client-reviews__pagination">
    <?php foreach ($arResult['ITEMS'] as $item) { ?>
        <button class="client-reviews__pag-btn" type="button"><img class="client-reviews__avatar"
                                                                   src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                                                   alt="<?= $item['NAME'] ?>">
            <div class="client-reviews__author-info"><span class="client-reviews__name"><?= $item['NAME'] ?></span><span
                    class="client-reviews__position"><?= $item['PROPERTIES']['POSITION']['VALUE'] ?></span></div>
        </button>
    <?php } ?>
</div>
