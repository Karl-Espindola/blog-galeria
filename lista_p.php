<?php
session_start();
if (!isset($_SESSION['usuario'])) {
	header("location:form_login.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery-3.6.0.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>

</head>
<body>
<section class="sidebar">
	<div class="conten-logo-p">
	<a href="index.php">	
	<img src="img/camara.png" class="logo-inicio-p">
	<span>GalerIm</span>
	</a>
	</div>
	<img src="img/barras.png" id="barras">
	<hr>
	<ul id="lista">
		<li class="lista-li"><a href="index.php">Inicio</a></li>
		<li class="lista-li"><a href="principal.php">Nueva imagen</a></li>
		<li class="lista-li"><a href="#">> Lista de publicaciones</a></li>
		<li class="lista-li"><a href="#">Noticias</a></li>
		<li class="lista-li" id="cerrar-sesion"><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
	</ul>
</section>
<section class="main">
	<div class="main-div-a">
		<?php

		require("conectar_db.php");
	
		$consulta="SELECT id, titulo, ruta, fecha FROM publicaciones ORDER BY fecha DESC";
		$resultado=mysqli_query($conexion, $consulta);
		echo "<div>";
		echo "<table>";
		echo "<tr><td class='t-list'>Id</td><td class='t-list'>Titulo</td><td class='t-list'>Img</td><td class='t-list'>fecha</td><td class='t-list'>Borrar</td></tr>";
		while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			
			echo "<tr>";
			echo "<td>".$fila['id']."</td>";
			echo "<td>".$fila['titulo']."</td>";
			echo "<td>";
			echo "<img src='img_servidor/".$fila['ruta']."' style='width:40px'>";
			echo "</td>";
			echo "<td>".$fila['fecha']."</td>";
			echo "<td><button><a href='borrar.php?id=".$fila['id']."'>Borrar</a></button></td>";
			echo "</tr>";
		}
		echo "</table>";
		echo "</div>";
		?>
		
		
	</div>


</section>
<button class="btn-publi"><a href="dibujos.php">>> DIBUJOS</a></button>

<?php

?>
</body>
</html>