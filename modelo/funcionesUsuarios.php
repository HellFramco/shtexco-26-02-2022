<?php

class Usuarios
{

    // ver usuarios
    public function verUsuarios()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM user_secure";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // Mostrar todos los clientes que me pertenecen
    public function verUsuariosPorRol($rol)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM user_secure WHERE typeUser = ".$rol;
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // traer las lineas que existen en la base de datos
    public function selectLineas()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM lineas ORDER BY id_linea asc";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    
    
}
