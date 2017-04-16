

<?php ob_start() ?>
        <div class="container">
          <div class="text-center logo no-margin-bottom"> <a href="#"><img src="../images/logo_pactamos.png" alt="" width="30%"></a></div>
          <h3 class="color-white text-center "></h3>
          <div class="white-space-50"></div>
        </div>
      </header><!-- end main-header -->
      <div class="body-content clearfix" >
        <div class="block-section bg-color2">
          <div class="container">
            <!-- text centered -->
            <div class="text-center">
            <?php if(isset($_GET['status'])){
              if($_GET['status']=="verified"){
                ?>
               <h1>Tu cuenta ha sido Activada, <a href="/empleo/index.php/loggin">Ingresa.</a></h1>
                
                <?php
              }
             }else{ ?>
              <h1>Revisa tu bandeja de Entrada, para terminar el registro.</h1>
             <H2> <?php 
              if (isset($_SESSION['correo_sin_activacion'])){
              echo $_SESSION['correo_sin_activacion'];
              }?></H2>
              <?php } ?>
          </div>
        </div>        
      </div><!--end body-content -->
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>