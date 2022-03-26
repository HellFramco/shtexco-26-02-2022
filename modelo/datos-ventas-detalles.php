<?php
class ventas_detalladas
{

    public function registrar(){

 



    }

 
    public function verVentasDetalles()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT vd.id_venta_detalle,
                            vd.venta_id,
                            vd.inventario_id,
                            vd.cantidad,
                            vd.precio_unitario,
                            vd.descuento,
                            pd.bod_ubic_id,
                            bu.bodega_cod,
                            bu.estante_cod,
                            bu.ubicacion
                    FROM ventas_detalles vd
                    INNER JOIN prodxbodega pd ON vd.inventario_id=pd.inventario_id
                    INNER JOIN bodega_ubicacion bu ON pd.bod_ubic_id=bu.id_bod_ubic
                    ORDER BY vd.inventario_id ASC";
        
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                // Datos del detalle de la venta
                $arreglo[$i] = $data;
                $i++;
            }
        }
        return $arreglo;
    }

    public function verVentasDetalle($id)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT `referencia` FROM `inventarios` GROUP BY referencia;";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {

                $arreglo[$i]['referencia'] = $data['referencia '];

                $i++;
            }
        }
        return $arreglo;
    }
}
