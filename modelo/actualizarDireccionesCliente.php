<?php 
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');
require_once 'datos-productos.php';
$fecha = date('Y-m-d', time());  

    switch ($_POST['accion']) {
    	case 'editarDireccionCliente':
    		
		    
		  	$sql = "UPDATE clientes_direccion SET direccion = '".$_POST['direccion']."', pais = '".$_POST['pais']."', departamento = '".$_POST['departamento']."', ciudad = '".$_POST['ciudad']."' WHERE id = ".$_POST['id_direccion'];
			$reg = $conexion->query($sql);
				
			echo "
			<script>
				alert('Direccion Actualizada.');
				location.href = ('../panel/modal/modalDireccionesClientes.php?cliente=".$_POST['id_cliente']."');
			</script>
			";
		    
		   default:
    		# code...
    		break; 	
			    
			    
		    

	}
		   
		   
    	
    		
    

    


?>

