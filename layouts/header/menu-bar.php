<?php
// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_id    = ( ! is_tag() && ! is_archive() && ! is_search() && ! is_404() && ! is_singular('testimonial') ) ? $brixey_id : false;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );

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
  $menu_class = 'brxy-menu';
  $menu_before = '';
  $menu_after = '';
} elseif( $brixey_header_design_actual == 'overlay_menu' ) {
  $menu_class = 'overlay-menu';
  $menu_before = '<div class="brxy-menu"><div class="brxy-table-container"><div class="brxy-align-container">';
  $menu_after = 1;
} else {
  $menu_class = 'brxy-menu';
  $menu_before = '';
  $menu_after = '';
}

if ($brixey_meta && isset( $brixey_meta['transparent_header'] )) {
  $header_transparency = $brixey_meta['transparent_header'];
} else {
  $header_transparency = cs_get_option('transparent_header');
}
if ( $header_transparency == true && $brixey_header_design_actual !== 'style_one' ) {
  $toggle_txt = __('<span class="toggle-text">Menu</span> ', 'brixey');
  $transparent_class = 'menu-transparent';
} else {
  $toggle_txt = '';
  $transparent_class = '';
}

echo '<div class="header-right '.esc_attr($transparent_class).'">'.$menu_before;
  wp_nav_menu(
    array(
      'theme_location'    => 'primary',
      'container'         => 'ul',
      'menu_class'        => $menu_class,
      'menu'              => $brixey_choose_menu,
    )
  );
  if( $brixey_header_design_actual == 'overlay_menu' ) {
    echo '<div class="brxy-social">';
    $menu_social_icons = cs_get_option('menu_social_icons');
      if (isset($menu_social_icons) && !empty($menu_social_icons)) {
        foreach ($menu_social_icons as $key => $icon) {
          echo '<a href="'.esc_url($icon['url']).'"><i class="'.esc_attr($icon['icon']).'" aria-hidden="true"></i></a>';
         }
      }
    echo '</div>';
  }
  if ($menu_after === 1) {
    echo '</div></div></div>';
  }
    echo '<a href="javascript:void(0);" class="brxy-toggle">'.$toggle_txt.'<span class="toggle-separator"></span></a>';
echo '</div>';
