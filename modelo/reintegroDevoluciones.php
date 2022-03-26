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


    switch ($_POST['accion']) {
    	case 'reintegroDevoluciones':
    		$id_inventario = $_POST['id_inventario'];
		    

		  	$consultaTraeInventario = "SELECT * FROM inventarios_productos WHERE id_inventario = ?";
			$trae = $conexion->prepare($consultaTraeInventario);
			$trae->execute(array($id_inventario));
			
			foreach ($trae as $inventario) {
				echo $talla6 = $inventario['talla6'] + $_POST['talla6'];
				echo "<br>";
				echo $talla8 = $inventario['talla8'] + $_POST['talla8'];
				echo "<br>";
				echo $talla10 = $inventario['talla10'] + $_POST['talla10'];
				echo "<br>";
				echo $talla12 = $inventario['talla12'] + $_POST['talla12'];
				echo "<br>";
				echo $talla14 = $inventario['talla14'] + $_POST['talla14'];
				echo "<br>";
				echo $talla16 = $inventario['talla16'] + $_POST['talla16'];
				echo "<br>";
				echo $talla18 = $inventario['talla18'] + $_POST['talla18'];
				echo "<br>";
				echo $talla20 = $inventario['talla20'] + $_POST['talla20'];
				echo "<br>";
				echo $talla26 = $inventario['talla26'] + $_POST['talla26'];
				echo "<br>";
				echo $talla28 = $inventario['talla28'] + $_POST['talla28'];
				echo "<br>";
				echo $talla30 = $inventario['talla30'] + $_POST['talla30'];
				echo "<br>";
				echo $talla32 = $inventario['talla32'] + $_POST['talla32'];
				echo "<br>";
				echo $talla34 = $inventario['talla34'] + $_POST['talla34'];
				echo "<br>";
				echo $talla36 = $inventario['talla36'] + $_POST['talla36'];
				echo "<br>";
				echo $talla38 = $inventario['talla38'] + $_POST['talla38'];
				echo "<br>";
				echo $tallas = $inventario['tallas'] + $_POST['tallas'];
				echo "<br>";
				echo $tallam = $inventario['tallam'] + $_POST['tallam'];
				echo "<br>";
				echo $tallal = $inventario['tallal'] + $_POST['tallal'];
				echo "<br>";
				echo $tallaxl = $inventario['tallaxl'] + $_POST['tallaxl'];
				echo "<br>";
				echo $tallau = $inventario['tallau'] + $_POST['tallau'];
				echo "<br>";
				echo $tallaest = $inventario['tallaest'] + $_POST['tallaest'];
				echo "<br>";
			}

			$consultaActualizaInventario = "UPDATE inventarios_productos SET talla6 = ?, talla8 = ?, talla10 = ?, talla12 = ?, talla14 = ?, talla16 = ?, talla18 = ?, talla20 = ?, talla26 = ?, talla28 = ?, talla30 = ?, talla32 = ?, talla34 = ?, talla36 = ?, talla38 = ?, tallas = ?, tallam = ?, tallal = ?, tallaxl = ?, tallau = ?, tallaest = ?  WHERE id_inventario = ?";
			$trae = $conexion->prepare($consultaActualizaInventario);
			$trae->execute(array($talla6, $talla8, $talla10, $talla12, $talla14, $talla16, $talla18, $talla20, $talla26, $talla28, $talla30, $talla32, $talla34, $talla36, $talla38, $tallas, $tallam, $tallal, $tallaxl, $tallau, $tallaest, $id_inventario));
			
				if ($trae) {
					echo "
					<script>
						alert('Las prendas han sido Reintegradas.');
						close();
					</script>
					";
				}
				else{
					echo "
					<script>
						alert('Las prendas no han sido Reintegradas.');
						close();
					</script>
					";
				}

		    
		   default:
    		# code...
    		break; 	
			    
			    
		    

	}
		   
		   
    	
    		
    

    


?>

