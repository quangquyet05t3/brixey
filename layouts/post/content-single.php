<?php
/**
 * Single Post.
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

$brixey_post_type = get_post_meta( get_the_ID(), 'post_type_metabox', true );
$brixey_blog_style = cs_get_option('blog_listing_style');

// Single Theme Option
$brixey_single_featured_image = cs_get_option('single_featured_image');
$brixey_single_author_info = cs_get_option('single_author_info');
$brixey_single_share_option = cs_get_option('single_share_option');
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('brxy-blog-post'); ?>>

	<?php
	if ($brixey_single_featured_image) {
		if ( 'gallery' == get_post_format() && ! empty( $brixey_post_type['gallery_post_format'] ) ) { ?>
			<div class="featured-image rounded-three brxy-theme-carousel"
			data-nav="true"
			data-autoplay="true"
			data-auto-height="true"
			data-dots="true">
				<?php
			  $brixey_ids = explode( ',', $brixey_post_type['gallery_post_format'] );
			  foreach ( $brixey_ids as $id ) {
			    $brixey_attachment = wp_get_attachment_image_src( $id, 'full' );
			    $brixey_alt = get_post_meta($id, '_wp_attachment_image_alt', true);
			    echo '<img src="'. $brixey_attachment[0] .'" alt="'. esc_attr($brixey_alt) .'" />';
			  }
				?>
			</div>
		<?php
		} elseif ($brixey_large_image) { ?>
		<div class="featured-image rounded-three">
			<img src="<?php echo esc_url($brixey_large_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
		</div>
	<?php } // Featured Image
	}
	?>

	<!-- Content -->
	<div class="bp-content">
		<?php echo brixey_post_metas(); ?>
		<h3 class="bp-heading"><?php echo esc_attr(get_the_title()); ?></h3>
		<?php
		the_content();
		echo brixey_wp_link_pages();
		?>
	</div>
	<!-- Content -->

	<!-- Tags and Share -->
	<div class="bp-bottom-meta">
		<div class="bp-share">
			<?php
			if($brixey_single_share_option) {
				echo brixey_wp_share_option();
			}
			?>
		</div>
		<?php
		$tag_list = get_the_tags();
	  if($tag_list) { ?>
		<div class="bp-tags">
			<?php echo '<span>'. esc_html__('Tags: ', 'brixey') . '</span>'; echo the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
		</div>
		<?php } ?>
	</div>
	<!-- Tags and Share -->

	<!-- Author Info -->
	<?php
	if($brixey_single_author_info) {
		echo brixey_author_info();
	}
	?>
	<!-- Author Info -->

</div><!-- #post-## -->