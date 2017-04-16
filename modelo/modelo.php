<?php
function conectar_base_de_datos (){
    $conexion=mysqli_connect("localhost","root","","bolsa_empleo");
    if(!$conexion){
        echo 'No se pudo conectar con la BD';
    }
    return $conexion;
}
function cerrar_conexion_db($conexion){
    mysqli_close($conexion);
}
function Get_My_Applys_Action_Model(){
$conexion=conectar_base_de_datos();
$my_aplys = array();
$documento = $_SESSION['documento'];
$consulta="SELECT id_oferta from persona_natural_oferta where documento = '$documento'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$my_aplys[]=$fila;
            }
            return $my_aplys;
}


 function Desaply_For_Offer_Action_Model(){
 if($_SERVER['REQUEST_METHOD']=="POST"){
  $id_oferta = $_POST['oferta'];
   $documento = $_SESSION['documento'];
   $fecha =  date("Y-m-d");
   $conexion=conectar_base_de_datos();
 $consulta = "DELETE FROM persona_natural_oferta

WHERE documento = '$documento' and id_oferta ='$id_oferta';";
    mysqli_query($conexion, $consulta);
    
header("Location: /empleo/index.php/job_list");
}else{
  
 header("Location: /empleo/index.php/404_error");
  }
 }
 function Apply_For_Offer_Action_Model(){
 if($_SERVER['REQUEST_METHOD']=="POST"){
  $id_oferta = $_POST['oferta'];
   $documento = $_SESSION['documento'];
   $fecha =  date("Y-m-d");
   
   $conexion=conectar_base_de_datos();
 $consulta = "INSERT INTO persona_natural_oferta (documento, id_oferta, fecha_aplicaciom) values ('$documento','$id_oferta','$fecha')";
    mysqli_query($conexion, $consulta);
header("Location: /empleo/index.php/job_list");
}else{
  
 header("Location: /empleo/index.php/404_error");
  }
 }


function Update_Resume_Company_Do_Action_Model(){
 if($_SERVER['REQUEST_METHOD']=="POST"){
  $documento = $_SESSION['documento'];
 $email = htmlentities($_POST['email']);
  $telefono = htmlentities($_POST['telefono']);
  $direccion = htmlentities($_POST['direccion']);
  $website = htmlentities($_POST['website']);
  $sector = htmlentities($_POST['sector']);
  $descripcion = htmlentities($_POST['descripcion']);
  $razon = htmlentities($_POST['razon']);
  $conexion=conectar_base_de_datos();
 $consulta = "UPDATE persona Set direccion = '$direccion' Where documento='$documento'";
    mysqli_query($conexion, $consulta);
    $consulta = "UPDATE empresa Set descripcion = '$descripcion', sector = '$sector', razon = '$razon', website = '$website' Where documento='$documento'";
    mysqli_query($conexion, $consulta);

header("Location: /empleo/index.php/update_resume_company");
}else{
  
 header("Location: /empleo/index.php/404_error");
  }
}

function Change_Comercial_Action_Model(){
 if($_SERVER['REQUEST_METHOD']=="POST"){
  $comercial = $_POST['comercial'];
  $oferta = $_POST['oferta'];
  $conexion=conectar_base_de_datos();
 $consulta = "UPDATE oferta Set comercial = '$comercial' Where id_oferta='$oferta'";
    mysqli_query($conexion, $consulta);

 header("Location: /empleo/index.php/requeriment");
}else{
  header("Location: /empleo/index.php/404_error");
  }
}


function Delete_User_Action_Model(){
if (isset($_GET['delete'])){
  if(isset( $_SESSION['documento'])){
    $user = $_GET['delete'];
    $conexion=conectar_base_de_datos();
    $consulta = "DELETE FROM persona WHERE documento = '$user'";
     $resultado=mysqli_query($conexion,$consulta);
     $consulta = "UPDATE oferta Set estado = 'N' Where comercial='$user'";
    mysqli_query($conexion, $consulta);
     $resultado=mysqli_query($conexion,$consulta);
    $consulta = "UPDATE oferta Set comercial = '' Where comercial='$user'";
     $resultado=mysqli_query($conexion,$consulta);
     header("Location: /empleo/index.php/manage_users");
  }
}


}

function Get_users_Action_Model(){


$conexion=conectar_base_de_datos();
$users = array();
$consulta="SELECT nombre1, apellido1, n.documento, rol FROM persona AS n
JOIN persona_natural AS pn WHERE pn.documento = n.documento AND
n.rol = 'C'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$users[]=$fila;
            }
            $consulta="SELECT nombre1, apellido1, n.documento, rol FROM persona AS n
