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

	<title>Nueva Venta</title>


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
								    <a class="btn btn-danger" href="ventas-por-despachar.php" role="button">Salir</a>
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
										?>
										
										<legend class="text-center">Nueva Venta # <strong style="color: blue;"><?php echo @$key['id_venta']; ?></strong></legend>
										<legend class="text-center">Fecha: <?php echo @$key['fecha_venta']; ?></legend>
										
									</div>
									<div class="col-sm-2">
										<?php
											foreach ($ventas->ventaPorId(@$key['id_venta']) as $keyVenta) {
												if ($keyVenta['estado'] == 'APROBO CLIENTE') {
													echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>APROBADO POR CLIENTE</em>";
													$permisoEstado = $keyVenta['estado']; 
												}
												else if ($keyVenta['estado'] == 'APROBO CARTERA') {
													echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>APROBADO POR CARTERA</em>";
													$permisoEstado = $keyVenta['estado']; 


															if(isset($_GET['generapdf'])){
																
																if($_GET['generapdf']==true){
																	echo "	<script> 
																	window.open('../pdf/formato1.php?id_venta=".$_GET['id_venta']."' , 'ventana1' , 'width=1000,height=1000,scrollbars=NO');
																	</script> ";
				
																}
															}




												}
												else if ($keyVenta['estado'] == 'APROBO DESPACHO') {
													echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>APROBADO POR DESPACHO</em>";
													$permisoEstado = $keyVenta['estado']; 

												}
												else if ($keyVenta['estado'] == 'INICIADA') {
													echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>VENTA INICIADA</em>";
													$permisoEstado = $keyVenta['estado']; 

												}
												else if ($keyVenta['estado'] == 'CANCELADO') {
													echo "<em style='padding:15px; background-color:crimson; color: white;'>VENTA CANCELADA</em>";
													$permisoEstado = $keyVenta['estado']; 

											
												}
												else{
													$permisoEstado = $keyVenta['estado']; 
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
												}else if($key['estado']=="CANCELADO"){
													echo "	<style>
																.bt-eliminar{
																	display: none;
																}
																.bt-cancelar{
																	pointer-events: none; 
																	cursor: default; 
																}
																.bt-generar{
																	pointer-events: none; 
																	cursor: default; 
																}

															.bt-aprobar-cartera	{ 
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


												<form id="datosProductosSeleccionados" action="generarVenta.php?cliente=0&id_lista=0&id_venta=0&id_inventario=0&accion=eliminar_venta&id_cliente=0" method="post">
												<?php
																foreach ($inventarios->verlistadoPrendas($_GET['id_venta']) as $key) {
																?>


																	<input type="hidden" name="id_inventarios[]" value="<?php echo $key['id_inventario']; ?>">
																	<input type="hidden" name="id_venta[]" value="<?php echo $key['id_venta']; ?>">
																	<input type="hidden" name="id_cliente[]" value="<?php echo $id_cliente; ?>">
																	<input type="hidden" name="id_lista[]" value="<?php echo $key['id_lista']; ?>">


																<?php
																}
																?>

															

														
												</form>
												<table id="" class="table table-sm table-bordered" width="100%" cellspacing="0">
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
															<th>observacion</th>
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
															
																<?php
																foreach ($inventarios->verlistadoPrendas($_GET['id_venta']) as $key) {
																	$precio_total = $precio_total + $key['precio'];
																?>

																<form id="datosProductosSeleccionados" action="orden-devolucion-pedido.php?cliente=0&id_lista=0&id_venta=0&id_inventario=0&accion=descuenta_producto&id_cliente=0" method="post" onsubmit="return confirmation()">



																	<tr>

																		<td><input type="number" readonly value="<?php echo $key['id_lista']; ?>"  name="<?php echo $key['id_lista'] ?>" id="id_lista<?php echo $key['id_lista']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['referencia']; ?>" name="referencia" id="referencia<?php echo $key['referencia']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['descripcion']; ?>" name="descripcion<?php echo $key['id_lista'] ?>" id="descripcion<?php echo $key['descripcion']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['marca']; ?>" name="marca<?php echo $key['id_lista'] ?>" id="marca<?php echo $key['marca']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['silueta']; ?>" name="silueta<?php echo $key['id_lista'] ?>" id="silueta<?php echo $key['silueta']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['categoria']; ?>" name="categoria<?php echo $key['id_lista'] ?>" id="categoria<?php echo $key['categoria']; ?>" class="form-control"></td>
																		<td><input type="text" readonly value="<?php echo $key['color']; ?>" name="color<?php echo $key['id_lista'] ?>" id="color<?php echo $key['color']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla6']; ?>" min="0" max="<?php echo $key['talla6']; ?>"  value="<?php echo $key['talla6']; ?>" name="talla6" id="talla6<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla8']; ?>" min="0" max="<?php echo $key['talla8']; ?>"  value="<?php echo $key['talla8']; ?>" name="talla8" id="talla8<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla10']; ?>" min="0" max="<?php echo $key['talla10']; ?>"  value="<?php echo $key['talla10']; ?>" name="talla10" id="talla10<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla12']; ?>" min="0" max="<?php echo $key['talla12']; ?>"  value="<?php echo $key['talla12']; ?>" name="talla12" id="talla12<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla14']; ?>" min="0" max="<?php echo $key['talla14']; ?>"  value="<?php echo $key['talla14']; ?>" name="talla14" id="talla14<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla16']; ?>" min="0" max="<?php echo $key['talla16']; ?>"  value="<?php echo $key['talla16']; ?>" name="talla16" id="talla16<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla18']; ?>" min="0" max="<?php echo $key['talla18']; ?>"  value="<?php echo $key['talla18']; ?>" name="talla18" id="talla18<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla20']; ?>" min="0" max="<?php echo $key['talla20']; ?>" value="<?php echo $key['talla20']; ?>" name="talla20" id="talla20<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla26']; ?>" min="0" max="<?php echo $key['talla26']; ?>" value="<?php echo $key['talla26']; ?>" name="talla26" id="talla26<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla28']; ?>" min="0" max="<?php echo $key['talla28']; ?>" value="<?php echo $key['talla28']; ?>" name="talla28" id="talla28<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla30']; ?>" min="0" max="<?php echo $key['talla30']; ?>" value="<?php echo $key['talla28']; ?>" name="talla30" id="talla30<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla32']; ?>" min="0" max="<?php echo $key['talla32']; ?>" value="<?php echo $key['talla28']; ?>" name="talla32" id="talla32<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla34']; ?>" min="0" max="<?php echo $key['talla34']; ?>" value="<?php echo $key['talla28']; ?>" name="talla34" id="talla34<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla36']; ?>" min="0" max="<?php echo $key['talla36']; ?>" value="<?php echo $key['talla28']; ?>" name="talla36" id="talla36<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['talla38']; ?>" min="0" max="<?php echo $key['talla38']; ?>" value="<?php echo $key['talla28']; ?>" name="talla38" id="talla38<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['tallas']; ?>" min="0" max="<?php echo $key['tallas']; ?>" value="<?php echo $key['talla28']; ?>" name="tallas" id="tallas<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['tallam']; ?>" min="0" max="<?php echo $key['tallam']; ?>" value="<?php echo $key['talla28']; ?>" name="tallam" id="tallam<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['tallal']; ?>" min="0" max="<?php echo $key['tallal']; ?>" value="<?php echo $key['talla28']; ?>" name="tallal" id="tallal<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['tallaxl']; ?>" min="0" max="<?php echo $key['tallaxl']; ?>" value="<?php echo $key['talla28']; ?>" name="tallaxl" id="tallaxl<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['tallau']; ?>" min="0" max="<?php echo $key['tallau']; ?>" value="<?php echo $key['talla28']; ?>" name="tallau" id="tallau<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number"  placeholder="<?php echo $key['tallaest']; ?>" min="0" max="<?php echo $key['tallaest']; ?>" value="<?php echo $key['talla28']; ?>" name="tallaest" id="tallaest<?php echo $key['id_inventario']; ?>" class="form-control"></td>
																		<td><input type="number" readonly value="<?php echo $key['precio']; ?>" name="precio" id="precio<?php echo $key['id_inventario']; ?>" class="form-control"><input type="hidden" readonly value="<?php echo $key['precio']; ?>" name="precio_escondido" id="precio_escondido<?php echo $key['id_inventario']; ?>" class="form-control">
																			<input type="hidden" readonly value="eliminaProductosVentas" name="accion<?php echo $key['id_lista'] ?>" id="" class="form-control">
																			<input type="hidden" readonly value="<?php echo $id_cliente; ?>" name="<?php echo $key['id_lista'] ?>" id="" class="form-control">
																			<input type="hidden" readonly value="<?php echo $_GET['id_venta']; ?>" name="<?php echo $key['id_lista'] ?>" id="" class="form-control">
																		</td>
																		<td>
																			<select class="form-control" name="observacion">
																				<option value="PRENDAS ROTAS">PRENDAS ROTAS</option>
																				<option value="PRENDA EN MAL ESTADO">PRENDA EN MAL ESTADO</option>
																				<option value="LA TALLA NO ERA LA QUE PEDI">LA TALLA NO ERA LA QUE PEDI</option>
																				<option value="LA TALLA ES MUY GRANDE">LA TALLA ES MUY GRANDE</option>
																				<option value="NO ME GUSTA LA PRENDA">NO ME GUSTA LA PRENDA</option>
																				<option value="LA PRENDA ME LLEGO SUCIA">LA PRENDA ME LLEGO SUCIA</option>
																				<option value="LA PRENDA NO CUMPLIO CON MIS ESPECTATIVAS">LA PRENDA NO CUMPLIO CON MIS ESPECTATIVAS</option>
																			</select>
																		

																		</td>
																		<td>
																		

																		<input type="hidden" name="id_inventarios" value="<?php echo $key['id_inventario']; ?>">
																	<input type="hidden" name="id_venta" value="<?php echo $key['id_venta']; ?>">
																	<input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
																	<input type="hidden" name="id_lista" value="<?php echo $key['id_lista']; ?>">
																	
																			

																			<input type="submit" value="Devolver" class="btn-danger " >
																		</td>
																	
																		<td>
																			<!-- <a href="generarVenta.php?cliente=<?php echo $id_cliente; ?>&id_lista=<?php echo $key['id_lista']; ?>&id_venta=<?php echo $key['id_venta']; ?>&id_inventario=<?php echo $key['id_inventario']; ?>&accion=generaVenta&id_cliente=<?php echo $id_cliente; ?>" class="btn-success">Apartar</a> -->
																		</td>

																	</tr>
																	
																	</form>
											
																	
																

																<?php
																	$item++;
																}
																?>
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
																<?php if ($_SESSION['typeUser']==2) {
																 ?>
																 
																 <?php 
																 } else{}?>

																 
																 <?php if ($_SESSION['typeUser']==3) {
																 ?>
																
																 <?php 
																 } else{}?>
																
														
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
														<td><Label style="font-weight: bolder;">PRECIO TOTAL</Label></td>
														<td ><Label style="font-weight: bolder;"><?php echo $precio_total ?>$</Label></td>
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

function confirmation() 
     {
        if(confirm("Desea seguir?"))
	{
	   return true;
	}
	else
	{
	   return false;
	}
     }




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