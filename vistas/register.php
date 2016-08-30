<?php ob_start() ?>

</header><!-- end main-header -->


<!-- body-content -->
<div class="body-content clearfix">

  <div class="block-section bg-color4">
    <div class="container">
      <!-- Start form Company -->
      <div class="col-md-6">
        <div class="panel panel-md">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <!-- buttons top -->
                <p><a href="#" class="btn btn-primary btn-theme btn-block"> Soy una Empresa</a></p>
                <!-- end buttons top -->
                <div class="white-space-10"></div>
                <p class="text-center"><span class="span-line">Ingresa tus datos</span></p>
                <!-- form login -->
                <form method="POST" action="../index.php/register_E_form">
                  <div class="form-group">
                    <label>Tipo de Documento</label>
                    <select name="type_document" class="form-control">
                      <option value= "NIT" >Nit</option>
                      <option value= "CC">CC</option>
                      <option value= "CE">CE</option>
                    </select>                    
                  </div>
                  <div class="form-group">
                    <label>Documento</label>
                    <input type="text" class="form-control" placeholder="Número de documento" name="number">
                  </div>
                  <div class="form-group">
                    <label>Nombre de tu Empresa</label>
                    <input type="text" class="form-control" placeholder="Nombre de la Compañia" name="name_company">
                  </div>
                  <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" placeholder="Correo para contáctarte" name="email">
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="pass" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Repite tu Contraseña</label>
                    <input type="password" name="pass_2" class="form-control">
                  </div>
                  <div class="white-space-10"></div>
                  <center><h4>En breve verificaremos tu correo</h4></center><br>
                  <div class="form-group no-margin">
                    <button class="btn btn-theme btn-lg btn-t-primary btn-block">Registrarse</button>
                  </div>
                </form><!-- form login -->
              </div>

            </div>
          </div>
        </div>   
      </div>
      <!--End form Company-->

      <!-- Start form Person -->
      <div class="col-md-6">
        <div class="panel panel-md">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <!-- buttons top -->
                <p><a href="" class="btn btn-danger btn-theme btn-block"> Soy una Persona Natural</a></p>
                <!-- end buttons top -->

                <div class="white-space-10"></div>
                <p class="text-center"><span class="span-line">Ingresa tus datos</span></p>

                <!-- form login -->
                <form method="POST" action="../index.php/register_N_form">
                  <div class="form-group">
                    <label>Tipo de Documento</label>
                                     <select name="type_document" class="form-control">
                      <option value= "NIT" >Nit</option>
                      <option value= "CC">CC</option>
                      <option value= "CE">CE</option>
                    </select>      
                  </div>
                  <div class="form-group">
                    <label>Documento</label>
                    <input type="text" class="form-control" placeholder="Número de documento" name="number">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Nombres</label>
                      <input type="text" class="form-control" placeholder="Nombre" name="name">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Apellidos</label>
                      <input type="text" class="form-control" placeholder="Apellido" name="last_name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Correo</label>
                    <input type="email" class="form-control" placeholder="Correo para contáctarte" name="email">
                  </div>
                  <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="pass" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Repite tu Contraseña</label>
                    <input type="password" name="pass_2" class="form-control">
                  </div>
                  <div class="white-space-10"></div>
                  <center><h4>En breve verificaremos tu correo</h4></center><br>
                  <div class="form-group no-margin">
                    <button class="btn btn-theme btn-lg btn-t-primary btn-block">Registrarse</button>
                  </div>
                </form><!-- form login -->

              </div>

            </div>
          </div>
        </div>   
      </div>
      <!--End form Person -->
      
    </div>
  </div>




<div class="block-section bg-color2">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <i class="fa fa-question fa-5x box-icon"></i>
        <h2 class=""> ¿Por qué crear una cuenta?</h2>
        <hr/>
        <p><i class="fa fa-check"></i> Crea, publica y Adminsitra tus ofertas.</p>
        <p><i class="fa fa-check"></i> Inscribe tu hoja de vida y aplica a nuestras ofertas.</p>

      </div>
    </div>
  </div>
</div>

</div><!--end body-content -->

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>
    