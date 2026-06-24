<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<section class="first-screen-flat first-screen-flat--partners">
    <div class="container">
        <div class="first-screen-flat__wrap">
            <div><h1 class="first-screen-flat__title">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/partners/include/FS-Title.php",
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
                                    "PATH" => "/partners/include/FS-descr.php",
                            ]
                    );
                    ?>
                </div>
            </div>
            <button class="button button--middle">Стать партнером</button>
        </div>
    </div>
</section>
<section class="section-img"><img src="images/slider_1.5ce97781.png" alt="#"></section>
<section class="partnership-targets">
    <div class="container">
        <div class="partnership-targets__header">
            <div class="partnership-targets__tag">Кому подходит партнёрство</div>
            <h2 class="partnership-targets__title">Мы ищем</h2></div>
        <div class="partnership-targets__slider" data-swiper-container>
            <div class="swiper" data-swiper data-swiper-nav data-swiper-space="60"
                 data-swiper-pagination="fraction" data-swiper-slides="auto"
                 data-swiper-breakpoints="{&quot;1280&quot;: {&quot;slidesPerView&quot;: 4, &quot;spaceBetween&quot;: 10}}">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><h3 class="swiper-slide__title">Поставщиков</h3>
                        <div class="swiper-slide__descr">Современные подходы к проектированию, использование
                            исключительно качественных и современных материалов
                        </div>
                    </div>
                    <div class="swiper-slide"><h3 class="swiper-slide__title">Производителей</h3>
                        <div class="swiper-slide__descr">Команда специалистов с нестандартным мышлением в
                            области дизайна, проектирования и архитектуры
                        </div>
                    </div>
                    <div class="swiper-slide"><h3 class="swiper-slide__title">Подрядчиков</h3>
                        <div class="swiper-slide__descr">3D-визуализации дизайна высокого качества: возможность
                            увидеть готовый интерьер до начала ремонтных работ
                        </div>
                    </div>
                    <div class="swiper-slide"><h3 class="swiper-slide__title">Декораторов</h3>
                        <div class="swiper-slide__descr">Строгое соблюдение оговоренных сроков и высокий уровень
                            сервиса. Работаем над задачей клиента оперативно и ответственно
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partnership-benefits">
    <div class="container">
        <div class="partnership-benefits__wrap">
            <div class="partnership-benefits__info"><h2 class="partnership-benefits__title">Сотрудничая с нами,
                    вы получаете</h2>
                <p class="partnership-benefits__descr">Современные подходы к проектированию, использование
                    исключительно качественных и современных материалов</p></div>
            <ul class="partnership-benefits__list">
                <li class="partnership-benefits__item"><span class="partnership-benefits__num">01</span>
                    <div class="partnership-benefits__content"><h3 class="partnership-benefits__item-title">
                            Стабильный поток проектов</h3>
                        <p class="partnership-benefits__item-descr">Регулярно включаем партнёров в реальные
                            объекты</p></div>
                </li>
                <li class="partnership-benefits__item"><span class="partnership-benefits__num">02</span>
                    <div class="partnership-benefits__content"><h3 class="partnership-benefits__item-title">
                            Доступ к клиентам</h3>
                        <p class="partnership-benefits__item-descr">Вы получаете заказы без затрат на
                            продвижение</p></div>
                </li>
                <li class="partnership-benefits__item"><span class="partnership-benefits__num">03</span>
                    <div class="partnership-benefits__content"><h3 class="partnership-benefits__item-title">
                            Прозрачные условия</h3>
                        <p class="partnership-benefits__item-descr">Все этапы и взаимодействие понятны
                            заранее</p></div>
                </li>
                <li class="partnership-benefits__item"><span class="partnership-benefits__num">04</span>
                    <div class="partnership-benefits__content"><h3 class="partnership-benefits__item-title">
                            Долгосрочное сотрудничество</h3>
                        <p class="partnership-benefits__item-descr">Формируем постоянные рабочие связи, а не
                            разовые заказы</p></div>
                </li>
                <li class="partnership-benefits__item"><span class="partnership-benefits__num">05</span>
                    <div class="partnership-benefits__content"><h3 class="partnership-benefits__item-title">
                            Участие в проектах студии</h3>
                        <p class="partnership-benefits__item-descr">Работа с коммерческими и премиальными
                            интерьерами</p></div>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="partners-logos">
    <div class="container">
        <div class="partners-logos__header"><span class="partners-logos__tag">Наши партнёры</span>
            <h2 class="partners-logos__title">Работаем<br>с 30+ поставщиками</h2></div>
        <ul class="partners-logos__list">
            <li class="partners-logos__item"><img src="images/hanak.b0cfb6d9.png" alt="HANÁK"><span
                        class="partners-logos__visually-hidden">HANÁK</span></li>
            <li class="partners-logos__item"><img src="images/gaber.db4688e0.png" alt="Gaber"><span
                        class="partners-logos__visually-hidden">Gaber</span></li>
            <li class="partners-logos__item"><img src="images/dula.a99ea836.png" alt="dula"><span
                        class="partners-logos__visually-hidden">dula</span></li>
            <li class="partners-logos__item"><img src="images/yard.df02dfb4.png" alt="YARD"><span
                        class="partners-logos__visually-hidden">YARD</span></li>
            <li class="partners-logos__item"><img src="images/bukvoed.79f50f2e.png" alt="БУКВОЕД"><span
                        class="partners-logos__visually-hidden">БУКВОЕД</span></li>
        </ul>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
