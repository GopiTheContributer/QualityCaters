<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="thendral quality caters">
  <meta name="author" content="TechCreators, Gopi">
  <title>Quality Caters</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/jqueryui.css" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

  <script>
  $(document).ready(function(){
    $('#currentYear').text((new Date).getFullYear());
    $('#username').val('');
    $('#password').val('');
    $('#username').focus();
  });
  </script>

  <style media="screen">
  #map{
    height: 309px;
    width: 100%;
  }
  </style>

</head><!--/head-->

<body>
  <header id="header" >
    <div class="container">
      <div class="row">
        <div class="col-sm-12 overflow">
          <div class="social-icons pull-left" style="padding:12px">
            <ul class="nav nav-pills">
              <li><a href="" style="color:black;letter-spacing: 1.08px;"><i class="fa fa-phone"></i> 9944085749 / 9444573879 </a></li>
              <li><a href="mailto:qualitycaters@gmail.com" style="color:black;letter-spacing: 1.08px;"><i class="fa fa-envelope"></i> qualitycaters@gmail.com</a></li>
              <!-- <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li><a href=""><i class="fa fa-dribbble"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
            </ul>
          </div>
          <div class="row">
          <div class="social-icons pull-right" style="padding:12px">
            <ul class="nav nav-pills" style="color:black;letter-spacing: 1.08px;">
              <li><a href="https://www.facebook.com/Quality-Caters-928129070573143/" target="_blank" style="color:black;"><i class="fa fa-facebook"></i></a></li>
              <li>
                <?php echo isset($_SESSION['user'])? 'Welcome ' . $_SESSION['user'] . '</a>,': '<a href="" id="btnLogin" id="btnLogin" data-toggle="modal" data-target="#myModal" style="color:black;letter-spacing: 1.08px;">Login</a>'; ?>
                </li>
                <li>
                  <?php echo isset($_SESSION['user'])?'<a style="color:#000;letter-spacing:1.08px;" href="dashboard.php" title="My Profile"> My Profile</a>':''; ?>
                </li>
                <li>
                  <?php echo isset($_SESSION['user'])?'<a style="color:#000;letter-spacing:1.08px;" href="logout.php" title="Logout"> Logout<i class="fa fa-sign-out" aria-hidden="true" title="Logout"></i></a>':''; ?>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!--login  Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content bgColor">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Quality Caters - Admin Login</h4>
        </div>
        <div class="modal-body">
          <div class="login-form-design">
            <div class="text-center header-login-form" style="padding: 12px;"></div>
            <div style="padding:12px;">
              <input type="text" id="username" placeholder="Enter username" maxlength="25" class="form-control">
            </div>
            <div style="padding:12px;">
              <input type="password" id="password" placeholder="Enter password" maxlength="15" class="form-control">
            </div>
            <div id="err" class="text-center" style="color:red;"></div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnModalFooterClose" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="btnModalFooter" class="btn btn-default">Login</button>
        </div>
      </div>

    </div>
  </div>
  <!-- modal end -->


  <div class="navbar navbar-inverse" role="banner" style="background-color:transparent;"> <!--#fff8ba; -->
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.html">
          <h1><img src="images/logo.png" alt="Quality Caters"></h1>
        </a>

      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.html">HOME</a></li>
          <li class="dropdown"><a href="#about">ABOUT US</a>
            <!--  <i class="fa fa-angle-down"></i></a>
            <ul role="menu" class="sub-menu">
            <li><a href="#">Page1</a></li>
            <li><a href="#">Page2</a></li>
          </ul> -->
        </li>
        <li class="dropdown"><a href="#menu">MENU</a>
          <!-- <i class="fa fa-angle-down"></i></a>
          <ul role="menu" class="sub-menu">
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Lorem ipsum dolor</a></li>
        </ul> -->
      </li>
      <li class="dropdown"><a href="#gallery">GALLERY</a></li>
      <li class="dropdown"><a href="#testimonial">TESTIMONIAL</a>
        <!-- <i class="fa fa-angle-down"></i></a>
        <ul role="menu" class="sub-menu">
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
      </ul> -->
    </li>
    <li class="dropdown"><a href="#contact">CONTACT US </a>
      <!-- <i class="fa fa-angle-down"></i></a>
      <ul role="menu" class="sub-menu">
      <li><a href="#">Lorem ipsum dolor</a></li>
      <li><a href="#">Lorem ipsum dolor</a></li>
    </ul> -->
  </li>
  <!-- <li><a href="application.html">Application</a></li> -->
