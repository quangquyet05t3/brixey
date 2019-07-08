<?php
// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
if ($brixey_meta && ( is_page() || is_home() ) ) {
	$brixey_title_bar_padding = $brixey_meta['title_area_spacings'];
	$page_custom_sub_title = $brixey_meta['page_custom_sub_title'];
	$page_custom_title = $brixey_meta['page_custom_title'];
} else {
	$brixey_title_bar_padding = '';
	$page_custom_sub_title = '';
}
// Padding - Theme Options
if ($brixey_title_bar_padding && $brixey_title_bar_padding !== 'padding-none') {
	$brixey_title_top_spacings = $brixey_meta['title_top_spacings'];
	$brixey_title_bottom_spacings = $brixey_meta['title_bottom_spacings'];
	if ($brixey_title_bar_padding === 'padding-custom') {
		$brixey_title_top_spacings = $brixey_title_top_spacings ? 'padding-top:'. brixey_check_px($brixey_title_top_spacings) .';' : '';
		$brixey_title_bottom_spacings = $brixey_title_bottom_spacings ? 'padding-bottom:'. brixey_check_px($brixey_title_bottom_spacings) .';' : '';
		$brixey_custom_padding = $brixey_title_top_spacings . $brixey_title_bottom_spacings;
	} else {
		$brixey_custom_padding = '';
	}
} else {
	$brixey_title_bar_padding = cs_get_option('title_bar_padding');
	$brixey_titlebar_top_padding = cs_get_option('titlebar_top_padding');
	$brixey_titlebar_bottom_padding = cs_get_option('titlebar_bottom_padding');
	if ($brixey_title_bar_padding === 'padding-custom') {
		$brixey_titlebar_top_padding = $brixey_titlebar_top_padding ? 'padding-top:'. brixey_check_px($brixey_titlebar_top_padding) .';' : '';
		$brixey_titlebar_bottom_padding = $brixey_titlebar_bottom_padding ? 'padding-bottom:'. brixey_check_px($brixey_titlebar_bottom_padding) .';' : '';
		$brixey_custom_padding = $brixey_titlebar_top_padding . $brixey_titlebar_bottom_padding;
	} else {
		$brixey_custom_padding = '';
	}
}
// Banner Type - Meta Box
if ($brixey_meta) {
	$brixey_banner_type = $brixey_meta['banner_type'];
} else { $brixey_banner_type = ''; }

if($brixey_banner_type === 'hide-title-area') { // Hide Title Area
}elseif($brixey_meta && $brixey_banner_type === 'revolution-slider') { // Hide Title Area
	echo do_shortcode($brixey_meta['page_revslider']);
} else { ?>
	<div class="brxy-title-area <?php echo esc_attr($brixey_title_bar_padding ); ?>"  style="<?php echo esc_attr($brixey_custom_padding); ?>">
		<div class="brxy-info-title">
			<?php
				if ( is_home() ) {
					if(!empty($page_custom_sub_title)){
						echo '<div class="info-sub-title">'.$page_custom_sub_title.'</div>';
					} else {
						echo '<div class="info-sub-title">'.get_bloginfo( 'description' ).'</div>';
					}
				} else {
					if(!empty($page_custom_sub_title)){
						echo '<div class="info-sub-title">'.$page_custom_sub_title.'</div>';
					}
				}
			?>
			<div class="info-title">
				<?php
					if ( is_home() ) {
						if ($brixey_meta) {
							if ( !empty( $page_custom_title ) ) {
								echo esc_attr($page_custom_title);
							} else {
								echo wp_title( '', true, 'right' );
							}
						} else {
							bloginfo( 'name' );
						}
					} else {
						brixey_title_area();
					}
				 ?>
			 </div>
		</div>
	</div>
<?php } ?>