<?php
// Logo Image
$brixey_brand_logo_default = cs_get_option('brand_logo_default');
$brixey_brand_logo_white = cs_get_option('brixey_brand_logo_white');
$brixey_brand_logo_retina = cs_get_option('brand_logo_retina');
$brixey_brand_logo_retina_white = cs_get_option('brand_logo_retina_white');
if (isset( $brixey_brand_logo_white ) ) {
	$brixey_brand_logo_white = $brixey_brand_logo_white;
} else {
	$brixey_brand_logo_white = $brixey_brand_logo_default;
}
if (isset( $brixey_brand_logo_retina_white )) {
	$brixey_brand_logo_retina_white = $brixey_brand_logo_retina_white;
} else {
	$brixey_brand_logo_retina_white = $brixey_brand_logo_white;
}
// Transparent Header Logos
$brixey_transparent_retina = cs_get_option('transparent_logo_retina');

// Metabox - Header Transparent
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox'. true );

// Retina Size
$brixey_retina_width = cs_get_option('retina_width');
$brixey_retina_height = cs_get_option('retina_height');

// Logo Spacings
$brixey_brand_logo_top = cs_get_option('brand_logo_top');
$brixey_brand_logo_bottom = cs_get_option('brand_logo_bottom');
if ($brixey_brand_logo_top !== '') {
	$brixey_brand_logo_top = 'padding-top:'. brixey_check_px($brixey_brand_logo_top) .';';
} else { $brixey_brand_logo_top = ''; }
if ($brixey_brand_logo_bottom !== '') {
	$brixey_brand_logo_bottom = 'padding-bottom:'. brixey_check_px($brixey_brand_logo_bottom) .';';
} else { $brixey_brand_logo_bottom = ''; }
?>
<div class="brxy-logo" style="<?php echo esc_attr($brixey_brand_logo_top); echo esc_attr($brixey_brand_logo_bottom); ?>">
	<a href="<?php echo esc_url(home_url( '/' )); ?>">
	<?php
	if ( isset($brixey_brand_logo_default) || isset($brixey_brand_logo_white) || isset( $brixey_brand_logo_retina ) ){
		if (isset($brixey_brand_logo_retina)){
			echo '<img src="'. esc_url(wp_get_attachment_url($brixey_brand_logo_retina)) .'" width="'. esc_attr($brixey_retina_width) .'" height="'. esc_attr($brixey_retina_height) .'" alt="'.get_bloginfo('name').'" class="retina-logo black-logo">
				';
		}
		if(isset($brixey_brand_logo_retina_white)) {
			echo '<img src="'. esc_url(wp_get_attachment_url($brixey_brand_logo_retina_white)) .'" width="'. esc_attr($brixey_retina_width) .'" height="'. esc_attr($brixey_retina_height) .'" alt="'.get_bloginfo('name').'" class="retina-logo white-logo">
				';
		}

		echo '<img src="'. esc_url(wp_get_attachment_url($brixey_brand_logo_default)) .'" alt="'.get_bloginfo('name').'" class="default-logo black-logo" width="'. esc_attr($brixey_retina_width) .'" height="'. esc_attr($brixey_retina_height) .'">';
		if (isset($brixey_brand_logo_white)) {
			echo '<img src="'. esc_url(wp_get_attachment_url($brixey_brand_logo_white)) .'" alt="'.get_bloginfo('name').'" class="default-logo white-logo" width="'. esc_attr($brixey_retina_width) .'" height="'. esc_attr($brixey_retina_height) .'">';
		}
		
	} else {
		echo '<div class="text-logo">'. esc_attr(get_bloginfo( 'name' )) . '</div>';
	}
	echo '</a>';
	?>
</div>