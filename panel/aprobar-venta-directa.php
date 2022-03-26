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

if ($accion == "aprobarVentaDirecta") {

  require_once("../modelo/db.php");
  $fecha = date('Y-m-d');    
  
  $consultaAprobacionCartera = "SELECT * FROM ventas_globales WHERE id_venta = ".$_GET['id_venta'];
  $modulesAprobacionCartera = $conexion->query($consultaAprobacionCartera)->fetchAll();
        foreach($modulesAprobacionCartera as $dato){
            $carteraAprobo = $dato['cartera_aprobo'];
            $fechaCarteraAprobo = $dato['fecha_cartera_aprobo'];
            $estado = $dato['estado'];
        }

        if($estado == 'APROBO CARTERA'){
            echo "
                    <script>
                        alert('ESTA VENTA FUE APROBADA POR CARTERA EL DIA ".$fechaCarteraAprobo."');
                        location.href = 'ventas-por-aprobar.php';
                    </script>
                ";
        }

        else if($estado == 'INICIADA'){
            
            echo "
                    <script>
                        alert('lA VENTA NO HA SIDO APROBADA POR CLIENTE');
                        location.href = 'ventas-por-aprobar.php';
                    </script>
                ";
            
            
            
                
        }
        else if($estado == 'CANCELADO'){
            
          echo "
                  <script>
                      alert('NO PUEDES APROBAR ESTA VENTA, SE ENCUANTRA CANCELADA.');
                      location.href = 'ventas-por-aprobar.php';
                  </script>
              ";
          
          
          
              
      }

        else if($estado == 'APROBO CLIENTE'){
            $consulta = "UPDATE ventas_globales SET cartera_aprobo = 'SI', fecha_cartera_aprobo = '".$fecha."', estado = 'APROBO CARTERA' WHERE id_venta = ".$_GET['id_venta'];
            $modules = $conexion->query($consulta);

            $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'ah aprobado por cartera la orden de venta # '.$_GET['id_venta']);
            $mensaje = 'Se ha Aprobado por Cartera la orden de venta # '.$_GET['id_venta'].' Por el usuario: '.$_SESSION['mmb'];
            notificaMovimiento('soporteshtex@gmail.com','Notificacion Sistema SHTEX', $mensaje);
            echo "
                    <script>
                        alert('lA VENTA HA SIDO APROBADA POR CARTERA');
                        location.href = 'ventas-por-aprobar.php';
                    </script>
                ";
       
        }
            
        
        }



        
      

       

else{

}



// location.href = 'orden-nueva-venta.php?cliente=".$_GET['id_cliente']."&id_venta=".$_GET['id_venta']."&lista=true';