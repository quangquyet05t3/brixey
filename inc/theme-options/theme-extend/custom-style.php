<?php
/*
 * Codestar Framework - Custom Style
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

/* All Dynamic CSS Styles */
if ( ! function_exists( 'brixey_dynamic_styles' ) ) {
  function brixey_dynamic_styles() {

    // Typography
    $brixey_vt_get_typography  = brixey_vt_get_typography();

    $all_element_color  = cs_get_customize_option( 'all_element_colors' );

    // Logo
    $brand_logo_top     = cs_get_option( 'brand_logo_top' );
    $brand_logo_bottom  = cs_get_option( 'brand_logo_bottom' );

    // Layout
    $bg_type = cs_get_option('theme_layout_bg_type');
    $bg_pattern = cs_get_option('theme_layout_bg_pattern');
    $bg_image = cs_get_option('theme_layout_bg');
    $bg_overlay_color = cs_get_option('theme_bg_overlay_color');

    // Footer
    $footer_bg_color  = cs_get_customize_option( 'footer_bg_color' );
    $footer_title_color  = cs_get_customize_option( 'footer_title_color' );
    $footer_heading_color  = cs_get_customize_option( 'footer_heading_color' );
    $footer_text_color  = cs_get_customize_option( 'footer_text_color' );
    $footer_link_color  = cs_get_customize_option( 'footer_link_color' );
    $footer_link_hover_color  = cs_get_customize_option( 'footer_link_hover_color' );

  ob_start();

global $post;
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );

/* Layout - Theme Options - Background */
if ($bg_type === 'bg-image') {

  $layout_boxed = ( ! empty( $bg_image['image'] ) ) ? 'background-image: url('. $bg_image['image'] .');' : '';
  $layout_boxed .= ( ! empty( $bg_image['repeat'] ) ) ? 'background-repeat: '. $bg_image['repeat'] .';' : '';
  $layout_boxed .= ( ! empty( $bg_image['position'] ) ) ? 'background-position: '. $bg_image['position'] .';' : '';
  $layout_boxed .= ( ! empty( $bg_image['attachment'] ) ) ? 'background-attachment: '. $bg_image['attachment'] .';' : '';
  $layout_boxed .= ( ! empty( $bg_image['size'] ) ) ? 'background-size: '. $bg_image['size'] .';' : '';
  $layout_boxed .= ( ! empty( $bg_image['color'] ) ) ? 'background-color: '. $bg_image['color'] .';' : '';

echo <<<CSS
  .no-class {}
  .layout-boxed {
    {$layout_boxed}
  }
CSS;
}
if ($bg_type === 'bg-pattern') {
$custom_bg_pattern = cs_get_option('custom_bg_pattern');
$layout_boxed = ( $bg_pattern === 'custom-pattern' ) ? 'background-image: url('. $custom_bg_pattern .');' : 'background-image: url('. BRIXEY_IMAGES . '/patterns/'. $bg_pattern .'.png);';

echo <<<CSS
  .no-class {}
  .layout-boxed {
    {$layout_boxed}
  }
CSS;
}

/* Header - Customizer */
$header_bg_color  = cs_get_customize_option( 'header_bg_color' );
if ($header_bg_color) {
echo <<<CSS
  .no-class {}
  .brxy-header {
    background-color: {$header_bg_color};
  }
CSS;
}
$header_link_color  = cs_get_customize_option( 'header_link_color' );
$header_link_hover_color  = cs_get_customize_option( 'header_link_hover_color' );
if($header_link_color || $header_link_hover_color) {
echo <<<CSS
  .no-class {}
  .brxy-menu > li > a {
    color: {$header_link_color};
  }
  .mean-container a.meanmenu-reveal span {
    background-color: {$header_link_color};
  }
  .brxy-menu > li > a:hover {
    color: {$header_link_hover_color};
  }
CSS;
}

$submenu_bg_color = cs_get_customize_option( 'submenu_bg_color' );
$submenu_link_color = cs_get_customize_option( 'submenu_link_color' );
$submenu_link_hover_color = cs_get_customize_option( 'submenu_link_hover_color' );
if ($submenu_bg_color || $submenu_link_color || $submenu_link_hover_color) {
echo <<<CSS
  .no-class {}
  .brxy-menu .sub-menu{
    background-color: {$submenu_bg_color};
  }
  .brxy-menu .sub-menu > li > a {
    color: {$submenu_link_color};
  }
  .brxy-menu .sub-menu > li > a:hover{
    color: {$submenu_link_hover_color};
  }
CSS;
}

/* Title Area - Theme Options - Background */
$title_heading_color  = cs_get_customize_option( 'titlebar_title_color' );
$title_sub_heading_color  = cs_get_customize_option( 'titlebar_sub_title_color' );
if ($title_heading_color || $title_sub_heading_color) {
echo <<<CSS
  .no-class {}
  .brxy-title-area .brxy-info-title .info-title {
    color: {$title_heading_color};
  }
  .brxy-title-area .brxy-info-title .info-sub-title {
    color: {$title_sub_heading_color};
  }
CSS;
}

/* Footer */
if ($footer_bg_color) {
echo <<<CSS
  .no-class {}
  footer.brxy-footer {background: {$footer_bg_color};}
CSS;
}
if ($footer_title_color) {
echo <<<CSS
  .no-class {}
  footer .brxy-column-title span {color: {$footer_title_color};}
CSS;
}
if ($footer_heading_color) {
echo <<<CSS
  .no-class {}
  footer h1, footer h2, footer h3, footer h4, footer h5, footer h6 {color: {$footer_heading_color};}
CSS;
}
if ($footer_text_color) {
echo <<<CSS
  .no-class {}
  footer.brxy-footer, footer.brxy-footer p {color: {$footer_text_color};}
CSS;
}
if ($footer_link_color) {
echo <<<CSS
  .no-class {}
  footer a,
  footer.brxy-footer a{color: {$footer_link_color};}
CSS;
}
if ($footer_link_hover_color) {
echo <<<CSS
  .no-class {}
  footer.brxy-footer a:hover {color: {$footer_link_hover_color};}
CSS;
}

/* Copyright */
$copyright_text_color  = cs_get_customize_option( 'copyright_text_color' );
$copyright_link_color  = cs_get_customize_option( 'copyright_link_color' );
$copyright_link_hover_color  = cs_get_customize_option( 'copyright_link_hover_color' );
$copyright_bg_color  = cs_get_customize_option( 'copyright_bg_color' );
$copyright_border_color  = cs_get_customize_option( 'copyright_border_color' );
if ($copyright_bg_color || $copyright_border_color) {
echo <<<CSS
  .no-class {}
  .brxy-copyright {background: {$copyright_bg_color};border-color: {$copyright_border_color};}
CSS;
}
if ($copyright_text_color) {
echo <<<CSS
  .no-class {}
  .brxy-copyright, .brxy-copyright p {color: {$copyright_text_color};}
CSS;
}
if ($copyright_link_color) {
echo <<<CSS
  .no-class {}
  .brxy-copyright a {color: {$copyright_link_color};}
CSS;
}
if ($copyright_link_hover_color) {
echo <<<CSS
  .no-class {}
  .brxy-copyright a:hover {color: {$copyright_link_hover_color};}
CSS;
}

// Content Colors
$body_color  = cs_get_customize_option( 'content_color' );
if ($body_color) {
echo <<<CSS
  .no-class {}
  .brxy-unit-fix .brxy-blog-detail p, .brxy-unit-fix .brxy-blog-detail {color: {$body_color};}
CSS;
}
$body_main_color  = cs_get_customize_option( 'brxy_body_color' );
if ($body_main_color) {
echo <<<CSS
  .no-class {}
  body {color: {$body_main_color};}
CSS;
}
$brxy_body_bg_color  = cs_get_customize_option( 'brxy_body_bg_color' );
if ($brxy_body_bg_color) {
echo <<<CSS
  .no-class {}
  body {background-color: {$brxy_body_bg_color};}
CSS;
}
$body_links_color  = cs_get_customize_option( 'body_links_color' );
if ($body_links_color) {
echo <<<CSS
  .no-class {}
  body a,
  .brxy-unit-fix .brxy-blog-detail p a, .brxy-unit-fix .brxy-blog-detail a{color: {$body_links_color};}
CSS;
}
$body_link_hover_color  = cs_get_customize_option( 'body_link_hover_color' );
if ($body_link_hover_color) {
echo <<<CSS
  .no-class {}
  body a:hover,
  .brxy-unit-fix .brxy-blog-detail p a:hover, .brxy-unit-fix .brxy-blog-detail a:hover{color: {$body_link_hover_color};}
CSS;
}
$sidebar_content_color  = cs_get_customize_option( 'sidebar_content_color' );
if ($sidebar_content_color) {
echo <<<CSS
  .no-class {}
  .brxy-sidebar, .brxy-sidebar li, .brxy-sidebar p {color: {$sidebar_content_color};}
CSS;
}

// Maintenance Mode
$maintenance_mode_bg  = cs_get_option( 'maintenance_mode_bg' );
if ($maintenance_mode_bg) {
  $maintenance_css = ( ! empty( $maintenance_mode_bg['image'] ) ) ? 'background-image: url('. $maintenance_mode_bg['image'] .');' : '';
  $maintenance_css .= ( ! empty( $maintenance_mode_bg['repeat'] ) ) ? 'background-repeat: '. $maintenance_mode_bg['repeat'] .';' : '';
  $maintenance_css .= ( ! empty( $maintenance_mode_bg['position'] ) ) ? 'background-position: '. $maintenance_mode_bg['position'] .';' : '';
  $maintenance_css .= ( ! empty( $maintenance_mode_bg['attachment'] ) ) ? 'background-attachment: '. $maintenance_mode_bg['attachment'] .';' : '';
  $maintenance_css .= ( ! empty( $maintenance_mode_bg['size'] ) ) ? 'background-size: '. $maintenance_mode_bg['size'] .';' : '';
  $maintenance_css .= ( ! empty( $maintenance_mode_bg['color'] ) ) ? 'background-color: '. $maintenance_mode_bg['color'] .';' : '';
echo <<<CSS
  .no-class {}
  .vt-maintenance-mode {
    {$maintenance_css}
  }
CSS;
}

  echo $brixey_vt_get_typography;

  $output = ob_get_clean();
  return $output;

  }

}

