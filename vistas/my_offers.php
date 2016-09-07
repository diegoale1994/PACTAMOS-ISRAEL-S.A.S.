<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='E') { ?>
 

 <?php ob_start() ?>
  
           
       
        <div class="container">
          <div class="text-center logo"><h1 class="color-white">Mis offertas</h1></div>
        </div>

      </header><!-- end main-header -->
<?php if(!isset($_GET['update'])){ ?>
<div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                  <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead id="nom2" name="rol">
                        <tr>
                          <th data-field="id" data-sortable="true" data-align="center" id="name">vacante</th> 
                          <th data-field="name" data-sortable="true" data-align="center" id="status">fecha_publicacion</ht>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($myoffers as $offer): ?>
                          <tr> 
                            <th><?php echo $offer["vacante"] ?></th> 
                            <th><?php echo $offer["fecha_publicacion"] ?></ht>  
                            
                            <th><a href="/empleo/index.php/offer_update?update=<?php echo $offer['id_oferta'] ?>" class="btn btn-warning"> Modificar</a>
                            <a href="/empleo/index.php/offer_del?delete=<?php echo $offer['id_oferta'] ?>" class="btn btn-danger"> Eliminar</a></th>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                  </table>
                </div>
              </div>

   <?php }else{ ?>


<div class="body-content clearfix" > 
        <div class="bg-color1 block-section line-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">

                <!-- form post a job -->
                <form action='../index.php/update_offer' method='POST'>  
                <input type="hidden" name="id" value="<?php echo $offer[0]['id_oferta'] ?>">                
                  <div class="form-group">
                    <label>Vacante</label>
                    <input type="text" class="form-control " value="<?php echo $offer[0]['vacante'] ?>" name="vacante" placeholder="Secretaria, Maestro, Doctor, Ingeniero" Required>
                  </div>
                  <div class="form-group">
                    <label>Descripción</label>
                    <div class="color-white-mute"><small>Escribe acerca de tu empresa</small></div>
                    <textarea class="form-control" rows="6" name= "descripcion"><?php echo $offer[0]['descripcion'] ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Descripción profesional</label>
                    <div class="color-white-mute"><small>Que habilidades buscas en la persona</small></div>
                    <textarea class="form-control" rows="6" name= "descripcion_profesional"><?php echo $offer[0]['descrip_prof'] ?></textarea>
                  </div>
                   <div class="form-group">
                    <label>Horario de Trabajo</label>
                    <div class="color-white-mute"><small>Describe el horario de trabajo</small></div>
                     <input type="text" class="form-control " name="horario" placeholder="Lunes a Viernes de 8am - 6pm" value="<?php echo $offer[0]['horario'] ?>" Required>
                  </div>
                      <div class="form-group">
                      <label>Area</label>
                   <select class="form-control" name ="area" data-live-search="true">
                          <option data-tokens="ketchup mustard" value="A" >A</option>
                          <option data-tokens="mustard" value= "R">R</option>
                          <option data-tokens="ketchup mustard" value ="E">E</option>  
                          <option data-tokens="ketchup mustard" value ="A">A</option>   
                          <option data-tokens="ketchup mustard" value ="S">S</option>                           
                        </select>
                        </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Departamento</label>
                        <input type="text" class="form-control " name="departamento" value= "<?php echo $offer[0]['departamento'] ?>" placeholder="Cundinamarca, Tolima...">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Municipio</label>
                        <input type="text" class="form-control " name="ciudad" value= "<?php echo $offer[0]['ciudad'] ?>" placeholder="Ciudad">
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label>Vacantes</label>
                    <input type="number" class="form-control " name="vacantes", min="1" value = "<?php echo $offer[0]['vacantes'] ?>" Required>
                  </div>
                     <div class="form-group">
                    <label>Tiempo (no se exactamente que debe ir cambio si algo por select)</label>
                    <input type="text" class="form-control " name="tiempo" placeholder="tiempo" value= "<?php echo $offer[0]['tiempo'] ?>">
                  </div>
  

                  <div class="form-group ">
                    <button class="btn btn-t-primary btn-theme">Modificar</button>
                  </div>


                </form> <!-- end form post a job -->
              </div>
            </div>
          </div>
        </div>        
      </div><!--end body-content -->



<?php } ?>



<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


<?php
}else{
  header("Location: /empleo/index.php/404_error");
}}}
else{
  header("Location: /empleo/index.php/404_error");
  
  }?>


     