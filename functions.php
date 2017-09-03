<?php

add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 326,
        'width'       => 326,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function wptutsplus_widgets_init() {
 
 
    // Sidebar widget area, located in the sidebar. Empty by default.
    register_sidebar( array(
        'name' => 'Sidebar Widget Area',
        'id' => 'sidebar-widget-area',
        'description' => 'The sidebar widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
}
add_action( 'widgets_init', 'wptutsplus_widgets_init' );
?>