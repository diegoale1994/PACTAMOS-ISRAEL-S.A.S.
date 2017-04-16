
<?php ob_start() ?>
      </header><!-- end main-header -->
      <div class="body-content clearfix" >
        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="block-section box-item-details">
                  <h2 class="title"><a href="#"><?php echo $oferta_detailed[0]['vacante']; ?></a></h2>
                  <div class="job-meta">
                    <ul class="list-inline">
                      <li><i class="fa fa-briefcase"></i> <?php echo $oferta_detailed[0]['horario']; ?></li>
                      <li><i class="fa fa-map-marker"></i> <?php echo $oferta_detailed[0]['departamento']; ?>, <?php echo $oferta_detailed[0]['ciudad']; ?></li>
                      <li><i class="fa fa-money"></i> A convenir</li>
                    </ul>
                  </div>
                  <p>Empresa de Servicios temporales requiere <strong>Auxiliar de Carnes</strong></p>
                  <?php echo $oferta_detailed[0]['descripcion'];?>
                  <h4>Perfil Requerido</h4>
                  <?php echo $oferta_detailed[0]['descrip_prof']; ?>
                  <div class="col-md-4">
                    <h4>Área</h4>
                    <?php echo $oferta_detailed[0]['area']; ?>
                  </div>
                  <div class="col-md-4">
                    <h4>Horario</h4>
                    <p><?php echo $oferta_detailed[0]['horario']; ?></p>
                  </div>
                  <div class="col-md-4">
                    <h4>Fecha</h4>
                    <p><?php echo $oferta_detailed[0]['fecha_publicacion']; ?></p>
                  </div>
                  <div class=""><br><br><br><br><br><br><br><br><br><br></div>
                </div><!-- end box item details -->
              </div>
              <div class="col-md-3">
                <div class="block-section-sm side-right">
                  <div class="row">
                    <form class="form-search-list" action = "/empleo/index.php/job_list" method ="post">
                      <div class="form-group">
                       <p><strong>¿Qué Buscas?</strong></p>
                        <input class="form-control" name = "trabajo" placeholder="Nombre del empleo" required >
                      </div>
                   
                      <div class="form-group">
                        <p><strong>¿Donde?</strong></p>
                        <input class="form-control" name = "donde" placeholder="Lugar">
                      </div>
                   
                      <div class="form-group">
                        <label class="hidden-xs">&nbsp;</label>
                        <button class="btn btn-block btn-theme  btn-success">Buscar</button>
                      </div>
                    </form>  <!-- form search -->
                    <div class="logo text-center-sm"> <center><a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="100"></a></center></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end body-content -->


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>