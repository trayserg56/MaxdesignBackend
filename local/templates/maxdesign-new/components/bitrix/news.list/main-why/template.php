<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<div class="home-why__list">
    <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
        <article class="home-why__item"><p class="home-why__number"><?= (++$key < 10 ? '0' : '') . $key ?></p>
            <h3 class="home-why__item-title"><?= $item['~NAME'] ?></h3>
            <p class="home-why__item-text"><?= $item['PREVIEW_TEXT'] ?></p></article>
    <?php } ?>
</div>
<div class="home-why__slider" data-swiper-container>
    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="16"
         data-swiper-pagination="fraction" data-swiper-slides="auto"
         data-swiper-breakpoints="{&quot;768&quot;: {&quot;spaceBetween&quot;: 20}}">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                <div class="swiper-slide">
                    <article class="home-why__item"><p class="home-why__number"><?= (++$key < 10 ? '0' : '') . $key ?></p>
                        <h3 class="home-why__item-title"><?= $item['~NAME'] ?></h3>
                        <p class="home-why__item-text"><?= $item['PREVIEW_TEXT'] ?></p></article>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="home-why__nav">
        <div class="swiper-button-prev">
            <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                 aria-hidden="true">
                <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                      stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next">
            <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                 aria-hidden="true">
                <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                      stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
    </div>
</div>
