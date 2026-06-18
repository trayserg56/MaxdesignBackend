<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Page\Asset;

$APPLICATION->SetTitle("Офисы");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/components/bitrix/news/portfolio/bitrix/news.detail/.default/style.css');
Asset::getInstance()->addCss('/portfolio/oficy/new-style.css');
?>

<section class="s-portfolio-hero bg-cover dark-theme" style="background-image: url('/upload/img/oficy/zoom2.jpg');">
	<div class="container">
		<div class="portfolio-hero">
			<div class="portfolio-hero__suptitle">Порфолио:</div>
			<div class="portfolio-hero__title">Офисы</div>

			<div class="portfolio-hero__content">
				<div class="portfolio-hero__logo">
					<img src="https://maxdesign.pro/local/templates/maxdesign/images/xlogo2.png.pagespeed.ic.h8p109Qb5Z.webp" alt="">
				</div>
				<div class="portfolio-hero__description">"Дизайн - это не просто красивое оформление помещения. Дизайн  - это среда обитания, в которой мы живем, работаем и отдыхаем каждый день. Его влияние на настроение, комфорт и удовлетворенность трудно переоценить. Творчество делает жизнь ярче."</div>
			</div>
		</div>
	</div>
</section>

<div class="s-portfolio-descr portfolio-detail">
	<div class="portfolio-detail-container">
		<div class="portfolio-detail-title section__title">Архитектурная студия<br> MaxDesign</div>
		<div class="portfolio-detail-descr">
			с 2017 года профессионально занимается проектированием
			офисных пространств от небольших бутик офисов, до бизнесцентров, апарт-отелей и
			корпоративных офисов площадью свыше 20 000 m2.
		</div>
	</div>
</div>

<section class="s-projects dark-theme">
<? $APPLICATION->IncludeFile('/include/main-slider.php', array(), array('MODE' => 'html')); ?>
</section>

