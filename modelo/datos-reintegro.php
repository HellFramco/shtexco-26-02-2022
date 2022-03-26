<?php
class misReintegros
{
    // Retorna todas las ventas
    public function viewReintegros()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM `reintegro_inventarios` where estado='prestado';";
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }
  
}
