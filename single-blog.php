<?php get_header() ?>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>
        <?php $url_blog_large = get_the_post_thumbnail_url(null, 'blog-large'); ?>
        <section id="single-post-banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="row-title">
                        <img src="/wp-content/themes/brixey/img/single-divider.png" alt="">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="content-block">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div id="blog-right" class="col-sm-12 col-lg-4">
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
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<style>
    #single-post-banner-wrapper{
        background-image: url("<?php echo $url_blog_large; ?>");
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
        padding: 280px 18px 45px;
        text-align: center;
        color: #fff;
        position: relative;
    }
</style>
<?php get_footer() ?>
