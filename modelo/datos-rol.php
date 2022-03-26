<?php
class misRoles
{
    // Buscar un rol
    public function viewRol($id_rol)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM rol WHERE id_rol = " . $id_rol;
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_rol'] = $data['id_rol'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar todos los roles
    public function viewRoles()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM rol";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id_rol'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $i++;
            }
        }
        return $arreglo;
    }
}
