<?php
session_start();
include '../modelo/redireccion.php';
require_once '../modelo/datos-clientes.php';
require_once '../modelo/datos-clidirecciones.php';
require_once '../modelo/datos-transportadoras.php';
require_once '../modelo/datos-metodos-pagos.php';
$transportadora = new misTransportadoras();
$metodo_pago = new misMetodosPagos();
$clientes = new misClientes();
$misclidireccion = new misCliDirecciones();
if (isset($_GET['id_cliente'])) {
    $id_cliente = $_GET['id_cliente'];
} else {
    echo '<script language = javascript>
            alert("Debe seleccionar un cliente.")
            self.location = "clientes-informacion.php"
            </script>';
}
$cliente = $clientes->viewCliente($id_cliente);
//ainclude "modal/modal-usuario.php"
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva venta</title>
    <?php
    include 'librerias-css.php';
    ?>
</head>

<body>
    <div class="container-fluid">
        <!--Inicio menu-->
        
        <!--Fin menu-->
        <br /><br />
        <!-- BEGIN PAGE HEAD-->
        
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        
        <!-- END PAGE BREADCRUMB -->
        <!-- BEGIN PAGE BASE CONTENT -->
        <!-- BEGIN DASHBOARD STATS 1-->
        <br />
        <!-- INICIO DEL CONTENIDO -->
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="">
                    <div class="container">
                        <div class="form-row">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Asesor</label>
                                    <input type="text" class="form-control" readonly id="nombre" value="<?php echo $nombre; ?>">
                                    <input type="hidden" class="form-control" readonly id="vendedor" value="<?php echo $id_usuario; ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Identificación cliente</label>
                                    <input type="hidden" class="form-control" readonly id="cliente" value="<?php echo $cliente[0]['id']; ?>">
                                    <input type="text" class="form-control" readonly id="id_cliente" value="<?php echo $cliente[0]['identificacion']; ?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Nombre cliente</label>
                                    <input type="text" class="form-control" readonly id="nom_cliente" value="<?php echo $cliente[0]['nombre']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12" id="div_direccion_select">
                                    <label for="">Lista de direcciones</label>
                                    <select name="direccion_select" id="direccion_select" class="form-control" required>
                                        <option></option>
                                        <?php
                                        $clidireccion = $misclidireccion->viewCliDirecciones($id_cliente);
                                        foreach ($clidireccion as $dir) {
                                        ?>
                                            <?php echo "<option value='" . $dir['id'] . "' > " . $dir['direccion'] . " " . $dir['departamento'] . " </option>"; ?>
                                        <?php
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="">Transportadora</label>
                                <select name="" id="transportadora" class="form-control" required>
                                    <option></option>
                                    <?php
                                    $res1 = $transportadora->viewTransportadoras();
                                    foreach ($res1 as $data1) {
                                    ?>
                                        <?php echo "<option value='" . $data1['id_transportadora'] . "' > " . $data1['nombre_transportadora'] . " </option>"; ?>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="">Método de pago</label>
                                <select name="" id="metodo_pago" class="form-control" required>
                                    <option></option>
                                    <?php
                                    $res1 = $metodo_pago->viewMetodosPagos();
                                    foreach ($res1 as $data1) {
                                    ?>

                                        <?php echo "<option value='" . $data1['id_metodo'] . "' > " . $data1['nombre_metodo'] . " </option>"; ?>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-success" onclick="agregardatos()">Crear</button>
        </div>
    </div>
    <!-- FIN DEL CONTENIDO -->
    </div>
    <?php
    include 'librerias-js.php';
    ?>
    <script type="text/javascript" src="../controlador/funcionesNuevaVenta.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>