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

<?for ($i=0; $i < count($arResult['ITEMS']); $i+=2):?>
	<div class="item"><a href="<?=$arResult['ITEMS'][$i]["DETAIL_PAGE_URL"]?>">
	<?//=var_dump($arResult['ITEMS'][$i])?>
		<img src="<?=$arResult['ITEMS'][$i]["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult['ITEMS'][$i]['NAME']?>" />
	</a>
	<a href="<?=$arResult['ITEMS'][$i+1]["DETAIL_PAGE_URL"]?>">
		<img src="<?=$arResult['ITEMS'][$i+1]["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult['ITEMS'][$i]['NAME']?>" />
	</a></div>
<?endfor;?>