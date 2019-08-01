<?php get_header() ?>
<section id="contact">
    <div class="section-content">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <div class="contact-text">
                        <?php
                        if( have_posts() ):
                            while( have_posts() ): the_post(); ?>
                                <?php get_template_part('template-parts/content-single',get_post_format()); ?>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
