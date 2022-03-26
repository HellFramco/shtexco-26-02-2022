<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<?php
session_start();
require_once "db.php";
require 'datosInventarios.php';
$inventarios = new Inventarios();
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_POST['accion'];

if ($accion == "editarProducto") {
    
    if($_POST['silueta'] == ''){ $descripcion = $_POST['categoria']." ".$_POST['marca']." REF: ".$_POST['referencia']; }
    else if($_POST['silueta'] != ''){ $descripcion = $_POST['silueta']." ".$_POST['marca']." REF: ".$_POST['referencia']; }
    
    $sql = "UPDATE inventarios_productos SET 
                                        descripcion = '".$descripcion."',
                                        referencia = '".$_POST['referencia']."',
                                        tipo = '".$_POST['tipo']."',
                                        coleccion = '".$_POST['coleccion']."',
                                        precio = '".$_POST['precio_detal']."',
                                        precio_mayor = '".$_POST['precio_mayor']."',
                                        silueta = '".$_POST['silueta']."',
                                        categoria = '".$_POST['categoria']."',
                                        color = '".$_POST['color']."', 
                                        genero = '".$_POST['genero']."', 
                                        marca = '".$_POST['marca']."',
                                        tela = '".$_POST['tela']."',
                                        proveedor = '".$_POST['proveedor']."',
                                        bodega = '".$_POST['bodega']."',
                                        ruta = '".$_POST['ruta']."' WHERE id_inventario = ".$_POST['id_inventario'];
	$reg = $conexion->query($sql);
        
    $reg = $conexion->query($sql);
    if ($reg) {
        echo "
        <script>
            alert('Actualizado');
            window.close();
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

