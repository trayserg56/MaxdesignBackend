<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
global $APPLICATION;

$contacts = \Entity\Contacts::getInstance();
?>
<section class="contacts">
    <div class="container">
        <div class="contacts__wrap">
            <div class="contacts__text"><h2 class="contacts__title">Свяжитесь с нами</h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <div class="contacts__top"><?= $contacts->getName('address') ?>:</div>
                        <div class="contacts__descr"><?= $contacts->get('address') ?>
                        </div>
                    </li>
                    <li class="contacts__item">
                        <div class="contacts__top"><?= $contacts->getName('phone') ?>:</div>
                        <a class="contacts__descr"
                           href="tel:<?= $contacts->getFormatedPhone('phone') ?>"> <?=$contacts->get('phone') ?></a></li>
                    <li class="contacts__item">
                        <div class="contacts__top"><?= $contacts->getName('email') ?>:</div>
                        <a class="contacts__descr"
                           href="mailto:<?= $contacts->get('email') ?>"><?=$contacts->get('email')?></a></li>

                    <li class="contacts__item">
                        <div class="contacts__top"><?= $contacts->getName('email-offer') ?>:</div>
                        <a class="contacts__descr"
                           href="mailto:<?= $contacts->get('email-offer') ?>"><?=$contacts->get('email-offer')?></a></li>
                    <li class="contacts__item">
                        <div class="contacts__top"><?= $contacts->getName('hours-of-work') ?>:</div>
                        <div class="contacts__descr"><?= $contacts->get('hours-of-work') ?></div>
                    </li>
                </ul>
            </div>
            <div class="contacts__img">
                <?php $APPLICATION->IncludeFile('/kontakty/include/image.php'); ?>
            </div>
        </div>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
