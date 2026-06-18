<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);

$GLOBALS["PAGE"] = explode("/", $APPLICATION->GetCurPage());
?><!DOCTYPE html>
<html lang="ru">
<head>
<meta name="facebook-domain-verification" content="sv1sth44ok1jxu0gamo6cojq1q7via" />
<!-- Google Tag Manager -->
<script data-skip-moving ="true">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WRTPRPP');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="bHgzl9YPWrrLY-M9a0sN-K6gO0zPxdS0VlXV1Cb7hFk" />
<!-- <meta charset="utf-8"> -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&display=swap" rel="stylesheet"> 
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Roboto-Medium.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Montserrat-Light.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Montserrat-SemiBold.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Montserrat-Medium.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Montserrat-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Montserrat-Regular.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Roboto-Regular.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="preload" href="<?=SITE_TEMPLATE_PATH?>/fonts/Roboto-Bold.woff" as="font" type="font/woff" crossorigin="anonymous">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/fonts/stylesheet.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/swiper-bundle.css">
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/swiper-bundle.min.css">

<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/hc-offcanvas-nav.css">
<!--
<link rel="preload" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" as="style">
-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<!-- <link rel="manifest" href="/site.webmanifest"> -->
<title><?$APPLICATION->ShowTitle()?></title>
<?/*$APPLICATION->ShowMeta("keywords")*/?>
<?/*$APPLICATION->ShowMeta("description")*/?>

<?$APPLICATION->ShowHead();?>
    <link rel="canonical" href="https://maxdesign.pro<?=$APPLICATION->GetCurPage();?>" />
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.mmenu.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/reveal.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/remodal.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/lity.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.css", true);?>
<!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/viewer.min.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/responsive.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/md.css", true);?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/portfolio.css", true);?>
<?global $USER;
if($USER->IsAdmin()):?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/new-portfolio.css", true);?>
<?endif;?>
<?//CJSCore::Init(array("jquery"));?>
<?//$APPLICATION->AddHeadScript('//www.google.com/recaptcha/api.js?render=6Lf3GOgUAAAAACvItwqr2jJSRtGvnjjP3aDFgtZL');?>

<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.4.1.min.js" );?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/hc-offcanvas-nav.js" );?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/imgslider.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.fancybox.min.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.mmenu.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/remodal.min.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.reveal.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/lity.js" );?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.waypoints.js" );?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/swiper-bundle.js" );?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/swiper-bundle.min.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/social.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/slick.min.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/viewer.min.js" );?>
<!--<script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js" );?>
<?//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/md.js" );?>

<?$APPLICATION->ShowHeadStrings();?>
<?/*$APPLICATION->ShowHeadScripts();*/?>

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Maxdesign",
    "url": "https://maxdesign.pro/",
    "logo": "https://maxdesign.pro/local/templates/maxdesign/images/logo.png",
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+7(900)650-00-50",
      "contactType": "sales",
      "areaServed": "RU",
      "availableLanguage": "Russian"
    },{
      "@type": "ContactPoint",
      "telephone": "+7(812)786-67-76",
      "contactType": "customer service",
      "areaServed": "RU",
      "availableLanguage": "Russian"
    }],
    "sameAs": [
      "https://vk.com/maxdesignstudio"
    ]
  }
</script>
</head>

