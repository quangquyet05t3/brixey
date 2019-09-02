<?php get_header() ?>
<section id="media-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3>Giới thiệu</h3>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
</section>

<section class="featured">
    <div class="container">
        <div class="featured-box-image">
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo1.jpg" class="featured-abc size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo2.jpg" class="featured-idk size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" class="featured-fox size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo4.png" class="featured-cbs size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo5.jpg" class="featured-goodday size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo6.png" class="featured-sandiego size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo7.jpg" class="featured-nbc size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo8.jpg" class="featured-blend size-full" alt="">
                </a>
            </div>
            <div class="featured-image">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo9.png" class="featured-foxnews size-full" alt="">
                </a>
            </div>
        </div>
    </div>
</section>


<?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>

<?php
$category_name = 'video';
$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$post_per_page = 10;

$list_video = array();

$args = array(
    'post_type' => 'post',
    'category_name' => $category_name,
    'posts_per_page' => $post_per_page
);
$lastBlog = new WP_Query($args);
$current_year = date('Y', time());
$previous_year = (string) (((int)$current_year)-1);
if( $lastBlog->have_posts() ):
    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
        <?php

        list(, , $year) = explode('/', get_the_date());
        $list_video[$year][] = array(
            'year' => $year,
            'title' => get_the_title(),
            'embed_youtube' => get_field('embed_youtube')
        );
        ?>
    <?php endwhile;
endif;
wp_reset_postdata();
krsort($list_video);


?>
<section id="media-photo">
    <div class="container media-video">
        <div class="row" ">
        <div class="media-press_img">
            <h2>
                <b></b>
                <span>VIDEOS</span>
                <b></b>
            </h2>
        </div>
    </div>
    <div class="row" style="margin-top:50px;">
        <?php foreach ($list_video as $year=>$items): ?>
            <?php foreach ($items as $item): ?>
                <div class="col-lg-6">
                    <div class="media-video-box">
                        <?php echo $item['embed_youtube']; ?>
                        <div class="media-video-text">
                            <h2><?php echo $item['title']; ?></h2>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
