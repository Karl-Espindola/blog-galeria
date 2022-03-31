<?php
require("conectar_db.php");
$id=$_GET['id'];
$sql_1="DELETE FROM publicaciones WHERE id=$id";
$sql_2="DROP TABLE _$id";
$borrar_1=mysqli_query($conexion, $sql_1);
$borrar_2=mysqli_query($conexion, $sql_2);
header("location:lista_p.php");
?>