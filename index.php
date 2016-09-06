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
    if($uri=="/empleo/index.php/company"){
     Company_Action_Controller();
    } 
    if($uri=="/empleo/index.php/contact"){
     Contact_Action_Controller();
    } 
    if($uri=="/empleo/index.php/sender"){
     Contact_Form_Action_Controller();
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
    if($uri=="/empleo/index.php/register"){
     Register_Action_Controller();
    } 
     if($uri=="/empleo/index.php/register_info"){
     Register_Info_Action_Controller();
    } 
     if($uri=="/empleo/index.php/register_info?status=verified"){
     Register_Info_Action_Controller();
    } 
    if($uri=="/empleo/index.php/update_exp_jobs"){
     Register_Exp_Job_Action_Controller();
    } 
    if($uri=="/empleo/index.php/update_estudies"){
     Register_Estudies_Action_Controller();
    }

    //Menú usuario Logueado
    if($uri=="/empleo/index.php/resume_person"){
     Resume_Action_Controller();
    } 
    if($uri=="/empleo/index.php/update_resume_person"){
     Update_Resume_Person_Action_Controller();
    } 
    if($uri=="/empleo/index.php/register_N_form"){
    Register_N_Action_Controller();
    } 
    if($uri=="/empleo/index.php/profile_confirmation"){
    Profile_Confirmation_Action_Controller();
    } 
    if($uri=="/empleo/index.php/resume_company"){
     Resume_Company_Action_Controller();
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
    if($uri=="/empleo/index.php/register_E_form"){
        Register_E_Action_Controller();
    } 
    

     if($uri=="/empleo/index.php/loggout?time_session=out"){
     User_Loggout_Time_Out_Action_Controller();
    } 
    $uri = explode("?", $_SERVER['REQUEST_URI']);
         if($uri[0]=="/empleo/index.php/job_details"){
      
      Show_Job_Action_Controller();
    }
    if($uri[0]=="/empleo/index.php/verify"){
      
      Verify_Account_Action_Controller();
    }
    if($uri[0]=="/empleo/index.php/exp_lab_del"){      
        Exp_Lab_Person_Delete_Action_Controller();
    }
    if($uri[0]=="/empleo/index.php/studies_del"){      
        Studies_Person_Delete_Action_Controller();
    }
    
    
    ?>