<section class="n-feedback" id="req-form">
    <div class="container">
        <p class="n-feedback__title">Получите наше лучшее предложение!</p>
        <p class="n-feedback__text">
            Заполните форму и оставьте свои контактные данные, а мы подготовим для вас предложение, которое подходит
            именно вам.
        </p>
        <? $APPLICATION->IncludeComponent(
            "bitrix:main.feedback",
            "feedback-artfactor",
            array(
                "COMPONENT_TEMPLATE" => "feedback-artfactor",
                "EMAIL_TO" => "info@maxdesign.pro",
                "EVENT_MESSAGE_ID" => array(0 => "14",),
                "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                "REQUIRED_FIELDS" => array(),
                "USE_CAPTCHA" => "N"
            )
        ); ?>
    </div>
</section>