<?php
include '../modelo/redireccion.php';
include '../modelo/funcionesClientes.php';
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
$producto = new productos();
$clientes = new clientes();
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

    <title>Nueva Venta</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

    
    

</head>

<body id="page-top">
<div id="contenedor_loading">
    <div id="loading"></div>
</div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        
                    </div>
                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="">
                        <form action="modeloNuevaVenta.php" id="data_venta" method="post" onsubmit=" document.getElementById('siguiente').disabled = true;">
                        <div class="row">
                            <div class="col-sm-12">
                                <legend class="text-center">Nueva Venta</legend>
                                <legend class="text-center">Fecha: <?php echo date('Y-m-d'); ?></legend>
                                <a href="mis-clientes.php" id="cerrar" class="btn btn-danger">Volver</a>
                                <script> document.getElementById('cerrar').addEventListener('click', function(){ window.close(); }); </script>
                            </div>
                            <div class="col-sm-12">
                                <h5 class="text-center">Informacion Venta</h5>
                                <hr>
                            </div>

                            <div class="col-sm-6">

                                <table width="100%" class="">
                                    <tr>
                                        <th class="text-center">Cliente:</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><input type="text" class="form-control text-center" id="cliente" readonly="" name="cliente" value="<?php echo $clientes->clienteSeleccionado($_GET['cliente']); ?>"></td>
                                    </tr>
                                </table>
                                
                            </div>
                            <div class="col-sm-6">
                                <table width="100%" class="">
                                    <tr>
                                        <th class="text-center">Direccion:</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <select name='direccion' id="direccion" class="form-control text-center">
                                                <?php 
                                                foreach ($clientes->direccionCliente($_GET['cliente']) as $key) {
                                                ?>
                                                <option value="<?php echo $key['direccion'] ?>"><?php echo $key['direccion'] ?></option>
                                                <?php 
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                            
                            <div class="col-sm-6">
                                <table width="100%" class="">
                                    <tr>
                                        <th class="text-center">Medio de Pago:</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                        <select name='metodo_pago' id="metodo_pago" class="form-control text-center">
                                                <?php 
                                                foreach ($clientes->seleccionarMetodoPago() as $key) {
                                                ?>
                                                <option value="<?php echo $key['nombre_metodo'] ?>"><?php echo $key['nombre_metodo'] ?></option>
                                                <?php 
                                                }
                                                ?>
                                            </select>
                                            
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                            <div class="col-sm-6" id="espacioTransportadora">
                                <!-- <table width="100%" class="">
                                    <tr>
                                        <th class="text-center">Transportadora:</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <select name='transportadora' id="transportadora" class="form-control text-center">
                                                <?php 
                                                foreach ($clientes->seleccionarTransportadora() as $key) {
                                                ?>
                                                <option value="<?php echo $key['nombre_transportadora'] ?>"><?php echo $key['nombre_transportadora'] ?></option>
                                                <?php 
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                </table> -->
                                <hr>
                            </div>
                            <div class="col-sm-4">
                                
                                
                            </div>
                            <div class="col-sm-4">
                                
                                
                            </div>
                            <div class="col-sm-4">
                                <input type="hidden" name="accion" value="nuevaVenta">
                                <input type="hidden" name="id_cliente" value="<?php echo $_GET['cliente']; ?>">
                                <input type="submit" id="siguiente" class="btn btn-success text-center" value="Siguiente" disabled="" />
                                
                            </div>
                            <div style="display: ;">
                            <div class="col-sm-12" id="areaProductos">
                                
                            </div>
                        </div>
                    </form>
                    </div>

                </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
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
    <?php include './librerias_js/pruebas-libreriasjs.php'; ?>



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
        contenedor.style.visibility = "hidden";
        contenedor.style.opacity = "0";
      };
    </script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  $('#direccion').select2();
  // $('#transportadora').select2();
  // $('#metodo_pago').select2();
</script>
<?php include 'librerias_js/pruebas-libreriasjs.php'; ?>
<script>
                      
                          $('#metodo_pago').change(function(){
                            var metodo_pago = $('#metodo_pago').val();
                            
                            $.post({
                              type: 'POST',
                              url: '../modelo/selectTransportadoras.php',
                              data: {'metodo_pago':metodo_pago},
                              success: function(r){
                                $('#espacioTransportadora').html(r);
                              }
                            });
                            // $('#enviar_adiccion').prop('disabled', true);
                            return false;
                          });

                          $('#metodo_pago').change(function(){
                            var transportadora = $('#transportadora').val();
                            var siguiente = document.getElementById('siguiente').disabled = false;

                          });

                    
    </script>
            <!-- <script>
              document.getElementById('siguiente').addEventListener('click', function(){
                    var referencia = document.getElementById('buscar_referencia').value;
                      $.ajax({
                          url: 'data-inventario-venta.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                          type: 'POST',
                          dataType:'html',//dataType: xml, json, script, o html
                          data: {'accion' : 'buscar_referencia','referencia':referencia },//se evia el valor seleccionado en tu select
                          success: function (result) {   
                              console.log('procesado');    
                              $("#campoProducto table").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                          },
                          error: function (jqXHR, status, error) {        
                              alert("error");
                          }
                      });
              
              });
             
          </script> -->

          <!-- <script>
              data_venta = $('#data_venta').serialize();
              document.getElementById('siguiente').value;
              document.getElementById('siguiente').addEventListener('click', function(){
                console.log(data_venta);
                document.getElementById('siguiente').style.display = 'none';
                    // var referencia = document.getElementById('buscar_referencia').value;
                      $.ajax({
                          url: '../modelo/nuevaVenta.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                          type: 'GET',
                          dataType:'html',//dataType: xml, json, script, o html
                          data: data_venta,//se evia el valor seleccionado en tu select
                          success: function (result) {   
                              console.log('procesado');    
                              $("#areaProductos").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html

                          },
                          error: function (jqXHR, status, error) {        
                              alert("error");
                          }
                      });

              
              });
             
          </script> -->

          <!-- <script>
              document.getElementById('envio_buscar_referencia').addEventListener('click', function(){
                    var referencia = document.getElementById('buscar_referencia').value;
                      $.ajax({
                          url: '../modelo/funcionesInventarioVenta.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                          type: 'POST',
                          dataType:'html',//dataType: xml, json, script, o html
                          data: {'accion' : 'buscar_referencia','referencia':referencia },//se evia el valor seleccionado en tu select
                          success: function (result) {   
                              console.log('procesado');    
                              $("#campoProducto table").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                          },
                          error: function (jqXHR, status, error) {        
                              alert("error");
                          }
                      });
              
              });
             
          </script> -->
          
</body>

</html>