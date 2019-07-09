<?php /*get_header() */?>
<!-- Bootstrap CSS -->
<link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" >

<!-- The video -->

<?php
    $videoUrl = get_template_directory_uri().'/video/home.mp4';
?>
<video autoplay muted loop id="myVideo">
    <source src="<?php echo $videoUrl; ?>" type="video/mp4">
</video>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="video-content-image">
                <img src="/wp-content/uploads/2019/05/hinhdaidien-copy-e1559142553844.png" />
            </div>
            <div class="row video-content">
                <div class="col-md-12">
                    <div class="video-content-text">
                        <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                        <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-12">
                                        <input class="form-control" type="text" placeholder="Họ tên" id="full_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Số điện thoại"  id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" placeholder="Email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Nhận ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Use a button to pause/play the video with JavaScript -->
    <!--<button id="myBtn" onclick="myFunction()">Pause</button>-->
</div>



    <!--<div class="row">
        <div class="col-md-8">
            .col-md-8
            <div class="row">
                <div class="col-md-6">.col-md-6</div>
                <div class="col-md-6">.col-md-6</div>
            </div>
        </div>
        <div class="col-md-4">.col-md-4</div>
    </div>-->








<!--Script to get the video-->
<script>
    // Get the video
    var video = document.getElementById("myVideo");

    // Get the button
    var btn = document.getElementById("myBtn");

    // Pause and play the video, and change the button text
    function myFunction() {
        if (video.paused) {
            video.play();
            btn.innerHTML = "Pause";
        } else {
            video.pause();
            btn.innerHTML = "Play";
        }
    }
</script>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="<?php echo get_template_directory_uri() ?>/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/tether/dist/js/tether.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/js/holder.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<?php /*get_footer() */?>