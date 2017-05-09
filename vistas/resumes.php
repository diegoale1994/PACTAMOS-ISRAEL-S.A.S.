<?php ob_start() ?>

  <div class="container" ng-app="">
    <div class="row">
      <div class="col-md-4"><br><br><h1 class="color-white">Hojas de Vida</h1></div>
      <div class="col-md-8">
        <form class="form-search-list">
          <div class="row">
            <div class="col-sm-5 col-xs-6">
              <div class="form-group" >
                <label class="color-white">Profesion </label>
                <input class="form-control" placeholder="Ingeniero, Arquitecto etc" ng-model="name">
              </div>
            </div>
            <div class="col-sm-5 col-xs-6 " >
              <div class="form-group">
                <label class="color-white">Donde </label>
                <input class="form-control" placeholder="Ciudad o Departamento">
              </div>
            </div>
            <div class="col-sm-2 col-xs-12">
              <div class="form-group">
                <label class="hidden-xs">&nbsp;</label>
                <button class="btn btn-block btn-theme  btn-success" disabled>Buscar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div><!-- end form search area-->
</header><!-- end main-header -->

<div class="modal fade" id="new_resume" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nueva hoja de Vida</center></h4>
      </div>
      <div class="modal-body">
        <div class="row">
           <form method="POST" action="../index.php/create_resume">
            <div class="col-md-2">
              <label>Tipo Documento</label>
              <select class="form-control" type="text" name="tipo_documento" >
                <option>CC</option>
                <option>CE</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Documento</label>
              <input class="form-control" type="text" name="documento" >
            </div>
            <div class="col-md-6">
              <label>Primer Nombre</label>
              <input class="form-control" type="text" name="nombre1">
            </div>
            <div class="col-md-6">
              <label>Segundo Nombre</label>
              <input class="form-control" type="text" name="nombre2">
            </div>
            <div class="col-md-6">
              <label>Primer Apellido</label>
              <input class="form-control" type="text" name="apellido1" required>
            </div>
            <div class="col-md-6">
              <label>Segundo Apellido</label>
              <input class="form-control" type="text" name="apellido2" required>
            </div>
            <div class="col-md-6">
              <label>Profesión</label>
              <input class="form-control" type="text" name="profesion" required>
            </div>
            <div class="col-md-6">
              <label>Departamento</label>
              <input class="form-control" type="text" name="departamento" required>
            </div>
            <div class="col-md-6">
              <label>Municipio</label>
              <input class="form-control" type="text" name="ciudad" required>
            </div>
            <div class="col-md-6">
              <label>Dirección</label>
              <input class="form-control" type="text" name="direccion" required>
            </div>
            <div class="col-md-6">
              <label>Teléfono</label>
              <input class="form-control" type="text" name="telefono" required>
            </div>
            <div class="col-md-12">
              <br>
              <input class="form-control " type="submit" value="Crear">
            </div>
            
          </form>
          </div>
    </div>
    </div>
  </div>
</div>

      <div class="body-content clearfix" >

        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <!-- box listing  -->
                <div class="block-section-sm box-list-area">
                  <!-- top desc -->
                  <div class="row hidden-xs">
                    <div class="col-sm-6 ">
                      <p><strong class="color-black">Hojas de Vida inscritas</strong></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">
                      </p>
                    </div>
                  </div><!-- end top desc -->
                  <!-- listing -->
                  <div class="box-list">
                    
                    <?php  if(isset($resume)){foreach($resume as $res): ?>
                    <div class="item">
                      <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs"><div class="img-item"><img src="../images/Person/<?php echo $res["name_image"] ?>" alt="Perfil"></div></div>
                        <div class="col-md-9">
                          <h3 class="no-margin-top"><a href="resume_details.html" class=""><?php echo $res["nombre1"].' '.$res["nombre2"].' '.$res["apellido1"].' '.$res["apellido2"] ?>  <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"><?php echo $res["Profesion"] ?></span></h5>
                          <h5><span class="color-black"><?php echo $res["ciudad"] ?>, <?php echo $res["departamento"] ?></span></h5><p>
                          <?php if(isset($exp_laboral)){ foreach ($exp_laboral as $job): if($job["documento"]==$res["documento"]){?> 
                            <?php echo $job["cargo"]?> - <span class="color-white-mute"><?php echo $job["nombre_empresa"]?></span><br>
                          <?php } endforeach;}?></p>
                          <div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/resume_view?doc=<?php echo $res['documento'] ?>" class="btn btn-success">Ver Más</a>
                            </div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/update_resume_person?doc=<?php echo $res['documento'] ?>" class="btn btn-warning">Actualizar</a>                              
                              
                            </div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/resume_del?doc=<?php echo $res["documento"] ?>" class="btn btn-danger"> Eliminar</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><br>
                    <?php endforeach ;}?>
                  <!-- pagination -->
                  <nav >
                    <ul class="pagination pagination-theme  no-margin">
                      <li>
                        <a href="#" aria-label="Previous">
                          <span aria-hidden="true">&larr;</span>
                        </a>
                      </li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><span>...</span></li>
                      <li><a href="#">50</a></li>
                      <li>
                        <a href="#" aria-label="Next">
                          <span aria-hidden="true">&rarr;</span>
                        </a>
                      </li>
                    </ul>
                  </nav><!-- pagination -->

                </div><!-- end  box listing  -->
                </div>


              </div>
              <div class="col-md-3">
                <div class="block-section-sm side-right">

                  <!-- filter   -->
                  <div class="row">
                    <div class="col-xs-6">
                      <p><strong>Filtrar por</strong></p>
                    </div>
                  </div>
                  <div class="result-filter">
                    <h5 class="font-bold  margin-b-20" ><a href="#s_collapse_2" data-toggle="collapse">Profesion<i class="fa ic-arrow-toogle fa-angle-right pull-right"></i> </a></h5>
                    <div class="collapse in" id="s_collapse_2">
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li>
                            <a  href="#" ></a> 
                          </li>
                        </ul>

                      </div>
                    </div>
                  </div><!-- end filter   -->
                </div>


              </div>
            </div>
          </div>
        </div>
         
      </div><!--end body-content -->
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>
 