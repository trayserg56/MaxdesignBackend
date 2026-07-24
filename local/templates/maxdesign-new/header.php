<?php

use Bitrix\Main\Page\Asset;
use Entity\Contacts;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;

$contacts = Contacts::getInstance();
CUtil::InitJSCore(['ajax']);
?>

<!DOCTYPE html>
<html class="page <?php $APPLICATION->ShowProperty('HTML_CLASSES'); ?>" lang="ru" data-theme="light">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <defaults></defaults>
    <script>
        window.modalDefaults = {};
        window.dropdownDefaults = {};
        window.selectDefaults = {};
    </script>
    <title><?php $GLOBALS['APPLICATION']->ShowTitle(); ?></title>
    <?php

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/runtime.js', true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/_head.js', true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/_dev.js', true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bundle.js', true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/home.js', true);
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/custom.js', true);
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/_dev.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bundle.css');
    $GLOBALS['APPLICATION']->ShowHead();
    ?>
</head>
<body>
<div class="content">
    <header class="header">
        <?php $GLOBALS['APPLICATION']->ShowPanel() ?>
        <div class="container">
            <div class="header__wrap">
                <a class="header__logo" href="/" aria-label="На главную">
                    <img class="header__logo-img header__logo-img--dark" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo_maxdesign_dark.25c6f38f.svg" alt="maxdesign" width="173" height="32" loading="eager" decoding="async">
                    <img class="header__logo-img header__logo-img--light" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo_maxdesign_white.d6351cf9.svg" alt="maxdesign" width="174" height="32" loading="eager" decoding="async" aria-hidden="true">
                </a>
                <nav class="header__nav" aria-label="Основная навигация">
                    <?php

                    $APPLICATION->IncludeComponent(
                        'bitrix:menu',
                        'header',
                        [
                            'MAX_LEVEL' => '1',
                            'DELAY' => 'N',
                            'MENU_CACHE_TYPE' => 'A',
                            'MENU_CACHE_TIME' => '36000000',
                            'ROOT_MENU_TYPE' => 'top'
                        ]
                    );
                    ?>
                </nav>
                <div class="header__info">
                    <div class="header__contacts">
                        <a class="header__contact"
                           href="tel:<?= $contacts->getFormatedPhone('phone') ?>"><?= $contacts->get('phone') ?></a>
                        <a class="header__contact"
                           href="mailto:<?= $contacts->get('email') ?>"><?= $contacts->get('email') ?></a>
                    </div>
                    <button class="button header__button" type="button" data-modal-target="#discuss-project">Обсудить проект</button>
                    <button class="header__menu-toggle" type="button" aria-label="Открыть меню" aria-expanded="false"
                            aria-controls="header-menu">
                        <svg class="header__menu-icon header__menu-icon--open">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#menu"></use>
                        </svg>
                        <svg class="header__menu-icon header__menu-icon--close">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#cross"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="header__menu" id="header-menu" aria-hidden="true">
            <div class="header__menu-inner container">
                <nav class="header__menu-nav" aria-label="Мобильная навигация">
                    <?php

                    $APPLICATION->IncludeComponent(
                        'bitrix:menu',
                        'header-mobile',
                        [
                            'MAX_LEVEL' => '1',
                            'DELAY' => 'N',
                            'MENU_CACHE_TYPE' => 'A',
                            'MENU_CACHE_TIME' => '36000000',
                            'ROOT_MENU_TYPE' => 'top'
                        ]
                    );
                    ?>
                </nav>
                <div class="header__menu-contacts"><a class="header__menu-contact"
                                                      href="tel:<?= $contacts->getFormatedPhone('phone') ?>">
                        <?= $contacts->get('phone') ?></a><a class="header__menu-contact"
                                                             href="mailto:<?= $contacts->get('email') ?>"><?= $contacts->get('email') ?></a>
                </div>
                <a class="button button--cta-dark header__menu-button" href="/contact">Обсудить проект</a></div>
        </div>
    </header>
    <main>
