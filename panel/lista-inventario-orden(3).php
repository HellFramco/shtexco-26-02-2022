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



										<?PHP 


?>

										
										<?php


										$item = 1;

										$cont = 0;

										foreach ($inventarios->verInventarioBuscado($_POST['referencia']) as $key) {
										?>
											<form id="dataProductos<?php echo $key['id_inventario']; ?>" action="asignaProductos.php" method="post">
											<table>
											
											<tr <?php if($cont > 0 ){ echo " style='visibility: hidden;'"; } ?> >
												<td>Id</td>
												<td>Referencia</td>
												<td>Descripcion</td>
												<td>Marca</td>
												<td>Silueta</td>
												<td>Categoria</td>
												<td>Color</td>
												<td>Talla6</td>
												<td>Talla8</td>
												<td>Talla10</td>
												<td>Talla12</td>
												<td>Talla14</td>
												<td>Talla16</td>
												<td>Talla18</td>
												<td>Talla20</td>
												<td>Talla26</td>
												<td>Talla28</td>
												<td>Talla30</td>
												<td>Talla32</td>
												<td>Talla34</td>
												<td>Talla36</td>
												<td>Talla38</td>
												<td>Tallas</td>
												<td>Tallam</td>
												<td>Tallal</td>
												<td>Tallaxl</td>
												<td>Tallau</td>
												<td>Tallaest</td>
												<td>Precio</td>
												<td></td>
												
											</tr>
										

								
											<tr>
												
													<td><input type="hidden" readonly value="<?php echo $key['id_inventario']; ?>" name="id_inventario" id="id_inventario<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td>
														<input type="hidden" readonly value="<?php if($key['tipo'] == 'JEANS'){ echo $key['referencia'].' R'.$key['reprogramacion']; } else if($key['tipo'] == 'TEJIDO PLANO'){ echo $key['referencia']; } ?>" name="referencia" id="referencia<?php echo $key['referencia']; ?>" class="form-control">
														<?php if($key['tipo'] == 'JEANS'){ echo $key['referencia'].' R'.$key['reprogramacion']; } else if($key['tipo'] == 'TEJIDO PLANO'){ echo $key['referencia']; } ?>
													</td>
													<td><input type="text" readonly value="<?php echo $key['descripcion']; ?>" name="descripcion" id="descripcion<?php echo $key['descripcion']; ?>" class="form-control"></td>
													<td><input type="text" readonly value="<?php echo $key['marca']; ?>" name="marca" id="marca<?php echo $key['marca']; ?>" class="form-control"></td>
													<!-- <td><?php echo $key['tipo']; ?></td> -->
													<td><input type="text" readonly value="<?php echo $key['silueta']; ?>" name="silueta" id="silueta<?php echo $key['silueta']; ?>" class="form-control"></td>
													<!-- <td><?php echo $key['tela']; ?></td> -->
													<td><input type="text" readonly value="<?php echo $key['categoria']; ?>" name="categoria" id="categoria<?php echo $key['categoria']; ?>" class="form-control"></td>
													<!-- <td><?php echo $key['genero']; ?></td> -->
													<!-- <td><?php echo $key['coleccion']; ?></td> -->
													<!-- <td><?php echo $key['bodega']; ?></td> -->
													<!-- <td><?php echo $key['ruta']; ?></td> -->
													<td><input type="text" readonly value="<?php echo $key['color']; ?>" name="color" id="color<?php echo $key['color']; ?>" class="form-control"></td>
													<!-- <td><?php echo $key['proveedor']; ?></td> -->
													<td><input type="number" min="0" max="<?php echo $key['talla6']; ?>" placeholder="<?php echo $key['talla6']; ?>" name="talla6" id="talla6<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla8']; ?>" placeholder="<?php echo $key['talla8']; ?>" name="talla8" id="talla8<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla10']; ?>" placeholder="<?php echo $key['talla10']; ?>" name="talla10" id="talla10<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla12']; ?>" placeholder="<?php echo $key['talla12']; ?>" name="talla12" id="talla12<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla14']; ?>" placeholder="<?php echo $key['talla14']; ?>" name="talla14" id="talla14<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla16']; ?>" placeholder="<?php echo $key['talla16']; ?>" name="talla16" id="talla16<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla18']; ?>" placeholder="<?php echo $key['talla18']; ?>" name="talla18" id="talla18<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla20']; ?>" placeholder="<?php echo $key['talla20']; ?>" name="talla20" id="talla20<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla26']; ?>" placeholder="<?php echo $key['talla26']; ?>" name="talla26" id="talla26<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla28']; ?>" placeholder="<?php echo $key['talla28']; ?>" name="talla28" id="talla28<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla30']; ?>" placeholder="<?php echo $key['talla30']; ?>" name="talla30" id="talla30<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla32']; ?>" placeholder="<?php echo $key['talla32']; ?>" name="talla32" id="talla32<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla34']; ?>" placeholder="<?php echo $key['talla34']; ?>" name="talla34" id="talla34<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla36']; ?>" placeholder="<?php echo $key['talla36']; ?>" name="talla36" id="talla36<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['talla38']; ?>" placeholder="<?php echo $key['talla38']; ?>" name="talla38" id="talla38<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['tallas']; ?>" placeholder="<?php echo $key['tallas']; ?>" name="tallas" id="tallas<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['tallam']; ?>" placeholder="<?php echo $key['tallam']; ?>" name="tallam" id="tallam<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['tallal']; ?>" placeholder="<?php echo $key['tallal']; ?>" name="tallal" id="tallal<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['tallaxl']; ?>" placeholder="<?php echo $key['tallaxl']; ?>" name="tallaxl" id="tallaxl<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['tallau']; ?>" placeholder="<?php echo $key['tallau']; ?>" name="tallau" id="tallau<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<td><input type="number" min="0" max="<?php echo $key['tallaest']; ?>" placeholder="<?php echo $key['tallaest']; ?>" name="tallaest" id="tallaest<?php echo $key['id_inventario']; ?>" class="form-control"></td>
													<!-- <td><?php echo $key['estado']; ?></td> -->
													<td><input type="text" value="<?php echo $key['precio']; ?>" name="precio" id="precio<?php echo $key['id_inventario']; ?>" class="form-control"><input type="hidden" readonly value="<?php echo $key['precio']; ?>" name="precio_escondido" id="precio_escondido<?php echo $key['id_inventario']; ?>" class="form-control">
														<input type="hidden" readonly value="asignaProductosVenta" name="accion" id="" class="form-control">
														<input type="hidden" readonly value="<?php echo $id_cliente; ?>" name="id_cliente" id="" class="form-control">
														<input type="hidden" readonly value="<?php echo $_POST['id_venta']; ?>" name="id_venta" id="" class="form-control">
													</td>
													<!-- <td><?php echo $key['fecha_ingreso_producto']; ?></td> -->
													<td>
														<input type="submit" value="Agregar" class="btn-success btn">
													
														
													</td>
												
											</tr>
											</table>
											</form>

										<?php
											$item++;
											$cont = $cont + 1;
										}




										
										?>

										<?php if($cont ==0){ ?>

											<center><h1>NO SE PUDO CONSEGUIR EL PRODUCTO.</h1></center>
											<?php }?>

								
