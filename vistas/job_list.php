
   <?php ob_start() ?>
        <!-- form search area-->
 
  <div class="container">
         <div class="col-md-12">
      <h1 class="color-white text-center ">Ofertas Disponibles</h1><br>
    </div>
        </div>
</header><!-- end main-header -->

<!-- body-content -->
<div class="body-content clearfix" >

  <div class="bg-color2">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="block-section-sm box-list-area">
            <div class="row hidden-xs">
              <div class="col-sm-6  ">
                <p><strong class="color-black"></strong></p>
              </div>
              <div class="col-sm-6">
                <p class="text-right">
                </p>
              </div>
            </div><!-- end desc top -->
            <?php
              if (empty($oferta)) {
              
                  }else{
                    if($oferta[0]=="N"){
                      ?>
                      <div id="no_result">
                        <center><h1>No se encontraron resultados</h1> </center>
                      </div>
                      <?php
                    }else{
            ?>
            <!-- item list -->  
            <div class="box-list">            
            <?php foreach($oferta as $value): ?>
              <div class="item">
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="no-margin-top"><a href="/empleo/index.php/job_details?offerNo=<?php echo $value["id_oferta"] ?>" class=""><?php echo $value["vacante"] ?> <i class="fa fa-link color-white-mute font-1x"></i></a></h3>
                    <h5><span class="color-black"><?php echo $value["nombre"] ?></span> - <span class="color-white-mute"><?php echo $value["departamento"] ?>, <?php echo $value["ciudad"] ?></span></h5>
                    <p class="text-truncate "><?php echo $value["descripcion_profesional"] ?></p>
                    <!--<span class="color-white-mute"><?php echo $value["fecha"] ?></span>-->
                 <?php
                  if (isset($_SESSION['nivel_de_acceso'])){
                        if ($_SESSION['nivel_de_acceso'] == 'P') { 
                          $cont=0; 
                          foreach($mys_applys as $value1){
                            if ($value1['id_oferta']==$value['id_oferta']) { $cont++;?>
                            <form action ="/empleo/index.php/desaplicar_oferta" method ="POST">
                              <input type="hidden" name ="oferta" value ="<?php echo $value["id_oferta"] ?>">
                              <button class="btn btn-theme btn-lg btn-danger btn-block">Desaplicar</button>
                            </form>
                          <?php } }
                          if ($cont==0) {?>
                            <form action ="/empleo/index.php/aplicar_oferta" method ="POST">
                              <input type="hidden" name ="oferta" value ="<?php echo $value["id_oferta"] ?>">
                              <button class="btn btn-theme btn-lg btn-success btn-block">Aplicar</button>
                            </form>
                          <?php }
                           }}?>
                      
                    
                  </div>
                </div>
              </div><br><!-- end item list -->
              <?php endforeach ?>
            </div>
          <?php }} ?>
          </div><!-- end box listing -->
        </div>
        <div class="col-md-3">
          <div class="block-section-sm side-right">
          <div class="row">
            <form class="form-search-list" action = "/empleo/index.php/job_list" method ="post">
              <div class="form-group">
               <p><strong>¿Qué Buscas?</strong></p>
                <input class="form-control" name = "trabajo" placeholder="Nombre del empleo" required >
              </div>
           
              <div class="form-group">
                <p><strong>¿Donde?</strong></p>
                <input class="form-control" name = "donde" placeholder="Lugar">
              </div>
           
              <div class="form-group">
                <label class="hidden-xs">&nbsp;</label>
                <button class="btn btn-block btn-theme  btn-success">Buscar</button>
              </div>
            </form>  <!-- form search -->
            <div class="logo text-center-sm"> <center><a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="100"></a></center></div>
          </div>
        </div>
            
      
        
         

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