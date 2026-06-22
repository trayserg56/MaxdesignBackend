<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var $arResult **/
?>
<ul class="footer__list">
    <?php foreach ($arResult as $item) { ?>
        <li class="footer__item"><a class="footer__nav-link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
    <?php } ?>
</ul>