JOIN persona_natural AS pn WHERE pn.documento = n.documento AND
n.rol = 'V'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$users[]=$fila;
            }
            return $users;
}

function Get_Resumes_Action_Model(){


$conexion=conectar_base_de_datos();
$resume = array();
$consulta="SELECT * FROM persona, persona_natural WHERE persona.documento=persona_natural.documento AND
persona.rol = 'P'";
$resultado=mysqli_query($conexion,$consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
$resume[]=$fila;
            }
            
            return $resume;
}


function Create_User_Action_Model(){

 if($_SERVER['REQUEST_METHOD']=="POST"){
  $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
        $tipo_user = $_POST['Tipo_user'];
$documento = $_POST['documento'];
$passencript=sha1($_POST['pass']);


  $conexion=conectar_base_de_datos();
  $consulta = "INSERT INTO persona (documento, tipo_documento, password, verificado, rol) values ('$documento','CC','$passencript','Y','$tipo_user')";
  $resultado=mysqli_query($conexion,$consulta);
  $consulta = "INSERT INTO persona_natural (documento, nombre1, apellido1) values ('$documento','$nombre','$apellido')";
  $resultado=mysqli_query($conexion,$consulta);
 header("Location: /empleo/index.php/manage_users");
}else{
  header("Location: /empleo/index.php/404_error");
  }


}

function Create_Resume_Action_Model(){

 if($_SERVER['REQUEST_METHOD']=="POST"){

$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$tipo_doc = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$passencript=sha1($_POST['documento']);
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$profesion=$_POST['profesion'];



  $conexion=conectar_base_de_datos();
  $consulta = "INSERT INTO persona (documento, tipo_documento, password, verificado, rol, departamento, ciudad, direccion) values ('$documento','$tipo_doc','$passencript','Y','P','$departamento', '$ciudad', '$direccion')";
  $resultado=mysqli_query($conexion,$consulta);
  $consulta = "INSERT INTO persona_natural (documento, nombre1, nombre2, apellido1, apellido2, profesion) values ('$documento','$nombre1','$nombre2','$apellido1','$apellido2','$profesion')";
  $resultado=mysqli_query($conexion,$consulta);
 header("Location: /empleo/index.php/resumes");
}else{
  header("Location: /empleo/index.php/404_error");
  }


}

function Get_Basic_Information_Person_Action_Model(){
$conexion=conectar_base_de_datos();
$my_offers = array();
$documento = $_SESSION['documento'];
$consulta="SELECT id_oferta, vacante, fecha_publicacion FROM oferta where documento ='$documento'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$my_offers[]=$fila;
            }
            return $my_offers;
}
function Add_comercial_Action_Model(){
  if($_SERVER['REQUEST_METHOD']=="POST"){
  $oferta = $_POST['oferta'];
  $comercial = $_POST['comercial'];
  $conexion=conectar_base_de_datos();
  $consulta = "UPDATE oferta Set comercial='$comercial', estado = 'P' Where id_oferta='$oferta'";
    mysqli_query($conexion, $consulta);
 header("Location: /empleo/index.php/requeriment");
}else{
  header("Location: /empleo/index.php/404_error");
  }

}

function Person_Update_Action_Model(){ 
  $conexion=conectar_base_de_datos();
  $nombre1 = $_POST['nombre1'];
  $nombre2 = $_POST['nombre2'];
  $apellido1 = $_POST['apellido1'];
  $apellido2 = $_POST['apellido2'];
  $departamento = $_POST['departamento'];
  $ciudad = $_POST['ciudad'];
  $documento = $_SESSION['documento'];
  //$documento1=$_POST['doc'];
  $foto=$_FILES["foto"]["name"];
  $ruta=$_FILES['foto']['tmp_name'];
  $destino="./images/Person/".$foto;
  move_uploaded_file($ruta, $destino);
  if (isset($documento1)) {
    $documento=$documento1;
  }
 
   if ($foto!="") {
   
    $consulta = "UPDATE persona_natural Set nombre1='$nombre1',nombre2='$nombre2', apellido2='$apellido2', apellido1='$apellido1', image='$destino', name_image='$foto' Where documento='$documento'";
  }
  else{
    $consulta = "UPDATE persona_natural Set nombre1='$nombre1',nombre2='$nombre2', apellido2='$apellido2', apellido1='$apellido1' Where documento='$documento'";
  }
  $resultado=mysqli_query($conexion,$consulta); 
  $consulta="UPDATE persona Set departamento='$departamento', ciudad='$ciudad' Where documento='$documento'";
  $resultado=mysqli_query($conexion,$consulta);       
  cerrar_conexion_db($conexion);
 //header("Location: /empleo/index.php/update_resume_person");
}

