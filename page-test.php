<?php /*get_header() */?>
<!-- Bootstrap CSS -->
<link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" >



<section id="cover">
    <div id="cover-caption">
        <div class="container">
            <div class="col-sm-12 col-sm-offset-1">
                <h1 class="display-3">Welcome to Bootstrap 4</h1>
                <p>Just like the old Bootstrap, but better. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quibusdam quis, repudiandae reprehenderit doloremque fugiat molestias, corporis voluptas.</p>
                <form action="" class="form-inline form-home">
                    <div class="form-group">
                        <label class="sr-only">Name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                        <label class="sr-only">Email</label>
                        <input type="text" class="form-control form-control-lg" placeholder="quangquyet05t3@gmail.com">
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Okay go</button>
                </form>

                <br>

                <a href="#nav-main" class="btn btn-outline-secondary btn-sm" role="button">&darr;</a>
            </div>
        </div>
    </div>
</section>

<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" id="nav-main">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Your Logo</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<section id="carousel">
    <div id="carousel-home" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-home" data-slide-to="1"></li>
            <li data-target="#carousel-home" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/img/woman-camera.jpg" alt="Woman taking picture with a camera">
                <div class="carousel-caption d-none d-md-block">
                    <h3>A woman with a camera</h3>
                    <p>She is probably taking a picture</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/img/spiderweb.jpg" alt="A wet spiderweb">
                <div class="carousel-caption">
                    <h3>Down came the rain</h3>
                    <p>And washed the spider out</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo get_template_directory_uri() ?>/img/hearthand.jpg" alt="Two hands making a heart">
                <div class="carousel-caption">
                    <h3>Making love</h3>
                    <p>With their hands...</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-home" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


<section id="what-we-do">
    <div class="section-content">
        <div class="container">
            <h2>What we do</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui accusantium commodi non quod mollitia animi, totam quia labore ex est ut delectus consectetur explicabo eveniet maiores, cumque aut repudiandae. Natus!</p>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-group">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/img/chalkboard.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Strategy &amp; Planning</h4>
                                <h6 class="card-subtitle">Support card subtitle</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>


                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/img/working.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Creative &amp; Design</h4>
                                <h6 class="card-subtitle">Support card subtitle</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi debitis fugit molestias dignissimos, id hic officiis quam possimus tenetur minima voluptatibus accusantium, numquam voluptates velit, dicta maiores dolor quo expedita.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>

                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="<?php echo get_template_directory_uri() ?>/img/programming.jpg" alt="Card image cap">
                            <div class="card-block">
                                <h4 class="card-title">Programming &amp; Technical</h4>
                                <h6 class="card-subtitle">Support card subtitle</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi debitis fugit molestias dignissimos, id hic officiis quam possimus tenetur minima voluptatibus accusantium.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="section-content">
        <div class="container">
            <div class="col-md-6">
                <div class="about-text">
                    <h3>About me</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima culpa nostrum voluptates praesentium quia, quae, dolor aperiam possimus architecto, tempore unde! Quasi fugit voluptate, maiores adipisci commodi nemo rem cumque.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eum mollitia sit dolorem autem qui possimus ex voluptate, voluptatibus iste unde numquam illum, molestiae reprehenderit, eligendi. Illum quod esse voluptatibus.
                    </p>

                    <h5>Follow me on the web</h5>
                    <a href="" class="btn btn-sm btn-outline-secondary">twiter</a>
                    <a href="" class="btn btn-sm btn-outline-secondary">facebook</a>
                    <a href="" class="btn btn-sm btn-outline-secondary">youtube</a>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="news">
    <div class="section-content">
        <div class="container">
            <h3>Latest news</h3>
            <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero placeat debitis ad vitae repudiandae architecto, ipsum tenetur odio animi nulla nihil deleniti voluptatibus et in incidunt consequuntur! Assumenda, suscipit, sunt!
            </p>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-columns">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri() ?>/img/woman-camera.jpg" alt="woman with a camera">
                            <div class="card-block">
                                <h4 class="card-title">Card title that wraps to a new line</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                        <div class="card p-3">
                            <blockquote class="card-block card-blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>
                                    <small class="text-muted">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                        <div class="card">
                            <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri() ?>/img/stars.jpg" alt="landscape photography of stars">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card card-inverse card-primary p-3 text-center">
                            <blockquote class="card-blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                                <footer>
                                    <small>
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                        <div class="card text-center">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img img-fluid" src="<?php echo get_template_directory_uri() ?>/img/computer.jpg" alt="A desktop with a computer on it">
                        </div>
                        <div class="card p-3 text-right card-warning card-inverse">
                            <blockquote class="card-blockquote">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>
                                    <small class="text-muted">
                                        Someone famous in <cite title="Source Title">Source Title</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <nav class="text-center" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>


        </div>
    </div>
</section>

<section id="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <p>uncopyright 2015. do what you want</p>
                <p>coded by brad</p>
            </div>
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <li><a href="">home</a></li>
                    <li><a href="">what we do</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">latest</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="list-unstyled">
                    <li><a href="">facebook</a></li>
                    <li><a href="">twitter</a></li>
                    <li><a href="">youtube</a></li>
                    <li><a href="">linkedin</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h6>a tiny header</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam expedita fugit saepe, eum ad, quam! Eum magnam suscipit nulla ullam aliquam consectetur provident, nihil consequuntur porro labore asperiores corrupti esse?</p>
            </div>
        </div>
    </div>
</section>




<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="<?php echo get_template_directory_uri() ?>/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/tether/dist/js/tether.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/js/holder.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<?php /*get_footer() */?>
