<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
?>
<section class="completed-projects">
    <div class="container">
        <div class="completed-projects__wrap">
            <div class="completed-projects__head"><h2 class="completed-projects__title">Реализованные
                    проекты</h2>
                <a href="/portfolio/" class="button button--middle">Смотреть все</a>
            </div>
            <div class="completed-projects__slider" data-swiper-container="">
                <div class="swiper swiper-horizontal swiper-backface-hidden"
                     data-swiper=""
                     data-swiper-nav=""
                     data-swiper-space="20"
                     data-swiper-pagination="fraction"
                     data-swiper-slides="auto">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                            <div class="swiper-slide" style="width: 267.2px; margin-right: 20px;">
                                <img class="swiper-slide__img" src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                     alt="<?= $item['PREVIEW_PICTURE']['SRC'] ?>"
                                     loading="lazy" decoding="async">
                                <h3 class="swiper-slide__title">
                                    <?= mb_substr($item['NAME'], 0, 45) . (mb_strlen($item['NAME']) > 45 ? '...' : '') ?>
                                </h3>
                                <div class="swiper-slide__footer">
                                    <?php if ($arParams['SHOW_YEAR_AND_SECTION'] && $item['PROPERTIES']['YEAR']['VALUE']) { ?>
                                        <div class="swiper-slide__year"><?= $item['PROPERTIES']['YEAR']['VALUE'] ?></div>
                                    <?php } ?>

                                    <?php if ($arParams['SHOW_YEAR_AND_SECTION'] && $item['SECTION_NAME']) { ?>
                                        <div class="swiper-slide__category"><?= $item['SECTION_NAME'] ?></div>
                                    <?php } ?>

                                    <?php if (!$arParams['SHOW_YEAR_AND_SECTION'] && $item['PROPERTIES']['ADDRESS']['VALUE']) { ?>
                                        <div class="swiper-slide__city"><?= $item['PROPERTIES']['ADDRESS']['VALUE'] ?></div>
                                    <?php } ?>

                                    <?php if (!$arParams['SHOW_YEAR_AND_SECTION'] && $item['PROPERTIES']['SQUARE']['VALUE']) { ?>
                                        <div class="swiper-slide__square"><?= $item['PROPERTIES']['SQUARE']['VALUE'] ?> м2</div>
                                    <?php } elseif (!$arParams['SHOW_YEAR_AND_SECTION'] && $item['PROPERTIES']['SQUARE_OBJECT']['VALUE']) { ?>
                                        <div class="swiper-slide__square"><?= $item['PROPERTIES']['SQUARE_OBJECT']['VALUE'] ?> м2</div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"></div>
                </div>
                <div class="swiper-button-prev">
                    <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                         fill="none"
                         aria-hidden="true">
                        <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="swiper-button-next">
                    <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                         fill="none"
                         aria-hidden="true">
                        <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                              stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
            </div>
            <div class="completed-projects__footer">
                <a href="/portfolio/" class="button button--middle">Смотреть все</a>
            </div>
        </div>
    </div>
</section>

