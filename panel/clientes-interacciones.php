<?php
session_start();
require_once '../modelo/val_ventas.php';
require '../modelo/datos-clinteraccion.php';
$misinteracciones = new misInteracciones();
$conexion = new Conexion();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interacciones con los clientes</title>
    <?php
    include 'librerias-css.php';
    ?>
    <!--
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap-override.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap-table.css" rel="stylesheet" type="text/css">
    <link href="src/bootstrap-table-filter.css" rel="stylesheet" type="text/css">
    <link href="assets/css/select2.css" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui-1.10.3.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../librerias/css/miestilo.css" />
    -->
</head>

<body>
    <div class="container-fluid">
        <!--Inicio menu-->
        <?php
        include 'menu.php';
        ?>
        <!--Fin menu-->
        <br /><br />
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Interacciones con los clientes
                    <small>Interacciones con los clientes</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.php">Inicio</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Interacciones con los clientes</span>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Asesor: <?php echo $nombre; ?></span>
            </li>
        </ul>
        <div class="table-responsive">
            <table id="example" class="table display table-hover">
                <thead>
                    <tr>
                        <th>Asesor</th>
                        <th>Cliente</th>
                        <th>Fecha<br />interacción</th>
                        <th>Fecha<br />próxima</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res = $misinteracciones->viewInteraccionVend($id_usuario);
                    foreach ($res as $data) {
                    ?>
                        <tr>
                            <td><?php echo $data["id_usuario"]; ?><br /></td>
                            <td><?php echo $data["id_cliente"]; ?><br /></td>
                            <td><?php echo $data["fecha_registro"]; ?><br /></td>
                            <td><?php echo $data["fecha_contacto"]; ?><br /></td>
                            <td><?php echo $data["observacion_interaccion"]; ?><br /></td>
                        </tr>
                    <?php
                    } // Fin foreach
                    ?>
                </tbody>
            </table>
        </div>
        <br /><br />
    </div>
    <?php
    include 'librerias-js.php';
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>