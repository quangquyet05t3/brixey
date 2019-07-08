<?php
/*
 * The template for displaying all pages.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
get_header();
// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
$page_layout  = get_post_meta( $brixey_id, 'page_layout_options', true );
$page_layout 	= $page_layout ? $page_layout['page_layout'] :'';
if (!empty( $page_layout )) {
	$page_layout = $page_layout;
} else {
	$page_layout = cs_get_option('page_sidebar_position');
}
if ( $page_layout == 'left-sidebar' ) {
	$container_class = 'container has-sidebar';
	$container_before = 'row';
	$container_after = 1;
	$main_content_before = 'col-md-8 col-sm-12 has-left-sidebar';
	$main_content_after = 1;
	$sidebar_before = 'brxy-sidebar left-sidebar col-md-4 col-sm-12';
	$sidebar_after = 1;
} elseif( $page_layout == 'right-sidebar' ) {
	$container_class = 'container has-sidebar';
	$container_before = 'row';
	$container_after = 1;
	$main_content_before = 'col-md-8 col-sm-12 has-right-sidebar';
	$main_content_after = 1;
	$sidebar_before = 'brxy-sidebar right-sidebar col-md-4 col-sm-12';
	$sidebar_after = 1;
} elseif( $page_layout == 'extra-width' ) {
	$container_class = 'container-fluid extra-width';
	$container_before = 'row';
	$container_after = 1;
	$main_content_before = '';
	$main_content_after = '';
	$sidebar_before = '';
	$sidebar_after = '';
} else {
	$container_class = 'container';
	$container_before = '';
	$container_after = '';
	$main_content_before = '';
	$main_content_after = '';
	$sidebar_before = '';
	$sidebar_after = '';
}
// echo json_encode( get_option('_cs_options') ); // BrixeyWP - JSON File, json, Json.
if ( $page_layout == 'window-fit' ) {
	get_template_part( 'layouts/page/full', 'page' );
} else {
	if ($page_layout != 'extra-width') {
?>
<div class="brxy-mid-wrap single"">
	<?php } ?>
	<div class="<?php echo esc_attr($container_class); ?>">
		<?php if ($container_before) { ?>
		<div class="<?php echo esc_attr($container_before); ?>">
		<?php } if($main_content_before) { ?>
		<div class="<?php echo esc_attr($main_content_before); ?>">
		<?php } ?>
		<?php
			get_template_part( 'layouts/header/title', 'bar' );
		if ($page_layout != 'extra-width') {
		?>
		<div class="brxy-unit-fix">
			<div class="brxy-blog-detail">
		<?php }
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();
					the_content();
					echo brixey_wp_link_pages();
					$brixey_theme_page_comments = cs_get_option('theme_page_comments');
					if ( isset($brixey_theme_page_comments) && (comments_open() || get_comments_number()) ) :
						comments_template();
					endif;
				endwhile;
			else :
				get_template_part( 'layouts/post/content', 'none' );
			endif;
			wp_reset_postdata();
			if ($page_layout != 'extra-width') { ?>
			</div>
		</div>
		<?php }
		if ($main_content_after === 1) {
			echo '</div>';
		}
		if ($sidebar_before) {
			echo '<div class="'. esc_attr($sidebar_before) .'">';
		}
		if( $page_layout == 'right-sidebar' || $page_layout == 'left-sidebar' ){
			get_sidebar();
		}
		if ($sidebar_after === 1) {
			echo '</div>';
		}
		if ($container_after === 1) {
			echo '</div>';
		}
		?>
	</div>
	<?php if ($page_layout != 'extra-width') { ?>
</div>
<?php }

}
get_footer();
