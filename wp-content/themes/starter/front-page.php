<?php
get_header();
get_filename();
?>

<section class="hero section" style="background-image: url(<?= wp_get_attachment_image_url(get_field('heroImage'), 'full'); ?>)">
    <div class="container">
        <h1 class="hero-title"><? the_field('heroTitle'); ?></h1>
        <h2 class="hero-subtitle"><? the_field('heroSubtitle'); ?></h2>
        <div class="hero-buttons">
            <div class="hero-buttons__item">
                <a data-fancybox data-src="#modal" href="javascript:;" data-touch="false" class="hero-buttons__item-link btn-filled">Получить консультацию</a>
            </div>
            <div class="hero-buttons__item">
                <a data-fancybox data-src="#modal2" href="javascript:;" data-touch="false" class="hero-buttons__item-link btn-transparent">Оформить гарантию</a>
            </div>
        </div>
    </div>
</section>
<section class="calc section" id="calc">
    <div class="container calc-container">
        <h2 class="calc-title title"><? the_field('calcTitle'); ?></h2>
        <div class="calc-content">
            <div class="calc-main">
                <div class="calc-main__item">
                    <div class="calc-main__item-top">Сумма гарантии</div>
                    <input type="num" class="calc-main__item-input" placeholder="Например, 44 530">
                </div>
                <div class="calc-main__item">
                    <div class="calc-main__item-top">Вид банковской гарантии</div>
                    <div class="calc-main__item-select customSelect">
                        <div class="calc-main__item-select__top">
                            <div class="calc-main__item-select__top-text customSelect-text">Выберите вид гарантии</div>
                            <div class="calc-main__item-select__top-arrow"></div>
                        </div>
                        <? if (have_rows('calcList')) { ?>
                            <div class="calc-main__item-select__inner">
                                <? while (have_rows('calcList')) : the_row(); ?>
                                    <div class="calc-main__item-select__inner-item customSelect-item" data-percent="<? the_sub_field('percent'); ?>"><? the_sub_field('text'); ?></div>
                                <? endwhile; ?>
                            </div>
                        <? } ?>
                    </div>
                </div>
                <div class="calc-main__calendar">
                    <div class="calc-main__item">
                        <div class="calc-main__item-top">Дата выдачи гарантии</div>
                        <input type="text" class="calc-main__item-input" placeholder="Выберите дату">
                    </div>
                    <div class="calc-main__item">
                        <div class="calc-main__item-top">Дата окончания гарантии</div>
                        <input type="text" class="calc-main__item-input" placeholder="Выберите дату">
                    </div>
                </div>
                <div class="calc-main__period">
                    <svg viewBox="0 0 26 26" class="calc-main__period-img">
                        <path d="M23.10958,20.17431l1.78791,0.96392c-0.3606,0.66894 -0.80406,1.29303 -1.31802,1.85519l-1.49895,-1.37104c0.40146,-0.43881 0.74764,-0.92589 1.02905,-1.44807zM20.73013,22.77693l1.12061,1.69429c-0.63583,0.42028 -1.32191,0.7606 -2.03934,1.0117l-0.67085,-1.91711c0.55893,-0.19551 1.09371,-0.46124 1.58958,-0.78888zM15.7421,11.88276h2.03133v5.34324l-2.85587,2.43588l-1.31813,-1.5451l2.14268,-1.82788zM23.96869,16.75744h2.03121c0,0.76402 -0.0935,1.52316 -0.27798,2.25743l-1.96999,-0.49439c0.14385,-0.57289 0.21675,-1.16577 0.21675,-1.76304zM25.9999,5.0778v1.82837h-2.03121v-1.82837c0,-0.55973 -0.45559,-1.0156 -1.01566,-1.0156h-1.21868v2.0312h-2.03133v-2.0312h-13.40618v2.0312h-2.03121v-2.0312h-1.2188c-0.56007,0 -1.01566,0.45587 -1.01566,1.0156v2.38664h8.26653c-0.53444,0.37543 -1.04015,0.79961 -1.51142,1.2706c-0.24445,0.24476 -0.47562,0.49878 -0.69454,0.7606h-6.06056v13.45731c0,0.55973 0.45559,1.0156 1.01566,1.0156h5.0449c0.21893,0.26231 0.4501,0.51633 0.69454,0.7606c0.47127,0.47099 0.97698,0.89517 1.51131,1.2706h-7.25075c-1.68011,0 -3.04687,-1.36665 -3.04687,-3.0468v-17.87514c0,-1.68015 1.36677,-3.0468 3.04688,-3.0468h1.2188v-2.0312h2.03121v2.0312h13.40618v-2.0312h2.03133v2.0312h1.21868c1.68011,0 3.04688,1.36665 3.04688,3.0468zM23.96869,8.93737h2.03121v5.58604h-5.58586v-2.03169h2.15984c-1.33873,-1.8274 -3.48106,-2.9449 -5.81612,-2.9449c-3.97614,0 -7.21092,3.23451 -7.21092,7.21061c0,3.9761 3.23479,7.2111 7.21092,7.2111c0.00034,0 0.00057,0 0.0008,0c0.21584,0 0.43362,-0.00975 0.64751,-0.02877l0.18002,2.0234c-0.2734,0.02438 -0.55183,0.03657 -0.82752,0.03657c-0.00034,0 -0.00057,0 -0.00092,0c-5.09605,0 -9.24213,-4.14626 -9.24213,-9.2423c0,-5.09604 4.14608,-9.2423 9.24225,-9.2423c2.85461,0 5.48527,1.30278 7.21092,3.45587z" fill="#476696" fill-opacity="1"></path>
                    </svg>
                    <div class="calc-main__period-text">Срок действия 365 дней</div>
                </div>
                <div class="calc-main__number">0 ₽</div>
                <div class="calc-main__button btn-filled">
                    рассчитать гарантию
                </div>
                <p class="calc-main__text"><? the_field('calcText'); ?></p>
            </div>
            <? if (have_rows('calcList2')) { ?>
                <div class="calc-list">
                    <? while (have_rows('calcList2')) : the_row(); ?>
                        <div class="calc-list__item">
                            <div class="calc-list__item-top"><? the_sub_field('title'); ?></div>
                            <div class="calc-list__item-bottom"><? the_sub_field('subtitle'); ?></div>
                        </div>
                    <? endwhile; ?>
                </div>
            <? } ?>
        </div>
    </div>
    <div class="calc-bg" style="background-image: url(<?= wp_get_attachment_image_url(get_field('calcImage'), 'full'); ?>)"></div>
