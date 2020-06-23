<?php
	
	$host = "******";
	$bd = "pizza_menu";
	$user = "****";
	$pass = "******************";
	
	$conexion = mysqli_connect($host, $user, $pass, $bd);
	
	if (mysqli_connect_errno()){
		echo "La conexión ha fallado";
		exit();
	}
	
	mysqli_set_charset($conexion, "UTF8");

	//CERRAMOS LA CONEXION
	//mysqli_close($conexion);
?>