<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Автоский надзор");
?>

<section class="s-partners">
	<div class="container">
		<div class="info-item info-item--reverse">
			<div class="info-item__thumb">
				<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/partners/partner-thumb-1.jpg" alt="ВАШ ПЕРСОНАЛЬНЫЙ МЕНЕДЖЕР ПО ЗАКУПКАМИ ТЕНДЕРНЫЙ ОТДЕЛ">
			</div>
			<div class="info-item__content">
				<h3>ВАШ ПЕРСОНАЛЬНЫЙ<br> МЕНЕДЖЕР ПО ЗАКУПКАМ<br> И ТЕНДЕРНЫЙ ОТДЕЛ</h3>
				<p>Наши принципы в работе с B2B:</p>
				<ul>
					<li>•&nbsp;Аналитика рынка в интересах заказчика.</li>
					<li>•&nbsp;Только официальные представительства и провереные поставщики, зарекомендовавшие себя на рынке.</li>
					<li>•&nbsp;Широкий спектр брендов.</li>
					<li>•&nbsp;Закупка, поставка и приёмка  точно в срок  с использованием SAP CRM.</li>
				</ul>
				<p>Наш подход позволяет подобрать оптимальную команду исполнителей для успешной реализации проекта любого уровня сложности.</p>
			</div>
		</div>
		<div class="brand-list">
			<div class="brand-item">
				<img src="<?=SITE_TEMPLATE_PATH?>/assets/img/partners/partner-logo-1.png" alt="Partner name">
			</div>
		</div>
	</div>
</section>

<? $APPLICATION->IncludeFile('/include/new-form.php', array(), array('MODE' => 'html')); ?>
<? $APPLICATION->IncludeFile('/include/maps.php', array(), array('MODE' => 'html')); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>