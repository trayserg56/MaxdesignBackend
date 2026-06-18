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
<section id="contact">
<div class="container">
	<div class="contact-container">
		<div class="contact-adres">
			<h3>ПРИХОДИТЕ К НАМ</h3>
			<p>
				 190020 Санкт-Петербург, <br>
				 Старо-Петергофский проспект 44, <br>
				 офис 310
			</p>
			<p>
				<a href="tel:+79006500050">+7 900 650 00 50</a> <br>
				<a href="tel:+78127866776">+7 812 786 67 76</a>
			</p>
			<p>
				 для общения и заказа <br>
				<a href="mailto:info@maxdesign.pro">info@maxdesign.pro</a>
			</p>
			<p>
				 для предложений по сотрудничеству <br>
				<a href="mailto:offer@maxdesign.pro">offer@maxdesign.pro</a>
			</p>
			<h3>ЧАСЫ РАБОТЫ</h3>
			<p>
				 Пн. - Пт. : 10 - 19 <br>
				 Суббота : 12 - 16
			</p>
		</div>
		<div class="contact-forma" id="c-form1">
			<h3>НАПИШИТЕ НАМ</h3>
			<form action="/ajax/newlead.php" method="POST" id="mainform">
 <input type="text" required="" placeholder="Имя*" size="20" name="name" value="<?=$arResult["AUTHOR_NAME"]?>">
 <input type="text" value="" required="" placeholder="Телефон*" size="20" name="phone" <?=$arResult["AUTHOR_PHONE"]?>> 
 <input type="text" required="" placeholder="E-mail*" size="20" name="email"  value="<?=$arResult["AUTHOR_EMAIL"]?>">
 <input type="hidden" id="ch-form1" name="recaptcha"> 
 <label>Текст сообщения*</label>
 <textarea name="text"></textarea>
 <button type="submit">Отправить</button>
				<p>
					 *Обязательные для заполнения
				</p>
			</form>
		</div>
	</div>
</div>
 </section>