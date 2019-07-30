<?php get_header() ?>

<?php
$category_name = $wp_query->get('category_name');
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