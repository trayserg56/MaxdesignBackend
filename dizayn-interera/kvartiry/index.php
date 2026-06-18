<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Элитный дизайн квартир в Санкт-Петербурге от студии Maxdesign. Премиальные интерьеры под ключ: авторский надзор, уникальные планировки и 3D-визуализация. Узнайте стоимость элитного проекта!");
$APPLICATION->SetPageProperty("keywords", "элитный дизайн интерьера, заказать элитный дизайн проект, премиум дизайн квартир спб, дизайн проект элитной квартиры цена, эксклюзивный интерьер квартир, студия элитного дизайна, авторский дизайн проект квартиры, люкс ремонт и дизайн, стоимость элитного дизайна интерьера, дизайн проект квартиры под ключ спб");
$APPLICATION->SetPageProperty("title", "Элитный дизайн интерьера квартир в СПб: заказать премиум дизайн-проект под ключ");
$APPLICATION->SetTitle("Элитный дизайн интерьера квартир");
?><h1 style="display: none">Дизайн интерьера квартиры</h1>
 <section class="n-banner">
<div class="n-banner__wrapper swiper-container">
	<div class="n-banner__slider swiper-wrapper">
		<div class="n-banner__slide swiper-slide">
			<div class="n-banner__slide-image">
 <img src="/local/templates/maxdesign/images/banner/kv1.jpg" alt="">
			</div>
		</div>
		<div class="n-banner__slide swiper-slide">
			<div class="n-banner__slide-image">
 <img src="/local/templates/maxdesign/images/banner/kv2.jpg" alt="">
			</div>
		</div>
		<div class="n-banner__slide swiper-slide">
			<div class="n-banner__slide-image">
 <img src="/local/templates/maxdesign/images/banner/kv3.jpg" alt="">
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
		 Дизайн <br>
		 интерьера <br>
		 квартир
	</p>
	<ul>
		<li>Проектирование </li>
		<li>Ремонт</li>
		<li>Мебель</li>
		<li>Декорирование</li>
	</ul>
 <a href="/kontakty/" class="btn n-banner-btn">Назначить встречу</a>
</div>
 </section>
<!--
<div style="position: relative;background-color: black;margin-bottom:60px">
  <div class="container" style="position: absolute;left: 50%;transform: translate(-50%, -50%);top: 50%;z-index: 10;">
      <?if (!CSite::InDir('/index.php')):?>

        <div class="breadcrumbs" style="position: static;color:grey">
          <div class="container">
              <? $APPLICATION->IncludeComponent(
                  "bitrix:breadcrumb",
                  ".default",
                  array(
                      "PATH" => "",
                      "SITE_ID" => "s1",
                      "START_FROM" => "0",
                      "COMPONENT_TEMPLATE" => ".default"
                  ),
                  false
              ); ?>
          </div>
        </div>


      <?endif?>
    <div style="width: 650px;background-color: #00000045;padding: 30px;">
      <div style="color: white;font-size: 32px;font-weight: bold;margin-bottom: 10px;">Разработаем уникальный дизайн-проект для Вашей квартиры.</div>
      <div style="color: white;margin-bottom: 15px;border-bottom: 1px solid white;padding-bottom: 15px;">В нашем портфолио более 80 выполненных проектов квартир - от небольших студий до пентхаусов. Работаем с отделочными материалами и мебелью премиального качества.</div>
      <ul style="color: white;">
        <li style="margin-bottom: 10px; display: flex"><img src="https://msc.delouslug.ru/upload/medialibrary/b23/b23b13dd818c6f52243ebc03261a09fc.png" style="width: 30px;height: 30px;object-fit: contain;object-position: top;margin-right: 10px;"><div><span style="font-weight: bold; color: #ffef00">Максимальная индивидуальность</span> - каждый проект уникален и неповторим, мы не используем шаблонных решений</div></li>
        <li style="margin-bottom: 10px; display: flex"><img src="https://msc.delouslug.ru/upload/medialibrary/b23/b23b13dd818c6f52243ebc03261a09fc.png" style="width: 30px;height: 30px;object-fit: contain;object-position: top;margin-right: 10px;"><div><span style="font-weight: bold;color: #ffef00"">Максимальный уровень комфорта</span> - занимаемся реализацией дизайн-проектов под ключ, от разработки до отделочных работ</div></li>
        <li style="margin-bottom: 10px; display: flex"><img src="https://msc.delouslug.ru/upload/medialibrary/b23/b23b13dd818c6f52243ebc03261a09fc.png" style="width: 30px;height: 30px;object-fit: contain;object-position: top;margin-right: 10px;"><div><span style="font-weight: bold;color: #ffef00"">Максимальная экспертиза</span> - имеем 10-летний опыт разработки интерьеров для квартир в новострое и старом фонде</div></li>
        <li style="margin-bottom: 30px; display: flex"><img src="https://msc.delouslug.ru/upload/medialibrary/b23/b23b13dd818c6f52243ebc03261a09fc.png" style="width: 30px;height: 30px;object-fit: contain;object-position: top;margin-right: 10px;"><div><span style="font-weight: bold;color: #ffef00"">Максимальная скорость</span> - через 3 месяца получаете готовую квартиру с дизайнерким ремонтом и мебелью</div></li>
      </ul>
      <div style="display: flex;">
        <a style="background-color: #ffef00;padding: 15px;font-size: 16px;display: block;margin-right: 10px;border: 3px solid #ffef00;">Узнать стоимость проекта</a>
        <a style="padding: 15px;font-size: 16px;color: white;border: 3px solid #ed6340;font-weight: bold;display: block;">Записаться на консультацию</a>
      </div>
    </div>
  </div>
  <div style="width: 100%;height: 100%;background-repeat: no-repeat;background-position: center;background-size: cover;background-color: black;position: absolute;opacity: 0.6;">

  </div>
  <div style="width: 100%;background-image: url(https://c.wallhere.com/photos/85/c5/HDR_indoors-250852.jpg!d);height: 700px;background-repeat: no-repeat;background-position: center;background-size: cover;">

  </div>