<body>
<?$APPLICATION->ShowPanel()?>
<?
function isActive($APPLICATION, $url){
	if($APPLICATION->GetCurPage() == $url){
		return "class='active'";
	}
	return "";
}
function isActiveTop($APPLICATION, $url){
	if(strpos($APPLICATION->GetCurPage(),$url) !== false){
		return "active";
	}
	return "";
}
?>
<div class="modern-nav">
        <div class="top-top new-menu__top">
            <div class="container">
                <div class="logo-container">
                    <a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="" /></a>
                </div>
              <div class="logo-descr">Студия архитектуры и дизайна интерьера в Санкт-Петербурге</div>

              <div class="top-right">
                <div class="tel-container tel-container--ed">
                  <a class="header__phone phone--track" href="tel:+79006500050">+7 900 650 00 50</a>
                  <a class="header__mail email--track" href="mailto:info@maxdesign.pro">info@maxdesign.pro</a>
                </div>
					<div class="tel-icon">
                        <a href="tel:+79006500050" class="newnav-icon-num"><i class="fa fa-phone" aria-hidden="true"></i></a>
                      </div>
                      <div class="mail-icon">
                        <a href="#" data-reveal-id="zakaz" class="newnav-icon-mail"><i class="far fa-envelope" aria-hidden="true"></i></a>
                      </div>
				<!--
                <div class="header__chatbots" style="
    display: flex;">
                  <a href="https://wa.me/+79601702579" class="chatbot chatbot__whatsapp"></a>
                  <a href="https://t.me/Edgarrus" class="chatbot chatbot__telegram"></a>
                  <a href="viber://chat?number=%2B79601702579" class="chatbot chatbot__viber"></a>
                </div>
				-->
                <!--
                <div class="header__btn-ed">
                  <a href="#" class="btn-ed btn-ed__orange" data-reveal-id="zakaz">Запись на консультацию</a>
                </div>
                -->
              </div>


              <!--<div class="top-right">
                    <div class="tel-container">
                        <a href="tel:+79006500050">+7(900)650-00-50</a>
                    </div>
                    <div class="tel-container">
                        <a href="tel:+78127866776">+7(812)786-67-76</a>
                    </div>
                    <div class="tel-icon">
                        <a href="tel:+79006500050"><i class="fa fa-phone" aria-hidden="true"></i></a>
                    </div>
                    <div class="mail-icon">
                        <a href="#" data-reveal-id="zakaz"><i class="far fa-envelope" aria-hidden="true"></i></a>
                    </div>
                </div>
              -->
            </div>
        </div>
        <div class="new-menu">
            <div class="container">
                <nav class="newnav">
                    <div class="newnav__logo">
                        <a href="/"><img src="/local/templates/maxdesign/images/logo2.png" alt="" /></a>
                    </div>
                    <nav id="main-nav" class="new-mob-nav">
                        <ul class="first-nav">
                            <li class="">
                                <a class="mobile-nav-title" href="">Портфолио</a>
								<ul>
									<li class="">
										<a href="/portfolio/">ВСЕ ПРОЕКТЫ</a>
									</li>
									<li class="">
										<a href="/portfolio/dizayn-interera/kvartiry/">Квартиры</a>
									</li>
									<li class="m">
										<a href="/portfolio/dizayn-interera/zagorodnye-doma/">Загородные дома</a>
									</li>
									<li class="">
										<a href="/portfolio/dizayn-interera/ofisy/">Офисы</a>
									</li>
									<li class="">
										<a href="/portfolio/dizayn-interera/gostinitsy-i-apart-oteli/">HORECA</a>
									</li>
									<li class="">
										<a href="/portfolio/arkhitekturnoe-proektirovanie/">Архитектурное проектирование</a>
									</li>
									<li class="">
										<a href="/portfolio/3d-vizualizatsiya/">Выставочные стенды</a>
									</li>
								</ul>
                            </li>
                            <li class="">
                                <a class="mobile-nav-title" href="">Услуги</a>
                                <ul>
									<!--
                                    <li class="mobile-new__item-first">
                                        <a>Дизайн жилых интерьеров</a>
                                    </li>
-->
                                    <li class="">
										<a href="/dizayn-interera/generalnyj-podrjad/">Генеральный подряд</a>
                                    </li>
                                    <li class="">
                                        <a href="/dizayn-interera/kvartiry/">Квартиры</a>
                                    </li>
                                    <li class="">
                                        <a href="/dizayn-interera/zagorodnye-doma/">Загородные дома</a>
                                    </li>
<!--
                                    <li class="mobile-new__item-first">
                                        <a>Дизайн общественных интерьеров</a>
                                    </li>
-->
                                    <li class="">
                                        <a href="/dizayn-interera/ofisy/">Офисы</a>
                                    </li>
									<li class="">
										<a href="/dizayn-interera/horeca/">Horeca</a>
									</li>
<!--
                                    <li class="">
                                        <a href="/dizayn-interera/gostinitsy-i-apart-oteli/">Гостиницы и апарт-отели</a>
                                    </li>
                                    <li class="">
                                        <a href="/dizayn-interera/restorany-kafe-bary/">Рестораны, кафе, бары</a>
                                    </li>
                                    <li class="">
                                        <a href="/dizayn-interera/magaziny-i-salony-krasoty/">Магазины, салоны красоты</a>
                                    </li>
