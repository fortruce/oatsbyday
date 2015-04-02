<?php
/**
 * @package oats
 */

function oats_theme_styles() {
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'oats_theme_styles');

function oats_register_menus() {
    register_nav_menus(array(
        'header-menu' => 'Header Menu'
    ));
}
add_action('init', 'oats_register_menus');

?>