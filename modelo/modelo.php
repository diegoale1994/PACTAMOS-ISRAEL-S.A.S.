<?php
function conectar_base_de_datos (){
    $conexion=mysqli_connect("localhost","root","","bolsa_empleo");
    if(!$conexion){
        echo 'No se pudo conectar con la jodida BD';
    }
    return $conexion;
}
function cerrar_conexion_db($conexion){
    mysqli_close($conexion);
}



 function Register_N_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
if(!empty($_POST['number']) && isset($_POST['name']) &&  !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass_2']))
{
if($_POST['pass'] == $_POST['pass_2']){
  echo "entre aca<br>";
  echo $_POST['pass']." == ".$_POST['pass_2']."<br>";
  $email_natural = htmlentities($_POST['email']);
  $activation=md5($email_natural.time());
  $tipo_documento = htmlentities($_POST['type_document']);
$documento = htmlentities($_POST['number']);
$nombre_natural = htmlentities($_POST['name']);
$apellido_natural = htmlentities($_POST['last_name']);
$pass = htmlentities($_POST['pass']);
$pass_2 = htmlentities($_POST['pass_2']);
$passencript= sha1($pass);
 $conexion=conectar_base_de_datos();
 
  $consulta = "INSERT INTO persona (documento, tipo_documento, password, verificado, rol, activation_code) values ('$documento','$tipo_documento','$passencript','N','N','$activation')";
    mysqli_query($conexion, $consulta);
   $consulta = "INSERT INTO persona_natural (documento, nombre1, apellido1)VALUES('$documento','$nombre_natural','$apellido_natural')";
   mysqli_query($conexion, $consulta);
    $consulta = "INSERT INTO persona_correo (documento, correo)VALUES('$documento','$email_natural')";
    mysqli_query($conexion, $consulta);


//NIETO AQUI TIENE QUE ENVIAR UN EMAIL A $EMAIL_NATURAL CON EL SIGUIENTE LINK PACTAMOS.COM/EMPLEO/INDEX.PHP/VERIFY?CODE = $ACTIVATION
      header("Location: /empleo/index.php/register_info");
}else{
  header("Location: /empleo/index.php/404_error");
}
}else{
    header("Location: /empleo/index.php/404_error");
}
}else{
header("Location: /empleo/index.php/404_error");  
}}
function Register_E_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(!empty($_POST['number']) && isset($_POST['name_company']) &&  !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass_2']))
{
if($_POST['pass'] == $_POST['pass_2']){
  $email_empresa = htmlentities($_POST['email']);
  $activation=md5($email_empresa.time());
  $tipo_documento = htmlentities($_POST['type_document']);
$documento = htmlentities($_POST['number']);
$nombre_empresa = htmlentities($_POST['name_company']);
$email_empresa = htmlentities($_POST['email']);
$pass = htmlentities($_POST['pass']);
$pass_2 = htmlentities($_POST['pass_2']);
$passencript= sha1($pass);
 $conexion=conectar_base_de_datos();
  $consulta = "INSERT INTO persona (documento, tipo_documento, password, verificado, rol, activation_code) values ('$documento','$tipo_documento','$passencript','N','E','$activation')";
    mysqli_query($conexion, $consulta);
   $consulta = "INSERT INTO empresa (documento, nombre)VALUES('$documento','$nombre_empresa')";
   mysqli_query($conexion, $consulta);
    $consulta = "INSERT INTO persona_correo (documento, correo)VALUES('$documento','$email_empresa')";
    mysqli_query($conexion, $consulta);

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
                

                if ($documentobase==$documentofinal && $passbase==$claveCodificada) {

                  
                $niveldeacceso = $fila['rol'];
                    
                    $_SESSION['session_started']='yes';
                    if($niveldeacceso=="E"){
                        $consulta_datos="SELECT nombre FROM empresa where documento = '".$documentofinal."'";
                         $resultado1=mysqli_query($conexion,$consulta_datos);
            while ($fila1=mysqli_fetch_array($resultado1)) {
                     $_SESSION['nombre']=$fila1['nombre'];
                    }
                }
                   if($niveldeacceso=="P"){
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