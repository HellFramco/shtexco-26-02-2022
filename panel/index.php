<?php
// session_start();
include '../modelo/redireccion.php';
require_once '../modelo/funcionesVentas.php';
require_once '../modelo/datosInventarios.php';
$inventarios = new Inventarios();
$ventas = new Ventas();
$cant = 0;




require_once '../modelo/funcionesVentas.php';
$ventas_verifica = new Ventas();
$elimina = new Ventas();


function dateDiffInDays($date1, $date2) 
{
    // Calculating the difference in timestamps
    $diff = strtotime($date2) - strtotime($date1);

    // 1 day = 24 hours
    // 24 * 60 * 60 = 86400 seconds
    return abs(round($diff / 86400));
}






foreach ($ventas_verifica->verVentas() as $key) {


    if($key['estado']=="INICIADA"){


            $fechaActual = date('d-m-Y');
   

            $fecha1= $key['fecha_hora_iniciada'];
            $fecha2= $fechaActual;

            $dateDiff = dateDiffInDays($fecha1, $fecha2);

       
            if($dateDiff>2){



               // echo "se boora el ". $key['id_venta'];



                $elimina->cancelarVenta($key['id_venta']);
           




            }
         

      
    } elseif($key['estado']=="CONFIRMO CLIENTE"){


        $fechaActual = date('d-m-Y');


        $fecha1= $key['fecha_hora_iniciada'];
        $fecha2= $fechaActual;

        $dateDiff = dateDiffInDays($fecha1, $fecha2);

   
        if($dateDiff>2){

           // echo "se boora el ". $key['id_venta'];



            $elimina->cancelarVenta($key['id_venta']);
       




        }
     

  
}



    
}











