<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>

<section class="team-page">
    <div class="container">
        <div class="tabs" data-tabs="team-tabs">
            <?php foreach ($arResult['SECTIONS'] as $section) { ?>
                <button class="button button--middle button-tab" data-tab="<?= $section['ID'] ?>">
                    <?= $section['NAME'] ?>
                </button>
            <?php } ?>
        </div>
        <div class="tabs-contents" data-tabs-contents="team-tabs">
            <?php foreach ($arResult['SECTIONS'] as $section) { ?>
                <div class="tab-content" data-tab-content="<?= $section['ID'] ?>">
                    <div class="slider-team">
                        <div class="slider-team__wrap">
                            <div class="slider-team__head"><h2 class="slider-team__title"><?= $section['NAME'] ?></h2>
                                <div class="slider-team__descr"><?= $section['DESCRIPTION'] ?></div>
                            </div>
                            <div class="slider-team__slider" data-swiper-container>
                                <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                                     data-swiper-pagination="fraction" data-swiper-slides="auto"
                                     data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($section['ITEMS'] as $item) { ?>
                                            <div class="swiper-slide">
                                                <img class="swiper-slide__img"
                                                   src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                                   alt="<?= $item['NAME'] ?>" loading="lazy"
                                                   decoding="async">
                                                <h3 class="swiper-slide__title"><?= $item['NAME'] ?></h3>
                                                <div class="swiper-slide__descr"><?= $item['PREVIEW_TEXT'] ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                                <div class="swiper-button-prev">
                                    <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                         fill="none" aria-hidden="true">
                                        <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                              stroke-width="4" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="swiper-button-next">
                                    <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                         fill="none" aria-hidden="true">
                                        <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                              stroke-width="4" stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="achievements-team">
                        <ul class="achievements-team__list">
                            <?php foreach ($section['ACHIEVEMENT'] as $xml => $value) { ?>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#<?= $xml ?>"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text"><?= $value ?></div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
