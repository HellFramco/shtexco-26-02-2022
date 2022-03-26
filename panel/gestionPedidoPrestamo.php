<?php
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/acciones-usuarios-logs.php';
$conexion = new Conexion();
$usuario_logs = new usuario_logs();
date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];


if ($accion == "generaPrestamo") {


    $id_inventario = $_POST['id_inventario'];

    




    descuenta($id_inventario, "", "ID_CLIENTE");





   // $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'genero la venta # '.$_POST["id_venta"][0]);
   // $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'aprobo por el cliente la venta # '.$_POST["id_venta"][0]);
}
elseif($accion == "generaReintegro"){



    $referencia = $_POST['referencia'];
    $id_reintegro = $_POST['id_reintegro'];
    

    devuelve($referencia, $id_reintegro, "");
  
//$usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'cancelo la venta # '.$_POST["id_venta"][0]);
}
else 
{

}

function descuenta($id_inventario, $dd , $id_cliente){



    require_once("../modelo/db.php");

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;

    $consultaInventario = "SELECT * FROM inventarios_productos WHERE id_inventario = " . $id_inventario;
    $modulesInventario = $conexion->query($consultaInventario)->fetchAll();

    foreach ($modulesInventario as $key) {
         
   
         $talla6Inventario = $key['talla6'];
     
         $talla8Inventario = $key['talla8'];
       
         $talla10Inventario = $key['talla10'];
     
         $talla12Inventario = $key['talla12'];
    
         $talla14Inventario = $key['talla14'];
    
         $talla16Inventario = $key['talla16'];
      
         $talla18Inventario = $key['talla18'];
     
         $talla20Inventario = $key['talla20'];
    
         $talla26Inventario = $key['talla26'];
     
         $talla28Inventario = $key['talla28'];
    
         $talla30Inventario = $key['talla30'];
   
         $talla32Inventario = $key['talla32'];
      
         $talla34Inventario = $key['talla34'];
     
         $talla36Inventario = $key['talla36'];
    
         $talla38Inventario = $key['talla38'];
      
         $tallasInventario = $key['tallas'];
    
         $tallamInventario = $key['tallam'];
      
         $tallalInventario = $key['tallal'];
    
         $tallaxlInventario = $key['tallaxl'];
    
         $tallauInventario = $key['tallau'];
   
         $tallaestInventario = $key['tallaest'];
     


        echo "
            <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        ";
    }


 
     $talla6InventarioVenta = $_POST['talla6'];

     $talla8InventarioVenta = $_POST['talla8'];

     $talla10InventarioVenta = $_POST['talla10'];
     
     $talla12InventarioVenta = $_POST['talla12'];
   
     $talla14InventarioVenta = $_POST['talla14'];
    
     $talla16InventarioVenta = $_POST['talla16'];
    
     $talla18InventarioVenta = $_POST['talla18'];
 
     $talla20InventarioVenta = $_POST['talla20'];
   
     $talla26InventarioVenta = $_POST['talla26'];
   
     $talla28InventarioVenta = $_POST['talla28'];
 
     $talla30InventarioVenta = $_POST['talla30'];
 
     $talla32InventarioVenta = $_POST['talla32'];
 
     $talla34InventarioVenta = $_POST['talla34'];
   
     $talla36InventarioVenta = $_POST['talla36'];
     
     $talla38InventarioVenta = $_POST['talla38'];
     
     $tallasInventarioVenta = $_POST['tallas'];
    
     $tallamInventarioVenta = $_POST['tallam'];
  
     $tallalInventarioVenta = $_POST['tallal'];
   
     $tallaxlInventarioVenta = $_POST['tallaxl'];
   
     $tallauInventarioVenta = $_POST['tallau'];
  
     $tallaestInventarioVenta = $_POST['tallaest'];
     



    if (
        $talla6Inventario >= $talla6InventarioVenta AND
        $talla8Inventario >= $talla8InventarioVenta AND
        $talla10Inventario >= $talla10InventarioVenta AND
        $talla12Inventario >= $talla12InventarioVenta AND
        $talla14Inventario >= $talla14InventarioVenta AND
        $talla16Inventario >= $talla16InventarioVenta AND
        $talla18Inventario >= $talla18InventarioVenta AND
        $talla20Inventario >= $talla20InventarioVenta AND
        $talla26Inventario >= $talla26InventarioVenta AND
        $talla28Inventario >= $talla28InventarioVenta AND
        $talla30Inventario >= $talla30InventarioVenta AND
        $talla32Inventario >= $talla32InventarioVenta AND
        $talla34Inventario >= $talla34InventarioVenta AND
        $talla36Inventario >= $talla36InventarioVenta AND
        $talla38Inventario >= $talla38InventarioVenta AND
        $tallasInventario >= $tallasInventarioVenta AND
        $tallamInventario >= $tallamInventarioVenta AND
        $tallalInventario >= $tallalInventarioVenta AND
        $tallaxlInventario >= $tallaxlInventarioVenta AND
        $tallauInventario >= $tallauInventarioVenta AND
        $tallaestInventario >= $tallaestInventarioVenta
        
        ) {
            

        $talla6Conbinada = $talla6Inventario - $talla6InventarioVenta;
        $talla8Conbinada = $talla8Inventario - $talla8InventarioVenta;
        $talla10Conbinada = $talla10Inventario - $talla10InventarioVenta;
        $talla12Conbinada = $talla12Inventario - $talla12InventarioVenta;
        $talla14Conbinada = $talla14Inventario - $talla14InventarioVenta;
        $talla16Conbinada = $talla16Inventario - $talla16InventarioVenta;
        $talla18Conbinada = $talla18Inventario - $talla18InventarioVenta;
        $talla20Conbinada = $talla20Inventario - $talla20InventarioVenta;
        $talla26Conbinada = $talla26Inventario - $talla26InventarioVenta;
        $talla28Conbinada = $talla28Inventario - $talla28InventarioVenta;
        $talla30Conbinada = $talla30Inventario - $talla30InventarioVenta;
        $talla32Conbinada = $talla32Inventario - $talla32InventarioVenta;
        $talla34Conbinada = $talla34Inventario - $talla34InventarioVenta;
        $talla36Conbinada = $talla36Inventario - $talla36InventarioVenta;
        $talla38Conbinada = $talla38Inventario - $talla38InventarioVenta;
        $tallasConbinada = $tallasInventario - $tallasInventarioVenta;
        $tallamConbinada = $tallamInventario - $tallamInventarioVenta;
        $tallalConbinada = $tallalInventario - $tallalInventarioVenta;
        $tallaxlConbinada = $tallaxlInventario - $tallaxlInventarioVenta;
        $tallauConbinada = $tallauInventario - $tallauInventarioVenta;
        $tallaestConbinada = $tallaestInventario - $tallaestInventarioVenta;
        echo "
        <script> console.log('En inventario queda: " . $talla6Conbinada . "'); </script>
        ";


        $consultaDecrementoInventario = "UPDATE inventarios_productos SET 
            talla6=" . $talla6Conbinada . ", 
            talla8=" . $talla8Conbinada . ", 
            talla10=" . $talla10Conbinada . ", 
            talla12=" . $talla12Conbinada . ", 
            talla14=" . $talla14Conbinada . ", 
            talla16=" . $talla16Conbinada . ", 
            talla18=" . $talla18Conbinada . ", 
            talla20=" . $talla20Conbinada . ", 
            talla26=" . $talla26Conbinada . ", 
            talla28=" . $talla28Conbinada . ", 
            talla30=" . $talla30Conbinada . ", 
            talla32=" . $talla32Conbinada . ", 
            talla34=" . $talla34Conbinada . ", 
            talla36=" . $talla36Conbinada . ", 
            talla38=" . $talla38Conbinada . ", 
            tallas=" . $tallasConbinada . ", 
            tallam=" . $tallamConbinada . ", 
            tallal=" . $tallalConbinada . ", 
            tallaxl=" . $tallaxlConbinada . ", 
            tallau=" . $tallauConbinada . ", 
            tallaest=" . $tallaestConbinada . "

           
            
            WHERE id_inventario=" . $id_inventario;


        $modulesDecrementoInventario = $conexion->query($consultaDecrementoInventario);

        $fecha = date("Y-m-d");
        echo $consultaDecrementoInventario;
        



        $responsable  = $_POST['responsable'];
        $estado = "prestado";



        $consulta = "  INSERT INTO `reintegro_inventarios`( `referencia`, `descripcion`, `marca`, `tipo`, `silueta`, `tela`, `categoria`, `genero`, `coleccion`, `bodega`, `ruta`, `color`, `proveedor`,
           `talla6`, `talla8`, `talla10`, `talla12`, `talla14`, `talla16`, `talla18`, `talla20`, `talla26`, `talla28`, `talla30`, `talla32`, `talla34`, `talla36`, `talla38`, `tallas`, `tallam`, `tallal`, 
           `tallaxl`, `tallau`, `tallaest`, `estado`, `responsable`, `fecha_reintegro`, `precio`, `descuento`, `id_usuario`, `verificado_bodega`, `observacion_inventario`, `reprogramacion`, `impresion_codigo_barras`)
            VALUES ('".$_POST['referencia']."', '".$_POST['descripcion']."', '".$_POST['marca']."', '".$_POST['tipo']."', '".$_POST['silueta']."', '".$_POST['tela']."', '".$_POST['categoria']."', '".$_POST['genero']."', '".$_POST['coleccion']."', '".$_POST['bodega']."',
            '".$_POST['ruta']."', '".$_POST['color']."', '".$_POST['proveedor']."', '".$_POST['talla6']."', '".$_POST['talla8']."', '".$_POST['talla10']."', '".$_POST['talla12']."', '".$_POST['talla14']."', '".$_POST['talla16']."', '".$_POST['talla18']."', '".$_POST['talla20']."', '".$_POST['talla26']."', '".$_POST['talla28']."', '".$_POST['talla30']."', '".$_POST['talla32']."', '".$_POST['talla34']."',
             '".$_POST['talla36']."', '".$_POST['talla38']."', '".$_POST['tallas']."', '".$_POST['tallam']."', '".$_POST['tallal']."', '".$_POST['tallaxl']."', '".$_POST['tallau']."', '".$_POST['tallaest']."', '".$estado."', '".$responsable."', '".$fecha."', '".$_POST['precio']."', '".$_POST['descuento']."', '".$_POST['id_usuario']."', 
             '".$_POST['verificado_bodega']."', '".$_POST['observacion_inventario']."', '".$_POST['reprogramacion']."', '".$_POST['impresion_codigo_barras']."')";



echo  "<br><br><br>".$consulta;

             $resultado = $conexion->query($consulta);










        echo "
            <script> 
              console.log('La prenda ha sido prestada'); 
          window.close();
            </script>";  
    }
    else{
        echo "
        <script> 
            console.log('La prenda ha sido devuelta'); 
          window.close();
        </script>";
        

    }



}





