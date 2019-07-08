<?php
/**
 * Template part for displaying posts.
 */
$brixey_large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
$brixey_large_image = $brixey_large_image[0];
$brixey_read_more_text = cs_get_option('read_more_text');
$brixey_read_text = $brixey_read_more_text ? $brixey_read_more_text : esc_html__( 'Read More', 'brixey' );
$brixey_post_type = get_post_meta( get_the_ID(), 'post_type_metabox', true );

if ($brixey_post_type) {
	$post_format_data = $brixey_post_type['video_post_format'];
} else {
	$post_format_data = '';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>
		<?php if(!empty( $post_format_data )) { ?>
	  <div class="blog-picture">
			<?php brixey_youtube_video_id( $post_format_data ); ?>
	  </div>
	  <?php } ?>
  <div class="blog-info">
    <?php echo brixey_post_metas(); ?>
    <div class="post-title">
    	<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_attr(get_the_title()); ?></a>
    </div>
    <p style="line-height: 1.6;"><?php
			$blog_excerpt = cs_get_option('theme_blog_excerpt');
			if ($blog_excerpt) {
				$blog_excerpt = $blog_excerpt;
			} else {
				$blog_excerpt = '17';
			}
			brixey_excerpt( $blog_excerpt );
			echo brixey_wp_link_pages();
			?></p>
		<div class="brxy-read-more">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="bp-read-more">
				<?php echo esc_attr($brixey_read_text); ?>
			</a>
		</div>
  </div>
</div>