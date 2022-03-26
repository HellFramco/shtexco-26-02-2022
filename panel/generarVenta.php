<style>
    *{
        color: white;
       
    }
</style>
<center>
    <img src="../imagenes/preloader_emp.gif" alt="" style="text-aling:center; width: auto; background-repeat:no-repeat; background-position:center; background-attachment:fixed; ">
</center>
<?php
session_start();
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/acciones-usuarios-logs.php';
require_once '../modelo/notificacionCorreo.php';
require_once( '../lib/woocommerce-api.php' );
require __DIR__ . '/../vendor/autoload.php';
use Automattic\WooCommerce\Client;
$conexion = new Conexion();
$usuario_logs = new usuario_logs();
date_default_timezone_set('America/Bogota');

$accion = $_GET['accion'];


if ($accion == "generaVenta") {

    $id_lista_resul =[];
    $id_lista = $_POST["id_lista"];
    $cant=0;
    foreach ($id_lista as $resultado)
{
  
    $id_lista_resul[$cant] = $resultado;
    $cant=$cant + 1 ;
}


$id_venta_resul ="";
    $id_venta = $_POST["id_venta"];
    foreach ($id_venta as $resultado)
{
  
    $id_venta_resul = $resultado;
}


$id_cliente_resul ="";
    $id_cliente = $_POST["id_cliente"];
    foreach ($id_cliente as $resultado)
{
  
    $id_cliente_resul = $resultado;
}

$id_inventario_resul ="";
$i = 0;
    $id_inventario = $_POST["id_inventarios"];




$dato=0;

    foreach ($id_inventario as $resultado)
{
  
    $id_inventario_resul = $resultado;


    
$resultado  = valida($id_inventario_resul, $id_venta_resul, $id_cliente_resul, $id_lista_resul[$i]);
    
if($resultado==1){
    $dato = "1";
}
$i= $i+1;
}




 $i=0;
if($dato==0){


    foreach ($id_inventario as $resultado)
{
  
    $id_inventario_resul = $resultado;

    // echo "id_inventario: ". $id_inventario_resul."<br>";
    // echo "id_cliente: ". $id_cliente_resul."<br>";
    // echo "id_venta: ". $id_venta_resul."<br><br>";
    // echo "id_lista: ". $id_lista_resul[$i]."<br><br>";
    
    descuenta($id_inventario_resul, $id_venta_resul, $id_cliente_resul, $id_lista_resul[$i]);
    $i = $i + 1 ;



}


}else{

    echo "
        <script>
             alert('Una de las prendas seleccionadas ya no se encuentran disponibles en el inventario');
             location.href = 'orden-nueva-venta-2.php?cliente=".$_POST["id_cliente"][0]."&id_venta=".$_POST["id_venta"][0]."&lista=true';
        </script>
    ";

}
   





 
    // if ($talla6Inventario < $talla6InventarioVenta) {
    //     echo "<br> No existe la cantidad que haz seleccionado para la talla 6";
    // }

    // if ($talla6Inventario == 0) {
    //     if ($talla6Inventario < $talla6InventarioVenta) {
    //         echo "
    //         <script>
    //             console.log('de la talla 6 No existe en inventario');
    //         </script>
    //         ";
    //     }
    // }

    // if ($talla6Inventario < $talla6InventarioVenta) {

    //     echo "
    //         <script>
    //             console.log('La cantidad solicitada de la Talla 6: " . $talla6InventarioVenta . "');
    //         </script>
    //         ";
    // }
    
    $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'genero la venta # '.$_POST["id_venta"][0]);
    $usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'aprobo por el cliente la venta # '.$_POST["id_venta"][0]);
    $mensaje = 'Se ha Aprobado por el cliente la orden de venta # '.$_POST["id_venta"][0].' Por el usuario: '.$_SESSION['mmb'];
    notificaMovimiento('soporteshtex@gmail.com','Notificacion Sistema SHTEX', $mensaje);
}
elseif($accion == "eliminar_venta"){


    $id_lista_resul =[];
    $id_lista = $_POST["id_lista"];
    $cant=0;
    foreach ($id_lista as $resultado)
{
  
    $id_lista_resul[$cant] = $resultado;
    $cant=$cant + 1 ;
}


$id_venta_resul ="";
    $id_venta = $_POST["id_venta"];
    foreach ($id_venta as $resultado)
{
  
    $id_venta_resul = $resultado;
}


$id_cliente_resul ="";
    $id_cliente = $_POST["id_cliente"];
    foreach ($id_cliente as $resultado)
{
  
    $id_cliente_resul = $resultado;
}

$id_inventario_resul ="";
$i = 0;
    $id_inventario = $_POST["id_inventarios"];
    foreach ($id_inventario as $resultado)
{
  
    $id_inventario_resul = $resultado;

    // echo "id_inventario: ". $id_inventario_resul."<br>";
    // echo "id_cliente: ". $id_cliente_resul."<br>";
    // echo "id_venta: ". $id_venta_resul."<br><br>";
    // echo "id_lista: ". $id_lista_resul[$i]."<br><br>";
    
    devuelve($id_inventario_resul, $id_venta_resul, $id_cliente_resul, $id_lista_resul[$i]);
    $i = $i + 1 ;
}

$mensaje = 'Se ha Cancelado la orden de venta # '.$_POST["id_venta"][0].' Por el usuario: '.$_SESSION['mmb'];
    notificaMovimiento('soporteshtex@gmail.com','Notificacion Sistema SHTEX', $mensaje);
$usuario_logs->registro_usuario_logs($_SESSION['nombre'], 'cancelo la venta # '.$_POST["id_venta"][0]);
}
else 
{

}

