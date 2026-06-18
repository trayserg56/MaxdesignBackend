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

<section id="vakansuu" class="vakansua">
	<div class="container">
		<h1><?=$arResult["NAME"]?></h1>
		<div class="vakansuu-container">
			<div class="vakansuu-top vakansua-top">
				<p>Благодарим за интерес, проявленный к студии дизайна интерьера и архитектуры maxdesign. <br>maxdesign – это прежде всего творческие люди. Мы любим свою профессию и к каждому <br>проекту подходим ответственно, понимая цели и желания клиента. <br>В основе студии – образование, квалификация и опыт. Это позволяет воплощать в реальность проекты жилых и общественных интерьеров различной категории сложности. Мы гордимся тем, что делаем, просто потому, что нет большего удовлетворения от работы, чем счастливый клиент по ее завершении.</p>
			</div>
			<div class="vakansua-box">
				<?=$arResult["DETAIL_TEXT"];?>
			</div>
		</div>
		<div id="block-block-24 111" class="block block-block">
			<div class="content">
				<script type="text/javascript">
				<!--//--><![CDATA[// ><!--
				(function(w,doc) {
				if (!w.__utlWdgt ) {
					w.__utlWdgt = true;
					var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
					s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
					s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
					var h=d[g]('body')[0];
					h.appendChild(s);
				}})(window,document);

				//--><!]]>
				</script>
				<div class="uptolike-buttons" data-background-alpha="0.0" data-background-color="#984949" data-buttons-color="#ffffff" data-counter-background-alpha="1.0" data-counter-background-color="#5d1e1e" data-exclude-show-more="false" data-following-enable="false" data-icon-color="#333333" data-like-text-enable="false" data-mobile-sn-ids="fb.vk.tw.ps." data-mobile-view="false" data-mode="share" data-orientation="horizontal" data-pid="1768064" data-preview-mobile="false" data-selection-enable="false" data-share-counter-size="12" data-share-counter-type="disable" data-share-shape="round-rectangle" data-share-size="30" data-share-style="0" data-sn-ids="vk.fb.tw.ps." data-text-color="#000000" data-top-button="false"></div>
			</div>
		</div>
	</div>
</section>