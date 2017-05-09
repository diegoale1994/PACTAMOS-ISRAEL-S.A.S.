

   <?php ob_start() ?> 
</header><!-- end main-header -->
<!-- body-content -->
<div class="body-content clearfix" ng-app="" >

  <div class="bg-color2">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <br>         
          <div class="panel panel-success">
            <div class="panel-heading">
              <center><h4>Empleados</h4></center>
            </div>          
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="example">
                  <thead>
                    <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name">Documento</th> 
                      <th data-field="name" data-sortable="true" data-align="center" id="status">Nombres</th>
                       <th data-field="name" data-sortable="true" data-align="center" id="status">Profesion</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php $val=1; foreach ($resume as $key => $resume) { ?>
                    <tr>
                      <th><?php echo $resume['documento']; ?></th>
                      <th><a href="/empleo/index.php/resume_view?doc=<?php echo $resume['documento'] ?>" target="_blank"><?php echo $resume['nombre1']." ".$resume['nombre2']." ".$resume['apellido1']." ".$resume['apellido2'];?></a></th>
                      <th><?php echo $resume['Profesion']; ?></th>
                      <input type="hidden" name="doc<?php echo "$val"; ?>" value="<?php echo $resume['documento'] ?>">
                      <input type="hidden" name="val" value="<?php echo "$val"; ?>">
                      <th><a href="/empleo/index.php/view_nomina?doc=<?php echo $resume["documento"] ?>" class="btn btn-success"  id="Asignar">Agregar Desprendible</a></th>
                    </tr>
                    <?php } ?>
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


