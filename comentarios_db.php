<?php
$id_post=$_GET['id'];
if($_POST['comentario']!=NULL){
	session_start();
	$usu=$_SESSION['usuario'];
	require('conectar_db.php');
	$comentario=$_POST['comentario'];
	$sql="INSERT INTO _$id_post (nom_usu, coment) VALUES ('$usu', '$comentario')";
	$resultado=mysqli_query($conexion, $sql);
}
header("location:comentarios.php?id=$id_post");
?>