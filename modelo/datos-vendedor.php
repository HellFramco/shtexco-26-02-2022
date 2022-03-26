<?php

class misVendedores
{
    // Buscar un vendedor
    public function viewVendedor($vendedor)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM user_secure WHERE id = '".$vendedor."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['mmb'] = $data['mmb'];
                $arreglo[$i]['typeUser'] = $data['typeUser'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar todos los vendedores
    public function viewVendedores()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM user_secure WHERE id = '".$vendedor."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['mmb'] = $data['mmb'];
                $arreglo[$i]['typeUser'] = $data['typeUser'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }
}