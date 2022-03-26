<?php
include '../modelo/redireccion.php';
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
// require_once '../modelo/val_admin.php';
$producto = new productos();
include "modal/modal-nuevo-producto.php"
?>
<!DOCTYPE html>
<html lang="es">

<head>
   
    <?php
    include '../librerias/librerias-css.php';
    ?>
    <script src="../controlador/funcionesProductos.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!--Inicio menu-->
        <?php
        include 'menu.php';
        ?>
        <!--Fin menu-->
        <br /><br />
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Productos
                    <small>Información del inventario</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
           
            
            <li>
                <span class="active">Usuario: <?php echo $id_usuario; ?> - <?php echo $nombre; ?></span>
            </li>
            <li><button type="button" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#myModal" onclick="modal_crear()">Crear producto</button></li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <!-- BEGIN DASHBOARD STATS 1-->
        <br />
        <!-- INICIO DEL CONTENIDO -->
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <!-- <th>
                        <div class="text-center">ID producto</div>
                    </th> -->
                    <th>
                        <div class="text-center">Referencia</div>
                    </th>
                    <th>
                        <div class="text-center">Descripcion</div>
                    </th>
                    <th>
                        <div class="text-center">Marca</div>
                    </th>
                    <th>
                        <div class="text-center">Silueta</div>
                    </th>

                    <th>
                        <div class="text-center">Tela</div>
                    </th>
                    <th>
                        <div class="text-center">Categoria</div>
                    </th>
                    <th>
                        <div class="text-center">Genero</div>
                    </th>
                    <th>
                        <div class="text-center">Proveedor</div>
                    </th>
                    <th>
                        <div class="text-center">Color</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 6</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 8</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 10</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 12</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 14</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 16</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 18</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 20</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 22</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 24</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 26</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 28</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 30</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 32</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 34</div>
                    </th>
                    <th>
                        <div class="text-center">Talla 36</div>
                    </th>
                    <th>
                        <div class="text-center">Talla S</div>
                    </th>
                    <th>
                        <div class="text-center">Talla M</div>
                    </th>
                    <th>
                        <div class="text-center">Talla L</div>
                    </th>
                    <th>
                        <div class="text-center">Talla XL</div>
                    </th>
                    <th>
                        <div class="text-center">Talla U</div>
                    </th>
                    <th>
                        <div class="text-center">Talla EXT</div>
                    </th>
                    <th>
                        <div class="text-center">Estado</div>
                    </th>
                    
                </thead>
                <tbody>
                    <?php
                    $res = $producto->viewProductos();
                    foreach ($res as $data) {
                        $datos = "";
                    ?>
                        <form action="">
                            <tr>
                                <!-- <td>
                                    <?php echo $data['id_producto']; ?>
                                </td> -->
                                <td>
                                    <!-- <a href="inventarios.php?id_producto=<?php echo $data['referencia']; ?>"><?php echo $data['referencia']; ?></a> -->
                                    <?php echo $data['referencia']; ?>
                                </td>
                                <td>
                                    <?php echo $data['descripcion']; ?>
                                </td>
                                <td>
                                    <?php echo $data['marca']; ?>
                                </td>
                                <td>
                                    <?php echo $data['silueta']; ?>
                                </td>
                                <td>
                                    <?php echo $data['tela']; ?>
                                </td>
                                <td>
                                    <?php echo $data['categoria']; ?>
                                </td>
                                <td>
                                    <?php echo $data['genero']; ?>
                                </td>
                                <td>
                                    <?php echo $data['proveedor']; ?>
                                </td>
                                <td>
                                    <?php $producto->color_hexa($data['color']); ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],6) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],6). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],6) >= 10 AND cantidadTallas($data['referencia'],6) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],6). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],6) > 100 AND cantidadTallas($data['referencia'],6) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],6). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],8) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],8). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],8) >= 10 AND cantidadTallas($data['referencia'],8) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],8). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],8) > 100 AND cantidadTallas($data['referencia'],8) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],8). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],10) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],10). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],10) >= 10 AND cantidadTallas($data['referencia'],10) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],10). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],10) > 100 AND cantidadTallas($data['referencia'],10) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],10). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],12) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],12). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],12) >= 10 AND cantidadTallas($data['referencia'],12) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],12). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],12) > 100 AND cantidadTallas($data['referencia'],12) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],12). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],14) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],14). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],14) >= 10 AND cantidadTallas($data['referencia'],14) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],14). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],14) > 100 AND cantidadTallas($data['referencia'],14) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],14). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],16) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],16). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],16) >= 10 AND cantidadTallas($data['referencia'],16) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],16). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],16) > 100 AND cantidadTallas($data['referencia'],16) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],16). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],18) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],18). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],18) >= 10 AND cantidadTallas($data['referencia'],18) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],18). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],18) > 100 AND cantidadTallas($data['referencia'],18) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],18). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],20) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],20). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],20) >= 10 AND cantidadTallas($data['referencia'],20) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],20). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],20) > 100 AND cantidadTallas($data['referencia'],20) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],20). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],22) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],22). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],22) >= 10 AND cantidadTallas($data['referencia'],22) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],22). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],22) > 100 AND cantidadTallas($data['referencia'],22) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],22). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],24) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],24). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],24) >= 10 AND cantidadTallas($data['referencia'],24) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],24). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],24) > 100 AND cantidadTallas($data['referencia'],24) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],24). "</strong>";
                                        } 
                                    ?>
                                </td>
                                
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],26) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],26). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],26) >= 10 AND cantidadTallas($data['referencia'],26) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],26). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],26) > 100 AND cantidadTallas($data['referencia'],26) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],26). "</strong>";
                                        } 
                                    ?>
                                </td>
                               
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],28) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],28). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],28) >= 10 AND cantidadTallas($data['referencia'],28) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],28). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],28) > 100 AND cantidadTallas($data['referencia'],28) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],28). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],30) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],30). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],30) >= 10 AND cantidadTallas($data['referencia'],30) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],30). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],30) > 100 AND cantidadTallas($data['referencia'],30) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],30). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],32) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],32). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],32) >= 10 AND cantidadTallas($data['referencia'],32) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],32). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],32) > 100 AND cantidadTallas($data['referencia'],32) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],32). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],34) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],34). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],34) >= 10 AND cantidadTallas($data['referencia'],34) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],34). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],34) > 100 AND cantidadTallas($data['referencia'],34) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],34). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],36) < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],36). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],36) >= 10 AND cantidadTallas($data['referencia'],36) <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],36). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],36) > 100 AND cantidadTallas($data['referencia'],36) <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],36). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],'S') < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],'S'). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],'S') >= 10 AND cantidadTallas($data['referencia'],'S') <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],'S'). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],'S') > 100 AND cantidadTallas($data['referencia'],'S') <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],'S'). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],'M') < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],'M'). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],'M') >= 10 AND cantidadTallas($data['referencia'],'M') <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],'M'). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],'M') > 100 AND cantidadTallas($data['referencia'],'M') <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],'M'). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],'L') < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],'L'). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],'L') >= 10 AND cantidadTallas($data['referencia'],'L') <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],'L'). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],'L') > 100 AND cantidadTallas($data['referencia'],'L') <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],'L'). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],'XL') < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],'XL'). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],'XL') >= 10 AND cantidadTallas($data['referencia'],'XL') <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],'XL'). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],'XL') > 100 AND cantidadTallas($data['referencia'],'XL') <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],'XL'). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],'U') < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],'U'). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],'U') >= 10 AND cantidadTallas($data['referencia'],'U') <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],'U'). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],'U') > 100 AND cantidadTallas($data['referencia'],'U') <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],'U'). "</strong>";
                                        } 
                                    ?>
                                </td>
                                <td style="text-align: center;">
                                    <?php 
                                        if (cantidadTallas($data['referencia'],'EXT') < 10) {
                                          echo "<strong style='color:red;'>". cantidadTallas($data['referencia'],'EXT'). "</strong>";
                                        }
                                        elseif (cantidadTallas($data['referencia'],'EXT') >= 10 AND cantidadTallas($data['referencia'],'EXT') <= 100) {
                                          echo "<strong style='color:orange;'>". cantidadTallas($data['referencia'],'EXT'). "</strong>";
                                        } 
                                        elseif (cantidadTallas($data['referencia'],'EXT') > 100 AND cantidadTallas($data['referencia'],'EXT') <= 1000) {
                                          echo "<strong style='color:green;'>". cantidadTallas($data['referencia'],'EXT'). "</strong>";
                                        } 
                                    ?>
                                </td>
                                
                                <td>
                                
                                
                                    <?php echo $estado = $data['estado'] = 1? 'Activo': 'inactivo'; ?>
                                </td>
                                <td>
                                    <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nombre_modal" onclick=""></button> -->

                                    <a id="asigna_inventario_<?php echo $data['referencia']; ?>">Asignar Inventario</a>
                                    <script>
                                        document.getElementById('asigna_inventario_<?php echo $data['referencia']; ?>').addEventListener('click', function(){
                                            window.open('modal/modal-nuevo-inventario.php?referencia=<?php echo $data['referencia']; ?>&descripcion=<?php echo $data['descripcion']; ?>&marca=<?php echo $data['marca']; ?>&silueta=<?php echo $data['silueta']; ?>&categoria=<?php echo $data['categoria']; ?>&tela=<?php echo $data['tela']; ?>&proveedor=<?php echo $data['proveedor']; ?>&precio=<?php echo $data['precio']; ?>&genero=<?php echo $data['genero']; ?>&color=<?php echo $data['color']; ?>','ASIGNAR INVENTARIO', 'width=600,height=400, top=200, left=700');
                                        });
                                        
                                    </script>
                                </td>
                            </tr>

                        </form>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <!-- FIN DEL CONTENIDO -->
    </div>
    <?php
    include '../librerias/librerias-js.php';
    ?>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>