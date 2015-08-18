<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Areiro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="areiro, cctv, camera" />
        <script src='js/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
        <script src="js/smoothScroll.js"></script>
        <script src="js/script.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/stylesheet-carrousel.css">
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <link rel="stylesheet" href="css/style.css">
        <link rel='stylesheet' href='css/style2.css'>
        <link rel="stylesheet" href="css/stylesheet.css" />
        <link rel="icon" type="image/png" href="img/logo-small.png" />
    </head>
    <body>
        <section id="main-wrapper">
            <header>
                <div id="main-nav">
                    <div class="wrapper">
                        <div class="logo"><a href="index.php"><img src="img/logo2.png"></a></div>
                    </div>
                    <nav class="nav">
                        <div class="wrapper">
                            <ul>
                                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="category.html"><i class="fa fa-bullhorn"></i> Alarmes</a></li>
                                <li><a href="#"><i class="fa fa-hdd-o"></i> Ahd</a></li>
                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> IP</a></li>
                                <li><a href="#"><i class="fa fa-fast-forward"></i> Videos</a></li>
                                <li><a href="#"><i class="fa fa-video-camera"></i>LiveStream</a></li>
                                <li><a href="#"><span class="menu-button"><i class="fa fa-bars"></i></span></a></li>
                            </ul>         
                        </div>
                    </nav>
                </div>
                <div id="top-nav" >
                    <div class="wrapper">
                        <ul>
                            <a href="#"><li><i class="fa fa-hand-o-right"></i> About us</li></a>
                                <a href="#"><li><i class="fa fa-envelope-o"></i> Contact us</li>  </a>
                            <a href="#"><li><i class="fa fa-language"></i> Languague</li></a>   
                        </ul>
                        <form method="get" action="/search" id="search">
                            <input name="q" id="q" type="search" size="40" placeholder="Search..." />
                        </form>
                    </div>
                </div>
                
                <div id="top-nav-small" >
                    <nav>
                        <div id="q-icon"><a href="#"><i class="fa fa-search"></i>SEARCH</a></div>
                        <form method="get" action="/search" id="search">
                            <div><input name="q-small" id="q-small" type="search" size="40" placeholder="Search..." /></div>
                        </form>
                        <div class="logo"><a href="index.php"><img src="img/logo.png"></a></div>
                        <div id="menu-bars"><a href="#"><i class="fa fa-bars"></i></a></div>
                    </nav>
                </div>
                <div id="main-nav-small">
                    <div class="wrapper">
                        <nav class="nav-main">
                            <ul>
                                <li><a href="category.html"><i class="fa fa-bullhorn"></i> Alarmes</a></li>
                                <li><a href="#"><i class="fa fa-hdd-o"></i> Ahd</a></li>
                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i> IP</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="slider">
                <section>
                    <ul class="cb-slideshow">
                        <li><span></span><div><h3>vi·gi·lan·ce</h3></div></li>
                        <li><span></span><div><h3>sur·veil·lance</h3></div></li>
                        <li><span></span><div><h3>se·cu·ri·ty</h3></div></li>
                        <li><span></span><div><h3>pro·tec·tion</h3></div></li>
                        <li><span></span><div><h3>pre·ven·tion</h3></div></li>
                        <li><span></span><div><h3>se·ren·i·ty</h3></div></li>
                    </ul>
                </section>
            </div>
            <div class="content" id="content">
                <div class="space">
                    <a href="#content"><span><i class="fa fa-arrow-circle-down"></i></span></a>
                </div>
                <section>
                    <div class="wrapper">    
                        <!-- TESTING -->
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="page-header">
                                        <h3>ALARMES</h3>
                                        <p>WRITE SOMETHING ABOUT ALARMES</p>
                                    </div>
                                    <div class="carousel slide" id="myCarousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <ul class="thumbnails">
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /Slide1 --> 
                                            <div class="item">
                                                <ul class="thumbnails">
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /Slide2 --> 
                                            <div class="item">
                                                <ul class="thumbnails">
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /Slide3 --> 
                                        </div>
                                        <div class="control-box">    
                                            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                                            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
                                        </div><!-- /.control-box -->   
                                    </div><!-- /#myCarousel -->
                                </div><!-- /.span12 -->    
                            </div><!-- /.row --> 
                            
                            <!-- ANOTHER ONE -->
                            <div class="row-fluid">
                                <div class="span12">
                                    <div class="page-header">
                                        <h3>ALARMES</h3>
                                        <p>WRITE SOMETHING ABOUT ALARMES</p>
                                    </div>
                                    <div class="carousel slide" id="myCarousel-2">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <ul class="thumbnails">
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /Slide1 --> 
                                            <div class="item">
                                                <ul class="thumbnails">
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /Slide2 --> 
                                            <div class="item">
                                                <ul class="thumbnails">
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                    <li class="span3">
                                                        <div class="thumbnail">
                                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                                        </div>
                                                        <div class="caption">
                                                            <h4>Praesent commodo</h4>
                                                            <p>Nullam Condimentum Nibh Etiam Sem</p>
                                                            <a class="btn btn-mini" href="#">&raquo; Read More</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /Slide3 --> 
                                        </div>
                                        <div class="control-box">    
                                            <a data-slide="prev" href="#myCarousel-2" class="carousel-control left">‹</a>
                                            <a data-slide="next" href="#myCarousel-2" class="carousel-control right">›</a>
                                        </div><!-- /.control-box -->   
                                    </div><!-- /#myCarousel -->
                                </div><!-- /.span12 -->    
                            </div>
                            
                            
                        </div><!-- /.container -->
                        <!-- END TESTING -->
                    </div>
                </section>
            </div>
            <footer>
                <div class="wrapper">
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">TERMS OF USE</a></li>
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li id="social"><span>FOLLOW US ON</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </footer>
        </section>
    </body>
</html>