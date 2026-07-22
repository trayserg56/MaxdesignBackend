<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;

$APPLICATION->SetPageProperty("description", "Элитный дизайн интерьера в Санкт-Петербурге для квартир, офисов и загородных домов. Авторские проекты от премиум-студии Maxdesign. Реализация под ключ с авторским надзором и 3D-визуализацией. Создаем интерьеры с характером!");
$APPLICATION->SetPageProperty("keywords", "элитный дизайн интерьера, студия элитного дизайна спб, премиум интерьеры санкт-петербург, заказать элитный дизайн проект, лучшие дизайнеры интерьера спб, архитектурное проектирование элитное, дизайн квартир премиум класса");
$APPLICATION->SetPageProperty("title", "Элитный дизайн интерьера в СПб: премиум студия Maxdesign");
$APPLICATION->SetPageProperty('HTML_CLASSES', 'page--home');
$APPLICATION->SetTitle("Студия элитного дизайна интерьера Maxdesign");
?>


<section class="first-screen js-first-screen" aria-label="Главный экран">
    <?php

    $APPLICATION->IncludeComponent(
        'bitrix:news.list',
        'main-slider',
        [
            'IBLOCK_TYPE' => 'main',
            'IBLOCK_ID' => '17',
            'NEWS_COUNT' => '10',
            'SORT_BY2' => 'ACTIVE_FROM',
            'SORT_ORDER2' => 'DESC',
            'SORT_BY1' => 'SORT',
            'SORT_ORDER1' => 'ASC',
            'PROPERTY_CODE' => [
                'VIDEO',
                'VIDEO_DETAIL',
            ],
            'ACTIVE_DATE_FORMAT' => 'd.m.Y',
            'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
            'ADD_SECTIONS_CHAIN' => 'N',
            'INCLUDE_SUBSECTIONS' => 'Y',
            'CACHE_TYPE' => 'A',
            'CACHE_TIME' => 36000000,
            'CACHE_FILTER' => 'Y',
            'CACHE_GROUPS' => 'Y',
        ]
    );
    ?>
    <div class="first-screen__overlay" aria-hidden="true"></div>
    <div class="first-screen__top">
        <p class="first-screen__tagline"><?php
            $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                [
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/FS-tagline.php",
                ]
            );
            ?></p></div>
    <div class="first-screen__bottom">
        <div class="first-screen__logo"></div>
        <div class="first-screen__actions">
            <a class="button button--cta-light" href="/kontakty/">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/FS-btn1.php",
                    ]
                );
                ?>
            </a><a
                    class="button button--cta-dark js-first-screen-promo" href="#promo" data-modal-target="#promo" data-promo-video="">
            <span class="button__icon" aria-hidden="true"><img
                        src="<?= SITE_TEMPLATE_PATH ?>/assets/images/watch.df84ff56.svg" alt="" width="19" height="19"></span>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/FS-btn2.php",
                    ]
                );
                ?>
            </a>
        </div>
    </div>
</section>
<section class="about" id="about" aria-labelledby="about-heading">
    <div class="container about__inner">
        <div class="about__col about__col--text">
            <div class="about__intro"><h2 class="about__label" id="about-heading">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/about-heading.php",
                        ]
                    );
                    ?></h2>
                <p class="about__lead">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/about-lead.php",
                            ]
                    );
                    ?>
                    </p></div>
            <div class="about__stats">
                <div class="about__stat"><p class="about__stat-value">
                        <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/about-stat-value.php",
                            ]
                        );
                        ?></p>
                    <p class="about__stat-caption">
                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/about-stat.php",
                                ]
                        );
                        ?>
                        </p></div>
                <div class="about__stat"><p class="about__stat-value">
                        <?php
                        $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/about-stat-value1.php",
                            ]
                        );
                        ?></p>
                    <p class="about__stat-caption">
                        <?php
                        $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/include/about-stat-caption.php",
                                ]
                        );
                        ?>
                       </p></div>
            </div>
        </div>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main-awards',
            [
                'IBLOCK_TYPE' => 'main',
                'IBLOCK_ID' => '16',
                'NEWS_COUNT' => '5',
                'SORT_BY2' => 'ACTIVE_FROM',
                'SORT_ORDER2' => 'DESC',
                'SORT_BY1' => 'SORT',
                'SORT_ORDER1' => 'ASC',
                'PROPERTY_CODE' => [
                    'ICON'
                ],
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => 36000000,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
                'AWARDS_AMOUNT' => '164 награды',
            ]
        );
        ?>
    </div>
