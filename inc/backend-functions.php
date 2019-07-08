<?php
/*
 * All Back-End Helper Functions for Brixey Theme
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

/* Validate px entered in field */
if( ! function_exists( 'brixey_check_px' ) ) {
  function brixey_check_px( $num ) {
    return ( is_numeric( $num ) ) ? $num . 'px' : $num;
  }
}

/* Escape Strings */
if( ! function_exists( 'brixey_vt_esc_string' ) ) {
  function brixey_vt_esc_string( $num ) {
    return preg_replace('/\D/', '', $num);
  }
}

/* Escape Numbers */
if( ! function_exists( 'brixey_vt_esc_number' ) ) {
  function brixey_vt_esc_number( $num ) {
    return preg_replace('/[^a-zA-Z]/', '', $num);
  }
}

/* Compress CSS */
if ( ! function_exists( 'brixey_compress_css_lines' ) ) {
  function brixey_compress_css_lines( $css ) {
    $css  = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );
    $css  = str_replace( ': ', ':', $css );
    $css  = str_replace( array( "\r\n", "\r", "\n", "\t", '  ', '    ', '    ' ), '', $css );
    return $css;
  }
}

/* Inline Style */
global $all_inline_styles;
$all_inline_styles = array();
if( ! function_exists( 'add_inline_style' ) ) {
  function add_inline_style( $style ) {
    global $all_inline_styles;
    array_push( $all_inline_styles, $style );
  }
}

/* Support WordPress uploader to following file extensions */
if( ! function_exists( 'brixey_vt_upload_mimes' ) ) {
  function brixey_vt_upload_mimes( $mimes ) {

    $mimes['ttf']   = 'font/ttf';
    $mimes['eot']   = 'font/eot';
    $mimes['svg']   = 'font/svg';
    $mimes['woff']  = 'font/woff';
    $mimes['otf']   = 'font/otf';

    return $mimes;

  }
  add_filter( 'upload_mimes', 'brixey_vt_upload_mimes' );
}

/* Custom WordPress admin login logo */
if( ! function_exists( 'brixey_theme_login_logo' ) ) {
  function brixey_theme_login_logo() {
    $login_logo = cs_get_option('brand_logo_wp');
    if($login_logo) {
      $login_logo_url = wp_get_attachment_url($login_logo);
    } else {
      $login_logo_url = BRIXEY_IMAGES . '/logo.png';
    }
    if($login_logo) {
    echo "
      <style>
  	    body.login #login h1 a {
  	    background: url('$login_logo_url') no-repeat scroll center bottom transparent;
  	    height: 100px;
  	    width: 100%;
  	    margin-bottom:0px;
  	    }
      </style>";
    }
  }
  add_action('login_head', 'brixey_theme_login_logo');
}

/* WordPress admin login logo link */
if( ! function_exists( 'brixey_login_url' ) ) {
  function brixey_login_url() {
    return site_url();
  }
  add_filter( 'login_headerurl', 'brixey_login_url', 10, 4 );
}

/* WordPress admin login logo link */
if( ! function_exists( 'brixey_login_title' ) ) {
  function brixey_login_title() {
    return get_bloginfo('name');
  }
  add_filter('login_headertitle', 'brixey_login_title');
}

/**
 * TinyMCE Editor
 */

// Enable font size & font family selects in the editor
if ( ! function_exists( 'brixey_tinymce_btns_font' ) ) {
  function brixey_tinymce_btns_font( $buttons ) {
    array_unshift( $buttons, 'fontselect' ); // Add Font Select
    array_unshift( $buttons, 'fontsizeselect' ); // Add Font Size Select
    return $buttons;
  }
  add_filter( 'mce_buttons_2', 'brixey_tinymce_btns_font' );
}

// Customize mce editor font sizes
if ( ! function_exists( 'brixey_tinymce_sizes' ) ) {
  function brixey_tinymce_sizes( $initArray ){
    $initArray['fontsize_formats'] = "9px 10px 12px 13px 14px 16px 18px 21px 24px 28px 32px 36px";
    return $initArray;
  }
  add_filter( 'tiny_mce_before_init', 'brixey_tinymce_sizes' );
}

