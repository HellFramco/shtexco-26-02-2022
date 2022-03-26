<?php
class misTransportadoras
{

    public function viewTransportadoras()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM transportadoras ORDER BY id_transportadora ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_transportadora'] = $data['id_transportadora'];
                $arreglo[$i]['nombre_transportadora'] = $data['nombre_transportadora'];
                
                $i++;
            }
        }
        return $arreglo;
    }

    public function viewTransportadora($id)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * 
                    FROM transportadoras 
                    WHERE id_transportadora = ? 
                    ORDER BY id_transportadora ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id));
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_transportadora'] = $data['id_transportadora'];
                $arreglo[$i]['nombre_transportadora'] = $data['nombre_transportadora'];
                $i++;
            }
        }
        return $arreglo;
    }
}
