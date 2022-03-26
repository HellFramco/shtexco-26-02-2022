<?php
session_start();
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/acciones-usuarios-logs.php';
require_once '../modelo/notificacionCorreo.php';
$conexion = new Conexion();
$usuario_logs = new usuario_logs();
date_default_timezone_set('America/Bogota');



$accion = $_GET['accion'];

if ($accion == "eliminarVenta") { 
  
  $consultaAprobacionCartera = "DELETE FROM ventas_globales WHERE id_venta = ".$_GET['id_venta'];
  $modulesAprobacionCartera = $conexion->query($consultaAprobacionCartera);

        

        if($modulesAprobacionCartera){
          echo "
          <script>
            alert('La orden iniciada ha sido eliminada');
            location.href = 'ventas.php';
          </script>
          ";
        }


        
      
}
       

else{

}



// location.href = 'orden-nueva-venta.php?cliente=".$_GET['id_cliente']."&id_venta=".$_GET['id_venta']."&lista=true';