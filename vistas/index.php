   <?php ob_start() ?>
   <div class="hero-header">
          <div class="inner-hero-header">
            <div class="container">
              <div class="text-center logo"> 
                <a href="index.php/home"><img src="../images/logo_pactamos.png" alt="" width="200"></a>
              </div>
              <div class="relative">
                <i class="fa fa-globe ic-fade-globe"></i>                
                <form class="form-search-home" method="post" action="job_list.html">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>¿Qué buscas?</label>
                        <input class="form-control  input-lg" placeholder="Nombre del empleo, ">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>¿Donde?</label>
                        <input class="form-control input-lg" placeholder="Ciudad, Provincia, Departamento">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-t-primary btn-lg btn-theme btn-pill btn-block">Buscar Empleo</button>
                  </div>
                  <div class="text-center">
                    <!--<a href="#modal-advanced" data-toggle="modal">Búsqueda Avanzada</a>-->
                  </div>
                </form> 
              </div>
            </div>
          </div>

          
          <!-- modal Advanced search -->
          <div class="modal fade" id="modal-advanced" >
            <div class="modal-dialog ">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Advanced Job Search</h4>
                  </div>
                  <div class="modal-body">
                    <h5>Find Jobs</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>With all of these words</label>
                          <input type="text" class="form-control " name="text" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>With the exact phrase</label>
                          <input type="text" class="form-control " name="text" >
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Show jobs of type</label>
                      <select class="form-control">
                        <option value="all">All job types</option>
                        <option value="fulltime">Full-time</option>
                        <option value="parttime">Part-time</option>
                        <option value="contract">Contract</option>
                        <option value="internship">Internship</option>
                        <option value="temporary">Temporary</option>
                      </select>
                    </div>
                    <div class="white-space-10"></div>
                    <h5>Where and When</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Radius  </label>
                          <select id="radius" class="form-control">
                            <option value="0">only in</option>
                            <option value="5">within 5 kilometers </option>
                            <option value="10">within 10 kilometers </option>
                            <option value="15">within 15 kilometers </option>
                            <option selected="" value="25">within 25 kilometers </option>
                            <option value="50">within 50 kilometers </option>
                            <option value="100">within 100 kilometers </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Of  </label>
                          <input type="text" class="form-control" maxlength="250" value="United States">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Age - Jobs published  </label>
                          <select class="form-control">
                            <option value="any">anytime</option>
                            <option value="15">within 15 days</option>
                            <option value="7">within 7 days</option>
                            <option value="3">within 3 days</option>
                            <option value="1">since yesterday</option>
                            <option value="last">since my last visit</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Display</label>
                          <select class="form-control">
                            <option selected="" value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success btn-theme">Find Jobs</button>
                  </div>
                </form>
              </div>
            </div>
          </div><!-- end modal forgot password -->

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
            <hr/>
            <div class="white-space-15"></div>
            

            <hr/>
            <div class="white-space-15"></div>
            <h2>Podemos Ayudarte</h2>
            <p>Pactamos provee facilidades a todos nuestros clientes.</p>
            <div class="white-space-15"></div>

            <!-- box with icon center -->
            <div class="row">
              <div class="col-md-6">
                <div class="box-ic-center">
                  <i class="fa fa-clipboard ic-box"></i>
                  <h4>Publica tu Oferta</h4>
                  <p>Muy pronto disponible para Empresarios Exitosos, como tu!</p>
                  <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark" disabled>Muy Pronto</a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box-ic-center ">
                  <i class="fa fa-search ic-box"></i>
                  <h4>Busca Empleo</h4>
                  <p>Es tan fácil como teclear unas cuantas palabras y hacer un click! </p>
                  <a href="#" class="btn btn-sm btn-pill btn-theme btn-line dark">Buscar</a>
                </div>
              </div>
            </div><!-- box with icon center -->

          </div>
        </div><!-- end block top -->

        <!-- testimonial -->
        <div class="bg-color2 block-section line-bottom">
          <div class="container text-center">
            <h2>Nuestros Servicios</h2>
            <div class="white-space-30"></div>
            <div class="row">

              <div class="col-md-3">  
                <div class="panel panel-default" style="padding: 20px">
                  <p >
                    <h2><b>Ingreso y Contratación de Personal</b></h2>
                    <br>
                    Contratación de personal
                    Afiliaciones a seguridad social
                    Exámenes medico ocupacionales
                    Inducción al trabajador
                    Exámenes de laboratorio
                    Bienestar al personal
                    Procesos adicionales (según requerimiento del cliente, se facturan independiente)
                    Asesoría en seguridad y salud en el trabajo
                  </p>
                  <img src="../images/people/servicio1.png" alt="" width="200">                  
                </div>
              </div>

              <div class="col-md-3">     
                <div class="panel panel-default" style="padding: 20px">
                  <h2><b>Administración De Nómina</b></h2>
                  <p > 
                    Captura de novedades
                    Presentación de informes
                    Pagos electrónicos 
                    Desprendibles de pago
                  </p>
                  <img src="../images/people/servicio2.png" alt="" width="200">  <br> <br> <br> <br> <br> <br> <br> <br> <br>                 
                </div>
              </div>

              <div class="col-md-3">
                
                <div class="panel panel-default" style="padding: 20px">
                  <h2><b>Seguridad Social</b></h2>
                  <p style="padding: 10px"> 
                    Vinculación a salud, pensión, caja de compensación
                    Pagos electrónicos
                  </p>
                  <img src="../images/people/servicio3.png" alt="" width="200"> <br> <br> <br> <br> <br> <br> <br> <br> <br>                      
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-default" style="padding: 20px">                   
                    <h2><b>Seguridad y Salud en el Trabajo</b></h2>
                    <p> 
                      Documento de Sistema de Seguridad y Salud en el Trabajo
                      Política de Seguridad
                      Diagnóstico de condiciones laborales
                      Matriz de peligros
                      Reglamento de Higiene y seguridad industrial
                      Plan de emergencia
                      Auditorias
                    </p>
                    <img src="../images/people/servicio4.png" alt="" width="200"> <br> <br> <br><br>                 
                </div>                
              </div>

            </div>
          </div>
        </div> <!-- end testimonial -->



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