<?php
class Inventarios
{

    public function verProductos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM codigos_barras_validados order by id_codigo desc";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    



}
