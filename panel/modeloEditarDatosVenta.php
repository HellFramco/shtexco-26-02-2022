<?php
session_start();
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/acciones-usuarios-logs.php';
require_once '../modelo/notificacionCorreo.php';
$conexion = new Conexion();
$usuario_logs = new usuario_logs();
date_default_timezone_set('America/Bogota');
$correoEnvio = 'soporteshtex@gmail.com';


$accion = $_POST['accion'];

if ($accion == "editarDatosVenta") {

	require_once("../modelo/db.php");
		$fecha = date('Y-m-d');
		$fechaVencimiento = strtotime($fecha."+ 10 days");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "UPDATE ventas_globales SET transportadora = '".$_POST['transportadora']."', medio_pago = '".$_POST['metodo_pago']."' WHERE id_venta = ".$_POST['venta'];
        $modules = $conexion->query($consulta);
        
        
                   

       

        
        if ($modules) {
            $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'Actualizo los datos de la orden # '.$_POST['venta']);
            notificaMovimiento($correoEnvio,'Notificacion Sistema SHTEX', 'Se ha Iniciado una nueva orden de venta # '.$ultimoID.' para el Cliente '.$_POST['cliente'].' Por el usuario: '.$_SESSION['mmb']);

            

            if ($_SESSION['typeUser'] == 1 or $_SESSION['typeUser'] == 8 or $_SESSION['typeUser'] == 7) {
                $link = 'ventas.php';
            }
            else if($_SESSION['typeUser'] == 2){
                    
                $link = 'ventas-vendedor.php';
            }
            echo "
                <script>
                    alert('Datos de La orden Actualizados');
                    location.href = '".$link."';
                </script>
            ";
        }
        else{
        	echo "
        		
        	";
        }



        
      

       }

       if ($accion == "editarDireccionVenta") {

    require_once("../modelo/db.php");
        $fecha = date('Y-m-d');
        $fechaVencimiento = strtotime($fecha."+ 10 days");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "UPDATE ventas_globales SET direccion = '".$_POST['direccion']."' WHERE id_venta = ".$_POST['venta'];
        $modules = $conexion->query($consulta);
        
       

        
        if ($modules) {
            $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'Actualizo la direccion de la orden # '.$_POST['venta']);
            
            if ($_SESSION['typeUser'] == 1 or $_SESSION['typeUser'] == 8 or $_SESSION['typeUser'] == 7) {
                $link = 'ventas.php';
            }
            else if($_SESSION['typeUser'] == 2){
                $link = 'ventas-vendedor.php';
            }
            echo "
                <script>
                    alert('Datos de La orden Actualizados');
                    location.href = '".$link."';
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