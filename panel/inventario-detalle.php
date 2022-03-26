<?php
session_start();
require_once '../modelo/redireccion.php';
require '../modelo/datosInventarios.php';
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
                    <div class="row">
                        <div class="col-sm-12">
                        <div style="align-items: center;" class="row justify-content-between p-2">
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / inventario en Detalle </h1>
                    </div>
                    </div>

                        <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h5>Cantidad de inventario por TALLA y SILUETA para JEANS</h5>
                                    <table class="table table-bordered" id="example_jeans" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>silueta</th>
                                                
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
                                                <th>talla M</th>
                                                <th>talla L</th>
                                                <th>talla XL</th>
                                                <th>talla U</th>
                                                <th>TOTAL</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                           
                                           <?php 
                                           $sumaTalla6 = 0;
                                           $sumaTalla8 = 0;
                                           $sumaTalla10 = 0;
                                           $sumaTalla12 = 0;
                                           $sumaTalla14 = 0;
                                           $sumaTalla16 = 0;
                                           $sumaTalla18 = 0;
                                           $sumaTalla20 = 0;
                                           $sumaTalla26 = 0;
                                           $sumaTalla28 = 0;
                                           $sumaTalla30 = 0;
                                           $sumaTalla32 = 0;
                                           $sumaTalla34 = 0;
                                           $sumaTalla36 = 0;
                                           $sumaTalla38 = 0;
                                           $sumaTallaS = 0;
                                           $sumaTallaM = 0;
                                           $sumaTallaL = 0;
                                           $sumaTallaXL = 0;
                                           $sumaTallaU = 0;

                                           foreach ($inventarios->verSiluetas() as $key) {
                                           ?>
                                           <tr>
                                               <th><?php echo $key['nameSil']; ?></th>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(6,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(8,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(10,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(12,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(14,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(16,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(18,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(20,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(26,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(28,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(30,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(32,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(34,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(36,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(38,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(s,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(m,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(l,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(xl,$key['nameSil'],'JEANS'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadTallaSilueta(u,$key['nameSil'],'JEANS'); ?></td>
                                               <th><?php echo (
                                                                ($inventarios->sumaCantidadTallaSilueta(6,$key['nameSil'],'JEANS')) + 
                                                                ($inventarios->sumaCantidadTallaSilueta(8,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(10,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(12,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(14,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(16,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(18,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(20,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(26,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(28,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(30,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(32,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(34,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(36,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(38,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(s,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(m,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(l,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(xl,$key['nameSil'],'JEANS')) +
                                                                ($inventarios->sumaCantidadTallaSilueta(u,$key['nameSil'],'JEANS')) 
                                                              ); ?></th>
                                           </tr>

                                           <?php
                                               $sumaTalla6 = $sumaTalla6 + ($inventarios->sumaCantidadTallaSilueta(6,$key['nameSil'],'JEANS'));
                                               $sumaTalla8 = $sumaTalla8 + ($inventarios->sumaCantidadTallaSilueta(8,$key['nameSil'],'JEANS'));
                                               $sumaTalla10 = $sumaTalla10 + ($inventarios->sumaCantidadTallaSilueta(10,$key['nameSil'],'JEANS'));
                                               $sumaTalla12 = $sumaTalla12 + ($inventarios->sumaCantidadTallaSilueta(12,$key['nameSil'],'JEANS'));
                                               $sumaTalla14 = $sumaTalla14 + ($inventarios->sumaCantidadTallaSilueta(14,$key['nameSil'],'JEANS'));
                                               $sumaTalla16 = $sumaTalla16 + ($inventarios->sumaCantidadTallaSilueta(16,$key['nameSil'],'JEANS'));
                                               $sumaTalla18 = $sumaTalla18 + ($inventarios->sumaCantidadTallaSilueta(18,$key['nameSil'],'JEANS'));
                                               $sumaTalla20 = $sumaTalla20 + ($inventarios->sumaCantidadTallaSilueta(20,$key['nameSil'],'JEANS'));
                                               $sumaTalla26 = $sumaTalla26 + ($inventarios->sumaCantidadTallaSilueta(26,$key['nameSil'],'JEANS'));
                                               $sumaTalla28 = $sumaTalla28 + ($inventarios->sumaCantidadTallaSilueta(28,$key['nameSil'],'JEANS'));
                                               $sumaTalla30 = $sumaTalla30 + ($inventarios->sumaCantidadTallaSilueta(30,$key['nameSil'],'JEANS'));
                                               $sumaTalla32 = $sumaTalla32 + ($inventarios->sumaCantidadTallaSilueta(32,$key['nameSil'],'JEANS'));
                                               $sumaTalla34 = $sumaTalla34 + ($inventarios->sumaCantidadTallaSilueta(34,$key['nameSil'],'JEANS'));
                                               $sumaTalla36 = $sumaTalla36 + ($inventarios->sumaCantidadTallaSilueta(36,$key['nameSil'],'JEANS'));
                                               $sumaTalla38 = $sumaTalla38 + ($inventarios->sumaCantidadTallaSilueta(38,$key['nameSil'],'JEANS'));
                                               $sumaTallaS = $sumaTallaS + ($inventarios->sumaCantidadTallaSilueta('S',$key['nameSil'],'JEANS'));
                                               $sumaTallaM = $sumaTallaM + ($inventarios->sumaCantidadTallaSilueta('M',$key['nameSil'],'JEANS'));
                                               $sumaTallaL = $sumaTallaL + ($inventarios->sumaCantidadTallaSilueta('L',$key['nameSil'],'JEANS'));
                                               $sumaTallaXL = $sumaTallaXL + ($inventarios->sumaCantidadTallaSilueta('XL',$key['nameSil'],'JEANS'));
                                               $sumaTallaU = $sumaTallaU + ($inventarios->sumaCantidadTallaSilueta('U',$key['nameSil'],'JEANS'));
                                               $sumaTallaEST = $sumaTallaEST + ($inventarios->sumaCantidadTallaSilueta('EST',$key['nameSil'],'JEANS'));
                                               $total = $sumaTalla6 + 
                                                        $sumaTalla8 + 
                                                        $sumaTalla10 + 
                                                        $sumaTalla12 + 
                                                        $sumaTalla14 + 
                                                        $sumaTalla16 + 
                                                        $sumaTalla18 + 
                                                        $sumaTalla20 + 
                                                        $sumaTalla26 + 
                                                        $sumaTalla28 + 
                                                        $sumaTalla30 + 
                                                        $sumaTalla32 + 
                                                        $sumaTalla34 + 
                                                        $sumaTalla36 + 
                                                        $sumaTalla38 + 
                                                        $sumaTallaS + 
                                                        $sumaTallaM + 
                                                        $sumaTallaL + 
                                                        $sumaTallaXL + 
                                                        $sumaTallaU + 
                                                        $sumaTallaEST
                                                        ;
                                           }
                                           ?>

                                           
                                        </tbody>
                                        <tfoot>

                                            <tr>

                                                
                                                
                                                <th>silueta</th>
                                                
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                            </tr>
                                        </tfoot>
                                            <tr>
                                               <th>TOTAL</th>
                                                
                                                <th><?php echo $sumaTalla6; ?></th>
                                                <th><?php echo $sumaTalla8; ?></th>
                                                <th><?php echo $sumaTalla10; ?></th>
                                                <th><?php echo $sumaTalla12; ?></th>
                                                <th><?php echo $sumaTalla14; ?></th>
                                                <th><?php echo $sumaTalla16; ?></th>
                                                <th><?php echo $sumaTalla18; ?></th>
                                                <th><?php echo $sumaTalla20; ?></th>
                                                <th><?php echo $sumaTalla26; ?></th>
                                                <th><?php echo $sumaTalla28; ?></th>
                                                <th><?php echo $sumaTalla30; ?></th>
                                                <th><?php echo $sumaTalla32; ?></th>
                                                <th><?php echo $sumaTalla34; ?></th>
                                                <th><?php echo $sumaTalla36; ?></th>
                                                <th><?php echo $sumaTalla38; ?></th>
                                                <th><?php echo $sumaTallaS; ?></th>
                                                <th><?php echo $sumaTallaM; ?></th>
                                                <th><?php echo $sumaTallaL; ?></th>
                                                <th><?php echo $sumaTallaXL; ?></th>
                                                <th><?php echo $sumaTallaU; ?></th>
                                                <th><?php echo $total; ?></th>
                                           </tr>
                                        
                                    </table>
                                </div>
                                <a href="ventas-detalles.php?>">
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h5>Cantidad de inventario por TALLA y CATEGORIA para TEJIDO PLANO</h5>
                                    <table class="table table-bordered" id="example_tejido" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th>silueta</th>
                                                
                                                <th>talla U</th>
                                                <th>talla S</th>
                                                <th>talla M</th>
                                                <th>talla L</th>
                                                <th>talla XL</th>
                                                
                                                <th>TOTAL</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                           
                                           <?php 
                                           $sumaTallau = 0;
                                           $sumaTallas = 0;
                                           $sumaTallam = 0;
                                           $sumaTallal = 0;
                                           $sumaTallaxl = 0;
                                          

                                           foreach ($inventarios->verCategorias() as $key) {
                                           ?>
                                           <tr>
                                               <th><?php echo $key['nameCat']; ?></th>
                                               <td><?php echo $inventarios->sumaCantidadCategoria('u',$key['nameCat'],'TEJIDO PLANO'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadCategoria('s',$key['nameCat'],'TEJIDO PLANO'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadCategoria('m',$key['nameCat'],'TEJIDO PLANO'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadCategoria('l',$key['nameCat'],'TEJIDO PLANO'); ?></td>
                                               <td><?php echo $inventarios->sumaCantidadCategoria('xl',$key['nameCat'],'TEJIDO PLANO'); ?></td>
                                               
                                               <th><?php echo (
                                                                ($inventarios->sumaCantidadCategoria('u',$key['nameCat'],'TEJIDO PLANO')) + 
                                                                ($inventarios->sumaCantidadCategoria('s',$key['nameCat'],'TEJIDO PLANO')) + 
                                                                ($inventarios->sumaCantidadCategoria('m',$key['nameCat'],'TEJIDO PLANO')) +
                                                                ($inventarios->sumaCantidadCategoria('l',$key['nameCat'],'TEJIDO PLANO')) +
                                                                ($inventarios->sumaCantidadCategoria('xl',$key['nameCat'],'TEJIDO PLANO')) 
                                                              ); ?></th>
                                           </tr>

                                           <?php
                                               $sumaTallau = $sumaTallau + ($inventarios->sumaCantidadCategoria('u',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallas = $sumaTallas + ($inventarios->sumaCantidadCategoria('s',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallam = $sumaTallam + ($inventarios->sumaCantidadCategoria('m',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallal = $sumaTallal + ($inventarios->sumaCantidadCategoria('l',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallaxl = $sumaTallaxl + ($inventarios->sumaCantidadCategoria('xl',$key['nameCat'],'TEJIDO PLANO'));
                                               
                                               $totalTejido = $sumaTallau + $sumaTallas + $sumaTallam + $sumaTallal + $sumaTallaxl;
                                           }
                                           ?>

                                           
                                        </tbody>
                                        <tfoot>

                                            <tr>

                                                
                                                
                                                <th>silueta</th>
                                                
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                               
                                                
                                            </tr>
                                            <tr>
                                               <th>TOTAL</th>
                                                
                                                <th><?php echo $sumaTallau; ?></th>
                                                <th><?php echo $sumaTallas; ?></th>
                                                <th><?php echo $sumaTallam; ?></th>
                                                <th><?php echo $sumaTallal; ?></th>
                                                <th><?php echo $sumaTallaxl; ?></th>
                                                <th><?php echo $totalTejido; ?></th>
                                           </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-sm-6">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <h5>Cantidad de inventario para T-SHIRT</h5>
                                    <table class="table table-bordered" id="example_tshirt" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                
                                                <th>Color</th>
                                                <th>Referencia</th>
                                                <th>talla s</th>
                                                <th>talla m</th>
                                                <th>talla l</th>
                                                <th>talla u</th>
                                                <th>TOTAL</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody style="color: gray;">
                                           
                                           <?php 

                                           foreach ($inventarios->verinventarioTshirt() as $key) {
                                           ?>
                                           <tr>
                                               <th><?php echo $key['color']; ?></th>
                                               <th><?php echo $key['referencia']; ?></th>
                                               <td><?php echo $key['suma_tallas']; ?></td>
                                               <td><?php echo $key['suma_tallam']; ?></td>
                                               <td><?php echo $key['suma_tallal']; ?></td>
                                               <td><?php echo $key['suma_tallau']; ?></td>
                                               <th><?php echo $key['total']; ?></th>
                                               
                                                <?php $total_tallas += $key['suma_tallas']; ?>
                                                <?php $total_tallam += $key['suma_tallam']; ?>
                                                <?php $total_tallal += $key['suma_tallal']; ?>
                                                <?php $total_tallau += $key['suma_tallau']; ?>
                                                <?php $total_total += $key['total']; ?>
                                               

                                           </tr>
                                           <?php
                                           }
                                           ?>

                                           
                                        </tbody>
                                        <tfoot>

                                            <tr>
                                                <th>Color</th>
                                                <th>Referencia</th>
                                                
                                                <th>talla s</th>
                                                <th>talla m</th>
                                                <th>talla l</th>
                                                <th>talla u</th>
                                                <th>TOTAL</th>

                                                
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                               <th><?php echo $total_tallas; ?></th>
                                               <th><?php echo $total_tallam; ?></th>
                                               <th><?php echo $total_tallal; ?></th>
                                               <th><?php echo $total_tallau; ?></th>
                                               <th><?php echo $total_total; ?></th>
                                              
                                            </tr>
                                        </tfoot>
                                            <tr>
                                               
                                           </tr>
                                        
                                    </table>
                                </div>
                                <a href="ventas-detalles.php?>">
                                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br />
                                </a>
                            </div>
                        </div>
                    </div>
                    </div> --> -->
                    
                    
                    

                    







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
    <?php include './librerias_js/librerias-detalle-inventario-jeans.php' ?>
    <?php include './librerias_js/librerias-detalle-inventario-tejido.php' ?>
    <?php include './librerias_js/librerias-detalle-tshirt.php' ?>



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>
</body>

</html>