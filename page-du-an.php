<?php get_header() ?>

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
        <?php if ( wp_is_mobile() ) {?>
            <section id="about-mb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg-about-mb.jpg" class="mb-img" alt="">
            </section>
            <section id="about">
                <?php get_template_part('template-parts/content-sticky', get_post_format()); ?>
            </section>
        <?php } else { ?>
            <section id="about">
                <?php get_template_part('template-parts/content-sticky', get_post_format()); ?>
            </section>
        <?php }?>
        
    <?php endwhile; ?>
    <?php
}
?>

<?php
    if( have_posts() ):
        while( have_posts() ): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>

<?php get_footer() ?>