foreach ($inventarios->verSiluetas() as $key) {
                                           
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
                                               $totalJeans = $sumaTalla6 + 
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
                                //indicador de total de inventario para tejido plano
                                foreach ($inventarios->verCategorias() as $key){
                                    $sumaTallau = $sumaTallau + ($inventarios->sumaCantidadCategoria('u',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallas = $sumaTallas + ($inventarios->sumaCantidadCategoria('s',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallam = $sumaTallam + ($inventarios->sumaCantidadCategoria('m',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallal = $sumaTallal + ($inventarios->sumaCantidadCategoria('l',$key['nameCat'],'TEJIDO PLANO'));
                                               $sumaTallaxl = $sumaTallaxl + ($inventarios->sumaCantidadCategoria('xl',$key['nameCat'],'TEJIDO PLANO'));
                                               
                                               $totalTejido = $sumaTallau + $sumaTallas + $sumaTallam + $sumaTallal + $sumaTallaxl;
                                }
                                           

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    

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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Panel </h1>
                    </div>
                    <!-- Botones que indican los colores en las tablas -->

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="container-fluid">
                    <!-- Page Heading -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <?php 
                        if ($_SESSION['typeUser']==1 or $_SESSION['typeUser']==7 or $_SESSION['typeUser']==8) {
                         ?>
                         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ventas</h1>

                    </div>
                    <!-- Content Row -->
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Ventas Globales</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoTotal('id_venta','ventas_globales'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Iniciadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('INICIADA'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Aprobadas por el Cliente</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO CLIENTE'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Aprobadas por Cartera</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO CARTERA'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Despachadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO DESPACHO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas Iniciadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('INICIADA',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas aprobadas por el cliente</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('APROBO CLIENTE',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas aprobadas por cartera</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('APROBO CARTERA',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas despachadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('APROBO DESPACHO',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Productos e Inventarios</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Existente en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $totalTejido + $totalJeans + $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Por validar en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $indicadores->conteoInventarioTotal('subido'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias existentes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO') + $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalTejido; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php echo $totalJeans; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario T-SHIRT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php echo $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                       	<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        	<h1 class="h3 mb-0 text-gray-800 ">Clientes</h1>
	                    </div>
	                    <div class="row">
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de clientes</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoclientesPorTipo('cliente'); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de Proveedores</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoclientesPorTipo('proveedor'); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de clientes Registrados por mi</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoMisclientesPorTipo('cliente',$_SESSION['id']); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
                       </div>



                    </div>

                         <?php  
                        }
                        ?>
                        <?php if ($_SESSION['typeUser']==2) {
                        ?>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ventas</h1>

                    </div>
                    <!-- Content Row -->
                    <div class="row">
                         
                       
                        
                        
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas Iniciadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('INICIADA',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas aprobadas por el cliente</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('APROBO CLIENTE',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas aprobadas por cartera</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('APROBO CARTERA',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas despachadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('APROBO DESPACHO',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Productos e Inventarios</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Existente en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $totalTejido + $totalJeans + $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario T-SHIRT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php echo $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias existentes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO') + $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalTejido; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalJeans; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                       	<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        	<h1 class="h3 mb-0 text-gray-800 ">Clientes</h1>
	                    </div>
	                    <div class="row">
	                        	
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de clientes Registrados por mi</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoMisclientesPorTipo('cliente',$_SESSION['id']); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
                       </div>



                    </div>

                        <?php 
                        } 
                        ?>

                        
                    <div class="d-sm-flex align-items-center justify-content-between ">
                    </div>
                    <!-- Content Row -->
                    
                    <?php 
                        if ($_SESSION['typeUser']==3) {
                         ?>
                         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ventas</h1>

                    </div>
                    <!-- Content Row -->
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Ventas Globales</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoTotal('id_venta','ventas_globales'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Iniciadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('INICIADA'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Aprobadas por el Cliente</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO CLIENTE'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Aprobadas por Cartera</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO CARTERA'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Despachadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO DESPACHO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Mis ventas Iniciadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoUsuario('INICIADA',$_SESSION['id']); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                       
                        
                       
                        
                    </div>
                    
                    

                       	<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        	<h1 class="h3 mb-0 text-gray-800 ">Clientes</h1>
	                    </div>
	                    <div class="row">
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de clientes</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoclientesPorTipo('cliente'); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de Proveedores</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoclientesPorTipo('proveedor'); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
	                        <div class="col-xl-3 col-md-6 mb-4 ">
	                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
	                                <div class="card border-left-primary shadow h-100 py-2 ">
	                                    <div class="card-body ">
	                                        <div class="row no-gutters align-items-center ">
	                                            <div class="col mr-2 ">
	                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
	                                                    Cantidad total de clientes Registrados por mi</div>
	                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
	                                                    <?php echo $indicadores->conteoMisclientesPorTipo('cliente',$_SESSION['id']); ?>
	                                                </div>
	                                            </div>
	                                            <div class="col-auto ">
	                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </a>
	                        </div>
                       </div>



                    </div>

                         <?php  
                        }
                        ?>

                    <?php 
                        if ($_SESSION['typeUser']==4) {
                         ?>
                         
                        
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Productos e Inventarios</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Existente en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                
                                                    <?php echo $totalTejido + $totalJeans + $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Por validar en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $indicadores->conteoInventarioTotal('subido'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias existentes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO') + $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalTejido; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalJeans; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario T-SHIRT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php echo $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                       	



                    </div>

                         <?php  
                        }
                        ?>

                        <?php 
                        if ($_SESSION['typeUser']==5) {
                         ?>
                         
                        
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Productos e Inventarios</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Existente en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $totalTejido + $totalJeans + $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Por validar en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $indicadores->conteoInventarioTotal('subido'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias existentes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO') + $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalTejido; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalJeans; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario T-SHIRT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php echo $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                       	



                    </div>

                         <?php  
                        }
                        ?>

                    <?php 
                        if ($_SESSION['typeUser']==6) {
                         ?>
                         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ventas</h1>

                    </div>
                    <!-- Content Row -->
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Ventas Globales</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoTotal('id_venta','ventas_globales'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Iniciadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('INICIADA'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Aprobadas por el Cliente</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO CLIENTE'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Aprobadas por Cartera</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO CARTERA'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    ventas Despachadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoVentasEstadoGeneral('APROBO DESPACHO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                       

                        </div>
                        
                        
                    </div>
                    

                       	

                         <?php  
                        }
                        ?>

                        <?php if ($_SESSION['typeUser']==12) {
                        ?>
                        
                    <!-- Content Row -->
                    <div class="row">
                         
                       
                        
                        
                        
                        
                        
                        
                       
                   
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Productos e Inventarios</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    cantidad de Inventario Existente en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $totalTejido + $totalJeans + $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto ">
                                                <i class="fas fa-boxes fa-2x text-gray-500 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario T-SHIRT</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">

                                                    <?php echo $indicadores->sumaInventarioTshirt(); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias de Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de Referencias existentes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasPorTipo('TEJIDO PLANO') + $indicadores->conteoReferenciasPorTipo('JEANS'); ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Tejido plano</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalTejido; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Cantidad de inventario Jeans</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $totalJeans; ?>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-friends fa-2x text-gray-500"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                        
                      



                    </div>

                        <?php 
                        } 
                        ?>

                        
                    <div class="d-sm-flex align-items-center justify-content-between ">
                    </div>
                    <!-- Content Row -->
                    

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
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>
</body>

</html>