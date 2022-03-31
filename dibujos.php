<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dibujos</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="titulo-dibujo">
	<h1 class="">Dibujos</h1>
	<hr>
</div>
<ul class="menu">
	<li class="menu-li"><a href="index.php" class="menu-li-a">Inicio</a></li>
	<li class="menu-li"><a href="dibujos.php" class="menu-li-a">Dibujos</a></li>
	<?php
	require("conectar_db.php");
	
	if(isset($_SESSION["usuario"])){
		$usuario=$_SESSION["usuario"];

		if ($usuario=="admin") {
			echo "<li class='menu-li'><a href='principal.php' 	class='menu-li-a'>admin</a></li>";
		}
	}
	?>
</ul>

<section class="main">
	<div class="main-div">
		<?php
		$consulta="SELECT id, titulo, ruta, fecha FROM publicaciones ORDER BY fecha DESC";
		$resultado=mysqli_query($conexion, $consulta);
	
		while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
		
			echo "<div class='card'>";
			echo "<h2>".$fila['titulo']."</h2>";
			if($fila['ruta']!=" "){
			echo "<img src='img_servidor/".$fila['ruta']."'class='img-pre'/>";
			echo "<a href='comentarios.php?id=".$fila['id']."'>Comentarios</a>";
			echo "</div>";
			}
		}
		
		?>

	</div>
</section>
</body>
</html>