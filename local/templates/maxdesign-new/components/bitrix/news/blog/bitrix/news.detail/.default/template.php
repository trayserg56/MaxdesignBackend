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
<?
$nearPost = array();
$arSelect = Array('ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL');
$arFilter = Array('IBLOCK_ID'=>$arResult["IBLOCK_ID"],"ACTIVE_DATE"=>"Y", 'ACTIVE'=>'Y');
$res=CIBlockElement::GetList(
	array('ACTIVE_FROM' => 'DESC'), $arFilter, false,
	array('nElementID'=>$arResult['ID'], 'nPageSize'=>1),
	$arSelect
);
while($arRes=$res->GetNext()){

	$nearPost[] = array(
		'ID'=> $arRes['ID'],
		'NAME'=> $arRes['NAME'],
		'URL' => $arRes['DETAIL_PAGE_URL']
	);
}
?>
<!--<div class="breadcr">
<a href="/">Студия интерьера в Спб</a>
	&gt; 
<a href="/blog">Блог</a>
	&gt; 
	<?/*=$arResult["NAME"]*/?></div>-->
<div class="into" id="blog-viewer">
	<h1 class="page-title">
		<?=$arResult["NAME"]?>
	</h1>
	<div class="brdr row">
		<div class="col-md-4">
			<div class="field field-name-field-author field-type-text field-label-inline clearfix">
				<div class="field-label">Автор:</div>
				<div class="field-items">
					<?//var_dump($arResult);?>
					<div class="field-item even"><?=$arResult["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4 center"><i class="far fa-clock"></i> <span><?=$arResult['DISPLAY_ACTIVE_FROM']?></span></div>
		<div class="col-md-4 right">
			<script type="text/javascript">
				(function (w, doc) {
					if (!w.__utlWdgt) {
						w.__utlWdgt = true;
						var d = doc,
							s = d.createElement('script'),
							g = 'getElementsByTagName';
						s.type = 'text/javascript';
						s.charset = 'UTF-8';
						s.async = true;
						s.src = ('https:' == w.location.protocol ? 'https' : 'http') +
							'://w.uptolike.com/widgets/v1/uptolike.js';
						var h = d[g]('body')[0];
						h.appendChild(s);
					}
				})(window, document);
			</script>
		</div>
	</div>
	<div class="field">
		<?echo $arResult["DETAIL_TEXT"];?>
	</div>
	<div class="brdr row">
		<?
			// Допилить что если первая или последняя не показывать
		?>
		<div class="col-md-4">
			<?if(count($nearPost) == 3):?>
				<a href="<?=$nearPost[2]['URL']?>"><i class="fas fa-chevron-left"></i>ПРЕДЫДУЩИЙ</a>
			<?elseif(count($nearPost) == 2 && $arResult['ID'] == $nearPost[0]['ID']):?>
				<a href="<?=$nearPost[1]['URL']?>"><i class="fas fa-chevron-left"></i>ПРЕДЫДУЩИЙ</a>
			<?endif?>
		</div>
		<div class="col-md-4 blog-nav-mid">
			<a href="/blog"><i class="fas fa-th-large"></i></a>
		</div>
		<div class="col-md-4 blog-nav-right">
			<?if(count($nearPost) == 3):?>
				<a href="<?=$nearPost[0]['URL']?>">СЛЕДУЮЩИЙ <i class="fas fa-chevron-right"></i></a>
			<?elseif(count($nearPost) == 2 && $arResult["ID"] == $nearPost[1]['ID']):?>
				<a href="<?=$nearPost[0]['URL']?>">СЛЕДУЮЩИЙ <i class="fas fa-chevron-right"></i></a>
			<?endif;?>
		</div>
	</div>
</div>