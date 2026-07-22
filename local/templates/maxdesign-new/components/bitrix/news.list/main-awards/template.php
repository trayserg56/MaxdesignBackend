<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */
/** @var array $arParams */
?>
<div class="about__col about__col--awards">
    <ul class="about__awards" aria-label="Награды и членство">
        <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <li class="about__award"><img class="about__award-icon"
                                          src="<?= \CFile::GetPath($item['PROPERTIES']['ICON']['VALUE']) ?>"
                                          alt="<?= $item['NAME'] ?>" width="97" height="60" loading="lazy" decoding="async">
                <p class="about__award-text"><?= $item['NAME'] ?></p></li>
        <?php } ?>
        <li class="about__award about__award--summary"><p class="about__award-highlight"><?= $arParams['AWARDS_AMOUNT'] ?></p>
        </li>
    </ul>
</div>
