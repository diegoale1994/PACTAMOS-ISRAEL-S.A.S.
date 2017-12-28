<?php
include("../res/x5engine.php");
$nameList = array("n4d","75v","jrl","c5d","t42","jc4","wdm","g3n","xkg","u8d");
$charList = array("X","F","S","F","N","Y","V","E","3","7");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
