<?php /*get_header() */?>
<!-- Bootstrap CSS -->
<link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" >

<style type="text/css">
    .content {
        position: fixed;
        bottom: 0;
        background: url("<?php echo get_template_directory_uri(); ?>/img/optin-bar-bg.png")  center center no-repeat;
        background-size: cover;
        color: #f1f1f1;
        width: 100%;
        padding: 50px 0px 20px;
        height: 250px;
    }
</style>

<!--Section Nav-->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" id="nav-main">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="/wp-content/uploads/2019/05/peng-joon-logo-copy-copy-e1559135091999.png">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dự án</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dịch vụ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tin tức</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Giới thiệu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Liên hệ</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li>
                <a class="nav-link" href="/facebook">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon-sm.png" />
                </a>
            </li>
            <li>
                <a class="nav-link" href="/instagram">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon-sm.png" />
                </a>
            </li>
            <li>
                <a class="nav-link" href="/youtube">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/youtube-icon-sm.png" />
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- The video -->
<?php
    $videoUrl = get_template_directory_uri().'/video/home.mp4';
?>
<section id="video">
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
                                        <button type="button" class="btn btn-outline-success">Nhận ngay</button>
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
</section>





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