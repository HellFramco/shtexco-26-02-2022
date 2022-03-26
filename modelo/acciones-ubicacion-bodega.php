<?php
require_once "db.php";
$conexion = new Conexion();


$accion = $_GET['accion'];

if ($accion == "registrar") {



    $id_bodega = $_POST['id_bodega'];
    $id_estante = $_POST['id_estante'];
    $ubicacion = $_POST['ubicacion'];


    $sql = "INSERT INTO bodega_ubicacion (   id_bodega, id_estante, ubicacion)
            VALUES (?,?,?)";
    $reg = $conexion->prepare($sql);


    $reg->bindParam(1,$id_bodega);

    $reg->bindParam(2,$id_estante);
    $reg->bindParam(3,$ubicacion);


    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {


    $id_ubicacion = $_POST['id'];
    $id_bodega = $_POST['id_bodega'];
    $id_estante = $_POST['id_estante'];
    $ubicacion = $_POST['ubicacion'];




        $sql = "UPDATE bodega_ubicacion SET id_bodega= ?,id_estante= ?, ubicacion= ? WHERE id_bod_ubic= ?";
    $reg = $conexion->prepare($sql);




    $reg->bindParam(1,$id_bodega);

    $reg->bindParam(2,$id_estante);
    $reg->bindParam(3,$ubicacion);
        $reg->bindParam(4,$id_ubicacion);

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