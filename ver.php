<?php

session_start();
if($_FILES['imagen']['name']!=NULL){


require("conectar_db.php");

$nombre_imagen=$_FILES['imagen']['name'];
$tipo_imagen=$_FILES['imagen']['type'];
$tama_imagen=$_FILES['imagen']['size'];
$titulo=$_POST['titulo'];
$fecha=date("Y-m-d H:i:s");

$_SESSION['ruta']=$nombre_imagen;
$_SESSION['enviar']=$_POST['enviar'];

if ($tipo_imagen=="image/jpeg"||$tipo_imagen=="image/jpg"||$tipo_imagen=="image/png"||$tipo_imagen=="image/gif") {

$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/Practicas_Proyectos/blog-galeria/img_servidor/';
move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);

$sql_1="INSERT INTO publicaciones (titulo, ruta, fecha) VALUES ('".$titulo."', '".$nombre_imagen."', '".$fecha."')";
$resultado_1=mysqli_query($conexion, $sql_1);

$sql_2="SELECT id FROM publicaciones ORDER BY id DESC";
$resultado_2=mysqli_query($conexion, $sql_2);
$id_post=mysqli_fetch_row($resultado_2);

$tabla="CREATE TABLE _$id_post[0] (id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT, nom_usu VARCHAR(20) NOT NULL, coment TEXT, fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
$resultado_3=mysqli_query($conexion, $tabla);
$_SESSION['img']=NULL;

header("location:principal.php");
}
else{
	$_SESSION['img']="No";
	header("location:principal.php");
}
}
header("location:principal.php");
?>