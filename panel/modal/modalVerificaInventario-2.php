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
			<br>
			<br>
			<div class="col-sm-12">
				<img src="../../imagenes/bascula-15kg.jpg" alt="" width="100px" style="float: right;">
				<p style="float: right; color: crimson;">Debes de pesar la referencia por talla. <br>toda la cantidad de prendas por talla ingresada debe ser pesada.</p>
			<?php
			foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $keyV) {
			?>		
				<h4>Estado de Validacion de entrada a Bodega: <?php echo $keyV['verificado_bodega'] == 'SI'? '<strong style="background-color: green;">VALIDADO</strong>':'<strong style="background-color: orange;">NO VALIDADO</strong>'; ?></h4>
				
			<?php 
			}
			?>
			</div>
			<div class="col-sm-4">
			
			</div>
			<div class="col-sm-4">
			<?php
				if (@$_POST['accion'] == 'verificarInventario') {

					// Talla 6

						if(@$_POST['talla6Ingreso'] == 0 || @$_POST['talla6Subida'] == NULL){

							$cantidadIngresadaTalla6 = 0;
							$cantidadFaltanteTalla6 = @$_POST['talla6Subida'] - $cantidadIngresadaTalla6;

						}else{

							// Precio unitario Talla6
							$precioUnitarioTalla6 = @$_POST['pesoTalla6Subida'] / @$_POST['talla6Subida'];

							// Cantidad ingresada Talla 6
							$cantidadIngresadaTalla6 = @$_POST['talla6Ingreso'] / $precioUnitarioTalla6;
							$cantidadIngresadaTalla6 = round($cantidadIngresadaTalla6);

							// Cantidad Faltante Talla 6
							$cantidadFaltanteTalla6 = @$_POST['talla6Subida'] - $cantidadIngresadaTalla6;
							$cantidadFaltanteTalla6 = round($cantidadFaltanteTalla6);

						}

						
						
					
					// Talla 8
					
						if(@$_POST['talla8Ingreso'] == 0 || @$_POST['talla8Ingreso'] == ''){

							$cantidadIngresadaTalla8 = 0;
							$cantidadFaltanteTalla8 = @$_POST['talla8Subida'] - $cantidadIngresadaTalla8;

						}else{

							// Precio unitario Talla8
							$precioUnitarioTalla8 = @$_POST['pesoTalla8Subida'] / @$_POST['talla8Subida'];

							// Cantidad ingresada Talla 8
							$cantidadIngresadaTalla8 = @$_POST['talla8Ingreso'] / $precioUnitarioTalla8;
							$cantidadIngresadaTalla8 = round($cantidadIngresadaTalla8);

							// Cantidad Faltante Talla 8
							$cantidadFaltanteTalla8 = @$_POST['talla8Subida'] - $cantidadIngresadaTalla8;
							$cantidadFaltanteTalla8 = round($cantidadFaltanteTalla8);
							
						}

					// Talla 10
					
						if(@$_POST['talla10Ingreso'] == 0 || @$_POST['talla10Ingreso'] == ''){

							$cantidadIngresadaTalla10 = 0;
							$cantidadFaltanteTalla10 = @$_POST['talla10Subida'] - $cantidadIngresadaTalla10;

						}else{

							// Precio unitario Talla10
							$precioUnitarioTalla10 = @$_POST['pesoTalla10Subida'] / @$_POST['talla10Subida'];

							// Cantidad ingresada Talla 10
							$cantidadIngresadaTalla10 = @$_POST['talla10Ingreso'] / $precioUnitarioTalla10;
							$cantidadIngresadaTalla10 = round($cantidadIngresadaTalla10);

							// Cantidad Faltante Talla 10
							$cantidadFaltanteTalla10 = @$_POST['talla10Subida'] - $cantidadIngresadaTalla10;
							$cantidadFaltanteTalla10 = round($cantidadFaltanteTalla10);
							
						}

					// Talla 12
					
						if(@$_POST['talla12Ingreso'] == 0 || @$_POST['talla12Ingreso'] == ''){

							$cantidadIngresadaTalla12 = 0;
							$cantidadFaltanteTalla12 = @$_POST['talla12Subida'] - $cantidadIngresadaTalla12;

						}else{

							// Precio unitario Talla12
							$precioUnitarioTalla12 = @$_POST['pesoTalla12Subida'] / @$_POST['talla12Subida'];

							// Cantidad ingresada Talla 12
							$cantidadIngresadaTalla12 = @$_POST['talla12Ingreso'] / $precioUnitarioTalla12;
							$cantidadIngresadaTalla12 = round($cantidadIngresadaTalla12);

							// Cantidad Faltante Talla 12
							$cantidadFaltanteTalla12 = @$_POST['talla12Subida'] - $cantidadIngresadaTalla12;
							$cantidadFaltanteTalla12 = round($cantidadFaltanteTalla12);
							
						}

					// Talla 14
					
						if(@$_POST['talla14Ingreso'] == 0 || @$_POST['talla14Ingreso'] == ''){

							$cantidadIngresadaTalla14 = 0;
							$cantidadFaltanteTalla14 = @$_POST['talla14Subida'] - $cantidadIngresadaTalla14;

						}else{

							// Precio unitario Talla14
							$precioUnitarioTalla14 = @$_POST['pesoTalla14Subida'] / @$_POST['talla14Subida'];

							// Cantidad ingresada Talla 14
							$cantidadIngresadaTalla14 = @$_POST['talla14Ingreso'] / $precioUnitarioTalla14;
							$cantidadIngresadaTalla14 = round($cantidadIngresadaTalla14);

							// Cantidad Faltante Talla 14
							$cantidadFaltanteTalla14 = @$_POST['talla14Subida'] - $cantidadIngresadaTalla14;
							$cantidadFaltanteTalla14 = round($cantidadFaltanteTalla14);
							
						}

					// Talla 16
						
						if(@$_POST['talla16Ingreso'] == 0 || @$_POST['talla16Ingreso'] == ''){

							$cantidadIngresadaTalla16 = 0;
							$cantidadFaltanteTalla16 = @$_POST['talla16Subida'] - $cantidadIngresadaTalla16;

						}else{

							// Precio unitario Talla16
							$precioUnitarioTalla16 = @$_POST['pesoTalla16Subida'] / @$_POST['talla16Subida'];

							// Cantidad ingresada Talla 16
							$cantidadIngresadaTalla16 = @$_POST['talla16Ingreso'] / $precioUnitarioTalla16;
							$cantidadIngresadaTalla16 = round($cantidadIngresadaTalla16);

							// Cantidad Faltante Talla 16
							$cantidadFaltanteTalla16 = @$_POST['talla16Subida'] - $cantidadIngresadaTalla16;
							$cantidadFaltanteTalla16 = round($cantidadFaltanteTalla16);
							
						}

					// Talla 18
					
						if(@$_POST['talla18Ingreso'] == 0 || @$_POST['talla18Ingreso'] == ''){

							$cantidadIngresadaTalla18 = 0;
							$cantidadFaltanteTalla18 = @$_POST['talla18Subida'] - $cantidadIngresadaTalla18;

						}else{

							// Precio unitario Talla18
							$precioUnitarioTalla18 = @$_POST['pesoTalla18Subida'] / @$_POST['talla18Subida'];

							// Cantidad ingresada Talla 18
							$cantidadIngresadaTalla18 = @$_POST['talla18Ingreso'] / $precioUnitarioTalla18;
							$cantidadIngresadaTalla18 = round($cantidadIngresadaTalla18);

							// Cantidad Faltante Talla 18
							$cantidadFaltanteTalla18 = @$_POST['talla18Subida'] - $cantidadIngresadaTalla18;
							$cantidadFaltanteTalla18 = round($cantidadFaltanteTalla18);
							
						}

					// Talla 20
					
						if(@$_POST['talla20Ingreso'] == 0 || @$_POST['talla20Ingreso'] == ''){

							$cantidadIngresadaTalla20 = 0;
							$cantidadFaltanteTalla20 = @$_POST['talla20Subida'] - $cantidadIngresadaTalla20;

						}else{

							// Precio unitario Talla20
							$precioUnitarioTalla20 = @$_POST['pesoTalla20Subida'] / @$_POST['talla20Subida'];

							// Cantidad ingresada Talla 20
							$cantidadIngresadaTalla20 = @$_POST['talla20Ingreso'] / $precioUnitarioTalla20;
							$cantidadIngresadaTalla20 = round($cantidadIngresadaTalla20);

							// Cantidad Faltante Talla 20
							$cantidadFaltanteTalla20 = @$_POST['talla20Subida'] - $cantidadIngresadaTalla20;
							$cantidadFaltanteTalla20 = round($cantidadFaltanteTalla20);
							
						}

					// Talla 26
					
						if(@$_POST['talla26Ingreso'] == 0 || @$_POST['talla26Ingreso'] == ''){

							$cantidadIngresadaTalla26 = 0;
							$cantidadFaltanteTalla26 = @$_POST['talla26Subida'] - $cantidadIngresadaTalla26;

						}else{

							// Precio unitario Talla26
							$precioUnitarioTalla26 = @$_POST['pesoTalla26Subida'] / @$_POST['talla26Subida'];

							// Cantidad ingresada Talla 26
							$cantidadIngresadaTalla26 = @$_POST['talla26Ingreso'] / $precioUnitarioTalla26;
							$cantidadIngresadaTalla26 = round($cantidadIngresadaTalla26);

							// Cantidad Faltante Talla 26
							$cantidadFaltanteTalla26 = @$_POST['talla26Subida'] - $cantidadIngresadaTalla26;
							$cantidadFaltanteTalla26 = round($cantidadFaltanteTalla26);
							
						}

					// Talla 28
					
						if(@$_POST['talla28Ingreso'] == 0 || @$_POST['talla28Ingreso'] == ''){

							$cantidadIngresadaTalla28 = 0;
							$cantidadFaltanteTalla28 = @$_POST['talla28Subida'] - $cantidadIngresadaTalla28;

						}else{

							// Precio unitario Talla28
							$precioUnitarioTalla28 = @$_POST['pesoTalla28Subida'] / @$_POST['talla28Subida'];

							// Cantidad ingresada Talla 28
							$cantidadIngresadaTalla28 = @$_POST['talla28Ingreso'] / $precioUnitarioTalla28;
							$cantidadIngresadaTalla28 = round($cantidadIngresadaTalla28);

							// Cantidad Faltante Talla 28
							$cantidadFaltanteTalla28 = @$_POST['talla28Subida'] - $cantidadIngresadaTalla28;
							$cantidadFaltanteTalla28 = round($cantidadFaltanteTalla28);
							
						}

					// Talla 30
					
						if(@$_POST['talla30Ingreso'] == 0 || @$_POST['talla30Ingreso'] == ''){

							$cantidadIngresadaTalla30 = 0;
							$cantidadFaltanteTalla30 = @$_POST['talla30Subida'] - $cantidadIngresadaTalla30;

						}else{

							// Precio unitario Talla30
							$precioUnitarioTalla30 = @$_POST['pesoTalla30Subida'] / @$_POST['talla30Subida'];

							// Cantidad ingresada Talla 30
							$cantidadIngresadaTalla30 = @$_POST['talla30Ingreso'] / $precioUnitarioTalla30;
							$cantidadIngresadaTalla30 = round($cantidadIngresadaTalla30);

							// Cantidad Faltante Talla 30
							$cantidadFaltanteTalla30 = @$_POST['talla30Subida'] - $cantidadIngresadaTalla30;
							$cantidadFaltanteTalla30 = round($cantidadFaltanteTalla30);
							
						}

					// Talla 32
					
						if(@$_POST['talla32Ingreso'] == 0 || @$_POST['talla32Ingreso'] == ''){

							$cantidadIngresadaTalla32 = 0;
							$cantidadFaltanteTalla32 = @$_POST['talla32Subida'] - $cantidadIngresadaTalla32;

						}else{

							// Precio unitario Talla32
							$precioUnitarioTalla32 = @$_POST['pesoTalla32Subida'] / @$_POST['talla32Subida'];

							// Cantidad ingresada Talla 32
							$cantidadIngresadaTalla32 = @$_POST['talla32Ingreso'] / $precioUnitarioTalla32;
							$cantidadIngresadaTalla32 = round($cantidadIngresadaTalla32);

							// Cantidad Faltante Talla 32
							$cantidadFaltanteTalla32 = @$_POST['talla32Subida'] - $cantidadIngresadaTalla32;
							$cantidadFaltanteTalla32 = round($cantidadFaltanteTalla32);
							
						}

					// Talla 34
					
						if(@$_POST['talla34Ingreso'] == 0 || @$_POST['talla34Ingreso'] == ''){

							$cantidadIngresadaTalla34 = 0;
							$cantidadFaltanteTalla34 = @$_POST['talla34Subida'] - $cantidadIngresadaTalla34;

						}else{

							// Precio unitario Talla34
							$precioUnitarioTalla34 = @$_POST['pesoTalla34Subida'] / @$_POST['talla34Subida'];

							// Cantidad ingresada Talla 34
							$cantidadIngresadaTalla34 = @$_POST['talla34Ingreso'] / $precioUnitarioTalla34;
							$cantidadIngresadaTalla34 = round($cantidadIngresadaTalla34);

							// Cantidad Faltante Talla 34
							$cantidadFaltanteTalla34 = @$_POST['talla34Subida'] - $cantidadIngresadaTalla34;
							$cantidadFaltanteTalla34 = round($cantidadFaltanteTalla34);
							
						}

					// Talla 36
					
						if(@$_POST['talla36Ingreso'] == 0 || @$_POST['talla36Ingreso'] == ''){

							$cantidadIngresadaTalla36 = 0;
							$cantidadFaltanteTalla36 = @$_POST['talla36Subida'] - $cantidadIngresadaTalla36;

						}else{

							// Precio unitario Talla36
							$precioUnitarioTalla36 = @$_POST['pesoTalla36Subida'] / @$_POST['talla36Subida'];

							// Cantidad ingresada Talla 36
							$cantidadIngresadaTalla36 = @$_POST['talla36Ingreso'] / $precioUnitarioTalla36;
							$cantidadIngresadaTalla36 = round($cantidadIngresadaTalla36);

							// Cantidad Faltante Talla 36
							$cantidadFaltanteTalla36 = @$_POST['talla36Subida'] - $cantidadIngresadaTalla36;
							$cantidadFaltanteTalla36 = round($cantidadFaltanteTalla36);
							
						}

					// Talla 38
					
						if(@$_POST['talla38Ingreso'] == 0 || @$_POST['talla38Ingreso'] == ''){

							$cantidadIngresadaTalla38 = 0;
							$cantidadFaltanteTalla38 = @$_POST['talla38Subida'] - $cantidadIngresadaTalla38;

						}else{

							// Precio unitario Talla38
							$precioUnitarioTalla38 = @$_POST['pesoTalla38Subida'] / @$_POST['talla38Subida'];

							// Cantidad ingresada Talla 38
							$cantidadIngresadaTalla38 = @$_POST['talla38Ingreso'] / $precioUnitarioTalla38;
							$cantidadIngresadaTalla38 = round($cantidadIngresadaTalla38);

							// Cantidad Faltante Talla 38
							$cantidadFaltanteTalla38 = @$_POST['talla38Subida'] - $cantidadIngresadaTalla38;
							$cantidadFaltanteTalla38 = round($cantidadFaltanteTalla38);
							
						}

					// Talla S
					
						if(@$_POST['tallasIngreso'] == 0 || @$_POST['tallasIngreso'] == ''){

							$cantidadIngresadaTallas = 0;
							$cantidadFaltanteTallas = @$_POST['tallasSubida'] - $cantidadIngresadaTallas;

						}else{

							// Precio unitario Tallas
							$precioUnitarioTallas = @$_POST['pesoTallasSubida'] / @$_POST['tallasSubida'];

							// Cantidad ingresada Talla s
							$cantidadIngresadaTallas = @$_POST['tallasIngreso'] / $precioUnitarioTallas;
							$cantidadIngresadaTallas = round($cantidadIngresadaTallas);

							// Cantidad Faltante Talla s
							$cantidadFaltanteTallas = @$_POST['tallasSubida'] - $cantidadIngresadaTallas;
							$cantidadFaltanteTallas = round($cantidadFaltanteTallas);
							
						}
					
					// Talla M
					
						if(@$_POST['tallamIngreso'] == 0 || @$_POST['tallamIngreso'] == ''){

							$cantidadIngresadaTallam = 0;
							$cantidadFaltanteTallam = @$_POST['tallamSubida'] - $cantidadIngresadaTallam;

						}else{

							// Precio unitario Tallam
							$precioUnitarioTallam = @$_POST['pesoTallamSubida'] / @$_POST['tallamSubida'];

							// Cantidad ingresada Talla m
							$cantidadIngresadaTallam = @$_POST['tallamIngreso'] / $precioUnitarioTallam;
							$cantidadIngresadaTallam = round($cantidadIngresadaTallam);

							// Cantidad Faltante Talla m
							$cantidadFaltanteTallam = @$_POST['tallamSubida'] - $cantidadIngresadaTallam;
							$cantidadFaltanteTallam = round($cantidadFaltanteTallam);
							
						}

					// Talla L
					
						if(@$_POST['tallalIngreso'] == 0 || @$_POST['tallalIngreso'] == ''){

							$cantidadIngresadaTallal = 0;
							$cantidadFaltanteTallal = @$_POST['tallalSubida'] - $cantidadIngresadaTallal;

						}else{

							// Precio unitario Tallal
							$precioUnitarioTallal = @$_POST['pesoTallalSubida'] / @$_POST['tallalSubida'];

							// Cantidad ingresada Talla l
							$cantidadIngresadaTallal = @$_POST['tallalIngreso'] / $precioUnitarioTallal;
							$cantidadIngresadaTallal = round($cantidadIngresadaTallal);

							// Cantidad Faltante Talla l
							$cantidadFaltanteTallal = @$_POST['tallalSubida'] - $cantidadIngresadaTallal;
							$cantidadFaltanteTallal = round($cantidadFaltanteTallal);
							
						}

					// Talla XL
					
						if(@$_POST['tallaxlIngreso'] == 0 || @$_POST['tallaxlIngreso'] == ''){

							$cantidadIngresadaTallaxl = 0;
							$cantidadFaltanteTallaxl = @$_POST['tallaxlSubida'] - $cantidadIngresadaTallaxl;

						}else{

							// Precio unitario Tallaxl
							$precioUnitarioTallaxl = @$_POST['pesoTallaxlSubida'] / @$_POST['tallaxlSubida'];

							// Cantidad ingresada Talla xl
							$cantidadIngresadaTallaxl = @$_POST['tallaxlIngreso'] / $precioUnitarioTallaxl;
							$cantidadIngresadaTallaxl = round($cantidadIngresadaTallaxl);

							// Cantidad Faltante Talla xl
							$cantidadFaltanteTallaxl = @$_POST['tallaxlSubida'] - $cantidadIngresadaTallaxl;
							$cantidadFaltanteTallaxl = round($cantidadFaltanteTallaxl);
							
						}

					// Talla U
					
						if(@$_POST['tallauIngreso'] == 0 || @$_POST['tallauIngreso'] == ''){

							$cantidadIngresadaTallau = 0;
							$cantidadFaltanteTallau = @$_POST['tallauSubida'] - $cantidadIngresadaTallau;

						}else{

							// Precio unitario Tallau
							$precioUnitarioTallau = @$_POST['pesoTallauSubida'] / @$_POST['tallauSubida'];

							// Cantidad ingresada Talla u
							$cantidadIngresadaTallau = @$_POST['tallauIngreso'] / $precioUnitarioTallau;
							$cantidadIngresadaTallau = round($cantidadIngresadaTallau);

							// Cantidad Faltante Talla u
							$cantidadFaltanteTallau = @$_POST['tallauSubida'] - $cantidadIngresadaTallau;
							$cantidadFaltanteTallau = round($cantidadFaltanteTallau);
							
						}

					// Talla EST
					
						if(@$_POST['tallaestIngreso'] == 0 || @$_POST['tallaestIngreso'] == ''){

							$cantidadIngresadaTallaest = 0;
							$cantidadFaltanteTallaest = @$_POST['tallaestSubida'] - $cantidadIngresadaTallaest;

						}else{

							// Precio unitario Tallaest
							$precioUnitarioTallaest = @$_POST['pesoTallaestSubida'] / @$_POST['tallaestSubida'];

							// Cantidad ingresada Talla est
							$cantidadIngresadaTallaest = @$_POST['tallaestIngreso'] / $precioUnitarioTallaest;
							$cantidadIngresadaTallaest = round($cantidadIngresadaTallaest);

							// Cantidad Faltante Talla est
							$cantidadFaltanteTallaest = @$_POST['tallaestSubida'] - $cantidadIngresadaTallaest;
							$cantidadFaltanteTallaest = round($cantidadFaltanteTallaest);
							
						}

					if (

						

						$cantidadIngresadaTalla6 == @$_POST['talla6Subida'] AND
						$cantidadIngresadaTalla8 == @$_POST['talla8Subida'] AND
						$cantidadIngresadaTalla10 == @$_POST['talla10Subida'] AND
						$cantidadIngresadaTalla12 == @$_POST['talla12Subida'] AND
						$cantidadIngresadaTalla14 == @$_POST['talla14Subida'] AND
						$cantidadIngresadaTalla16 == @$_POST['talla16Subida'] AND
						$cantidadIngresadaTalla18 == @$_POST['talla18Subida'] AND
						$cantidadIngresadaTalla20 == @$_POST['talla20Subida'] AND
						$cantidadIngresadaTalla26 == @$_POST['talla26Subida'] AND
						$cantidadIngresadaTalla28 == @$_POST['talla28Subida'] AND
						$cantidadIngresadaTalla30 == @$_POST['talla30Subida'] AND
						$cantidadIngresadaTalla32 == @$_POST['talla32Subida'] AND
						$cantidadIngresadaTalla34 == @$_POST['talla34Subida'] AND
						$cantidadIngresadaTalla36 == @$_POST['talla36Subida'] AND
						$cantidadIngresadaTalla38 == @$_POST['talla38Subida'] AND
						$cantidadIngresadaTallas == @$_POST['tallasSubida'] AND
						$cantidadIngresadaTallam == @$_POST['tallamSubida'] AND
						$cantidadIngresadaTallal == @$_POST['tallalSubida'] AND
						$cantidadIngresadaTallaxl == @$_POST['tallaxlSubida'] AND
						$cantidadIngresadaTallau == @$_POST['tallauSubida'] AND
						$cantidadIngresadaTallaest == @$_POST['tallaestSubida']

						

						) {
						echo "<h4 style='color:green;'>La actual entrada a bodega se ha verificado.</h4>";
							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET verificado_bodega = 'SI', estado = 'existencia' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);

							if($modules){ 
								$consultaDatos = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_GET['id_inventario'];
								$modulesDatos = $conexion->query($consultaDatos)->fetchAll();
								foreach ($modulesDatos as $value) {
									echo "<p>datos</p>";
									echo $referencia = $value['referencia'];
									echo $marca = $value['marca'];
									echo $descripcion = $value['descripcion'];
									echo $silueta = $value['silueta'];
									echo $categoria = $value['categoria'];
									echo $color = $value['color'];
									echo $tela = $value['tela'];
									echo $genero = $value['genero'];
									echo $tipo = $value['tipo'];
									echo $coleccion = $value['coleccion'];
									echo $bodega = $value['bodega'];
									echo $ruta = $value['ruta'];
									echo $proveedor = $value['proveedor'];
									echo $reprogramacion = $value['reprogramacion'];

									echo "<p>Pesos</p>";
									echo $peso_talla6 = $value['peso_talla6'];
									echo $peso_talla8 = $value['peso_talla8'];
									echo $peso_talla10 = $value['peso_talla10'];
									echo $peso_talla12 = $value['peso_talla12'];
									echo $peso_talla14 = $value['peso_talla14'];
									echo $peso_talla16 = $value['peso_talla16'];
									echo $peso_talla18 = $value['peso_talla18'];
									echo $peso_talla20 = $value['peso_talla20'];
									echo $peso_talla26 = $value['peso_talla26'];
									echo $peso_talla28 = $value['peso_talla28'];
									echo $peso_talla30 = $value['peso_talla30'];
									echo $peso_talla32 = $value['peso_talla32'];
									echo $peso_talla34 = $value['peso_talla34'];
									echo $peso_talla36 = $value['peso_talla36'];
									echo $peso_talla38 = $value['peso_talla38'];
									echo $peso_tallas = $value['peso_tallas'];
									echo $peso_tallam = $value['peso_tallam'];
									echo $peso_tallal = $value['peso_tallal'];
									echo $peso_tallaxl = $value['peso_tallaxl'];
									echo $peso_tallau = $value['peso_tallau'];
									echo $peso_tallaest = $value['peso_tallaest'];


									echo $estado = "INGRESADO A BODEGA";
									echo $usuario = $_SESSION['nombre'];
									echo $id_usuario = $_SESSION['id'];


									echo "<p>Cantidades</p>";

										echo $cantidadIngresadaTalla6;

										echo $cantidadIngresadaTalla8;
										echo $cantidadIngresadaTalla10;
										echo $cantidadIngresadaTalla12;
										echo $cantidadIngresadaTalla14;
										echo $cantidadIngresadaTalla16;
										echo $cantidadIngresadaTalla18;
										echo $cantidadIngresadaTalla20;
										echo $cantidadIngresadaTalla26;
										echo $cantidadIngresadaTalla28;
										echo $cantidadIngresadaTalla30;
										echo $cantidadIngresadaTalla32;
										echo $cantidadIngresadaTalla34;
										echo $cantidadIngresadaTalla36;
										echo $cantidadIngresadaTalla38;
										echo $cantidadIngresadaTallas;
										echo $cantidadIngresadaTallam;
										echo $cantidadIngresadaTallal;
										echo $cantidadIngresadaTallaxl;
										echo $cantidadIngresadaTallau;
										echo $cantidadIngresadaTallaest;
									



									$insertaHistorialEntrada = "INSERT INTO historial_entrada_bodega
									(
									 id_inventario_registrado,
									 referencia,
									 marca,
									 descripcion,
									 categoria,
									 silueta,
									 color,
									 tela,
									 genero,
									 tipo,
									 coleccion,
									 bodega,
									 ruta,
									 proveedor,
									 reprogramacion,
									 usuario,
									 id_usuario,
									 talla6,
									 talla8,
									 talla10,
									 talla12,
									 talla14,
									 talla16,
									 talla18,
									 talla20,
									 talla26,
									 talla28,
									 talla30,
									 talla32,
									 talla34,
									 talla36,
									 talla38,
									 tallas,
									 tallam,
									 tallal,
									 tallaxl,
									 tallau,
									 tallaest,
									 estado,
									 peso_talla6,
									 peso_talla8,
									 peso_talla10,
									 peso_talla12,
									 peso_talla14,
									 peso_talla16,
									 peso_talla18,
									 peso_talla20,
									 peso_talla26,
									 peso_talla28,
									 peso_talla30,
									 peso_talla32,
									 peso_talla34,
									 peso_talla36,
									 peso_talla38,
									 peso_tallas,
									 peso_tallam,
									 peso_tallal,
									 peso_tallaxl,
									 peso_tallau,
									 peso_tallaest
									 
									 ) 
							            VALUES(".$_GET['id_inventario'].",'".$referencia."','".$marca."','".$descripcion."','".$categoria."','".$silueta."','".$color."','".$tela."','".$genero."','".$tipo."','".$coleccion."','".$bodega."','".$ruta."','".$proveedor."','".$reprogramacion."','".$usuario."','".$id_usuario."',".$cantidadIngresadaTalla6.",".$cantidadIngresadaTalla8.",".$cantidadIngresadaTalla10.",".$cantidadIngresadaTalla12.",".$cantidadIngresadaTalla14.",".$cantidadIngresadaTalla16.",".$cantidadIngresadaTalla18.",".$cantidadIngresadaTalla20.",".$cantidadIngresadaTalla26.",".$cantidadIngresadaTalla28.",".$cantidadIngresadaTalla30.",".$cantidadIngresadaTalla32.",".$cantidadIngresadaTalla34.",".$cantidadIngresadaTalla36.",".$cantidadIngresadaTalla38.",".$cantidadIngresadaTallas.",".$cantidadIngresadaTallam.",".$cantidadIngresadaTallal.",".$cantidadIngresadaTallaxl.",".$cantidadIngresadaTallau.",".$cantidadIngresadaTallaest.",'".$estado."','".$peso_talla6."','".$peso_talla8."','".$peso_talla10."','".$peso_talla12."','".$peso_talla14."','".$peso_talla16."','".$peso_talla18."','".$peso_talla20."','".$peso_talla26."','".$peso_talla28."','".$peso_talla30."','".$peso_talla32."','".$peso_talla34."','".$peso_talla36."','".$peso_talla38."','".$peso_tallaTallas."','".$peso_tallam."','".$peso_tallal."','".$peso_tallaxl."','".$peso_tallau."','".$peso_tallaest."')";
							            $modulesHistorial = $conexion->query($insertaHistorialEntrada);
							            if ($modulesHistorial) {
							            	
							            	echo "<script> alert('Entrada a Bodega Verificada'); window.close(); </script>";
							            }
									
								}

								
								
								
								
							}
					} else if (
						$cantidadIngresadaTalla6 == @$_POST['talla6Subida'] ||
						$cantidadIngresadaTalla8 == @$_POST['talla8Subida'] ||
						$cantidadIngresadaTalla10 == @$_POST['talla10Subida'] ||
						$cantidadIngresadaTalla12 == @$_POST['talla12Subida'] ||
						$cantidadIngresadaTalla14 == @$_POST['talla14Subida'] ||
						$cantidadIngresadaTalla16 == @$_POST['talla16Subida'] ||
						$cantidadIngresadaTalla18 == @$_POST['talla18Subida'] ||
						$cantidadIngresadaTalla20 == @$_POST['talla20Subida'] ||
						$cantidadIngresadaTalla26 == @$_POST['talla26Subida'] ||
						$cantidadIngresadaTalla28 == @$_POST['talla28Subida'] ||
						$cantidadIngresadaTalla30 == @$_POST['talla30Subida'] ||
						$cantidadIngresadaTalla32 == @$_POST['talla32Subida'] ||
						$cantidadIngresadaTalla34 == @$_POST['talla34Subida'] ||
						$cantidadIngresadaTalla36 == @$_POST['talla36Subida'] ||
						$cantidadIngresadaTalla38 == @$_POST['talla38Subida'] ||
						$cantidadIngresadaTallas == @$_POST['tallasSubida'] ||
						$cantidadIngresadaTallam == @$_POST['tallamSubida'] ||
						$cantidadIngresadaTallal == @$_POST['tallalSubida'] ||
						$cantidadIngresadaTallaxl == @$_POST['tallaxlSubida'] ||
						$cantidadIngresadaTallau == @$_POST['tallauSubida'] ||
						$cantidadIngresadaTallaest == @$_POST['tallaestSubida']
						){
							
						echo "
							<form action='../actualizaInventarioPorBodega.php' method='post'>
							";
							echo "
							<label>Observacion inventario</label>
								<select name='observacion' class='form-control' required>
								<option value='PRENDAS EN ESTADO INPERFECTO'>PRENDAS EN ESTADO INPERFECTO</option>	
								<option value='PRENDAS FALTANTES'>PRENDAS FALTANTES</option>	
								<option value='PRENDAS DE MAS'>PRENDAS DE MAS</option>	
								</select>
								<br>
								<label>Observacion en Detalle</label> 
								<br>
								<textarea name='observacion_detalle' class='form-control'></textarea>
								<label>Cliente a cobrar:</label>
								<select name='cliente' class='form-control' required>
								";
								foreach ($clientes->seleccionarTerceroPorTipo('PROVEEDOR') as $key) {
									?>
									
									<option value='<?php echo $key['nombre_cli'] ?>'><?php echo $key['nombre_cli'] ?></option>
									<?php
										}
								echo "	
								</select>
							<br>
								<input type='hidden' name='talla6Ingreso' value='".$cantidadIngresadaTalla6."'>
								<input type='hidden' name='talla8Ingreso' value='".$cantidadIngresadaTalla8."'>
								<input type='hidden' name='talla10Ingreso' value='".$cantidadIngresadaTalla10."'>
								<input type='hidden' name='talla12Ingreso' value='".$cantidadIngresadaTalla12."'>
								<input type='hidden' name='talla14Ingreso' value='".$cantidadIngresadaTalla14."'>
								<input type='hidden' name='talla16Ingreso' value='".$cantidadIngresadaTalla16."'>
								<input type='hidden' name='talla18Ingreso' value='".$cantidadIngresadaTalla18."'>
								<input type='hidden' name='talla20Ingreso' value='".$cantidadIngresadaTalla20."'>
								<input type='hidden' name='talla26Ingreso' value='".$cantidadIngresadaTalla26."'>
								<input type='hidden' name='talla28Ingreso' value='".$cantidadIngresadaTalla28."'>
								<input type='hidden' name='talla30Ingreso' value='".$cantidadIngresadaTalla30."'>
								<input type='hidden' name='talla32Ingreso' value='".$cantidadIngresadaTalla32."'>
								<input type='hidden' name='talla34Ingreso' value='".$cantidadIngresadaTalla34."'>
								<input type='hidden' name='talla36Ingreso' value='".$cantidadIngresadaTalla36."'>
								<input type='hidden' name='talla38Ingreso' value='".$cantidadIngresadaTalla38."'>
								<input type='hidden' name='tallasIngreso' value='".$cantidadIngresadaTallas."'>
								<input type='hidden' name='tallamIngreso' value='".$cantidadIngresadaTallam."'>
								<input type='hidden' name='tallalIngreso' value='".$cantidadIngresadaTallal."'>
								<input type='hidden' name='tallaxlIngreso' value='".$cantidadIngresadaTallaxl."'>
								<input type='hidden' name='tallauIngreso' value='".$cantidadIngresadaTallau."'>
								<input type='hidden' name='tallaestIngreso' value='".$cantidadIngresadaTallaest."'>

								<input type='hidden' name='talla6Subida' value='".@$_POST['talla6Subida']."'>
								<input type='hidden' name='talla8Subida' value='".@$_POST['talla8Subida']."'>
								<input type='hidden' name='talla10Subida' value='".@$_POST['talla10Subida']."'>
								<input type='hidden' name='talla12Subida' value='".@$_POST['talla12Subida']."'>
								<input type='hidden' name='talla14Subida' value='".@$_POST['talla14Subida']."'>
								<input type='hidden' name='talla16Subida' value='".@$_POST['talla16Subida']."'>
								<input type='hidden' name='talla18Subida' value='".@$_POST['talla18Subida']."'>
								<input type='hidden' name='talla20Subida' value='".@$_POST['talla20Subida']."'>
								<input type='hidden' name='talla26Subida' value='".@$_POST['talla26Subida']."'>
								<input type='hidden' name='talla28Subida' value='".@$_POST['talla28Subida']."'>
								<input type='hidden' name='talla30Subida' value='".@$_POST['talla30Subida']."'>
								<input type='hidden' name='talla32Subida' value='".@$_POST['talla32Subida']."'>
								<input type='hidden' name='talla34Subida' value='".@$_POST['talla34Subida']."'>
								<input type='hidden' name='talla36Subida' value='".@$_POST['talla36Subida']."'>
								<input type='hidden' name='talla38Subida' value='".@$_POST['talla38Subida']."'>
								<input type='hidden' name='tallasSubida' value='".@$_POST['tallasSubida']."'>
								<input type='hidden' name='tallamSubida' value='".@$_POST['tallamSubida']."'>
								<input type='hidden' name='tallalSubida' value='".@$_POST['tallalSubida']."'>
								<input type='hidden' name='tallaxlSubida' value='".@$_POST['tallaxlSubida']."'>
								<input type='hidden' name='tallauSubida' value='".@$_POST['tallauSubida']."'>
								<input type='hidden' name='tallaestSubida' value='".@$_POST['tallaestSubida']."'>
								

								<input type='hidden' name='id_inventario' value='".$_GET['id_inventario']."'>
								<input type='hidden' name='accion' value='actualizaInventarioPorBodega'>
								<input type='submit' class='btn-primary' value='Guardar Observacion'>
							</form>
							";
					}

					else {
						echo "
							<form action='../actualizaInventarioPorBodega.php' method='post'>
							<label>Observacion inventario</label>
								<select name='cliente' class='form-control' required>
								<option value='PRENDAS EN ESTADO INPERFECTO'>PRENDAS EN ESTADO INPERFECTO</option>	
								<option value='PRENDAS FALTANTES'>PRENDAS FALTANTES</option>	
								<option value='PRENDAS DE MAS'>PRENDAS DE MAS</option>	
								</select>
								";
								echo "
							<form action='../actualizaInventarioPorBodega.php' method='post'>
							";
							echo "
							<label>Observacion inventario</label>
								<select name='observacion' class='form-control' required>
								<option value='PRENDAS EN ESTADO INPERFECTO'>PRENDAS EN ESTADO INPERFECTO</option>	
								<option value='PRENDAS FALTANTES'>PRENDAS FALTANTES</option>	
								<option value='PRENDAS DE MAS'>PRENDAS DE MAS</option>	
								</select>
								<br>
								<label>Observacion en Detalle</label> 
								<br>
								<textarea name='observacion_detalle' class='form-control'></textarea>
								<label>Cliente a cobrar:</label>
								<select name='cliente' class='form-control' required>
								";
								foreach ($clientes->seleccionarTerceroPorTipo('PROVEEDOR') as $key) {
									?>
									
									<option value='<?php echo $key['nombre_cli'] ?>'><?php echo $key['nombre_cli'] ?></option>
									<?php
										}
								echo "	
								</select>
								
								
								<br>
								<input type='hidden' name='talla6Ingreso' value='".@$_POST['talla6Ingreso']."'>
								<input type='hidden' name='talla8Ingreso' value='".@$_POST['talla8Ingreso']."'>
								<input type='hidden' name='talla10Ingreso' value='".@$_POST['talla10Ingreso']."'>
								<input type='hidden' name='talla12Ingreso' value='".@$_POST['talla12Ingreso']."'>
								<input type='hidden' name='talla14Ingreso' value='".@$_POST['talla14Ingreso']."'>
								<input type='hidden' name='talla16Ingreso' value='".@$_POST['talla16Ingreso']."'>
								<input type='hidden' name='talla18Ingreso' value='".@$_POST['talla18Ingreso']."'>
								<input type='hidden' name='talla20Ingreso' value='".@$_POST['talla20Ingreso']."'>
								<input type='hidden' name='talla26Ingreso' value='".@$_POST['talla26Ingreso']."'>
								<input type='hidden' name='talla28Ingreso' value='".@$_POST['talla28Ingreso']."'>
								<input type='hidden' name='talla30Ingreso' value='".@$_POST['talla30Ingreso']."'>
								<input type='hidden' name='talla32Ingreso' value='".@$_POST['talla32Ingreso']."'>
								<input type='hidden' name='talla34Ingreso' value='".@$_POST['talla34Ingreso']."'>
								<input type='hidden' name='talla36Ingreso' value='".@$_POST['talla36Ingreso']."'>
								<input type='hidden' name='talla38Ingreso' value='".@$_POST['talla38Ingreso']."'>
								<input type='hidden' name='tallasIngreso' value='".@$_POST['tallasIngreso']."'>
								<input type='hidden' name='tallamIngreso' value='".@$_POST['tallamIngreso']."'>
								<input type='hidden' name='tallalIngreso' value='".@$_POST['tallalIngreso']."'>
								<input type='hidden' name='tallaxlIngreso' value='".@$_POST['tallaxlIngreso']."'>
								<input type='hidden' name='tallauIngreso' value='".@$_POST['tallauIngreso']."'>
								<input type='hidden' name='tallaestIngreso' value='".@$_POST['tallaestIngreso']."'>
								

								<input type='hidden' name='id_inventario' value='".$_GET['id_inventario']."'>
								<input type='hidden' name='accion' value='actualizaInventarioPorBodega'>
								<input type='submit' class='btn-primary' value='Guardar Observacion'>
							</form>
							";
					}
				}
				?>
			</div>
			<div class="col-sm-12">
			<form action="" method="post">
				<div id="espacioTallas">
					<div class="col-sm-12">
						<legend>Entrada de inventario a Bodega <?php echo $_GET['descripcion']; ?> color: <?php echo $productos->color_hexa($_GET['color']); ?></legend>
						<legend>Tallas</legend>
					</div>
					<?php
					foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
					?>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 6 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla6Ingreso']) {
																			echo @$_POST['talla6Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla6Ingreso" id="talla6Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla6'] ?>" name="pesoTalla6Subida" id="pesoTalla6" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla6'] ?>" name="talla6Subida" id="talla6" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla6 == @$_POST['talla6Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 6 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 6 no coincide Con el registrado faltan $cantidadFaltanteTalla6 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 18 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla18Ingreso']) {
																			echo @$_POST['talla18Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla18Ingreso" id="talla18Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla18'] ?>" name="pesoTalla18Subida" id="pesoTalla18" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla18'] ?>" name="talla18Subida" id="talla18" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla18 == @$_POST['talla18Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 18 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 18 no coincide Con el registrado faltan $cantidadFaltanteTalla18 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 34 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla34Ingreso']) {
																			echo @$_POST['talla34Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla34Ingreso" id="talla34Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla34'] ?>" name="pesoTalla34Subida" id="pesoTalla34" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla34'] ?>" name="talla34Subida" id="talla34" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla34 == @$_POST['talla34Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 34 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 34 no coincide Con el registrado faltan $cantidadFaltanteTalla34 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla xl Entraron:
								<input type="text" required="" value="<?php if (@$_POST['tallaxlIngreso']) {
																			echo @$_POST['tallaxlIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallaxlIngreso" id="tallaxlIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_tallaxl'] ?>" name="pesoTallaxlSubida" id="pesoTallaxl" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallaxl'] ?>" name="tallaxlSubida" id="tallaxl" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTallaxl == @$_POST['tallaxlSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla xl ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla xl no coincide Con el registrado faltan $cantidadFaltanteTallaxl prendas.</strong>
						";
									}
								}
								?>

							</label>


						</div>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla8Ingreso']) {
																			echo @$_POST['talla8Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla8Ingreso" id="talla8Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla8'] ?>" name="pesoTalla8Subida" id="pesoTalla8" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla8'] ?>" name="talla8Subida" id="talla8" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla8 == @$_POST['talla8Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 8 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 8 no coincide Con el registrado faltan $cantidadFaltanteTalla8 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 20 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla20Ingreso']) {
																			echo @$_POST['talla20Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla20Ingreso" id="talla20Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla20'] ?>" name="pesoTalla20Subida" id="pesoTalla20" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla20'] ?>" name="talla20Subida" id="talla20" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla20 == @$_POST['talla20Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 20 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 20 no coincide Con el registrado faltan $cantidadFaltanteTalla20 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 36 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla36Ingreso']) {
																			echo @$_POST['talla36Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla36Ingreso" id="talla36Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla36'] ?>" name="pesoTalla36Subida" id="pesoTalla36" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla36'] ?>" name="talla36Subida" id="talla36" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla36 == @$_POST['talla36Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 36 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 36 no coincide Con el registrado faltan $cantidadFaltanteTalla36 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla u Entraron:
								<input type="text" required="" value="<?php if (@$_POST['tallauIngreso']) {
																			echo @$_POST['tallauIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallauIngreso" id="tallauIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_tallau'] ?>" name="pesoTallauSubida" id="pesoTallau" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallau'] ?>" name="tallauSubida" id="tallauSubida" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTallau == @$_POST['tallauSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla u ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla u no coincide Con el registrado faltan $cantidadFaltanteTallau prendas.</strong>
						";
									}
								}
								?>

							</label>

						</div>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla10Ingreso']) {
																			echo @$_POST['talla10Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla10Ingreso" id="talla10Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla10'] ?>" name="pesoTalla10Subida" id="pesoTalla10" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla10'] ?>" name="talla10Subida" id="talla10" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla10 == @$_POST['talla10Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 10 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 10 no coincide Con el registrado faltan $cantidadFaltanteTalla10 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 26 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla26Ingreso']) {
																			echo @$_POST['talla26Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla26Ingreso" id="talla26Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla26'] ?>" name="pesoTalla26Subida" id="pesoTalla26" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla26'] ?>" name="talla26Subida" id="talla26" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla26 == @$_POST['talla26Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 26 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 26 no coincide Con el registrado faltan $cantidadFaltanteTalla26 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 38 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla38Ingreso']) {
																			echo @$_POST['talla38Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla38Ingreso" id="talla38Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla38'] ?>" name="pesoTalla38Subida" id="pesoTalla38" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla38'] ?>" name="talla38Subida" id="talla38" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla38 == @$_POST['talla38Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 38 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 38 no coincide Con el registrado faltan $cantidadFaltanteTalla38 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla est Entraron:
								<input type="text" required="" value="<?php if (@$_POST['tallaestIngreso']) {
																			echo @$_POST['tallaestIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallaestIngreso" id="tallaestIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_tallaest'] ?>" name="pesoTallaestSubida" id="pesoTallaest" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallaest'] ?>" name="tallaestSubida" id="tallaest" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTallaest == @$_POST['tallaestSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla est ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla est no coincide Con el registrado faltan $cantidadFaltanteTallaest prendas.</strong>
						";
									}
								}
								?>

							</label>

						</div>

						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla12Ingreso']) {
																			echo @$_POST['talla12Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla12Ingreso" id="talla12Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla12'] ?>" name="pesoTalla12Subida" id="pesoTalla12" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla12'] ?>" name="talla12Subida" id="talla12" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla12 == @$_POST['talla12Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 12 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 12 no coincide Con el registrado faltan $cantidadFaltanteTalla12 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla28Ingreso']) {
																			echo @$_POST['talla28Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla28Ingreso" id="talla28Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla28'] ?>" name="pesoTalla28Subida" id="pesoTalla28" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla28'] ?>" name="talla28Subida" id="talla28" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla28 == @$_POST['talla28Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 28 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 28 no coincide Con el registrado faltan $cantidadFaltanteTalla28 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla s Entraron:
								<input type="text" required="" value="<?php if (@$_POST['tallasIngreso']) {
																			echo @$_POST['tallasIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallasIngreso" id="tallasIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_tallas'] ?>" name="pesoTallasSubida" id="pesoTallas" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallas'] ?>" name="tallasSubida" id="tallas" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTallas == @$_POST['tallasSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla s ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla s no coincide Con el registrado faltan $cantidadFaltanteTallas prendas.</strong>
						";
									}
								}
								?>

							</label>




						</div>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla14Ingreso']) {
																			echo @$_POST['talla14Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla14Ingreso" id="talla14Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla14'] ?>" name="pesoTalla14Subida" id="pesoTalla14" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla14'] ?>" name="talla14Subida" id="talla14" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla14 == @$_POST['talla14Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 14 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 14 no coincide Con el registrado faltan $cantidadFaltanteTalla14 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 30 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla30Ingreso']) {
																			echo @$_POST['talla30Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla30Ingreso" id="talla30Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla30'] ?>" name="pesoTalla30Subida" id="pesoTalla30" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla30'] ?>" name="talla30Subida" id="talla30" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla30 == @$_POST['talla30Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 30 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 30 no coincide Con el registrado faltan $cantidadFaltanteTalla30 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla m Entraron:
								<input type="text" required="" value="<?php if (@$_POST['tallamIngreso']) {
																			echo @$_POST['tallamIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallamIngreso" id="tallamIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_tallam'] ?>" name="pesoTallamSubida" id="pesoTallam" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallam'] ?>" name="tallamSubida" id="tallam" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTallam == @$_POST['tallamSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla m ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla m no coincide Con el registrado faltan $cantidadFaltanteTallam prendas.</strong>
						";
									}
								}
								?>

							</label>


						</div>

						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla16Ingreso']) {
																			echo @$_POST['talla16Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla16Ingreso" id="talla16Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla16'] ?>" name="pesoTalla16Subida" id="pesoTalla16" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla16'] ?>" name="talla16Subida" id="talla16" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla16 == @$_POST['talla16Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 16 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 16 no coincide Con el registrado faltan $cantidadFaltanteTalla16 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 32 Entraron:
								<input type="text" required="" value="<?php if (@$_POST['talla32Ingreso']) {
																			echo @$_POST['talla32Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla32Ingreso" id="talla32Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_talla32'] ?>" name="pesoTalla32Subida" id="pesoTalla32" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla32'] ?>" name="talla32Subida" id="talla32" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTalla32 == @$_POST['talla32Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 32 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 32 no coincide Con el registrado faltan $cantidadFaltanteTalla32 prendas.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla l Entraron:
								<input type="text" required="" value="<?php if (@$_POST['tallalIngreso']) {
																			echo @$_POST['tallalIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallalIngreso" id="tallalIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['peso_tallal'] ?>" name="pesoTallalSubida" id="pesoTallal" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallal'] ?>" name="tallalSubida" id="tallal" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if ($cantidadIngresadaTallal == @$_POST['tallalSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla l ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla l no coincide Con el registrado faltan $cantidadFaltanteTallal prendas.</strong>
						";
									}
								}
								?>

							</label>
							<input type="hidden" name="accion" value="verificarInventario">
							<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
							<input type="submit" class="btn btn-success" value="Validar Entrada a bodega">
						</div>
					<?php
					}
					?>




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