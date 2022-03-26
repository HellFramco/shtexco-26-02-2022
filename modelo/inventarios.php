<?php 
session_start();
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');

$fecha = date('Y-m-d', time());  

    switch ($_POST['accion']) {
    	case 'nuevo':
    		
    		// echo $_POST['referencia'];
    		// echo $_POST['marca'];

		    $referencia = $_POST['referencia'];
		    $marca = $_POST['marca'];
		    $silueta = $_POST['silueta'];
		       $tela = $_POST['tela'];
		    $proveedor = $_POST['proveedor'];
		    $categoria = $_POST['categoria'];
		    $talla = $_POST['talla'];
		    $color = $_POST['color'];
		    $precio = $_POST['precio'];
		    $cantidad = $_POST['cantidad'];
		    $genero = $_POST['genero'];
		    $coleccion = $_POST['coleccion'];
		    $tipo_inventario = $_POST['tipo_inventario'];
		    $bodega = $_POST['bodega'];
		    $ruta = $_POST['ruta'];
		    $codigo_barras = ''; 
		    $descripcion = $_POST['silueta'].' '. $_POST['marca']. ' REF:'. $_POST['referencia'];
		    $estado = 'existencia';
		    
			$sqlMarca = 'SELECT * FROM marcas WHERE nameMar = "'.$marca.'"';
			$consulta = $conexion->query($sqlMarca)->fetchAll();
			foreach ($consulta as $key) {
				$idMarca = $key['id'];
			}

			$sqlSilueta = 'SELECT * FROM siluetas WHERE nameSil = "'.$silueta.'"';
			$consulta = $conexion->query($sqlSilueta)->fetchAll();
			foreach ($consulta as $key) {
				$idSilueta = $key['id'];
			}

			$sqlTela = 'SELECT * FROM telas WHERE nameTel = "'.$tela.'"';
			$consulta = $conexion->query($sqlTela)->fetchAll();
			foreach ($consulta as $key) {
				$idTela = $key['id'];
			}

			$sqlProveedor = 'SELECT * FROM proveedores WHERE nameProv = "'.$proveedor.'"';
			$consulta = $conexion->query($sqlProveedor)->fetchAll();
			foreach ($consulta as $key) {
				$idProveedor = $key['id'];
			}

			$sqlCategoria = 'SELECT * FROM categorias WHERE nameCat = "'.$categoria.'"';
			$consulta = $conexion->query($sqlCategoria)->fetchAll();
			foreach ($consulta as $key) {
				$idCategoria = $key['id'];
			}

			$sqlTalla = 'SELECT * FROM talla WHERE valueApp = "'.$talla.'"';
			$consulta = $conexion->query($sqlTalla)->fetchAll();
			foreach ($consulta as $key) {
				$idTalla = $key['id'];
			}

			$sqlColor = 'SELECT * FROM color WHERE nameCol = "'.$color.'"';
			$consulta = $conexion->query($sqlColor)->fetchAll();
			foreach ($consulta as $key) {
				$idColor = $key['id'];
			}


			$sqlconteoInventario = 'SELECT max(id_inventario) as ultimoIdExistente FROM inventarios ;';
			$consulta = $conexion->query($sqlconteoInventario)->fetchAll();
			foreach ($consulta as $key) {
				$maximoIdExistente = $key['ultimoIdExistente'];
			}

			$codigo_barras = $referencia ."".$idMarca ."".$idSilueta ."".$idTela ."".$idProveedor ."".$idCategoria ."".$idTalla ."".$idColor;


			


		    if ($referencia == '' && $cantidad == '') {
		    	
		    }
		    else
		    {
		  
			    for ($i=1; $i <= $cantidad ; $i++) { 

			    	$maximoIdExistente = $maximoIdExistente + 1;

			    	$codigo_barras_consecutivo = $codigo_barras ."". $maximoIdExistente;
			    	$sql = "INSERT INTO inventarios ( referencia,descripcion,marca,silueta,tela,proveedor,categoria,talla,color,precio_unitario,estado,fecha,codigo_barras,genero,coleccion,tipo_inventario,bodega,ruta )
		            VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
					$reg = $conexion->prepare($sql);
				    $reg->execute(array($referencia, $descripcion, $marca, $silueta, $tela, $proveedor, $categoria, $talla, $color, $precio, $estado, $fecha, $codigo_barras_consecutivo,$genero,$coleccion,$tipo_inventario,$bodega,$ruta));
				    echo "<center>Agregado a inventario: ".$descripcion.", Talla: ". $talla .", Color: ". $color ." <img src='https://c.tenor.com/8KWBGNcD-zAAAAAC/loader.gif' width='20%' /> Y generando codigo de barras <br>".$codigo_barras_consecutivo."</center><br>";

			    	

			    }
		    	
			    
		    	
			    if ($i > $cantidad) {
			    	$valor = $precio * $cantidad;
			    	$sqlMovimiento = "INSERT INTO movimientos ( fecha_movimiento,id_inventario,tipo_movimiento,cantidad,valor,usuario,registro )
		            VALUES ( '".$fecha."',".$referencia.",1,".$cantidad.",".$valor.",'".$_SESSION["fotojp"]["nombre"]."','".$fecha."' )";
					$reg = $conexion->query($sqlMovimiento);
				    // $reg->execute(array('2021-12-12',1,1,100,10000,'juan','2020-12-12'));

				    // echo $fecha." <br>";
				    // echo $referencia." <br>";
				    // echo $cantidad." <br>";
				    // echo $precio." <br>";
				    // echo $_SESSION["fotojp"]["nombre"]." <br>";

			    	echo "
			    	<script>
			    		alert('Subida de Inventario para: ".$descripcion.", Talla: ". $talla .", Color: ". $color ." Ha terminado');
			    		setTimeout(() => {
						  	console.log('1 Segundo esperado')
						  	location.href = window.location;
						}, 1000);
			    	</script>
			    	";
			    }
		    }

		    
		 
		    
    		break;

    		
    	
    		default:
    		# code...
    		break;
    }

    


?>

