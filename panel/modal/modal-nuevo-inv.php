<?php
require_once '../../modelo/datos-productos.php';
$producto = new productos();
// include "modal/modal-productos.php"
?>
<!DOCTYPE html>
<html lang="es">

<head>

 
  <meta name="author" content="">

  <title>Sistema - Administrador</title>

  <?php
  // include '../librerias/librerias.php';

  ?>
  <link rel="stylesheet" type="text/css" href="../../librerias/css/bootstrap.min.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    // include 'menu.php'
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
          <!-- <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / <a href="inventario.php">Inventario</a> / Asignar Inventario</h1> -->

          <h4 class="modal-title" id="myModalLabel">Asignar Inventario a <?php echo @$_GET['descripcion']; ?></h4>

          <form id="datos">

            <input type="hidden" id="id">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Talla<strong id="val_talla"></strong></label>
                <select id="talla" class="form-control" name="talla" id="talla" required="">
                  <option value="" disabled="">SELECCIONE</option>
                  <?php $producto->select_tallas(); ?>
                </select>

                <!-- <label for="idd">Color<strong id="val_marca"></strong></label>
              <select id="color" class="form-control" name="color" id="color" required="">
                <option value="" disabled="">SELECCIONE</option>
                <?php $producto->select_color(); ?>
              </select> -->

                <label for="idd">Cantidad<strong id="val_cantidad"></strong></label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="cantidad" required="">
                <input type="hidden">
              </div>
              <div class="form-group col-md-6">



              </div>
              <div class="form-group col-md-6">


              </div>

              <input type="hidden" name="accion" value="nuevo">
              <input type="hidden" name="referencia" value="<?php echo $_GET['referencia']; ?>">
              <input type="hidden" name="marca" value="<?php echo $_GET['marca']; ?>">
              <input type="hidden" name="descripcion" value="<?php echo $_GET['descripcion']; ?>">
              <input type="hidden" name="silueta" value="<?php echo $_GET['silueta']; ?>">
              <input type="hidden" name="tela" value="<?php echo $_GET['tela']; ?>">
              <input type="hidden" name="proveedor" value="<?php echo $_GET['proveedor']; ?>">
              <input type="hidden" name="categoria" value="<?php echo $_GET['categoria']; ?>">
              <input type="hidden" name="precio" value="<?php echo $_GET['precio']; ?>">
              <input type="hidden" name="genero" value="<?php echo $_GET['genero']; ?>">
              <input type="hidden" name="color" id="color" value="<?php echo $_GET['color']; ?>">
              <input type="hidden" name="coleccion" id="coleccion" value="<?php echo $_GET['coleccion']; ?>">
              <input type="hidden" name="tipo_inventario" id="tipo_inventario" value="<?php echo $_GET['tipo_inventario']; ?>">
              <input type="hidden" name="bodega" id="bodega" value="<?php echo $_GET['bodega']; ?>">
              <input type="hidden" name="ruta" id="ruta" value="<?php echo $_GET['ruta']; ?>">


            </div>

            <div class="form-row">



            </div>
          </form>

          <div id="crear">
            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.close()">Cerrar</button>
            <button id="envio">Guardar</button>
            <div id="camp"></div>
            <div id="val_campos"></div>
            <!-- <button type="button" class="btn btn-primary" onclick="agregardatos()">Crear</button> -->
          </div>

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>



      </div>
      <!-- End of Page Wrapper -->


      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
      </a>

    </div>
  </div>
  <?php
  // include '../librerias_js/librerias_js-inventario.php';

  ?>
  <?php
  // include './modal/logoutmodal.php';
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="../../controlador/modalNuevoInventario.js"></script>
</body>

</html>