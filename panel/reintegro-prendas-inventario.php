<?php
session_start();
include '../modelo/redireccion.php';
include '../modelo/datos-reintegro.php';
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/funcionesVentas.php';
require '../modelo/datosInventarios.php';
require '../modelo/datos-usuarios.php';

$inventarios = new Inventarios();
$ventas = new Ventas();
$productos = new productos();
$reintegro = new misReintegros();
$usuario = new misUsuarios();
$cant = 0;
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
    <style type="text/css">
        .fila_sombra:hover {
            background-color: grey;
        }
    </style>
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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Reintegro de inventario </h1>
                    </div>
                    <div class="card shadow mb-4">
                        <!-- Botones que indican los colores en las tablas -->
                        <!-- Page Heading -->
                        <!-- DataTales Example -->
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th>Fecha</th>
                                            <th>referencia</th>
                                            <th>descripcion</th>
                                            <th>marca</th>
                                            <th>silueta</th>
                                            <th>categoria</th>
                                            <th>color</th>
                                            <th>responsable</th>
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

                                            <th>observacion</th>
                                            <th></th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $item = 1;
                                        $precio_total = 0;
                                        if ($reintegro->viewReintegros()) {
                                        ?>

                                            <?php
                                            foreach ($reintegro->viewReintegros() as $key) {
                                                $precio_total = $precio_total + $key['precio'];

                                            ?>




                                                <tr class="fila_sombra">

                                                    <td><strong style="color: green; font-size: 12px;"><?php echo $key['fecha_reintegro']; ?></strong></td>
                                                    <td><input style="color: black;" type="hidden" readonly value="<?php echo $key['referencia']; ?>" name="ee" id="referencia<?php echo $key['referencia']; ?>" class="form-control"><strong style="color: black; font-size: 16px;"><?php echo $key['referencia']; ?></strong></td>
                                                    <td><input type="text" readonly value="<?php echo $key['descripcion']; ?>" name="descripcion" id="descripcion<?php echo $key['descripcion']; ?>" class="form-control"></td>
                                                    <td><input type="text" readonly value="<?php echo $key['marca']; ?>" name="marca" id="marca<?php echo $key['marca']; ?>" class="form-control"></td>
                                                    <td><input type="text" readonly value="<?php echo $key['silueta']; ?>" name="silueta" id="silueta<?php echo $key['silueta']; ?>" class="form-control"></td>
                                                    <td><input type="text" readonly value="<?php echo $key['categoria']; ?>" name="categoria" id="categoria<?php echo $key['categoria']; ?>" class="form-control"></td>
                                                    <td><input type="text" readonly value="<?php echo $key['color']; ?>" name="color" id="color<?php echo $key['color']; ?>" class="form-control"></td>
                                                    <td><input type="hidden" readonly value="<?php echo $usuario->viewUsuarioresponsable($key['responsable']); ?>" name="responsable" id="responsable<?php echo $key['responsable']; ?>" class="form-control"><strong style="color: black; font-size: 16px;"><?php echo $usuario->viewUsuarioresponsable($key['responsable']); ?></strong></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla6']; ?>" readonly min="0" max="<?php echo $key['talla6']; ?>" value="<?php echo $key['talla6']; ?>" name="talla6" id="talla6<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla8']; ?>" readonly min="0" max="<?php echo $key['talla8']; ?>" value="<?php echo $key['talla8']; ?>" name="talla8" id="talla8<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla10']; ?>" readonly min="0" max="<?php echo $key['talla10']; ?>" value="<?php echo $key['talla10']; ?>" name="talla10" id="talla10<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla12']; ?>" readonly min="0" max="<?php echo $key['talla12']; ?>" value="<?php echo $key['talla12']; ?>" name="talla12" id="talla12<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla14']; ?>" readonly min="0" max="<?php echo $key['talla14']; ?>" value="<?php echo $key['talla14']; ?>" name="talla14" id="talla14<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla16']; ?>" readonly min="0" max="<?php echo $key['talla16']; ?>" value="<?php echo $key['talla16']; ?>" name="talla16" id="talla16<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla18']; ?>" readonly min="0" max="<?php echo $key['talla18']; ?>" value="<?php echo $key['talla18']; ?>" name="talla18" id="talla18<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla20']; ?>" readonly min="0" max="<?php echo $key['talla20']; ?>" value="<?php echo $key['talla20']; ?>" name="talla20" id="talla20<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla26']; ?>" readonly min="0" max="<?php echo $key['talla26']; ?>" value="<?php echo $key['talla26']; ?>" name="talla26" id="talla26<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla28']; ?>" readonly min="0" max="<?php echo $key['talla28']; ?>" value="<?php echo $key['talla28']; ?>" name="talla28" id="talla28<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla30']; ?>" readonly min="0" max="<?php echo $key['talla30']; ?>" value="<?php echo $key['talla30']; ?>" name="talla30" id="talla30<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla32']; ?>" readonly min="0" max="<?php echo $key['talla32']; ?>" value="<?php echo $key['talla32']; ?>" name="talla32" id="talla32<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla34']; ?>" readonly min="0" max="<?php echo $key['talla34']; ?>" value="<?php echo $key['talla34']; ?>" name="talla34" id="talla34<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla36']; ?>" readonly min="0" max="<?php echo $key['talla36']; ?>" value="<?php echo $key['talla36']; ?>" name="talla36" id="talla36<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['talla38']; ?>" readonly min="0" max="<?php echo $key['talla38']; ?>" value="<?php echo $key['talla38']; ?>" name="talla38" id="talla38<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['tallas']; ?>" readonly min="0" max="<?php echo $key['tallas']; ?>" value="<?php echo $key['tallas']; ?>" name="tallas" id="tallas<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['tallam']; ?>" readonly min="0" max="<?php echo $key['tallam']; ?>" value="<?php echo $key['tallam']; ?>" name="tallam" id="tallam<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['tallal']; ?>" readonly min="0" max="<?php echo $key['tallal']; ?>" value="<?php echo $key['tallal']; ?>" name="tallal" id="tallal<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['tallaxl']; ?>" readonly min="0" max="<?php echo $key['tallaxl']; ?>" value="<?php echo $key['tallaxl']; ?>" name="tallaxl" id="tallaxl<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['tallau']; ?>" readonly min="0" max="<?php echo $key['tallau']; ?>" value="<?php echo $key['tallau']; ?>" name="tallau" id="tallau<?php echo $key['id_inventario']; ?>" class="form-control"></td>
                                                    <td><input type="number" placeholder="<?php echo $key['tallaest']; ?>" readonly min="0" max="<?php echo $key['tallaest']; ?>" value="<?php echo $key['tallaest']; ?>" name="tallaest" id="tallaest<?php echo $key['id_inventario']; ?>" class="form-control"></td>



                                                    </td>
                                                    <td>
                                                        <form id="datosProductosSeleccionados" action="gestionPedidoPrestamo.php" method="post" onsubmit="return confirmation()">

                                                            <select class="form-control" name="observacion">

                                                                <option value="BUEN ESTADO">BUEN ESTADO</option>
                                                                <option value="MAL ESTADO">MAL ESTADO</option>
                                                            </select>


                                                    </td>
                                                    <td>



                                                        <input type="hidden" name="referencia" value="<?php echo $key['referencia']; ?>">

                                                        <input type="hidden" name="id_reintegro" value="<?php echo $key['id_inventario']; ?>">
                                                        <input type="hidden" name="accion" value="generaReintegro">
                                                        <input type="submit" value="RE-INTEGRAR" class="btn-danger ">
                                                        </form>
                                                    </td>


                                                </tr>






                                            <?php
                                                $item++;
                                            }
                                            ?>


                                        <?php
                                        } else {
                                        ?>

                                        <?php
                                        }
                                        ?>


                                    </tbody>


                                </table>



                            </div>
                        </div>



                    </div>


                </div>

                <!-- /.container-fluid -->


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
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include 'librerias_js/pruebas-libreriasjs.php'; ?>



    <script>
        function confirmation() {
            if (confirm("Desea seguir?")) {
                return true;
            } else {
                return false;
            }
        }




        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>