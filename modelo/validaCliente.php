<?php 
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');
require_once 'datos-productos.php';
$fecha = date('Y-m-d', time());  

    switch ($_POST['accion']) {
    	case 'validar':
    		
		    if ($_POST['identificacion'] == '') {
		    	echo "<em style='color:crimson;'>Es obligatoria la identificacion.</em>";
		    }
		    else {
		    	$sql = "SELECT count(identificacion_cli) as conteo FROM clientes WHERE identificacion_cli = ".$_POST['identificacion'];
				$reg = $conexion->query($sql)->fetchAll();
				
			    foreach ($reg as $key) {
			    	if ($key['conteo'] > 0) {
			    		echo "<em style='color:crimson;'>Este Cliente ya existe,no Puede Agregarlo.</em>";
				    }
				    else
				    {
				    	echo "<em style='color:green;'>Este Cliente no existe, puede Agregarlo</em>
				    	";
				    	
				    }
			    }
		    }
		    
		    	
			    
			    
		    

		    
		   
		    
    		break;

    		

    		
    	
    		default:
    		# code...
    		break;
    }

    


?>

