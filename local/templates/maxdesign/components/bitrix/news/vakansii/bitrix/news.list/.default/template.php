<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section id="vakansuu">
	<div class="container">
		<h1>Работа</h1>
		<div class="vakansuu-container">
			<div class="vakansuu-top">
				<p>Благодарим за интерес, проявленный к студии дизайна интерьера и архитектуры maxdesign. <br>maxdesign – это прежде всего творческие люди. Мы любим свою профессию и к каждому <br>проекту подходим ответственно, понимая цели и желания клиента. <br>В основе студии – образование, квалификация и опыт. Это позволяет воплощать в реальность проекты жилых и общественных интерьеров различной категории сложности. Мы гордимся тем, что делаем, просто потому, что нет большего удовлетворения от работы, чем счастливый клиент по ее завершении.</p>
			</div>
			<div class="vakansuu-bottom">
				<div class="vakansuu-row vakansuu-name">
					<div class="vakansuu-box">
						<p>Вакансия</p>
					</div>
					<div class="vakansuu-box">
						<p>Занятость</p>
					</div>
					<div class="vakansuu-box">
						<p>Подробнее</p>
					</div>
				</div>
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="vakansuu-row"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<div class="vakansuu-box">
						<p><?=$arItem["NAME"]?></p>
					</div>
					<div class="vakansuu-box">
						<p><?=$arItem["DISPLAY_PROPERTIES"]['ZANYATOST']['VALUE']?></p>
					</div>
					<div class="vakansuu-box">
						<img src="<?=SITE_TEMPLATE_PATH?>/images/arrow_v.png" alt="" />
					</div>
				</a></div>
				<?endforeach;?>
			</div>
		</div>
	</div>
</section>