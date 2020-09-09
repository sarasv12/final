<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
		<div class="i1">
		<?php
		session_start();
		echo "<h3>Respuesta correcta!<br><br>Ha ganado 10 puntos</h3>";
		$_SESSION["puntos"]=$_SESSION["puntos"]+10;
		$_SESSION["correctas"]=$_SESSION["correctas"]+1;
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