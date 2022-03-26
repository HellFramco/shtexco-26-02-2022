<?php

class misCiudades
{
    // Buscar una ciudad
    public function viewCiudad($ciudad)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM ciudades WHERE id = '".$ciudad."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Ver todas las ciudades
    public function viewCiudades()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM ciudades ORDER BY ciudad ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Ciudades por departamento
    public function viewCiudadesDpto($dpto)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT *
                    FROM ciudades
                    WHERE departamento = '".$dpto."'
                    ORDER BY ciudad ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $i++;
            }
        }
        return $arreglo;
    }
}