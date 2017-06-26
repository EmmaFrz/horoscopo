<?php 

	require '../../models/models.php';
	extract($_POST);

	$topicos = new Topicos;
	if ($dia < 10)
		$dia = 0 . $dia;
	$fecha = strval($dia . "-" . $mes . "-" . $anio);
	$topicos->setTopics($amor, $amistad, $trabajo, $solteros, $dinero, $salud, $signo);
	$topicos->setTodayTopics($fecha);
	echo "Prediccion Guardada";
	header("refresh:1; url=../templates/fillTopics.php");

	



 ?>