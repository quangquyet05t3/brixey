<div class="col-lg-12">
    <?php
        $background = "background: url('".$url_blog."') center center no-repeat !important;";
        if(!$url_blog) {
            $background = "background: #0D99FB !important;";
        }

    ?>
    <div style="<?php echo $background; ?>" class="blog-article">
        <div class="row">
            <div class="col-lg-11">
                <h3><a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a></h3>
                <p>
                    <?php echo wp_trim_words(get_the_content(), 35) ?>
                </p>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="more-link">
                            <div class="row justify-content-start">
                                <div style="padding: 8px 0px 8px 48px;" class="col col-md-auto">
                                    <a href="<?php the_permalink() ?>">
                                    Đọc tiếp
                                    </a>
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