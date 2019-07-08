<?php
/*
 * All CSS and JS files are enqueued from this file
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

/**
 * Enqueue Files for FrontEnd
 */
if ( ! function_exists( 'brixey_vt_scripts_styles' ) ) {
  function brixey_vt_scripts_styles() {

    // Styles
    wp_enqueue_style( 'bootstrap', BRIXEY_CSS .'/bootstrap.min.css', array(), '3.3.6', 'all' );
    wp_enqueue_style( 'et-line', BRIXEY_CSS .'/et-line.css', array(), BRIXEY_VERSION, 'all' );
    wp_enqueue_style( 'font-awesome', BRIXEY_THEMEROOT_URI . '/inc/theme-options/cs-framework/assets/css/font-awesome.min.css', array(), '4.6.3', 'all' );
    wp_enqueue_style( 'jquery-mCustomScrollbar', BRIXEY_CSS .'/jquery.mCustomScrollbar.min.css', array(), BRIXEY_VERSION, 'all' );
    wp_enqueue_style( 'magnific-popup', BRIXEY_CSS .'/magnific-popup.css', array(), BRIXEY_VERSION, 'all' );
    wp_enqueue_style( 'owl-carousel', BRIXEY_CSS .'/owl.carousel.css', array(), '2.1.6', 'all' );
    wp_enqueue_style( 'swiper', BRIXEY_CSS .'/swiper.min.css', array(), '3.4.0', 'all' );
    wp_enqueue_style( 'themify-icons', BRIXEY_CSS .'/themify-icons.css', array(), BRIXEY_VERSION, 'all' );
    wp_enqueue_style( 'brixey-style', BRIXEY_CSS .'/styles.css', array(), BRIXEY_VERSION, 'all' );
    $theme_color = cs_get_option('theme_color');
    if ($theme_color == 'dark') {
      wp_enqueue_style( 'brixey-dark', BRIXEY_CSS .'/dark.css', array(), BRIXEY_VERSION, 'all' );
    }

    // Scripts
    wp_enqueue_script( 'bootstrap', BRIXEY_SCRIPTS . '/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
    wp_enqueue_script( 'brixey-plugins', BRIXEY_SCRIPTS . '/plugins.js', array( 'jquery' ), BRIXEY_VERSION, true );
    wp_enqueue_script( 'brixey-loadmore', BRIXEY_SCRIPTS . '/ajax-load-more.js', array( 'jquery' ), BRIXEY_VERSION, true );
    wp_enqueue_script( 'brixey-scripts', BRIXEY_SCRIPTS . '/scripts.js', array( 'jquery' ), BRIXEY_VERSION, true );
    wp_dequeue_style( 'zilla-likes' );

    // Comments
    wp_enqueue_script( 'validate-js', BRIXEY_SCRIPTS . '/jquery.validate.min.js', array( 'jquery' ), '1.9.0', true );
    wp_add_inline_script( 'validate-js', 'jQuery(document).ready(function($) {$("#commentform").validate({rules: {author: {required: true,minlength: 2},email: {required: true,email: true},comment: {required: true,minlength: 10}}});});' );

    // Responsive Active
    $brixey_viewport = cs_get_option('theme_responsive');
    if($brixey_viewport == 'on') {
      wp_enqueue_style( 'brixey-responsive', BRIXEY_CSS .'/responsive.css', array(), BRIXEY_VERSION, 'all' );
    }

    // Adds support for pages with threaded comments
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

  }
  add_action( 'wp_enqueue_scripts', 'brixey_vt_scripts_styles' );
}

/**
 * Enqueue Files for BackEnd
 */
if ( ! function_exists( 'brixey_vt_admin_scripts_styles' ) ) {
  function brixey_vt_admin_scripts_styles() {

    wp_enqueue_style( 'brixey-admin-main', BRIXEY_CSS . '/admin-styles.css', true );
    wp_enqueue_script( 'brixey-admin-scripts', BRIXEY_SCRIPTS . '/admin-scripts.js', true );

  }
  add_action( 'admin_enqueue_scripts', 'brixey_vt_admin_scripts_styles' );
}

/* Enqueue All Styles */
if ( ! function_exists( 'brixey_vt_wp_enqueue_styles' ) ) {
  function brixey_vt_wp_enqueue_styles() {
    brixey_vt_google_fonts();
    add_action( 'wp_head', 'brixey_vt_custom_css', 99 );
  }
  add_action( 'wp_enqueue_scripts', 'brixey_vt_wp_enqueue_styles' );
}
