<?php 
session_start();
require_once "db.php";
require_once "notificacionCorreo.php";
require_once "funcionesClientes.php";
$clientes = new Clientes();
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');
require_once 'datos-productos.php';
$fecha = date('Y-m-d', time());  
$correoEnvio = 'soporteshtex@gmail.com';

    switch ($_POST['accion']) {
    	case 'nuevaDireccionCliente':
    		
		    
		  	$sql = "INSERT INTO clientes_direccion(id_cliente, direccion, pais, departamento, ciudad)VALUES(".$_POST['id_cliente'].", '".$_POST['direccion']."', '".$_POST['pais']."', '".$_POST['departamento']."', '".$_POST['ciudad']."')";
			$reg = $conexion->query($sql);
			notificaMovimiento($correoEnvio,'Notificacion Sistema SHTEX', 'Se ha Registrado una nueva Sucursal para el Cliente '.$clientes->clienteSeleccionado($_POST['id_cliente']).' Por el usuario: '.$_SESSION['mmb']);
			echo "
			<script>
				alert('Direccion agregada al cliente.');
				location.href = ('../panel/modal/modalDireccionesClientes.php?cliente=".$_POST['id_cliente']."');
			</script>
			";
		    
		   default:
    		# code...
    		break; 	
			    
			    
		    

	}
		   
		   
    	
    		
    

    


?>