function descuenta($id_inventario, $id_venta, $id_cliente, $id_lista){

    require_once("../modelo/db.php");

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;

    $consultaInventario = "SELECT * FROM inventarios_productos WHERE id_inventario = " . $id_inventario;
    $modulesInventario = $conexion->query($consultaInventario)->fetchAll();

    foreach ($modulesInventario as $key) {
        
        $SKU = $key['referencia'];
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


        // echo "
        //     <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        // ";
    }


    $consulta = "SELECT * FROM lista_productos_ventas WHERE id_lista=".$id_lista." and id_venta = " . $id_venta . " AND id_inventario=" . $id_inventario;
    $modules = $conexion->query($consulta)->fetchAll();

    foreach ($modules as $key) {
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

        // echo "
        // <script> console.log('cantidad Talla 6 en venta: " . $talla6InventarioVenta . "'); </script>
        // ";
    }

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
        // echo "
        // <script> console.log('En inventario queda: " . $talla6Conbinada . "'); </script>
        // ";

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

        $fecha = date('Y-m-d H:i:s');

        $consultaCambioEstadoVenta = "UPDATE ventas_globales SET 
            cliente_aprobo='SI', 
            fecha_cliente_aprobo='" . $fecha . "', 
            estado='APROBO CLIENTE' 
            
            WHERE id_venta=" . $id_venta;


        // ECHO $consultaDecrementoInventario;

        $modulesDecrementoInventario = $conexion->query($consultaCambioEstadoVenta);
        $modulesDecrementoInventario = $conexion->query($consultaDecrementoInventario);

        
        // echo '<img src="https://c.tenor.com/DcSQGcWzjuUAAAAC/loading-bar.gif" width="100%" height="100%" alt="">';
        // echo "
        // <script>
        //     alert('Por favor espere hasta que se cargue completamente SU PEDIDO NO CIERRE ESTA PAGINA');

        // </script>
        // ";

         try {

            $options = array(
                'debug'           => true,
                'return_as_array' => false,
                'validate_url'    => false,
                'timeout'         => 0,
                'ssl_verify'      => false,
            );

            $client = new WC_API_Client( 
                'https://www.drabbalovers.co/',
                'ck_a000f6b39fb3342eecb1206bc42278bb0932813d',
                'cs_c8efae8a209729abc1118f9729811325747d9738',
                $options
            );
            
            $woocommerce = new Client(
                'https://www.drabbalovers.co/', 
                'ck_a000f6b39fb3342eecb1206bc42278bb0932813d', 
                'cs_c8efae8a209729abc1118f9729811325747d9738',
                [
                    'version' => 'wc/v3',
                ]
            );

            $params= [
                'sku' => $SKU 
                ];

            $productoWOO = (array) $woocommerce->get('products/', $params);
            if(empty($productoWOO)){

            }else{

                $IDPadre = $productoWOO[0]->id;
                $product_id = $productoWOO[0]->variations;

                $IDWoocommerceTalla6 = $product_id[0];
                $IDWoocommerceTalla8 = $product_id[1];
                $IDWoocommerceTalla10 = $product_id[2];
                $IDWoocommerceTalla12 = $product_id[3];
                $IDWoocommerceTalla14 = $product_id[4];
                $IDWoocommerceTalla16 = $product_id[5];
                $IDWoocommerceTalla18 = $product_id[6];
                $IDWoocommerceTalla20 = $product_id[7];
                $IDWoocommerceTalla26 = $product_id[8];
                $IDWoocommerceTalla28 = $product_id[9];
                $IDWoocommerceTalla30 = $product_id[10];
                $IDWoocommerceTalla32 = $product_id[11];
                $IDWoocommerceTalla34 = $product_id[12];
                $IDWoocommerceTalla36 = $product_id[13];
                $IDWoocommerceTalla38 = $product_id[14];
                $IDWoocommerceTallaS = $product_id[15];
                $IDWoocommerceTallaM = $product_id[16];
                $IDWoocommerceTallaL = $product_id[17];
                $IDWoocommerceTallaXL = $product_id[18];
                $IDWoocommerceTallaU = $product_id[19]; 
                $IDWoocommerceTallaEST = $product_id[20];

                $data = [
                    'update' => [
                        [
                            'id' => $IDWoocommerceTalla6,
                            'stock_quantity' => $talla6Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla8,
                            'stock_quantity' => $talla8Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla10,
                            'stock_quantity' => $talla10Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla12,
                            'stock_quantity' => $talla12Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla14,
                            'stock_quantity' => $talla14Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla16,
                            'stock_quantity' => $talla16Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla18,
                            'stock_quantity' => $talla18Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla20,
                            'stock_quantity' => $talla20Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla26,
                            'stock_quantity' => $talla26Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla28,
                            'stock_quantity' => $talla28Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla30,
                            'stock_quantity' => $talla30Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla32,
                            'stock_quantity' => $talla32Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla34,
                            'stock_quantity' => $talla34Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla36,
                            'stock_quantity' => $talla36Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla38,
                            'stock_quantity' => $talla38Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaS,
                            'stock_quantity' => $tallasConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaM,
                            'stock_quantity' => $tallamConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaL,
                            'stock_quantity' => $tallalConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaXL,
                            'stock_quantity' => $tallaxlConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaU,
                            'stock_quantity' => $tallauConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaEST,
                            'stock_quantity' => $tallaestConbinada,
                        ]
                    ]
                ];

                if($woocommerce->post('products/'.$IDPadre.'/variations/batch', $data)){

                        // echo 'Las variables se actualizaron corectamente';
                        // echo "<br>";

                }else{

                        // echo 'Hay un problema al actualizar esta referencia #: '.$SKUPrimaryDB.' Ubiquela y corrijala manualmente';
                        // echo "<br>";
                }
            }

        } catch ( WC_API_Client_Exception $e ) {

            echo $e->getMessage() . PHP_EOL;
            echo $e->getCode() . PHP_EOL;
                                    
            if ( $e instanceof WC_API_Client_HTTP_Exception ) {
                                    
                print_r( $e->get_request() );
                print_r( $e->get_response() );
            }
        }
     
            echo '
            <script>
                location.href = "apruebaPedidosContraentrega.php?cliente='.$id_cliente.'&id_venta='.$id_venta.'&lista=true&medio_pago='.$_POST['medio_pago'].'";
            </script>
            ';
        

    }
    else{

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
        <script>
             alert('La existencia de estas prendas ya no estan disponibles');
             location.href = 'orden-nueva-venta-2.php?cliente=".$_POST["id_cliente"][0]."&id_venta=".$_POST["id_venta"][0]."&lista=true';
        </script>
    ";


    /*

                        $tallasregis = "";


                        if($talla6Inventario >= $talla6InventarioVenta){}else{$tallasregis = $tallasregis . "talla6, ";}

                        if($talla8Inventario >= $talla8InventarioVenta){}else{$tallasregis = $tallasregis . "talla8, ";}
                        
                        if($talla10Inventario >= $talla10InventarioVenta){}else{$tallasregis = $tallasregis . "talla10, ";}
                        
                        if($talla12Inventario >= $talla12InventarioVenta){}else{$tallasregis = $tallasregis . "talla12, ";}
                        
                        if($talla14Inventario >= $talla14InventarioVenta){}else{$tallasregis = $tallasregis . "talla14, ";}
                        
                        if($talla16Inventario >= $talla16InventarioVenta){}else{$tallasregis = $tallasregis . "talla16, ";}
                        
                        if($talla18Inventario >= $talla18InventarioVenta){}else{$tallasregis = $tallasregis . "talla18, ";}
                        
                        if($talla20Inventario >= $talla20InventarioVenta){}else{$tallasregis = $tallasregis . "talla20, ";}
                        
                        if($talla26Inventario >= $talla26InventarioVenta){}else{$tallasregis = $tallasregis . "talla26, ";}
                        
                        if($talla28Inventario >= $talla28InventarioVenta){}else{$tallasregis = $tallasregis . "talla28, ";}
                        
                        if($talla30Inventario >= $talla30InventarioVenta){}else{$tallasregis = $tallasregis . "talla30, ";}
                        
                        if($talla32Inventario >= $talla32InventarioVenta){}else{$tallasregis = $tallasregis . "talla32, ";}
                        
                        if($talla34Inventario >= $talla34InventarioVenta){}else{$tallasregis = $tallasregis . "talla34, ";}
                        
                        if($talla36Inventario >= $talla36InventarioVenta){}else{$tallasregis = $tallasregis . "talla36, ";}
                        
                        if($talla38Inventario >= $talla38InventarioVenta){}else{$tallasregis = $tallasregis . "talla38, ";}
                        
                        if($tallasInventario >= $tallasInventarioVenta){}else{$tallasregis = $tallasregis . "tallas, ";}
                        
                        if($tallamInventario >= $tallamInventarioVenta){}else{$tallasregis = $tallasregis . "tallam, ";}

                        if($tallalInventario >= $tallalInventarioVenta){}else{$tallasregis = $tallasregis . "tallal, ";}

                        if( $tallaxlInventario >= $tallaxlInventarioVenta){}else{$tallasregis = $tallasregis . "tallaxl, ";}

                        if($tallauInventario >= $tallauInventarioVenta){}else{$tallasregis = $tallasregis . "tallau, ";}

                        if($tallaestInventario >= $tallaestInventarioVenta){}else{$tallasregis = $tallasregis . "tallaest, ";}

                

                        
      */              
                        


                /*    echo "<script>
                        alert('No existe producto en el inventario de las siguentes referencias: ".$tallasregis." ');
                    
                    </script> 
                                ";*/

    }



}





