<div class="feature-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3><?php echo get_the_title(); ?></h3>
                <h4>
                    <?php echo wp_trim_words(get_the_content(), 20) ?>
                </h4>
                <p class="lead">
                    <?php /*echo wp_trim_words(get_the_content(), 12) */?>
                </p>
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
            <div class="col-lg-6">
                <?php the_post_thumbnail('post-small',['class'=>'mr-3 post-small img-thumbnail']) ?>
                <!--<img src="<?php /*echo get_template_directory_uri(); */?>/img/article-img.png" alt="macbook">-->
            </div>
        </div>
    </div>
</div>