<?php get_filename(); ?>

<footer class="footer section" id="footer">
    <div class="container footer-container">
        <div class="footer-logo">
            <img src="<?= wp_get_attachment_image_url(get_field('logo', 'options'), 'medium'); ?>" alt="logo" class="footer-logo__img">
        </div>
        <div class="footer-phone">
            <a href="tel:<?= clearPhoneNumber(get_field('phone2', 'options')); ?>" class="footer-phone__link"><? the_field('phone2', 'options'); ?></a>
            <a data-fancybox data-src="#modal5" href="javascript:;" data-touch="false" class="footer-phone__modal link">Заказать звонок</a>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom__item">
                Все права защищены, копирование
                <br>
                любых материалов запрещено.
            </div>
            <div class="footer-bottom__item">
                <a data-fancybox data-src="#policy" href="javascript:;" class="footer-bottom__item-policy link">Политика конфиденциальности</a>
                <div>© 2025</div>
            </div>
        </div>
    </div>
</footer>
<div class="modal-wrapper" id="modal">
    <div class="modal">
        <div class="modal-title"><? the_field('title_2', 'options'); ?></div>
        <div class="modal-subtitle"><? the_field('subtitle_2', 'options'); ?></div>
        <?= do_shortcode('[contact-form-7 id="5" title="1 экран получить консультацию"]'); ?>
    </div>
</div>
<div class="modal-wrapper" id="modal2">
    <div class="modal">
        <div class="modal-title"><? the_field('title_3', 'options'); ?></div>
        <div class="modal-subtitle"><? the_field('subtitle_3', 'options'); ?></div>
        <?= do_shortcode('[contact-form-7 id="114" title="1 экран оформить гарантию"]'); ?>
    </div>
</div>
<div class="modal-wrapper" id="modal3">
    <div class="modal">
        <div class="modal-title"><? the_field('title_5', 'options'); ?></div>
        <div class="modal-subtitle"><? the_field('subtitle_5', 'options'); ?></div>
        <?= do_shortcode('[contact-form-7 id="115" title="Работаем на результат"]'); ?>
    </div>
</div>
<div class="modal-wrapper" id="modal4">
    <div class="modal">
        <div class="modal-title"><? the_field('title_4', 'options'); ?></div>
        <div class="modal-subtitle"><? the_field('subtitle_4', 'options'); ?></div>
        <?= do_shortcode('[contact-form-7 id="118" title="Оформить заявку гарантии"]'); ?>
    </div>
</div>
<div class="modal-wrapper" id="modal5">
    <div class="modal">
        <div class="modal-title"><? the_field('title_6', 'options'); ?></div>
        <div class="modal-subtitle"><? the_field('subtitle_6', 'options'); ?></div>
        <?= do_shortcode('[contact-form-7 id="138" title="footer"]'); ?>
    </div>
</div>
<div class="modal-wrapper" id="modal-tender">
    <div class="modal">
        <div class="modal-title"><? the_field('title_tender', 'options'); ?></div>
        <div class="modal-subtitle"><? the_field('subtitle_tender', 'options'); ?></div>
        <?= do_shortcode('[contact-form-7 id="221" title="Тендерное сопровождение"]'); ?>
    </div>
    <div class="modal-wrapper" id="modal-guarantees">
        <div class="modal">
            <div class="modal-title"><? the_field('title_guarantees', 'options'); ?></div>
            <div class="modal-subtitle"><? the_field('subtitle_guarantees', 'options'); ?></div>
            <?= do_shortcode('[contact-form-7 id="114" title="1 экран оформить гарантию"]'); ?>
        </div>
    </div>
    <div class="modal-wrapper" id="modal-credits">
        <div class="modal">
            <div class="modal-title"><? the_field('title_credits', 'options'); ?></div>
            <div class="modal-subtitle"><? the_field('subtitle_credits', 'options'); ?></div>
            <?= do_shortcode('[contact-form-7 id="222" title="Кредитование"]'); ?>
        </div>
    </div>
        <div class="modal-wrapper" id="modal-smr">
        <div class="modal">
            <div class="modal-title"><? the_field('title_smr', 'options'); ?></div>
            <div class="modal-subtitle"><? the_field('subtitle_smr', 'options'); ?></div>
            <?= do_shortcode('[contact-form-7 id="223" title="Страхование СМР"]'); ?>
        </div>
    </div>
        <div class="modal-wrapper" id="modal-fas">
        <div class="modal">
            <div class="modal-title"><? the_field('title_fas', 'options'); ?></div>
            <div class="modal-subtitle"><? the_field('subtitle_fas', 'options'); ?></div>
            <?= do_shortcode('[contact-form-7 id="224" title="Защита в ФАС"]'); ?>
        </div>
    </div>
