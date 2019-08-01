<?php get_header() ?>

<section id="about">
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
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
