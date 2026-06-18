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

<div id="zakaz" class="reveal-modal">
<div class="container">
	<p class="p-desctop">Заполните форму</p>
	<p class="p-mobile">Напишите нам</p>
	<form action="/ajax/newlead.php" method="post" class="form-desctop form-desctop-small">
		<div class="forma-row">
			<!--<div class="forma-box">
				<label>Название компании <span>*</span></label>
				<input type="text" value="" required size="20" name="company">
			</div>-->
			<input type="hidden" id="ch-form3" name="recaptcha"> 
			<div class="forma-box">
				<label>Фио контактного лица <span>*</span></label>
				<input type="text" required size="20" name="name" value="<?=$arResult["AUTHOR_NAME"]?>">
			</div>	
			<!--<div class="forma-box">
				<label>Должность контактного лица <span>*</span></label>
				<input type="text" required value="" size="20" name="doljnost">
			</div>-->
			<div class="forma-box">
				<label>Контактный телефон <span>*</span></label>
				<input type="text" required size="20" name="phone" value="<?=$arResult["AUTHOR_PHONE"]?>">
			</div>
			<!--<div class="forma-box">
				<label>Ссылка на сайт компании URL <span>*</span></label>
				<input type="text" required value="" placeholder="http://" size="20" name="url">
			</div>-->
			<div class="forma-box">
				<label>E-mail <span>*</span></label>
				<input type="text" required size="20" name="email" value="<?=$arResult["AUTHOR_MAIL"]?>">
			</div>
		</div>
		<label>Текст сообщения <span>*</span></label>
		<textarea name="text"></textarea>
		<div class="forma-file">
			<label>Прикрепить файл</label>
			<input name="file" type="file">
			<!-- <input type="submit" name="" value="Загрузить" class="form-submit"> -->
		</div>
		<div class="check-box">
			<input type="checkbox" class="checkbox" id="checkform-1" name="check-news" />
			<label for="checkform-1">Подписаться на новости maxdesign</label>
		</div>
		<div class="check-box">
			<input type="checkbox" class="checkbox" id="checkform-2" name="check" checked />
			<label for="checkform-2">Даю согласие на обработку своих <a data-remodal-target="modal1" href="#" class="modals">персональных данных</a> и соглашаюсь с <a data-remodal-target="modal2" href="#" class="modals">политикой обработки персональных данных</a></label>
		</div>
		<button type="submit">Отправить</button>
		<p>*Обязательные для заполнения</p>
	</form>
	<form action="/ajax/newlead.php" method="post" class="form-mobile">
			<input type="hidden" id="ch-form4" name="recaptcha"> 

		<div class="forma-box">
			<label>Ваше имя <span>*</span></label>
			<input type="text" value="" required size="20" name="name">
		</div>	
		<div class="forma-box">
			<label>Телефон <span>*</span></label>
			<input type="text" required value="" size="20" name="phone">
		</div>
		<label>Сообщения <span>*</span></label>
		<textarea name="text"></textarea>
		<div class="check-box">
			<input type="checkbox" class="checkbox" id="checkform-1" name="check" />
			<label for="checkform-1">Подписаться на новости maxdesign</label>
		</div>
		<div class="check-box">
			<input type="checkbox" class="checkbox" id="checkform-2" name="check" checked />
			<label for="checkform-2">Даю согласие на обработку своих <a data-remodal-target="modal1" href="#" class="modals">персональных данных</a> и соглашаюсь с <a data-remodal-target="modal2" href="#" class="modals">политикой обработки персональных данных</a></label>
		</div>
        <input type="text" name="website" value="" style="display:none">

        <button type="submit">Отправить</button>
		<p>*Обязательные для заполнения</p>
	</form>
</div>
	<a class="close-reveal-modal">×</a>
</div>