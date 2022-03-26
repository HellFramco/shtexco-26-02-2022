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

if ($accion == "nuevaVenta") {

    require_once("../modelo/db.php");
        $fecha = date('Y-m-d H:i:s');
        $fechaVencimiento = strtotime($fecha."+ 10 days");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "INSERT INTO ventas_globales(id_cliente, cliente, direccion, transportadora, medio_pago, fecha_venta, fecha_vencimiento, estado, usuario, id_usuario) VALUES(".$_POST['id_cliente'].",'".$_POST['cliente']."','".$_POST['direccion']."','".$_POST['transportadora']."','".$_POST['metodo_pago']."','".$fecha."','".$fechaVencimiento."', 'INICIADA','".$_SESSION['nombre']."','".$_SESSION['id']."')";
        $modules = $conexion->query($consulta);
        
        $ultimoID = $conexion->lastInsertId();

        $consultaCliente = "SELECT id FROM clientes WHERE nombre_cli = '".$_POST['cliente']."' limit 1";
        $cliente = $conexion->query($consultaCliente)->fetchAll();
        foreach ($cliente as $keyCliente) {
            $idCliente = $keyCliente['id'];
        }
        
        
        if ($modules) {
            $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'inicio la orden de venta # '.$ultimoID);
            notificaMovimiento($correoEnvio,'Notificacion Sistema SHTEX', 'Se ha Iniciado una nueva orden de venta # '.$ultimoID.' para el Cliente '.$_POST['cliente'].' Por el usuario: '.$_SESSION['mmb']);
            echo "
                <script>
                    alert('Orden Iniciada');
                    location.href = 'orden-nueva-venta-2.php?cliente=".$idCliente."&id_venta=".$ultimoID."';
                </script>
            ";
        }
        else{
            echo "
                
            ";
        }



        
      

       }

       else if($accion == "editarDatosVenta"){
        echo "123";
       }

else{

}