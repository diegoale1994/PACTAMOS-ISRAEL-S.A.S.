<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='E') { ?>

 <?php ob_start() ?>
        <div class="container">
          <div class="text-center logo"><h1 class="color-white">Mis offertas</h1></div>
        </div>
      </header><!-- end main-header -->
<?php if(!isset($_GET['update'])){ ?>
<div class="body-content clearfix" >
  <div class="bg-color1 block-section line-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 col-md-offset-0">
            <div class="box-list">
              <?php if (isset($myoffers)): 
              foreach($myoffers as $offer): ?>
              <div class="item">
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="no-margin-top"><a href="resume_details.html" class=""><?php echo $offer["vacante"] ?>  <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                    <h5><span class="color-black"><?php echo $offer['ciudad']?>, <?php echo $offer['departamento']?></span></h5>
                    <p><span class="color-white-mute"><?php echo $offer['fecha_publicacion']?></span></p>
                    <div class="col-md-10 col-md-offset-0">
                      <a href="/empleo/index.php/offer_update?update=<?php echo $offer['id_oferta'] ?>" class="btn btn-warning"> Modificar</a>   
                      <a href="/empleo/index.php/offer_del?delete=<?php echo $offer['id_oferta'] ?>" class="btn btn-danger"> Eliminar</a>  
                      <a href="/empleo/index.php/job_details?offerNo=<?php echo $offer['id_oferta'] ?>" class="btn btn-success"> Ver</a>                   
                    </div>
                    </div>
                  </div>
                </div><br>
               <?php endforeach;  endif?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


   <?php }else{ ?>


<div class="body-content clearfix" > 
        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form action='../index.php/update_offer' method='POST'>  
                <input type="hidden" name="id" value="<?php echo $offer[0]['id_oferta'] ?>">                
                  <div class="form-group">
                    <label>Vacante</label>
                    <input type="text" class="form-control " value="<?php echo $offer[0]['vacante'] ?>" name="vacante" placeholder="Secretaria, Maestro, Doctor, Ingeniero" Required>
                  </div>
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="color-white-mute"><small>Escribe acerca de tu empresa</small></div>
                    <textarea class="form-control" id="pub_content" rows="6" name= "descripcion" required><?php echo $offer[0]['descripcion'] ?></textarea>
                       <script type="text/javascript">
                          CKEDITOR.replace("pub_content");
                       </script>
                  </div>
                  <div class="form-group">
                    <label>Descripción profesional</label>
                    <div class="color-white-mute"><small>Que habilidades buscas en la persona</small></div>
                    <textarea class="form-control" id="pub_content1" rows="6" name= "descripcion_profesional" required><?php echo $offer[0]['descrip_prof'] ?></textarea>
                       <script type="text/javascript">
                          CKEDITOR.replace("pub_content1");
                       </script>
                  </div>
                   <div class="form-group">
                    <label>Horario de Trabajo</label>
                    <div class="color-white-mute"><small>Describe el horario de trabajo</small></div>
                     <input type="text" class="form-control " name="horario" placeholder="Lunes a Viernes de 8am - 6pm" value="<?php echo $offer[0]['horario'] ?>" Required>
                  </div>                      
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Departamento: <?php echo $offer[0]['departamento'] ?></label>
                        <select class="form-control" name="departamento">
                        <?php foreach($dpto as $dpto): ?>
                          <option><?php echo $dpto["departamento"]?></option>
                        <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Ciudad: <?php echo $offer[0]['ciudad']?></label>
                        <select class="form-control" name="ciudad">

                        <?php foreach($mun as $mun): ?>
                          <option <?php if ($mun==$offer[0]['ciudad']) {echo 'selected="selected"';};?>><?php echo $mun["municipio"]?></option>
                        <?php endforeach ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Vacantes</label>
                      <input type="number" class="form-control " name="vacantes", min="1" value = "<?php echo $offer[0]['vacantes'] ?>" Required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label>Salario</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" class="form-control" name="salario" value = "<?php echo $offer[0]['salario'] ?>"  Required>
                    </div>
                  </div> 

                  <div class="form-group ">
                    <button class="btn btn-warning btn-theme btn-block">Modificar</button>
                  </div>


                </form> <!-- end form post a job -->
              </div>
            </div>
          </div>
        </div>        
      </div><!--end body-content -->



<?php } ?>



<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


<?php
}else{
  header("Location: /empleo/index.php/404_error");
}}}
else{
  header("Location: /empleo/index.php/404_error");
  
  }?>


     