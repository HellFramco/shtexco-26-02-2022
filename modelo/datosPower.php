<?php
// session_start();
class Datos
{

    
    public function categorias()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $consulta = "SELECT * FROM categorias";
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }
    



}
