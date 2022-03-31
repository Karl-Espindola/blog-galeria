<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<section class="header-inicio">
	<div class="conten-logo">
	<a href="index.php">	
	<img src="img/camara.png" class="logo-inicio">
	<span>GalerIm</span>
	</a>
	</div>

	<div class='r-i-s'>
	<?php
	require("conectar_db.php");
		
	if (!isset($_SESSION["usuario"])) {
			
		echo "<p><a href='form_regis.php'>Registrarse</a></p>";
		echo "<p><a href='form_login.php'>Iniciar Sesion</a></p>";
			
	}else{
		echo "<p class='hola'>Hola ".$_SESSION["usuario"]."</p>";
		echo "<p><a href='cerrar_sesion.php'>Cerrar Sesión</a></p>";
			
	}

	?>
	</div>
</section>
<ul class="menu">
	<li class="menu-li"><a href="index.php" class="menu-li-a">Inicio</a></li>
	<li class="menu-li"><a href="dibujos.php" class="menu-li-a">Dibujos</a></li>
	<?php
	if(isset($_SESSION["usuario"])){
		$usuario=$_SESSION["usuario"];
		if ($usuario=="admin") {
			echo "<li class='menu-li'><a href='principal.php' class='menu-li-a'>admin</a></li>";
		}
	}
	?>
</ul>
<div class="carrusel">
	<?php
	echo "<div class='carrusel-items'>";
		
		$consulta="SELECT id, ruta, fecha FROM publicaciones ORDER BY fecha DESC";
		$resultado=mysqli_query($conexion, $consulta);
		
		$i=0;
		while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			$ru[$i]=$fila['ruta'];
			$id_img[$i]=$fila['id'];
			$i++;
		}
		for ($i=0; $i <= 3; $i++) { 
			echo "<div class='carrusel-item'>";
			echo "<a href='comentarios.php?id=".$id_img[$i]."'>";
			echo "<img src='img_servidor/".$ru[$i]."'>";
			echo "</a>";
			echo"</div>";
		}
		
	echo"</div>";
	?>
</div>
<section class="main">
	<div class="main-bienve">
		<div class="main-bienve-a">
		<article>
			<h2>Bienvenidos</h2>
			<p>
				There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
			</p>
		</article>
	</div>
	</div>
	<div class="b-lateral">
		<div class="b-lateral-c">
		<div class="card-inicio">
			<h3>Nuevo</h3>
			<?php 
			$consulta="SELECT id, titulo, ruta, fecha FROM publicaciones ORDER BY fecha DESC";
			$resultado=mysqli_query($conexion, $consulta);
			$fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
			?>
			<img src="img_servidor/<?php echo $fila['ruta'] ?>" class="img-nuevo">
		</div>
	</div>
	</div>
</section>
<script type="text/javascript" src="js/carrusell.js"></script>
</body>
</html>