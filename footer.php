<section id="social">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-auto">
                <h3>FOLLOW PENG JOON ON SOCIAL MEDIA</h3>
            </div>
        </div>
        <div class="row justify-content-around social-area">
            <div class="col-lg-2">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-fb.png" />
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <h5>FACEBOOK</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-diagram.png" />
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <h5>INSTAGRAM</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube.png" />
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-auto">
                            <h5>YOUTUBE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="form-footer">
    <div class="container">
        <div class="row">
            <div class="video-content-image">
                <img src="/wp-content/uploads/2019/05/hinhdaidien-copy-e1559142553844.png" />
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="video-content-text">
                        <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                        <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                    </div>
                    <form id="form-info3" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
                    <div class="row">
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Họ tên" name="full_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Số điện thoại" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="hidden" name="action" value="submit_info">
                                    <button type="submit" class="btn btn-danger">Nhận ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <?php

            wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 1,
                    'container' => '',
                    'items_wrap' => '%3$s' ,
                    'walker' => new WP_Footer_Navwalker()
                )
            );

            ?>
        </div>
        <div class="row justify-content-center">
            Peng Joon © 2018 - Terms of Use & Privacy Policy
        </div>
    </div>
</section>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="/wp-includes/js/jquery/jquery.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/tether/dist/js/tether.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/js/holder.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/brixey.js"></script>
<?php /*wp_footer()*/ ?>

</body>
</html>