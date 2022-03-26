<?php 
session_start();
require_once "../modelo/db.php";

$conexion = new Conexion();

$id_orden= $_POST['id_venta'];
//$observacion = $_POST['observacion'];
$observacion ="";


// $id_orden = "86";

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 
// Output: iNCHNGzByPjhApvn7XBD
$codigo = generate_string($permitted_chars, 10);

if (isset($_FILES['imagen'])){
	
	//Comprobamos si el fichero es una imagen
	if ($_FILES['imagen']['type']=='image/png' || $_FILES['imagen']['type']=='image/jpeg'){
	
	//Subimos el fichero al servidor



    $fecha = date("Y-m-d");
	move_uploaded_file($_FILES["imagen"]["tmp_name"], "comprobantes/".$id_orden."-".$codigo."-".$fecha.".jpg");

	$validar=true;


    $consulta2 = "INSERT INTO `imagenes_facturas`( `id_venta`, `img`) VALUES (".$id_orden.",'".$id_orden."-".$codigo."-".$fecha.".jpg"."')";

  
    
    $modules2 = $conexion->query($consulta2);


    $consulta3 = "UPDATE `ventas_globales` SET `Imagen_comprobante_pago`='si', `Fecha_pago_venta`='".$fecha."' WHERE id_venta=".$id_orden.";";

  
    
    $modules3 = $conexion->query($consulta3);


	} 
	else $validar=false;}


    if($_SESSION['typeUser']==2)
    {
    	echo "
          <script> 
              alert('Se ha Subido el comprobante'); 
              location.href = 'ventas-vendedor.php';
          </script>";
    }

    else if($_SESSION['typeUser']==1 || $_SESSION['typeUser']==7)
    {
    	echo "
          <script> 
              alert('Se ha Subido el comprobante'); 
              location.href = 'ventas.php';
          </script>";
    }


    
    


?>