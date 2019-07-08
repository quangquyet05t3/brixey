<?php
/*
 * Admin Styles for Brixey Theme
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$project_layout  = get_post_meta( $brixey_id, 'project_layout_metabox', true );
$theme_project_url = cs_get_option( 'theme_project_url' );

if ( $project_layout ) {
	$layout = $project_layout['select_project_layout'];
	$project_description = $project_layout['project_description'];
	$project_url = $project_layout['project_url'];
	$project_details_title = $project_layout['project_details_title'];
	$hide_control = $project_layout['hide_control'];
	$project_images = $project_layout['project_images'];
	$hide_zoom_icon = $project_layout['hide_zoom_icon'];
} else {
	$layout = '';
	$project_description = '';
	$project_url = '';
	$hide_control = cs_get_option( 'project_single_pagination' );
	$project_details_title = '';
	$project_images = array();
	$hide_zoom_icon = false;
}

?>
  <!-- brxy full wrap (brxy sinlge detail, open, static detail) -->
  <div class="brxy-full-wrap brxy-sinlge-detail open static-detail">
    <div class="swiper-container slider-with-info fadeslides keyboard" data-autoplay="true">
      <div class="swiper-wrapper">
				<?php
					if($project_images){
					foreach ($project_images as $key => $image) :
						$grid_image = wp_get_attachment_url( $image['image'] );
						$large_image = $image['large_image_url'];
						$largeimage_url = get_post_meta( $image['image'], '_image_media_link', true );
						$brixey_alt = get_post_meta( $image['image'], '_wp_attachment_image_alt', true);
						if ( !empty( $large_image ) ) {
							$large_image = $large_image;
						} elseif( !empty( $largeimage_url ) ) {
							$large_image = $largeimage_url;
						} else {
							$large_image = $grid_image;
						}
				?>
        <div class="swiper-slide" style="background-image:url(<?php echo esc_url( $grid_image ); ?>);">
          <?php if(!$hide_zoom_icon){ ?>
          <div class="brxy-expand-btn"><a href="javascript:void(0);"><img src="<?php echo esc_url( $large_image ); ?>" alt="<?php echo esc_attr( $brixey_alt ); ?>" class="intense"></a></div>
          <?php } ?>
        </div>
        <?php
        	endforeach;
        }
        ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="brxy-project-detail">
		  <?php
		  	if( !$hide_control ){
				$brixey_prev_pro = cs_get_option('prev_port');
				$brixey_next_pro = cs_get_option('next_port');
				$brixey_prev_pro = ($brixey_prev_pro) ? $brixey_prev_pro : esc_html__('Prev', 'brixey');
				$brixey_next_pro = ($brixey_next_pro) ? $brixey_next_pro : esc_html__('Next', 'brixey');
				$brixey_prev_post = get_previous_post( '', false);
				$brixey_next_post = get_next_post( '', false);
		 	?>
			  <div class="project-controls">
			  <?php if ($brixey_prev_post) { ?>
			    <a href="<?php echo esc_url(get_permalink($brixey_prev_post->ID)); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo esc_attr($brixey_prev_pro); ?></a>
			    <?php } ?>
			    	<a href="<?php echo esc_url( $theme_project_url ); ?>" class="grid-links"><span></span> <span></span></a>
			    <?php if ($brixey_next_post) { ?>
			    	<a href="<?php echo esc_url(get_permalink($brixey_next_post->ID)); ?>"><?php echo esc_attr($brixey_next_pro); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			    <?php } ?>
			  </div>
			<?php } ?>
      <div class="project-detail-wrap">
        <div class="vertical-scroll">
          <?php if( !empty($project_details_title) ){ ?><div class="project-title"><?php echo esc_attr( $project_details_title ); ?></div><?php } else { ?>
		      	<div class="project-title"><?php the_title(); ?></div>
		      <?php } ?>
          <p style="line-height: 1.73;"> <?php	echo do_shortcode( $project_description ); ?></p>
          <ul class="detail-wrap">
            <?php brixey_project_information_meta(); ?>
          </ul>
         <?php
          	if( !empty($project_url) ){
          		echo '<div class="clearfix"><a href="'.esc_url( $project_url ).'" class="brxy-btn brxy-btn-small">'.esc_html__( 'View Projects', 'brixey' ).'</a></div>';
          	}
            ?>
        </div>
      </div>
    </div>
  </div>