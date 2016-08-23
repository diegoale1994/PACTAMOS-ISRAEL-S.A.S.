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

function consult_comuna(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT Cod_comuna, Nom_comuna FROM comunidad";
        $resultado=mysqli_query($conexion,$consulta);
        $comunas=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $comunas[]=$fila;
        }

        cerrar_conexion_db($conexion);
        return $comunas;


}
function consult_patient(){
        $codigo_de_paciente= $_POST['Doc_paciente'];
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM paciente where doc_paciente='$codigo_de_paciente'";
        $resultado=mysqli_query($conexion,$consulta);
        $paciente=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $paciente[]=$fila;
        }

        cerrar_conexion_db($conexion);
        return $paciente;
    }
function create_comuna(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $codigo_de_comuna= $_POST['com_cod'];
        $nombre_de_comuna= $_POST['com_name'];
        $descripcion_de_comuna= $_POST['com_desc'];
        $tranquilidad_de_comuna= $_POST['com_tran'];
        $contaminacion_de_comuna= $_POST['com_conta'];
        $transporte_de_comuna= $_POST['com_trans'];
        $zona_verde_de_comuna= $_POST['com_verde'];
        $via_de_acceso_comuna= $_POST['com_via'];
        $servicios_publicos_de_comuna= $_POST['com_ser'];
        $barreras_de_comuna= $_POST['com_bar'];
        $consulta = "INSERT INTO comunidad VALUES('$codigo_de_comuna','$nombre_de_comuna','$descripcion_de_comuna','$tranquilidad_de_comuna','$contaminacion_de_comuna','$transporte_de_comuna','$zona_verde_de_comuna','$via_de_acceso_comuna','$servicios_publicos_de_comuna','$barreras_de_comuna')";
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);       
    }

    header("Location: /moe/index.php/home?enter_comuna=succes");

}
function create_patient(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();

        $documento_del_paciente= $_POST['pac_doc'];
        $nombre_del_paciente= $_POST['pac_name'];
        $fecha_nacimiento_del_paciente= $_POST['pac_fec'];
        $direccion_del_paciente= $_POST['pac_dir'];
        $municipio_del_paciente= $_POST['pac_mun'];
        $barrio_del_paciente= $_POST['pac_bar'];
        $procedencia_del_paciente= $_POST['pac_proc'];
        $estrato_del_paciente= $_POST['pac_est'];
        $eps_del_paciente= $_POST['pac_eps'];
        $escolaridad_del_paciente= $_POST['pac_niv'];
        $religion_del_paciente= $_POST['pac_rel'];
        $dxmedico_del_paciente= $_POST['pac_dx'];
        $cuidador_del_paciente= $_POST['pac_req'];
        $parentesco_cuidador_del_paciente= $_POST['pac_cuida'];
        $paciente_vive_con= $_POST['pac_vive'];
        $tipo_familia_del_paciente= $_POST['pac_tipo'];
        $relacion_familiar_del_paciente= $_POST['pac_rela'];
        $fuente_ingresos_del_paciente= $_POST['pac_fte'];
        $ingresos_mensuales_del_paciente= $_POST['pac_ing'];
        $comuna_del_paciente= $_POST['pac_com'];

        $consulta = "INSERT INTO paciente VALUES('$documento_del_paciente','$nombre_del_paciente','$fecha_nacimiento_del_paciente','$direccion_del_paciente','$municipio_del_paciente','$barrio_del_paciente','$procedencia_del_paciente','$estrato_del_paciente','$eps_del_paciente','$escolaridad_del_paciente','$religion_del_paciente','$dxmedico_del_paciente','$cuidador_del_paciente','$parentesco_cuidador_del_paciente','$paciente_vive_con','$tipo_familia_del_paciente','$relacion_familiar_del_paciente','$fuente_ingresos_del_paciente','$ingresos_mensuales_del_paciente','$comuna_del_paciente')";
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);       
    }

    header("Location: /moe/index.php/home?enter_patient=succes");

}
?>