<?php
/*
 * The template for displaying all single team.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
get_header();

// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
if ($brixey_meta) {
	$brixey_content_padding = $brixey_meta['content_spacings'];
} else { $brixey_content_padding = ''; }
// Padding - Theme Options
if ($brixey_content_padding && $brixey_content_padding !== 'padding-none') {
	$brixey_content_top_spacings = $brixey_meta['content_top_spacings'];
	$brixey_content_bottom_spacings = $brixey_meta['content_bottom_spacings'];
	if ($brixey_content_padding === 'padding-custom') {
		$brixey_content_top_spacings = $brixey_content_top_spacings ? 'padding-top:'. brixey_check_px($brixey_content_top_spacings) .';' : '';
		$brixey_content_bottom_spacings = $brixey_content_bottom_spacings ? 'padding-bottom:'. brixey_check_px($brixey_content_bottom_spacings) .';' : '';
		$brixey_custom_padding = $brixey_content_top_spacings . $brixey_content_bottom_spacings;
	} else {
		$brixey_custom_padding = '';
	}
} else {
	$brixey_top_spacing = cs_get_option('team_top_spacing');
	$brixey_bottom_spacing = cs_get_option('team_bottom_spacing');
	if ($brixey_top_spacing || $brixey_bottom_spacing) {
		$brixey_top_spacing = $brixey_top_spacing ? 'padding-top:'. brixey_check_px($brixey_top_spacing) .';' : '';
		$brixey_bottom_spacing = $brixey_bottom_spacing ? 'padding-bottom:'. brixey_check_px($brixey_bottom_spacing) .';' : '';
		$brixey_custom_padding = $brixey_top_spacing . $brixey_bottom_spacing;
	} else {
		$brixey_custom_padding = '';
	}
}

// Sidebar Position
$brixey_layout_class = 'col-lg-12 no-padding';
?>

<div class="container brxy-content-area <?php echo esc_attr($brixey_content_padding); ?>" style="<?php echo esc_attr($brixey_custom_padding); ?>">
<div class="row">

	<div class="<?php echo esc_attr($brixey_layout_class); ?> sngl-team-cnt">
		<div class="brxy-blog-one brxy-blog-list brxy-blog-col-1">

		<?php
		if (have_posts()) : while (have_posts()) : the_post();

			the_content();

		endwhile;
		endif;
		?>

		</div><!-- Blog Div -->
		<?php
    wp_reset_postdata();  // avoid errors further down the page
		?>
	</div><!-- Content Area -->

</div>
</div>

<?php
get_footer();