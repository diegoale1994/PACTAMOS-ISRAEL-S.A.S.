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
      <form action="../index.php/update_exp_jobs" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Empresa</label>
                        <input type="text" name="company_exp_name" class="form-control">
                        <label>Cargo</label>
                        <input type="text" name="cargo" class="form-control">
                        <label>Sector de la empresa</label>
                        <select class="form-control" name ="sector_empresa" data-live-search="true">
                          <option data-tokens="ketchup mustard" value="Industrial" >Industrial</option>
                          <option data-tokens="mustard" value= "Comercial">Comercial</option>
                          <option data-tokens="ketchup mustard" value ="Administrativo">Administrativo</option>                          
                        </select>
                        <label>Fecha Inicio</label>
                        <input type="date" name="fecha_ini_job" class="form-control">
                        <label>Fecha Fin</label>
                        <input type="date" name="fecha_fin_job" class="form-control">
                        <label>Logros</label>
                        <textarea name="logros" rows="10" class="form-control" cols="50"></textarea>
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
      <form action="../index.php/update_estudies" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Nivel de Estudios</label>
                        <select class="form-control" name="nivel_estudio">
                          <option>Profesional</option>
                          <option>Técnologo</option>
                          <option>Técnico</option>
                          <option>Bachiller</option>
                          <option>Educación Media</option>
                          <option>Otro</option>
                        </select>                        
                        <label>Titulo Obtenido</label>
                        <input type="text" name="title" class="form-control">
                        <label>Entidad</label>
                        <input type="text" name="entity" class="form-control">
                        <label>Departamento</label>
                        <input type="text" name="departamento_study" class="form-control">
                        <label>Municipio</label>
                        <input type="text" name="municipio_study" class="form-control">
                        <label>Fecha Inicio</label>
                        <input type="date" name="fecha_ini_stu" class="form-control">
                        <label>Fecha Fin</label>
                        <input type="date" name="fecha_fin_stu" class="form-control">
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
      <form action="../index.php/update_reference" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name_reference" class="form-control">
                        <label>Profesion</label>
                        <input type="text" name="profesion_reference" class="form-control">
                        <label>Teléfono</label>
                        <input type="text" name="tel_reference" class="form-control">
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
      <form action="../index.php/update_skills" method="post" >
        <div class="modal-body">
                 <div class="row">
                     <div class="col-md-12">                         
                      <div class="form-group">
                        <label>Habilidad</label>
                        <input type="text" name="name_skill" class="form-control">
                        <label>Descripción</label>
                        <textarea type="text" name="description_skill" class="form-control"></textarea>
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


