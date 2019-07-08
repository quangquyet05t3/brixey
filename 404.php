<?php
/*
 * The template for displaying 404 pages (not found).
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */

// Theme Options
$brixey_error_heading = cs_get_option('error_heading');
$brixey_error_page_content = cs_get_option('error_page_content');
$brixey_error_page_bg = cs_get_option('error_page_bg');
$brixey_error_btn_text = cs_get_option('error_btn_text');

$brixey_error_heading = ( $brixey_error_heading ) ? $brixey_error_heading : esc_html__( '404', 'brixey' );
$brixey_error_page_content = ( $brixey_error_page_content ) ? $brixey_error_page_content : esc_html__( 'The page you request could not be found', 'brixey' );
$brixey_error_page_bg = ( $brixey_error_page_bg ) ? wp_get_attachment_url($brixey_error_page_bg) : BRIXEY_IMAGES . '/404.png';
$brixey_error_btn_text = ( $brixey_error_btn_text ) ? $brixey_error_btn_text : esc_html__( 'Back to Home', 'brixey' );

get_header(); ?>
  <!-- brxy 404 error -->
  <div class="brxy-404-error" style="background-image: url(<?php echo esc_url($brixey_error_page_bg); ?>);">
    <div class="container">
      <div class="brxy-container">
        <h1 class="error-title"><?php echo esc_attr($brixey_error_heading); ?></h1>
        <h3 class="error-sub-title"><?php echo esc_attr($brixey_error_page_content); ?></h3>
        <div class="clearfix"><a href="<?php echo esc_url(home_url( '/' )); ?>" class="brxy-btn"><?php echo esc_attr($brixey_error_btn_text); ?></a></div>
      </div>
    </div>
  </div>
<?php
get_footer();
