<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) {
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
    <?php foreach ($arResult['ITEMS'] as $id => $arItem) { ?>
        <button class="button button--middle button-tab" type="button" data-filter="<?= $id ?>">
            <?= $arItem ?>
        </button>
    <?php } ?>
</div>

