<?php

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


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


<input type="hidden" value="1" id="op">






                    <div class="col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table name="EXISTENCIA" class="table table-bordered" id="example" width="100%" cellspacing="0">

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
                                                <th>talla 6 </th>
                                                <th>talla 8 </th>
                                                <th>talla 10 </th>
                                                <th>talla 12 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal4" onclick="option('4')" alt=""></th>
                                                <th>talla 14 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal5" onclick="option('5')" alt=""></th>
                                                <th>talla 16 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal6" onclick="option('6')" alt=""></th>
                                                <th>talla 18 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal7" onclick="option('7')" alt=""></th>
                                                <th>talla 20 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal8" onclick="option('8')" alt=""></th>
                                                <th>talla 26 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal9" onclick="option('9')" alt=""></th>
                                                <th>talla 28 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal10" onclick="option('10')" alt=""></th>
                                                <th>talla 30 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal11" onclick="option('11')" alt=""></th>
                                                <th>talla 32 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal12" onclick="option('12')" alt=""></th>
                                                <th>talla 34 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal13" onclick="option('13')" alt=""></th>
                                                <th>talla 36 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal14" onclick="option('14')" alt=""></th>
                                                <th>talla 38 <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal15" onclick="option('15')" alt=""></th>
                                                <th>talla S <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal16" onclick="option('16')" alt=""></th>
                                                <th>talla m <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal17" onclick="option('17')" alt=""></th>
                                                <th>talla l <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal18" onclick="option('18')" alt=""></th>
                                                <th>talla xl <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal19" onclick="option('19')" alt=""></th>
                                                <th>talla u <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal20" onclick="option('20')" alt=""></th>
                                                <th>talla est <img src="../imagenes/iconos/rank.jpeg" data-toggle="modal" data-target="#exampleModal21" onclick="option('21')" alt=""></th>
                                                <th>Total</th>
                                                <th>estado</th>
                                                <th>precio</th>
                                                <th>fecha ingreso producto</th>
                                            </tr>


                                            <?php
                                            $item = 1;
                                            foreach ($inventarios->verTodoInventarioRegistrado() as $key) {
                                              $cantidad = $key['talla6'] + $key['talla8'] + $key['talla10'] + $key['talla12'] +  $key['talla14'] + $key['talla16'] + $key['talla18'] + $key['talla20'] + $key['talla26'] + $key['talla28'] + $key['talla30'] + $key['talla32'] + $key['talla34'] + $key['talla36'];
                                              $cantidad = $cantidad + $key['talla38'] +  $key['tallas'] + $key['tallam'] + $key['tallal'] + $key['tallaxl'] + $key['tallau'] + $key['tallaest'];
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
                                                    <td><?php echo $key['talla6']; ?></td>
                                                    <td><?php echo $key['talla8']; ?></td>
                                                    <td><?php echo $key['talla10']; ?></td>
                                                    <td><?php echo $key['talla12']; ?></td>
                                                    <td><?php echo $key['talla14']; ?></td>
                                                    <td><?php echo $key['talla16']; ?></td>
                                                    <td><?php echo $key['talla18']; ?></td>
                                                    <td><?php echo $key['talla20']; ?></td>
                                                    <td><?php echo $key['talla26']; ?></td>
                                                    <td><?php echo $key['talla28']; ?></td>
                                                    <td><?php echo $key['talla30']; ?></td>
                                                    <td><?php echo $key['talla32']; ?></td>
                                                    <td><?php echo $key['talla34']; ?></td>
                                                    <td><?php echo $key['talla36']; ?></td>
                                                    <td><?php echo $key['talla38']; ?></td>
                                                    <td><?php echo $key['tallas']; ?></td>
                                                    <td><?php echo $key['tallam']; ?></td>
                                                    <td><?php echo $key['tallal']; ?></td>
                                                    <td><?php echo $key['tallaxl']; ?></td>
                                                    <td><?php echo $key['tallau']; ?></td>
                                                    <td><?php echo $key['tallaest']; ?></td>
                                                    <td><?php echo $cantidad; ?></td>
                                                    <td><?php echo $key['estado']; ?></td>
                                                    <td><?php echo $key['precio']; ?></td>
                                                    <td><?php echo $key['fecha_ingreso_producto']; ?></td>

                                                </tr>
                                            <?php
                                                $item++;
                                            }
                                            ?>



                                       
                                    </table>
                                </div>
                                <a href="ventas-detalles.php?>">

                                </a>
                            </div>
                        </div>
                    </div>


                </div>




            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

        </div>


    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>






  





</body>

</html>