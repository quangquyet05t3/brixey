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
                            <form id="form-info" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                            <div class="row">
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Họ tên" name="full_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Số điện thoại"  name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input type="hidden" name="action" value="submit_info">
                                            <button id="btnSubmitInfo" type="submit" class="btn btn-danger">Nhận ngay</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
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

<section id="form-header">
    <form id="form-info2" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-content-text">
                        <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                        <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                    </div>
                </div>

                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Họ tên" name="full_name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Số điện thoại" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group row">
                            <div class="col-12">
                                <input type="hidden" name="action" value="submit_info">
                                <button type="submit" class="btn btn-danger">Nhận ngay</button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
    </form>
</section>

<!--Meet Peng Joon-->
<?php
if(!empty(get_option( 'sticky_posts' ))) {
    $args = [
        'type' => 'post',
        'posts_per_page' => 1,
        'post__in'  => get_option( 'sticky_posts' )  // Get article with sticky
    ];
    $the_query = new WP_Query($args);
    ?>
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <section id="home-one">
            <?php get_template_part('template-parts/content-sticky', get_post_format()); ?>
        </section>
    <?php endwhile; ?>
    <?php
}
?>

<!----------Featured--------->

<section class="featured">
    <div class="container">
        <h2 class="featured-title">Nổi bật</h2>
        <div class="featured-box-image">
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/abc-icon.png" class="featured-abc size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/idk-icon.png" class="featured-idk size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/fox-news-icon.png" class="featured-fox size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/cbs-icon.png" class="featured-cbs size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/good-day-icon.png" class="featured-goodday size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/san-diego-living-icon.jpg" class="featured-sandiego size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/nbc-icon.jpg" class="featured-nbc size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/the-morning-blend-icon.png" class="featured-blend size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="https://pengjoon.com/wp-content/uploads/2017/12/fox-news-sandiego-icon.png" class="featured-foxnews size-full" alt="">
                </a>
            </div>
        </div>
    </div>
</section>


<div class="product-box">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path>
    </svg>
    <div class="product-title">
        <h2>Sản phẩm</h2>
    </div>
</div>
<!----------Article--------->
<?php
    wp_reset_postdata();

    $query = array(
        'type' => 'post',
        'posts_per_page' => 6,
        'post__not_in' => get_option( 'sticky_posts' )
    );

    $lastPost = new WP_Query($query);
    $index = 1;
    if( $lastPost->have_posts() ):
        while( $lastPost->have_posts() ): $lastPost->the_post(); ?>
            <?php $sectionId = sprintf('home-%s', $index ); ?>
            <?php $tempPart = ($index%2==1)? 'template-parts/content-home-left': 'template-parts/content-home-right'; ?>
                <section id="<?php echo $sectionId; ?>">
                    <?php get_template_part($tempPart, get_post_format()); ?>
                </section>
            <?php $index++; ?>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>

<!--Modal Waiting-->
<div id="modal-waiting" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div>
                <div class="progress">
                    Đang xử lý...
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal Result-->
<div id="modal-result" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    <strong>Xin chúc mừng!</strong> Bạn đã đăng ký thành công. Chúng tôi đã gửi email đến bạn.
                </div>
                <div id="error-message" class="alert alert-danger" role="alert">
                    <strong>Có lỗi xảy ra!</strong> Vui lòng kiểm tra lại thông tin.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<section class="blog-post">
    <div class="container">
        <h2>Bài viết mới</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 blog-post-box">
                <div class="blog-post_card">
                    <a href="">
                        <div class="blog-post_thumnail">
                            <img src="https://pengjoon.com/wp-content/uploads/13-1.jpg" class="" alt="">
                        </div>
                    </a>
                    <div class="blog-post_text">
                        <h3 class="blog-post_title">
                            <a href="">
                                What I Believe
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-post-box">
                <div class="blog-post_card">
                    <a href="">
                        <div class="blog-post_thumnail">
                            <img src="https://pengjoon.com/wp-content/uploads/12-1.jpg" class="" alt="">
                        </div>
                    </a>
                    <div class="blog-post_text">
                        <h3 class="blog-post_title">
                            <a href="">
                                7 Figures and Still Poor
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-post-box">
                <div class="blog-post_card">
                    <a href="">
                        <div class="blog-post_thumnail">
                            <img src="https://pengjoon.com/wp-content/uploads/2017/03/feat-post-thumb2.jpg" class="" alt="">
                        </div>
                    </a>
                    <div class="blog-post_text">
                        <h3 class="blog-post_title">
                            <a href="">
                                When Should I Quit My Job?
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-post-box">
                <div class="blog-post_card">
                    <a href="">
                        <div class="blog-post_thumnail">
                            <img src="https://pengjoon.com/wp-content/uploads/2018/01/Peng-Joon-on-Fox-5-San-Diego.jpg" class="" alt="">
                        </div>
                    </a>
                    <div class="blog-post_text">
                        <h3 class="blog-post_title">
                            <a href="">
                                What Is Wrong With My Name?
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-post-box">
                <div class="blog-post_card">
                    <a href="">
                        <div class="blog-post_thumnail">
                            <img src="https://pengjoon.com/wp-content/uploads/Thailand.jpg" class="" alt="">
                        </div>
                    </a>
                    <div class="blog-post_text">
                        <h3 class="blog-post_title">
                            <a href="">
                                What I Did That You Don’t Want To Do
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 blog-post-box">
                <div class="blog-post_card">
                    <a href="">
                        <div class="blog-post_thumnail">
                            <img src="https://pengjoon.com/wp-content/uploads/Tony-Robbins.jpg" class="" alt="">
                        </div>
                    </a>
                    <div class="blog-post_text">
                        <h3 class="blog-post_title">
                            <a href="">
                                Pay The Price or Be Average
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="read-more">
        <div class="container">
            <div class="row">
                <div class="read-more-arrow">
                    <div class="arrow icon">
                    </div>
                </div>
                <div class="read-more-button">
                    <a href="https://tranxuanvan.com/the-5-secrets-to-pulling-off-simple-minimal-design/">
                        <button type="button" class="btn btn-light">Xem thêm bài viết mới</button>
                    </a>
                </div>
            </div>
        </div>
    </div>    
    </div>

</section>
<?php get_footer() ?>