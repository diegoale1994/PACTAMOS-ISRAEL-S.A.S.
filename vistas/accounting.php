  <?php ob_start() ?>
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
           <form method="POST" action="../index.php/create_account" enctype="multipart/form-data">
            <div class="col-md-12">
              <label>Descripción</label>
              <textarea class="form-control" type="text" name="description" rows="2"></textarea>
            </div>
            <div class="col-md-6"><br>
              <label>Fecha Inicial</label>
              <input type="date" name="fecha_inicio" class="form-control" Required>
            </div>
            <div class="col-md-6"><br>
              <label>Fecha Final</label>
              <input type="date" name="fecha_fin" class="form-control" Required>
            </div>
            <div class="col-md-6"><br>
              <label>Valor</label>
              <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="number" class="form-control" placeholder="700.000" name="value" Required>
              </div>
            </div>
            <div class="col-md-6"><br>
              <label>Fecha Límite de Pago</label>
              <input type="date" name="fecha_pago" class="form-control" Required>
            </div>
            <div class="col-md-12">
              <center>
                <label>Adjuntar Factura</label>
                <input type="file" name="file" class="form-contol" required>
              </center>
            </div> 
            <div class="col-md-12">
              <br>
              <input type="text" name="doc" hidden value="<?php echo $account[0]['doc']; ?>">
              <input class="btn btn-success btn-block " type="submit" value="Generar">
            </div>            
          </form>
          </div>
    </div>
    </div>
  </div>
</div>

      <div class="body-content clearfix">
        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <!-- box listing  -->
                <div class="block-section-sm box-list-area">
                  <!-- top desc -->
                  <div class="row hidden-xs">
                    <div class="col-sm-6 ">
                      <p><strong class="color-black">Facturas</strong></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="text-right">
                      <?php if ($_SESSION['nivel_de_acceso']=='A') { ?>
                      <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#new_company">Nueva Factura</button>
                      <?php } ?>
                      </p>
                    </div>
                  </div><!-- end top desc -->
                  <!-- listing -->
                  <div class="box-list">
                    
                    <?php  if(isset($account))if ($account[0]['doc']==$account[0]['documento']){{foreach($account as $account): ?>
                    <div class="item">
                      <div class="row">
                        <div class="col-md-3 hidden-sm hidden-xs"><div class="img-item"><img src="../images/afile.png" alt="Perfil"></div></div>
                        <div class="col-md-9">
                          <h3 class="no-margin-top"><a href="/empleo/<?php echo $account['file'] ?>" class=""><?php echo $account["description"]?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                          <h5><span class="color-black">Fecha de facturación: <?php echo $account["fecha_inicio"] ?> - <?php echo $account["fecha_fin"] ?></span></h5>
                          <h5><span class="color-black">Valor: $<?php echo $account["value"] ?></span></h5>
                          <h5><span class="color-black">Estado: <?php echo $account["state"] ?></span></h5>
                          <div>
                            <div class="col-md-6">
                              <a href="/empleo/<?php echo $account['file'] ?>" class="btn btn-primary btn-block" target=_blank>Ver Más</a>
                            </div>
                            <div class="col-md-6">
                            <?php if ($_SESSION['nivel_de_acceso']=='E') { ?>
                              <a href="/empleo/index.php/pay_bill?doc=<?php echo $account['documento'] ?>" class="btn btn-success btn-block">Pagar</a><?php } ?>
                              <?php if ($_SESSION['nivel_de_acceso']=='A') { ?>
                              <a href="/empleo/index.php/pay_account?doc=<?php echo $account['documento'] ?>" class="btn btn-warning btn-block">Verificar Pago</a><?php } ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><br>
                    <?php endforeach ;}}?>

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
                    <h5 class="font-bold  margin-b-20" ><a href="#s_collapse_2" data-toggle="collapse">Fecha<i class="fa ic-arrow-toogle fa-angle-right pull-right"></i> </a></h5>
                    <div class="collapse in" id="s_collapse_2">
                      <div class="list-area">
                        <ul class="list-unstyled ">
                          <li><a  href="#" ></a> </li>
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
 