<?php

class misTiposClientes
{
    // Buscar un tipo de cliente
    public function viewTipoCliente($id_tipo_cliente)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM tipo_cliente WHERE id_tipo_cliente = '".$id_tipo_cliente."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_tipo_cliente'] = $data['id_tipo_cliente'];
                $arreglo[$i]['nombre_tipo_cliente'] = $data['nombre_tipo_cliente'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Ver todas los tipos de clientes
    public function ViewTipoClientes()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM tipo_cliente ORDER BY id_tipo_cliente ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_tipo_cliente'] = $data['id_tipo_cliente'];
                $arreglo[$i]['nombre_tipo_cliente'] = $data['nombre_tipo_cliente'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }

}