// ESTA FUNCION DEVUELVE LAS CANTIDADES EN EL INVENTARIO

function devuelve($referencia, $id_inventario, $id_cliente){



    require_once("../modelo/db.php");

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;

    $consultaInventario = "SELECT * FROM inventarios_productos WHERE referencia = '" . $referencia."'";
    $modulesInventario = $conexion->query($consultaInventario)->fetchAll();

    foreach ($modulesInventario as $key) {
     
    
         $talla6Inventario = $key['talla6'];
     
         $talla8Inventario = $key['talla8'];
     
         $talla10Inventario = $key['talla10'];
      
         $talla12Inventario = $key['talla12'];
  
         $talla14Inventario = $key['talla14'];
      
         $talla16Inventario = $key['talla16'];
    
         $talla18Inventario = $key['talla18'];
   
         $talla20Inventario = $key['talla20'];
  
         $talla26Inventario = $key['talla26'];
      
         $talla28Inventario = $key['talla28'];
       
         $talla30Inventario = $key['talla30'];
     
         $talla32Inventario = $key['talla32'];
      
         $talla34Inventario = $key['talla34'];
       
         $talla36Inventario = $key['talla36'];
    
         $talla38Inventario = $key['talla38'];
       
         $tallasInventario = $key['tallas'];
      
         $tallamInventario = $key['tallam'];
    
         $tallalInventario = $key['tallal'];
        
         $tallaxlInventario = $key['tallaxl'];
        
         $tallauInventario = $key['tallau'];
      
         $tallaestInventario = $key['tallaest'];
       


        echo "
            <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        ";
    }


    $consulta = "SELECT * FROM reintegro_inventarios WHERE  id_inventario=" . $id_inventario;
    $modules = $conexion->query($consulta)->fetchAll();

    foreach ($modules as $key) {
         "Productos en venta";
         
         $talla6InventarioVenta = $key['talla6'];
        
         $talla8InventarioVenta = $key['talla8'];
       
         $talla10InventarioVenta = $key['talla10'];
         
         $talla12InventarioVenta = $key['talla12'];
     
         $talla14InventarioVenta = $key['talla14'];
      
         $talla16InventarioVenta = $key['talla16'];
         
         $talla18InventarioVenta = $key['talla18'];
         
         $talla20InventarioVenta = $key['talla20'];
         
         $talla26InventarioVenta = $key['talla26'];
         
         $talla28InventarioVenta = $key['talla28'];
         
         $talla30InventarioVenta = $key['talla30'];
       
         $talla32InventarioVenta = $key['talla32'];
        
         $talla34InventarioVenta = $key['talla34'];
         
         $talla36InventarioVenta = $key['talla36'];
        
         $talla38InventarioVenta = $key['talla38'];
         
         $tallasInventarioVenta = $key['tallas'];
        
         $tallamInventarioVenta = $key['tallam'];
         
         $tallalInventarioVenta = $key['tallal'];
         
         $tallaxlInventarioVenta = $key['tallaxl'];
        
         $tallauInventarioVenta = $key['tallau'];
        
         $tallaestInventarioVenta = $key['tallaest'];
        

        echo "
        <script> console.log('cantidad Talla 6 en venta: " . $talla6InventarioVenta . "'); </script>
        ";
    }


            

        $talla6Conbinada = $talla6Inventario + $talla6InventarioVenta;
        $talla8Conbinada = $talla8Inventario + $talla8InventarioVenta;
        $talla10Conbinada = $talla10Inventario + $talla10InventarioVenta;
        $talla12Conbinada = $talla12Inventario + $talla12InventarioVenta;
        $talla14Conbinada = $talla14Inventario + $talla14InventarioVenta;
        $talla16Conbinada = $talla16Inventario + $talla16InventarioVenta;
        $talla18Conbinada = $talla18Inventario + $talla18InventarioVenta;
        $talla20Conbinada = $talla20Inventario + $talla20InventarioVenta;
        $talla26Conbinada = $talla26Inventario + $talla26InventarioVenta;
        $talla28Conbinada = $talla28Inventario + $talla28InventarioVenta;
        $talla30Conbinada = $talla30Inventario + $talla30InventarioVenta;
        $talla32Conbinada = $talla32Inventario + $talla32InventarioVenta;
        $talla34Conbinada = $talla34Inventario + $talla34InventarioVenta;
        $talla36Conbinada = $talla36Inventario + $talla36InventarioVenta;
        $talla38Conbinada = $talla38Inventario + $talla38InventarioVenta;
        $tallasConbinada = $tallasInventario + $tallasInventarioVenta;
        $tallamConbinada = $tallamInventario + $tallamInventarioVenta;
        $tallalConbinada = $tallalInventario + $tallalInventarioVenta;
        $tallaxlConbinada = $tallaxlInventario + $tallaxlInventarioVenta;
        $tallauConbinada = $tallauInventario + $tallauInventarioVenta;
        $tallaestConbinada = $tallaestInventario + $tallaestInventarioVenta;
        echo "
        <script> console.log('En inventario queda: " . $talla6Conbinada . "'); </script>
        ";


        $consultaDecrementoInventario = "UPDATE inventarios_productos SET 
            talla6=" . $talla6Conbinada . ", 
            talla8=" . $talla8Conbinada . ", 
            talla10=" . $talla10Conbinada . ", 
            talla12=" . $talla12Conbinada . ", 
            talla14=" . $talla14Conbinada . ", 
            talla16=" . $talla16Conbinada . ", 
            talla18=" . $talla18Conbinada . ", 
            talla20=" . $talla20Conbinada . ", 
            talla26=" . $talla26Conbinada . ", 
            talla28=" . $talla28Conbinada . ", 
            talla30=" . $talla30Conbinada . ", 
            talla32=" . $talla32Conbinada . ", 
            talla34=" . $talla34Conbinada . ", 
            talla36=" . $talla36Conbinada . ", 
            talla38=" . $talla38Conbinada . ", 
            tallas=" . $tallasConbinada . ", 
            tallam=" . $tallamConbinada . ", 
            tallal=" . $tallalConbinada . ", 
            tallaxl=" . $tallaxlConbinada . ", 
            tallau=" . $tallauConbinada . ", 
            tallaest=" . $tallaestConbinada . "
        
            
            WHERE referencia='" . $referencia."'";


        $modulesDecrementoInventario = $conexion->query($consultaDecrementoInventario);

        $fecha = date("Y-m-d");

        $consultaCambioEstadoprestamo = "UPDATE reintegro_inventarios SET 
     
        estado='devuelto' , 
        observacion_inventario = '".$_POST['observacion']."'
        WHERE id_inventario=" . $id_inventario;




    $resultado = $conexion->query($consultaCambioEstadoprestamo);

        echo "
            <script> 
                console.log('La prenda ha sido devuelta'); 
                location.href = 'reintegro-prendas-inventario.php';
            </script>";




}
