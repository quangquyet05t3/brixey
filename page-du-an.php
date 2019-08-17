<?php get_header() ?>

<?php


$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$post_per_page = get_option('posts_per_page');
$args = array(
    'category_name' => 'du-an',
    'post_type' => 'post',
    'posts_per_page' => $post_per_page,
    'paged' => $paged,
);

$lastBlog = new WP_Query($args);

if( $lastBlog->have_posts() ):

    while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

        <?php the_title(); ?>
        <br>

    <?php endwhile;

endif;



wp_reset_postdata();


?>

<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
