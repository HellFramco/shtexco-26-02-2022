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
											
								
											<tr class="btn-light" style="text-transform: uppercase;">
                                    <!-- <td>
                                        <a id="elimina_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="Eliminar inventario"><img width="15px" src="../imagenes/iconos/eliminar.png" alt=""></a>
                                        <script>
                                            document.getElementById('elimina_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                var confirmar = confirm('este inventario sera eliminado, estas seguro?');
                                                if (confirmar) {
                                                     location.href = '../modelo/eliminarInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&accion=eliminarInventario';
                                                }
                                                else{}
                                            });
                                        </script>
                                    </td> -->
                                    <!-- <td>
                                        <?php
                                            if($key['verificado_bodega']=='SI'){
                                        ?>
                                        <a id="" class="btn btn-sm btn-" title="inventario verificado"><img width="15px" src="../imagenes/iconos/verificar.png" alt=""></a>
                                        
                                        <?php 
                                        }
                                        else{
                                        ?>
                                        <a id="verifica_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="verificar inventario"><img width="15px" src="../imagenes/iconos/no-verificado.png" alt=""></a>
                                        <script>
                                            document.getElementById('verifica_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                              window.open('modal/modalVerificaInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                            });
                                        </script>
                                        <?php
                                        }
                                        ?>
                                    </td> -->
                                    <!-- <td>
                                        
                                        <a id="agrega_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" tittle="agregar inventario"><img width="15px" src="../imagenes/iconos/boton-agregar.png" alt=""></a>
                                        <script>
                                            document.getElementById('agrega_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                              window.open('modal/modalAgregaInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                            });
                                        </script>
                                        
                                    </td>
                                    <td>
                                        <a id="codigo_barras_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="generar Codigo de barras de inventario"><img width="15px" src="../imagenes/iconos/barcode.png" alt=""></a>
                                        <script>
                                            document.getElementById('codigo_barras_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                              window.open('modal/modalCodigosBarras.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                            });
                                        </script>
                                    </td> -->
                                    <!-- <td>
                                        <a id="editar_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="Ruta y ubicacion del producto"><img width="15px" src="../imagenes/iconos/ubicacion.png" alt=""></a>
                                        <script>
                                            document.getElementById('editar_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                              window.open('modal/modalEnrutarProducto.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'ENRUTAR INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                            });
                                        </script>
                                    </td> -->
                                    <!-- <td><?php echo $key['id_inventario']; ?></td> -->
                                    <td><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion']==''?1:$key['reprogramacion']; ?></td>
                                    <td><?php echo $key['descripcion']; ?></td>
                                    <td><?php echo $key['marca']; ?></td>
                                    <td><?php echo $key['tipo']; ?></td>
                                    <td><?php echo $key['silueta']; ?></td>
                                    <!-- <td><?php echo $key['tela']; ?></td> -->
                                    <td><?php echo $key['categoria']; ?></td>
                                    <td><?php echo $key['genero']; ?></td>
                                    <td><?php echo $key['coleccion']; ?></td>
                                    <!-- <td><?php echo $key['bodega']; ?></td> -->
                                    <!-- <td><?php echo $key['ruta']; ?></td> -->
                                    <td><?php echo $productos->color_hexa($key['color']);; ?></td>
                                    <!-- <td><?php echo $key['proveedor']; ?></td> -->
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
                                    <td><?php echo $key['fecha_ingreso_producto']; ?></td>
                                    
                                </tr>
											

										<?php
											$item++;
											$cont = $cont + 1;
										}




										
										?>

										<?php if($cont ==0){ ?>

											<center><h1>NO SE PUDO CONSEGUIR EL PRODUCTO.</h1></center>
											<?php }?>

								