//valida que en la cadena de registros no registre si uno se encuentra inexistente.
function valida($id_inventario, $id_venta, $id_cliente, $id_lista){



    require_once("../modelo/db.php");

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;

    $consultaInventario = "SELECT * FROM inventarios_productos WHERE id_inventario = " . $id_inventario;
    $modulesInventario = $conexion->query($consultaInventario)->fetchAll();

    foreach ($modulesInventario as $key) {
        $referencia = $key['referencia'];
        
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


        // echo "
        //     <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        // ";
    }


    $consulta = "SELECT * FROM lista_productos_ventas WHERE id_lista=".$id_lista." and id_venta = " . $id_venta . " AND id_inventario=" . $id_inventario;
    $modules = $conexion->query($consulta)->fetchAll();

    foreach ($modules as $key) {
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

        // echo "
        // <script> console.log('cantidad Talla 6 en venta: " . $talla6InventarioVenta . "'); </script>
        // ";
    }

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
            return 0;


        }else{
            
            
            
            
            
            
            
            
            
            
            
            
            $tallasregis = "";

                if($talla6Inventario >= $talla6InventarioVenta){}else{$tallasregis = $tallasregis . "talla6, ";}

                if($talla8Inventario >= $talla8InventarioVenta){}else{$tallasregis = $tallasregis . "talla8, ";}
                
                if($talla10Inventario >= $talla10InventarioVenta){}else{$tallasregis = $tallasregis . "talla10, ";}
                
                if($talla12Inventario >= $talla12InventarioVenta){}else{$tallasregis = $tallasregis . "talla12, ";}
                
                if($talla14Inventario >= $talla14InventarioVenta){}else{$tallasregis = $tallasregis . "talla14, ";}
                
                if($talla16Inventario >= $talla16InventarioVenta){}else{$tallasregis = $tallasregis . "talla16, ";}
                
                if($talla18Inventario >= $talla18InventarioVenta){}else{$tallasregis = $tallasregis . "talla18, ";}
                
                if($talla20Inventario >= $talla20InventarioVenta){}else{$tallasregis = $tallasregis . "talla20, ";}
                
                if($talla26Inventario >= $talla26InventarioVenta){}else{$tallasregis = $tallasregis . "talla26, ";}
                
                if($talla28Inventario >= $talla28InventarioVenta){}else{$tallasregis = $tallasregis . "talla28, ";}
                
                if($talla30Inventario >= $talla30InventarioVenta){}else{$tallasregis = $tallasregis . "talla30, ";}
                
                if($talla32Inventario >= $talla32InventarioVenta){}else{$tallasregis = $tallasregis . "talla32, ";}
                
                if($talla34Inventario >= $talla34InventarioVenta){}else{$tallasregis = $tallasregis . "talla34, ";}
                
                if($talla36Inventario >= $talla36InventarioVenta){}else{$tallasregis = $tallasregis . "talla36, ";}
                
                if($talla38Inventario >= $talla38InventarioVenta){}else{$tallasregis = $tallasregis . "talla38, ";}
                
                if($tallasInventario >= $tallasInventarioVenta){}else{$tallasregis = $tallasregis . "tallas, ";}
                
                if($tallamInventario >= $tallamInventarioVenta){}else{$tallasregis = $tallasregis . "tallam, ";}

                if($tallalInventario >= $tallalInventarioVenta){}else{$tallasregis = $tallasregis . "tallal, ";}

                if( $tallaxlInventario >= $tallaxlInventarioVenta){}else{$tallasregis = $tallasregis . "tallaxl, ";}

                if($tallauInventario >= $tallauInventarioVenta){}else{$tallasregis = $tallasregis . "tallau, ";}

                if($tallaestInventario >= $tallaestInventarioVenta){}else{$tallasregis = $tallasregis . "tallaest, ";}

          


                
            
                


            echo "<script>
                 alert('No existe producto en el inventario ".$referencia." de las siguentes tallas: ".$tallasregis." ');
               </script>";


            
            
            
            
            
            
            
            return 1;

        }




}



