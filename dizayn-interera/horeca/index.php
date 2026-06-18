<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Создадим интерьер гостиницы, номера отеля в любом стиле: лофт, модерн, классика и др. Дизайн-проект и его воплощение под ключ, авторский надзор. Студия дизайна Maxdesign, подробнее: +7 (900) 650-00-50, +7 (812) 786-67-76.");
$APPLICATION->SetPageProperty("title", "Дизайн интерьера гостиницы, отеля в Санкт-Петербурге");
$APPLICATION->SetPageProperty("keywords", "дизайн, студия, гостиница, отель, номер, ремонт, надзор, под ключ");
$APPLICATION->SetTitle("    ");
?><section class="n-banner">
<div class="n-banner__wrapper swiper-container">
	<div class="n-banner__slider swiper-wrapper">
		<div class="n-banner__slide swiper-slide">
			<div class="n-banner__slide-image">
 <img src="/local/templates/maxdesign/images/banner/hor1.jpg" alt="">
			</div>
		</div>
		<div class="n-banner__slide swiper-slide">
			<div class="n-banner__slide-image">
 <img src="/local/templates/maxdesign/images/banner/hor2.jpg" alt="">
			</div>
		</div>
		<div class="n-banner__slide swiper-slide">
			<div class="n-banner__slide-image">
 <img src="/local/templates/maxdesign/images/banner/hor3.jpg" alt="">
			</div>
		</div>
	</div>
	<div class="swiper-slide-next swiper-button-next">
	</div>
	<div class="swiper-slide-prev swiper-button-prev">
	</div>
<div class="swiper-pagination">
</div>
</div>
<div class="n-banner__slide-text">
	<p>
		 Дизайн<br>
		 интерьера<br>
		 отелей,<br>
		 баров,<br>
		 ресторанов
	</p>
	<ul>
		<li>Имидж</li>
		<li>Аналитика</li>
		<li>Проектирование</li>
		<li>Строительство</li>
		<li>Комплектация</li>
	</ul>
 <a href="/kontakty/" class="btn n-banner-btn">Назначить встречу</a>
</div>

 </section> <section id="" class="sulugi">
<div class="container">
	<div class="partner-container">
		<div class="partner-row">
			<div class="partner-text">
				<div class="partner-min">
					<h3>Дизайн гостиницы - учесть интересы всех сторон</h3>
					<p>
						 При разработке концепции дизайна интерьера гостиницы мы стремимся удовлетворить интересы инвесторов и будущих гостей. Основа нашего дизайнерского подхода – сбалансировать их потребности таким образом, чтобы удовлетворить интересы сторон для каждой ценовой категории. При проектировании мы уделяем особое внимание комфорту, визуальному восприятию, организации освещения и цветовому решению будущего интерьера с учетом выбранной категории и концепции отеля. Мы проводим аналитику поставщиков на тендерной основе, выбираем выгодные предложения, оптимизируем бюджет и объем инвестиций на реализацию проекта.
					</p>
				</div>
			</div>
			<div class="partner-img">
 <img alt="Дизайн интерьера гостиницы, апарт-отеля -1 | Студия Maxdesign" src="/local/templates/maxdesign/images/giao1.png" title="Дизайн интерьера гостиницы, апарт-отеля -1 | Студия Maxdesign">
			</div>
		</div>
	</div>
</div>

 <?/*section id="slider" class=" md-slider">
<div class="slider-container">
	<div id="slid" class="owl-carousel">
		<div class="item">
			<div class="owl-slide" style="background-image: url('/local/templates/maxdesign/images/giao2.jpg')">
				<div class="owl-text">
					<p>
						 Современные решения для вашего<br>
						 гостиничного бизнеса
					</p>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="owl-slide" style="background-image: url('/local/templates/maxdesign/images/giao2.jpg')">
				<div class="owl-text">
					<p>
						 Особое внимание комфорту, визуальному восприятию, освещению и цветовому решению интерьера
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
 </section*/?>

    <section id="slider" class=" md-slider">
        <div class="slider-container container">
            <div id="portfolio-slider" class="owl-carousel">
                <div class="item">
                    <img src="/local/templates/maxdesign/images/giao2.jpg" class="pictureOwl" alt="">
                    <div class="titleOwl">
                        Современные решения для вашего
                        гостиничного бизнеса
                    </div>
                </div>
                <div class="item">
                    <img src="/local/templates/maxdesign/images/giao2.jpg" class="pictureOwl" alt="">
                    <div class="titleOwl">
                        Особое внимание комфорту, визуальному восприятию, освещению и цветовому решению интерьера
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section id="portfolio">
<div class="container">
	<p class="zag super-zag">
		 Портфолио
	</p>
	 <?
					global $arrFilter;
					$arrFilter = array("SECTION_ID"=>"33"); 
					?> <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"portfolio",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "portfolio",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"YEAR",1=>"ADDRESS",2=>"SQUARE",3=>"STATUS",4=>"TYPE",5=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILE_404" => "",
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "portfolio",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"SQUARE",1=>"STATUS",2=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "8",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Портфолио",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"SQUARE",1=>"",),
		"SEF_FOLDER" => "/portfolio/",
		"SEF_MODE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?> <a href="/portfolio/" class="btn btn-portfolio">ПОСМОТРЕТЬ</a>
</div>
 </section>
<?$APPLICATION->IncludeFile('/include/howwork.php',array(),array('MODE'=>'html')); ?> <?$APPLICATION->IncludeFile('/include/team.php',array(),array('MODE'=>'html')); ?> <?$APPLICATION->IncludeFile('/include/cities.php',array(),array('MODE'=>'html')); ?>
<div class="project-cost">
	<div class="container">
		<div class="project-cost__block">
			<div class="project-cost__block-wrap">
				<h2>Стоимость дизайн-проекта</h2>
				 Проектирование дизайна интерьера (за полный проект)
				<h3>от 4 000 ₽ / кв. м </h3>
 <a class="prices-sale__btn" target="_blank" href="/local/templates/maxdesign/files/gost.pdf">Пример проекта</a>
			</div>
		</div>
		<div class="project-cost__block">
 <img src="/local/templates/maxdesign/images/flat-scheme.png" alt="" class="project-cost__img">
		</div>
	</div>
</div>
 <? $APPLICATION->IncludeFile('/include/clients.php', array(), array('MODE' => 'html')); ?> <? $APPLICATION->IncludeFile('/include/new-form.php', array(), array('MODE' => 'html')); ?> <?$APPLICATION->IncludeFile('/include/maps.php',array(),array('MODE'=>'html')); ?> </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>