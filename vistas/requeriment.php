
   <?php ob_start() ?>
        <!-- form search area-->
 
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <!-- logo -->
        <div class="logo text-center-sm"> <a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="100"></a></div>
      </div>

      <div class="col-md-8">
        <!-- form search -->
        <form class="form-search-list" action = "/empleo/index.php/job_list" method ="post">
          <div class="row">
            <div class="col-sm-5 col-xs-6 ">
              <div class="form-group">
                <label class="color-white">¿Qué buscas?</label>
                <input class="form-control" name = "trabajo" placeholder="Nombre del empleo" required >
              </div>
            </div>
            <div class="col-sm-5 col-xs-6 ">
              <div class="form-group">
                <label class="color-white">¿Donde?</label>
                <input class="form-control" name = "donde" placeholder="Lugar">
              </div>
            </div>
            <div class="col-sm-2 col-xs-12 ">
              <div class="form-group">
                <label class="hidden-xs">&nbsp;</label>
                <button class="btn btn-block btn-theme  btn-success">Buscar</button>
              </div>
            </div>
          </div>
        </form>  <!-- form search -->
      </div>
    </div>
  </div><!-- end form search area-->
</header><!-- end main-header -->

<!-- body-content -->
<div class="body-content clearfix" >

  <div class="bg-color2">
    <div class="container">
      <div class="row">
        <div class="col-md-9">

          <!-- box listing -->
          <div class="block-section-sm box-list-area">

            <!-- desc top -->
            <div class="row hidden-xs">
              <div class="col-sm-6  ">
                <p><strong class="color-black">Ofertas Disponibles</strong></p>
              </div>
              <div class="col-sm-6">
                <p class="text-right">
                  Jobs 1 to 10 of 578
                </p>
              </div>
            </div><!-- end desc top -->
            <?php

              if (empty($oferta)) {
              
                  }else{
                    if($oferta[0]=="N"){
                      ?>
                     <div id="no_result" >
                     <center>
            
                      <p>No se encontraron resultados</p>
                    </center>
             </div>
                      <?php
                    }else{
            ?>
            <!-- item list -->  
            <div class="box-list">
            
            <?php foreach($oferta as $value): ?>
              <div class="item">
                <div class="row">
                  <div class="col-md-1 hidden-sm hidden-xs"><div class="img-item"><img src="<?php echo $value["foto"] ?>" alt=""></div></div>
                  <div class="col-md-11">
                    <h3 class="no-margin-top"><a href="/empleo/index.php/job_details?offerNo=<?php echo $value["id_oferta"] ?>" class=""><?php echo $value["vacante"] ?><i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                    <h5><span class="color-black"><?php echo $value["nombre"] ?></span> - <span class="color-white-mute"><?php echo $value["departamento"] ?>, <?php echo $value["ciudad"] ?></span></h5>
                    <p class="text-truncate "><?php echo $value["descripcion_profesional"] ?></p>
                    <div>
                      <span class="color-white-mute"><?php echo $value["fecha"] ?></span> - 
                   <?php

                           if (isset($_SESSION['tipo_documento'])){?>
                            
                               <a href="" data-toggle="modal" class="btn btn-xs btn-theme btn-default">Postularse</a> - 
                          <?php }else{?>
                             <a href="#need-login" data-toggle="modal" class="btn btn-xs btn-theme btn-default">Aplicar</a> - 
                          <?php }
                            ?>
                                              

                                              <a href="#modal-email" data-toggle="modal"  class="btn btn-theme btn-xs btn-default">Compartir</a> - 
                                            
                                            </div>
                                          </div>
                                        </div>
                                      </div><!-- end item list -->
                                         <?php endforeach ?>
                                    </div>
                  <?php }} ?>

            

            <!-- pagination -->
            <nav >
              <ul class="pagination pagination-theme  no-margin">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&larr;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><span>...</span></li>
                <li><a href="#">50</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&rarr;</span>
                  </a>
                </li>
              </ul>
            </nav><!-- pagination -->

          </div><!-- end box listing -->


        </div>
        
      </div>
    </div>
  </div>



  <!-- modal need login -->
  <div class="modal fade" id="need-login">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" >You must login to save jobs</h4>
        </div>
        <div class="modal-footer text-center">
          <a href="/empleo/index.php/login" class="btn btn-default btn-theme" >Login</a>
          <a href="#" class="btn btn-success btn-theme">Create account (it's free)</a>
        </div>

      </div>
    </div>
  </div><!-- end modal  need login -->


  <!-- modal need login -->
  <div class="modal fade" id="modal-email">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <form>
          <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" >Send this job to yourself or a friend:</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>From my email address</label>
              <input type="email" class="form-control "  placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label>To email address</label>
              <input type="email" class="form-control "  placeholder="Enter Email">
            </div>

            <div class="form-group">
              <label>Comment (optional)</label>
              <textarea class="form-control" rows="6" placeholder="Something Comment"></textarea>
            </div>
            <div class="checkbox flat-checkbox">
              <label>
                <input type="checkbox"> 
                <span class="fa fa-check"></span>
                Send a copy to my email address?
              </label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-theme">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- end modal  need login -->        
</div><!--end body-content -->
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>