function Get_company_Profile(){

$conexion=conectar_base_de_datos();
$company = array();
$company_document = $_SESSION['documento'];
$consulta="SELECT departamento, ciudad, direccion, nombre, descripcion, sector, razon, website, correo, telefono FROM persona p, empresa e, persona_correo pc, persona_telefono pt where p.documento=e.documento and pc.documento = e.documento and pt.documento = e.documento and e.documento= '$company_document'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$company[]=$fila;

            }

            return $company;

}
function Get_comercials(){

$conexion=conectar_base_de_datos();
$comercials = array();
$consulta="SELECT nombre1, apellido1, n.documento FROM persona AS n
JOIN persona_natural AS pn WHERE pn.documento = n.documento AND
n.rol = 'C'";
      

        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$comercials[]=$fila;
            }
            return $comercials;

}
function Update_Offer_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){

  if(isset($_SESSION['documento'])){
    $documento = $_SESSION['documento'];
    $vacante = htmlentities($_POST['vacante']);
    $descripcion = htmlentities($_POST['descripcion']);
    $descripcion_profesional = htmlentities($_POST['descripcion_profesional']);
    $departamento = $_POST['departamento'];
    $ciudad=$_POST['ciudad'];
    $salario=$_POST['salario'];
    $id_oferta=$_POST['id'];
    $horario=htmlentities($_POST['horario']);
   
    $vacantes =$_POST['vacantes'];
    $conexion=conectar_base_de_datos();
    
    $consulta = "UPDATE oferta Set vacante='$vacante', descripcion='$descripcion', descrip_prof='$descripcion_profesional', departamento='$departamento', ciudad='$ciudad', salario='$salario', horario='$horario' , vacantes='$vacantes' Where id_oferta='$id_oferta'";
    mysqli_query($conexion, $consulta);
     header("Location: /empleo/index.php/my_offers");

  }

}else{
  header("Location: /empleo/index.php/404_error");
  }

}
function Get_Individual_Offer_Action_Model(){
  if (isset($_GET['update'])){
  if(isset( $_SESSION['documento'])){
$conexion=conectar_base_de_datos();
$offer_No = array();
$id_oferta=$_GET['update'];
$consulta="SELECT id_oferta, salario, vacante, horario, descripcion, descrip_prof, departamento, ciudad, vacantes FROM oferta where id_oferta ='$id_oferta'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
             $offer_No[]=$fila;   
            }
      
          return $offer_No;
}}}

function Get_Offers_Action_Model(){
$conexion=conectar_base_de_datos();
$my_offers = array();
$documento = $_SESSION['documento'];
$consulta="SELECT id_oferta, vacante, fecha_publicacion, departamento, ciudad FROM oferta where documento ='$documento'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$my_offers[]=$fila;
            }
            return $my_offers;
}
function Offer_Delete_Action_Model(){
if (isset($_GET['delete'])){
  if(isset( $_SESSION['documento'])){
    $id_oferta = $_GET['delete'];
    $conexion=conectar_base_de_datos();
    $consulta = "DELETE FROM oferta WHERE id_oferta = '$id_oferta'";
     $resultado=mysqli_query($conexion,$consulta);
     header("Location: /empleo/index.php/my_offers");
  }
}
}

