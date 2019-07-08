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

if ($brixey_post_type) {
	$link_post_data = $brixey_post_type['link_post_format'];
} else {
	$link_post_data = '';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>

  <div class="blog-picture">
  <?php if($brixey_large_image) : ?>
  	<a href="<?php echo esc_url( get_permalink() ); ?>">
  		<img src="<?php echo esc_url($brixey_large_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
  	</a>
  	<?php
  	endif;
		if ( !empty( $link_post_data ) ) {
			echo '<a href="'.$link_post_data.'" class="link-type-link"> <i class="fa fa-unlink"></i> </a>';
		}
		?>
  </div>
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