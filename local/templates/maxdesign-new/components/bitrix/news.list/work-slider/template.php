<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<section class="work-slider" aria-labelledby="work-slider-heading" data-work-slider data-swiper-container
         data-swiper-nav-theme="dark">
    <div class="work-slider__layout">
        <div class="work-slider__content"><p class="work-slider__label" id="work-slider-heading">общественная
                деятельность</p>
            <div class="swiper" data-swiper data-swiper-nav data-swiper-space="16" data-swiper-slides="auto"
                 data-swiper-grab-cursor="true"
                 data-swiper-breakpoints="{&quot;768&quot;: {&quot;spaceBetween&quot;: 20}, &quot;1024&quot;: {&quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 0}}">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                        <div class="swiper-slide" data-work-slider-image="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                             data-work-slider-alt="<?= $item['PREVIEW_PICTURE']['DESCRIPTION'] ?>"><h3
                                    class="work-slider__title"><span class="work-slider__title-desktop"><?= $item['~NAME'] ?></span><span
                                        class="work-slider__title-mobile"><?= $item['PROPERTIES']['MOBILE_NAME']['~VALUE'] ?></span>
                            </h3>
                            <p class="work-slider__text"><?= $item['PREVIEW_TEXT'] ?></p></div>
                    <?php } ?>
                </div>
            </div>
            <div class="work-slider__controls">
                <div class="work-slider__paging"><p class="work-slider__fraction" aria-live="polite"><span
                                class="work-slider__current" data-work-slider-current>1</span><span
                                class="work-slider__sep">/</span><span class="work-slider__total"
                                                                       data-work-slider-total><?= count($arResult['ITEMS']) ?></span></p>
                    <div class="work-slider__progress" aria-hidden="true"><span
                                class="work-slider__progress-bar" data-work-slider-progress></span></div>
                </div>
                <div class="work-slider__arrows">
                    <button class="swiper-button-prev" type="button" aria-label="Предыдущий слайд">
                        <svg class="work-slider__arrow-icon work-slider__arrow-icon--md"
                             xmlns="http://www.w3.org/2000/svg" width="36" height="15" viewBox="0 0 36 15"
                             fill="none" aria-hidden="true">
                            <path d="M35.5 7.5H0.5M7.5 0.5L0.5 7.5L7.5 14.5" stroke="currentColor"
                                  stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="work-slider__arrow-icon work-slider__arrow-icon--hd"
                             xmlns="http://www.w3.org/2000/svg" width="16" height="40" viewBox="0 0 16 40"
                             fill="none" aria-hidden="true">
                            <path d="M13.7656 2.0008L2.00092 19.6479L13.7656 37.2949" stroke="currentColor"
                                  stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <button class="swiper-button-next" type="button" aria-label="Следующий слайд">
                        <svg class="work-slider__arrow-icon work-slider__arrow-icon--md"
                             xmlns="http://www.w3.org/2000/svg" width="36" height="15" viewBox="0 0 36 15"
                             fill="none" aria-hidden="true">
                            <path d="M0.5 7.5L35.5 7.5M28.5 14.5L35.5 7.5L28.5 0.5" stroke="currentColor"
                                  stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <svg class="work-slider__arrow-icon work-slider__arrow-icon--hd"
                             xmlns="http://www.w3.org/2000/svg" width="16" height="40" viewBox="0 0 16 40"
                             fill="none" aria-hidden="true">
                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="work-slider__media"><img class="work-slider__image" data-work-slider-media
                                             src=""
                                             alt="" width="1920" height="1930"
                                             loading="lazy" decoding="async"></div>
    </div>
</section>
