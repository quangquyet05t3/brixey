<?php get_header() ?>
<section id="contact">
    <div class="container">
        <div class="row text-center">
            <img width="797" height="600" src="/wp-content/themes/brixey/img/peng-contact-img.png" class="attachment-large size-large" alt="">
        </div>
    </div>
</section>
<?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>
<section id="contact-img">
    
</section>

<?php get_footer() ?>
