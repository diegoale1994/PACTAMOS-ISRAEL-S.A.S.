<?php 
function Home_Action_Controller(){
require "vistas/index.php";
}
function Resumes_Action_Controller(){
	$resume=Get_Resumes_Action_Model();
	$exp_laboral = Get_Exp_Person_Action_Model_Individual();
	require "vistas/resumes.php";
}
function Certificate_Action_Controller(){
	Certificate_Action_Model();
	
}
function Log_Action_Controller(){
	$log=Get_Log_Action_Model();
	require "vistas/log.php";
}
function Nomina_Action_Controller(){
	$rol="Contratado";
	$resume=Get_Resumes_Job_Action_Model($rol);
	require "vistas/nomina.php";
}
function View_Company_Action_Controller(){
	$company=Get_Company_Action_Model();
	$dpto=Get_Department_Action_Model();
	$mun=Get_City_Action_Model();
require "vistas/company.php";
}
function Asignar_Vacante_View_Action_Controller(){
	$rol="";
	$resume=Get_Resumes_Job_Action_Model($rol);
	require "vistas/vacantes.php";
}
function Asignar_Vacante_Action_Controller(){
	Assign_Action_Model();
}
function View_Account_Action_Controller(){
	$account=Get_Account_Action_Model();
	$document=Get_Account_Action_Model();
require "vistas/accounting.php";
}
function View_Nomina_Action_Controller(){
	$nomina=Get_Nomina_Action_Model();
	$document=Get_Account_Action_Model();
require "vistas/add_nomina.php";
}
function Apply_For_Offer_Action_Controller(){
	Apply_For_Offer_Action_Model();
}
function Desaply_For_Offer_Action_Controller(){
	Desaply_For_Offer_Action_Model();
}
function Requeriment_Action_Controller(){
	$resume=Get_Resumes_Action_Model();
	$comercials = Get_comercials();
	$requeriment_news = Requeriment_List_News();
	$requeriment_process = Requeriment_List_Process();
	$requeriment_finished = Requeriment_List_Finished();
require "vistas/requeriment.php";
}
function Change_Comercial_Action_Controller(){
	Change_Comercial_Action_Model();
}
 function Update_Resume_Company_Do_Action_Controller(){
	Update_Resume_Company_Do_Action_Model();
 }
function Delete_User_Action_Controller(){
	Delete_User_Action_Model();
}
 function Manage_Users_Action_Controller(){
 	$users = Get_users_Action_Model();
	require "vistas/users.php";
 }
 function Add_comercial_Action_Controller(){
 		Add_comercial_Action_Model();
   }
function Create_User_Action_Controller(){
  Create_User_Action_Model();
}
function Create_Resume_Action_Controller(){
  Create_Resume_Action_Model();
}
function Create_Account_Action_Controller(){
  Create_Account_Action_Model();
}
function Create_Nomina_Action_Controller(){
  Create_Nomina_Action_Model();
}
function Company_Action_Controller(){
require "vistas/about.php";
}
function Services_Action_Controller(){
require "vistas/services.php";
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
$dpto=Get_Department_Action_Model();
$mun=Get_City_Action_Model();
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
function Register_Skills_Action_Controller(){
	Register_Skills_Action_Model();
}
function Register_Estudies_Action_Controller(){
  	Register_Estudies_Action_Model();
}
function Register_Reference_Action_Controller(){
  	Register_Reference_Action_Model();
}
function Register_N_Action_Controller(){
	Register_N_Action_Model();
}
function Profile_Confirmation_Action_Controller(){
	require "vistas/profile_confirmation.php";
}
//Menú usuario logueado
function Resume_Action_Controller(){
	
	$person=Get_Person_Action_Model();
	$dpto=Get_Department_Action_Model();
	$mun=Get_City_Action_Model();
	$exp_laboral = Get_Exp_Person_Action_Model();
	$estudies= Get_Estudies_Action_Model();
	$skills= Get_Skills_Action_Model();
	$ref= Get_Reference_Action_Model();
	require "vistas/resume_person.php";
}
function Resume_Company_Action_Controller(){
	$company = Get_company_Profile();
	require "vistas/resume_company.php";
}

function Update_Resume_Person_Action_Controller(){
//	$Basic_information = Get_Basic_Information_Person_Action_Model();
	$person=Get_Person_Action_Model();
	$dpto=Get_Department_Action_Model();
	$mun=Get_City_Action_Model(); 	
	$exp_laboral = Get_Exp_Person_Action_Model();
	$estudies= Get_Estudies_Action_Model();
	$skills= Get_Skills_Action_Model();
	$ref= Get_Reference_Action_Model();
	require "vistas/update_resume_person.php";
}
function Update_Resume_Action_Controller(){
//	$Basic_information = Get_Basic_Information_Person_Action_Model();
	$person=Get_Person_Action_Model();
	$exp_laboral = Get_Exp_Person_Action_Model();
	$estudies= Get_Estudies_Action_Model();
	$skills= Get_Skills_Action_Model();
	$ref= Get_Reference_Action_Model();
	require "vistas/update_resume.php";
}
function Update_Person_Action_Controller(){
	Person_Update_Action_Model();
}
function Update_Resume_Company_Action_Controller(){
	$company = Get_company_Profile();
	require "vistas/update_resume_company.php";
}
function Register_Company_Action_Controller(){
	Register_Company_Action_Model();
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
function Skills_Person_Delete_Action_Controller(){
  Skills_Person_Delete_Action_Model();
}
function Reference_Person_Delete_Action_Controller(){
  Reference_Person_Delete_Action_Model();
}

function Job_List_Action_Controller(){
	$mys_applys =Get_My_Applys_Action_Model();
	$oferta = Job_List_Action_Model();

	
require "vistas/job_list.php";
}
function Job_Post_Action_Controller(){
	$dpto=Get_Department_Action_Model();
	$mun=Get_City_Action_Model(); 
	require "vistas/job_post.php";
  }
 function User_Loggout_Action_Controller(){
 	session_start();
 	session_destroy();
 	header("Location: /empleo/pactamosweb/index.php");
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