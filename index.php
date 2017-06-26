<!DOCTYPE html>
<html>
<head>
	<title>Tu Horoscopo del dia</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
</head>	
<body>
<div class="container-fluid">
<div class="container">
<div class="recuadro1">
<h1>Tu Horoscopo Diario</h1>
</div>
<br>
<div class="tabla-horoscopo"></div>
<div class="table-responsive">
<table class="table table-bordered">	
	<?php 
		
		require("models/models.php");
		$fecha = date("d-m-Y");
		for ($i=0; $i <= 11; $i++) { 
			$Topics = new Topicos;
			$Topics->getAllTopics($i, $fecha);
			//Muestra Imagen
echo "<tr>";
		echo "<td>";
			echo "<img class='img-responsive' alt='Responsive image' width='50' height='50' src='static/img/" . $i . ".png'> </img>";	
			
			//Muestra Signo	
			echo "<h4>";
			echo($Topics::$SIGNOS[$i]);
			echo "</h4>";
		echo "</td>";	
												
			//Muestra Topicos
			
			foreach ($Topics::$TOPIC_LIST as $t) {
				echo "<td>";
				echo "<p class='text-capitalize'>";
				echo "<strong>";
				echo($t . " : " . $Topics->get($t));
				echo "</strong>";
				echo "</p>";
				echo "</td>";
			}
echo "</tr>";			
		}
	 ?>
</table>
</div>
<a href="admin/index.php">Administrador</a>
</div>
</div>
</div>
</body>
</html>