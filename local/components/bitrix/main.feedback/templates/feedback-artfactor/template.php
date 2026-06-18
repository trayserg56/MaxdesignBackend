<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if($arResult["OK_MESSAGE"] <> '')
{
    ?><div class="mf-ok-text ok-msg-form"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form  action="<?=POST_FORM_ACTION_URI?>" method="POST" class="nform">
<?=bitrix_sessid_post()?>
    <div class="nform__block">
        <label class="nform__block-label">
            <input type="text" name="object_location" placeholder="Местонахождение объекта" class="nform__block-input" value="">
            <?/*select name="object_location" class="nform__select">
                <option value="Москва">Москва</option>
                <option value="Санкт-Петербург">Санкт-Петербург</option>
                <option value="Нижний Новгород">Нижний Новгород</option>
                <option value="Другой">Другой</option>
            </select*/?>
        </label>
        <label class="nform__block-label">
            <span class="nform__label-name">Укажите тип помещения</span>
            <select name="user_type_room" class="nform__select">
                <option value="Квартира/загородный дом">Квартира/загородный дом</option>
                <option value="Офис">Офис</option>
                <option value="Кафе, ресторан, бар">Кафе, ресторан, бар</option>
                <option value="Гостиница, апарт-отель">Гостиница, апарт-отель</option>
                <option value="Другой">Другой</option>
            </select>
        </label>
        <label class="nform__block-label">
            <span  class="nform__label-name">Площадь (м2)</span>
            <input type="text" name="user_square" class="nform__input-square" placeholder="100"  value="<?=$arResult["AUTHOR_SQUARE"]?>">
        </label>
    </div>
    <div class="nform__block">
        <label class="nform__block-wrapper">
            <input id="name" name="user_name" class="nform__block-input" type="text" placeholder="Имя" value="<?=$arResult["AUTHOR_NAME"]?>">
        </label>
        <label class="nform__block-wrapper">
            <input class="nform__block-input nform__block-input--tel" name="user_phone"  value="<?=$arResult["AUTHOR_PHONE"]?>" type="tel" placeholder="+7 (___) ___ - __ - __">
        </label>
        <label class="nform__block-wrapper">
            <input class="nform__block-input" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" type="email" placeholder="E-mail">
        </label>
        <label class="nform__check">
            <div class="nform__check-wrap">
                <input type="checkbox" name="checked"  class="nform__checkbox" checked>
                <div class="nform__checkbox--style"></div>
            </div>
            <span class="checkbox-text">Нажимая кнопку «Получить расчёт», я даю согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-Ф3 «О персональных данных», на условиях и для целей, определённых в Согласии на обработку персональных данных</span>
        </label>
        <?if($APPLICATION->GetCurPage() == '/dizayn-interera/kvartiry/'):?>
        <input type="submit" name="submit" value="Получить расчёт" class="nform__submit"  onclick="ym(67587496, 'reachGoal', 'kvartira'); return true;">
        <?elseif ($APPLICATION->GetCurPage() == '/dizayn-interera/zagorodnye-doma/'):?>
        <input type="submit" name="submit" value="Получить расчёт" class="nform__submit"  onclick="ym(67587496, 'reachGoal', 'dom'); return true;">
        <?elseif ($APPLICATION->GetCurPage() == '/dizayn-interera/ofisy/'):?>
        <input type="submit" name="submit" value="Получить расчёт" class="nform__submit"  onclick="ym(67587496, 'reachGoal', 'ofice'); return true;">
        <?elseif ($APPLICATION->GetCurPage() == '/portfolio/dizayn-interera/kvartiry/interer-elitnykh-apartamentov-v-zhk-royal-park'):?>
        <input type="submit" name="submit" value="Получить расчёт" class="nform__submit"  onclick="ym(67587496, 'reachGoal', 'royal park'); return true;">
        <?elseif ($APPLICATION->GetCurPage() == '/portfolio/dizayn-interera/gostinitsy-i-apart-oteli/dizayn-interera-apart-otelya-na-nab-leytenanta-shmidta'):?>
        <input type="submit" name="submit" value="Получить расчёт" class="nform__submit"  onclick="ym(67587496, 'reachGoal', 'schmidt'); return true;">
        <?else:?>
        <input type="submit" name="submit" value="Получить расчёт" class="nform__submit" >
        <?endif;?>
    </div>
</form>

</div>

<script>
    setTimeout(() => {
        $('.ok-msg-form').remove();
        history.replaceState( {} , '', window.location.pathname );
    }, 4000)
</script>