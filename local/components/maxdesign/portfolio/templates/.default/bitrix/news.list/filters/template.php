<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) {
    die();
}

/** @var $arResult */
/** @var $arParams */
?>

<div class="projects-page__filters projects-page__filters--desktop" data-filters-container="portfolio" data-base-url="<?= $arParams['SEF_FOLDER'] ?>">
    <?php foreach ($arResult['ITEMS'] as $item) {
        if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$arResult['AUTOCOMPLETE'][$item['CODE']]) {
            continue;
        }

        if (!$item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$item['PROPERTIES']['FILTER_VALUES']['VALUE']) {
            continue;
        }

        $allowedValues = (array) $arResult['ALLOWED_VALUES'][$item['CODE']];
        ?>
        <div class="projects-page__filter-field"><span
                    class="projects-page__filter-label"><?= $item['NAME'] ?></span><select
                    class="projects-page__filter select" id="projects-filter-<?= $item['NAME'] ?>"
                    name="<?= $item['CODE'] ?>" multiple
                    data-filter
                    data-select="{&quot;placeholder&quot;: &quot;Выбрать&quot;, &quot;svgPath&quot;: &quot;<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg&quot;}">
                <?php if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) {
                    $activeOptions = (array) $arParams['ACTIVE_FILTERS_RAW'][$item['CODE']];
                    foreach ($arResult['AUTOCOMPLETE'][$item['CODE']]['VALUE'] as $key => $value) {
                        $code = $arResult['AUTOCOMPLETE'][$item['CODE']]['XML_ID'][$key];
                        ?>
                        <option
                            value="<?= $code ?? $value ?>"
                            <?= in_array($code ?? $value, $activeOptions) ? 'selected' : '' ?>
                            <?= isset($allowedValues)
                            && !in_array('all', $allowedValues)
                            && !in_array($code ?? $value, $activeOptions)
                            && !in_array($code ?? $value, $allowedValues) ? 'disabled' : '' ?>
                        >
                            <?= $value ?>
                        </option>
                    <?php }
                } else {
                    $activeOptions = (array) $arParams['ACTIVE_FILTERS_RAW'][$item['CODE']];
                    foreach ($item['PROPERTIES']['FILTER_VALUES']['VALUE'] as $key => $value) {
                        $programming = $item['PROPERTIES']['FILTER_PROGRAMMING']['~VALUE'][$key];
                        ?>
                        <option
                            <?= in_array($programming ?? $value, $activeOptions) ? 'selected' : '' ?>
                            <?= isset($allowedValues)
                            && !in_array('all', $allowedValues)
                            && !in_array($programming ?? $value, $activeOptions)
                            && !in_array($programming ?? $value, $allowedValues) ? 'disabled' : '' ?>
                            value="<?= $programming ?? $value ?>"
                        >
                            <?= $value ?>
                        </option>
                    <?php }
                } ?>
            </select>
        </div>
    <?php } ?>
