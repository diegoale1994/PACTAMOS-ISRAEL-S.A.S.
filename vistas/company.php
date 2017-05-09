<?php ob_start() ?>

  <div class="container">
    <div class="row">
      <div class="col-md-4"><br><br><h1 class="color-white">Empresas</h1></div>
      <div class="col-md-8">
        <form class="form-search-list">
          <div class="row">
            <div class="col-sm-5 col-xs-6">
              <div class="form-group">
                <label class="color-white">Nombre</label>
                <input class="form-control" placeholder="Nombre de la Empresa" >
              </div>
            </div>
            <div class="col-sm-5 col-xs-6">
              <div class="form-group">
                <label class="color-white">Donde</label>
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

<div class="modal fade" id="new_company" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nueva Empresa</center></h4>
      </div>
      <div class="modal-body">
        <div class="row">
           <form method="POST" action="../index.php/create_company">
            <div class="col-md-2">
              <label>Tipo Documento</label>
              <select class="form-control" type="text" name="type_number" >
                <option>CC</option>
                <option>NIT</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Documento</label>
              <input class="form-control" type="text" name="number" >
            </div>
            <div class="col-md-6">
              <label>Nombre de la Empresa</label>
              <input class="form-control" type="text" name="name_company">
            </div>
            <div class="col-md-12">
              <label>Descripción</label>
              <textarea class="form-control" type="text" name="description" rows="4"></textarea>
            </div>
            <div class="col-md-6">
              <label>Razón social</label>
              <input class="form-control" type="text" name="razon" required>
            </div>
            <div class="col-md-6">
              <label>Sector</label>
              <select class="form-control" name="sector">
                <option>Comercial</option>
                <option>Académico</option>
                <option>Industrial</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>Departamento</label>
              <select class="form-control" name="departamento">
              <?php foreach($dpto as $dpto): ?>
                <option><?php echo $dpto["departamento"]?></option>
              <?php endforeach ?>
              </select> 
            </div>
            <div class="col-md-6">
              <label>Municipio</label>
              <select class="form-control" name="ciudad">
              <?php foreach($mun as $mun): ?>
                <option><?php echo $mun["municipio"]?></option>
              <?php endforeach ?>
              </select> 
            </div>
            <div class="col-md-6">
              <label>Dirección</label>
              <input class="form-control" type="text" name="direccion" required>
            </div>
            <div class="col-md-6">
              <label>Teléfono</label>
              <input class="form-control" type="text" name="telefono" required>
            </div>
            <div class="col-md-6">
              <label>Email</label>
              <input class="form-control" type="text" name="email" required>
            </div>
            <div class="col-md-6">
              <label>WebSite</label>
              <input class="form-control" type="text" name="website" required>
            </div>
            <div class="col-md-12">
              <br>
              <input class="btn btn-success btn-block " type="submit" value="Crear">
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
                      <p><strong class="color-black">Empresas Registradas</strong></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#new_company">Nueva Empresa</button>
                      </p>
                    </div>
                  </div><!-- end top desc -->
                  <!-- listing -->
                  <div class="box-list">
                    
                    <?php  if(isset($company)){foreach($company as $comp): ?>
                    <div class="item">
                      <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs"><div class="img-item"><img src="../images/Company/<?php echo $comp["name_image"] ?>" alt="Perfil"></div></div>
                        <div class="col-md-9">
                          <h3 class="no-margin-top"><a href="resume_details.html" class=""><?php echo $comp["nombre"]?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black"><?php echo $comp["sector"] ?></span></h5>
                          <h5><span class="color-black"><?php echo $comp["ciudad"] ?>, <?php echo $comp["departamento"] ?></span></h5>
                          <p><?php echo $comp["descripcion"] ?></p>
                          <div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/company_view?doc=<?php echo $comp['documento'] ?>" class="btn btn-success btn-block">Ver Más</a>
                            </div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/company_update?doc=<?php echo $comp['documento'] ?>" class="btn btn-warning btn-block">Actualizar</a>
                            </div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/company_del?doc=<?php echo $comp["documento"] ?>" class="btn btn-danger btn-block"> Eliminar</a>
                            </div>
                            <div class="col-md-3">
                              <a href="/empleo/index.php/account?doc=<?php echo $comp["documento"] ?>" class="btn btn-primary btn-block"> Facturar</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><br>
                    <?php endforeach ;}?>
                  <!-- pagination -->

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
                    <h5 class="font-bold  margin-b-20" ><a href="#s_collapse_2" data-toggle="collapse">Sector de Empresa<i class="fa ic-arrow-toogle fa-angle-right pull-right"></i> </a></h5>
                    <div class="collapse in" id="s_collapse_2">
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li><a  href="#" >Industrial</a> (558)</li>
                          <li><a  href="#" >Comercial</a> (558)</li>
                          <li><a  href="#" >Académico</a> (558)</li>
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
 