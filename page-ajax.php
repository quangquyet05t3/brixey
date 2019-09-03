<?php get_header(); ?>

<form id="quyet-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <input type="text" class="field-input" placeholder="Your Name" id="yourname" name="yourname">
    <br>

    <input type="email" class="field-input" placeholder="Your Email" id="youremail" name="youremail">

    <button type="submit" class="btn btn-default btn-lg btn-sunset-form">Submit</button>
    <input type="hidden" name="action" value="submit_quyet">
</form>

<?php get_footer(); ?>