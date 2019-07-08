<?php
/**
 * Single Post.
 */
$brixey_large_image =  wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'fullsize', false, '' );
$brixey_large_image_single = get_post_meta( get_post_thumbnail_id(get_the_ID()), '_image_media_link', true);
if ( !empty($brixey_large_image_single) ) {
	$brixey_large_image = $brixey_large_image_single;
} else {
	$brixey_large_image = $brixey_large_image[0];
}
$brixey_post_type = get_post_meta( get_the_ID(), 'post_type_metabox', true );
$brixey_blog_style = cs_get_option('blog_listing_style');
if ($brixey_post_type) {
	$link_post_data = $brixey_post_type['link_post_format'];
} else {
	$link_post_data = '';
}
// Single Theme Option
$brixey_single_featured_image = cs_get_option('single_featured_image');
$brixey_single_author_info = cs_get_option('single_author_info');
$brixey_single_share_option = cs_get_option('single_share_option');
$brixey_single_tag_option = cs_get_option('single_tag_option');
$brixey_single_like_button = cs_get_option('single_like_button');
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php echo brixey_post_metas(); ?>
	<div class="post-title"><?php echo esc_attr(get_the_title()); ?></div>
		<div class="blog-picture">
	  	<?php if($brixey_large_image) : ?>
	  		<img src="<?php echo esc_url($brixey_large_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
	  	<?php
	  	endif;
				if ( !empty( $link_post_data ) ) {
					echo '<a href="'.$link_post_data.'" class="link-type-link"> <i class="fa fa-unlink"></i> </a>';
				}
			?>
  	</div>
	 <?php
			the_content();
			echo brixey_wp_link_pages();
		?>
      <div class="brxy-bottom-meta">
      	<?php
				$tag_list = get_the_tags();
			  if($tag_list && $brixey_single_tag_option) { ?>
				<div class="brxy-tags">
					<?php echo the_tags( '<ul><li><span>', '</span></li><li><span>', '</span></li></ul>' ); ?>
				</div>
				<?php }
				if($brixey_single_share_option) { ?>
	        <div class="brxy-share">
						<?php	echo brixey_wp_share_option(); ?>
	        </div>
        <?php	}
        if($brixey_single_like_button){ ?>
	        <div class="brxy-likes">
		        <?php
		        	if( function_exists('zilla_likes') ) {
		        		zilla_likes();
								$likes = esc_attr(get_post_meta($post->ID, '_zilla_likes', true));
								$likes = (int) $likes;
								if ($likes == 1) {
									echo '<a href="#" class="zilla-likes-postfix">'. esc_html__(' Like', 'brixey') .'</a>';
								}else{
									echo ' <a href="#" class="zilla-likes-postfix">'. esc_html__(' Likes', 'brixey') .'</a>';
								}
							}
						?>
	        </div>
	       <?php } ?>
      </div>
       <?php
				brixey_single_post_pagination();
				if($brixey_single_author_info) {
					echo brixey_author_info();
				}
			?>
</div><!-- #post-## -->