<?php 
function Home_Action_Controller(){
require "vistas/index.php";
}
function Login_Action_Controller(){
require "vistas/login.php";
}
function Login_Form_Action_Controller(){
Loggin_Action_Model();
}

function Login_Fail_Action_Controller(){
	require "vistas/login.php";
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
?>