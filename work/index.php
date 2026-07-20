<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;
?>

<section class="work-hero">
    <div class="work-hero__media">
        <img class="work-hero__image" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/hero.75c2c04e.jpg"
           alt="Общественная деятельность студии maxdesign" width="1920"
           height="965" loading="eager" decoding="async">
    </div>
    <div class="work-hero__overlay"></div>
    <div class="work-hero__content"><h1 class="work-hero__title">
            <?php
            $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/work/include/title.php",
                    ]
            );
            ?></h1>
        <p class="work-hero__subtitle">
            <?php
            $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/work/include/subtitle.php",
                    ]
            );
            ?></p></div>
</section>
<section class="work-contribution" aria-labelledby="work-contribution-heading">
    <div class="work-contribution__inner"><h2 class="work-contribution__label" id="work-contribution-heading">
            <?php
            $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/work/include/label.php",
                    ]
            );
            ?></h2>
        <p class="work-contribution__text">
            <?php
            $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/work/include/text.php",
                    ]
            );
            ?></p>
        <ul class="work-contribution__list">
            <li class="work-contribution__item"><p class="work-contribution__item-text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/item1.php",
                            ]
                    );
                    ?></p></li>
            <li class="work-contribution__item"><p class="work-contribution__item-text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/item2.php",
                            ]
                    );
                    ?></p></li>
            <li class="work-contribution__item"><p class="work-contribution__item-text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/item3.php",
                            ]
                    );
                    ?></p></li>
            <li class="work-contribution__item"><p class="work-contribution__item-text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/item4.php",
                            ]
                    );
                    ?></p></li>
        </ul>
    </div>
</section>
<section class="work-service" aria-labelledby="work-service-heading">
    <div class="work-service__inner"><h2 class="work-service__title" id="work-service-heading">Почему это
            важно</h2>
        <ul class="work-service__list">
            <li class="work-service__item"><span class="work-service__num">01</span>
                <p class="work-service__text"><?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/serviceItem1.php",
                            ]
                    );
                    ?></p></li>
            <li class="work-service__item"><span class="work-service__num">02</span>
                <p class="work-service__text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/serviceItem2.php",
                            ]
                    );
                    ?></p></li>
            <li class="work-service__item"><span class="work-service__num">03</span>
                <p class="work-service__text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/serviceItem3.php",
                            ]
                    );
                    ?></p></li>
            <li class="work-service__item"><span class="work-service__num">04</span>
                <p class="work-service__text">
                    <?php
                    $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "PATH" => "/work/include/serviceItem4.php",
                            ]
                    );
                    ?></p></li>
        </ul>
    </div>
</section>
<?php
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'work-slider',
    [
            'IBLOCK_TYPE' => 'work',
            'IBLOCK_ID' => '22',
            'NEWS_COUNT' => '10',
            'SORT_BY2' => 'ACTIVE_FROM',
            'SORT_ORDER2' => 'DESC',
            'SORT_BY1' => 'SORT',
            'SORT_ORDER1' => 'ASC',
            'PROPERTY_CODE' => [
                'MOBILE_NAME',
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
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>