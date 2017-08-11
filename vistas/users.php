<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='A') { ?>
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
          <div class="white-space-15"></div>
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel panel-heading">
                <center><h2 class="color-white text-center">Nuevo Usuario</h2></center>
              </div>
              <div class="panel panel-body">
                <form method="POST" action="../index.php/create_user">
                  <div class="col-md-2">
                    <label>Documento</label>
                    <input class="form-control" type="text" name="documento" placeholder="CC">
                  </div>
                  <div class="col-md-2">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                  </div>
                  <div class="col-md-2">
                    <label>Apellido</label>
                    <input class="form-control" type="text" name="apellido" required>
                  </div>
                  <div class="col-md-2">
                    <label>Contraseña</label>
                    <input class="form-control" type="password" name="pass">
                  </div>
                  <div class="col-md-2">
                    <label>Tipo de Usuario</label>
                    <select class="form-control"  name="Tipo_user">
                     <option value= "A">Adminsitrador</option>
                     <option value= "C">Contabilidad</option>
                     <option value= "T">Talento Humano</option>
                     <option value= "V">Comercial</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <br>
                    <input class="form-control " type="submit" value="Crear">
                  </div>
                  
                </form>
              </div>
            </div>
            </div>
            <div class="col-md-12">
            <div class="white-space-15"></div>
            <div class="panel panel-primary">
              <div class="panel panel-heading">
                <center><h2 class="color-white text-center">Mis Usuarios</h2></center>
              </div>
            <div class="panel panel-body">            
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th data-field="id" data-sortable="true" data-align="center" id="name">Documento</th> 
                    <th data-field="name" data-sortable="true" data-align="center" id="status">Nombres</ht>
                    <th data-field="id" data-sortable="true" data-align="center" id="name">Apellidos</th>
                    <th data-field="name" data-sortable="true" data-align="center" id="status">Rol</th>
                    <th data-field="name" data-sortable="true" data-align="center" id="status">Acciones</th> 
                  </tr>
                </thead>
                <tbody>

                  <?php foreach($users as $value): ?>
                    <tr> 
                      <th><?php echo $value['documento'];?></th> 
                      <th><?php echo $value['nombre1'];?></ht>  
                      <th><?php echo $value['apellido1'];?></th>
                      <th><?php 
                      if ($value['rol'] == 'C') {
                      echo "COMERCIAL";
                      }
                       if ($value['rol'] == 'V') {
                      echo "VENTAS";
                      }
                       if ($value['rol'] == 'A') {
                      echo "ADMINISTRADOR";
                      }
                      	?>
                      </th>                    
                      <th><a href="/empleo/index.php/user_del?delete=<?php echo $value['documento'] ?>" class="btn btn-danger"> Eliminar</a></th>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


 <?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


<?php
}else{
  header("Location: /empleo/index.php/404_error");
}}}
else{
  header("Location: /empleo/index.php/404_error");
  
  }?>


     