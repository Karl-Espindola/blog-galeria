<?php

require("conectar_db.php");

$usuario=htmlentities(addslashes($_POST['usuario']));
$contra=htmlentities(addslashes($_POST['contra']));

$sql="SELECT * FROM usuarios WHERE nombre='$usuario'";
$resultado=mysqli_query($conexion, $sql);
$cont=0;
$fila=mysqli_fetch_row($resultado);
if($fila!=0){
	while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		if (password_verify($contra, $fila['contraseña'])) {
			$cont=1;
		}
	}
}
if($cont=1){
	session_start();
	$_SESSION["usuario"]=$usuario;
	if ($_SESSION["usuario"]=="admin") {
		header("location:principal.php");
	}else{
		header("location:index.php");
	}
}
else{
	header("location:form_login.php");
}
?>