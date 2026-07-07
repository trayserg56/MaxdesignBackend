<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<div class="service__carousel" data-swiper-container>
    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="16"
         data-swiper-pagination="fraction" data-swiper-slides="auto"
         data-swiper-breakpoints="{&quot;768&quot;: {&quot;spaceBetween&quot;: 20}, &quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $key => $item) {
                $key++; ?>
                <article class="service-card service__card swiper-slide">
                    <a class="service-card__link"
                        href="<?= $item['DETAIL_PAGE_URL'] ?>"
                        aria-label="<?= $item['NAME'] ?>">
                        <img
                            src="<?= \CFile::ResizeImageGet($item['PREVIEW_PICTURE'], [
                                'width' => 400,
                                'height' => 400,
                            ], BX_RESIZE_IMAGE_EXACT)['src'] ?>"
                            alt="<?= $item['NAME'] ?>"
                            class="service-cart__image"
                            loading="lazy"
                            decoding="async"
                        >
                        <div class="service-card__overlay"><p class="service-card__count"><span
                                        class="service-card__count-current"><?= ($key < 10 ? '0' : '') . $key ?>/</span><span
                                        class="service-card__count-total"><?= (count($arResult['ITEMS']) < 10 ? '0' : '') . count($arResult['ITEMS']) ?></span></p>
                            <h3 class="service-card__name"><?= $item['NAME'] ?></h3></div>
                    </a></article>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
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
