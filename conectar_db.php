<?php
require("config_db.php");

$conexion=mysqli_connect(host, usuario, contra, nombre);
	if (mysqli_connect_errno()) {
		echo "Fallo al conectar con la base de datos";
		exit();
	}
mysqli_select_db($conexion, nombre) or die ("No se encuentra la base de datos");
mysqli_set_charset($conexion,"utf8");
?>