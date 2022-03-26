<?php
require_once '../modelo/datos-productos.php';
$producto = new productos();
include "modal/modal-productos.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema - Administrador</title>

    <?php
    include 'librerias\librerias.php'
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include 'menu.php'
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Aqui inicia la barra superior -->
                <?php
                include 'top-bar.php';
                ?>
                <!-- Aqui finaliza la barra superior -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / <a href="inventario.php">Inventario</a> / Asignar Inventario</h1>

                    <div>

                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="myModalLabel">Asignar Inventario a Cargo Dama Denim Dry</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form class="form-row">
                                    <input type="hidden" id="id">
                                    <div class="form-group col-md-6">
                                        <label for="idd">Talla</label>
                                        <select id="estado" class="form-control">
                                            <option value="1">26</option>
                                            <option value="0">28</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="idd">Color</label>
                                        <select id="estado" class="form-control">
                                            <option value="1">Rojo</option>
                                            <option value="0">Verde</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Cantidad</label>
                                        <input type="text" class="form-control" id="Talla" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Cantidad">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" style="display: none;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <a href="inventario.php"><button type="button" class="btn btn-default">Volver</button></a>
                                <a href="inventario.php"><button type="button" class="btn btn-primary" onclick="modificarProducto()">Guardar y Salir</button></a>
                            </div>
                        </div>

                    </div>


                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>



            </div>
            <!-- End of Page Wrapper -->


            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

        </div>
    </div>
    <?php
    include 'librerias_js\librerias_js-inventario.php';
    ?>
    <?php
    include './modal/logoutmodal.php';
    ?>

</body>

</html>