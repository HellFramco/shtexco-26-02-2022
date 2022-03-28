<?php
include '../modelo/redireccion.php';
require_once '../modelo/funcionesVentas.php';
require_once '../api/woocommerce-api-main/aprovedOrdersContraentregaANDEfectivo.php';
$ventas = new Ventas();
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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Ventas </h1>
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

                                            <th title="" class="text-center">Orden</th>

                                            <th title="" class="text-center">Fecha Venta</th>
                                            <th title="" class="text-center">Editar Datos Venta</th>
                                            <th title="" class="text-center">Cliente</th>
                                            <th title="" class="text-center">Linea</th>
                                            <th title="" class="text-center">Metodo Pago</th>
                                            <th title="" class="text-center">Transportadora</th>
                                            <th title="" class="text-center">Estado Orden</th>
                                            <th title="" class="text-center">Cliente Aprobo</th>
                                            <th title="" class="text-center">Cartera Aprobo</th>
                                            <th title="" class="text-center">Alistamiento</th>
                                            <th title="" class="text-center">Despacho Aprobo</th>
                                            <th title="" class="text-center">Acciones</th>
                                            <th title="" class="text-center"> Comprobantes </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    </tfoot
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
    <?php include './librerias_js/ventas-libreriasjsSS.php' ?>



    <script>
    
    function lista_comprobantes(id){
    window.open('ver-comprobantes.php?id_venta='+id, 'Comprobante', 'width=1000,height=800, top=100, left=400, location=no');
}

    
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>
<!-- <script type="text/javascript">
        $(document).ready(function(e) {
            // Cuando le dás click muestra #content
            $('th.text-center.sorting.sorting_asc').click(function() {
                $("#content").toggleClass("hide");
            });

            // Simular click
            $('th.text-center.sorting.sorting_asc').click();
            
            
        });
    </script> -->
</body>

</html>
