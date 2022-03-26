<?php
session_start();
	require_once "../modelo/db.php";
	require_once '../modelo/datosInventarios.php';
	$inventarios = new Inventarios();
	$conexion = new Conexion();

	date_default_timezone_set('America/Bogota');


	switch ($_POST['accion']) {
		case 'enrutarInventario':
			foreach ($inventarios->verInventarioPorCodigo($_POST['codigo_barra']) as $key) {
			?>
			<form action="">
			<table width="100%">
				<tr>
					<th>id</th>
					<th><input type="hidden" name="íd_inventario" value="<?php echo $key['id_inventario']; ?>"></th>
				</tr>
				<tr>
					<th>referencia</th>
					<th><?php echo $key['referencia']; ?></th>
				</tr>
				<tr>
					<th>marca</th>
					<th><?php echo $key['marca']; ?></th>
				</tr>
				<tr>
					<th>Talla</th>
					<th><?php echo $key['talla']; ?></th>
				</tr>
				<tr>
					<th>color</th>
					<th><?php echo $key['color']; ?></th>
				</tr>
				<tr>
					<th>bodega</th>
					<th>
						<select name="bodega" id="">
							<option value="<?php echo $key['bodega']; ?>"><?php echo $key['bodega']; ?></option>

							<?php foreach ($inventarios->verBodegas() as $bod) {
							?>
							<option value="<?php echo $bod['nombre']; ?>"><?php echo $bod['nombre']; ?></option>
							<?php
							} ?>
						</select>
					</th>
				</tr>	
				<tr>
					<th>Ruta</th>
					<th>
						<select name="ruta" id="">
							<option value="<?php echo $key['ruta']; ?>"><?php echo $key['ruta']; ?></option>
							<?php foreach ($inventarios->verRutasAlojadas() as $rut) {
							?>
							<option value="<?php echo $rut['estante']; ?>"><?php echo $rut['estante']; ?></option>
							<?php
							} ?>
						</select>
					</th>
				</tr>	
			</table>
			</form>
			<?php	
			}
			break;
		
		default:
			# code...
			break;
	}
?>