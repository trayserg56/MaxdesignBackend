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

<div class="modal-wrapper modal-wrapper--discuss-success" id="form-submit-success" data-modal="" style="">
    <div class="modal modal--discuss-success">
        <button class="modal__close button button-close j_closeModal" type="button" aria-label="Закрыть">
            <svg class="modal__close-icon">
                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#cross"></use>
            </svg>
        </button>
        <h2 class="modal__title">Заявка отправлена!</h2>
        <p class="modal__text">В&nbsp;течение дня менеджер с&nbsp;вами свяжется</p>
        <button class="button button--cta-dark modal__action j_closeModal" type="button">Хорошо</button>
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
                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#cross"></use>
                </svg>
            </button>
        </div>
        <form class="discuss-form" id="discuss-form" action="/local/submit-form.php" method="post" novalidate="">
            <div class="discuss-form__fields"></div>

            <button class="button button--cta-dark discuss-form__submit" type="submit">Отправить</button>

            <div class="discuss-form__consent-wrap">
                <label class="checkbox discuss-form__consent"><input
                            class="checkbox__input" type="checkbox" name="consent" checked="" required=""
                            aria-describedby="discuss-consent-error">
                    <div class="checkbox__wrap">
                        <div class="checkbox__custom">
                            <svg class="checkbox__icon">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#done"></use>
                            </svg>
                        </div>
                        <p class="checkbox__text"><?= $form->getConsentText('discuss-form') ?></p>
                    </div>
                </label>
                <p class="discuss-form__error" id="discuss-consent-error" hidden="" aria-live="polite"></p>
            </div>
            <?= bitrix_sessid_post() ?>
        </form>
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
