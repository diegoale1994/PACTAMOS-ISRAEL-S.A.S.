<?php ob_start() ?>
  <div class="container">
    <!--<div class="col-md-2"></div>
    <div class="col-md-4">
      <div class="text-center logo"> <a href="index.html"><img src="../images/logo_pactamos.png" alt="" width="200"></a></div>
    </div>-->
    <div class="col-md-12">
      <h1 class="color-white text-center ">Acerca de Nosotros</h1><br>
    </div>
    
    <div class="white-space-50"></div>
  </div>

</header><!-- end main-header -->


<!-- body-content -->
<div class="body-content clearfix" >

  <!-- testimonial -->
  <div class="bg-color2 block-section line-bottom">
  <div class="container text-center">
   <div class="white-space-15"></div>
    <h2>Conoce un poco más acerca de Nosotros.</h2>
    <p></p>
    <div class="white-space-15"></div>

    <!-- box with icon center -->
    <div class="row">
      <div class="col-md-4">
        <div class="box-ic-center">
          <img src="../images/people/mision.png" width="200">
          <h4>Misión</h4>
          <p>Brindar soluciones especializadas a través de procesos eficientes de selección, contratación y administración de nómina para garantizar a nuestras empresas usuarias el talento humano idóneo y de calidad, que les permita competir en el mercado.</p>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-ic-center ">
          <img src="../images/people/vision.png" width="200">
          <h4>Visión</h4>
          <p>PACTAMOS ISRAEL S.A.S. en el año 2022 será la empresa líder en suministro del recurso humano del departamento; brindando la optimización de los servicios ofertados y cumpliendo con los estándares de calidad de selección, contratación y administración de nómina.  </p>
          
        </div>
      </div>
      <div class="col-md-4">
        <div class="box-ic-center">
          <img src="../images/people/nosotros.png" width="200">
          <h4>Acerca de Nosotros</h4>
          <p>PACTAMOS ISRAEL S.A.S., es una empresa líder en proceso de gestión Humana que brinda respaldo y asesoría a nuestros clientes en temas relacionados con selección, contratación de personal y administración de nómina, garantizando así la calidad, confiabilidad, seguridad, eficiencia, responsabilidad y calidez para competir y suplir las exigencias y necesidades de los servicios prestados en el mercado.</p>
         
      </div>
    </div><!-- box with icon center -->
  </div> <!-- end testimonial -->
</div>
  <!-- patners logo-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../images/Valores/valor01.png" alt="Chania">
    </div>

    <div class="item">
      <img src="../images/Valores/valor02.png" alt="Chania">
    </div>

    <div class="item">
      <img src="../images/Valores/valor03.png" alt="Flower">
    </div>

    <div class="item">
      <img src="../images/Valores/valor04.png" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

   
</div><!--end body-content -->

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>
    



   