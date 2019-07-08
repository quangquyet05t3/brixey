<?php
/**
 * Template part for displaying post format gallery.
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
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blog-item'); ?>>

  <div class="blog-picture">
	<?php
	if ( 'gallery' == get_post_format() && ! empty( $brixey_post_type['gallery_post_format'] ) ) { ?>
		<div class="brxy-carousel" data-nav="false" data-autoplay="true" data-auto-height="false" data-dots="true">
			<?php
		  $brixey_ids = explode( ',', $brixey_post_type['gallery_post_format'] );
		  foreach ( $brixey_ids as $id ) {
		    $brixey_attachment = wp_get_attachment_image_src( $id, 'full' );
		    $brixey_alt = get_post_meta($id, '_wp_attachment_image_alt', true);
		    echo '<img src="'. $brixey_attachment[0] .'" alt="'. esc_attr($brixey_alt) .'" />';
		  } ?>
		</div>
	<?php
	} elseif ($brixey_large_image) { ?>
		<a href="<?php echo esc_url( get_permalink() ); ?>">
	  	<img src="<?php echo esc_url($brixey_large_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
	  </a>
	<?php } // Featured Image ?>
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