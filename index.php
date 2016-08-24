<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";
    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }
    
    if($uri=="/empleo/index.php/home"){
     Home_Action_Controller();
    } 
    if($uri=="/empleo/index.php/login"){
     Login_Action_Controller();
    } 
     if($uri=="/empleo/index.php/loggin_form"){
     Login_Form_Action_Controller();
    } 
       if($uri=="/empleo/index.php/login?state=fail"){
     Login_Fail_Action_Controller();
    } 
       if($uri=="/empleo/index.php/sistema"){
     echo "aqui vamos";
    } 
    
    ?>