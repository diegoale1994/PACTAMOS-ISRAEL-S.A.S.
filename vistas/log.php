

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
              <center><h4>Registros</h4></center>
            </div>          
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="example">
                  <thead>
                    <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name">Documento</th> 
                      <th data-field="name" data-sortable="true" data-align="center" id="status">Acción</th>
                       <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status">Link</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php $val=1; foreach ($log as  $resume) { ?>
                    <tr>
                      <th><a href="/empleo/index.php/resume_view?doc=<?php echo $resume['doc_user'] ?>" target="_blank"><?php echo $resume['doc_user'];?></a></th>
                      <th><?php echo $resume['action']; ?></th>
                      <th><?php echo $resume['fecha']; ?></th>
                      <th><a href="<?php echo $resume['link'];?>" target="_blank" class="btn btn-success" >Ver más</a></th>
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