</section>
<?php

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main-projects',
    [
        'IBLOCK_TYPE' => 'portfolio',
        'IBLOCK_ID' => '6',
        'NEWS_COUNT' => '10',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER2' => 'DESC',
        'SORT_BY1' => 'SORT',
        'SORT_ORDER1' => 'ASC',
        'PROPERTY_CODE' => [
            'RATIO',
            'YEAR',
        ],
        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'ADD_SECTIONS_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'Y',
        'CACHE_TYPE' => 'A',
        'CACHE_TIME' => 36000000,
        'CACHE_FILTER' => 'Y',
        'CACHE_GROUPS' => 'Y',
        'PAGER_TEMPLATE' => 'projects',
    ]
);
?>
<section class="service" id="service" aria-labelledby="service-heading">
    <div class="service__inner">
        <div class="service__title"><p class="service__label">Услуги</p>
            <h2 class="service__heading" id="service-heading">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/service-heading.php",
                    ]
                );
                ?>

            </h2></div>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main-service',
            [
                'IBLOCK_TYPE' => 'services',
                'IBLOCK_ID' => '10',
                'NEWS_COUNT' => '8',
                'SORT_BY2' => 'ACTIVE_FROM',
                'SORT_ORDER2' => 'DESC',
                'SORT_BY1' => 'SORT',
                'SORT_ORDER1' => 'ASC',
                'PROPERTY_CODE' => [],
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => 36000000,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
            ]
        );
        ?>
    </div>
</section>
<section class="home-why" id="why" aria-labelledby="why-heading">
    <div class="home-why__inner">
        <div class="home-why__title"><p class="home-why__label">
                <?php
                $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/why-title.php",
                        ]
                );
                ?>
                </p>
            <h2 class="home-why__heading" id="why-heading">
                <?php
                $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/why-heading.php",
                        ]
                );
                ?>

            </h2></div>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main-why',
            [
                'IBLOCK_TYPE' => 'partners',
                'IBLOCK_ID' => '18',
                'NEWS_COUNT' => '4',
                'SORT_BY2' => 'ACTIVE_FROM',
                'SORT_ORDER2' => 'DESC',
                'SORT_BY1' => 'SORT',
                'SORT_ORDER1' => 'ASC',
                'PROPERTY_CODE' => [],
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => 36000000,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
            ]
        );
        ?>
    </div>
</section>
<section class="team" id="team" aria-labelledby="team-heading">
    <div class="team__inner">
        <div class="team__title"><p class="team__label">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/team-lable.php",
                    ]
                );
                ?></p>
            <h2 class="team__heading" id="team-heading">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/team-heading.php",
                    ]
                );
                ?></h2>
            <p class="team__text">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/team-text.php",
                    ]
                );
                ?></p></div>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main-team',
            [
                'IBLOCK_TYPE' => 'team',
                'IBLOCK_ID' => '5',
                'NEWS_COUNT' => '20',
                'SORT_BY1' => 'ACTIVE_FROM',
                'SORT_ORDER1' => 'DESC',
                'SORT_BY2' => 'SORT',
                'SORT_ORDER2' => 'ASC',
                'PROPERTY_CODE' => [],
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => 36000000,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
            ]
        );
        ?>
    </div>
</section>
<section class="partners" id="partners" aria-labelledby="partners-heading">
    <div class="partners__inner">
        <div class="partners__title"><p class="partners__label">
                <?php
                $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/partners-lable.php",
                        ]
                );
                ?>
               </p>
            <h2 class="partners__heading" id="partners-heading">
                <?php
                $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/partners-heading.php",
                        ]
                );
                ?>
                </h2></div>
        <?php

        $APPLICATION->IncludeComponent(
            'bitrix:news.list',
            'main-partners',
            [
                'IBLOCK_TYPE' => 'partners',
                'IBLOCK_ID' => '15',
                'NEWS_COUNT' => '14',
                'SORT_BY2' => 'ACTIVE_FROM',
                'SORT_ORDER2' => 'DESC',
                'SORT_BY1' => 'SORT',
                'SORT_ORDER1' => 'ASC',
                'PROPERTY_CODE' => [],
                'ACTIVE_DATE_FORMAT' => 'd.m.Y',
                'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
                'ADD_SECTIONS_CHAIN' => 'N',
                'INCLUDE_SUBSECTIONS' => 'Y',
                'CACHE_TYPE' => 'A',
                'CACHE_TIME' => 36000000,
                'CACHE_FILTER' => 'Y',
                'CACHE_GROUPS' => 'Y',
            ]
        );
        ?>
    </div>
</section>
<?php

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main-reference',
    [
        'IBLOCK_TYPE' => 'main',
        'IBLOCK_ID' => '21',
        'NEWS_COUNT' => '25',
        'SORT_BY2' => 'ACTIVE_FROM',
        'SORT_ORDER2' => 'DESC',
        'SORT_BY1' => 'SORT',
        'SORT_ORDER1' => 'ASC',
        'PROPERTY_CODE' => [
            'OBJECT',
            'DOWNLOAD_FILE',
        ],
        'ACTIVE_DATE_FORMAT' => 'd.m.Y',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'ADD_SECTIONS_CHAIN' => 'N',
        'INCLUDE_SUBSECTIONS' => 'Y',
        'CACHE_TYPE' => 'A',
        'CACHE_TIME' => 36000000,
        'CACHE_FILTER' => 'Y',
        'CACHE_GROUPS' => 'Y',
    ]
);
?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>