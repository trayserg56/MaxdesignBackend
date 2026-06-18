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

<form id="kontakty" action="/ajax/newlead.php" method="post">
<?=bitrix_sessid_post()?>
 <input type="text"  required="" placeholder="Имя*" size="20" name="name" value="<?=$arResult["AUTHOR_NAME"]?>">
 <input type="text"  required="" placeholder="Телефон*" size="20" name="phone" value="<?=$arResult["AUTHOR_PHONE"]?>">
 <input type="text" placeholder="E-mail" size="20" name="mail" value="<?=$arResult["AUTHOR_EMAIL"]?>">
 <input type="hidden" id="ch-form3" name="recaptcha"> 

 <label>Текст сообщения</label>
 <textarea></textarea>
 <button type="submit">Отправить</button>
				<p>
					 *Обязательные для заполнения
				</p>
</form>