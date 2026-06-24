<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<!DOCTYPE html>
<html class="page page--prices" lang="ru" data-theme="light">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <defaults></defaults>
    <script>window.modalDefaults = {};
        window.dropdownDefaults = {};
        window.selectDefaults = {};</script>
    <title>prices</title>
    <script defer src="js/runtime.js"></script>
    <script defer src="js/_head.js"></script>
    <script defer src="js/_dev.js"></script>
    <script defer src="js/bundle.js"></script>
    <link href="css/_dev.css" rel="stylesheet">
    <link href="css/bundle.css" rel="stylesheet">
</head>
<body>
<div class="content">
    <header class="header">
        <div class="container">
            <div class="header__wrap"><a class="header__logo" href="/" aria-label="На главную"><img
                            class="header__logo-img" src="images/dark-logo.6d0ec762.png" alt="maxdesign" width="156"
                            height="24" loading="eager" decoding="async"></a>
                <nav class="header__nav" aria-label="Основная навигация">
                    <ul class="header__list">
                        <li class="header__item"><a class="header__link" href="/projects">Проекты</a></li>
                        <li class="header__item"><a class="header__link" href="/services">Услуги</a></li>
                        <li class="header__item"><a class="header__link" href="/prices">Цены</a></li>
                        <li class="header__item"><a class="header__link" href="/about">О студии</a></li>
                        <li class="header__item"><a class="header__link" href="/blog">Блог</a></li>
                    </ul>
                </nav>
                <div class="header__info">
                    <div class="header__contacts"><a class="header__contact" href="tel:+79006500050">+7 900 650 00
                            50</a><a class="header__contact" href="mailto:info@maxdesign.pro">info@maxdesign.pro</a>
                    </div>
                    <a class="button button--middle header__button" href="/contact">Обсудить проект</a>
                    <button class="header__menu-toggle" type="button" aria-label="Открыть меню" aria-expanded="false"
                            aria-controls="header-menu">
                        <svg class="header__menu-icon header__menu-icon--open">
                            <use xlink:href="/svg/sprite.svg#menu"></use>
                        </svg>
                        <svg class="header__menu-icon header__menu-icon--close">
                            <use xlink:href="/svg/sprite.svg#cross"></use>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="header__menu" id="header-menu" aria-hidden="true">
            <div class="header__menu-inner container">
                <nav class="header__menu-nav" aria-label="Мобильная навигация">
                    <ul class="header__menu-list">
                        <li class="header__menu-item"><a class="header__menu-link" href="/projects">Проекты</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="/services">Услуги</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="/prices">Цены</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="/about">О студии</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="/blog">Блог</a></li>
                    </ul>
                </nav>
                <div class="header__menu-contacts"><a class="header__menu-contact" href="tel:+79006500050">+7 900 650 00
                        50</a><a class="header__menu-contact" href="mailto:info@maxdesign.pro">info@maxdesign.pro</a>
                </div>
                <a class="button button--cta-dark header__menu-button" href="/contact">Обсудить проект</a></div>
        </div>
    </header>
    <main>
        <section class="first-screen-flat first-screen-flat--prices">
            <div class="container">
                <div class="first-screen-flat__wrap">
                    <div><h1 class="first-screen-flat__title">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/FSF-title.php",
                                    ]
                            );
                            ?>
                            </h1>

                        <div class="first-screen-flat__descr">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/FSF-descr.php",
                                    ]
                            );
                            ?>

                        </div>
                    </div>
                    <button class="button button--middle">Рассчитать стоимость</button>
                </div>
            </div>
        </section>
        <section class="section-img"><img src="images/slider_1.5ce97781.png" alt="#"></section>
        <section class="prices-conditions">
            <div class="container">
                <div class="prices-conditions__wrap">
                    <ul class="prices-conditions__list">
                        <li class="prices-conditions__item">
                            <div class="prices-conditions__first-line">
                                <?php
                                $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/prices/include/PC-firstline.php",
                                        ]
                                );
                                ?>
                                </div>

                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/PC-firstline2.php",
                                    ]
                            );
                            ?>
                           </li>

                        <li class="prices-conditions__item">
                            <div class="prices-conditions__first-line">
                                <?php
                                $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/prices/include/PC-square.php",
                                        ]
                                );
                                ?>
                                </div>

                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/PC-cost.php",
                                    ]
                            );
                            ?>
                            </li>
                        <li class="prices-conditions__item">
                            <div class="prices-conditions__first-line">

                                <?php
                                $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/prices/include/PC-cost-in-month.php",
                                        ]
                                );
                                ?>


                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/PC-author.php",
                                    ]
                            );
                            ?>
                            </li>
                    </ul>
                    <ul class="prices-conditions__list prices-conditions__list--small">
                        <li class="prices-conditions__item">
                            <div class="prices-conditions__first-line">
                                <?php
                                $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/prices/include/PC-small-square.php",
                                        ]
                                );
                                ?>
                                </div>
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/PC-small-square2.php",
                                    ]
                            );
                            ?>
                            </li>


                        <li class="prices-conditions__item">
                            <div class="prices-conditions__first-line">
                                <?php
                                $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/prices/include/PC-small-square3.php",
                                        ]
                                );
                                ?>

                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/PC-small-square4.php",
                                    ]
                            );
                            ?>



                        <li class="prices-conditions__item">
                            <div class="prices-conditions__first-line">
                                <?php
                                $APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        [
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/prices/include/PC-small-ind.php",
                                        ]
                                );
                                ?>
                            </div>
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/PC-small-ind2.php",
                                    ]
                            );
                            ?>
                            </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="prices-why">
            <div class="container">
                <div class="prices-why__wrap">
                    <div>
                        <div class="prices-why__tag">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/P-why-tag.php",
                                    ]
                            );
                            ?>
                            </div>


                        <h2 class="prices-why__title">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/P-why-title.php",
                                    ]
                            );
                            ?>
                            </h2>


                        <div class="prices-why__descr">
                            <?php
                            $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    [
                                            "AREA_FILE_SHOW" => "file",
                                            "PATH" => "/prices/include/P-why-descr.php",
                                    ]
                            );
                            ?>

                        </div>
                    </div>
                    <ul class="prices-why__list">
                        <li class="prices-why__item">Продуманный бюджет без сюрпризов</li>
                        <li class="prices-why__item">Интерьер, который реально реализуем</li>
                        <li class="prices-why__item">Экономия на ошибках и переделках</li>
                        <li class="prices-why__item">Контроль подрядчиков</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="completed-projects">
            <div class="container">
                <div class="completed-projects__wrap">
                    <div class="completed-projects__head"><h2 class="completed-projects__title">Реализованные
                            проекты</h2>
                        <button class="button button--middle">Смотреть все</button>
                    </div>
                    <div class="completed-projects__slider" data-swiper-container>
                        <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                             data-swiper-pagination="fraction" data-swiper-slides="auto"
                             data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 5, &quot;spaceBetween&quot;: 20}}">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="swiper-slide__img" src="images/1.e5b9ac5f.jpg"
                                                               alt="Бизнес-центр «Capital»" loading="lazy"
                                                               decoding="async">
                                    <h3 class="swiper-slide__title">Бизнес-центр «Capital»</h3>
                                    <div class="swiper-slide__footer">
                                        <div class="swiper-slide__city">Санкт-Петербург</div>
                                        <div class="swiper-slide__square">1 250 м2</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="swiper-slide__img" src="images/2.f521fcbf.jpg"
                                                               alt="Архитектура бизнес-пространства «Фабрика - 6»"
                                                               loading="lazy" decoding="async">
                                    <h3 class="swiper-slide__title">Архитектура бизнес-пространства «Фабрика - 6»</h3>
                                    <div class="swiper-slide__footer">
                                        <div class="swiper-slide__city">Москва</div>
                                        <div class="swiper-slide__square">1 250 м2</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="swiper-slide__img" src="images/3.a8d4b7eb.jpg"
                                                               alt="Школа Медресе для девочек" loading="lazy"
                                                               decoding="async">
                                    <h3 class="swiper-slide__title">Школа Медресе для девочек</h3>
                                    <div class="swiper-slide__footer">
                                        <div class="swiper-slide__city">Санкт-Петербург</div>
                                        <div class="swiper-slide__square">1 250 м2</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="swiper-slide__img" src="images/4.9e210e41.jpg"
                                                               alt="Корнер NIHAO в ТРЦ «Меркурий»" loading="lazy"
                                                               decoding="async">
                                    <h3 class="swiper-slide__title">Корнер NIHAO в ТРЦ «Меркурий»</h3>
                                    <div class="swiper-slide__footer">
                                        <div class="swiper-slide__city">Екатеринбург</div>
                                        <div class="swiper-slide__square">1 250 м2</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="swiper-slide__img" src="images/4.9e210e41.jpg"
                                                               alt="Корнер NIHAO в ТРЦ «Меркурий»" loading="lazy"
                                                               decoding="async">
                                    <h3 class="swiper-slide__title">Корнер NIHAO в ТРЦ «Меркурий»</h3>
                                    <div class="swiper-slide__footer">
                                        <div class="swiper-slide__city">Екатеринбург</div>
                                        <div class="swiper-slide__square">1 250 м2</div>
                                    </div>
                                </div>
                                <div class="swiper-slide"><img class="swiper-slide__img" src="images/4.9e210e41.jpg"
                                                               alt="Корнер NIHAO в ТРЦ «Меркурий»" loading="lazy"
                                                               decoding="async">
                                    <h3 class="swiper-slide__title">Корнер NIHAO в ТРЦ «Меркурий»</h3>
                                    <div class="swiper-slide__footer">
                                        <div class="swiper-slide__city">Екатеринбург</div>
                                        <div class="swiper-slide__square">1 250 м2</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev">
                            <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                                 aria-hidden="true">
                                <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                                 aria-hidden="true">
                                <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                      stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="completed-projects__footer">
                        <button class="button button--middle">Смотреть все</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__feedback">
            <div class="footer__feedback-map">
                <iframe class="footer__feedback-map-frame"
                        src="https://yandex.ru/map-widget/v1/?ll=30.268294%2C59.964186&amp;z=17&amp;l=map&amp;pt=30.268294%2C59.964186%2Cpm2rdm"
                        title="maxdesign на карте — Петрозаводская улица, 13" loading="lazy" allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer__feedback-body">
                <div class="footer__feedback-intro"><h2 class="footer__feedback-title"><span
                                class="footer__feedback-title-line">Получите наше</span><span
                                class="footer__feedback-title-line footer__feedback-title--accent">лучшее предложение!</span>
                    </h2>
                    <p class="footer__feedback-text">Заполните форму и&nbsp;оставьте свои контактные данные,
                        а&nbsp;мы подготовим предложение, которое подходит именно вам</p></div>
                <form class="feedback-form" action="#" method="post" novalidate>
                    <div class="feedback-form__grid">
                        <div class="feedback-form__field"><input class="feedback-form__input" type="text"
                                                                 id="feedback-location" name="location"
                                                                 placeholder="Местонахождение объекта"></div>
                        <div class="feedback-form__field"><input class="feedback-form__input" type="text"
                                                                 id="feedback-name" name="name"
                                                                 placeholder="Как к вам обращаться"></div>
                        <div class="feedback-form__field"><input class="feedback-form__input j_mask" type="tel"
                                                                 id="feedback-phone" name="phone" placeholder="Телефон"
                                                                 data-inputmask="'mask': '+ 7(999) 999-99-99'"></div>
                        <div class="feedback-form__field"><input class="feedback-form__input" type="email"
                                                                 id="feedback-email" name="email" placeholder="E-mail">
                        </div>
                        <div class="feedback-form__field"><label class="feedback-form__label" for="feedback-type">Тип
                                помещения</label><select class="feedback-form__select" id="feedback-type" name="type">
                                <option value="" disabled selected>Выберите из списка</option>
                                <option value="Квартира">Квартира</option>
                                <option value="Дом / коттедж">Дом / коттедж</option>
                                <option value="Офис">Офис</option>
                                <option value="Коммерческое помещение">Коммерческое помещение</option>
                            </select></div>
                        <div class="feedback-form__field"><label class="feedback-form__label" for="feedback-area">Площадь,
                                м<sup>2</sup></label><input class="feedback-form__input" type="number"
                                                            id="feedback-area" name="area" min="1" placeholder="100">
                        </div>
                    </div>
                    <div class="feedback-form__footer"><label class="checkbox feedback-form__consent"><input
                                    class="checkbox__input" type="checkbox" name="consent" checked>
                            <div class="checkbox__wrap">
                                <div class="checkbox__custom">
                                    <svg class="checkbox__icon">
                                        <use xlink:href="/svg/sprite.svg#done"></use>
                                    </svg>
                                </div>
                                <p class="checkbox__text">Нажимая кнопку «Получить расчёт», я&nbsp;даю согласие на&nbsp;обработку
                                    моих персональных данных, в&nbsp;соответствии с&nbsp;Федеральным законом
                                    от&nbsp;27.07.2006 года №152-Ф3 «О&nbsp;персональных данных», на&nbsp;условиях
                                    и&nbsp;для целей, определённых в&nbsp;Согласии на&nbsp;обработку персональных
                                    данных</p></div>
                        </label>
                        <button class="button button--cta-light feedback-form__submit" type="submit">Получить
                            консультацию
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container footer__inner">
            <div class="footer__top"><a class="footer__logo" href="/" aria-label="maxdesign"><img
                            class="footer__logo-img" src="images/light-logo.cb3f0ad8.png" alt="" width="247"
                            height="48"></a>
                <nav class="footer__nav" aria-label="Навигация в подвале">
                    <ul class="footer__list">
                        <li class="footer__item"><a class="footer__nav-link" href="/projects">Портфолио</a></li>
                        <li class="footer__item"><a class="footer__nav-link" href="/services">Услуги</a></li>
                        <li class="footer__item"><a class="footer__nav-link" href="/prices">Цены</a></li>
                        <li class="footer__item"><a class="footer__nav-link" href="/about">О студии</a></li>
                        <li class="footer__item"><a class="footer__nav-link" href="/blog">Блог</a></li>
                    </ul>
                </nav>
                <a class="footer__top-link footer__top-link--desktop" href="#" aria-label="Начало страницы"><span>Начало страницы</span>
                    <svg class="footer__top-icon">
                        <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                    </svg>
                </a></div>
            <div class="footer__center">
                <div class="footer__main-content">
                    <div class="footer__contacts">
                        <div class="footer__contact-group">
                            <div class="footer__contact-item"><p class="footer__label">Для вопросов и заявок</p><a
                                        class="footer__link" href="mailto:info@maxdesign.pro">info@maxdesign.pro</a>
                            </div>
                            <a class="footer__link" href="tel:+79006500050">+7 900 650 00 50</a></div>
                        <div class="footer__contact-group footer__contact-group--secondary"><p class="footer__label">Для
                                предложений по сотрудничеству</p><a class="footer__link"
                                                                    href="mailto:offer@maxdesign.pro">offer@maxdesign.pro</a>
                        </div>
                    </div>
                    <div class="footer__info"><p class="footer__text">197110, Санкт-Петербург, Петрозаводская улица, дом
                            13, помещение 32-Н (первый этаж, вход с улицы)</p>
                        <p class="footer__text">ООО «МАКСДИЗАЙН»<br>ИНН 7839085858<br>ОГРН 1177847194084</p></div>
                </div>
                <div class="footer__socials"><a class="footer__social" href="#" title="Behance" aria-label="Behance"
                                                target="_blank" rel="noopener noreferrer"><img
                                class="footer__social-icon" src="images/be.ea7f7c63.svg" alt="" width="48" height="48"></a><a
                            class="footer__social" href="#" title="VK" aria-label="VK" target="_blank"
                            rel="noopener noreferrer"><img class="footer__social-icon" src="images/vk.26018e6a.svg"
                                                           alt="" width="48" height="48"></a><a class="footer__social"
                                                                                                href="#"
                                                                                                title="Telegram"
                                                                                                aria-label="Telegram"
                                                                                                target="_blank"
                                                                                                rel="noopener noreferrer"><img
                                class="footer__social-icon" src="images/tg.32b0404f.svg" alt="" width="48" height="48"></a><a
                            class="footer__social" href="#" title="WhatsApp" aria-label="WhatsApp" target="_blank"
                            rel="noopener noreferrer"><img class="footer__social-icon" src="images/ws.b112a9cb.svg"
                                                           alt="" width="48" height="48"></a></div>
            </div>
            <div class="footer__bottom"><a class="footer__top-link footer__top-link--mobile" href="#"
                                           aria-label="Начало страницы"><span>Начало страницы</span>
                    <svg class="footer__top-icon">
                        <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                    </svg>
                </a>
                <div class="footer__bottom-info"><p class="footer__copyright">2015-2026 maxdesign. Все права защищены.
                        Любое использование материалов сайта только с письменного согласия ООО «МД»</p>
                    <div class="footer__links"><a class="footer__bottom-link" href="#">Политика конфиденциальности</a><a
                                class="footer__bottom-link" href="#">Настройки cookie</a></div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div class="modal-wrapper modal-wrapper--example" id="modal-example" data-modal>
    <div class="modal">
        <div class="modal__wrap">
            <div class="modal__header">Test modal title</div>
            <div class="modal__body">
                <div class="modal__content"><p class="modal__text">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="modal__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                        accusamus?</p>
                    <p class="modal__text">Lorem ipsum dolor sit.</p></div>
            </div>
            <div class="modal__footer"><p class="modal__text">Test modal footer</p></div>
        </div>
    </div>
</div>
</body>
</html>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