</section>
<section class="adv section" style="background-image: url(<?= wp_get_attachment_image_url(get_field('advImage'), 'full'); ?>)">
    <div class="container adv-container">
        <h2 class="adv-title title"><? the_field('advTitle'); ?></h2>
        <? if (have_rows('advList')) { ?>
            <div class="adv-list">
                <? while (have_rows('advList')) : the_row(); ?>
                    <div class="adv-list__item" data-aos="fade-up">
                        <div class="adv-list__item-img">
                            <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'medum'); ?>" alt="1" class="adv-list__item-img__content">
                        </div>
                        <div class="adv-list__item-text"><? the_sub_field('text'); ?></div>
                        <? if (get_row_index() == 4) { ?>
                            <div class="adv-list__item-btn">
                                <a href="https://ca.tensor.ru/petition.html?agent_code=1758" class="adv-list__item-btn__inner btn-filled">Оформить ЭЦП</a>
                            </div>
                        <? } ?>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>
    </div>
</section>
<section class="provide section" id="provide">
    <div class="container provide-container">
        <h2 class="provide-title title"><? the_field('provideTitle'); ?></h2>
        <? if (have_rows('provideList')) { ?>
            <div class="provide-list">
                <? while (have_rows('provideList')) : the_row(); ?>
                    <div class="provide-list__item">
                        <div class="provide-list__item-text">
                            <div class="provide-list__item-title"><? the_sub_field('title'); ?></div>
                            <div class="provide-list__item-list"><? the_sub_field('text'); ?></div>
                        </div>
                        <a data-fancybox data-src="#modal4" href="javascript:;" data-touch="false" class="provide-list__item-button">Оформить заявку</a>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>
    </div>
</section>
<section class="number section" style="background-image: url(<?= wp_get_attachment_image_url(get_field('numberImage'), 'full'); ?>)">
    <div class="container number-container">
        <div class="number-content">
            <h2 class="number-content__title title"><? the_field('numberTitle'); ?></h2>
            <? while (have_rows('numberList')) : the_row(); ?>
                <div class="number-content__item">
                    <div class="number-content__item-img">
                        <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'medum'); ?>" alt="1" class="number-content__item-img__content">
                    </div>
                    <div class="number-content__item-text">
                        <div class="number-content__item-text__number"><? the_sub_field('title'); ?></div>
                        <div class="number-content__item-text__text"><? the_sub_field('text'); ?></div>
                    </div>
                </div>
            <? endwhile; ?>
        </div>
        <img src="<?= THEME_URL ?>/img/number/4.png" alt="4" class="number-coin number-coin_1">
        <img src="<?= THEME_URL ?>/img/number/5.png" alt="4" class="number-coin number-coin_2">
    </div>
