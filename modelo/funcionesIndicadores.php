<?php

class Indicadores
{
    // esta es la plantilla conteo de datos de la base de datos.
    // public function conteoVentas($id)
    // {
    //     require_once("db.php");
    //     $conexion = new Conexion();
    //     $arreglo = array();
    //     $i = 0;
    //     $consulta = "";
    //     $modules = $conexion->query($consulta)->fetchAll();
    //     return $modules;
    // }

    // Mostrar todos los clientes que me pertenecen
    public function conteoTotal($id,$tabla)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('".$id."') AS conteo FROM ".$tabla;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }

    public function sumaInventarioTshirt()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT SUM(tallas + tallam + tallal + tallau)as total from inventarios_productos where tipo = 't-shirt' and estado = 'existencia';";
        $modules = $conexion->query($consulta)->fetchAll();
        
        foreach($modules as $key){
            return $key['total'];
        }
    }

    // Mostrar todas mis ventas
    public function conteoMisVentas($id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') AS conteo FROM ventas_globales WHERE id_usuario = ".$id_usuario;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }

    // Mostrar todas mis ventas de hoy
    public function conteoMisVentasHoy($id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') AS conteo FROM ventas_globales WHERE fecha_venta = CURDATE() AND id_usuario = ".$id_usuario;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
            // return $key['fecha'];
        }
    }

    // conteo ventas hoy por estados
    public function conteoVentasEstadoHoy($columna,$estado)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') AS conteo FROM ventas_globales WHERE ".$columna."='".$estado."' AND fecha_venta = CURDATE() ";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
            // return $key['fecha'];
        }
    }

    public function conteoVentasHoy($columna,$estado)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') AS conteo FROM ventas_globales WHERE ".$columna."='".$estado."' AND fecha_venta = CURDATE() ";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
            // return $key['fecha'];
        }
    }

    // Mostrar todas mis ventas de este mes
    public function conteoMisVentasMes($id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') AS conteo FROM ventas_globales WHERE MONTH(FROM_UNIXTIME('fecha_venta'))= MONTH(CURDATE()) AND id_usuario = ".$id_usuario;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
            // return $key['fecha'];
        }
    }
    

    

    // conteo de referencias agrupadas por reprogramacion 1
    public function conteoReferenciasExistentes()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_inventario') as conteo from inventarios_productos where reprogramacion=1 AND estado = 'EXISTENCIA' AND verificado = 1;";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }

    // conteo de ventas por estado
    public function conteoVentasEstadoGeneral($estado)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') as conteo from ventas_globales WHERE estado='".$estado."';";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }

    // conteo de ventas por estado por cada usuario
    public function conteoVentasEstadoUsuario($estado,$id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') as conteo from ventas_globales WHERE estado='".$estado."' AND id_usuario=".$id_usuario;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }

    // conteo de ventas por estado por cada usuario
    public function conteoVentasEstadoUsuarioHoy($estado,$id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') as conteo from ventas_globales WHERE fecha_venta = CURDATE() AND estado='".$estado."' AND id_usuario=".$id_usuario;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }


    public function conteoVentasEstado($columna, $estado)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id_venta') as conteo from ventas_globales WHERE ".$columna."='".$estado."'";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['conteo'];
        }
    }



    // conteo de inventario agrupadas
    public function conteoInventarioTotal($estado)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT SUM(talla6 + talla8 + talla10 + talla12 + talla14 + talla16 + talla18 + talla20 + talla26 + talla28 + talla30 + talla32 + talla34 + talla36 + talla38 + tallas + tallam + tallal + tallaxl + tallau + tallaest) as conteo from inventarios_productos WHERE estado = '".$estado."';";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            if($key['conteo']==''){
                return 0;
            }
            else{
                return $key['conteo'];
            }
        }
    }

    // conteo de inventario por tipo
    public function conteoInventarioPorTipo($estado, $tipo)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT SUM(talla6 + talla8 + talla10 + talla12 + talla14 + talla16 + talla18 + talla20 + talla26 + talla28 + talla30 + talla32 + talla34 + talla36 + talla38 + tallas + tallam + tallal + tallaxl + tallau + tallaest) as conteo from inventarios_productos WHERE estado = '".$estado."' AND tipo = '".$tipo."';";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            if($key['conteo']==''){
                return 0;
            }
            else{
                return $key['conteo'];
            }
        }
    }

    // conteo de inventario por tipo
    public function conteoReferenciasPorTipo($tipo)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT(id_inventario)as conteo FROM inventarios_productos WHERE tipo = '".$tipo."' AND estado = 'EXISTENCIA' AND verificado = 1;";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            if($key['conteo']==''){
                return 0;
            }
            else{
                return $key['conteo'];
            }
        }
    }

    // conteo de clientes por tipo de tercero
    public function conteoClientesPorTipo($tipo)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT('id') as conteo from clientes WHERE tipo_tercero='".$tipo."'";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            if($key['conteo']==''){
                return 0;
            }
            else{
                return $key['conteo'];
            }
        }
    }

    // conteo de mis clientes por tipo de tercero
    public function conteoMisclientesPorTipo($tipo,$usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT COUNT(id) as conteo from clientes WHERE tipo_tercero='".$tipo."' AND usuarioId=".$usuario;
        
        // return $consulta;
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            // if($key['conteo']==''){
            //     return 0;
            // }
            // else{
                return $key['conteo'];
            // }
        }
    }
    
}
