<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_POST['accion'];

if ($accion == "registrar") {



    

    $precio_detal = $_POST['precio_detal'];
    $precio_mayor = $_POST['precio_mayor'];
    $id_inventario = $_POST['id_inventario'];




        $sql = "UPDATE inventarios_productos SET precio= ? , precio_mayor= ? WHERE id_inventario= ?";
    $reg = $conexion->prepare($sql);


    $reg->bindParam(1,$precio_detal);
    $reg->bindParam(2,$precio_mayor);

    $reg->bindParam(3,$id_inventario);





  if ($reg->execute()) {
        echo "El precio se ha guardado exitosamente";
    } else {
        print_r($reg->errorInfo());
        echo "Error al guardar el Precio";
    }
}


?>