function Register_New_Job_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  
  if(isset($_SESSION['documento'])){
    $documento = $_SESSION['documento'];
    $vacante = htmlentities($_POST['vacante']);
    $descripcion = $_POST['descripcion'];
    $descripcion_profesional = $_POST['descripcion_profesional'];
    $departamento = $_POST['departamento'];
    $ciudad=$_POST['ciudad'];
    $salario=$_POST['salario'];

    $diainicio=$_POST['diainicio'];
    $diafin=$_POST['diafinal'];
    $horainicio=$_POST['horainicio'];
    $horafin=$_POST¨['horafinal'];
    $hora1=$_POST¨['hora1'];
    $hora2=$_POST¨['hora2'];

    $horario=$diainicio." a ".$diafin." de ".$horainicio.$hora1." a ".$horafin.$hora2;   
    $vacantes =$_POST['vacantes'];
    $conexion=conectar_base_de_datos();
    date_default_timezone_set('America/Bogota');
    $fecha =  date("Y-m-d");    
    $consulta = "INSERT INTO oferta (documento, salario, vacante, horario, descripcion, descrip_prof, estado,  departamento, ciudad, vacantes, fecha_publicacion) values ('$documento','$salario','$vacante','$horario','$descripcion','$descripcion_profesional','N','$departamento','$ciudad','$vacantes','$fecha')";
    mysqli_query($conexion, $consulta);
     header("Location: /empleo/index.php/job_post?state=create");

  }

}else{
  header("Location: /empleo/index.php/404_error");
  }
}
function Exp_Lab_Person_Delete_Action_Model(){
if (isset($_GET['delete'])){
  if(isset( $_SESSION['documento'])){
    $id_exp = $_GET['delete'];
    $conexion=conectar_base_de_datos();
    $consulta = "DELETE FROM exp_laboral WHERE id_exp = '$id_exp'";
     $resultado=mysqli_query($conexion,$consulta);
     header("Location: /empleo/index.php/update_resume_person");
  }
}
}
function Studies_Person_Delete_Action_Model(){
if (isset($_GET['delete'])){
  if(isset( $_SESSION['documento'])){
    $id_est = $_GET['delete'];
    $conexion=conectar_base_de_datos();
    $consulta = "DELETE FROM estudios WHERE id_estudio = '$id_est'";
     $resultado=mysqli_query($conexion,$consulta);
     header("Location: /empleo/index.php/update_resume_person");
  }
}
}

function Skills_Person_Delete_Action_Model(){
if (isset($_GET['delete'])){
  if(isset( $_SESSION['documento'])){
    $id_skill = $_GET['delete']; echo  $id_skill;
    $conexion=conectar_base_de_datos();
    $consulta = "DELETE FROM skills WHERE id = '$id_skill'";
     $resultado=mysqli_query($conexion,$consulta);
    // header("Location: /empleo/index.php/update_resume_person");
  }
}
}

function Reference_Person_Delete_Action_Model(){
if (isset($_GET['delete'])){
  if(isset( $_SESSION['documento'])){
    $id_ref = $_GET['delete']; 
    $conexion=conectar_base_de_datos();
    $consulta = "DELETE FROM reference WHERE id = '$id_ref'";
     $resultado=mysqli_query($conexion,$consulta);
    header("Location: /empleo/index.php/update_resume_person");
  }
}
}
function Get_Department_Action_Model(){
  $conexion=conectar_base_de_datos();
  $dpto = array();
  $consulta="SELECT * FROM departamento";
  $resultado=mysqli_query($conexion,$consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
    $dpto[]=$fila;}
  return $dpto;
}
function Get_City_Action_Model(){
  $conexion=conectar_base_de_datos();
  $mun = array();
  $consulta="SELECT * FROM municipios";
  $resultado=mysqli_query($conexion,$consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
    $mun[]=$fila;}
  return $mun;
}

function Get_Person_Action_Model(){
  $conexion=conectar_base_de_datos();
  $person = array();
  $documento = $_SESSION['documento'];
  if (isset($_GET['doc'])) {
  $documento=$_GET['doc'];;
  }
  $consulta="SELECT * FROM persona_natural, persona where persona_natural.documento=persona.documento AND persona.documento ='$documento'";
  $resultado=mysqli_query($conexion,$consulta);
  while ($fila=mysqli_fetch_array($resultado)) {
    $person[]=$fila;
                }
  return $person;
}

function Get_Exp_Person_Action_Model(){
$conexion=conectar_base_de_datos();
$exp_laboral = array();
$documento = $_SESSION['documento'];
if (isset($_GET['doc'])) {
  $documento=$_GET['doc'];;
}
$consulta="SELECT id_exp, nombre_empresa, sector_empresa, cargo, fecha_ini, fecha_fin, logros FROM exp_laboral where documento ='$documento'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$exp_laboral[]=$fila;
            }
  return $exp_laboral;

}
function Get_Exp_Person_Action_Model_Individual(){
$conexion=conectar_base_de_datos();
$exp_laboral = array();
if (isset($_GET['doc'])) {
  $documento=$_GET['doc'];;
}
$consulta="SELECT id_exp, nombre_empresa, sector_empresa, cargo, fecha_ini, fecha_fin, logros, documento FROM exp_laboral ";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
$exp_laboral[]=$fila;
            }
            return $exp_laboral;
}

function Get_Estudies_Action_Model(){
$conexion=conectar_base_de_datos();
$estudies = array();
$documento = $_SESSION['documento'];
if (isset($_GET['doc'])) {
  $documento=$_GET['doc'];;
}
$consulta="SELECT * FROM estudios where documento ='$documento'";
$resultado=mysqli_query($conexion,$consulta);
while ($fila=mysqli_fetch_array($resultado)) {
  $estudies[]=$fila;
              }
return $estudies;
}

