<?php get_header() ?>


<section id="content">
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
</section>

<?php get_footer() ?>
