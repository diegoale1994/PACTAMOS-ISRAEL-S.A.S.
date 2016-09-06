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
      <div class="body-content clearfix" > 
        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form>                  
                  <div class="form-group">
                    <label>Cargo</label>
                    <input type="text" class="form-control "  placeholder="Secretaria, Maestro, Doctor, Ingeniero">
                  </div>
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="color-white-mute"><small>Escribe acerca de sus funciones.</small></div>
                    <textarea class="form-control" rows="6" placeholder="Enter Job Description"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Departamento</label>
                        <input type="text" class="form-control "  placeholder="Cundinamarca, Tolima...">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Municipio</label>
                        <input type="text" class="form-control "  placeholder="Ciudad">
                      </div>
                    </div>
                  </div>

                  <!-- checkboxs -->
                  <div class="form-group">
                    <label>Categorias</label>
                    <div class="row clearfix">
                      <div class="col-md-6">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Contador
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Administrador
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Cajero
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            SAlud
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Arquitectura
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Diseño
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Educación
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Ingeniero
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Tecnología
                          </label>
                        </div>                                               
                      
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Manufactura
                          </label>
                        </div>
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Audiovisuales
                          </label>
                        </div>                        
                        <div class="checkbox flat-checkbox">
                          <label>
                            <input type="checkbox"> 
                            <span class="fa fa-check"></span>
                            Otros
                          </label>
                        </div>
                      </div>
                    </div>
                  </div><!-- end checkboxs -->


                  <div class="form-group">
                    <label>Salario (Opcional)</label>
                    <div class="row clearfix">
                      <div class="col-xs-6">
                        <input type="text" class="form-control "  placeholder="Ejemplo: 50,000.00">
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option>Hora</option>
                          <option>Día</option>
                          <option>Semana</option>
                          <option>Mes</option>
                          <option>Año</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Experiencia (opcional)</label>
                    <div class="row clearfix">
                      <div class="col-xs-6">
                        <input type="text" class="form-control "  placeholder="Como Contador, Ingeniero ...">
                      </div>
                      <div class="col-xs-6">
                        <select class="form-control">
                          <option>1 año</option>
                          <option>2 años</option>
                          <option>3 años</option>
                          <option>4 años</option>
                          <option>5 años</option>
                        </select>
                      </div>
                    </div>
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


     