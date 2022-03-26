<?php
class silueta
{

    public function mostrar_silueta()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameSil FROM siluetas";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameSil'];
            
                $i++;
            }
        }
        return $arreglo;
    }


        public function mostrar_silueta_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameApp , dateIn , status FROM siluetas";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameApp'];
             $arreglo[$i]['dateIn'] = $data['dateIn'];
            $arreglo[$i]['status'] = $data['status'];
            
                $i++;
            }
        }
        return $arreglo;
    }


  
}