</section>
<section class="opportunity section">
    <div class="container opportunity-container">
        <h2 class="opportunity-title title"><? the_field('opportunityTitle'); ?></h2>
        <? if (have_rows('opportunityList')) { ?>
            <div class="opportunity-list">
                <? while (have_rows('opportunityList')) : the_row(); ?>
                    <div class="opportunity-list__item">
                        <div class="opportunity-list__item-img">
                            <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'medum'); ?>" alt="1" class="opportunity-list__item-img__content">
                        </div>
                        <div class="opportunity-list__item-title"><? the_sub_field('title'); ?></div>
                        <div class="opportunity-list__item-text"><? the_sub_field('text'); ?></div>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>
    </div>
</section>
<section class="clients section" id="clients">
    <div class="container clients-container">
        <h2 class="clients-title title"><? the_field('clientsTitle'); ?></h2>
        <? if (have_rows('clientsList')) { ?>
            <div class="clients-list">
                <? while (have_rows('clientsList')) : the_row(); ?>
                    <div class="clients-list__item">
                        <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'medum'); ?>" alt="1" class="clients-list__item-content">
                    </div>
                <? endwhile; ?>
                <div class="clients-list__item">
                    и еще более
                    <br>
                    25 банков-партнеров
                </div>
            </div>
        <? } ?>
    </div>
</section>

<!-- Модальное окно для галереи -->
<div id="galleryModal" class="gallery-modal">
    <span class="close-modal">&times;</span>
    <div class="modal-content">
        <img id="modalImage" src="" alt="Увеличенное изображение">
        <div class="modal-nav">
            <button class="modal-prev">‹</button>
            <button class="modal-next">›</button>
        </div>
    </div>
</div>
<section class="result section" id="result" style="background-image: url(<?= wp_get_attachment_image_url(get_field('resultImage'), 'full'); ?>)">
    <div class="container result-container">
        <h2 class="result-title title"><? the_field('resultTitle'); ?></h2>
        <? if (have_rows('resultList')) { ?>
            <div class="result-list">
                <? while (have_rows('resultList')) : the_row(); ?>
                    <div class="result-list__item" data-aos="fade-up">
                        <div class="result-list__item-number">
                            <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'medium'); ?>" alt="" class="result-list__item-number__content svg">
                        </div>
                        <div class="result-list__item-title"><? the_sub_field('title'); ?></div>
                        <div class="result-list__item-text"><? the_sub_field('text'); ?></div>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>
        <div class="result-btn">
            <a data-fancybox data-src="#modal3" href="javascript:;" data-touch="false" class="result-btn__content btn-filled">Получить банковскую гарантию</a>
        </div>
        <div class="result-text"><? the_field('resultText'); ?></div>
    </div>
