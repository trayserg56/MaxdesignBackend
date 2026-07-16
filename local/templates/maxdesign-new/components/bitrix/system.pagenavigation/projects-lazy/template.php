<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var array $arResult */

if ($arResult['NavPageNomer'] >= $arResult['NavPageCount']) {
    return;
}
?>
<div class="home-project__more">
    <button class="button home-project__more-btn button--cta-dark"
            style="opacity: 0;"
            type="button"
            data-pagination-type="show-more"
            data-lazy=""
            data-pagination-container-code="projects"
            data-nav-num="<?= $arResult['NavNum'] ?>"
            data-page="<?= $arResult['NavPageNomer'] + 1 ?>"
    >Показать больше
    </button>
</div>
