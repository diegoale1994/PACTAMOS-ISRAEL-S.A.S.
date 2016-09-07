<?php 
function Home_Action_Controller(){
require "vistas/index.php";
}
function Company_Action_Controller(){
require "vistas/about.php";
}
function Register_New_Job_Action_Controller(){
	Register_New_Job_Action_Model();
}
function Job_Post_Create_Ok_Action_Controller(){
	require "vistas/job_post.php";
}
function Show_My_Offers_Action_Controller(){
$myoffers= Get_Offers_Action_Model();
require "vistas/my_offers.php";
}
function Update_Offer_Final_Action_Controller(){
Update_Offer_Action_Model();
}
function Offer_Delete_Action_Controller(){
Offer_Delete_Action_Model();
}
function Update_Offer_Action_Controller(){
$offer=Get_Individual_Offer_Action_Model();
require "vistas/my_offers.php";
}
function Contact_Action_Controller(){
require "vistas/contact.php";
}
function Contact_Form_Action_Controller(){
Sender_Action_Model();
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
function Register_Estudies_Action_Controller(){
  	Register_Estudies_Action_Model();
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
function Resume_Company_Action_Controller(){
	require "vistas/resume_company.php";
}
function Update_Resume_Person_Action_Controller(){
//	$Basic_information = Get_Basic_Information_Person_Action_Model();
	$exp_laboral = Get_Exp_Person_Action_Model();
	$estudies= Get_Estudies_Action_Model();
	require "vistas/update_resume_person.php";
}
function Register_E_Action_Controller(){
	Register_E_Action_Model();
}
 function Exp_Lab_Person_Delete_Action_Controller(){
Exp_Lab_Person_Delete_Action_Model();
  }

function Studies_Person_Delete_Action_Controller(){
  Studies_Person_Delete_Action_Model();
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