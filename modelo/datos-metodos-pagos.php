<?php
class misMetodosPagos
{

    public function viewMetodosPagos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM metodos_pagos ORDER BY id_metodo ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_metodo'] = $data['id_metodo'];
                $arreglo[$i]['nombre_metodo'] = $data['nombre_metodo'];
                
                $i++;
            }
        }
        return $arreglo;
    }

    public function viewMetodoPago($id_metodo)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM metodos_pagos WHERE id_metodo = ? ORDER BY id_metodo ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id_metodo));
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_metodo'] = $data['id_metodo'];
                $arreglo[$i]['nombre_metodo'] = $data['nombre_metodo'];
                $i++;
            }
        }
        return $arreglo;
    }
}