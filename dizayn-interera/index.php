<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Дизайн квартир, загородных домов, апартаментов, офисов, отелей, салонов-магазинов в Санкт-Петербурге. Частные дизайнеры - студия дизайна Максдизайн в СПб. Звоните! Тел.: +7 (900) 650-00-50, +7 (812) 786-67-76.");
$APPLICATION->SetPageProperty("keywords", "дизайн, квартира, интерьер, элитный, авторский, архитектура, надзор, проект, под, ключ");
$APPLICATION->SetPageProperty("title", "Дизайн интерьера квартир, загородных домов, офисов в СПб");
$APPLICATION->SetTitle("Дизайн интерьеров под ключ ");
// $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/main.min.css", true);
// $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/grid.min.css", true);
?><div class="mainer">
    <div class="container1" style="margin: 0 auto; max-width: 975px; width: 100%">
        <div class="tabs">
        </div>
        <div id="node-61">
            <div class="content">
                <h1 class="rtecenter super-zag">Выберите направление дизайн-проекта</h1>
                <div>
                    <style>
                        .uitdz-col{
                            width: 100%; 
                            max-width: 311px; 
                            margin-left: 7px;
                            margin-right: 7px;
                        }
                    </style>
                    <div class="" style="display: flex; flex-wrap: wrap; justify-content: center;">
                        <div class="uitdz-col" style="">
                            <a style="display: block; text-align: center" href="/dizayn-interera/kvartiry/">
                            <img style="margin-top: 17px" alt="1.png" src="/upload/medialibrary/af0/af0fa7b1ed049bad2c2297846019ec29.png" title="1.png">
                                КВАРТИРЫ </a>
                        </div>
                        <div class="uitdz-col">
                        <a style="display: block; text-align: center" href="/dizayn-interera/zagorodnye-doma/">

                        <img style="margin-top: 17px"  alt="2.png"
                        src="/upload/medialibrary/c35/c354f9de79ead1dd25f0b92b1c6a7b68.png"
                        title="2.png">
                        ЗАГОРОДНЫЕ ДОМА
</a>
                        </div>
                        <div class="uitdz-col">
                            <a style="display: block; text-align: center" href="/dizayn-interera/gostinitsy-i-apart-oteli/">
                                <img style="margin-top: 17px"  alt="3.png"
                                    src="/upload/medialibrary/e9b/e9bad1faab2d6185a68f893a9dd99039.png" 
                                    title="3.png">
                                ГОСТИНИЦЫ И АПАРТ-ОТЕЛИ </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="" style="display:flex; flex-wrap: wrap; justify-content: center;">
                        <div class="uitdz-col">
                            <a style="display: block; text-align: center" href="/dizayn-interera/restorany-kafe-bary/">
                                <img style="margin-top: 17px"  alt="4.png"
                                    src="/upload/medialibrary/ee1/ee13375d7a44a805c8e1055bd7b25bf8.png" 
                                    title="4.png">
                                РЕСТОРАНЫ, КАФЕ, БАРЫ</a>
                        </div>
                        <div class="uitdz-col">
                            <a style="display: block; text-align: center" href="/dizayn-interera/ofisy/">
                                <img style="margin-top: 17px"  alt="5.png"
                                    src="/upload/medialibrary/08f/08fc07727b5632485b521471fe07c4c2.png" 
                                    title="5.png">
                                ОФИСЫ </a>
                        </div>
                        <div class="uitdz-col">
                            <a style="display: block; text-align: center" href="/dizayn-interera/magaziny-i-salony-krasoty/">
                                <img style="margin-top: 17px" alt="6.png"
                                    src="/upload/medialibrary/4d5/4d5e29d553eea341c00eac9cefca71bf.png"
                                    title="6.png">
                                МАГАЗИНЫ,САЛОНЫ КРАСОТЫ </a>
                        </div>
                    </div>
                </div>
                <div class="" style="margin: 100px auto 0 auto;">
                    <hr>
                    </br>
                    <p class="rtecenter new-rtcenter">
                        <a target="_blank" href="/uslugi/">Студия дизайна Maxdesign занимается</a> проектированием разных по функции<br>
                        направлений жилых и общественных интерьеров. Для каждого<br>
                        нашего объекта мы привлекаем профильных специалистов для<br>
                        достижения наилучших результатов.<br>
                    </p>
                    </br>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="cc-button">
	<div class="wave-l-1"></div>
	<div class="wave-l-2"></div>
	<div class="wave-r-1"></div>
	<div class="wave-r-2"></div>
</div>
<?$APPLICATION->IncludeFile('/include/maps.php',array(),array('MODE'=>'html')); ?>
<?$APPLICATION->IncludeFile('/include/new-form.php',array(),array('MODE'=>'html')); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>