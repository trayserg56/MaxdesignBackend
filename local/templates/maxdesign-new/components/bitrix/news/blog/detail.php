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
<div class="mainer">
	<div class="container">
		<div class="d-flex">
			<div class="content">
				<?$ElementID = $APPLICATION->IncludeComponent(
					"bitrix:news.detail",
					"",
					Array(
						"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
						"DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
						"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
						"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID" => $arParams["IBLOCK_ID"],
						"FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
						"PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
						"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
						"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
						"META_KEYWORDS" => $arParams["META_KEYWORDS"],
						"META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
						"BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
						"SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
						"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
						"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
						"SET_TITLE" => $arParams["SET_TITLE"],
						"MESSAGE_404" => $arParams["MESSAGE_404"],
						"SET_STATUS_404" => $arParams["SET_STATUS_404"],
						"SHOW_404" => $arParams["SHOW_404"],
						"FILE_404" => $arParams["FILE_404"],
						"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
						"ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
						"ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
						"CACHE_TYPE" => $arParams["CACHE_TYPE"],
						"CACHE_TIME" => $arParams["CACHE_TIME"],
						"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
						"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
						"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
						"DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
						"DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
						"PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
						"PAGER_SHOW_ALWAYS" => "N",
						"PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
						"PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
						"CHECK_DATES" => $arParams["CHECK_DATES"],
						"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
						"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
						"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
						"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
						"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
						"USE_SHARE" => $arParams["USE_SHARE"],
						"SHARE_HIDE" => $arParams["SHARE_HIDE"],
						"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
						"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
						"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
						"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
						"ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
						'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
					),
					$component
				);?>
			</div>
			<?
			$arSelect = Array("IBLOCK_ID", "ID", "NAME", "DATE_ACTIVE_FROM", "PREVIEW_PICTURE", "DETAIL_PAGE_URL", "PROPERTY_AUTHOR");
			$arFilter = Array("IBLOCK_ID"=>"9", "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "!CODE"=>$arResult['VARIABLES']['ELEMENT_CODE']);
			$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
			?>
			<?//var_dump($res);?>
			<?//if($res->getNext()):?>
			<div class="similar">
				<div class="view-header">
					<p><b>ДРУГИЕ СТАТЬИ</b></p>
				</div>
				<div class="view-content">
					<?while($arItem = $res->GetNext()):?>
						<div class="views-row views-row views-row-odd views-row-first">
							<div class="views-field views-field-field-fhoto">
								<?
								$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>130, 'height'=>130), BX_RESIZE_IMAGE_EXACT, true);   
								?>
								<div class="field-content"><a
										href="<?=$arItem['DETAIL_PAGE_URL']?>"><img
											src="<?=$file['src']?>"
											width="130" height="130" alt=""></a></div>
							</div>
							<div class="views-field views-field-title"> <span class="field-content"><a
										href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></span> </div>
							<div class="views-field views-field-field-author"> <span
									class="views-label views-label-field-author">Автор: </span>
								<div class="field-content"><?=$arItem['PROPERTY_AUTHOR_VALUE']?></div>
							</div>
							<div class="views-field views-field-created"> <span class="field-content"><i
										class="far fa-clock"></i>
										<?$stmp = FormatDate(
											"d M Y",
											MakeTimeStamp($arItem['DATE_ACTIVE_FROM'])
											);?>
										<?=$stmp?>
									</span> </div>
						</div>
					<?endwhile;?> 
				</div>
			</div>
			<?//endif?>
		</div>
	</div>
</div>