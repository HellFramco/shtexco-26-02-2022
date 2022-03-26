<?php

class Tiendas
{

    // ver usuarios
    public function verRegiastrosTienda()
    {
        require_once("db.php");
        $conexion = new Conexion();

        $consulta = "SELECT `numero_venta_w`,`nombre_cliente`,`documento_cliente`,`direccion_cliente`,`estado`, nombre_influencer FROM `pedidos_tienda`";

        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }



    // ver usuarios
    public function verRegiastrosProductoPedido($id)
    {
        require_once("db.php");
        $conexion = new Conexion();

        $consulta = "SELECT * FROM `lista_productos_tienda` WHERE `numero_venta_w` = '".$id."'";

        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }


    public function aprobarDespacho($id)
    {

        require_once("db.php");
        $conexion = new Conexion();
        $consulta = "UPDATE pedidos_tienda SET 
        estado='despachado'
        WHERE numero_venta_w = ?";
    
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id));
        
    }

 

     public function ventasInfluencer(){



        require_once("db.php");
        $conexion = new Conexion();

        $consulta = "SELECT pedidos_tienda.nombre_influencer, COUNT(pedidos_tienda.nombre_influencer) as cantidad, SUM(total_venta) as total, tasa , ((SUM(total_venta) * tasa) / 100) total_pago FROM `pedidos_tienda`, influencer WHERE pedidos_tienda.nombre_influencer = influencer.nombre_influencer GROUP BY nombre_influencer";

        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;





    }
    
}
