<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<form action="regis_db.php" method="post" class="form-login">
	<p>Registrarse</p>
	<label>Crea un usuario</label>
	<input type="text" name="usuario" placeholder="ej:Rem99">
	<label>Crea una contraseña</label>
	<input type="password" name="contra1" placeholder="ej:EsoNoEsArte">
	<label>Confirmar contraseña</label>
	<input type="password" name="contra2" placeholder="">
	<input type="submit" name="resgistrar" value="Registrar">
	<?php
	if (isset($_GET['confirmar'])) {
	 	echo "<label>Las contraseñas no coinciden</label>";
	} 
	if (isset($_GET['existe'])) {
	 	echo "<label>El usuario ya existe</label>";
	}
	?>
</form>
</body>
</html>