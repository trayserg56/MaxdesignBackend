<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/** @var $arResult * */
/** @var $arParams * */
?>
    <ul class="header__menu-list">
        <?php foreach ($arResult['ITEMS'] as $code => $item) { ?>
            <li class="header__menu-item">
                <?php if (isset($arResult['DROPDOWN'][$code]) && in_array($code, $arParams['HAS_DROPDOWN'])) { ?>
                    <button class="header__menu-link" type="button" data-header-submenu-open="<?= $code ?>"
                            aria-controls="mobile-<?= $code ?>-menu" aria-expanded="false">
                        <?= $item['TEXT'] ?>
                    </button>
                <?php } else { ?>
                    <a class="header__menu-link" href="<?= $item['LINK'] ?>">
                        <?= $item['TEXT'] ?>
                    </a>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>

<?php

$this->SetViewTarget('menu--header-mobile_menus');
foreach ($arResult['DROPDOWN'] as $code => $columns) {
    ?>
    <div class="header__menu-view header__submenu" id="mobile-<?= $code ?>-menu" data-header-menu-view="<?= $code ?>"
         aria-hidden="true">
        <button class="header__submenu-back" type="button" data-header-submenu-back=""><span aria-hidden="true">‹</span>Назад
        </button>
        <h2 class="header__submenu-title"><?= $arResult['ITEMS'][$code]['TEXT'] ?></h2>
        <?php foreach ($columns as $column) { ?>
            <div class="header__submenu-group">
                <?php if ($column['TITLE']) { ?>
                    <a class="header__submenu-heading" href="<?= $column['LINK'] ?>"><?= $column['TITLE'] ?></a>
                <?php } ?>
                <ul class="header__submenu-list">
                    <?php foreach ($column['ITEMS'] as $colItemCode => $colItemText) { ?>
                        <li><a class="header__submenu-link" href="<?= $column['LINK'] . $colItemCode?>"><?= $colItemText ?></a></li>
                    <?php }?>
                </ul>
            </div>
        <?php } ?>
    </div>
<?php }
$this->EndViewTarget();
