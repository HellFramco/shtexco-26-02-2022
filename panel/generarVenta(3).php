<?php
session_start();
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/acciones-usuarios-logs.php';
require_once '../modelo/notificacionCorreo.php';
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
    foreach ($id_inventario as $resultado)
{
  
    $id_inventario_resul = $resultado;

    echo "id_inventario: ". $id_inventario_resul."<br>";
    echo "id_cliente: ". $id_cliente_resul."<br>";
    echo "id_venta: ". $id_venta_resul."<br><br>";
    echo "id_lista: ". $id_lista_resul[$i]."<br><br>";
    
    descuenta($id_inventario_resul, $id_venta_resul, $id_cliente_resul, $id_lista_resul[$i]);
    $i = $i + 1 ;
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

    echo "id_inventario: ". $id_inventario_resul."<br>";
    echo "id_cliente: ". $id_cliente_resul."<br>";
    echo "id_venta: ". $id_venta_resul."<br><br>";
    echo "id_lista: ". $id_lista_resul[$i]."<br><br>";
    
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
        echo "Productos en inventario";
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


        echo "
            <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        ";
    }


    $consulta = "SELECT * FROM lista_productos_ventas WHERE id_lista=".$id_lista." and id_venta = " . $id_venta . " AND id_inventario=" . $id_inventario;
    $modules = $conexion->query($consulta)->fetchAll();

    foreach ($modules as $key) {
        echo "Productos en venta";
        echo "<br>";
        echo $talla6InventarioVenta = $key['talla6'];
        echo "<br>";
        echo $talla8InventarioVenta = $key['talla8'];
        echo "<br>";
        echo $talla10InventarioVenta = $key['talla10'];
        echo "<br>";
        echo $talla12InventarioVenta = $key['talla12'];
        echo "<br>";
        echo $talla14InventarioVenta = $key['talla14'];
        echo "<br>";
        echo $talla16InventarioVenta = $key['talla16'];
        echo "<br>";
        echo $talla18InventarioVenta = $key['talla18'];
        echo "<br>";
        echo $talla20InventarioVenta = $key['talla20'];
        echo "<br>";
        echo $talla26InventarioVenta = $key['talla26'];
        echo "<br>";
        echo $talla28InventarioVenta = $key['talla28'];
        echo "<br>";
        echo $talla30InventarioVenta = $key['talla30'];
        echo "<br>";
        echo $talla32InventarioVenta = $key['talla32'];
        echo "<br>";
        echo $talla34InventarioVenta = $key['talla34'];
        echo "<br>";
        echo $talla36InventarioVenta = $key['talla36'];
        echo "<br>";
        echo $talla38InventarioVenta = $key['talla38'];
        echo "<br>";
        echo $tallasInventarioVenta = $key['tallas'];
        echo "<br>";
        echo $tallamInventarioVenta = $key['tallam'];
        echo "<br>";
        echo $tallalInventarioVenta = $key['tallal'];
        echo "<br>";
        echo $tallaxlInventarioVenta = $key['tallaxl'];
        echo "<br>";
        echo $tallauInventarioVenta = $key['tallau'];
        echo "<br>";
        echo $tallaestInventarioVenta = $key['tallaest'];
        echo "<br>";

        echo "
        <script> console.log('cantidad Talla 6 en venta: " . $talla6InventarioVenta . "'); </script>
        ";
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

        $consultaCambioEstadoVenta = "UPDATE ventas_globales SET 
        cliente_aprobo='SI', 
        fecha_cliente_aprobo='" . $fecha . "', 
        estado='APROBO CLIENTE' 
        
        WHERE id_venta=" . $id_venta;


        ECHO $consultaDecrementoInventario;


        $modulesDecrementoInventario = $conexion->query($consultaCambioEstadoVenta);

        


     
                echo '
                <script>
                    location.href = "apruebaPedidosContraentrega.php?cliente='.$id_cliente.'&id_venta='.$id_venta.'&lista=true&medio_pago='.$_POST['medio_pago'].'";
                </script>
                ';
        

    }
    else{
        echo "
        <script> 
            console.log('no Se ha acualizado el inventario debido a que ha tomado mas productos de los que existen en inventario.'); 
        </script>";
        

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
        echo "Productos en inventario";
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


        echo "
            <script> console.log('cantidad Talla 6 en inventario: " . $talla6Inventario . "'); </script>
        ";
    }


    $consulta = "SELECT * FROM lista_productos_ventas WHERE id_lista=".$id_lista." and id_venta = " . $id_venta . " AND id_inventario=" . $id_inventario;
    $modules = $conexion->query($consulta)->fetchAll();

    foreach ($modules as $key) {
        echo "Productos en venta";
        echo "<br>";
        echo $talla6InventarioVenta = $key['talla6'];
        echo "<br>";
        echo $talla8InventarioVenta = $key['talla8'];
        echo "<br>";
        echo $talla10InventarioVenta = $key['talla10'];
        echo "<br>";
        echo $talla12InventarioVenta = $key['talla12'];
        echo "<br>";
        echo $talla14InventarioVenta = $key['talla14'];
        echo "<br>";
        echo $talla16InventarioVenta = $key['talla16'];
        echo "<br>";
        echo $talla18InventarioVenta = $key['talla18'];
        echo "<br>";
        echo $talla20InventarioVenta = $key['talla20'];
        echo "<br>";
        echo $talla26InventarioVenta = $key['talla26'];
        echo "<br>";
        echo $talla28InventarioVenta = $key['talla28'];
        echo "<br>";
        echo $talla30InventarioVenta = $key['talla30'];
        echo "<br>";
        echo $talla32InventarioVenta = $key['talla32'];
        echo "<br>";
        echo $talla34InventarioVenta = $key['talla34'];
        echo "<br>";
        echo $talla36InventarioVenta = $key['talla36'];
        echo "<br>";
        echo $talla38InventarioVenta = $key['talla38'];
        echo "<br>";
        echo $tallasInventarioVenta = $key['tallas'];
        echo "<br>";
        echo $tallamInventarioVenta = $key['tallam'];
        echo "<br>";
        echo $tallalInventarioVenta = $key['tallal'];
        echo "<br>";
        echo $tallaxlInventarioVenta = $key['tallaxl'];
        echo "<br>";
        echo $tallauInventarioVenta = $key['tallau'];
        echo "<br>";
        echo $tallaestInventarioVenta = $key['tallaest'];
        echo "<br>";

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
            
            WHERE id_inventario=" . $id_inventario;


        $modulesDecrementoInventario = $conexion->query($consultaDecrementoInventario);

        $fecha = date("Y-m-d");

        $consultaCambioEstadoVenta = "UPDATE ventas_globales SET 
     
        estado='CANCELADO',
        cliente_aprobo='CANCELADO', 
        cartera_aprobo='CANCELADO',
        alistamiento='CANCELADO', 
        despachada='CANCELADO' 
        
        WHERE id_venta=" . $id_venta;


        // ECHO $consultaDecrementoInventario;


    $modulesDecrementoInventario = $conexion->query($consultaCambioEstadoVenta);

        echo "
            <script> 
                console.log('Se ha acualizado el inventario'); 
                 location.href = 'orden-nueva-venta-2.php?cliente=".$id_cliente."&id_venta=".$id_venta."&lista=true';
            </script>";




}
