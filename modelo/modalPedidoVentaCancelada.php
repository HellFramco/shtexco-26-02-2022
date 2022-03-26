<?php

require_once '../../modelo/redireccion.php';
require_once '../../modelo/datos-productos.php';
require_once '../../modelo/datosInventarios.php';
require_once '../../modelo/funcionesClientes.php';
$inventarios = new Inventarios();
$productos = new Productos();
$clientes = new Clientes();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">

	<div class="container">
		<div class="row"><br>
		
			<div class="col-sm-12">
				<img src="../../imagenes/Untitled.png" alt="" width="100px" style="float: right;">
				<p style="float: right; color: crimson;">Control de registros de inventario X salidas <br></p>
				<h4>Ventas Canceladas version 1.0 </h4>
				<br>

				<?php 
				
				//print_r($_POST);
				if (@$_POST['accion'] == 'verificarInventario') {
							
				}

				?>

			</div>
			<div class="col-sm-12">
			<form action="" method="post" onkeyup="onKeyDownHandler(event);">
				<div id="espacioTallas">
					<div class="col-sm-12">
						<legend>REFERENCIAS X PEDIDOS / INVENTARIO EXISTENCIA</legend>
						<legend>ID de venta: #<?php echo $_GET['id_venta']; ?><br>Estado actual: <?php print_r($_GET['estado']); ?></legend>
					</div>
					<h1>BALANCE DE DATOS</h1>

					<div class="col-sm-5">
						<table class="table table-bordered"  width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>#</th>
									<th>ID</th>
									<th>Referencia</th>
									<th>Numero de ventas X pedidos</th>
													
								</tr>
							</thead>

							<tbody style="color: gray;text-align: center;">
								<?php
									$item = 1;
									foreach ($inventarios->verVentaId($_GET['id_venta']) as $key) {
										$referenciaInventario = explode("-", $key[30]);
								?>
								<tr>
									<td><?php echo $item; ?></td>
									<th><?php $referencias[] = $key[29]; echo $key[29]; ?></th>
									<td><?php echo $referenciaInventario[0]; ?></td>
									<th><?php foreach ($inventarios->contarReferenciaVentaCancelada($key[29]) as $keyVentaR) {echo "<p style='color: gray;text-align: center;'>$keyVentaR[0]</p>";} ?></th>
								</tr>

								<?php
									$item++;
									}
									echo 'Referencias implicadas: ';
									print_r($item - 1);
								?>


							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<div class="col-sm-12">
					<table class="table table-bordered" id="example" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>#</th>
									<th>Referencia</th>
									<th>Talla6</th>
									<th>Talla8</th>
									<th>Talla10</th>
									<th>Talla12</th>
									<th>Talla14</th>
									<th>Talla16</th>
									<th>Talla18</th>
									<th>Talla20</th>
									<th>Talla26</th>
									<th>Talla28</th>
									<th>Talla30</th>
									<th>Talla32</th>
									<th>Talla34</th>
									<th>Talla36</th>
									<th>Talla38</th>
									<th>Tallas</th>
									<th>Tallam</th>
									<th>Tallal</th>
									<th>Tallaxl</th>
									<th>Tallau</th>
									<th>Tallaest</th>
													
								</tr>
							</thead>

							<tbody style="color: gray;">
								<?php

									$q = count($referencias);
					
									for($i=0; $i < $q;$i++){
									
										$totalTalla6 = 0;
										$totalTalla8 = 0;
										$totalTalla10 = 0;
										$totalTalla12 = 0;
										$totalTalla14 = 0;
										$totalTalla16 = 0;
										$totalTalla18 = 0;
										$totalTalla20 = 0;
										$totalTalla26 = 0;
										$totalTalla28 = 0;
										$totalTalla30 = 0;
										$totalTalla32 = 0;
										$totalTalla34 = 0;
										$totalTalla36 = 0;
										$totalTalla38 = 0;
										$totalTallas = 0;
										$totalTallal = 0;
										$totalTallam = 0;
										$totalTallaxl = 0;
										$totalTallau = 0;
										$totalTallaest = 0;

										foreach ($inventarios->referenciasXventass($referencias[$i]) as $key) {

										$totalTalla6 = $totalTalla6 + $key[1];
										$totalTalla8 = $totalTalla8 + $key[2];
										$totalTalla10 = $totalTalla10 + $key[3];
										$totalTalla12 = $totalTalla12 + $key[4];
										$totalTalla14 = $totalTalla14 + $key[5];
										$totalTalla16 = $totalTalla16 + $key[6];
										$totalTalla18 = $totalTalla18 + $key[7];
										$totalTalla20 = $totalTalla20 + $key[8];
										$totalTalla26 = $totalTalla26 + $key[19];
										$totalTalla28 = $totalTalla28 + $key[10];
										$totalTalla30 = $totalTalla30 + $key[11];
										$totalTalla32 = $totalTalla32 + $key[12];
										$totalTalla34 = $totalTalla34 + $key[13];
										$totalTalla36 = $totalTalla36 + $key[14];
										$totalTalla38 = $totalTalla38 + $key[15];
										$totalTallas = $totalTallas + $key[16];
										$totalTallam = $totalTallam + $key[17];
										$totalTallal = $totalTallal + $key[18];
										$totalTallaxl = $totalTallaxl + $key[19];
										$totalTallau = $totalTallau + $key[20];
										$totalTallaest = $totalTallaest + $key[21];
										
									}
								?>
								<tr>
									<td></td>
									<td><?php echo $referencias[$i]; ?></td>
									<td><?php echo $totalTalla6; ?></td>
									<td><?php echo $totalTalla8; ?></td>
									<td><?php echo $totalTalla10; ?></td>
									<td><?php echo $totalTalla12; ?></td>
									<td><?php echo $totalTalla14; ?></td>
									<td><?php echo $totalTalla16; ?></td>
									<td><?php echo $totalTalla18; ?></td>
									<td><?php echo $totalTalla20; ?></td>
									<td><?php echo $totalTalla26; ?></td>
									<td><?php echo $totalTalla28; ?></td>
									<td><?php echo $totalTalla30; ?></td>
									<td><?php echo $totalTalla32; ?></td>
									<td><?php echo $totalTalla34; ?></td>
									<td><?php echo $totalTalla36; ?></td>
									<td><?php echo $totalTalla38; ?></td>
									<td><?php echo $totalTallas; ?></td>
									<td><?php echo $totalTallam; ?></td>
									<td><?php echo $totalTallal; ?></td>
									<td><?php echo $totalTallaxl; ?></td>
									<td><?php echo $totalTallau; ?></td>
									<td><?php echo $totalTallaest; ?></td>
								</tr>

								<?php
								}
									echo 'Total de ventas X tallas';
								?>


							</tbody>
						</table>
	</div>

	<div class="col-sm-12">
					<table class="table table-bordered" id="example" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>#</th>
									<th>Referencia</th>
									<th>Talla6</th>
									<th>Talla8</th>
									<th>Talla10</th>
									<th>Talla12</th>
									<th>Talla14</th>
									<th>Talla16</th>
									<th>Talla18</th>
									<th>Talla20</th>
									<th>Talla26</th>
									<th>Talla28</th>
									<th>Talla30</th>
									<th>Talla32</th>
									<th>Talla34</th>
									<th>Talla36</th>
									<th>Talla38</th>
									<th>Tallas</th>
									<th>Tallam</th>
									<th>Tallal</th>
									<th>Tallaxl</th>
									<th>Tallau</th>
									<th>Tallaest</th>
													
								</tr>
							</thead>

							<tbody style="color: gray;">
								<?php

									$q = count($referencias);
					
									for($i=0; $i < $q;$i++){
									
										$totalTalla6 = 0;
										$totalTalla8 = 0;
										$totalTalla10 = 0;
										$totalTalla12 = 0;
										$totalTalla14 = 0;
										$totalTalla16 = 0;
										$totalTalla18 = 0;
										$totalTalla20 = 0;
										$totalTalla26 = 0;
										$totalTalla28 = 0;
										$totalTalla30 = 0;
										$totalTalla32 = 0;
										$totalTalla34 = 0;
										$totalTalla36 = 0;
										$totalTalla38 = 0;
										$totalTallas = 0;
										$totalTallal = 0;
										$totalTallam = 0;
										$totalTallaxl = 0;
										$totalTallau = 0;
										$totalTallaest = 0;

										foreach ($inventarios->referenciasXventass($referencias[$i]) as $key) {

										$totalTalla6 = $totalTalla6 + $key[1];
										$totalTalla8 = $totalTalla8 + $key[2];
										$totalTalla10 = $totalTalla10 + $key[3];
										$totalTalla12 = $totalTalla12 + $key[4];
										$totalTalla14 = $totalTalla14 + $key[5];
										$totalTalla16 = $totalTalla16 + $key[6];
										$totalTalla18 = $totalTalla18 + $key[7];
										$totalTalla20 = $totalTalla20 + $key[8];
										$totalTalla26 = $totalTalla26 + $key[19];
										$totalTalla28 = $totalTalla28 + $key[10];
										$totalTalla30 = $totalTalla30 + $key[11];
										$totalTalla32 = $totalTalla32 + $key[12];
										$totalTalla34 = $totalTalla34 + $key[13];
										$totalTalla36 = $totalTalla36 + $key[14];
										$totalTalla38 = $totalTalla38 + $key[15];
										$totalTallas = $totalTallas + $key[16];
										$totalTallam = $totalTallam + $key[17];
										$totalTallal = $totalTallal + $key[18];
										$totalTallaxl = $totalTallaxl + $key[19];
										$totalTallau = $totalTallau + $key[20];
										$totalTallaest = $totalTallaest + $key[21];
										
									}

									foreach ($inventarios->verInventarioId($referencias[$i]) as $key) {
										$definidoTalla6 = $key[16];
										$stockTalla6 = $key[15];
										$definidoTalla8 = $key[18];
										$stockTalla8 = $key[17];
										$definidoTalla10 = $key[20];
										$stockTalla10 = $key[19];
										$definidoTalla12 = $key[22];
										$stockTalla12 = $key[21];
										$definidoTalla14 = $key[24];
										$stockTalla14 = $key[23];
										$definidoTalla16 = $key[26];
										$stockTalla16 = $key[25];
										$definidoTalla18 = $key[28];
										$stockTalla18 = $key[27];
										$definidoTalla20 = $key[30];
										$stockTalla20 = $key[29];
										$definidoTalla26 = $key[32];
										$stockTalla26 = $key[31];
										$definidoTalla28 = $key[34];
										$stockTalla28 = $key[33];
										$definidoTalla30 = $key[36];
										$stockTalla30 = $key[35];
										$definidoTalla32 = $key[38];
										$stockTalla32 = $key[37];
										$definidoTalla34 = $key[40];
										$stockTalla34 = $key[39];
										$definidoTalla36 = $key[42];
										$stockTalla36 = $key[41];
										$definidoTalla38 = $key[44];
										$stockTalla38 = $key[43];
										$definidoTallas = $key[46];
										$stockTallas = $key[45];
										$definidoTallam = $key[48];
										$stockTallam = $key[47];
										$definidoTallal = $key[50];
										$stockTallal = $key[49];
										$definidoTallaxl = $key[52];
										$stockTallaxl = $key[51];
										$definidoTallau = $key[54];
										$stockTallau = $key[53];
										$definidoTallaest = $key[56];
										$stockTallaest = $key[55];
									}

									$stockXventaTalla6 = $totalTalla6 + $stockTalla6;
									$stockXventaTalla8 = $totalTalla8 + $stockTalla8;
									$stockXventaTalla10 = $totalTalla10 + $stockTalla10;
									$stockXventaTalla12 = $totalTalla12 + $stockTalla12;
									$stockXventaTalla14 = $totalTalla14 + $stockTalla14;
									$stockXventaTalla16 = $totalTalla16 + $stockTalla16;
									$stockXventaTalla18 = $totalTalla18 + $stockTalla18;
									$stockXventaTalla20 = $totalTalla20 + $stockTalla20;
									$stockXventaTalla26 = $totalTalla26 + $stockTalla26;
									$stockXventaTalla28 = $totalTalla28 + $stockTalla28;
									$stockXventaTalla30 = $totalTalla30 + $stockTalla30;
									$stockXventaTalla32 = $totalTalla32 + $stockTalla32;
									$stockXventaTalla34 = $totalTalla34 + $stockTalla34;
									$stockXventaTalla36 = $totalTalla36 + $stockTalla36;
									$stockXventaTalla38 = $totalTalla38 + $stockTalla38;
									$stockXventaTallas = $totalTallas + $stockTallas;
									$stockXventaTallam = $totalTallam + $stockTallam;
									$stockXventaTallal = $totalTallal + $stockTallal;
									$stockXventaTallaxl = $totalTallaxl + $stockTallaxl;
									$stockXventaTallau = $totalTallau + $stockTallau;
									$stockXventaTallaest = $totalTallaest + $stockTallaest;

									$inconsistenciasInventarioTalla6 = $definidoTalla6 - $stockXventaTalla6;
									$inconsistenciasInventarioTalla8 = $definidoTalla8 - $stockXventaTalla8;
									$inconsistenciasInventarioTalla10 = $definidoTalla10 - $stockXventaTalla10;
									$inconsistenciasInventarioTalla12 = $definidoTalla12 - $stockXventaTalla12;
									$inconsistenciasInventarioTalla14 = $definidoTalla14 - $stockXventaTalla14;
									$inconsistenciasInventarioTalla16 = $definidoTalla16 - $stockXventaTalla16;
									$inconsistenciasInventarioTalla18 = $definidoTalla18 - $stockXventaTalla18;
									$inconsistenciasInventarioTalla20 = $definidoTalla20 - $stockXventaTalla20;
									$inconsistenciasInventarioTalla26 = $definidoTalla26 - $stockXventaTalla26;
									$inconsistenciasInventarioTalla28 = $definidoTalla28 - $stockXventaTalla28;
									$inconsistenciasInventarioTalla30 = $definidoTalla30 - $stockXventaTalla30;
									$inconsistenciasInventarioTalla32 = $definidoTalla32 - $stockXventaTalla32;
									$inconsistenciasInventarioTalla34 = $definidoTalla34 - $stockXventaTalla34;
									$inconsistenciasInventarioTalla36 = $definidoTalla36 - $stockXventaTalla36;
									$inconsistenciasInventarioTalla38 = $definidoTalla38 - $stockXventaTalla38;
									$inconsistenciasInventarioTallas = $definidoTallas - $stockXventaTallas;
									$inconsistenciasInventarioTallam = $definidoTallam - $stockXventaTallam;
									$inconsistenciasInventarioTallal = $definidoTallal - $stockXventaTallal;
									$inconsistenciasInventarioTallaxl = $definidoTallaxl - $stockXventaTallaxl;
									$inconsistenciasInventarioTallau = $definidoTallau- $stockXventaTallau;
									$inconsistenciasInventarioTallaest = $definidoTallaest - $stockXventaTallaest;
								?>
								<tr>
									<td></td>
									<td><?php echo $referencias[$i]; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla6; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla8; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla10; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla12; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla14; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla16; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla18; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla20; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla26; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla28; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla30; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla32; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla34; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla36; ?></td>
									<td><?php echo $inconsistenciasInventarioTalla38; ?></td>
									<td><?php echo $inconsistenciasInventarioTallas; ?></td>
									<td><?php echo $inconsistenciasInventarioTallam; ?></td>
									<td><?php echo $inconsistenciasInventarioTallal; ?></td>
									<td><?php echo $inconsistenciasInventarioTallaxl; ?></td>
									<td><?php echo $inconsistenciasInventarioTallau; ?></td>
									<td><?php echo $inconsistenciasInventarioTallaest; ?></td>
								</tr>

								<?php
								}
									echo 'INCONSISTENCIAS DE DATOS CON EL INVENTARIO';
								?>


							</tbody>
						</table>
	</div>

