<?php
date_default_timezone_set('America/Bogota');
require_once "db.php";
require_once "datos-ventas.php";
$conexion = new Conexion();
$misventas = new  misVentas();

$script_tz = date_default_timezone_get();
$fecha = date('Y-m-d', time());
$accion = $_GET['accion'];

// fecha de vencimiento
$fecha = date('Y-m-d');
$nuevafecha = strtotime ( '+7 day' , strtotime ( $fecha ) ) ;
$fecha_vencimiento = date ( 'Y-m-d' , $nuevafecha );

// 

if ($accion == "registrar") {
    
}
elseif ($accion == "modificar") {
    $id_venta = $_POST['id'];
    $id_cliente = $_POST['id_cliente'];
    $transportadora = $_POST['transportadora'];
    $metodo_pago = $_POST['metodo_pago'];


    
   


    $sql = "UPDATE ventas SET transportadora = ?, metodo_pago = ? where id_venta = ?";
    $reg = $conexion->prepare($sql);
    


    if ($reg->execute(array($transportadora, $metodo_pago,$id_venta,))) {
        echo 1;
    } else {
        // print_r($result->errorInfo());
        echo 0;
    }
}
elseif ($accion == "eliminar") {

}
elseif ($accion == "aprobar_venta") {
echo "1";
    $id_venta = $_POST['id'];


    
   


    $sql = "UPDATE ventas SET estado_orden = ? where id_venta = ?";
    $reg = $conexion->prepare($sql);
    


    if ($reg->execute(array("aprobado",$id_venta,))) {
        echo 1;
    } else {
        // print_r($result->errorInfo());
        echo 0;
    }
}

else{

}