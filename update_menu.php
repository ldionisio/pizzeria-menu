<!DOCTYPE html>
<html>
<head>
	<title>PIZZA ILERNA</title>
	<?php require "conexion.php";?>
</head>

<body>
	<?php 

	include "menu.php";
	
		$id= "";
		$item = "";
		$precio = "";
		$id_padre = "";

		if (isset($_GET['accion'])){
			if ($_GET['accion']=='update'){
				$id = $_GET['id'];
				$item = $_GET['item'];
				$precio = $_GET['precio'];
				$id_padre = $_GET['id_padre'];
			}
		}
			
		$consulta = "SELECT * FROM menu";
		$res= mysqli_query ($conexion, $consulta);
	?>
	
		<div id="op1"><p>Elemento insertado correctamente</p></div>
		<div id="op2"><p>Elemento modificado correctamente.</p></div>
		<div id="op3"><p>Ha ocurrido un error. Por favor, vuelva a intentarlo.</p></div>
		<div id="op4"><p>Elemento eliminado correctamente.</p></div>
		<div id="op5"><p>No ha sido posible eliminar el elemento. 
		Los elementos que tienen hijos no se pueden eliminar, por favor, modifique el resto de elementos primero.</p></div>
	
		<table id="table">
			<tr>
				<th>ID</th>
				<th>Item</th>
				<th>Precio</th>
				<th>id_padre</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
	<?php
		while($fila=mysqli_fetch_array($res)){
			echo"<tr><td>";
			echo $fila[0] . "</td><td>";
			echo $fila[1] . "</td><td>";
			echo $fila[2] . "</td><td>";
			echo $fila[3] . "</td><td>";
			echo '<button><a href="update_menu.php?accion=update&id='.$fila[0].'&item='.
			$fila[1].'&precio='.$fila[2].'&id_padre='.$fila[3].'">M</a></button>'.'</td><td>';
			echo '<button onclick = "eliminar('.$fila[0].')">E</button>'.'</td></tr>';
		}	
	?>
		</table>
		<script type="text/javascript">
			function eliminar(id){
				location.assign("funciones.php?action=eliminar&id=".concat(id.toString()));
			}
		</script>

		<div>
			<h3>Modifique o añada un nuevo ítem</h3>
				<form method="post" action="funciones.php">
					<fieldset>
						<label for="item">Item:<br/></label>
						<input type="text" name="item" value="<?php echo $item; ?>" id="item" maxlength="100" required/>
						<br/>
						<label for="precio">Precio:<br/></label>
						<input type="number" name="precio" value="<?php echo $precio; ?>" id="precio" step="any" required/>
						</br>
						<label for="id_padre">Categoria:<br/></label>
						<input type="number" name="id_padre" value="<?php echo $id_padre; ?>" id="id_padre" min="0" max="100" required/>
						<!--id-->
						<input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
					</fieldset>
					<fieldset>
						<input id="insertar" type="submit" value="Insertar" name="insertar"/>
						<input id="modificar" type="submit" value="Actualizar" name="modificar"/>
					</fieldset>
				</form>
		</div>
		
	<?php
		if(isset($_GET['op'])) {
			switch ($_GET['op']) {
				case '1':
				?>
					<script type="text/javascript">document.getElementById('op2').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op3').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op4').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op5').style.display = 'none';</script>
				<?php
				break;
				case '2':
				?>
					<script type="text/javascript">document.getElementById('op3').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op1').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op4').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op5').style.display = 'none';</script>
				<?php
				break;
				case '3':
				?>
					<script type="text/javascript">document.getElementById('op1').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op2').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op4').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op5').style.display = 'none';</script>
					
				<?php
				break;
				case '4':
				?>
					<script type="text/javascript">document.getElementById('op1').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op2').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op3').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op5').style.display = 'none';</script>
					
				<?php
				break;
				case '5':
				?>
					<script type="text/javascript">document.getElementById('op1').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op2').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op3').style.display = 'none';</script>
					<script type="text/javascript">document.getElementById('op4').style.display = 'none';</script>
					
				<?php
				break;
			}
				
		}else{
			?>
			<script type="text/javascript">document.getElementById('op1').style.display = 'none';</script>
			<script type="text/javascript">document.getElementById('op2').style.display = 'none';</script>
			<script type="text/javascript">document.getElementById('op3').style.display = 'none';</script>
			<script type="text/javascript">document.getElementById('op4').style.display = 'none';</script>
			<script type="text/javascript">document.getElementById('op5').style.display = 'none';</script>
			<?php		
		}
	?>		
</body>
</html>
