<?php 

//ACF Fields Plugin
require get_template_directory() . '/inc/acf-fields.php';

// Importando o arquivo do Customizer
require get_template_directory() . '/inc/customizer.php';

function  load_scripts() {
    //Styles
    wp_enqueue_style( 'geral',            get_template_directory_uri().'/css/geral.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap',         get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('slick',             get_template_directory_uri().'/js/plugins/slick/slick.css', array(), false, 'all');
	wp_enqueue_style('slick_theme',       get_template_directory_uri().'/js/plugins/slick/slick-theme.css', array(), false, 'all');
    
	//Scripts
	wp_enqueue_script('script',           get_template_directory_uri().'/js/script.js', array('jquery'), null, true);
    wp_enqueue_script('slick-js',         get_template_directory_uri().'/js/plugins/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js',     get_template_directory_uri().'/js/plugins/bootstrap/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/js/plugins/bootstrap/bootstrap.bundle.min.js', array('jquery'), null, true );

}

add_action('wp_enqueue_scripts', 'load_scripts');


function posts_types() {
    register_post_type(
		'artistas',
		array(
			'labels' => array(
				'name' => __('Artistas'),
				'singular_name' => __('Artistas')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title')
		)
	);
	
	register_post_type (
		'depoimentos',
		array(
			'labels' => array(
				'name' => __('Depoimentos'),
				'singular_name' => __('Depoimentos')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-status',
			'supports' => array('title')
		)
	);

	register_post_type (
		'parceiros',
		array(
			'labels' => array(
				'name' => __('Parceiros'),
				'singular_name' => __('Parceiros')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title')
		)
	);

	register_post_type (
		'eventos',
		array(
			'labels' => array(
				'name' => __('Eventos'),
				'singular_name' => __('Eventos')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title')
		)
	);

	register_post_type (
		'logos_rodape',
		array(
			'labels' => array(
				'name' => __('Logos Rodapé'),
				'singular_name' => __('Logos Rodapé')
			),
			'public' => false,
			'show_ui' => true,
			'has_archive' => false,
			'menu_icon' => 'dashicons-format-gallery',
			'supports' => array('title')
		)
	);
}


add_action('init', 'posts_types');