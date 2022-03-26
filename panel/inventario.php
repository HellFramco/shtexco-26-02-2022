<?php
include '../modelo/redireccion.php';
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
$producto = new productos();
include "modal/modal-nuevo-producto.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="../../controlador/funcionesProductos.js"></script>
  <title>Sistema - Administrador</title>
  <script src="../controlador/funcionesInventarios.js"></script>
  <?php include "modal/modal-subir-inventario.php"; ?>

  <?php
  include 'librerias\librerias.php'
  ?>
</head>

<body id="page-top">
<div id="contenedor_loading">
    <div id="loading"></div>
</div>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    include 'menu.php'
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Aqui inicia la barra superior -->
        <?php
        include 'top-bar.php';
        ?>
        <!-- Aqui finaliza la barra superior -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Inventario </h1> -->

          <div style="align-items: center" class="row justify-content-between p-2">
            <h1 class="h3 mb-2 text-gray-800">
              <a href="index.php">General</a> / Inventario
            </h1>
            <div>
              <button type="button" class="btn btn-dark" style="float: right;" data-toggle="modal" data-target="#myModal" onclick="modal_crear()">Nuevo producto</button>
            </div>
            <div style="align-items: center" class="row justify-content-between">
              <h4 style="margin: 0.5em">INDICADOR DE INVENTARIO:</h4>
              <button
                type="button"
                title="Indicador de pocas unidades"
                class="btn btn-danger m-1"
                disabled
              >
                Pocas unidades
              </button>
              <button
                type="button"
                title="Indicador de advertencia"
                class="btn btn-warning m-1"
                disabled
              >
                Estable
              </button>
              <button
                type="button"
                title="Indicador de bastantes unidades"
                class="btn btn-success m-1"
                disabled
              >
              Abastesido</button>
            </div>
          </div>

          <div class="card shadow mb-4">
          <!-- DataTales Example -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-bordered " id="example" width="100%" cellspacing="0">
                <thead style="text-align: center; font-size: 1em;">
                  <tr style="color:; text-transform: uppercase;">
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
                      <div class="text-center">Tipo</div>
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
                    <!-- <th>
                      <div class="text-center">Proveedor</div>
                    </th> -->
                    <th>
                      <div class="text-center">Coleccion</div>
                    </th>
                    <th>
                      <div class="text-center">Bodega</div>
                    </th>
                    <th>
                      <div class="text-center">Ruta</div>
                    </th>
                    <!-- <th>
                      <div class="text-center">Codigo de Barras</div>
                    </th> -->
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
                    <!-- <th>
                      <div class="text-center">Talla 22</div>
                    </th>
                    <th>
                      <div class="text-center">Talla 24</div>
                    </th> -->
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
                      <div class="text-center">Talla 38</div>
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
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                  </tr>
                </thead>
                <tfoot style="color:; text-transform: uppercase;">
                  <tr>
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
                      <div class="text-center">Tipo</div>
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
                    <!-- <th>
                      <div class="text-center">Proveedor</div>
                    </th> -->
                    <th>
                      <div class="text-center">Coleccion</div>
                    </th>
                    <th>
                      <div class="text-center">Bodega</div>
                    </th>
                    <th>
                      <div class="text-center">Ruta</div>
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
                    <!-- <th>
                      <div class="text-center">Talla 22</div>
                    </th>
                    <th>
                      <div class="text-center">Talla 24</div>
                    </th> -->
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
                      <div class="text-center">Talla 38</div>
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
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  $res = $producto->viewProductos();
                  foreach ($res as $data) {
                    $datos = $data['id_producto'] . "||" .
                                $data['referencia'] . "||" .
                                $data['marca'] . "||" .
                                $data['descripcion'] . "||" .
                                $data['silueta'] . "||" .
                                $data['tela'] . "||" .
                                $data['categoria'] . "||" .
                                $data['proveedor']. "||" .
                                $data['color']. "||" .
                                $data['coleccion']. "||" .
                                $data['tipo_inventario']. "||" .
                                $data['bodega']. "||" .
                                $data['estado'] . "||" .
                                $data['precio']. "||" .
                                $data['fecha'] . "||" .
                                $data['genero'] . "||" .
                                $data['ruta'];
                                
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
                        <td class="text-center">
                          <?php echo $data['descripcion']; ?>
                        </td>
                        <td>
                          <?php echo $data['marca']; ?>
                        </td>
                        <td>
                          <?php echo $data['tipo_inventario']; ?>
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
                        <!-- <td>
                          <?php echo $data['proveedor']; ?>
                        </td> -->
                        <td>
                          <?php echo $data['coleccion']; ?>
                        </td>
                        <td>
                          <?php echo $data['bodega']; ?>
                        </td>
                        <td>
                          <?php echo $data['ruta']; ?>
                        </td>
                        <!-- <td>
                          <div id="imagen_<?php echo $data['referencia']; ?>"></div>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
                          <script>
                          
                            
                            $("#imagen_<?php echo $data['referencia']; ?>").html('<img src="../librerias/php-barcode/barcode.php?text='+<?php echo $data['ruta']; ?>+'&size=90&codetype=Code39&print=true"/>');
                            
                            
                          </script>
                          
                        </td> -->
                        <td>
                          <?php $producto->color_hexa($data['color']); ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 6) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 6) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 6) >= 10 and cantidadTallas($data['referencia'], 6) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 6) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 6) > 100 and cantidadTallas($data['referencia'], 6) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 6) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 8) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 8) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 8) >= 10 and cantidadTallas($data['referencia'], 8) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 8) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 8) > 100 and cantidadTallas($data['referencia'], 8) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 8) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 10) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 10) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 10) >= 10 and cantidadTallas($data['referencia'], 10) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 10) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 10) > 100 and cantidadTallas($data['referencia'], 10) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 10) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 12) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 12) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 12) >= 10 and cantidadTallas($data['referencia'], 12) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 12) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 12) > 100 and cantidadTallas($data['referencia'], 12) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 12) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 14) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 14) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 14) >= 10 and cantidadTallas($data['referencia'], 14) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 14) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 14) > 100 and cantidadTallas($data['referencia'], 14) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 14) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 16) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 16) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 16) >= 10 and cantidadTallas($data['referencia'], 16) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 16) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 16) > 100 and cantidadTallas($data['referencia'], 16) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 16) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 18) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 18) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 18) >= 10 and cantidadTallas($data['referencia'], 18) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 18) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 18) > 100 and cantidadTallas($data['referencia'], 18) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 18) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 20) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 20) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 20) >= 10 and cantidadTallas($data['referencia'], 20) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 20) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 20) > 100 and cantidadTallas($data['referencia'], 20) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 20) . "</strong>";
                          }
                          ?>
                        </td>
                        <!-- <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 22) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 22) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 22) >= 10 and cantidadTallas($data['referencia'], 22) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 22) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 22) > 100 and cantidadTallas($data['referencia'], 22) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 22) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 24) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 24) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 24) >= 10 and cantidadTallas($data['referencia'], 24) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 24) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 24) > 100 and cantidadTallas($data['referencia'], 24) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 24) . "</strong>";
                          }
                          ?>
                        </td> -->

                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 26) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 26) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 26) >= 10 and cantidadTallas($data['referencia'], 26) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 26) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 26) > 100 and cantidadTallas($data['referencia'], 26) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 26) . "</strong>";
                          }
                          ?>
                        </td>

                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 28) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 28) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 28) >= 10 and cantidadTallas($data['referencia'], 28) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 28) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 28) > 100 and cantidadTallas($data['referencia'], 28) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 28) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 30) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 30) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 30) >= 10 and cantidadTallas($data['referencia'], 30) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 30) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 30) > 100 and cantidadTallas($data['referencia'], 30) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 30) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 32) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 32) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 32) >= 10 and cantidadTallas($data['referencia'], 32) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 32) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 32) > 100 and cantidadTallas($data['referencia'], 32) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 32) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 34) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 34) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 34) >= 10 and cantidadTallas($data['referencia'], 34) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 34) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 34) > 100 and cantidadTallas($data['referencia'], 34) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 34) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 36) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 36) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 36) >= 10 and cantidadTallas($data['referencia'], 36) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 36) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 36) > 100 and cantidadTallas($data['referencia'], 36) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 36) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 38) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 38) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 38) >= 10 and cantidadTallas($data['referencia'], 38) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 38) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 38) > 100 and cantidadTallas($data['referencia'], 38) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 38) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'S') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'S') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'S') >= 10 and cantidadTallas($data['referencia'], 'S') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'S') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'S') > 100 and cantidadTallas($data['referencia'], 'S') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'S') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'M') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'M') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'M') >= 10 and cantidadTallas($data['referencia'], 'M') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'M') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'M') > 100 and cantidadTallas($data['referencia'], 'M') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'M') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'L') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'L') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'L') >= 10 and cantidadTallas($data['referencia'], 'L') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'L') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'L') > 100 and cantidadTallas($data['referencia'], 'L') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'L') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'XL') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'XL') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'XL') >= 10 and cantidadTallas($data['referencia'], 'XL') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'XL') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'XL') > 100 and cantidadTallas($data['referencia'], 'XL') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'XL') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'U') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'U') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'U') >= 10 and cantidadTallas($data['referencia'], 'U') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'U') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'U') > 100 and cantidadTallas($data['referencia'], 'U') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'U') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'EST') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'EST') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'EST') >= 10 and cantidadTallas($data['referencia'], 'EST') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'EST') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'EST') > 100 and cantidadTallas($data['referencia'], 'EST') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'EST') . "</strong>";
                          }
                          ?>
                        </td>

                        <td>


                          <?php echo $estado = $data['estado'] = 1 ? 'Activo' : 'inactivo'; ?>
                        </td>
                        <td>
                          <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nombre_modal" onclick=""></button> -->

                          <a id="asigna_inventario_<?php echo $data['referencia']; ?>" id="btn-asignar" class="text-dark" data-toggle="modal" onclick="modal_subir_inventario('<?php echo $datos; ?>')" data-target="#nuevoInventario"><i class="fas fa-plus-circle fa-2x" title="Asigna inventario a <?php echo $data['descripcion']; ?>"></i></a>
                          
                          
                          <!-- <script>
                            document.getElementById('asigna_inventario_<?php echo $data['referencia']; ?>').addEventListener('click', function() {
                              window.open('modal/modal-nuevo-inventario.php?referencia=<?php echo $data['referencia']; ?>&descripcion=<?php echo $data['descripcion']; ?>&marca=<?php echo $data['marca']; ?>&silueta=<?php echo $data['silueta']; ?>&categoria=<?php echo $data['categoria']; ?>&tela=<?php echo $data['tela']; ?>&proveedor=<?php echo $data['proveedor']; ?>&precio=<?php echo $data['precio']; ?>&genero=<?php echo $data['genero']; ?>&color=<?php echo $data['color']; ?>', 'ASIGNAR INVENTARIO', 'width=600,height=400, top=200, left=700');
                            });
                          </script> -->
                          <!-- <script>
                            document.getElementById('asigna_inventario_<?php echo $data['referencia']; ?>').addEventListener('click', function() {
                              window.open('modal/modal-nuevo-inv.php?referencia=<?php echo $data['referencia']; ?>&descripcion=<?php echo $data['descripcion']; ?>&marca=<?php echo $data['marca']; ?>&silueta=<?php echo $data['silueta']; ?>&categoria=<?php echo $data['categoria']; ?>&tela=<?php echo $data['tela']; ?>&proveedor=<?php echo $data['proveedor']; ?>&precio=<?php echo $data['precio']; ?>&genero=<?php echo $data['genero']; ?>&color=<?php echo $data['color']; ?>&coleccion=<?php echo $data['coleccion']; ?>&tipo_inventario=<?php echo $data['tipo_inventario']; ?>&bodega=<?php echo $data['bodega']; ?>&ruta=<?php echo $data['ruta']; ?>', 'ASIGNAR INVENTARIO', 'width=600,height=400, top=200, left=700, location=no');
                            });
                          </script> -->
                        </td>
                        <td><strong id="Verificar_<?php echo $data['referencia']; ?>">Verificar Inventario</strong></td>
                        <script>
                          document.getElementById('Verificar_<?php echo $data['referencia']; ?>').addEventListener('click', function(){
                            prompt('El inventario Se ha Validado, tiene alguna observacion, puede anotarla aqui.');
                          });
                        </script>
                      </tr>

                    </form>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            </div>

            <br>
            <?php include '../inc/footer.php'; ?>

            

            
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script>
              function consulta(){
                  $.ajax({
                      url: 'inventario-time.php',//ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                      type: 'POST',
                      dataType:'html',//dataType: xml, json, script, o html
                      data: {'accion' : 'nuevo' },//se evia el valor seleccionado en tu select
                      success: function (result) {   
                          console.log('sincronizado cada 20 segundo');    
                          $("#example tbody").html(result);//si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                      },
                      error: function (jqXHR, status, error) {        
                          alert("error");
                      }
                  });
              }
              setInterval(consulta,10000);
          </script>
          <?php
              include 'librerias_js\librerias_js-inventario.php';
            ?>

            <script>
                window.onload = function() {
                  var contenedor = document.getElementById("contenedor_loading");
                contenedor.style.visibility = "hidden";
                contenedor.style.opacity = "0";
              };
            </script>

            
</body>

</html>