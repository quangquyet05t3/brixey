<?php
/*
 * The main template file.
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
get_header();

// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );

// Theme Options
$brixey_blog_columns = cs_get_option('blog_listing_columns');
$blog_column_spacing = cs_get_option('blog_column_spacing');
// Columns
if ($brixey_blog_columns) {
	$brixey_blog_column_class = $brixey_blog_columns;
} else {
	$brixey_blog_column_class = 'col-md-4';
}
if ($blog_column_spacing) {
	$blog_column_spacing = $blog_column_spacing;
}else{
	$blog_column_spacing = 'spacer2';
}
global $post;

$page_layout = cs_get_option('blog_sidebar_position');
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
<!-- brxy mid wrap -->
<div class="brxy-mid-wrap">
  <div class="<?php echo esc_attr( $container_class ); ?>">
  	<?php if ($container_before) { ?>
		<div class="<?php echo esc_attr($container_before); ?>">
		<?php } if($main_content_before) { ?>
		<div class="<?php echo esc_attr($main_content_before); ?>">
		<?php } ?>
		<?php get_template_part( 'layouts/header/title', 'bar' ); ?>
    <div id="blog-posts" class="brxy-masonry  <?php echo esc_attr($blog_column_spacing); ?>">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post(); ?>
						<div class="masonry-item <?php echo esc_attr($brixey_blog_column_class); ?>">
							<?php	get_template_part( 'layouts/post/content', get_post_format() ); ?>
						</div>
					<?php
					endwhile;
				else :
					get_template_part( 'layouts/post/content', 'none' );
				endif;
				wp_reset_postdata();
				?>
    </div>
			<?php
			$pagination_type = cs_get_option('navigation_type');
				if ($pagination_type == 'navigation') {
					brixey_paging_nav();
				} else {
					brixey_ajax_load_more_blog();
				}
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