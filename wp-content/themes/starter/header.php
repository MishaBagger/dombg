<!DOCTYPE html>
<html lang="ru">

<head>
    <title><?php
            global $page, $paged;
            wp_title('|', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && (is_home() || is_front_page())) echo " | $site_description";
            if ($paged >= 2 || $page >= 2) echo ' | ' . sprintf('Страница %s', max($paged, $page));
            ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?= THEME_URL ?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?= THEME_URL ?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?= THEME_URL ?>/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?= THEME_URL ?>/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?= THEME_URL ?>/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?= THEME_URL ?>/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?= THEME_URL ?>/img/favicon/mstile-310x310.png" />

    <link rel="stylesheet" href="<?= THEME_URL ?>/css/datepicker.min.css">
    <link rel="stylesheet" href="<?= THEME_URL ?>/css/aos.css">
    <link rel="stylesheet" href="<?= THEME_URL ?>/css/alertify.min.css">
    <link rel="stylesheet" href="<?= THEME_URL ?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= THEME_URL ?>/css/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="wrapper">
        <div class="content">
            <header class="header">
                <div class="container header-container">
                    <div class="header-logo">
                        <img src="<?= wp_get_attachment_image_url(get_field('logo', 'options'), 'medium'); ?>" alt="logo" class="header-logo__img">
                    </div>
                    <div class="header-content">
                        <div class="header-content__top">
                            <a href="#partner" data-fancybox href="javascript:;" data-touch="false" class="header-content__top-button">
                                <span class="header-content__top-button__content">Стань партнером по привлечению БГ</span>
                            </a>
                            <div class="header-content__top-right">
                                <div class="header-content__top-right__text">Горячая линия 24/7 для клиентов</div>
                                <? if (get_field('whatsapp', 'options')) { ?>
                                    <a href="<? the_field('whatsapp', 'options') ?>" class="header-content__top-right__icon">
                                        <svg viewBox="0 0 512 512">
                                            <path d="M256.064 0h-.128C114.784 0 0 114.816 0 256c0 56 18.048 107.904 48.736 150.048l-31.904 95.104 98.4-31.456C155.712 496.512 204 512 256.064 512 397.216 512 512 397.152 512 256S397.216 0 256.064 0zm148.96 361.504c-6.176 17.44-30.688 31.904-50.24 36.128-13.376 2.848-30.848 5.12-89.664-19.264-75.232-31.168-123.68-107.616-127.456-112.576-3.616-4.96-30.4-40.48-30.4-77.216s18.656-54.624 26.176-62.304c6.176-6.304 16.384-9.184 26.176-9.184 3.168 0 6.016.16 8.576.288 7.52.32 11.296.768 16.256 12.64 6.176 14.88 21.216 51.616 23.008 55.392 1.824 3.776 3.648 8.896 1.088 13.856-2.4 5.12-4.512 7.392-8.288 11.744-3.776 4.352-7.36 7.68-11.136 12.352-3.456 4.064-7.36 8.416-3.008 15.936 4.352 7.36 19.392 31.904 41.536 51.616 28.576 25.44 51.744 33.568 60.032 37.024 6.176 2.56 13.536 1.952 18.048-2.848 5.728-6.176 12.8-16.416 20-26.496 5.12-7.232 11.584-8.128 18.368-5.568 6.912 2.4 43.488 20.48 51.008 24.224 7.52 3.776 12.48 5.568 14.304 8.736 1.792 3.168 1.792 18.048-4.384 35.52z" />
                                        </svg>
                                    </a>
                                <? } ?>
                                <a href="tel:<?= clearPhoneNumber(get_field('phone1', 'options')); ?>" class="header-content__top-right__phone"><? the_field('phone1', 'options'); ?></a>
                            </div>
                        </div>
                        <?php if (have_rows('menu', 'options')) { ?>
                            <nav class="header-content__nav">
                                <?php while (have_rows('menu', 'options')) : the_row();
                                    $link_type = get_sub_field('link_type') ?: 'anchor';
                                    $text = get_sub_field('text');
                                    $anchor = get_sub_field('anchor');
                                    $modal_id = get_sub_field('modal_id'); // новое поле для ID модалки
                                ?>

                                    <?php if ($link_type === 'anchor') : ?>
                                        <!-- Обычный якорь -->
                                        <a href="#<?php echo $anchor; ?>" class="header-content__nav-item" data-scroll="true">
                                            <?php echo $text; ?>
                                        </a>

                                    <?php elseif ($link_type === 'modal') : ?>
                                        <!-- Модальное окно -->
                                        <a data-fancybox data-src="#<?php echo $modal_id; ?>" href="javascript:;" class="header-content__nav-item">
                                            <?php echo $text; ?>
                                        </a>

                                    <?php elseif ($link_type === 'external') : ?>
                                        <!-- Внешняя ссылка -->
                                        <a href="<?php the_sub_field('external_url'); ?>" class="header-content__nav-item" target="_blank">
                                            <?php echo $text; ?>
                                        </a>
                                    <?php endif; ?>

                                <?php endwhile; ?>
                            </nav>
                        <?php } ?>
                    </div>
                </div>
            </header>

            <?php get_filename(); ?>