</div>
<div class="modalNew-wrapper" id="partner">
    <div class="modalNew">
        <div class="modalNew-title"><? the_field('title_1', 'options'); ?></div>
        <div class="modalNew-text"><? the_field('text_1', 'options'); ?></div>
        <div class="modalNew-form">
            <?= do_shortcode('[contact-form-7 id="116" title="Header стать партнером"]'); ?>
        </div>
        <div class="modalNew-checkbox__wrapper">
            <div class="modalNew-checkbox">
                <img src="<?= THEME_URL ?>/img/form/check.png" alt="check" class="modalNew-checkbox__img">
                <div class="modalNew-checkbox__text">
                    нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="#policy" data-fancybox class="link">политикой конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="policy-wrapper" id="policy">
    <div class="policy">
        <div class="policy-title">Политика конфиденциальности</div>
        <p class="policy-text">Настоящее Пользовательское соглашение является публичным документом администратора сайта <?php echo home_url(); ?> (далее – Администратор) и определяет порядок использования посетителями (далее - Посетитель) сайта <?php echo home_url(); ?>, принадлежащего Администратору, и обработки, хранения и иного использования информации, получаемой Администратором от Посетителя на сайте Администратора. Администратор сайта может изменить в любой момент данное Пользовательское соглашение без уведомления Посетителя сайта.</p>
        <ul class="policy-list">
            <li class="policy-list__item">Посетитель сайта, оставляя какую-либо информацию, относящуюся прямо или косвенно к определенному или определяемому физическому лицу (далее - Персональные данные), подтверждает, что ознакомился с данным Пользовательским соглашением и согласен с ним.</li>
            <li class="policy-list__item">В отношении всех сообщаемых Персональных данных Посетитель дает Администратору полное согласие на их обработку.</li>
            <li class="policy-list__item">Администратор сайта гарантирует Посетителю, что обработка и хранение поступивших Персональных данных Посетителя будет осуществляться в соответствии с положениями Федерального закона от 27.06.2006 № 152-ФЗ «О персональных данных».</li>
            <li class="policy-list__item">Посетитель сайта понимает и соглашается с тем, что предоставление Администратору какой-либо информации, не имеющей никакого отношения к целям сайта, запрещено. Такой информацией может являться информация, касающаяся состояния здоровья, интимной жизни, национальности, религии, политических, философских и иных убеждений Посетителя, а равно и информация, которая является коммерческой, банковской и иной тайной Посетителя сайта.</li>
            <li class="policy-list__item">Администратор гарантирует Посетителю, что использует Персональные данные, поступившие от Посетителя, исключительно в целях, ограниченных маркетинговыми, рекламными, информационными целями Администратора, а также для анализа и исследования Посетителей сайта, а также в целях предоставления ему товаров и услуг непосредственно находящихся, либо нет, на сайте Администратора.</li>
            <li class="policy-list__item">Посетитель в соответствии с ч. 1 ст. 18 Федерального закона «О рекламе» дает Администратору свое согласие на получение сообщений рекламного характера по указанным контактным данным.Посетитель самостоятельно несёт ответственность за нарушение законодательства при использовании сайта Администратора.</li>
            <li class="policy-list__item">Посетитель самостоятельно несёт ответственность за нарушение законодательства при использовании сайта Администратора.</li>
            <li class="policy-list__item">Администратор не несет никакой ответственности в случае нарушения законодательства Посетителем, в том числе, не гарантирует, что содержимое сайта соответствует целям Посетителя сайта.</li>
            <li class="policy-list__item">Посетитель сайта несет самостоятельно ответственность в случае, если были нарушены права и законные интересы третьих лиц, при использовании сайта Администратора, Посетителем.</li>
            <li class="policy-list__item">Администратор вправе запретить использование сайта Посетителю, если на то есть законные основания.</li>
        </ul>
    </div>
</div>
</div>
<script src="<?= THEME_URL ?>/js/jquery-3.5.1.min.js"></script>
<script src="<?= THEME_URL ?>/js/datepicker.min.js"></script>
<script src="<?= THEME_URL ?>/js/aos.js"></script>
<script src="<?= THEME_URL ?>/js/alertify.min.js"></script>
<script src="<?= THEME_URL ?>/js/jquery.fancybox.min.js"></script>
<script src="<?= THEME_URL ?>/js/jquery.maskedinput.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(66334570, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/66334570" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<?php
wp_footer();
get_filename();
?>

</body>

</html>