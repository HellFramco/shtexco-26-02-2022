<?php
include '../modelo/funcionesIndicadores.php';
$indicadores = new Indicadores();

if ($_SESSION['typeUser'] == 1) {
?>
    <script>console.log('Administrador');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#col-clientes" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Clientes</span>
            </a>
            <div id="col-clientes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="clientes.php">Todos los clientes</a>
                    <a class="collapse-item" href="mis-clientes.php">Mis Clientes</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseVentas" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Ventas</span>
            </a>
            <div id="colapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="ventas.php">Todas las ventas</a>
                    <a class="collapse-item" href="ventas-vendedor.php">Mis ventas</a>
                    <a class="collapse-item" href="ventas-por-aprobar.php">Ventas por Aprobar <br>Cartera</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <a class="collapse-item" href="inventarios-productos.php">Inventarios en General</a>
                    <a class="collapse-item" href="visualizar-inventario-existencia.php">inventario existente en <br>bodega</a>
                    <a class="collapse-item" href="visualizar-inventario-subido.php">inventario subido por <br>insumos</a>
                    <a class="collapse-item" href="precios_productos.php">precios de<br>inventario</a>
                    <!-- <a class="collapse-item" href="inventarios-codigos-barras.php">codigos de Inventario</a> -->
                    <a class="collapse-item" href="validar-entrada-bodega.php">Validar entrada a bodega</a>
                    <a class="collapse-item" href="observaciones-inventarios.php">observaciones inventarios</a>
                    <a class="collapse-item" href="cobros-inventarios.php">Cobros de inventarios</a>
                    <a class="collapse-item" href="inventario-detalle.php">Inventario En Detalle</a>
                    <a class="collapse-item" href="reintegro-prendas-inventario.php">Prestamos de inventario</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <div class="">
            <div class="card-body">
                <div class="" style="background-color: white; font-size: 15px;">
            <div class="text-center bg-light">
            <legend>VENTAS DE HOY</legend>
            <table>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th>APROBADAS POR CLIENTE</th>
                </tr>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('cliente_aprobo','SI') ?></th>
                </tr>
                <tr style="background-color: #A1B2C0; color: white;">
                    <th>APROBADAS POR CARTERA</th>
                </tr>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('cartera_aprobo','SI') ?></th>
                </tr><tr style="background-color: #B4C1CD; color: white;">
                    <th>ALISTADAS PARA DESPACHAR</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('alistamiento','SI') ?></th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th>DESPACHADAS</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('despachada','SI') ?></th>
                </tr>

            </table>
        </div>
        </div>
            </div>
        </div>

    </ul>
<?php
}

else if ($_SESSION['typeUser'] == 2) {
?>
    <script>console.log('Vendedor');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#col-clientes" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Clientes</span>
            </a>
            <div id="col-clientes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="mis-clientes.php">Mis Clientes</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseVentas" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Ventas</span>
            </a>
            <div id="colapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="ventas-vendedor.php">Mis ventas</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <a class="collapse-item" href="visualizar-inventario-vendedorSS.php">inventario existente en <br>bodega</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <div class="">
            <div class="card-body">
                <div class="" style="background-color: white; font-size: 15px;">
            <div class="text-center bg-light">
            <legend>MIS VENTAS DE HOY</legend>
            <table>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th>INICIADAS PENDIENTES</th>
                </tr>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('INICIADA',$_SESSION['id']) ?></th>
                </tr>
                <tr style="background-color: #A1B2C0; color: white;">
                    <th>APROBADAS POR CLIENTE</th>
                </tr>
                <tr style="background-color: #A1B2C0; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('APROBO CLIENTE',$_SESSION['id']) ?></th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th>APROBADAS POR CARTERA</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('APROBO CARTERA',$_SESSION['id']) ?></th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th>DESPACHADAS</th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('APROBO DESPACHO',$_SESSION['id']) ?></th>
                </tr>

            </table>
        </div>
        </div>
            </div>
        </div>

    </ul>
<?php
}

else if ($_SESSION['typeUser'] == 3) {
?>
    <script>console.log('Cartera');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#col-clientes" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Clientes</span>
            </a>
            <div id="col-clientes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="clientes.php">Todos los clientes</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseVentas" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Ventas</span>
            </a>
            <div id="colapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="ventas-por-aprobar.php">Ventas por Aprobar</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <div class="">
            <div class="card-body">
                <div class="" style="background-color: white; font-size: 15px;">
            <div class="text-center bg-light">
            <legend>VENTAS DE HOY</legend>
            <table>

                <tr style="background-color: #4F8472; color: white;">
                    <th>APROBADOS POR CLIENTE</th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoHoy('cliente_aprobo', 'SI') ?></th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th>APROBADAS POR CARTERA</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoHoy('cartera_aprobo', 'SI') ?></th>
                </tr>



            </table>
        </div>
        </div>
            </div>
        </div>

    </ul>
<?php
}
else if ($_SESSION['typeUser'] == 4) {
?>
    <script>console.log('Bodega');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <a class="collapse-item" href="visualizar-inventario-existencia-bodega.php">inventario existente en <br>bodega</a>
                    <a class="collapse-item" href="validar-entrada-bodega.php">Validar entrada a bodega</a>
                    <a class="collapse-item" href="observaciones-inventarios.php">observaciones inventarios</a>
                    <a class="collapse-item" href="cobros-inventarios.php">Cobros de inventarios</a>
                    <a class="collapse-item" href="reintegro-prendas-inventario.php">Prestamos de inventario</a>
                    <a class="collapse-item" href="visualizar-historial-entrada-bodega.php">Historial Entrada a<br> bodega</a>
                    <a class="collapse-item" href="reinventario.php">Reinventario</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
<?php
}

