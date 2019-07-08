<?php
/*
 * The header for our theme.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
?><!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php
$brixey_viewport = cs_get_option('theme_responsive');
if($brixey_viewport == 'on') { ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php } else { }

// if the `wp_site_icon` function does not exist (ie we're on < WP 4.3)
if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
  if (cs_get_option('brand_fav_icon')) {
    echo '<link rel="shortcut icon" href="'. esc_url(wp_get_attachment_url(cs_get_option('brand_fav_icon'))) .'" />';
  } else { ?>
    <link rel="shortcut icon" href="<?php echo esc_url(BRIXEY_IMAGES); ?>/favicon.ico" />
  <?php }
  if (cs_get_option('iphone_icon')) {
    echo '<link rel="apple-touch-icon" sizes="57x57" href="'. esc_url(wp_get_attachment_url(cs_get_option('iphone_icon'))) .'" >';
  }
  if (cs_get_option('iphone_retina_icon')) {
    echo '<link rel="apple-touch-icon" sizes="114x114" href="'. esc_url(wp_get_attachment_url(cs_get_option('iphone_retina_icon'))) .'" >';
    echo '<link name="msapplication-TileImage" href="'. esc_url(wp_get_attachment_url(cs_get_option('iphone_retina_icon'))) .'" >';
  }
  if (cs_get_option('ipad_icon')) {
    echo '<link rel="apple-touch-icon" sizes="72x72" href="'. esc_url(wp_get_attachment_url(cs_get_option('ipad_icon'))) .'" >';
  }
  if (cs_get_option('ipad_retina_icon')) {
    echo '<link rel="apple-touch-icon" sizes="144x144" href="'. esc_url(wp_get_attachment_url(cs_get_option('ipad_retina_icon'))) .'" >';
  }
}
$brixey_all_element_color  = cs_get_customize_option( 'all_element_colors' );
?>
<meta name="msapplication-TileColor" content="<?php echo esc_attr($brixey_all_element_color); ?>">
<meta name="theme-color" content="<?php echo esc_attr($brixey_all_element_color); ?>">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php
// Metabox
global $post;
$brixey_id    = ( isset( $post ) ) ? $post->ID : false;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_id    = ( ! is_tag() && ! is_archive() && ! is_search() && ! is_404() && ! is_singular('testimonial') ) ? $brixey_id : false;
$project_layout_meta  = get_post_meta( $brixey_id, 'project_layout_metabox', true );

if ($project_layout_meta) {
  $select_project_layout  = $project_layout_meta['select_project_layout'];
} else {
  $select_project_layout = '';
}

$homepage_layout  = get_post_meta( $brixey_id, 'homepage_layout_metaboxes', true );
if ($homepage_layout) {
  $home_layout = $homepage_layout['home_layout'];
} else {
  $home_layout = '';
}

$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );

if ($brixey_meta) {
  $brixey_header_design  = $brixey_meta['select_header_design'];
  $brixey_hide_header = $brixey_meta['hide_header'];
} else {
  $brixey_header_design  = cs_get_option('select_header_design');
  $brixey_hide_header = '';
}

// Header Style
if ($brixey_meta && $brixey_header_design !== 'default') {
  $brixey_sticky_header  = $brixey_meta['sticky_header'];
} else {
  $brixey_sticky_header  = cs_get_option('sticky_header');
}
if ($brixey_sticky_header) {
  $brixey_sticky_header_class = ' brxy-sticky-class ';
}else{
  $brixey_sticky_header_class = '';
}

$brixey_page_layout  = get_post_meta( $brixey_id, 'page_layout_options', true );
if ($brixey_page_layout) {
  $page_layout = $brixey_page_layout['page_layout'];
} else {
  $page_layout = '';
}
if ( $page_layout == 'window-fit' || ( $select_project_layout == 'carousel_fullscreen' || $select_project_layout == 'fullscreen_slider' || $select_project_layout == 'fullscreen_video' || $select_project_layout == 'slider_sidebar'  || $select_project_layout == 'carousel_sidebar' )  ) {
    $wrapper_class = ' brxy-full-page';
} else {
   if (is_page_template( 'home-template.php' )) {
    if ( $home_layout == 'home_fullscreen') {
      $wrapper_class = ' brxy-full-page';
    } else {
      $wrapper_class = '';
    }
  } else {
    $wrapper_class = '';
  }
}
// Header Style - ThemeOptions & Metabox
if ($brixey_meta) {
  $brixey_header_design  = $brixey_meta['select_header_design'];
  $brixey_choose_menu = $brixey_meta['choose_menu'];
} else {
  $brixey_header_design  = cs_get_option('select_header_design');
   $brixey_choose_menu = '';
}
$brixey_choose_menu = $brixey_choose_menu ? $brixey_choose_menu : '';
if ($brixey_header_design === 'default') {
  $brixey_header_design_actual  = cs_get_option('select_header_design');
} else {
  $brixey_header_design_actual = ( $brixey_header_design ) ? $brixey_header_design : cs_get_option('select_header_design');
}
if ($brixey_header_design_actual == 'style_one') {
  $menu_header_class = ' menu-style-two';
} elseif( $brixey_header_design_actual == 'transparent' ) {
  $menu_header_class = ' header-style-two';
} elseif( $brixey_header_design_actual == 'overlay_menu' ) {
  $menu_header_class = ' menu-style-three';
} else {
  $menu_header_class = '';
}
if ($brixey_meta && isset( $brixey_meta['transparent_header'] )) {
  $header_transparency = $brixey_meta['transparent_header'];
} else {
  $header_transparency = cs_get_option('transparent_header');
}
if ($header_transparency == true) {
  $header_style_class = ' header-style-two';
} else {
  $header_style_class = ' dhav-transparent-header';
}
// Theme Color
$theme_color = cs_get_option('theme_color');
if ($theme_color == 'dark') {
  $theme_color_class = ' dark-template';
} else {
  $theme_color_class = '';
}
wp_head();
?>
</head>
<body <?php echo body_class(); ?>>
<!-- brxy main wrap -->
<div class="brxy-main-wrap <?php echo esc_attr( $wrapper_class.$menu_header_class.$header_style_class.$theme_color_class ); ?>">
  <?php if (!$brixey_hide_header) { ?>
    <!-- Header -->
    <header class="brxy-header <?php echo esc_attr($brixey_sticky_header_class); ?>">
      <div class="header-wrap">
        <?php
          get_template_part( 'layouts/header/logo' );
          get_template_part( 'layouts/header/menu', 'bar' );
        ?>
      </div>
    </header>
    <?php
  }
