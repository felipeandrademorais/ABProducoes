<?php 

function  load_scripts() {
    //Styles
    wp_enqueue_style( 'geral',            get_template_directory_uri().'/css/geral.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap',         get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('slick',             get_template_directory_uri().'/js/plugins/slick/slick.css', array(), false, 'all');
	wp_enqueue_style('slick_theme',       get_template_directory_uri().'/js/plugins/slick/slick-theme.css', array(), false, 'all');
    //Scripts
    wp_enqueue_script('slick-js',         get_template_directory_uri().'/js/plugins/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js',     get_template_directory_uri().'/js/plugins/bootstrap/bootstrap.min.js', array('jquery'), null, true );
	wp_enqueue_script('bootstrap-bundle', get_template_directory_uri().'/js/plugins/bootstrap/bootstrap.bundle.min.js', array('jquery'), null, true );
}

add_action('wp_enqueue_scripts', 'load_scripts');
