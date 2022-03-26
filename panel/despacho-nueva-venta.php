<?php
include '../modelo/redireccion.php';
include '../modelo/funcionesClientes.php';
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/funcionesVentas.php';
require '../modelo/datosInventarios.php';

$inventarios = new Inventarios();
$ventas = new Ventas();
$productos = new productos();
$clientes = new clientes();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Venta</title>


	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body id="page-top">
	<div id="contenedor_loading">
		<div id="loading"></div>
	</div>
	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->

		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->


			
 
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Botones que indican los colores en las tablas -->
					<div style="align-items: center;" class="row justify-content-between p-2">

					</div>
					<!-- Botones que indican los colores en las tablas -->

					<!-- Page Heading -->
					<!-- DataTales Example -->
					<div class="col-sm-12">
						<?php
						foreach ($ventas->ventaPorId($_GET['id_venta']) as $key) {
						?>
							<form action="modeloNuevaVenta.php" id="data_venta" method="post">
								<div class="row">
								<div class="col-sm-10">
									<?php 
										if ($_SESSION['typeUser'] == 1 || $_SESSION['typeUser'] == 7) {
										?>
										<a class="btn btn-danger" href="ventas.php" role="button">Salir</a>
										<?php
										}
										else if ($_SESSION['typeUser'] == 2) {
										?>
										<a class="btn btn-danger" href="ventas-vendedor.php" role="button">Salir</a>
										<?php
										}
										else if ($_SESSION['typeUser'] == 3) {
										?>
										<a class="btn btn-danger" href="ventas-por-aprobar.php" role="button">Salir</a>
										<?php
										}
										else if ($_SESSION['typeUser'] == 6) {
										?>
										<a class="btn btn-danger" href="ventas-por-despachar.php" role="button">Salir</a>
										<?php
										}
										?>
										<legend class="text-center">Nueva Venta # <strong style="color: blue;"><?php echo @$key['id_venta']; ?></strong></legend>
										<legend class="text-center">Fecha: <?php echo @$key['fecha_venta']; ?></legend>
										
									</div>
									<div class="col-sm-2">
										<?php
											foreach ($ventas->ventaPorId(@$key['id_venta']) as $keyVenta) {
												if ($keyVenta['estado'] == 'APROBO CLIENTE') {
												
												}
												else if ($keyVenta['estado'] == 'APROBO CARTERA') {
												



												}
												else if ($keyVenta['estado'] == 'APROBO DESPACHO') {
													

												}
												else if ($keyVenta['estado'] == 'INICIADA') {
											
												}
												else if ($keyVenta['estado'] == 'CANCELADO') {
											
											
												}
												else{
											
												}
												
											}
										?>
									</div>
									<div class="col-sm-12">
										<h5 class="text-center">Informacion Venta</h5>
										<hr>
									</div>

									<div class="col-sm-6">

										<table width="100%" class="">
											<tr>
												<th class="text-center">Cliente:</th>
											</tr>
											<tr>
												<td class="text-center"><input type="text" class="form-control text-center" id="cliente" readonly="" name="cliente" value="<?php echo $key['cliente']; ?>"></td>
												<?php foreach ($clientes->seleccionarIdCliente($key['cliente']) as $keyCliente) {
													$id_cliente = $keyCliente['id'];
												} ?>

											
												<input type="hidden" name="" id="estado_venta" value="<?php echo $key['estado']; ?>">

											<?php
											
												if($key['estado']=="APROBO CLIENTE" || $key['estado']=="APROBO CARTERA"){
													echo "	<style>
													.bt-eliminar{
														display: none;
																}
															</style>";
												}elseif($key['estado']=="CANCELADO"){
													echo "	<style>
													.bt-eliminar{
														display: none;
																}

															.bt-aprobar-cartera	{ 
																	pointer-events: none; 
																	cursor: default; 
																} 
															</style>";
												}elseif($key['estado']=="APROBO DESPACHO"){
													echo "	<style>
													.bt-eliminar-despacho{
														display: none;
																}

															.bt-aprobar-despacho	{ 
																	pointer-events: none; 
																	cursor: default; 
																} 
															</style>";
												}
												
											?>
												
											</tr>
										</table>

									</div>
									<div class="col-sm-6">
										<table width="100%" class="">
											<tr>
												<th class="text-center">Direccion:</th>
											</tr>
											<tr>
												<td class="text-center">
													<input name='direccion' id="direccion" class="form-control text-center" value="<?php echo $key['direccion']; ?>" readonly="" />
												</td>
											</tr>
										</table>

									</div>
									<div class="col-sm-6">
										<table width="100%" class="">
											<tr>
												<th class="text-center">Transportadora:</th>
											</tr>
											<tr>
												<td class="text-center">
													<input name='transportadora' id="transportadora" class="form-control text-center" value="<?php echo $key['transportadora']; ?>" readonly="" />
												</td>
											</tr>
										</table>
										<hr>
									</div>
									<div class="col-sm-6">
										<table width="100%" class="">
											<tr>
												<th class="text-center">Medio de Pago:</th>
											</tr>
											<tr>
												<td class="text-center">
													<input name='metodo_pago' id="metodo_pago" class="form-control text-center" value="<?php echo $key['medio_pago']; ?>" readonly="" />


												</td>
											</tr>
										</table>
										<hr>
									</div>
									<div class="col-sm-4">


									</div>
									<div class="col-sm-4">


									</div>
									<div class="col-sm-4">
										<input type="hidden" name="accion" value="nuevaVenta">
										<!-- <input type="submit" id="siguiente" class="btn btn-success text-center" value="Siguiente" /> -->

									</div>
							</form>
							<div style="display: ;">
								<div class="col-sm-12" id="areaProductos">
									<?php
									if (@$_GET['lista']) {
									?>
										<div class="card-body">
											<div class="table-responsive">
												<h4>Area de Productos Seleccionados</h4>


											
												<table id="" class="table table-sm table-bordered bt-eliminar-despacho" width="100%" cellspacing="0">
													<thead>
														<tr>

															<th>item</th>
															<th>referencia</th>
															<th>descripcion</th>
															<th>marca</th>
															<th>silueta</th>
															<th>categoria</th>
															<th>color</th>
															<th>talla 6</th>
															<th>talla 8</th>
															<th>talla 10</th>
															<th>talla 12</th>
															<th>talla 14</th>
															<th>talla 16</th>
															<th>talla 18</th>
															<th>talla 20</th>
															<th>talla 26</th>
															<th>talla 28</th>
															<th>talla 30</th>
															<th>talla 32</th>
															<th>talla 34</th>
															<th>talla 36</th>
															<th>talla 38</th>
															<th>talla S</th>
															<th>talla m</th>
															<th>talla l</th>
															<th>talla xl</th>
															<th>talla u</th>
															<th>talla est</th>
															<th>precio</th>
															<th></th>
															<th></th>

														</tr>
													</thead>
													<tbody>

														<?php
														$item = 1;
														$precio_total = 0;
														if ($inventarios->verlistadoPrendas($_GET['id_venta'])) {
														?>
															<form id="datosProductosSeleccionados" action="generarDespacho.php?cliente=0&id_lista=0&id_venta=0&id_inventario=0&accion=generaVenta&id_cliente=0" method="post">
																<?php

																$valor = 0;
																foreach ($inventarios->verlistadoPrendas($_GET['id_venta']) as $key) {
																	$precio_total = $precio_total + $key['precio'];


																	$valor = $valor + $key['talla6'] + $key['talla8'] + $key['talla10'] + $key['talla12'] + $key['talla14'] + $key['talla16'] + $key['talla18'] + $key['talla20'] + $key['talla26'] + $key['talla28'] + $key['talla30'] + $key['talla32'];
																	$valor = $valor + $key['talla34'] + $key['talla36'] + $key['talla38'] + $key['tallas'] + $key['tallam'] + $key['tallal'] + $key['tallaxl'] + $key['tallau']+ $key['tallaest'];
																?>



																	<tr>

																		<td><input type="number" readonly value="<?php echo $key['id_lista']; ?>" name="<?php echo $key['id_lista'] ?>" id="id_lista<?php echo $key['id_lista']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['referencia']; ?>" name="referencia<?php echo $key['id_lista'] ?>" id="referencia<?php echo $key['referencia']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['descripcion']; ?>" name="descripcion<?php echo $key['id_lista'] ?>" id="descripcion<?php echo $key['descripcion']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['marca']; ?>" name="marca<?php echo $key['id_lista'] ?>" id="marca<?php echo $key['marca']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['silueta']; ?>" name="silueta<?php echo $key['id_lista'] ?>" id="silueta<?php echo $key['silueta']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['categoria']; ?>" name="categoria<?php echo $key['id_lista'] ?>" id="categoria<?php echo $key['categoria']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['color']; ?>" name="color<?php echo $key['id_lista'] ?>" id="color<?php echo $key['color']; ?>" class="form-control"></td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla6']; ?>"  value="<?php echo $key['talla6']; ?>" name="talla6" id="talla6<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value); if(this.value==<?php echo $key['talla6']; ?>){document.getElementById('alert<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v1<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v1<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v1<?php echo $key['id_lista']; ?>" value="0"></td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla8']; ?>"  value="<?php echo $key['talla8']; ?>" name="talla8" id="talla8<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla8']; ?>){document.getElementById('alert2<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v2<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert2<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v2<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert2<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v2<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla10']; ?>"  value="<?php echo $key['talla10']; ?>" name="talla10" id="talla10<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla10']; ?>){document.getElementById('alert3<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v3<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert3<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v3<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert3<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v3<?php echo $key['id_lista']; ?>" value=""</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla12']; ?>"  value="<?php echo $key['talla12']; ?>" name="talla12" id="talla12<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla12']; ?>){document.getElementById('alert4<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v4<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert4<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v4<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert4<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v4<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla14']; ?>"  value="<?php echo $key['talla14']; ?>" name="talla14" id="talla14<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla14']; ?>){document.getElementById('alert5<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v5<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert5<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v5<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert5<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v5<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla16']; ?>"  value="<?php echo $key['talla16']; ?>" name="talla16" id="talla16<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla16']; ?>){document.getElementById('alert6<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v6<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert6<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v6<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert6<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v6<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number"  readonly placeholder="<?php echo $key['talla18']; ?>"  value="<?php echo $key['talla18']; ?>" name="talla18" id="talla18<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla18']; ?>){document.getElementById('alert7<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v7<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert7<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v7<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert7<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v7<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla20']; ?>"  value="<?php echo $key['talla20']; ?>" name="talla20" id="talla20<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla20']; ?>){document.getElementById('alert8<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v8<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert8<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v8<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert8<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v8<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla26']; ?>"  value="<?php echo $key['talla26']; ?>" name="talla26" id="talla26<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla26']; ?>){document.getElementById('alert9<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v9<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert9<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v9<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert9<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v9<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla28']; ?>"  value="<?php echo $key['talla28']; ?>" name="talla28" id="talla28<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla28']; ?>){document.getElementById('alert10<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v10<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert10<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v10<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert10<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v10<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla30']; ?>"  value="<?php echo $key['talla30']; ?>" name="talla30" id="talla30<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla30']; ?>){document.getElementById('alert11<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v11<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert11<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v11<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert11<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v11<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla32']; ?>"  value="<?php echo $key['talla32']; ?>" name="talla32" id="talla32<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla32']; ?>){document.getElementById('alert12<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v12<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert12<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v12<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert12<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v12<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla34']; ?>"  value="<?php echo $key['talla34']; ?>" name="talla34" id="talla34<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla34']; ?>){document.getElementById('alert13<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v13<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert13<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v13<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert13<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v13<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla36']; ?>"  value="<?php echo $key['talla36']; ?>" name="talla36" id="talla36<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla36']; ?>){document.getElementById('alert14<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v14<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert14<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v14<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert14<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v14<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['talla38']; ?>"  value="<?php echo $key['talla38']; ?>" name="talla38" id="talla38<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['talla38']; ?>){document.getElementById('alert15<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v15<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert15<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v15<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert15<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v15<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['tallas']; ?>"  value="<?php echo $key['tallas']; ?>" name="tallas" id="tallas<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['tallas']; ?>){document.getElementById('alert16<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v16<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert16<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v16<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert16<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v16<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['tallam']; ?>"  value="<?php echo $key['tallam']; ?>" name="tallam" id="tallam<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['tallam']; ?>){document.getElementById('alert17<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v17<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert17<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v17<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert17<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v17<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['tallal']; ?>"  value="<?php echo $key['tallal']; ?>" name="tallal" id="tallal<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['tallal']; ?>){document.getElementById('alert18<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v18<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert18<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v18<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert18<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v18<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['tallaxl']; ?>"  value="<?php echo $key['tallaxl']; ?>" name="tallaxl" id="tallaxl<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['tallaxl']; ?>){document.getElementById('alert19<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v19<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert19<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v19<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert19<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v19<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['tallau']; ?>"  value="<?php echo $key['tallau']; ?>" name="tallau" id="tallau<?php echo $key['id_lista']; ?>" class="form-control" onchange="if(this.value==<?php echo $key['tallau']; ?>){document.getElementById('alert20<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v20<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert20<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v20<?php echo $key['id_lista']; ?>').value='1'}; valida();"><label id="alert20<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v20<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td><input type="number" readonly placeholder="<?php echo $key['tallaest']; ?>"  value="<?php echo $key['tallaest']; ?>" name="tallaest" id="tallaest<?php echo $key['id_lista']; ?>" class="form-control"  onchange="if(this.value==<?php echo $key['tallaest']; ?>){document.getElementById('alert21<?php echo $key['id_lista']; ?>').style.display = 'none'; document.getElementById('v21<?php echo $key['id_lista']; ?>').value='0'}else{document.getElementById('alert21<?php echo $key['id_lista']; ?>').style.display = 'block'; document.getElementById('v21<?php echo $key['id_lista']; ?>').value='1'}; valida(); "><label id="alert21<?php echo $key['id_lista']; ?>"  style="display:none; color:red">El valor no coincide</label><input type="hidden" id="v21<?php echo $key['id_lista']; ?>" value="0"</td>
																		<td>
																			<input type="hidden" readonly value="eliminaProductosVentas" name="accion<?php echo $key['id_lista'] ?>" id="" class="form-control">
																			<input type="hidden" readonly value="<?php echo $id_cliente; ?>" name="<?php echo $key['id_lista'] ?>" id="" class="form-control">
																			<input type="hidden" readonly value="<?php echo $_GET['id_venta']; ?>" name="<?php echo $key['id_lista'] ?>" id="" class="form-control">
																		</td>
																		<td>
																			<a href="eliminaProductosVentas.php?id_lista=<?php echo $key['id_lista']; ?>&id_venta=<?php echo $key['id_venta']; ?>&id_inventario<?php echo $key['id_inventario']; ?>&accion=eliminaProductosVentas&id_cliente=<?php echo $id_cliente; ?>" class="btn-danger bt-eliminar" value="eliminar">Eliminar</a> 


																		</td>
																		<td>
																			<!-- <a href="generarVenta.php?cliente=<?php echo $id_cliente; ?>&id_lista=<?php echo $key['id_lista']; ?>&id_venta=<?php echo $key['id_venta']; ?>&id_inventario=<?php echo $key['id_inventario']; ?>&accion=generaVenta&id_cliente=<?php echo $id_cliente; ?>" class="btn-success">Apartar</a> -->
																		</td>

																	</tr>
																	

																	<input type="hidden" name="id_inventarios[]" value="<?php echo $key['id_inventario']; ?>">
																	<input type="hidden" name="id_venta[]" value="<?php echo $key['id_venta']; ?>">
																	<input type="hidden" name="id_cliente[]" value="<?php echo $id_cliente; ?>">
																	<input type="hidden" name="id_lista[]" value="<?php echo $key['id_lista']; ?>">
																	
																	

																<?php
																	$item++;
																}

																
																
																?>
																<input type="hidden" name="" id="valor_total" value="<?php echo $valor ?>">
															
																<!-- <a id="generarVenta" class="btn btn-success">Generar Venta</a> -->
																<script>
																	document.getElementById('generarVenta').addEventListener('click', function() {
																		var confirmar = confirm('Esta seguro de Generar la venta');
																		if (confirmar) {
																			alert('venta confirmada');
																			location.href = 'generarVenta.php?id_lista=<?php echo $key['id_lista']; ?>&id_venta=<?php echo $key['id_venta']; ?>&id_inventario=<?php echo $key['id_inventario']; ?>&accion=generaVenta&id_cliente=<?php echo $id_cliente; ?>';
																		} else {}
																	});
																</script>
																	<!--<a id="aprobarCartera" class="btn btn-warning">aprobar Venta</a>-->
																<script>
																	document.getElementById('aprobarCartera').addEventListener('click', function() {
																		var confirmar = confirm('Esta seguro de Aprobar la venta');
																		if (confirmar) {
																			alert('venta aprobada');
																			location.href = 'aprobarVenta.php?id_venta=<?php echo $_GET['id_venta'] ?>&cliente=<?php echo $id_cliente; ?>&accion=aprobarVenta';
																		} else {}
																	});
																</script>
																 <input class="btn btn-warning" id="bt_enviar_despacho" type="submit" value="Alistamiento Completado" >
																
							
															</form>
														<?php
														} else {
														?>
															<tr>

																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>

															</tr>
														<?php
														}
														?>
														<tr>

														</tr>

													</tbody>


												</table>
												<table class="table table-sm table-bordered;" style="float:right; width: 20%"  >
													<tr>
											
													</tr>
												</table>
												
											</div>
										</div>
									<?php
									} else {
										echo "No se han agregado Productos a la venta.";
									}
									?>
								</div>
							</div>

						<?php
						}
						?>
					</div>
					

			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->

		<!-- Footer -->

		<!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>



	<!-- modal necesario para el funcionamiento del logout -->

	<!-- libreria necesaria para el funcionamiento de data table -->
	<?php include 'librerias_js/pruebas-libreriasjs.php'; ?>







