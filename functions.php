<?php

function _theme_support() {
    // Add dynamic tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', '_theme_support');

function _menus() {
    $locations = array(
	'primary' => "Desktop Primary Left Sidebar",
	'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', '_menus');


function _register_sheets() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('_style', get_template_directory_uri() . '/style.css', array('_bootstrap'), $version, 'all');
    wp_enqueue_style('_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('_fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
    wp_enqueue_script('_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('_popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('_main', get_template_directory_uri() . "/assets/js/main.js" , array(), $version, true);

}

add_action('wp_enqueue_scripts', '_register_sheets');
