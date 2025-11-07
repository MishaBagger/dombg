<?php

//require_once 'meta-box-class/taxonomy-meta.php';
//require_once 'meta-box-class/demo.php';

define('THEME_URL', get_stylesheet_directory_uri());
define('THEME_PATH', get_stylesheet_directory());
define('SITE_URL', get_home_url());

function clearPhoneNumber($phone)
{
	$drop_array = array('-', ' ', '/', ',', '()', '(', ')', '  ', '<span>', '</span>');
	return str_replace($drop_array, "", $phone);
}

//add_theme_support( 'automatic-feed-links' );

add_theme_support('post-thumbnails'); // the_post_thumbnail( 'thumbnail' );
set_post_thumbnail_size(300, 200, true);
// add_image_size( 'slider', 105, 105, true ); // the_post_thumbnail( 'slider' );

// add_filter( 'image_size_names_choose', 'image_sizes' );
function image_sizes($sizes)
{
	$addsizes = array(
		'slider' => 'Слайдер'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}

add_action('wp_enqueue_scripts', function () {
	global $styles_array;
	global $scripts_array;

	wp_register_style('site', THEME_URL . '/css/style.css', $styles_array, '12', 'all');
	wp_enqueue_style('site');

	wp_register_script('site', THEME_URL . '/js/main.js', $scripts_array, '3', true);
	wp_enqueue_script('site');
	wp_localize_script('site', 'ajax', array('url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('nonce')));
});

add_filter('admin_footer_text', function () {
	echo 'Developed by Ivan Tsimbalist';
});

add_action('wp_dashboard_setup', function () {
	//global $wp_meta_boxes;

	//unset($wp_meta_boxes['dashboard']);
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
	remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
	remove_meta_box('dashboard_secondary', 'dashboard', 'side');
	wp_add_dashboard_widget('dashboard_widget', 'Wordpress programmer', function () {
		echo 'Developed by Ivan Tsimbalist';
	});
});

add_action('widgets_init', 'widgets_init');
function widgets_init()
{

	register_sidebar(array(
		'name' => 'Widget 1',
		'id' => 'widget-1',
		'description' => 'Widget 1',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Widget 2',
		'id' => 'widget-2',
		'description' => 'Widget 2',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));
}

register_nav_menus(array(
	'menu-1' => 'Menu 1',
	'menu-2' => 'Menu 2',
	'menu-3' => 'Menu 3',
	'menu-4' => 'Menu 4',
	'menu-5' => 'Menu 5'
));

// add_action( 'admin_menu', 'admin_menu' );
function admin_menu()
{
	remove_menu_page('edit-comments.php');
}

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);
//remove_action( 'wp_head', 'feed_links', 2 );


function get_filename()
{
	$array = debug_backtrace();
	$file = basename($array[0]['file']);
	echo '<!-- ' . $file . ' -->' . "\n";
}

add_filter('body_class', 'browser_body_class');
function browser_body_class($classes)
{
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if ($is_lynx) $classes[] = 'lynx';
	if ($is_gecko) $classes[] = 'gecko';
	if ($is_opera) $classes[] = 'opera';
	if ($is_NS4) $classes[] = 'ns4';
	if ($is_safari) $classes[] = 'safari';
	if ($is_chrome) $classes[] = 'chrome';
	if ($is_IE) $classes[] = 'ie';
	if (wp_is_mobile()) $classes[] = 'mobile';
	if ($is_iphone) $classes[] = 'iphone';

	return $classes;
}

add_filter('post_class', 'post_classes');
function post_classes($classes)
{
	global $wp_query;

	if ($wp_query->found_posts < 1) return $classes;
	if ($wp_query->current_post == 0) $classes[] = 'post-first';
	if ($wp_query->current_post == ($wp_query->post_count - 1)) $classes[] = 'post-last';
	$classes[] = ($wp_query->current_post + 1) % 2 ? 'post-notsecond' : 'post-second';
	$classes[] = ($wp_query->current_post + 1) % 3 ? 'post-notthird' : 'post-third';
	$classes[] = ($wp_query->current_post + 1) % 4 ? 'post-notfourth' : 'post-fourth';
	$classes[] = ($wp_query->current_post + 1) % 5 ? 'post-notfifth' : 'post-fifth';
	return $classes;
}


// убираем span и p теги в contact form 7(еще в config.php в корне надо прописать define('WPCF7_AUTOP', false );) 

// add_filter('wpcf7_form_elements', function($content) {
// $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
// return $content;
// });

function my_request($request)
{
	$dummy_query = new WP_Query();
	$dummy_query->parse_query($request);

	if ($dummy_query->is_archive()) {
		$request['posts_per_page'] = 1;
	}

	return $request;
}
add_filter('request', 'my_request');

add_action('wpcf7_mail_sent', function ($contact_form) {
	$form_id = $contact_form->id();
	$submission = WPCF7_Submission::get_instance();

	if (!$submission) return;

	$data = $submission->get_posted_data();
	$webhook_url = $_ENV['BITRIX_WEBHOOK'] ?? '';

	switch ($form_id) {

		// [contact-form-7 id="5" title="1 экран получить консультацию"]

		case 5:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Заявка на консультацию от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма консультации',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на консультацию с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="114" title="1 экран оформить гарантию"]

		case 114:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление гарантии от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					// ИНН
					'UF_CRM_1724843163167' => $data['inn'] ?? '',
					// НОМЕР ЗАКУПКИ
					'UF_CRM_1728637660927' => $data['purchaseNumber'] ?? '',

					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма оформления гарантии',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на оформление гарантии с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="117" title="Получить банковскую гарантию"]
		case 117:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление гарантии от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					// ТИП ГАРАНТИИ
					'UF_CRM_VIDOBESPECHEN' => $data['type'] ?? '',
					// СУММА ГАРАНТИИ
					'UF_CRM_1724843462361' => $data['sum'] ?? '',
					// СРОК ДЕЙСТВИЯ
					'UF_CRM_1724843473558' => $data['period'] ?? '',

					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма оформления гарантии',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на оформление гарантии с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="138" title="footer"]
		case 138:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Заявка на консультацию от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма консультации в подвале сайта',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на консультацию с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="116" title="Header стать партнером"]

		case 116:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Заявка на партнёрство от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма партнёрства',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Заявка на партнёрство с сайта dombg.org'
				]
			];

			break;

		// [contact-form-7 id="118" title="Оформить заявку гарантии"]
		case 118:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление выбранной гарантии от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'UF_CRM_VIDOBESPECHEN' => $data['guarantee'] ?? '',
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Карточка оформления гарантии',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на оформление гарантии с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="115" title="Работаем на результат"]
		case 115:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление гарантии от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма оформления гарантии после партнёров',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на оформление гарантии с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="221" title="Тендерное сопровождение"]
		case 221:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление тендерного сопровождения от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма в меню оформления тендерного сопровождения',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на оформление тендерного сопровождения с сайта dombg.org'
				]
			];
			break;
		// [contact-form-7 id="222" title="Кредитование"]
		case 222:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление кредитования от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма в меню кредитования',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на кредитование с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="223" title="Страхование СМР"]
		case 223:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление страхования строительно-монтажных рисков от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма в меню страхования СМР',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на страхование строительно-монтажных рисков с сайта dombg.org'
				]
			];
			break;

		// [contact-form-7 id="224" title="Защита в ФАС"]
		case 224:
			$bitrix_data = [
				'fields' => [
					'TITLE' => 'Оформление защиты в ФАС от ' . ($data['fio'] ?? ''),
					'NAME' => $data['fio'] ?? '',
					'EMAIL' => [
						['VALUE' => $data['email'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'SOURCE_ID' => 'WEB',
					'SOURCE_DESCRIPTION' => 'Форма в меню защиты в ФАС',
					'PHONE' => [
						['VALUE' => $data['phone'] ?? '', 'VALUE_TYPE' => 'WORK']
					],
					'COMMENTS' => 'Запрос на защиту в ФАС с сайта dombg.org'
				]
			];
			break;

		default:
			return;
	}

	// Отправка в Битрикс24
	$response = wp_remote_post($webhook_url . 'crm.lead.add.json', [
		'body' => json_encode($bitrix_data),
		'headers' => ['Content-Type' => 'application/json'],
		'timeout' => 15
	]);
});
