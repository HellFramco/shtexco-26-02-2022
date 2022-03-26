<?php
class marca
{

    public function mostrar_marca()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameMar FROM marcas";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameMar'];

                $i++;
            }
        }
        return $arreglo;
    }

     public function mostrar_marca_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameCat, dateInCat , status FROM marcas";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameCat'];
            $arreglo[$i]['dateInCat'] = $data['dateInCat'];
            $arreglo[$i]['status'] = $data['status'];

                $i++;
            }
        }
        return $arreglo;
    }


    
}
