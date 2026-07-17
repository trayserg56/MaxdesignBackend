<?php

use Entity\Contacts;
use Helpers\TemplateHelper;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$promo = TemplateHelper::getPromoVideoSrc();
$contacts = Contacts::getInstance();
$form = \Entity\Form::getInstance();
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

<div class="modal-wrapper modal-wrapper--discuss" id="discuss-project" data-modal="" style="">
    <div class="modal modal--discuss">
        <div class="modal__header modal__header--discuss"><h2 class="modal__title">Обсудить проект</h2>
            <button class="modal__close button button-close j_closeModal" type="button" aria-label="Закрыть">
                <svg class="modal__close-icon">
                    <use xlink:href="/svg/sprite.svg#cross"></use>
                </svg>
            </button>
        </div>
        <form class="discuss-form" id="discuss-form" action="/local/submit-form.php" method="post" novalidate="">
            <div class="discuss-form__fields">
                <?php foreach ($form->getFields('feedback-form') as $field) {
                    switch ($field['type']) {
                        case 'select': ?>
                            <div class="discuss-form__field"><label class="discuss-form__label"
                                                                    for="discuss-<?= $field['name'] ?>">
                                    <?= $field['placeholder'] ?></label><select class="discuss-form__select"
                                                                                id="discuss-<?= $field['name'] ?>" name="<?= $field['name'] ?>">
                                    <option value="" disabled="" selected="">Выберите из списка</option>
                                    <?php foreach ($field['values'] as $value) { ?>
                                        <option value="<?= $value ?>"><?= $value ?></option>
                                    <?php } ?>
                                </select></div>
                            <?php
                            break;
                        case 'range':
                            ?>
                            <div class="discuss-form__field">
                                <input class="discuss-form__input" type="text" id="discuss-<?= $field['name'] ?>"
                                       name="<?= $field['name'] ?>"
                                       placeholder="<?= str_replace('<sup>2</sup>', '²', $field['placeholder']) ?>"
                                       inputmode="numeric">
                            </div>
                            <?php
                            break;
                        default: ?>
                            <div class="discuss-form__field">
                                <input class="discuss-form__input" type="<?= $field['type'] ?>"
                                       id="discuss-<?= $field['name'] ?>" name="<?= $field['name'] ?>"
                                       placeholder="<?= $field['placeholder'] ?>"
                                    <?= $field['type'] === 'tel' ? 'data-inputmask="\'mask\': \'+ 7(999) 999-99-99\'"' : '' ?>/>
                            </div>
                            <?php break;
                    }
                    ?>

                <?php } ?>
            </div>
            <button class="button button--cta-dark discuss-form__submit" type="submit">Отправить</button>
            <label class="checkbox discuss-form__consent"><input class="checkbox__input" type="checkbox" name="consent"
                                                                 checked="" required="">
                <div class="checkbox__wrap">
                    <div class="checkbox__custom">
                        <svg class="checkbox__icon">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#done"></use>
                        </svg>
                    </div>
                    <p class="checkbox__text">Я&nbsp;согласен на&nbsp;обработку персональных данных, в&nbsp;соответствии
                        с&nbsp;Федеральным законом от&nbsp;27.07.2006 года №152-ФЗ «О&nbsp;персональных
                        данных», на&nbsp;условиях и&nbsp;для целей, определённых в&nbsp;<a
                                class="discuss-form__consent-link" href="#">Согласии на&nbsp;обработку персональных
                            данных</a></p></div>
            </label></form>
    </div>
</div>

<div class="modal-wrapper modal-wrapper--promo" id="promo" data-modal="">
    <div class="modal modal--promo">
        <button class="modal__close button-close j_closeModal" type="button" aria-label="Закрыть промо">
            <svg class="modal__close-icon">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <video class="modal__video" controls="" preload="metadata" playsinline=""
               data-video-url="">
            <source type="video/mp4" src="">
            Ваш браузер не поддерживает видео.
        </video>
    </div>
</div>
