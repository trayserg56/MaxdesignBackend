<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

//todo Вопрос: реализация фильтров через бекенд или фронт? На фронте есть реализация
/** @var $arResult */
?>
<div class="first-screen-flat__btns"
     data-filter-buttons
     data-filter-name="<?= $arResult['FILTER_NAME'] ?>"
     data-filter-action="<?= $arResult['FORM_ACTION'] ?>"
>
    <button class="button button--middle button-tab active" type="button" data-filter="all">
        Все
    </button>
    <?php
    $i = 0;
    foreach ($arResult['ITEMS'] as $id => $arItem) {
        $i++;
        ?>
        <button class="button button--middle button-tab <?= $i > 3 ? 'button-tab--hidden' : '' ?>" type="button" data-filter="<?= $id ?>">
            <?= $arItem ?>
        </button>
    <?php } ?>
    <button class="button button--middle button-tab button-tab__toggle" type="button"><span
                class="button-tab__toggle-text">Показать еще</span>
        <svg>
            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-down"></use>
        </svg>
    </button>
</div>
