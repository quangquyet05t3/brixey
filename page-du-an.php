<?php get_header() ?>

<!--Meet Peng Joon-->
<?php
$article1 = $article2 = $article3 = '';

if( have_posts() ):
    while( have_posts() ): the_post(); ?>
        <?php
        $content = get_the_content();
        $content = str_replace(
            array('<!-- wp:paragraph -->', '<!-- /wp:paragraph -->', '<p></p>'),
            array('', '', ''),
            $content
        );
        $articles = new SimpleXMLElement($content);
        $article1 = (isset($articles->article[0])) ? $articles->article[0] : '';
        $article2 = (isset($articles->article[1])) ? $articles->article[1] : '';
        $article3 = (isset($articles->article[2])) ? $articles->article[2] : '';
        $article4 = (isset($articles->article[3])) ? $articles->article[3] : '';

        ?>
    <?php endwhile;
endif;
wp_reset_postdata();

?>
<section id="about-market">
    <div class="container">
        <div class="row">
            <div class="about-market_box">
                <h2><?php echo $article1->h2; ?></h2>
                <?php
                foreach ($article1->item as $p) {
                    echo '<p>'.$p.'</p>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section id="about-event">
</section>
<section id="about-successfully">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">
                <h3><?php echo $article2->h3; ?></h3>
                <h5><?php echo $article2->h5; ?></h5>
                <?php
                    foreach ($article2->item as $p) {
                        echo '<p>'.$p.'</p>';
                    }
                ?>
            </div>

        </div>
    </div>
</section>
<section id="about-event_time">
</section >
<section id="about-programs">
    <div class="container">
        <div class="row">
            <div class="about-programs_box">
                <h2><?php echo $article3->h2; ?></h2>
                <div class="row">
                    <div class="about-programs_elementor">
                        <div class="col-lg-2 col-sm-3">
                            <img src="/wp-content/themes/brixey/img/monitor-icon.png" alt="">
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <p><?php echo $article3->item[0]; ?></p>
                        </div>
                    </div>
                    <div class="about-programs_elementor">
                        <div class="col-lg-2 col-sm-3">
                            <img src="/wp-content/themes/brixey/img/dollar-icon.png" alt="">
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <p><?php echo $article3->item[1]; ?></p>
                        </div>
                    </div>
                    <div class="about-programs_elementor">
                        <div class="col-lg-2 col-sm-3">
                            <img src="/wp-content/themes/brixey/img/globe-icon.png"  alt="">
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <p><?php echo $article3->item[2]; ?></p>
                        </div>
                    </div>
                    <div class="about-programs_elementor">
                        <div class="col-lg-2 col-sm-3">
                            <img src="/wp-content/themes/brixey/img/mic-icon.png"  alt="">
                        </div>
                        <div class="col-lg-10 col-sm-9">
                            <p><?php echo $article3->item[3]; ?>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-famous">
</section >
<section id="about-seemore">
    <div class="container">
        <div class="row">
            <?php echo $article4->item->asXML(); ?>
        </div>
        <div class="row justify-content-center">
            <div class="read-more-services">
                <div class="container">
                    <div class="row">
                        <div class="read-more-arrow">
                            <div class="arrow icon">
                            </div>
                        </div>
                        <div class="read-more-button">
                            <a href="/dich-vu/">
                                <button type="button" class="btn btn-light">Xem thêm dịch vụ</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section >
<?php brixey_pagination($lastBlog) ?>

<?php get_footer() ?>
