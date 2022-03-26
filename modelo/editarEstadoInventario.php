<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<?php
session_start();
require_once "db.php";
require 'datosInventarios.php';
$inventarios = new Inventarios();
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_GET['accion'];

if ($accion == "editarEstadoInventario") {
    
    
    
    $sql = "UPDATE inventarios_productos SET estado = 'existencia' WHERE id_inventario = ".$_GET['id_inventario'];
	$reg = $conexion->query($sql);
        
    $reg = $conexion->query($sql);
    if ($reg) {
        echo "
        <script>
            alert('inventario Confirmado por Bodega');
            window.history.back();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No Confirmado.');
                
            </script>
        ";
    }
    
}