function Get_Skills_Action_Model(){
$conexion=conectar_base_de_datos();
$skills = array();
$documento = $_SESSION['documento'];
if (isset($_GET['doc'])) {
  $documento=$_GET['doc'];;
  }
$consulta="SELECT * FROM skills where documento ='$documento'";
$resultado=mysqli_query($conexion,$consulta);
while ($fila=mysqli_fetch_array($resultado)) {
  $skills[]=$fila;
              }
return $skills;
}

function Get_Reference_Action_Model(){
$conexion=conectar_base_de_datos();
$ref = array();
$documento = $_SESSION['documento'];
if (isset($_GET['doc'])) {
  $documento=$_GET['doc'];;
  }
$consulta="SELECT * FROM reference where documento ='$documento'";
$resultado=mysqli_query($conexion,$consulta);
while ($fila=mysqli_fetch_array($resultado)) {
  $ref[]=$fila;
              }
return $ref;
}

function Register_Exp_Job_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  $conexion=conectar_base_de_datos();
  $nombre_empresa = ucwords($_POST['company_exp_name']);
  $cargo_empresa = ucwords($_POST['cargo']);
  $fecha_ini_trabajo = $_POST['fecha_ini_job'];
  $fecha_fin_trabajo = $_POST['fecha_fin_job'];
  $sector_empresa = $_POST['sector_empresa'];
  $logro = $_POST['logros'];
  $documento = $_SESSION['documento'];
  $documento1=$_POST['doc'];
  $ruta="update_resume_person";
  if (isset($documento1)) {
    $documento=$documento1;
    $ruta="update_resume";
  }
  $consulta = "INSERT INTO exp_laboral (documento, nombre_empresa, sector_empresa, cargo, fecha_ini, fecha_fin, logros) values ('$documento','$nombre_empresa','$sector_empresa','$cargo_empresa','$fecha_ini_trabajo','$fecha_fin_trabajo','$logro')";
    mysqli_query($conexion, $consulta);
    header("Location: /empleo/index.php/".$ruta);
}
}

function Register_Skills_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  $conexion=conectar_base_de_datos();
  $nombre_skill = $_POST['name_skill'];
  $descripcion_skill = ucwords($_POST['description_skill']); 
  $documento = $_SESSION['documento'];
  $documento1=$_POST['doc'];
  $ruta="update_resume_person";
  if (isset($documento1)) {
    $documento=$documento1;
    $ruta="update_resume";
  }
  $consulta = "INSERT INTO skills (documento, nombre, descripcion) values ('$documento','$nombre_skill','$descripcion_skill')";
    mysqli_query($conexion, $consulta);
    header("Location: /empleo/index.php/".$ruta);
}
}

function Register_Reference_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  $conexion=conectar_base_de_datos();
  $name_reference = $_POST['name_reference'];
  $profesion_reference = $_POST['profesion_reference']; 
  $tel_reference = $_POST['tel_reference'];
  $documento = $_SESSION['documento']; 
  $documento1=$_POST['doc'];
  $ruta="update_resume_person";
  if (isset($documento1)) {
    $documento=$documento1;
    $ruta="update_resume";
  }
  $consulta = "INSERT INTO reference (documento, name, profesion, telefono) values ('$documento','$name_reference','$profesion_reference','$tel_reference')";
    mysqli_query($conexion, $consulta);
    header("Location: /empleo/index.php/".$ruta);
}
}

function Register_Estudies_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  $conexion=conectar_base_de_datos();
  $titulo = ucwords($_POST['title']);
  $nivel_estudio = $_POST['nivel_estudio'];
  $entidad = ucwords($_POST['entity']);
  $fecha_ini= $_POST['fecha_ini_stu'];
  $fecha_fin = $_POST['fecha_fin_stu'];
  $dpto = $_POST['departamento_study'];
  $mun = $_POST['municipio_study'];
  $documento = $_SESSION['documento'];
  $documento1=$_POST['doc'];
  $ruta="update_resume_person";
  if (isset($documento1)) {
    $documento=$documento1;
    $ruta="update_resume";
  }
  $consulta = "INSERT INTO estudios (documento, title, nivel_estudio, centro_educativo, departamento, municipio, fecha_ini, fecha_fin) values ('$documento','$titulo','$nivel_estudio','$entidad','$dpto','$mun','$fecha_ini','$fecha_fin')";
    mysqli_query($conexion, $consulta);
    header("Location: /empleo/index.php/".$ruta);
}
}
function Sender_Action_Model(){

$siteName = "www.pactamos.com";
if (isset($_POST['name']) &&($_POST['email']) ) {
  $subject = $_POST['subj'];
  $nombre=$_POST['name'];
  $email=$_POST['email']; 
  $obs=$_POST['mssg'];  

        $mailSub = '[Contacto] [' . $siteName . '] '.$subject;
  
  $Contenido="Esta persona quiere contactarle: 
  \nNombre: " .$nombre .  
  "\nEmail: " .$email . 
  "\nMensaje: " .$obs. " ";

  
        $header = 'From: ' . $mail . "\r\n";
  $header .= 'Reply-To:  ' . $mail . "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion(); 
  
  $to="nietoandres03@gmail.com";
  mail($to,$mailSub ,$Contenido, $header);  

}
else{
  echo "error";
}

header ('Location: ../index.php/contact'); 

}

