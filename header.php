<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php bloginfo('name') ?>
    </title>

    <meta name="description" content="<?php bloginfo('description') ?>" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" >

    <!--<script src="<?php /*echo get_template_directory_uri() */?>/vendor/jquery/dist/jquery.min.js"></script>-->


    <style type="text/css">

        /* ---------------------Home one-------------------- */
        #home-one {
            background: url('<?php echo get_template_directory_uri(); ?>/img/feature-one-bg.jpg') center center no-repeat;
            background-size: cover;
            color: white;
        }
        #home-3,  #home-5{
            background: url('<?php echo get_template_directory_uri(); ?>/img/bg-content-1.jpg') center center no-repeat;
            background-size: cover;
        }
        #home-4, #home-6 {
            background: url('<?php echo get_template_directory_uri(); ?>/img/bg-content-2.jpg') center center no-repeat;
            background-size: cover;
        }
        #social {
            background: url('<?php echo get_template_directory_uri(); ?>/img/bg-social.jpg') center center no-repeat;
            background-size: cover;
            color: white;
        }
        #social .col-lg-4 {
            align-items: center;
        }
        #content {
            background: url('<?php echo get_template_directory_uri(); ?>/img/bg-single.jpg') center center no-repeat;
            background-size: cover;
            color: black;
        }
        #content h5 {
            color: black;

        }

        /*-----------------Arrow button----------------*/
        .arrow {
            background: url('<?php echo get_template_directory_uri(); ?>/img/arrow.png') center center no-repeat;
            background-size: cover;
            height: 12px;
            width: 30px;
        }

        #footer {
            background: url('<?php echo get_template_directory_uri(); ?>/img/bg-footer.png') center center no-repeat;
            background-size: cover;
        }

    </style>

    <?php /*wp_head();*/ ?>
</head>
<body>

<!--Section Nav-->
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" id="nav-main">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <img src="/wp-content/uploads/2019/05/peng-joon-logo-copy-copy-e1559135091999.png">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'header-menu', //'header-menu' Gọi menu đã đăng ký trong function
            'depth'           => 2,     // Cấu hình dropdown 2 cấp
            'container'       => false, // Thẻ div bọc menu
            'menu_class'      => 'navbar-nav mr-auto', // Class của nav bootstrap
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker()
        ));
        ?>
        <ul id="navbar-social" class="navbar-nav mr-auto">
            <li>
                <a class="nav-link" href="https://www.facebook.com/txv.architects/">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fb-icon-sm.png" />
                </a>
            </li>
            <li>
                <a class="nav-link" href="https://www.instagram.com/txv.arc">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/instagram-icon-sm.png" />
                </a>
            </li>
            <li>
                <a class="nav-link" href="https://www.youtube.com/watch?v=fbQSFoG8t_8">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/youtube-icon-sm.png" />
                </a>
            </li>
        </ul>
    </div>
</nav>