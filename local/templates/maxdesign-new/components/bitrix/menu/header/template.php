<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var $arParams */
/** @var $arResult */
?>
<ul class="header__list">
    <?php foreach ($arResult['ITEMS'] as $item) {
    $code = str_replace('/', '', $item['LINK']);
    if (isset($arResult['DROPDOWN'][$code]) && in_array($code, $arParams['HAS_DROPDOWN'])) {
        ?>
        <li class="header__item header__item--has-dropdown">
            <a href="<?= $item['LINK'] ?>" class="header__link header__dropdown-toggle" type="button" aria-expanded="false"
                    aria-controls="<?= $code ?>-menu">
                <?= $item['TEXT'] ?>
            </a>
            <div class="header__dropdown" id="<?= $code ?>-menu" aria-hidden="true">
                <div class="header__dropdown-inner container">
                    <?php foreach ($arResult['DROPDOWN'][$code] as $column) { ?>
                        <div class="header__dropdown-column">
                            <?php if ($column['TITLE']) { ?>
                                <a class="header__dropdown-title" href="<?= $column['LINK'] ?>">
                                    <?= $column['TITLE'] ?>
                                </a>
                            <?php } ?>
                            <ul class="header__dropdown-list">
                                <?php foreach ($column['ITEMS'] as $colItemCode => $colItemText) { ?>
                                    <li>
                                        <a class="header__dropdown-link"
                                           href="<?= $column['LINK'] . ($colItemCode ? $colItemCode . '/' : $colItemCode) ?>">
                                            <?= $colItemText ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </li>
    <?php } else { ?>
        <li class="header__item">
            <a class="header__link" href="<?= $item['LINK'] ?>">
                <?= $item['TEXT'] ?>
            </a>
        </li>
    <?php }
    } ?>
</ul>
