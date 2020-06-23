<!DOCTYPE html>
<html>
<head>
	<title>PIZZERIA</title>
	<?php require "conexion.php";?>
</head>

<body>
	<?php 
		include "menu.php";

		if(isset($_GET['opcion'])) {
			$consulta = "SELECT item, precio from menu where id_padre=".$_GET['opcion'].";";
			$res= mysqli_query ($conexion, $consulta);
			while($fila=mysqli_fetch_row($res)){
				echo "<table><tr><td>";
				echo $fila[0] . "</td><td>";
				echo $fila[1] . "</td></tr></table>";
			}
			
			mysqli_close($conexion);
		}
	?>	

</body>
</html>