<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

if (!$arResult['ITEMS']) {
    return;
}
?>
<div class="first-screen__media">
    <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
        <div class="first-screen__slide <?= $key === array_key_first($arResult['ITEMS']) ? 'is-active' : '' ?>"
             data-promo-video="<?= CFile::GetPath($item['PROPERTIES']['VIDEO_DETAIL']['VALUE']) ?: CFile::GetPath($item['PROPERTIES']['VIDEO']['VALUE']) ?>"
             data-tagline="<?= $item['PREVIEW_TEXT'] ?>"
             aria-hidden="true">
            <video class="first-screen__image" autoplay muted loop playsinline preload="metadata"
                   poster="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" aria-label="<?= $item['NAME'] ?>" width="1920"
                   height="965" data-video-url="<?= CFile::GetPath($item['PROPERTIES']['VIDEO']['VALUE']) ?>">
                <source type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        </div>
    <?php } ?>
    <button class="first-screen__nav first-screen__nav--prev js-first-screen-prev" type="button"
            aria-label="Предыдущий слайд">
        <svg class="swiper-arrow first-screen__nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
             fill="none" aria-hidden="true">
            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                  stroke-linejoin="round"></path>
        </svg>
    </button>
    <button class="first-screen__nav first-screen__nav--next js-first-screen-next" type="button"
            aria-label="Следующий слайд">
        <svg class="swiper-arrow first-screen__nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
             fill="none" aria-hidden="true">
            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4" stroke-linecap="round"
                  stroke-linejoin="round"></path>
        </svg>
    </button>
    <p class="first-screen__counter js-first-screen-counter" aria-live="polite">1/<?= count($arResult['ITEMS']) ?></p>
</div>
