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
                <?php
                $image = get_the_post_thumbnail();
                if(empty($image)) {
                    $image = '<img width="1920" height="1080" src="'.get_template_directory_uri().'/img/no-image.png'.'" class="mr-3 post-small img-thumbnail wp-post-image" alt="" srcset="http://cacanh.local/wp-content/uploads/2017/06/zoom-image-5.jpg 1920w, http://cacanh.local/wp-content/uploads/2017/06/zoom-image-5-300x169.jpg 300w, http://cacanh.local/wp-content/uploads/2017/06/zoom-image-5-768x432.jpg 768w, http://cacanh.local/wp-content/uploads/2017/06/zoom-image-5-1024x576.jpg 1024w" sizes="(max-width: 1920px) 100vw, 1920px">';
                    echo $image;
                } else {
                    the_post_thumbnail('post-small',['class'=>'mr-3 post-small img-thumbnail']);
                }

                ?>
            </div>
        </div>
    </div>
</div>