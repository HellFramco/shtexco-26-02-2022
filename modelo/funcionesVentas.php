<?php

class Ventas
{
    // Mostrar todos los clientes que me pertenecen
    public function ventaPorId($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM ventas_globales WHERE id_venta = ".$id;
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // mostrar ventas
    public function verVentas()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
       // $consulta = "SELECT * FROM ventas_globales";
        $consulta = "SELECT * FROM `ventas_globales` ORDER BY `ventas_globales`.`id_venta` DESC";
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    //traer nombre real del cliente
    public function traerNombreCliente($id_cliente)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
       // $consulta = "SELECT * FROM ventas_globales";
        $consulta = "SELECT * FROM clientes WHERE id = ".$id_cliente;
       
        $modules = $conexion->query($consulta)->fetchAll();
        foreach($modules as $key){
            return $key['nombre_cli'];
        }
    }

    // mostrar ventas
    public function verVentasVendedor($id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM ventas_globales WHERE id_usuario = ".$id_usuario;
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }


// mostrar ventas por aprobar
    public function verVentasPorAprobar()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM ventas_globales WHERE cliente_aprobo = 'SI';";
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // mostrar ventas por Despachar
    public function verVentasPorDespachar()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM ventas_globales WHERE cliente_aprobo = 'SI'  AND cartera_aprobo = 'SI';";
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    //mostrar la linea perteneciente al usuario
    public function verLineaUsuario($id_usuario)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT linea 
                    FROM user_secure WHERE id = ".$id_usuario." ;";
       
        $modules = $conexion->query($consulta)->fetchAll();
        
        foreach ($modules as $key) {
            return $key['linea'];
        }
    }


    public function cancelarVenta($id_venta)
    {
        require_once("db.php");
        $conexion = new Conexion();
        
        $consulta = "UPDATE ventas_globales SET 
             
        estado='ANULADO',
        cliente_aprobo='ANULADO', 
        cartera_aprobo='ANULADO',
        alistamiento='ANULADO', 
        despachada='ANULADO' 
        
        WHERE id_venta = ?";
        
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id_venta));
        
          //cancela el listado_productos_venta
        $consulta2 = "UPDATE `lista_productos_ventas` 
        SET `estado`='CANCELADO' 
        WHERE id_venta = ?";
        
        $modules2 = $conexion->prepare($consulta2);
        $modules2->execute(array($id_venta));
    }
    
    
    
    public function ventasPorLinea($mes, $linea, $anio)
    {
        require_once("db.php");
        $conexion = new Conexion();
        
        $consulta = "SELECT linea, COUNT(linea)  as total from user_secure, lista_productos_ventas, ventas_globales WHERE lista_productos_ventas.id_venta =
        ventas_globales.id_venta and ventas_globales.id_usuario=user_secure.id AND linea='".$linea."' AND MONTH (fecha_despacho)=".$mes." AND  YEAR(fecha_despacho)=".$anio." AND ventas_globales.estado='APROBO DESPACHO' GROUP BY linea ORDER BY   total DESC;";

          $modules = $conexion->query($consulta)->fetchAll();
               return $modules;
    }
    
    
     
    public function ventasValorPorLinea($mes, $linea, $anio)
    {
        require_once("db.php");
        $conexion = new Conexion();
        
     $consulta = "SELECT linea, SUM(precio)  as total from user_secure, lista_productos_ventas, ventas_globales WHERE lista_productos_ventas.id_venta =
        ventas_globales.id_venta and ventas_globales.id_usuario=user_secure.id AND linea='".$linea."' AND MONTH (fecha_despacho)=".$mes." AND  YEAR(fecha_despacho)=".$anio." AND ventas_globales.estado='APROBO DESPACHO' GROUP BY linea ORDER BY   total DESC;";

          $modules = $conexion->query($consulta)->fetchAll();
               return $modules;
    }
    
    
    
    
    
}