// ESTA FUNCION DEVUELVE LAS CANTIDADES EN EL INVENTARIO

function devuelve($id_inventario, $id_venta, $id_cliente, $id_lista){



    require_once("../modelo/db.php");

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;

    $consultaInventario = "SELECT * FROM inventarios_productos WHERE id_inventario = " . $id_inventario;
    $modulesInventario = $conexion->query($consultaInventario)->fetchAll();

    foreach ($modulesInventario as $key) {
        
        $SKU = $key['referencia'];
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


        // echo "
        //     <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        // ";
    }


    $consulta = "SELECT * FROM lista_productos_ventas WHERE id_lista=".$id_lista." and id_venta = " . $id_venta . " AND id_inventario=" . $id_inventario;
    $modules = $conexion->query($consulta)->fetchAll();

    foreach ($modules as $key) {
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

        // echo "
        // <script> console.log('cantidad Talla 6 en venta: " . $talla6InventarioVenta . "'); </script>
        // ";
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
        // echo "
        // <script> console.log('En inventario queda: " . $talla6Conbinada . "'); </script>
        // ";


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



        $fecha = date('Y-m-d H:i:s');

        $consultaCambioEstadoVenta = "UPDATE ventas_globales SET 
     
            estado='CANCELADO',
            cliente_aprobo='CANCELADO', 
            cartera_aprobo='CANCELADO',
            alistamiento='CANCELADO', 
            despachada='CANCELADO',
            fecha_cancelado = '".$fecha."'
            
            WHERE id_venta=" . $id_venta;


        // ECHO $consultaDecrementoInventario;


    $modulesDecrementoInventario = $conexion->query($consultaCambioEstadoVenta);
    $modulesDecrementoInventario = $conexion->query($consultaDecrementoInventario);

    try {

            $options = array(
                'debug'           => true,
                'return_as_array' => false,
                'validate_url'    => false,
                'timeout'         => 0,
                'ssl_verify'      => false,
            );

            $client = new WC_API_Client( 
                'https://www.drabbalovers.co/',
                'ck_a000f6b39fb3342eecb1206bc42278bb0932813d',
                'cs_c8efae8a209729abc1118f9729811325747d9738',
                $options
            );
            
            $woocommerce = new Client(
                'https://www.drabbalovers.co/', 
                'ck_a000f6b39fb3342eecb1206bc42278bb0932813d', 
                'cs_c8efae8a209729abc1118f9729811325747d9738',
                [
                    'version' => 'wc/v3',
                ]
            );

            $params= [
                'sku' => $SKU 
                ];

            $productoWOO = (array) $woocommerce->get('products/', $params);
            if(empty($productoWOO)){

            }else{

                $IDPadre = $productoWOO[0]->id;
                $product_id = $productoWOO[0]->variations;

                $IDWoocommerceTalla6 = $product_id[0];
                $IDWoocommerceTalla8 = $product_id[1];
                $IDWoocommerceTalla10 = $product_id[2];
                $IDWoocommerceTalla12 = $product_id[3];
                $IDWoocommerceTalla14 = $product_id[4];
                $IDWoocommerceTalla16 = $product_id[5];
                $IDWoocommerceTalla18 = $product_id[6];
                $IDWoocommerceTalla20 = $product_id[7];
                $IDWoocommerceTalla26 = $product_id[8];
                $IDWoocommerceTalla28 = $product_id[9];
                $IDWoocommerceTalla30 = $product_id[10];
                $IDWoocommerceTalla32 = $product_id[11];
                $IDWoocommerceTalla34 = $product_id[12];
                $IDWoocommerceTalla36 = $product_id[13];
                $IDWoocommerceTalla38 = $product_id[14];
                $IDWoocommerceTallaS = $product_id[15];
                $IDWoocommerceTallaM = $product_id[16];
                $IDWoocommerceTallaL = $product_id[17];
                $IDWoocommerceTallaXL = $product_id[18];
                $IDWoocommerceTallaU = $product_id[19]; 
                $IDWoocommerceTallaEST = $product_id[20];

                $data = [
                    'update' => [
                        [
                            'id' => $IDWoocommerceTalla6,
                            'stock_quantity' => $talla6Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla8,
                            'stock_quantity' => $talla8Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla10,
                            'stock_quantity' => $talla10Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla12,
                            'stock_quantity' => $talla12Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla14,
                            'stock_quantity' => $talla14Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla16,
                            'stock_quantity' => $talla16Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla18,
                            'stock_quantity' => $talla18Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla20,
                            'stock_quantity' => $talla20Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla26,
                            'stock_quantity' => $talla26Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla28,
                            'stock_quantity' => $talla28Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla30,
                            'stock_quantity' => $talla30Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla32,
                            'stock_quantity' => $talla32Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla34,
                            'stock_quantity' => $talla34Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla36,
                            'stock_quantity' => $talla36Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTalla38,
                            'stock_quantity' => $talla38Conbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaS,
                            'stock_quantity' => $tallasConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaM,
                            'stock_quantity' => $tallamConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaL,
                            'stock_quantity' => $tallalConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaXL,
                            'stock_quantity' => $tallaxlConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaU,
                            'stock_quantity' => $tallauConbinada,
                        ],
                        [
                            'id' => $IDWoocommerceTallaEST,
                            'stock_quantity' => $tallaestConbinada,
                        ]
                    ]
                ];

                if($woocommerce->post('products/'.$IDPadre.'/variations/batch', $data)){

                        // echo 'Las variables se actualizaron corectamente';
                        // echo "<br>";

                }else{

                        // echo 'Hay un problema al actualizar esta referencia #: '.$SKUPrimaryDB.' Ubiquela y corrijala manualmente';
                        // echo "<br>";
                }
            }

    } catch ( WC_API_Client_Exception $e ) {

        echo $e->getMessage() . PHP_EOL;
        echo $e->getCode() . PHP_EOL;
                                    
        if ( $e instanceof WC_API_Client_HTTP_Exception ) {
                                    
            print_r( $e->get_request() );
            print_r( $e->get_response() );
        }
    }
    
        echo "
            <script> 
                console.log('Se ha acualizado el inventario'); 
                location.href = 'orden-nueva-venta-2.php?cliente=".$id_cliente."&id_venta=".$id_venta."&lista=true';
            </script>";

}
