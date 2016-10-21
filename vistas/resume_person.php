     <!-- main-header -->

<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='P') { ?>
<?php ob_start() ?> 
<!-- body-content -->
<div class="body-content clearfix" >
<div class="white-space-10"></div>
<div class="col-md-1" >
    
    </div>
<div class="bg-color2">
  <div class="container">
    <div class="row">
    
      <div class="col-md-10">

        <!-- box item details -->
        <div class="block-section box-item-details">
          <div class="resume-block">
            <p><a href="../index.php/update_resume_person" class="btn btn-theme btn-warning dark btn-block-xs">Actualizar Información</a></p>
            <div class="img-profile"><img src="../images/user/user1.png" alt=""></div><!--Ponga aui la foto-->
            <div class="desc">
            <?php foreach($person as $person): ?>
              <h2><?php echo $person["nombre1"].' '.$person["nombre2"].' '.$person["apellido1"].' '.$person["apellido2"] ?></h2>
              <p><?php echo $person["ciudad"].' - '.$person["departamento"]?></p>
            <?php endforeach ?>

              <h3 class="resume-sub-title"><span>Experiencia Laboral</span></h3>

            <?php foreach($exp_laboral as $job): ?>
              <h4><?php echo $job["cargo"]?></h4>
              <h5>&nbsp<?php echo $job["nombre_empresa"]?><span class="color-white-mute"> Fusagasugá - Cundinamarca </span> </h5>
              <h5>&nbspFecha: <span class="color-white-mute"> <?php echo $job["fecha_ini"].' - '.$job["fecha_fin"]?></span></h5>
              <h5>&nbspLogros: <span class="color-white-mute"><?php echo $job["logros"]?></span></h5>
                             
            <?php endforeach ?>

              <h3 class="resume-sub-title"><span>Educacion</span></h3>

            <?php foreach($estudies as $est): ?>
              <h4><?php echo $est["title"]?></h4>
              <h5><?php echo $est["centro_educativo"]?><span class="color-white-mute"> - <?php echo $est["municipio"].' '.$est["departamento"]?></span></h5>
            <?php endforeach ?> 

              <h3 class="resume-sub-title"><span>Referencias</span></h3>

            <?php foreach($ref as $ref): ?>
              <h4><?php echo $ref["name"]?></h4>
              <h5><?php echo $ref["profesion"]?> <span class="color-white-mute"> <?php echo $ref["telefono"]?></span></h5>
            <?php endforeach ?> 


              <h3  class="resume-sub-title"><span>Información Adicional</span></h3>
              <h4>Habilidades:</h4>
              <ul>
              <?php foreach($skills as $skills): ?>
                <li><?php echo $skills["nombre"]?></li>
              <?php endforeach ?> 
              </ul>
            </div>
          </div>
        </div><!-- end box item details -->


      </div>
      
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


     