<div class="s-how-work dark-theme">
	<div class="section__header text-center">
		<h2 class="section__title">Как мы работаем</h2>
	</div>
	<div class="container">
		<div class="how-work">
			<div class="how-work-item">
				<div class="how-work-item__thumb"><img src="/upload/img/oficy/item-1.png" alt=""></div>
				<div class="how-work-item__content">
					<div class="how-work-item__title"><strong>1.</strong> Предпроектный анализ</div>
					<div class="how-work-item__description">Анализируем ваши предпочтения и вкусы, предлагаем подходящие варианты из мировых практик и тенденций, определяем стилистический вектор, подходящий именно Вам.</div>
				</div>
			</div>
			<div class="how-work-item">
				<div class="how-work-item__thumb"><img src="/upload/img/oficy/item-2.png" alt=""></div>
				<div class="how-work-item__content">
					<div class="how-work-item__title"><strong>2.</strong> Архитектурное проектирование</div>
					<div class="how-work-item__description">
						- Концепция<br>
						- 3D Визуализация<br>
						- Рабочее проектирование<br>
					</div>
				</div>
			</div>
			<div class="how-work-item">
				<div class="how-work-item__thumb"><img src="/upload/img/oficy/item-3.jpg" alt=""></div>
				<div class="how-work-item__content">
					<div class="how-work-item__title"><strong>3.</strong> Инженерное проктирование</div>
					<div class="how-work-item__description">
						- Электроосвещение и электроснабжение<br>
						- Водоснабжение и водоотведение<br>
						- Вентиляция и кондиционирование<br>
						- Отопление<br>
						- Системы пожарной безопасности<br>
						- IT, СКУД, Видеонаблюдение и пр.<br>
					</div>
				</div>
			</div>
			<div class="how-work-item">
				<div class="how-work-item__thumb"><img src="/upload/img/oficy/item-4.jpg" alt=""></div>
				<div class="how-work-item__content">
					<div class="how-work-item__title"><strong>4.</strong> Комплектация и снабжение</div>
					<div class="how-work-item__description">
                        Организуем тендеры и закупки
                        отделочных материалов,
                        сантехники, мебели (в том числе
                        изготовление), света и прочих
                        элементов интерьера с учетом
                        плана работ. Обеспечиваем
                        своевременные поставки и
                        непрерывное выполнение работ
                        по реализации проекта.
					</div>
				</div>
			</div>
			<div class="how-work-item">
				<div class="how-work-item__thumb"><img src="/upload/img/oficy/item-5.jpg" alt=""></div>
				<div class="how-work-item__content">
					<div class="how-work-item__title"><strong>5.</strong> Сопровождение строительства</div>
					<div class="how-work-item__description">
                        - Авторский надзор<br>
                        - Технический надзор<br>
                        - Согласование проектной документации
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?/*
<div class="portfolio-detail s-how-work" id="portfoli-viewer">
	<div class="portfolio-detail-container">
		<div class="text-center">
			<h2 class="section__title">Как мы работаем</h2>
		</div>
		<div class="gallery-row tester">
			<div class="gallery-row tester">
				<div class="portfolio__group">
					<div class="gallery-col center portfolio__overlay-150">
						<p class="portfolio__group-step">
							<span class="how-work__title">1. ПРЕДПРОЕКТНЫЙ АНАЛИЗ</span>
							<span class="portfolio__group-text">
								Анализируем Ваши предпочтения
								и вкусы, предлагаем подходящие
								варианты из мировых практик и
								тенденций, определяем
								стилистический вектор,
								подходящий именно Вам.
							</span>
						</p>
					</div>
					<div class="gallery-col center portfolio__overlay-150">
						<img src="/upload/portfolio/manifest/2.jpg" alt="" data-pagespeed-url-hash="3419804597" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</div>
					<div class="gallery-col fluid portfolio__overlay-150">
						<img src="/upload/portfolio/manifest/5.jpg" alt="" data-pagespeed-url-hash="8337064" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</div>
					<div class="gallery-col center portfolio__overlay-150">
						<p class="portfolio__group-step">
							<span class="how-work__title">2. АРХИТЕКТУРНОЕ ПРОЕКТИРОВАНИЕ</span>
							<span class="portfolio__group-text">
								<ul>
									<li>Концепция</li>
									<li>3D Визуализация</li>
									<li>Рабочее проектирование</li>
								</ul>
							</span>
						</p>
					</div>
				</div>

				<div class="portfolio__group">
					<div class="gallery-col center">
						<p>
							А далее движение продолжается в гостиной. Оно вновь заложено в напольном покрытии, а также в рельефной поверхности островка и оригинальных светильниках над ним. Они очень напоминают колеса или обручи. Кажется, что круги вот-вот начнут вращаться или даже летать под потолком, как под белоснежным куполом цирка…
							<br><br>
							Кроме того, светильники в дуэте с тонкими “золотыми” ножками стульев, стеклянными фасадами стеллажа делают интерьер кухни более легким и воздушным.
							<br><br>
							Еще одно необычное дизайнерское решение - цвет обивки стульев. Такой приглушенный зеленый в партнерстве с “золотыми” элементами является тем ярким акцентом, который оживляет кухню.
						</p>
					</div>
					<div class="gallery-col">
						<img src="/upload/portfolio/manifest/12.jpg" alt="" data-pagespeed-url-hash="2436031976" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</div>
					<div class="gallery-col fluid portfolio__overlay-80">
						<img src="/upload/portfolio/manifest/13.jpg" alt="" data-pagespeed-url-hash="2730531897" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</div>
					<div class="gallery-col center portfolio__overlay-40">
						<p>
							Общая концепция кухни сохранена и в гостиной. Об этом говорят напольное покрытие, отделка стен, детали и, конечно, насыщенные цвета обивки дивана, мягких обеденных стульев.
							<br><br>
							Столовая-гостиная сделана максимально комфортной, не только физически, но и эмоционально. Много света - “невесомые” люстры, стекло, блестящие поверхности, а также обилие сглаженных углов - стулья, круглый обеденный стол и журнальный столик.
						</p>
					</div>
				</div>

				<div class="portfolio__group">
					<div class="gallery-col center portfolio__overlay-75">
						<p>
							Великолепие интерьеру спальни придает объемная люстра, напоминающая ветви цветущих деревьев или гроздья винограда. Однако тяжеловесной она не смотрится, поскольку гроздья эти полупрозрачные. Они выполнены из хрусталя и кажутся невесомыми.
							<br><br>
							В правой части комнаты находится изящный туалетный столик с зеркалом необычной овальной формы. В целом именно этот уголок вместе с прикроватными тумбочками сглаживает геометрию всей комнаты.
						</p>
					</div>
					<div class="gallery-col">
						<img src="/upload/portfolio/manifest/15.jpg" alt="" data-pagespeed-url-hash="3319531739" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</div>
					<div class="gallery-col fluid portfolio__overlay-150">
						<img src="/upload/portfolio/manifest/19.jpg" alt="" data-pagespeed-url-hash="202564127" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
					</div>
					<div class="gallery-col center portfolio__overlay-75">
						<p>
							Ванная комната, расположенная неподалеку от спален, является воплощением классики - черного и белого камня, а также роскоши, которая заложена в сантехнике с “золотыми” элементами, аксессуарах и в декоративных элементах.
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
*/?>

