<?php
session_start();
require_once '../modelo/val_ventas.php';
require '../modelo/datosInventarios.php';
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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Pesos </h1>
                    </div>
                    <div>
                        <legend>Pesos de inventario</legend>
                        <p>aqui observamos los pesos que existen registrados en inventario</p>
                        <table width='100%'>
                            <tr>
                                <th>Referencia</th>
                                <th>Silueta</th>
                                <th>Categoria</th>
                                <th>Color</th>
                                <th>Estado</th>
                                <th>TALLA 6</th>
                                <th>TALLA 8</th>
                                <th>TALLA 10</th>
                                <th>TALLA 12</th>
                                <th>TALLA 14</th>
                                <th>TALLA 16</th>
                                <th>TALLA 18</th>
                                <th>TALLA 20</th>
                                <th>TALLA 26</th>
                                <th>TALLA 28</th>
                                <th>TALLA 30</th>
                                <th>TALLA 32</th>
                                <th>TALLA 34</th>
                                <th>TALLA 36</th>
                                <th>TALLA 38</th>
                                <th>TALLA S</th>
                                <th>TALLA M</th>
                                <th>TALLA L</th>
                                <th>TALLA XL</th>
                                <th>TALLA U</th>
                                <th>TALLA EST</th>
                                <th>ACCION</th>
                                

                            </tr>
                            <?php 
                            foreach($inventarios->verTodoInventarioGeneral() as $inv){
                            ?>
                                <td>Referencia</td>
                            <?php
                            }
                            ?>
                        </table>
                    </div>


                </div>
                <!-- /.container-fluid -->

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
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>
</body>

</html>