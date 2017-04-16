<?php
 
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

    <title>Pactamos Israel SAS</title>
    <meta name="description" content="Busqueda de empleo en colombia, empleo en fusagasuga, hojas de vida, contratacion de pesonal, publica tu empleo">
    <meta name="keywords" content="empleo, encontrar empleo, empleo en colombia, empleo fusagasuga, empleo fusa, empleo sumapaz, empleo cundinamarca, contratacion, personal, hoja de vida">
    <link rel="apple-touch-icon" href="../images/logo_pactamos.png">
    <link rel="shortcut icon" href="../images/logo_pactamos.png" type="image/x-icon">
   <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <link href="../plugins/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">  
    <link href="../css/theme-custom.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> 


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
        <nav class="navbar navbar-default main-navbar hidden-sm hidden-xs">
          <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                  
              <?php 
                if (isset($_SESSION['nivel_de_acceso'])){ 
                  if($_SESSION['nivel_de_acceso']=='A'){
                  ?>
                <ul class="nav navbar-nav">
                  <li style="padding:5px"><a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="50"></a></li>                    
                  <li class=""><a href="../index.php/requeriment"><strong>Requerimientos</strong>
                 
                  </a></li>
                  <li class=""><a href="../index.php/resumes">Hojas de Vida</a></li> 
                  <li class=""><a href="../index.php/clients">Empresas</a></li> 
                  <li class=""><a href="../index.php/manage_users">Usuarios</a></li>                
                </ul>  
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                      <img src="../images/logo_pactamos.png" alt="" class="img-profile"><?php echo $_SESSION['nombre'];?><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="/empleo/index.php/loggout"> Salir</a></li>
                    </ul>
                  </li>
                </ul>
              <?php }
                if($_SESSION['nivel_de_acceso']=='Cm'){
                  ?>
                    <ul class="nav navbar-nav">
                      <li><a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="30"></a></li>
                      <li class=""><a href="../index.php/resume_company"><strong>Perfil</strong></a></li>  
                      <li class=""><a href="../index.php/job_list"><strong>Clientes</strong></a></li>
                      <li class=""><a href="../index.php/my_offers">Hojas de Vida</a></li> 
                    </ul>  
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                          <img src="../images/logo_pactamos.png" alt="" class="img-profile"><?php echo $_SESSION['nombre'];?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="/empleo/index.php/loggout"> Salir</a></li>
                        </ul>
                      </li>
                    </ul>
                  <?php } 
                  if($_SESSION['nivel_de_acceso']=='Cn'){
                  ?>
                    <ul class="nav navbar-nav">
                      <li><a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="30"></a></li>
                      <li class=""><a href="../index.php/resume_company"><strong>Perfil</strong></a></li>  
                      <li class=""><a href="../index.php/job_list"><strong>Empresas</strong></a></li>
                      <li class=""><a href="../index.php/my_offers">Contabilidad</a></li> 
                    </ul>  
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                        <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                          <img src="../images/people/4.jpg" alt="" class="img-profile"><?php echo $_SESSION['nombre'];?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="/empleo/index.php/loggout"> Salir</a></li>
                        </ul>
                      </li>
                    </ul>
                  <?php } 
                  if($_SESSION['nivel_de_acceso']=='E'){
                  ?>
                <ul class="nav navbar-nav">
                  <li><a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="30"></a></li>
                  <li class=""><a href="../index.php/resume_company"><strong>Perfil</strong></a></li>
                  <li class=""><a href="../index.php/job_post"><strong>Publicar oferta</strong></a></li>
                  <li class=""><a href="../index.php/my_offers">Mis Ofertas</a></li>   
                  <li class=""><a href="../index.php/my_account">Estado de Cuenta</a></li>               
                </ul>  
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                      <img src="../images/logo_pactamos.png" alt="" class="img-profile"><?php echo $_SESSION['nombre'];?><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="/empleo/index.php/loggout"> Salir</a></li>
                    </ul>
                  </li>
                </ul>
              <?php } 
              if($_SESSION['nivel_de_acceso']=='P'){
              ?>
                <ul class="nav navbar-nav">

                  <li ><a href="/empleo/index.php/home"><img src="../images/logo_pactamos.png" alt="" width="30"></a></li>
                   <li class=""><a href="../index.php/resume_person">Perfil</a></li>
                  <li class=""><a href="#">Busca Ofertas</a></li>
                  
                  <li style="padding:15px"><form  action = "/empleo/index.php/job_list" method ="post"> <div class="col-md-5"> <input class="form-control" name = "trabajo" placeholder="Nombre del empleo" required ></div><div class="col-md-4"> <input class="form-control" name = "donde" placeholder="Lugar"></div> <div class="col-md-3"><button class="btn btn-block btn-theme  btn-success">Buscar</button> </div></form></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="link-profile dropdown-toggle"  data-toggle="dropdown" >
                      <img src="../images/logo_pactamos.png" alt="" class="img-profile"><?php echo $_SESSION['nombre'];?><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="my_alerts.html"> My Alerts </a></li>
                      <li><a href="my_notifications.html"> Notifications <span class="badge ">5</span></a></li>
                      <li><a href="change_password.html"> Cambiar contraseña</a></li>
                      <li><a href="/empleo/index.php/loggout"> SAlir</a></li>
                    </ul>
                  </li>
                </ul>
              <?php }}else{ ?>
                <ul class="nav navbar-nav">
                  <li><a href="/empleo/index.php/home"><img src="../images/logo_pactamos.png" alt="" width="30"></a></li>
                  <li class=""><a href="../index.php/home"><strong>Inicio</strong></a></li>
                  <!--<li class=""><a href="../index.php/job_list"><strong>Ofertas</strong></a></li>-->

                  <li class=""><a href="../index.php/company">¿Quienes somos?</a></li>
                  <li class=""><a href="../brochure/brochure pactamos proyecto.html" target="_blank">Servicios</a></li>
                  <li class=""><a href="../index.php/contact">Contáctenos</a></li>                  
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="link-btn"><a href="../index.php/login"><span class="btn btn-theme btn-pill btn-xs btn-line">Ingresar</span></a></li>
                  <li class="link-btn"><a href="../index.php/register"><span class="btn btn-theme  btn-pill btn-xs btn-line">Registro</span></a></li>
                </ul>
          <!-- end main navbar -->
              <?php }?> 
              </div>
            </div>
          </nav> 
              

        <!-- mobile navbar -->
        <div class="container">
          <nav class="mobile-nav hidden-md hidden-lg">
            <a href="#" class="btn-nav-toogle first">
              <span class="bars"></span>
              Menú
            </a>
            <div class="mobile-nav-block">
              <h4>Navegación</h4>
              <a href="#" class="btn-nav-toogle">
                <span class="barsclose"></span>
                Cerrar
              </a>
              <ul class="nav navbar-nav">
                <li class=""><a href="job_list.html"><strong>Busca tu Trabajo</strong></a></li>
                <li class=""><a href="resume_list.html"><strong>Encuentra personal</strong></a></li>
                <li  class=""><a href="job_post_1.html"><strong>Publica tu oferta</strong></a></li>
                <li><a href="login.html"><strong>Ingresar</strong></a></li>
                <li><a href="register.html"><strong>Registro</strong></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >Acerca de <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about.html">¿Quienes somos?</a></li>
                    <li><a href="contact.html">Contáctenos</a></li>                    
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
          <li><a href="../index.php/home">Inicio</a></li>                
          <li><a href="../index.php/company">¿Quienes Somos?</a></li>
          <li><a href="../index.php/contact">Contáctenos</a></li>
        </ul>
      </div>
      <div class="col-sm-6 ">
        <p class="text-center-xs hidden-lg hidden-md hidden-sm">Permanece conectado</p>
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