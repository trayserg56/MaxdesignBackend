<?php

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
} catch (\Exception $e) {
    $detailPage = '';
}

// Первый экран
if ($arResult['PROPERTIES']['TEMPLATE_TYPE']['VALUE_XML_ID'] !== 'fs-bg') {
    ?>
    <section class="first-screen-flat">
        <div class="container">
            <div class="first-screen-flat__wrap">
                <div><h1 class="first-screen-flat__title"><?= $arResult['NAME'] ?></h1>
                    <div class="first-screen-flat__descr"><?= $arResult['DETAIL_TEXT'] ?></div>
                </div>
                <button class="button button--middle">Обсудить проект</button>
            </div>
        </div>
    </section>
    <section class="section-img">
        <img
            data-gallery="projectGallery"
            src="<?= \CFile::GetPath($arResult['PROPERTIES']['FS_BG_PICTURE']['VALUE']) ?>"
            alt="<?= $arResult['NAME'] ?>"
            class="glightbox"
        >
    </section>
<?php } else { ?>
    <section class="architectural-screen-first" style="background-image: url(<?= \CFile::GetPath($arResult['PROPERTIES']['FS_BG_PICTURE']['VALUE']) ?>)">
        <div class="container"><h1 class="architectural-screen-first__title"><?= $arResult['NAME'] ?>
            </h1>
            <div class="architectural-screen-first__descr"><?= $arResult['DETAIL_TEXT'] ?>
            </div>
            <div class="architectural-screen-first__btns">
                <button class="button button--middle button--white" type="button">Заказать расчёт</button>
                <?php if ($arResult['PROPERTIES']['FS_BTN_PROJECTS_LINK']['VALUE']) { ?>
                    <a href="<?= $arResult['PROPERTIES']['FS_BTN_PROJECTS_LINK']['VALUE'] ?>" class="button button--middle" type="button">Примеры проектов</a>
                <?php } ?>
            </div>
            <div class="architectural-screen-first__footer">
                <?= $arResult['PROPERTIES']['FS_FOOTER_DESCRIPTION']['~VALUE']['TEXT'] ?>

                <?php if ($arResult['PROPERTIES']['FS_FOOTER_ADDITION']['VALUE']) { ?>
                    <div class="architectural-screen-first__addition">
                        <?php foreach ($arResult['PROPERTIES']['FS_FOOTER_ADDITION']['VALUE'] as $value) { ?>
                            <div class="architectural-screen-first__parameters"><?= $value ?></div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <?php
}

// Блоки детальной страницы

foreach ($detailPage as $block) {
    switch ($block['name']) {
        case 'complex_about_service':
            ?>
            <section class="about-service about-service--architectural">
                <div class="container"><h2 class="about-service__title"><?= $block['textfield']['value'] ?></h2>
                    <div class="about-service__wrap">
                        <div class="about-service__descr">
                            <?= $block['text']['value'] ?>
                        </div>
                        <div class="about-service__right"><h3 class="about-service__subtitle"><?= $block['lists']['elements'][0]['text']?></h3>
                            <ul class="about-service__list">
                                <?php foreach ($block['lists']['elements'][0]['elements'] as $element) { ?>
                                    <li class="about-service__item"><?= $element['text'] ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_about_service_no_pic': ?>
            <section class="about-service">
                <div class="container"><h2 class="about-service__title"><?= $block['textfield']['value'] ?></h2>
                    <div class="about-service__descr"><?= $block['text']['value'] ?></div>
                    <div class="about-service__info">
                        <div class="about-service__term"><span>Срок от</span><span><?= $block['textfield1']['value'] ?></span></div>
                        <div class="about-service__type"><span>Тип объектов</span><span><?= $block['textfield2']['value'] ?></span>
                        </div>
                        <div class="about-service__stages"><span>Стадии проекта</span><span><?= $block['textfield3']['value'] ?></span>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_tag_title_subtitle_pic_desc': ?>
            <section class="service-technologies">
                <div class="container">
                    <div class="service-technologies__wrap">
                        <div class="service-technologies__text">
                            <div class="service-technologies__tag"><?= $block['textfield']['value'] ?></div>
                            <h2 class="service-technologies__title"><?= $block['textfield1']['value'] ?></h2>
                            <div class="service-technologies__subtitle"><?= $block['textfield2']['value'] ?></div>
                            <div class="service-technologies__descr"><?= $block['text']['value'] ?>
                            </div>
                        </div>
                        <div class="service-technologies__img">
                            <img
                                class="glightbox"
                                data-gallery="projectGallery"
                                src="<?= $block['image']['file']['SRC'] ?>"
                                alt="<?= $block['image']['file']['DESCRIPTION'] ?: $block['textfield1']['value'] ?>">
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_info_cards_light': ?>
            <section class="info-cards info-cards--light">
                <div class="container">
                    <h2 class="info-cards__title">
                        <?= !is_numeric($block['textfield']['value']) ? $block['textfield']['value'] : '' ?>
                    </h2>
                    <ul class="info-cards__list">
                        <?php foreach ($block['properties']['elements'] as $element) { ?>
                            <li class="info-cards__item">
                                <div class="info-cards__item-number"></div>
                                <div class="info-cards__item-title"><?= $element['title'] ?></div>
                                <div class="info-cards__item-descr"><?= $element['text'] ?></div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <?php
            break;
        case 'complex_info_cards': ?>
            <section class="info-cards">
                <div class="container"><h2 class="info-cards__title"><?= $block['textfield']['value'] ?></h2>
                    <ul class="info-cards__list">
                        <?php foreach ($block['properties']['elements'] as $element) { ?>
                            <li class="info-cards__item">
                                <div class="info-cards__item-number"></div>
                                <div class="info-cards__item-title"><?= $element['title'] ?></div>
                                <div class="info-cards__item-descr"><?= $element['text'] ?></div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <?php
            break;
        case 'complex_product_characteristics': ?>
            <section class="product-characteristics">
                <div class="container"><h2 class="product-characteristics__title"><?= $block['textfield']['value'] ?></h2>
                    <div class="product-characteristics__wrap">
                        <div>
                            <div class="product-characteristics__descr"><?= $block['text']['value'] ?></div>
                            <?php foreach ($block['properties']['elements'] as $element) { ?>
                                <div class="product-characteristics__info">
                                    <span><?= $element['title'] ?></span>
                                    <span><?= $element['text'] ?></span>
                                </div>
                            <?php } ?>
                        </div>
                        <?php if ($block['properties1']['elements']) { ?>
                            <ul class="product-characteristics__list">
                                <?php foreach ($block['properties1']['elements'] as $element) { ?>
                                    <li class="product-characteristics__item">
                                        <span><?= $element['title'] ?></span>
                                        <span><?= $element['text'] ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_trusted_partner': ?>
            <section class="trusted-partner">
                <div class="container">
                    <div class="trusted-partner__wrap">
                        <div class="trusted-partner__left"><h2 class="trusted-partner__title"><?= $block['textfield']['value'] ?></h2>
                            <div class="trusted-partner__top"><?= $block['textfield1']['value'] ?></div>
                            <div class="trusted-partner__disclaimer">
                                <span><?= $block['textfield2']['value'] ?></span>
                                <span><?= $block['textfield3']['value'] ?></span>
                            </div>
                        </div>
                        <ul class="trusted-partner__list">
                            <?php foreach ($block['properties']['elements'] as $element) { ?>
                                <li class="trusted-partner__item">
                                    <div class="trusted-partner__item-title"><?= $element['title'] ?></div>
                                    <div class="trusted-partner__item-descr"><?= $element['text'] ?></div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_title_with_desc_ul_with_desc':
            ?>
            <section class="process-steps">
                <div class="container">
                    <div class="process-steps__head">
                        <h2 class="process-steps__title"><?= $block['textfield']['value'] ?></h2>
                        <div class="process-steps__descr"><?= $block['text']['value'] ?></div>
                    </div>
                    <div class="process-steps__slider" data-swiper-container="">
                        <div class="swiper swiper-horizontal swiper-backface-hidden" data-swiper=""
                             data-swiper-nav="" data-swiper-space="32" data-swiper-pagination="fraction"
                             data-swiper-slides="auto">
                            <div class="swiper-wrapper">
                                <?php foreach ($block['lists']['elements'] as $key => $element) { ?>
                                    <div class="swiper-slide">
                                        <div class="process-steps-card">
                                            <div class="process-steps-card__number"><?= (++$key < 10 ? '0' : '') . $key ?></div>
                                            <h3 class="process-steps-card__title"><?= $element['text'] ?></h3>
                                            <div class="process-steps-card__descr">
                                                <?= isset($element['elements'][0]) ? $element['elements'][0]['text'] : '' ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"></div>
                        </div>
                        <div class="process-steps__nav-btn">
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
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_title_with_desc_ul': ?>
            <section class="architectural-need">
                <div class="container">
                    <div class="architectural-need__head"><h2 class="architectural-need__title"><?= $block['textfield']['value'] ?></h2>
                        <div class="architectural-need__descr"><?= $block['lists']['elements'][0]['text'] ?></div>
                    </div>
                    <ul class="architectural-need__list">
                        <?php foreach ($block['lists']['elements'] as $key => $element) { ?>
                            <li class="architectural-need__item"><?= $element['text'] ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <?php
            break;
        case 'complex_project_cost': ?>
            <section class="cost-drivers">
                <div class="container">
                    <div class="cost-drivers__wrap">
                        <div class="cost-drivers__text"><h2 class="cost-drivers__title"><?= $block['lists']['elements'][0]['text'] ?></h2>
                            <div class="cost-drivers__descr"><?= $block['text']['value'] ?></div>
                            <div class="cost-drivers__text-footer">
                                <div class="cost-drivers__price"><?= $block['textfield1']['value'] ?></div>
                                <a
                                        href="<?= $block['button_link']['url'] ?>"
                                        target="<?= $block['button_link']['target'] ?>"
                                        class="button button--big button--secondary-3"
                                        type="button">
                                    <?= $block['button_link']['title'] ?>
                                </a>
                            </div>
                        </div>
                        <ul class="cost-drivers__list">
                            <?php foreach ($block['lists']['elements'][0]['elements'] as $key => $element) { ?>
                                <li class="cost-drivers__item"><?= $element['text'] ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </section>
            <?php
            break;
        case 'complex_service_for': ?>
            <section class="service-for">
                <div class="container"><h2 class="service-for__title"><?= $block['textfield']['value'] ?></h2>
                    <ul class="service-for__list">
                        <?php foreach ($block['properties']['elements'] as $element) { ?>
                            <li class="service-for__item">
                                <div class="service-for__icon">
                                    <svg>
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#check-mark"></use>
                                    </svg>
                                </div>
                                <div class="service-for__text">
                                    <div class="service-for__card-title"><?= $element['title'] ?></div>
                                    <div class="service-for__card-descr"><?= $element['text'] ?></div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <?php
            break;

        case 'complex_team': ?>
            <section class="service-team">
                <div class="container">
                    <div class="service-team__tag"><?= $block['textfield']['value'] ?></div>
                    <h2 class="service-team__title"><?= $block['textfield1']['value'] ?></h2>
                    <div class="service-team__descr"><?= $block['text']['value'] ?></div>
                    <?php

                    if ($block['component']) {
                        $APPLICATION->IncludeComponent(
                            $block['component']['component_name'],
                            $block['component']['component_template'],
                            $block['component']['component_params'],
                        );
                    }
                    ?>
                </div>
            </section>
            <?php
            break;
        case 'complex_reviews': ?>
            <section class="client-reviews" data-swiper-container="">
                <div class="container">
                    <div class="client-reviews__header">
                        <div class="client-reviews__tag"><?= $block['textfield']['value'] ?></div>
                        <h2 class="client-reviews__title"><?= $block['textfield1']['value'] ?></h2></div>
                    <?php

                    if (!is_array($block['component']['component_params']['PROPERTY_CODE'])) {
                        $block['component']['component_params']['PROPERTY_CODE'] = [
                            'POSITION',
                            $block['component']['component_params']['PROPERTY_CODE'],
                        ];
                    } elseif (!isset($block['component']['component_params']['PROPERTY_CODE'])) {
                        $block['component']['component_params']['PROPERTY_CODE'][] = 'POSITION';
                    }

                    if ($block['component']) {
                        $APPLICATION->IncludeComponent(
                            $block['component']['component_name'],
                            $block['component']['component_template'],
                            $block['component']['component_params'],
                        );
                    }
                    ?>
                </div>
            </section>
            <?php
            break;
        case 'complex_faq_with_component': ?>
            <section class="faq">
                <div class="container"><h2 class="faq__title"><?= $block['textfield']['value'] ?></h2>
                    <?php

                    if ($block['component']) {
                        $APPLICATION->IncludeComponent(
                            $block['component']['component_name'],
                            $block['component']['component_template'],
                            $block['component']['component_params'],
                        );
                    }
                    ?>
                </div>
            </section>
            <?php
            break;

        case 'complex_projects': ?>
            <section class="completed-projects">
                <div class="container">
                    <div class="completed-projects__wrap">
                        <div class="completed-projects__head"><h2 class="completed-projects__title"><?= $block['textfield']['value'] ?></h2>
                            <a
                                    href="<?= $block['button_link']['url'] ?>"
                                    target="<?= $block['button_link']['target'] ?>"
                                    class="button button--middle">
                                <?= $block['button_link']['title'] ?>
                            </a>
                        </div>
                        <?php

                        if (!is_array($block['component']['component_params']['PROPERTY_CODE'])) {
                            $block['component']['component_params']['PROPERTY_CODE'] = [
                                'SQUARE',
                                'SQUARE_OBJECT',
                                'ADDRESS',
                                $block['component']['component_params']['PROPERTY_CODE'],
                            ];
                        } else {
                            $block['component']['component_params']['PROPERTY_CODE'][] = 'SQUARE';
                            $block['component']['component_params']['PROPERTY_CODE'][] = 'SQUARE_OBJECT';
                            $block['component']['component_params']['PROPERTY_CODE'][] = 'ADDRESS';
                        }

                        if ($block['component']) {
                            $APPLICATION->IncludeComponent(
                                $block['component']['component_name'],
                                $block['component']['component_template'],
                                $block['component']['component_params'],
                            );
                        }
                        ?>
                    </div>
                </div>
            </section>
            <?php
            break;

        default:
            break;
    }
}
?>



