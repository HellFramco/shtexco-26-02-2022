<?php
include '../modelo/redireccion.php';
include '../modelo/funcionesClientes.php';
$clientes = new Clientes();


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

    <title>Clientes</title>
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
                <div class="container-fluid tex-center">
                    

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Clientes </h1>
                        <button class="btn btn-sm btn-success" style="float: right;" id="nuevo"> <i class="fas fa-plus-circle" title="Nuevo"> </i> Nuevo Cliente</button>

                        <script>
                            document.getElementById('nuevo').addEventListener('click', function() {
                                window.open('nuevo-cliente.php', 'Nueva Venta', 'width=610,height=800, top=100, left=400, location=no');
                            });
                        </script>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                          <input type="text" name="cliente" id="cliente" placeholder="Numero de Documento o Nombre" class="form-control">
                          
                        </div>
                        <div class="col-sm-6">
                          <button id="buscarCliente" class="btn btn-info">Buscar Cliente</button>
                        </div>
                    </div>
                    <div class="card shadow mb-4">

  
    
  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID CLIENTE</th>
                                            <th>IDENTIFICACION</th>
                                            <th>NOMBRES</th>
                                            <th>TELEFONO</th>
                                            <th>CORREO</th>
                                            <th>DIRECCIONES</th>
                                            <th>ESTADO</th>
                                            <th>FECHA DE INGRESO</th>
                                            <th>ACCION</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color: gray;" id="areaResultadosBusqueda">
                                        <?php
                                        foreach ($clientes->todosClientes() as $key) {
                                        ?>
                                            <tr class="btn-light" style="text-transform: uppercase;">
                                                <td><?php echo $key['id']; ?></td>
                                                <td><?php echo $key['identificacion_cli']; ?></td>
                                                <td><?php echo $key['nombre_cli']; ?></td>
                                                <td><?php echo $key['telefono']; ?></td>
                                                <td><?php echo $key['email']; ?></td>
                                                <td>
                                                    
                                                    <?php echo $key['direccion']; ?> 
                                                    
                                                </td>
                                                <td><?php echo $key['status']==1?'ACTIVO':'INACTIVO'; ?></td>
                                                <td><?php echo $key['dateIn']; ?></td>
                                                <td>
                                                    <a href="nueva-venta.php?cliente=<?php echo $key['id']; ?>" class="btn btn-sm btn-success" id="nueva_venta_<?php echo $key['id']; ?>" title="Nueva Venta para este cliente">Nueva Venta</a>

                                                    <!-- <script>
                                                        document.getElementById('nueva_venta_<?php echo $key['id']; ?>').addEventListener('click', function() {
                                                            window.open('nueva-venta.php?cliente=<?php echo $key['id']; ?>', 'Nueva Venta', 'width=2110,height=915, top=200, left=400, location=no');
                                                        });
                                                    </script> -->
                                                    <a class="btn btn-sm btn-warning" id="direcciones-clientes_<?php echo $key['id']; ?>" style="float: left;" title="Agregar nueva Direccion">Direcciones</a>

                                                    <script>
                                                        document.getElementById('direcciones-clientes_<?php echo $key['id']; ?>').addEventListener('click', function() {
                                                            window.open('modal/modalDireccionesClientes.php?cliente=<?php echo $key['id']; ?>', 'Direcciones', 'width=820,height=516, top=200, left=400, location=no');
                                                        });
                                                    </script>

                                                    <a class="btn btn-sm btn-info" id="editar_clientes_<?php echo $key['id']; ?>" style="float: left;" title="Editar Cliente">Editar</a>

                                                    <script>
                                                        document.getElementById('editar_clientes_<?php echo $key['id']; ?>').addEventListener('click', function() {
                                                            window.open('editar-cliente-vendedor.php?id_cliente=<?php echo $key['id']; ?>', 'Editar Cliente', 'width=820,height=516, top=200, left=400, location=no');
                                                        });
                                                    </script>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID CLIENTE</th>
                                            <th>IDENTIFICACION</th>
                                            <th>NOMBRES</th>
                                            <th>TELEFONO</th>
                                            <th>CORREO</th>
                                            <th>DIRECCIONES</th>
                                            <th>ESTADO</th>
                                            <th>FECHA DE INGRESO</th>
                                            <th>ACCION</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <a href="ventas-detalles.php?>">
                                <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                            </a>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
            </div>
            <!-- Footer -->
            <?php include '../inc/footer.php'; ?>
            <!-- End of Footer -->

            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>

        $(document).ready(function(){
                          $('#buscarCliente').click(function(){
                            var cliente = $('#cliente').val();
                            
                            $.post({
                              type: 'POST',
                              url: 'lista-clientes-vista.php',
                              data: {'cliente':cliente},
                              success: function(r){
                                $('#areaResultadosBusqueda').html(r);
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