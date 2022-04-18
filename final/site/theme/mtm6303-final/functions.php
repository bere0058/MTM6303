<?php
/**
 *
 * This is the template the functions and definitions for MTM6303_Assg-2.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MTM6303_Final
 */

 // Register Menu
function mtm6303final_setup() {
    register_nav_menus( array( 
        'navigation' => __( 'top' ),
        'social' => __( 'footer' )
    ) );
    function add_additional_class_on_li($classes, $item, $args) {
        if(isset($args->add_li_class)) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
    add_theme_support( 'post-thumbnails' );
}

// Enqueue styles and scripts
function mtm6303final_enqueue_my_custom_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.a3f694c0.css');
}

// Register sidebars
function mtm6303final_sidebars() {
    register_sidebar(array(
        'name'          =>  'Sidebar',
        'id'            =>  'mtm6303-sidebar',
        'class'         =>  '',
        'description'   =>  'Sidebar for all pages',
        'before_widget' =>  '<div id="mtm6303-sidebar" class="widget mtm6303-sidebar">',
        'after_widget'  =>  '</div>',
        'before-title'  =>  '<h2 class="widgettile">',
        'after-title'   =>  '</h2>'
    ));
    register_sidebar(array(
        'name'          =>  'Address',
        'id'            =>  'mtm6303-address',
        'class'         =>  '',
        'description'   =>  'Address sidebar for Contact Page',
        'before_widget' =>  '',
        'after_widget'  =>  '',
        'before-title'  =>  '',
        'after-title'   =>  ''
    ));
};

if (!function_exists('mtm6303final_get_dynamic_sidebar')) {
    function mtm6303final_get_dynamic_sidebar($sidebard_id) {
        ob_start();
        dynamic_sidebar($sidebard_id);
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }
}
add_filter( 'http_request_args', function ( $args ) {

    $args['reject_unsafe_urls'] = false;
    
    return $args;
}, 999 );

add_action( 'after_setup_theme', 'mtm6303final_setup' );
add_action( 'wp_enqueue_styles',  'mtm6303final_enqueue_my_custom_styles');
add_action( 'widgets_init', 'mtm6303final_sidebars');

?>