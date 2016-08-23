<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";
    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }
    
    if($uri=="/empleo/index.php/home"){
     Home_Action_Controller();
    } 
    ?>