if ($_SESSION['typeUser'] == 5) {
?>
    <script>console.log('Insumos');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <a class="collapse-item" href="visualizar-inventario-subido.php">inventario subido por <br>insumos</a>
                    <a class="collapse-item" href="inventarios-codigos-barras.php">codigos de Inventario</a>
                    <a class="collapse-item" href="observaciones-inventarios.php">observaciones inventarios</a>
                    <a class="collapse-item" href="visualizar-historial-registro-inventario.php">Historial Registro<br> inventario</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
<?php
}
else if ($_SESSION['typeUser'] == 6) {
?>
    <script>console.log('Despacho');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseVentas" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Ventas</span>
            </a>
            <div id="colapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="ventas-por-despachar.php">Ventas por <br>Despachar</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <div class="">
            <div class="card-body">
                <div class="" style="background-color: white; font-size: 15px;">
            <div class="text-center bg-light">
            <legend>VENTAS DE HOY</legend>
            <table>

                <tr style="background-color: #B4C1CD; color: white;">
                    <th>APROBADAS POR CARTERA</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoHoy('cartera_aprobo', 'SI') ?></th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th>DESPACHADAS</th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoHoy('despachada', 'SI') ?></th>
                </tr>

            </table>
        </div>
        </div>
            </div>
        </div>

    </ul>
<?php
}
if ($_SESSION['typeUser'] == 7) {
?>
    <script>console.log('Soporte');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#col-usuarios" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Usuarios</span>
            </a>
            <div id="col-usuarios" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="usuarios.php">Usuarios</a>
                    <a class="collapse-item" href="vista-usuarios.php">vista usuarios</a>
                </div>
            </div>
        </li>
        
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#col-clientes" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Clientes</span>
            </a>
            <div id="col-clientes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="clientes.php">Todos los clientes</a>
                    <a class="collapse-item" href="mis-clientes.php">Mis Clientes</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseVentas" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Ventas</span>
            </a>
            <div id="colapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="ventas.php">Todas las ventas</a>
                    <a class="collapse-item" href="ventas-tienda-virtual.php">Ventas de tienda virtual</a>
                    <a class="collapse-item" href="ventas-vendedor.php">Mis ventas</a>
                    <a class="collapse-item" href="ventas-por-aprobar.php">Ventas por Aprobar <br>Cartera</a>
                    <a class="collapse-item" href="venta-por-linea.php">Cantidad de Ventas por <br> linea</a>
                    <a class="collapse-item" href="venta-por-linea-valor.php">Total Ventas por <br> linea</a>
                    <a class="collapse-item" href="tienda.php">Ventas por <br> Tienda Virtual</a>
                    <a class="collapse-item" href="datos-influencer.php">Ventas por <br> Influencer</a>
                    <a class="collapse-item" href="envios.php">Envios</a>
                    
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <a class="collapse-item" href="inventarios-productos.php">Inventarios en General</a>
                    <a class="collapse-item" href="visualizar-inventario-existencia.php">inventario existente en <br>bodega</a>
                    <a class="collapse-item" href="visualizar-inventario-subido.php">inventario subido por <br>insumos</a>
                    <a class="collapse-item" href="inventarios-codigos-barras.php">codigos de Inventario</a>
                    <a class="collapse-item" href="validar-entrada-bodega.php">Validar entrada a bodega</a>
                    <a class="collapse-item" href="observaciones-inventarios.php">observaciones inventarios</a>
                    <a class="collapse-item" href="cobros-inventarios.php">Cobros de inventarios</a>
                    <a class="collapse-item" href="inventario-detalle.php">Inventario En Detalle</a>
                    <a class="collapse-item" href="visualizar-historial-registro-inventario.php">Historial Registro<br> inventario</a>
                    <a class="collapse-item" href="visualizar-historial-entrada-bodega.php">Historial Entrada a<br> bodega</a>
                    <a class="collapse-item" href="reinventario.php">Reinventario</a>
                    <a class="collapse-item" href="ventasCanceladas.php">Ventas canceladas</a>
                    <a class="collapse-item" href="revicion.php">Revicion</a>
                    <a class="collapse-item" href="pesos-inventarios.php">Pesos de inventario</a>
                    <a class="collapse-item" href="vistaCatalogo.php" target="_blank">Generar Catalogo</a>
                    
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <div class="">
            <div class="card-body">
                <div class="" style="background-color: white; font-size: 15px;">
            <div class="text-center bg-light">
            <legend>MIS VENTAS DE HOY</legend>
            <table>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th>INICIADAS PENDIENTES</th>
                </tr>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('INICIADA',$_SESSION['id']) ?></th>
                </tr>
                <tr style="background-color: #A1B2C0; color: white;">
                    <th>APROBADAS POR CLIENTE</th>
                </tr>
                <tr style="background-color: #A1B2C0; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('APROBO CLIENTE',$_SESSION['id']) ?></th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th>APROBADAS POR CARTERA</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('APROBO CARTERA',$_SESSION['id']) ?></th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th>DESPACHADAS</th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th><?php echo $indicadores->conteoVentasEstadoUsuarioHoy('APROBO DESPACHO',$_SESSION['id']) ?></th>
                </tr>

            </table>
        </div>
        </div>
            </div>
        </div>

    </ul>
<?php
}
if ($_SESSION['typeUser'] == 8) {
?>
    <script>console.log('Administrador de Ventas');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="usuario-vendedor.php">
                <i class="fas fa-chart-bar"></i>
                <span>Usuarios Vendedores</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#col-clientes" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Clientes</span>
            </a>
            <div id="col-clientes" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="clientes.php">Todos los clientes</a>
                    <a class="collapse-item" href="mis-clientes.php">Mis Clientes</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#colapseVentas" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Ventas</span>
            </a>
            <div id="colapseVentas" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="ventas.php">Todas las ventas</a>
                    <a class="collapse-item" href="ventas-vendedor.php">Mis ventas</a>
                    <a class="collapse-item" href="ventas-por-aprobar.php">Ventas por Aprobar <br>Cartera</a>
                    <a class="collapse-item" href="venta-por-linea.php">Cantidad de Ventas por <br> linea</a>
                    <a class="collapse-item" href="venta-por-linea-valor.php">Total Ventas por <br> linea</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <!-- <a class="collapse-item" href="inventarios-productos.php">Inventarios en General</a> -->
                    <a class="collapse-item" href="visualizar-inventario-vendedor.php">inventario existente en <br>bodega</a>
                    <a class="collapse-item" href="visualizar-inventario-subido.php">inventario subido por <br>insumos</a>
                    <a class="collapse-item" href="precios_productos.php">precios de<br>inventario</a>
                    <!-- <a class="collapse-item" href="inventarios-codigos.php">codigos de Inventario</a> -->
                    <!-- <a class="collapse-item" href="validar-entrada-bodega.php">Validar entrada a bodega</a> -->
                    <!-- <a class="collapse-item" href="observaciones-inventarios.php">observaciones inventarios</a> -->
                    <!-- <a class="collapse-item" href="cobros-inventarios.php">Cobros de inventarios</a> -->
                    <a class="collapse-item" href="inventario-detalle.php">Inventario En Detalle</a>
                    <a class="collapse-item" href="vistaCatalogo.php" target="_blank">Generar Catalogo</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        <div class="">
            <div class="card-body">
                <div class="" style="background-color: white; font-size: 15px;">
            <div class="text-center bg-light">
            <legend>VENTAS DE HOY</legend>
            <table>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th>APROBADAS POR CLIENTE</th>
                </tr>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('cliente_aprobo','SI') ?></th>
                </tr>
                <tr style="background-color: #A1B2C0; color: white;">
                    <th>APROBADAS POR CARTERA</th>
                </tr>
                <tr style="background-color: #ECBAB9; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('cartera_aprobo','SI') ?></th>
                </tr><tr style="background-color: #B4C1CD; color: white;">
                    <th>ALISTADAS PARA DESPACHAR</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('alistamiento','SI') ?></th>
                </tr>
                <tr style="background-color: #4F8472; color: white;">
                    <th>DESPACHADAS</th>
                </tr>
                <tr style="background-color: #B4C1CD; color: white;">
                    <th><?php echo $indicadores->conteoVentasHoy('despachada','SI') ?></th>
                </tr>

            </table>
        </div>
        </div>
            </div>
        </div>

    </ul>
<?php
}
else if ($_SESSION['typeUser'] == 9) {
?>
    <script>console.log('MARKETING');</script>
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

            <div class="sidebar-brand-text mx-3"><img src="../imagenes/logo.png" alt=""></div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-chart-bar"></i>
                <span>Panel principal</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Secciones
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-boxes"></i>
                <span>Inventario</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Inventario</h6>
                    <a class="collapse-item" href="visualizar-inventario-existencia-marketing.php">inventario existente en <br>bodega</a>
                    <a class="collapse-item" href="inventario-detalle.php">Inventario En Detalle</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
<?php
}
