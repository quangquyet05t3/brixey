<?php
/*
 * The template for displaying all single posts.
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
$brixey_single_comment = cs_get_option('single_comment_form');
$page_layout = $page_layout ? $page_layout['page_layout'] :'';
if (!empty( $page_layout )) {
	$page_layout = $page_layout;
} else {
	$page_layout = cs_get_option('single_sidebar_position');
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

?>
<div class="brxy-mid-wrap single"">
	<div class="<?php echo esc_attr( $container_class ); ?>">
		<?php if ($container_before) { ?>
		<div class="<?php echo esc_attr($container_before); ?>">
		<?php } if($main_content_before) { ?>
		<div class="<?php echo esc_attr($main_content_before); ?>">
		<?php } ?>
		<div class="brxy-unit-fix">
			<div class="brxy-blog-detail">
				<?php
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						get_template_part( 'layouts/post/single/content', get_post_format() );
						if ($brixey_single_comment) {
							comments_template();
						}
					endwhile;
				else :
					get_template_part( 'layouts/post/content', 'none' );
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
		<?php
		if ($main_content_after === 1) {
			echo '</div>';
		}
		if ($sidebar_before) {
			echo '<div class="'. esc_attr($sidebar_before) .'">';
		}
		if( $page_layout == 'right-sidebar' ||  $page_layout == 'left-sidebar' ){
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
</div>

<?php
get_footer();