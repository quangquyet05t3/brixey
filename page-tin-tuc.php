<?php get_header() ?>
<section id="news">
    <div class="container">
        <div id="blog-row" class="row align-items-center">
            <div class="col-2">
            </div>
            <div class="col-4">
                <h1>Tin tức</h1>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
</section>

<section id="thinking">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <h3>Thinking of joining us at our next LIVE event?</h3>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <div class="read-more">
                    <div class="container">
                        <div class="row">
                            <div class="read-more-arrow">
                                <div class="arrow icon">
                                </div>
                            </div>
                            <div class="read-more-button">
                                <a href="<?php the_permalink() ?>">
                                    <button type="button" class="btn btn-light">Đọc thêm</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <p>
                    <b>Nếu có câu hỏi ?</b> Vui lòng gửi mail cho chúng tôi theo địa chỉ email <a>support@smobble.com</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
$category_name = 'tin-tuc';
$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$post_per_page = get_option('posts_per_page');

$args = array(
    'post_type' => 'post',
    'category_name' => $category_name,
    'posts_per_page' => $post_per_page,
    'paged' => $paged,
);
$lastBlog = new WP_Query($args);
$index = 0;
if( $lastBlog->have_posts() ):
    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
        <section class="news-img">
            <img src="<?php echo get_template_directory_uri()."/img/tin-tuc-random".($index).".jpg"; ?>" >
        </section>

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

<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
