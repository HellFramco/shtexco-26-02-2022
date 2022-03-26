<?php 
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');
require_once 'datos-productos.php';
$fecha = date('Y-m-d', time());  

    switch ($_POST['accion']) {
    	case 'nuevo':
    		// agregar nuevo producto, datos de producto
		    $referencia = $_POST['referencia'];
		    $descripcion = $_POST['silueta'].' '. $_POST['marca']. ' REF:'. $_POST['referencia'];
		    $estado = 1;
		    @$marca = $_POST['marca'];
		    $silueta = $_POST['silueta'];
		    $categoria = $_POST['categoria'];
		    $tela = $_POST['tela'];
		    $precio = $_POST['precio'];
		    $proveedor = $_POST['proveedor'];
		    $genero = $_POST['genero'];
		    $color = $_POST['color'];
		    $bodega = $_POST['bodega'];
		    $ruta = $_POST['ruta'];
		    @$coleccion = $_POST['coleccion'];
		    if ($coleccion == '') {
		    	$coleccion = 'SIN COLECCION';
		    }
		    if ($marca == '') {
		    	$marca = 'SIN MARCA';
		    }
		    $tipo_inventario = $_POST['tipo_inventario'];

		    if ($referencia == '') {
		    	
		    }
		    else
		    {
		    	$sqlRef = "SELECT * FROM productos WHERE referencia = ".$referencia;
				@$regRef = $conexion->query($sqlRef)->fetchAll();
			    
			    if ($regRef) {
			    	foreach ($regRef as $key) {
			    		echo "<em style='color: red;'>La Referencia: ".$referencia." ya existe</em>";
			    	}
			    }
			    else
			    {
			    	$url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
			    	echo "<h4 class='btn btn-success'><a href=''>Creado, click para actualizar</a></h4>";

			    }
		    }

		    
		    $sql = "INSERT INTO productos ( referencia,descripcion,estado,marca,silueta,tela,proveedor,categoria,precio,genero,color,coleccion,tipo_inventario,bodega,ruta )
		            VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,? )";
			$reg = $conexion->prepare($sql);
		    $reg->execute(array($referencia, $descripcion, $estado, $marca, $silueta, $tela, $proveedor, $categoria, $precio, $genero,$color,$coleccion,$tipo_inventario,$bodega,$ruta));

		    
    		break;

    		

    		case 'campos_generados':
    		// agregar nuevo producto, datos de producto
		    if ($_POST['genero'] == 'INFERIOR DAMA') { $genero = 1; echo '<input type="hidden" id="tipo_inventario" name="tipo_inventario" value="JEANS">';}
		    else if ($_POST['genero'] == 'SUPERIOR DAMA') { $genero = 2; echo '<input type="hidden" id="tipo_inventario" name="tipo_inventario" value="TEJIDO PLANO"> <input type="hidden" id="marca" name="marca" value="DRABBA">';}
		    else if ($_POST['genero'] == 'INFERIOR CABALLERO') { $genero = 3; echo '<input type="hidden" id="tipo_inventario" name="tipo_inventario" value="JEANS">';}



		    	// echo $genero;
		    	// consulta para traer las siluetas correspondientes al genero
			    $consulta = "SELECT * FROM siluetas WHERE genero = ".$genero." ORDER BY nameSil asc";
		        $modulesSilueta = $conexion->query($consulta)->fetchAll();
		        
		        
		        if ($modulesSilueta) {
		        echo '
		        <div class="form-group col-md-12">
		        <label for="">Silueta <strong id="val_silueta"></strong></label>
		        <select id="silueta" class="form-control" name="silueta" required="">
		        		<option value="" disabled="">SELECCIONE</option>';
		            foreach ($modulesSilueta as $keySil) {
		                echo "<option value='". $keySil['nameSil'] ."'>". $keySil['nameSil'] ."</option>";
		            }
		          echo '</select>
		          </div>';
		        }


		        // consulta para traer las marcas correspondientes al genero
			    $consulta = "SELECT * FROM marcas WHERE genero = ".$genero." ORDER BY nameMar asc";
		        $modulesMarca = $conexion->query($consulta)->fetchAll();
		        
		        
		        if ($modulesMarca) {
		        echo '
		        <div class="form-group col-md-12">
		        <label for="">Marca <strong id="val_marca"></strong></label>
		        <select id="marca" class="form-control" name="marca" required="">
		        		<option value="" disabled="">SELECCIONE</option>';
		            foreach ($modulesMarca as $keyMar) {
		                echo "<option value='". $keyMar['nameMar'] ."'>". $keyMar['nameMar'] ."</option>";
		            }
		          echo '</select>
		          </div>';
		        }

		        // consulta para traer las coleeciones correspondientes al genero
			    $consulta = "SELECT * FROM colecciones WHERE genero = ".$genero." ORDER BY nombre_coleccion asc";
		        $modulesColeccion = $conexion->query($consulta)->fetchAll();
		        
		        
		        if ($modulesColeccion) {
		        echo '
		        <div class="form-group col-md-12">
		        <label for="">Coleccion <strong id="val_coleccion"></strong></label>
		        <select id="coleccion" class="form-control" name="coleccion" required="">
		        		<option value="" disabled="">SELECCIONE</option>';
		            foreach ($modulesColeccion as $keyColeccion) {
		                echo "<option value='". $keyColeccion['nombre_coleccion'] ."'>". $keyColeccion['nombre_coleccion'] ."</option>";
		            }
		          echo '</select>
		          </div>';
		        }

		        // consulta para traer todos los colores
			    $consulta = "SELECT * FROM color ORDER BY nameCol asc";
		        $modulesColor = $conexion->query($consulta)->fetchAll();
		        
		        
		        if ($modulesColor) {
		        echo '
		        <div class="form-group col-md-12">
		        <label for="">Color <strong id="val_color"></strong></label>
		        <select id="color" class="form-control" name="color" required="">
		        		<option value="" disabled="">SELECCIONE</option>';
		            foreach ($modulesColor as $keyColor) {
		                echo "<option value='". $keyColor['nameCol'] ."'>". $keyColor['nameCol'] ."</option>";
		            }
		          echo '</select>
		          </div>';
		        }

    		break;

    		case 'campos_generados_bodega':
    		// agregar nuevo producto, datos de producto
    		if ($_POST['bodega'] == '') {
    			$bodega = 0;
    			echo "<em style='color:crimson;'>debes de seleccionar una bodega existente.</em>";
    		}
		    if ($_POST['bodega'] == 'BODEGA BOGOTA') { $bodega = 1; }
		    else if ($_POST['bodega'] == 'BODEGA CUCUTA') { $bodega = 2; }
		    



		    	// echo $genero;
		    	// consulta para traer las siluetas correspondientes al genero
			    $consulta = "SELECT * FROM bodega_estante WHERE bodega_id = ".$bodega." ORDER BY estante asc";
		        $modulesBodega = $conexion->query($consulta)->fetchAll();
		        
		        
		        if ($modulesBodega) {
		        echo '
		        <div class="form-group col-md-12">
		        <label for="">Ruta <strong id="val_silueta"></strong></label>
		        <select id="ruta" class="form-control" name="ruta" required="">
		        		<option value="" disabled="">SELECCIONE</option>';
		            foreach ($modulesBodega as $keyBod) {
		                echo "<option value='". $keyBod['estante'] ."'>". $keyBod['estante'] ."</option>";
		            }
		          echo '</select>
		          </div>';
		        }


		        
		        

    		break;

    		
    	
    		default:
    		# code...
    		break;
    }

    


?>

