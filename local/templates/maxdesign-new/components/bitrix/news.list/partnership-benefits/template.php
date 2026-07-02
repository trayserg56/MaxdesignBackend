<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<section class="partnership-benefits">
    <div class="container">
        <div class="partnership-benefits__wrap">
            <div class="partnership-benefits__info"><h2 class="partnership-benefits__title"><?= $arResult['DESCRIPTION']['NAME'] ?></h2>
                <p class="partnership-benefits__descr"><?= $arResult['DESCRIPTION']['PREVIEW_TEXT'] ?></p></div>
            <ul class="partnership-benefits__list">
                <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                    <li class="partnership-benefits__item"><span class="partnership-benefits__num"><?= (++$key < 10 ? '0' : '') . $key ?></span>
                        <div class="partnership-benefits__content"><h3 class="partnership-benefits__item-title">
                                <?= $item['NAME'] ?></h3>
                            <p class="partnership-benefits__item-descr"><?= $item['PREVIEW_TEXT'] ?></p></div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

