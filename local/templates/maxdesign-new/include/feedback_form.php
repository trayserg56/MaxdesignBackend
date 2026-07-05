<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$form = \Entity\Form::getInstance();
?>

<form id="feedback-form" class="feedback-form" action="/local/submit-form.php" method="post" novalidate>
    <div class="feedback-form__grid">
            <?php foreach ($form->getFields('feedback-form') as $field) {
                switch ($field['type']) {
                    case 'select': ?>
                        <div class="feedback-form__field"><label class="feedback-form__label" for="feedback-<?= $field['name'] ?>">
                                <?= $field['placeholder'] ?></label><select class="feedback-form__select" id="feedback-<?= $field['name'] ?>" name="<?= $field['name'] ?>">
                                <option value="" disabled selected>Выберите из списка</option>
                                <?php foreach ($field['values'] as $value) { ?>
                                    <option value="<?= $value ?>"><?= $value ?></option>
                                <?php } ?>
                            </select></div>
                    <?php
                        break;
                    case 'range':
                        ?>
                        <div class="feedback-form__field"><label class="feedback-form__label" for="feedback-<?= $field['name'] ?>">
                                <?= $field['placeholder'] ?>
                            </label><input class="feedback-form__input" type="number"
                                    id="feedback-<?= $field['name'] ?>" name="<?= $field['name'] ?>"
                                    min="<?= $field['values'][0] ?>"
                                    placeholder="<?= $field['values'][1] ?>">
                        </div>
                        <?php
                        break;
                    default: ?>
                        <div class="feedback-form__field">
                            <input class="feedback-form__input" type="<?= $field['type'] ?>"
                                   id="feedback-<?= $field['name'] ?>" name="<?= $field['name'] ?>"
                                   placeholder="<?= $field['placeholder'] ?>" />
                        </div>
                <?php break;
                }
                ?>

            <?php } ?>
    </div>
    <div class="feedback-form__footer">
        <label class="checkbox feedback-form__consent"><input
                class="checkbox__input" type="checkbox" name="consent" checked required>
            <div class="checkbox__wrap">
                <div class="checkbox__custom">
                    <svg class="checkbox__icon">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#done"></use>
                    </svg>
                </div>
                <p class="checkbox__text"><?= $form->getConsentText('feedback-form') ?></p></div>
        </label>
        <button class="button button--cta-light feedback-form__submit" type="submit"><?= $form->getSubmitText('feedback-form') ?>
        </button>
    </div>
</form>

