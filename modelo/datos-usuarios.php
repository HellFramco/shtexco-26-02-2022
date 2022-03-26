<?php
class misUsuarios
{
    // Mostrar todos los usuarios
    public function viewUsuarios()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM user_secure ORDER BY mmb ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                $arreglo[$i]['mmb'] = $data['mmb'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['typeUser'] = $data['typeUser'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Buscar un usuario
    public function viewUsuario($usu)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM user_secure WHERE id = '" . $usu . "'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                $arreglo[$i]['mmb'] = $data['mmb'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['typeUser'] = $data['typeUser'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Mostrar
    public function viewUsuariosVend()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                     FROM user_secure 
                     WHERE (typeUser=1 OR typeUser=2 OR typeUser=3) 
                     ORDER BY nombre ASC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id'];
                $arreglo[$i]['identificacion'] = $data['identificacion'];
                $arreglo[$i]['mmb'] = $data['mmb'];
                $arreglo[$i]['nombre'] = $data['nombre'];
                $arreglo[$i]['typeUser'] = $data['typeUser'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }
    
        public function viewUsuarioresponsable($usu)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM user_secure WHERE id = '" . $usu . "'";
     
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        $usuario="";
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $usuario= $data['mmb'];
               
            }
        }
        return $usuario;
    }

    public function viewUsuariosMark()
    {
        require_once("db.php");
        $conexion = new Conexion();
        
        $consulta = "SELECT * FROM user_secure ORDER BY mmb ASC;";
         $modules = $conexion->query($consulta)->fetchAll();
         return $modules;
    }
}
