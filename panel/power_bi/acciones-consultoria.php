<?php  
	if ($_POST) {

            $fecha = date('Y-m-d');
            require_once "../../modelo/db.php";
            $conexion = new Conexion();
            $descripcion = $_POST['marca']." ".$_POST['categoria']." ".$_POST['silueta']." REF: ".$_POST['referencia'];

            if ($_POST['accion'] == 'actualizaReferencia') {
                $consultaU = "UPDATE inventarios_productos SET color = '".$_POST['color']."', marca = '".$_POST['marca']."', silueta = '".$_POST['silueta']."', categoria = '".$_POST['categoria']."', impresion_codigo_barras = '".$_POST['impresion_codigo_barras']."', ruta = '".$_POST['ruta']."', descripcion='".$descripcion."' WHERE id_inventario = ".$_POST['id_inventario'];
                $res = $conexion->query($consultaU);

                if($res){
                	header('location:inventario_real.php?ejecucion=exitosa');
                }
                

            }
           
            else{
                echo "No se pudo editar.";
            }

	}
?>