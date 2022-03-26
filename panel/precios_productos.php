<?php
require_once '../modelo/redireccion.php';
require '../modelo/datosInventarios.php';
require '../modelo/datos-productos.php';
$productos = new Productos();
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
    
                    <div>
 
                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    
                    




















<input type="hidden" value="1" id="op">






                    <div class="col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                      
                                                <th>item</th>
                                                <th>referencia</th>
                                                <th>descripcion</th>
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                                <th>tela</th>
                                                <th>categoria</th>
                                                <th>genero</th>
                                                <th>coleccion</th>
                                                <th>bodega</th>
                                                <th>ruta</th>
                                                <th>color</th>
                                                <th>proveedor</th>
                                       
                                                <th>estado</th>
                                                <th>precio mayor</th>
                                                <th>precio detal</th>
                                                <th>fecha ingreso producto</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                            <?php
                                            $item = 1;
                                            foreach ($inventarios->verTodoInventarioRegistrado() as $key) {
                                            ?>
                                                <tr>
                                                    
                                                    <td><?php echo $key['id_inventario']; ?></td>
                                                    <td><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion']; ?></td>
                                                    <td><?php echo $key['descripcion']; ?></td>
                                                    <td><?php echo $key['marca']; ?></td>
                                                    <td><?php echo $key['tipo']; ?></td>
                                                    <td><?php echo $key['silueta']; ?></td>
                                                    <td><?php echo $key['tela']; ?></td>
                                                    <td><?php echo $key['categoria']; ?></td>
                                                    <td><?php echo $key['genero']; ?></td>
                                                    <td><?php echo $key['coleccion']; ?></td>
                                                    <td><?php echo $key['bodega']; ?></td>
                                                    <td><?php echo $key['ruta']; ?></td>
                                                    <td><?php echo $productos->color_hexa($key['color']);; ?></td>
                                                    <td><?php echo $key['proveedor']; ?></td>
                                                
                                                    <td><?php echo $key['estado']; ?></td>
                                                    <td><?php echo $key['precio_mayor']; ?></td>
                                                    <td><?php echo $key['precio']; ?></td>
                                                    <td><?php echo $key['fecha_ingreso_producto']; ?></td>
                                                    <td>
                                                    <a class="btn btn-sm btn-info" id="editar_clientes_<?php echo $key['id_inventario']; ?>" style="float: left;" title="Editar Cliente">Editar precio</a>
                                                    <script>
                                                        document.getElementById('editar_clientes_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                            window.open('editar-precio.php?id_inventario=<?php echo $key['id_inventario']; ?>&precio=<?php echo $key['precio']; ?>&precio_mayor=<?php echo $key['precio_mayor']; ?>', 'Editar Precio', 'width=820,height=516, top=200, left=400, location=no');
                                                        });
                                                    </script>
                                                    </td>
                                                </tr>
                                            <?php
                                                $item++;
                                            }
                                            ?>


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                
                                                <th>item</th>
                                                <th>referencia</th>
                                                <th>descripcion</th>
                                                <th>marca</th>
                                                <th>tipo</th>
                                                <th>silueta</th>
                                                <th>tela</th>
                                                <th>categoria</th>
                                                <th>genero</th>
                                                <th>coleccion</th>
                                                <th>bodega</th>
                                                <th>ruta</th>
                                                <th>color</th>
                                                <th>proveedor</th>
                                               
                                                <th>estado</th>
                                                <th>precio mayor</th>
                                                <th>precio detal</th>
                                                <th>fecha ingreso producto</th>
                                              
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
    <?php include './librerias_js/librerias_js-inventario.php' ?>



  


<script >

function option(op){
    document.getElementById("op").value = op;

}





    </script>


    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>
</body>

</html>