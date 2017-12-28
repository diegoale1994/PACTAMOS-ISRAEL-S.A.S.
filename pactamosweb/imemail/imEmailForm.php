<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Nombre', $_POST['imObjectForm_3_1'], '', false);
	$form->setField('Email', $_POST['imObjectForm_3_2'], '', false);
	$form->setField('Asunto', $_POST['imObjectForm_3_3'], '', false);
	$form->setField('Mensaje', $_POST['imObjectForm_3_4'], '', false);

	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '8715A45819AB7FA06B78BF8A4E5D9E3F' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner($_POST['imObjectForm_3_2'] != "" ? $_POST['imObjectForm_3_2'] : 'servicioalcliente@pactamos.com', 'servicioalcliente@pactamos.com', 'Pregunta pagina web', '', true);
		@header('Location: ../index.php');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file