<?php get_header() ?>


<?php if ( wp_is_mobile() ) {?>
    <section id="blog-mb">
        <img src="<?php echo get_template_directory_uri(); ?>/img/peng-contact-img.png" class="mb-img" alt="">
            <h1>Blog</h1>
    </section>
<?php } else { ?>
    <section id="blog">
        <div class="container">
            <div id="blog-row" class="row align-items-center">
                <div class="col">
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </section>
<?php }?>

<section id="blog-content">
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div id="blog-left" class="col-lg-8">
                    <?php
                    $args = array('post_type' => 'blog', 'posts_per_page' => 6 );
                    $lastBlog = new WP_Query( $args );
                    ?>
                    <div class="row">
                        <?php
                        if( $lastBlog->have_posts() ):

                            while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                                <?php
                                    $url_blog = get_the_post_thumbnail_url(null, 'blog-thumbnail');
                                    set_query_var( 'url_blog', $url_blog );
                                    get_template_part('template-parts/content-archive-blog', get_post_format());
                                ?>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>

                    <div class="row justify-content-center">
                        <?php brixey_pagination($lastBlog) ?>
                    </div>
                </div>

                <div id="blog-right" class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Recent Posts</h1>
                        </div>

                        <?php
                        $args = array('post_type' => 'blog', 'posts_per_page' => 10 );
                        $recentBlog = new WP_Query( $args );
                        ?>
                        <?php
                        if( $recentBlog->have_posts() ):

                            while( $recentBlog->have_posts() ): $recentBlog->the_post(); ?>
                                <?php
                                $url_blog = get_the_post_thumbnail_url(null, 'blog-small');
                                ?>

                                <div class="col-sm-12">
                                    <div class="row justify-content-md-start row-right">
                                        <div class="col col-lg-3">
                                            <img src="<?php echo $url_blog; ?>" width="70" height="70">
                                        </div>
                                        <div class="col-9">
                                            <h6>
                                                <a href="<?php the_permalink() ?>">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 blog-right">

                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>

                        <div class="col-sm-12 p-3">
                            <h1>Tìm kiếm</h1>
                            <div class="flex-container">
                                <input class="form-control input-field" type="search" placeholder="Tìm kiếm">
                                <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/img/search-btn.jpg" alt="Search Icon"></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
