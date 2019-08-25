<?php get_header() ?>

<section id="project">
    <div class="container">
        <div id="blog-row" class="row align-items-center">
            <div class="col-6">
            </div>
            <div class="col-6">
                <h1>Dịch vụ</h1>
            </div>
        </div>
    </div>
</section>

<div class="product-box">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" d="M500,98.9L0,6.1V0h1000v6.1L500,98.9z"></path>
    </svg>
    <div class="product-title">
        <h3>Sản phẩm</h3>
    </div>
</div>


<?php
$category_name = 'dich-vu';
$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$post_per_page = get_option('posts_per_page');

$args = array(
    'post_type' => 'post',
    'category_name' => $category_name,
    'posts_per_page' => $post_per_page,
    'paged' => $paged,
);
$lastBlog = new WP_Query($args);
$index = 1;
if( $lastBlog->have_posts() ):
    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
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
