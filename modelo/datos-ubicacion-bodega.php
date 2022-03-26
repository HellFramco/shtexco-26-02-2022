<?php
class bodega_ubicacion
{

    public function mostrar_bodega_ubicacion()
    {
    }

    public function viewBodegaUbicacion()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT bu.*, bod.*
                     FROM bodega_ubicacion bu
                     INNER JOIN bodegas bod ON bu.bodega_cod=bod.codigo
                     ORDER BY bu.bodega_cod ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id_bod_ubic'];
                $arreglo[$i]['bodega'] = $data['bodega_cod'];
                $arreglo[$i]['estante'] = $data['estante_cod'];
                $arreglo[$i]['ubicacion'] = $data['ubicacion'];
                $arreglo[$i]['id_bodega'] = $data['nombre'];
                $arreglo[$i]['id_estante'] = $data['lugar'];
                $i++;
            }
        }
        return $arreglo;
    }
}