<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Дизайнерские услуги в Санкт-Петербурге: студия  Maxdesign оказывает услуги по дизайну жилых и общественных интерьеров, делает экспертизу и предпроектный анализ строительных объектов, оформление выставочных стендов. Подробнее по тел.: +7 (900) 650-00-50, +7 (812) 786-67-76.");
$APPLICATION->SetPageProperty("title", "Услуги частного дизайнера элитного интерьера СПб");
$APPLICATION->SetTitle("Услуги дизайнеров интерьера Санкт-Петербург");
?>
<? $APPLICATION->IncludeComponent(
    'bitrix:news',
    'services',
    array(
        'ADD_ELEMENT_CHAIN' => 'Y',
        'ADD_SECTIONS_CHAIN' => 'N',
        'AJAX_MODE' => 'N',
        'AJAX_OPTION_ADDITIONAL' => '',
        'AJAX_OPTION_HISTORY' => 'N',
        'AJAX_OPTION_JUMP' => 'N',
        'AJAX_OPTION_STYLE' => 'Y',
        'BROWSER_TITLE' => '-',
        'CACHE_FILTER' => 'N',
        'CACHE_GROUPS' => 'Y',
        'CACHE_TIME' => '36000000',
        'CACHE_TYPE' => 'N',
        'CATEGORY_CODE' => 'CATEGORY',
        'CATEGORY_ITEMS_COUNT' => '10',
        'CHECK_DATES' => 'Y',
        'COMPONENT_TEMPLATE' => 'services',
        'DETAIL_ACTIVE_DATE_FORMAT' => 'j F Y',
        'DETAIL_DISPLAY_BOTTOM_PAGER' => 'Y',
        'DETAIL_DISPLAY_TOP_PAGER' => 'N',
        'DETAIL_FIELD_CODE' => array(
            0 => 'NAME',
            1 => 'DATE_ACTIVE_FROM',
            2 => '',
        ),
        'DETAIL_PAGER_SHOW_ALL' => 'Y',
        'DETAIL_PAGER_TEMPLATE' => '',
        'DETAIL_PAGER_TITLE' => 'Страница',
        'DETAIL_PROPERTY_CODE' => array(
            0 => 'AUTHOR',
            1 => '',
        ),
        'DETAIL_SET_CANONICAL_URL' => 'N',
        'DISPLAY_BOTTOM_PAGER' => 'Y',
        'DISPLAY_DATE' => 'Y',
        'DISPLAY_NAME' => 'Y',
        'DISPLAY_PICTURE' => 'Y',
        'DISPLAY_PREVIEW_TEXT' => 'Y',
        'DISPLAY_TOP_PAGER' => 'N',
        'HIDE_LINK_WHEN_NO_DETAIL' => 'N',
        'IBLOCK_ID' => '10',
        'IBLOCK_TYPE' => 'services',
        'INCLUDE_IBLOCK_INTO_CHAIN' => 'N',
        'LIST_ACTIVE_DATE_FORMAT' => 'j F Y',
        'FILTER_FIELD_CODE' => [
            'SECTION_ID'
        ],
        'LIST_FIELD_CODE' => array(
            0 => 'NAME',
            1 => 'PREVIEW_PICTURE',
            2 => 'DATE_ACTIVE_FROM',
            3 => '',
        ),
        'LIST_PROPERTY_CODE' => array(
            0 => 'AUTHOR',
            1 => '',
        ),
        'MESSAGE_404' => '',
        'META_DESCRIPTION' => '-',
        'META_KEYWORDS' => '-',
        'NEWS_COUNT' => '100',
        'PAGER_BASE_LINK_ENABLE' => 'N',
        'PAGER_DESC_NUMBERING' => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL' => 'N',
        'PAGER_SHOW_ALWAYS' => 'N',
        'PAGER_TEMPLATE' => '',
        'PAGER_TITLE' => 'Новости',
        'PREVIEW_TRUNCATE_LEN' => '',
        'SEF_FOLDER' => '/uslugi/',
        'SEF_MODE' => 'Y',
        'SET_LAST_MODIFIED' => 'N',
        'SET_STATUS_404' => 'Y',
        'SET_TITLE' => 'Y',
        'SHOW_404' => 'N',
        'SORT_BY1' => 'ACTIVE_FROM',
        'SORT_BY2' => 'SORT',
        'SORT_ORDER1' => 'DESC',
        'SORT_ORDER2' => 'ASC',
        'STRICT_SECTION_CHECK' => 'N',
        'USE_CATEGORIES' => 'Y',
        'USE_FILTER' => 'Y',
        'USE_PERMISSIONS' => 'N',
        'USE_RATING' => 'N',
        'USE_RSS' => 'N',
        'USE_SEARCH' => 'N',
        'USE_SHARE' => 'N',
        'SEF_URL_TEMPLATES' => array(
            'news' => '',
            'detail' => '#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
        )
    ),
    false
);

$uri = new \Bitrix\Main\Web\Uri(\Bitrix\Main\Context::getCurrent()->getRequest()->getRequestUri());
$arPath = array_diff(explode('/', $uri->getPath()), ['']);
if (count($arPath) <= 1) {
?>
        <section class="approach-work">
<div class="approach-work__wrap">
<div class="approach-work__text">
<div class="approach-work__tag">
<?php
$APPLICATION->IncludeComponent(
"bitrix:main.include",
"",
[
"AREA_FILE_SHOW" => "file",
"PATH" => "/uslugi/include/approach-tag.php",
]
);
?></div>
<div class="approach-work__descr">
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            [
                "AREA_FILE_SHOW" => "file",
                "PATH" => "/uslugi/include/approach-descr.php",
            ]
        );
        ?>
</div>
</div>
<div class="approach-work__img">
        <?php $APPLICATION->IncludeFile("/uslugi/include/approach-pic.php",); ?>
</div>
</div>
</section>
<?php
}
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>