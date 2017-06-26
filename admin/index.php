<!DOCTYPE html>
<html>
<head>
	<title>Inicio de Sesion Administrador</title>
	<link rel="stylesheet" type="text/css" href="../static/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../static/css/style.css">
</head>
<body>
<div class="container">	
<h1 class="text-center">Inciar Sesion</h1>
	<form role ="form" class="form-horizontal" action ="controller/AccessControl.php", method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="user" placeholder="Usuario" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Recordar usuario
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Inciar sesion</button>
    </div>
  </div>
</form>
</div>
</body>
</html>