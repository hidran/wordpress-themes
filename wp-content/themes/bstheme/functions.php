<?php
function theme_styles() {
	wp_enqueue_style( 'bs_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
	$wps = $GLOBALS['wp_scripts'];
	global $wp_scripts;
	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', false );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	wp_enqueue_script( 'bootstrap_js',
		get_template_directory_uri() . '/js/bootstrap.min.js',
		array( 'jquery' ),
		'',
		true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

// Hide admin menu bar
add_filter('show_admin_bar', '__return_false');
add_theme_support('menus');

function my_theme_menu(){
	register_nav_menus(
		array(
			'header-menu' => __('Menù principal')
		)
	);
}
add_action('init', 'my_theme_menu');

register_sidebar($args);