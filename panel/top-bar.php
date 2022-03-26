<?php include 'modal/logoutmodal.php'; ?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">










                    
    <?php
$contador = 0;
if(isset($ventas_pendiente)){

}else{
    require_once '../modelo/funcionesVentas.php';
    $ventas_pendiente = new Ventas();
}


foreach ($ventas_pendiente->verVentasVendedor($_SESSION["id"]) as $key) {

        
    if($key['estado']=="CONFIRMO CLIENTE"){
        $contador = $contador+ 1;
        
    }


    
}


$estilo = "";
if($contador>0){
    $estilo = "badge-danger";   
}


?>






    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> -->

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

<li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                
                <span class="badge <?php echo $estilo; ?> badge-counter"><?php echo  $contador ?></span>
            </a>
            
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Notificaciones
                </h6>
             

                    
                                                    <?php

                                if(isset($ventas_pendiente)){

                                    foreach ($ventas_pendiente->verVentasVendedor($_SESSION["id"]) as $key) {

                                        
                                        if($key['estado']=="CONFIRMO CLIENTE"){
                                    
                                            ?>

                                                    <a class="dropdown-item d-flex align-items-center" href="orden-nueva-venta-2.php?cliente=<?php echo $key['cliente'] ?>&id_venta=<?php echo $key['id_venta'] ?>&lista=true">
                                                                        <div class="mr-3">
                                                                            <div class="icon-circle bg-primary">
                                                                                <i class="fas fa-file-alt text-white"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                            
                                                                <div class="small text-gray-500"><?php echo $key['fecha_cliente_confirma'] ?></div>
                                                              <span class="font-weight-bold">pedido pendiente N° <?php echo $key['id_venta'] ?></span>
                                                        </div>
                                                    </a>
                                            <?php 
                                    
                                        
                                        }
                                    
                                    
                                        
                                    }

                                }


                                ?>

          

     
            </div>
        </li> 

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a title="" class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-700 medium" style="color: black;"><?php echo $_SESSION["mmb"]; ?></span>
                <span class="mr-2 d-none d-lg-inline text-gray-700 medium cerrar" id="cerrar" style="color: black; border-bottom: 1px solid black;">Cerrar sesion</span>
                <style> .cerrar::hover{ border-bottom: 1px solid crimson;  } </style>
                <script>
                    document.getElementById('cerrar').addEventListener('click', function(){
                        location.href = 'closeSesion.php';
                    });
                </script>
                <!-- <img class="img-profile rounded-circle" src="../librerias/img/undraw_profile.svg"> -->
            </a>
            <!-- Dropdown - User Information -->
            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configuracion
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Registro de Actividad
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Cerrar sesion
                </a>
                    
                        
            </div> -->
        </li>


    </ul>

</nav>