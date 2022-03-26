<?php
include '../modelo/redireccion.php';
require_once '../modelo/datos-productos.php';

$producto = new productos();


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

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    // include 'menu.php';
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Aqui inicia la barra superior -->
        <?php
        // include 'top-bar.php';
        ?>
        <!-- Aqui finaliza la barra superior -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Inventario </h1> -->

          <!-- <div style="align-items: center" class="row justify-content-between p-2">
            <h1 class="h3 mb-2 text-gray-800">
              <a href="index.php">General</a> / Codigos de Barras
            </h1>
          </div> -->

          <div class="card shadow mb-4">
          <!-- DataTales Example -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm table-bordered " id="example" width="100%" cellspacing="0">
                <thead style="text-align: center; font-size: 1em;">
                  <tr>
                    <th>Codigo Barras</th>
                    <!-- <th>Referencia</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Codigo Barras</th> -->
                  </tr>
                </thead>
                <tfoot style="color:; text-transform: uppercase;">
                  <tr>
                    <th>Codigo Barras</th>
                    <!-- <th>Referencia</th>
                    <th>Talla</th>
                    <th>Color</th>
                    <th>Codigo Barras</th> -->
                  </tr>
                </tfoot>
                <tbody>
                  <?php  
                  foreach ($producto->viewInventarios() as $key) {
                  ?>
                  <tr>
                    <td class="text-left">
                      <div class="">
                      Marca: <?php echo $key['marca']; ?><br>
                      Ref: <?php echo $key['referencia']; ?><br>
                      Talla: <?php echo $key['talla']; ?><br>
                      Color: <?php echo $key['color']; ?>
                      <input type="hidden" value="<?php echo $key['codigo_barras']; ?>">
                      <div id="imagen_<?php echo $key['id_inventario']; ?>"></div>
                      <script>
                      $("#imagen_<?php echo $key['id_inventario']; ?>").html('<img style="width: 200px;" src="../librerias/php-barcode/barcode.php?text='+<?php echo $key['codigo_barras']; ?>+'&size=90&codetype=Code39&print=true"/>');
                      
                      <?php echo $key['id_inventario'] = ''; ?>
                    </script>
                      </div>
                  <!-- </td>
                    <td class="text-center"><?php echo $key['referencia']; ?></td>
                    <td class="text-center"><?php echo $key['talla']; ?></td>
                    <td class="text-center"><?php echo $key['color']; ?></td>
                    <td class="text-center"><?php echo $key['codigo_barras']; ?></td>
                    
                  </tr> -->
                  <?php  
                  }
                  ?>
                </tbody>
              </table>
            </div>
            </div>

            <br>
            

            

            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
            
            
          <?php
              include 'librerias_js\librerias_js-inventario.php';
            ?>

            
</body>

</html>