<script>



function valida(){

											var total_verifica = 0 ;
	
	
														<?php
																foreach ($inventarios->verlistadoPrendas($_GET['id_venta']) as $key) {
																
																?>

																var v1<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v1<?php echo $key['id_lista']; ?>").value);
																var v2<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v2<?php echo $key['id_lista']; ?>").value);
																var v3<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v3<?php echo $key['id_lista']; ?>").value);
																var v4<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v4<?php echo $key['id_lista']; ?>").value);
																var v5<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v5<?php echo $key['id_lista']; ?>").value);
																var v6<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v6<?php echo $key['id_lista']; ?>").value);
																var v7<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v7<?php echo $key['id_lista']; ?>").value);
																var v8<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v8<?php echo $key['id_lista']; ?>").value);
																var v9<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v9<?php echo $key['id_lista']; ?>").value);
																var v10<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v10<?php echo $key['id_lista']; ?>").value);
																var v11<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v11<?php echo $key['id_lista']; ?>").value);
																var v12<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v12<?php echo $key['id_lista']; ?>").value);
																var v13<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v13<?php echo $key['id_lista']; ?>").value);
																var v14<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v14<?php echo $key['id_lista']; ?>").value);
																var v15<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v15<?php echo $key['id_lista']; ?>").value);
																var v16<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v16<?php echo $key['id_lista']; ?>").value);
																var v17<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v17<?php echo $key['id_lista']; ?>").value);
																var v18<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v18<?php echo $key['id_lista']; ?>").value);
																var v19<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v19<?php echo $key['id_lista']; ?>").value);
																var v20<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v20<?php echo $key['id_lista']; ?>").value);
																var v21<?php echo $key['id_lista']; ?>  = parseInt(document.getElementById("v21<?php echo $key['id_lista']; ?>").value);
														
																
																

																$sub_total = v1<?php echo $key['id_lista']; ?> + v2<?php echo $key['id_lista']; ?> + v3<?php echo $key['id_lista']; ?> + v4<?php echo $key['id_lista']; ?> + v5<?php echo $key['id_lista']; ?> + v6<?php echo $key['id_lista']; ?>;
																$sub_total = $sub_total + v7<?php echo $key['id_lista']; ?> + v8<?php echo $key['id_lista']; ?> + v9<?php echo $key['id_lista']; ?> + v10<?php echo $key['id_lista']; ?> + v11<?php echo $key['id_lista']; ?> + v12<?php echo $key['id_lista']; ?>;
																$sub_total = $sub_total + v13<?php echo $key['id_lista']; ?> + v14<?php echo $key['id_lista']; ?> + v15<?php echo $key['id_lista']; ?> + v6<?php echo $key['id_lista']; ?> + v7<?php echo $key['id_lista']; ?> + v18<?php echo $key['id_lista']; ?>;
																$sub_total = $sub_total + v19<?php echo $key['id_lista']; ?> + v20<?php echo $key['id_lista']; ?> + v21<?php echo $key['id_lista']; ?> ;

																total_verifica = total_verifica +  $sub_total;
															



																<?php
																}
																
																?>
																
																if(total_verifica==0){
																
																	suma_todo();
																}
																else{
																	document.getElementById("bt_enviar_despacho").disabled = true;
																
																}


}

