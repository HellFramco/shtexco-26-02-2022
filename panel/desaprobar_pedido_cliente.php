<?php
session_start();
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';

require_once '../modelo/notificacionCorreo.php';
$conexion = new Conexion();

date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];

if ($accion == "cancelar_confirmo_cliente") {

            
        

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;




        $fecha = date("Y-m-d");

        $sql = "UPDATE ventas_globales SET 
        cliente_confirma='', 
        fecha_cliente_confirma='', 
        estado='INICIADA' 
        
        WHERE id_venta=" . $_POST['id_venta'];




        $confirma = $conexion->query($sql);

        

        echo "<script>
                        location.href = 'orden-nueva-venta-2.php?cliente=".$_POST['id_cliente']."&id_venta=".$_POST['id_venta']."&lista=true';</script>";
                        
        





        }

else{

}



// location.href = 'orden-nueva-venta.php?cliente=".$_GET['id_cliente']."&id_venta=".$_GET['id_venta']."&lista=true';