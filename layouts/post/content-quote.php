<?php
/**
 * Template part for displaying posts.
 */
$brixey_large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
$brixey_large_image = $brixey_large_image[0];

$brixey_read_more_text = cs_get_option('read_more_text');
$brixey_read_text = $brixey_read_more_text ? $brixey_read_more_text : esc_html__( 'Read More', 'brixey' );
$brixey_post_type = get_post_meta( get_the_ID(), 'post_type_metabox', true );
$brixey_blog_style = cs_get_option('blog_listing_style');
$brixey_metas_hide = (array) cs_get_option( 'theme_metas_hide' );

if ($brixey_post_type) {
	$quot_format_data = $brixey_post_type['quote_post_format'];
	$quot_format_author = $brixey_post_type['quote_post_author'];
	$quot_format_url = $brixey_post_type['quote_post_author_url'];
} else {
	$quot_format_data = '';
	$quot_format_author = '';
	$quot_format_url = '';
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item quote-post'); ?>>
  <div class="blog-info">
    <?php echo brixey_post_metas(); ?>
    <div class="post-title">
    	<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_attr(get_the_title()); ?></a>
    </div>
    <blockquote>
			<?php
				$blog_excerpt = cs_get_option('theme_blog_excerpt');
				if ($blog_excerpt) {
					$blog_excerpt = $blog_excerpt;
				} else {
					$blog_excerpt = '17';
				}
				if ($quot_format_data) {
					echo nl2br($quot_format_data, false);
				}else{
					brixey_excerpt($blog_excerpt);
				}

				if( !empty( $quot_format_author ) ) {
				?>
				<cite>&#45; <a href="<?php echo esc_url($quot_format_url); ?>"><?php echo esc_attr( $quot_format_author ); ?></a></cite>
			<?php } ?>
	</blockquote>
    <div class="brxy-read-more">
			<a href="<?php echo esc_url( get_permalink() ); ?>" class="bp-read-more">
				<?php echo esc_attr($brixey_read_text); ?>
			</a>
		</div>
  </div>
</div>