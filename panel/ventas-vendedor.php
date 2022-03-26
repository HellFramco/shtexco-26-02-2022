<?php
include '../modelo/redireccion.php';
require_once '../modelo/funcionesVentas.php';
require_once '../api/woocommerce-api-main/aprovedOrdersContraentregaANDEfectivo.php';
$ventas = new Ventas();
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

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th title="" class="text-center">Orden</th>
                                            
                                            <th title="" class="text-center">Fecha Venta</th>
                                            <th title="" class="text-center">Editar Datos Venta</th>
                                            <th title="" class="text-center">Cliente</th>
                                            <th title="" class="text-center">Metodo Pago</th>
                                            <th title="" class="text-center">Transportadora</th>
                                            <th title="" class="text-center">Estado Orden</th>
                                            <th title="" class="text-center">Cliente Aprobo</th>
                                            <th title="" class="text-center">Cartera Aprobo</th>
                                            <th title="" class="text-center">Alistamiento</th>
                                            <th title="" class="text-center">Despacho Aprobo</th>
                                            
                                            <!-- <th title="" class="text-center">Total Venta</th> -->
                                            <th title="" class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th title="" class="text-center">Orden</th>

                                            <th title="" class="text-center">Fecha Venta</th>
                                            <th title="" class="text-center">Editar Datos Venta</th>
                                            <th title="" class="text-center">Cliente</th>
                                            <th title="" class="text-center">Metodo Pago</th>
                                            <th title="" class="text-center">Transportadora</th>
                                            <th title="" class="text-center">Estado Orden</th>
                                            <th title="" class="text-center">Cliente Aprobo</th>
                                            <th title="" class="text-center">Cartera Aprobo</th>
                                            <th title="" class="text-center">Alistamiento</th>
                                            <th title="" class="text-center">Despacho Aprobo</th>
                                            <!-- <th title="" class="text-center">Total Venta</th> -->
                                            <th title="" class="text-center">Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style="color: gray;">
                                        <?php 
                                        foreach ($ventas->verVentasVendedor($_SESSION['id']) as $key) {
                                        ?>
                                        <tr class="<?php echo $estadoVenta = $key['estado'] == 'CANCELADO'?'btn-danger':'btn-light'; ?>" style="color:black; text-transform: uppercase;">
                                            <td><a href="orden-nueva-venta-2.php?cliente=<?php echo $key['cliente']; ?>&id_venta=<?php echo $key['id_venta']; ?>&lista=true"><?php echo $key['id_venta']; ?></a></td>
                                            <td><?php echo $key['fecha_venta']; ?></td>
                                            <td>
                                                <?php 
                                                if ($key['estado'] == 'INICIADA') {
                                                ?>
                                                <a href="editar-datos-venta.php?cliente=<?php echo $key['cliente']; ?>&id_venta=<?php echo $key['id_venta']; ?>">Editar Datos venta</a> 
                                                <br> 
                                                <a class="text-dark"href="editar-direccion-venta.php?cliente=<?php echo $key['cliente']; ?>&id_cliente=<?php echo $key['id_cliente']; ?>&id_venta=<?php echo $key['id_venta']; ?>">Editar Direccion</a>
                                                <?php
                                                 } else if($key['estado'] == 'CANCELADO'){
                                                    ECHO "ESTA VENTA SE ENCUENTRA CANCELADA.";
                                                 }else if($key['estado'] == 'INICIADA'){
                                                    ECHO "ESTA VENTA SE ENCUENTRA INICIADA, SOLO SE PUEDE EDITAR LOS DATOS DE LA ORDEN UNA VEZ SE GENERE..";
                                                 }
                                                 ELSE{
                                                    ECHO "ESTA VENTA ESTA EN PROCESO Y NO PUEDE SER EDITADO SUS DATOS DE PAGO, TRANSPORTADORA O DIRECCIONES";
                                                 }
                                                    ?>
                                            </td>
                                            <td><?php echo $key['cliente']; ?></td>
                                            <td><?php echo $key['medio_pago']; ?></td>
                                            <td><?php echo $key['transportadora']; ?></td>
                                            <!-- <td><?php echo $key['fecha_vencimiento']; ?></td> -->
                                            <td><?php echo $key['estado']; ?></td>
                                            <td>
                                               <?php 
                                                if ($key['medio_pago'] == 'CONTRAENTREGA') {
                                                    ECHO "No es necesario Subir Comprobante <br>";
                                                }
                                                else{
                                                    if ($key['cliente_aprobo']=='SI') { ?>
                                                    <img src="../imagenes/iconos/verificar.png" alt=""> <?php echo $key['cliente_aprobo'] ?>
                                              
                                            
                                                       
                                                    <?php if($key['imagen_comprobante_pago'] != ''){?>

                                                        <a href="#"  onclick="lista_comprobantes('<?php echo $key['id_venta']; ?>')"> Ver Comprobante</a>
                                                        <!-- <a href="registra_orden_imagen.php?id_venta=<?php echo $key['id_venta']; ?>" class="text-dark"> Editar Comprobante</a> -->
                                                        <a href="registra_orden_imagen.php?id_venta=<?php echo $key['id_venta']; ?>&numero=2"> Subir Otro Comprobante</a>
                                                        <?php 
                                                    } else { 
                                                        echo "<i style='color:crimson;'>Pero No he subido el comprobante.</i>"; 
                                                     ?>
                                                          <a href="registra_orden_imagen.php?id_venta=<?php echo $key['id_venta']; ?>"> Subir Comprobante</a>
                                                 <?php } ?>
                                                <?php } else if($key['cliente_aprobo']=='CANCELADO') { 
                                                    ?>
                                                    <a title="" class="text-danger"><img src="../imagenes/iconos/no-verificado.png" alt="" style="color: red;"> <?php echo $key['cliente_aprobo'] ?></a>
                                                    <?php
                                                 } else { ?>
                                                    <img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['cliente_aprobo'] ?>
                                                <?php } 
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if ($key['cartera_aprobo']=='SI') { ?>
                                                    <img src="../imagenes/iconos/verificar.png" alt=""> <?php echo $key['cartera_aprobo'] ?>
                                                <?php } else if($key['cartera_aprobo']=='CANCELADO') { 
                                                    ?>
                                                    <img src="../imagenes/iconos/no-verificado.png" alt="" style="color: red;"> <strong class="text-danger"><?php echo $key['cartera_aprobo']; ?>
                                                    <?php
                                                 }  else { ?>
                                                    <img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['cartera_aprobo'] ?>
                                                <?php } ?>
                                            </td>
                                            
                                            <td>
                                                <?php if ($key['alistamiento']=='SI') { ?>
                                                    <img title="Esta orden ya ha sido alistada en bodega" src="../imagenes/iconos/verificar.png" alt=""> <strong><?php echo $key['alistamiento'] ?></strong>
                                                <?php } else if($key['estado']=='CANCELADO') { 
                                                    ?>
                                                    <img src="../imagenes/iconos/no-verificado.png" alt="" style="color: red;"> <strong class="text-danger"><?php echo $key['alistamiento'] ?>
                                                    <?php
                                                 } else if($key['cliente_aprobo']=='SI' AND $key['cartera_aprobo']=='SI' AND $_SESSION['typeUser']==6){ ?>
                                                    <a title="Despachar" href="despacho-nueva-venta.php?cliente=<?php echo $key['cliente']; ?>&id_venta=<?php echo $key['id_venta']; ?>&lista=true"><img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['alistamiento'] ?></a>
                                                <?php }
                                                else if($_SESSION['typeUser']!=6){ ?>
                                                    <a title="Usted no puede Alistar esta venta" href="#"><img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['alistamiento'] ?></a>

                                                <?php }  
                                                else if($key['cliente_aprobo']=='SI' AND $key['cartera_aprobo']==''){ ?>
                                                    <a title="Esta orden no se puede Alistar hasta que sea aprobada por cartera" href="#"><img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['alistamiento'] ?></a>

                                                <?php } 
                                                else if($key['cliente_aprobo']=='' AND $key['cartera_aprobo']==''){ ?>
                                                    <a title="Esta orden no se puede Alistar hasta que sea generada por el vendedor y aprobada por el cliente" href="#"><img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['alistamiento'] ?></a>
                                                
                                                <?php } 
                                                else { ?>
                                                    <img title="Esta orden no se puede Alistar hasta que sea aprobada por cliente y por cartera" src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['alistamiento'] ?>
                                                <?php
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($key['despachada']=='SI') { ?>
                                                    <img src="../imagenes/iconos/verificar.png" alt=""> <?php echo $key['despachada'] ?>
                                                <?php } else if($key['despachada']=='NO') { 
                                                    ?>
                                                    <a title="" class="text-danger"><img src="../imagenes/iconos/no-verificado.png" alt="" style="color: red;"> <?php echo $key['despachada'] ?></a>
                                                    <?php
                                                 }  else { ?>
                                                    <img src="../imagenes/iconos/no-verificado.png" alt=""> <?php echo $key['despachada'] ?>
                                                <?php } ?>
                                            </td>
                                            
                                            <td  class="d-flex" style="justify-content: center;">
                                                    <div>
                                                        <!-- <form action="../pdf/formato2.php?id_venta=<?php echo $key['id_venta']; ?>" target="_blank" method="POST"> -->
                                                       
                                                    </div>
                                                    <div class="offset-md-3">
                                                        <?php
                                                       if ($key['estado'] == 'APROBO CLIENTE' or $key['estado'] == 'APROBO CARTERA') {
                                                        ?>
                                                        <form action="../pdf/formato1.php?id_venta=<?php echo $key['id_venta']; ?>" target="_blank" method="POST">
                                                            <button class="border-0" type="submit" value="IMPRIMIR FACTURA" class="btn btn-success btn-sm" style="background-color: transparent;">
                                                                <span class="tt" data-placement="left" title="Imprimir Factura">
                                                                    <i class="fas fa-receipt" style="font-size: 35px; margin-left: 10px; color: gray; "></i>
                                                                </span>
                                                        </form>
                                                        <?php 
                                                       }
                                                        ?>
                                                    </div>

                                                    <!-- <?php 
                                                    if ($key['estado'] == 'APROBO DESPACHO' && $_SESSION['typeUser'] == 3) {
                                                    ?>
                                                    <div class="offset-md-3">
                                                        <a href="orden-devolucion.php?cliente=<?php echo $key['cliente']; ?>&id_venta=<?php echo $key['id_venta']; ?>&lista=true" tittle="hacer devoluciones para esta venta."><img src="../imagenes/iconos/devolucion-de-producto.png" alt=""></a>
                                                    </div>
                                                    <?php
                                                    }
                                                    else{
                                                    ?>
                                                    <div class="offset-md-3">
                                                        
                                                    </div>
                                                    <?php
                                                    }
                                                    ?> -->
                                                </td>
                                        
                                        </tr>
                                        <?php 
                                        }
                                        ?>
                                    </tbody>
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
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>
    function lista_comprobantes(id){
    window.open('ver-comprobantes.php?id_venta='+id, 'Comprobante', 'width=1000,height=800, top=100, left=400, location=no');
}

    
    
    
    
    
    window.onload = function() {
      var contenedor = document.getElementById("contenedor_loading");
    contenedor.style.visibility = "hidden";
    contenedor.style.opacity = "0";
  };
</script>

<!-- <script type="text/javascript">
        $(document).ready(function(e) {
            // Cuando le dás click muestra #content
            $('th.text-center.sorting.sorting_asc').click(function() {
                $("#content").toggleClass("hide");
            });

            // Simular click
            $('th.text-center.sorting.sorting_asc').click();
            
            
        });
    </script> -->
</body>

</html>