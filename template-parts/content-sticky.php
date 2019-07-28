<div class="feature-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3><?php the_title() ?></h3>
                <?php /*echo wp_trim_words(get_the_content(), 100) */?>

                <?php echo get_the_content(); ?>

                <div class="read-more">
                    <div class="container">
                        <div class="row">
                            <div class="read-more-arrow">
                                <div class="arrow icon">
                                </div>
                            </div>
                            <div class="read-more-button">
                                <a href="<?php the_permalink() ?>">
                                    <button type="button" class="btn btn-dark">Đọc thêm</button>
                                </a>
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