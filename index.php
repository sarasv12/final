<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="estilo.css">
<body>
		<div>
			
		</div>
	<div class="i1">
		<h2>La puntuación más alta es:</h2>
		<?php 
		session_start();
		$_SESSION["s"]=1;
		$_SESSION["v"]=3;
		$_SESSION["puntos"]=0;
		$_SESSION["correctas"]=0;
		$_SESSION["incorrectas"]=0;
		$conexion=new mysqli("bo4lgmhbaqip5sohbkjz-mysql.services.clever-cloud.com","ui44bwd6shgxv7kw","2PTPGp1YXIO6oUNaFG0J","bo4lgmhbaqip5sohbkjz");
		$sql="SELECT * FROM datos WHERE 1";
		$resultado=$conexion->query($sql);
		$dato=$resultado->fetch_assoc();
		echo "<h1>".$dato['puntuacion']."</h1>";
		?>
		<button onclick="window.location.href='jugar.php';">Jugar</button>
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
