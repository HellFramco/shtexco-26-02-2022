<?php
session_start();
require '../modelo/redireccion.php';
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

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Validacion </h1>
                    </div>
                    


                </div>
                <div class="card">
                <div class="container">
                    <legend>Validacion de Entrada a Bodega</legend>
                        <div style="padding:10px;">
                            <form id="formulario">
                                <div class="row">
                                <div class="col-sm-3">
                                    <label for="">TALLA 6
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla6">
                                    </label>    
                                    <label for="">TALLA 10
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla10">
                                    </label>
                                    <label for="">TALLA 18
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla18">
                                    </label>
                                    <label for="">TALLA 30
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla30">
                                    </label>
                                    <label for="">TALLA 38
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla38">
                                    </label>
                                    <label for="">TALLA XL
                                        <input type="text" class="form-control" placeholder="" value="0" name="tallaxl">
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">TALLA 8
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla8">
                                    </label>
                                    <label for="">TALLA 12
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla12">
                                    </label>
                                    <label for="">TALLA 20
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla20">
                                    </label>
                                    <label for="">TALLA 32
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla32">
                                    </label>
                                    <label for="">TALLA S
                                        <input type="text" class="form-control" placeholder="" value="0" name="tallas">
                                    </label>
                                    <label for="">TALLA U
                                        <input type="text" class="form-control" placeholder="" value="0" name="tallau">
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">TALLA 10
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla10">
                                    </label>
                                    <label for="">TALLA 14
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla14">
                                    </label>
                                    <label for="">TALLA 26
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla26">
                                    </label>
                                    <label for="">TALLA 34
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla34">
                                    </label>
                                    <label for="">TALLA M
                                        <input type="text" class="form-control" placeholder="" value="0" name="tallam">
                                    </label>
                                    <label for="">TALLA EST
                                        <input type="text" class="form-control" placeholder="" value="0" name="tallaest">
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <label for="">TALLA 12
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla12">
                                    </label>
                                    <label for="">TALLA 16
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla16">
                                    </label>
                                    <label for="">TALLA 28
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla28">
                                    </label>
                                    <label for="">TALLA 36
                                        <input type="text" class="form-control" placeholder="" value="0" name="talla36">
                                    </label>
                                    <label for="">TALLA L
                                        <input type="text" class="form-control" placeholder="" value="0" name="tallal">
                                        <input type="text" class="form-control" placeholder="" value="<?php echo $_GET['inventario']; ?>" name="id_inventario" id="id_inventario">
                                    </label>
                                    <label for="">VALIDAR
                                        <input type="submit" class="btn btn-primary" placeholder="" value="Validar" name="enviar" id="enviar">
                                    </label>
                                </div>
                                </div>
                            </form>
                        </div>

                        <div class="row">
                            <div id="resultado"></div>
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



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>
        $(document).ready(function(){
                          $('#enviar').click(function(){
                            var formulario = $('#formulario').serialize();
                            var id_inventario = $('#id_inventario').val();
                            $.post({
                              type: 'POST',
                              url: 'respuesta-validacion-peso.php',
                              data: {'formulario':formulario},
                              success: function(r){
                                $('#resultado').html(r);
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
