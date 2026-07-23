<?php

use Bitrix\Main\Page\Asset;
use Bitrix\Main\Web\Json;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

try {
    $detailPage = Json::decode($arResult['PROPERTIES']['DETAIL_PAGE']['~VALUE'])['blocks'];
} catch (Exception $e) {
    $detailPage = [];
}

if ($detailPage[0]['name'] === 'htag' && $detailPage[0]['type'] === 'h1' && $detailPage[0]['value']) {
    $subtitle = $detailPage[0]['value'];
    unset($detailPage[0]);
}

if ($detailPage[1]['name'] === 'complex_subtitle' && $detailPage[1]['textfield']['value']) {
    $subtitle = $detailPage[1]['textfield']['value'];
    unset($detailPage[1]);
}

if ($detailPage[2]['name'] === 'complex_award') {
    $award = $detailPage[2];
    unset($detailPage[2]);
}

if ($arResult['PROPERTIES']['OLD_DESIGN']['VALUE']) {
    $stylesPath = SITE_TEMPLATE_PATH . '/assets/old-styles/';
    Asset::getInstance()->addCss($stylesPath . 'jquery.mmenu.css');
    Asset::getInstance()->addCss($stylesPath . 'reveal.css');
    Asset::getInstance()->addCss($stylesPath . 'remodal.css');
    Asset::getInstance()->addCss($stylesPath . 'lity.css');
    Asset::getInstance()->addCss($stylesPath . 'owl.carousel.css');
    Asset::getInstance()->addCss($stylesPath . 'viewer.min.css');
    Asset::getInstance()->addCss($stylesPath . 'style.css');
    Asset::getInstance()->addCss($stylesPath . 'responsive.css');
    Asset::getInstance()->addCss($stylesPath . 'md.css');
    Asset::getInstance()->addCss($stylesPath . 'portfolio.css');
    Asset::getInstance()->addCss($stylesPath . 'projects-detail.css');
    Asset::getInstance()->addCss($stylesPath . 'projects-new-detail.css');
    ?>
    <style>.slider {
            width: 100%;
            height: auto;
            padding: 0;
            position: relative
        }

        .slider .right.image {
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0
        }

        .slider .left.image {
            position: relative;
            z-index: 2;
            border-right: 3px solid #fff;
            margin-right: -5px;
            overflow: hidden
        }

        .slider .instruction {
            position: absolute;
            top: 50%;
            z-index: 1000;
            width: 95%
        }

        .slider .instruction p {
            background: #fff;
            display: inline;
            padding: 1%;
            font-size: 1em;
            text-transform: uppercase
        }</style>
    <div class="portfolio-detail" id="portfoli-viewer">
        <div class="fluid-header fluid-header-portfolio">
            <div class="portfolio-slider">
                <div class="portfolio-item fluid-bg"
                     style="background-image: url('<?= $arResult['DETAIL_PICTURE']['SRC'] ?: $arResult['PREVIEW_PICTURE']['SRC'] ?>')">
                    <div class="portfolio-detail-container">
                        <div class="portfolio-detail__head-content">
                            <div class="portfolio-detal__date"><?= $arResult['PROPERTIES']['YEAR']['VALUE'] ?></div>
                            <h1><?= $arResult['NAME'] ?></h1>
                            <div class="portfolio-detal__preview"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-detail-container">
            <div class="descr !descr-milan">
                <p><b>Место:</b> <?= $arResult['PROPERTIES']['ADDRESS']['VALUE'] ?></p>
                <p><b>Площадь:</b> <?= $arResult['PROPERTIES']['SQUARE']['VALUE'] ?> м2</p>
                <p><b>Стиль:</b> <?= $arResult['PROPERTIES']['STYLE']['VALUE'] ?></p>
                <p><b>Тип:</b> <?= $arResult['PROPERTIES']['TYPE']['VALUE'] ?> </p>
                <p><b>Автор проекта:</b> <?= $arResult['PROPERTIES']['AUTHOR']['VALUE'] ?> </p>
            </div>
            <?= $arResult['~DETAIL_TEXT']; ?>
        </div>
    </div>
    <?php
    return;
}
?>
<section class="project-hero">
    <div class="project-hero__main">
        <div class="project-hero__media"><img class="project-hero__image glightbox" data-gallery="projectGallery"
                                              src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                                              alt="<?= $arResult['NAME'] ?>" width="1920" height="967"
                                              loading="eager" decoding="async"></div>
        <div class="project-hero__overlay">
            <div class="project-hero__content"><h1 class="project-hero__title">
                    <?= $h1 ?? $arResult['NAME'] ?>
                </h1>
                <?php if (isset($subtitle)) { ?>
                    <p class="project-hero__subtitle"><?= $subtitle ?></p>
                <?php } ?>
            </div>
            <?php if (isset($award)) { ?>
                <div class="project-hero__award">
                    <img class="project-hero__award-logo"
                         src="<?= $award['image']['file']['ORIGIN_SRC'] ?>" alt="<?= $award['textfield']['value'] ?>"
                         width="85" height="40" loading="lazy" decoding="async">
                    <div class="project-hero__award-text"><p
                                class="project-hero__award-title"><?= $award['textfield']['value'] ?></p>
                        <p class="project-hero__award-status"><?= $award['textfield1']['value'] ?></p></div>
                </div>
            <?php } ?>
        </div>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:breadcrumb',
            'projects-detail',
            [
                'START_FROM' => '0',
                'PATH' => '',
                'SITE_ID' => 's1',
            ]
        );
        ?>
    </div>
    <div class="project-hero__meta">
        <div class="container">
            <div class="project-hero__meta-grid"><p
                        class="project-hero__meta-year"><?= $arResult['PROPERTIES']['YEAR']['VALUE'] ?></p>
                <div class="project-hero__meta-item"><p>
                        <span class="project-hero__meta-label">Место:</span>
                        <?= $arResult['PROPERTIES']['YEAR']['VALUE'] ?></p>
                    <p><span class="project-hero__meta-label">Площадь:</span>
                        <?= str_replace('м2', 'м<sup>2</sup>', $arResult['PROPERTIES']['SQUARE']['VALUE']) ?></p></div>
                <div class="project-hero__meta-item"><p><span class="project-hero__meta-label">Стиль:</span>
                        <?= $arResult['PROPERTIES']['STYLE']['VALUE'] ?></p>
                    <p>
                        <span class="project-hero__meta-label">Тип:</span> <?= $arResult['PROPERTIES']['TYPE']['VALUE'] ?>
                    </p></div>
                <div class="project-hero__meta-item"><p><span
                                class="project-hero__meta-label">Авторы проекта:</span> <?= $arResult['PROPERTIES']['AUTHOR']['VALUE'] ?>
                    </p>
                </div>
            </div>
            <div class="project-hero__meta-divider"></div>
        </div>
    </div>
