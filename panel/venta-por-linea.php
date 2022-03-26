<?php
include '../modelo/redireccion.php';
require_once '../modelo/funcionesVentas.php';
require_once '../modelo/funcionesUsuarios.php';
$ventas = new Ventas();
$lineas = new Usuarios();
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

    <title>Ventas</title>
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
                        <h1 class="h3 mb-2 text-gray-800"><a href="index.php">General</a> / Ventas </h1>
                    </div>
                    <!-- Botones que indican los colores en las tablas -->

                    <?php

                    $anio = date("Y");
                    if (isset($_GET['anio'])) {
                        $anio = $_GET['anio'];
                    }

                    $select2020 = "";
                    $select2021 = "";
                    $select2022 = "";
                    $select2023 = "";

                    if ($anio == "2020") {
                        $select2020 = " selected ";
                    } elseif ($anio == "2021") {
                        $select2021 = " selected ";
                    } elseif ($anio == "2022") {
                        $select2022 = " selected ";
                    } elseif ($anio == "2023") {
                        $select2023 = " selected ";
                    } else {
                    }

                    ?>
                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <div class="table-responsive">
                                <P>
                                    VENTAS DE LINEAS POR MES DEL AÑO <?PHP echo $anio ?>
                                </P>

                                <select class="form-control" onchange="window.location='venta-por-linea.php?anio='+ this.value " name="" id="">
                                    <option value="2020" <?php echo $select2020 ?>>2020</option>
                                    <option value="2021" <?php echo $select2021 ?>>2021</option>
                                    <option value="2022" <?php echo $select2022 ?>>2022</option>
                                    <option value="2023" <?php echo $select2023 ?>>2023</option>
                                </select>
                                <br>
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th title="" class="text-center">Linea</th>

                                            <th title="" class="text-center">Enero</th>
                                            <th title="" class="text-center">Febrero</th>
                                            <th title="" class="text-center">Marzo</th>
                                            <th title="" class="text-center">Abril</th>
                                            <th title="" class="text-center">Mayo</th>
                                            <th title="" class="text-center">Junio</th>
                                            <th title="" class="text-center">Julio</th>
                                            <th title="" class="text-center">Agosto</th>
                                            <th title="" class="text-center">Septiembre</th>
                                            <th title="" class="text-center">Octubre</th>
                                            <th title="" class="text-center">Noviembre</th>
                                            <th title="" class="text-center">Diembre</th>


                                            <!-- <th title="" class="text-center">Total Venta</th> -->


                                        </tr>
                                    </thead>
                                   
                                    <tbody style="color: gray;">



                                        <?php
                                        $totales[1] = 0;
                                        $totales[2] = 0;
                                        $totales[3] = 0;
                                        $totales[4] = 0;
                                        $totales[5] = 0;
                                        $totales[6] = 0;
                                        $totales[7] = 0;
                                        $totales[8] = 0;
                                        $totales[9] = 0;
                                        $totales[10] = 0;
                                        $totales[11] = 0;
                                        $totales[12] = 0;

                                        foreach ($lineas->selectLineas() as $key2) {

                                        ?>
                                            <tr class="btn-lightstyle=">

                                                <td><?php echo $key2['numero']; ?> </td>
                                                <?php


                                                for ($i = 1; $i < 13; $i++) {
                                                    $cuenta = 0;
                                                    foreach ($ventas->ventasPorLinea($i,  $key2['numero'], $anio) as $key) {
                                                        $cuenta = 1;
                                                        $totales[$i] = $totales[$i] + $key['total'];
                                                ?>

                                                        <td><?php echo $key['total']; ?> </td>


                                                    <?php

                                                    }
                                                    if ($cuenta == 0) {

                                                        $totales[$i] = $totales[$i] +  0;

                                                    ?>

                                                        <td>0</td>
                                                <?php

                                                    }
                                                }


                                                ?>

                                            </tr>
                                        <?php


                                        }
                                        ?>

                                    </tbody>
                                    <tfoot>
                                        <tr>

                                            <th title="" class="text-center">TOTAL:</th>

                                            <th title="" class="text-center"><?php echo  $totales[1] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[2] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[3] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[4] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[5] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[6] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[7] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[8] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[9] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[10] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[11] ?></th>
                                            <th title="" class="text-center"><?php echo  $totales[12] ?></th>

                                        </tr>
                                    </tfoot>
                                </table>



                            </div>
                            <a href="ventas-detalles.php?>">
                                <!-- <button class="btn btn-success" data-toggle="modal" data-target="" onclick="" title="Nueva Orden"><i class="fas fa-plus"></i> Nueva Orden</button><br /> -->
                            </a>
                        </div>
                    </div>

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
    <?php include './librerias_js/librerias-ventas-por-linea.php' ?>



    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
                    $('#example2 thead tr')
                        .clone(true)
                        .addClass('filters')
                        .appendTo('#example thead');

                    var table = $('#example').DataTable({
                                //Header Filter
                                orderCellsTop: true,
                                fixedHeader: true,
                                initComplete: function() {
                                    var api = this.api();

                                    // For each column
                                    api
                                        .columns()
                                        .eq(0)
                                        .each(function(colIdx) {
                                            // Set the header cell to contain the input element
                                            var cell = $('.filters th').eq(
                                                $(api.column(colIdx).header()).index()
                                            );
                                            var title = $(cell).text();
                                            $(cell).html('<input type="text" placeholder="' + title + '" />');

                                            // On every keypress in this input
                                            $(
                                                    'input',
                                                    $('.filters th').eq($(api.column(colIdx).header()).index())
                                                )
                                                .off('keyup change')
                                                .on('keyup change', function(e) {
                                                    e.stopPropagation();

                                                    // Get the search value
                                                    $(this).attr('title', $(this).val());
                                                    var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                                    var cursorPosition = this.selectionStart;
                                                    // Search the column for that value
                                                    api
                                                        .column(colIdx)
                                                        .search(
                                                            this.value != '' ?
                                                            regexr.replace('{search}', '(((' + this.value + ')))') :
                                                            '',
                                                            this.value != '',
                                                            this.value == ''
                                                        )
                                                        .draw();

                                                    $(this)
                                                        .focus()[0]
                                                        .setSelectionRange(cursorPosition, cursorPosition);
                                                });
                                        });


                                    //filtros de busqueda de datatable



                                    var dato = document.getElementById("estado_venta").value;



                                    if (dato == "APROBO CLIENTE") {
                                        document.getElementById("bt_enviar").disabled = true;
                                        document.getElementById("texto_alerta").style.display = "block";

                                    } else if (dato == "CANCELADO") {

                                        document.getElementById("bt_enviar").disabled = true;
                                        document.getElementById("cancelar_pedido").disabled = true;
                                        document.getElementById("bt_aprobar_cartera").disabled = true;


                                        // document.getElementById("texto_alerta_cancelado").style.display = "block";
                                    }

                                });
    </script>

</body>

</html>