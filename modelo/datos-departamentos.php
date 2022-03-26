<?php

class misDeptos
{
    //Buscar un departamento
    public function viewDepto($depto)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM departamentos WHERE id = '".$depto."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['pais'] = $data['pais'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar todos los departamentos
    public function viewDeptos()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM departamentos ORDER BY departamento ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['pais'] = $data['pais'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar departamentos por ciudades
    public function viewDeptosPais($pais)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM departamentos WHERE pais = '".$pais."' ORDER BY departamento ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['pais'] = $data['pais'];
                $i++;
            }
        }
        return $arreglo;
    }

}