  <?php ob_start() ?>
</header><!-- end main-header -->

<div class="modal fade" id="new_company" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nueva Factura</center></h4>
      </div>
      <div class="modal-body">
        <div class="row">
           <form method="POST" action="../index.php/create_nomina" enctype="multipart/form-data">
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
            <div class="col-md-12">
              <center>
                <label>Adjuntar Desprendible</label>
                <input type="file" name="file" class="form-contol" required>
              </center>
            </div> 
            <div class="col-md-12">
              <br>
              <input type="text" name="doc" hidden value="<?php echo $nomina[0]['doc']; ?>">
              <input class="btn btn-success btn-block " type="submit" value="Generar">
            </div>            
          </form>
          </div>
    </div>
    </div>
  </div>
</div>

<div class="body-content clearfix" ng-app="" >
  <div class="bg-color2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 ">
          <br><p><strong class="color-black">Desprendibles de nómina</strong></p>
        </div>
        <div class="col-sm-6">
          <p class="text-right">
          <?php if ($_SESSION['nivel_de_acceso']=='A') { ?>
          <br><button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#new_company">Agregar Desprendible</button>
          <?php } ?>
          </p>
        </div>
        <div class="col-md-12"> <br>         
          <div class="panel panel-success">
            <div class="panel-heading">
              <center><h4>Desprendibles de Nómina</h4></center>
            </div>          
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="example">
                  <thead>
                    <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name">Descripción</th> 
                      <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha inicio</th>
                       <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha fin</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th> 
                    </tr>
                  </thead>
                  <tbody>
                     <?php if(isset($nomina))if ($nomina[0]['doc']==$nomina[0]['documento']){{foreach($nomina as $nomina):?>
                    <tr>
                      <th><?php echo $nomina["description"]?></th>
                      <th><?php echo $nomina["fecha_inicio"]?></th>
                      <th><?php echo $nomina["fecha_fin"]?></th>
                      <th><a href="/empleo/<?php echo $nomina['file'] ?>" class="btn btn-primary btn-block" target=_blank>Ver Más</a></th>
                    </tr>
                    <?php endforeach ;}}?>
                  </tbody>
                  </table>
                </div>
              </div>
          </div>          
        </div>        
      </div>
    </div>
  </div>
</div><!--end body-content -->

     
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>
 