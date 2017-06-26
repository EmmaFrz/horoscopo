<?php 

include '../../models/models.php';
	$topics = new Topicos;
	
	if ($_POST) {
	extract($_POST);
	$topics->setTopics($amor, $amistad, $trabajo, $solteros, $dinero, $salud, "");
	$topics->UpdateTopic($id);
	echo "Prediccion Modificada";
	header("refresh:1; url=../templates/ModTopicos.php");
	}

 ?>