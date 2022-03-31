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
	<title>admin</title>
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
		<li class="lista-li"><a href="#">> Nueva imagen</a></li>
		<li class="lista-li"><a href="lista_p.php">Lista de publicaciones</a></li>
		<li class="lista-li"><a href="#">Noticias</a></li>
		<li class="lista-li"><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
	</ul>
</section>
<section class="main">
	<div class="main-div-a">
		<?php

		require("conectar_db.php");
		$consulta="SELECT titulo, ruta, fecha FROM publicaciones ORDER BY fecha DESC";
		$resultado=mysqli_query($conexion, $consulta);
		$fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		$ruta=$fila['ruta'];
		$eltitulo=$fila['titulo'];

		?>
		<div class="div-img">
			<?php 
			if (isset($_SESSION['enviar']) && $_SESSION['ruta']!=NULL &&$_SESSION['img']!="No") {
				echo "<h2 class='titulo'>".$eltitulo."</h2>";
				echo "<img src='img_servidor/".$ruta."' class='img-pre'>";
				$_SESSION['ruta']=NULL;
				$_SESSION['img']=NULL;
				
			}
			else{
				echo "No ha seleccionado ningúna imagen";
				// $_SESSION['img']=NULL;
			} 
			?>
			
		</div>	
		<form action="ver.php" method="post" enctype="multipart/form-data" class="main-form">
			<label>Titulo</label>
			<input type="text" name="titulo">
			<label>Insertar Imagen</label>
			<input type="file" name="imagen">
			<input type="submit" name="enviar">
		</form>
		<p><?php 
		
		if (isset($_SESSION['img'])&&$_SESSION['img']=="No") {
			echo "El archivo seleccionado no es una imagen";

		}
		?></p>
	</div>


</section>
<button class="btn-publi"><!-- <img src="img/chibi.png" style="width:30px"> --><a href="dibujos.php">>> DIBUJOS</a></button>

<?php

?>
</body>
</html>