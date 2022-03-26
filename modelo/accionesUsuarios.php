<?php
// date_default_timezone_set('America/Bogota');
// $script_tz = date_default_timezone_get();
require_once "db.php";
$conexion = new Conexion();




        
        
        
        $consulta = "UPDATE user_secure SET nombre = ?, mmb = ?, clv = ?, linea = ? WHERE id = ?";
        
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($_POST['nombre'],$_POST['correo'],$_POST['clave'],$_POST['linea'],$_POST['id_usuario']));
        if ($modules){
            header('location: ../panel/usuarios.php');
        }


