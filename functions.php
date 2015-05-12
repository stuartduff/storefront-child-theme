<?php

/**
 * Loads the StoreFront parent theme stylesheet.
 */

function storefront_child_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'storefront_child_theme_enqueue_styles' );

/**
 * Note: Do Not alter or remove the code above this text and only add your custom functions below here.
 */

