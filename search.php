<?php
/*
 * The template for displaying search results pages.
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
?>
<!-- brxy mid wrap -->
<div class="brxy-mid-wrap">
  <div class="container">
	<?php
		  get_template_part( 'layouts/header/title', 'bar' );
	?>
    <div class="brxy-masonry <?php echo esc_attr($blog_column_spacing); ?>">
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
			endif; ?>
    </div>
    	<?php
				brixey_paging_nav();
  			wp_reset_postdata();
			?>
    <!-- <div class="clearfix text-center"><a href="#0" class="brxy-btn brxy-btn-small">Load More posts</a></div> -->
  </div>
</div>
<?php
get_footer();