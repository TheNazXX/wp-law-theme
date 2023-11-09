<?php

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function law_scripts() {
	wp_enqueue_style( 'law-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'law-style', 'rtl', 'replace' );

	wp_enqueue_style( 'law-fonts', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800');
	
	wp_enqueue_style( 'law-animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'law-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');
	wp_enqueue_style( 'law-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'law-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
	wp_enqueue_style( 'law-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style( 'law-owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style( 'law-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
	
	wp_enqueue_style( 'law-index-style', get_template_directory_uri() . '/assets/css/index.css');

	wp_enqueue_script( 'law-modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.6.2.min.js', [], '' , true);
	wp_enqueue_script( 'law-respond', get_template_directory_uri() . '/assets/js/respond.min.js', [], '' , true);
	wp_script_add_data('pngfix', 'conditional', 'lt IE 9');

	wp_deregister_script('jquery');
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', [], '' , false);
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'law-jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', [], '' , true);
	wp_enqueue_script( 'law-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], '' , true);
	wp_enqueue_script( 'law-jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', [], '' , true);
	wp_enqueue_script( 'law-jquery-stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', [], '' , true);
	wp_enqueue_script( 'law-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], '' , true);
	wp_enqueue_script( 'law-jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', [], '' , true);
	wp_enqueue_script( 'law-jquery-countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js', [], '' , true);
	wp_enqueue_script( 'law-jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', [], '' , true);
	wp_enqueue_script( 'law-magnific-popup-options', get_template_directory_uri() . '/assets/js/magnific-popup-options.js', [], '' , true);
	wp_enqueue_script( 'law-index', get_template_directory_uri() . '/assets/js/index.js', [], '' , true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'law_scripts' );


function law_setup() {
	load_theme_textdomain( 'law', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' ); //  функция добавляет поддержку автоматической генерации тега <title>
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'header-menu' => esc_html__('Header Menu', 'law'),
			'footer-menu' => esc_html__('Footer Menu', 'law')
		)
	);


	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	add_theme_support(
		'custom-background',
		apply_filters(
			'law_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);


	add_theme_support( 'customize-selective-refresh-widgets' ); // механизм, который позволяет обновлять только определенные части страницы, связанные с виджетами, без необходимости перезагружать всю страницу.


	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'law_setup' );


function law_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'law_content_width', 640 );
}
add_action( 'after_setup_theme', 'law_content_width', 0 );


function law_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'law' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'law' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'law_widgets_init' );



require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/inc/tgm.php';
require_once get_template_directory() . '/inc/custom_walker_menu.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}