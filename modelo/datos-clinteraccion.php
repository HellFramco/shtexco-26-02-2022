<?php

class misInteracciones
{
    // Mostrar todas las interacciones
    public function viewInteracciones()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes_interacciones 
                    ORDER BY codigo DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['id_cliente'] = $data['id_cliente'];
                $arreglo[$i]['id_usuario'] = $data['id_usuario'];
                $arreglo[$i]['fecha_registro'] = $data['fecha_registro'];
                $arreglo[$i]['fecha_contacto'] = $data['fecha_contacto'];
                $arreglo[$i]['observacion_interaccion'] = $data['observacion_interaccion'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar interacciones por vendedor
    public function viewInteraccionVend($asesor)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        /*
        $consulta = "SELECT usse.name vendedor, cli.nombre cliente, ic.fecha_registro, ic.fecha_contacto, ic.observacion_interaccion
                    FROM interacciones_clientes ic
                    INNER JOIN clientes cli ON ic.id_cliente=cli.id
                    INNER JOIN user_secure usse ON ic.id_usuario=usse.id
                    ORDER BY ic.codigo DESC";
        */
        $consulta = "SELECT * 
                    FROM clientes_interacciones
                    WHERE id_usuario = '".$asesor."'
                    ORDER BY codigo DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['codigo'] = $data['codigo'];
                $arreglo[$i]['id_cliente'] = $data['id_cliente'];
                $arreglo[$i]['id_usuario'] = $data['id_usuario'];
                $arreglo[$i]['fecha_registro'] = $data['fecha_registro'];
                $arreglo[$i]['fecha_contacto'] = $data['fecha_contacto'];
                $arreglo[$i]['observacion_interaccion'] = $data['observacion_interaccion'];
                $i++;
            }
        }
        return $arreglo;
    }
}
