<?php /*get_header() */?>
<!-- Bootstrap CSS -->
<link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" >

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/video.css" >

<style type="text/css">
    .video-content {
        margin-bottom: 0px;
        background: url("<?php echo get_template_directory_uri(); ?>/img/optin-bar-bg.png")  center center no-repeat;
        background-size: cover;
        color: #f1f1f1;
        width: auto !important;
        padding: 50px 0px 20px;
        height: 250px;
    }

    /* Home one */
    #home-one {
        background: url('<?php echo get_template_directory_uri(); ?>/img/feature-one-bg.jpg') center center no-repeat;
        background-size: cover;
        color: white;
        height: 100%;
        width: 100%;
    }

    #home-one .home-content {
        padding-top: 60px;
    }

    /* Read more */
    .read-more {
        height: 46px;
        max-width: 200px;
    }
    .read-more-button {
        border: #aa2b2b solid 2px;
    }
    .read-more-arrow {
        background: #aa2b2b;
        width: 46px;
        height: 46px;
    }
    .read-more-button button.btn {
        background: #000;
        color: #ffffff;
        text-transform: uppercase;
        height: 42px;
        border-radius: 0;
    }
    .read-more-button button.btn:focus {
        outline: none;
    }
    .read-more-button button.btn:hover {
        background: #fff;
        color: #000;
    }

    .home-content h3 {
        font-size: 50px;
    }

    .home-content h3,h5,p {
        padding-bottom: 20px;
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

<header>
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="<?php echo $videoUrl; ?>" type="video/mp4">
    </video>
    <div class="row">
        <div class="col-md-12 video-top">
            
        </div>
        <div class="col-md-12 video-content">
            <div class="container">
                <div class="row">
                    <div class="video-content-image">
                        <img src="/wp-content/uploads/2019/05/hinhdaidien-copy-e1559142553844.png" />
                    </div>
                    <div class="row">
                        <div class="col-md-12 video-content-block">
                            <div class="video-content-text">
                                <h3>ĐỪNG MỞ QUÁN NẾU CHƯA BIẾT QUY TRÌNH SETUP</h3>
                                <h5>Nhận quy trình SETUP COFFEE từ A-Z</h5>
                            </div>

                            <div class="row">
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Họ tên" id="full_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Số điện thoại"  id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" placeholder="Email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <button type="button" class="btn btn-danger">Nhận ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!--Meet Peng Joon-->
<section id="home-one">
    <div class="home-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Meet Peng Joon</h3>
                    <h5>
                        Peng Joon is recognized as the authority on how to make big money through the internet.
                    </h5>
                    <p>
                        In less than 7 years, he has built an 8 figure business through his websites. Over the years, Peng Joon has refined his 5 step system that has helped thousands monetize their passion, earn passive income online and live the dot com lifestyle. His system has been widely regarded as the most strategic and innovative approach to growing an online empire.
                    </p>
                    <p>
                        As one of the most requested speakers in the world, Peng Joon has shared the stage with Richard Branson,  Tony Robbins, Robert Kiyosaki and many other thought leaders of this era.
                    </p>

                    <div class="read-more">
                        <div class="container">
                            <div class="row">
                                <div class="read-more-arrow">

                                </div>
                                <div class="read-more-button">
                                    <button type="button" class="btn">Đọc thêm</button>
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