-->
                                    <li class="">
                                        <a href="/uslugi/arkhitekturnoe-proektirovanie/">Архитектурное проектирование</a>
                                    </li>
									<li class="">
										<a href="/uslugi/proektirovanie-obshchestvennyh-zdanij/">Проектирование общественных зданий</a>
									</li>
									<li class="">
										<a href="/uslugi/proektirovanie-zhilyh-zdanij/">Проектирование жилых зданий</a>
									</li>
									<li class="">
										<a href="/uslugi/3d-vizualizatsiya/">Выставочные стенды</a>
									</li>
<!--
                                    <li class="mobile-new__item-first">
                                        <a>Консалтинг</a>
                                    </li>
-->
                                    <li class="">
                                        <a href="/uslugi/ekspertiza/">Экспертиза</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a class="mobile-nav-title" href="/prices/">Цены</a>
                            </li>
                            <li class="">
                                <a class="mobile-nav-title">О студии</a>
                                <ul>
                                    <li><a href="/nasha-komanda/">Наша команда</a></li>
                                    <li><a href="/napravlenie-deyatelnosti/">Направление деятельности</a></li>
                                    <li><a href="/partnery/">Партнёры</a></li>
                                    <li><a href="/obshchestvo/">Общество</a></li>
                                </ul>
                            </li>
                            <li class=""><a class="mobile-nav-title" href="/blog/">Блог</a></li>
                            <li class=""><a class="mobile-nav-title" href="/kontakty/">Контакты</a></li>
                        </ul>
                    </nav>
                    <ul class="newnav__list">
                        <li class="newnav__item">
                            <a href="/portfolio/" class="newnav__link">Портфолио</a>
							<div class="newnav__dropdown-list">
                                <div class="container">
                                    <ul class="about-nav-list-drop portfolio-nav-list-drop">
                                        <li class="newnav__dropdown-item">
                                            <a href="/portfolio/">Все проекты</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/portfolio/dizayn-interera/kvartiry/">Квартиры</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/portfolio/dizayn-interera/zagorodnye-doma/">Загородные дома</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/portfolio/dizayn-interera/ofisy/">Офисы</a>
                                        </li>
										<li class="newnav__dropdown-item">
                                            <a href="/portfolio/dizayn-interera/gostinitsy-i-apart-oteli/">Horeca</a>
                                        </li>
										<li class="newnav__dropdown-item">
                                            <a href="/portfolio/arkhitekturnoe-proektirovanie/">Архитектурное проектирование</a>
                                        </li>
										<li class="newnav__dropdown-item">
                                            <a href="/portfolio/3d-vizualizatsiya/">Выставочные стенды</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="newnav__item">
                            <a href="/uslugi/" class="newnav__link">Услуги
                            </a>
                            <div class="newnav__dropdown-list">
                                <div class="container newnav__services-container">
                                    <ul class="newnav__services-list">
                                        <li class="newnav__dropdown-item">
                                            <a>Дизайн жилых интерьеров</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/generalnyj-podrjad/">Генеральный подряд</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/kvartiry/">Квартиры</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/zagorodnye-doma/">Загородные дома</a>
                                        </li>
                                    </ul>
                                    <ul class="newnav__services-list">
                                        <li class="newnav__dropdown-item">
                                            <a>Дизайн общественных интерьеров</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/ofisy/">Офисы</a>
                                        </li>
										<li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/horeca/">Horeca</a>
                                        </li>
<!--
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/gostinitsy-i-apart-oteli/">Гостиницы и апарт-отели</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/restorany-kafe-bary/">Рестораны, кафе, бары</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/dizayn-interera/magaziny-i-salony-krasoty/">Магазины, салоны красоты</a>
                                        </li>
