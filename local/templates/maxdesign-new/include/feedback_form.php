<?php

?>

<form class="feedback-form" action="#" method="post" novalidate>
    <div class="feedback-form__grid">
        <div class="feedback-form__field"><input class="feedback-form__input" type="text"
                                                 id="feedback-location" name="location"
                                                 placeholder="Местонахождение объекта"></div>
        <div class="feedback-form__field"><input class="feedback-form__input" type="text"
                                                 id="feedback-name" name="name"
                                                 placeholder="Как к вам обращаться"></div>
        <div class="feedback-form__field"><input class="feedback-form__input j_mask" type="tel"
                                                 id="feedback-phone" name="phone" placeholder="Телефон"
                                                 data-inputmask="'mask': '+ 7(999) 999-99-99'"></div>
        <div class="feedback-form__field"><input class="feedback-form__input" type="email"
                                                 id="feedback-email" name="email" placeholder="E-mail">
        </div>
        <div class="feedback-form__field"><label class="feedback-form__label" for="feedback-type">Тип
                помещения</label><select class="feedback-form__select" id="feedback-type" name="type">
                <option value="" disabled selected>Выберите из списка</option>
                <option value="Квартира">Квартира</option>
                <option value="Дом / коттедж">Дом / коттедж</option>
                <option value="Офис">Офис</option>
                <option value="Коммерческое помещение">Коммерческое помещение</option>
            </select></div>
        <div class="feedback-form__field"><label class="feedback-form__label" for="feedback-area">Площадь,
                м<sup>2</sup></label><input class="feedback-form__input" type="number"
                                            id="feedback-area" name="area" min="1" placeholder="100">
        </div>
    </div>
    <div class="feedback-form__footer"><label class="checkbox feedback-form__consent"><input
                class="checkbox__input" type="checkbox" name="consent" checked>
            <div class="checkbox__wrap">
                <div class="checkbox__custom">
                    <svg class="checkbox__icon">
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/assets/svg/sprite.svg#done"></use>
                    </svg>
                </div>
                <p class="checkbox__text">Нажимая кнопку «Получить расчёт», я&nbsp;даю согласие на&nbsp;обработку
                    моих персональных данных, в&nbsp;соответствии с&nbsp;Федеральным законом
                    от&nbsp;27.07.2006 года №152-Ф3 «О&nbsp;персональных данных», на&nbsp;условиях
                    и&nbsp;для целей, определённых в&nbsp;Согласии на&nbsp;обработку персональных
                    данных</p></div>
        </label>
        <button class="button button--cta-light feedback-form__submit" type="submit">Получить
            консультацию
        </button>
    </div>
</form>

