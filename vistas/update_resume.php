<?php ob_start() ?>      <!-- main-header -->
</header><!-- end main-header -->
<!-- body-content -->
<div class="modal fade" id="new_job" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div>
      <form action="../index.php/update_jobs" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Cargo</label>
                        <input type="text" name="cargo1" class="form-control">
                        <label>Empresa</label>
                        <input type="text" name="company1" class="form-control">
                        <label>Fecha Inicio</label>
                        <input type="date" name="fecha_init_job" class="form-control">
                        <label>Fecha Fin</label>
                        <input type="date" name="fecha_fin_job" class="form-control">
                        <label>Responsabilidades</label>
                        <textarea class="form-control" name="responsability1"></textarea>
                        <label>Habilidades usadas</label>
                        <textarea class="form-control" name="kills1"></textarea>
                      </div>              
                     </div>                   
                 </div>
        </div>
        <div class="modal-footer">
        <center>
        <button type="submit" class="btn btn-success">Ingresar</button>
        <a type="button" class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
        </center>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="new_study" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div>
      <form action="../index.php/update_jobs" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Titulo Obtenido</label>
                        <input type="text" name="title" class="form-control">
                        <label>Entidad</label>
                        <input type="text" name="entity" class="form-control">
                        <label>Departamento</label>
                        <input type="text" name="dpto_study" class="form-control">
                        <label>Municipio</label>
                        <input type="text" name="mun_study" class="form-control">
                        <label>Fecha Inicio</label>
                        <input type="date" name="fecha_init_study" class="form-control">
                        <label>Fecha Fin</label>
                        <input type="date" name="fecha_fin_study" class="form-control">
                      </div>             
                     </div>                   
                 </div>
        </div>
        <div class="modal-footer">
        <center>
        <button type="submit" class="btn btn-success">Ingresar</button>
        <a type="button" class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
        </center>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="new_reference" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div>
      <form action="../index.php/update_jobs" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name_person" class="form-control">
                        <label>Profesion</label>
                        <input type="text" name="profesion_person" class="form-control">
                        <label>Teléfono</label>
                        <input type="text" name="tel_person" class="form-control">
                      </div>             
                     </div>                   
                 </div>
        </div>
        <div class="modal-footer">
        <center>
        <button type="submit" class="btn btn-success">Ingresar</button>
        <a type="button" class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
        </center>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="new_skill" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div>
      <form action="../index.php/update_jobs" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Habilidad</label>
                        <input type="text" name="skill_person" class="form-control">
                        <label>Descripción</label>
                        <textarea type="text" name="skill_description" class="form-control"></textarea>
                      </div>             
                     </div>                   
                 </div>
        </div>
        <div class="modal-footer">
        <center>
        <button type="submit" class="btn btn-success">Ingresar</button>
        <a type="button" class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
        </center>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="body-content clearfix" >


<div class="bg-color2">
  <div class="container">
    <div class="row">
      <div class="col-md-12 bg-color2">

        <!-- box item details -->
        <div class="block-section box-item-details">
          <div class="resume-block">
            <div class="img-profile"><img src="./assets/theme/images/people/7.jpg" alt=""></div>><!--Ponga aui la foto-->
            <div class="desc">
              <form>
                <div class="form-group col-md-6">
                  <label>Nombre</label>
                  <input type="text" name="name" class="form-control" value="" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Profesión</label>
                  <input type="text" name="profesion" class="form-control" value="" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Departamento</label>
                  <input type="text" name="dpto" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Municipio</label>
                  <input type="text" name="mun" class="form-control">
                </div>
              </form>            

              <h3 class="resume-sub-title"><span>Experiencia Laboral</span></h3>
              <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_job"> </a>
                <a type="button" class="btn btn-warning glyphicon glyphicon-repeat" data-toggle="modal"  data-target="#update" id="btn_mod1" name="rol"></a>
                <a type="button" class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal"  data-target="#delete" id="btn_del" name="rol"></a>
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                      <tr>                          
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Cargo</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Empresa</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Inicio</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Fin</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Responsabilidades</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Habilidades</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th>
                      </tr>
                      </thead>
                  </table>
                </div>
              </div>
              

              <h3 class="resume-sub-title"><span>Educacion</span></h3>

               <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_study"> </a>
                <a type="button" class="btn btn-warning glyphicon glyphicon-repeat" data-toggle="modal"  data-target="#update" id="btn_mod1" name="rol"></a>
                <a type="button" class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal"  data-target="#delete" id="btn_del" name="rol"></a>
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                      <tr>                          
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Titulo Obtenido</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Entidad</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Departamento</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Municipio</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Inicio</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Fin</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th>
                      </tr>
                      </thead>
                  </table>
                </div>
              </div>
              <h3 class="resume-sub-title"><span>Referencias</span></h3>
              <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_reference"> </a>
                <a type="button" class="btn btn-warning glyphicon glyphicon-repeat" data-toggle="modal"  data-target="#update" id="btn_mod1" name="rol"></a>
                <a type="button" class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal"  data-target="#delete" id="btn_del" name="rol"></a>
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                      <tr>                          
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Nombre</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Profesion</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Teléfono</th>
                      </tr>
                      </thead>
                  </table>
                </div>
              </div>
              <h3  class="resume-sub-title"><span>Información Adicional</span></h3>
              <h4>Habilidades:</h4>
              <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_skill"> </a>
                <a type="button" class="btn btn-warning glyphicon glyphicon-repeat" data-toggle="modal"  data-target="#update" id="btn_mod1" name="rol"></a>
                <a type="button" class="btn btn-danger glyphicon glyphicon-remove" data-toggle="modal"  data-target="#delete" id="btn_del" name="rol"></a>
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                      <tr>                          
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Habilidad</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Descripción</th>
                      </tr>
                      </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end box item details -->



      </div>
    </div>
  </div>
</div>


</div><!--end body-content -->

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>
    
     