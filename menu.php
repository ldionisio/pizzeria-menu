<?php
	require "conexion.php";

	$menu = array();

	$consulta_1 = "SELECT id, item from menu where id_padre=0";
	$res= mysqli_query ($conexion, $consulta_1);
	while($fila=mysqli_fetch_row($res)){
		array_push($menu,$fila);
	}
	//mysqli_close($conexion);
?>
<!DOCTYPE html>
<html>
<head>
	<title>PIZZERIA</title>
</head>	
<header>
	<button id="update" class="menu" onclick="location.href='update_menu.php'">Modificar menú</button>
	<?php for($i= 0; $i < count($menu); $i++) { ?>
		<button id="botones" class='menu' onclick="menu(<?php echo $menu[$i][0]; ?>)">
		<?php echo $menu[$i][1]; ?>
		</button>
	<?php } ?>
	
	<script type="text/javascript">
		function menu(opciones){
			$location = "consulta.php?opcion=" + opciones.toString();
			location.assign($location);
		}
	</script>
</header>