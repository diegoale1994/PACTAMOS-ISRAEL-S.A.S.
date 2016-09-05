<?php 
function Home_Action_Controller(){
require "vistas/index.php";
}
function Company_Action_Controller(){
require "vistas/about.php";
}
function Contact_Action_Controller(){
require "vistas/contact.php";
}
function Login_Action_Controller(){
require "vistas/login.php";
}
function Register_Action_Controller(){
require "vistas/register.php";
}
function Register_Info_Action_Controller(){

require "vistas/register_info.php";
}
function Login_Form_Action_Controller(){
Loggin_Action_Model();
}
function Login_Fail_Action_Controller(){
	require "vistas/login.php";
}
function Verify_Account_Action_Controller(){
	Verify_Account_Action_Model();
}
  function Register_Exp_Job_Action_Controller(){
  	Register_Exp_Job_Action_Model();
  }
function Register_N_Action_Controller(){
	Register_N_Action_Model();
}
function Profile_Confirmation_Action_Controller(){
	require "vistas/profile_confirmation.php";
}
//Menú usuario logueado
function Resume_Action_Controller(){
	require "vistas/resume_person.php";
}
function Update_Resume_Person_Action_Controller(){
	$exp_laboral = Get_Exp_Person_Action_Model();
	require "vistas/update_resume_person.php";
}
function Register_E_Action_Controller(){
	Register_E_Action_Model();
}
 function Exp_Lab_Person_Delete_Action_Controller(){
Exp_Lab_Person_Delete_Action_Model();
  }

function Job_List_Action_Controller(){
	$oferta = Job_List_Action_Model();
require "vistas/job_list.php";
}
function Job_Post_Action_Controller(){
	require "vistas/job_post.php";
  }
 function User_Loggout_Action_Controller(){
 	session_start();
 	session_destroy();
 	header("Location: /empleo/index.php/home");
  }
 function User_Loggout_Time_Out_Action_Controller(){
 	session_start();
 	session_destroy();
 
 	require "vistas/index.php";
 }
 function Show_Job_Action_Controller(){
 	$oferta_detailed = Show_Job_Action_Model();
require "vistas/job_details.php";
 }
  function  error404(){
 	
require "vistas/error_404.php";
 }

    
?>