<?php
if (@$_POST['accion'] == 'generaNuevoTick') {
  echo "<pre>";
    var_dump($_POST);
  echo "</pre>";



}
session_start();
require_once '../modelo/val_ventas.php';
require_once '../modelo/inventarios-codigos-barras.php';
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Codigos </h1>
                    </div>


                    <div class="row justify-content-between p-4 card">
                      <div class="col-sm-12">

                          <input type="text" id="codigo" class="form-control" name="" value="" placeholder="Lectura de ticked aqui">
                          <a id="envio" class="btn btn-primary">Buscar</a>

                          <div id="areaResultado"></div>
                      </div>
                    </div>


                    


                    <div class="row justify-content-between p-4 card">
                      <div class="col-sm-12">
                          <div style="align-items: center;" class="row justify-content-between p-2">
                            <h1 class="h3 mb-2 text-gray-800">Nuevo ticket </h1>
                        </div>
                          <label for="id_codigo">IDENTIFICA EL TICKET</label><br>
                            <select name="id_codigo" id="id_codigo">
                              <option value="">BUSCA POR REFERENCIA</option>
                              <?php
                              foreach ($inventarios->verProductos() as $dato) {
                              ?>
                              <option value="<?php echo $dato['codigo_barra'] ?>"><?php echo $dato['referencia'] ?>/ Silueta: <?php echo $dato['silueta'] ?> o Categoria: <?php echo $dato['categoria'] ?>/ Color: <?php echo $dato['color'] ?>/ Talla: <?php echo $dato['talla'] ?></option>
                              <?php  
                              }
                              ?>
                            </select>
                            <br><br>
                          
                          <!-- <a id="envio_genera_ticket" class="btn btn-primary">Buscar</a> -->

                          <div id="areaResultado2"></div>
                          <br>
                          <a class="btn btn-danger" id="verifica_impreso" style="float: right;">Verificar Tickets impresos</a>
                          <script>
                            let verifica_impreso = document.getElementById('verifica_impreso');
                            verifica_impreso.addEventListener('click', function(){
                              let conf = confirm('Estas Completamente Seguro? al ACEPTAR estas confirmando que ya haz impreso los tickets y se borraran de la impresora.');
                              if(conf)
                              {
                                location.href = '../modelo/delete.php?accion=eliminaCodigosImpresora';

                              }
                            })
                          </script>
                      </div>
                    </div>



                </div>
                <!-- /.container-fluid -->

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
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#id_codigo').select2();
      });
    </script>

    <script>
          $(document).ready(function(){
                      $('#envio').click(function(){
                        var codigo = $('#codigo').val();

                        $.post({
                          type: 'POST',
                          url: 'lista-inventario-codigo-barra.php',
                          data: {'codigo':codigo},
                          success: function(r){
                            $('#areaResultado').html(r);
                          }
                        });
                        // $('#enviar_adiccion').prop('disabled', true);
                        return false;
                      });

                      $('#codigo').change(function(){
                        var codigo = $('#codigo').val();

                        $.post({
                          type: 'POST',
                          url: 'lista-inventario-codigo-barra.php',
                          data: {'codigo':codigo},
                          success: function(r){
                            $('#areaResultado').html(r);
                          }
                        });
                        // $('#enviar_adiccion').prop('disabled', true);
                        return false;
                      });

                  });
    </script>

    <script>
          $(document).ready(function(){
                        // $('#envio_genera_ticket').click(function(){
                        //   var id_codigo = $('#id_codigo').val();

                        //   $.post({
                        //     type: 'POST',
                        //     url: 'genera-nuevo-codigo-barra.php',
                        //     data: {'id_codigo':id_codigo},
                        //     success: function(r){
                        //       $('#areaResultado2').html(r);
                        //     }
                        //   });
                          
                        //   return false;
                        // });

                      $('#id_codigo').change(function(){
                        var id_codigo = $('#id_codigo').val();

                        $.post({
                          type: 'POST',
                          url: 'genera-nuevo-codigo-barra.php',
                          data: {'id_codigo':id_codigo},
                          success: function(r){
                            $('#areaResultado2').html(r);
                          }
                        });
                        // $('#enviar_adiccion').prop('disabled', true);
                        return false;
                      });

                  });


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