</form>
<script src="../../librerias/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
	// $('#espacioTallas').slideUp();
	// $('#tallas').click(function(){
	// 	$('#espacioTallas').slideToggle();
	// });

	var referencia = document.getElementById("estadoReferencia");

	referencia.addEventListener('change', (event) => {
		var i=document.getElementById("botonEnviarF").value = "cambiarEstadoReferencia";
		document.getElementById("enviarF").click();
	});

	var referencia = document.getElementById("estadoVerificado");

	referencia.addEventListener('change', (event) => {
	var i=document.getElementById("botonEnviarF").value = "cambiarVerificadoReferencia";
	document.getElementById("enviarF").click();
});

	// Ocultar tallas
	function operationTalla6Container() {
    var x = document.getElementById("operationTalla6Container");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

	// Reseteo de variables
		// TALLA 6
			// Peso talla 6
				function serializarTalla6(event){
					var i=document.getElementById("serializarT6").value = "serializarT6";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT6").value = "";
				}
			
			// Peso talla 6 R
				function serializarTalla6R(event){
					var i=document.getElementById("serializarT6R").value = "serializarT6R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT6R").value = "";
				}
			
			// Stock inicial talla 6
				function serializarStockInicialTalla6(event){
					var i=document.getElementById("serializadoStockInicialT6").value = "serializadoStockInicialT6";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT6").value = "";
				}

			// Stock actual talla 6
				function serializarStockTalla6(event){
					var i=document.getElementById("serializadoStockT6").value = "serializadoStockT6";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT6").value = "";
				}

		// TALLA 18
			// Peso talla 18
				function serializarTalla18(event){
					var i=document.getElementById("serializarT18").value = "serializarT18";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT18").value = "";
				}
			
			// Peso talla 18 R
				function serializarTalla18R(event){
					var i=document.getElementById("serializarT18R").value = "serializarT18R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT18R").value = "";
				}
			
			// Stock inicial talla 18
				function serializarStockInicialTalla18(event){
					var i=document.getElementById("serializadoStockInicialT18").value = "serializadoStockInicialT18";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT18").value = "";
				}

			// Stock actual talla 18
				function serializarStockTalla18(event){
					var i=document.getElementById("serializadoStockT18").value = "serializadoStockT18";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT18").value = "";
				}

		// TALLA 34
			// Peso talla 34
				function serializarTalla34(event){
					var i=document.getElementById("serializarT34").value = "serializarT34";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT34").value = "";
				}
			
			// Peso talla 34 R
				function serializarTalla34R(event){
					var i=document.getElementById("serializarT34R").value = "serializarT34R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT34R").value = "";
				}
			
			// Stock inicial talla 34
				function serializarStockInicialTalla34(event){
					var i=document.getElementById("serializadoStockInicialT34").value = "serializadoStockInicialT34";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT34").value = "";
				}

			// Stock actual talla 34
				function serializarStockTalla34(event){
					var i=document.getElementById("serializadoStockT34").value = "serializadoStockT34";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT34").value = "";
				}

		// TALLA XL
			// Peso talla XL
				function serializarTallaxl(event){
					var i=document.getElementById("serializarTxl").value = "serializarTxl";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTxl").value = "";
				}
			
			// Peso talla XL R
				function serializarTallaxlR(event){
					var i=document.getElementById("serializarTxlR").value = "serializarTxlR";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTxlR").value = "";
				}
			
			// Stock inicial talla XL
				function serializarStockInicialTallaxl(event){
					var i=document.getElementById("serializadoStockInicialTxl").value = "serializadoStockInicialTxl";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialTxl").value = "";
				}

			// Stock actual talla XL
				function serializarStockTallaxl(event){
					var i=document.getElementById("serializadoStockTxl").value = "serializadoStockTxl";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockTxl").value = "";
				}

		// TALLA 8
			// Peso talla 8
				function serializarTalla8(event){
					var i=document.getElementById("serializarT8").value = "serializarT8";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT8").value = "";
				}
			
			// Peso talla 8 R
				function serializarTalla8R(event){
					var i=document.getElementById("serializarT8R").value = "serializarT8R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT8R").value = "";
				}
			
			// Stock inicial talla 8
				function serializarStockInicialTalla8(event){
					var i=document.getElementById("serializadoStockInicialT8").value = "serializadoStockInicialT8";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT8").value = "";
				}

			// Stock actual talla 8
				function serializarStockTalla8(event){
					var i=document.getElementById("serializadoStockT8").value = "serializadoStockT8";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT8").value = "";
				}

		// TALLA 20
			// Peso talla 20
				function serializarTalla20(event){
					var i=document.getElementById("serializarT20").value = "serializarT20";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT20").value = "";
				}
			
			// Peso talla 20 R
				function serializarTalla20R(event){
					var i=document.getElementById("serializarT20R").value = "serializarT20R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT20R").value = "";
				}
			
			// Stock inicial talla 20
				function serializarStockInicialTalla20(event){
					var i=document.getElementById("serializadoStockInicialT20").value = "serializadoStockInicialT20";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT20").value = "";
				}

			// Stock actual talla 20
				function serializarStockTalla20(event){
					var i=document.getElementById("serializadoStockT20").value = "serializadoStockT20";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT20").value = "";
				}

		// TALLA 36
			// Peso talla 36
				function serializarTalla36(event){
					var i=document.getElementById("serializarT36").value = "serializarT36";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT36").value = "";
				}
			
			// Peso talla 36 R
				function serializarTalla36R(event){
					var i=document.getElementById("serializarT36R").value = "serializarT36R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT36R").value = "";
				}
			
			// Stock inicial talla 36
				function serializarStockInicialTalla36(event){
					var i=document.getElementById("serializadoStockInicialT36").value = "serializadoStockInicialT36";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT36").value = "";
				}

			// Stock actual talla 36
				function serializarStockTalla36(event){
					var i=document.getElementById("serializadoStockT36").value = "serializadoStockT36";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT36").value = "";
				}

		// TALLA U
			// Peso talla U
				function serializarTallau(event){
					var i=document.getElementById("serializarTu").value = "serializarTu";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTu").value = "";
				}
			
			// Peso talla U R
				function serializarTallauR(event){
					var i=document.getElementById("serializarTuR").value = "serializarTuR";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTuR").value = "";
				}
			
			// Stock inicial talla U
				function serializarStockInicialTallau(event){
					var i=document.getElementById("serializadoStockInicialTu").value = "serializadoStockInicialTu";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialTu").value = "";
				}

			// Stock actual talla U
				function serializarStockTallau(event){
					var i=document.getElementById("serializadoStockTu").value = "serializadoStockTu";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockTu").value = "";
				}

		// TALLA 10
			// Peso talla 10
				function serializarTalla10(event){
					var i=document.getElementById("serializarT10").value = "serializarT10";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT10").value = "";
				}
			
			// Peso talla 10 R
				function serializarTalla10R(event){
					var i=document.getElementById("serializarT10R").value = "serializarT10R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT10R").value = "";
				}
			
			// Stock inicial talla 10
				function serializarStockInicialTalla10(event){
					var i=document.getElementById("serializadoStockInicialT10").value = "serializadoStockInicialT10";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT10").value = "";
				}

			// Stock actual talla 10
				function serializarStockTalla10(event){
					var i=document.getElementById("serializadoStockT10").value = "serializadoStockT10";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT10").value = "";
				}

		// TALLA 26
			// Peso talla 26
				function serializarTalla26(event){
					var i=document.getElementById("serializarT26").value = "serializarT26";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT26").value = "";
				}
			
			// Peso talla 26 R
				function serializarTalla26R(event){
					var i=document.getElementById("serializarT26R").value = "serializarT26R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT26R").value = "";
				}
			
			// Stock inicial talla 26
				function serializarStockInicialTalla26(event){
					var i=document.getElementById("serializadoStockInicialT26").value = "serializadoStockInicialT26";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT26").value = "";
				}

			// Stock actual talla 26
				function serializarStockTalla26(event){
					var i=document.getElementById("serializadoStockT26").value = "serializadoStockT26";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT26").value = "";
				}

		// TALLA 38
			// Peso talla 38
				function serializarTalla38(event){
					var i=document.getElementById("serializarT38").value = "serializarT38";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT38").value = "";
				}
			
			// Peso talla 38 R
				function serializarTalla38R(event){
					var i=document.getElementById("serializarT38R").value = "serializarT38R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT38R").value = "";
				}
			
			// Stock inicial talla 38
				function serializarStockInicialTalla38(event){
					var i=document.getElementById("serializadoStockInicialT38").value = "serializadoStockInicialT38";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT38").value = "";
				}

			// Stock actual talla 38
				function serializarStockTalla38(event){
					var i=document.getElementById("serializadoStockT38").value = "serializadoStockT38";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT38").value = "";
				}

		// TALLA EST
			// Peso talla EST
				function serializarTallaest(event){
					var i=document.getElementById("serializarTest").value = "serializarTest";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTest").value = "";
				}
			
			// Peso talla EST R
				function serializarTallaestR(event){
					var i=document.getElementById("serializarTestR").value = "serializarTestR";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTestR").value = "";
				}
			
			// Stock inicial talla EST
				function serializarStockInicialTallaest(event){
					var i=document.getElementById("serializadoStockInicialTest").value = "serializadoStockInicialTest";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialTest").value = "";
				}

			// Stock actual talla EST
				function serializarStockTallaest(event){
					var i=document.getElementById("serializadoStockTest").value = "serializadoStockTest";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockTest").value = "";
				}

		// TALLA 12
			// Peso talla 12
				function serializarTalla12(event){
					var i=document.getElementById("serializarT12").value = "serializarT12";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT12").value = "";
				}
			
			// Peso talla 12 R
				function serializarTalla12R(event){
					var i=document.getElementById("serializarT12R").value = "serializarT12R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT12R").value = "";
				}
			
			// Stock inicial talla 12
				function serializarStockInicialTalla12(event){
					var i=document.getElementById("serializadoStockInicialT12").value = "serializadoStockInicialT12";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT12").value = "";
				}

			// Stock actual talla 12
				function serializarStockTalla12(event){
					var i=document.getElementById("serializadoStockT12").value = "serializadoStockT12";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT12").value = "";
				}

		// TALLA 28
			// Peso talla 28
				function serializarTalla28(event){
					var i=document.getElementById("serializarT28").value = "serializarT28";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT28").value = "";
				}
			
			// Peso talla 28 R
				function serializarTalla28R(event){
					var i=document.getElementById("serializarT28R").value = "serializarT28R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT28R").value = "";
				}
			
			// Stock inicial talla 28
				function serializarStockInicialTalla28(event){
					var i=document.getElementById("serializadoStockInicialT28").value = "serializadoStockInicialT28";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT28").value = "";
				}

			// Stock actual talla 28
				function serializarStockTalla28(event){
					var i=document.getElementById("serializadoStockT28").value = "serializadoStockT28";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT28").value = "";
				}

		// TALLA S
			// Peso talla S
				function serializarTallas(event){
					var i=document.getElementById("serializarTs").value = "serializarTs";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTs").value = "";
				}
			
			// Peso talla S R
				function serializarTallasR(event){
					var i=document.getElementById("serializarTsR").value = "serializarTsR";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTsR").value = "";
				}
			
			// Stock inicial talla S
				function serializarStockInicialTallas(event){
					var i=document.getElementById("serializadoStockInicialTs").value = "serializadoStockInicialTs";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialTs").value = "";
				}

			// Stock actual talla S
				function serializarStockTallas(event){
					var i=document.getElementById("serializadoStockTs").value = "serializadoStockTs";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockTs").value = "";
				}

		// TALLA 14
			// Peso talla 14
				function serializarTalla14(event){
					var i=document.getElementById("serializarT14").value = "serializarT14";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT14").value = "";
				}
			
			// Peso talla 14 R
				function serializarTalla14R(event){
					var i=document.getElementById("serializarT14R").value = "serializarT14R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT14R").value = "";
				}
			
			// Stock inicial talla 14
				function serializarStockInicialTalla14(event){
					var i=document.getElementById("serializadoStockInicialT14").value = "serializadoStockInicialT14";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT14").value = "";
				}

			// Stock actual talla 14
				function serializarStockTalla14(event){
					var i=document.getElementById("serializadoStockT14").value = "serializadoStockT14";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT14").value = "";
				}

		// TALLA 30
			// Peso talla 30
				function serializarTalla30(event){
					var i=document.getElementById("serializarT30").value = "serializarT30";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT30").value = "";
				}
			
			// Peso talla 30 R
				function serializarTalla30R(event){
					var i=document.getElementById("serializarT30R").value = "serializarT30R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT30R").value = "";
				}
			
			// Stock inicial talla 30
				function serializarStockInicialTalla30(event){
					var i=document.getElementById("serializadoStockInicialT30").value = "serializadoStockInicialT30";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT30").value = "";
				}

			// Stock actual talla 30
				function serializarStockTalla30(event){
					var i=document.getElementById("serializadoStockT30").value = "serializadoStockT30";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT30").value = "";
				}

		// TALLA M
			// Peso talla M
				function serializarTallam(event){
					var i=document.getElementById("serializarTm").value = "serializarTm";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTm").value = "";
				}
			
			// Peso talla M R
				function serializarTallamR(event){
					var i=document.getElementById("serializarTmR").value = "serializarTmR";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTmR").value = "";
				}
			
			// Stock inicial talla M
				function serializarStockInicialTallam(event){
					var i=document.getElementById("serializadoStockInicialTm").value = "serializadoStockInicialTm";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialTm").value = "";
				}

			// Stock actual talla M
				function serializarStockTallam(event){
					var i=document.getElementById("serializadoStockTm").value = "serializadoStockTm";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockTm").value = "";
				}

		// TALLA 16
			// Peso talla 16
				function serializarTalla16(event){
					var i=document.getElementById("serializarT16").value = "serializarT16";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT16").value = "";
				}
			
			// Peso talla 16 R
				function serializarTalla16R(event){
					var i=document.getElementById("serializarT16R").value = "serializarT16R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT16R").value = "";
				}
			
			// Stock inicial talla 16
				function serializarStockInicialTalla16(event){
					var i=document.getElementById("serializadoStockInicialT16").value = "serializadoStockInicialT16";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT16").value = "";
				}

			// Stock actual talla 16
				function serializarStockTalla16(event){
					var i=document.getElementById("serializadoStockT16").value = "serializadoStockT16";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT16").value = "";
				}

		// TALLA 32
			// Peso talla 32
				function serializarTalla32(event){
					var i=document.getElementById("serializarT32").value = "serializarT32";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT32").value = "";
				}
			
			// Peso talla 32 R
				function serializarTalla32R(event){
					var i=document.getElementById("serializarT32R").value = "serializarT32R";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarT32R").value = "";
				}
			
			// Stock inicial talla 32
				function serializarStockInicialTalla32(event){
					var i=document.getElementById("serializadoStockInicialT32").value = "serializadoStockInicialT32";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialT32").value = "";
				}

			// Stock actual talla 32
				function serializarStockTalla32(event){
					var i=document.getElementById("serializadoStockT32").value = "serializadoStockT32";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockT32").value = "";
				}

		// TALLA l
			// Peso talla L
				function serializarTallal(event){
					var i=document.getElementById("serializarTl").value = "serializarTl";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTl").value = "";
				}
			
			// Peso talla L R
				function serializarTallalR(event){
					var i=document.getElementById("serializarTlR").value = "serializarTlR";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializarTlR").value = "";
				}
			
			// Stock inicial talla L
				function serializarStockInicialTallal(event){
					var i=document.getElementById("serializadoStockInicialTl").value = "serializadoStockInicialTl";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockInicialTl").value = "";
				}

			// Stock actual talla L
				function serializarStockTallal(event){
					var i=document.getElementById("serializadoStockTl").value = "serializadoStockTl";
					document.getElementById("enviarF").click();
					var i=document.getElementById("serializadoStockTl").value = "";
				}

	// Funciones de teclado

		function onKeyDownHandler(event) {

			var codigo = event.which || event.keyCode;

			console.log(codigo);

			if(codigo === 119){

				const boton6 = document.getElementById("talla6Ingreso");
				boton6.style.backgroundColor = '#F08080';

				const boton18 = document.getElementById("talla18Ingreso");
				boton18.style.backgroundColor = '#F08080';

				const boton34 = document.getElementById("talla34Ingreso");
				boton34.style.backgroundColor = '#F08080';

				const botonxl = document.getElementById("tallaxlIngreso");
				botonxl.style.backgroundColor = '#F08080';

				const boton8 = document.getElementById("talla8Ingreso");
				boton8.style.backgroundColor = '#F08080';

				const boton20 = document.getElementById("talla20Ingreso");
				boton20.style.backgroundColor = '#F08080';

				const boton36 = document.getElementById("talla36Ingreso");
				boton36.style.backgroundColor = '#F08080';

				const botonu = document.getElementById("tallauIngreso");
				botonu.style.backgroundColor = '#F08080';

				const boton10 = document.getElementById("talla10Ingreso");
				boton10.style.backgroundColor = '#F08080';

				const boton26 = document.getElementById("talla26Ingreso");
				boton26.style.backgroundColor = '#F08080';

				const boton38 = document.getElementById("talla38Ingreso");
				boton38.style.backgroundColor = '#F08080';

				const botonest = document.getElementById("tallaestIngreso");
				botonest.style.backgroundColor = '#F08080';

				const boton12 = document.getElementById("talla12Ingreso");
				boton12.style.backgroundColor = '#F08080';

				const boton28 = document.getElementById("talla28Ingreso");
				boton28.style.backgroundColor = '#F08080';

				const botons = document.getElementById("tallasIngreso");
				botons.style.backgroundColor = '#F08080';

				const boton14 = document.getElementById("talla14Ingreso");
				boton14.style.backgroundColor = '#F08080';

				const boton30 = document.getElementById("talla30Ingreso");
				boton30.style.backgroundColor = '#F08080';

				const botonm = document.getElementById("tallamIngreso");
				botonm.style.backgroundColor = '#F08080';

				const boton16 = document.getElementById("talla16Ingreso");
				boton16.style.backgroundColor = '#F08080';

				const boton32 = document.getElementById("talla32Ingreso");
				boton32.style.backgroundColor = '#F08080';

				const botonl = document.getElementById("tallalIngreso");
				botonl.style.backgroundColor = '#F08080';

			}

			if(codigo === 17){
				var i=document.getElementById("botonEnviarF").value = "verificarInventario";
				var opcion = confirm("Seguro que quiere reinventariar la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				alert("Los cambios no se realizaron");
				}
			
			}

			if(codigo === 16){
				var i=document.getElementById("botonEnviarF").value = "actualizarDirectoSTOCK";
				var opcion = confirm("Seguro que quiere actualizar directamente el STOCK de la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				}
			}

			if(codigo === 20){
				var i=document.getElementById("botonEnviarF").value = "actualizarDirectoPeso";
				var opcion = confirm("Seguro que quiere actualizar directamente el Peso inicial de la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				}
			}

			if(codigo === 18){
				
				var i=document.getElementById("botonEnviarF").value = "actualizarDirectoSTOCKinicial";
				var opcion = confirm("Seguro que quiere actualizar directamente el stock inicial de la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				}
			}

			if(codigo == 65){

				var i=document.getElementById("botonEnviarF").value = "sumarPeso";
				document.getElementById("enviarF").click();
				
			}
		}

	//fin
</script>