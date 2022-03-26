<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_GET['accion'];

if ($accion == "registrar") {



    $estante = $_POST['estante'];

    $observacion = $_POST['observacion'];




    $sql = "INSERT INTO bodega_estante (  estante, observacion)
            VALUES (?,?)";
    $reg = $conexion->prepare($sql);


    $reg->bindParam(1,$estante);

    $reg->bindParam(2,$observacion);


    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {


    $id_estante = $_POST['id'];
    $estante = $_POST['estante'];
    $observacion = $_POST['observacion'];



        $sql = "UPDATE bodega_estante SET estante= ?,observacion= ? WHERE id_bodega_estante= ?";
    $reg = $conexion->prepare($sql);




    $reg->bindParam(1,$estante);

    $reg->bindParam(2,$observacion);
        $reg->bindParam(3,$id_estante);

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