</ul>
</div>
<!-- <div class="search">
<form role="form">
<i class="fa fa-search"></i>
<div class="field-toggle">
<input type="text" class="search-form" autocomplete="off" placeholder="Search">
</div>
</form>
</div> -->
</div>
</div>
</header>
<!--/#header-->

<section id="home-slider" style="height:580px;">
  <div class="container">
    <div class="main-slider">

      <div class="slide-text">
        <h1>Dine With Us</h1>
        <p style="letter-spacing: 1.08px;">Making every celebration special and every occasion memorable at Thendral's Quality Caters the best catering services in Tiruvallur. </p>
        <a href="#bookorder" id="btnBookOrder" class="btn btn-common">BOOK ORDER</a>
      </div>

      <img src="images/home/slider/slide1/house.png" class="img-responsive slider-house" alt="slider image">
      <img src="images/home/slider/slide1/circle1.png" class="slider-circle1" alt="slider image">
      <img src="images/home/slider/slide1/circle2.png" class="slider-circle2" alt="slider image">
      <img src="images/home/slider/slide1/cloud1.png" class="slider-cloud1" alt="slider image">
      <img src="images/home/slider/slide1/cloud2.png" class="slider-cloud2" alt="slider image">
      <img src="images/home/slider/slide1/cloud3.png" class="slider-cloud3" alt="slider image">
      <img src="images/home/slider/slide1/sun.png" class="slider-sun" alt="slider image">
      <img src="images/home/cycle.png" class="slider-cycle" alt="">
    </div>
  </div>
  <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
</section>
<!--/#home-slider-->

<!-- Wy thendral caters Catering Services -->
<!-- <section id="services" style="background-image:url(images/whyus.jpg);background-repeat:no-repeat;background-position: center top; min-widht:100%;min-height:100%;overflow:visible;position: relative;vertical-align: top;">
<div  style="background-color: rgba(0, 0, 0, 0.59);">
<div class="container">
<div class="row">
<div class="">
<h2 class="text-center" style="font-size:33px !important; line-height:22px; font-weight:450; padding-bottom:20px;padding-top:34px;color:#fff;">Why Thendral Caterars</h2>
</div>
<div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
<img class="menu-image" src="images/Versatilemenu.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
</div>
<h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;color:#fff;padding:34px;">Versatile Menu</h2>
<p style="color:#fff;">Not sure what to serve at your event? Not sure how to prepare or present?. We are here. We sit down with you and explain every detail of what will be served to your guests. We also provide Customization of menus.</p>
</div>
<div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
<div class="single-service menu-item menu-bg"  data-toggle="modal" data-target="#marriage">
<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
<img class="menu-image" src="images/attention.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
</div>
<h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Attention to Detail</h2>
<p>As a catering company, we take time to perfect and present your food and beverage options in a way that will wow your guests. We can adapt to any venue environment to make sure your food and beverages fit the scene and look perfect.</p>
</div>
</div>
<div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
<div class="single-service menu-item menu-bg" data-toggle="modal" data-target="#marriage">
<div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
<img class="menu-image" src="images/buffet.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
</div>
<h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">All in one package</h2>
<p>We put our maximum effort to make a pleasent event.</p>
</div>
</div>
</div>
</div>
</div>
</section> -->

