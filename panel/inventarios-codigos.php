
<?php
include '../modelo/redireccion.php';
require_once '../modelo/datos-productos.php';

$producto = new productos();




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

    <title>Ventas</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <?php include './librerias_js/pruebas-libreriasjs.php'; ?>

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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Codigos de barras </h1>
                    </div>

                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
          <!-- DataTales Example -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-bordered " id="example" width="100%" cellspacing="0">
                <thead style="text-align: center; font-size: 1em;">
                  <tr>
                    <th>Codigo Barras</th>
                    <th>Referencia</th>
                    <th>descripcion</th>
                    <th>marca</th>
                    <th>tipo</th>
                    <th>silueta</th>
                    <th>categoria</th>
                    <th>genero</th>
                    <th>talla</th>
                    <th>color</th>
                    <th>codigo barra</th>
                  </tr>
                </thead>
                <tfoot style="color:; text-transform: uppercase;">
                  <tr>
                    <th>Codigo Barras</th>
                    <th>Referencia</th>
                    <th>descripcion</th>
                    <th>marca</th>
                    <th>tipo</th>
                    <th>silueta</th>
                    <th>categoria</th>
                    <th>genero</th>
                    <th>talla</th>
                    <th>color</th>
                    <th>codigo barra</th>
                  </tr>
                </tfoot>
                <tbody id="areaResultadosBusqueda">
                  <?php
                  foreach ($producto->viewCodigosBarras() as $key) {
                  ?>
                  <tr>
                    <td class="text-center">
                      Marca: <?php echo $key['marca']; ?><br>
                      Ref: <?php echo $key['referencia']; ?><br>
                      Talla: <?php echo $key['talla']; ?><br>
                      Color: <?php echo $key['color']; ?>
                      <div id="imagen_<?php echo $key['id_codigo']; ?>"></div>
                      <script>
                      $("#imagen_<?php echo $key['id_codigo']; ?>").html('<img style="width: 200px;" src="../librerias/php-barcode/barcode.php?text='+<?php echo $key['codigo_barra']; ?>+'&size=90&codetype=Code39&print=true"/>');

                      <?php echo $key['id_inventario'] = ''; ?>
                    </script>
                  </td>
                    <td class="text-center"><?php echo $key['referencia']; ?></td>
                    <td class="text-center"><?php echo $key['descripcion']; ?></td>
                    <td class="text-center"><?php echo $key['marca']; ?></td>
                    <td class="text-center"><?php echo $key['tipo']; ?></td>
                    <td class="text-center"><?php echo $key['silueta']; ?></td>
                    <td class="text-center"><?php echo $key['categoria']; ?></td>
                    <td class="text-center"><?php echo $key['genero']; ?></td>
                    <td class="text-center"><?php echo $key['talla']; ?></td>
                    <td class="text-center"><?php echo $key['color']; ?></td>
                    <td class="text-center"><?php echo $key['codigo_barra']; ?></td>

                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
            </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include '../inc/footer.php'; ?>
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



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>
</body>

</html>