/**
 * Custom Font Family
 */
if ( ! function_exists( 'brixey_custom_font_load' ) ) {
  function brixey_custom_font_load() {

    $font_family       = cs_get_option( 'font_family' );

    ob_start();

    if( ! empty( $font_family ) ) {

      foreach ( $font_family as $font ) {
        echo '@font-face{';

        echo 'font-family: "'. $font['name'] .'";';

        if( empty( $font['css'] ) ) {
          echo 'font-style: normal;';
          echo 'font-weight: normal;';
        } else {
          echo $font['css'];
        }

        echo ( ! empty( $font['ttf']  ) ) ? 'src: url('. esc_url($font['ttf']) .');' : '';
        echo ( ! empty( $font['eot']  ) ) ? 'src: url('. esc_url($font['eot']) .');' : '';
        echo ( ! empty( $font['svg']  ) ) ? 'src: url('. esc_url($font['svg']) .');' : '';
        echo ( ! empty( $font['woff'] ) ) ? 'src: url('. esc_url($font['woff']) .');' : '';
        echo ( ! empty( $font['otf']  ) ) ? 'src: url('. esc_url($font['otf']) .');' : '';

        echo '}';
      }

    }

    // Typography
    $output = ob_get_clean();
    return $output;
  }
}

/* Custom Styles */
if( ! function_exists( 'brixey_vt_custom_css' ) ) {
  function brixey_vt_custom_css() {
    wp_enqueue_style('brixey-default-style', get_template_directory_uri() . '/style.css');
    $output  = brixey_custom_font_load();
    $output .= brixey_dynamic_styles();
    $output .= cs_get_option( 'theme_custom_css' );
    $custom_css = brixey_compress_css_lines( $output );

    wp_add_inline_style( 'brixey-default-style', $custom_css );
  }
}

/* Custom JS */
if( ! function_exists( 'brixey_vt_custom_js' ) ) {
  function brixey_vt_custom_js() {
    if ( ! wp_script_is( 'jquery', 'done' ) ) {
      wp_enqueue_script( 'jquery' );
    }
    $output = cs_get_option( 'theme_custom_js' );
    wp_add_inline_script( 'jquery-migrate', $output );
  }
  add_action( 'wp_enqueue_scripts', 'brixey_vt_custom_js' );
}