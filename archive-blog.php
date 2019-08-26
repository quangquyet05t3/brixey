<?php get_header() ?>
<?php

$args = array('post_type' => 'blog', 'posts_per_page' => 3 );
$loop = new WP_Query( $args );

if( $loop->have_posts() ):

    while( $loop->have_posts() ): $loop->the_post(); ?>

        <?php the_title(); ?>
        <br>

    <?php endwhile;

endif;
die;
?>

<section id="blog">
    <div class="container">
        <div id="blog-row" class="row align-items-center">
            <div class="col">
                <h1>Blog</h1>
            </div>
        </div>
    </div>
</section>

<section id="blog-content">
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div id="blog-left" class="col-lg-8">
                    <div class="row">
                        <?php for($i=0; $i<=2; $i++) : ?>
                            <div class="col-lg-12">
                                <div class="blog-article">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <h3>The Reason Why I Played A Bigger Game</h3>
                                            <p>
                                                We all have a reason why we do what we do. My parents are one of the reasons that I constantly choose to play a bigger game. They were at my 5 day retreat in Bali recently. What makes me proudest is having my parents sitting at the …
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="more-link">
                                                        <div class="row justify-content-start">
                                                            <div style="padding: 8px 0px 8px 48px;" class="col col-md-auto">
                                                                Đọc tiếp
                                                            </div>
                                                            <div class="col col-md-auto">
                                                                <div class="arrow icon" style="margin-top: 14px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="row blog-share">
                                                        <h4>Share:  </h4>
                                                        <a class="nav-link-blog" href="https://www.facebook.com/txv.architects/">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/fb-blog-icon.jpg" />
                                                        </a>
                                                        <a class="nav-link-blog" href="https://www.instagram.com/txv.arc">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-blog-twitter.png" />
                                                        </a>
                                                        <a class="nav-link-blog" href="https://www.youtube.com/watch?v=fbQSFoG8t_8">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-blog-google-plus.png" />
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor;  ?>




                    </div>

                    <div class="row justify-content-center">
                        <?php

                        $args = array(
                            'post_type' => 'post',
                            'category_name' => $category_name,
                            'posts_per_page' => $post_per_page,
                            'paged' => $paged,
                        );
                        $lastBlog = new WP_Query($args);

                        ?>

                        <?php brixey_pagination($lastBlog) ?>
                    </div>
                </div>

                <div id="blog-right" class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Recent Posts</h1>
                        </div>
                        <?php for($i=0;$i<=5;$i++) : ?>
                            <div class="col-sm-12">
                                <div class="row justify-content-md-center row-right">
                                    <div class="col col-lg-3">
                                        <img src="/wp-content/uploads/2019/08/blog-avatar.jpg" width="70" height="70">
                                    </div>
                                    <div class="col-9 col-md-auto">
                                        <h6>
                                            The Reason Why I Played A Bigger Game
                                        </h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 blog-right">

                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>

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
