<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_POST['accion'];

if ($accion == "registrar") {

    $observacion = $_POST['observacion'];

    

    $id_venta = $_POST['id_venta'];





        $sql = "UPDATE ventas_globales SET observacion= ? WHERE id_venta= ?";
    $reg = $conexion->prepare($sql);


    $reg->bindParam(1,$observacion);

    $reg->bindParam(2,$id_venta);





  if ($reg->execute()) {
        echo "La observación se ha guardado exitosamente";
    } else {
        print_r($reg->errorInfo());
        echo "Error al guardar la observación";
    }
}


?>