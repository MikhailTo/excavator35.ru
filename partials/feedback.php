<section id="feedback" class="feedback page-section">
    <div class="caption">
        <h3 class="caption__title">
            Оставьте заявку
        </h3>
        <span class="line line--short"></span>
        <p class="caption__subtitle">Оставьте заявку и мы с Вами свяжемся!</p>
    </div>
    <!-- Форма обратной связи -->
    <form id="feedback-form" class="form" action="<?php bloginfo('template_directory'); ?>/apps/feedback/process/process.php"
        enctype="multipart/form-data" novalidate>

        <div class="form-body">

            <div class="form-col">
                <!-- Имя пользователя -->
                <div class="form-group">
                    <label for="name" class="control-label">Имя / Компания </label>
                    <input id="name" type="text" name="name" class="form-control" value="" minlength="2" maxlength="30"
                        required="required" placeholder="Введите имя или наименование компании">
                    <div class="invalid-feedback"></div>
                </div>

                <!-- Email пользователя -->
                <div class="form-group">
                    <label for="email" class="control-label">Email-адрес</label>
                    <input id="email" type="email" name="email" required="required" class="form-control" value="" placeholder="Введите Email-адрес">
                    <div class="invalid-feedback"></div>
                </div>

                <!-- Телефон пользователя -->
                <div class="form-group">
                    <label for="phone" class="control-label">Номер телефона</label>
                    <input id="phone" type="tel" name="phone" class="form-control" required="required" placeholder="Введите номер телефона">
                    <div class="invalid-feedback"></div>
                </div>
            </div>

            <div class="form-col">
                <!-- Сообщение пользователя -->
                <div class="form-group">
                    <label for="message" class="control-label">Сообщение</label>
                    <textarea id="message" name="message" class="form-control"
                        placeholder="Введите сообщение (не менее 20 символов)" rows="3" minlength="20" maxlength="500"
                        required="required"></textarea>
                    <div class="invalid-feedback"></div>
                </div>

                <!-- Капча -->
                <div class="form-group form-captcha">

                    <img class=" form-captcha__refresh form-captcha__image"
                        src="<?php bloginfo('template_directory'); ?>/apps/feedback/captcha/captcha.php"
                        data-src="<?php bloginfo('template_directory'); ?>/apps/feedback/captcha/captcha.php"
                        width="132" height="46" alt="Капча">

                    <div class="form-group form-captcha__input">
                        <label for="captcha" class="control-label">Код, показанный на изображении</label>
                        <input type="text" name="captcha" maxlength="6" required="required" id="captcha"
                            class="form-control captcha" placeholder="******" autocomplete="off" value="">
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-footer">

            <!-- Сообщение при ошибке -->
            <div class="form-error d-none">
                Исправьте данные и отправьте форму ещё раз.
            </div>

            <!-- Индикация отправки данных формы на сервер -->
            <div class="progress d-none">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
                    style="width: 0"></div>
            </div>

            <!-- Кнопка для отправки формы на сервер -->
            <div class="form-submit">
                <button class="button" type="submit">Отправить</button>
            </div>
        </div>
    </form>

    <!-- Сообщение об успешной отправки формы -->
    <div class="form-result-success d-none">
        <div>Форма успешно отправлена. Нажмите на <a href="#" data-target="#feedback-form">ссылку</a>, чтобы отправить
            ещё одно сообщение.</div>
    </div>



</section>

<script>
    $.fn.setCursorPosition = function (pos) {
        if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
        }
    };
    $("#phone").click(function () {
        $(this).setCursorPosition(3);
    }).mask("+7(999) 999-9999");
</script>