<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<section class="reference-list js-reference-list" id="reference-list" aria-labelledby="reference-list-heading">
    <div class="reference-list__inner">
        <div class="reference-list__header">
            <div class="reference-list__title"><p class="reference-list__label">Референс-лист</p>
                <h2 class="reference-list__heading" id="reference-list-heading">Реализованные объекты</h2></div>
            <a class="reference-list__download" href="<?= $arResult['DOWNLOAD_FILE'] ?>" download>Скачать</a></div>
        <div class="reference-list__body">
            <div class="reference-list__table" role="table" aria-label="Реализованные объекты">
                <div class="reference-list__head" role="row">
                    <div class="reference-list__cell reference-list__cell--index" role="columnheader"></div>
                    <div class="reference-list__cell reference-list__cell--name" role="columnheader">Название
                    </div>
                    <div class="reference-list__cell reference-list__cell--type" role="columnheader">Тип</div>
                    <div class="reference-list__cell reference-list__cell--area" role="columnheader">Площадь,
                        м<sup>2</sup></div>
                    <div class="reference-list__cell reference-list__cell--place" role="columnheader">Место
                    </div>
                    <div class="reference-list__cell reference-list__cell--year" role="columnheader">Год</div>
                </div>
                <?php foreach ($arResult['ITEMS'] as $key => $item) {
                    $key++;
                    ?>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index"><?= $key < 10 ? '0' . $key : $key ?></span></div>
                        <div class="reference-list__cell reference-list__cell--name"
                             role="cell"><?= $item['NAME'] ?></div>
                        <div class="reference-list__cell reference-list__cell--type"
                             role="cell"><?= $item['SECTION_NAME'] ?></div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">
                            <?= $item['SQUARE'] ?>
                        </div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">
                            <?= $item['ADDRESS'] ?>
                        </div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">
                            <?= $item['YEAR'] ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="reference-list__accordion" data-linked-accordions>
                <?php foreach ($arResult['ITEMS'] as $key => $item) {
                    $key++;
                    ?>
                    <article class="reference-list__item" data-accordion="reference-<?= $key ?>">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index"><?= $key < 10 ? '0' . $key : $key ?></span><span
                                    class="reference-list__name"><?= $item['NAME'] ?></span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">

                                    <?php if ($item['SECTION_NAME']) { ?>
                                        <div class="reference-list__meta-row">
                                            <dt class="reference-list__meta-label">Тип:</dt>
                                            <dd class="reference-list__meta-value"><?= $item['SECTION_NAME'] ?></dd>
                                        </div>
                                    <?php } ?>

                                    <?php if ($item['SQUARE']) { ?>
                                        <div class="reference-list__meta-row">
                                            <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                            <dd class="reference-list__meta-value"><?= $item['SQUARE'] ?></dd>
                                        </div>
                                    <?php } ?>

                                    <?php if ($item['ADDRESS']) { ?>
                                        <div class="reference-list__meta-row">
                                            <dt class="reference-list__meta-label">Место:</dt>
                                            <dd class="reference-list__meta-value"><?= $item['ADDRESS'] ?></dd>
                                        </div>
                                    <?php } ?>

                                    <?php if ($item['YEAR']) { ?>
                                        <div class="reference-list__meta-row">
                                            <dt class="reference-list__meta-label">Год:</dt>
                                            <dd class="reference-list__meta-value"><?= $item['YEAR'] ?></dd>
                                        </div>
                                    <?php } ?>
                                </dl>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
            <a href="/portfolio/" class="button button--cta-dark reference-list__more js-reference-list-more" type="button">
                Показать еще
            </a>
        </div>
    </div>
</section>