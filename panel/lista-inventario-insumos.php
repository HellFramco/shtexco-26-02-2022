<?php
include '../modelo/redireccion.php';
include '../modelo/datosInventarios.php';
require '../modelo/datos-productos.php';
$productos = new Productos();
$inventario = new Inventarios();


$cant = 0;
?>

                                        <?php
                                        foreach ($inventario->verInventarioBuscadoInsumos($_POST['referencia']) as $key) {
                                        ?>
                                            <tr class="btn-light" style="text-transform: uppercase;">

                                            <td>
                                            <?php if($key['tipo'] == 'TEJIDO PLANO'){
                                                        ?>
                                                        <a id="asigna_color_<?php echo $key['id_inventario']; ?>" style="width: 100%;" class="btn btn-sm btn btn-warning" tittle="agregar inventario"><img src="../imagenes/iconos/boton-agregar.png" alt="">Color</a>
                                                        <script>
                                                            document.getElementById('asigna_color_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalAgregaColor.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                        <br>
                                                        <?php
                                                        } ?>

<a id="asigna_<?php echo $key['id_inventario']; ?>" style="width: 100%;" class="btn btn-sm btn btn-danger" tittle="agregar inventario"><img src="../imagenes/iconos/boton-agregar.png" alt="">Imperfecto</a>
<script>
    document.getElementById('asigna_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
        window.open('modal/modalAgregaImperfecto.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
    });
</script>
<br>

<a id="agrega_<?php echo $key['id_inventario']; ?>" style="width: 100%;" class="btn btn-sm btn-success" tittle="agregar inventario"><img src="../imagenes/iconos/boton-agregar.png" alt="">Reprogramacion</a>
<script>
    document.getElementById('agrega_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
        window.open('modal/modalAgregaInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
    });
</script>
<br>
<center>
    <!-- <a id="subir-peso_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn text-center" tittle="agregar inventario"><img src="../imagenes/iconos/escala-de-peso.png" alt=""><br>Peso</a>
<script>
    document.getElementById('subir-peso_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
        window.open('modal/modalPesoInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>&peso_unidad=<?php echo $key['peso_unidad']; ?>', 'SUBIR INVENTARIO EN PESO', 'width=800,height=800, top=200, left=400');
    });
</script> -->
<a class="btn-sm btn btn-primary" style="width: 100%;" id="subir-peso_<?php echo $key['id_inventario']; ?>" title="Debes de pesar todas las prendas" href="modal/modalPesoInventario-1.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>&peso_unidad=<?php echo $key['peso_unidad']; ?>" class="btn btn-sm btn text-center" tittle="agregar inventario"><img src="../imagenes/iconos/escala-de-peso.png" alt=""><br>Pesar</a>
</center>
<br>

<a id="codigo_barras_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-dark" style="width: 100%;" title="generar Codigo de barras de inventario"><img src="../imagenes/iconos/barcode.png" alt="">Codigo Barras</a>
<script>
    document.getElementById('codigo_barras_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
        window.open('modal/modalCodigosBarras.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
    });
</script>
<br>
<a id="editar_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-info" style="width: 100%;" title="editar informacion del producto"><img src="../imagenes/iconos/editar.png" alt="">Editar</a>
<script>
    document.getElementById('editar_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
        window.open('modal/modalEditarInformacionProducto.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'EDITAR INVENTARIO', 'width=1178,height=740, top=150, left=400');
    });
</script>


</td>
                                                    
                                                    
                                                    <!-- <td><?php echo $key['id_inventario']; ?></td> -->
                                                    <th><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion'] == '' ? 1 : $key['reprogramacion']; ?></th>
                                                    <td><?php echo $key['descripcion']; ?></td>
                                                    <td><?php echo $key['marca']; ?></td>
                                                    <td><?php echo $key['tipo']; ?></td>
                                                    <td><?php echo $key['silueta']; ?></td>
                                                    <td><?php echo $key['tela']; ?></td>
                                                    <td><?php echo $key['categoria']; ?></td>
                                                    <td><?php echo $key['genero']; ?></td>
                                                    <td><?php echo $key['coleccion']; ?></td>
                                                    <th><?php echo $key['bodega']; ?></th>
                                                    <td><?php echo $key['ruta']; ?></td>
                                                    <td><?php echo $productos->color_hexa($key['color']); ?></td>
                                                    <td><?php echo $key['proveedor']; ?></td>
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
                                        }
                                        ?>

