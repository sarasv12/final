<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
		<div class="i1">
		<?php
		session_start();
		$s=$_SESSION["s"];
		if ($s>30)
		{
			echo "<h3><br>Ya no hay más preguntas</h3>";
			?>
			<br><br>
			<button onclick="window.location.href='resultado.php';">Resultados</button>
			<?php
		}
		if ($_SESSION["v"]<1)
		{
			echo "<h3><br>Lo sentimos, ya no le quedan vidas</h3>";
			?>
			<br><br>
			<button onclick="window.location.href='resultado.php';">Resultados</button>
			<?php
		}
		else
		{
			$conexion=new mysqli("bo4lgmhbaqip5sohbkjz-mysql.services.clever-cloud.com","ui44bwd6shgxv7kw","2PTPGp1YXIO6oUNaFG0J","bo4lgmhbaqip5sohbkjz");
			$sql="SELECT * FROM preguntas WHERE 1";
			$resultado=$conexion->query($sql);
			$dato=$resultado->fetch_assoc();
			for($i=1;$i<=1;$i++)
			{
				$buscar="SELECT * FROM preguntas WHERE ID='$s'";
				$resultado2=$conexion->query($buscar);
				$dato2=$resultado2->fetch_assoc();
				echo "<h3>".$dato2['pregunta']."</h3><br>";
				echo $dato2['A']."<br>";
				echo $dato2['B']."<br><br>";
				if($s<=30)
				{
					if ($s==1||$s==3||$s==6||$s==7||$s==9||$s==11||$s==12||$s==15||$s==17||$s==19||$s==20||$s==22||$s==23||$s==24||$s==27||$s==28||$s==29)
					{
						$_SESSION["s"]++;
						?>
						<button onclick="window.location.href='ganar.php';">A</button>
						<button onclick="window.location.href='perder.php';">B</button>
						<?php
					}
					if ($s==2||$s==4||$s==5||$s==8||$s==10||$s==13||$s==14||$s==16||$s==18||$s==21||$s==25||$s==26||$s==30)
					{
						$_SESSION["s"]++;
						?>
						<button onclick="window.location.href='perder.php';">A</button>
						<button onclick="window.location.href='ganar.php';">B</button>
						<?php
					}
				}
				else
				{
					$i=2;
				}
			}
		}	
		?>
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
