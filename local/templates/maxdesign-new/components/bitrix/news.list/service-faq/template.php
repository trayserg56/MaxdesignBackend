<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<ul class="faq__list">
    <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
        <li class="faq__item" data-accordion="faq-q<?= ++$key ?>">
            <button class="button button--flat faq__btn" type="button" data-accordion-button="">
                <h3 class="faq__question"><?= $item['NAME'] ?></h3>
                <span class="faq__icon">+</span></button>
            <div class="faq__body" data-accordion-content="" style=""><p>
                    <?= $item['PREVIEW_TEXT'] ?>
                </p></div>
        </li>
    <?php } ?>
</ul>