<?php

class Influencer
{

    // ver Influencer
    public function verRegiastrosInfluencer()
    {
        require_once("db.php");
        $conexion = new Conexion();

        $consulta = "SELECT * FROM `influencer`";

        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }



    public function registrarInfluencer($id)
    {
        require_once("db.php");
        $conexion = new Conexion();

        $consulta = "SELECT * FROM `lista_productos_tienda` WHERE `numero_venta_w` = '".$id."'";

        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }


    public function cancelarInfluencer($id)
    {

        require_once("db.php");
        $conexion = new Conexion();
        $consulta = "UPDATE pedidos_tienda SET 
        estado='despachado'
        WHERE numero_venta_w = ?";
    
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id));
        
    }


    public function ModificarInfluencer($id)
    {

        require_once("db.php");
        $conexion = new Conexion();
        $consulta = "UPDATE pedidos_tienda SET 
        estado='despachado'
        WHERE numero_venta_w = ?";
    
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id));
        
    }



 
    
}
