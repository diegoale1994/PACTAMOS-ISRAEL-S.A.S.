<?php 
if(isset($_SESSION['session_started'])){
if ($_SESSION['session_started']=='yes') {
if ( $_SESSION['nivel_de_acceso']=='A') { ?>
 

 <?php ob_start() ?>



<form method="POST" action="../index.php/create_user">
           <label>Documento</label>
           <input type="text" name="documento" placeholder="CC">
           <label>Nombre</label>
           <input type="text" name="nombre">
           <label>Apellido</label>
           <input type="text" name="apellido" required>
           <label>Password</label>
           <input type="text" name="pass">
           <select  name="Tipo_user">
           <option value= "C">COMERCIAL</option>
           <option value= "V">VENTAS</option>
           </select>
           <input type="submit" value="crear">
                </form>
<H2>Mis usuarios</H2>



<table class="table"> 
           <tr>
              <td>Documento</td>
              <td>nombre</td>
              <td>apellido</td>
              <td>rol</td>
               <td>accion</td>
          </tr>
          <?php foreach($users as $value): ?>
          <tr>
              <td>
              	<?php echo $value['documento'];?>
              </td>
              <td>
              	<?php echo $value['nombre1'];?>
              </td>
              <td>
              	<?php echo $value['apellido1'];?>
              </td>
               <td>
              	<?php echo $value['rol'];?>
              </td>
          </tr>
          <?php   endforeach ?>
        </table>

  

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




 <?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantilla_base.php"; ?>


<?php
}else{
  header("Location: /empleo/index.php/404_error");
}}}
else{
  header("Location: /empleo/index.php/404_error");
  
  }?>


     