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
		<div class="row"><br>
			<br>
			<br>
			<div class="col-sm-4">
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
					if (
						@$_POST['talla6Ingreso'] == @$_POST['talla6Subida'] AND
						@$_POST['talla8Ingreso'] == @$_POST['talla8Subida'] AND
						@$_POST['talla10Ingreso'] == @$_POST['talla10Subida'] AND
						@$_POST['talla12Ingreso'] == @$_POST['talla12Subida'] AND
						@$_POST['talla14Ingreso'] == @$_POST['talla14Subida'] AND
						@$_POST['talla16Ingreso'] == @$_POST['talla16Subida'] AND
						@$_POST['talla18Ingreso'] == @$_POST['talla18Subida'] AND
						@$_POST['talla20Ingreso'] == @$_POST['talla20Subida'] AND
						@$_POST['talla26Ingreso'] == @$_POST['talla26Subida'] AND
						@$_POST['talla28Ingreso'] == @$_POST['talla28Subida'] AND
						@$_POST['talla30Ingreso'] == @$_POST['talla30Subida'] AND
						@$_POST['talla32Ingreso'] == @$_POST['talla32Subida'] AND
						@$_POST['talla34Ingreso'] == @$_POST['talla34Subida'] AND
						@$_POST['talla36Ingreso'] == @$_POST['talla36Subida'] AND
						@$_POST['talla38Ingreso'] == @$_POST['talla38Subida'] AND
						@$_POST['tallasIngreso'] == @$_POST['tallasSubida'] AND
						@$_POST['tallamIngreso'] == @$_POST['tallamSubida'] AND
						@$_POST['tallalIngreso'] == @$_POST['tallalSubida'] AND
						@$_POST['tallaxlIngreso'] == @$_POST['tallaxlSubida'] AND
						@$_POST['tallauIngreso'] == @$_POST['tallauSubida'] AND
						@$_POST['tallaestIngreso'] == @$_POST['tallaestSubida']
						) {
						echo "<h4 style='color:green;'>La actual entrada a bodega se ha verificado.</h4>";
							require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET verificado_bodega = 'SI', estado = 'existencia' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){ echo "<script> alert('Entrada a Bodega Verificada'); window.close(); </script>"; }
					} else if (
						@$_POST['talla6Ingreso'] == @$_POST['talla6Subida'] ||
						@$_POST['talla8Ingreso'] == @$_POST['talla8Subida'] ||
						@$_POST['talla10Ingreso'] == @$_POST['talla10Subida'] ||
						@$_POST['talla12Ingreso'] == @$_POST['talla12Subida'] ||
						@$_POST['talla14Ingreso'] == @$_POST['talla14Subida'] ||
						@$_POST['talla16Ingreso'] == @$_POST['talla16Subida'] ||
						@$_POST['talla18Ingreso'] == @$_POST['talla18Subida'] ||
						@$_POST['talla20Ingreso'] == @$_POST['talla20Subida'] ||
						@$_POST['talla26Ingreso'] == @$_POST['talla26Subida'] ||
						@$_POST['talla28Ingreso'] == @$_POST['talla28Subida'] ||
						@$_POST['talla30Ingreso'] == @$_POST['talla30Subida'] ||
						@$_POST['talla32Ingreso'] == @$_POST['talla32Subida'] ||
						@$_POST['talla34Ingreso'] == @$_POST['talla34Subida'] ||
						@$_POST['talla36Ingreso'] == @$_POST['talla36Subida'] ||
						@$_POST['talla38Ingreso'] == @$_POST['talla38Subida'] ||
						@$_POST['tallasIngreso'] == @$_POST['tallasSubida'] ||
						@$_POST['tallamIngreso'] == @$_POST['tallamSubida'] ||
						@$_POST['tallalIngreso'] == @$_POST['tallalSubida'] ||
						@$_POST['tallaxlIngreso'] == @$_POST['tallaxlSubida'] ||
						@$_POST['tallauIngreso'] == @$_POST['tallauSubida'] ||
						@$_POST['tallaestIngreso'] == @$_POST['tallaestSubida']
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
								<input type="number" required="" value="<?php if (@$_POST['talla6Ingreso']) {
																			echo @$_POST['talla6Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla6Ingreso" id="talla6Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla6'] ?>" name="talla6Subida" id="talla6" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla6Ingreso'] == @$_POST['talla6Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 6 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 6 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 18 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla18Ingreso']) {
																			echo @$_POST['talla18Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla18Ingreso" id="talla18Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla18'] ?>" name="talla18Subida" id="talla18" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla18Ingreso'] == @$_POST['talla18Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 18 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 18 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 34 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla34Ingreso']) {
																			echo @$_POST['talla34Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla34Ingreso" id="talla34Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla34'] ?>" name="talla34Subida" id="talla34" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla34Ingreso'] == @$_POST['talla34Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 34 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 34 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla xl Entraron:
								<input type="number" required="" value="<?php if (@$_POST['tallaxlIngreso']) {
																			echo @$_POST['tallaxlIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallaxlIngreso" id="tallaxlIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallaxl'] ?>" name="tallaxlSubida" id="tallaxl" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['tallaxlIngreso'] == @$_POST['tallaxlSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla xl ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla xl no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>


						</div>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 8 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla8Ingreso']) {
																			echo @$_POST['talla8Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla8Ingreso" id="talla8Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla8'] ?>" name="talla8Subida" id="talla8" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla8Ingreso'] == @$_POST['talla8Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 8 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 8 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 20 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla20Ingreso']) {
																			echo @$_POST['talla20Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla20Ingreso" id="talla20Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla20'] ?>" name="talla20Subida" id="talla20" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla20Ingreso'] == @$_POST['talla20Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 20 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 20 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 36 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla36Ingreso']) {
																			echo @$_POST['talla36Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla36Ingreso" id="talla36Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla36'] ?>" name="talla36Subida" id="talla36" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla36Ingreso'] == @$_POST['talla36Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 36 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 36 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla u Entraron:
								<input type="number" required="" value="<?php if (@$_POST['tallauIngreso']) {
																			echo @$_POST['tallauIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallauIngreso" id="tallauIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallau'] ?>" name="tallauSubida" id="tallauSubida" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['tallauIngreso'] == @$_POST['tallauSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla u ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla u no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>

						</div>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 10 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla10Ingreso']) {
																			echo @$_POST['talla10Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla10Ingreso" id="talla10Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla10'] ?>" name="talla10Subida" id="talla10" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla10Ingreso'] == @$_POST['talla10Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 10 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 10 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 26 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla26Ingreso']) {
																			echo @$_POST['talla26Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla26Ingreso" id="talla26Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla26'] ?>" name="talla26Subida" id="talla26" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla26Ingreso'] == @$_POST['talla26Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 26 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 26 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 38 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla38Ingreso']) {
																			echo @$_POST['talla38Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla38Ingreso" id="talla38Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla38'] ?>" name="talla38Subida" id="talla38" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla38Ingreso'] == @$_POST['talla38Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 38 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 38 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla est Entraron:
								<input type="number" required="" value="<?php if (@$_POST['tallaestIngreso']) {
																			echo @$_POST['tallaestIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallaestIngreso" id="tallaestIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallaest'] ?>" name="tallaestSubida" id="tallaest" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['tallaestIngreso'] == @$_POST['tallaestSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla est ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla est no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>

						</div>

						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 12 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla12Ingreso']) {
																			echo @$_POST['talla12Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla12Ingreso" id="talla12Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla12'] ?>" name="talla12Subida" id="talla12" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla12Ingreso'] == @$_POST['talla12Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 12 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 12 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 28 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla28Ingreso']) {
																			echo @$_POST['talla28Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla28Ingreso" id="talla28Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla38'] ?>" name="talla28Subida" id="talla38" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla28Ingreso'] == @$_POST['talla28Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 28 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 28 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla s Entraron:
								<input type="number" required="" value="<?php if (@$_POST['tallasIngreso']) {
																			echo @$_POST['tallasIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallasIngreso" id="tallasIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallas'] ?>" name="tallasSubida" id="tallas" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['tallasIngreso'] == @$_POST['tallasSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla s ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla s no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>




						</div>
						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 14 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla14Ingreso']) {
																			echo @$_POST['talla14Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla14Ingreso" id="talla14Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla14'] ?>" name="talla14Subida" id="talla14" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla14Ingreso'] == @$_POST['talla14Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 14 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 14 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 30 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla30Ingreso']) {
																			echo @$_POST['talla30Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla30Ingreso" id="talla30Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla30'] ?>" name="talla30Subida" id="talla30" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla30Ingreso'] == @$_POST['talla30Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 30 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 30 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla m Entraron:
								<input type="number" required="" value="<?php if (@$_POST['tallamIngreso']) {
																			echo @$_POST['tallamIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallamIngreso" id="tallamIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallam'] ?>" name="tallamSubida" id="tallam" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['tallamIngreso'] == @$_POST['tallamSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla m ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla m no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>


						</div>

						<div class="col-sm-2">
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 16 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla16Ingreso']) {
																			echo @$_POST['talla16Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla16Ingreso" id="talla16Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla16'] ?>" name="talla16Subida" id="talla16" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla16Ingreso'] == @$_POST['talla16Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 16 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 16 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla 32 Entraron:
								<input type="number" required="" value="<?php if (@$_POST['talla32Ingreso']) {
																			echo @$_POST['talla32Ingreso'];
																		} else {
																			echo 0;
																		} ?>" name="talla32Ingreso" id="talla32Ingreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['talla32'] ?>" name="talla32Subida" id="talla32" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['talla32Ingreso'] == @$_POST['talla32Subida']) {
										echo "<strong style='color:green;'>el inventario para la talla 32 ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla 32 no coincide Con el registrado.</strong>
						";
									}
								}
								?>

							</label>
							<label style="color: gray; text-transform: uppercase;" for="">de la talla l Entraron:
								<input type="number" required="" value="<?php if (@$_POST['tallalIngreso']) {
																			echo @$_POST['tallalIngreso'];
																		} else {
																			echo 0;
																		} ?>" name="tallalIngreso" id="tallalIngreso" class="form-control">
								<input type="hidden" required="" value="<?php echo $key['tallal'] ?>" name="tallalSubida" id="tallal" class="form-control">
								<?php
								if (@$_POST['accion'] == 'verificarInventario') {
									if (@$_POST['tallalIngreso'] == @$_POST['tallalSubida']) {
										echo "<strong style='color:green;'>el inventario para la talla l ha sido verificado</strong>";
									} else {
										echo "<strong style='color:crimson;'>el inventario para la talla l no coincide Con el registrado.</strong>
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