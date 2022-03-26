<center>
    <img src="../imagenes/preloader_emp.gif" alt="" style="text-aling:center; width: auto; background-repeat:no-repeat; background-position:center; background-attachment:fixed; ">
</center>
<?php
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_GET['accion'];

if ($accion == "eliminaProductosVentas") {

  require_once("../modelo/db.php");
        



        $consulta = "DELETE FROM lista_productos_ventas WHERE id_lista = ".$_GET['id_lista'];
        $modules = $conexion->query($consulta);
        // echo $consulta;
        
        
        if ($modules) {
            echo "
                <script>
                    // alert('producto Eliminado');
                    location.href = 'orden-nueva-venta-2.php?cliente=".$_GET['id_cliente']."&id_venta=".$_GET['id_venta']."&lista=true';
                </script>
            ";
        }
        else{
          echo "
            
          ";
        }



        
      

       }

else{

}