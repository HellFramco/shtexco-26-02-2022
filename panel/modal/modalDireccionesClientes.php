<?php 
	require_once '../../modelo/datos-productos.php'; 
	require_once '../../modelo/datosInventarios.php'; 
	require_once '../../modelo/funcionesClientes.php'; 
	$inventarios = new Inventarios(); 
	$productos = new Productos();
	$clientes = new Clientes();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">

	<div class="container">
	<div class="row" ><br>
	<br>
	<br>

		<div class="col-sm-12">
			
			<div id="">
			<div class="col-sm-12">
			<legend>Direcciones del cliente: 
				<strong><?php foreach($clientes->datosClienteEspecifico($_GET['cliente']) as $key){ echo $key['nombre_cli']; } ?></strong>
			</legend>
			<form action="../../modelo/nuevaDireccionCliente.php" method="post">
			<legend>Nueva Direccion</legend>
			
				<label for="direccion">Direccion:
					<input type="text" required="" name="direccion" placeholder="direccion" class="form-control">
				</label>
				<label for="pais">Pais:
					<select name="pais" id="" class="form-control">
									
									<?php foreach ($clientes->seleccionarPais() as $cli) {
									?>
									<option value="<?php echo $cli['nombre'] ?>"><?php echo $cli['nombre'] ?></option>
									<?php 
									}
									?>
								</select>
				</label>
				<label for="departamento">Departamento:
					<select name="departamento" id="" class="form-control">
									
									<?php foreach ($clientes->seleccionarDepartamento() as $cli) {
									?>
									<option value="<?php echo $cli['departamento'] ?>"><?php echo $cli['departamento'] ?></option>
									<?php 
									}
									?>
								</select>
				</label>
				<label for="ciudad">Ciudad:
					<select name="ciudad" id="" class="form-control">
									
									<?php foreach ($clientes->seleccionarCiudad() as $ciu) {
									?>
									<option value="<?php echo $ciu['ciudad'] ?>"><?php echo $ciu['ciudad'] ?></option>
									<?php 
									}
									?>
								</select>
				</label>
				<input type="hidden" name="accion" value="nuevaDireccionCliente">
				<input type="hidden" name="id_cliente" value="<?php echo $_GET['cliente']; ?>">
				<input type="submit" value="Guardar Direccion" class="btn-success">
			</form>
			<legend>Direcciones</legend>
			<table width="100%" class="table table-bordered table-responsive">
				<thead>
					<th>direccion</th>
					<th>pais</th>
					<th>departamento</th>
					<th>ciudad</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					<?php 
					foreach ($clientes->verDireccionesCliente($_GET['cliente']) as $dir) {
					?>
					<tr>
						<form action="../../modelo/actualizarDireccionesCliente.php" method="post">
							<td><input type="text" name="direccion" value="<?php echo $dir['direccion']; ?>"></td>
							<td>
								<select name="pais" id="">
									<option value="<?php echo $dir['pais']; ?>"><?php echo $dir['pais']; ?></option>
									<?php foreach ($clientes->seleccionarPais() as $cli) {
									?>
									<option value="<?php echo $cli['nombre'] ?>"><?php echo $cli['nombre'] ?></option>
									<?php 
									}
									?>
								</select>
							</td>
							<td>
								<select name="departamento" id="">
									<option value="<?php echo $dir['departamento']; ?>"><?php echo $dir['departamento']; ?></option>
									<?php foreach ($clientes->seleccionarDepartamento() as $dep) {
									?>
									<option value="<?php echo $dep['departamento'] ?>"><?php echo $dep['departamento'] ?></option>
									<?php 
									}
									?>
								</select>
							</td>
							<td>
								<select name="ciudad" id="">
									<option value="<?php echo $dir['ciudad']; ?>"><?php echo $dir['ciudad']; ?></option>
									<?php foreach ($clientes->seleccionarCiudad() as $ciu) {
									?>
									<option value="<?php echo $ciu['ciudad'] ?>"><?php echo $ciu['ciudad'] ?></option>
									<?php 
									}
									?>
								</select>
							</td>
							<td>
								<input type="hidden" name="id_direccion" value="<?php echo $dir['id']; ?>"> 
								<input type="hidden" name="id_cliente" value="<?php echo $_GET['cliente']; ?>"> 
								<input type="hidden" name="accion" value="editarDireccionCliente"> 
								<input type="submit" value="editar" name="editar">
								
							</td>
							<td>
								<a href="../../modelo/eliminarDireccionCliente.php?id_cliente=<?php echo $_GET['cliente']; ?>&id_direccion=<?php echo $dir['id']; ?>&accion=eliminarDireccionCliente" class="btn-danger">Eliminar</a>
							</td>
						</form>
					</tr>
					<?php 
					}
					?>
				</tbody>
			</table>
		</div>
		




	</div>

	</div>
	</div>
</div>
</form>
<script src="../../librerias/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
	// $('#espacioTallas').slideUp();
	// $('#tallas').click(function(){
	// 	$('#espacioTallas').slideToggle();
	// });
</script>