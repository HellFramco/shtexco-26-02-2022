<?php
class categoria
{

    public function mostrar_categoria()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameCat from categorias";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameCat'];
                $i++;
            }
        }
        return $arreglo;
    }


  public function mostrar_categoria_tabla()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id, nameCat, parentCat , dateInCat,  status from categorias";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                
            $arreglo[$i]['id'] = $data['id'];
            $arreglo[$i]['nombre'] = $data['nameCat'];
            $arreglo[$i]['parentCat'] = $data['parentCat'];
            $arreglo[$i]['dateInCat'] = $data['dateInCat'];
            $arreglo[$i]['status'] = $data['status'];
           
                $i++;
            }
        }
        return $arreglo;
    }

}
