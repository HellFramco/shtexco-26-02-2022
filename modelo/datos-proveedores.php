<?php
class proveedores
{

    public function mostrar_proveedores()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameProv FROM proveedores";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameProv'];
         
                $i++;
            }
        }
        return $arreglo;
    }



        public function mostrar_proveedores_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameApp , identificacion, contacto1, contacto2, dateIn,status  FROM proveedores";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameApp'];
            $arreglo[$i]['identificacion'] = $data['identificacion'];
            $arreglo[$i]['contacto1'] = $data['contacto1'];
            $arreglo[$i]['contacto2'] = $data['contacto2'];
            $arreglo[$i]['dateIn'] = $data['dateIn'];
            $arreglo[$i]['status'] = $data['status'];
         
                $i++;
            }
        }
        return $arreglo;
    }



}
