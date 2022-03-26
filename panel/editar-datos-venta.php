<?php
include '../modelo/redireccion.php';
include '../modelo/funcionesClientes.php';
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/funcionesVentas.php';
require '../modelo/datosInventarios.php';

$inventarios = new Inventarios();
$ventas = new Ventas();
$productos = new productos();
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

    <title>Venta</title>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
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
                    <div class="col-sm-12">
                        <?php
                        foreach ($ventas->ventaPorId($_GET['id_venta']) as $key) {
                            $transportadora = $key['transportadora'];
                            $id_venta = $key['id_venta'];
                        ?>
                            <form action="modeloEditarDatosVenta.php" id="data_venta" method="post">
                                <div class="row">
                                <div class="col-sm-10">
                                        <?php 
                                        if ($_SESSION['typeUser'] == 1 || $_SESSION['typeUser'] == 7) {
                                        ?>
                                        <a class="btn btn-danger" href="ventas.php" role="button">Salir</a>
                                        <?php
                                        }
                                        else if ($_SESSION['typeUser'] == 2) {
                                        ?>
                                        <a class="btn btn-danger" href="ventas-vendedor.php" role="button">Salir</a>
                                        <?php
                                        }
                                        else if ($_SESSION['typeUser'] == 3) {
                                        ?>
                                        <a class="btn btn-danger" href="ventas-por-aprobar.php" role="button">Salir</a>
                                        <?php
                                        }
                                        ?>
                                        
                                        <legend class="text-center">Editar Datos de la orden # <strong style="color: blue;"><?php echo @$key['id_venta']; ?></strong></legend>
                                        <legend class="text-center">Fecha: <?php echo @$key['fecha_venta']; ?></legend>
                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <?php
                                            foreach ($ventas->ventaPorId(@$key['id_venta']) as $keyVenta) {
                                                if ($keyVenta['estado'] == 'APROBO CLIENTE') {
                                                    echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>APROBADO POR CLIENTE</em>";
                                                    $permisoEstado = $keyVenta['estado']; 
                                                }
                                                else if ($keyVenta['estado'] == 'APROBO CARTERA') {
                                                    echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>APROBADO POR CARTERA</em>";
                                                    $permisoEstado = $keyVenta['estado']; 


                                                            if(isset($_GET['generapdf'])){
                                                                
                                                                if($_GET['generapdf']==true){
                                                                    echo "  <script> 
                                                                    window.open('../pdf/formato1.php?id_venta=".$_GET['id_venta']."' , 'ventana1' , 'width=1000,height=1000,scrollbars=NO');
                                                                    </script> ";
                
                                                                }
                                                            }




                                                }
                                                else if ($keyVenta['estado'] == 'APROBO DESPACHO') {
                                                    echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>APROBADO POR DESPACHO</em>";
                                                    $permisoEstado = $keyVenta['estado']; 

                                                }
                                                else if ($keyVenta['estado'] == 'ALISTAMIENTO') {
                                                    echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>VENTA ALISTADA POR BODEGA</em>";
                                                    $permisoEstado = $keyVenta['estado']; 

                                                }
                                                else if ($keyVenta['estado'] == 'INICIADA') {
                                                    echo "<em style='padding:15px; background-color:mediumseagreen; color: white;'>VENTA INICIADA</em>";
                                                    $permisoEstado = $keyVenta['estado']; 

                                                }
                                                else if ($keyVenta['estado'] == 'CANCELADO') {
                                                    echo "<em style='padding:15px; background-color:crimson; color: white;'>VENTA CANCELADA</em>";
                                                    $permisoEstado = $keyVenta['estado']; 

                                            
                                                }
                                                else{
                                                    $permisoEstado = $keyVenta['estado']; 
                                                }
                                                
                                            }
                                        ?>
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
                                                <td class="text-center"><input type="text" class="form-control text-center" id="cliente" readonly="" name="cliente" value="<?php echo $key['cliente']; ?>"></td>
                                                <?php foreach ($clientes->seleccionarIdCliente($key['cliente']) as $keyCliente) {
                                                    $id_cliente = $keyCliente['id'];
                                                } ?>

                                            
                                                <input type="hidden" name="" id="estado_venta" value="<?php echo $key['estado']; ?>">

                                            <?php
                                            
                                                if($key['estado']=="APROBO CLIENTE" || $key['estado']=="APROBO CARTERA"){
                                                    $estado = $key['estado'];
                                                    echo "  <style>
                                                    .bt-eliminar{
                                                        display: none;
                                                                }

                                                            </style>";
                                                }else if($key['estado']=="CANCELADO"){
                                                    echo "  <style>
                                                                .bt-eliminar{
                                                                    display: none;
                                                                }
                                                                .bt-cancelar{
                                                                    pointer-events: none; 
                                                                    cursor: default; 
                                                                }
                                                                .bt-generar{
                                                                    pointer-events: none; 
                                                                    cursor: default; 
                                                                }

                                                            .bt-aprobar-cartera { 
                                                                    pointer-events: none; 
                                                                    cursor: default; 
                                                                } 
                                                            </style>";
                                                }
                                                
                                            ?>
                                                
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
                                                    <input name='direccion' id="direccion" class="form-control text-center" value="<?php echo $key['direccion']; ?>" readonly="" />
                                                </td>
                                            </tr>
                                        </table>

                                    </div>
                                    
                                    <?php 
                                    if ($key['estado'] == 'APROBO CLIENTE' or $key['estado'] == 'INICIADA') {
                                    ?>

                                    <div class="col-sm-6">
                                <table width="100%" class="">
                                    <tr>
                                        <th class="text-center">Medio de Pago:</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                        <select name='metodo_pago' id="metodo_pago" class="form-control text-center">
                                            <option value="<?php echo $key['medio_pago']; ?>"><?php echo $key['medio_pago']; ?></option>
                                                <?php 
                                                foreach ($clientes->seleccionarMetodoPago() as $key) {
                                                ?>
                                                <option value="<?php echo $key['nombre_metodo']; ?>"><?php echo $key['nombre_metodo']; ?></option>
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
                                <table width="100%" class="">
                                    <tr>
                                        <th class="text-center">Transportadora:</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <select name='transportadora' id="transportadora" class="form-control text-center" readonly>
                                                <option value="<?php echo $transportadora; ?> "><?php echo $transportadora; ?></option>
                                                
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                            <div class="col-sm-4">
                                        <input type="hidden" name="accion" value="editarDatosVenta">
                                        <input type="hidden" name="venta" value="<?php echo $id_venta; ?>">
                                        <input type="submit" id="Actualizar" class="btn btn-success text-center" value="Actualizar Datos" /> 

                                    </div>
                            <?php
                                    }
                                    else if($key['estado'] == 'APROBO CARTERA'){
                                    ?>
                                    <legend style="text-align: center; font-size: 30px; padding: 10px;">ESTA VENTA YA HA SIDO APROBADA POR CARTERA Y POR ELLO NO PUEDE CAMBIAR LOS DATOS DE LA ORDEN...</legend>
                                    <?php
                                    }

                                    else if($key['estado'] == 'ALISTAMIENTO'){
                                    ?>
                                    <legend style="text-align: center; font-size: 30px; padding: 10px;">ESTA VENTA YA ESTA EN PROCESO DE ALISTAMIENTO POR DESPACHO Y POR ELLO NO PUEDE CAMBIAR LOS DATOS DE LA ORDEN..</legend>
                                    <?php
                                    }

                                    else if($key['estado'] == 'APROBO DESPACHO'){
                                    ?>
                                    <legend style="text-align: center; font-size: 30px; padding: 10px;">ESTA VENTA YA HA SIDO DESPACHADA Y POR ELLO NO PUEDE CAMBIAR LOS DATOS DE LA ORDEN..</legend>
                                    <?php
                                    }

                                    else if($key['estado'] == 'CANCELADO'){
                                    ?>
                                    <legend style="text-align: center; font-size: 30px; padding: 10px;">ESTA VENTA YA HA SIDO CANCELADA Y POR ELLO NO PUEDE CAMBIAR LOS DATOS DE LA ORDEN..</legend>
                                    <?php
                                    }
                                    ?>
                                    <div class="col-sm-4">


                                    </div>
                                    <div class="col-sm-4">


                                    </div>
                                    
                            </form>

                            </div>

                        <?php
                        }
                        ?>
                    </div>
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

    <script>
            // $('#tableResponsive').slideUp();

        // $('#buscarProducto').click(function(){
        //  $('#tableResponsive').slideToggle();
        // });
    </script>


    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
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


