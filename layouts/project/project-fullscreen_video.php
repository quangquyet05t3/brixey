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
	$video_url = $project_layout['video_url'];
	$video_cover = $project_layout['video_cover'];
} else {
	$layout = '';
	$project_description = '';
	$project_url = '';
	$hide_control = cs_get_option( 'project_single_pagination' );
	$project_details_title = '';
	$video_url = '';
	$video_cover = '';
	$project_images = array();
	$hide_zoom_icon = false;
}
if (!empty($video_url)) {
	$video_url =  $video_url ;
	$class_name =  ' has-video' ;
} else {
	$video_url ='';
	$class_name ='';
}
if (!empty($video_cover)) {
	$video_poster = wp_get_attachment_url($video_cover);
} else {
	$video_poster = BRIXEY_IMAGES.'/slide-placeholder.jpg';
}
$video_url = brixey_youtube_video_id( $video_url );
$full_wrap_attr = ' data-id="'.$video_url.'"';
$full_wrap_id = 'id="video_player"';

?>
  <!-- brxy full wrap (brxy sinlge detail, fullscreen, fullscreen video) -->
  <div class="brxy-full-wrap brxy-sinlge-detail fullscreen fullscreen-video">
  	<div class="swiper-container">
  		<div class="youtube-project" data-embed="<?php echo esc_attr($video_url); ?>" data-src="<?php echo esc_url($video_poster); ?>">
        <div class="play-button"></div>
      </div>
      <div class="brxy-info-btn">
      	<a href="javascript:void(0);"><i class="fa fa-info-circle" aria-hidden="true"></i> <?php echo esc_html__( 'Details', 'brixey' ); ?></a>
      </div>
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
