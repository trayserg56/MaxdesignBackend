<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<div class="partners__content">
    <ul class="partners__grid" role="list">
       <?php foreach ($arResult['ITEMS'] as $item) { ?>
           <li class="partners__item">
               <div class="partners-card"><img class="partners-card__logo"
                                               src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['NAME'] ?>"
                                               loading="lazy" decoding="async"></div>
           </li>
       <?php } ?>
    </ul>
    <a class="button button--cta-dark partners__btn" href="/partnery/">Все партнёры</a></div>