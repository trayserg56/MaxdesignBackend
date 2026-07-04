<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */

$this->setFrameMode(true);
?>
<section class="completed-projects post-completed-projects">
    <div class="container">
        <div class="completed-projects__wrap">
            <div class="completed-projects__head"><h2 class="completed-projects__title">Другие статьи</h2></div>
            <div class="completed-projects__slider" data-swiper-container>
                <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                     data-swiper-pagination="fraction" data-swiper-slides="auto"
                     data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 5, &quot;spaceBetween&quot;: 20}}">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult['ITEMS'] as $item) { ?>
                            <div class="swiper-slide"><img class="swiper-slide__img" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                                           alt="<?= strip_tags($item['~NAME']) ?>"
                                                           loading="lazy" decoding="async">
                                <h3 class="swiper-slide__title"><?= $item['~NAME'] ?></h3>
                                <div class="swiper-slide__footer">
                                    <time class="swiper-slide__city"><?= $item['DISPLAY_ACTIVE_FROM'] ?></time>
                                    <div class="swiper-slide__square"><?= $item['SECTION_NAME'] ?></div>
                                </div>
                            </div>
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
            <div class="completed-projects__footer">
                <a href="/blog/" class="button">Смотреть все</a>
            </div>
        </div>
    </div>
</section>