function Verify_Account_Action_Model(){
$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{

  $code = $_GET['code'];
   $conexion=conectar_base_de_datos();
   $consulta="SELECT documento FROM persona where activation_code ='$code' and verificado ='N'";
        $resultado=mysqli_query($conexion,$consulta);

              if(mysqli_num_rows($resultado) > 0)
{
$count=mysqli_query($conexion,"SELECT documento FROM persona WHERE activation_code='$code' and verificado ='N'");

if(mysqli_num_rows($count) == 1)
{
 
mysqli_query($conexion,"UPDATE persona SET verificado='Y' WHERE activation_code='$code'");
header("Location: /empleo/index.php/register_info?status=verified");
}
else
{
header("Location: /empleo/index.php/404_error");
}

}
else
{
$msg ="Wrong activation code.";

}
}else{
  header("Location: /empleo/index.php/404_error");
}}

 function Register_N_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
if(!empty($_POST['number']) && isset($_POST['name1']) &&  !empty($_POST['last_name1']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass_2']) && !empty($_POST['telefono']))
{
if($_POST['pass'] == $_POST['pass_2']){
  
  $email_natural = htmlentities($_POST['email']);
  $activation=md5($email_natural.time());
  $tipo_documento = htmlentities($_POST['type_document']);
  $telefono = $_POST['telefono'];
  $documento = htmlentities($_POST['number']);
  $nombre_natural1 = htmlentities($_POST['name1']);
  $nombre_natural2 = htmlentities($_POST['name2']);
  $apellido_natural1 = htmlentities($_POST['last_name1']);
  $apellido_natural2 = htmlentities($_POST['last_name2']);
  $pass = htmlentities($_POST['pass']);
  $pass_2 = htmlentities($_POST['pass_2']);
  $passencript= sha1($pass);
  $conexion=conectar_base_de_datos();
 
  $consulta = "INSERT INTO persona (documento, tipo_documento, password, verificado, rol, activation_code) values ('$documento','$tipo_documento','$passencript','N','P','$activation')";
    mysqli_query($conexion, $consulta);
   $consulta = "INSERT INTO persona_natural (documento, nombre1, nombre2, apellido1, apellido2)VALUES('$documento','$nombre_natural1','$nombre_natural2','$apellido_natural1','$apellido_natural2')";
   mysqli_query($conexion, $consulta);
    $consulta = "INSERT INTO persona_correo (documento, correo)VALUES('$documento','$email_natural')";
    mysqli_query($conexion, $consulta);
    $consulta = "INSERT INTO persona_telefono (documento, telefono)VALUES('$documento','$telefono')";
    mysqli_query($conexion, $consulta);
  $siteName = "www.pactamos.com";
  $mailSub = '[Código de Verificación] [' . $siteName . '] ';
  $Contenido="Ingrese a este link Para Verificar su correo: www.pactamos.com/empleo/index.php/verify?code=$activation";
  $heade = 'From: www.pactamos.com'."\r\n";
  $heade .= 'Reply-To:  ' . $mail . "\r\n";
  $heade .= 'X-Mailer: PHP/' . phpversion();  
  mail($email_natural,$mailSub ,$Contenido, $heade);  

  header("Location: /empleo/index.php/register_info");
}else{
  header("Location: /empleo/index.php/404_error");
}
}else{
    header("Location: /empleo/index.php/404_error");
}
}else{
header("Location: /empleo/index.php/404_error");  
}

}

