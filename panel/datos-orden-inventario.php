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


	<table border="1" width="100%">
		
	<tbody>
										<?PHP 


?>

										
										<?php


										$item = 1;

										$cont = 0;

										foreach ($inventarios->verInventarioFecha($_POST['fecha_ingreso_inventario']) as $key) {
										?>
											
								
									<tr class="btn-light" style="text-transform: uppercase;">
                                    <td><?php echo $key['fechaingresoinventario']; ?></td>
                                    


                                    <td><?php echo $key['marca']; ?></td>
                                    <td><?php echo $key['tipo']; ?></td>
                                    <td><?php echo $key['silueta']; ?></td>
                                    <td><?php echo $key['categoria']; ?></td>
                                    <td><?php echo $key['genero']; ?></td>
                                    <td><?php echo $key['coleccion']; ?></td>
                                    <td><?php echo $key['bodega']; ?></td>
                                    <td><?php echo $key['ruta']; ?></td>
                                    <td><?php echo $productos->color_hexa($key['color']);; ?></td>
                                    <td><?php echo $key['talla6']; ?></td>
                                    <td><?php echo $key['talla8']; ?></td>
                                    <td><?php echo $key['talla10']; ?></td>
                                    <td><?php echo $key['talla12']; ?></td>
                                    <td><?php echo $key['talla14']; ?></td>
                                    <td><?php echo $key['talla16']; ?></td>
                                    <td><?php echo $key['talla18']; ?></td>
                                    <td><?php echo $key['talla20']; ?></td>
                                    <td><?php echo $key['talla26']; ?></td>
                                    <td><?php echo $key['talla28']; ?></td>
                                    <td><?php echo $key['talla30']; ?></td>
                                    <td><?php echo $key['talla32']; ?></td>
                                    <td><?php echo $key['talla34']; ?></td>
                                    <td><?php echo $key['talla36']; ?></td>
                                    <td><?php echo $key['talla38']; ?></td>
                                    <td><?php echo $key['tallas']; ?></td>
                                    <td><?php echo $key['tallam']; ?></td>
                                    <td><?php echo $key['tallal']; ?></td>
                                    <td><?php echo $key['tallaxl']; ?></td>
                                    <td><?php echo $key['tallau']; ?></td>
                                    <td><?php echo $key['tallaest']; ?></td>
                                    <td><?php echo $key['estado']; ?></td>
                                    <td><?php echo $key['precio']; ?></td>
                                    
                                </tr>
							</tbody>		
							</table>
										<?php
											$item++;
											$cont = $cont + 1;
										}




										
										?>

										<?php if($cont ==0){ ?>

											<center><h1>NO SE ENCUENTRAN REGISTROS DE INVENTARIO PARA ESA FECHA.</h1></center>
											<?php }?>

								