function suma_todo(){
var total= 0;
	<?php
																foreach ($inventarios->verlistadoPrendas($_GET['id_venta']) as $key) {
																
																?>
															
															if(document.getElementById("talla6<?php echo $key['id_lista']; ?>").value ==""){
																var talla6<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla6<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla6<?php echo $key['id_lista']; ?>").value);
																
															}
															


															if(document.getElementById("talla8<?php echo $key['id_lista']; ?>").value ==""){
																var talla8<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla8<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla8<?php echo $key['id_lista']; ?>").value);
															}
															

															if(document.getElementById("talla10<?php echo $key['id_lista']; ?>").value ==""){
																var talla10<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla10<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla10<?php echo $key['id_lista']; ?>").value);
															}
															


															if(document.getElementById("talla12<?php echo $key['id_lista']; ?>").value ==""){
																var talla12<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla12<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla12<?php echo $key['id_lista']; ?>").value);
															}


															if(document.getElementById("talla14<?php echo $key['id_lista']; ?>").value ==""){
																var talla14<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla14<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla14<?php echo $key['id_lista']; ?>").value);
															}

															if(document.getElementById("talla16<?php echo $key['id_lista']; ?>").value ==""){
																var talla16<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla16<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla16<?php echo $key['id_lista']; ?>").value);
															}


															if(document.getElementById("talla18<?php echo $key['id_lista']; ?>").value ==""){
																var talla18<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla18<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla18<?php echo $key['id_lista']; ?>").value);
															}


															if(document.getElementById("talla20<?php echo $key['id_lista']; ?>").value ==""){
																var talla20<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla20<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla20<?php echo $key['id_lista']; ?>").value);
															}


															if(document.getElementById("talla26<?php echo $key['id_lista']; ?>").value ==""){
																var talla26<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla26<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla26<?php echo $key['id_lista']; ?>").value);
															}

															if(document.getElementById("talla28<?php echo $key['id_lista']; ?>").value ==""){
																var talla28<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla28<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla28<?php echo $key['id_lista']; ?>").value);
															}

															if(document.getElementById("talla30<?php echo $key['id_lista']; ?>").value ==""){
																var talla30<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla30<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla30<?php echo $key['id_lista']; ?>").value);
															}
												

															if(document.getElementById("talla32<?php echo $key['id_lista']; ?>").value ==""){
																var talla32<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla32<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla32<?php echo $key['id_lista']; ?>").value);
															}
												

															if(document.getElementById("talla34<?php echo $key['id_lista']; ?>").value ==""){
																var talla34<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla34<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla34<?php echo $key['id_lista']; ?>").value);
															}


															if(document.getElementById("talla36<?php echo $key['id_lista']; ?>").value ==""){
																var talla36<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla36<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla36<?php echo $key['id_lista']; ?>").value);
															}
												


															if(document.getElementById("talla38<?php echo $key['id_lista']; ?>").value ==""){
																var talla38<?php echo $key['id_lista']; ?> = 0;
															}else{
																var talla38<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("talla38<?php echo $key['id_lista']; ?>").value);
															}
												


															if(document.getElementById("tallas<?php echo $key['id_lista']; ?>").value ==""){
																var tallas<?php echo $key['id_lista']; ?> = 0;
															}else{
																var tallas<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("tallas<?php echo $key['id_lista']; ?>").value);
															}


															if(document.getElementById("tallam<?php echo $key['id_lista']; ?>").value ==""){
																var tallam<?php echo $key['id_lista']; ?> = 0;
															}else{
																var tallam<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("tallam<?php echo $key['id_lista']; ?>").value);
															}
															
												
												


															if(document.getElementById("tallal<?php echo $key['id_lista']; ?>").value ==""){
																var tallal<?php echo $key['id_lista']; ?> = 0;
															}else{
																var tallal<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("tallal<?php echo $key['id_lista']; ?>").value);
															}
															
												
												


															if(document.getElementById("tallaxl<?php echo $key['id_lista']; ?>").value ==""){
																var tallaxl<?php echo $key['id_lista']; ?> = 0;
															}else{
																var tallaxl<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("tallaxl<?php echo $key['id_lista']; ?>").value);
															}
												
												
												


															if(document.getElementById("tallau<?php echo $key['id_lista']; ?>").value ==""){
																var tallau<?php echo $key['id_lista']; ?> = 0;
															}else{
																var tallau<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("tallau<?php echo $key['id_lista']; ?>").value);
															}
												
												
												

															if(document.getElementById("tallaest<?php echo $key['id_lista']; ?>").value ==""){
																var tallaest<?php echo $key['id_lista']; ?> = 0;
															}else{
																var tallaest<?php echo $key['id_lista']; ?> = parseInt(document.getElementById("tallaest<?php echo $key['id_lista']; ?>").value);
															}
												
												
												
												
												
												
												
													 
													var suma_fila<?php echo $key['id_lista']; ?> = talla6<?php echo $key['id_lista']; ?> + talla8<?php echo $key['id_lista']; ?> + talla10<?php echo $key['id_lista']; ?> +talla12<?php echo $key['id_lista']; ?> +talla14<?php echo $key['id_lista']; ?>;
													
													
													suma_fila<?php echo $key['id_lista']; ?> = suma_fila<?php echo $key['id_lista']; ?> + talla16<?php echo $key['id_lista']; ?> +talla18<?php echo $key['id_lista']; ?> + talla20<?php echo $key['id_lista']; ?> + talla26<?php echo $key['id_lista']; ?> + talla28<?php echo $key['id_lista']; ?> + talla30<?php echo $key['id_lista']; ?>;
												
													suma_fila<?php echo $key['id_lista']; ?> = suma_fila<?php echo $key['id_lista']; ?> + talla32<?php echo $key['id_lista']; ?> + talla34<?php echo $key['id_lista']; ?> + talla36<?php echo $key['id_lista']; ?> + talla38<?php echo $key['id_lista']; ?> + tallas<?php echo $key['id_lista']; ?>;
												
													suma_fila<?php echo $key['id_lista']; ?> = suma_fila<?php echo $key['id_lista']; ?> + tallam<?php echo $key['id_lista']; ?> + tallal<?php echo $key['id_lista']; ?> + tallaxl<?php echo $key['id_lista']; ?> + tallau<?php echo $key['id_lista']; ?> + tallaest<?php echo $key['id_lista']; ?>;			
													
													total = total + suma_fila<?php echo $key['id_lista']; ?>;
													
															<?php
																
																}
																?>


