<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='E') { ?>
 

 <?php ob_start() ?>
        <div class="container">
          <div class="text-center logo"><h1 class="color-white">Solcitar Requerimiento</h1></div>
        </div>

      </header><!-- end main-header -->
      <!-- body-content -->
      <?php if(isset($_GET['state'])){
            if($_GET['state']=="create"){
              ?>
              
              <center><h4>oferta creada Con exito!!!</h4></center>
              
              <?php
            }
           } ?>
      <div class="body-content clearfix" > 
        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form action='../index.php/job_post_new' method='POST'>                  
                  <div class="form-group">
                    <label>Vacante</label>
                    <input type="text" class="form-control " name="vacante" placeholder="Secretaria, Maestro, Doctor, Ingeniero" Required>
                  </div>
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="color-white-mute"><small>Escribe acerca de tu empresa</small></div>
                    <textarea class="form-control" rows="6" name= "descripcion"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Descripción profesional</label>
                    <div class="color-white-mute"><small>Que habilidades buscas en la persona</small></div>
                    <textarea class="form-control" rows="6" name= "descripcion_profesional"></textarea>
                  </div>
                   <div class="form-group">
                    <label>Horario de Trabajo</label>
                    <div class="color-white-mute"><small>Describe el horario de trabajo</small></div>
                     <input type="text" class="form-control " name="horario" placeholder="Lunes a Viernes de 8am - 6pm" Required>
                  </div>
                      <div class="form-group">
                   <select class="form-control" name ="area" data-live-search="true">
                          <option data-tokens="ketchup mustard" value="A" >A</option>
                          <option data-tokens="mustard" value= "R">R</option>
                          <option data-tokens="ketchup mustard" value ="E">E</option>  
                          <option data-tokens="ketchup mustard" value ="A">A</option>   
                          <option data-tokens="ketchup mustard" value ="S">S</option>                           
                        </select>
                        </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Departamento</label>
                        <input type="text" class="form-control " name="departamento" placeholder="Cundinamarca, Tolima...">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Municipio</label>
                        <input type="text" class="form-control " name="ciudad" placeholder="Ciudad">
                      </div>
                    </div>
                  </div>

                     <div class="form-group">
                    <label>Tiempo (no se exactamente que debe ir cambio si algo por select)</label>
                    <input type="text" class="form-control " name="tiempo" placeholder="tiempo">
                  </div>
  

                  <div class="form-group ">
                    <button class="btn btn-t-primary btn-theme">Enviar</button>
                  </div>


                </form> <!-- end form post a job -->
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


     