<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<section class="partnership-targets">
    <div class="container">
        <div class="partnership-targets__header">
            <div class="partnership-targets__tag"><?= $arResult['DESCRIPTION']['NAME'] ?></div>
            <h2 class="partnership-targets__title"><?= $arResult['DESCRIPTION']['PREVIEW_TEXT'] ?></h2></div>
        <div class="partnership-targets__slider" data-swiper-container>
            <div class="swiper" data-swiper data-swiper-nav data-swiper-space="60"
                 data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 10}}">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                        <div class="swiper-slide"><h3 class="swiper-slide__title"><?= $item['NAME'] ?></h3>
                            <div class="swiper-slide__descr"><?= $item['PREVIEW_TEXT'] ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
            <?php if (count($arResult['ITEMS']) > 4) { ?>
                <div class="swiper-button-prev swiper-button-disabled">
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
            <?php } ?>
        </div>
    </div>
</section>


