<?php /* Template name: Анкета */ ?>

<!DOCTYPE html>
<html lang="ru">
<head>
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( 'Страница %s', max( $paged, $page ) );
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
    <meta name="application-name" content="&nbsp;"/>
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

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="wrapper">
        <div class="content">
<?php

get_filename();
?>

<script id="bx24_form_inline" data-skip-moving="true">
        (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                (w[b].forms=w[b].forms||[]).push(arguments[0])};
                if(w[b]['forms']) return;
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://b24-3ihos8.bitrix24.ru/bitrix/js/crm/form_loader.js','b24form');

        b24form({"id":"6","lang":"ru","sec":"dm3joa","type":"inline"});
</script>


<?php
get_filename();

?>
</div>
</div>

</body>
</html>