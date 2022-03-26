<?php 
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');
require_once 'datos-productos.php';
$fecha = date('Y-m-d', time());  

    switch ($_GET['accion']) {
    	case 'verificarImpresion':
    		
		    
		    $sqlDel= "DELETE FROM codigos_barras WHERE id_inventario = ".$_GET['id_inventario'];
			$regD = $conexion->query($sqlDel);

		  	$sql = "UPDATE inventarios_productos SET impresion_codigo_barras = 'SI' WHERE id_inventario = ".$_GET['id_inventario'];
			$reg = $conexion->query($sql);

			
				
			if ($reg && $regD) {
				echo "
				<script>
					alert('se comprobo la impresion correctamente.');
					window.close();
				</script>
				";
			}
		    
		   default:
    		# code...
    		break; 	
			    
			    
		    

	}
		   
		   
    	
    		
    

    


?>

