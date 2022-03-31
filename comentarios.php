<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>comentarios</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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
<section class="main">
	<div class="main-div">
		<?php
		require("conectar_db.php");
		$id=$_GET['id'];
		$consulta_1="SELECT id, titulo, ruta, fecha FROM publicaciones WHERE id=$id";
		$resultado_1=mysqli_query($conexion, $consulta_1);
		$fila=mysqli_fetch_array($resultado_1, MYSQLI_ASSOC);

		echo "<div class='card'>";
		echo "<h2>".$fila['titulo']."</h2>";
		echo "<img src='img_servidor/".$fila['ruta']."'class='img-pre'/>";
		echo "</div>";
		
		?>
		<?php
		if(isset($_SESSION["usuario"])){
		echo "<div class='div-comentar'>";
		echo "<img src='circulo.png' style='width:20px;border-radius:50%; border:2px solid black'>";
		echo "<span>".$_SESSION['usuario']."</span>";
		
		echo "<form action='comentarios_db.php?id=".$id."' method='post' class=''>";
			
		echo "<textarea name='comentario'></textarea>";
			echo "<div>";
				echo "<input type='submit' name='publicar' value='Publicar'>";
			echo"</div>";
		echo"</form>";
		echo"</div>";
		}
		?>
		<div>
		<h2>Comentarios</h2><br>
			<?php
			$consulta_2="SELECT * FROM _$id ORDER BY fecha DESC ";
			$resultado_2=mysqli_query($conexion, $consulta_2);
			
			while ($fila=mysqli_fetch_array($resultado_2, MYSQLI_ASSOC)) {
				
				echo "<div class='conten-coment'>";
				echo "<span>".$fila['nom_usu']."</span><br>";
				echo "<p class='coment'>".$fila['coment']."<p>";
				echo "<div class='fecha_coment'><p >".$fila['fecha']."<p></div>";
				echo "</div>";
			}
			?>
		</div>
	</div>
</section>
</body>
</html>