<?php
class misVendedores
{

    public function viewVendedores()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM user_secure ORDER BY id DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['name'] = $data['name'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                
                $i++;
            }
        }
        return $arreglo;
    }

    public function viewMiVendedor($id)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM user_secure where id = ? ORDER BY id DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute(array($id));
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['name'] = $data['name'];
                
                $i++;
            }
        }
        return $arreglo;
    }
}