</section>
<div class="project-sections">
    <div class="container">
        <div class="project-sections__layout">
            <nav class="project-sections__nav" aria-label="Навигация по проекту">
                <?php foreach ($detailPage as $key => $block) {
                    if ($block['name'] === 'complex_interior') {
                        if (!$block['textfield']['value']) {
                            continue;
                        }

                        $title = $block['textfield']['value'];
                        $anchor = 'interior';
                    } elseif (!$block['htag'] || $block['htag']['type'] !== 'h2') {
                        continue;
                    }

                    if ((!$block['htag']['value'] || !$block['htag']['anchor']) && $block['name'] !== 'complex_interior') {
                        continue;
                    }
                    ?>
                    <a class="project-sections__nav-link" href="#<?= $anchor ?? $block['htag']['anchor'] ?>">
                        <?= $title ?? $block['htag']['value'] ?>
                    </a>
                    <?php
                    unset($title, $anchor);
                } ?>
                <span class="project-sections__nav-link project-sections__nav-link--disabled">Галерея</span>
            </nav>
            <div class="project-sections__content">
                <section class="about-project" id="<?php $APPLICATION->ShowProperty('portfolio--detail_project__anchor') ?>">
                    <div class="about-project__content">
                        <?php
                        foreach ($detailPage as $key => $block) {
                            if ($block['name'] === 'complex_about_project') {
                                unset($detailPage[$key]);
                                $APPLICATION->SetPageProperty('portfolio--detail_project__anchor', $block['htag']['anchor']);
                                ?>
                                <header class="about-project__header"><h2
                                            class="about-project__title"><?= $block['htag']['value'] ?></h2>
                                    <p class="about-project__text"><?= $block['text']['value'] ?></p></header>
                            <?php }
                        }
                        ?>

                        <div class="about-project__gallery">
                            <?php
                            foreach ($detailPage as $key => $block) {
                                if ($block['name'] === 'complex_concept_realization') {
                                    unset($detailPage[$key]);
                                    ?>
                                    <div class="about-project__compare about-project__image-wrap about-project__image-wrap--wide">
                                        <img-comparison-slider class="about-project__compare-slider">
                                            <div class="about-project__compare-handle" slot="handle">
                                                <svg class="about-project__compare-arrow about-project__compare-arrow--left">
                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrowFeatured"></use>
                                                </svg>
                                                <svg class="about-project__compare-arrow about-project__compare-arrow--right">
                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrowFeatured"></use>
                                                </svg>
                                            </div>
                                            <img class="about-project__compare-image glightbox" slot="first"
                                                 data-gallery="projectGallery"
                                                 src="<?= $block['image']['file']['ORIGIN_SRC'] ?>"
                                                 alt="<?= $block['image']['desc'] ?>"
                                                 width="1340" height="920" loading="lazy" decoding="async"><img
                                                    class="about-project__compare-image glightbox" slot="second"
                                                    data-gallery="projectGallery"
                                                    src="<?= $block['image1']['file']['ORIGIN_SRC'] ?>"
                                                    alt="<?= $block['image1']['desc'] ?>"
                                                    width="1340" height="920" loading="lazy" decoding="async">
                                        </img-comparison-slider>
                                        <div class="about-project__compare-labels"><span>Концепция</span><span>Реализация</span>
                                        </div>
                                    </div>
                                    <p class="about-project__text about-project__text--note"><?= $block['text']['value'] ?></p>
                                    <?php
                                }

                                if ($block['name'] === 'complex_about_images') {
                                    unset($detailPage[$key]);
                                    if (count($block['gallery']['images']) > 1) { ?>
                                        <div class="about-project__image-row">
                                            <?php foreach ($block['gallery']['images'] as $image) { ?>
                                                <div class="about-project__image-wrap"><img class="about-project__image glightbox"
                                                                                            data-gallery="projectGallery"
                                                                                            src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                                                            alt="<?= $image['desc'] ?>"
                                                                                            width="660" height="920"
                                                                                            loading="lazy"
                                                                                            decoding="async">
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <?php
                                    } else { ?>
                                        <div class="about-project__image-wrap about-project__image-wrap--wide">
                                            <img
                                                    class="about-project__image glightbox"
                                                    data-gallery="projectGallery"
                                                    src="<?= $block['gallery']['images'][0]['file']['ORIGIN_SRC'] ?>"
                                                    alt="<?= $block['gallery']['images'][0]['desc'] ?>" width="1340"
                                                    height="1020" loading="lazy"
                                                    decoding="async"></div>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                }

                                if ($block['name'] === 'complex_life_video') {
                                    unset($detailPage[$key]);
                                    ?>
                                    <div class="about-project__life">
                                        <img class="about-project__life-bg"
                                             src="<?= $block['image']['file']['ORIGIN_SRC'] ?>"
                                             alt="<?= $block['image']['desc'] ?>"
                                             width="1340" height="807" loading="lazy"
                                             decoding="async">
                                        <div class="about-project__phone">
                                            <video class="about-project__phone-image" autoplay controls muted
                                                   playsinline preload="metadata"
                                                   poster="<?= $block['image1']['file']['ORIGIN_SRC'] ?>"
                                                   aria-label="Life-видео maxdesign" width="299" height="586"
                                                   data-video-url="<?= $block['video']['url'] ?>">
                                                <source type="video/mp4">
                                                Ваш браузер не поддерживает видео.
                                            </video>
                                            <div class="about-project__phone-head"><span
                                                        class="about-project__phone-logo"
                                                        aria-hidden="true"></span><span
                                                        class="about-project__phone-brand"><?= $block['textfield']['value'] ?></span></div>
                                            <div class="about-project__phone-caption"><?= $block['textfield1']['value'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }


                                if ($block['name'] === 'complex_video_preview') {
                                    unset($detailPage[$key]);
                                    ?>
                                    <div class="about-project__video about-project__image-wrap about-project__image-wrap--wide">
                                        <video class="about-project__video-element" autoplay controls muted playsinline
                                               preload="metadata" poster="<?= $block['image']['file']['ORIGIN_SRC'] ?>"
                                               data-video-url="<?= $block['video']['url'] ?>">
                                            <source type="video/mp4">
                                            Ваш браузер не поддерживает видео.
                                        </video>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </section>

                <section class="project-layout" id="<?php $APPLICATION->ShowProperty('portfolio--detail_layout__anchor') ?>">
                    <div class="project-layout__content">
                        <?php foreach ($detailPage as $key => $block) {
                            if ($block['name'] === 'complex_layout') {
                                unset($detailPage[$key]);
                                $APPLICATION->SetPageProperty('portfolio--detail_layout__anchor', $block['htag']['anchor']);
                                ?>
                                <header class="project-layout__header"><h2
                                            class="project-layout__title"><?= $block['htag']['value'] ?></h2>
                                    <p class="project-layout__text"><?= $block['text']['value'] ?></p></header>
                                <div class="project-layout__image-wrap"><img class="project-layout__image glightbox" data-gallery="projectGallery"
                                                                             src="<?= $block['image']['file']['ORIGIN_SRC'] ?>"
                                                                             alt="<?= $block['htag']['value'] ?>"
                                                                             width="1339" height="557" loading="lazy"
                                                                             decoding="async"></div>
                                <?php
                            }

                            if ($block['name'] === 'complex_quote') {
                                unset($detailPage[$key]);
                                ?>
                                <blockquote class="project-layout__quote">
                                    <div class="project-layout__quote-mark" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="46" height="40"
                                             viewBox="0 0 46 40" fill="none">
                                            <path d="M13.991 0L19.9103 5.73991C15.0075 8.96861 11.6592 12.7952 9.86547 17.2197C8.19133 21.5247 8.25112 24.6338 10.0448 26.5471C12.1973 25.71 14.3498 25.8894 16.5022 27.0852C18.6547 28.281 19.7309 30.1943 19.7309 32.8251C19.7309 34.858 19.0135 36.5919 17.5785 38.0269C16.1435 39.3423 14.4096 40 12.3767 40C8.78924 40 5.7997 38.5052 3.40807 35.5157C1.13602 32.4066 0 28.6398 0 24.2153C0 14.4096 4.66368 6.33782 13.991 0ZM36.0538 26.5471C38.2063 25.71 40.3587 25.8894 42.5112 27.0852C44.6637 28.281 45.7399 30.1943 45.7399 32.8251C45.7399 34.858 45.0224 36.5919 43.5874 38.0269C42.1525 39.3423 40.4185 40 38.3856 40C34.7982 40 31.8087 38.5052 29.417 35.5157C27.145 32.4066 26.009 28.6398 26.009 24.2153C26.009 14.4096 30.6726 6.33782 40 0L45.9193 5.73991C41.0164 8.96861 37.6682 12.7952 35.8744 17.2197C34.2003 21.5247 34.2601 24.6338 36.0538 26.5471Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="project-layout__quote-content"><p class="project-layout__quote-text">
                                            <?= $block['text']['value'] ?></p>
                                        <footer class="project-layout__author">
                                            <div class="project-layout__author-photo-wrap"><img
                                                        class="project-layout__author-photo glightbox" data-gallery="projectGallery"
                                                        src="<?= $block['image']['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $block['textfield']['value'] ?>" width="60" height="60"
                                                        loading="lazy"
                                                        decoding="async"></div>
                                            <div class="project-layout__author-meta"><p
                                                        class="project-layout__author-name"><?= $block['textfield']['value'] ?></p>
                                                <p class="project-layout__author-role"><?= $block['textfield1']['value'] ?></p>
                                            </div>
                                        </footer>
                                    </div>
                                </blockquote>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </section>
                <?php

                $interiorId = false;
                foreach ($detailPage as $key => $block) {
                    if ($block['name'] === 'complex_interior') {

                        unset($detailPage[$key]);
                        ?>
                        <section class="project-interior" <?= !$interiorId ? 'id="interior"' : '' ?>>
                            <div class="project-interior__content">
                                <header class="project-interior__header">
                                    <h2 class="project-interior__title">
                                        <?= $block['textfield']['value'] ?>
                                    </h2>
                                </header>
                                <div class="project-interior__text-block project-interior__text-block--first">
                                    <h3 class="project-interior__subtitle"><?= $block['textfield1']['value'] ?></h3>
                                    <p class="project-interior__text"><?= $block['text']['value'] ?></p></div>

                                <div class="project-interior__gallery">
                                    <?php
                                    $class = match (count($block['gallery']['images'])) {
                                        1 => 'project-interior__image-wrap--wide',
                                        2 => 'project-interior__image-row--half',
                                        default => 'project-interior__image-row--third',
                                    };

                                    if (count($block['gallery']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }

                                $class = match (count($block['gallery1']['images'])) {
                                    1 => 'project-interior__image-wrap--wide',
                                    2 => 'project-interior__image-row--half',
                                    default => 'project-interior__image-row--third',
                                };

                                if (count($block['gallery1']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery1']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery1']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                ?>

                                    <div class="project-interior__text-block">
                                        <h3 class="project-interior__subtitle">
                                            <?= $block['textfield2']['value'] ?></h3>
                                        <p class="project-interior__text"><?= $block['text1']['value'] ?></p></div>

                                    <?php
                                    $class = match (count($block['gallery2']['images'])) {
                                        1 => 'project-interior__image-wrap--wide',
                                        2 => 'project-interior__image-row--half',
                                        default => 'project-interior__image-row--third',
                                    };

                                    if (count($block['gallery2']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery2']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery2']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                $class = match (count($block['gallery3']['images'])) {
                                    1 => 'project-interior__image-wrap--wide',
                                    2 => 'project-interior__image-row--half',
                                    default => 'project-interior__image-row--third',
                                };

                                if (count($block['gallery3']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery3']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery3']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                ?>
                                    <div class="project-interior__text-block"><h3 class="project-interior__subtitle">
                                            <?= $block['textfield3']['value'] ?></h3>
                                        <p class="project-interior__text"><?= $block['text2']['value'] ?></p></div>

                                    <?php
                                    $class = match (count($block['gallery4']['images'])) {
                                        1 => 'project-interior__image-wrap--wide',
                                        2 => 'project-interior__image-row--half',
                                        default => 'project-interior__image-row--third',
                                    };

                                    if (count($block['gallery4']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery4']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery4']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }

                                $class = match (count($block['gallery5']['images'])) {
                                    1 => 'project-interior__image-wrap--wide',
                                    2 => 'project-interior__image-row--half',
                                    default => 'project-interior__image-row--third',
                                };

                                if (count($block['gallery5']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery5']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery5']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                ?>
                                </div>
                            </div>
                        </section>
                        <?php
                        $interiorId = true;
                    }
                }
                ?>
                <?php

                $interiorId = false;
                foreach ($detailPage as $key => $block) {
                    if ($block['name'] === 'complex_interior') {

                        unset($detailPage[$key]);
                        ?>
                        <section class="project-interior" <?= !$interiorId ? 'id="interior"' : '' ?>>
                            <div class="project-interior__content">
                                <header class="project-interior__header">
                                    <h2 class="project-interior__title">
                                        <?= $block['textfield']['value'] ?>
                                    </h2>
                                </header>
                                <div class="project-interior__text-block project-interior__text-block--first">
                                    <h3 class="project-interior__subtitle"><?= $block['textfield1']['value'] ?></h3>
                                    <p class="project-interior__text"><?= $block['text']['value'] ?></p></div>

                                <div class="project-interior__gallery">
                                    <?php
                                    $class = match (count($block['gallery']['images'])) {
                                        1 => 'project-interior__image-wrap--wide',
                                        2 => 'project-interior__image-row--half',
                                        default => 'project-interior__image-row--third',
                                    };

                                    if (count($block['gallery']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }

                                $class = match (count($block['gallery1']['images'])) {
                                    1 => 'project-interior__image-wrap--wide',
                                    2 => 'project-interior__image-row--half',
                                    default => 'project-interior__image-row--third',
                                };

                                if (count($block['gallery1']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery1']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery1']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                ?>

                                    <div class="project-interior__text-block">
                                        <h3 class="project-interior__subtitle">
                                            <?= $block['textfield2']['value'] ?></h3>
                                        <p class="project-interior__text"><?= $block['text1']['value'] ?></p></div>

                                    <?php
                                    $class = match (count($block['gallery2']['images'])) {
                                        1 => 'project-interior__image-wrap--wide',
                                        2 => 'project-interior__image-row--half',
                                        default => 'project-interior__image-row--third',
                                    };

                                    if (count($block['gallery2']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery2']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery2']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                $class = match (count($block['gallery3']['images'])) {
                                    1 => 'project-interior__image-wrap--wide',
                                    2 => 'project-interior__image-row--half',
                                    default => 'project-interior__image-row--third',
                                };

                                if (count($block['gallery3']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery3']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery3']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                ?>
                                    <div class="project-interior__text-block"><h3 class="project-interior__subtitle">
                                            <?= $block['textfield3']['value'] ?></h3>
                                        <p class="project-interior__text"><?= $block['text2']['value'] ?></p></div>

                                    <?php
                                    $class = match (count($block['gallery4']['images'])) {
                                        1 => 'project-interior__image-wrap--wide',
                                        2 => 'project-interior__image-row--half',
                                        default => 'project-interior__image-row--third',
                                    };

                                    if (count($block['gallery4']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery4']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery4']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }

                                $class = match (count($block['gallery5']['images'])) {
                                    1 => 'project-interior__image-wrap--wide',
                                    2 => 'project-interior__image-row--half',
                                    default => 'project-interior__image-row--third',
                                };

                                if (count($block['gallery5']['images']) > 1) { ?>
                                    <div class="project-interior__image-row <?= $class ?>">
                                        <?php
                                        $class = '';
                                        }
                                        ?>

                                        <?php foreach ($block['gallery5']['images'] as $image) { ?>
                                            <div class="project-interior__image-wrap <?= $class ?>"><img
                                                        class="project-interior__image glightbox" data-gallery="projectGallery"
                                                        src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                                        alt="<?= $image['desc'] ?>" loading="lazy" decoding="async">
                                            </div>
                                            <?php
                                        }

                                        if (count($block['gallery5']['images']) > 1) { ?>
                                    </div>
                                <?php
                                }
                                ?>
                                </div>
                            </div>
                        </section>
                        <?php
                        $interiorId = true;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
