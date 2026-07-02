<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION;

// Для того чтобы работал режим правки с картинкой
$classAdditional = \Bitrix\Main\Context::getCurrent()->getRequest()->get('bitrix_include_areas') === 'Y' ? '' : 'team__bg';
$styleAdditionalText = \Bitrix\Main\Context::getCurrent()->getRequest()->get('bitrix_include_areas') === 'Y' ? 'style="color:black;"' : '';
?>
<section class="first-screen-team">
    <div class="first-screen-<?= $classAdditional ?>">
        <?php $APPLICATION->IncludeFile('/team/include/bg.php'); ?>
    </div>
    <div class="container">
        <div class="first-screen-team__wrap"><h1 class="first-screen-team__title" <?= $styleAdditionalText ?>>
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
            <div class="first-screen-team__descr" <?= $styleAdditionalText ?>>
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
<?php


$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'team',
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
