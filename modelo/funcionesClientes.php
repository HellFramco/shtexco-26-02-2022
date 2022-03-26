<?php

class Clientes
{
    // Mostrar todos los clientes que me pertenecen
    public function misClientes($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE usuarioId = ".$id."
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // Mostrar todos los clientes
    public function todosClientes()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE tipo_tercero = 'cliente' 
                    ORDER BY id asc";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // Mostrar todos los clientes con un limite
    public function todosClienteLimitados($tipo, $limite)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE tipo_tercero = '".$tipo."'
                    ORDER BY id asc limit ".$limite;
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // mostrar cliente buscado
    public function clienteBuscado($cliente)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE identificacion_cli like '%".$cliente."%' || nombre_cli like '%".$cliente."%'
                    ORDER BY id asc";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    // Mostrar un cliente definido
    public function traeTelefonoCliente($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE id = ".$id."
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['telefono'];
        }
    }

    // Mostrar un cliente definido
    public function clienteSeleccionado($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE id = ".$id."
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['nombre_cli'];
        }
    }

    public function buscar_cliente($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE id = ".$id."
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
       
       return $modules;
        // foreach ($modules as $key) {
        //    return $key['nombre_cli'];
       // }
    }

    // Mostrar un cliente definido
    public function direccionCliente($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes_direccion WHERE id_cliente = ".$id."
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar un select transportadoras
    public function seleccionarTransportadora()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM transportadoras";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }
    // Mostrar un select con metodos de pagos
    public function seleccionarMetodoPago()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM metodos_pagos";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar un select con paises
    public function seleccionarPais()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM paises ORDER BY nombre asc";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar un select con departamentos
    public function seleccionarDepartamento()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM departamentos ORDER BY departamento asc";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar un select con ciudades
    public function seleccionarCiudad()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM ciudades ORDER BY ciudad asc";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar id Cliente
    public function seleccionarIdCliente($cliente)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE nombre_cli = '".$cliente."' limit 1";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar proveedores
    public function seleccionarTerceroPorTipo($tipo)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE tipo_tercero = '".$tipo."'";
       
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }

    // Mostrar un cliente definido
    public function datosClienteEspecifico($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes WHERE id = ".$id."
                    ORDER BY id DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
        
    }
    // Mostrar un direcciones de Cliente
    public function verDireccionesCliente($id)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM clientes_direccion WHERE id_cliente = ".$id."
                    ORDER BY id DESC";
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
