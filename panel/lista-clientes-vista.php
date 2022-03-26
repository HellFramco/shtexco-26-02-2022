<?php
include '../modelo/redireccion.php';
include '../modelo/funcionesClientes.php';
$clientes = new Clientes();


$cant = 0;
?>

                                        <?php
                                        foreach ($clientes->clienteBuscado($_POST['cliente']) as $key) {
                                        ?>
                                            <tr class="btn-light" style="text-transform: uppercase;">
                                                <td><?php echo $key['id']; ?></td>
                                                <td><?php echo $key['identificacion_cli']; ?></td>
                                                <td><?php echo $key['nombre_cli']; ?></td>
                                                <td><?php echo $key['telefono']; ?></td>
                                                <td><?php echo $key['email']; ?></td>
                                                <td>
                                                    
                                                    <?php echo $key['direccion']; ?> 
                                                    
                                                </td>
                                                <td><?php echo $key['status']==1?'ACTIVO':'INACTIVO'; ?></td>
                                                <td><?php echo $key['dateIn']; ?></td>
                                                <td>
                                                    <a href="nueva-venta.php?cliente=<?php echo $key['id']; ?>" class="btn btn-sm btn-success" id="nueva_venta_<?php echo $key['id']; ?>" title="Nueva Venta para este cliente">Nueva Venta</a>

                                                    <!-- <script>
                                                        document.getElementById('nueva_venta_<?php echo $key['id']; ?>').addEventListener('click', function() {
                                                            window.open('nueva-venta.php?cliente=<?php echo $key['id']; ?>', 'Nueva Venta', 'width=2110,height=915, top=200, left=400, location=no');
                                                        });
                                                    </script> -->
                                                    <a class="btn btn-sm btn-warning" id="direcciones-clientes_<?php echo $key['id']; ?>" style="float: left;" title="Agregar nueva Direccion">Direcciones</a>

                                                    <script>
                                                        document.getElementById('direcciones-clientes_<?php echo $key['id']; ?>').addEventListener('click', function() {
                                                            window.open('modal/modalDireccionesClientes.php?cliente=<?php echo $key['id']; ?>', 'Direcciones', 'width=820,height=516, top=200, left=400, location=no');
                                                        });
                                                    </script>

                                                    <a class="btn btn-sm btn-info" id="editar_clientes_<?php echo $key['id']; ?>" style="float: left;" title="Editar Cliente">Editar</a>

                                                    <script>
                                                        document.getElementById('editar_clientes_<?php echo $key['id']; ?>').addEventListener('click', function() {
                                                            window.open('editar-cliente-vendedor.php?id_cliente=<?php echo $key['id']; ?>', 'Editar Cliente', 'width=820,height=516, top=200, left=400, location=no');
                                                        });
                                                    </script>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

