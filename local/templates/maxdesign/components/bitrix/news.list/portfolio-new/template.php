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
<style>
  .port__wrapper {

  }

  .port__list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .port__item {
    width: 32%;
    margin-bottom: 30px;
    border: 1px solid #dfdfdf;
    padding: 20px;
    box-shadow: 1px 5px 5px #0000003d;
  }

  .port__item-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
    margin-bottom: 10px;
  }

  .port__item-info {

  }

  .port__item-property {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    color: grey;
  }

  .port__item-property span {

  }

  .port__link {
    margin-bottom: 10px;
    display: flex;
    text-decoration: none;
    font-weight: bold;
    height: 50px;
    color: #ed6340;
    font-size: 18px;
    border-bottom: 1px solid #80808091;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding-bottom: 10px;

  }

  .port__filter-wrapper {
    display: flex;
    margin-bottom: 20px;
    color: ;
  }

  .port__filter {
    display: flex;
    flex-grow: 1;
    flex-wrap: wrap;
  }

  .port__filter-item{
    margin-right: 10px;
    color: gray;
  }

  .port__filter-desc {
    margin-right: 20px;
    font-weight: bold;
  }

  .port__filter-item a {
    color: grey;
    text-decoration: none;
    border: 1px solid grey;
    border-radius: 50px;
    padding: 5px 20px;
  }

</style>
    <div class="port__wrapper">
      <div class="port__filter-wrapper">
      <div class="port__filter-desc">Быстрый подбор интерьера для квартиры:</div>
      <ul class="port__filter">
        <li class="port__filter-item"><a href="#">Студии</a></li>
        <li class="port__filter-item"><a href="#">1 комнатные</a></li>
        <li class="port__filter-item"><a href="#">2-х комнатные</a></li>
        <li class="port__filter-item"><a href="#">3-х комнатные</a></li>
        <li class="port__filter-item"><a href="#">4-х комнатные</a></li>
        <li class="port__filter-item"><a href="#">Апартаменты</a></li>
        <li class="port__filter-item"><a href="#">Пентхаус</a></li>
      </ul>
      </div>
        <ul class="port__list">
        <?foreach($arResult['ITEMS'] as $arItem):?>
            <li class="port__item">
              <img class="port__item-img"
                      src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                      width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                      height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                      alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                      title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
              />
              <a class="port__link" href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
              <ul class="port__item-info">
                <li class="port__item-property">Год <span><?=$arItem["DISPLAY_PROPERTIES"]['YEAR']['VALUE']?></span></li>
                <li class="port__item-property">Место <span><?=$arItem["DISPLAY_PROPERTIES"]['ADDRESS']['VALUE']?></span></li>
                <li class="port__item-property">Цена за м2 <span><?=$arItem["DISPLAY_PROPERTIES"]['PRICE_OBJECT']['VALUE']?> руб</span></li>
              </ul>
            </li>
            <?endforeach;?>
    </ul>
