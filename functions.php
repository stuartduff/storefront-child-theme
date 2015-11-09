<?php

/**
 * Loads the StoreFront parent theme stylesheet.
 */

function sf_child_theme_enqueue_styles() {

    wp_enqueue_style( 'storefront-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'storefront-style' ) );

}
add_action( 'wp_enqueue_scripts', 'sf_child_theme_enqueue_styles' );

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */


