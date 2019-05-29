<?php

require_once('wp_bootstrap_navwalker.php');

function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
    add_theme_support('post-formats', array('aside', 'gallery'));
}

add_action('after_setup_theme','wpb_theme_setup');

function set_excerpt_length(){
    return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');

require get_template_directory(). '/inc/customizer.php';