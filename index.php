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
    if($uri=="/empleo/index.php/services"){
     Services_Action_Controller();
    } 
    if($uri=="/empleo/index.php/contact"){
     Contact_Action_Controller();
    } 
    if($uri=="/empleo/index.php/sender"){
     Contact_Form_Action_Controller();
    } 
     if($uri=="/empleo/index.php/update_offer"){
     Update_Offer_Final_Action_Controller();
    } 
    


 if($uri=="/empleo/index.php/desaplicar_oferta"){
     Desaply_For_Offer_Action_Controller();
    } 
  if($uri=="/empleo/index.php/aplicar_oferta"){
     Apply_For_Offer_Action_Controller();
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
    if($uri=="/empleo/index.php/update_resume_company_do"){
     Update_Resume_Company_Do_Action_Controller();
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
    if($uri=="/empleo/index.php/update_skills"){
     Register_Skills_Action_Controller();
    }
    if($uri=="/empleo/index.php/update_estudies"){
     Register_Estudies_Action_Controller();
    }
    if($uri=="/empleo/index.php/update_reference"){
     Register_Reference_Action_Controller();
    }
     if($uri=="/empleo/index.php/my_offers"){
     Show_My_Offers_Action_Controller();
    }
    if($uri=="/empleo/index.php/requeriment"){
     Requeriment_Action_Controller();
    }
    if($uri=="/empleo/index.php/manage_users"){
     Manage_Users_Action_Controller();
    }
     if($uri=="/empleo/index.php/create_user"){
     Create_User_Action_Controller();
    }
    
    
    

    //Menú usuario Logueado
    if($uri=="/empleo/index.php/resume_person"){
     Resume_Action_Controller();
    } 
    if($uri=="/empleo/index.php/update_resume_person"){
     Update_Resume_Person_Action_Controller();
    }
    if($uri=="/empleo/index.php/update_person"){
     Update_Person_Action_Controller();
    }  
    if($uri=="/empleo/index.php/update_resume_company"){
     Update_Resume_Company_Action_Controller();
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

if($uri=="/empleo/index.php/Assing_comercial"){
     Add_comercial_Action_Controller();
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
    if($uri=="/empleo/index.php/job_post?state=create"){
     Job_Post_Create_Ok_Action_Controller();
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
     if($uri=="/empleo/index.php/job_post_new"){
      Register_New_Job_Action_Controller();
    } 
     if($uri=="/empleo/index.php/Change_comercial"){
      Change_Comercial_Action_Controller();
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
    if($uri[0]=="/empleo/index.php/skills_del"){      
        Skills_Person_Delete_Action_Controller();
    }
    if($uri[0]=="/empleo/index.php/reference_del"){      
        Reference_Person_Delete_Action_Controller();
    }
     if($uri[0]=="/empleo/index.php/offer_del"){      
        Offer_Delete_Action_Controller();
    }
     if($uri[0]=="/empleo/index.php/offer_update"){      
        Update_Offer_Action_Controller();
    }
      if($uri[0]=="/empleo/index.php/user_del"){      
        Delete_User_Action_Controller();
    }
    
    
    ?>