<?php
require_once "../controller/db.php";
$conexion = new Conexion();

$id = $_POST['idu'];
$identificacion = $_POST['identificacionu'];
$nombre = $_POST['nombreu'];
$direccion = $_POST['direccionu'];
$telefono = $_POST['telefonou'];
$pais = $_POST['paisu'];
$ciudad = $_POST['ciudadu'];
$departamento = $_POST['departamentou'];
$email = $_POST['emailu'];
$usuarioId = $_POST['usuarioIdu'];
$vendedoru = $_POST['vendedoru'];

if ($vendedoru == "") {
    $vendedor = $usuarioId;
} else {
    $vendedor = $vendedoru;
}

$sql = "UPDATE clientes
        SET identificacion=:identificacion,
            nombre=:nombre,
            direccion=:direccion,
            telefono=:telefono,
            pais=:pais,
            ciudad=:ciudad,
            departamento=:departamento,
            email=:email,
            usuarioId=:usuarioId
        WHERE id=:id";
$result = $conexion->prepare($sql);
$result->bindParam(":identificacion",$identificacion);
$result->bindParam(":nombre",$nombre);
$result->bindParam(":direccion",$direccion);
$result->bindParam(":telefono",$telefono);
$result->bindParam(":pais",$pais);
$result->bindParam(":ciudad",$ciudad);
$result->bindParam(":departamento",$departamento);
$result->bindParam(":email",$email);
$result->bindParam(":usuarioId",$vendedor);
$result->bindParam(":id",$id);

if ($result->execute()) {
    echo 1;
} else {
    print_r($result->errorInfo());
    echo 0;
}