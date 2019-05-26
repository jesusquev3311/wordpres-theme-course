<?php
// Theme Files
function university_files(){
    wp_enqueue_script('university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,microtime(), true);
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('university-main-style', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'university_files');

// Theme's features
function university_features(){
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocationOne', 'Footer Menu Location One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Location Two');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_features');


