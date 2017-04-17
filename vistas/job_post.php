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
                    <label>Descripción de la Oferta</label>
                    <div class="color-white-mute"><small>Qué se debe hacer</small></div>
                    <textarea class="form-control" id="pub_content" rows="6" name= "descripcion" required></textarea>
                       <script type="text/javascript">
                          //CKEDITOR.replace("pub_content");
                       </script>
                  </div>
                  <div class="form-group">
                    <label>Descripción profesional</label>
                    <div class="color-white-mute"><small>Que habilidades se requieren</small></div>                   
                    <textarea class="form-control" id="pub_content1" rows="6" name= "descripcion_profesional" required></textarea>
                       <script type="text/javascript">
                          //CKEDITOR.replace("pub_content1");
                       </script>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Horario de Trabajo</label>
                      <div class="color-white-mute"><small>Ejemplo: Lunes a Viernes de 8am - 6pm</small></div>                     
                    </div>
                    <div class="col-md-2">
                      <label>De</label>
                      <select class="form-control" name="diainicio">
                        <option>Lunes</option>
                        <option>Martes</option>
                        <option>Miércoles</option>
                        <option>Jueves</option>
                        <option>Viernes</option>
                        <option>Sábado</option>
                        <option>Domingo</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <label>A</label>
                      <select class="form-control" name="diafinal">
                        <option>Lunes</option>
                        <option>Martes</option>
                        <option>Miércoles</option>
                        <option>Jueves</option>
                        <option>Viernes</option>
                        <option>Sábado</option>
                        <option>Domingo</option>
                      </select>
                    </div>
                    <div class="col-md-4">
                      <label>Desde las</label>
                      <div class="input-group">
                        <input class="form-control" type="number" name="horainicio">
                        <span class="input-group-addon" style="padding: 0; width: 30%" >
                          <select class="form-control input-sm" name="hora1">
                            <option>am</option>
                            <option>pm</option>
                          </select>
                        </span>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label>Hasta las</label>
                      <div class="input-group">
                        <input class="form-control" type="number" name="horafinal">
                        <span class="input-group-addon" style="padding: 0; width: 30%" >
                          <select class="form-control input-sm" name="hora2">
                            <option>am</option>
                            <option>pm</option>
                          </select>
                        </span>
                      </div>
                    </div>                    
                  </div>
                  <div class="form-group">
                    <div class="col-md-6"><br>
                     <label>Departamento</label>
                      <select class="form-control" name="departamento">
                      <?php foreach($dpto as $dpto): ?>
                        <option><?php echo $dpto["departamento"]?></option>
                      <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-6"><br>
                      <label>Ciudad</label>
                      <select class="form-control" name="ciudad">
                      <?php foreach($mun as $mun): ?>
                        <option><?php echo $mun["municipio"]?></option>
                      <?php endforeach ?>
                      </select> 
                    </div>
                  </div>
                  
                <div class="form-group col-md-6"><br>
                    <label>Vacantes</label>
                    <input type="number" class="form-control " name="vacantes"  min="1" Required>
                  </div>
                  <div class="form-group col-md-6"><br>
                    <label>Salario</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" class="form-control" placeholder="700.000" name="salario" Required>
                    </div>
                  </div> 

                  <div class="form-group ">
                    <button class="btn btn-t-primary btn-theme btn-block">Enviar</button>
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


     