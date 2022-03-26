<?php
session_start();
require_once '../modelo/val_ventas.php';
require_once '../modelo/funcionesClientes.php';
$clientes = new Clientes();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <style>
        .iti.iti--allow-dropdown {
            width: 100%;
        }
    </style>
 <script >window.resizeTo (1200,1000);</script>
</head>

<body id="page-top">
    <div id="contenedor_loading">
        <div id="loading"></div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        // include 'menu.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              
                <?php
                // include 'top-bar.php';
                ?>
             

                <!-- Begin Page Content -->
                <div class="container">
                    <form id="datos">
                        <div class="row">

                            <div class="col-sm-12 text-center">
                                <br>
                                <br>
                                <br>
                                <h5>Nuevo Influencer</h5>
                                <hr>
                                <legend>Informacion Principal</legend><br>

                                <a id="veriCliente1" href="https://www.adres.gov.co/consulte-su-eps" target="_blank" class="btn btn-primary" title="con este boton verificas si el cliente es real, se validara directamente con la cedula en addres.">Verificar Cliente por Address</a>


                                <a id="veriCliente2" href="https://antecedentes.policia.gov.co:7005/WebJudicial/antecedentes.xhtml" target="_blank" class="btn btn-warning" title="con este boton verificas si el cliente es real, se validara directamente con la cedula en addres.">Verificar Cliente Por Pagina de La Policia</a>
                                <br>
                                <!-- <iframe src="https://www.adres.gov.co/consulte-su-eps" frameborder="0"></iframe> -->
                                <!-- <script>
                                                document.getElementById('veriCliente').addEventListener('click', function() {
                                                  window.open('nuevo-cliente.php', 'Nueva Venta', 'width=610,height=800, top=100, left=400, location=no');
                                                });
                                              </script> -->
                                <br>
                            </div>
                 
                            <div class="col-sm-4">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                                <label for="" id="val_nombre"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Codigo</label>
                                <input type="mail" class="form-control" name="correo" id="correo">
                                <label for="" id="val_correo"></label>
                            </div>

                            <div class="col-sm-4">
                                <label for="">Tasa</label>
                                <input type="number" name="numero" step="0.1">
                            </div>

                        </div>
                    
            
                        <hr>
                        <div class="row">

                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4">
                                <input type="hidden" name="accion" value="registrar">
                                <label for=""></label>
                                <a class="btn btn-success" id="guardar">Guardar Influencer</a>
                                <label for="" id="val_envio"></label>
                            </div>
                            <div class="col-sm-4">

                            </div>



                        </div>
                        <hr>


                    </form>
                </div>


            </div>

            <!-- <?php
                    include '../inc/footer.php';
                    ?> -->


        </div>


    </div>

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

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
  

   
  var guardar = document.getElementById('guardar');

        guardar.addEventListener('click', function() {
         
                var confirmacion = confirm('Esta seguro de Registrar el cliente');
                if (confirmacion) {
                    var datos = $('#datos').serialize();

                    $.ajax({
                        url: '../controlador/influencerController.php', //ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                        type: 'POST',
                        dataType: 'html', //dataType: xml, json, script, o html
                        data: datos, //se evia el valor seleccionado en tu select
                        success: function(result) {

                            $("#val_envio").html(result); //si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                        },
                        error: function(jqXHR, status, error) {
                            alert("error");
                        }
                    });
                } else {
                    alert('no Registrado');
                }
            
        });


      
    </script>
    <script src="build/js/intlTelInput.js"></script>
    <script>
 
    </script>
    <script type="text/javascript">
	
		</script>


</body>

</html>