function Register_E_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(!empty($_POST['number']) && isset($_POST['name_company']) &&  !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass_2']) && !empty($_POST['telefono']))
{
if($_POST['pass'] == $_POST['pass_2']){
  $email_empresa = htmlentities($_POST['email']);
  $activation=md5($email_empresa.time());
  $tipo_documento = htmlentities($_POST['type_document']);
$documento = htmlentities($_POST['number']);
$nombre_empresa = htmlentities($_POST['name_company']);
$email_empresa = htmlentities($_POST['email']);
$pass = htmlentities($_POST['pass']);
$telefono = $_POST['telefono'];
$pass_2 = htmlentities($_POST['pass_2']);
$passencript= sha1($pass);
$conexion=conectar_base_de_datos();
$consulta = "INSERT INTO persona (documento, tipo_documento, password, verificado, rol, activation_code) values ('$documento','$tipo_documento','$passencript','N','E','$activation')";
  mysqli_query($conexion, $consulta);
$consulta = "INSERT INTO empresa (documento, nombre)VALUES('$documento','$nombre_empresa')";
 mysqli_query($conexion, $consulta);
$consulta = "INSERT INTO persona_correo (documento, correo)VALUES('$documento','$email_empresa')";
  mysqli_query($conexion, $consulta);
  $consulta = "INSERT INTO persona_telefono (documento, telefono)VALUES('$documento','$telefono')";
  mysqli_query($conexion, $consulta);

$siteName = "www.pactamos.com";
$mailSub = '[Código de Verificación] [' . $siteName . '] ';
$Contenido="Ingrese a este link Para Verificar su correo: www.pactamos.com/empleo/index.php/verify?code=$activation";
$header = 'From: ' . $siteName . "\r\n";
$header .= 'Reply-To:  ' . $siteName . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion();  
mail($email,$mailSub ,$Contenido, $header); 
$_SESSION['correo_sin_activacion'] = $email_empresa;
    //NIETO AQUI TIENE QUE ENVIAR UN EMAIL A $EMAIL CON EL SIGUIENTE LINK PACTAMOS.COM/EMPLEO/INDEX.PHP/VERIFY?CODE = $ACTIVATION

 header("Location: /empleo/index.php/register_info");
}else{
   header("Location: /empleo/index.php/404_error");
}

}else{
    header("Location: /empleo/index.php/404_error");
}

}else{
header("Location: /empleo/index.php/404_error");  
}
}





function Loggin_Action_Model(){

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $conexion=conectar_base_de_datos();
        $documento=htmlentities($_POST['identificacion']);
        $documentofinal = mysql_escape_string($documento);
        $pass=htmlentities($_POST['password']);
        $tipo_documento = htmlentities($_POST['tipo_documento']);
        $claveCodificada = sha1($pass);
        $band=0;
        //echo $pass." -> ".$tipo_documento." -> ".$documento;
        
        $consulta="SELECT * FROM persona";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
                $documentobase= $fila['documento'];
                $passbase = $fila['password'];
                $documento_base = $fila['tipo_documento'];

                if ($documentobase==$documentofinal && $passbase==$claveCodificada && $tipo_documento==$documento_base) {
                    $niveldeacceso = $fila['rol'];
                    $_SESSION['session_started']='yes';
                    if($niveldeacceso=="E"){
                        $consulta_datos="SELECT nombre FROM empresa where documento = '".$documentofinal."'";
                         $resultado1=mysqli_query($conexion,$consulta_datos);
                      while ($fila1=mysqli_fetch_array($resultado1)) {
                               $_SESSION['nombre']=$fila1['nombre'];
                              }
                    }

                    if($niveldeacceso=="P" or $niveldeacceso=="A" or $niveldeacceso=="E"){
                        $consulta_datos="SELECT nombre1 FROM persona_natural where documento = '".$documentofinal."'";
                         $resultado1=mysqli_query($conexion,$consulta_datos);
                      while ($fila1=mysqli_fetch_array($resultado1)) {
                               $_SESSION['nombre']=$fila1['nombre1'];
                              }
                    }

                $band=1;
                $_SESSION['documento']=$documentofinal;
                $_SESSION['nivel_de_acceso']=$niveldeacceso;
                $_SESSION['tiempo'] = time();
                 if($fila['verificado'] =='N'){
                  session_destroy();
                  $band=2;
                  $consulta_datos="SELECT correo from persona_correo where documento = '".$documentofinal."'";
                         $resultado1=mysqli_query($conexion,$consulta_datos);
                  while ($fila1=mysqli_fetch_array($resultado1)) {
                      session_start();
                              $_SESSION['correo_sin_activacion']=$fila1['correo'];
                          }
                
               
                  }
    }
    }
    
    if($band==2){
       header("Location: ../index.php/register_info");
    }
    if($band==0){
       header("Location: ../index.php/login?state=fail");
    }
    
    if($band==1 and $tipo_documento == "CC"){
       header("Location: ../index.php/resume_person");
    }
     if($band==1 and $tipo_documento == "CC" and $niveldeacceso=='A'){
       header("Location: ../index.php/requeriment");
    }
      if($band==1 and $tipo_documento == "NI"){
      header("Location: ../index.php/job_post");
    }

    
   cerrar_conexion_db($conexion);
}}
  function Job_List_Action_Model(){
        $oferta = array();  
if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $donde =htmlentities($_POST['donde']); 
        $trabajo=htmlentities($_POST['trabajo']);
        $consulta = "SELECT * FROM `oferta` WHERE `vacante` LIKE '%".$trabajo."%' AND `ciudad` LIKE '%".$donde."%' ORDER BY fecha_publicacion DESC ";
        $resultado=mysqli_query($conexion,$consulta);
        $cont=0;
            while ($fila=mysqli_fetch_array($resultado)) {
                 $oferta[$cont]['id_oferta']=$fila['id_oferta'];
                $oferta[$cont]['vacante']=$fila['vacante'];
                $oferta[$cont]['descripcion_profesional']=$fila['descrip_prof'];
                $oferta[$cont]['departamento']=$fila['departamento'];
                $oferta[$cont]['ciudad']=$fila['ciudad'];

                $oferta[$cont]['fecha']=$fila['fecha_publicacion'];
                $docu = $fila['documento'];
                $consulta2="SELECT nombre FROM empresa WHERE documento ='".$docu."'";
                $resultado2=mysqli_query($conexion,$consulta2);
                    while ($fila2=mysqli_fetch_array($resultado2)) {
                            $oferta[$cont]['nombre']=$fila2['nombre'];
                    }
                $consulta3="SELECT foto FROM persona WHERE documento ='".$docu."'";
                $resultado3=mysqli_query($conexion,$consulta3);
                    while ($fila3=mysqli_fetch_array($resultado3)) {
                            $oferta[$cont]['foto']=$fila3['foto'];
                    }
            $cont++;
            }
    if($cont==0){
        $oferta[0]="N";
        return $oferta;
    }else{
  return $oferta;
  }}

