<?php

use Entity\Contacts;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$promo = \Helpers\TemplateHelper::getPromoVideoSrc();
$contacts = Contacts::getInstance();
?>
<div class="modal-wrapper modal-wrapper--example" id="modal-example" data-modal>
    <div class="modal">
        <div class="modal__wrap">
            <div class="modal__header">Test modal title</div>
            <div class="modal__body">
                <div class="modal__content"><p class="modal__text">Lorem ipsum dolor sit amet consectetur.</p>
                    <p class="modal__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                        accusamus?</p>
                    <p class="modal__text">Lorem ipsum dolor sit.</p></div>
            </div>
            <div class="modal__footer"><p class="modal__text">Test modal footer</p></div>
        </div>
    </div>
</div>

<div class="modal-wrapper modal-wrapper--example" id="form-submit-success" data-modal>
    <div class="modal">
        <div class="modal__wrap">
            <div class="modal__header">Ваша заявка успешно отправлена</div>
            <div class="modal__body">
                <div class="modal__content"><p class="modal__text">
                        Менеджер свяжется с вами в ближайшее время
                    </p>
                </div>
            </div>
            <div class="modal__footer">
                <button class="button" onclick="Modal.close('form-submit-success');">Хорошо</button>
            </div>
        </div>
    </div>
</div>

<div class="modal-wrapper modal-wrapper--example" id="form-submit-error" data-modal>
    <div class="modal">
        <div class="modal__wrap">
            <div class="modal__header">Произошла ошибка при отправке формы</div>
            <div class="modal__body">
                <div class="modal__content">
                    <p class="modal__text" data-error-text></p>
                    <p class="modal__text">
                        Попробуйте заполнить форму ещё раз или позвоните по телефону
                        <a href="tel:<?= $contacts->getFormatedPhone('phone') ?>"><?= $contacts->get('phone') ?></a>
                    </p>
                </div>
            </div>
            <div class="modal__footer">
                <button class="button" onclick="Modal.close('form-submit-error');">Хорошо</button>
            </div>
        </div>
    </div>
</div>

