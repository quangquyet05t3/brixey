<?php
/*
 * The template for displaying the footer.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
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

if ($brixey_meta) {
	$brixey_hide_footer  = $brixey_meta['hide_footer'];
} else { $brixey_hide_footer = ''; }

$brixey_page_layout  = get_post_meta( $brixey_id, 'page_layout_options', true );
if ($brixey_page_layout) {
	if (!is_single( 'project' )) {
		$page_layout = $brixey_page_layout['page_layout'];
	} else {
		$page_layout = '';
	}
} else {
	$page_layout = '';
}

if (!$brixey_hide_footer) { // Hide Footer Metabox
	$footer_widget_block = cs_get_option('footer_widget_block');
	if ( $footer_widget_block == true  ) {
		if ( $page_layout != 'window-fit' && ( $select_project_layout != 'carousel_fullscreen' && $select_project_layout != 'fullscreen_slider' && $select_project_layout != 'fullscreen_stack' && $select_project_layout != 'fullscreen_video'  && $select_project_layout != 'grid_sidebar' && $select_project_layout != 'slider_sidebar'  && $select_project_layout != 'carousel_sidebar' ) ) {
			if (is_page_template( 'home-template.php' )) {
				if ( $home_layout != 'home_fullscreen' ) {
					?>
					<footer class="brxy-footer">
						<?php  get_template_part( 'layouts/footer/footer', 'widgets' ); ?>
					</footer>
					<?php
				}
			} else {
		?>
		<footer class="brxy-footer">
			<?php  get_template_part( 'layouts/footer/footer', 'widgets' ); ?>
		</footer>
	<?php }
		}
	}
	$need_copyright = cs_get_option('need_copyright');
	if (isset($need_copyright)) {
		get_template_part( 'layouts/footer/footer', 'copyright' );
	}
} // Hide Footer Metabox ?>
</div><!-- #vtheme-wrapper -->
<div class="brxy-back-top">
  <a href="#0"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
<?php wp_footer(); ?>
</body>
</html>