// Customize mce editor font family
if ( ! function_exists( 'brixey_tinmymce_family' ) ) {
  function brixey_tinmymce_family( $initArray ) {
      $initArray['font_formats'] = 'Amiri=Amiri,serif;Montserrat=Montserrat,sans-serif;Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats';
            return $initArray;
  }
  add_filter( 'tiny_mce_before_init', 'brixey_tinmymce_family' );
}

/* HEX to RGB */
if( ! function_exists( 'brixey_vt_hex2rgb' ) ) {
  function brixey_vt_hex2rgb( $hexcolor, $opacity = 1 ) {

    if( preg_match( '/^#[a-fA-F0-9]{6}|#[a-fA-F0-9]{3}$/i', $hexcolor ) ) {

      $hex    = str_replace( '#', '', $hexcolor );

      if( strlen( $hex ) == 3 ) {
        $r    = hexdec( substr( $hex, 0, 1 ) . substr( $hex, 0, 1 ) );
        $g    = hexdec( substr( $hex, 1, 1 ) . substr( $hex, 1, 1 ) );
        $b    = hexdec( substr( $hex, 2, 1 ) . substr( $hex, 2, 1 ) );
      } else {
        $r    = hexdec( substr( $hex, 0, 2 ) );
        $g    = hexdec( substr( $hex, 2, 2 ) );
        $b    = hexdec( substr( $hex, 4, 2 ) );
      }

      return ( isset( $opacity ) && $opacity != 1 ) ? 'rgba('. $r .', '. $g .', '. $b .', '. $opacity .')' : ' ' . $hexcolor;

    } else {

      return $hexcolor;

    }

  }
}

/* Yoast Plugin Metabox Low */
if( ! function_exists( 'brixey_vt_yoast_metabox' ) ) {
  function brixey_vt_yoast_metabox() {
    return 'low';
  }
  add_filter( 'wpseo_metabox_prio', 'brixey_vt_yoast_metabox' );
}

/**
 * If WooCommerce Plugin Activated
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
  function is_woocommerce_activated() {
    if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
  }
}

/**
 * If is WooCommerce Shop
 */
if ( ! function_exists( 'is_woocommerce_shop' ) ) {
  function is_woocommerce_shop() {
    if ( is_woocommerce_activated() && is_shop() ) { return true; } else { return false; }
  }
}

/**
 * If is WPML is active
 */
if ( ! function_exists( 'is_wpml_activated' ) ) {
  function is_wpml_activated() {
    if ( class_exists( 'SitePress' ) ) { return true; } else { return false; }
  }
}

/**
 * Remove Rev Slider Metabox
 */
if ( is_admin() ) {

  if( ! function_exists( 'brixey_remove_rev_slider_meta_boxes' ) ) {
    function brixey_remove_rev_slider_meta_boxes() {
      remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
      remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
      remove_meta_box( 'mymetabox_revslider_0', 'team', 'normal' );
      remove_meta_box( 'mymetabox_revslider_0', 'testimonial', 'normal' );
      remove_meta_box( 'mymetabox_revslider_0', 'project', 'normal' );
    }
    add_action( 'do_meta_boxes', 'brixey_remove_rev_slider_meta_boxes' );
  }

}

// Media custom options
function brixey_gallery_attachment_field_credit( $form_fields, $post ) {
  $form_fields['image-media-link'] = array(
    'label' => esc_html__('Large Image URL', 'brixey'),
    'input' => 'text',
    'value' => get_post_meta( $post->ID, '_image_media_link', true ),
    'helps' =>  esc_html__('Add large image URL', 'brixey'),
  );

  return $form_fields;
}

add_filter( 'attachment_fields_to_edit', 'brixey_gallery_attachment_field_credit', 10, 3 );

function brixey_gallery_attachment_field_credit_save( $post, $attachment ) {
  if( isset( $attachment['image-media-link'] ) )
    update_post_meta( $post['ID'], '_image_media_link', $attachment['image-media-link'] );
  return $post;
}

add_filter( 'attachment_fields_to_save', 'brixey_gallery_attachment_field_credit_save', 10, 3 );
