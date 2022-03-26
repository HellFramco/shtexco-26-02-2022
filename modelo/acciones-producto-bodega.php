<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');

$accion = $_GET['accion'];

if ($accion == "registrar") {

$script_tz = date_default_timezone_get();
$fecha = date('Y-m-d', time());  


    $referencia = $_POST['referencia'];
    $id_bodega_ubicacion = $_POST['id_bodega_ubicacion'];



    $sql = "INSERT INTO prodxbodega (   referencia, id_bodega_ubicacion, fecha_registro)
            VALUES (?,?,?)";
    $reg = $conexion->prepare($sql);


    $reg->bindParam(1,$referencia);

    $reg->bindParam(2,$id_bodega_ubicacion);
    $reg->bindParam(3,$$fecha);


    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {


    $id_bode_product = $_POST['id'];
    $referencia = $_POST['referencia'];
    $id_bodega_ubicacion = $_POST['id_bodega_ubicacion'];




        $sql = "UPDATE prodxbodega SET referencia= ?,id_bodega_ubicacion= ? WHERE id_prod_bod= ?";
    $reg = $conexion->prepare($sql);




    $reg->bindParam(1,$id_bodega);

    $reg->bindParam(2,$id_estante);
    $reg->bindParam(3,$ubicacion);
        $reg->bindParam(4,$id_bode_product);

  if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }


}
elseif ($accion == "eliminar") {

}
else{

}