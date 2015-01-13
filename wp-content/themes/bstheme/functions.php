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
add_theme_support('post-thumbnails');

function my_theme_menu(){
	register_nav_menus(
		array(
			'header-menu' => __('Menù principal')
		)
	);
}
add_action('init', 'my_theme_menu');
function create_widget($name, $id, $description) {
	$args = array(
		'name'          => __($name ),
		'id'            => $id,
		'description'   => __($description),
	
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>' );
	register_sidebar( $args );
}
create_widget('Portada izquierda', 'frontleft', 'se muestra en en lado izquierda');
create_widget('Portada centro', 'frontcenter', 'se muestra en en  centro');
create_widget('Portada derecha', 'frontright', 'se muestra en en lado derecho');

create_widget('Sidebar', 'sidebar', 'se muestra nel sidebar');
create_widget('Sidebar Blog', 'blog', 'se muestra nel lato sinistro del blog');