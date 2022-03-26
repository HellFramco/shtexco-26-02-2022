<?php
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
$conexion = new Conexion();
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



}else 
{

}

function descuenta($id_inventario, $id_venta, $id_cliente, $id_lista){



    require_once("../modelo/db.php");

    $conexion = new Conexion();
    $arreglo = array();
    $i = 0;

    $consultaInventario = "SELECT * FROM lista_productos_ventas WHERE  id_lista=".$id_lista." and id_venta = " . $id_venta . " AND id_inventario=" . $id_inventario;
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
        echo $estadoInventario = $key['estado'];
        echo "<br>";
        echo $fecha_ingreso_productotInventario = $key['fecha_ingreso_producto'];
        $fecha_ingreso_productotInventario = date('Y-m-d');
        echo "<br>";
        echo $fecha_ingreso_inventariotInventario = $key['fecha_ingreso_inventario'];
        $fecha_ingreso_inventariotInventario= date('Y-m-d');
        echo "<br>";
        echo $precioInventario = $key['precio'];
        echo "<br>";
        echo $descuentoInventario = $key['descuento'];

        $descuentoInventario  = 0;
        echo "<br>";
        echo $id_usuarioInventario = $key['id_usuario'];
        $id_usuarioInventario= 1;
        echo "<br>";
        echo $id_ventaInventario = $key['id_venta'];
        echo "<br>";
        echo $id_inventarioInventario = $key['id_inventario'];
        echo "<br>";
        echo $referenciaInventario = $key['referencia'];
        echo "<br>";
        echo $siluetaInventario = $key['silueta'];
        echo "<br>";
        echo $categoriaInventario = $key['categoria'];
        echo "<br>";
        echo $colorInventario = $key['color'];
        echo "<br>";
        echo $marcaInventario = $key['marca'];
        echo "<br>";
        echo $descripcionInventario = $key['descripcion'];
        echo "<br>";
   
    

    }

    $fecha = date('Y-m-d H:i:s');
    $consultaCambioEstadoVenta = "UPDATE ventas_globales SET 
    alistamiento='SI', 
    fecha_alistamiento='" . $fecha . "', 
    estado='ALISTAMIENTO' 
    
    WHERE id_venta=" . $id_venta;

    $modulesDecrementoInventario = $conexion->query($consultaCambioEstadoVenta);


    $consulta2 = "INSERT INTO `listas_productos_despachos`( `talla6`, `talla8`, `talla10`, `talla12`, `talla14`, `talla16`, `talla18`, `talla20`, `talla26`,
     `talla28`, `talla30`, `talla32`, `talla34`, `talla36`, `talla38`, `tallas`, `tallam`, `tallal`, `tallaxl`, `tallau`, `tallaest`, `estado`, `fecha_ingreso_producto`, 
     `fecha_ingreso_inventario`, `precio`, `descuento`, `id_usuario`, `id_venta`, `id_inventario`, `referencia`, `silueta`, `categoria`, `color`, `marca`, `descripcion`)
      VALUES (".$talla6Inventario.",".$talla8Inventario.",".$talla10Inventario .",".$talla12Inventario.",".$talla14Inventario.",".$talla16Inventario.",".$talla18Inventario.",".$talla20Inventario.",".$talla26Inventario.",".$talla28Inventario.",". $talla30Inventario.",".$talla32Inventario.",
      ".$talla34Inventario.",".$talla36Inventario.",".$talla38Inventario.",".$tallasInventario.",".$tallamInventario.",".$tallalInventario.",".$tallaxlInventario.",".$tallauInventario .",".$tallaestInventario.",'".$estadoInventario."','".$fecha_ingreso_productotInventario."','".$fecha_ingreso_inventariotInventario."',".$precioInventario.",
      ".$descuentoInventario.", ".$id_usuarioInventario.", ".$id_ventaInventario.",".$id_inventarioInventario.",'".$referenciaInventario."','".$siluetaInventario."','".$categoriaInventario."','".$colorInventario."','".$marcaInventario."','".$descripcionInventario."')";

      echo $consulta2;

   
     $modules = $conexion->query($consulta2);
     if ($modules) {
      
            echo "
                <script>
                    alert('Alistamiento completado.');
                    location.href = 'ventas-por-despachar.php';
                </script>
            ";
        
    }



}



