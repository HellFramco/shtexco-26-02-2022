<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_GET['accion'];

if ($accion == "registrar") {


$script_tz = date_default_timezone_get();
$fecha = date('Y-m-d', time());  


    $id = $_POST['id'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $pais = $_POST['pais'];
    $ubicacion = $_POST['ubicacion'];
    $observacion = $_POST['observacion'];


//
    $sql = "INSERT INTO `clientes_direccion`( `id_cliente`, `email`,`telefono`, `direccion`,   `pais` ,`id_ubicaciones`,  `observacion`) VALUES (?,?,?,?,?,?,?)";
    $reg = $conexion->prepare($sql);
   
   
    $reg->bindParam(1, $id);
    $reg->bindParam(2, $email);
    $reg->bindParam(3, $telefono);
    $reg->bindParam(4, $direccion);
    $reg->bindParam(5, $pais);
    $reg->bindParam(6, $ubicacion);
    $reg->bindParam(7, $observacion);



    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {


    $id_producto = $_POST['id'];
    $referencia = $_POST['referencia'];
    $nombre = $_POST['nombre'];

    $estado = $_POST['estado'];


        $sql = "UPDATE productos SET referencia= ?,nombre= ?, estado= ? WHERE id_producto= ?";
    $reg = $conexion->prepare($sql);



    $reg->bindParam(1,$referencia);
    $reg->bindParam(2,$nombre);

    $reg->bindParam(3,$estado);
    $reg->bindParam(4,$id_producto);

  if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }


}
elseif ($accion == "eliminar") {

}

elseif ($accion == "buscar") {

    $id = $_POST['id'];

    $i = 0;

    $consulta = "SELECT id, direccion, telefono, email, pais, observacion, ubicaciones.departamentos as depart, ubicaciones.ciudad as ciud FROM clientes_direccion, ubicaciones where clientes_direccion.id_ubicaciones=ubicaciones.id_ubicacion and id_cliente='$id' ";
    $modules = $conexion->prepare($consulta);
    $modules->execute();
    $total = $modules->rowCount();
    
    if ($total > 0) {
        while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
        $arreglo[$i]['id'] = $data['id'];
        $arreglo[$i]['direccion'] = $data['direccion'];
     
            $i++;
            echo "<tr>
            <td>".$data['id']."</td>
            <td>".$data['direccion']."</td>
            <td>".$data['telefono']."</td>
            <td>".$data['email']."</td>
            <td>".$data['pais']."</td>
            
            <td>".$data['ciud']. " / " .$data['depart']."</td>
            <td>"."</td>
            </tr>";

            
        }
    }
}
else{

}