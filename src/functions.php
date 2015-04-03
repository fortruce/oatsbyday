<?php
/**
 * @package oats
 */

add_theme_support('post-thumbnails');

function oats_theme_styles() {
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'oats_theme_styles');

?>