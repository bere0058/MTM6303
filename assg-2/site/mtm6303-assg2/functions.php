<?php
/**
 *
 * This is the template the functions and definitions for MTM6303_Assg-2.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MTM6303_Assg2.
 */

function mtm6303assg2_setup() {
    register_nav_menus( array( 
        'theme_location' => 'top'
    ) );
}

function enqueue_my_custom_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.a3f694c0.css');
}

add_action( 'after_setup_theme', 'mtm6303assg2_setup' );
add_action( 'wp_enqueue_styles',  'enqueue_my_custom_styles()');

?>