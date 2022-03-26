<?php
class misVentas
{
    // Retorna todas las ventas
    public function viewVentas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT *, nombre FROM `ventas`, user_secure WHERE ventas.id_vendedor=user_secure.id";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_venta'] = $data['id_venta'];
                $arreglo[$i]['id_cliente'] = $data['id_cliente'];
                $arreglo[$i]['id_direccion_cliente'] = $data['id_direccion_cliente'];
                $arreglo[$i]['id_vendedor_name'] = $data['nombre'];
                $arreglo[$i]['fecha_venta'] = $data['fecha_venta'];
                $arreglo[$i]['fecha_vencimiento'] = $data['fecha_vencimiento'];
                $arreglo[$i]['estado_orden'] = $data['estado_orden'];
                $arreglo[$i]['cliente_aprobo'] = $data['cliente_aprobo'];
                $arreglo[$i]['cartera_aprobo'] = $data['cartera_aprobo'];
                $arreglo[$i]['despacho_aprobo'] = $data['despacho_aprobo'];
                $arreglo[$i]['fecha_cliente_aprobo'] = $data['fecha_cliente_aprobo'];
                $arreglo[$i]['fecha_cartera_aprobo'] = $data['fecha_cartera_aprobo'];
                $arreglo[$i]['fecha_despacho'] = $data['fecha_despacho'];
                $arreglo[$i]['transportadora'] = $data['transportadora'];
                $arreglo[$i]['numero_guia'] = $data['numero_guia'];
                $arreglo[$i]['codigo_barras'] = $data['codigo_barras'];
                $arreglo[$i]['metodo_pago'] = $data['metodo_pago'];
                $arreglo[$i]['total_venta'] = $data['total_venta'];
                $arreglo[$i]['id_vendedor'] = $data['id_vendedor'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Retorna las ventas por vendedor
    public function viewVentasVendedor($vendedor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $i = 0;
        $arreglo = array();
        $consulta = "SELECT * FROM ventas, clientes WHERE ventas.cliente_id=clientes.id and asesor_id = " . $vendedor;
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_venta'] = $data['id_venta'];
                $arreglo[$i]['id_cliente'] = $data['cliente_id'];
                $arreglo[$i]['id_direccion_cliente'] = $data['direccion_cliente_id'];
                $arreglo[$i]['id_vendedor'] = $data['asesor_id'];
                $arreglo[$i]['fecha_venta'] = $data['fecha_venta'];
                $arreglo[$i]['fecha_vencimiento'] = $data['fecha_vencimiento'];
                $arreglo[$i]['estado_orden'] = $data['estado_orden'];
                $arreglo[$i]['cliente_aprobo'] = $data['cliente_aprobo'];
                $arreglo[$i]['cartera_aprobo'] = $data['cartera_aprobo'];
                $arreglo[$i]['despacho_aprobo'] = $data['despacho_aprobo'];
                $arreglo[$i]['fecha_cliente_aprobo'] = $data['fecha_cliente_aprobo'];
                $arreglo[$i]['fecha_cartera_aprobo'] = $data['fecha_cartera_aprobo'];
                $arreglo[$i]['fecha_despacho'] = $data['fecha_despacho'];
                $arreglo[$i]['transportadora'] = $data['transportadora_id'];
                $arreglo[$i]['numero_guia'] = $data['numero_guia'];
                $arreglo[$i]['codigo_barras'] = $data['codigo_barras'];
                $arreglo[$i]['metodo_pago'] = $data['metodo_pago_id'];
                $arreglo[$i]['total_venta'] = $data['total_venta'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Retorna una venta
    public function viewMisVentas_detalles($id_venta)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $i = 0;
        $arreglo = array();
        
        $consulta = "SELECT clientes.direccion, nombre_cli, nombre, transportadora, metodo_pago,total_venta FROM `ventas`, clientes, user_secure WHERE id_venta='" . $id_venta . "' and ventas.id_cliente=clientes.id and user_secure.id=id_vendedor;";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_cliente'] = $data['nombre_cli'];
                $arreglo[$i]['id_direccion_cliente'] = $data['direccion'];
                $arreglo[$i]['id_vendedor'] = $data['nombre'];
                $arreglo[$i]['transportadora'] = $data['transportadora'];
                $arreglo[$i]['metodo_pago'] = $data['metodo_pago'];
                $arreglo[$i]['total_venta'] = $data['total_venta'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Retorna el valor de la siguiente venta
    public function maxVenta()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $sqlcon = "SELECT max(id_venta) as maximo FROM ventas";
        $rescon = $conexion->prepare($sqlcon);
        $rescon->execute();
        $rowcon = $rescon->fetch(PDO::FETCH_ASSOC);
        $consecutivo = $rowcon['maximo'];
        $consecutivo++;
        return $consecutivo;
    }
}
