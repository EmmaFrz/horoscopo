<?php
  
	include '../../models/models.php';
	$topics = new Topicos;
	
	if ($_POST) {
		extract($_POST);
		$fecha = strval($dia . "-" . $mes . "-" . $anio);
		$fecha = date_create($fecha);
		$fecha = date_format($fecha, "d-m-Y");
		$topics->getAllTopics($signo - 1, $fecha);
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Archivos</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.min.css">
	
<body>
<div class="container-fluid">
	<div class="contaier">
	<h1>Modifica los signos!</h1>
	<div class="col-sm-5">
	<form role="form" action="#" method="POST">
		
		<label>Signo</label>

		<select class ="form-control" name="signo">
			<option value="1">Aries</option>
			<option value="2">Tauro</option>
			<option value="3">Geminis</option>
			<option value="4">Cancer</option>
			<option value="5">Leo</option>
			<option value="6">Virgo</option>
			<option value="7">Libra</option>
|			<option value="8">Escorpio</option>
			<option value="9">Sagitario</option>
			<option value="10">Capricornio</option>
			<option value="11">Acuario</option>
			<option value="12">Piscis</option>
		</select>

		<div id="fecha" class="form-group col-sm-5">

		<select class="form-control" name="dia"><?php 

			for ($i=1; $i <= 31; $i++) { 
				echo "<option value=".$i.">$i</option>";
			}

		 ?></select>
		
		<select class="form-control" name="mes">	
			<option value="1">Enero</option>
			<option value="2">Febrero</option>
			<option value="3">Marzo</option>
			<option value="4">Abril</option>
			<option value="5">Mayo</option>
			<option value="6">Junio</option>
			<option value="7">Julio</option>
			<option value="8">Agosto</option>
			<option value="9">Septiembre</option>
			<option value="10">Octubre</option>
			<option value="11">Noviembre</option>
			<option value="12">Diciembre</option>
		</select>
		
		<select class="form-control" name="anio">

		 <?php for ($i=2016; $i < 2100; $i++) { 
		 	echo "<option value= ".  $i . "> $i </option>";
		 }?> 



		</select>

		</div>


		<input type="submit" class="btn btn-success" value="Buscar Signo" name="">
		<a href="fillTopics.php"><strong>Volver</strong></a>
		</form>	
		<?php 

		if (!empty($topics->rows)) {
			
		?>

		<br>
		<form role="form" method="POST" action="../controller/update.php">
		<input type="hidden" value="<?php echo($topics->get('id')); ?>" name="id">
		Amor
			
			<input type="text" class="form-control input-lg" value="<?php echo($topics->get('amor')); ?>" name="amor">
			<br>
		Amistad
			<input type="text" class="form-control input-lg" value="<?php echo($topics->get('amistad')); ?>" name="amistad">
			<br>
		Trabajo
			<input type="text" class="form-control input-lg" value="<?php echo($topics->get('trabajo')); ?>" name="trabajo">
			<br>
		Solteros
			<input type="text" class="form-control input-lg" value="<?php echo($topics->get('solteros')); ?>" name="solteros">
			<br>
		Dinero
			<input type="text" class="form-control input-lg" value="<?php echo($topics->get('dinero')); ?>" name="dinero">
			<br>
		Salud
			<input type="text" class="form-control input-lg" value="<?php echo($topics->get('salud')); ?>" name="salud">
			<br>
			<input type="submit" class="btn btn-primary btn-lg" value="Modificar" id="">
			</form>
	<?php } ?>	
</div>
</div>
</div>
</body>
</html>