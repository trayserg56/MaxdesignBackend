<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

global $APPLICATION;
?>
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
<section class="section-img">
    <?php $APPLICATION->IncludeFile('/prices/include/section-img.php'); ?>
</section>
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
                    </div>

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
                <li class="prices-why__item">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/prices/include/P-why-list1.php",
                        ]
                    );
                    ?></li>
                <li class="prices-why__item">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/prices/include/P-why-list2.php",
                        ]
                    );
                    ?>
                </li>
                <li class="prices-why__item">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/prices/include/P-why-list3.php",
                        ]
                    );
                    ?></li>
                <li class="prices-why__item">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/prices/include/P-why-list4.php",
                        ]
                    );
                    ?></li>
            </ul>
        </div>
    </div>
</section>

<?php

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'projects',
    [
        'IBLOCK_TYPE' => 'portfolio',
        'IBLOCK_ID' => '6',
        'NEWS_COUNT' => '10',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'DESC',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER2' => 'ASC',
        'PROPERTY_CODE' => [
            'SQUARE',
            'SQUARE_OBJECT',
            'ADDRESS',
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

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
