

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
              <center><h4>Seleccione Vacante</h4></center>
            </div>
            <?php $offer=$_GET['offer']; ?>
            <form method="POST" action="/empleo/index.php/assign?offer=<?php echo $offer;?>">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3">
                  <label>Fecha Inicio</label>
                    <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" ng-model="fi" required>
                  </div>
                  <div class="col-md-3">
                  <label>Fecha Fin</label>
                    <input type="date" name="fecha_fin" class="form-control" id="fecha_fin" ng-model="ff" required>
                  </div>
                  <div class="col-md-3">
                  <label>Cargo</label>
                    <input type="text" name="fecha_fin" class="form-control" id="cargo" ng-model="ca" required>
                  </div>
                  <div class="col-md-3">
                    <label>Salario</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" class="form-control" placeholder="700.000" id="salario" name="salario" ng-model="sa" Required>
                    </div>
                  </div>
                </div><br>
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
                      <th><a href="/empleo/index.php/assign?offer=<?php echo $offer;?>&doc=<?php echo $resume['documento'] ?>&fi={{fi}}&ff={{ff}}&sa={{sa}}&ca={{ca}}" class="btn btn-success"  id="Asignar">Asignar</a></th>
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

<script type="text/javascript">
$( document ).ready(function() {
  for (i=1;i=10;i++){
    $("#Asignar"+i).click(function(){
      var ruta = this.val();
      var fecha_inicio=$("#fecha_inicio").val();
      var fecha_fin=$("#fecha_fin").val();
      var salario=$("#salario").val();

      window.location(ruta+"&fi="+fecha_inicio+"&ff="+fecha_fin+"&sa="+salario);
      window.location.href=ruta+"&fi="+fecha_inicio+"&ff="+fecha_fin+"&sa="+salario;

    })
  }
}
  
</script>

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


