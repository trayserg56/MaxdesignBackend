<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
?>
<div class="projects-page__featured" data-swiper-container>
    <div class="swiper" data-swiper data-swiper-nav data-swiper-pagination="fraction"
         data-swiper-loop="true" data-swiper-slides="1">
        <div class="swiper-wrapper">
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
                <div class="swiper-slide">
                    <article class="projects-page__featured-card">
                        <div class="projects-page__featured-media">
                            <?php if ($item['PROPERTIES']['VIDEO']['VALUE']) { ?>
                                <video class="projects-page__featured-img" autoplay muted loop playsinline
                                       preload="auto"
                                       aria-label="Дизайн офиса студии maxdesign в Санкт-Петербурге"
                                       data-video-url="<?= \CFile::GetPath($item['PROPERTIES']['VIDEO']['VALUE']) ?>">
                                    <source type="video/mp4" src="">
                                    Ваш браузер не поддерживает видео.
                                </video>
                            <?php } else { ?>
                                <img class="projects-page__featured-img"
                                     src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                     alt="<?= $item['NAME'] ?>"
                                     loading="eager" decoding="async">
                            <?php } ?>

                            <div class="projects-page__featured-overlay" aria-hidden="true"></div>
                            <div class="projects-page__featured-content"><h2
                                        class="projects-page__featured-title"><?= $item['NAME'] ?></h2>
                                <p class="projects-page__featured-subtitle"><?= $item['PREVIEW_TEXT'] ?></p></div>
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="swiper-button-prev" type="button" aria-label="Предыдущий слайд">
        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
             aria-hidden="true">
            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                  stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
    <div class="swiper-button-next" type="button" aria-label="Следующий слайд">
        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
             aria-hidden="true">
            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                  stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </div>
</div>
