<?php
session_start();
include "koneksi/ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/icon.ico">
  </head>
  <body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">PENYIMPANAN <span class="logo-dec">DOKUMEN</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#main-header">Beranda</a></li>
                <li class=""><a href="#feature">Login</a></li>
                <li class=""><a href="#portfolio">Tentang</a></li>
                <ul class="nav navbar-nav navbar-right">
                </ul>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s" >
              <h2 class="bnr-sub-title"></h2>
              <div class="logo">
		            <img src="img/inbox.png" alt="" />
	            </div>
              <h3 class="bnr-sub-title">WEBSITE PENYIMPANAN DOKUMEN</h3>
                <h3 class="bnr-sub-title"><span class="logo-dec">PT LENTERA BUANA JAYA</span></h3>
            </div>

          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">

        <div class="login_wrapper" style="padding-top: 10%; padding-right: 10%; padding-bottom: 50%; padding-left: 10%;">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="admin/login/proses_login.php" id="login" name="login" method="post">
              <center><h1>Login</h1></center>
              <div class="form-group has-feedback">
                <input type="text" id="username" name="username_admin" class="form-control" autocomplete="off" maxlength="50" placeholder="Username" required="username" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control" autocomplete="off" maxlength="50" placeholder="Password" required="password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="text-center">
                
              <a href="../../index.php"><button type="submit" class="btn btn-primary"> Masuk</button></a>
              </div>

              <div class="clearfix"></div>

              
            </form>
          </section>
        </div>
      </div>
        <!-- </div> -->
      </div>
    </section>
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Tentang</h2>
            <p class="sub-title pad-bt15">tentang PT Lentera Buana Jaya</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-6 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="img/background.jpg" class="img-responsive">
              <figcaption>
                <div class="column"><h2>Visi</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <h2>Misi</h2>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="col-md-3"></div>
        </div>
        <hr class="bottom-line">
      </div>
    </section>

  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>