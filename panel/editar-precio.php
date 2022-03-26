<?php
session_start();

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
                <form id="datos">
                 <div class="row">
                    <?php echo  '<input type="hidden"  id="id_inventario" value="'.$_GET['id_inventario'].'">'; ?>
                     <div class="col-sm-12 text-center">
                        <br>
                        <br>
                        <br>
                        <h5>Editar  Precio</h5><hr>
                        <legend>Informacion Principal</legend><br>

                
                        <div class="row form-group center-block">
                            <div class="col-md-6">
                                <label>Precio detal:</label>
                                <input type="text" id="precio_detal" value="<?php echo $_GET['precio'] ?>" class=" form-control" required="">
                            </div>
                            <div class="col-md-6">
                                <label>Precio mayor:</label>
                                <input type="text" id="precio_mayor" value="<?php echo $_GET['precio_mayor'] ?>"  class=" form-control" required="">
                          
                            </div>
                        </div>





                        <a class="btn btn-success" id="guardar" onclick="actualizar()">Editar Precio</a>
                        <label for="" id="val_envio"></label>
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
           



              function actualizar(){
               
                var confirmacion = confirm('Esta seguro de Registrar el precio');
                        if (confirmacion) { 
                            var precio_detal = $('#precio_detal').val();
							var precio_mayor = $('#precio_mayor').val();
                            var id_inventario = $('#id_inventario').val();

                            
							$.ajax({
                              type: 'POST',
                              url: '../modelo/acciones-precios.php',
                              data: {'precio_detal':precio_detal, 'precio_mayor': precio_mayor, 'id_inventario': id_inventario, 'accion': 'registrar'},
                              success: function(r){
                               alert(r);
                              }

							});
                         
                        }
                    
              }



                // guardar.addEventListener('click', function(){
                //     if (nombre.value == '') { val_nombre.innerHTML = 'Este campo no puede estar vacio.'; }
                // }

                

            
              
          </script>
</body>

</html>