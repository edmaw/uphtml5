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

function wptutsplus_theme_support() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'wptutsplus_theme_support' );





if ( ! function_exists( 'change_custom_background_cb' ) ) :

function change_custom_background_cb() {
    $background = get_background_image();
    $color = get_background_color();

    if ( ! $background && ! $color )
        return;

    $style = $color ? "background-color: #$color;" : '';

    if ( $background ) {
        $image = " background-image: url('$background');";

        $repeat = get_theme_mod( 'background_repeat', 'repeat' );

        if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
            $repeat = 'repeat';

        $repeat = " background-repeat: $repeat;";

        $position = get_theme_mod( 'background_position_x', 'left' );

        if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
            $position = 'left';

        $position = " background-position: top $position;";

        $attachment = get_theme_mod( 'background_attachment', 'scroll' );

        if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
            $attachment = 'scroll';

        $attachment = " background-attachment: $attachment;";

        $style .= $image . $repeat . $position . $attachment;
    }
?>
<style type="text/css" id="custom-background-css">
.custom-background { <?php echo trim( $style ); ?> }
</style>
<?php
}
if ( version_compare( $wp_version, '3.4', '>=' ) ) {
    add_theme_support( 'custom-background', array( 'wp-head-callback' => 'change_custom_background_cb','default-color' => 'fff' ) );
}
else {
    add_custom_background('change_custom_background_cb');
}

endif;


?>