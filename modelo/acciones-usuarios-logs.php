<?php
session_start();



class usuario_logs{


    function registro_usuario_logs($usuario, $accion){
        $fecha = date('Y-m-d');

        $sql = "INSERT INTO `usuario_logs`( `usuario`, `accion`, `fecha`, `linea`, `typeUser`, `correo_usuario`, `id_usuario`, `fecha_creacion_usuario`, `clv`) VALUES ('".$usuario."','$accion','".$fecha."','".$_SESSION['linea']."',".$_SESSION['typeUser'].",'".$_SESSION['mmb']."',".$_SESSION['id'].",'".$_SESSION['fecha_creacion_usuario']."','".$_SESSION['clv']."')";
        require_once "db.php";
        $conexion = new Conexion();
        $statement = $conexion->query($sql);
     
        
        if ($statement) {
            echo "Registrado";
        }
        else {
            echo "no Registrado";
        }


    }


}
?>

