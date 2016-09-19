<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='E') { ?>
 

 <?php ob_start() ?>
        <div class="container">
          <div class="text-center logo"><h1 class="color-white">Nombre de La Empresa</h1></div>
        </div>

      </header><!-- end main-header -->
      <!-- body-content -->
      <div class="body-content clearfix" >
        <!-- company profile -->
        <div class="bg-color2">
          <div class="container">
            <div class="row">
              <div class="col-md-9">

                <!-- box item details -->
                <div class="block-section box-item-details">
                  <!-- logo company-->
                  <div class="row">
                    <div class="col-md-8">
                      <a href=""><img src="./assets/theme/images/patner/4.png" alt=""></a>
                    </div>                    
                  </div><!-- end logo company-->
                  <!-- Bout Company-->
                  <form action ="../index.php/update_resume_company_do" method="post">
                   <?php foreach ($company as $value): ?>
                 
                  <h3 class="title " id="cp-about">Acerca de Nosotros</h3>
                  <h4>Razon Social:</h4>
                  <input class="form-control" name="razon" value="<?php echo $value['razon']?>">
                  <h4>Sector:</h4>
                  <input class="form-control" name="sector" value="<?php echo $value['sector']?>">
                  <h4>Descripción:</h4>
                  <textarea class="form-control" name ="descripcion" rows="30"><?php echo $value['descripcion']?></textarea>
                  
                  <h3 class="title" id="cp-contact">Contacto</h3>
                  <h4>Teléfono:</h4>
                  <input class="form-control" name="telefono" value="<?php echo $value['telefono']?>">
                  <h4>Dirección: </h4>
                  <input class="form-control" name="direccion" value="<?php echo $value['direccion']?>">
                  <h4>E-mail:</h4>
                  <input class="form-control" name="correo" value="<?php echo $value['correo']?>">
                  <h4>Sitio Web:</h4>
                  <input class="form-control" name="website" value="<?php echo $value['website']?>">
                   <?php   endforeach ?> 
                  <!-- jobs list-->
                 
                   <button class="btn btn-theme btn-lg btn-t-primary btn-block">Actualizar</button>   
                  </form>      
                </div><!-- end box item details -->


              </div>
              <div class="col-md-3">

                <!-- box afix right -->
                <div class="block-section " id="affix-box">
                  <div class="text-center">
                    <p><a href="#" class="btn btn-theme btn-t-primary btn-block">Actualizar Información</a></p>

                    <ul class="list-unstyled nav-sidebar">
                      <li>
                        <a href="#cp-about" class="link-innerpage">Acerca de Nosotros</a>
                      </li>
                      <li>
                        <a href="#cp-contact" class="link-innerpage">Contacto</a>
                      </li>
                      <li>
                        <a href="#cp-jobs" class="link-innerpage">Requerimientos</a>
                      </li>
                    </ul>
                    <p>Share This Company </p>
                    <p class="share-btns">
                      <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                      <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
                      <a href="#" class="btn btn-warning"><i class="fa fa-envelope"></i></a>
                    </p>
                  </div>
                </div><!-- end box afix right -->


              </div>
            </div>
          </div>
        </div> <!-- end company profile -->

        <!-- block map -->
        <div class="collapse" id="map-toogle">
          <div class=" bg-color2" id="map-area">
            <div class="container">

              <!-- map description -->
              <div class="marker-description">
                <div class="inner">
                  <h4 class="no-margin-top">Office Location</h4>
                  Central Jakarta No 1234, Jakarta, Indonesia
                </div>
              </div><!-- end map description -->

            </div>
            <div class="map-area-detail">
              <!-- change this data lat and lng -->
              <div class="box-map-detail" id="map-detail-job" data-lat="48.856318" data-lng="2.351866"></div>
            </div>

          </div><!-- end block map -->
        </div>





        <!-- modal apply -->
        <div class="modal fade" id="modal-apply">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <form>
                <div class="modal-header ">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" >Apply</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Full name</label>
                    <input type="email" class="form-control "  placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control "  placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Tell us why you better?</label>
                    <textarea class="form-control" rows="6" placeholder="Something Comment"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Your Resume</label>
                    <div class="input-group">
                      <span class="input-group-btn">
                        <span class="btn btn-default btn-theme btn-file">
                          File  <input type="file" >
                        </span>
                      </span>
                      <input type="text" class="form-control form-flat" readonly>
                    </div>
                    <small>Upload your CV/resume. Max. file size: 24 MB.</small>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success btn-theme">Send Application</button>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end modal  apply -->        
      </div><!--end body-content -->

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


<?php
}else{
  header("Location: /empleo/index.php/404_error");
}}}
else{
  header("Location: /empleo/index.php/404_error");
  
  }?>