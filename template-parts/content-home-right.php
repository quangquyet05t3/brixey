<div class="feature-content home-desktop">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3><?php echo get_the_title(); ?></h3>
                <h4>
                    <?php echo wp_trim_words(get_the_content(), 35) ?>
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
                <?php
                $image = get_the_post_thumbnail();
                if(empty($image)) {
                    $image = '<img width="1920" height="1080" src="/wp-content/themes/brixey/img/no-image.png" class="mr-3 post-small img-thumbnail wp-post-image">';
                    echo $image;
                } else {
                    the_post_thumbnail('post-small',['class'=>'']);
                }

                ?>
            </div>
        </div>
    </div>
</div>