<?php get_header() ?>
<!-- The video -->
<?php
    $videoUrl = get_template_directory_uri().'/video/home.mp4';
?>
<section>
    <header id="video" class="hidden-md-down">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo $videoUrl; ?>" type="video/mp4">
        </video>
        <div class="row">
            <div class="col-md-12 video-top">

            </div>
            <div class="col-md-12 video-content" style="background: url('<?php echo get_template_directory_uri(); ?>/img/optin-bar-bg.png")  center center no-repeat;'>
            <div class="container">
                <div class="row">
                    <div class="video-content-image">
                        <img src="/wp-content/uploads/2019/05/hinhdaidien-copy-e1559142553844.png" />
                    </div>
                    <div class="row">
                        <div class="col-md-12 video-content-block">
                            <div class="video-content-text">
                                <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                                <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Họ tên" id="full_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Số điện thoại"  id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-danger">Nhận ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <header id="image">
        <div class="row">
            <div class="col-lg-12">
                <img src="<?php echo get_template_directory_uri(); ?>/img/video-bg.jpg"); ?>">
            </div>
    </header>
</section>



<!--Meet Peng Joon-->
<section id="home-one">
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Meet Peng Joon</h3>
                    <h5>
                        Peng Joon is recognized as the authority on how to make big money through the internet.
                    </h5>
                    <p>
                        In less than 7 years, he has built an 8 figure business through his websites. Over the years, Peng Joon has refined his 5 step system that has helped thousands monetize their passion, earn passive income online and live the dot com lifestyle. His system has been widely regarded as the most strategic and innovative approach to growing an online empire.
                    </p>
                    <p>
                        As one of the most requested speakers in the world, Peng Joon has shared the stage with Richard Branson,  Tony Robbins, Robert Kiyosaki and many other thought leaders of this era.
                    </p>

                    <div class="read-more">
                        <div class="container">
                            <div class="row">
                                <div class="read-more-arrow">
                                    <div class="arrow icon">
                                    </div>
                                </div>
                                <div class="read-more-button">
                                    <button type="button" class="btn btn-dark">Đọc thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </div>
</section>

<!----------Article--------->

<?php
    wp_reset_postdata();

    $query = array(
        'type' => 'post',
        'posts_per_page' => 6,
        'offset' => 1,
    );

    $lastPost = new WP_Query($query);
    $index = 1;
    if( $lastPost->have_posts() ):

        while( $lastPost->have_posts() ): $lastPost->the_post(); ?>
        <?php $sectionId = sprintf('home-%s', $index ); ?>
        <?php $tempPart = $index%2==1? 'template-parts/content-home-left': 'template-parts/content-home-right'; ?>
            <section id="<?php echo $sectionId; ?>">
                <?php get_template_part($tempPart, get_post_format()); ?>
            </section>

        <?php $index++; ?>

        <?php endwhile;

    endif;

    wp_reset_postdata();


?>

<section id="social">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <h3>FOLLOW PENG JOON ON SOCIAL MEDIA</h3>
            </div>
        </div>
        <div class="row justify-content-around social-area">
            <div class="col-lg-2">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-fb.png" />
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <h5>FACEBOOK</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-diagram.png" />
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <h5>INSTAGRAM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.png" />
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <h5>YOUTUBE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form-footer">
    <div class="container">
        <div class="row">
            <div class="video-content-image">
                <img src="/wp-content/uploads/2019/05/hinhdaidien-copy-e1559142553844.png" />
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="video-content-text">
                        <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                        <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                    </div>

                    <div class="row">
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Họ tên" id="full_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Số điện thoại"  id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-danger">Nhận ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>