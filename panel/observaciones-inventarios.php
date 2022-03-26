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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Observaciones de inventarios </h1>
                        <!-- <a id="nuevo" class="btn btn-success">Agregar Producto</a> -->
                        <script>
                            document.getElementById('nuevo').addEventListener('click', function() {
                                window.open('modal/modalNuevoProducto.php', 'NUEVO PRODUCO', 'width=1178,height=740, top=150, left=400');
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
                                            <th>item</th>
                                                <th>id inventario</th>
                                                <th>referencia</th>
                                                <th>fecha observacion</th>
                                                <th>Observacion</th>

                                                <th>marca</th>

                                                <th>silueta</th>



                                                <th>color</th>

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

                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                        <?php
                                            $item = 1;
                                            foreach ($inventarios->verTodoInventarioObservaciones() as $key) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $key['id_observacion']; ?></td>
                                                    <td><?php echo $key['id_inventario']; ?></td>
                                                    <td><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion'] == '' ? 1 : $key['reprogramacion']; ?></td>
                                                    <td><?php echo $key['fecha']; ?></td>
                                                    <td><?php echo $key['observacion']; ?></td>
                                                    <td><?php echo $key['marca']; ?></td>

                                                    <td><?php echo $key['silueta']; ?></td>


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




                                                </tr>
                                            <?php
                                                $item++;
                                            }
                                            ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>item</th>
                                                <th>id inventario</th>
                                                <th>referencia</th>
                                                <th>fecha observacion</th>
                                                <th>Observacion</th>

                                                <th>marca</th>

                                                <th>silueta</th>



                                                <th>color</th>

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
    <?php include './librerias_js/librerias-observaciones-inventarios.php' ?>



    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>