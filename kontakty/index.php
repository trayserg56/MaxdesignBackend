<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Контактная информация студии дизайна элитного интерьера в СПб Maxdesign. Закажите дизайн-проект квартиры, дома, офиса у профессионалов. Подробнее по тел.: +7 (900) 650-00-50, +7 (812) 786-67-76.");
$APPLICATION->SetPageProperty("title", "Студия дизайна Maxdesign в СПб, контакты");
$APPLICATION->SetTitle("Контакты студии дизайна Maxdesign в Спб");
?>    <section id="contacts">
    <div class="container">
        <div class="contact-container">
            <div class="contact-adres">
                <div>
                    <span style="display:none">СПб Maxdesign</span>
                    <h1>Наши контакты</h1>
                    <div>
                        <p>
                            197110, Санкт-Петербург,<br> Петрозаводская улица, дом 13,<br> помещение 32-Н (первый этаж вход с улицы)

                            <?/*span >190020</span> <span>Санкт-Петербург</span>, <br>
                            <span>Старо-Петергофский проспект 44, <br>
						 офис 305</span*/?>
                        </p>
                    </div>
                    <p>
                        <a href="tel:+79006500050"><span>+7 900 650 00 50</span></a> <br>
                        <?/*a href="tel:+78127866776"><span>+7 812 786 67 76</span></a*/?>
                    </p>
                    <p>
                        для общения и заказа <br>
                        <a href="mailto:info@maxdesign.pro"><span>info@maxdesign.pro</span></a>
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
                    <p>
                        ООО "МАКСДИЗАЙН" <br>
                        ИНН 7839085858 <br>
                        ОГРН 1177847194084
                    </p>
                </div>
            </div>
            <div class="contact-forma">
                <h3>НАЗНАЧИТЬ ВСТРЕЧУ</h3>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.feedback",
                    "kontakty",
                    array(
                        "EMAIL_TO" => "info@maxdesign.pro",
                        "EVENT_MESSAGE_ID" => array(0 => "7",),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => "",
                        "USE_CAPTCHA" => "N"
                    )
                ); ?>
            </div>
        </div>
    </div>
    </section>
    <section id="conpart">
    <div class="container">
        <div class="conpart-container">
            <div class="partner-row partner-row2">
                <div class="partner-text">
                    <div class="partner-min">
                        <h3>Партнерам</h3>
                        <p>
                            Благодарим за интерес, проявленный к нам. Студия дизайна интерьера Maxdesign открыта к
                            сотрудничеству.
                        </p>
                        <p>
                            Мы взаимодействуем исключительно с надежными поставщиками и исполнителями, которые дорожат
                            своей репутацией также, как и мы. Своевременность поставок, качество продукции и выполненных
                            работ, а также сервис - это требования, которые мы предъявляем к себе и нашим партнерам.
                            Если ваша компания заинтересована в эффективной работе и готова выполнить эти условия - мы
                            будем рады знакомству с вами.
                        </p>
                        <p>
                            Чтобы сделать нам предложение, пожалуйста, заполните форму ниже. Если ваше предложение нас
                            заинтересует, мы обязательно свяжемся с вами. Спасибо.
                        </p>
                        <a href="#" data-reveal-id="zakaz1" class="btn btn-interes">ЗАПОЛНИТЬ ФОРМУ</a>
                    </div>
                </div>
                <div class="partner-img">
                    <img src="/local/templates/maxdesign/images/contact.png" alt="Контакты студии дизайна Maxdesign" title="Контакты студии дизайна Maxdesign">
                </div>
            </div>
        </div>
    </div>
    <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "Organization",
            "name": "Maxdesign",
            "url": "https://www.maxdesign.pro/",
            "logo": "https://www.maxdesign.pro/local/templates/maxdesign/images/logo.png",
            "description": "Студия дизайна Maxdesign в СПб",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Санкт-Петербург, Старо-Петергофский проспект 44, офис 310",
                "addressLocality": "Санкт-Петербург",
                "postalCode": "190020",
                "addressCountry": "Россия"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+79006500050"
            }
        }
    </script>
<? $APPLICATION->IncludeFile('/include/maps.php', array(), array('MODE' => 'html')); ?>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>