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
                <div class="container-fluid">

                    <!-- Botones que indican los colores en las tablas -->
                    <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Inventarios </h1>
                        <a id="nuevo" class="btn btn-primary">Agregar Producto</a>

                        <script>
                            document.getElementById('nuevo').addEventListener('click', function() {
                                window.open('modal/modalNuevoProducto.php', 'NUEVO PRODUCTO', 'width=1178,height=740, top=150, left=400');
                            });
                        </script>

                    </div>





                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="row">
                        <div class="col-sm-6">
                          <input type="text" name="referencia" id="referencia" placeholder="Referencia" class="form-control">
                          <input type="hidden" name="id_venta" id="id_venta" value="" placeholder="venta" class="form-control">
                        </div>
                        <div class="col-sm-6">
                          <button id="buscarProductoEnvio" class="btn btn-info">Buscar Producto</button>
                        </div>
                    </div>

                    <div class="col-sm-12">

                        
  
                        
                      
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <!-- <th></th>
                                                <th></th> -->
                                               
                                                
                                                <!-- <th>item</th> -->
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
                                                <th>talla 6</th>
                                                <th>talla 8</th>
                                                <th>talla 10</th>
                                                <th>talla 12</th>
                                                <th>talla 14</th>
                                                <th>talla 16</th>
                                                <th>talla 18</th>
                                                <th>talla 20</th>
                                                <th>talla 26</th>
                                                <th>talla 28</th>
                                                <th>talla 30</th>
                                                <th>talla 32</th>
                                                <th>talla 34</th>
                                                <th>talla 36</th>
                                                <th>talla 38</th>
                                                <th>talla S</th>
                                                <th>talla m</th>
                                                <th>talla l</th>
                                                <th>talla xl</th>
                                                <th>talla u</th>
                                                <th>talla est</th>
                                                <th>estado</th>
                                                <th>precio</th>
                                                <th>fecha ingreso producto</th>
                                            </tr>
                                        </thead>
                                        <tbody id="areaResultadosBusqueda">
                                            <?php
                                            $item = 1;
                                            foreach ($inventarios->verInventarioLimite(10) as $key) {
                                            ?>
                                                <tr class="btn-light" style="text-transform: uppercase;">

                                                    <td>
                                                        <?php if($key['tipo'] == 'TEJIDO PLANO'){
                                                        ?>
                                                        <a id="asigna_color_<?php echo $key['id_inventario']; ?>" style="width: 100%;" class="btn btn-sm btn btn-info" tittle="agregar inventario"><img src="../imagenes/iconos/boton-agregar.png" alt="">Color</a>
                                                        <script>
                                                            document.getElementById('asigna_color_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalAgregaColor.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                        <br>
                                                        <?php
                                                        } ?>
                                                        

                                                        <a id="agrega_<?php echo $key['id_inventario']; ?>" style="width: 100%;" class="btn btn-sm btn-success" tittle="agregar inventario"><img src="../imagenes/iconos/boton-agregar.png" alt="">Reprogramacion</a>
                                                        <script>
                                                            document.getElementById('agrega_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalAgregaInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                        <br>
                                                        <center>
                                                            <!-- <a id="subir-peso_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn text-center" tittle="agregar inventario"><img src="../imagenes/iconos/escala-de-peso.png" alt=""><br>Peso</a>
                                                        <script>
                                                            document.getElementById('subir-peso_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalPesoInventario.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>&peso_unidad=<?php echo $key['peso_unidad']; ?>', 'SUBIR INVENTARIO EN PESO', 'width=800,height=800, top=200, left=400');
                                                            });
                                                        </script> -->
                                                        <a class="btn-sm btn btn-primary" style="width: 100%;" id="subir-peso_<?php echo $key['id_inventario']; ?>" title="Debes de pesar todas las prendas" href="modal/modalPesoInventario-1.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>&peso_unidad=<?php echo $key['peso_unidad']; ?>" class="btn btn-sm btn text-center" tittle="agregar inventario"><img src="../imagenes/iconos/escala-de-peso.png" alt=""><br>Pesar</a>
                                                        </center>
                                                        <br>

                                                        <a id="codigo_barras_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-dark" style="width: 100%;" title="generar Codigo de barras de inventario"><img src="../imagenes/iconos/barcode.png" alt="">Codigo Barras</a>
                                                        <script>
                                                            document.getElementById('codigo_barras_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalCodigosBarras.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'AGREGA INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                        <br>
                                                        <a id="editar_<?php echo $key['id_inventario']; ?>" class="btn btn-sm btn-info" style="width: 100%;" title="editar informacion del producto"><img src="../imagenes/iconos/editar.png" alt="">Editar</a>
                                                        <script>
                                                            document.getElementById('editar_<?php echo $key['id_inventario']; ?>').addEventListener('click', function() {
                                                                window.open('modal/modalEditarInformacionProducto.php?id_inventario=<?php echo $key['id_inventario']; ?>&descripcion=<?php echo $key['descripcion']; ?>&color=<?php echo $key['color']; ?>', 'EDITAR INVENTARIO', 'width=1178,height=740, top=150, left=400');
                                                            });
                                                        </script>
                                                        

                                                    </td>
                                                    <!-- <td>

                                                        

                                                    </td>
                                                    <td>
                                                        
                                                        
                                                    </td> -->
                                                    
                                                    <!-- <td><?php echo $key['id_inventario']; ?></td> -->
                                                    <th><?php echo $key['referencia']; ?> R<?php echo $key['reprogramacion'] == '' ? 1 : $key['reprogramacion']; ?></th>
                                                    <td><?php echo $key['descripcion']; ?></td>
                                                    <td><?php echo $key['marca']; ?></td>
                                                    <td><?php echo $key['tipo']; ?></td>
                                                    <td><?php echo $key['silueta']; ?></td>
                                                    <td><?php echo $key['tela']; ?></td>
                                                    <td><?php echo $key['categoria']; ?></td>
                                                    <td><?php echo $key['genero']; ?></td>
                                                    <td><?php echo $key['coleccion']; ?></td>
                                                    <th><?php echo $key['bodega']; ?></th>
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
                                                    <td><?php echo $key['estado']; ?></td>
                                                    <td><?php echo $key['precio']; ?></td>
                                                    <td><?php echo $key['fecha_ingreso_producto']; ?></td>

                                                </tr>
                                            <?php
                                                $item++;
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <!-- <th></th>
                                                <th></th> -->
                                               
                                                <!-- <th>item</th> -->
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
                                                <th>talla 6</th>
                                                <th>talla 8</th>
                                                <th>talla 10</th>
                                                <th>talla 12</th>
                                                <th>talla 14</th>
                                                <th>talla 16</th>
                                                <th>talla 18</th>
                                                <th>talla 20</th>
                                                <th>talla 26</th>
                                                <th>talla 28</th>
                                                <th>talla 30</th>
                                                <th>talla 32</th>
                                                <th>talla 34</th>
                                                <th>talla 36</th>
                                                <th>talla 38</th>
                                                <th>talla S</th>
                                                <th>talla m</th>
                                                <th>talla l</th>
                                                <th>talla xl</th>
                                                <th>talla u</th>
                                                <th>talla est</th>
                                                <th>estado</th>
                                                <th>precio</th>
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
   <?php include './librerias_js/librerias-inventario-subido.php' ?>



    <script>

        $(document).ready(function(){
                          $('#buscarProductoEnvio').click(function(){
                            var referencia = $('#referencia').val();
                            var id_venta = $('#id_venta').val();
                            $.post({
                              type: 'POST',
                              url: 'lista-inventario-insumos.php',
                              data: {'referencia':referencia, 'id_venta': id_venta},
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