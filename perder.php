<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<div class="i1">
		<?php
		session_start();
		echo "<h3>Respuesta incorrecta!<br><br>No ha ganado puntos</h3>";
		$_SESSION["v"]=$_SESSION["v"]-1;
		$_SESSION["incorrectas"]=$_SESSION["incorrectas"]+1;
		?>
		<br><br>
		<button onclick="window.location.href='jugar.php';">Seguir jugando</button>
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