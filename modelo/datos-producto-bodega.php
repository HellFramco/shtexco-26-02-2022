<?php
class bodega_producto
{

    public function mostrar_bodega_producto()
    {

    }


       public function mostrar_bodega_producto_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT prodxbodega.id_prod_bod as id, prodxbodega.referencia as referencia, productos.nombre as nombre, bodega_ubicacion.ubicacion as ubicacion, prodxbodega.fecha_registro as fecha , prodxbodega.id_bodega_ubicacion as id_ubicacion FROM prodxbodega, productos, bodega_ubicacion WHERE prodxbodega.referencia=productos.referencia and prodxbodega.id_bodega_ubicacion=bodega_ubicacion.id_bod_ubic";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['referencia'] = $data['referencia'];
            $arreglo[$i]['nombre'] = $data['nombre'];
            $arreglo[$i]['ubicacion'] = $data['ubicacion'];
            $arreglo[$i]['fecha'] = $data['fecha'];
            $arreglo[$i]['id_ubicacion'] = $data['id_ubicacion'];
         

 
                $i++;
            }
        }
        return $arreglo;
    }


}

