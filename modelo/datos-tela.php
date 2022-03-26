<?php
class tela
{

    public function mostrar_tela()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = " SELECT id, nameTel FROM telas";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameTel'];
 
           
                $i++;
            }
        }
        return $arreglo;
    }



    public function mostrar_tela_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = " SELECT id, nameApp,  dateIn, status FROM telas";
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
