<?php

class misPaises
{
    // Buscar una ciudad
    public function viewPais($pais)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM paises WHERE id = '".$pais."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['iso'] = $data['iso'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Ver todas las ciudades
    public function viewPaises()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM paises ORDER BY nombre ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['iso'] = $data['iso'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $i++;
            }
        }
        return $arreglo;
    }
    
}