</div>
<div class="projects-page__filters-mobile" data-filters-container="portfolio-mob" data-base-url="<?= $arParams['SEF_FOLDER'] ?>">
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

            $allowedValues = (array) $arResult['ALLOWED_VALUES'][$item['CODE']];
            ?>
            <div class="projects-page__filter-field"><span
                        class="projects-page__filter-label"><?= $item['NAME'] ?></span><select
                        class="projects-page__filter select" id="projects-filter-mobile-<?= $key ?>"
                        name="<?= $item['CODE'] ?>" multiple
                        data-filter
                        data-select="{&quot;placeholder&quot;: &quot;Выбрать&quot;, &quot;svgPath&quot;: &quot;<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg&quot;}">
                    <?php if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) {
                        $activeOptions = (array) $arParams['ACTIVE_FILTERS_RAW'][$item['CODE']];
                        foreach ($arResult['AUTOCOMPLETE'][$item['CODE']]['VALUE'] as $key2 => $value) {
                            $code = $arResult['AUTOCOMPLETE'][$item['CODE']]['XML_ID'][$key2];
                            ?>
                            <option
                                value="<?= $code ?? $value ?>"
                                <?= in_array($code ?? $value, $activeOptions) ? 'selected' : '' ?>
                                <?= isset($allowedValues)
                                && !in_array('all', $allowedValues)
                                && !in_array($code ?? $value, $activeOptions)
                                && !in_array($code ?? $value, $allowedValues) ? 'disabled' : '' ?>
                            >
                                <?= $value ?>
                            </option>
                        <?php }
                    } else {
                        $activeOptions = (array) $arParams['ACTIVE_FILTERS_RAW'][$item['CODE']];
                        foreach ($item['PROPERTIES']['FILTER_VALUES']['VALUE'] as $key2 => $value) {
                            $programming = $item['PROPERTIES']['FILTER_PROGRAMMING']['~VALUE'][$key2];
                            ?>
                            <option
                                value="<?= $programming ?? $value ?>"
                                <?= in_array($programming ?? $value, $activeOptions) ? 'selected' : '' ?>
                                <?= isset($allowedValues)
                                && !in_array('all', $allowedValues)
                                && !in_array($programming ?? $value, $activeOptions)
                                && !in_array($programming ?? $value, $allowedValues) ? 'disabled' : '' ?>
                            >
                                <?= $value ?>
                            </option>
                        <?php }
                        } ?>
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
<div class="projects-page__filters-modal modal-wrapper" id="projects-filters-modal" data-filters-container="portfolio-mob-modal" data-modal>
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
                <?php foreach ($arResult['ITEMS'] as $key => $item) {
                    if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$arResult['AUTOCOMPLETE'][$item['CODE']]) {
                        continue;
                    }

                    if (!$item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE'] && !$item['PROPERTIES']['FILTER_VALUES']['VALUE']) {
                        continue;
                    }

                    $allowedValues = (array) $arResult['ALLOWED_VALUES'][$item['CODE']];
                    ?>
                    <div class="projects-page__filter-field"><span class="projects-page__filter-label"><?= $item['NAME'] ?></span><select
                                class="projects-page__filter projects-page__filter--modal select"
                                data-filter
                                id="projects-filter-modal-<?= $key ?>" name="<?= $item['CODE'] ?>" multiple
                                data-select="{&quot;placeholder&quot;: &quot;Выбрать&quot;, &quot;svgPath&quot;: &quot;<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg&quot;}">
                            <?php if ($item['PROPERTIES']['FILTER_AUTOCOMPLETE']['VALUE']) {
                                $activeOptions = (array) $arParams['ACTIVE_FILTERS_RAW'][$item['CODE']];
                                foreach ($arResult['AUTOCOMPLETE'][$item['CODE']]['VALUE'] as $key2 => $value) {
                                    $code = $arResult['AUTOCOMPLETE'][$item['CODE']]['XML_ID'][$key2];
                                    ?>
                                    <option
                                        value="<?= $code ?? $value ?>"
                                        <?= in_array($code ?? $value, $activeOptions) ? 'selected' : '' ?>
                                        <?= isset($allowedValues)
                                        && !in_array('all', $allowedValues)
                                        && !in_array($code ?? $value, $activeOptions)
                                        && !in_array($code ?? $value, $allowedValues) ? 'disabled' : '' ?>
                                    >
                                        <?= $value ?>
                                    </option>
                                <?php }
                            } else {
                                $activeOptions = (array) $arParams['ACTIVE_FILTERS_RAW'][$item['CODE']];
                                foreach ($item['PROPERTIES']['FILTER_VALUES']['VALUE'] as $key2 => $value) {
                                    $programming = $item['PROPERTIES']['FILTER_PROGRAMMING']['~VALUE'][$key2];
                                    ?>
                                    <option
                                        value="<?= $programming ?? $value ?>"
                                        <?= in_array($programming ?? $value, $activeOptions) ? 'selected' : '' ?>
                                        <?= isset($allowedValues)
                                        && !in_array('all', $allowedValues)
                                        && !in_array($programming ?? $value, $activeOptions)
                                        && !in_array($programming ?? $value, $allowedValues) ? 'disabled' : '' ?>
                                    >
                                        <?= $value ?>
                                    </option>
                                <?php }
                            } ?>
                        </select></div>
                <?php } ?>
            </div>
        </div>
        <div class="projects-page__filters-actions">
            <button data-filter-reset class="projects-page__filters-action projects-page__filters-action--reset j_closeModal"
                    type="button">Сбросить все
            </button>
        </div>
    </div>
</div>
