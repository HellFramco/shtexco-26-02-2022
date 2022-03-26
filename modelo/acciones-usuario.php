<?php
date_default_timezone_set('America/Bogota');
$script_tz = date_default_timezone_get();
require_once "db.php";
$conexion = new Conexion();
$fecha = date('Y-m-d', time());

$accion = $_GET['accion'];

if ($accion == "registrar") {
    $identificacion = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo']; //el mmb es el correo
    $clv = $_POST['identificacion'];
    $slt = $_POST['identificacion'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $estado = $_POST['estado'];

    // Cifrado
    $salt = uniqid(mt_rand(), true);
    $password = hash('sha512', $clv.$salt);

    if ($identificacion  == "" || $nombre == "" || $correo == "" || $tipo_usuario == "") {
        echo 2;
    } else {
        $sql = "INSERT INTO user_secure (identificacion, nombre, mmb, clv, slt, typeUser, estado, dateIn) VALUES (?,?,?,?,?,?,?,?)";
        $reg = $conexion->prepare($sql);

        $reg->bindParam(1, $identificacion);
        $reg->bindParam(2, $nombre);
        $reg->bindParam(3, $correo);
        $reg->bindParam(4, $password);
        $reg->bindParam(5, $salt);
        $reg->bindParam(6, $tipo_usuario);
        $reg->bindParam(7, $estado);
        $reg->bindParam(8, $fecha);

        if ($reg->execute()) {
            echo 1;
        } else {
            print_r($reg->errorInfo());
            echo 0;
        }
    }
} elseif ($accion == "modificar") {
    $id = $_POST['id'];
    $identificacion = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $clv = $_POST['identificacion'];
    $slt = $_POST['identificacion'];
    $tipo_usuario = $_POST['tipo_usuario'];
    $estado = $_POST['estado'];

    // Cifrado
    $salt = uniqid(mt_rand(), true);
    $password = hash('sha512', $clv.$salt);

    if ($identificacion  == "" || $nombre == "" || $correo == "" || $tipo_usuario == "") {
        echo 2;
    } else {
        $sql = "UPDATE user_secure
                SET identificacion=?, nombre=?, mmb=?, clv=?, slt=?, typeUser=?, estado=?
                WHERE id=?";
        $reg = $conexion->prepare($sql);

        $reg->bindParam(1, $identificacion);
        $reg->bindParam(2, $nombre);
        $reg->bindParam(3, $correo);
        $reg->bindParam(4, $password);
        $reg->bindParam(5, $salt);
        $reg->bindParam(6, $tipo_usuario);
        $reg->bindParam(7, $estado);
        $reg->bindParam(8, $id);

        if ($reg->execute()) {
            echo 1;
        } else {
            print_r($reg->errorInfo());
            echo 0;
        }
    }
} elseif ($accion == "eliminar") {
} else {
    echo "Error...";
}
