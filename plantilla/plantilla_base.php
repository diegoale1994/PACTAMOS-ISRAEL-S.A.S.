<?php
  session_start();
$inac = 900;
if (isset($_SESSION['tiempo'])){ 
$tiempo_actual = time() - $_SESSION['tiempo'];
if($tiempo_actual > $inac){
 header("Location: /empleo/index.php/loggout?time_session=out");
}
}
?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobplanet - Responsive Job Board HTML Template </title>

    <!--favicon-->
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">

    <!-- bootstrap -->
    <link href="../plugins/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="../plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- lightbox -->
    <link href="../plugins/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Themes styles-->
    <link href="../css/theme.css" rel="stylesheet">  
    <!-- Your custom css -->
    <link href="../css/theme-custom.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>  
  <body>
    <!-- wrapper page -->
    <div class="wrapper">
      <!-- main-header -->
      <header class="main-header">


        <!-- main navbar -->
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav">
                <li class=""><a href="/empleo/index.php/job_list"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="/empleo/index.php/job_post"><strong>Post a Job</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Articles &amp; Blog</a></li>
                    <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
                    <li><a href="error_404.html">Error 404</a></li>
                    <li><a href="shortcode.html">Short Code</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="job_list.html">Find a Job</a></li>
                    <li><a href="job_details.html">Job Details</a></li>
                    <li><a href="resume_list.html">Find Resumes</a></li>
                    <li><a href="resume_details.html">Resume Details</a></li>
                    <li><a href="job_post_2.html">Post a Job</a></li>
                    <li><a href="company_page.html">Company Profile</a></li>
                  </ul>
                </li>
              </ul>  


<?php 

if (isset($_SESSION['tipo_documento'])){ ?>
<ul class="nav navbar-nav nav-block-left">
              <li class="dropdown">
                <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                  <img src="../images/people/4.jpg" alt="" class="img-profile"><?php echo $_SESSION['nombre'];?><b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="my_alerts.html"> My Alerts </a></li>
                  <li><a href="my_notifications.html"> Notifications <span class="badge ">5</span></a></li>
                  <li><a href="change_password.html"> Change Password</a></li>
                  <li><a href="/empleo/index.php/loggout"> Logout</a></li>
                </ul>
              </li>
            </ul>
<?php } else{?>


              <ul class="nav navbar-nav navbar-right">
                <li class="link-btn"><a href="/empleo/index.php/login"><span class="btn btn-theme btn-pill btn-xs btn-line">Login</span></a></li>
                <li class="link-btn"><a href="register.html"><span class="btn btn-theme  btn-pill btn-xs btn-line">Register</span></a></li>
              </ul>
            </div>
          </div>
        </nav><!-- end main navbar -->
<?php }?>
        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">
            <a href="#" class="btn-nav-toogle first">
              <span class="bars"></span>
              Menu
            </a>
            <div class="mobile-nav-block">
              <h4>Navigation</h4>
              <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span>
                Close
              </a>      

              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Find a Job</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Find Resumes</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Post a Job</strong></a></li>
                <li><a href="login.html"><strong>Login</strong></a></li>
                <li><a href="register.html"><strong>Register</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Pages <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Articles &amp; Blog</a></li>
                    <li><a href="terms_privacy.html">Terms &amp; Privacy</a></li>
                    <li><a href="error_404.html">Error 404</a></li>
                    <li><a href="shortcode.html">Short Code</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Features <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="job_list.html">Find a Job</a></li>
                    <li><a href="job_details.html">Job Details</a></li>
                    <li><a href="resume_list.html">Find Resumes</a></li>
                    <li><a href="resume_details.html">Resume Details</a></li>
                    <li><a href="job_post_2.html">Post a Job</a></li>
                    <li><a href="company_page.html">Company Profile</a></li>
                  </ul>
                </li>
              </ul>    
            </div>
          </nav>
        </div><!-- mobile navbar -->

     <?php 
        echo $contenido;
       ?>
      <!-- main-footer -->
      <footer class="main-footer">


        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <ul class="list-inline link-footer text-center-xs">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-sm-6 ">
              <p class="text-center-xs hidden-lg hidden-md hidden-sm">Stay Connect</p>
              <div class="socials text-right text-center-xs">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- end main-footer -->

    </div><!-- end wrapper page -->




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../plugins/jquery.js"></script>
    <script src="../plugins/jquery.easing-1.3.pack.js"></script>
    <!-- jQuery Bootstrap -->
    <script src="../plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <!-- Lightbox -->
    <script src="../plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JS -->
    <script src="../theme/js/theme.js"></script>

    <!-- maps -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script> 
    <script src="../plugins/gmap3.min.js"></script>
    <!-- maps single marker -->
    <script src="../js/map-detail.js"></script>

  </body>
</html>