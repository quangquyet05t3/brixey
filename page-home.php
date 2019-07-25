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
    <div class="feature-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="video-content-text">
                        <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                        <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                    </div>
                    <form id="form-info2" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
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
                                    <input class="form-control" type="text" placeholder="Số điện thoại" name="phone">
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
                                    <button type="submit" class="btn btn-danger">Nhận ngay</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<!--Meet Peng Joon-->

<?php
$args = [
    'type' => 'post',
    'posts_per_page' => 1,
    'post__in'  => get_option( 'sticky_posts' )  // Get article with sticky
];
$the_query = new WP_Query($args);
?>
<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="carousel-item <?php echo $the_query->current_post == 1 ? 'active' : ''  ?>">
            <?php the_post_thumbnail('blog-thumbnail',['class'=>'fuild-img']) ?>
            <h3><a href="<?php the_permalink() ?>"><?php echo wp_trim_words( get_the_title() , 12 ) ?></a></h3>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

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
                <div class="alert alert-danger" role="alert">
                    <strong>Có lỗi xảy ra!</strong> Vui lòng kiểm tra lại thông tin.
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>