<?php
include '../modelo/redireccion.php';
require_once '../modelo/datosInventarios.php';
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

    <title>Cobros</title>

    

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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / cobros de inventarios </h1>
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
                                            <th title="" class="text-center">id Cobro</th>
                                            <th title="" class="text-center">Tipo Cobro</th>
                                            
                                            <th title="" class="text-center">Fecha cobro</th>
                                            <th title="" class="text-center">Cliente</th>
                                            <th title="" class="text-center">Vendedor</th>
                                            <!-- <th title="" class="text-center">Fecha Vencimiento</th> -->
                                            
                                            <th title="" class="text-center">cantidad</th>
                                            <th title="" class="text-center">valor</th>
                                           <th></th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                        <?php 
                                        foreach ($inventarios->verTodasFacturasCobros() as $key) {
                                        ?>
                                        <tr>
                                            <td>Cobro # <?php echo $key['id_cobro']; ?></a></td>
                                            <td><?php echo $key['observacion']; ?></td>
                                        <td><?php echo $key['fecha']; ?></td>
                                        
                                        <td><?php echo $key['cliente']; ?></td>
                                        <td><?php echo $key['usuario']; ?></td>
                                        <td><?php echo $key['cantidad']; ?></td>
                                        <td><?php echo $key['valor_cobro']; ?></td>
                                        <td>
                                        <a href="factura-cobro.php?id_cobro=<?php echo $key['id_cobro']; ?>&cliente=<?php echo $key['cliente']; ?>&fecha=<?php echo $key['fecha']; ?>"><img src="../imagenes/iconos/impresora.png" alt=""></a>
                                        </td>
                                       
                                        
                                        </tr>
                                        <?php 
                                        }
                                        ?>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th title="" class="text-center">id Cobro</th>
                                            <th title="" class="text-center">Tipo Cobro</th>
                                            
                                            <th title="" class="text-center">Fecha cobro</th>
                                            <th title="" class="text-center">Cliente</th>
                                            <th title="" class="text-center">Vendedor</th>
                                            <!-- <th title="" class="text-center">Fecha Vencimiento</th> -->
                                            
                                            <th title="" class="text-center">cantidad</th>
                                            <th title="" class="text-center">valor</th>
                                           <th></th>
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
    <?php include './librerias_js/librerias-cobros-inventario.php' ?>



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>
</body>

</html>