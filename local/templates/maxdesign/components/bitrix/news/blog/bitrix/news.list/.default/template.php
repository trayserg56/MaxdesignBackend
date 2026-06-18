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
<?if($_GET['SORT_BY'] == "AUTHOR"):?>
	<?
		usort($arResult['ITEMS'], function($a, $b){
			return $a["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'] > $b["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE'];
		})
	?>
<?endif?>
<section id="blog">
	<div class="container">
        <h1 class="services__title">Блог студии дизайна Maxdesign</h1>
		<div class="blog-container">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<div class="blog-row">
					<div class="blog-text">
						<div class="blog-top">
							<div class="blog-rubrik">
								<p><?=$arItem['SECTION_NAME'];?></p>
							</div>
							<div class="blog-data">
								<p><?=$arItem['DISPLAY_ACTIVE_FROM']?></p>
							</div>
						</div>
						<div class="blog-middle">
							<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><?=$arItem['NAME'];?></a>
							<p><?=$arItem['PREVIEW_TEXT'];?></p>
							<span>Автор - <span><?=$arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']?></span></span>
						</div>
						<div class="blog-bottom">
							<div class="blog-bleft">
								<div class="blog-heart">
									<!-- <i class="fas fa-heart"></i>  -->
									<!-- <span>1</span> -->
								</div>
								<div class="blog-wiev">
									<!-- <i class="fas fa-eye"></i>  -->
									<!-- <span>641</span> -->
								</div>
							</div>
							<div class="blog-seti">
								<span>ПОДЕЛИТЬСЯ</span>
								<?$name=$arItem['NAME'];?>
								<?$url=$arItem['DETAIL_PAGE_URL'];?>
								<a onclick=`Share.vkontakte(<?=$url?>,<?=$name?>)` title="Постить Вконтакте"><i class="fab fa-vk"></i></a>
								<a onclick=`Share.facebook(<?=$url?>,<?=$name?>)` title="Постить Facebook"><i class="fab fa-facebook-square"></i></a>
								<a onclick=`Share.twitter(<?=$url?>,<?=$name?>)` title="Постить Twitter"><i class="fab fa-twitter"></i></a>
							</div>
							
						</div>
					</div>
					<div class="blog-img"><a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>" />
					</a></div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section>