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
				<p style="float: right; color: crimson;">COMANDOS PARA INTERARTUAR<br>CTRL = Actualizar stock X peso<br>SHIFT = Actualizar stock X cantidad directamente<br>BLOG MAYUS = Actualizar peso inicial directamente<br>ALT = Actualizar stock inicial directamente<br>F8 = Acumular nuevo peso<br></p>
			<?php
			foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $keyV) {
			?>		
				<h4>Reinventariado version 2.5 </h4>
				<br>
			<?php 
			}
			?>
			</div>
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
			<?php
				//print_r($_POST);
				if (@$_POST['accion'] == 'verificarInventario') {
					
					$pesoTotal6 = (double) @$_POST['peso_R6'];
					$pesoTotal8 = (double) @$_POST['peso_R8'];
					$pesoTotal10 = (double) @$_POST['peso_R10'];
					$pesoTotal12 = (double) @$_POST['peso_R12'];
					$pesoTotal14 = (double) @$_POST['peso_R14'];
					$pesoTotal16 = (double) @$_POST['peso_R16'];
					$pesoTotal18 = (double) @$_POST['peso_R18'];
					$pesoTotal20 = (double) @$_POST['peso_R20'];
					$pesoTotal26 = (double) @$_POST['peso_R26'];
					$pesoTotal28 = (double) @$_POST['peso_R28'];
					$pesoTotal30 = (double) @$_POST['peso_R30'];
					$pesoTotal32 = (double) @$_POST['peso_R32'];
					$pesoTotal34 = (double) @$_POST['peso_R34'];
					$pesoTotal36 = (double) @$_POST['peso_R36'];
					$pesoTotal38 = (double) @$_POST['peso_R38'];
					$pesoTotals = (double) @$_POST['peso_Rs'];
					$pesoTotalm = (double) @$_POST['peso_Rm'];
					$pesoTotall = (double) @$_POST['peso_Rl'];
					$pesoTotalxl = (double) @$_POST['peso_Rxl'];
					$pesoTotalu = (double) @$_POST['peso_Ru'];
					$pesoTotalest = (double) @$_POST['peso_Rest'];

					// Talla 6
						if ($pesoTotal6 == 0){

							$pesoTotal6 = 0;

						}else{

							$pesoTalla6 = (double) @$_POST['pesoTalla6Subida'];
							$talla6 = (double) @$_POST['talla6Subida'];

							
							if($pesoTalla6 == NULL || $pesoTalla6 == '' || $talla6 == NULL || $talla6 == ''){

								$comprobar6 = "<strong style='color:crimson;'>No se puede actualizar</strong>";

							}else{

							$pesoUnitarioT6 = $pesoTalla6 / $talla6;

							$cantidadT6 = $pesoTotal6 / $pesoUnitarioT6;
							$cantidadT6 = round($cantidadT6);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla6 = '$cantidadT6' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 8
						if ($pesoTotal8 == 0){

							$pesoTotal8 = 0;

						}else{

							$pesoTalla8 = (double) @$_POST['pesoTalla8Subida'];
							$talla8 = (double) @$_POST['talla8Subida'];

							
							if($pesoTalla8 == NULL || $pesoTalla8 == '' || $talla8 == NULL || $talla8 == ''){

								$comprobar8 = "<strong style='color:crimson;'>La TALLA 8<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT8 = $pesoTalla8 / $talla8;

							$cantidadT8 = $pesoTotal8 / $pesoUnitarioT8;
							$cantidadT8 = round($cantidadT8);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla8 = '$cantidadT8' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R8 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 10
						if ($pesoTotal10 == 0){

							$pesoTotal10 = 0;

						}else{

							$pesoTalla10 = (double) @$_POST['pesoTalla10Subida'];
							$talla10 = (double) @$_POST['talla10Subida'];

							
							if($pesoTalla10 == NULL || $pesoTalla10 == '' || $talla10 == NULL || $talla10 == ''){

								$comprobar10 = "<strong style='color:crimson;'>La TALLA 10<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT10 = $pesoTalla10 / $talla10;

							$cantidadT10 = $pesoTotal10 / $pesoUnitarioT10;
							$cantidadT10 = round($cantidadT10);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla10 = '$cantidadT10' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R10 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 12
						if ($pesoTotal12 == 0){

							$pesoTotal12 = 0;

						}else{

							$pesoTalla12 = (double) @$_POST['pesoTalla12Subida'];
							$talla12 = (double) @$_POST['talla12Subida'];

							
							if($pesoTalla12 == NULL || $pesoTalla12 == '' || $talla12 == NULL || $talla12 == ''){

								$comprobar12 = "<strong style='color:crimson;'>La TALLA 12<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT12 = $pesoTalla12 / $talla12;

							$cantidadT12 = $pesoTotal12 / $pesoUnitarioT12;
							$cantidadT12 = round($cantidadT12);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla12 = '$cantidadT12' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R12 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 14
						if ($pesoTotal14 == 0){

							$pesoTotal14 = 0;

						}else{

							$pesoTalla14 = (double) @$_POST['pesoTalla14Subida'];
							$talla14 = (double) @$_POST['talla14Subida'];

							
							if($pesoTalla14 == NULL || $pesoTalla14 == '' || $talla14 == NULL || $talla14 == ''){

								$comprobar14 = "<strong style='color:crimson;'>La TALLA 14<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT14 = $pesoTalla14 / $talla14;

							$cantidadT14 = $pesoTotal14 / $pesoUnitarioT14;
							$cantidadT14 = round($cantidadT14);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla14 = '$cantidadT14' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R14 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 16
						if ($pesoTotal16 == 0){

							$pesoTotal16 = 0;

						}else{

							$pesoTalla16 = (double) @$_POST['pesoTalla16Subida'];
							$talla16 = (double) @$_POST['talla16Subida'];

							
							if($pesoTalla16 == NULL || $pesoTalla16 == '' || $talla16 == NULL || $talla16 == ''){

								$comprobar16 = "<strong style='color:crimson;'>La TALLA 16<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT16 = $pesoTalla16 / $talla16;

							$cantidadT16 = $pesoTotal16 / $pesoUnitarioT16;
							$cantidadT16 = round($cantidadT16);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla16 = '$cantidadT16' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R16 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 18
						if ($pesoTotal18 == 0){

							$pesoTotal18 = 0;

						}else{

							$pesoTalla18 = (double) @$_POST['pesoTalla18Subida'];
							$talla18 = (double) @$_POST['talla18Subida'];

							
							if($pesoTalla18 == NULL || $pesoTalla18 == '' || $talla18 == NULL || $talla18 == ''){

								$comprobar18 = "<strong style='color:crimson;'>La TALLA 18<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT18 = $pesoTalla18 / $talla18;

							$cantidadT18 = $pesoTotal18 / $pesoUnitarioT18;
							$cantidadT18 = round($cantidadT18);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla18 = '$cantidadT18' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R18 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 20
						if ($pesoTotal20 == 0){

							$pesoTotal20 = 0;

						}else{

							$pesoTalla20 = (double) @$_POST['pesoTalla20Subida'];
							$talla20 = (double) @$_POST['talla20Subida'];

							
							if($pesoTalla20 == NULL || $pesoTalla20 == '' || $talla20 == NULL || $talla20 == ''){

								$comprobar20 = "<strong style='color:crimson;'>La TALLA 20<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT20 = $pesoTalla20 / $talla20;

							$cantidadT20 = $pesoTotal20 / $pesoUnitarioT20;
							$cantidadT20 = round($cantidadT20);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla20 = '$cantidadT20' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R20 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 26
						if ($pesoTotal26 == 0){

							$pesoTotal26 = 0;

						}else{

							$pesoTalla26 = (double) @$_POST['pesoTalla26Subida'];
							$talla26 = (double) @$_POST['talla26Subida'];

							
							if($pesoTalla26 == NULL || $pesoTalla26 == '' || $talla26 == NULL || $talla26 == ''){

								$comprobar26 = "<strong style='color:crimson;'>La TALLA 26<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT26 = $pesoTalla26 / $talla26;

							$cantidadT26 = $pesoTotal26 / $pesoUnitarioT26;
							$cantidadT26 = round($cantidadT26);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla26 = '$cantidadT26' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R26 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 28
						if ($pesoTotal28 == 0){

							$pesoTotal28 = 0;

						}else{

							$pesoTalla28 = (double) @$_POST['pesoTalla28Subida'];
							$talla28 = (double) @$_POST['talla28Subida'];

							
							if($pesoTalla28 == NULL || $pesoTalla28 == '' || $talla28 == NULL || $talla28 == ''){

								$comprobar28 = "<strong style='color:crimson;'>La TALLA 28<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT28 = $pesoTalla28 / $talla28;

							$cantidadT28 = $pesoTotal28 / $pesoUnitarioT28;
							$cantidadT28 = round($cantidadT28);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla28 = '$cantidadT28' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R28 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 30
						if ($pesoTotal30 == 0){

							$pesoTotal30 = 0;

						}else{

							$pesoTalla30 = (double) @$_POST['pesoTalla30Subida'];
							$talla30 = (double) @$_POST['talla30Subida'];

							
							if($pesoTalla30 == NULL || $pesoTalla30 == '' || $talla30 == NULL || $talla30 == ''){

								$comprobar30 = "<strong style='color:crimson;'>La TALLA 30<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT30 = $pesoTalla30 / $talla30;

							$cantidadT30 = $pesoTotal30 / $pesoUnitarioT30;
							$cantidadT30 = round($cantidadT30);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla30 = '$cantidadT30' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R30 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 32
						if ($pesoTotal32 == 0){

							$pesoTotal32 = 0;

						}else{

							$pesoTalla32 = (double) @$_POST['pesoTalla32Subida'];
							$talla32 = (double) @$_POST['talla32Subida'];

							
							if($pesoTalla32 == NULL || $pesoTalla32 == '' || $talla32 == NULL || $talla32 == ''){

								$comprobar32 = "<strong style='color:crimson;'>La TALLA 32<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT32 = $pesoTalla32 / $talla32;

							$cantidadT32 = $pesoTotal32 / $pesoUnitarioT32;
							$cantidadT32 = round($cantidadT32);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla32 = '$cantidadT32' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R32 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 34
						if ($pesoTotal34 == 0){

							$pesoTotal34 = 0;

						}else{

							$pesoTalla34 = (double) @$_POST['pesoTalla34Subida'];
							$talla34 = (double) @$_POST['talla34Subida'];

							
							if($pesoTalla34 == NULL || $pesoTalla34 == '' || $talla34 == NULL || $talla34 == ''){

								$comprobar34 = "<strong style='color:crimson;'>La TALLA 34<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT34 = $pesoTalla34 / $talla34;

							$cantidadT34 = $pesoTotal34 / $pesoUnitarioT34;
							$cantidadT34 = round($cantidadT34);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla34 = '$cantidadT34' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R34 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 36
						if ($pesoTotal36 == 0){

							$pesoTotal36 = 0;

						}else{

							$pesoTalla36 = (double) @$_POST['pesoTalla36Subida'];
							$talla36 = (double) @$_POST['talla36Subida'];

							
							if($pesoTalla36 == NULL || $pesoTalla36 == '' || $talla36 == NULL || $talla36 == ''){

								$comprobar36 = "<strong style='color:crimson;'>La TALLA 36<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT36 = $pesoTalla36 / $talla36;

							$cantidadT36 = $pesoTotal36 / $pesoUnitarioT36;
							$cantidadT36 = round($cantidadT36);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla36 = '$cantidadT36' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R36 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 38
						if ($pesoTotal38 == 0){

							$pesoTotal38 = 0;

						}else{

							$pesoTalla38 = (double) @$_POST['pesoTalla38Subida'];
							$talla38 = (double) @$_POST['talla38Subida'];

							
							if($pesoTalla38 == NULL || $pesoTalla38 == '' || $talla38 == NULL || $talla38 == ''){

								$comprobar38 = "<strong style='color:crimson;'>La TALLA 38<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT38 = $pesoTalla38 / $talla38;

							$cantidadT38 = $pesoTotal38 / $pesoUnitarioT38;
							$cantidadT38 = round($cantidadT38);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla38 = '$cantidadT38' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R38 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla s
						if ($pesoTotals == 0){

							$pesoTotals = 0;

						}else{

							$pesoTallas = (double) @$_POST['pesoTallasSubida'];
							$tallas = (double) @$_POST['tallasSubida'];

							
							if($pesoTallas == NULL || $pesoTallas == '' || $tallas == NULL || $tallas == ''){

								$comprobars = "<strong style='color:crimson;'>La TALLA S<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTs = $pesoTallas / $tallas;

							$cantidadTs = $pesoTotals / $pesoUnitarioTs;
							$cantidadTs = round($cantidadTs);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallas = '$cantidadTs' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rs = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla m
						if ($pesoTotalm == 0){

							$pesoTotalm = 0;

						}else{

							$pesoTallam = (double) @$_POST['pesoTallamSubida'];
							$tallam = (double) @$_POST['tallamSubida'];

							
							if($pesoTallam == NULL || $pesoTallam == '' || $tallam == NULL || $tallam == ''){

								$comprobarm = "<strong style='color:crimson;'>La TALLA M<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTm = $pesoTallam / $tallam;

							$cantidadTm = $pesoTotalm / $pesoUnitarioTm;
							$cantidadTm = round($cantidadTm);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallam = '$cantidadTm' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rm = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla l
						if ($pesoTotall == 0){

							$pesoTotall = 0;

						}else{

							$pesoTallal = (double) @$_POST['pesoTallalSubida'];
							$tallal = (double) @$_POST['tallalSubida'];

							
							if($pesoTallal == NULL || $pesoTallal == '' || $tallal == NULL || $tallal == ''){

								$comprobarl = "<strong style='color:crimson;'>La TALLA L<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTl = $pesoTallal / $tallal;

							$cantidadTl = $pesoTotall / $pesoUnitarioTl;
							$cantidadTl = round($cantidadTl);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallal = '$cantidadTl' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rl = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla xl
						if ($pesoTotalxl == 0){

							$pesoTotalxl = 0;

						}else{

							$pesoTallaxl = (double) @$_POST['pesoTallaxlSubida'];
							$tallaxl = (double) @$_POST['tallaxlSubida'];

							
							if($pesoTallaxl == NULL || $pesoTallaxl == '' || $tallaxl == NULL || $tallaxl == ''){

								$comprobarxl = "<strong style='color:crimson;'>La TALLA XL<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTxl = $pesoTallaxl / $tallaxl;

							$cantidadTxl = $pesoTotalxl / $pesoUnitarioTxl;
							$cantidadTxl = round($cantidadTxl);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallaxl = '$cantidadTxl' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rxl = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla u
						if ($pesoTotalu == 0){

							$pesoTotalu = 0;

						}else{

							$pesoTallau = (double) @$_POST['pesoTallauSubida'];
							$tallau = (double) @$_POST['tallauSubida'];

							
							if($pesoTallau == NULL || $pesoTallau == '' || $tallau == NULL || $tallau == ''){

								$comprobaru = "<strong style='color:crimson;'>La TALLA U<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTu = $pesoTallau / $tallau;

							$cantidadTu = $pesoTotalu / $pesoUnitarioTu;
							$cantidadTu = round($cantidadTu);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallau = '$cantidadTu' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Ru = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla est
						if ($pesoTotalest == 0){

							$pesoTotalest = 0;

						}else{

							$pesoTallaest = (double) @$_POST['pesoTallaestSubida'];
							$tallaest = (double) @$_POST['tallaestSubida'];

							
							if($pesoTallaest == NULL || $pesoTallaest == '' || $tallaest == NULL || $tallaest == ''){

								$comprobarest = "<strong style='color:crimson;'>La TALLA EST<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTest = $pesoTallaest / $tallaest;

							$cantidadTest = $pesoTotalest / $pesoUnitarioTest;
							$cantidadTest = round($cantidadTest);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallaest = '$cantidadTest' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rest = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}
					// fin				

				}elseif(@$_POST['accion'] == 'sumarPeso') {

					// Talla 6
						$pesoTotalT6 = (double) @$_POST['peso_R6'];
						$pesoXsumarT6 = $pesoTotalT6 + (double) @$_POST['talla6Ingreso'];
						
						$pesoTalla6 = (double) @$_POST['pesoTalla6Subida'];
						$talla6 = (double) @$_POST['talla6Subida'];

						if($pesoTalla6 == NULL || $pesoTalla6 == '' || $talla6 == NULL || $talla6 == ''){

							$comprobar6 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT6 = $pesoTalla6 / $talla6;
							$XcantidadT6 = $pesoXsumarT6 / $pesoUnitarioT6;
							$XcantidadT6 = round($XcantidadT6);

						}

						$pesoInicialT6 = @$_POST['nuevoPesoT6'];
						
						if($pesoInicialT6 == NULL || $pesoInicialT6 == ''){

						}else{

							$xT6 = @$_POST['pesoTalla6Subida'];
							$sumaXX6 = $xT6 + $pesoInicialT6;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla6 = '$sumaXX6' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}


						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R6 = '$pesoXsumarT6' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 8
						$pesoTotalT8 = (double) @$_POST['peso_R8'];
						$pesoXsumarT8 = $pesoTotalT8 + (double) @$_POST['talla8Ingreso'];
						
						$pesoTalla8 = (double) @$_POST['pesoTalla8Subida'];
						$talla8 = (double) @$_POST['talla8Subida'];

						if($pesoTalla8 == NULL || $pesoTalla8 == '' || $talla8 == NULL || $talla8 == ''){

							$comprobar8 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT8 = $pesoTalla8 / $talla8;
							$XcantidadT8 = $pesoXsumarT8 / $pesoUnitarioT8;
							$XcantidadT8 = round($XcantidadT8);

						}

						$pesoInicialT8 = @$_POST['nuevoPesoT8'];
						
						if($pesoInicialT8 == NULL || $pesoInicialT8 == ''){

						}else{

							$xT8 = @$_POST['pesoTalla8Subida'];
							$sumaXX8 = $xT8 + $pesoInicialT8;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla8 = '$sumaXX8' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R8 = '$pesoXsumarT8' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						

					// Talla 10
						$pesoTotalT10 = (double) @$_POST['peso_R10'];
						$pesoXsumarT10 = $pesoTotalT10 + (double) @$_POST['talla10Ingreso'];
						
						$pesoTalla10 = (double) @$_POST['pesoTalla10Subida'];
						$talla10 = (double) @$_POST['talla10Subida'];

						if($pesoTalla10 == NULL || $pesoTalla10 == '' || $talla10 == NULL || $talla10 == ''){

							$comprobar10 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT10 = $pesoTalla10 / $talla10;
							$XcantidadT10 = $pesoXsumarT10 / $pesoUnitarioT10;
							$XcantidadT10 = round($XcantidadT10);

						}

						$pesoInicialT10 = @$_POST['nuevoPesoT10'];
						
						if($pesoInicialT10 == NULL || $pesoInicialT10 == ''){

						}else{

							$xT10 = @$_POST['pesoTalla10Subida'];
							$sumaXX10 = $xT10 + $pesoInicialT10;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla10 = '$sumaXX10' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R10 = '$pesoXsumarT10' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 12
						$pesoTotalT12 = (double) @$_POST['peso_R12'];
						$pesoXsumarT12 = $pesoTotalT12 + (double) @$_POST['talla12Ingreso'];
						
						$pesoTalla12 = (double) @$_POST['pesoTalla12Subida'];
						$talla12 = (double) @$_POST['talla12Subida'];

						if($pesoTalla12 == NULL || $pesoTalla12 == '' || $talla12 == NULL || $talla12 == ''){

							$comprobar12 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT12 = $pesoTalla12 / $talla12;
							$XcantidadT12 = $pesoXsumarT12 / $pesoUnitarioT12;
							$XcantidadT12 = round($XcantidadT12);

						}

						$pesoInicialT12 = @$_POST['nuevoPesoT12'];
						
						if($pesoInicialT12 == NULL || $pesoInicialT12 == ''){

						}else{

							$xT12 = @$_POST['pesoTalla12Subida'];
							$sumaXX12 = $xT12 + $pesoInicialT12;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla12 = '$sumaXX12' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R12 = '$pesoXsumarT12' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 14
						$pesoTotalT14 = (double) @$_POST['peso_R14'];
						$pesoXsumarT14 = $pesoTotalT14 + (double) @$_POST['talla14Ingreso'];
						
						$pesoTalla14 = (double) @$_POST['pesoTalla14Subida'];
						$talla14 = (double) @$_POST['talla14Subida'];

						if($pesoTalla14 == NULL || $pesoTalla14 == '' || $talla14 == NULL || $talla14 == ''){

							$comprobar14 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT14 = $pesoTalla14 / $talla14;
							$XcantidadT14 = $pesoXsumarT14 / $pesoUnitarioT14;
							$XcantidadT14 = round($XcantidadT14);

						}

						$pesoInicialT14 = @$_POST['nuevoPesoT14'];
						
						if($pesoInicialT14 == NULL || $pesoInicialT14 == ''){

						}else{

							$xT14 = @$_POST['pesoTalla14Subida'];
							$sumaXX14 = $xT14 + $pesoInicialT14;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla14 = '$sumaXX14' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R14 = '$pesoXsumarT14' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 16
						$pesoTotalT16 = (double) @$_POST['peso_R16'];
						$pesoXsumarT16 = $pesoTotalT16 + (double) @$_POST['talla16Ingreso'];
						
						$pesoTalla16 = (double) @$_POST['pesoTalla16Subida'];
						$talla16 = (double) @$_POST['talla16Subida'];

						if($pesoTalla16 == NULL || $pesoTalla16 == '' || $talla16 == NULL || $talla16 == ''){

							$comprobar16 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT16 = $pesoTalla16 / $talla16;
							$XcantidadT16 = $pesoXsumarT16 / $pesoUnitarioT16;
							$XcantidadT16 = round($XcantidadT16);

						}

						$pesoInicialT16 = @$_POST['nuevoPesoT16'];
						
						if($pesoInicialT16 == NULL || $pesoInicialT16 == ''){

						}else{

							$xT16 = @$_POST['pesoTalla16Subida'];
							$sumaXX16 = $xT16 + $pesoInicialT16;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla16 = '$sumaXX16' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R16 = '$pesoXsumarT16' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 18
						$pesoTotalT18 = (double) @$_POST['peso_R18'];
						$pesoXsumarT18 = $pesoTotalT18 + (double) @$_POST['talla18Ingreso'];
						
						$pesoTalla18 = (double) @$_POST['pesoTalla18Subida'];
						$talla18 = (double) @$_POST['talla18Subida'];

						if($pesoTalla18 == NULL || $pesoTalla18 == '' || $talla18 == NULL || $talla18 == ''){

							$comprobar18 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT18 = $pesoTalla18 / $talla18;
							$XcantidadT18 = $pesoXsumarT18 / $pesoUnitarioT18;
							$XcantidadT18 = round($XcantidadT18);

						}

						$pesoInicialT18 = @$_POST['nuevoPesoT18'];
						
						if($pesoInicialT18 == NULL || $pesoInicialT18 == ''){

						}else{

							$xT18 = @$_POST['pesoTalla18Subida'];
							$sumaXX18 = $xT18 + $pesoInicialT18;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla18 = '$sumaXX18' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R18 = '$pesoXsumarT18' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 20
						$pesoTotalT20 = (double) @$_POST['peso_R20'];
						$pesoXsumarT20 = $pesoTotalT20 + (double) @$_POST['talla20Ingreso'];
						
						$pesoTalla20 = (double) @$_POST['pesoTalla20Subida'];
						$talla20 = (double) @$_POST['talla20Subida'];

						if($pesoTalla20 == NULL || $pesoTalla20 == '' || $talla20 == NULL || $talla20 == ''){

							$comprobar20 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT20 = $pesoTalla20 / $talla20;
							$XcantidadT20 = $pesoXsumarT20 / $pesoUnitarioT20;
							$XcantidadT20 = round($XcantidadT20);

						}

						$pesoInicialT20 = @$_POST['nuevoPesoT20'];
						
						if($pesoInicialT20 == NULL || $pesoInicialT20 == ''){

						}else{

							$xT20 = @$_POST['pesoTalla20Subida'];
							$sumaXX20 = $xT20 + $pesoInicialT20;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla20 = '$sumaXX20' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R20 = '$pesoXsumarT20' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 26
						$pesoTotalT26 = (double) @$_POST['peso_R26'];
						$pesoXsumarT26 = $pesoTotalT26 + (double) @$_POST['talla26Ingreso'];
						
						$pesoTalla26 = (double) @$_POST['pesoTalla26Subida'];
						$talla26 = (double) @$_POST['talla26Subida'];

						if($pesoTalla26 == NULL || $pesoTalla26 == '' || $talla26 == NULL || $talla26 == ''){

							$comprobar26 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT26 = $pesoTalla26 / $talla26;
							$XcantidadT26 = $pesoXsumarT26 / $pesoUnitarioT26;
							$XcantidadT26 = round($XcantidadT26);

						}

						$pesoInicialT26 = @$_POST['nuevoPesoT26'];
						
						if($pesoInicialT26 == NULL || $pesoInicialT26 == ''){

						}else{

							$xT26 = @$_POST['pesoTalla26Subida'];
							$sumaXX26 = $xT26 + $pesoInicialT26;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla8 = '$sumaXX8' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R26 = '$pesoXsumarT26' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 28
						$pesoTotalT28 = (double) @$_POST['peso_R28'];
						$pesoXsumarT28 = $pesoTotalT28 + (double) @$_POST['talla28Ingreso'];
						
						$pesoTalla28 = (double) @$_POST['pesoTalla28Subida'];
						$talla28 = (double) @$_POST['talla28Subida'];

						if($pesoTalla28 == NULL || $pesoTalla28 == '' || $talla28 == NULL || $talla28 == ''){

							$comprobar28 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT28 = $pesoTalla28 / $talla28;
							$XcantidadT28 = $pesoXsumarT28 / $pesoUnitarioT28;
							$XcantidadT28 = round($XcantidadT28);

						}

						$pesoInicialT28 = @$_POST['nuevoPesoT28'];
						
						if($pesoInicialT28 == NULL || $pesoInicialT28 == ''){

						}else{

							$xT28 = @$_POST['pesoTalla28Subida'];
							$sumaXX28 = $xT28 + $pesoInicialT28;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla28 = '$sumaXX28' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R28 = '$pesoXsumarT28' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 30
						$pesoTotalT30 = (double) @$_POST['peso_R30'];
						$pesoXsumarT30 = $pesoTotalT30 + (double) @$_POST['talla30Ingreso'];
						
						$pesoTalla30 = (double) @$_POST['pesoTalla30Subida'];
						$talla30 = (double) @$_POST['talla30Subida'];

						if($pesoTalla30 == NULL || $pesoTalla30 == '' || $talla30 == NULL || $talla30 == ''){

							$comprobar30 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT30 = $pesoTalla30 / $talla30;
							$XcantidadT30 = $pesoXsumarT30 / $pesoUnitarioT30;
							$XcantidadT30 = round($XcantidadT30);

						}

						$pesoInicialT30 = @$_POST['nuevoPesoT30'];
						
						if($pesoInicialT30 == NULL || $pesoInicialT30 == ''){

						}else{

							$xT30 = @$_POST['pesoTalla30Subida'];
							$sumaXX30 = $xT30 + $pesoInicialT30;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla30 = '$sumaXX30' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R30 = '$pesoXsumarT30' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 32
						$pesoTotalT32 = (double) @$_POST['peso_R32'];
						$pesoXsumarT32 = $pesoTotalT32 + (double) @$_POST['talla32Ingreso'];
						
						$pesoTalla32 = (double) @$_POST['pesoTalla32Subida'];
						$talla32 = (double) @$_POST['talla32Subida'];

						if($pesoTalla32 == NULL || $pesoTalla32 == '' || $talla32 == NULL || $talla32 == ''){

							$comprobar32 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT32 = $pesoTalla32 / $talla32;
							$XcantidadT32 = $pesoXsumarT32 / $pesoUnitarioT32;
							$XcantidadT32 = round($XcantidadT32);

						}

						$pesoInicialT32 = @$_POST['nuevoPesoT32'];
						
						if($pesoInicialT32 == NULL || $pesoInicialT32 == ''){

						}else{

							$xT32 = @$_POST['pesoTalla32Subida'];
							$sumaXX32 = $xT32 + $pesoInicialT32;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla32 = '$sumaXX32' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R32 = '$pesoXsumarT32' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 34
						$pesoTotalT34 = (double) @$_POST['peso_R34'];
						$pesoXsumarT34 = $pesoTotalT34 + (double) @$_POST['talla34Ingreso'];
						
						$pesoTalla34 = (double) @$_POST['pesoTalla34Subida'];
						$talla34 = (double) @$_POST['talla34Subida'];

						if($pesoTalla34 == NULL || $pesoTalla34 == '' || $talla34 == NULL || $talla34 == ''){

							$comprobar34 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT34 = $pesoTalla34 / $talla34;
							$XcantidadT34 = $pesoXsumarT34 / $pesoUnitarioT34;
							$XcantidadT34 = round($XcantidadT34);

						}

						$pesoInicialT34 = @$_POST['nuevoPesoT34'];
						
						if($pesoInicialT34 == NULL || $pesoInicialT34 == ''){

						}else{

							$xT34 = @$_POST['pesoTalla34Subida'];
							$sumaXX34 = $xT34 + $pesoInicialT34;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla34 = '$sumaXX34' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R34 = '$pesoXsumarT34' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 36
						$pesoTotalT36 = (double) @$_POST['peso_R36'];
						$pesoXsumarT36 = $pesoTotalT36 + (double) @$_POST['talla36Ingreso'];
						
						$pesoTalla36 = (double) @$_POST['pesoTalla36Subida'];
						$talla36 = (double) @$_POST['talla36Subida'];

						if($pesoTalla36 == NULL || $pesoTalla36 == '' || $talla36 == NULL || $talla36 == ''){

							$comprobar36 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT36 = $pesoTalla36 / $talla36;
							$XcantidadT36 = $pesoXsumarT36 / $pesoUnitarioT36;
							$XcantidadT36 = round($XcantidadT36);

						}

						$pesoInicialT36 = @$_POST['nuevoPesoT36'];
						
						if($pesoInicialT36 == NULL || $pesoInicialT36 == ''){

						}else{

							$xT36 = @$_POST['pesoTalla36Subida'];
							$sumaXX36 = $xT36 + $pesoInicialT36;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla36 = '$sumaXX36' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R36 = '$pesoXsumarT36' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 38
						$pesoTotalT38 = (double) @$_POST['peso_R38'];
						$pesoXsumarT38 = $pesoTotalT38 + (double) @$_POST['talla38Ingreso'];
						
						$pesoTalla38 = (double) @$_POST['pesoTalla38Subida'];
						$talla38 = (double) @$_POST['talla38Subida'];

						if($pesoTalla38 == NULL || $pesoTalla38 == '' || $talla38 == NULL || $talla38 == ''){

							$comprobar38 = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioT38 = $pesoTalla38 / $talla38;
							$XcantidadT38 = $pesoXsumarT38 / $pesoUnitarioT38;
							$XcantidadT38 = round($XcantidadT38);

						}

						$pesoInicialT38 = @$_POST['nuevoPesoT38'];
						
						if($pesoInicialT38 == NULL || $pesoInicialT38 == ''){

						}else{

							$xT38 = @$_POST['pesoTalla38Subida'];
							$sumaXX38 = $xT38 + $pesoInicialT38;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla38 = '$sumaXX38' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R38 = '$pesoXsumarT38' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla s
						$pesoTotalTs = (double) @$_POST['peso_Rs'];
						$pesoXsumarTs = $pesoTotalTs + (double) @$_POST['tallasIngreso'];
						
						$pesoTallas = (double) @$_POST['pesoTallasSubida'];
						$tallas = (double) @$_POST['tallasSubida'];

						if($pesoTallas == NULL || $pesoTallas == '' || $tallas == NULL || $tallas == ''){

							$comprobars = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioTs = $pesoTallas / $tallas;
							$XcantidadTs = $pesoXsumarTs / $pesoUnitarioTs;
							$XcantidadTs = round($XcantidadTs);

						}

						$pesoInicialTs = @$_POST['nuevoPesoTs'];
						
						if($pesoInicialTs == NULL || $pesoInicialTs == ''){

						}else{

							$xTs = @$_POST['pesoTallasSubida'];
							$sumaXXs = $xTs + $pesoInicialTs;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallas = '$sumaXXs' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rs = '$pesoXsumarTs' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla m
						$pesoTotalTm = (double) @$_POST['peso_Rm'];
						$pesoXsumarTm = $pesoTotalTm + (double) @$_POST['tallamIngreso'];
						
						$pesoTallam = (double) @$_POST['pesoTallamSubida'];
						$tallam = (double) @$_POST['tallamSubida'];

						if($pesoTallam == NULL || $pesoTallam == '' || $tallam == NULL || $tallam == ''){

							$comprobarm = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioTm = $pesoTallam / $tallam;
							$XcantidadTm = $pesoXsumarTm / $pesoUnitarioTm;
							$XcantidadTm = round($XcantidadTm);

						}

						$pesoInicialTm = @$_POST['nuevoPesoTm'];
						
						if($pesoInicialTm == NULL || $pesoInicialTm == ''){

						}else{

							$xTm = @$_POST['pesoTallamSubida'];
							$sumaXXm = $xTm + $pesoInicialTm;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallam = '$sumaXXm' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rm = '$pesoXsumarTm' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla l
						$pesoTotalTl = (double) @$_POST['peso_Rl'];
						$pesoXsumarTl = $pesoTotalTl + (double) @$_POST['tallalIngreso'];
						
						$pesoTallal = (double) @$_POST['pesoTallalSubida'];
						$tallal = (double) @$_POST['tallalSubida'];

						if($pesoTallal == NULL || $pesoTallal == '' || $tallal == NULL || $tallal == ''){

							$comprobarl = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioTl = $pesoTallal / $tallal;
							$XcantidadTl = $pesoXsumarTl / $pesoUnitarioTl;
							$XcantidadTl = round($XcantidadTl);

						}

						$pesoInicialTl = @$_POST['nuevoPesoTl'];
						
						if($pesoInicialTl == NULL || $pesoInicialTl == ''){

						}else{

							$xTl = @$_POST['pesoTallalSubida'];
							$sumaXXl = $xTl + $pesoInicialTl;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallal = '$sumaXXl' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rl = '$pesoXsumarTl' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla xl
						$pesoTotalTxl = (double) @$_POST['peso_Rxl'];
						$pesoXsumarTxl = $pesoTotalTxl + (double) @$_POST['tallaxlIngreso'];
						
						$pesoTallaxl = (double) @$_POST['pesoTallaxlSubida'];
						$tallaxl = (double) @$_POST['tallaxlSubida'];

						if($pesoTallaxl == NULL || $pesoTallaxl == '' || $tallaxl == NULL || $tallaxl == ''){

							$comprobarxl = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioTxl = $pesoTallaxl / $tallaxl;
							$XcantidadTxl = $pesoXsumarTxl / $pesoUnitarioTxl;
							$XcantidadTxl = round($XcantidadTxl);

						}

						$pesoInicialTxl = @$_POST['nuevoPesoTxl'];
						
						if($pesoInicialTxl == NULL || $pesoInicialTxl == ''){

						}else{

							$xTxl = @$_POST['pesoTallaxlSubida'];
							$sumaXXxl = $xTxl + $pesoInicialTxl;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallaxl = '$sumaXXxl' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rxl = '$pesoXsumarTxl' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla u
						$pesoTotalTu = (double) @$_POST['peso_Ru'];
						$pesoXsumarTu = $pesoTotalTu + (double) @$_POST['tallauIngreso'];
						
						$pesoTallau = (double) @$_POST['pesoTallauSubida'];
						$tallau = (double) @$_POST['tallauSubida'];

						if($pesoTallau == NULL || $pesoTallau == '' || $tallau == NULL || $tallau == ''){

							$comprobaru = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioTu = $pesoTallau / $tallau;
							$XcantidadTu = $pesoXsumarTu / $pesoUnitarioTu;
							$XcantidadTu = round($XcantidadTu);

						}

						$pesoInicialTu = @$_POST['nuevoPesoTu'];
						
						if($pesoInicialTu == NULL || $pesoInicialTu == ''){

						}else{

							$xTu = @$_POST['pesoTallauSubida'];
							$sumaXXu = $xTu + $pesoInicialTu;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallau = '$sumaXXu' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Ru = '$pesoXsumarTu' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla est
						$pesoTotalTest = (double) @$_POST['peso_Rest'];
						$pesoXsumarTest = $pesoTotalTest + (double) @$_POST['tallaestIngreso'];
						
						$pesoTallaest = (double) @$_POST['pesoTallaestSubida'];
						$tallaest = (double) @$_POST['tallaestSubida'];

						if($pesoTallaest == NULL || $pesoTallaest == '' || $tallaest == NULL || $tallaest == ''){

							$comprobarest = "<strong style='color:crimson;'>No se puede actualizar<br>stock X peso<br>verifique el peso incial<br>verifique cantidad inicial</strong>";

						}else{

							$pesoUnitarioTest = $pesoTallaest / $tallaest;
							$XcantidadTest = $pesoXsumarTest / $pesoUnitarioTest;
							$XcantidadTest = round($XcantidadTest);

						}

						$pesoInicialTest = @$_POST['nuevoPesoTest'];
						
						if($pesoInicialTest == NULL || $pesoInicialTest == ''){

						}else{

							$xTest = @$_POST['pesoTallaestSubida'];
							$sumaXXest = $xTest + $pesoInicialTest;

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallaest = '$sumaXXest' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

						}
						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rest = '$pesoXsumarTest' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// fin
				}elseif(@$_POST['accion'] == 'actualizarDirectoSTOCK'){

					// Talla 6
						if(@$_POST['nuevaTalla6Ingreso'] != ''){
							$nuevaCantidadT6 = @$_POST['nuevaTalla6Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla6 = '$nuevaCantidadT6' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 8
						if(@$_POST['nuevaTalla8Ingreso'] != ''){
							$nuevaCantidadT8 = @$_POST['nuevaTalla8Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla8 = '$nuevaCantidadT8' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 10
						if(@$_POST['nuevaTalla10Ingreso'] != ''){
							$nuevaCantidadT10 = @$_POST['nuevaTalla10Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla10 = '$nuevaCantidadT10' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 12
						if(@$_POST['nuevaTalla12Ingreso'] != ''){
							$nuevaCantidadT12 = @$_POST['nuevaTalla12Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla12 = '$nuevaCantidadT12' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 14
						if(@$_POST['nuevaTalla14Ingreso'] != ''){
							$nuevaCantidadT14 = @$_POST['nuevaTalla14Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla14 = '$nuevaCantidadT14' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 16
						if(@$_POST['nuevaTalla16Ingreso'] != ''){
							$nuevaCantidadT16 = @$_POST['nuevaTalla16Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla16 = '$nuevaCantidadT16' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 18
						if(@$_POST['nuevaTalla18Ingreso'] != ''){
							$nuevaCantidadT18 = @$_POST['nuevaTalla18Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla18 = '$nuevaCantidadT18' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 20
						if(@$_POST['nuevaTalla20Ingreso'] != ''){
							$nuevaCantidadT20 = @$_POST['nuevaTalla20Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla20 = '$nuevaCantidadT20' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 26
						if(@$_POST['nuevaTalla26Ingreso'] != ''){
							$nuevaCantidadT26 = @$_POST['nuevaTalla26Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla26 = '$nuevaCantidadT26' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 28
						if(@$_POST['nuevaTalla28Ingreso'] != ''){
							$nuevaCantidadT28 = @$_POST['nuevaTalla28Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla28 = '$nuevaCantidadT28' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 30
						if(@$_POST['nuevaTalla30Ingreso'] != ''){
							$nuevaCantidadT30 = @$_POST['nuevaTalla30Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla30 = '$nuevaCantidadT30' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 32
						if(@$_POST['nuevaTalla32Ingreso'] != ''){
							$nuevaCantidadT32 = @$_POST['nuevaTalla32Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla32 = '$nuevaCantidadT32' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 34
						if(@$_POST['nuevaTalla34Ingreso'] != ''){
							$nuevaCantidadT34 = @$_POST['nuevaTalla34Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla34 = '$nuevaCantidadT34' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 36
						if(@$_POST['nuevaTalla36Ingreso'] != ''){
							$nuevaCantidadT36 = @$_POST['nuevaTalla36Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla36 = '$nuevaCantidadT36' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla 38
						if(@$_POST['nuevaTalla38Ingreso'] != ''){
							$nuevaCantidadT38 = @$_POST['nuevaTalla38Ingreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET talla38 = '$nuevaCantidadT38' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla S
						if(@$_POST['nuevaTallasIngreso'] != ''){
							$nuevaCantidadTs = @$_POST['nuevaTallasIngreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET tallas = '$nuevaCantidadTs' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla M
						if(@$_POST['nuevaTallamIngreso'] != ''){
							$nuevaCantidadTm = @$_POST['nuevaTallamIngreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET tallam = '$nuevaCantidadTm' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla L
						if(@$_POST['nuevaTallalIngreso'] != ''){
							$nuevaCantidadTl = @$_POST['nuevaTallalIngreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET tallal = '$nuevaCantidadTl' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla XL
						if(@$_POST['nuevaTallaxlIngreso'] != ''){
							$nuevaCantidadTxl = @$_POST['nuevaTallaxlIngreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET tallaxl = '$nuevaCantidadTxl' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla U
						if(@$_POST['nuevaTallauIngreso'] != ''){
							$nuevaCantidadTu = @$_POST['nuevaTallauIngreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET tallau = '$nuevaCantidadTu' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// Talla EST
						if(@$_POST['nuevaTallaestIngreso'] != ''){
							$nuevaCantidadTest = @$_POST['nuevaTallaestIngreso'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET tallaest = '$nuevaCantidadTest' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

				}elseif(@$_POST['accion'] == 'actualizarDirectoPeso'){

					// talla 6
						if(@$_POST['nuevoPesoT6'] != ''){
							$nuevaCantidadT6 = @$_POST['nuevoPesoT6'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla6 = '$nuevaCantidadT6' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 8
						if(@$_POST['nuevoPesoT8'] != ''){
							$nuevaCantidadT8 = @$_POST['nuevoPesoT8'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla8 = '$nuevaCantidadT8' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 10
						if(@$_POST['nuevoPesoT10'] != ''){
							$nuevaCantidadT10 = @$_POST['nuevoPesoT10'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla10 = '$nuevaCantidadT10' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 12
						if(@$_POST['nuevoPesoT12'] != ''){
							$nuevaCantidadT12 = @$_POST['nuevoPesoT12'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla12 = '$nuevaCantidadT12' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 14
						if(@$_POST['nuevoPesoT14'] != ''){
							$nuevaCantidadT14 = @$_POST['nuevoPesoT14'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla14 = '$nuevaCantidadT14' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 16
						if(@$_POST['nuevoPesoT16'] != ''){
							$nuevaCantidadT16 = @$_POST['nuevoPesoT16'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla16 = '$nuevaCantidadT16' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 18
						if(@$_POST['nuevoPesoT18'] != ''){
							$nuevaCantidadT18 = @$_POST['nuevoPesoT18'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla18 = '$nuevaCantidadT18' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 20
						if(@$_POST['nuevoPesoT20'] != ''){
							$nuevaCantidadT20 = @$_POST['nuevoPesoT20'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla20 = '$nuevaCantidadT20' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 26
						if(@$_POST['nuevoPesoT26'] != ''){
							$nuevaCantidadT26 = @$_POST['nuevoPesoT26'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla26 = '$nuevaCantidadT26' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 28
						if(@$_POST['nuevoPesoT28'] != ''){
							$nuevaCantidadT28 = @$_POST['nuevoPesoT28'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla28 = '$nuevaCantidadT28' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 30
						if(@$_POST['nuevoPesoT30'] != ''){
							$nuevaCantidadT30 = @$_POST['nuevoPesoT30'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla30 = '$nuevaCantidadT30' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 32
						if(@$_POST['nuevoPesoT32'] != ''){
							$nuevaCantidadT32 = @$_POST['nuevoPesoT32'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla32 = '$nuevaCantidadT32' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 34
						if(@$_POST['nuevoPesoT34'] != ''){
							$nuevaCantidadT34 = @$_POST['nuevoPesoT34'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla34 = '$nuevaCantidadT34' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 36
						if(@$_POST['nuevoPesoT36'] != ''){
							$nuevaCantidadT36 = @$_POST['nuevoPesoT36'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla36 = '$nuevaCantidadT36' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla 38
						if(@$_POST['nuevoPesoT38'] != ''){
							$nuevaCantidadT38 = @$_POST['nuevoPesoT38'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_talla38 = '$nuevaCantidadT38' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla S
						if(@$_POST['nuevoPesoTs'] != ''){
							$nuevaCantidadTs = @$_POST['nuevoPesoTs'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_tallas = '$nuevaCantidadTs' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla M
						if(@$_POST['nuevoPesoTm'] != ''){
							$nuevaCantidadTm = @$_POST['nuevoPesoTm'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_tallam = '$nuevaCantidadTm' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla L
						if(@$_POST['nuevoPesoTl'] != ''){
							$nuevaCantidadTl = @$_POST['nuevoPesoTl'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_tallal = '$nuevaCantidadTl' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla XL
						if(@$_POST['nuevoPesoTxl'] != ''){
							$nuevaCantidadTxl = @$_POST['nuevoPesoTxl'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_tallaxl = '$nuevaCantidadTxl' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla U
						if(@$_POST['nuevoPesoTu'] != ''){
							$nuevaCantidadTu = @$_POST['nuevoPesoTu'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_tallau = '$nuevaCantidadTu' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}

					// talla EST
						if(@$_POST['nuevoPesoTest'] != ''){
							$nuevaCantidadTest= @$_POST['nuevoPesoTest'];
							require_once("../../modelo/db.php");
									$conexion = new Conexion();
									$consulta = "UPDATE inventarios_productos SET peso_tallaest = '$nuevaCantidadTest' WHERE id_inventario =".$_GET['id_inventario'];
									$modules = $conexion->query($consulta);
						}
				}elseif(@$_POST['accion'] == 'actualizarDirectoSTOCKinicial'){

					// talla 6
					if(@$_POST['nuevaTalla6Inicial'] != ''){
						$nuevaCantidadT6Inicial = @$_POST['nuevaTalla6Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla6D = '$nuevaCantidadT6Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 8
					if(@$_POST['nuevaTalla8Inicial'] != ''){
						$nuevaCantidadT8Inicial = @$_POST['nuevaTalla8Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla8D = '$nuevaCantidadT8Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 10
					if(@$_POST['nuevaTalla10Inicial'] != ''){
						$nuevaCantidadT10Inicial = @$_POST['nuevaTalla10Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla10D = '$nuevaCantidadT10Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 12
					if(@$_POST['nuevaTalla12Inicial'] != ''){
						$nuevaCantidadT12Inicial = @$_POST['nuevaTalla12Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla12D = '$nuevaCantidadT12Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 14
					if(@$_POST['nuevaTalla14Inicial'] != ''){
						$nuevaCantidadT14Inicial = @$_POST['nuevaTalla14Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla14D = '$nuevaCantidadT14Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 16
					if(@$_POST['nuevaTalla16Inicial'] != ''){
						$nuevaCantidadT16Inicial = @$_POST['nuevaTalla16Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla16D = '$nuevaCantidadT16Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 18
					if(@$_POST['nuevaTalla18Inicial'] != ''){
						$nuevaCantidadT18Inicial = @$_POST['nuevaTalla18Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla18D = '$nuevaCantidadT18Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 20
					if(@$_POST['nuevaTalla20Inicial'] != ''){
						$nuevaCantidadT20Inicial = @$_POST['nuevaTalla20Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla20D = '$nuevaCantidadT20Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 26
					if(@$_POST['nuevaTalla26Inicial'] != ''){
						$nuevaCantidadT26Inicial = @$_POST['nuevaTalla26Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla26D = '$nuevaCantidadT26Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 28
					if(@$_POST['nuevaTalla28Inicial'] != ''){
						$nuevaCantidadT28Inicial = @$_POST['nuevaTalla28Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla28D = '$nuevaCantidadT28Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 30
					if(@$_POST['nuevaTalla30Inicial'] != ''){
						$nuevaCantidadT30Inicial = @$_POST['nuevaTalla30Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla30D = '$nuevaCantidadT30Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 32
					if(@$_POST['nuevaTalla32Inicial'] != ''){
						$nuevaCantidadT32Inicial = @$_POST['nuevaTalla32Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla32D = '$nuevaCantidadT32Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 34
					if(@$_POST['nuevaTalla34Inicial'] != ''){
						$nuevaCantidadT34Inicial = @$_POST['nuevaTalla34Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla34D = '$nuevaCantidadT34Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 36
					if(@$_POST['nuevaTalla36Inicial'] != ''){
						$nuevaCantidadT36Inicial = @$_POST['nuevaTalla36Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla36D = '$nuevaCantidadT36Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla 38
					if(@$_POST['nuevaTalla38Inicial'] != ''){
						$nuevaCantidadT38Inicial = @$_POST['nuevaTalla38Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla38D = '$nuevaCantidadT38Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla S
					if(@$_POST['nuevaTallasInicial'] != ''){
						$nuevaCantidadTsInicial = @$_POST['nuevaTallasInicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallasD = '$nuevaCantidadTsInicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla M
					if(@$_POST['nuevaTallamInicial'] != ''){
						$nuevaCantidadTmInicial = @$_POST['nuevaTallamInicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallamD = '$nuevaCantidadTmInicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla L
					if(@$_POST['nuevaTallalInicial'] != ''){
						$nuevaCantidadTlInicial = @$_POST['nuevaTallalInicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallalD = '$nuevaCantidadTlInicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla XL
					if(@$_POST['nuevaTallaxlInicial'] != ''){
						$nuevaCantidadTxlInicial = @$_POST['nuevaTallaxlInicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallaxlD = '$nuevaCantidadTxlInicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla U
					if(@$_POST['nuevaTallauInicial'] != ''){
						$nuevaCantidadTuInicial = @$_POST['nuevaTallauInicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallauD = '$nuevaCantidadTuInicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}

					// talla EST
					if(@$_POST['nuevaTallaestInicial'] != ''){
						$nuevaCantidadTestInicial = @$_POST['nuevaTallaestInicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallaestD = '$nuevaCantidadTestInicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}
				}elseif(@$_POST['accion'] == 'cambiarEstadoReferencia'){
					$newStado = @$_POST['estadoReferencia'];
					require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET estado = '$newStado' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
				}elseif(@$_POST['accion'] == 'cambiarVerificadoReferencia'){
					$newVerificado = @$_POST['estadoVerificado'];
					require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET verificado = '$newVerificado' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
				}elseif(@$_POST['accion'] == 'cambiarColor'){
					$newColor = @$_POST['color'];
					require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET color = '$newColor' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
				}elseif(@$_POST['accion'] == 'subirImagen'){
					
					require_once("../../modelo/db.php");
						$conexion = new Conexion();
						if (isset($_FILES['imagen'])){

							if ($_FILES['imagen']['type']=='image/png' || $_FILES['imagen']['type']=='image/jpeg'){
								
								//print_r($_FILES);

								move_uploaded_file($_FILES["imagen"]["tmp_name"], "imagenesReferencias/".$_GET['id_inventario'].".jpg");
								$consulta = "UPDATE inventarios_productos SET confirma_imagen_subida = '1' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}else{
								echo 'no se envio';
							}

						}
				}

				// Resetear variables Talla 6
					// Serializando peso talla6
						if(@$_POST['serializadoT6'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT6'] = '';

						}
					
					// Serializando peso talla6 R
						if(@$_POST['serializadoT6R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT6R'] = '';

						}
					
					// Serializando Stock Inicial talla6
						if(@$_POST['serializadoStockInicialT6'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla6D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT6'] = '';

						}

					// Serializando Stock actual talla6
						if(@$_POST['serializadoStockT6'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT6'] = '';

						}

				// Resetear variables Talla 18
					// Serializando peso talla18
						if(@$_POST['serializadoT18'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla18 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT18'] = '';

						}
					
					// Serializando peso talla18 R
						if(@$_POST['serializadoT18R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R18 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT18R'] = '';

						}
					
					// Serializando Stock Inicial talla18
						if(@$_POST['serializadoStockInicialT18'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla18D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT18'] = '';

						}

					// Serializando Stock actual talla18
						if(@$_POST['serializadoStockT18'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla18 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT18'] = '';

						}

				// Resetear variables talla34
					// Serializando peso talla34
						if(@$_POST['serializadoT34'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla34 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT34'] = '';

						}
					
					// Serializando peso talla34 R
						if(@$_POST['serializadoT34R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R34 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT34R'] = '';

						}
					
					// Serializando Stock Inicial talla34
						if(@$_POST['serializadoStockInicialT34'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla34D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT34'] = '';

						}

					// Serializando Stock actual talla34
						if(@$_POST['serializadoStockT34'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla34 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT34'] = '';

						}

				// Resetear variables tallaxl
					// Serializando peso tallaXL
						if(@$_POST['serializadoTxl'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallaxl = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTxl'] = '';

						}
					
					// Serializando peso tallaXL R
						if(@$_POST['serializadoTxlR'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rxl = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTxlR'] = '';

						}
					
					// Serializando Stock Inicial tallaXL
						if(@$_POST['serializadoStockInicialTxl'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallaxlD = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialTxl'] = '';

						}

					// Serializando Stock actual tallaXL
						if(@$_POST['serializadoStockTxl'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallaxl = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockTxl'] = '';

						}

				// Resetear variables talla8
					// Serializando peso talla8
						if(@$_POST['serializadoT8'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla8 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT8'] = '';

						}
					
					// Serializando peso talla8 R
						if(@$_POST['serializadoT8R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R8 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT8R'] = '';

						}
					
					// Serializando Stock Inicial talla8
						if(@$_POST['serializadoStockInicialT8'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla8D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT8'] = '';

						}

					// Serializando Stock actual talla8
						if(@$_POST['serializadoStockT8'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla8 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT8'] = '';

						}

				// Resetear variables talla20
					// Serializando peso talla20
						if(@$_POST['serializadoT20'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla20 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT20'] = '';

						}
					
					// Serializando peso talla20 R
						if(@$_POST['serializadoT20R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R20 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT20R'] = '';

						}
					
					// Serializando Stock Inicial talla20
						if(@$_POST['serializadoStockInicialT20'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla20D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT20'] = '';

						}

					// Serializando Stock actual talla20
						if(@$_POST['serializadoStockT20'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla20 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT20'] = '';

						}

				// Resetear variables talla36
					// Serializando peso talla36
						if(@$_POST['serializadoT36'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla36 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT36'] = '';

						}
					
					// Serializando peso talla36 R
						if(@$_POST['serializadoT36R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R36 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT36R'] = '';

						}
					
					// Serializando Stock Inicial talla36
						if(@$_POST['serializadoStockInicialT36'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla36D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT36'] = '';

						}

					// Serializando Stock actual talla36
						if(@$_POST['serializadoStockT36'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla36 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT36'] = '';

						}

				// Resetear variables tallau
					// Serializando peso tallaU
						if(@$_POST['serializadoTu'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallau = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTu'] = '';

						}
					
					// Serializando peso tallaU R
						if(@$_POST['serializadoTuR'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Ru = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTuR'] = '';

						}
					
					// Serializando Stock Inicial tallaU
						if(@$_POST['serializadoStockInicialTu'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallauD = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialTu'] = '';

						}

					// Serializando Stock actual tallaU
						if(@$_POST['serializadoStockTu'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallau = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockTu'] = '';

						}

				// Resetear variables talla10
					// Serializando peso talla10
						if(@$_POST['serializadoT10'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla10 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT10'] = '';

						}
					
					// Serializando peso talla10 R
						if(@$_POST['serializadoT10R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R10 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT10R'] = '';

						}
					
					// Serializando Stock Inicial talla10
						if(@$_POST['serializadoStockInicialT10'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla10D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT10'] = '';

						}

					// Serializando Stock actual talla10
						if(@$_POST['serializadoStockT10'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla10 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT10'] = '';

						}

				// Resetear variables talla26
					// Serializando peso talla26
						if(@$_POST['serializadoT26'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla26 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT26'] = '';

						}
					
					// Serializando peso talla26 R
						if(@$_POST['serializadoT26R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R26 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT26R'] = '';

						}
					
					// Serializando Stock Inicial talla26
						if(@$_POST['serializadoStockInicialT26'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla26D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT26'] = '';

						}

					// Serializando Stock actual talla26
						if(@$_POST['serializadoStockT26'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla26 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT26'] = '';

						}

				// Resetear variables talla38
					// Serializando peso talla38
						if(@$_POST['serializadoT38'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla38 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT38'] = '';

						}
					
					// Serializando peso talla38 R
						if(@$_POST['serializadoT38R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R38 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT38R'] = '';

						}
					
					// Serializando Stock Inicial talla38
						if(@$_POST['serializadoStockInicialT38'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla38D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT38'] = '';

						}

					// Serializando Stock actual talla38
						if(@$_POST['serializadoStockT38'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla38 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT38'] = '';

						}

				// Resetear variables tallaest
					// Serializando peso tallaEST
						if(@$_POST['serializadoTest'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallaest = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTest'] = '';

						}
					
					// Serializando peso tallaEST R
						if(@$_POST['serializadoTestR'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rest = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTestR'] = '';

						}
					
					// Serializando Stock Inicial tallaEST
						if(@$_POST['serializadoStockInicialTest'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallaestD = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialTest'] = '';

						}

					// Serializando Stock actual tallaEST
						if(@$_POST['serializadoStockTest'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallaest = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockTest'] = '';

						}

				// Resetear variables talla12
					// Serializando peso talla12
						if(@$_POST['serializadoT12'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla12 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT12'] = '';

						}
					
					// Serializando peso talla12 R
						if(@$_POST['serializadoT12R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R12 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT12R'] = '';

						}
					
					// Serializando Stock Inicial talla12
						if(@$_POST['serializadoStockInicialT12'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla12D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT12'] = '';

						}

					// Serializando Stock actual talla12
						if(@$_POST['serializadoStockT12'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla12 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT12'] = '';

						}

				// Resetear variables talla28
					// Serializando peso talla28
						if(@$_POST['serializadoT28'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla28 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT28'] = '';

						}
					
					// Serializando peso talla28 R
						if(@$_POST['serializadoT28R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R28 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT28R'] = '';

						}
					
					// Serializando Stock Inicial talla28
						if(@$_POST['serializadoStockInicialT28'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla28D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT28'] = '';

						}

					// Serializando Stock actual talla28
						if(@$_POST['serializadoStockT28'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla28 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT28'] = '';

						}

				// Resetear variables tallas
					// Serializando peso tallaS
						if(@$_POST['serializadoTs'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallas = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTs'] = '';

						}
					
					// Serializando peso tallaS R
						if(@$_POST['serializadoTsR'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rs = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTsR'] = '';

						}
					
					// Serializando Stock Inicial tallaS
						if(@$_POST['serializadoStockInicialTs'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallasD = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialTs'] = '';

						}

					// Serializando Stock actual tallaS
						if(@$_POST['serializadoStockTs'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallas = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockTs'] = '';

						}

				// Resetear variables talla14
					// Serializando peso talla14
						if(@$_POST['serializadoT14'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla14 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT14'] = '';

						}
					
					// Serializando peso talla14 R
						if(@$_POST['serializadoT6R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R14 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT14R'] = '';

						}
					
					// Serializando Stock Inicial talla14
						if(@$_POST['serializadoStockInicialT14'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla14D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT14'] = '';

						}

					// Serializando Stock actual talla14
						if(@$_POST['serializadoStockT14'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla14 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT14'] = '';

						}

				// Resetear variables talla30
					// Serializando peso talla30
						if(@$_POST['serializadoT30'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla30 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT30'] = '';

						}
					
					// Serializando peso talla30 R
						if(@$_POST['serializadoT30R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R30 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT30R'] = '';

						}
					
					// Serializando Stock Inicial talla30
						if(@$_POST['serializadoStockInicialT30'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla30D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT30'] = '';

						}

					// Serializando Stock actual talla30
						if(@$_POST['serializadoStockT30'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla30 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT30'] = '';

						}

				// Resetear variables tallam
					// Serializando peso tallaM
						if(@$_POST['serializadoTm'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallam = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTm'] = '';

						}
					
					// Serializando peso tallaM R
						if(@$_POST['serializadoTmR'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rm = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTmR'] = '';

						}
					
					// Serializando Stock Inicial tallaM
						if(@$_POST['serializadoStockInicialTm'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallamD = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialTm'] = '';

						}

					// Serializando Stock actual tallaM
						if(@$_POST['serializadoStockTm'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallam = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockTm'] = '';

						}

				// Resetear variables talla16
					// Serializando peso talla16
						if(@$_POST['serializadoT16'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla16 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT16'] = '';

						}
					
					// Serializando peso talla16 R
						if(@$_POST['serializadoT16R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R16 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT16R'] = '';

						}
					
					// Serializando Stock Inicial talla16
						if(@$_POST['serializadoStockInicialT16'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla16D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT16'] = '';

						}

					// Serializando Stock actual talla16
						if(@$_POST['serializadoStockT16'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla16 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT16'] = '';

						}

				// Resetear variables talla32
					// Serializando peso talla32
						if(@$_POST['serializadoT32'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_talla32 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT32'] = '';

						}
					
					// Serializando peso talla32 R
						if(@$_POST['serializadoT32R'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R32 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoT32R'] = '';

						}
					
					// Serializando Stock Inicial talla32
						if(@$_POST['serializadoStockInicialT32'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla32D = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialT32'] = '';

						}

					// Serializando Stock actual talla32
						if(@$_POST['serializadoStockT32'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET talla32 = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockT32'] = '';

						}

				// Resetear variables tallal
					// Serializando peso tallaL
						if(@$_POST['serializadoTl'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_tallal = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTl'] = '';

						}
					
					// Serializando peso tallaL R
						if(@$_POST['serializadoTlR'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rl = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoTlR'] = '';

						}
					
					// Serializando Stock Inicial tallaL
						if(@$_POST['serializadoStockInicialTl'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallalD = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockInicialTl'] = '';

						}

					// Serializando Stock actual tallaL
						if(@$_POST['serializadoStockTl'] != ''){

							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET tallal = '0' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							@$_POST['serializadoStockTl'] = '';

						}

			?>
			</div>
			<div class="col-sm-12">
			<form action="" method="post" onkeyup="onKeyDownHandler(event);" enctype="multipart/form-data">
				<div id="espacioTallas">
					<div class="col-sm-12">

						<legend>TALLAS X REFERENCIA</legend>
						<legend>Reinventariando referencia: <?php echo $keyV['referencia']; ?><br><?php echo $keyV['descripcion']; ?></legend>
						
					</div>
					<?php
					foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
					?>

						<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;justify-content: space-between;" class="col-sm-12">
							
							<div class="col-sm-5">

								<?php
								//print_r($key);
								if($key[114] == 0){

									echo "<img src='../../panel/modal/imagenesReferencias/x.png' alt='' width='400px' style=''>";

								}else{

								?>
									<img src="../../panel/modal/imagenesReferencias/<?php echo $_GET['id_inventario']; ?>.jpg" alt="" width="400px" style="">
								<?php
								}

								?>
							</div>
						
							<div class="col-sm-4">

								<div class="col-sm-12" style="padding:20px 0px">
									<label style="color: gray; text-transform: uppercase;" for="">
										<?php
											echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>Estado actual</strong><br>";
											echo $key['estado'];
									
										?>
									</label>
									<div style="width: 100%;">
										<select id="estadoReferencia" name="estadoReferencia">
											<option value="">- Cambiar estado -</option>
											<option value="SUBIDO">SUBIDO</option>
											<option value="EXISTENCIA">EXISTENCIA</option>
											<option value="PROCESO">PROCESO</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12" style="padding:20px 0px">
									<label style="color: gray; text-transform: uppercase;" for="">
										<?php
											echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>VERIFICADO actual</strong><br>";
											if($key['verificado'] == 0){
												echo 'No verificado';
											}else{
												echo 'verificado';
											}
									
										?>
									</label>
									<div style="width: 100%;">
										<select id="estadoVerificado" name="estadoVerificado">
											<option value="">- Cambiar Verificado -</option>
											<option value="0">No verificado</option>
											<option value="1">Verificado</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12" style="padding:20px 0px">
									<label style="color: gray; text-transform: uppercase;" for="">
										<?php
											echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>Color actual</strong><br>";
											echo $productos->color_hexa($key['color']);

										?>
									</label>
									<div style="width: 100%;">
										<select id="color" name="color">
											<option value="">- Cambiar color -</option>
											<?php
											foreach ($inventarios->coloresOpciones() as $ckey){
											?>
											<option value="<?php echo $ckey[1] ?>"><?php echo $ckey[1] ?></option>"

											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12" style="padding:20px 0px">
									<label style="color: gray; text-transform: uppercase;" for="">
										<?php
											echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>Subir imagen . . .</strong><br>";

										?>
									</label>
									<div style="width: 100%;">
										<input name="imagen" id="imagen" type="file"/>
									</div>
								</div>

							</div>
						</div>

						<div class="col-sm-3">
							<!-- Talla 6 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for="">
									<?php 

										echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;' onclick='operationTalla6Container()'>TALLA 6</strong><br>";
										if (empty($comprobar6)){
										}else {
											echo $comprobar6;
											$comprobar6 = "";
										}
										echo "<br>STOCK ACTUAL: ".$key['talla6']."<br>STOCK INICIAL: ".$key['talla6D']."<br>PESO ACTUAL: ".$key['peso_R6']."<br>PESO INICIAL: ".$key['peso_talla6']."";
										echo "<div id='operationTalla6Container' style='display: non;'>";
											echo "<br>-------------------------------------------------<br>";
											echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
											if (empty($cantidadT6)){
												echo 0;
											}else {
												echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT6</strong>";
											}
											echo "<br>";
											echo "Por actualizar:";
											if (empty($XcantidadT6)){
												echo 0;
											}else {
												echo $XcantidadT6;
											}
											echo "<br>";
											echo 'Nuevo Peso :';
											if (empty($key['peso_R6'])) {
												echo 0;
											} else {
												echo $key['peso_R6'];
											}
												echo "<br>";
									?>
											<input type="text" required="" value="0" name="talla6Ingreso" id="talla6Ingreso" class="form-control" placeholder="Peso">
											<input type="hidden" required="" value="<?php echo $key['peso_talla6'] ?>" name="pesoTalla6Subida" id="pesoTalla6" class="form-control">
											<input type="hidden" required="" value="<?php echo $key['talla6D'] ?>" name="talla6Subida" id="talla6" class="form-control">
											<input type="hidden" required="" value="<?php echo $key['peso_R6'] ?>" name="peso_R6" id="talla6" class="form-control">
											<br>
											<?php
												echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
											?>
											<input title="SHIFT" type="text" value="" name="nuevaTalla6Ingreso" id="nuevaTalla6Ingreso" class="form-control" placeholder="Nuevo stock actual">
											<input title="ALT" type="text" value="" name="nuevaTalla6Inicial" id="nuevaTalla6Inicial" class="form-control" placeholder="Nuevo stock inicial">
											<?php
												echo "-------------------------------------------------<br>";
												echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
											?>
											<input title="BLOG MAYUS" type="text" value="" name="nuevoPesoT6" id="nuevoPesoT6" class="form-control" placeholder="Peso Nuevo">
											<?php
												echo "-------------------------------------------------<br>";
												echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
											?>
											<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
												<input type="hidden" name="serializadoT6" value="" id="serializarT6">
												<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT6" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla6(event)">
												<input type="hidden" name="serializadoT6R" value="" id="serializarT6R">
												<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT6R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla6R(event)">
											</div>
											<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
												<input type="hidden" name="serializadoStockInicialT6" value="" id="serializadoStockInicialT6">
												<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT6" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla6(event)">
												<input type="hidden" name="serializadoStockT6" value="" id="serializadoStockT6">
												<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT6" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla6(event)">
											</div>
										</div>
								</label>
							</div>
							<!-- Talla 14 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 14</strong><br>";
																							if (empty($comprobar14)){
																							}else {
																								echo $comprobar14;
																								$comprobar14 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla14']."<br>STOCK INICIAL: ".$key['talla14D']."<br>PESO ACTUAL: ".$key['peso_R14']."<br>PESO INICIAL: ".$key['peso_talla14']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT14)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT14</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT14)){
																								echo 0;
																							}else {
																								echo $XcantidadT14;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R14'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R14'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla14Ingreso" id="talla14Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla14'] ?>" name="pesoTalla14Subida" id="pesoTalla14" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla14D'] ?>" name="talla14Subida" id="talla14" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R14'] ?>" name="peso_R14" id="talla14" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla14Ingreso" id="nuevaTalla14Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla14Inicial" id="nuevaTalla14Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT14" id="nuevoPesoT14" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT14" value="" id="serializarT14">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT14" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla14(event)">
										<input type="hidden" name="serializadoT14R" value="" id="serializarT14R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT14R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla14R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT14" value="" id="serializadoStockInicialT14">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT14" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla14(event)">
										<input type="hidden" name="serializadoStockT14" value="" id="serializadoStockT14">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT14" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla14(event)">
									</div>
								</label>
							</div>
							<!-- Talla 26 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 26</strong><br>";
																							if (empty($comprobar26)){
																							}else {
																								echo $comprobar26;
																								$comprobar26 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla26']."<br>STOCK INICIAL: ".$key['talla26D']."<br>PESO ACTUAL: ".$key['peso_R26']."<br>PESO INICIAL: ".$key['peso_talla26']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT26)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT26</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT26)){
																								echo 0;
																							}else {
																								echo $XcantidadT26;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R26'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R26'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla26Ingreso" id="talla26Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla26'] ?>" name="pesoTalla26Subida" id="pesoTalla26" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla26D'] ?>" name="talla26Subida" id="talla26" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R26'] ?>" name="peso_R26" id="talla26" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla26Ingreso" id="nuevaTalla26Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla26Inicial" id="nuevaTalla26Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT26" id="nuevoPesoT26" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT26" value="" id="serializarT26">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT26" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla26(event)">
										<input type="hidden" name="serializadoT26R" value="" id="serializarT26R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT26R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla26R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT26" value="" id="serializadoStockInicialT26">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT26" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla26(event)">
										<input type="hidden" name="serializadoStockT26" value="" id="serializadoStockT26">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT26" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla26(event)">
									</div>
								</label>
							</div>
							<!-- Talla 34 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																								echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 34</strong><br>";
																								if (empty($comprobar34)){
																								}else {
																									echo $comprobar34;
																									$comprobar34 = "";
																								}
																								echo "<br>STOCK ACTUAL: ".$key['talla34']."<br>STOCK INICIAL: ".$key['talla34D']."<br>PESO ACTUAL: ".$key['peso_R34']."<br>PESO INICIAL: ".$key['peso_talla34']."<br>-------------------------------------------------<br>";
																								echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																								if (empty($cantidadT34)){
																									echo 0;
																								}else {
																									echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT34</strong>";
																								}
																								echo "<br>";
																								echo "Por actualizar:";
																								if (empty($XcantidadT34)){
																									echo 0;
																								}else {
																									echo $XcantidadT34;
																								}
																								echo "<br>";
																								echo 'Nuevo Peso :';
																								if (empty($key['peso_R34'])) {
																									echo 0;
																								} else {
																										echo $key['peso_R34'];
																								}
																								echo "<br>";
																						?>
									<input type="text" required="" value="0" name="talla34Ingreso" id="talla34Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla34'] ?>" name="pesoTalla34Subida" id="pesoTalla34" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla34D'] ?>" name="talla34Subida" id="talla34" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R34'] ?>" name="peso_R34" id="talla34" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla34Ingreso" id="nuevaTalla34Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla34Inicial" id="nuevaTalla34Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT34" id="nuevoPesoT34" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT34" value="" id="serializarT34">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT34" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla34(event)">
										<input type="hidden" name="serializadoT34R" value="" id="serializarT34R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT34R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla34R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT34" value="" id="serializadoStockInicialT34">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT34" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla34(event)">
										<input type="hidden" name="serializadoStockT34" value="" id="serializadoStockT34">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT34" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla34(event)">
									</div>
								</label>
							</div>
							<!-- Talla M -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA M</strong><br>";
																							if (empty($comprobarm)){
																							}else {
																								echo $comprobarm;
																								$comprobarm = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['tallam']."<br>STOCK INICIAL: ".$key['tallamD']."<br>PESO ACTUAL: ".$key['peso_Rm']."<br>PESO INICIAL: ".$key['peso_tallam']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadTm)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTm</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadTm)){
																								echo 0;
																							}else {
																								echo $XcantidadTm;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_Rm'])) {
																								echo 0;
																							} else {
																									echo $key['peso_Rm'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="tallamIngreso" id="tallamIngreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_tallam'] ?>" name="pesoTallamSubida" id="pesoTallam" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallamD'] ?>" name="tallamSubida" id="tallam" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rm'] ?>" name="peso_Rm" id="tallam" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTallamIngreso" id="nuevaTallamIngreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTallamInicial" id="nuevaTallamInicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoTm" id="nuevoPesoTm" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoTm" value="" id="serializarTm">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarTm" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTallam(event)">
										<input type="hidden" name="serializadoTmR" value="" id="serializarTmR">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarTmR" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTallamR(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialTm" value="" id="serializadoStockInicialTm">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialTm" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTallam(event)">
										<input type="hidden" name="serializadoStockTm" value="" id="serializadoStockTm">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockTm" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTallam(event)">
									</div>
								</label>
							</div>
							<!-- Talla EST -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA EST</strong><br>";
																							if (empty($comprobarest)){
																							}else {
																								echo $comprobarest;
																								$comprobarest = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['tallaest']."<br>STOCK INICIAL: ".$key['tallaestD']."<br>PESO ACTUAL: ".$key['peso_Rest']."<br>PESO INICIAL: ".$key['peso_tallaest']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadTest)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTest</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadTest)){
																								echo 0;
																							}else {
																								echo $XcantidadTest;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_Rest'])) {
																								echo 0;
																							} else {
																									echo $key['peso_Rest'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="tallaestIngreso" id="tallaestIngreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_tallaest'] ?>" name="pesoTallaestSubida" id="pesoTallaest" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallaestD'] ?>" name="tallaestSubida" id="tallaest" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rest'] ?>" name="peso_Rest" id="tallaest" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTallaestIngreso" id="nuevaTallaestIngreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTallaestInicial" id="nuevaTallaestInicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoTest" id="nuevoPesoTest" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoTest" value="" id="serializarTest">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarTest" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTallaest(event)">
										<input type="hidden" name="serializadoTestR" value="" id="serializarTestR">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarTestR" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTallaestR(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialTest" value="" id="serializadoStockInicialTest">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialTest" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTallaest(event)">
										<input type="hidden" name="serializadoStockTest" value="" id="serializadoStockTest">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockTest" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTallaest(event)">
									</div>
								</label>
							</div>
						</div>

						<div class="col-sm-3">
							<!-- Talla 8 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 8</strong><br>";
																							if (empty($comprobar8)){
																							}else {
																								echo $comprobar8;
																								$comprobar8 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla8']."<br>STOCK INICIAL: ".$key['talla8D']."<br>PESO ACTUAL: ".$key['peso_R8']."<br>PESO INICIAL: ".$key['peso_talla8']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT8)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT8</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT8)){
																								echo 0;
																							}else {
																								echo $XcantidadT8;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R8'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R8'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla8Ingreso" id="talla8Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla8'] ?>" name="pesoTalla8Subida" id="pesoTalla8" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla8D'] ?>" name="talla8Subida" id="talla8" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R8'] ?>" name="peso_R8" id="talla8" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla8Ingreso" id="nuevaTalla8Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla8Inicial" id="nuevaTalla8Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT8" id="nuevoPesoT8" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT8" value="" id="serializarT8">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT8" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla8(event)">
										<input type="hidden" name="serializadoT8R" value="" id="serializarT8R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT8R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla8R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT8" value="" id="serializadoStockInicialT8">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT8" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla8(event)">
										<input type="hidden" name="serializadoStockT8" value="" id="serializadoStockT8">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT8" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla8(event)">
									</div>
								</label>
							</div>
							<!-- Talla 16 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 16</strong><br>";
																							if (empty($comprobar16)){
																							}else {
																								echo $comprobar16;
																								$comprobar16 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla16']."<br>STOCK INICIAL: ".$key['talla16D']."<br>PESO ACTUAL: ".$key['peso_R16']."<br>PESO INICIAL: ".$key['peso_talla16']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT16)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT16</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT16)){
																								echo 0;
																							}else {
																								echo $XcantidadT16;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R16'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R16'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla16Ingreso" id="talla16Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla16'] ?>" name="pesoTalla16Subida" id="pesoTalla16" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla16D'] ?>" name="talla16Subida" id="talla16" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R16'] ?>" name="peso_R16" id="talla16" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla16Ingreso" id="nuevaTalla16Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla16Inicial" id="nuevaTalla16Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT16" id="nuevoPesoT16" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT16" value="" id="serializarT16">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT16" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla16(event)">
										<input type="hidden" name="serializadoT16R" value="" id="serializarT16R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT16R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla16R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT16" value="" id="serializadoStockInicialT16">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT16" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla16(event)">
										<input type="hidden" name="serializadoStockT16" value="" id="serializadoStockT16">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT16" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla16(event)">
									</div>
								</label>
							</div>
							<!-- Talla 28 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 28</strong><br>";
																							if (empty($comprobar28)){
																							}else {
																								echo $comprobar28;
																								$comprobar28 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla28']."<br>STOCK INICIAL: ".$key['talla28D']."<br>PESO ACTUAL: ".$key['peso_R28']."<br>PESO INICIAL: ".$key['peso_talla28']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT28)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT28</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT28)){
																								echo 0;
																							}else {
																								echo $XcantidadT28;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R28'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R28'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla28Ingreso" id="talla28Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla28'] ?>" name="pesoTalla28Subida" id="pesoTalla28" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla28D'] ?>" name="talla28Subida" id="talla28" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R28'] ?>" name="peso_R28" id="talla28" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla28Ingreso" id="nuevaTalla28Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla28Inicial" id="nuevaTalla28Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT28" id="nuevoPesoT28" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT28" value="" id="serializarT28">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT28" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla28(event)">
										<input type="hidden" name="serializadoT28R" value="" id="serializarT28R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT28R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla28R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT28" value="" id="serializadoStockInicialT28">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT28" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla28(event)">
										<input type="hidden" name="serializadoStockT28" value="" id="serializadoStockT28">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT28" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla28(event)">
									</div>
								</label>
							</div>
							<!-- Talla 36 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 36</strong><br>";
																							if (empty($comprobar36)){
																							}else {
																								echo $comprobar36;
																								$comprobar36 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla36']."<br>STOCK INICIAL: ".$key['talla36D']."<br>PESO ACTUAL: ".$key['peso_R36']."<br>PESO INICIAL: ".$key['peso_talla36']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT36)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT36</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT36)){
																								echo 0;
																							}else {
																								echo $XcantidadT36;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R36'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R36'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla36Ingreso" id="talla36Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla36'] ?>" name="pesoTalla36Subida" id="pesoTalla36" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla36D'] ?>" name="talla36Subida" id="talla36" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R36'] ?>" name="peso_R36" id="talla36" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla36Ingreso" id="nuevaTalla36Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla36Inicial" id="nuevaTalla36Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT36" id="nuevoPesoT36" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT36" value="" id="serializarT36">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT36" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla36(event)">
										<input type="hidden" name="serializadoT36R" value="" id="serializarT36R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT36R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla36R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT36" value="" id="serializadoStockInicialT36">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT36" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla36(event)">
										<input type="hidden" name="serializadoStockT36" value="" id="serializadoStockT36">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT36" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla36(event)">
									</div>
								</label>
							</div>
							<!-- Talla L -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA L</strong><br>";
																							if (empty($comprobarl)){
																							}else {
																								echo $comprobarl;
																								$comprobarl = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['tallal']."<br>STOCK INICIAL: ".$key['tallalD']."<br>PESO ACTUAL: ".$key['peso_Rl']."<br>PESO INICIAL: ".$key['peso_tallal']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadTl)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTl</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadTl)){
																								echo 0;
																							}else {
																								echo $XcantidadTl;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_Rl'])) {
																								echo 0;
																							} else {
																									echo $key['peso_Rl'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="tallalIngreso" id="tallalIngreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_tallal'] ?>" name="pesoTallalSubida" id="pesoTallal" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallalD'] ?>" name="tallalSubida" id="tallal" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rl'] ?>" name="peso_Rl" id="tallal" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTallalIngreso" id="nuevaTallalIngreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTallalInicial" id="nuevaTallalInicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoTl" id="nuevoPesoTl" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoTl" value="" id="serializarTl">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarTl" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTallal(event)">
										<input type="hidden" name="serializadoTlR" value="" id="serializarTlR">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarTlR" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTallalR(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialTl" value="" id="serializadoStockInicialTl">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialTl" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTallal(event)">
										<input type="hidden" name="serializadoStockTl" value="" id="serializadoStockTl">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockTl" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTallal(event)">
									</div>
								</label>
							</div>
						</div>

						<div class="col-sm-3">
							<!-- Talla 10 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 10</strong><br>";
																							if (empty($comprobar10)){
																							}else {
																								echo $comprobar10;
																								$comprobar10 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla10']."<br>STOCK INICIAL: ".$key['talla10D']."<br>PESO ACTUAL: ".$key['peso_R10']."<br>PESO INICIAL: ".$key['peso_talla10']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT10)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT10</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT10)){
																								echo 0;
																							}else {
																								echo $XcantidadT10;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R10'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R10'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla10Ingreso" id="talla10Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla10'] ?>" name="pesoTalla10Subida" id="pesoTalla10" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla10D'] ?>" name="talla10Subida" id="talla10" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R10'] ?>" name="peso_R10" id="talla10" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla10Ingreso" id="nuevaTalla10Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla10Inicial" id="nuevaTalla10Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT10" id="nuevoPesoT10" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT10" value="" id="serializarT10">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT10" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla10(event)">
										<input type="hidden" name="serializadoT10R" value="" id="serializarT10R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT10R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla10R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT10" value="" id="serializadoStockInicialT10">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT10" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla10(event)">
										<input type="hidden" name="serializadoStockT10" value="" id="serializadoStockT10">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT10" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla10(event)">
									</div>
								</label>
							</div>
							<!-- Talla 18 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																								echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 18</strong><br>";
																								if (empty($comprobar18)){
																								}else {
																									echo $comprobar18;
																									$comprobar18 = "";
																								}
																								echo "<br>STOCK ACTUAL: ".$key['talla18']."<br>STOCK INICIAL: ".$key['talla18D']."<br>PESO ACTUAL: ".$key['peso_R18']."<br>PESO INICIAL: ".$key['peso_talla18']."<br>-------------------------------------------------<br>";
																								echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																								if (empty($cantidadT18)){
																									echo 0;
																								}else {
																									echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT18</strong>";
																								}
																								echo "<br>";
																								echo "Por actualizar:";
																								if (empty($XcantidadT18)){
																									echo 0;
																								}else {
																									echo $XcantidadT18;
																								}
																								echo "<br>";
																								echo 'Nuevo Peso :';
																								if (empty($key['peso_R18'])) {
																									echo 0;
																								} else {
																										echo $key['peso_R18'];
																								}
																								echo "<br>";
																						?>
									<input type="text" required="" value="0" name="talla18Ingreso" id="talla18Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla18'] ?>" name="pesoTalla18Subida" id="pesoTalla18" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla18D'] ?>" name="talla18Subida" id="talla18" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R18'] ?>" name="peso_R18" id="talla18" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla18Ingreso" id="nuevaTalla18Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla18Inicial" id="nuevaTalla18Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT18" id="nuevoPesoT18" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT18" value="" id="serializarT18">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT18" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla18(event)">
										<input type="hidden" name="serializadoT18R" value="" id="serializarT18R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT18R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla18R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT18" value="" id="serializadoStockInicialT18">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT18" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla18(event)">
										<input type="hidden" name="serializadoStockT18" value="" id="serializadoStockT18">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT18" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla18(event)">
									</div>
								</label>
							</div>
							<!-- Talla 30 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 30</strong><br>";
																							if (empty($comprobar30)){
																							}else {
																								echo $comprobar30;
																								$comprobar30 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla30']."<br>STOCK INICIAL: ".$key['talla30D']."<br>PESO ACTUAL: ".$key['peso_R30']."<br>PESO INICIAL: ".$key['peso_talla30']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT30)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT30</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT30)){
																								echo 0;
																							}else {
																								echo $XcantidadT30;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R30'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R30'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla30Ingreso" id="talla30Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla30'] ?>" name="pesoTalla30Subida" id="pesoTalla30" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla30D'] ?>" name="talla30Subida" id="talla30" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R30'] ?>" name="peso_R30" id="talla30" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla30Ingreso" id="nuevaTalla30Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla30Inicial" id="nuevaTalla30Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT30" id="nuevoPesoT30" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT30" value="" id="serializarT30">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT30" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla30(event)">
										<input type="hidden" name="serializadoT30R" value="" id="serializarT30R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT30R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla30R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT30" value="" id="serializadoStockInicialT30">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT30" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla30(event)">
										<input type="hidden" name="serializadoStockT30" value="" id="serializadoStockT30">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT30" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla30(event)">
									</div>
								</label>
							</div>
							<!-- Talla 38 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 38</strong><br>";
																							if (empty($comprobar38)){
																							}else {
																								echo $comprobar38;
																								$comprobar38 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla38']."<br>STOCK INICIAL: ".$key['talla38D']."<br>PESO ACTUAL: ".$key['peso_R38']."<br>PESO INICIAL: ".$key['peso_talla38']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT38)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT38</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT38)){
																								echo 0;
																							}else {
																								echo $XcantidadT38;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R38'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R38'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla38Ingreso" id="talla38Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla38'] ?>" name="pesoTalla38Subida" id="pesoTalla38" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla38D'] ?>" name="talla38Subida" id="talla38" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R38'] ?>" name="peso_R38" id="talla38" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla38Ingreso" id="nuevaTalla38Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla38Inicial" id="nuevaTalla38Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT38" id="nuevoPesoT38" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT38" value="" id="serializarT38">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT38" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla38(event)">
										<input type="hidden" name="serializadoT38R" value="" id="serializarT38R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT38R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla38R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT38" value="" id="serializadoStockInicialT38">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT38" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla38(event)">
										<input type="hidden" name="serializadoStockT38" value="" id="serializadoStockT38">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT38" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla38(event)">
									</div>
								</label>
							</div>
							<!-- Talla XL -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA XL</strong><br>";
																							if (empty($comprobarxl)){
																							}else {
																								echo $comprobarxl;
																								$comprobarxl = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['tallaxl']."<br>STOCK INICIAL: ".$key['tallaxlD']."<br>PESO ACTUAL: ".$key['peso_Rxl']."<br>PESO INICIAL: ".$key['peso_tallaxl']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadTxl)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTxl</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadTxl)){
																								echo 0;
																							}else {
																								echo $XcantidadTxl;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_Rxl'])) {
																								echo 0;
																							} else {
																									echo $key['peso_Rxl'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="tallaxlIngreso" id="tallaxlIngreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_tallaxl'] ?>" name="pesoTallaxlSubida" id="pesoTallaxl" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallaxlD'] ?>" name="tallaxlSubida" id="tallaxl" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rxl'] ?>" name="peso_Rxl" id="tallaxl" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTallaxlIngreso" id="nuevaTallaxlIngreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTallaxlInicial" id="nuevaTallaxlInicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoTxl" id="nuevoPesoTxl" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoTxl" value="" id="serializarTxl">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarTxl" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTallaxl(event)">
										<input type="hidden" name="serializadoTxlR" value="" id="serializarTxlR">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarTxlR" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTallaxlR(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialTxl" value="" id="serializadoStockInicialTxl">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialTxl" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTallaxl(event)">
										<input type="hidden" name="serializadoStockTxl" value="" id="serializadoStockTxl">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockTxl" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTallaxl(event)">
									</div>
								</label>
							</div>
						</div>

						<div class="col-sm-3">
							<!-- Talla 12 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 12</strong><br>";
																							if (empty($comprobar12)){
																							}else {
																								echo $comprobar12;
																								$comprobar12 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla12']."<br>STOCK INICIAL: ".$key['talla12D']."<br>PESO ACTUAL: ".$key['peso_R12']."<br>PESO INICIAL: ".$key['peso_talla12']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT12)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT12</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT12)){
																								echo 0;
																							}else {
																								echo $XcantidadT12;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R12'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R12'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla12Ingreso" id="talla12Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla12'] ?>" name="pesoTalla12Subida" id="pesoTalla12" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla12D'] ?>" name="talla12Subida" id="talla12" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R12'] ?>" name="peso_R12" id="talla12" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla12Ingreso" id="nuevaTalla12Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla12Inicial" id="nuevaTalla12Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT12" id="nuevoPesoT12" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT12" value="" id="serializarT12">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT12" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla12(event)">
										<input type="hidden" name="serializadoT12R" value="" id="serializarT12R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT12R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla12R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT12" value="" id="serializadoStockInicialT12">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT12" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla12(event)">
										<input type="hidden" name="serializadoStockT12" value="" id="serializadoStockT12">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT12" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla12(event)">
									</div>
								</label>
							</div>
							<!-- Talla 20 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 20</strong><br>";
																							if (empty($comprobar20)){
																							}else {
																								echo $comprobar20;
																								$comprobar20 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla20']."<br>STOCK INICIAL: ".$key['talla20D']."<br>PESO ACTUAL: ".$key['peso_R20']."<br>PESO INICIAL: ".$key['peso_talla20']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT20)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT20</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT20)){
																								echo 0;
																							}else {
																								echo $XcantidadT20;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R20'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R20'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla20Ingreso" id="talla20Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla20'] ?>" name="pesoTalla20Subida" id="pesoTalla20" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla20D'] ?>" name="talla20Subida" id="talla20" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R20'] ?>" name="peso_R20" id="talla20" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla20Ingreso" id="nuevaTalla20Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla20Inicial" id="nuevaTalla20Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT20" id="nuevoPesoT20" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT20" value="" id="serializarT20">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT20" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla20(event)">
										<input type="hidden" name="serializadoT20R" value="" id="serializarT20R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT20R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla20R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT20" value="" id="serializadoStockInicialT20">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT20" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla20(event)">
										<input type="hidden" name="serializadoStockT20" value="" id="serializadoStockT20">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT20" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla20(event)">
									</div>
								</label>
							</div>
							<!-- Talla 32 -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 32</strong><br>";
																							if (empty($comprobar32)){
																							}else {
																								echo $comprobar32;
																								$comprobar32 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla32']."<br>STOCK INICIAL: ".$key['talla32D']."<br>PESO ACTUAL: ".$key['peso_R32']."<br>PESO INICIAL: ".$key['peso_talla32']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT32)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT32</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT32)){
																								echo 0;
																							}else {
																								echo $XcantidadT32;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R32'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R32'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla32Ingreso" id="talla32Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla32'] ?>" name="pesoTalla32Subida" id="pesoTalla32" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla32D'] ?>" name="talla32Subida" id="talla32" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R32'] ?>" name="peso_R32" id="talla32" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla32Ingreso" id="nuevaTalla32Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla32Inicial" id="nuevaTalla32Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT32" id="nuevoPesoT32" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT32" value="" id="serializarT32">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT32" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla32(event)">
										<input type="hidden" name="serializadoT32R" value="" id="serializarT32R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT32R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla32R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT32" value="" id="serializadoStockInicialT32">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT32" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla32(event)">
										<input type="hidden" name="serializadoStockT32" value="" id="serializadoStockT32">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT32" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla32(event)">
									</div>
								</label>
							</div>
							<!-- Talla S -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA S</strong><br>";
																							if (empty($comprobars)){
																							}else {
																								echo $comprobars;
																								$comprobars = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['tallas']."<br>STOCK INICIAL: ".$key['tallasD']."<br>PESO ACTUAL: ".$key['peso_Rs']."<br>PESO INICIAL: ".$key['peso_tallas']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadTs)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTs</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadTs)){
																								echo 0;
																							}else {
																								echo $XcantidadTs;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_Rs'])) {
																								echo 0;
																							} else {
																									echo $key['peso_Rs'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="tallasIngreso" id="tallasIngreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_tallas'] ?>" name="pesoTallasSubida" id="pesoTallas" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallasD'] ?>" name="tallasSubida" id="tallas" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rs'] ?>" name="peso_Rs" id="tallas" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTallasIngreso" id="nuevaTallasIngreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTallasInicial" id="nuevaTallasInicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoTs" id="nuevoPesoTs" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoTs" value="" id="serializarTs">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarTs" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTallas(event)">
										<input type="hidden" name="serializadoTsR" value="" id="serializarTsR">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarTsR" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTallasR(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialTs" value="" id="serializadoStockInicialTs">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialTs" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTallas(event)">
										<input type="hidden" name="serializadoStockTs" value="" id="serializadoStockTs">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockTs" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTallas(event)">
									</div>
								</label>
							</div>
							<!-- Talla U -->
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA U</strong><br>";
																							if (empty($comprobaru)){
																							}else {
																								echo $comprobaru;
																								$comprobaru = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['tallau']."<br>STOCK INICIAL: ".$key['tallauD']."<br>PESO ACTUAL: ".$key['peso_Ru']."<br>PESO INICIAL: ".$key['peso_tallau']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadTu)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTu</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadTu)){
																								echo 0;
																							}else {
																								echo $XcantidadTu;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_Ru'])) {
																								echo 0;
																							} else {
																									echo $key['peso_Ru'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="tallauIngreso" id="tallauIngreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_tallau'] ?>" name="pesoTallauSubida" id="pesoTallau" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallauD'] ?>" name="tallauSubida" id="tallau" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Ru'] ?>" name="peso_Ru" id="tallau" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTallauIngreso" id="nuevaTallauIngreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTallauInicial" id="nuevaTallauInicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoTu" id="nuevoPesoTu" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoTu" value="" id="serializarTu">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarTu" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTallau(event)">
										<input type="hidden" name="serializadoTuR" value="" id="serializarTuR">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarTuR" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTallauR(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialTu" value="" id="serializadoStockInicialTu">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialTu" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTallau(event)">
										<input type="hidden" name="serializadoStockTu" value="" id="serializadoStockTu">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockTu" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTallau(event)">
									</div>
								</label>
							</div>
						</div>

						<div class="col-sm-2">
							<input type="hidden" name="accion" value="" id="botonEnviarF">
							<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
							<input type="submit" class="btn btn-success" value="" id="enviarF" style="width:0px;heigth:0px;background-color: white; color: white;border-color:white;">
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
	
	var referencia = document.getElementById("color");

	referencia.addEventListener('change', (event) => {
	var i=document.getElementById("botonEnviarF").value = "cambiarColor";
	document.getElementById("enviarF").click();
	});

	var referencia = document.getElementById("imagen");

	referencia.addEventListener('change', (event) => {
	var i=document.getElementById("botonEnviarF").value = "subirImagen";
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