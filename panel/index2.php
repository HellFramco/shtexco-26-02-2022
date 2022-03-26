<?php 
    include '../modelo/redireccion.php';
    include '../modelo/datos-productos.php';
    // include '../modelo/funcionesIndicadores.php'; 
    $productos = new productos();
    // $indicadores = new Indicadores();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema - Panel General</title>
    <?php
    include './librerias/librerias.php'
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Aqui inicia el Menú lateral -->
        <?php
        include 'menu.php';
        ?>
        <!-- Aqui finaliza el Menú lateral -->

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
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <?php 
                        if ($_SESSION['typeUser']==1 or $_SESSION['typeUser']==7) {
                         ?>
                         <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Ventas</h1>

                    </div>
                    <!-- Content Row -->
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
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
                         <?php  
                        }
                        ?>
                        <?php if ($_SESSION['typeUser']==2) {
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    mis ventas en General</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoMisVentas($_SESSION['id']); ?>
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    mis ventas de Hoy</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoMisVentasHoy($_SESSION['id']); ?>
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
                            <a title="Aun no está listo" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    mis ventas de Este Mes</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoMisVentasMes($_SESSION['id']); ?>
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
                        <?php 
                        } 
                        ?>
                        
                    <div class="d-sm-flex align-items-center justify-content-between ">
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                    </div>
                    <!-- Page Heading -->
                    <?php 
                    if ($_SESSION['typeUser']==4) {
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Productos e Inventarios</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    Inventario Existente en bodega</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $indicadores->conteoInventarioTotal('existencia'); ?>
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
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    Inventario Por validar en bodega</div>
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
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" data-toggle="" data-target="#">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Referencia</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasExistentes(); ?>
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
                    <?php 
                    }
                    if ($_SESSION['typeUser']==3) {
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Ventas</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    Ventas Aprobadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $indicadores->conteoVentasEstado('cartera_aprobo','SI'); ?>
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
                    <?php 
                    }
                    if ($_SESSION['typeUser']==6) {
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Ventas</h1>
                    </div>
                    <div class="row ">
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    Ventas Despachadas</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800 ">
                                                    <?php echo $indicadores->conteoVentasEstado('despachada','SI'); ?>
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
                    <?php 
                    }
                    if ($_SESSION['typeUser']==5) {
                    ?>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 ">
                        <h1 class="h3 mb-0 text-gray-800 ">Ventas</h1>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4 ">
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Referencia</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $indicadores->conteoReferenciasExistentes(); ?>
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
                            <a title="Click para ver todo el contenido" style="text-decoration: none;" class="collapse-item" href="#">
                                <div class="card border-left-primary shadow h-100 py-2 ">
                                    <div class="card-body ">
                                        <div class="row no-gutters align-items-center ">
                                            <div class="col mr-2 ">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 ">
                                                    Inventario Subido</div>
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
                    
                        


                    </div>
                    <?php 
                    }
                    ?>
                    
                    <!-- Content Row -->
                    

                        

                        <!-- Earnings (Monthly) Card Example -->
                        
                        

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
    <a class="scroll-to-top rounded " href="#page-top ">
        <i class="fas fa-angle-up "></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade " id="logoutModal" tabindex="-1 " role="dialog " aria-labelledby="exampleModalLabel " aria-hidden="true ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content ">
                <div class="modal-header ">
                    <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro?</h5>
                    <button class="close" type="button" data-dismiss="modal " aria-label="Close">
                        <span aria-hidden="true ">×</span>
                    </button>
                </div>
                <div class="modal-body ">Selecciona "Salir " si quieres cerrar la sesión actual.</div>
                <div class="modal-footer ">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger " href="login.html ">Salir</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- inicio modal para alert de pagina en construccion -->
    <?php
    include './modal/alertPaginaEnConstruccion.php';
    ?>
    <!-- fin modal para alert de pagina en construccion -->
    <?php
    include './modal/logoutmodal.php'
    ?>
    
    <?php
    include 'librerias_js\librerias_js.php';
    ?>

</body>

</html>