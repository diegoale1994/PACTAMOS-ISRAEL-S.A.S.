   <?php ob_start() ?>
<div class="">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../images/servicios/servicio1.png" alt="Chania">
    </div>

    <div class="item">
      <img src="../images/servicios/servicio2.png" alt="Chania">
    </div>

    <div class="item">
      <img src="../images/servicios/servicio3.png" alt="Flower">
    </div>

    <div class="item">
      <img src="../images/servicios/servicio4.png" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
</header><!-- end main-header -->


      <!-- body-content -->
     <div class="body-content clearfix" >

        <!--<div class="block-section bg-color1">
          <div class="container">
            <div class="row text-center">
              <div class="col-md-4">
                <h3 class="font-2x ">203,285</h3>
                <h4 class="color-text">Miembros Registrados</h4>
              </div>
              <div class="col-md-4">
                <h3 class="font-2x ">3,603,945</h3>
                <h4 class="color-text">Empleos Posteados</h4>
              </div>
              <div class="col-md-4">
                <h3 class="font-2x ">53,945</h3>
                <h4 class="color-text">Compañias Afiliadas</h4>
              </div>
            </div>
          </div>
        </div>-->

        <div class="bg-color1 block-section line-bottom">
          <div class="container text-center">
            <h2 class="">La calidad del servicio la brinda nuestro Recurso Humano.</h2>
            <div class="white-space-15"></div>
            <p>PACTAMOS ISRAEL S.A.S., es una empresa líder en proceso de gestión Humana que brinda respaldo y asesoría a nuestros clientes en temas relacionados con selección, contratación de personal y administración de nómina, garantizando así la calidad, confiabilidad, seguridad, eficiencia, responsabilidad y calidez para competir y suplir las exigencias y necesidades de los servicios prestados en el mercado.</p>

            

            <h4>Pactamos ayuda a personas a encontrar trabajo: <a href="#" class="color-white-mute">Es hora de buscar tu futuro.</a></h4>           

          </div>
        </div><!-- end block top -->

        <div class="block-section bg-color4">
          <div class="container">
            <center><h1 class="color-white">Te preguntarás, ¿Cómo funciona Pactamos?</h1></center>
            <div class="white-space-10"></div>
            <center><h3 class="color-white">Tan sencillo como dos clicks!</h3></center>
            <div class="white-space-50"></div>
            <!-- Start form Company -->
            <div class="col-md-6">
              <div class="panel panel-md">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <!-- buttons top -->
                      <p><a href="../index.php/register" class="btn btn-primary btn-theme btn-block">¿Por qué Registrar mi empresa?</a></p>
                      <!-- end buttons top -->
                      <div class="white-space-10"></div>
                      <p class="text-center"><span class="span-line">Te lo Explicamos</span></p>
                      <ul>
                        <li>El registro de tu Empresa no tiene costo</li>
                        <li>Puedes subir tus peticiones</li>
                        <li>Podemos publicar tu oferta</li>
                        <li>Te brindamos todo el seguimiento corporativo</li>
                        <li>Contratamos el personal que requieras</li>
                        <li>Afiliamos tus empleados a Seguridad social</li>
                      </ul>                      
                    </div>
                  </div>
                </div>
              </div>   
            </div>
            <!--End form Company-->

            <!-- Start form Person -->
            <div class="col-md-6">
              <div class="panel panel-md">
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <!-- buttons top -->
                      <p><a href="../index.php/register" class="btn btn-danger btn-theme btn-block">Estoy buscando Empleo</a></p>
                      <!-- end buttons top -->
                      <div class="white-space-10"></div>
                      <p class="text-center"><span class="span-line">¿Qué debo hacer?</span></p>
                     <ul>
                       <li>Registrate sin costo</li>
                       <li>Alimenta tu hoja de vida</li>
                       <li>Mira las ofertas disponibles para ti</li>
                       <li>Aplica a cualquier oferta que quieras</li>
                       <li>Harás parte del proceso de selección</li>
                       <li>Si cumples con el perfil, serás contratado!</li>
                     </ul>
                    </div>
                  </div>
                </div>
              </div>   
            </div>
            <div class="col-md-12">
            <div class="white-space-50"></div>
              <a href="../index.php/register" class="btn btn-success btn-theme btn-block">¡Quiero Registrarme!</a>
              <a href="../index.php/contact" class="btn btn-warning btn-theme btn-block">Me gustaria saber un poco más</a>
                     
            </div>
            
            <!--End form Person -->
            
          </div>
        </div>

      </div><!--end body-content -->
 <?php if(isset($_GET['state'])){
            if($_GET['state']=="fail"){
              ?>
              
              <center><h4>usuario o contraseña incorrecta</h4></center>
              
              <?php
            }
           } ?>

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>