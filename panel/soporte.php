<?php
session_start();
require_once '../modelo/val_ventas.php';
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
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Soporte</h1>
                        </div>

                        
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Leer Ticket</label>
                            <input type="text" id='codigo_barra' autofocus="">
                            <br>
                            <br>
                            <br>
                            <div id="area" class="card"></div>
                        </div>


                        <div class="col-sm-8">
                            
                        </div>
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

    <?php include './librerias_js/librerias-soporte.php' ?>



    <script>

        $(document).ready(function(){
                          $('#codigo_barra').change(function(){
                            var codigo_barra = $('#codigo_barra').val();
                            $.post({
                              type: 'POST',
                              url: 'modelo-soporte.php',
                              data: {'codigo_barra':codigo_barra, 'accion': 'enrutarInventario'},
                              success: function(r){
                                $('#area').html(r);
                              }
                            });
                            // $('#enviar_adiccion').prop('disabled', true);
                            return false;
                          });

                      });


        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>