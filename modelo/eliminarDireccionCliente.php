<?php 
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');
require_once 'datos-productos.php';
$fecha = date('Y-m-d', time());  

    switch ($_GET['accion']) {
    	case 'eliminarDireccionCliente':
    		
		    
		  	$sql = "DELETE FROM clientes_direccion WHERE id = ".$_GET['id_direccion'];
			$reg = $conexion->query($sql);
				
			echo "
			<script>
				alert('Direccion Eliminada.');
				location.href = ('../panel/modal/modalDireccionesClientes.php?cliente=".$_GET['id_cliente']."');
			</script>
			";
		    
		   default:
    		# code...
    		break; 	
			    
			    
		    

	}
		   
		   
    	
    		
    

    


?>

