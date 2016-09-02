

<?php ob_start() ?>
        <div class="container">
          <div class="text-center logo no-margin-bottom"> <a href="index.html"><img src="../images/logo.png" alt=""></a></div>
          <h3 class="color-white text-center ">Page Not Found</h3>
          <div class="white-space-50"></div>
        </div>
      </header><!-- end main-header -->


      <!-- body-content -->
      <div class="body-content clearfix" >

        <div class="block-section bg-color2">
          <div class="container">
            <!-- text centered -->
            <div class="text-center">
              <h1>we have sended and email of confirmation to your email go and check it!! BEFORE TO CONTINUE</h1>

              <p>Here are some helpful links instead:</p>
              <ul class="list-inline">
                <li> <a href="#">Home</a></li>
                <li><a href="#">Find a Job</a></li>
                <li> <a href="#">Blog</a></li>
                <li> <a href="#">Contact Us</a></li>
              </ul>
            </div><!-- end text centered -->

            <!-- big text error -->
            <div class="big-error">404</div><!-- end big text error -->
          </div>
        </div>        
      </div><!--end body-content -->



<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>