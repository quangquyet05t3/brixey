<?php
/*
 * Template Name: About Me
 * Author & Copyright: VictorThemes
 * URL: https://victorthemes.com
 */
get_header();
// Metabox
$brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
$brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
$brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
$brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
$contact_meta  = get_post_meta( $brixey_id, 'about_page_metabox', true );
// Background - Type
if( $contact_meta && isset( $contact_meta['about_page_bg'] ) ) {
  extract( $contact_meta['about_page_bg'] );
  $brixey_background_image       = ( ! empty( $image ) ) ? 'background-image: url(' . $image . ');' : 'background-image: url(' .get_template_directory_uri().'/assets/images/backgrounds/bg8.png);';
  $brixey_background_repeat      = ( ! empty( $image ) && ! empty( $repeat ) ) ? ' background-repeat: ' . $repeat . ';' : '';
  $brixey_background_position    = ( ! empty( $image ) && ! empty( $position ) ) ? ' background-position: ' . $position . ';' : '';
  $brixey_background_size    = ( ! empty( $image ) && ! empty( $size ) ) ? ' background-size: ' . $size . ';' : '';
  $brixey_background_attachment    = ( ! empty( $image ) && ! empty( $size ) ) ? ' background-attachment: ' . $attachment . ';' : '';
  $brixey_background_color       = ( ! empty( $color ) ) ? ' background-color: ' . $color . ';' : '';
  $brixey_background_style       = ( ! empty( $image ) ) ? $brixey_background_image . $brixey_background_repeat . $brixey_background_position . $brixey_background_size . $brixey_background_attachment : '';
  $brixey_title_bg = ( ! empty( $brixey_background_style ) || ! empty( $brixey_background_color ) ) ? $brixey_background_style . $brixey_background_color : '';
} else {
  $brixey_title_bg = '';
}

?>
  <!-- brxy about me -->
  <div class="brxy-about-me">
    <div class="col-md-6">
      <div class="about-picture" style="<?php echo esc_attr( $brixey_title_bg ); ?>"></div>
    </div>
    <div class="col-md-6">
      <div class="about-me-info">
        <div class="vertical-scroll">
          <?php
          if ( have_posts() ) {
          	while ( have_posts() ) {
          		the_post();
          		the_content();
          	}
          } else {
          	get_template_part( 'layouts/post/content', 'none' );
          }
          ?>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
