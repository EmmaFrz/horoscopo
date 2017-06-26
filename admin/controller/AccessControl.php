<?php 

	require '../../models/models.php';

	extract($_POST);

	$user = new User($user, $pass);
	if ($user->Auth()){
		header("Location: ../templates/fillTopics.php");
	}else{
		echo("no registrado");
		header("refresh:1; url=../index.php");
	}

	
 ?>