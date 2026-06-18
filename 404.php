<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$APPLICATION->SetTitle("404 Not Found");
?>

<section class="p-error">
    <div class="container">
        <img src="<?=SITE_TEMPLATE_PATH;?>/images/404-pic.png" class="p-error__title" alt="">
        <div class="p-error__text">
            <span>Ой! Что-то случилось...</span>
            <p>Данная страница не найдена!</p>
            <div>Возможно она была удалена или перемещена. Попробуйте начать с <a href="/">главной страницы.</a></div>
        </div>
    </div>
</section>


<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>