<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='E' || $_SESSION['nivel_de_acceso']=='A') { ?>
 

 <?php ob_start() ?>
      </header><!-- end main-header -->
      <!-- body-content -->
      <div class="body-content clearfix" >
        <!-- company profile -->
        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">

                <!-- box item details -->
                <div class="block-section box-item-details">
                  <!-- logo company-->
                  <?php foreach ($company as $value): ?>
                  <div class="row">
                    <div class="col-md-8">
                      <a href=""><img src="../images/Company/<?php echo $value["name_image"];?>" alt="" width="50%"></a>
                    </div>
                    <div class="col-md-4">
                      <p class="text-right"><a href="https://<?php echo $value["website"];?>" data_target="_blank">Ir al sitio web</a></p>
                    </div>
                  </div><!-- end logo company-->

                  <!-- Bout Company-->
                  
                  <h3 class="title " id="cp-about"><?php echo $value['nombre']; ?></h3>
                  <h4>Razon Social: <?php echo $value['razon']; ?></h3>
                  <h4>Sector: <?php echo $value['sector']; ?></h3>
                  <p><?php echo $value['descripcion']; ?></p>

                  <h3 class="title" id="cp-contact">Contacto</h3>
                  <h4>Teléfono: <strong><?php echo $value['telefono']; ?></strong></h4>
                  <h4>Dirección: <strong><?php echo $value['direccion']; ?></strong></h4>
                  <h4>E-mail: <strong><?php echo $value['correo']; ?></strong></h4>
                  <h4>Sitio Web: <strong><?php echo $value['website']; ?></strong></h4>
                  
                  <!-- jobs list-->
                   <?php   endforeach ?>           
                </div><!-- end box item details -->


              </div>
              <?php if ( $_SESSION['nivel_de_acceso']=='E') { ?>
              <div class="col-md-3">

                <!-- box afix right -->
                <div class="block-section " id="affix-box">
                  <div class="text-center">
                    <p><a href="../index.php/update_resume_company" class="btn btn-theme btn-warning btn-block">Actualizar Información</a></p>

                    <ul class="list-unstyled nav-sidebar">
                      <li>
                        <a href="#cp-about" class="link-innerpage">Acerca de Nosotros</a>
                      </li>
                      <li>
                        <a href="#cp-contact" class="link-innerpage">Contacto</a>
                      </li>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div> 
      </div><!--end body-content -->

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


<?php
}else{
  header("Location: /empleo/index.php/404_error");
}}}
else{
  header("Location: /empleo/index.php/404_error");
  
  }?>