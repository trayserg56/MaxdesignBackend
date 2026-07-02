<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
?>
<section class="partners-logos">
    <div class="container">
        <div class="partners-logos__header"><span class="partners-logos__tag"><?= $arResult['DESCRIPTION']['NAME'] ?></span>
            <h2 class="partners-logos__title"><?= $arResult['DESCRIPTION']['PREVIEW_TEXT'] ?></h2></div>
        <ul class="partners-logos__list">
            <?php foreach ($arResult['ITEMS'] as $key => $item) { ?>
                <li class="partners-logos__item"><img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $item['NAME'] ?>"><span
                            class="partners-logos__visually-hidden"><?= $item['NAME'] ?></span></li>
            <?php } ?>
        </ul>
    </div>
</section>