<?php
// date_default_timezone_set('America/Bogota');
// $script_tz = date_default_timezone_get();
require_once "db.php";
$conexion = new Conexion();




        
        
        
        $consulta = "UPDATE user_secure SET linea = ? WHERE id = ?";
        
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($_POST['linea'],$_POST['id_usuario']));
        if ($modules){
            header('location: ../panel/usuario-vendedor.php');
        }


