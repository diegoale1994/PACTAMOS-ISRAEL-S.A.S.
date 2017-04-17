<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='E' || $_SESSION['nivel_de_acceso']=='A') { ?>
 

 <?php ob_start() ?>
        

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
                  <form action ="../index.php/update_resume_company_do" method="post" enctype="multipart/form-data">
                   <?php foreach ($company as $value): ?>       
                    <div class="col-md-8">
                      <a href=""><img src="../images/Company/<?php echo $value["name_image"];?>" alt="Imagen de Perfil" width="50%"></a>                      
                      <h3 class="resume-sub-title"><span>Imagen</span></h3>
                      <input type="file" name="foto" class="form-control" size="30px">
                    </div>                    
                  </div>
                  <h3 class="title " id="cp-about">Acerca de Nosotros</h3>
                  <h4>Razon Social:</h4>
                  <input class="form-control" name="razon" value="<?php echo $value['razon']?>">
                  <h4>Sector:</h4>
                  <input class="form-control" name="sector" value="<?php echo $value['sector']?>">
                  <h4>Descripción:</h4>
                  <textarea class="form-control" name ="descripcion" rows="6"><?php echo $value['descripcion']?></textarea>
                  
                  <h3 class="title" id="cp-contact">Contacto</h3>
                  <h4>Teléfono:</h4>
                  <input class="form-control" name="telefono" value="<?php echo $value['telefono']?>">
                  <h4>Dirección: </h4>
                  <input class="form-control" name="direccion" value="<?php echo $value['direccion']?>">
                  <h4>E-mail:</h4>
                  <input class="form-control" name="email" value="<?php echo $value['correo']?>">
                  <h4>Sitio Web:</h4>
                  <input class="form-control" name="website" value="<?php echo $value['website']?>">
                  <?php if (isset($value['documento'])){?><input type="" name="doc1" hidden value="<?php echo $value['documento']?>"><?php } ?>
                   <?php   endforeach ?> <br>                  <!-- jobs list-->
                 
                   <button class="btn btn-theme btn-lg btn-warning btn-block">Actualizar</button>   
                  </form>      
                </div><!-- end box item details -->


              </div>
              <?php if ( $_SESSION['nivel_de_acceso']=='E') { ?>
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
                    </ul>                    
                  </div>
                </div>
              </div>
               <?php } ?>
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