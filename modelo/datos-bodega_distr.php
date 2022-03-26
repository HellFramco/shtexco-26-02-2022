<?php
class bodega_distr
{

    public function mostrar_bodega_distr()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id_bod_distribucion, estante FROM bodega_distr";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id_bod_distribucion'];
                $arreglo[$i]['nombre'] = $data['estante'];
                $i++;
            }
        }
        return $arreglo;
    }


    public function mostrar_bodega_distr_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id_bod_distribucion, bodegas.nombre as nombre, estante, bodega_distr.observacion as obser from bodega_distr, bodegas WHERE bodega_distr.id_bodega = bodegas.id_bodega";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id_bod_distribucion'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['ubicacion'] = $data['estante'];
                $arreglo[$i]['observacion'] = $data['obser'];

                $i++;
            }
        }
        return $arreglo;
    }
}
