<!DOCTYPE html>
<html>
<head>
	<title>Carga de Signos</title>
	<link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
<h1><label>Carga tu Signo!</label></h1>
	<div class="container">
	<form role="form" action="../controller/subirTopicos.php" method="POST">
		 <div class="col-sm-5">
		 <label>Signo</label>
		 <select class ="form-control" name="signo">
			<option value="1">Aries</option>
			<option value="2">Tauro</option>
			<option value="3">Geminis</option>
			<option value="4">Cancer</option>
			<option value="5">Leo</option>
			<option value="6">Virgo</option>
			<option value="7">Libra</option>
			<option value="8">Escorpio</option>
			<option value="9">Sagitario</option>
			<option value="10">Capricornio</option>
			<option value="11">Acurio</option>
			<option value="12">Piscis</option>
		</select>

		<div id="fecha" class="form-group col-sm-5">
		
		<select class="form-control" name="dia"><?php 

			for ($i=1; $i <= 31; $i++){
				echo "<option value='$i'>$i</option>";
			}

		 ?></select>
		
		<select class="form-control" name="mes">	
			<option  value="01">Enero</option>
			<option value="02">Febrero</option>
			<option value="03">Marzo</option>
			<option value="04">Abril</option>
			<option value="05">Mayo</option>
			<option value="06">Junio</option>
			<option value="07">Julio</option>
			<option value="08">Agosto</option>
			<option value="09">Septiembre</option>
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

		<br>
  			<div class="form-group">
    		<label >Amor</label>
    		<textarea type="text" class="form-control" name="amor" required=""></textarea>
  			</div>		
		<br>
			<div class="form-group">
    		<label >Amistad</label>
    		<textarea type="text" class="form-control" name="amistad" required=""></textarea>
  			</div>
		<br>		
  			<div class="form-group">
    		<label >Trabajo</label>
    		<textarea type="text" class="form-control" name="trabajo" required></textarea>
  			</div>
		<br>
  			<div class="form-group">
    		<label >Solteros</label>
    		<textarea type="text" class="form-control" name="solteros" required=""></textarea>
  			</div>
		<br>
  			<div class="form-group">
    		<label>Dinero</label>
    		<textarea type="text" class="form-control" name="dinero" required=""></textarea>
  			</div>
		<br>
  			<div class="form-group">
    		<label >Salud</label>
    		<textarea type="text" class="form-control" name="salud" required=""></textarea>
  			</div>
		<br>
			<input type="submit" class="btn btn-success btn-lg" value="Cargar" id="">
			<a href="ModTopicos.php"><strong>Modificar</strong></a>
	</form>
</div>		
</div>	
</div>
</body>
</html>