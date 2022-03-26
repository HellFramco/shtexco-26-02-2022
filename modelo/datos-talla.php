<?php
class talla
{

    public function mostrar_talla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameTal FROM talla";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameTal'];
 
                $i++;
            }
        }
        return $arreglo;
    }

    public function mostrar_talla_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameApp, valueApp, status FROM talla";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameApp'];
            $arreglo[$i]['valueApp'] = $data['valueApp'];
            $arreglo[$i]['status'] = $data['status'];
 
 
                $i++;
            }
        }
        return $arreglo;
    }

}
