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
        <div class="first-screen__slide <?= $key === array_key_first($arResult['ITEMS']) ? 'is-active' : '' ?>" aria-hidden="true">
            <video class="first-screen__image" autoplay muted loop playsinline preload="metadata"
                   poster="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" aria-label="<?= $item['NAME'] ?>" width="1920"
                   height="965" data-video-url="<?= \CFile::GetPath($item['PROPERTIES']['VIDEO']['VALUE']) ?>">
                <source type="video/mp4">
                Ваш браузер не поддерживает видео.
            </video>
        </div>
    <?php } ?>
    <button class="first-screen__nav first-screen__nav--prev js-first-screen-prev" type="button"
            aria-label="Предыдущий слайд">
        <svg class="first-screen__nav-icon">
            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#right-arrow"></use>
        </svg>
    </button>
    <button class="first-screen__nav first-screen__nav--next js-first-screen-next" type="button"
            aria-label="Следующий слайд">
        <svg class="first-screen__nav-icon">
            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#right-arrow"></use>
        </svg>
    </button>
    <p class="first-screen__counter js-first-screen-counter" aria-live="polite">1/<?= count($arResult['ITEMS']) ?></p>
</div>
