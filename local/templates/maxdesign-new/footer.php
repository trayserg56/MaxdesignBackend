<?php

use Entity\Contacts;
use Entity\Socials;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

global $APPLICATION;
$contacts = Contacts::getInstance();
$form = \Entity\Form::getInstance();
?>

</main>
<footer class="footer">
    <div class="footer__feedback">
        <div class="footer__feedback-map">
            <iframe class="footer__feedback-map-frame"
                    src="https://yandex.ru/map-widget/v1/?ll=<?= $form->getYandexMapCoords('feedback-form') ?>&z=17&l=map&pt=<?= $form->getYandexMapCoords('feedback-form') ?>,pm2rdm"
                    title="<?= $form->getYandexMapTitle('feedback-form') ?>" loading="lazy" allowfullscreen
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
                        class="footer__logo-img" src="<?= $contacts->get('logo-footer-src') ?>"
                        alt="" width="247"
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
                        <div class="footer__contact-item"><p
                                    class="footer__label"><?= $contacts->get('email-label') ?></p><a
                                    class="footer__link"
                                    href="mailto:<?= $contacts->get('email') ?>"><?= $contacts->get('email') ?></a>
                        </div>
                        <a class="footer__link"
                           href="tel:<?= $contacts->getFormatedPhone('phone') ?>"><?= $contacts->get('phone') ?></a>
                    </div>
                    <div class="footer__contact-group footer__contact-group--secondary"><p class="footer__label">
                            <?= $contacts->get('email-offer-label') ?></p><a class="footer__link"
                                                                             href="mailto:<?= $contacts->get('email-offer') ?>"><?= $contacts->get('email-offer') ?></a>
                    </div>
                </div>
                <div class="footer__info"><p class="footer__text"><?= $contacts->get('address') ?></p>
                    <p class="footer__text"><?= $contacts->get('details') ?></p></div>
            </div>
            <div class="footer__socials">
                <?php foreach (Socials::getInstance()->get() as $item) { ?>
                    <a class="footer__social" href="<?= $item['UF_LINK'] ?>" title="<?= $item['UF_TITLE'] ?>"
                       aria-label="<?= $item['UF_ARIA_LABEL'] ?>"
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
            <div class="footer__bottom-info"><p class="footer__copyright">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_TEMPLATE_PATH . "/include/copyright.php",
                        ]
                    );
                    ?>
                </p>
                <div class="footer__links">
                    <a class="footer__bottom-link" href="<?= $contacts->get('policy') ?>">
                        <?= $contacts->get('policy-text') ?>
                    </a>
                    <a class="footer__bottom-link" href="<?= $contacts->get('cookie') ?>">
                        <?= $contacts->get('cookie-text') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php include 'include/modals.php' ?>
<div class="cookies" data-cookie-dialog role="dialog" aria-live="polite" aria-label="Уведомление об использовании cookie"
     aria-hidden="false"><p class="cookies__text"><?= $contacts->get('cookie-text') ?></p>
    <button class="button button--cta-light cookies__button" type="button"><?= $contacts->get('cookie-btn') ?></button>
</div>
</body>
</html>
