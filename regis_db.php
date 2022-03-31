<?php
session_start();
require('conectar_db.php');

$usu=$_POST['usuario'];
$contra1=htmlentities(addslashes($_POST['contra1']));
$contra2=$_POST['contra2'];

$contra_cifrada=password_hash($contra1, PASSWORD_DEFAULT);

$consulta="SELECT * FROM usuarios WHERE nombre='$usu'";
$resultados=mysqli_query($conexion, $consulta);
$fila=mysqli_fetch_row($resultados);

if($fila==0){
	if ($contra1==$contra2 && $contra2!=NULL) {
		$sql="INSERT INTO usuarios (nombre, contraseña) VALUES ('".$usu."','".$contra_cifrada."')";
		$regis=mysqli_query($conexion, $sql);
		$_SESSION['usuario']=$usu;
		header('location:index.php');
	}else{
	header('location:form_regis.php?confirmar=fail');
	}
}else{
	header('location:form_regis.php?existe=ok');
}
?>