<section class="s-advantages dark-theme">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-9">
				<div class="section__header">
					<h2 class="section__title">Наши преимущества</h2>
				</div>
				<div class="advantages-list">
					<div class="advantage-item">Уникальность <div class="advantage-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon fill="currentColor" points="7 7 15.586 7 5.293 17.293 6.707 18.707 17 8.414 17 17 19 17 19 5 7 5 7 7"/></svg></div></div>
					<div class="advantage-item">Эффективность <div class="advantage-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon fill="currentColor" points="7 7 15.586 7 5.293 17.293 6.707 18.707 17 8.414 17 17 19 17 19 5 7 5 7 7"/></svg></div></div>
					<div class="advantage-item">Команда <div class="advantage-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon fill="currentColor" points="7 7 15.586 7 5.293 17.293 6.707 18.707 17 8.414 17 17 19 17 19 5 7 5 7 7"/></svg></div></div>
					<div class="advantage-item">Опыт <div class="advantage-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon fill="currentColor" points="7 7 15.586 7 5.293 17.293 6.707 18.707 17 8.414 17 17 19 17 19 5 7 5 7 7"/></svg></div></div>
					<div class="advantage-item">Обратная связь <div class="advantage-item__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><polygon fill="currentColor" points="7 7 15.586 7 5.293 17.293 6.707 18.707 17 8.414 17 17 19 17 19 5 7 5 7 7"/></svg></div></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="s-experience dark-theme bg-cover" style="background-image: url('/upload/img/oficy/expirience_bg2.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 ml-auto">
				<div class="experience">
					<div class="experience__title">Имеем опыт и все необходимое компетенции для проведения:</div>
					<ol class="experience__list">
						<li class="experience__item">
                            Предпроектной аналитики и снятия потребностей вашей орг
                            зонирования,
                            оптимизации транзитных путей с учетом частоты взаимодейств
                            рационального выбора средств дизайна интерьера при проект
                            планировочного потенциала пространства
                        </li>
						<li class="experience__item">Разработки современного выразительного образа дизайна</li>
						<li class="experience__item">Разработки рабочей документации дизайн-проекта и смежны (ОВ, ХС, ВК, ЭОМ, СКС, АППЗ, АУПТ, ВПВ)</li>
						<li class="experience__item">Комплектации мебели, света, материалов, сантехники, элеме других разделов от прямых изготовителей и поставщиков</li>
						<li class="experience__item">Ведения авторского надзора на всем протяжении строительства</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="s-inform dark-theme">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-9">
				<div class="inform-list">
					<div class="inform-item">
						<div class="inform-item__thumb"><img src="/upload/img/oficy/item-6.jpg" alt=""></div>
						<div class="inform-item__content">
							<div class="inform-item__title">Работаем со всеми известными поставщиками:</div>
							<div class="inform-item__description">Tabula Sens,<br> Smart Office Today Lab,<br> MDM Light,<br> Nayada, Cisco и т.д.</div>
						</div>
					</div>
					<div class="inform-item">
						<div class="inform-item__thumb"><img src="/upload/img/oficy/item-7.jpg" alt=""></div>
						<div class="inform-item__content">
							<div class="inform-item__title">Имеем собственную компанию в Китае:</div>
							<div class="inform-item__description">
                                Belong в городе Фошань,
                                что позволяет изготавливать
                                для наших клиентов любую
                                уникальную мебель, освещение и
                                другие предметы интерьера по
                                ценам ниже рыночных в РФ.
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="s-design-project bg-cover" style="background-image: url('/upload/img/oficy/full-bg.jpg');">
	<div class="container">
		<div class="design-project">
			<h2 class="section__title">Полный Дизайн-проект</h2>
			<div class="design-project__price">3000 РУБ./кв. метр</div>
			<div class="design-project__description">Полный проект включает в себя всю рабочую документацию для строителей, коллажи и 3D - визуализации всех помещений, список отделочных материалов и мебели.</div>
			<div class="design-project__actions">
				<a href="#" class="btn btn--dark-outline">Посмотреть</a>
			</div>
		</div>
	</div>
</section>

<section class="s-inform dark-theme">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-xl-9">
				<div class="inform-list">
					<div class="inform-item align-items-center">
						<div class="inform-item__thumb"><img src="/upload/img/oficy/item-8.png" alt=""></div>
						<div class="inform-item__content">
							<div class="inform-item__subtitle">Все это позволяет нашей команде успешно проектировать и реализовывать коммерческие объекты любого уровня и сложности в разных точках страны.</div>
							<div class="inform-item__logo"><img src="https://maxdesign.pro/local/templates/maxdesign/images/xlogo2.png.pagespeed.ic.h8p109Qb5Z.webp" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<? $APPLICATION->IncludeFile('/include/new-form.php', array(), array('MODE' => 'html')); ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>