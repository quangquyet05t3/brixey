<?php get_header() ?>
<span class="youtube-link" youtubeid="yPu6qV5byu4">Open Video</span>


<?php get_footer() ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grt-youtube-popup.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/grt-youtube-popup.js"></script>
<script>
    jQuery(".youtube-link").grtyoutube({ autoPlay:false });
</script>
