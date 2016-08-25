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

function Loggin_Action_Model(){
    if($_SERVER['REQUEST_METHOD']=="POST"){

        $conexion=conectar_base_de_datos();

        $documento=htmlentities($_POST['identificacion']);
        $documentofinal = mysql_escape_string($documento);
        $pass=htmlentities($_POST['password']);
        $claveCodificada = sha1($pass);
     $band=0;

    $consulta="SELECT * FROM persona";
        $resultado=mysqli_query($conexion,$consulta);

while ($fila=mysqli_fetch_array($resultado)) {
    $documentobase= $fila['documento'];
    $passbase = $fila['password'];
    $niveldeacceso = $fila['tipo_documento'];
    
    if ($documentobase==$documentofinal && $passbase==$claveCodificada) {
        session_start();
        $band=1;
         $_SESSION['documento']=$documentofinal;
         $_SESSION['tipo_documento']=$niveldeacceso;
    }


    }
    
    if($band==1){
       header("Location: /empleo/index.php/sistem");
    }else{
       header("Location: /empleo/index.php/login?state=fail");
    }

   cerrar_conexion_db($conexion);
}}
  function Job_List_Action_Model(){
if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        
        $donde =htmlentities($_POST['donde']); 
        $trabajo=htmlentities($_POST['trabajo']);
        $oferta = array();  
       $consulta = "SELECT * FROM `oferta` WHERE `vacante` LIKE '%".$trabajo."%' AND `ciudad` LIKE '%".$donde."%' ORDER BY fecha_publicacion DESC ";
       $resultado=mysqli_query($conexion,$consulta);
       $cont=0;
    while ($fila=mysqli_fetch_array($resultado)) {
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
  
  }
return $oferta;
}

?>