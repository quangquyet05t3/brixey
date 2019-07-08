<?php
  // Main Text
  $brixey_need_copyright = cs_get_option('need_copyright');
  $brixey_footer_copyright_layout = cs_get_option('footer_copyright_layout');
  $brixey_id    = ( isset( $post ) ) ? $post->ID : 0;
  $brixey_id    = ( is_home() ) ? get_option( 'page_for_posts' ) : $brixey_id;
  $brixey_id    = ( is_woocommerce_shop() ) ? wc_get_page_id( 'shop' ) : $brixey_id;
  $brixey_meta  = get_post_meta( $brixey_id, 'page_type_metabox', true );
  if ($brixey_footer_copyright_layout === 'copyright-1') {
    $brixey_copyright_layout_class = 'col-sm-6';
    $brixey_copyright_seclayout_class = 'text-right';
  } elseif ($brixey_footer_copyright_layout === 'copyright-2') {
    $brixey_copyright_layout_class = 'col-sm-6 pull-right text-right';
    $brixey_copyright_seclayout_class = 'text-left';
  } elseif ($brixey_footer_copyright_layout === 'copyright-3') {
    $brixey_copyright_layout_class = 'col-sm-12 text-center';
  } else {
    $brixey_copyright_layout_class = '';
    $brixey_copyright_seclayout_class = '';
  }
if ($brixey_meta && isset($brixey_meta['copyright_layout']) ) {
  $copyright_layout  = $brixey_meta['copyright_layout'];
} else { $copyright_layout = ''; }

if (!empty($copyright_layout)) {
  $copyright_layout = $copyright_layout;
} else {
  $copyright_layout = cs_get_option('copyright_layout');
}

  if (isset($brixey_need_copyright)) {
?>

<!-- Copyright Bar -->
<div class="brxy-secondary-footer">
  <div class="secondary-footer-wrap <?php echo esc_attr($copyright_layout); ?>">
    <div class="container">
      <div class="row">
        <div class="<?php echo esc_attr($brixey_copyright_layout_class); ?>">
          <div class="brxy-copyright">
            <?php
              $brixey_copyright_text = cs_get_option('copyright_text');
              echo do_shortcode($brixey_copyright_text);
            ?>
          </div>
        </div>
        <?php if ($brixey_footer_copyright_layout != 'copyright-3') { ?>
        <div class="col-sm-6 <?php echo esc_attr($brixey_copyright_seclayout_class); ?>">
          <?php
            $brixey_secondary_text = cs_get_option('secondary_text');
            echo do_shortcode($brixey_secondary_text);
          ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- Copyright Bar -->
<?php }
