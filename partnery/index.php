<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION;
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
                                    "PATH" => "/partnery/include/FS-Title.php",
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
                                    "PATH" => "/partnery/include/FS-descr.php",
                            ]
                    );
                    ?>
                </div>
            </div>
            <button class="button button--middle">Стать партнером</button>
        </div>
    </div>
</section>
<section class="section-img">
    <?php $APPLICATION->IncludeFile('/partnery/include/pic.php'); ?>
</section>

<?php

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'partnership-targets',
    [
        'IBLOCK_TYPE' => 'partners',
        'IBLOCK_ID' => '13',
        'NEWS_COUNT' => '100',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'DESC',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER2' => 'ASC',
        'PROPERTY_CODE' => [
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
?><?php

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'partnership-benefits',
    [
        'IBLOCK_TYPE' => 'partners',
        'IBLOCK_ID' => '14',
        'NEWS_COUNT' => '100',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'DESC',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER2' => 'ASC',
        'PROPERTY_CODE' => [
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
?><?php

$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'partners',
    [
        'IBLOCK_TYPE' => 'partners',
        'IBLOCK_ID' => '15',
        'NEWS_COUNT' => '100',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_ORDER1' => 'DESC',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER2' => 'ASC',
        'PROPERTY_CODE' => [
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
