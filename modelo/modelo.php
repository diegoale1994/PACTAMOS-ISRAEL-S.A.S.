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
       header("Location: /empleo/index.php/sistema");
    }else{
       header("Location: /empleo/index.php/login?state=fail");
    }

   cerrar_conexion_db($conexion);
}


}
?>