<!-- Our menus -->
<a href="#" id="menu"></a>
<section id="menu" style="background-image:url(images/menubg1.jpg);background-repeat:no-repeat;background-position: center top; min-widht:100%;min-height:100%;overflow:visible;position: relative;vertical-align: top;">
  <div style="background-color: rgba(0, 0, 0, 0.59);">
    <div class="container"  style="padding:20px;">
      <div class="row">
        <h1 class="title" style="text-align:center;font-weight:500; color:#fff;">Menu</h1>
        <div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-service menu-item menu-bg" data-toggle="modal" data-target="#myModal">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
              <img class="menu-image" src="images/marriage.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
            </div>
            <h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Marriage</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="single-service menu-item menu-bg"  data-toggle="modal" data-target="#marriage">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
              <img class="menu-image" src="images/reception.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
            </div>
            <h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Reception</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
          <div class="single-service menu-item menu-bg" data-toggle="modal" data-target="#marriage">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
              <img class="menu-image" src="images/buffet.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
            </div>
            <h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Special Buffet</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-service menu-item menu-bg" data-toggle="modal" data-target="#marriage">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
              <img class="menu-image" src="images/corporate.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
            </div>
            <h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Corporate Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="single-service menu-item menu-bg" data-toggle="modal" data-target="#marriage">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
              <img class="menu-image" src="images/theme.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
            </div>
            <h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Theme Events</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
        </div>
        <div class="col-sm-4 text-center  wow fadeIn " data-wow-duration="1000ms" data-wow-delay="900ms">
          <div class="single-service menu-item menu-bg" data-toggle="modal" data-target="#marriage">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
              <img class="menu-image" src="images/birthday.jpg" alt="" style="width:100%;height:100%;background-position: center top;">
            </div>
            <h2 style="font-size:24px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Birthday Parties</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<!-- end of our menus -->

<!-- about us section -->
<a href="" id="about"></a>
<section id="features">
  <div class="container">
    <div class="row">
      <div class="single-features">
        <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
          <img src="images/home/about-home-page.jpg" class="img-responsive" alt="">
        </div>
        <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
          <h2 class="text-center" style="font-size:33px !important; line-height:22px; font-weight:450; padding-bottom:34px;">About Us</h2>
          <P style="font-size:19px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Thendral's Quality Catering Services </p>
            <p style="font-size:16px; line-height:22px;">Thendral's Quality Caters are blessed with expertise in providing the best service for outdoor catering in Thiruvallur. With years of experience from 2001  With the innovation and creativity approach towards planning for marriage reception, Mugurtham and other functions like Birthday, Seemantham, Corporate Parties. We are proud in providing the best satisfied catering services. Orienting the best of resources with more dedication and commitments towards catering services. We strive to be best always.</p><br>
            ​
            <p style="font-size:19px; line-height:22px; font-variant: small-caps; font-weight: bold;font-weight:450;">Customization of the Catering Menu</p>
            <p style="font-size:16px; line-height:22px;">As One of Special Feature, we entertain the catering menu by accepting the likes of the customer and making changes to the catering menu. More over, we try to brings all the riches of the great South Indian Food within your budget limit. Our enthusiatic staff are always on the ready to serve your guests and take care of the needs during every moment of the occasion.</P>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- modal for marriage -->
    <div class="modal fade" id="marriage" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Header</h4>
          </div>
          <div class="modal-body">
            <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
              <img  src="images/home/icon3.png" alt="">
            </div>
            <h2>Lorem ipsum dolor sit</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end of modal marriage  -->


    <!-- <section id="action" class="responsive">
    <div class="vertical-center" style="background: #fff8ba;">
    <div class="container">
    <div class="row">
    <div class="action take-tour">
    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
    <h1 class="title">Display clients name</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacinia ante eget finibus.</p>
  </div>
  <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
  <div class="tour-button">
  <a href="#" class="btn btn-common">TAKE THE TOUR</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->
<!--/#action-->
<a href="" id="gallery"></a>
<section id="features" class="container-fluid carosel-design" style="padding: 0px; !important">
  <div class="container-fluid" style="padding:0px !important;">
    <div class="col-sm-12  wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
      <div id="carousel-container" style="padding:0px !important;">
        <div class="wow fadeInLeft">
          asdfasdfa
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding:0px !important;">
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="padding:0px !important;">
            <div class="item active">
              <img src="images/slider/1.jpg" alt="">
              <div class="carousel-caption">
                <h3>First slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
            <div class="item" style="padding:0px !important;">
              <img src="images/slider/2.jpg" alt="">
              <div class="carousel-caption">
                <h3>Second slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
            <div class="item" style="padding:0px !important;">
              <img src="images/slider/3.jpg" alt="">
              <div class="carousel-caption">
                <h3>Third slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div><!--/#carousel-example-generic-->
      </div><!--/#carousel-container-->
    </div>
  </div>
