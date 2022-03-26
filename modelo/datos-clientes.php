<?php

class misClientes
{
    // Mostrar todos los clientes
    public function viewClientes()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes 
                    ORDER BY id DESC
                    LIMIT 100";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['identificacion'] = $data['identificacion_cli'];
                $arreglo[$i]['direccion'] = $data['direccion'];
                $arreglo[$i]['telefono'] = $data['telefono'];
                $arreglo[$i]['pais'] = $data['pais'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $arreglo[$i]['email'] = $data['email'];
                $arreglo[$i]['usuarioId'] = $data['usuarioId'];
                $arreglo[$i]['medio_llegada'] = $data['medio_llegada'];
                $arreglo[$i]['tipo_cliente'] = $data['tipo_cliente'];
                $arreglo[$i]['observacion'] = $data['observacion'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Buscar un cliente
    public function viewCliente($cliente)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM clientes WHERE id = '" . $cliente . "'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['nombre'] = $data['nombre_cli'];
                $arreglo[$i]['identificacion'] = $data['identificacion_cli'];
                $arreglo[$i]['direccion'] = $data['direccion'];
                $arreglo[$i]['telefono'] = $data['telefono'];
                $arreglo[$i]['pais'] = $data['pais'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $arreglo[$i]['email'] = $data['email'];
                $arreglo[$i]['usuarioId'] = $data['usuarioId'];
                $arreglo[$i]['medio_llegada'] = $data['medio_llegada'];
                $arreglo[$i]['tipo_cliente'] = $data['tipo_cliente'];
                $arreglo[$i]['observacion'] = $data['observacion'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar los clientes por vendedor
    public function viewClientesxVendedor($vendedor)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT id, nombre_cli, identificacion_cli, direccion, telefono, pais, departamentos, ubicaciones.ciudad, email, usuarioId, medio_llegada, tipo_cliente, observacion, clientes.id_ubicaciones as lugar
                    FROM clientes, ubicaciones
                    WHERE `usuarioId`='".$vendedor."' and clientes.id_ubicaciones=ubicaciones.id_ubicacion
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    WHERE usuarioId = ?
                    ORDER BY id DESC";
        */
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['nombre'] = $data['nombre_cli'];
                $arreglo[$i]['identificacion'] = $data['identificacion_cli'];
                $arreglo[$i]['direccion'] = $data['direccion'];
                $arreglo[$i]['telefono'] = $data['telefono'];
                $arreglo[$i]['pais'] = $data['pais'];
                $arreglo[$i]['departamento'] = $data['departamentos'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $arreglo[$i]['email'] = $data['email'];
                $arreglo[$i]['usuarioId'] = $data['usuarioId'];
                $arreglo[$i]['medio_llegada'] = $data['medio_llegada'];
                $arreglo[$i]['tipo_cliente'] = $data['tipo_cliente'];
                $arreglo[$i]['observacion'] = $data['observacion'];
                $arreglo[$i]['codigo_lugar'] = $data['lugar'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar un cliente por vendedor
    public function viewClientexVendedor($vendedor, $id_cliente)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes
                    WHERE usuarioId = '" . $vendedor . "'
                    AND id = '" . $id_cliente . "'
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    WHERE usuarioId = ?
                    ORDER BY id DESC";
        */
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['nombre'] = $data['nombre_cli'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                $arreglo[$i]['direccion'] = $data['direccion'];
                $arreglo[$i]['telefono'] = $data['telefono'];
                $arreglo[$i]['pais'] = $data['pais'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $arreglo[$i]['email'] = $data['email'];
                $arreglo[$i]['usuarioId'] = $data['usuarioId'];
                $arreglo[$i]['medio_llegada'] = $data['medio_llegada'];
                $arreglo[$i]['tipo_cliente'] = $data['tipo_cliente'];
                $arreglo[$i]['observacion'] = $data['observacion'];
                $i++;
            }
        }
        return $arreglo;
    }


    public function ee( $ciudadd)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "select * from ubicaciones WHERE ciudad='$ciudadd'";
        echo  " ciudad ". $ciudadd . "--"; 
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    WHERE usuarioId = ?
                    ORDER BY id DESC";
        */
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_ubi'] = $data['id_ubicacion'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $arreglo[$i]['departamento'] = $data['departamentos'];
          
                $i++;
            }
        }
        return $arreglo;
    }
}
