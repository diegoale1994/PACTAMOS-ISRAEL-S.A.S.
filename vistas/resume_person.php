     <!-- main-header -->

<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='P') { ?>
<?php ob_start() ?> 
<!-- body-content -->
<div class="body-content clearfix" >
<div class="white-space-10"></div>

<div class="bg-color2">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

        <!-- box item details -->
        <div class="block-section box-item-details">
          <div class="resume-block">
            <div class="img-profile"><img src="../images/user/user1.png" alt=""></div><!--Ponga aui la foto-->
            <div class="desc">
              <h2>Andrés Felipe Nieto</h2>
              <h4>Ingeniero de Sistemas</h4>
              <p>Fusagasugá Cundinamarca</p>

              <h3 class="resume-sub-title"><span>Experiencia Laboral</span></h3>

              <h4>Desarrollador PHP</h4>
              <h5>iDeartech<span class="color-white-mute"> Fusagasugá - Cundinamarca</span></h5>
              <p  class="color-white-mute">Febrero 2016 - Actualmente</p>
              <h5>Responsibilidades :</h5>
              <p>Desarrollo de plataformas Web responsive PHP usando Laravel como Framework principal.</p>
              <h5>Habilidades usadas:</h5>
              <p>PHP, Javascript, XML, JSON, Linux Apache Mysql y Python</p>           


              <h3 class="resume-sub-title"><span>Educacion</span></h3>
              <h4>Ingeniero de Sistemas</h4>
              <h5>Universidad de Cundinamarca<span class="color-white-mute">- Fusagasugá Cundinamarca</span></h5>
              

              <h3 class="resume-sub-title"><span>Referencias Personales</span></h3>
              <h4>Carlos Alberto Guampe</h4>
              <h5>Adminsitrador de Empresas <span class="color-white-mute">- Fusagasugá Cundinamarca</span></h5>

              <h3  class="resume-sub-title"><span>Información Adicional</span></h3>
              <h4>Habilidades:</h4>
              <ul>
                <li>PHP 5, Perl and Python scripting </li>
                <li>Java</li>
                <li>SQL, Mysql, MongoDB </li>
                <li>Revision control/source code management using Mercurial, GIT, RCS/CVS </li>
                <li>JavaScript Libraries</li>
                <li>Apache Solr search engine </li>
                <li>Wordpress, Drupal, Joomla, Mambo, CMS </li>
                <li>Adobe Photoshop & GIMP </li>                
              </ul>
            </div>
          </div>
        </div><!-- end box item details -->


      </div>
      <div class="col-md-3">

        <!-- box affix right -->
        <div class="block-section " id="affix-box">
          <div class="text-right">
            <p><a href="../index.php/update_resume_person" class="btn btn-theme btn-warning dark btn-block-xs">Actualizar Información</a></p>
            <p>Updated: February 16, 2015</p>
            <p><a href="#modal-apply"  data-toggle="modal" class="btn btn-theme btn-t-primary btn-block-xs">Forward by Email</a></p>
            <p><a href="#" class="btn btn-theme btn-t-primary btn-block-xs">Contact Bryon</a></p>
            <p><a href="#" class="btn btn-theme btn-t-primary btn-block-xs">Download This Resume</a></p>
            <p>Share This Resume <span class="space-inline-10"></span> :</p>
            <p class="share-btns">
              <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
              <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i></a>
              <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="btn btn-warning"><i class="fa fa-pinterest"></i></a>
            </p>
          </div>
        </div><!-- box affix right -->

      </div>
    </div>
  </div>
</div>


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


     