</section>



<!-- book order -->
<a href="" id="bookorder"></a>
<section  style="background-image:url(images/hirebg.jpg);  background-repeat: no-repeat;">
  <div style="background-color: rgba(0, 0, 0, 0.59);">
    <div id="features-hire" class="wow fadeInRight"  style="background-image: url(images/girlbg.png);"  data-wow-duration="500ms" data-wow-delay="300ms">
      <div class="container">
        <div class="row">
          <div class="single-features">
            <div class="col-sm-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
              <!-- book order form -->
              <div class="contact-form bottom">
                <h2 class="text-center" style="font-size:33px !important; line-height:22px; color: #fff; font-weight:450; padding-bottom:34px;">Hire us for your event</h2>

                <div style="text-align: center;padding:30px;color: #fff; ">
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" maxlength="25" required="required" placeholder="NAME">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <input type="email" id="email" name="email" class="form-control" maxlength="25" required="required" placeholder="EMAIL ID">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <!-- <input type="datetime-local" id="eventDate" name="date" class="form-control" required="required" placeholder="Event date"> -->
                    <input type="text" id="eventDate" name="date" class="form-control" required="required" placeholder="EVENT DATE">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <input type="text" id="noOfPersons" name="appnoofpersons" maxlength="4" class="form-control" required="required" placeholder="NUMBER OF PERSON EXPECTED">
                  </div>

                  <div class="form-group">
                    <select class="form-control" id="event" name="event" required="required" placeholder="CHOOSE YOUR OCCASION">
                      <option value="0">Event</option>
                      <option value="1">Marriage</option>
                      <option value="2">Reception</option>
                      <option value="3">Special Buffet</option>
                      <option value="4">Corporate event</option>
                      <option value="5">Theme events</option>
                      <option value="6">Birthday parties</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <input type="text" id="referredby" name="referredby" maxlength="25" class="form-control" required="required" placeholder="REFERRED PERSON NAME">
                  </div>

                  <div class="form-group">
                    <input type="text" id="referredphoneno" name="referredphoneno" class="form-control" required="required" placeholder="REFERRED PERSON'S CONTACT">
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group">
                    <textarea name="address" id="address" required="required" class="form-control" rows="4" placeholder="ADDRESS OF VENUE"></textarea>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="form-group">
                    <label for="" id="orderErrorMessagee"></label>
                  </div>

                  <div class="form-group">
                    <div class="text-center">
                      <input type="button" id="btnOrder" name="submit" class="btn btn-submit" value="Hire US">
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of book order form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/#book order-->


<!-- testimonial -->
<a href="" id=testimonial></a>
<section id="features" class="container-fluid carosel-design" style="padding: 0px; !important">
  <div class="container-fluid" style="padding:0px !important;">
    <div class="col-sm-12  wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
      <div id="carousel-container" style="padding:0px !important;">
        <div class="wow fadeInLeft">
          asdfasdfa
        </div>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding:0px !important;">
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" style="padding:0px !important;">
            <div class="item active">
              <img src="images/slider/1.jpg" alt="">
              <div class="carousel-caption">
                <h3>First slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
            <div class="item" style="padding:0px !important;">
              <img src="images/slider/2.jpg" alt="">
              <div class="carousel-caption">
                <h3>Second slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
            <div class="item" style="padding:0px !important;">
              <img src="images/slider/3.jpg" alt="">
              <div class="carousel-caption">
                <h3>Third slide label</h3>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="left carousel-control hidden-xs" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control hidden-xs" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div><!--/#carousel-example-generic-->
      </div><!--/#carousel-container-->
    </div>
  </div>
