<?php
require_once '../modelo/redireccion.php';
require '../modelo/datosInventarios.php';
require '../modelo/datos-productos.php';
$productos = new Productos();
$inventarios = new Inventarios();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>



</head>

<body id="page-top">
    <div id="contenedor_loading">
        <div id="loading"></div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'menu.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include 'top-bar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Inventarios </h1>
                        <a id="nuevo" class="btn btn-primary">Agregar Producto</a>

                        <script>
                            document.getElementById('nuevo').addEventListener('click', function() {
                                window.open('modal/modalNuevoProducto.php', 'NUEVO PRODUCO', 'width=1178,height=740, top=150, left=400');
                            });
                        </script>

                    </div>

                    <div style="align-items: center;" class="row justify-content-between p-2">

                        <a id="inventarioSubido" class="btn btn-warning">subido por insumos</a>


                        <script>
                            document.getElementById('inventarioSubido').addEventListener('click', function() {
                                window.open('inventario-subido.php', 'inventario subido por insumos', 'width=1178,height=740, top=150, left=400');
                            });
                        </script>

                    </div>
                    <div style="align-items: center;" class="row justify-content-between p-2">


                        <a id="inventarioExistencia" class="btn btn-success">validado por bodega</a>

                        <script>
                            document.getElementById('inventarioExistencia').addEventListener('click', function() {
                                window.open('inventario-existencia.php', 'inventario en bodega existente', 'width=1178,height=740, top=150, left=400');
                            });
                        </script>
                    </div>
                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->

                    <div class="col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>item</th>
                                                <th>referencia</th>
                                                <th>descripcion</th>
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                                <th>tela</th>
                                                <th>categoria</th>
                                                <th>genero</th>
                                                <th>coleccion</th>
                                                <th>bodega</th>
                                                <th>ruta</th>
                                                <th>color</th>
                                                <th>proveedor</th>
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
                                                <th>estado</th>
                                                <th>precio</th>
                                                <th>fecha ingreso producto</th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                            <?php
                                            $item = 1;
                                            foreach ($inventarios->verTodoInventarioRegistrado() as $key) {
                                            ?>
                                                <tr>
                                                    <td>
                                                        <a id="elimina_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="Eliminar inventario"><img src="../imagenes/iconos/eliminar.png" alt=""></a>
                                                        <script>
                                                            document.getElementById('elimina_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                var confirmar = confirm('este inventario sera eliminado, estas seguro?');
                                                                if (confirmar) {
                                                                    location.href = '../modelo/eliminarInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&accion=eliminarInventario';
                                                                } else {}
                                                            });
                                                        </script>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        if ($key['verificado_bodega'] == 'SI') {
                                                        ?>
                                                            <a id="" class="btn btn-sm btn-" title="inventario verificado"><img src="../imagenes/iconos/verificar.png" alt=""></a>

                                                        <?php
                                                        } else {
                                                        ?>
                                                            <a id="verifica_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="verificar inventario"><img src="../imagenes/iconos/no-verificado.png" alt=""></a>
                                                            <script>
                                                                document.getElementById('verifica_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                    window.open('modal/modalVerificaInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                                });
                                                            </script>
                                                        <?php
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>

                                                        <a id="agrega_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" tittle="agregar inventario"><img src="../imagenes/iconos/boton-agregar.png" alt=""></a>
                                                        <script>
                                                            document.getElementById('agrega_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalAgregaInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>

                                                    </td>
                                                    <td>
                                                        <a id="codigo_barras_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="generar Codigo de barras de inventario"><img src="../imagenes/iconos/barcode.png" alt=""></a>
                                                        <script>
                                                            document.getElementById('codigo_barras_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalCodigosBarras.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                    </td>
                                                    <td>
                                                        <a id="editar_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-" title="editar informacion del producto"><img src="../imagenes/iconos/editar.png" alt=""></a>
                                                        <script>
                                                            document.getElementById('editar_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalEditarInformacionProducto.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'EDITAR INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                    </td>
                                                    <td><?php echo $key['id_inventario']; ?></td>
                                                    <td><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion']; ?></td>
                                                    <td><?php echo $key['descripcion']; ?></td>
                                                    <td><?php echo $key['marca']; ?></td>
                                                    <td><?php echo $key['tipo']; ?></td>
                                                    <td><?php echo $key['silueta']; ?></td>
                                                    <td><?php echo $key['tela']; ?></td>
                                                    <td><?php echo $key['categoria']; ?></td>
                                                    <td><?php echo $key['genero']; ?></td>
                                                    <td><?php echo $key['coleccion']; ?></td>
                                                    <td><?php echo $key['bodega']; ?></td>
                                                    <td><?php echo $key['ruta']; ?></td>
                                                    <td><?php echo $productos->color_hexa($key['color']);; ?></td>
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
                                                $item++;
                                            }
                                            ?>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>item</th>
                                                <th>referencia</th>
                                                <th>descripcion</th>
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                                <th>tela</th>
                                                <th>categoria</th>
                                                <th>genero</th>
                                                <th>coleccion</th>
                                                <th>bodega</th>
                                                <th>ruta</th>
                                                <th>color</th>
                                                <th>proveedor</th>
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
                                                <th>estado</th>
                                                <th>precio</th>
                                                <th>fecha ingreso producto</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <a href="ventas-detalles.php?>">
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                                </a>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php
            include 'footer.php';
            ?>
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
    <?php include './librerias_js/librerias_js-inventario.php' ?>



    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>