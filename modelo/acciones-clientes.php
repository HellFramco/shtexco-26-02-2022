<?php
session_start();
require_once "db.php";
require_once "notificacionCorreo.php";
$correoEnvio = "soporteshtex@gmail.com";
$conexion = new Conexion();

$accion = $_POST['accion'];

if ($accion == "registrar") {

    // echo $_POST['accion'];
    $fecha = date('Y-m-d');
    $identificacion = $_POST['identificacion'];
    $tipo_cliente = $_POST['tipo_cliente'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    $fecha_naci = $_POST['fecha_nacimiento'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $observacion = $_POST['observacion'];
    $medio_llegada = $_POST['medio_llegada'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $clasificacion = $_POST['clasificacion'];
    $tipo_documento = $_POST['tipo_documento'];

   
    $fechas = explode("-", $fecha_naci);
    
    
   
    $fecha_nacimiento = $fechas[0]."-".$fechas[1]."-".$fechas[2];

    echo  $fecha_nacimiento;

    $sql = "INSERT INTO clientes(identificacion_cli, nombre_cli, direccion, telefono, pais, departamento, ciudad, dateIn, email, medio_llegada, link_face, link_instagram, tipo_cliente, observacion, clasificacion, usuarioId, status, tipo_tercero, tipo_documento, fecha_nacimiento)VALUES
        ('".$identificacion."', '".$nombre."', '".$direccion."', '".$telefono."', '".$pais."', '".$departamento."', '".$ciudad."', '".$fecha."', '".$correo."', '".$medio_llegada."', '".$facebook."', '".$instagram."', '".$tipo_cliente."', '".$observacion."', '".$clasificacion."', ".$_SESSION['id'].",1,'cliente','".$tipo_documento."', '".$fecha_nacimiento."'
        )
        ";

        $statement = $conexion->query($sql);
        $id_cliente =  $conexion->lastInsertId();
        // $consulta = $statement->execute(array($identificacion, $nombre, $direccion, $telefono, $pais, $departamento, $ciudad, $fecha, $correo, $medio_llegada, $facebook, $instagram, $tipo_cliente, $observacion, $clasificacion, $_SESSION['id']));

        if ($statement) {
            // echo "Registrado: cliente: ".$id_cliente;
            $sqlDireccion = "INSERT INTO clientes_direccion(direccion, telefono, email, pais, departamento, ciudad, observacion,id_cliente)VALUES
            ('".$direccion."', '".$telefono."', '".$correo."', '".$pais."', '".$departamento."', '".$ciudad."', '".$observacion."', '".$id_cliente."'
            )
            ";

            $statementDireccion = $conexion->query($sqlDireccion);
            notificaMovimiento($correoEnvio,'Notificacion Sistema SHTEX', 'Se ha Realizado un Registro de un Cliente nuevo con nombre: '.$nombre.' Por el usuario: '.$_SESSION['mmb']);
            echo "
            <script>
                alert('Cliente Registrado');
                window.close();
            </script>
            ";
        }
        else {
            echo "no Registrado";
        }
    
//     $id = $_POST['id'];
//     $nombre = $_POST['nombre'];
//     $identificacion = $_POST['identificacion'];
//     $direccion = $_POST['direccion'];
//     $telefono = $_POST['telefono'];
//     $pais = $_POST['pais'];
//     $ciudad = "";
//     $departamento = "";
//     $email = $_POST['email'];
//     $usuarioId = $_POST['usuarioId'];
//     $ubicacion = $_POST['ubicacion'];
//     $tipo_cliente = $_POST['tipo_cliente'];
   

//     $ciudad="";
//     $departamento="";

    
//     $sql = "INSERT INTO `clientes`( `nombre_cli`, `identificacion_cli`, `direccion`, `telefono`, `pais`, `ciudad`, `departamento`, `email`, `usuarioId`,  `id_ubicaciones`, `tipo_cliente`) VALUES ('$nombre','$identificacion',
//     '$direccion','$telefono','$pais','$ciudad','$departamento','$email', '$usuarioId' , '$ubicacion', '$tipo_cliente')";

// echo $sql;

//     $result = $conexion->prepare($sql);
    
//     if ($result->execute()) {
//         echo 1;
//     } else {
//         print_r($result->errorInfo());
//         echo 0;
//     }
}
elseif ($accion == "modificar") {
    // Parámetros recibidos por POST
    $identificacion = $_POST['identificacion'];
    $tipo_cliente = $_POST['tipo_cliente'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $pais = $_POST['pais'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $observacion = $_POST['observacion'];
    $medio_llegada = $_POST['medio_llegada'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $clasificacion = $_POST['clasificacion'];
    $tipo_documento = $_POST['tipo_documento'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    
   
    
    $id_cliente = $_POST['id_cliente'];
   //$id_cliente = "8777";

    // Consulta
    $sql = 'UPDATE clientes
            SET identificacion_cli=:identificacion,
            nombre_cli=:nombre,
                direccion=:direccion,
                telefono=:telefono,
                email=:email,
                pais=:pais,
                
                departamento=:departamento,
                ciudad=:ciudad,
                tipo_cliente=:tipo_cliente,

                observacion=:observacion,
             
                medio_llegada=:medio_llegada,
                link_instagram=:link_instagram,
                link_face=:link_face,
                clasificacion=:clasificacion,
                tipo_documento=:tipo_documento,
                fecha_nacimiento=:fecha_nacimiento
                
               
        
            WHERE id=:id';
    $result = $conexion->prepare($sql);
    // Parámetros
    $result->bindParam(":identificacion",$identificacion);
    $result->bindParam(":nombre",$nombre);
    $result->bindParam(":direccion",$direccion);
    $result->bindParam(":telefono",$telefono);
    $result->bindParam(":email",$correo);
    $result->bindParam(":pais",$pais);
    $result->bindParam(":departamento",$departamento);
    $result->bindParam(":ciudad",$ciudad);
    $result->bindParam(":tipo_cliente",$tipo_cliente);

    $result->bindParam(":observacion",$observacion);
    $result->bindParam(":medio_llegada",$medio_llegada);
    $result->bindParam(":link_instagram",$instagram);
    $result->bindParam(":link_face",$facebook);

    $result->bindParam(":clasificacion",$clasificacion);
      $result->bindParam(":tipo_documento",$tipo_documento);
    $result->bindParam(":id",$id_cliente);
    $result->bindParam(":fecha_nacimiento",$fecha_nacimiento);


    // Resultado de la ejecución
    if ($result->execute()) {
        
                $sql = 'UPDATE `ventas_globales` SET cliente=:cliente  WHERE id_cliente=:id_cliente';
        $result = $conexion->prepare($sql);
        $result->bindParam(":cliente",$nombre);
        $result->bindParam(":id_cliente",$id_cliente);
        $result->execute();
        
        notificaMovimiento($correoEnvio,'Notificacion Sistema SHTEX', 'Se ha Realizado una edicion de los datos del Cliente '.$nombre.' Por el usuario: '.$_SESSION['mmb']);
        echo "
        <script>
        alert('Cliente Modificado');
        window.close();
        </script>
        ";
    } else {
        print_r($result->errorInfo());
        echo 0;
    }
}
elseif ($accion == "eliminar") {
    $id = $_POST['id'];
    $sql = "DELETE FROM clientes WHERE id='$id'";
    $result = $conexion->prepare($sql);
 
    
    
    // Resultado de la ejecución
    if ($result->execute()) {
        echo 1;
    } else {
        print_r($result->errorInfo());
        echo 0;
    }
}
else {
    echo 0;
}