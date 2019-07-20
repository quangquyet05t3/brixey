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



/*
	==========================================
	Call Ajax Page
	==========================================
*/
function submit_info() {
    $name = sanitize_text_field($_POST['full_name']);
    $email = sanitize_email($_POST['email']);

    $return = array(
        'name' => $name,
        'mail' => $email
    );
    wp_send_json($return);

    wp_die();
}
add_action( 'wp_ajax_submit_info', 'submit_info' );
