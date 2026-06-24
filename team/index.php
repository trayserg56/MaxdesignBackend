<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

        <section class="first-screen-team">
            <div class="first-screen-team__bg"><img src="images/team-first.d041149e.jpg" alt="#"></div>
            <div class="container">
                <div class="first-screen-team__wrap"><h1 class="first-screen-team__title">
                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/team/include/FST-wrap.php",
                                ]
                        );
                        ?>
                        </h1>
                    <div class="first-screen-team__descr">
                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/team/include/FST-descr.php",
                                ]
                        );
                        ?>

                    </div>
                </div>
            </div>
        </section>
        <section class="team-page">
            <div class="container">
                <div class="tabs" data-tabs="team-tabs">
                    <button class="button button--middle button-tab" data-tab="team-tabs-1">lama interior design
                    </button>
                    <button class="button button--middle button-tab" data-tab="team-tabs-2">ridd interior design
                    </button>
                    <button class="button button--middle button-tab" data-tab="team-tabs-3">Архитектурная мастерская
                    </button>
                </div>
                <div class="tabs-contents" data-tabs-contents="team-tabs">
                    <div class="tab-content" data-tab-content="team-tabs-1">
                        <div class="slider-team">
                            <div class="slider-team__wrap">
                                <div class="slider-team__head"><h2 class="slider-team__title">lama interior design</h2>
                                    <div class="slider-team__descr">Творческая Мастерская Арсения Иванова</div>
                                </div>
                                <div class="slider-team__slider" data-swiper-container>
                                    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                                         data-swiper-pagination="fraction" data-swiper-slides="auto"
                                         data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-1.fc0db052.jpg"
                                                                           alt="Лада Макух" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Лада Макух</h3>
                                                <div class="swiper-slide__descr">Дизайнер интерьера с инженерным
                                                    образованием, член Союза Дизайнеров
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-2.9afb1146.jpg"
                                                                           alt="Максим Быков" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Максим Быков</h3>
                                                <div class="swiper-slide__descr">Петербургский архитектор, член Союза
                                                    Дизайнеров и основатель студии Maxdesign
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-3.a03e7c65.jpg"
                                                                           alt="Анна Сорокина" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Анна Сорокина</h3>
                                                <div class="swiper-slide__descr">Архитектор в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-4.e7e2a341.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-1.fc0db052.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-2.9afb1146.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                             fill="none" aria-hidden="true">
                                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                                  stroke-width="4" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                             fill="none" aria-hidden="true">
                                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                                  stroke-width="4" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="achievements-team">
                            <ul class="achievements-team__list">
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#spb-design"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Члены Союза Дизайнеров</div>
                                </li>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#awards"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Призер международной премии ADD Awards</div>
                                </li>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#min-cult-rf"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Двукратный лауреат премии Министерства
                                        Культуры
                                    </div>
                                </li>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#interia"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Призер премии Interia Awards</div>
                                </li>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#magazin"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Публикации в журнале «Жилая среда» </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="team-tabs-2">
                        <div class="slider-team">
                            <div class="slider-team__wrap">
                                <div class="slider-team__head"><h2 class="slider-team__title">ridd interior design</h2>
                                    <div class="slider-team__descr">Творческая Мастерская Арсения Иванова</div>
                                </div>
                                <div class="slider-team__slider" data-swiper-container>
                                    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                                         data-swiper-pagination="fraction" data-swiper-slides="auto"
                                         data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-1.fc0db052.jpg"
                                                                           alt="Лада Макух" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Лада Макух</h3>
                                                <div class="swiper-slide__descr">Дизайнер интерьера с инженерным
                                                    образованием, член Союза Дизайнеров
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-2.9afb1146.jpg"
                                                                           alt="Максим Быков" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Максим Быков</h3>
                                                <div class="swiper-slide__descr">Петербургский архитектор, член Союза
                                                    Дизайнеров и основатель студии Maxdesign
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-3.a03e7c65.jpg"
                                                                           alt="Анна Сорокина" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Анна Сорокина</h3>
                                                <div class="swiper-slide__descr">Архитектор в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-4.e7e2a341.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-1.fc0db052.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-2.9afb1146.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                             fill="none" aria-hidden="true">
                                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                                  stroke-width="4" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                             fill="none" aria-hidden="true">
                                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                                  stroke-width="4" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="achievements-team">
                            <ul class="achievements-team__list">
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#spb-design"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Члены Союза Дизайнеров</div>
                                </li>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#awards"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Призер международной премии ADD Awards</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="team-tabs-3">
                        <div class="slider-team">
                            <div class="slider-team__wrap">
                                <div class="slider-team__head"><h2 class="slider-team__title">Архитектурная
                                        мастерская</h2>
                                    <div class="slider-team__descr">Проектирование жилых и общественных зданий</div>
                                </div>
                                <div class="slider-team__slider" data-swiper-container>
                                    <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                                         data-swiper-pagination="fraction" data-swiper-slides="auto"
                                         data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-1.fc0db052.jpg"
                                                                           alt="Лада Макух" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Лада Макух</h3>
                                                <div class="swiper-slide__descr">Дизайнер интерьера с инженерным
                                                    образованием, член Союза Дизайнеров
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-2.9afb1146.jpg"
                                                                           alt="Максим Быков" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Максим Быков</h3>
                                                <div class="swiper-slide__descr">Петербургский архитектор, член Союза
                                                    Дизайнеров и основатель студии Maxdesign
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-3.a03e7c65.jpg"
                                                                           alt="Анна Сорокина" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Анна Сорокина</h3>
                                                <div class="swiper-slide__descr">Архитектор в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-4.e7e2a341.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-1.fc0db052.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                            <div class="swiper-slide"><img class="swiper-slide__img"
                                                                           src="images/team-2.9afb1146.jpg"
                                                                           alt="Индира Кабенова" loading="lazy"
                                                                           decoding="async">
                                                <h3 class="swiper-slide__title">Индира Кабенова</h3>
                                                <div class="swiper-slide__descr">Архитектор-техник в студии Maxdesign в
                                                    Петербурге
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                    <div class="swiper-button-prev">
                                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                             fill="none" aria-hidden="true">
                                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                                  stroke-width="4" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40"
                                             fill="none" aria-hidden="true">
                                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor"
                                                  stroke-width="4" stroke-linecap="round"
                                                  stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="achievements-team">
                            <ul class="achievements-team__list">
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#spb-design"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Члены Союза Дизайнеров</div>
                                </li>
                                <li class="achievements-team__item">
                                    <div class="achievements-team__logo">
                                        <svg>
                                            <use xlink:href="/svg/sprite.svg#awards"></use>
                                        </svg>
                                    </div>
                                    <div class="achievements-team__text">Призер международной премии ADD Awards</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
