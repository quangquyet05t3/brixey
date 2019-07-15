<?php
/*
 * Brixey Theme's Functions
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

/**
 * Define - Folder Paths
 */
define( 'BRIXEY_THEMEROOT_PATH', get_template_directory() );
define( 'BRIXEY_THEMEROOT_URI', get_template_directory_uri() );
define( 'BRIXEY_CSS', BRIXEY_THEMEROOT_URI . '/assets/css' );
define( 'BRIXEY_IMAGES', BRIXEY_THEMEROOT_URI . '/assets/images' );
define( 'BRIXEY_SCRIPTS', BRIXEY_THEMEROOT_URI . '/assets/js' );
define( 'BRIXEY_FRAMEWORK', get_template_directory() . '/inc' );
define( 'BRIXEY_LAYOUT', get_template_directory() . '/layouts' );
define( 'BRIXEY_CS_IMAGES', BRIXEY_THEMEROOT_URI . '/inc/theme-options/theme-extend/images' );
define( 'BRIXEY_CS_FRAMEWORK', get_template_directory() . '/inc/theme-options/theme-extend' ); // Called in Icons field *.json
define( 'BRIXEY_ADMIN_PATH', get_template_directory() . '/inc/theme-options/cs-framework' ); // Called in Icons field *.json

/**
 * Define - Global Theme Info's
 */
if (is_child_theme()) { // If Child Theme Active
	$brixey_theme_child = wp_get_theme();
	$brixey_get_parent = $brixey_theme_child->Template;
	$brixey_theme = wp_get_theme($brixey_get_parent);
} else { // Parent Theme Active
	$brixey_theme = wp_get_theme();
}
define('BRIXEY_NAME', $brixey_theme->get( 'Name' ), true);
define('BRIXEY_VERSION', $brixey_theme->get( 'Version' ), true);
define('BRIXEY_BRAND_URL', $brixey_theme->get( 'AuthorURI' ), true);
define('BRIXEY_BRAND_NAME', $brixey_theme->get( 'Author' ), true);

/**
 * All Main Files Include
 */
require_once( BRIXEY_FRAMEWORK . '/init.php' );




/**
 * Header menu
 */

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' )); // đặt tên là Header Menu
}
add_action( 'init', 'register_my_menu' );

require_once get_template_directory() . '/vendor/inc/Bootstrap-Navwalker.php';



function mini_blog_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'sidebar-mini' ),
        'id'            => 'sidebar-mini',
        'description'   => __( 'Ở đây sẽ chứa những widget của Mini Blog', 'sidebar-mini' ),
        'before_widget' => '<div id="%1$s" class="card my-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="card-header">',
        'after_title'   => '</h5>',
    ) );
}
add_action( 'widgets_init', 'mini_blog_widgets_init' );
