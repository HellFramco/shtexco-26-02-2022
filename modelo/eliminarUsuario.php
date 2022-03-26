<?php
// date_default_timezone_set('America/Bogota');
// $script_tz = date_default_timezone_get();
require_once "db.php";
$conexion = new Conexion();




        
        
        
        $consulta = "DELETE FROM user_secure WHERE id = ?";
        
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($_GET['id']));
        if ($modules){
            header('location: ../panel/usuarios.php');
        }