</section>
<!-- <section id="clients">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
          <p><img src="images/home/clients.png" class="img-responsive" alt=""></p>
          <h1 class="title">Happy Clients</h1>
          <p>Satisfied customers are the result of extraordinary customer services.<br> Some of those satisfied customers </p>
        </div>
        <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="col-xs-3 col-sm-2">
            <a href="#"><img src="images/home/client1.png" class="img-responsive" alt=""></a>
          </div>
          <div class="col-xs-3 col-sm-2">
            <a href="#"><img src="images/home/client2.png" class="img-responsive" alt=""></a>
          </div>
          <div class="col-xs-3 col-sm-2">
            <a href="#"><img src="images/home/client3.png" class="img-responsive" alt=""></a>
          </div>
          <div class="col-xs-3 col-sm-2">
            <a href="#"><img src="images/home/client4.png" class="img-responsive" alt=""></a>
          </div>
          <div class="col-xs-3 col-sm-2">
            <a href="#"><img src="images/home/client5.png" class="img-responsive" alt=""></a>
          </div>
          <div class="col-xs-3 col-sm-2">
            <a href="#"><img src="images/home/client6.png" class="img-responsive" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--/#clients-->
<!-- end of testimonial -->



<a href="" id="contact"></a>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center bottom-separator">
        <img src="images/home/under.png" class="img-responsive inline" alt="">
      </div>
      <div class="col-md-4 col-sm-6 ">
        <div class="testimonial bottom">
          <h2>Reach us through map</h2>
          <!-- <div class="media">
          <div class="pull-left">
          <a href="#"><img src="images/home/profile1.png" alt=""></a>
        </div>
        <div class="media-body">
        <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
        <h3><a href="#">- Jhon Kalis</a></h3>
      </div>
    </div> -->
    <!-- <div class="media">
    <div class="pull-left">
    <a href="#"><img src="images/home/profile2.png" alt=""></a>
  </div>
  <div class="media-body">
  <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
  <h3><a href="">- Abraham Josef</a></h3>
</div>
</div> -->
<div id="map"></div>
</div>
</div>
<div class="col-md-3 col-sm-6">
  <div class="contact-info bottom">
    <h2>Contacts</h2>
    <address>
      E-mail: <a href="mailto:qualitycaters@gmail.com">qualitycaters@gmail.com</a> <br>
      Phone: 9944085749 / 9444573879 <br>
    </address>

    <h2>Address</h2>
    <address>
      #43/392 B Indira Ganthi Salai,<br>
      Rajaji puram,<br>
      (near by GRT Thanga Maaligai)<br>
      Tiruvallur-602001
    </address>
  </div>
</div>
<div class="col-md-4 col-sm-12">
  <div class="contact-form bottom">
    <h2>Send a message</h2>
    <!-- <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php"> -->
    <div class="form-group">
      <input type="text" name="name" id="contactName" class="form-control"  placeholder="NAME">
    </div>
    <div class="form-group">
      <input type="email" name="email" id="contactEmail" class="form-control"  placeholder="EMAIL ID">
    </div>
    <div class="form-group">
      <textarea name="message" id="message"  class="form-control" rows="8" placeholder="YOUR MESSAGE HERE"></textarea>
    </div>
    <div class="form-group">
      <input type="button" name="submit" class="btn btn-submit" id="btnContactSubmit" value="Submit">
    </div>
    <div class="form-group">
      <span id="contact-message"></span>
    </div>
    <!-- </form> -->
  </div>
</div>
<div class="col-sm-12">
  <div class="copyright-text text-center">
    <p>&copy; Quality Caters <span id="currentYear"></span>. All Rights Reserved.</p>
    <p>Designed and maintained by <a target="_blank" href="https://gopithecontributer.github.io/">TechCreators</a></p>
  </div>
</div>
</div>
</div>
</footer>
<!--/#footer-->
<a href="javascript:void(0);" class=""><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCax4ccjoA1cYOg50T_Reor-vqd3seKXyM&callback=initMap"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jqueryui.js"></script>

<script>

window.initMap = function() {
  var thendralCaters = {lat: 13.124, lng: 79.912};
  var map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: thendralCaters});
  var marker = new google.maps.Marker({position: thendralCaters, map: map});
}
</script>
</body>
</html>
