<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) {
    die();
}

/** @var $arResult */
?>

<div class="projects-page__filters projects-page__filters--desktop" data-filters-container>
    <?php foreach ($arResult['ITEMS'] as $item) {
        if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$arResult['AUTOCOMPLETE'][$item['CODE']]) {
            continue;
        }

        if (!$item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$item['PROPERTIES']['FILTER_VALUES']['VALUE']) {
            continue;
        }
        ?>
        <div class="projects-page__filter-field"><span
                    class="projects-page__filter-label"><?= $item['NAME'] ?></span><select
                    class="projects-page__filter select" id="projects-filter-<?= $item['NAME'] ?>"
                    name="<?= $item['CODE'] ?>" multiple
                    data-filter
                    data-select="{&quot;placeholder&quot;: &quot;Выбрать&quot;, &quot;svgPath&quot;: &quot;<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg&quot;}">
                <?php if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) { ?>
                    <?php foreach ($arResult['AUTOCOMPLETE'][$item['CODE']]['VALUE'] as $key2 => $value) { ?>
                        <option value="<?= $arResult['AUTOCOMPLETE'][$item['CODE']]['XML_ID'][$key2] ?? $value ?>"><?= $value ?></option>
                    <?php } ?>
                <?php } else { ?>
                    <?php foreach ($item['PROPERTIES']['FILTER_VALUES']['VALUE'] as $key => $value) { ?>
                        <option value="<?= $item['PROPERTIES']['FILTER_PROGRAMMING']['VALUE'][$key] ?? $value ?>"><?= $value ?></option>
                    <?php } ?>
                <?php } ?>
            </select>
        </div>
    <?php } ?>
</div>
<div class="projects-page__filters-mobile">
    <div class="projects-page__filters-mobile-list">
        <?php
        $filtersCount = 0;
        foreach ($arResult['ITEMS'] as $key => $item) {
            if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$arResult['AUTOCOMPLETE'][$item['CODE']]) {
                continue;
            }

            if (!$item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$item['PROPERTIES']['FILTER_VALUES']['VALUE']) {
                continue;
            }
            ?>
            <div class="projects-page__filter-field"><span
                        class="projects-page__filter-label"><?= $item['NAME'] ?></span><select
                        class="projects-page__filter select" id="projects-filter-mobile-<?= $key ?>"
                        name="<?= $item['CODE'] ?>" multiple
                        data-filter
                        data-select="{&quot;placeholder&quot;: &quot;Выбрать&quot;, &quot;svgPath&quot;: &quot;<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg&quot;}">
                    <?php if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) { ?>
                        <?php foreach ($arResult['AUTOCOMPLETE'][$item['CODE']]['VALUE'] as $key2 => $value) { ?>
                            <option value="<?= $arResult['AUTOCOMPLETE'][$item['CODE']]['XML_ID'][$key2] ?? $value ?>"><?= $value ?></option>
                        <?php } ?>
                    <?php } else { ?>
                        <?php foreach ($item['PROPERTIES']['FILTER_VALUES']['VALUE'] as $key2 => $value) { ?>
                            <option value="<?= $item['PROPERTIES']['FILTER_PROGRAMMING']['VALUE'][$key2] ?? $value ?>"><?= $value ?></option>
                        <?php } ?>
                    <?php } ?>
                </select></div>
        <?php
            $filtersCount++;
            if ($filtersCount > 2) {
                break;
            }
        } ?>

    </div>
    <button class="projects-page__filters-more" type="button"
            data-modal-target="#projects-filters-modal"><span>Все фильтры</span>
        <svg class="projects-page__filters-more-icon">
            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-right"></use>
        </svg>
    </button>
</div>
<div class="projects-page__filters-modal modal-wrapper" id="projects-filters-modal" data-modal>
    <div class="projects-page__filters-panel modal">
        <button class="projects-page__filters-close j_closeModal" type="button"
                aria-label="Закрыть фильтры">
            <svg class="projects-page__filters-close-icon">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <div class="projects-page__filters-panel-content"><h2 class="projects-page__filters-title">
                Фильтры</h2>
            <div class="projects-page__filters-modal-list">
                <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                    <div class="projects-page__filter-field"><span class="projects-page__filter-label"><?= $item['NAME'] ?></span><select
                                class="projects-page__filter projects-page__filter--modal select"
                                data-filter
                                id="projects-filter-modal-<?= $key ?>" name="<?= $item['CODE'] ?>" multiple
                                data-select="{&quot;placeholder&quot;: &quot;Выбрать&quot;, &quot;svgPath&quot;: &quot;<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg&quot;}">
                            <?php if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) { ?>
                                <?php foreach ($arResult['AUTOCOMPLETE'][$item['CODE']]['VALUE'] as $key2 => $value) { ?>
                                    <option value="<?= $arResult['AUTOCOMPLETE'][$item['CODE']]['XML_ID'][$key2] ?? $value ?>"><?= $value ?></option>
                                <?php } ?>
                            <?php } else { ?>
                                <?php foreach ($item['PROPERTIES']['FILTER_VALUES']['VALUE'] as $key2 => $value) { ?>
                                    <option value="<?= $item['PROPERTIES']['FILTER_PROGRAMMING']['VALUE'][$key2] ?? $value ?>"><?= $value ?></option>
                                <?php } ?>
                            <?php } ?>
                        </select></div>
                <?php } ?>
            </div>
        </div>
        <div class="projects-page__filters-actions">
            <button class="projects-page__filters-action projects-page__filters-action--reset j_closeModal"
                    type="button">Сбросить все
            </button>
            <button class="projects-page__filters-action projects-page__filters-action--apply j_closeModal"
                    type="button">Применить
            </button>
        </div>
    </div>
</div>
