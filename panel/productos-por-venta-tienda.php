<?php
include '../modelo/redireccion.php';
require_once '../modelo/funcionesTienda.php';
$tienda = new Tiendas();
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

    <title>Ventas</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Tienda </h1>
                    </div>
                    <!-- Botones que indican los colores en las tablas -->
                   
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th title="" class="text-center">ID</th>

                                            <th title="" class="text-center">N° DE VENTA</th>
                                            <th title="" class="text-center">REFERENCIA</th>
                                            <th title="" class="text-center">TALLA</th>
                                            <th title="" class="text-center">CANTIDAD</th>
                                            
                     
                                     
                                        </tr>
                                    </thead>
                                 
                                    <tbody style="color: gray;">
                                        <?php

                                        if(isset($_GET['id'])){
                                            foreach ($tienda->verRegiastrosProductoPedido($_GET['id']) as $key) {
                                                                   
                                                ?>
                                                <tr class="btn-light  ">
                                                    	
	
	
	                                                   
	
                                                        <td><?php ECHO $key['id_lista']; ?></td>
                                                        <td><?php ECHO $key['numero_venta_w']; ?></td>
                                                        <td><?php ECHO $key['referencia']; ?></td>
                                                        <td><?php ECHO $key['talla']; ?></td>
                                                        <td><?php ECHO $key['cantidad']; ?></td>

                                                </tr>
                                        

                                   
                                        <?php
                                        }
                                        }
                                        ?>
                                    </tbody>
                                  
                                </table>
                            </div>
                            <a href="ventas-detalles.php?>">
                                <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include '../inc/footer.php'; ?>
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
