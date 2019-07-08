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
	$title_area_style = $project_layout['title_area_style'];
	$descriptio_area_style = $project_layout['descriptio_area_style'];
	$project_description = $project_layout['project_description'];
	$subtitles = $project_layout['subtitles'];
	$project_url = $project_layout['project_url'];
	$button_class = $project_layout['button_class'];
	$project_details_title = $project_layout['project_details_title'];
	$hide_control = $project_layout['hide_control'];
	$background_image = $project_layout['background_image'];
} else {
	$layout = '';
	$title_area_style = '';
	$descriptio_area_style = '';
	$subtitles = '';
	$project_url = '';
	$project_description = '';
	$hide_control = cs_get_option( 'project_single_pagination' );
	$button_class = '';
	$project_details_title = '';
	$background_image = '';
}
if (!empty( $background_image )) {
	$background_image = wp_get_attachment_url( $background_image );
} else {
	$background_image = '';
}
if ($title_area_style != 'hide' ) {
?>
  <div class="brxy-quote brxy-parallax <?php echo esc_attr( $title_area_style ); ?>" data-parallax="scroll" data-image-src="<?php echo esc_url( $background_image ); ?>">
    <div class="quote-wrap">
      <div class="brxy-table-container">
        <div class="brxy-align-container">
          <div class="container">
            <div class="quote-sub-title">
              <div class="ajax-load-more.js">
                <?php
                  if(!empty($subtitles)) {
                    foreach ($subtitles as $key => $title) {
                      $subtitle = $title['subtitle'];
                      $subtitle_url = $title['subtitle_url'];
                      if (!empty($subtitle_url)) {
                        echo '<span><a href="'.$subtitle_url.'">'.$subtitle.'</a></span> ';
                      } else {
                        echo '<span>'.$subtitle.'</span> ';
                      }
                    }
                  }
                ?>
              </div>
            </div>
            <div class="quote-title"><?php echo the_title(); ?></div>
            <?php if( !empty( $button_class ) ) { ?>
            <div class="animation-btn"><a href="<?php echo esc_attr( $button_class ); ?>" class="smooth-scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }
	if( $descriptio_area_style == 'column'){
 ?>
  <div class="brxy-project-detail">
    <div class="container">
      <?php if( !empty($project_details_title) ){ ?><div class="project-title"><?php echo esc_attr( $project_details_title ); ?></div><?php } ?>
      <div class="row">
        <div class="col-md-4">
          <ul class="detail-wrap">
            <?php brixey_project_information_meta(); ?>
          </ul>
        </div>
        <div class="col-md-8">
          <div class="project-detail-wrap">
          <p style="line-height: 1.73;"> <?php	echo do_shortcode( $project_description ); ?></p>
            <?php
            	if( !empty($project_url) ){
            		echo '<div class="clearfix"><a href="'.esc_url( $project_url ).'" class="brxy-btn brxy-btn-small">'.esc_html__( 'View Projects', 'brixey' ).'</a></div>';
            	}
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } else { ?>
  <div class="brxy-project-detail style3">
    <div class="container">
      <div class="brxy-container">
        <?php if( !empty($project_details_title) ){ ?><div class="project-title"><?php echo esc_attr( $project_details_title ); ?></div><?php } ?>
           <p style="line-height: 1.73;"> <?php	echo do_shortcode( $project_description ); ?></p>
            <?php
            	if( !empty($project_url) ){
            		echo '<div class="clearfix"><a href="'.esc_url( $project_url ).'" class="brxy-btn brxy-btn-small">'.esc_html__( 'View Projects', 'brixey' ).'</a></div>';
            	}
            ?>
        <ul class="detail-wrap">
          <?php brixey_project_information_meta(); ?>
        </ul>
      </div>
    </div>
  </div>
  <?php }

	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_content();
		}
	}
	if( !$hide_control ){
		$brixey_prev_pro = cs_get_option('prev_port');
		$brixey_next_pro = cs_get_option('next_port');
		$brixey_prev_pro = ($brixey_prev_pro) ? $brixey_prev_pro : esc_html__('Prev', 'brixey');
		$brixey_next_pro = ($brixey_next_pro) ? $brixey_next_pro : esc_html__('Next', 'brixey');
		$brixey_prev_post = get_previous_post( '', false);
		$brixey_next_post = get_next_post( '', false);
 ?>
  <!-- project controls -->
	  <div class="project-controls">
	  <?php if ($brixey_prev_post) { ?>
	    <a href="<?php echo esc_url(get_permalink($brixey_prev_post->ID)); ?>"><i class="fa fa-angle-left" aria-hidden="true"></i> <?php echo esc_attr($brixey_prev_pro); ?></a>
	    <?php } ?>
	    	<a href="<?php echo esc_url( $theme_project_url ); ?>" class="grid-links"><span></span> <span></span></a>
	    <?php if ($brixey_next_post) { ?>
	    	<a href="<?php echo esc_url(get_permalink($brixey_next_post->ID)); ?>"><?php echo esc_attr($brixey_next_pro); ?> <i class="fa fa-angle-right" aria-hidden="true"></i></a>
	    <?php } ?>
	  </div>

<?php }
