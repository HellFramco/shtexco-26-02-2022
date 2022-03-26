<?php
class estante
{

    public function mostrar_estante()
    {

    }


       public function mostrar_tabla_estante()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM bodega_estante";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id_bodega_estante'];
            $arreglo[$i]['nombre'] = $data['estante'];
              $arreglo[$i]['observacion'] = $data['observacion'];

 
                $i++;
            }
        }
        return $arreglo;
    }


}

