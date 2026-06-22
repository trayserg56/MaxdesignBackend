<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var $arResult **/
?>
<ul class="header__list">
    <?php foreach ($arResult as $item) { ?>
        <li class="header__item"><a class="header__link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
    <?php } ?>
</ul>
