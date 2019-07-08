<?php
/**
 * Template part for displaying posts.
 */
$grid_image_meta  = get_post_meta( $post->ID, 'post_grid_image_metabox', true );
$brixey_large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
$brixey_large_image = $brixey_large_image[0];

if ($grid_image_meta ) {
	$grid_featured_image = $grid_image_meta['grid_image'];
} else {
	$grid_featured_image = '';
}
if ($grid_featured_image) {
	$brixey_large_image = wp_get_attachment_url( $grid_featured_image );
} elseif ( !empty($brixey_large_image) ) {
	$brixey_large_image = $brixey_large_image[0];
} else {
	$brixey_large_image = '';
}

$brixey_read_more_text = cs_get_option('read_more_text');
$brixey_read_text = $brixey_read_more_text ? $brixey_read_more_text : esc_html__( 'Read More', 'brixey' );
$brixey_post_type = get_post_meta( get_the_ID(), 'post_type_metabox', true );
$brixey_blog_style = cs_get_option('blog_listing_style');
$brixey_metas_hide = (array) cs_get_option( 'theme_metas_hide' );
if (is_sticky()) {
	$sticky_class = ' sticky';
} else {$sticky_class = '';}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'. esc_attr($sticky_class)); ?>>
	<?php if($brixey_large_image) : ?>
	  <div class="blog-picture">
	  	<a href="<?php echo esc_url( get_permalink() ); ?>">
	  		<?php the_post_thumbnail(); ?>
	  	</a>
	  </div>
	<?php endif; ?>
  <div class="blog-info">
    <?php echo brixey_post_metas(); ?>
    <div class="post-title">
    	<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_attr(get_the_title()); ?></a>
    </div>
    <?php
		$blog_excerpt = cs_get_option('theme_blog_excerpt');
		if ($blog_excerpt) {
			$blog_excerpt = $blog_excerpt;
		} else {
			$blog_excerpt = '17';
		}
		brixey_excerpt($blog_excerpt);
		echo brixey_wp_link_pages();
		?>
    <div class="brxy-read-more">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="bp-read-more">
				<?php echo esc_attr($brixey_read_text); ?>
			</a>
		</div>
  </div>
</div>