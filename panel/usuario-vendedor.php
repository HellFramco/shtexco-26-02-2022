<?php
include '../modelo/redireccion.php';
include '../modelo/funcionesUsuarios.php';
$usuarios = new Usuarios();


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

    <title>Usuarios</title>
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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Usuarios </h1>
                        <!-- <button class="btn btn-sm btn-success" style="float: right;" id="nuevo"> <i class="fas fa-plus-circle" title="Nuevo"> </i> Nuevo Usuario</button>

                        <script>
                            document.getElementById('nuevo').addEventListener('click', function() {
                                window.open('nuevo-cliente.php', 'Nueva Venta', 'width=610,height=800, top=100, left=400, location=no');
                            });
                        </script> -->
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6">
                          <input type="text" name="cliente" id="cliente" placeholder="Numero de Documento o Nombre" class="form-control">
                          
                        </div>
                        <div class="col-sm-6">
                          <button id="buscarCliente" class="btn btn-info">Buscar Cliente</button>
                        </div>
                    </div> -->
                    <div class="card shadow mb-4">

  
    
  
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            
                                            <th>Correo</th>
                                            <th>Nombre</th>
                                            <!-- <th>Clave</th> -->
                                            <th>Linea</th>
                                            <!-- <th>Estado</th> -->
                                            <th></th>
                                            <!-- <th></th> -->
                                        </tr>
                                    </thead>
                                    <tbody style="color: gray;" id="areaResultadosBusqueda">

                                        <?php
                                        foreach ($usuarios->verUsuariosPorRol(2) as $key) {
                                        ?>
                                            
                                            <tr class="btn-light" style="text-transform: uppercase;">
                                                <form action="../modelo/editaUsuarioLinea.php" method="POST">
                                                    <td><input type="text" readonly="" value="<?php echo $key['mmb']; ?>" name="correo" class="form-control"> <?php echo $key['mmb']; ?></td>
                                                    <td><input type="text" readonly="" value="<?php echo $key['nombre']; ?>" name="nombre" class="form-control"> <?php echo $key['nombre']; ?></td>
                                                    <!-- <td><input type="password" value="<?php echo $key['clv']; ?>" name="clave" class="form-control"></td> -->
                                                    <td>
                                                        <select name="linea" id="" class="form-control">
                                                            <option value="<?php echo $key['linea']; ?>"><?php echo $key['linea']; ?></option>
                                                            
                                                        </select>
                                                    </td>
                                                    
                                                    <td>
                                                        <input type="hidden" name="accion" value="EditaUsuario">
                                                        <input type="hidden" name="id_usuario" value="<?php echo $key['id']; ?>">
                                                        <input type="submit" class="btn btn-primary" value="Guardar Cambios">
                                                        
                                                        
                                                    </td>
                                                    <!-- <td>
                                                        
                                                    </td> -->
                                                    </form>
                                                
                                            </tr>
                                            
                                            
                                        <?php
                                        }
                                        ?>
                                        

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            
                                            <th>Correo</th>
                                            <th>Nombre</th>
                                            <!-- <th>Clave</th> -->
                                            <th>Linea</th>
                                            <!-- <th>Estado</th> -->
                                            <th></th>
                                            <!-- <th></th> -->
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