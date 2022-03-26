<?php
session_start();
require_once '../modelo/val_ventas.php';
require_once '../modelo/funcionesClientes.php';
$clientes = new Clientes();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="es">

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

<?php



?>

        <!-- Sidebar -->
        <?php
        // include 'menu.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                // include 'top-bar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                <form id="datos" action="carga_imagen.php" method="POST" enctype="multipart/form-data">
                 <div class="row">
                    
                     <div class="col-sm-12 text-center">
                        <br>
                        <br>
                        <br>
                        <h5>Registro pedido documento</h5><hr>
                        <legend>Información de comprobante</legend><br>
                   
            
                                              <br>
                    </div>
                    <div class="col-sm-4">

                        
                    </div>
                    <div class="col-sm-4">
                                        

                    <input type="hidden" name="id_venta" value="<?PHP echo $_GET['id_venta'] ?>">
       
                    <label for="">Observacion</label>
                     

                      Añadir imagen de comprobante: <input name="imagen" id="archivo" type="file"/>
                          
                    </div>
                   
                 

                 </div>    
                 <hr>
                 
           
             
                 <hr>
                 <div class="row">
                    
                     <div class="col-sm-4">
                        
                    </div>
                    <div class="col-sm-4">
                 
                        
                    <input type="submit" name="subir" class="btn btn-primary" value="AGREGAR"/>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                    
                    

                 </div>    
                 <hr>

                 
                 </form> 
                </div>
                

            </div>
           
            <!-- <?php
            include '../inc/footer.php';
            ?> -->
            

        </div>
        

    </div>
  
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script>
                var identificacion = document.getElementById('identificacion');




                // guardar.addEventListener('click', function(){
                //     if (nombre.value == '') { val_nombre.innerHTML = 'Este campo no puede estar vacio.'; }
                // }

                

            
              
          </script>
</body>

</html>