-->
                                    </ul>
                                    <ul class="newnav__services-list">
                                        <li class="newnav__dropdown-item">
                                            <a href="/uslugi/arkhitekturnoe-proektirovanie/">Архитектурное проектирование</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/uslugi/proektirovanie-obshchestvennyh-zdanij/">Проектирование общественных зданий</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/uslugi/proektirovanie-zhilyh-zdanij/">Проектирование жилых зданий</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/uslugi/3d-vizualizatsiya/">Выставочные стенды</a>
                                        </li>
                                    </ul>
                                    <ul class="newnav__services-list">
                                        <li class="newnav__dropdown-item">
                                            <a>Консалтинг</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/uslugi/ekspertiza/">Экспертиза</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="newnav__item">
                            <a href="/prices/" class="newnav__link">Цены</a>
                        </li>
                        <li class="newnav__item newnav__item-about">
                            <a class="newnav__link">О студии</a>
                            <div class="newnav__dropdown-list">
                                <div class="container">
                                    <ul class="about-nav-list-drop">
                                        <li class="newnav__dropdown-item">
                                            <a href="/nasha-komanda/">Наша команда</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/napravlenie-deyatelnosti/">Направление деятельности</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/partnery/">Партнёры</a>
                                        </li>
                                        <li class="newnav__dropdown-item">
                                            <a href="/obshchestvo/">Общество</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="newnav__item">
                            <a href="/blog/" class="newnav__link">Блог</a>
                        </li>
                        <li class="newnav__item">
                            <a href="/kontakty/" class="newnav__link">Контакты</a>
                        </li>
                    </ul>
                    <div class="top-right--new">
                        <div class="newnav__header-phone">
                            <a href="tel:+78127866776">+7 (812) 786-67-76</a>
                        </div>
                      <div class="tel-icon">
                        <a href="tel:+78127866776" class="newnav-icon-num"><i class="fa fa-phone" aria-hidden="true"></i></a>
                      </div>
                      <div class="mail-icon">
                        <a href="#" data-reveal-id="zakaz" class="newnav-icon-mail"><i class="far fa-envelope" aria-hidden="true"></i></a>
                     </div>
					<div class="mail-icon">
						<a href="https://wa.me/79006500050" class="newnav-icon-mail">
							<i class="fab fa-whatsapp"></i>
						</a>
					</div>
					<!--
					<div class="mail-icon">
						<a href="/kontakty/" class="newnav-icon-mail">
							<i class="fas fa-map-marker-alt"></i>
						</a>
					</div>
					-->
					<a href="#main-nav" class="menu-phone__new toggle"><span></span></a>
						<!--
                      <div class="header__chatbots">
                        <a href="https://wa.me/+79045111333" class="chatbot chatbot--mini chatbot__whatsapp"></a>
                        <a href="https://salebot.site/r/30bb52a977327a9150d086fe927f58c3_1" class="chatbot chatbot--mini chatbot__telegram"></a>
                        <a href="https://salebot.site/r/30bb52a977327a9150d086fe927f58c3_2" class="chatbot chatbot--mini chatbot__viber"></a>
                      </div>
						-->

                    </div>
                </nav>


                <!--            --><?// $APPLICATION->IncludeComponent(
                //                "bitrix:menu",
                //                "newnav-menu",
                //                array(
                //                    "ALLOW_MULTI_SELECT" => "N",
                //                    "CHILD_MENU_TYPE" => "subtop",
                //                    "DELAY" => "N",
                //                    "MAX_LEVEL" => "2",
                //                    "MENU_CACHE_GET_VARS" => array(),
                //                    "MENU_CACHE_TIME" => "3600",
                //                    "MENU_CACHE_TYPE" => "N",
                //                    "MENU_CACHE_USE_GROUPS" => "Y",
                //                    "ROOT_MENU_TYPE" => "newnav",
                //                    "USE_EXT" => "N",
                //                    "COMPONENT_TEMPLATE" => "newnav-menu",
                //                    "MENU_THEME" => "site"
                //                ),
                //                false
                //            ); ?>
            </div>
        </div>
        <?if($APPLICATION->GetCurPage() == '/portfolio/'):?>
            <div class="select-menu header-sort">
                <div class="list-box">
                    <span class="total">Сортировать по <i class="fas fa-sort-down"></i></span>
                    <ul class="list_tab">
                        <li style="cursor:pointer;" onclick='location.href = "?GROUP_BY=YEAR";'>Дате</li>
                        <li style="cursor:pointer;" onclick='location.href = "?GROUP_BY=CATEGORY";'>Типу</li>
                    </ul>
                </div>
            </div>
        <?endif;?>
</div>