return $oferta;
}
  function Requeriment_List_News(){
          

        $conexion=conectar_base_de_datos();
      
        $consulta = "SELECT vacante vacante, fecha_publicacion fecha, id_oferta id_oferta, estado estado, nombre nombre FROM oferta v, empresa e  where v.documento = e.documento and v.estado= 'N'";
        $resultado=mysqli_query($conexion,$consulta);
        $requeriment = array();
            while ($fila=mysqli_fetch_array($resultado)) {
              $requeriment[]= $fila;
                 }

return $requeriment;

}
function Requeriment_List_Process(){


        $conexion=conectar_base_de_datos();
      
        $consulta = "SELECT vacante vacante, fecha_publicacion fecha, id_oferta id_oferta, estado estado, nombre nombre, nombre1 nombre1, apellido1 apellido1 FROM oferta v, empresa e, persona_natural p where v.documento = e.documento and v.estado= 'P' and p.documento = v.comercial";
        $resultado=mysqli_query($conexion,$consulta);
        $requeriment = array();
            while ($fila=mysqli_fetch_array($resultado)) {
              $requeriment[]= $fila;
                 }

return $requeriment;
}
function Requeriment_List_Finished(){
 

        $conexion=conectar_base_de_datos();
      
        $consulta = "SELECT vacante vacante, fecha_publicacion fecha, id_oferta id_oferta, estado estado, nombre nombre, nombre1 nombre1, apellido1 apellido1 FROM oferta v, empresa e, persona_natural p where v.documento = e.documento and v.estado= 'F' and p.documento = v.comercial";
        $resultado=mysqli_query($conexion,$consulta);
        $requeriment = array();
            while ($fila=mysqli_fetch_array($resultado)) {
              $requeriment[]= $fila;
                 }

return $requeriment;
}
function Show_Job_Action_Model(){
if (isset($_GET['offerNo'])){
if($_GET['offerNo']=="" ){
header("Location: /empleo/index.php/404_error");
}
$conexion=conectar_base_de_datos();
$oferta_detailed=array();
$No_oferta = $_GET['offerNo'];
$cont = 0;
$consulta = "SELECT * FROM oferta WHERE `id_oferta` = '".$No_oferta."'";
        $resultado=mysqli_query($conexion,$consulta);
            while ($fila=mysqli_fetch_array($resultado)) {
                $oferta_detailed[]=$fila;
}
return $oferta_detailed;
}
else{
     header("Location: /empleo/index.php/404_error");
}
}

?>