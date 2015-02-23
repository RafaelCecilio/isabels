<?php
include_once 'common.php';
?>
<!DOCTYPE html>
<html lang=<?php echo $lang['LANG']; ?>>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aluguer de barcos e iates em Lisboa">
    <meta name="author" content="Isabels Yachts">
    <meta name="keywords" content="barcos para alugar em Lisboa, iates para alugar em Lisboa, iates para alugar em Lisboa, Lisboa vista do Tejo, barcos em Lisboa">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-59953066-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- bootstrap gallery -->
    <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.css">
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php echo $lang['NAVBAR_TITLE']; ?></a>
                <a class="navbar-brand page-scroll" href="index.php?lang=pt"><img src="img/pt.png" /></a>
                <a class="navbar-brand page-scroll" href="index.php?lang=en"><img src="img/en.png" /></a>
                <!-- <a class="navbar-brand page-scroll" href="#page-top"><?php echo $lang['NAVBAR_TITLE']; ?></a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><?php echo $lang['NAVBAR_ABOUT']; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#ship"><?php echo $lang['NAVBAR_SHIP']; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#activities"><?php echo $lang['NAVBAR_ACTIVITIES']; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#eventos"><?php echo $lang['NAVBAR_EVENTS']; ?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"><?php echo $lang['NAVBAR_CONTACT']; ?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading"><?php echo $lang['HEADER_TITLE']; ?></div>

                <a href="#about" class="page-scroll btn btn-xl"><?php echo $lang['HEADER_MORE']; ?></a>
            </div>
        </div>
    </header>

    <!-- Quem somos -->
    <section id="about" style="background-image: url(img/about/tagus.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <h2 class="section-heading"><?php echo $lang['ABOUT_TITLE']; ?></h2>
                    <h3 class="section-subheading text-muted" style="margin: 50px; background-color: #ffffff; opacity:0.8; filter:alpha(opacity=80); border-radius: 6px "><?php echo $lang['ABOUT_TEXT']; ?>
					</h3>
                </div>
            </div>
            <div class="row" style="margin-bottom: 0cm;">
                <div class="col-md-2 col-sm-6 col-md-offset-5">
                    <a href="#">
                        <img style="background-color: #ffffff; opacity:0.8; filter:alpha(opacity=80); border-radius: 6px" src="img/logos/logoTurismoDePortugal.png" class="img-responsive img-centered" alt=""></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- O barco -->
    <section id="ship" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['ABOUT_TITLE']; ?></h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
            </div>
            <div id="boat-gallery">
            </div>
            <div id="boat-int-gallery">
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading text-muted">
                    <?php echo $lang['BOAT_SPECS']; ?>
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['ACTIV_TITLE']; ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/activities/belem_tarde.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $lang['ACTIV_AFTERNOON']; ?></h4>
                                    <h4 class="subheading">2 <?php echo $lang['ACTIV_HOURS']; ?> - 500€</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['ACTIV_AFTERNOON_INCLUDE']; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/activities/ponte.JPG" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $lang['ACTIV_HALF']; ?></h4>
                                    <h4 class="subheading">4 <?php echo $lang['ACTIV_HOURS']; ?> - 950€</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['ACTIV_HALF_INCLUDE']; ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/activities/cascais-bay.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $lang['ACTIV_FULL']; ?></h4>
                                    <h4 class="subheading">8 <?php echo $lang['ACTIV_HOURS']; ?> - 1900€</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['ACTIV_FULL_INCLUDE']; ?></p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <div id="activitiesCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#activitiesCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#activitiesCarousel" data-slide-to="1"></li>
                                        <li data-target="#activitiesCarousel" data-slide-to="2"></li>
                                        <li data-target="#activitiesCarousel" data-slide-to="3"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img class="img-circle img-responsive" src="img/activities/mota_agua.jpg" alt="">
                                        </div>

                                        <div class="item">
                                            <img class="img-circle img-responsive" src="img/activities/wake2.jpg" alt="">
                                        </div>

                                        <div class="item">
                                            <img class="img-circle img-responsive" src="img/activities/ski.jpg" alt="">
                                        </div>

                                        <div class="item">
                                            <img class="img-circle img-responsive" src="img/activities/jetski.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $lang['ACTIV_CUSTOM']; ?></h4>
                                    <!--<h4 class="subheading">Preços sob consulta.</h4>-->
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php echo $lang['ACTIV_CUSTOM_INCLUDE']; ?></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <h4><?php echo $lang['TEST_CIRCLE']; ?></h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php echo $lang['TEST_TITLE']; ?>:</h4>
                                </div>
                                <div class="timeline-body">
                                    <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <div class="carousel-content text-center"><?php echo $lang['TEST1']; ?></div>
                                            </div>
                                            <div class="item">
                                                <div class="carousel-content text-center"><?php echo $lang['TEST2']; ?></div>
                                            </div>
                                            <div class="item">
                                                <div class="carousel-content text-center"><?php echo $lang['TEST3']; ?></div>
                                            </div>
                                            <div class="item">
                                                <div class="carousel-content text-center"><?php echo $lang['TEST4']; ?></div>
                                            </div>
                                            <div class="item">
                                                <div class="carousel-content text-center"><?php echo $lang['TEST5']; ?></div>
                                            </div>
                                        </div>
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#testimonialsCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#testimonialsCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
	            <div class="col-lg-12 text-center">
	                <h3 class="section-subheading text-muted"><?php echo $lang['ACTIV_DISCLOSURE']; ?></h3>
	            </div>
            </div>
            
        </div>
    </section>

    <!-- Eventos -->
    <section id="eventos" class="bg-light-gray" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['EVENTS_TITLE']; ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo $lang['EVENTS_SUBTITLE']; ?></h3>
                </div>
            </div>
            <div id="events-gallery"></div>
            <div class="row">
                <h3 class="section-subheading text-muted text-left"><?php echo $lang['EVENTS_VIDEO_VILAMOURA']; ?></h3>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="//www.youtube.com/embed/H6aQyYn3gLM"></iframe>
                </div>
            </div>
        </div>
    </section>



    <section id="contact" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo $lang['CONTACT_TITLE']; ?></h2>
                    <h3 class="section-subheading text-muted" style="color: #ffffff"><?php echo $lang['CONTACT_TEXT']; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=<?php echo '"'.$lang['CONTACT_NAME'].' *"'; ?> id="name" required data-validation-required-message=<?php echo '"'.$lang['CONTACT_NAME_HELP'].'"'; ?>>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message=<?php echo '"'.$lang['CONTACT_EMAIL_HELP'].'"'; ?>>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder=<?php echo '"'.$lang['CONTACT_PHONE'].' *"'; ?> id="phone" required  data-validation-required-message=<?php echo '"'.$lang['CONTACT_PHONE_HELP'].'"'; ?>>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder=<?php echo '"'.$lang['CONTACT_MSG'].' *"'; ?> id="message" required data-validation-required-message=<?php echo '"'.$lang['CONTACT_MSG_HELP'].'"'; ?>></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl"><?php echo $lang['CONTACT_SEND']; ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 class="section-subheading text-muted" style="color: white"><?php echo $lang['CONTACT_MORE']; ?></h3>
                </div>
            </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Isabels Yachts 2015</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/isabels3.yachts"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
<!--                 <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>

    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
    <div id="blueimp-gallery" class="blueimp-gallery">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <!-- Bootstrap Gallery -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->
    <!-- <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script> -->
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/bootstrap-image-gallery.js"></script>
    <script src="js/gallery.js"></script>
    <script>
/*        $('#activitiesCarousel').carousel({
          interval: 1000
        })*/
        $('#testimonialsCarousel').carousel({
          interval: 10000
        })
    </script>
</body>

</html>
