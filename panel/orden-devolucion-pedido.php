<?php
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_GET['accion'];
$id_inventario = $_POST['id_inventarios'];

$observacion = $_POST['observacion'];
$id_cliente = $_POST['id_cliente'];
$id_venta = $_POST['id_venta'];
$referencia = $_POST['referencia'];



if ($accion == "descuenta_producto") {

  require_once("../modelo/db.php");
        

        $talla6 = $_POST['talla6'];
        $talla8 = $_POST['talla8'];
        $talla10 = $_POST['talla10'];
        $talla12 = $_POST['talla12'];
        $talla14 = $_POST['talla14'];
        $talla16 = $_POST['talla16'];
        $talla18 = $_POST['talla18'];
        $talla20 = $_POST['talla20'];
        $talla26 = $_POST['talla26'];
        $talla28 = $_POST['talla28'];
        $talla30 = $_POST['talla30'];

        $talla32 = $_POST['talla32'];
        $talla34 = $_POST['talla34'];
        $talla36 = $_POST['talla36'];
        $talla38 = $_POST['talla38'];
        $tallas = $_POST['tallas'];
        $tallam = $_POST['tallam'];
        $tallal = $_POST['tallal'];
        $tallaxl = $_POST['tallaxl'];
        $tallau = $_POST['tallau'];
        $tallaest = $_POST['tallaest'];
  

        $id_lista = $_POST['id_lista'];
        
   


          $consultaInventario = "SELECT * FROM `inventarios_productos` where id_inventario='".$id_inventario."'";
          echo $consultaInventario;
          $modulesInventario = $conexion->query($consultaInventario)->fetchAll();



          


          foreach ($modulesInventario as $key) {

            
            echo "<br>";
            echo $talla6Inventario = $key['talla6'];
            echo "<br>";
            echo $talla8Inventario = $key['talla8'];
            echo "<br>";
            echo $talla10Inventario = $key['talla10'];
            echo "<br>";
            echo $talla12Inventario = $key['talla12'];
            echo "<br>";
            echo $talla14Inventario = $key['talla14'];
            echo "<br>";
            echo $talla16Inventario = $key['talla16'];
            echo "<br>";
            echo $talla18Inventario = $key['talla18'];
            echo "<br>";
            echo $talla20Inventario = $key['talla20'];
            echo "<br>";
            echo $talla26Inventario = $key['talla26'];
            echo "<br>";
            echo $talla28Inventario = $key['talla28'];
            echo "<br>";
            echo $talla30Inventario = $key['talla30'];
            echo "<br>";
            echo $talla32Inventario = $key['talla32'];
            echo "<br>";
            echo $talla34Inventario = $key['talla34'];
            echo "<br>";
            echo $talla36Inventario = $key['talla36'];
            echo "<br>";
            echo $talla38Inventario = $key['talla38'];
            echo "<br>";
            echo $tallasInventario = $key['tallas'];
            echo "<br>";
            echo $tallamInventario = $key['tallam'];
            echo "<br>";
            echo $tallalInventario = $key['tallal'];
            echo "<br>";
            echo $tallaxlInventario = $key['tallaxl'];
            echo "<br>";
            echo $tallauInventario = $key['tallau'];
            echo "<br>";
            echo $tallaestInventario = $key['tallaest'];
            echo "<br>";




  

 // ESTA CONSULTA PARA SUMAR AL INVENTARIO LAS PRENDAS DEVUELTAS
           $retalla6 =  $talla6Inventario + $talla6;
           $retalla8 =  $talla8Inventario + $talla8;
           $retalla10 =  $talla10Inventario + $talla10;
           $retalla12 =  $talla12Inventario + $talla12;
           $retalla14 =  $talla14Inventario + $talla14;
           $retalla16 =  $talla16Inventario + $talla16;
           $retalla18 =  $talla18Inventario + $talla18;
           $retalla20 =  $talla20Inventario + $talla20;
           $retalla26 =  $talla26Inventario + $talla26;
           $retalla28 =  $talla28Inventario + $talla28;
           $retalla30 =  $talla30Inventario + $talla30;
           $retalla32 =  $talla32Inventario + $talla32;
           $retalla34 =  $talla34Inventario + $talla34;
           $retalla36 =  $talla36Inventario + $talla36;
           $retalla38 =  $talla38Inventario + $talla38;
           $retallas =  $tallasInventario + $tallas;
           $retallam =  $tallamInventario + $tallam;
           $retallal =  $tallalInventario + $tallal;
           $retallaxl =  $tallaxlInventario + $tallaxl;
           $retallau =  $tallauInventario + $tallau;
           $retallaest =  $tallaestInventario + $tallaest;
           


           $consulta = "UPDATE `inventarios_productos` SET `talla6`='".$retalla6."',`talla8`='".$retalla8."',`talla10`='".$retalla10."',`talla12`='".$retalla12."',
           `talla14`='".$retalla14."',`talla16`='".$retalla16."',`talla18`='".$retalla18."',`talla20`='".$retalla20."',`talla26`='".$retalla26."',`talla28`='".$retalla28."',`talla30`='".$retalla30."',
           `talla32`='".$retalla32."',`talla34`='".$retalla34."',`talla36`='".$retalla36."',`talla38`='".$retalla38."',`tallas`='".$retallas."',`tallam`='".$retallam."',`tallal`='".$retallal."',`tallaxl`='".$retallaxl."',`tallau`='".$retallau."',`tallaest`='".$retallaest."' where id_inventario='".$id_inventario."'";
           $modules2 = $conexion->query($consulta);
           
           
           
           
         
            




















            

           /* $consulta = "DELETE FROM lista_productos_ventas WHERE id_lista = ".$_GET['id_lista'];
            $modules2 = $conexion->query($consulta);
            
            
            
            if ($modules) {
             
            }
            else{
          
            }
    
    
    */

        




          }


        
   
          $consultaInventario = "SELECT * FROM `lista_productos_ventas` where id_lista='".$id_lista."'";
          echo $consultaInventario;
          $modulesInventario = $conexion->query($consultaInventario)->fetchAll();



          


          foreach ($modulesInventario as $key) {

            
            echo "<br>";
            echo $talla6Inventario = $key['talla6'];
            echo "<br>";
            echo $talla8Inventario = $key['talla8'];
            echo "<br>";
            echo $talla10Inventario = $key['talla10'];
            echo "<br>";
            echo $talla12Inventario = $key['talla12'];
            echo "<br>";
            echo $talla14Inventario = $key['talla14'];
            echo "<br>";
            echo $talla16Inventario = $key['talla16'];
            echo "<br>";
            echo $talla18Inventario = $key['talla18'];
            echo "<br>";
            echo $talla20Inventario = $key['talla20'];
            echo "<br>";
            echo $talla26Inventario = $key['talla26'];
            echo "<br>";
            echo $talla28Inventario = $key['talla28'];
            echo "<br>";
            echo $talla30Inventario = $key['talla30'];
            echo "<br>";
            echo $talla32Inventario = $key['talla32'];
            echo "<br>";
            echo $talla34Inventario = $key['talla34'];
            echo "<br>";
            echo $talla36Inventario = $key['talla36'];
            echo "<br>";
            echo $talla38Inventario = $key['talla38'];
            echo "<br>";
            echo $tallasInventario = $key['tallas'];
            echo "<br>";
            echo $tallamInventario = $key['tallam'];
            echo "<br>";
            echo $tallalInventario = $key['tallal'];
            echo "<br>";
            echo $tallaxlInventario = $key['tallaxl'];
            echo "<br>";
            echo $tallauInventario = $key['tallau'];
            echo "<br>";
            echo $tallaestInventario = $key['tallaest'];
            echo "<br>";



            
// ESTA CONSULTA ES PARA DESCONTAR LAS CAMISAS DE VENTAS
           $retalla6 =  $talla6Inventario - $talla6;
           $retalla8 =  $talla8Inventario - $talla8;
           $retalla10 =  $talla10Inventario - $talla10;
           $retalla12 =  $talla12Inventario - $talla12;
           $retalla14 =  $talla14Inventario - $talla14;
           $retalla16 =  $talla16Inventario - $talla16;
           $retalla18 =  $talla18Inventario - $talla18;
           $retalla20 =  $talla20Inventario - $talla20;
           $retalla26 =  $talla26Inventario - $talla26;
           $retalla28 =  $talla28Inventario - $talla28;
           $retalla30 =  $talla30Inventario - $talla30;
           $retalla32 =  $talla32Inventario - $talla32;
           $retalla34 =  $talla34Inventario - $talla34;
           $retalla36 =  $talla36Inventario - $talla36;
           $retalla38 =  $talla38Inventario - $talla38;
           $retallas =  $tallasInventario - $tallas;
           $retallam =  $tallamInventario - $tallam;
           $retallal =  $tallalInventario - $tallal;
           $retallaxl =  $tallaxlInventario - $tallaxl;
           $retallau =  $tallauInventario - $tallau;
           $retallaest =  $tallaestInventario - $tallaest;
           


           $consulta = "UPDATE `lista_productos_ventas` SET `talla6`='".$retalla6."',`talla8`='".$retalla8."',`talla10`='".$retalla10."',`talla12`='".$retalla12."',
           `talla14`='".$retalla14."',`talla16`='".$retalla16."',`talla18`='".$retalla18."',`talla20`='".$retalla20."',`talla26`='".$retalla26."',`talla28`='".$retalla28."',`talla30`='".$retalla30."',
           `talla32`='".$retalla32."',`talla34`='".$retalla34."',`talla36`='".$retalla36."',`talla38`='".$retalla38."',`tallas`='".$retallas."',`tallam`='".$retallam."',`tallal`='".$retallal."',`tallaxl`='".$retallaxl."',`tallau`='".$retallau."',`tallaest`='".$retallaest."' where id_lista='".$id_lista."'";
           $modules2 = $conexion->query($consulta);
           
           

            $sumatoria = $talla6 + $talla8 + $talla10 + $talla12 + $talla14 + $talla16 + $talla18 + $talla20 + $talla26 + $talla28 + $talla30 + $talla32 + $talla34 + $talla36 + $talla38 + $tallas + $tallam + $tallal + $tallaxl + $tallau + $tallaest;

           
           $fecha = date("Y-m-d");

      $consulta2 = "INSERT INTO `observaciones_devoluciones_ventas`( `id_venta`, `observacion`,  `cantidad`, `referencia`) VALUES ('".$id_venta."','".$observacion."','".$sumatoria."','".$referencia."')";
           $modules2 = $conexion->query($consulta2);
           



          }




          echo "
          <script> 
              console.log('Se ha acualizado el inventario'); 
               location.href = 'orden-devolucion.php?cliente=".$id_cliente."&id_venta=".$id_venta."&lista=true';
          </script>";



        
      

       }

else{

  echo "
  <script> 
      console.log('Se ha acualizado el inventario'); 
       location.href = 'orden-devolucion.php?cliente=".$id_cliente."&id_venta=".$id_venta."&lista=true';
  </script>";

}