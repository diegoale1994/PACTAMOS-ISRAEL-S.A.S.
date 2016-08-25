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
 
?>