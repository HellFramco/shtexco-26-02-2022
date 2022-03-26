<?php  
            $fecha = date('Y-m-d');
            require_once "../modelo/db.php";
            $conexion = new Conexion();
            

            if ($_GET['medio_pago'] == 'CONTRAENTREGA') {
                $consultaU = "UPDATE ventas_globales SET cartera_aprobo = 'SI', fecha_cartera_aprobo = '".$fecha."', estado = 'APROBO CARTERA' WHERE id_venta = ".$_GET['id_venta'];
                $res = $conexion->query($consultaU);
                header('location:orden-nueva-venta-2.php?cliente='.$_GET['cliente'].'&id_venta='.$_GET['id_venta'].'&lista=true');
            }
            else{
                header('location:orden-nueva-venta-2.php?cliente='.$_GET['cliente'].'&id_venta='.$_GET['id_venta'].'&lista=true');
            }
            if ($_GET['medio_pago'] == 'EFECTIVO') {
                $consultaU = "UPDATE ventas_globales SET cartera_aprobo = 'SI', fecha_cartera_aprobo = '".$fecha."', estado = 'APROBO CARTERA' WHERE id_venta = ".$_GET['id_venta'];
                $res = $conexion->query($consultaU);
                header('location:orden-nueva-venta-2.php?cliente='.$_GET['cliente'].'&id_venta='.$_GET['id_venta'].'&lista=true');
            }
            else{
                header('location:orden-nueva-venta-2.php?cliente='.$_GET['cliente'].'&id_venta='.$_GET['id_venta'].'&lista=true');
            }
?>