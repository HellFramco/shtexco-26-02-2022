<?php
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];

if ($accion == "asignaProductos") {

  require_once("../modelo/db.php");
  var_dump($_POST);
    // $fecha = date('Y-m-d');
    // $fechaVencimiento = strtotime($fecha."+ 10 days");
    //     $conexion = new Conexion();
    //     $arreglo = array();
    //     $i = 0;
    //     $consulta = "INSERT INTO lista_productos_ventas(talla6, id_venta, id_inventario) VALUES('".$_POST['talla6']."', ".$_POST['id_venta'].", ".$_POST['id_inventario'].")";
    //     $modules = $conexion->query($consulta);
        
        
    //     if ($modules) {
    //         echo "
    //             <script>
    //                 alert('producto agregado');
                    
    //             </script>
    //         ";
    //     }
    //     else{
    //       echo "
            
    //       ";
    //     }



        
      

       }

else{

}