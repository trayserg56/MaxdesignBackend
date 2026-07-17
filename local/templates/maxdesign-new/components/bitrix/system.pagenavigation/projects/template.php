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
    <button class="button css-home-project-more button--cta-dark"
            type="button"
            data-pagination-type="show-more"
            data-pagination-container-code="projects"
            data-nav-num="<?= $arResult['NavNum'] ?>"
            data-page="<?= $arResult['NavPageNomer'] + 1 ?>"
    >Показать больше
    </button>
</div>