<div class="bg-color1 block-section line-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block-section box-item-details">
          <div class="resume-block">
            <div class="desc"><br><br>
               <form action="../index.php/update_person" method="POST" enctype="multipart/form-data">
              <?php foreach($person as $person): ?>
              <div class="img-profile"><img src="../images/Person/<?php echo $person["name_image"];?>" alt="Imagen de Perfil"></div>
              <h3 class="resume-sub-title"><span>Imagen</span></h3>
              <input type="file" name="foto" class="form-control" size="30px">
                <h3 class="resume-sub-title"><span>Información Personal</span></h3>
                <div class="row">
                
                  <div class="col-md-6">
                    <div class="form-group ">
                      <label>Primer Nombre</label>
                      <input type="text" name="nombre1" class="form-control"  value="<?php echo $person["nombre1"]?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group ">
                      <label>Segundo Nombre</label>
                      <input type="text" name="nombre2" class="form-control"  value="<?php echo $person["nombre2"]?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group ">
                      <label>Primer Apellido</label>
                      <input type="text" name="apellido1" class="form-control"  value="<?php echo $person["apellido1"]?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group ">
                      <label>Segundo Apellido</label>
                      <input type="text" name="apellido2" class="form-control"  value="<?php echo $person["apellido2"]?>">
                    </div>
                  </div>
                  <?php endforeach ?>                 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Departamento</label>
                      <select class="form-control" name="departamento">
                      <?php foreach($dpto as $dpto): ?>
                        <option><?php echo $dpto["departamento"]?></option>
                      <?php endforeach ?>
                      </select>                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Municipio</label>
                      <select class="form-control" name="ciudad">
                      <?php foreach($mun as $mun): ?>
                        <option><?php echo $mun["municipio"]?></option>
                      <?php endforeach ?>
                      </select> 
                    </div>
                  </div>
                </div> 
                </div>
                      <button type="submit" class="btn btn-success">Ingresar</button>     
              </form>            

              <h3 class="resume-sub-title"><span>Experiencia Laboral</span></h3>
              <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_job"> </a>
                
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                        <tr>
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Sector empresa</th> 
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Empresa</ht>
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Cargo</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Inicio</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Fin</th>
                          <th data-field="" data-sortable="true" data-align="center" id="status">Logros</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($exp_laboral as $exp): ?>
                          <tr> 
                            <th><?php echo $exp["sector_empresa"] ?></th> 
                            <th><?php echo $exp["nombre_empresa"] ?></ht>  
                            <th><?php echo $exp["cargo"] ?></th>
                            <th><?php echo $exp["fecha_ini"] ?></th>
                            <th><?php echo $exp["fecha_fin"] ?></th>
                            <th><?php echo $exp["logros"] ?></th>
                            <th><a href="/empleo/index.php/exp_lab_del?delete=<?php echo $exp['id_exp'] ?>" class="btn btn-danger"> Eliminar</a></th>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                  </table>
                </div>
              </div>
              

              <h3 class="resume-sub-title"><span>Educacion</span></h3>

               <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_study"> </a>
                
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                      <tr>         
                       <th data-field="id" data-sortable="true" data-align="center" id="name">Nivel de Estudios</th>                 
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Titulo Obtenido</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Entidad</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Departamento</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Municipio</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Inicio</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Fecha Fin</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach($estudies as $est): ?>
                          <tr> 
                          <th><?php echo $est["nivel_estudio"] ?></ht> 
                            <th><?php echo $est["title"] ?></ht>  
                            <th><?php echo $est["centro_educativo"] ?></th>               
                            <th><?php echo $est["departamento"] ?></th>
                            <th><?php echo $est["municipio"] ?></th>
                            <th><?php echo $est["fecha_ini"] ?></th>
                            <th><?php echo $est["fecha_fin"] ?></th>                            
                            <th><a href="/empleo/index.php/studies_del?delete=<?php echo $est['id_estudio'] ?>" class="btn btn-danger"> Eliminar</a></th>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                  </table>
                </div>
              </div>
              <h3 class="resume-sub-title"><span>Referencias</span></h3>
              <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_reference"> </a>
               
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
                       <tbody>
                        <?php foreach($ref as $ref): ?>
                          <tr> 
                          <th><?php echo $ref["name"] ?></th> 
                            <th><?php echo $ref["profesion"] ?></th>   
                            <th><?php echo $ref["telefono"] ?></th>                                                
                            <th><a href="/empleo/index.php/reference_del?delete=<?php echo $ref['id'] ?>" class="btn btn-danger"> Eliminar</a></th>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                  </table>
                </div>
              </div>
              <h3  class="resume-sub-title"><span>Información Adicional</span></h3>
              <h4>Habilidades:</h4>
              <div class="panel panel-default">
                <div class="panel-heading">
                <a type="button" class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new_skill"> </a>
                
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                      <tr>                          
                          <th data-field="id" data-sortable="true" data-align="center" id="name">Habilidad</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Descripción</th>
                          <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach($skills as $skills): ?>
                          <tr> 
                          <th><?php echo $skills["nombre"] ?></ht> 
                            <th><?php echo $skills["descripcion"] ?></ht>                                                   
                            <th><a href="/empleo/index.php/skills_del?delete=<?php echo $skills['id'] ?>" class="btn btn-danger"> Eliminar</a></th>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
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
    
     