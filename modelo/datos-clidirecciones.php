<?php
class misCliDirecciones
{

    public function viewCliDirecciones($id_cliente)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM clientes_direccion WHERE id_cliente ='" . $id_cliente . "' ORDER BY id DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['id_cliente'] = $data['id_cliente'];
                $arreglo[$i]['direccion'] = $data['direccion'];
                $arreglo[$i]['telefono'] = $data['telefono'];
                $arreglo[$i]['email'] = $data['email'];
                $arreglo[$i]['pais'] = $data['pais'];
                $arreglo[$i]['departamento'] = $data['departamento'];
                $arreglo[$i]['ciudad'] = $data['ciudad'];
                $arreglo[$i]['observacion'] = $data['observacion'];
                $i++;
            }
        }
        return $arreglo;
    }
}
