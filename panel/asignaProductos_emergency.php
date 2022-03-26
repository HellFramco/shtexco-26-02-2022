<?php
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];

if ($accion == "asignaProductosVenta") {

  require_once("../modelo/db.php");
        // echo "<pre>";
        // var_dump($_POST);
        // echo "</pre>";

  
        if ($_POST['talla6']=='') {
            echo  $_POST['talla6'] = 0;
        }
        if ($_POST['talla8']=='') {
            echo $_POST['talla8'] = 0;
        }
        if ($_POST['talla10']=='') {
            echo $_POST['talla10'] = 0;
        }
        if ($_POST['talla12']=='') {
            echo $_POST['talla12'] = 0;
        }
        if ($_POST['talla14']=='') {
            echo $_POST['talla14'] = 0;
        }
        if ($_POST['talla16']=='') {
            echo $_POST['talla16'] = 0;
        }
        if ($_POST['talla18']=='') {
            echo $_POST['talla18'] = 0;
        }
        if ($_POST['talla20']=='') {
            echo $_POST['talla20'] = 0;
        }
        if ($_POST['talla26']=='') {
            echo $_POST['talla26'] = 0;
        }
        if ($_POST['talla28']=='') {
            echo $_POST['talla28'] = 0;
        }
        if ($_POST['talla30']=='') {
            echo $_POST['talla30'] = 0;
        }
        if ($_POST['talla32']=='') {
            echo $_POST['talla32'] = 0;
        }
        if ($_POST['talla34']=='') {
            echo $_POST['talla34'] = 0;
        }
        if ($_POST['talla36']=='') {
            echo $_POST['talla36'] = 0;
        }
        if ($_POST['talla38']=='') {
            echo $_POST['talla38'] = 0;
        }
        if ($_POST['tallas']=='') {
            echo $_POST['tallas'] = 0;
        }
        if ($_POST['tallam']=='') {
            echo $_POST['tallam'] = 0;
        }
        if ($_POST['tallal']=='') {
            echo $_POST['tallal'] = 0;
        }
        if ($_POST['tallaxl']=='') {
            echo $_POST['tallaxl'] = 0;
        }
        if ($_POST['tallau']=='') {
            echo $_POST['tallau'] = 0;
        }
        if ($_POST['tallaest']=='') {
            echo $_POST['tallaest'] = 0;
        }

        if ($_POST['precio']=='') {
            echo $_POST['precio'] = 0;
        }


        $cantidad  = $_POST['talla6'] + $_POST['talla8'] + $_POST['talla10'] + $_POST['talla12'] + $_POST['talla14'] + $_POST['talla16'] + $_POST['talla18'] + $_POST['talla20'] + $_POST['talla26'] + $_POST['talla28'] + $_POST['talla30'] + $_POST['talla32'] + $_POST['talla34'] + $_POST['talla36'] + $_POST['talla38'];

        $cantidad = $cantidad + $_POST['tallas'] + $_POST['tallam'] + $_POST['tallal'] +$_POST['tallaxl'] +$_POST['tallau'] +$_POST['tallaest'];

        $precio_total = $_POST['precio'] * $cantidad ; 



        $talla6Inventario = 0;
     
        $talla8Inventario = 0;

         $talla10Inventario = 0;

         $talla12Inventario = 0;
  
         $talla14Inventario = 0;
   
         $talla16Inventario = 0;
    
         $talla18Inventario = 0;

         $talla20Inventario = 0;

         $talla26Inventario = 0;

         $talla28Inventario = 0;

         $talla30Inventario = 0;

         $talla32Inventario = 0;
   
         $talla34Inventario = 0;

         $talla36Inventario = 0;
 
         $talla38Inventario = 0;
 
         $tallasInventario = 0;

         $tallamInventario = 0;

         $tallalInventario = 0;

         $tallaxlInventario = 0;

         $tallauInventario = 0;

         $tallaestInventario = 0;




        require_once("../modelo/db.php");

        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
    
        $consultaInventario = "SELECT * FROM inventarios_productos WHERE id_inventario = " . $_POST['id_inventario'];
        
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

    
    
       
        }
    


        echo  $talla10Inventario ." --- " .$_POST['talla10'] ."-..";

        if (
            $talla6Inventario >= $_POST['talla6'] AND
            $talla8Inventario >= $_POST['talla8'] AND
            $talla10Inventario >= $_POST['talla10'] AND
            $talla12Inventario >= $_POST['talla12'] AND
            $talla14Inventario >= $_POST['talla14'] AND
            $talla16Inventario >= $_POST['talla16'] AND
            $talla18Inventario >= $_POST['talla18'] AND
            $talla20Inventario >= $_POST['talla20'] AND
            $talla26Inventario >= $_POST['talla26'] AND
            $talla28Inventario >= $_POST['talla28'] AND
            $talla30Inventario >= $_POST['talla30'] AND
            $talla32Inventario >= $_POST['talla32'] AND
            $talla34Inventario >= $_POST['talla34'] AND
            $talla36Inventario >= $_POST['talla36'] AND
            $talla38Inventario >= $_POST['talla38'] AND
            $tallasInventario >= $_POST['tallas'] AND
            $tallamInventario >= $_POST['tallam'] AND
            $tallalInventario >= $_POST['tallal'] AND
            $tallaxlInventario >= $_POST['tallaxl'] AND
            $tallauInventario >= $_POST['tallau'] AND
            $tallaestInventario >= $_POST['tallaest']
            
            ) {








                $conexion = new Conexion();
                $arreglo = array();
                $i = 0;
            
                $consultaInventario = "SELECT sum(talla6) as talla6 , SUM(talla8) as talla8, SUM(talla10) as talla10, SUM(talla12) as talla12, SUM(talla14) as talla14 , SUM(talla16) as talla16, SUM(talla18) as talla18, SUM(talla20) as talla20, SUM(talla26) as talla26, SUM(talla28) as talla28, SUM(talla30) as talla30, SUM(talla32) as talla32, SUM(talla34) as talla34, SUM(talla36) as talla36, SUM(talla38) as talla38, SUM(tallas) as tallas, SUM(tallam) as tallam, SUM(tallal) as tallal, SUM(tallaxl) as tallaxl, SUM(tallau) as tallau, SUM(tallaest) as tallaest  FROM `lista_productos_ventas` WHERE id_venta =".$_POST['id_venta']." and  id_inventario = " . $_POST['id_inventario'];
                

               
                
                $modulesInventario = $conexion->query($consultaInventario)->fetchAll();
            
                foreach ($modulesInventario as $key) { 
          
                     $pedido6Inventario = $key['talla6'];
             
                    $pedido8Inventario = $key['talla8'];
         
                     $pedido10Inventario = $key['talla10'];
            
                     $pedido12Inventario = $key['talla12'];
              
                     $pedido14Inventario = $key['talla14'];
               
                     $pedido16Inventario = $key['talla16'];
                
                     $pedido18Inventario = $key['talla18'];
          
                     $pedido20Inventario = $key['talla20'];
        
                     $pedido26Inventario = $key['talla26'];
        
                     $pedido28Inventario = $key['talla28'];
        
                     $pedido30Inventario = $key['talla30'];
        
                     $pedido32Inventario = $key['talla32'];
               
                     $pedido34Inventario = $key['talla34'];
            
                     $pedido36Inventario = $key['talla36'];
             
                     $pedido38Inventario = $key['talla38'];
             
                     $pedidosInventario = $key['tallas'];
        
                     $pedidomInventario = $key['tallam'];
          
                     $pedidolInventario = $key['tallal'];
         
                     $pedidoxlInventario = $key['tallaxl'];
        
                     $pedidouInventario = $key['tallau'];
        
                     $pedidoestInventario = $key['tallaest'];
        
               
                }
            
        
        
                $resul = $_POST['talla8'] + $pedido8Inventario;
               echo "esto : ". $talla8Inventario. "--". $resul ."..";
        
                if (
                    $talla6Inventario >= ($_POST['talla6'] + $pedido6Inventario) AND
                    $talla8Inventario >= ($_POST['talla8'] + $pedido8Inventario) AND
                    $talla10Inventario >= ($_POST['talla10'] + $pedido10Inventario) AND
                    $talla12Inventario >= ($_POST['talla12'] + $pedido12Inventario) AND
                    $talla14Inventario >= ($_POST['talla14'] + $pedido14Inventario) AND
                    $talla16Inventario >= ($_POST['talla16'] + $pedido16Inventario) AND
                    $talla18Inventario >= ($_POST['talla18'] + $pedido18Inventario) AND
                    $talla20Inventario >= ($_POST['talla20'] + $pedido20Inventario) AND
                    $talla26Inventario >= ($_POST['talla26'] + $pedido26Inventario) AND
                    $talla28Inventario >= ($_POST['talla28'] + $pedido28Inventario) AND
                    $talla30Inventario >= ($_POST['talla30'] + $pedido30Inventario) AND
                    $talla32Inventario >= ($_POST['talla32'] + $pedido32Inventario) AND
                    $talla34Inventario >= ($_POST['talla34'] + $pedido34Inventario) AND
                    $talla36Inventario >= ($_POST['talla36'] + $pedido36Inventario) AND
                    $talla38Inventario >= ($_POST['talla38'] + $pedido38Inventario) AND
                    $tallasInventario >= ($_POST['tallas'] + $pedidosInventario) AND
                    $tallamInventario >= ($_POST['tallam'] + $pedidomInventario) AND
                    $tallalInventario >= ($_POST['tallal'] + $pedidolInventario) AND
                    $tallaxlInventario >= ($_POST['tallaxl'] + $pedidoxlInventario) AND
                    $tallauInventario >= ($_POST['tallau'] + $pedidouInventario) AND
                    $tallaestInventario >= ($_POST['tallaest'] + $pedidoestInventario)
                    
                    ) {

                      

















                        $consulta = "INSERT INTO lista_productos_ventas(
                            referencia,
                            descripcion,
                            marca,
                            color,
                            silueta,
                            categoria,
                            talla6,
                            talla8, 
                            talla10, 
                            talla12, 
                            talla14, 
                            talla16, 
                            talla18, 
                            talla20, 
                            talla26, 
                            talla28, 
                            talla30, 
                            talla32, 
                            talla34, 
                            talla36, 
                            talla38, 
                            tallas, 
                            tallam, 
                            tallal, 
                            tallaxl, 
                            tallau, 
                            tallaest,
                            id_venta, 
                            id_inventario,
                            precio,
                            estado
                            ) VALUES(
                                                                '".$_POST['referencia']."',
                                                                '".$_POST['descripcion']."',
                                                                '".$_POST['marca']."',
                                                                '".$_POST['color']."',
                                                                '".$_POST['silueta']."',
                                                                '".$_POST['categoria']."',
                                                                ".$_POST['talla6'].",
                                                                ".$_POST['talla8'].",
                                                                ".$_POST['talla10'].",
                                                                ".$_POST['talla12'].",
                                                                ".$_POST['talla14'].",
                                                                ".$_POST['talla16'].",
                                                                ".$_POST['talla18'].",
                                                                ".$_POST['talla20'].",
                                                                ".$_POST['talla26'].",
                                                                ".$_POST['talla28'].",
                                                                ".$_POST['talla30'].",
                                                                ".$_POST['talla32'].",
                                                                ".$_POST['talla34'].",
                                                                ".$_POST['talla36'].",
                                                                ".$_POST['talla38'].",
                                                                ".$_POST['tallas'].",
                                                                ".$_POST['tallam'].",
                                                                ".$_POST['tallal'].",
                                                                ".$_POST['tallaxl'].",
                                                                ".$_POST['tallau'].",
                                                                ".$_POST['tallaest'].",
                                                                ".$_POST['id_venta'].", 
                                                                ".$_POST['id_inventario'].",
                                                                ".$precio_total.",
                                                                'listado'
                                                            )";
                            $modules = $conexion->query($consulta);
                            echo $consulta;
                            
                            
                            if ($modules) {
                                echo "
                                    <script>
                                        //alert('producto agregado');
                                        location.href = 'orden-nueva-venta-2.php?cliente=".$_POST['id_cliente']."&id_venta=".$_POST['id_venta']."&lista=true';
                                    </script>
                                ";
                            }
                            else{
                              echo "
                                
                              ";
                            }
                    
























                    }
                    else {
                        echo "
                                    <script>
                                        alert('Se supero el limite de existencia.');
                                        location.href = 'orden-nueva-venta-2.php?cliente=".$_POST['id_cliente']."&id_venta=".$_POST['id_venta']."&lista=true';
                                    </script>
                                ";
                    }

































            }else{




            $tallasregis = "";


                if($talla6Inventario >= $_POST['talla6']){}else{$tallasregis = $tallasregis . "talla6, ";}

                if($talla8Inventario >= $_POST['talla8']){}else{$tallasregis = $tallasregis . "talla8, ";}
                
                if($talla10Inventario >= $_POST['talla10']){}else{$tallasregis = $tallasregis . "talla10, ";}
                
                if($talla12Inventario >= $_POST['talla12']){}else{$tallasregis = $tallasregis . "talla12, ";}
                
                if($talla14Inventario >= $_POST['talla14']){}else{$tallasregis = $tallasregis . "talla14, ";}
                
                if($talla16Inventario >= $_POST['talla16']){}else{$tallasregis = $tallasregis . "talla16, ";}
                
                if($talla18Inventario >= $_POST['talla18']){}else{$tallasregis = $tallasregis . "talla18, ";}
                
                if($talla20Inventario >= $_POST['talla20']){}else{$tallasregis = $tallasregis . "talla20, ";}
                
                if($talla26Inventario >= $_POST['talla26']){}else{$tallasregis = $tallasregis . "talla26, ";}
                
                if($talla28Inventario >= $_POST['talla28']){}else{$tallasregis = $tallasregis . "talla28, ";}
                
                if($talla30Inventario >= $_POST['talla30']){}else{$tallasregis = $tallasregis . "talla30, ";}
                
                if($talla32Inventario >= $_POST['talla32']){}else{$tallasregis = $tallasregis . "talla32, ";}
                
                if($talla34Inventario >= $_POST['talla34']){}else{$tallasregis = $tallasregis . "talla34, ";}
                
                if($talla36Inventario >= $_POST['talla36']){}else{$tallasregis = $tallasregis . "talla36, ";}
                
                if($talla38Inventario >= $_POST['talla38']){}else{$tallasregis = $tallasregis . "talla38, ";}
                
                if($tallasInventario >= $_POST['tallas']){}else{$tallasregis = $tallasregis . "tallas, ";}
                
                if($tallamInventario >= $_POST['tallam']){}else{$tallasregis = $tallasregis . "tallam, ";}

                if($tallalInventario >= $_POST['tallal']){}else{$tallasregis = $tallasregis . "tallal, ";}

                if( $tallaxlInventario >= $_POST['tallaxl']){}else{$tallasregis = $tallasregis . "tallaxl, ";}

                if($tallauInventario >= $_POST['tallau']){}else{$tallasregis = $tallasregis . "tallau, ";}

                if($tallaestInventario >= $_POST['tallaest']){}else{$tallasregis = $tallasregis . "tallaest, ";}

          


                
            
                


            echo "<script>
                 alert('No existe producto en el inventario de las siguentes referencias: ".$tallasregis." ');
             
               </script>
            ";

                
            }



                
        




        
      

       }

else{
    
}