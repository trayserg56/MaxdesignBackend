<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$GLOBALS['APPLICATION']->SetTitle('Главная');
?>
    <section class="first-screen js-first-screen" aria-label="Главный экран">
        <div class="first-screen__media">
            <div class="first-screen__slide is-active" aria-hidden="false"><img class="first-screen__image"
                                                                                src="images/slider_1.5ce97781.png"
                                                                                alt="" width="1920" height="965"
                                                                                loading="eager" decoding="async">
            </div>
            <div class="first-screen__slide" aria-hidden="true"><img class="first-screen__image"
                                                                     src="images/slider_2.28e5a20c.png" alt=""
                                                                     width="1920" height="965" loading="lazy"
                                                                     decoding="async"></div>
            <div class="first-screen__slide" aria-hidden="true"><img class="first-screen__image"
                                                                     src="images/slider_3.186da4e2.png" alt=""
                                                                     width="1920" height="965" loading="lazy"
                                                                     decoding="async"></div>
            <div class="first-screen__slide" aria-hidden="true"><img class="first-screen__image"
                                                                     src="images/slider_4.35460671.png" alt=""
                                                                     width="1920" height="965" loading="lazy"
                                                                     decoding="async"></div>
            <button class="first-screen__nav first-screen__nav--prev js-first-screen-prev" type="button"
                    aria-label="Предыдущий слайд">
                <svg class="first-screen__nav-icon">
                    <use xlink:href="/svg/sprite.svg#right-arrow"></use>
                </svg>
            </button>
            <button class="first-screen__nav first-screen__nav--next js-first-screen-next" type="button"
                    aria-label="Следующий слайд">
                <svg class="first-screen__nav-icon">
                    <use xlink:href="/svg/sprite.svg#right-arrow"></use>
                </svg>
            </button>
            <p class="first-screen__counter js-first-screen-counter" aria-live="polite">1/4</p></div>
        <div class="first-screen__overlay" aria-hidden="true"></div>
        <div class="first-screen__top"><img class="first-screen__logo" src="images/logo.e6feda50.png"
                                            alt="maxdesign" width="860" height="120">
            <p class="first-screen__tagline">Интерьеры и архитектура со стильным, лидирующим смыслом,
                отражающим тенденции времени</p></div>
        <div class="first-screen__actions"><a class="button button--cta-light" href="/contact">Обсудить проект</a><a
                    class="button button--cta-dark" href="#promo"><span class="button__icon" aria-hidden="true"><img
                            src="images/watch.df84ff56.svg" alt="" width="19" height="19"></span>Смотреть промо</a>
        </div>
    </section>
    <section class="about" id="about" aria-labelledby="about-heading">
        <div class="about__inner">
            <div class="about__col about__col--text">
                <div class="about__intro"><h2 class="about__label" id="about-heading">О нас</h2>
                    <p class="about__lead">maxdesign — архитектурное бюро, специализирующееся на&nbsp;проектировании
                        зданий и&nbsp;дизайне частных и&nbsp;общественных интерьеров</p></div>
                <div class="about__stats">
                    <div class="about__stat"><p class="about__stat-value">24</p>
                        <p class="about__stat-caption">Специалистов, объединивших знания, экспертизу и
                            творчество</p></div>
                    <div class="about__stat"><p class="about__stat-value">365</p>
                        <p class="about__stat-caption">Проектов успешно реализовано по Санкт-Петербургу</p></div>
                </div>
            </div>
            <div class="about__col about__col--awards">
                <ul class="about__awards" aria-label="Награды и членство">
                    <li class="about__award"><img class="about__award-icon" src="images/sp-union.a0d88b36.svg"
                                                  alt="" width="97" height="60" loading="lazy" decoding="async">
                        <p class="about__award-text">Члены Союза Дизайнеров</p></li>
                    <li class="about__award"><img class="about__award-icon" src="images/awards.c4cc1dfa.svg" alt=""
                                                  width="97" height="45" loading="lazy" decoding="async">
                        <p class="about__award-text">Призер международной премии ADD Awards</p></li>
                    <li class="about__award"><img class="about__award-icon" src="images/jilaia-sreda.9421e2aa.svg"
                                                  alt="" width="157" height="28" loading="lazy" decoding="async">
                        <p class="about__award-text">Публикации в журнале<br>«Жилая среда»</p></li>
                    <li class="about__award"><img class="about__award-icon" src="images/interia.13608605.svg" alt=""
                                                  width="73" height="42" loading="lazy" decoding="async">
                        <p class="about__award-text">Призер премии Interia Awards</p></li>
                    <li class="about__award"><img class="about__award-icon" src="images/mk.6ee3ba8d.svg" alt=""
                                                  width="73" height="60" loading="lazy" decoding="async">
                        <p class="about__award-text">Двукратный лауреат премии Министерства Культуры</p></li>
                    <li class="about__award about__award--summary"><p class="about__award-highlight">164 награды</p>
                        <a class="about__award-link" href="#awards">Смотреть</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="home-project js-home-project" id="projects" aria-labelledby="projects-heading">
        <div class="home-project__inner"><h2 class="home-project__title" id="projects-heading">Проекты</h2>
            <div class="home-project__tabs" role="tablist" aria-label="Категории проектов"><span
                        class="home-project__tab-separator" aria-hidden="true"></span>
                <button class="home-project__tab" type="button" role="tab" aria-selected="false"><span
                            class="home-project__tab-label">Архитектура</span><span class="home-project__tab-count">16 проектов</span>
                </button>
                <span class="home-project__tab-separator" aria-hidden="true"></span>
                <button class="home-project__tab" type="button" role="tab" aria-selected="false"><span
                            class="home-project__tab-label">Квартиры</span><span class="home-project__tab-count">256 проектов</span>
                </button>
                <span class="home-project__tab-separator is-accent" aria-hidden="true"></span>
                <button class="home-project__tab is-active" type="button" role="tab" aria-selected="true"><span
                            class="home-project__tab-label">Офисы</span><span class="home-project__tab-count">132 проектов</span>
                </button>
                <span class="home-project__tab-separator" aria-hidden="true"></span>
                <button class="home-project__tab" type="button" role="tab" aria-selected="false"><span
                            class="home-project__tab-label">Horeca</span><span class="home-project__tab-count">16 проектов</span>
                </button>
                <span class="home-project__tab-separator" aria-hidden="true"></span>
                <button class="home-project__tab" type="button" role="tab" aria-selected="false"><span
                            class="home-project__tab-label">Выставочные стенды</span><span
                            class="home-project__tab-count">9 проектов</span></button>
                <span class="home-project__tab-separator" aria-hidden="true"></span></div>
            <div class="home-project__grid-viewport">
                <div class="home-project__grid">
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Интерьер квартиры">
                            <div class="home-project__media" style="--ratio: 74.6%;"><img
                                        class="home-project__image" src="images/image 67.a4609080.png"
                                        alt="Интерьер квартиры" loading="eager" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Интерьер
                                    квартиры</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн квартир</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Интерьер апарт-отеля">
                            <div class="home-project__media" style="--ratio: 149.5%;"><img
                                        class="home-project__image" src="images/image 51-2.5ea3a438.png"
                                        alt="Интерьер апарт-отеля" loading="eager" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Интерьер
                                    апарт-отеля</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Офисное пространство">
                            <div class="home-project__media" style="--ratio: 74.9%;"><img
                                        class="home-project__image" src="images/image 65.f6184705.png"
                                        alt="Офисное пространство" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Офисное
                                    пространство</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Апартаменты в ЖК Кристалл">
                            <div class="home-project__media" style="--ratio: 144.3%;"><img
                                        class="home-project__image" src="images/image 53.1b24aa44.png"
                                        alt="Апартаменты в ЖК Кристалл" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Апартаменты в ЖК
                                    Кристалл</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Архитектурное проектирование</span></p>
                            </div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Загородный дом">
                            <div class="home-project__media" style="--ratio: 75.2%;"><img
                                        class="home-project__image" src="images/image 50.ff13978f.png"
                                        alt="Загородный дом" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Загородный дом</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн жилых помещений</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Современный кабинет">
                            <div class="home-project__media" style="--ratio: 111%;"><img class="home-project__image"
                                                                                         src="images/image 48.58f76bce.png"
                                                                                         alt="Современный кабинет"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Современный
                                    кабинет</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Минималистичный интерьер">
                            <div class="home-project__media" style="--ratio: 94.9%;"><img
                                        class="home-project__image" src="images/image 52-1.d7fcbfb2.png"
                                        alt="Минималистичный интерьер" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Минималистичный
                                    интерьер</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Архитектурное проектирование</span></p>
                            </div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Апарт-отель">
                            <div class="home-project__media" style="--ratio: 112%;"><img class="home-project__image"
                                                                                         src="images/image 51-1.0dd2e607.png"
                                                                                         alt="Апарт-отель"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Апарт-отель</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн квартир</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Дизайн переговорной">
                            <div class="home-project__media" style="--ratio: 100.3%;"><img
                                        class="home-project__image" src="images/image 66.cfe1d5e2.png"
                                        alt="Дизайн переговорной" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Дизайн
                                    переговорной</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Резиденция за городом">
                            <div class="home-project__media" style="--ratio: 74.9%;"><img
                                        class="home-project__image" src="images/image 52.d7fcbfb2.png"
                                        alt="Резиденция за городом" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Резиденция за
                                    городом</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн жилых помещений</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Проект лобби">
                            <div class="home-project__media" style="--ratio: 117.4%;"><img
                                        class="home-project__image" src="images/image 51-3.d21c9a87.png"
                                        alt="Проект лобби" loading="lazy" decoding="async" width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Проект лобби</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Horeca</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Функциональный офис">
                            <div class="home-project__media" style="--ratio: 119%;"><img class="home-project__image"
                                                                                         src="images/image 64.3d26fcad.png"
                                                                                         alt="Функциональный офис"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Функциональный
                                    офис</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Проект open space">
                            <div class="home-project__media" style="--ratio: 111.9%;"><img
                                        class="home-project__image" src="images/image 53-1.ca6cf7df.png"
                                        alt="Проект open space" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Проект open
                                    space</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Коммерческий интерьер">
                            <div class="home-project__media" style="--ratio: 112%;"><img class="home-project__image"
                                                                                         src="images/image 51.61beeb45.png"
                                                                                         alt="Коммерческий интерьер"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Коммерческий
                                    интерьер</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Архитектурное проектирование</span></p>
                            </div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Интерьер квартиры">
                            <div class="home-project__media" style="--ratio: 74.6%;"><img
                                        class="home-project__image" src="images/image 67.a4609080.png"
                                        alt="Интерьер квартиры" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Интерьер
                                    квартиры</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн квартир</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Интерьер апарт-отеля">
                            <div class="home-project__media" style="--ratio: 149.5%;"><img
                                        class="home-project__image" src="images/image 51-2.5ea3a438.png"
                                        alt="Интерьер апарт-отеля" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Интерьер
                                    апарт-отеля</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Офисное пространство">
                            <div class="home-project__media" style="--ratio: 74.9%;"><img
                                        class="home-project__image" src="images/image 65.f6184705.png"
                                        alt="Офисное пространство" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Офисное
                                    пространство</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Апартаменты в ЖК Кристалл">
                            <div class="home-project__media" style="--ratio: 144.3%;"><img
                                        class="home-project__image" src="images/image 53.1b24aa44.png"
                                        alt="Апартаменты в ЖК Кристалл" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Апартаменты в ЖК
                                    Кристалл</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Архитектурное проектирование</span></p>
                            </div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Загородный дом">
                            <div class="home-project__media" style="--ratio: 75.2%;"><img
                                        class="home-project__image" src="images/image 50.ff13978f.png"
                                        alt="Загородный дом" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Загородный дом</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн жилых помещений</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Современный кабинет">
                            <div class="home-project__media" style="--ratio: 111%;"><img class="home-project__image"
                                                                                         src="images/image 48.58f76bce.png"
                                                                                         alt="Современный кабинет"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Современный
                                    кабинет</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Минималистичный интерьер">
                            <div class="home-project__media" style="--ratio: 74.9%;"><img
                                        class="home-project__image" src="images/image 52-1.d7fcbfb2.png"
                                        alt="Минималистичный интерьер" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Минималистичный
                                    интерьер</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Архитектурное проектирование</span></p>
                            </div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Апарт-отель">
                            <div class="home-project__media" style="--ratio: 112%;"><img class="home-project__image"
                                                                                         src="images/image 51-1.0dd2e607.png"
                                                                                         alt="Апарт-отель"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Апарт-отель</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн квартир</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Дизайн переговорной">
                            <div class="home-project__media" style="--ratio: 100.3%;"><img
                                        class="home-project__image" src="images/image 66.cfe1d5e2.png"
                                        alt="Дизайн переговорной" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Дизайн
                                    переговорной</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Резиденция за городом">
                            <div class="home-project__media" style="--ratio: 74.9%;"><img
                                        class="home-project__image" src="images/image 52.d7fcbfb2.png"
                                        alt="Резиденция за городом" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Резиденция за
                                    городом</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн жилых помещений</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Проект лобби">
                            <div class="home-project__media" style="--ratio: 117.4%;"><img
                                        class="home-project__image" src="images/image 51-3.d21c9a87.png"
                                        alt="Проект лобби" loading="lazy" decoding="async" width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Проект лобби</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Horeca</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Функциональный офис">
                            <div class="home-project__media" style="--ratio: 119%;"><img class="home-project__image"
                                                                                         src="images/image 64.3d26fcad.png"
                                                                                         alt="Функциональный офис"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Функциональный
                                    офис</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Проект open space">
                            <div class="home-project__media" style="--ratio: 111.9%;"><img
                                        class="home-project__image" src="images/image 53-1.ca6cf7df.png"
                                        alt="Проект open space" loading="lazy" decoding="async" width="327"
                                        height="327"></div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Проект open
                                    space</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Дизайн офисов</span></p></div>
                        </a></article>
                    <article class="home-project__card"><a class="home-project__card-link" href="/projects"
                                                           aria-label="Коммерческий интерьер">
                            <div class="home-project__media" style="--ratio: 112%;"><img class="home-project__image"
                                                                                         src="images/image 51.61beeb45.png"
                                                                                         alt="Коммерческий интерьер"
                                                                                         loading="lazy"
                                                                                         decoding="async"
                                                                                         width="327" height="327">
                            </div>
                            <div class="home-project__meta"><h3 class="home-project__card-title">Коммерческий
                                    интерьер</h3>
                                <p class="home-project__card-sub"><span
                                            class="home-project__card-year">2024</span><span
                                            class="home-project__card-sep" aria-hidden="true"></span><span
                                            class="home-project__card-cat">Архитектурное проектирование</span></p>
                            </div>
                        </a></article>
                </div>
            </div>
            <div class="home-project__more">
                <button class="button home-project__more-btn js-home-project-more button--cta-dark" type="button">
                    Показать больше
                </button>
            </div>
        </div>
    </section>
    <section class="service" id="service" aria-labelledby="service-heading">
        <div class="service__inner">
            <div class="service__title"><p class="service__label">Услуги</p>
                <h2 class="service__heading" id="service-heading">Предоставляем полный<br>спектр услуг<br>от
                    проектирования<br>до&nbsp;разработки рабочих чертежей</h2></div>
            <div class="service__carousel" data-swiper-container>
                <div class="swiper" data-swiper data-swiper-nav data-swiper-space="16"
                     data-swiper-pagination="fraction" data-swiper-slides="auto"
                     data-swiper-breakpoints="{&quot;768&quot;: {&quot;spaceBetween&quot;: 20}, &quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
                    <div class="swiper-wrapper">
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Дизайн жилых интерьеров"
                                                                                    style="--service-image: url(images/s1.84583723.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">01/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Дизайн жилых интерьеров</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Дизайн коммерческих интерьеров"
                                                                                    style="--service-image: url(images/s2.7fa58bcb.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">02/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Дизайн коммерческих интерьеров</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Генеральный подряд"
                                                                                    style="--service-image: url(images/s3.f392a69c.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">03/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Генеральный подряд</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Архитектурное проектирование"
                                                                                    style="--service-image: url(images/s4.41be6121.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">04/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Архитектурное проектирование</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Авторский надзор"
                                                                                    style="--service-image: url(images/s1.84583723.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">05/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Авторский надзор</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Комплектация"
                                                                                    style="--service-image: url(images/s2.7fa58bcb.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">06/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Комплектация</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="3D-визуализация"
                                                                                    style="--service-image: url(images/s3.f392a69c.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">07/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">3D-визуализация</h3></div>
                            </a></article>
                        <article class="service-card service__card swiper-slide"><a class="service-card__link"
                                                                                    href="/services"
                                                                                    aria-label="Рабочая документация"
                                                                                    style="--service-image: url(images/s4.41be6121.png);">
                                <div class="service-card__overlay"><p class="service-card__count"><span
                                                class="service-card__count-current">08/</span><span
                                                class="service-card__count-total">08</span></p>
                                    <h3 class="service-card__name">Рабочая документация</h3></div>
                            </a></article>
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
        </div>
    </section>
    <section class="home-why" id="why" aria-labelledby="why-heading">
        <div class="home-why__inner">
            <div class="home-why__title"><p class="home-why__label">Почему нас выбирают</p>
                <h2 class="home-why__heading" id="why-heading">Дизайн-студия maxdesign:<br>от&nbsp;проекта до&nbsp;воплощения
                </h2></div>
            <div class="home-why__list">
                <article class="home-why__item"><p class="home-why__number">01</p>
                    <h3 class="home-why__item-title">Экспертный<br>подход</h3>
                    <p class="home-why__item-text">Современные подходы к проектированию, использование исключительно
                        качественных и современных материалов</p></article>
                <article class="home-why__item"><p class="home-why__number">02</p>
                    <h3 class="home-why__item-title">Профессиональная<br>Команда</h3>
                    <p class="home-why__item-text">Команда специалистов с нестандартным мышлением в области дизайна,
                        проектирования и архитектуры</p></article>
                <article class="home-why__item"><p class="home-why__number">03</p>
                    <h3 class="home-why__item-title">3D-визуализации<br>и bim проектирование</h3>
                    <p class="home-why__item-text">3D-визуализации дизайна высокого качества: возможность увидеть
                        готовый интерьер до начала ремонтных работ</p></article>
                <article class="home-why__item"><p class="home-why__number">04</p>
                    <h3 class="home-why__item-title">Высокий уровень<br>сервиса</h3>
                    <p class="home-why__item-text">Строгое соблюдение оговоренных сроков и высокий уровень сервиса.
                        Работаем над задачей клиента оперативно и ответственно</p></article>
            </div>
            <div class="home-why__slider" data-swiper-container>
                <div class="swiper" data-swiper data-swiper-nav data-swiper-space="16"
                     data-swiper-pagination="fraction" data-swiper-slides="auto"
                     data-swiper-breakpoints="{&quot;768&quot;: {&quot;spaceBetween&quot;: 20}}">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="home-why__item"><p class="home-why__number">01</p>
                                <h3 class="home-why__item-title">Экспертный<br>подход</h3>
                                <p class="home-why__item-text">Современные подходы к проектированию, использование
                                    исключительно качественных и современных материалов</p></article>
                        </div>
                        <div class="swiper-slide">
                            <article class="home-why__item"><p class="home-why__number">02</p>
                                <h3 class="home-why__item-title">Профессиональная<br>Команда</h3>
                                <p class="home-why__item-text">Команда специалистов с нестандартным мышлением в
                                    области дизайна, проектирования и архитектуры</p></article>
                        </div>
                        <div class="swiper-slide">
                            <article class="home-why__item"><p class="home-why__number">03</p>
                                <h3 class="home-why__item-title">3D-визуализации<br>и bim проектирование</h3>
                                <p class="home-why__item-text">3D-визуализации дизайна высокого качества:
                                    возможность увидеть готовый интерьер до начала ремонтных работ</p></article>
                        </div>
                        <div class="swiper-slide">
                            <article class="home-why__item"><p class="home-why__number">04</p>
                                <h3 class="home-why__item-title">Высокий уровень<br>сервиса</h3>
                                <p class="home-why__item-text">Строгое соблюдение оговоренных сроков и высокий
                                    уровень сервиса. Работаем над задачей клиента оперативно и ответственно</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="home-why__nav">
                    <div class="swiper-button-prev">
                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                             aria-hidden="true">
                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <svg class="swiper-arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 40" fill="none"
                             aria-hidden="true">
                            <path d="M2 37.2941L13.7647 19.6471L2 2" stroke="currentColor" stroke-width="4"
                                  stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team" aria-labelledby="team-heading">
        <div class="team__inner">
            <div class="team__title"><p class="team__label">Команда</p>
                <h2 class="team__heading" id="team-heading">Maxdesign — эксперты высшего уровня</h2>
                <p class="team__text">Мы серьезно относимся к&nbsp;целям и&nbsp;потребностям клиентов в&nbsp;стратегическом
                    дизайне, своевременных и&nbsp;грамотных решениях для&nbsp;успешной реализации проектов.
                    Объединив знания, профессиональную экспертизу, творчество и&nbsp;опыт мы&nbsp;создали
                    команду.</p></div>
            <div class="team__carousel" data-swiper-container>
                <div class="swiper" data-swiper data-swiper-nav data-swiper-space="20"
                     data-swiper-pagination="fraction" data-swiper-slides="auto"
                     data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 20}}">
                    <div class="swiper-wrapper">
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/4.03cf79bb.png"
                                                               alt="Лада Макух" loading="lazy" decoding="async">
                            </div>
                            <div class="team-card__info"><h3 class="team-card__name">Лада Макух</h3>
                                <p class="team-card__role">Дизайнер интерьера с инженерным образованием, член Союза
                                    Дизайнеров</p></div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/1.38bc4b84.png"
                                                               alt="Максим Быков" loading="lazy" decoding="async">
                            </div>
                            <div class="team-card__info"><h3 class="team-card__name">Максим Быков</h3>
                                <p class="team-card__role">Петербургский архитектор, член Союза Дизайнеров и
                                    основатель студии Maxdesign</p></div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/2.bd6d3454.png"
                                                               alt="Анна Сорокина" loading="lazy" decoding="async">
                            </div>
                            <div class="team-card__info"><h3 class="team-card__name">Анна Сорокина</h3>
                                <p class="team-card__role">Архитектор в студии Maxdesign в Петербурге</p></div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/3.9549f5f2.png"
                                                               alt="Индира Кабенова" loading="lazy"
                                                               decoding="async"></div>
                            <div class="team-card__info"><h3 class="team-card__name">Индира Кабенова</h3>
                                <p class="team-card__role">Архитектор-техник в студии Maxdesign в Петербурге</p>
                            </div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/4.03cf79bb.png"
                                                               alt="Лада Макух" loading="lazy" decoding="async">
                            </div>
                            <div class="team-card__info"><h3 class="team-card__name">Лада Макух</h3>
                                <p class="team-card__role">Дизайнер интерьера с инженерным образованием, член Союза
                                    Дизайнеров</p></div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/1.38bc4b84.png"
                                                               alt="Максим Быков" loading="lazy" decoding="async">
                            </div>
                            <div class="team-card__info"><h3 class="team-card__name">Максим Быков</h3>
                                <p class="team-card__role">Петербургский архитектор, член Союза Дизайнеров и
                                    основатель студии Maxdesign</p></div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/2.bd6d3454.png"
                                                               alt="Анна Сорокина" loading="lazy" decoding="async">
                            </div>
                            <div class="team-card__info"><h3 class="team-card__name">Анна Сорокина</h3>
                                <p class="team-card__role">Архитектор в студии Maxdesign в Петербурге</p></div>
                        </article>
                        <article class="team-card team__card swiper-slide">
                            <div class="team-card__media"><img class="team-card__image" src="images/3.9549f5f2.png"
                                                               alt="Индира Кабенова" loading="lazy"
                                                               decoding="async"></div>
                            <div class="team-card__info"><h3 class="team-card__name">Индира Кабенова</h3>
                                <p class="team-card__role">Архитектор-техник в студии Maxdesign в Петербурге</p>
                            </div>
                        </article>
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
        </div>
    </section>
    <section class="partners" id="partners" aria-labelledby="partners-heading">
        <div class="partners__inner">
            <div class="partners__title"><p class="partners__label">Наши партнёры</p>
                <h2 class="partners__heading" id="partners-heading">Работаем только с&nbsp;прямыми поставщиками и&nbsp;официальными
                    предствительствами</h2></div>
            <div class="partners__content">
                <ul class="partners__grid" role="list">
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 125.9566c6e3.png" alt="Gaber"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 126.f1bb9fcd.png" alt="ICF" loading="lazy"
                                                        decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 138.3966b06b.png" alt="Andreu World"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 128.33e0d123.png" alt="dula"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 127.c5b66205.png" alt="Abstracta"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 129.7300a654.png" alt="Lapalma"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 137.058e26c6.png" alt="Actiu"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 130.6637117a.png" alt="Kastel"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 136.c4c23c4d.png" alt="Allermuir"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 131.f1d81893.png" alt="Kristalia"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 133.98f9ea98.png" alt="Marelli"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 132.d0224a38.png" alt="Narbutas"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 135.48415a13.png" alt="Riedl"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                    <li class="partners__item">
                        <div class="partners-card"><img class="partners-card__logo"
                                                        src="images/image 134.50ddd30c.png" alt="Orgspace"
                                                        loading="lazy" decoding="async"></div>
                    </li>
                </ul>
                <a class="button button--cta-dark partners__btn" href="/partners">Все партнёры</a></div>
        </div>
    </section>
    <section class="reference-list js-reference-list" id="reference-list" aria-labelledby="reference-list-heading">
        <div class="reference-list__inner">
            <div class="reference-list__header">
                <div class="reference-list__title"><p class="reference-list__label">Референс-лист</p>
                    <h2 class="reference-list__heading" id="reference-list-heading">Реализованные объекты</h2></div>
                <a class="reference-list__download" href="#" download>Скачать</a></div>
            <div class="reference-list__body">
                <div class="reference-list__table" role="table" aria-label="Реализованные объекты">
                    <div class="reference-list__head" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="columnheader"></div>
                        <div class="reference-list__cell reference-list__cell--name" role="columnheader">Название
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="columnheader">Тип</div>
                        <div class="reference-list__cell reference-list__cell--area" role="columnheader">Площадь,
                            м<sup>2</sup></div>
                        <div class="reference-list__cell reference-list__cell--place" role="columnheader">Место
                        </div>
                        <div class="reference-list__cell reference-list__cell--year" role="columnheader">Год</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">01</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">Офис компании «ГК
                            Монолит»
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Офисы</div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">1240</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Санкт-Петербург
                        </div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2026</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">02</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">Многофункциональное
                            бизнес-пространство «Фабрика»
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Офисы</div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">1740</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Нижний Новгород
                        </div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2026</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">03</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">Выставочный стенд
                            (павильон) для выставки «ЭКСПОЭЛЕКТРОНИКА 2026»
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Выставочный стенд
                        </div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">64</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Москва</div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2026</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">04</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">Пентхаус в
                            небоскребе NEVA TOWER<br>Москва-Сити
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Квартиры</div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">205</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Москва</div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2026</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">05</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">
                            Выставочно-ярмарочный комплекс «Винный город»
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Выставочный стенд
                        </div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">600</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Генеджик</div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2025</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">06</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">Офис компании «ГК
                            Монолит»
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Выставочный стенд
                        </div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">600</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Генеджик</div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2025</div>
                    </div>
                    <div class="reference-list__row" role="row">
                        <div class="reference-list__cell reference-list__cell--index" role="cell"><span
                                    class="reference-list__index">07</span></div>
                        <div class="reference-list__cell reference-list__cell--name" role="cell">Выставочный стенд
                            (павильон) для выставки «ЭКСПОЭЛЕКТРОНИКА 2026»
                        </div>
                        <div class="reference-list__cell reference-list__cell--type" role="cell">Выставочный стенд
                        </div>
                        <div class="reference-list__cell reference-list__cell--area" role="cell">600</div>
                        <div class="reference-list__cell reference-list__cell--place" role="cell">Генеджик</div>
                        <div class="reference-list__cell reference-list__cell--year" role="cell">2025</div>
                    </div>
                </div>
                <div class="reference-list__accordion" data-linked-accordions>
                    <article class="reference-list__item" data-accordion="reference-1">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">01</span><span
                                    class="reference-list__name">Офис компании «ГК Монолит»</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Офисы</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">1240</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Санкт-Петербург</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2026</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="reference-list__item" data-accordion="reference-2">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">02</span><span
                                    class="reference-list__name">Многофункциональное бизнес-пространство «Фабрика»</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Офисы</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">1740</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Нижний Новгород</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2026</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="reference-list__item" data-accordion="reference-3">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">03</span><span
                                    class="reference-list__name">Выставочный стенд (павильон) для выставки «ЭКСПОЭЛЕКТРОНИКА 2026»</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Выставочный стенд</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">64</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Москва</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2026</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="reference-list__item" data-accordion="reference-4">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">04</span><span
                                    class="reference-list__name">Пентхаус в небоскребе NEVA TOWER Москва-Сити</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Квартиры</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">205</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Москва</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2026</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="reference-list__item" data-accordion="reference-5">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">05</span><span
                                    class="reference-list__name">Выставочно-ярмарочный комплекс «Винный город»</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Выставочный стенд</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">600</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Генеджик</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2025</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="reference-list__item reference-list__item--hidden" data-accordion="reference-6">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">06</span><span
                                    class="reference-list__name">Офис компании «ГК Монолит»</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Выставочный стенд</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">600</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Генеджик</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2025</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                    <article class="reference-list__item reference-list__item--hidden" data-accordion="reference-7">
                        <button class="reference-list__trigger" type="button" data-accordion-button
                                aria-expanded="false"><span class="reference-list__index">07</span><span
                                    class="reference-list__name">Выставочный стенд (павильон) для выставки «ЭКСПОЭЛЕКТРОНИКА 2026»</span>
                            <svg class="reference-list__chevron svg--arrow">
                                <use xlink:href="/svg/sprite.svg#arrow-down"></use>
                            </svg>
                        </button>
                        <div class="reference-list__details" data-accordion-content>
                            <div class="reference-list__details-inner">
                                <dl class="reference-list__meta">
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Тип:</dt>
                                        <dd class="reference-list__meta-value">Выставочный стенд</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Площадь, м<sup>2</sup>:</dt>
                                        <dd class="reference-list__meta-value">600</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Место:</dt>
                                        <dd class="reference-list__meta-value">Генеджик</dd>
                                    </div>
                                    <div class="reference-list__meta-row">
                                        <dt class="reference-list__meta-label">Год:</dt>
                                        <dd class="reference-list__meta-value">2025</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </article>
                </div>
                <button class="button button--cta-dark reference-list__more js-reference-list-more" type="button">
                    Показать еще
                </button>
            </div>
        </div>
    </section>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>