<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="i1">
		<?php
		session_start();
		$p=$_SESSION["puntos"];
		echo "<h3>Su puntuación fue</h3>";
		echo "<h1>".$p."</h1>";
		echo "Respuestas correctas: ".$_SESSION["correctas"];
		echo "<br>Respuestas incorrectas: ".$_SESSION["incorrectas"];
		$conexion=new mysqli("localhost","root","","final");
		$sql="SELECT * FROM datos WHERE 1";
		$resultado=$conexion->query($sql);
		$dato=$resultado->fetch_assoc();
		if ($p>$dato['puntuacion'])
		{
			$sql2="UPDATE datos SET puntuacion='$p' WHERE ID=1";
			$e=$conexion->query($sql2);
		}
		?>
		<br><br>
		<button onclick="window.location.href='index.php';">Volver a jugar</button>
	</div>
	<div class="i2">
	Maria Andrea Bustamante
	<br>
	Maria Paula Bustamante
	<br>
	Sara Saldarriaga
	</div>
</body>
</html>