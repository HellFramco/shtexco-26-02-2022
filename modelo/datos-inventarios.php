<?php 



 
		
		function cantidadTallas($ref, $talla){
			require_once "db.php";
			$conexion = new Conexion();
			$consulta = "SELECT count(id_inventario) as conteoCantidadTalla FROM inventarios WHERE referencia = ? AND talla = ? AND estado = 'existencia'";
			$resultado = $conexion->prepare($consulta);
			$resultado->execute(array($ref, $talla));
				    
			
			foreach ($resultado as $key) {
				return $key['conteoCantidadTalla'];
			}
		}

		function aprobacionContraentrega($id_venta){
			$fecha = date('Y-m-d');
			require_once "db.php";
			$conexion = new Conexion();
			$consulta = "SELECT * FROM ventas_globales WHERE id_venta = ".$id_venta;
			$resultado = $conexion->query($consulta)->fetchAll();

				    
			
			foreach ($resultado as $key) {
				$transportadora = $key['transportadora'];
			}

			if ($transportadora == 'CONTRAENTREGA') {
				$consultaU = "UPDATE ventas_globales SET cartera_aprobo = 'SI', fecha_cartera_aprobo = '".$fecha."', estado = 'APROBO CARTERA' WHERE id_venta = ".$id_venta;
				$res = $conexion->query($consultaU);
			}
		}



?>

