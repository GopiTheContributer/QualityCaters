<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="thendral quality caters">
  <meta name="author" content="TechCreators">
  <title>Quality Caters</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

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

</head><!--/head-->

<body>
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 overflow">
          <div class="social-icons pull-left" style="padding:12px">
            <ul class="nav nav-pills">
              <li><a href="" style="color:black;"><i class="fa fa-phone"></i> 9944085749 / 9444573879 </a></li>
              <li><a href="mailto:qualitycaters@gmail.com" style="color:black;"><i class="fa fa-envelope"></i> qualitycaters@gmail.com</a></li>
              <!-- <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li><a href=""><i class="fa fa-dribbble"></i></a></li>
              <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
            </ul>
          </div>
          <div class="social-icons pull-right" style="padding:12px">
            <ul class="nav nav-pills" style="color:black;">
              <li><a href="" style="color:black;"><i class="fa fa-facebook"></i></a></li>
              <li>
                <a href="" id="btnLogin" id="btnLogin" data-toggle="modal" data-target="#myModal" style="color:black;">Login</a></li>
              </ul>
            </li>
            <!-- <li><a href=""><i class="fa fa-twitter"></i></a></li>
            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
            <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
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


  <div class="navbar navbar-inverse" role="banner" style="background: #fff8ba;">
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
        <li class="dropdown"><a href="blog.html">MENU</a>
          <!-- <i class="fa fa-angle-down"></i></a>
          <ul role="menu" class="sub-menu">
          <li><a href="#">Lorem ipsum dolor</a></li>
          <li><a href="#">Lorem ipsum dolor</a></li>
        </ul> -->
      </li>
      <li class="dropdown"><a href="portfolio.html">GALLERY</a></li>
      <li class="dropdown"><a href="portfolio.html">TESTIMONIAL</a>
        <!-- <i class="fa fa-angle-down"></i></a>
        <ul role="menu" class="sub-menu">
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
      </ul> -->
    </li>
    <li class="dropdown"><a href="portfolio.html">CONTACT US </a>
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



welcome to dashboard





<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center bottom-separator">
        <img src="images/home/under.png" class="img-responsive inline" alt="">
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="testimonial bottom">
          <h2>Testimonial</h2>
          <div class="media">
            <div class="pull-left">
              <a href="#"><img src="images/home/profile1.png" alt=""></a>
            </div>
            <div class="media-body">
              <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
              <h3><a href="#">- Jhon Kalis</a></h3>
            </div>
          </div>
          <div class="media">
            <div class="pull-left">
              <a href="#"><img src="images/home/profile2.png" alt=""></a>
            </div>
            <div class="media-body">
              <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
              <h3><a href="">- Abraham Josef</a></h3>
            </div>
          </div>
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
          <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
            <div class="form-group">
              <input type="text" name="name" class="form-control" required="required" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
            </div>
            <div class="form-group">
              <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" name="submit" class="btn btn-submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="copyright-text text-center">
          <p>&copy; Quality Caters <span id="currentYear"></span>. All Rights Reserved.</p>
          <p>Designed and maintained by <a target="_blank" href="#">TechCreators</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
