<?php

use Entity\Socials;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
$contacts = \Entity\Contacts::getInstance();
?>

    </main>
<footer class="footer">
    <div class="footer__feedback">
        <div class="footer__feedback-map">
            <iframe class="footer__feedback-map-frame"
                    src="<?= SITE_TEMPLATE_PATH ?>/assets/https://yandex.ru/map-widget/v1/?ll=30.268294%2C59.964186&amp;z=17&amp;l=map&amp;pt=30.268294%2C59.964186%2Cpm2rdm"
                    title="maxdesign на карте — Петрозаводская улица, 13" loading="lazy" allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer__feedback-body">
            <div class="footer__feedback-intro"><h2 class="footer__feedback-title"><span
                            class="footer__feedback-title-line">
                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer-intro.php",
                                ]
                        );
                        ?>
                        </span><span
                            class="footer__feedback-title-line footer__feedback-title--accent">

                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => SITE_TEMPLATE_PATH . "/include/footer-intro-second-part.php",
                                ]
                        );
                        ?>
                        </span>
                </h2>
                <p class="footer__feedback-text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => SITE_TEMPLATE_PATH . "/include/footer-feedback-text.php",
                            ]
                    );
                    ?>

                   </p></div>
            <?php include 'include/feedback_form.php' ?>
        </div>
    </div>
    <div class="container footer__inner">
        <div class="footer__top"><a class="footer__logo" href="/" aria-label="maxdesign"><img
                        class="footer__logo-img" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/light-logo.cb3f0ad8.png" alt="" width="247"
                        height="48"></a>
            <nav class="footer__nav" aria-label="Навигация в подвале">
                <?php

                $APPLICATION->IncludeComponent(
                    'bitrix:menu',
                    'footer',
                    [
                        'MAX_LEVEL' => '1',
                        'DELAY' => 'N',
                        'MENU_CACHE_TYPE' => 'A',
                        'MENU_CACHE_TIME' => '36000000',
                        'ROOT_MENU_TYPE' => 'bottom'
                    ]
                );
                ?>
            </nav>
            <a class="footer__top-link footer__top-link--desktop" href="#" aria-label="Начало страницы"><span>Начало страницы</span>
                <svg class="footer__top-icon">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-down"></use>
                </svg>
            </a></div>
        <div class="footer__center">
            <div class="footer__main-content">
                <div class="footer__contacts">
                    <div class="footer__contact-group">
                        <div class="footer__contact-item"><p class="footer__label">Для вопросов и заявок</p><a
                                    class="footer__link" href="mailto:<?= $contacts->get('email') ?>"><?= $contacts->get('email') ?></a>
                        </div>
                        <a class="footer__link" href="tel:<?= $contacts->getFormatedPhone('phone') ?>"><?= $contacts->get('phone') ?></a></div>
                    <div class="footer__contact-group footer__contact-group--secondary"><p class="footer__label">Для
                            предложений по сотрудничеству</p><a class="footer__link"
                                                                href="mailto:<?= $contacts->get('email-offer') ?>"><?= $contacts->get('email-offer') ?></a>
                    </div>
                </div>
                <div class="footer__info"><p class="footer__text"><?= $contacts->get('address') ?></p>
                    <p class="footer__text"><?= $contacts->get('details') ?></p></div>
            </div>
            <div class="footer__socials">
                <?php foreach (Socials::getInstance()->get() as $item) { ?>
                    <a class="footer__social" href="<?= $item['UF_LINK'] ?>" title="<?= $item['UF_TITLE'] ?>" aria-label="<?= $item['UF_ARIA_LABEL'] ?>"
                       target="_blank" rel="noopener noreferrer">
                        <img class="footer__social-icon" src="<?= $item['UF_ICON'] ?>" alt="" width="48" height="48">
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="footer__bottom"><a class="footer__top-link footer__top-link--mobile" href="#"
                                       aria-label="Начало страницы"><span>Начало страницы</span>
                <svg class="footer__top-icon">
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#arrow-down"></use>
                </svg>
            </a>
            <div class="footer__bottom-info"><p class="footer__copyright">2015-<?= date('Y') ?> maxdesign. Все права защищены.
                    Любое использование материалов сайта только с письменного согласия ООО «МД»</p>
                <div class="footer__links"><a class="footer__bottom-link" href="<?= $contacts->get('policy') ?>">Политика конфиденциальности</a><a
                            class="footer__bottom-link" href="<?= $contacts->get('cookie') ?>">Настройки cookie</a></div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php include 'include/modals.php' ?>
</body>
</html>