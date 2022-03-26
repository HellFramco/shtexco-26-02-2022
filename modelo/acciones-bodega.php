<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_GET['accion'];

if ($accion == "registrar") {



    $nombre = $_POST['nombre'];
    $lugar = $_POST['lugar'];
    $observacion = $_POST['observacion'];




    $sql = "INSERT INTO bodegas (  nombre,  lugar, observacion)
            VALUES (?,?,?)";
    $reg = $conexion->prepare($sql);


    $reg->bindParam(1,$nombre);

    $reg->bindParam(2,$lugar);
    $reg->bindParam(3,$observacion);


    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {


    $id_bodega = $_POST['id'];
    $nombre = $_POST['nombre'];
    $lugar = $_POST['lugar'];
    $observacion = $_POST['observacion'];



        $sql = "UPDATE bodegas SET nombre= ?,lugar= ?, observacion= ? WHERE id_bodega= ?";
    $reg = $conexion->prepare($sql);




    $reg->bindParam(1,$nombre);

    $reg->bindParam(2,$lugar);
    $reg->bindParam(3,$observacion);
        $reg->bindParam(4,$id_bodega);

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