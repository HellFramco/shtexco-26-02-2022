<?php
session_start();
require_once '../modelo/val_ventas.php';
require '../modelo/datos-clientes.php';
require '../modelo/datos-ventas.php';
require '../modelo/datos-vendedor.php';
require '../modelo/datos-departamentos.php';
require '../modelo/datos-ciudades.php';
require '../modelo/datos-tipo-cliente.php';
$misclientes = new misClientes();
$misventas = new misVentas();
$misvendedores = new misVendedores();
$tipos_clientes = new misTiposClientes();
include 'modal/modal-clientes.php';
include 'modal/modal-interaccion.php';
include 'modal/modal-direcciones.php';
$fechaActual = date('Y-m-d');
$date3 = new DateTime($fechaActual);
$fec = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes información</title>
    <?php
    include 'librerias-css.php';
    ?>
    <script src="../controlador/funcionesClientes.js"></script>
    <script src="../controlador/funcionesInteraccion.js"></script>
    <script src="../controlador/funcionesDireccion.js"></script>
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
        <div class="table-responsive">
            <table id="example" class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>
                            <div class="text-center">ID<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Identificación<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Nombre<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Teléfono<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Dirección<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Email<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Pais<br>cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Departamento<br>cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Ciudad<br />cliente</div>
                        </th>
                        <th>
                            <div class="text-center">Vendedor</div>
                        </th>
                        <th>
                            <div class="text-center">Ventas</div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $totVentas = 0;
                    $ventas = 0;
                    if(isset($_GET['id_cliente'])){
                        $id_cliente = $_GET['id_cliente'];
                        $clientes = $misclientes->viewClientexVendedor($id_usuario,$id_cliente);
                    }
                    else{
                        $clientes = $misclientes->viewClientesxVendedor($id_usuario);
                    }
                    $total = count($clientes);
                    if ($total > 0) {
                        foreach ($clientes as $data) {
                            // Cantidad de ventas
                            // $cantventas = $misventas->cantVentasxCliente($data['id']);
                            $cantventas = 0;
                            // Nombre vendedor
                            $vendedor = $misvendedores->viewVendedor($data['usuarioId']);
                            // Datos para enviar al modal
                            $interaccion = $data['nombre'] . "||" .
                                $data['id'] . "||" .
                                $nombre . "||" .
                                $id_usuario . "||" .
                                $fec;
                            $datos = $data['id'] . "||" .
                                $data['identificacion'] . "||" .
                                $data['nombre'] . "||" .
                                $data['direccion'] . "||" .
                                $data['telefono'] . "||" .
                                $data['email'] . "||" .
                                $data['pais'] . "||" .
                                $data['departamento'] . "||" .
                                $data['ciudad'] . "||" .
                                $data['usuarioId']. "||" .
                                
                                $data['codigo_lugar']. "||" .
                                $data['tipo_cliente'];
                    ?>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <!-- Actualizar información del cliente -->
                                        <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformcliente('<?php echo $datos ?>')" title="Actualizar información del cliente"></button>
                                    </div>
                                </td>
                                <td>
                                    <!-- Direcciones del cliente -->
                                    <div class="text-center">
                                        <button class="btn btn-info glyphicon glyphicon-align-center" data-toggle="modal" data-target="#modalDirecciones" onclick="agregaformdireccion('<?php echo $datos ?>')" title="Ver direcciones del cliente"></button>
                                    </div>
                                </td>
                                <td>
                                    <!-- Interacciones con el cliente -->
                                    <div class="text-center">
                                        <button class="btn btn-primary glyphicon glyphicon-user" data-toggle="modal" data-target="#modalInteraccion" onclick="agregaforminteraccion('<?php echo $interaccion ?>')" title="Interacción con el cliente"></button><br />
                                    </div>
                                </td>
                                <td>
                                    <!-- Nueva venta -->
                                    <div class="text-center">
                                        <a href="nueva-venta.php?id_cliente=<?php echo $data['id']; ?>">
                                            <button class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal" data-target="" onclick="" title="Nueva venta"></button><br />
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['id']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['identificacion']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['nombre']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['telefono']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['direccion']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['email']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['pais']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['departamento']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $data['ciudad']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $vendedor[0]['nombre']; ?></div>
                                </td>
                                <td>
                                    <div class="text-center"><?php echo $cantventas; ?></div>
                                </td>
                                <!--<td>
                                <div class="text-center">
                                    <button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalListaVentas" onclick="infocliente('<?php echo $datos ?>')"></button>
                                  </td>--></div>
                              
                            </tr>
                    <?php
                        }
                    } else {
                        echo "No hay resultados...";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <br /><br />
        <button class="btn btn-success " data-toggle="modal" data-target="#modalRegistro" >REGISTRAR</button>
    </div>
    <?php
    include 'librerias-js.php';
    ?>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#example').DataTable();
            $('#lista_direcciones').DataTable();
            

            $('#registrardatos').click(function() {
                identificacion = $('#identificacion').val();
                cod_cliente = $('#cod_cliente').val();
                cod_usuario = $('#cod_usuario').val();
                registro = $('#registro').val();
                contacto = $('#contacto').val();
                observacion = $('#observacion').val();
                agregardatos(identificacion, nombre);
            });

            $(document).ready(function() {
                $('#guardarnuevo').click(function() {
                    cod_cliente = $('#cod_cliente').val();
                    cod_usuario = $('#cod_usuario').val();
                    registro = $('#registro').val();
                    contacto = $('#contacto').val();
                    observacion = $('#observacion').val();
                    agregarinteraccion(cod_cliente, cod_usuario, registro, contacto, observacion);
                });
            });

            $('#actualizadatos').click(function() {
                modificarCliente();
            });
        });




        $(document).ready(function(){
            busca_municipio_from()
        });
    </script>

    
</body>

</html>