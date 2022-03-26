<?php

class Comprobantes
{
    // Mostrar todos los clientes que me pertenecen
    public function ComprobantePorId($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
      
        $consulta = "SELECT * FROM `imagenes_facturas` WHERE id_venta  = ".$id;
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }
    
}
