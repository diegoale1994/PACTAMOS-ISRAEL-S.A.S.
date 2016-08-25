   <?php ob_start() ?>
        <!-- mobile navbar -->
        


        <div class="container">
          <div class="text-center logo"> <a href="/empleo/index.php/home"><img src="../images/logo.png" alt=""></a></div>
        </div>

      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="block-section bg-color4">
          <div class="container">
            <div class="panel panel-md">
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- buttons top -->
                    <p><a href="#" class="btn btn-primary btn-theme btn-block"><i class="fa fa-facebook pull-left bordered-right"></i> Login with Facebook</a></p>
                    <p><a href="#" class="btn btn-danger btn-theme btn-block"><i class="fa fa-google-plus pull-left bordered-right"></i> Login with Google</a></p>
                    <!-- end buttons top -->

                    <div class="white-space-10"></div>
                    <p class="text-center"><span class="span-line">OR</span></p>

                    <!-- form login -->
                    <form method = "POST" action='/empleo/index.php/loggin_form'>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name = "identificacion" class="form-control" placeholder="Your identification">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name = "password" class="form-control" placeholder="Your Password">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xs-6">
                            <div class="checkbox flat-checkbox">
                              <label>
                                <input type="checkbox"> 
                                <span class="fa fa-check"></span>
                                Remember me?
                              </label>
                            </div>
                          </div>
                          <div class="col-xs-6 text-right">
                            <p class="help-block"><a href="#myModal" data-toggle="modal">Forgot password?</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="form-group no-margin">
                        <button class="btn btn-theme btn-lg btn-t-primary btn-block">Log In</button>
                      </div>
                    </form><!-- form login -->

                  </div>
                </div>
              </div>
            </div>

            <div class="white-space-20"></div>
            <div class="text-center color-white">Not a member? &nbsp; <a href="#" class="link-white"><strong>Create an account free</strong></a></div>
          </div>
        </div>

        <!-- box bottom -->
        <div class="block-section bg-color2">
          <div class="container text-center">
            <i class="fa fa-mobile-phone fa-5x box-icon"></i>
            <h2 class=""> Find jobs with your phone</h2>

            <p>Download the JobPlanet app from the</p>
            <a href="#" class="btn btn-theme btn-default"><i class="fa fa-android bordered-right dark"></i> Android</a>
            <span class="space-inline-10"></span>
            <a href="#" class="btn btn-theme btn-default"><i class="fa fa-apple bordered-right dark"></i> Iphone</a>
          </div>
        </div><!-- end box bottom -->

        <!-- modal forgot password -->
        <div class="modal fade" id="myModal" >
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" >Forgot Password</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Enter Your Email</label>
                    <input type="email" class="form-control " name="text" placeholder="Email">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default btn-theme" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success btn-theme">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end modal forgot password -->        
      </div><!--end body-content -->
<?php if(isset($_GET['state'])){
            if($_GET['state']=="fail"){
              ?>
              
              <center><h4>usuario o contraseña incorrecta</h4></center>
              
              <?php
            }
           } ?>

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>