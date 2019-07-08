<?php
/*
 * Template Name: Home
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$homepage_layout  = get_post_meta( $brixey_id, 'homepage_layout_metaboxes', true );
if ($homepage_layout) {
	$home_layout = $homepage_layout['home_layout'];
	$slider_style = $homepage_layout['slider_style'];
	$static_image = $homepage_layout['static_image'];
	$static_video = $homepage_layout['static_video'];
	$video_poster = $homepage_layout['video_poster'];
	$home_images = $homepage_layout['home_images'];
	$slider_images = $homepage_layout['slider_images'];
	$slider_shortcdes = $homepage_layout['slider_shortcdes'];
	$static_title = $homepage_layout['static_title'];
	$static_subtitle = $homepage_layout['static_subtitle'];
	$static_button_txt = $homepage_layout['static_button_txt'];
	$static_url = $homepage_layout['static_url'];
} else {
	$home_layout = '';
	$slider_style = '';
	$static_image = '';
	$static_video = '';
	$video_poster = '';
	$home_images = array();
	$slider_images = array();
	$slider_shortcdes = '';
	$static_title = '';
	$static_subtitle = '';
	$static_button_txt = esc_html__('Enter Site', 'brixey' );
	$static_url = '';
}
if ( $slider_style == 'slider' ) {
	$slide_class = 'fadeslides home-slider';
} else {
	$slide_class = 'fadeslides';
}
if ( $home_layout == 'home_info' ) {
	$wrap_class = ' has-swiper';
} else {
	$wrap_class = '';
}
if ( $slider_style == 'static_video' ) {
	if (!empty($static_video)) {
		$video_url =  $static_video ;
		$class_name =  ' has-video' ;
	} else {
		$video_url ='';
		$class_name ='';
	}
	if (!empty($video_poster)) {
		$video_poster = wp_get_attachment_url($video_poster);
	} else {
		$video_poster = BRIXEY_IMAGES.'/slide-placeholder.jpg';
	}
	$video_url = brixey_youtube_video_id( $video_url );
	$full_wrap_attr = ' data-id="'.$video_url.'"';
	$full_wrap_id = 'id="video_player"';
} else {
	$full_wrap_attr = '';
	$full_wrap_id = '';
	$video_poster = '' ;
	$class_name ='';
}
get_header();
	echo '<div '.$full_wrap_id.$full_wrap_attr.' class="brxy-full-wrap '.esc_attr( $class_name.$wrap_class ).'">';
	if ($video_poster) {
		echo '<img src="'. esc_url($video_poster) .'" alt="'.esc_attr(get_the_title()).'"  class="placeholder-image" />';
	}
	if( $slider_style == 'hide' ) {} elseif ( $slider_style == 'static_video' ){
		?>
	    <div class="brxy-heading-wrap">
	      <div class="brxy-table-container">
	        <div class="brxy-align-container">
	          <?php
		          if(!empty( $static_subtitle )){
		          	echo '<div class="brxy-sub-heading">'.$static_subtitle.'</div>';
		          }
		          if (!empty( $static_title )) {
		          	echo '<div class="brxy-heading">'.$static_title.'</div>';
		          }
		          if (!empty( $static_url )) {
		          	echo '<div class="clearfix"><a href="'.esc_url( $static_url ).'" class="brxy-btn brxy-btn-small">'.esc_attr( $static_button_txt ).'</a></div>';
		          }
	          ?>
	        </div>
	      </div>
	    </div>
		<?php
	} elseif( $slider_style == 'static_image' ) {
			if ( !empty( $static_image ) ) {
				$static_image_url = wp_get_attachment_url( $static_image );
			} else {
				$static_image_url = '';
			}
		?>
	    <div class="brxy-static-bg" style="background-image: url(<?php echo esc_url( $static_image_url ); ?>);">
	      <div class="brxy-heading-wrap">
	        <div class="brxy-table-container">
	          <div class="brxy-align-container">
		          <?php
			          if(!empty( $static_subtitle )){
			          	echo '<div class="brxy-sub-heading">'.$static_subtitle.'</div>';
			          }
			          if (!empty( $static_title )) {
			          	echo '<div class="brxy-heading">'.$static_title.'</div>';
			          }
			          if (!empty( $static_url )) {
			          	echo '<div class="clearfix"><a href="'.esc_url( $static_url ).'" class="brxy-btn brxy-btn-small">'.esc_attr( $static_button_txt ).'</a></div>';
			          }
		          ?>
	          </div>
	        </div>
	      </div>
	    </div>
		<?php
	} elseif ( $slider_style == 'slider_shortcode' ){
		echo do_shortcode( $slider_shortcdes );
	}elseif ( $slider_style == 'slideshow' ){ ?>
    <div class="swiper-container fadeslides keyboard home-slideshow" data-autoplay="true">
      <div class="swiper-wrapper">
				<?php
				if(!empty( $slider_images )){
					$slider_images = explode(',', $slider_images);
					foreach ($slider_images as $key => $image) {

						if (isset($image) && !empty($image)) {
							$grid_image = wp_get_attachment_url( $image);
						} else {
							$grid_image = BRIXEY_IMAGES.'/slide-placeholder.jpg';
						}

					$brixey_alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
					if ( !empty($static_button_txt) ) {
						$static_button_txt = $static_button_txt;
					}	else {
						$static_button_txt = esc_html__( 'View Projects', 'brixey' );
					}
				?>
        <div class="swiper-slide" style="background-image:url(<?php echo esc_url( $grid_image ); ?>);">
          <div class="brxy-heading-wrap">
            <div class="brxy-table-container">
              <div class="brxy-align-container">
		          <?php
			          if(!empty( $static_subtitle )){
			          	echo '<div class="brxy-sub-heading">'.$static_subtitle.'</div>';
			          }
			          if (!empty( $static_title )) {
			          	echo '<div class="brxy-heading">'.$static_title.'</div>';
			          }
			          if (!empty( $static_url )) {
			          	echo '<div class="clearfix"><a href="'.esc_url( $static_url ).'" class="brxy-btn brxy-btn-small">'.esc_attr( $static_button_txt ).'</a></div>';
			          }
		          ?>
              </div>
            </div>
          </div>
        </div>
				<?php }
				if( $slider_style == 'slider' ){ ?>
					<div class="swiper-button-prev"></div>
		      <div class="swiper-button-next"></div>
		      <div class="swiper-pagination"></div>
				<?php } }	?>
      </div>
    </div>
	<?php
	}else { ?>
    <div class="swiper-container keyboard fadeslides home-slider" data-autoplay="true">
      <div class="swiper-wrapper">
				<?php
				if(!empty( $home_images )){
					foreach ($home_images as $key => $image) {
						if (isset($image['gallery_image']) && !empty($image['gallery_image'])) {
							$grid_image = wp_get_attachment_url( $image['gallery_image'] );
						} else {
							$grid_image = BRIXEY_IMAGES.'/slide-placeholder.jpg';
						}

					$brixey_alt = get_post_meta( $image['gallery_image'], '_wp_attachment_image_alt', true);
					$title = $image['title'];
					$subtitle = $image['subtitle'];
					$subtitle_url = $image['subtitle_url'];
					$project_url = $image['project_url'];
					$button_txt = $image['button_txt'];
					if ( !empty($button_txt) ) {
						$button_txt = $button_txt;
					}	else {
						$button_txt = esc_html__( 'View Projects', 'brixey' );
					}
				?>
        <div class="swiper-slide" style="background-image:url(<?php echo esc_url( $grid_image ); ?>);">
          <div class="brxy-heading-wrap">
            <div class="brxy-table-container">
              <div class="brxy-align-container">
              	<?php if( !empty( $subtitle ) ){ ?>
                <div class="brxy-sub-heading">
                  <?php
                  $image_text = explode('<br>', nl2br($subtitle, false));
                  $image_url = explode('<br>', nl2br($subtitle_url, false));
                  if(!empty($image_url)) {
                    $meta_i = count($image_text);
                    $meta_u = count($image_url);
                    $meta_i = count($image_text);
                    $meta_u = count($image_url);
                    if ($meta_i > $meta_u) {
                      $image_text = array_slice($image_text, 0, count($image_url));
                    } elseif($meta_u > $meta_i) {
                      $image_url = array_slice($image_url, 0, count($image_text));
                    } else {
                      $image_text = $image_text;
                      $image_url = $image_url;
                    }
                    $totlal_info = array_combine($image_text, $image_url);
                      foreach ($totlal_info as $info => $url) {
                        echo '<a href="'.trim($url).'">'.trim($info).'</a> ';
                      }
                  } else {
                    foreach ( $image_text as $key => $info ) {
                      echo trim($info).' ';
                    }
                  }
                  ?>
                </div>
                <?php }
                	if( !empty( $title ) ){
                		echo '<div class="brxy-heading">'.$title.'</div>';
                	}
                	if ( !empty( $project_url ) ) {
                		echo '<div class="clearfix"><a href="'.$project_url.'" class="brxy-btn brxy-btn-small">'.esc_attr( $button_txt ).'</a></div>';
                	}
                ?>
              </div>
            </div>
          </div>
        </div>
				<?php }
				if( $slider_style == 'slider' ){ ?>
					<div class="swiper-button-prev"></div>
		      <div class="swiper-button-next"></div>
		      <div class="swiper-pagination"></div>
				<?php } }	?>
      </div>
    </div>
  <?php
    }
  echo '</div>';
  if ($home_layout == 'home_info') {
  	if ( have_posts() ) {
  		while ( have_posts() ) {
  			the_post();
  			the_content();
  		}
  	}
	}
get_footer();