<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<div class="team__carousel" data-swiper-container>
    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
         data-swiper-pagination="fraction" data-swiper-slides="auto"
         data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <article class="team-card team__card swiper-slide">
                    <div class="team-card__media"><img class="team-card__image" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                                       alt="<?= $item['NAME'] ?>" loading="lazy" decoding="async">
                    </div>
                    <div class="team-card__info"><h3 class="team-card__name"><?= $item['NAME'] ?></h3>
                        <p class="team-card__role"><?= $item['PREVIEW_TEXT'] ?></p></div>
                </article>
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