</section>
<section class="sertificates section" id="sertificates">
    <div class="container clients-container">
        <h2 class="clients-title title"><?php the_field('sertificatesTitle'); ?></h2>

        <?php if (have_rows('sertificatesList')): ?>
            <!-- Основной слайдер -->
            <div class="sertificates-slider swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('sertificatesList')) : the_row();
                        $image_id = get_sub_field('sertificateImage');
                        $image_url = wp_get_attachment_image_url($image_id, 'large');
                        $image_thumb = wp_get_attachment_image_url($image_id, 'large');
                    ?>
                        <div class="swiper-slide" data-image="<?php echo $image_url; ?>">
                            <img src="<?php echo $image_thumb; ?>"
                                alt="Сертификат"
                                class="sertificate-image">
                            <div class="zoom-icon">🔍</div>
                        </div>
                    <?php endwhile; ?>
                </div>

                <!-- Навигация -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        <?php endif; ?>
    </div>
</section>
<section class="faq section">
    <div class="container faq-container">
        <h2 class="faq-title title"><? the_field('faqTitle'); ?></h2>
        <? if (have_rows('faqList')) { ?>
            <div class="faq-list">
                <? while (have_rows('faqList')) : the_row(); ?>
                    <div class="faq-list__item">
                        <div class="faq-list__item-header">
                            <div class="faq-list__item-header__text"><? the_sub_field('title'); ?></div>
                            <div class="faq-list__item-header__stuff"></div>
                        </div>
                        <div class="faq-list__item-bottom"><? the_sub_field('text'); ?></div>
                    </div>
                <? endwhile; ?>
            </div>
        <? } ?>
    </div>
</section>
<section class="form section" id="form">
    <div class="container form-container">
        <h2 class="form-title title"><? the_field('formTitle'); ?></h2>
        <div class="form-main">
            <div class="form-main__select customSelect">
                <div class="form-main__select-top">
                    <div class="form-main__select-top__text customSelect-text">Тип гарантии</div>
                    <div class="form-main__select-top__arrow"></div>
                </div>
                <? if (have_rows('calcList')) { ?>
                    <div class="form-main__select-inner">
                        <? while (have_rows('calcList')) : the_row(); ?>
                            <div class="form-main__select-inner__item customSelect-item"><? the_sub_field('text'); ?></div>
                        <? endwhile; ?>
                    </div>
                <? } ?>
            </div>
            <?= do_shortcode('[contact-form-7 id="117" title="Получить банковскую гарантию"]'); ?>
        </div>
    </div>
    <div class="form-bg">
        <img src="<?= THEME_URL ?>/img/form/logo.png" alt="logo" class="form-bg__img">
    </div>
</section>

<section class="result section" id="result" style="background-image: url(<?= wp_get_attachment_image_url(get_field('managerImage'), 'full'); ?>)">
    <div class="container manager-container">
        <h2 class="manager-title result-title title"><? the_field('managerTitle'); ?></h2>
        <? if (have_rows('managerList')) { ?>
            <div class="manager-list result-list">
                <? while (have_rows('managerList')) : the_row(); ?>
                    <div class="manager-list__item result-list__item" data-aos="fade-up">
                        <div class="manager-list__item-number result-list__item-number">
                            <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'medium'); ?>" alt="" class="manager-list__item-number__content result-list__item-number__contentsvg">
                        </div>
                        <div class="manager-list__item-title result-list__item-title"><? the_sub_field('title'); ?></div>
                        <div class="manager-list__item-text result-list__item-text"><? the_sub_field('text'); ?></div>
                        <a data-fancybox data-src="#manager" href="javascript:;" data-touch="false" class="manager-buttons__item-link btn-transparent"><? the_sub_field('managerButton'); ?></a>
                    </div>

                <? endwhile; ?>

            </div>
        <? } ?>
    </div>
</section>

<?php
get_filename();
get_footer();
?>