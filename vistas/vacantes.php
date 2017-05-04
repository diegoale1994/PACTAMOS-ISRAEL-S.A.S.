

   <?php ob_start() ?> 
</header><!-- end main-header -->
<!-- body-content -->
<div class="body-content clearfix" >

  <div class="bg-color2">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <br>         
          <div class="panel panel-success">
            <div class="panel-heading">
              <center><h4>Seleccione Vacante</h4></center>
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                <div class="row">
                  <div class="col-md-4">
                  <label>Fecha Inicio</label>
                    <input type="date" name="fecha_inicio" class="form-control">
                  </div>
                  <div class="col-md-4">
                  <label>Fecha Fin</label>
                    <input type="date" name="fecha_inicio" class="form-control">
                  </div>
                  <div class="col-md-4">
                    <label>Salario</label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="number" class="form-control" placeholder="700.000" name="salario" Required>
                    </div>
                  </div>
                </div><br>
                <table class="table table-striped table-bordered table-hover" id="example">
                <thead>
                  <tr>
                    <th data-field="id" data-sortable="true" data-align="center" id="name">Documento</th> 
                    <th data-field="name" data-sortable="true" data-align="center" id="status">Nombres</ht>
                    <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th> 
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($resume as $key => $resume) { ?>
                  <tr>
                    <th><?php echo $resume['documento']; ?></th>
                    <th><?php echo $resume['nombre1']." ".$resume['nombre2']." ".$resume['apellido1']." ".$resume['apellido2'];?></th>
                    <th><a href="" class="btn btn-success">Asignar</a></th>
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


