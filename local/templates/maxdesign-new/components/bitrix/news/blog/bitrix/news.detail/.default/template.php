<?php

use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Context;
use Bitrix\Main\Web\Json;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
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

$arResult['SECTION_NAME'] = SectionTable::getById($arResult['IBLOCK_SECTION_ID'])->fetchObject()->getName();
$serverName = 'https://' . Context::getCurrent()->getServer()->getServerName();
?>

<section class="post-hero">
    <div class="post-hero__media"><img class="post-hero__image" src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>"
                                       alt="<?= strip_tags($arResult['~NAME']) ?>" width="1920"
                                       height="640" loading="eager" decoding="async"></div>
    <div class="container">
        <div class="post-hero__content">
            <div class="post-hero__heading">
                <div class="post-hero__meta">
                    <time class="post-hero__date" datetime=""><?= $arResult['DISPLAY_ACTIVE_FROM'] ?></time>
                    <span class="post-hero__divider" aria-hidden="true"></span><span
                            class="post-hero__category"><?= $arResult['SECTION_NAME'] ?></span></div>
                <h1 class="post-hero__title">
                    <?php foreach (explode('<br>', $arResult['~NAME']) as $name) { ?>
                        <span class="post-hero__title-line"><?= $name ?></span>
                    <?php } ?>
                </h1>
            </div>
            <div class="post-hero__footer">
                <div class="post-hero__author"><span class="post-hero__author-label">Автор</span><span
                            class="post-hero__author-name"><?= $arResult['PROPERTIES']['AUTHOR']['VALUE'] ?></span></div>
                <ul class="post-hero__share" aria-label="Поделиться статьей">
                    <li><a class="post-hero__share-link" href="https://telegram.me/share/url?url=<?= $serverName . $arResult['DETAIL_PAGE_URL'] ?>&text=<?= strip_tags($arResult['~NAME']) ?>" aria-label="Поделиться в Telegram">
                            <svg class="post-hero__share-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M23 2.69731L19.52 20.8647C19.52 20.8647 19.0331 22.1243 17.6956 21.5202L9.66635 15.1451L9.62912 15.1263C10.7137 14.1178 19.1238 6.28729 19.4914 5.93235C20.0604 5.38263 19.7072 5.05537 19.0465 5.47063L6.62365 13.6403L1.83095 11.9704C1.83095 11.9704 1.07672 11.6925 1.00416 11.0884C0.930647 10.4834 1.85577 10.1561 1.85577 10.1561L21.3942 2.21878C21.3942 2.21878 23 1.48813 23 2.69731Z"
                                      fill="currentColor"></path>
                            </svg>
                        </a></li>
                    <li><a class="post-hero__share-link" href="https://vk.ru/share.php?url=<?= $serverName . $arResult['DETAIL_PAGE_URL'] ?>&title=<?= strip_tags($arResult['~NAME']) ?>" aria-label="Поделиться во ВКонтакте">
                            <svg class="post-hero__share-icon" xmlns="http://www.w3.org/2000/svg" width="24"
                                 height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M13.0164 19C6.25986 19 2.15942 14.1159 2 6H5.42203C5.52871 11.9618 8.13209 14.4918 10.1278 15.0076V6H13.4084V11.1438C15.3333 10.9215 17.347 8.58127 18.0254 6H21.2509C20.7343 9.1757 18.542 11.5159 16.991 12.4813C18.542 13.2618 21.0375 15.3048 22 19H18.4533C17.7042 16.5299 15.8679 14.6167 13.4084 14.357V19H13.0164Z"
                                      fill="currentColor"></path>
                            </svg>
                        </a></li>
                    <li><a class="post-hero__share-link" href="" aria-label="Скопировать ссылку" data-copy-url="<?= $serverName . $arResult['DETAIL_PAGE_URL'] ?>">
                            <svg class="post-hero__share-icon post-hero__share-icon--stroke"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                 aria-hidden="true">
                                <path d="M9.99825 13C10.4277 13.5741 10.9756 14.0491 11.6048 14.3929C12.234 14.7367 12.9298 14.9411 13.6449 14.9923C14.36 15.0435 15.0778 14.9403 15.7496 14.6897C16.4214 14.4392 17.0314 14.047 17.5382 13.54L20.5382 10.54C21.449 9.59695 21.953 8.33394 21.9416 7.02296C21.9302 5.71198 21.4044 4.45791 20.4773 3.53087C19.5503 2.60383 18.2962 2.07799 16.9853 2.0666C15.6743 2.0552 14.4113 2.55918 13.4682 3.46997L11.7482 5.17997"></path>
                                <path d="M13.9982 11C13.5688 10.4258 13.0209 9.95078 12.3917 9.60703C11.7625 9.26327 11.0667 9.05885 10.3516 9.00763C9.63645 8.95641 8.91866 9.0596 8.2469 9.31018C7.57514 9.56077 6.96513 9.9529 6.45825 10.46L3.45825 13.46C2.54746 14.403 2.04348 15.666 2.05488 16.977C2.06627 18.288 2.59211 19.542 3.51915 20.4691C4.44619 21.3961 5.70026 21.9219 7.01124 21.9333C8.32222 21.9447 9.58524 21.4408 10.5282 20.53L12.2382 18.82"></path>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="post-article">
    <div class="container">
        <div class="post-article__wrap">
            <?php foreach ($detailPage as $block) {
                switch ($block['name']) {
                    case 'complex_article_intro': ?>
                        <div class="post-article__intro">
                            <div class="post-article__lead">
                                <?= $block['text']['value'] ?>
                            </div>
                            <figure class="post-article__figure"><img class="post-article__image"
                                                                      src="<?= $block['image']['file']['ORIGIN_SRC'] ?>"
                                                                      alt="<?= $block['image']['desc'] ?>"
                                                                      width="1120" height="917" loading="lazy"
                                                                      decoding="async">
                                <figcaption class="post-article__caption"><?= $block['textfield']['value'] ?></figcaption>
                            </figure>
                            <p class="post-article__text"><?= $block['text1']['value'] ?></p></div>
                        <?php
                        break;
                    case 'complex_quote': ?>
                        <blockquote class="post-article__quote">
                            <img class="post-article__quote-mark"
                                 src="<?= SITE_TEMPLATE_PATH ?>/assets/images/quote.2405f9fd.svg" alt="" width="46"
                                 height="40" loading="lazy" decoding="async"
                                 aria-hidden="true">
                            <div class="post-article__quote-content"><p class="post-article__quote-text"><?= $block['text']['value'] ?></p>
                                <div class="post-article__quote-author"><img class="post-article__quote-avatar"
                                                                             src="<?= $block['image']['file']['SRC'] ?>"
                                                                             alt="<?= $block['image']['desc'] ?>"
                                                                             width="60" height="60" loading="lazy"
                                                                             decoding="async" aria-hidden="true"><span
                                            class="post-article__quote-name"><?= $block['textfield']['value'] ?></span><span
                                            class="post-article__quote-position"><?= $block['textfield1']['value'] ?></span></div>
                            </div>
                        </blockquote>
                        <?php
                        break;
                    case 'complex_article_section_grouped': ?>
                        <div class="post-article__section post-article__section--grouped">
                            <h2 class="post-article__subtitle"><?= $block['textfield']['value'] ?></h2>
                            <div class="post-article__section-content">
                                <div class="post-article__section-block">
                                    <p class="post-article__text"><?= $block['lists']['elements'][0]['text'] ?></p>
                                    <ul class="post-article__list">
                                        <?php foreach ($block['lists']['elements'][0]['elements'] as $element) { ?>
                                            <li><?= $element['text'] ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>

                                <p class="post-article__text"><?= $block['text']['value'] ?></p>
                                <div class="post-article__subsection">
                                    <h3 class="post-article__small-title"><?= $block['textfield1']['value'] ?></h3>
                                    <div class="post-article__section-block">
                                        <p class="post-article__text"><?= $block['lists1']['elements'][0]['text'] ?></p>
                                        <ol class="post-article__ordered-list">
                                            <?php foreach ($block['lists']['elements'][0]['elements'] as $element) { ?>
                                                <li><?= $element['text'] ?></li>
                                            <?php } ?>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        break;

                    case 'complex_article_section': ?>
                        <div class="post-article__section">
                            <h2 class="post-article__subtitle"><?= $block['textfield']['value'] ?></h2>
                            <div class="post-article__text"><?= $block['text']['value'] ?></div>
                        </div>
                        <?php
                        break;

                    default:
                        break;
                }
            } ?>
        </div>
    </div>
</section>

<?php foreach ($detailPage as $block) {
    if ($block['name'] !== 'gallery') {
        continue;
    }
    ?>
    <section class="post-gallery">
        <div class="container">
            <div class="post-gallery__wrap">
                <div class="post-gallery__slider" data-swiper-container>
                    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                         data-swiper-pagination="fraction" data-swiper-slides="auto" data-swiper-grab-cursor="true"
                         data-swiper-config="{&quot;watchOverflow&quot;: false}">
                        <div class="swiper-wrapper">
                            <?php foreach ($block['images'] as $image) { ?>
                                <div class="swiper-slide post-gallery__slide--wide"><img class="post-gallery__image"
                                     src="<?= $image['file']['ORIGIN_SRC'] ?>"
                                     alt="<?= $image['desc'] ?>"
                                     loading="lazy"
                                     decoding="async"></div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <button class="swiper-button-prev post-gallery__nav post-gallery__nav--prev" type="button"
                            aria-label="Предыдущий слайд">
                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                             aria-hidden="true">
                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <button class="swiper-button-next post-gallery__nav post-gallery__nav--next" type="button"
                            aria-label="Следующий слайд">
                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                             aria-hidden="true">
                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
