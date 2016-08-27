<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";
    session_start();
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
       if($uri=="/empleo/index.php/sistem"){
     echo "aqui vamos";
    } 
    if($uri=="/empleo/index.php/job_list"){
     Job_List_Action_Controller();
    } 
    if($uri=="/empleo/index.php/job_post"){
     Job_Post_Action_Controller();
    } 
     if($uri=="/empleo/index.php/loggout"){

     User_Loggout_Action_Controller();
    } 
     if($uri=="/empleo/index.php/404_error"){

     error404();
    } 

     if($uri=="/empleo/index.php/loggout?time_session=out"){
     User_Loggout_Time_Out_Action_Controller();
    } 
    $uri = explode("?", $_SERVER['REQUEST_URI']);
         if($uri[0]=="/empleo/index.php/job_details"){
      
      Show_Job_Action_Controller();
    }
    
    
    
    ?>