</div> --> <!--
  <div class="society kvv">
	<div class="header-container">
		<div class="sulugi-t">

			<div class="sulugi-btn-group">
				 <a class="btn btn-promo3" data-reveal-id="zakaz" >Оставить заявку</a> <a class="btn btn-promo3" href="/local/templates/maxdesign/files/kvart.pdf">Пример проекта</a>
			</div>
		</div>
	</div>
</div>
--> <section id="" class="sulugi">
<div class="container">
	<div class="partner-container">
		<div class="partner-row">
			<div class="partner-text">
				<div class="partner-min">
					<h3>Элитный дизайн интерьера квартиры</h3>
					<p>
						 Студия дизайна интерьеров Maxdesign специализируется на выполнении элитных дизайн-проектов для больших квартир (от 90 кв.м) под ключ в Санкт-Петербурге. Лучше слов о нас расскажут реализованные проекты, познакомиться с которыми можно в разделе <a target="_blank" href="/portfolio/">Примеры дизайна интерьера квартир под ключ</a>.
					</p>
				</div>
			</div>
			<div class="partner-img">
 <img alt="женская 3.jpg" src="/upload/medialibrary/4c0/4c04983921d99dacb0ecc957d244a8a7.jpg" title="женская 3.jpg">
			</div>
		</div>
		<div class="partner-row partner-row2">
			<div class="partner-text">
				<div class="partner-min">
					<h3>Почему мы</h3>
					<ul class="m-features__list">
						<li class="m-features__item">Прислушиваемся к вам. Прежде чем приступить к составлению проекта, наш дизайнер изучает привычки, образ жизни членов семьи, чтобы создать не только красивое, но и функциональное пространство. </li>
						<li class="m-features__item">После выполнения проекта предоставляем 3D визуализацию. Вы сможете посмотреть, каким будет ваш интерьер – если что-то вам не понравилось, мы внесем изменения. </li>
						<li class="m-features__item">Используем актуальные тренды. Наши дизайнеры регулярно участвуют в профессиональных мероприятиях (выставках, семинарах, презентациях новых материалов и технологий), изучают профессиональные периодические издания. Будьте уверены, при оформлении помещений мы используем самые свежие и передовые решения, адаптированные под ваши пожелания. </li>
						<li class="m-features__item">Реализуем любые ваши идеи, готовы воплощать в жизнь нестандартные решения и ломать стереотипы. Хотите удивлять и впечатлять гостей необычным интерьером? В Maxdesign вам точно помогут! </li>
						<li class="m-features__item"><a target="_blank" href="/blog/">Оформим интерьер в любом стиле</a>: хай-тек, минимализм, кантри, лофт, классика, барокко и т.д. </li>
						<li class="m-features__item">Используем элитную сантехнику и отделочные материалы премиум-класса. </li>
						<li class="m-features__item">Декорируем ваше жилье мебелью и аксессуарами ручной работы. Сотрудничаем с лучшими мастерами по всему миру. </li>
					</ul>
				</div>
			</div>
			<div class="partner-img">
 <img alt="Дизайн интерьера кухни" src="/upload/medialibrary/cf9/cf9c9dd515fa677d718a6de3d9a00e66.jpg" title="Дизайн интерьера кухни" width="390" height="851">
			</div>
		</div>
	</div>
</div>
 <?/*section id="slider" class=" md-slider" style="margin-bottom:0;">
<div class="slider-container">
	<div id="slid" class="owl-carousel">
		<div class="item">
			<div class="owl-slide" style="background-image: url('/local/templates/maxdesign/images/kvvs2.jpg')">
				<div class="owl-text">
					<p>
					</p>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="owl-slide" style="background-image: url('/local/templates/maxdesign/images/kvvs3.jpg')">
				<div class="owl-text">
					<p>
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
                <img src="/local/templates/maxdesign/images/kvvs2.jpg" class="pictureOwl" alt="">
            </div>
            <div class="item">
                <img src="/local/templates/maxdesign/images/kvvs3.jpg" class="pictureOwl" alt="">
            </div>

        </div>
    </div>
</section>



<?$APPLICATION->IncludeFile('/include/howwork.php',array(),array('MODE'=>'html')); ?> <section id="portfolio">
<div class="container">
	<p class="zag super-zag">
		 Портфолио
	</p>
	 <?
         global $arrFilter;
         $arrFilter = array("SECTION_ID"=>"6");
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
		"NEWS_COUNT" => "4",
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


    <?$APPLICATION->IncludeFile('/include/team.php',array(),array('MODE'=>'html')); ?> <!--    --> <?//$APPLICATION->IncludeFile('/include/cities.php',array(),array('MODE'=>'html')); ?> <?$APPLICATION->IncludeFile('/include/cost-proj.php',array(),array('MODE'=>'html')); ?> </section>
<?// $APPLICATION->IncludeFile('/include/new-form.php', array(), array('MODE' => 'html')); ?>
<? $APPLICATION->IncludeFile('/include/clients_premium.php', array(), array('MODE' => 'html')); ?>
<?$APPLICATION->IncludeFile('/include/new-form.php',array(),array('MODE'=>'html')); ?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>