var valor_bd = parseInt(document.getElementById("valor_total").value);

if( total==valor_bd){
document.getElementById("bt_enviar_despacho").disabled = false;
}else{

document.getElementById("bt_enviar_despacho").disabled = true;
}



}
	
														




</script>
														

	<script>
		window.onload = function() {
			var contenedor = document.getElementById("contenedor_loading");
			contenedor.style.visibility = "hidden";
			contenedor.style.opacity = "0";
		};
	</script>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
	<!-- <script>
			  document.getElementById('siguiente').addEventListener('click', function(){
					var referencia = document.getElementById('buscar_referencia').value;
					  $.ajax({
						  url: 'data-inventario-venta.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
						  type: 'POST',
						  dataType:'html',//dataType: xml, json, script, o html
						  data: {'accion' : 'buscar_referencia','referencia':referencia },//se evia el valor seleccionado en tu select
						  success: function (result) {   
							  console.log('procesado');    
							  $("#campoProducto table").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
						  },
						  error: function (jqXHR, status, error) {        
							  alert("error");
						  }
					  });
			  
			  });
			 
		  </script> -->

	<!-- <script>
			  data_venta = $('#data_venta').serialize();
			  document.getElementById('siguiente').value;
			  document.getElementById('siguiente').addEventListener('click', function(){
				console.log(data_venta);
				document.getElementById('siguiente').style.display = 'none';
					// var referencia = document.getElementById('buscar_referencia').value;
					  $.ajax({
						  url: '../modelo/nuevaVenta.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
						  type: 'GET',
						  dataType:'html',//dataType: xml, json, script, o html
						  data: data_venta,//se evia el valor seleccionado en tu select
						  success: function (result) {   
							  console.log('procesado');    
							  $("#areaProductos").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html

						  },
						  error: function (jqXHR, status, error) {        
							  alert("error");
						  }
					  });

			  
			  });
			 
		  </script> -->

	<!-- <script>
			  document.getElementById('envio_buscar_referencia').addEventListener('click', function(){
					var referencia = document.getElementById('buscar_referencia').value;
					  $.ajax({
						  url: '../modelo/funcionesInventarioVenta.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
						  type: 'POST',
						  dataType:'html',//dataType: xml, json, script, o html
						  data: {'accion' : 'buscar_referencia','referencia':referencia },//se evia el valor seleccionado en tu select
						  success: function (result) {   
							  console.log('procesado');    
							  $("#campoProducto table").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
						  },
						  error: function (jqXHR, status, error) {        
							  alert("error");
						  }
					  });
			  
			  });
			 
		  </script> -->

</body>

</html>