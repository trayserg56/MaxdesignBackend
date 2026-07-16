<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

?>

<div class="service-team__slider" data-swiper-container="">
    <div class="swiper swiper-horizontal swiper-backface-hidden" data-swiper=""
         data-swiper-nav="" data-swiper-space="20" data-swiper-pagination="fraction"
         data-swiper-slides="auto">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="swiper-slide" style="width: 339px; margin-right: 20px;">
                    <img class="swiper-slide__img glightbox" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['NAME'] ?>"
                         loading="lazy" decoding="async" data-gallery="projectGallery">
                    <h3 class="swiper-slide__title"><?= $item['NAME'] ?></h3>
                    <div class="swiper-slide__descr"><?= $item['PREVIEW_TEXT'] ?></div>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal">
        </div>
    </div>
    <div class="swiper-button-prev">
        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
             aria-hidden="true">
            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                  stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <div class="swiper-button-next">
        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
             aria-hidden="true">
            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                  stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
</div>
