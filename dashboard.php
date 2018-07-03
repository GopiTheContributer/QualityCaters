<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="thendral quality caters, catering">
  <meta name="author" content="TechCreators">
  <title>Quality Caters</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href="css/jqgrid.css" rel="stylesheet">
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

</head>

<body style="background-color:#fff;">
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 overflow">
          <div class="social-icons pull-right" style="padding:12px">
            <ul class="nav nav-pills" style="color:black;">
              <span id="admin"><i class="fa fa-user" aria-hidden="true"></i><?php echo isset($_SESSION['user']) ? 'Welcome, ' . $_SESSION['user'] . ' ' : header('location: index.php'); ?><a href="logout.php">Logout </a><i class="fa fa-sign-out" aria-hidden="true"></i>
              </span>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="navbar navbar-inverse" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="index.php">
        <h1><img src="images/logo.png" alt="Quality Caters"></h1>
      </a>

    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">HOME</a></li>
      </ul>
    </div>
  </div>
</div>
</header>
<!--/#header-->

<div id="tab-container" class="container-fluid">
  <div class="row" style="height:540px;">
    <div class="col-md-12 col-sm-4">
      <ul id="tab1" class="nav nav-tabs">
        <li class="active"><a href="#tab1-item1" data-toggle="tab">Orders</a></li>
        <li id="event-tab"><a href="#tab1-item2" data-toggle="tab">Event</a></li>
        <!-- <li><a href="#tab1-item3" data-toggle="tab">Tab 3</a></li> -->
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active in" id="tab1-item1">
          <section>
            <div id="features-hire" class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
              <div class="container-fluid">
                <!-- <div class="row"> -->
                <div class="col-sm-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                  <div class="contact-form bottom">
                    <div style="padding:30px;">
                    </div>
                    <div class="col-lg-12">
                      <!-- jqgrid code -->
                      <div class="container-fluid">
                        <table class="table" id="jqgrid"></table>
                        <div id="pager"></div>
                      </div>
                    </div>
                  </div>
                  <!-- </div> -->
                </div>
              </div>
            </section>

          </div>
          <div class="tab-pane fade" id="tab1-item2">
            <!-- create event -->
            <section>
              <div id="features-hire" class="wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                      <div class="contact-form bottom">
                        <div style="padding:30px;">
                          Events created on this page will get added to the events dropdown automatically.
                        </div>
                        <div class="row" style="padding:15px;">
                          <div class="form-group col-md-4">
                            <input type="text" id="txtname" name="name" class="form-control" maxlength="25" required="required" placeholder="EVENT NAME">
                          </div>
                          <div class="form-group col-md-3" style="margin-top:-2px !important;">
                            <input type="button" id="btnCreateEvent" name="submit" class="btn  btn-submit" value="Create Event">
                          </div>
                          <div class="form-group col-md-5" style="margin-top:-4px !important;">
                            <span id="createEvent"></span>
                          </div>
                        </div>
                        <div class="container">
                          <table class="table" id="event"></table>
                          <div id="event-pager"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- end event create -->
          </div>
          <!-- <div class="tab-pane fade" id="tab1-item3">
          <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div> -->
      </div>
    </div>
  </div>
</div><!--/#table-container-->





<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="copyright-text text-center">
          <p>&copy; Quality Caters <span id="currentYear"></span>. All Rights Reserved.</p>
          <p>Designed and maintained by <a target="_blank" href="https://gopithecontributer.github.io">TechCreators</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--/#footer-->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquerymigrate.js"></script>
<script type="text/javascript" src="js/grid.locale-en.js"></script>
<script type="text/javascript" src="js/jqGrid.js"></script>
<script type="text/javascript" src="js/jqueryui.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>
</body>
</html>
