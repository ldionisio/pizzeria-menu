<?php
require "conexion.php";
/***********************
LLAMADAS A LAS FUNCIONES
************************/

//INSERTAR
if(isset($_POST['insertar'])){
	insertar($_POST["item"],$_POST["precio"],$_POST["id_padre"], $conexion);
	header('Location: update_menu.php?op=1');
}

//MODIFICAR
if(isset($_POST['modificar'])){
	modificar($_POST["id"], $_POST["item"],$_POST["precio"],$_POST["id_padre"], $conexion);
	header('Location: update_menu.php?op=2');
}

//ELIMINAR
if(isset($_GET['action'])){
	if($_GET['action']=='eliminar'){
		if (contarHijos($_GET["id"], $conexion) == 0){
			eliminar($_GET["id"], $conexion);
			header('Location: update_menu.php?op=4');
		}else {
			echo "No es posible eliminar elementos con hijos.";
			header('Location: update_menu.php?op=5');
		}
	}
}

/***********************
       FUNCIONES
************************/

//FUNCIÓN INSERTAR
function insertar($item, $precio, $id_padre, $conex){
	$queryInsert = "INSERT INTO menu (item, precio, id_padre)
	VALUES ('" . $item . "', " . $precio .", " . $id_padre .")";
	echo $queryInsert;
	$res_datos = mysqli_query($conex, $queryInsert);
}

//FUNCIÓN MODIFICAR
function modificar($id, $item, $precio, $id_padre, $conex){
	$consulta = "UPDATE menu SET item = '".$item."', precio = ".$precio.",
	id_padre = ".$id_padre." WHERE id = '".$id."'";
	//echo $consulta;
	$res_datos = mysqli_query($conex, $consulta);
	if($res_datos==false){
		echo "Ha ocurrido un error";
		header('Location: update_menu.php?op=3');
	}else{
		if (mysqli_affected_rows($conex)==0){
			echo "No hay ningún registro con el ID introducido";
			header('Location: update_menu.php?op=3');
		}else{
			echo "Se ha modificado " . mysqli_affected_rows($conex) . " item";
		}
	}
}

//FUNCIÓN ELIMINAR
function eliminar($id, $conex){
	$datos = "DELETE FROM menu WHERE id = ".$id.";";
	//echo $datos;
	$res_datos = mysqli_query($conex, $datos);
	if($res_datos==false){
		echo "Ha ocurrido un error";
		header('Location: update_menu.php?op=3');
	}else{
		if (mysqli_affected_rows($conex)==0){
			echo "No hay ningún registro con el ID introducido";
			header('Location: update_menu.php?op=3');
		}else{
			//nos mostrará cuántos usuarios se han eliminado
			echo "Se ha eliminado " . mysqli_affected_rows($conex) . " item.";
		}
	}
}

//FUNCIÓN HIJOS (ELIMINAR)
function contarHijos($id, $conex){
	$consulta = "SELECT COUNT(*) FROM menu WHERE id_padre = ".$id.";";
	$res_datos = mysqli_query($conex, $consulta);
	$valor = mysqli_fetch_row($res_datos);
	return $valor[0];
}

?>