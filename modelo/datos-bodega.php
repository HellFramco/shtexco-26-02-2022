<?php
class bodega
{

    public function mostrar_bodega()
    {
    }

    public function mostrar_bodega_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM bodegas";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id_bodega'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['lugar'] = $data['lugar'];
                $arreglo[$i]['observacion'] = $data['observacion'];


                $i++;
            }
        }
        return $arreglo;
    }
}
