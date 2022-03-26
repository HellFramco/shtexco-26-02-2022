<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<?php
session_start();
require_once "db.php";
require 'datosInventarios.php';
$inventarios = new Inventarios();
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_POST['accion'];

if ($accion == "registrar") {
    $fecha = date('Y-m-d');

    if($_POST['silueta'] == ''){ $descripcion = $_POST['categoria']." ".$_POST['marca']." REF: ".$_POST['referencia']; }
    else if($_POST['silueta'] != ''){ $descripcion = $_POST['silueta']." ".$_POST['marca']." REF: ".$_POST['referencia']; }

    $sqlConteo = "SELECT MAX(id_inventario) AS id FROM inventarios_productos";
    $regConteo = $conexion->query($sqlConteo)->fetchAll();
    
    $newSku = $regConteo[0][0];
    $newSku = $newSku + 1;

    $skuNewCreated = $_POST['referencia'].'-'.$newSku;

    //print_r($skuNewCreated);
    //return;

    $sql = "INSERT INTO inventarios_productos ( origen_producto, proveedor_prenda, referencia_proveedor, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla6D, talla8, talla8D, talla10, talla10D, talla12, talla12D, talla14, talla14D, talla16, talla16D, talla18, talla18D, talla20, talla20D, talla26, talla26D, talla28, talla28D, talla30, talla30D, talla32, talla32D, talla34, talla34D, talla36, talla36D, talla38, talla38D, tallas, tallasD, tallam, tallamD, tallal, tallalD, tallaxl, tallaxlD, tallau, tallauD, tallaest, tallaestD, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, reprogramacion)
    VALUES (
    '".$_POST['origen_producto']."',
    '".$_POST['proveedor_prenda']."',
    '".$_POST['ref_proveedor']."',
    ".$_POST['precio_mayor'].",
    '".$skuNewCreated."',
    '".$descripcion."',
    '".$_POST['marca']."',
    '".$_POST['tipo']."',
    '".$_POST['silueta']."',
    '".$_POST['tela']."',
    '".$_POST['categoria']."',
    '".$_POST['genero']."',
    '".$_POST['coleccion']."',
    '".$_POST['bodega']."',
    '".$_POST['ruta']."',
    '".$_POST['color']."',
    '".$_POST['talla6']."',
    '".$_POST['talla6']."',
    '".$_POST['talla8']."',
    '".$_POST['talla8']."',
    '".$_POST['talla10']."',
    '".$_POST['talla10']."',
    '".$_POST['talla12']."',
    '".$_POST['talla12']."',
    '".$_POST['talla14']."',
    '".$_POST['talla14']."',
    '".$_POST['talla16']."',
    '".$_POST['talla16']."',
    '".$_POST['talla18']."',
    '".$_POST['talla18']."',
    '".$_POST['talla20']."',
    '".$_POST['talla20']."',
    '".$_POST['talla26']."',
    '".$_POST['talla26']."',
    '".$_POST['talla28']."',
    '".$_POST['talla28']."',
    '".$_POST['talla30']."',
    '".$_POST['talla30']."',
    '".$_POST['talla32']."',
    '".$_POST['talla32']."',
    '".$_POST['talla34']."',
    '".$_POST['talla34']."',
    '".$_POST['talla36']."',
    '".$_POST['talla36']."',
    '".$_POST['talla38']."',
    '".$_POST['talla38']."',
    '".$_POST['tallas']."',
    '".$_POST['tallas']."',
    '".$_POST['tallam']."',
    '".$_POST['tallam']."',
    '".$_POST['tallal']."',
    '".$_POST['tallal']."',
    '".$_POST['tallaxl']."',
    '".$_POST['tallaxl']."',
    '".$_POST['tallau']."',
    '".$_POST['tallau']."',
    '".$_POST['tallaest']."',
    '".$_POST['tallaest']."',
    now(),
    now(),
    '".$_POST['precio']."',
    '".$_POST['id_usuario']."',
    'subido',
    '".$_POST['proveedor']."',
    1

    )";
            
            
              $sql_historial = "INSERT INTO historial_inventarios_productos ( id_inventario_producto, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, precio, id_usuario,estado, proveedor, reprogramacion, observacion)
            VALUES (
            0,
            ".$_POST['precio_mayor'].",
            '".$_POST['referencia']."',
            '".$descripcion."',
            '".$_POST['marca']."',
            '".$_POST['tipo']."',
            '".$_POST['silueta']."',
            '".$_POST['tela']."',
            '".$_POST['categoria']."',
            '".$_POST['genero']."',
            '".$_POST['coleccion']."',
            '".$_POST['bodega']."',
            '".$_POST['ruta']."',
            '".$_POST['color']."',
            '".$_POST['talla6']."',
            '".$_POST['talla8']."',
            '".$_POST['talla10']."',
            '".$_POST['talla12']."',
            '".$_POST['talla14']."',
            '".$_POST['talla16']."',
            '".$_POST['talla18']."',
            '".$_POST['talla20']."',
            '".$_POST['talla26']."',
            '".$_POST['talla28']."',
            '".$_POST['talla30']."',
            '".$_POST['talla32']."',
            '".$_POST['talla34']."',
            '".$_POST['talla36']."',
            '".$_POST['talla38']."',
            '".$_POST['tallas']."',
            '".$_POST['tallam']."',
            '".$_POST['tallal']."',
            '".$_POST['tallaxl']."',
            '".$_POST['tallau']."',
            '".$_POST['tallaest']."',
            '".$_POST['precio']."',
            '".$_POST['id_usuario']."',
            'subido',
            '".$_POST['proveedor']."',
            1,
            'SE HIZO UN REGISTRO DE PRODUCTO'

            )";

            
            
            
    $reg = $conexion->query($sql);
    
    $reg_historial = $conexion->query($sql_historial);
    if ($reg) {

        
        echo "
        <script>
            alert('Registrado');
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
    
}

else if ($accion == "actualizarInventario") {
    $fecha = date('Y-m-d');
    
    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();
    foreach ($reg as $key) {
        $talla6 = $key['talla6'] + $_POST['talla6'];
        $talla8 = $key['talla8'] + $_POST['talla8'];
        $talla10 = $key['talla10'] + $_POST['talla10'];
        $talla12 = $key['talla12'] + $_POST['talla12'];
        $talla14 = $key['talla14'] + $_POST['talla14'];
        $talla16 = $key['talla16'] + $_POST['talla16'];
        $talla18 = $key['talla18'] + $_POST['talla18'];
        $talla20 = $key['talla20'] + $_POST['talla20'];
        $talla26 = $key['talla26'] + $_POST['talla26'];
        $talla28 = $key['talla28'] + $_POST['talla28'];
        $talla30 = $key['talla30'] + $_POST['talla30'];
        $talla32 = $key['talla32'] + $_POST['talla32'];
        $talla34 = $key['talla34'] + $_POST['talla34'];
        $talla36 = $key['talla36'] + $_POST['talla36'];
        $talla38 = $key['talla38'] + $_POST['talla38'];
        $tallas = $key['tallas'] + $_POST['tallas'];
        $tallam = $key['tallam'] + $_POST['tallam'];
        $tallal = $key['tallal'] + $_POST['tallal'];
        $tallaxl = $key['tallaxl'] + $_POST['tallaxl'];
        $tallau = $key['tallau'] + $_POST['tallau'];
        $tallaest = $key['tallaest'] + $_POST['tallaest'];

        $sqlActualizaInventario = "UPDATE inventarios_productos SET talla6 = ".$talla6.", talla8=".$talla8.", talla10 = ".$talla10.", talla12 = ".$talla12.", talla14 = ".$talla14.", talla16 = ".$talla16.", talla18 = ".$talla18.", talla20 = ".$talla20.", talla26 = ".$talla26.", talla28 = ".$talla28.", talla30 = ".$talla30.", talla32 = ".$talla32.", talla34 = ".$talla34.", talla36 = ".$talla36.", talla38 = ".$talla38.", tallas = ".$tallas.", tallam = ".$tallam.", tallal = ".$tallal.", tallaxl = ".$tallaxl.", tallau = ".$tallau.", tallaest = ".$tallaest." WHERE id_inventario = ".$_POST['id_inventario'];
        $regActualiza = $conexion->query($sqlActualizaInventario);
    }
    if ($regActualiza) {
        echo "
        <script>
            alert('Registrado');
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
    
}

else if ($accion == "subirPeso") {
    $fecha = date('Y-m-d');
        // var_dump($_POST);
        
        $talla6 = $_POST['talla6'] == ''?0:$_POST['talla6'];
        $talla8 = $_POST['talla8'] == ''?0:$_POST['talla8'];
        $talla10 = $_POST['talla10'] == ''?0:$_POST['talla10'];
        $talla12 = $_POST['talla12'] == ''?0:$_POST['talla12'];
        $talla14 = $_POST['talla14'] == ''?0:$_POST['talla14'];
        $talla16 = $_POST['talla16'] == ''?0:$_POST['talla16'];
        $talla18 = $_POST['talla18'] == ''?0:$_POST['talla18'];
        $talla20 = $_POST['talla20'] == ''?0:$_POST['talla20'];
        $talla26 = $_POST['talla26'] == ''?0:$_POST['talla26'];
        $talla28 = $_POST['talla28'] == ''?0:$_POST['talla28'];
        $talla30 = $_POST['talla30'] == ''?0:$_POST['talla30'];
        $talla32 = $_POST['talla32'] == ''?0:$_POST['talla32'];
        $talla34 = $_POST['talla34'] == ''?0:$_POST['talla34'];
        $talla36 = $_POST['talla36'] == ''?0:$_POST['talla36'];
        $talla38 = $_POST['talla38'] == ''?0:$_POST['talla38'];
        $tallas = $_POST['tallas'] == ''?0:$_POST['tallas'];
        $tallam = $_POST['tallam'] == ''?0:$_POST['tallam'];
        $tallal = $_POST['tallal'] == ''?0:$_POST['tallal'];
        $tallaxl = $_POST['tallaxl'] == ''?0:$_POST['tallaxl'];
        $tallau = $_POST['tallau'] == ''?0:$_POST['tallau'];
        $tallaest = $_POST['tallaest'] == ''?0:$_POST['tallaest'];

        $sqlActualizaInventario = "UPDATE inventarios_productos SET peso_talla6 = '".$talla6."', peso_talla8='".$talla8."', peso_talla10 = '".$talla10."', peso_talla12 = '".$talla12."', peso_talla14 = '".$talla14."', peso_talla16 = '".$talla16."', peso_talla18 = '".$talla18."', peso_talla20 = '".$talla20."', peso_talla26 = '".$talla26."', peso_talla28 = '".$talla28."', peso_talla30 = '".$talla30."', peso_talla32 = '".$talla32."', peso_talla34 = '".$talla34."', peso_talla36 = '".$talla36."', peso_talla38 = '".$talla38."', peso_tallas = '".$tallas."', peso_tallam = '".$tallam."', peso_tallal = '".$tallal."', peso_tallaxl = '".$tallaxl."', peso_tallau = '".$tallau."', peso_tallaest = '".$tallaest."' WHERE id_inventario = ".$_POST['id_inventario'];
            $regActualiza = $conexion->query($sqlActualizaInventario);

        
        if ($regActualiza) {
            echo "
            <script>
                alert('Registrado');
                window.close();
            </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('No registrado, por favor verifique.');
                    
                </script>
            ";
        }

        
    
}

else if ($accion == "nuevaReprogramacion") {
    // echo "<pre>";
    //     var_dump($_POST);
    //     echo "<pre>";
    $fecha = date('Y-m-d');
    $id_usuario = $_SESSION['id'];
    $sqlConteo = "SELECT MAX(id_inventario) AS id FROM inventarios_productos";
    $regConteo = $conexion->query($sqlConteo)->fetchAll();
    
    $newSku = $regConteo[0][0];
    $newSku = $newSku + 1;

    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();


    foreach ($reg as $key) {
        $skuAll = $key['referencia'];
        $skuArray = explode("-", $skuAll);
        $skuInibrid = $skuArray[0];

        //echo $skuInibrid;
        //echo"<br>";
        //return;

        $referenciaDinamica = $skuInibrid.'-'.$newSku;

    //     $conteoRepro = "SELECT count(id_inventario)as conteo FROM inventarios_productos WHERE referencia = ".$key['referencia'];
    //     $regRepro = $conexion->query($conteoRepro)->fetchAll();
    //     foreach($regRepro as $conteo){
    //         echo $conteoReprogramaciones = $conteo['conteo']+1;
    //     }


    //     $talla6 = $key['talla6'] + $_POST['talla6'];
    //     $talla8 = $key['talla8'] + $_POST['talla8'];
    //     $talla10 = $key['talla10'] + $_POST['talla10'];
    //     $talla12 = $key['talla12'] + $_POST['talla12'];
    //     $talla14 = $key['talla14'] + $_POST['talla14'];
    //     $talla16 = $key['talla16'] + $_POST['talla16'];
    //     $talla18 = $key['talla18'] + $_POST['talla18'];
    //     $talla20 = $key['talla20'] + $_POST['talla20'];
    //     $talla26 = $key['talla26'] + $_POST['talla26'];
    //     $talla28 = $key['talla28'] + $_POST['talla28'];
    //     $talla30 = $key['talla30'] + $_POST['talla30'];
    //     $talla32 = $key['talla32'] + $_POST['talla32'];
    //     $talla34 = $key['talla34'] + $_POST['talla34'];
    //     $talla36 = $key['talla36'] + $_POST['talla36'];
    //     $talla38 = $key['talla38'] + $_POST['talla38'];
    //     $tallas = $key['tallas'] + $_POST['tallas'];
    //     $tallam = $key['tallam'] + $_POST['tallam'];
    //     $tallal = $key['tallal'] + $_POST['tallal'];
    //     $tallaxl = $key['tallaxl'] + $_POST['tallaxl'];
    //     $tallau = $key['tallau'] + $_POST['tallau'];
    //     $tallaest = $key['tallaest'] + $_POST['tallaest'];

        $sqlActualizaInventario = "INSERT INTO inventarios_productos
                                        ( 
                                         proveedor,
                                         referencia, 
                                         reprogramacion, 
                                         descripcion,
                                         marca, 
                                         tipo, 
                                         silueta, 
                                         tela, 
                                         categoria, 
                                         genero, 
                                         coleccion, 
                                         bodega,
                                         ruta,
                                         color,
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
                                         talla6D,
                                         talla8D,
                                         talla10D,
                                         talla12D,
                                         talla14D,
                                         talla16D,
                                         talla18D,
                                         talla20D, 
                                         talla26D, 
                                         talla28D, 
                                         talla30D, 
                                         talla32D, 
                                         talla34D, 
                                         talla36D, 
                                         talla38D, 
                                         tallasD,
                                         tallamD, 
                                         tallalD, 
                                         tallaxlD, 
                                         tallauD, 
                                         tallaestD,
                                         fecha_ingreso_producto,
                                         fecha_ingreso_inventario,
                                         precio,
                                         precio_mayor,
                                         estado,
                                         id_usuario
                                         
                                    )
                                   VALUES
                                   (
                                   '".$key['proveedor']."',
                                   '".$referenciaDinamica."',
                                   ".$newSku.",
                                   '".$key['descripcion']."',
                                   '".$key['marca']."',
                                   '".$key['tipo']."',
                                   '".$key['silueta']."',
                                   '".$key['tela']."',
                                   '".$key['categoria']."',
                                   '".$key['genero']."',
                                   '".$key['coleccion']."',
                                   '".$key['bodega']."',
                                   'NINGUNA',
                                   '".$key['color']."',
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
                                    '".$fecha."',
                                    '".$fecha."',
                                    ".$key['precio'].",
                                    ".$key['precio_mayor'].",
                                    'subido',
                                    '".$_SESSION['id']."'
                                    )    
                                     ";
        $regActualiza = $conexion->query($sqlActualizaInventario);
        // echo $sqlActualizaInventario;
    if ($regActualiza) {
        $sql_historial = "INSERT INTO historial_inventarios_productos ( id_inventario_producto, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, precio, id_usuario,estado, proveedor, reprogramacion, observacion)
            VALUES (
            ".$_POST['id_inventario'].",
            ".$key['precio_mayor'].",
            '".$key['referencia']."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            'NINGUNA',
            '".$key['color']."',
            '".$_POST['talla6']."',
            '".$_POST['talla8']."',
            '".$_POST['talla10']."',
            '".$_POST['talla12']."',
            '".$_POST['talla14']."',
            '".$_POST['talla16']."',
            '".$_POST['talla18']."',
            '".$_POST['talla20']."',
            '".$_POST['talla26']."',
            '".$_POST['talla28']."',
            '".$_POST['talla30']."',
            '".$_POST['talla32']."',
            '".$_POST['talla34']."',
            '".$_POST['talla36']."',
            '".$_POST['talla38']."',
            '".$_POST['tallas']."',
            '".$_POST['tallam']."',
            '".$_POST['tallal']."',
            '".$_POST['tallaxl']."',
            '".$_POST['tallau']."',
            '".$_POST['tallaest']."',
            '".$fecha."',
            '".$key['precio']."',
            '".$key['id_usuario']."',
            '".$key['estado']."',
            '".$key['proveedor']."',
            1,
            'SE HIZO UNA REPROGRAMACION DE PRENDAS AL SISTEMA'

            )";
            $reg_historial = $conexion->query($sql_historial);

        echo "
        <script>
            alert('reprogramacion Registrada');
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
    }
    
}

else if ($accion == "nuevaAsignacionImperfecto") {
    // echo "<pre>";
    //     var_dump($_POST);
    //     echo "<pre>";
    $fecha = date('Y-m-d');
    echo $id_usuario = $_SESSION['id'];
    $sqlConteo = "SELECT count(id_inventario) as conteo FROM inventarios_productos WHERE referencia = '".$_POST['referencia']."'";
    $regConteo = $conexion->query($sqlConteo)->fetchAll();

    // mostrare cuantas referencias existen con la misma referencia
    foreach ($regConteo as $preconteo) {
        $preconteoReferencias = $preconteo['conteo'] + 1;
    }



    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();


    foreach ($reg as $key) {
        $referenciaDinamica = $key['referencia'].'-'.$preconteoReferencias;
    

        $sqlActualizaInventario = "INSERT INTO inventarios_productos
                                        ( 
                                         proveedor,
                                         referencia, 
                                         reprogramacion, 
                                         descripcion,
                                         marca, 
                                         tipo, 
                                         silueta, 
                                         tela, 
                                         categoria, 
                                         genero, 
                                         coleccion, 
                                         bodega,
                                         ruta,
                                         color,
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
                                         talla6D,
                                         talla8D,
                                         talla10D,
                                         talla12D,
                                         talla14D,
                                         talla16D,
                                         talla18D,
                                         talla20D, 
                                         talla26D, 
                                         talla28D, 
                                         talla30D, 
                                         talla32D, 
                                         talla34D, 
                                         talla36D, 
                                         talla38D, 
                                         tallasD,
                                         tallamD, 
                                         tallalD, 
                                         tallaxlD, 
                                         tallauD, 
                                         tallaestD,
                                         fecha_ingreso_producto,
                                         fecha_ingreso_inventario,
                                         precio,
                                         precio_mayor,
                                         estado,
                                         id_usuario
                                         
                                    )
                                   VALUES
                                   (
                                   '".$key['proveedor']."',
                                   '".$referenciaDinamica."',
                                   ".$preconteoReferencias.",
                                   '".$key['descripcion']."',
                                   '".$key['marca']."',
                                   '".$key['tipo']."',
                                   '".$key['silueta']."',
                                   '".$key['tela']."',
                                   '".$key['categoria']."',
                                   '".$key['genero']."',
                                   '".$key['coleccion']."',
                                   '".$_POST['bodega']."',
                                   '".$key['ruta']."',
                                   '".$key['color']."',
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
                                    '".$fecha."',
                                    '".$fecha."',
                                    ".$key['precio'].",
                                    ".$key['precio_mayor'].",
                                    'IMPERFECTO',
                                    '".$_SESSION['id']."'
                                    
                                    )    
                                     ";
        $regActualiza = $conexion->query($sqlActualizaInventario);
        // echo $sqlActualizaInventario;
    if ($regActualiza) {
        $sql_historial = "INSERT INTO historial_inventarios_productos ( id_inventario_producto, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, precio, id_usuario,estado, proveedor, reprogramacion, observacion)
            VALUES (
            ".$_POST['id_inventario'].",
            ".$key['precio_mayor'].",
            '".$key['referencia']."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$_POST['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$_POST['talla6']."',
            '".$_POST['talla8']."',
            '".$_POST['talla10']."',
            '".$_POST['talla12']."',
            '".$_POST['talla14']."',
            '".$_POST['talla16']."',
            '".$_POST['talla18']."',
            '".$_POST['talla20']."',
            '".$_POST['talla26']."',
            '".$_POST['talla28']."',
            '".$_POST['talla30']."',
            '".$_POST['talla32']."',
            '".$_POST['talla34']."',
            '".$_POST['talla36']."',
            '".$_POST['talla38']."',
            '".$_POST['tallas']."',
            '".$_POST['tallam']."',
            '".$_POST['tallal']."',
            '".$_POST['tallaxl']."',
            '".$_POST['tallau']."',
            '".$_POST['tallaest']."',
            '".$fecha."',
            '".$key['precio']."',
            '".$key['id_usuario']."',
            '".$key['estado']."',
            '".$key['proveedor']."',
            1,
            'SE CLASIFICO COMO IMPERFECTO'

            )";
            $reg_historial = $conexion->query($sql_historial);
        echo "
        <script>
            alert('Registrado');
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
}
    
}



else if ($accion == "nuevaReubicacionPrenda") {
    // echo "<pre>";
    //     var_dump($_POST);
    //     echo "<pre>";
    $fecha = date('Y-m-d');
    echo $id_usuario = $_SESSION['id'];
    $sqlConteo = "SELECT MAX(id_inventario) AS id FROM inventarios_productos";
    $regConteo = $conexion->query($sqlConteo)->fetchAll();
    
    $newSku = $regConteo[0][0];
    $newSku = $newSku + 1;

    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();


    foreach ($reg as $key) {
        $skuAll = $key['referencia'];
        $skuArray = explode("-", $skuAll);
        $skuInibrid = $skuArray[0];
        $referenciaDinamica = $skuInibrid.'-'.$newSku;


        $sqlInventario = "INSERT INTO inventarios_productos
                                        ( 
                                         proveedor,
                                         referencia, 
                                         reprogramacion, 
                                         descripcion,
                                         marca, 
                                         tipo, 
                                         silueta, 
                                         tela, 
                                         categoria, 
                                         genero, 
                                         coleccion, 
                                         bodega,
                                         ruta,
                                         color,
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
                                         talla6D,
                                         talla8D,
                                         talla10D,
                                         talla12D,
                                         talla14D,
                                         talla16D,
                                         talla18D,
                                         talla20D, 
                                         talla26D, 
                                         talla28D, 
                                         talla30D, 
                                         talla32D, 
                                         talla34D, 
                                         talla36D, 
                                         talla38D, 
                                         tallasD,
                                         tallamD, 
                                         tallalD, 
                                         tallaxlD, 
                                         tallauD, 
                                         tallaestD,
                                         fecha_ingreso_producto,
                                         fecha_ingreso_inventario,
                                         precio,
                                         precio_mayor,
                                         estado,
                                         id_usuario
                                         
                                    )
                                   VALUES
                                   (
                                   '".$key['proveedor']."',
                                   '".$referenciaDinamica."',
                                   ".$newSku.",
                                   '".$key['descripcion']."',
                                   '".$key['marca']."',
                                   '".$key['tipo']."',
                                   '".$key['silueta']."',
                                   '".$key['tela']."',
                                   '".$key['categoria']."',
                                   '".$key['genero']."',
                                   '".$key['coleccion']."',
                                   '".$_POST['bodega']."',
                                   '".$key['ruta']."',
                                   '".$key['color']."',
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
                                    '".$fecha."',
                                    '".$fecha."',
                                    ".$key['precio'].",
                                    ".$key['precio_mayor'].",
                                    'IMPERFECTO',
                                    '".$key['id_usuario']."'
                                    
                                    )    
                                     ";
        $regActualiza = $conexion->query($sqlInventario);
        // echo $sqlActualizaInventario;
    if ($regActualiza) {

        $talla6 = ($key['talla6'] - $_POST['talla6']);
        $talla8 = ($key['talla8'] - $_POST['talla8']);
        $talla10 = ($key['talla10'] - $_POST['talla10']);
        $talla12 = ($key['talla12'] - $_POST['talla12']);
        $talla14 = ($key['talla14'] - $_POST['talla14']);
        $talla16 = ($key['talla16'] - $_POST['talla16']);
        $talla18 = ($key['talla18'] - $_POST['talla18']);
        $talla20 = ($key['talla20'] - $_POST['talla20']);
        $talla24 = ($key['talla24'] - $_POST['talla24']);
        $talla26 = ($key['talla26'] - $_POST['talla26']);
        $talla28 = ($key['talla28'] - $_POST['talla28']);
        $talla30 = ($key['talla30'] - $_POST['talla30']);
        $talla32 = ($key['talla32'] - $_POST['talla32']);
        $talla34 = ($key['talla34'] - $_POST['talla34']);
        $talla36 = ($key['talla36'] - $_POST['talla36']);
        $talla38 = ($key['talla38'] - $_POST['talla38']);
        $tallas = ($key['tallas'] - $_POST['tallas']);
        $tallam = ($key['tallam'] - $_POST['tallam']);
        $tallal = ($key['tallal'] - $_POST['tallal']);
        $tallaxl = ($key['tallaxl'] - $_POST['tallaxl']);
        $tallau = ($key['tallau'] - $_POST['tallau']);

        $sqlActualizaInventario = "UPDATE inventarios_productos SET talla6 = '".$talla6."', talla8='".$talla8."', talla10 = '".$talla10."', talla12 = '".$talla12."', talla14 = '".$talla14."', talla16 = '".$talla16."', talla18 = '".$talla18."', talla20 = '".$talla20."', talla26 = '".$talla26."', talla28 = '".$talla28."', talla30 = '".$talla30."', talla32 = '".$talla32."', talla34 = '".$talla34."', talla36 = '".$talla36."', talla38 = '".$talla38."', tallas = '".$tallas."', tallam = '".$tallam."', tallal = '".$tallal."', tallaxl = '".$tallaxl."', tallau = '".$tallau."', tallaest = '".$tallaest."' WHERE id_inventario = ".$_POST['id_inventario'];
        $regActualizaCantidades = $conexion->query($sqlActualizaInventario);

        $sql_historial = "INSERT INTO historial_inventarios_productos ( id_inventario_producto, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, precio, id_usuario,estado, proveedor, reprogramacion, observacion)
            VALUES (
            ".$_POST['id_inventario'].",
            ".$key['precio_mayor'].",
            '".$key['referencia']."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$_POST['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$_POST['talla6']."',
            '".$_POST['talla8']."',
            '".$_POST['talla10']."',
            '".$_POST['talla12']."',
            '".$_POST['talla14']."',
            '".$_POST['talla16']."',
            '".$_POST['talla18']."',
            '".$_POST['talla20']."',
            '".$_POST['talla26']."',
            '".$_POST['talla28']."',
            '".$_POST['talla30']."',
            '".$_POST['talla32']."',
            '".$_POST['talla34']."',
            '".$_POST['talla36']."',
            '".$_POST['talla38']."',
            '".$_POST['tallas']."',
            '".$_POST['tallam']."',
            '".$_POST['tallal']."',
            '".$_POST['tallaxl']."',
            '".$_POST['tallau']."',
            '".$_POST['tallaest']."',
            '".$fecha."',
            '".$key['precio']."',
            '".$key['id_usuario']."',
            '".$key['estado']."',
            '".$key['proveedor']."',
            1,
            'SE CLASIFICO COMO IMPERFECTO'

            )";
            $reg_historial = $conexion->query($sql_historial);

            
            
            
   

        echo "
        <script>
            alert('Registrado');
            //location.href = '../panel/visualizar-inventario-subido.php';
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
    }
    
}

else if ($accion == "nuevoTrasladoInventarioBodega") {
    // echo "<pre>";
    //     var_dump($_POST);
    //     echo "<pre>";
    $fecha = date('Y-m-d');
    echo $id_usuario = $_SESSION['id'];
    $sqlConteo = "SELECT count(id_inventario) as conteo FROM inventarios_productos WHERE referencia = '".$_POST['referencia']."'";
    $regConteo = $conexion->query($sqlConteo)->fetchAll();

    // mostrare cuantas referencias existen con la misma referencia
    foreach ($regConteo as $preconteo) {
        $preconteoReferencias = $preconteo['conteo'] + 1;
    }



    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();


    foreach ($reg as $key) {
        $referenciaDinamica = $key['referencia'].'-'.$preconteoReferencias;


        $sqlInventario = "INSERT INTO inventarios_productos
                                        ( 
                                         proveedor,
                                         referencia, 
                                         reprogramacion, 
                                         descripcion,
                                         marca, 
                                         tipo, 
                                         silueta, 
                                         tela, 
                                         categoria, 
                                         genero, 
                                         coleccion, 
                                         bodega,
                                         ruta,
                                         color,
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
                                         talla6D,
                                         talla8D,
                                         talla10D,
                                         talla12D,
                                         talla14D,
                                         talla16D,
                                         talla18D,
                                         talla20D, 
                                         talla26D, 
                                         talla28D, 
                                         talla30D, 
                                         talla32D, 
                                         talla34D, 
                                         talla36D, 
                                         talla38D, 
                                         tallasD,
                                         tallamD, 
                                         tallalD, 
                                         tallaxlD, 
                                         tallauD, 
                                         tallaestD,
                                         fecha_ingreso_producto,
                                         fecha_ingreso_inventario,
                                         precio,
                                         precio_mayor,
                                         estado,
                                         id_usuario
                                         
                                    )
                                   VALUES
                                   (
                                   '".$key['proveedor']."',
                                   '".$referenciaDinamica."',
                                   ".$preconteoReferencias.",
                                   '".$key['descripcion']."',
                                   '".$key['marca']."',
                                   '".$key['tipo']."',
                                   '".$key['silueta']."',
                                   '".$key['tela']."',
                                   '".$key['categoria']."',
                                   '".$key['genero']."',
                                   '".$key['coleccion']."',
                                   '".$_POST['bodega']."',
                                   '".$key['ruta']."',
                                   '".$key['color']."',
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
                                    '".$fecha."',
                                    '".$fecha."',
                                    ".$key['precio'].",
                                    ".$key['precio_mayor'].",
                                    'EXISTENCIA',
                                    '".$key['id_usuario']."'
                                    
                                    )    
                                     ";
        $regActualiza = $conexion->query($sqlInventario);
        // echo $sqlActualizaInventario;
    if ($regActualiza) {

        $talla6 = ($key['talla6'] - $_POST['talla6']);
        $talla8 = ($key['talla8'] - $_POST['talla8']);
        $talla10 = ($key['talla10'] - $_POST['talla10']);
        $talla12 = ($key['talla12'] - $_POST['talla12']);
        $talla14 = ($key['talla14'] - $_POST['talla14']);
        $talla16 = ($key['talla16'] - $_POST['talla16']);
        $talla18 = ($key['talla18'] - $_POST['talla18']);
        $talla20 = ($key['talla20'] - $_POST['talla20']);
        $talla24 = ($key['talla24'] - $_POST['talla24']);
        $talla26 = ($key['talla26'] - $_POST['talla26']);
        $talla28 = ($key['talla28'] - $_POST['talla28']);
        $talla30 = ($key['talla30'] - $_POST['talla30']);
        $talla32 = ($key['talla32'] - $_POST['talla32']);
        $talla34 = ($key['talla34'] - $_POST['talla34']);
        $talla36 = ($key['talla36'] - $_POST['talla36']);
        $talla38 = ($key['talla38'] - $_POST['talla38']);
        $tallas = ($key['tallas'] - $_POST['tallas']);
        $tallam = ($key['tallam'] - $_POST['tallam']);
        $tallal = ($key['tallal'] - $_POST['tallal']);
        $tallaxl = ($key['tallaxl'] - $_POST['tallaxl']);
        $tallau = ($key['tallau'] - $_POST['tallau']);

        $sqlActualizaInventario = "UPDATE inventarios_productos SET talla6 = '".$talla6."', talla8='".$talla8."', talla10 = '".$talla10."', talla12 = '".$talla12."', talla14 = '".$talla14."', talla16 = '".$talla16."', talla18 = '".$talla18."', talla20 = '".$talla20."', talla26 = '".$talla26."', talla28 = '".$talla28."', talla30 = '".$talla30."', talla32 = '".$talla32."', talla34 = '".$talla34."', talla36 = '".$talla36."', talla38 = '".$talla38."', tallas = '".$tallas."', tallam = '".$tallam."', tallal = '".$tallal."', tallaxl = '".$tallaxl."', tallau = '".$tallau."', tallaest = '".$tallaest."' WHERE id_inventario = ".$_POST['id_inventario'];
        $regActualizaCantidades = $conexion->query($sqlActualizaInventario);

        $sql_historial = "INSERT INTO historial_inventarios_productos ( id_inventario_producto, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, precio, id_usuario,estado, proveedor, reprogramacion, observacion)
            VALUES (
            ".$_POST['id_inventario'].",
            ".$key['precio_mayor'].",
            '".$key['referencia']."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$_POST['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$_POST['talla6']."',
            '".$_POST['talla8']."',
            '".$_POST['talla10']."',
            '".$_POST['talla12']."',
            '".$_POST['talla14']."',
            '".$_POST['talla16']."',
            '".$_POST['talla18']."',
            '".$_POST['talla20']."',
            '".$_POST['talla26']."',
            '".$_POST['talla28']."',
            '".$_POST['talla30']."',
            '".$_POST['talla32']."',
            '".$_POST['talla34']."',
            '".$_POST['talla36']."',
            '".$_POST['talla38']."',
            '".$_POST['tallas']."',
            '".$_POST['tallam']."',
            '".$_POST['tallal']."',
            '".$_POST['tallaxl']."',
            '".$_POST['tallau']."',
            '".$_POST['tallaest']."',
            '".$fecha."',
            '".$key['precio']."',
            '".$key['id_usuario']."',
            '".$key['estado']."',
            '".$key['proveedor']."',
            1,
            'SE HIZO UN TRASLADO DE INVENTARIO'

            )";
            $reg_historial = $conexion->query($sql_historial);

            
            
            
            
    $reg = $conexion->query($sql);
    
    $reg_historial = $conexion->query($sql_historial);

        echo "
        <script>
            alert('Registrado');
            //location.href = '../panel/visualizar-inventario-subido.php';
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
}
    
}

else if ($accion == "nuevaAsignacionColor") {
    // echo "<pre>";
    //     var_dump($_POST);
    //     echo "<pre>";
    $fecha = date('Y-m-d');
    echo $id_usuario = $_SESSION['id'];
    $sqlConteo = "SELECT MAX(id_inventario) AS id FROM inventarios_productos";
    $regConteo = $conexion->query($sqlConteo)->fetchAll();
    
    $newSku = $regConteo[0][0];
    $newSku = $newSku + 1;

    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();


    foreach ($reg as $key) {
        $skuAll = $key['referencia'];
        $skuArray = explode("-", $skuAll);
        $skuInibrid = $skuArray[0];

        $referenciaDinamica = $skuInibrid.'-'.$newSku;

        $sqlActualizaInventario = "INSERT INTO inventarios_productos
                                        ( 
                                         proveedor,
                                         referencia, 
                                         reprogramacion, 
                                         descripcion,
                                         marca, 
                                         tipo, 
                                         silueta, 
                                         tela, 
                                         categoria, 
                                         genero, 
                                         coleccion, 
                                         bodega,
                                         ruta,
                                         color,
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
                                         talla6D,
                                         talla8D,
                                         talla10D,
                                         talla12D,
                                         talla14D,
                                         talla16D,
                                         talla18D,
                                         talla20D, 
                                         talla26D, 
                                         talla28D, 
                                         talla30D, 
                                         talla32D, 
                                         talla34D, 
                                         talla36D, 
                                         talla38D, 
                                         tallasD,
                                         tallamD, 
                                         tallalD, 
                                         tallaxlD, 
                                         tallauD, 
                                         tallaestD,
                                         fecha_ingreso_producto,
                                         fecha_ingreso_inventario,
                                         precio,
                                         precio_mayor,
                                         estado,
                                         id_usuario
                                         
                                         
                                         
                                    )
                                   VALUES
                                   (
                                   '".$key['proveedor']."',
                                   '".$referenciaDinamica."',
                                   ".$newSku.",
                                   '".$key['descripcion']."',
                                   '".$key['marca']."',
                                   '".$key['tipo']."',
                                   '".$key['silueta']."',
                                   '".$key['tela']."',
                                   '".$key['categoria']."',
                                   '".$key['genero']."',
                                   '".$key['coleccion']."',
                                   '".$key['bodega']."',
                                   '".$key['ruta']."',
                                   '".$_POST['color']."',
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
                                    '".$fecha."',
                                    '".$fecha."',
                                    ".$key['precio'].",
                                    ".$key['precio_mayor'].",
                                    'SUBIDO',
                                    '".$_SESSION['id']."'
                                    
                                    )    
                                     ";
        $regActualiza = $conexion->query($sqlActualizaInventario);
        // echo $sqlActualizaInventario;
    if ($regActualiza) {

        $sql_historial = "INSERT INTO historial_inventarios_productos ( id_inventario_producto, precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, precio, id_usuario,estado, proveedor, reprogramacion, observacion)
            VALUES (
            ".$_POST['id_inventario'].",
            ".$key['precio_mayor'].",
            '".$key['referencia']."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$_POST['talla6']."',
            '".$_POST['talla8']."',
            '".$_POST['talla10']."',
            '".$_POST['talla12']."',
            '".$_POST['talla14']."',
            '".$_POST['talla16']."',
            '".$_POST['talla18']."',
            '".$_POST['talla20']."',
            '".$_POST['talla26']."',
            '".$_POST['talla28']."',
            '".$_POST['talla30']."',
            '".$_POST['talla32']."',
            '".$_POST['talla34']."',
            '".$_POST['talla36']."',
            '".$_POST['talla38']."',
            '".$_POST['tallas']."',
            '".$_POST['tallam']."',
            '".$_POST['tallal']."',
            '".$_POST['tallaxl']."',
            '".$_POST['tallau']."',
            '".$_POST['tallaest']."',
            '".$fecha."',
            '".$key['precio']."',
            '".$key['id_usuario']."',
            '".$key['estado']."',
            '".$key['proveedor']."',
            1,
            'SE REGISTRO UN NUEVO COLOR'

            )";
            $reg_historial = $conexion->query($sql_historial);

        echo "
        <script>
            alert('Registrado');
            window.close();
        </script>
        ";
    }
    else
    {
        echo "
            <script>
                alert('No registrado, por favor verifique.');
                
            </script>
        ";
    }
}
    
}

else if ($accion == "generaCodigosBarras") {
    $fecha = date('Y-m-d');
    // require '../codigo_barra/autoload.php';

    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();
    foreach ($reg as $key) {

        // conversion de datos a id unicos
        $id_inventario = $key['id_inventario'];
        $ref = $key['referencia'];
        $porciones = explode("-",$ref);
        $referencia = $porciones[0];    
        $descripcion = $key['descripcion'];
        $nombreColor = $key['color'];
        $marca = $inventarios->verIdMarca($key['marca']);
        $silueta = $inventarios->verIdSilueta($key['silueta']);
        $categoria = $inventarios->verIdCategoria($key['categoria']);
        $tela = $inventarios->verIdTela($key['tela']);
        $genero = $inventarios->verIdGenero($key['genero']);
        $color = $inventarios->verIdColor($key['color']);

        // proceso de subida de codigos de barras a la base de datos
        $cantidadTalla6 = $_POST['talla6'];
        if ($key['marca'] == "ABOUT" OR $key['marca'] == "MOST WANTED") {
        	$talla6 = 3;
        }
        else{
        	$talla6 = 6;
        }
        $sqlMaximo = "SELECT id_codigo as maximo FROM codigos_barras_validados order by id_codigo desc limit 1";
        $regMaximo = $conexion->query($sqlMaximo)->fetchAll();
        foreach ($regMaximo as $max) {
            $maximo = $max['maximo']+1;
        }
        echo "<table> ";
        for ($i=1; $i <= $cantidadTalla6 ; $i++) { 

            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla6."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'
            )";
            $reg = $conexion->query($sql);
            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla6."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


        }
        // echo " <table>";
        // echo "<hr>";

        $cantidadTalla8 = $_POST['talla8'];
        if ($key['marca'] == "ABOUT" OR $key['marca'] == "MOST WANTED") {
        	$talla8 = 5;
        }
        else{
        	$talla8 = 8;
        }

        for ($i=1; $i <= $cantidadTalla8 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla8."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla8."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla8."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla10 = $_POST['talla10'];
        if ($key['marca'] == "ABOUT" OR $key['marca'] == "MOST WANTED") {
        	$talla10 = 7;
        }
        else{
        	$talla10 = 10;
        }

        for ($i=1; $i <= $cantidadTalla10 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla10."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla10."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla10."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla12 = $_POST['talla12'];
        if ($key['marca'] == "ABOUT" OR $key['marca'] == "MOST WANTED") {
        	$talla12 = 9;
        }
        else{
        	$talla12 = 12;
        }

        for ($i=1; $i <= $cantidadTalla12 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla12."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla12."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla12."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla14 = $_POST['talla14'];
        if ($key['marca'] == "ABOUT" OR $key['marca'] == "MOST WANTED") {
        	$talla14 = 11;
        }
        else{
        	$talla14 = 14;
        }

        for ($i=1; $i <= $cantidadTalla14 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla14."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla14."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla14."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla16 = $_POST['talla16'];
        if ($key['marca'] == "ABOUT" OR $key['marca'] == "MOST WANTED") {
        	$talla16 = 13;
        }
        else{
        	$talla16 = 16;
        }

        for ($i=1; $i <= $cantidadTalla16 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla16."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla16."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla16."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla18 = $_POST['talla18'];
        $talla18 = 18;

        for ($i=1; $i <= $cantidadTalla18 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla18."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla18."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla18."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla20 = $_POST['talla20'];
        $talla20 = 20;

        for ($i=1; $i <= $cantidadTalla20 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla20."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla20."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla20."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla26 = $_POST['talla26'];
        $talla26 = 26;

        for ($i=1; $i <= $cantidadTalla26 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla26."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla26."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla26."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla28 = $_POST['talla28'];
        $talla28 = 28;

        for ($i=1; $i <= $cantidadTalla28 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla28."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla28."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla28."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla30 = $_POST['talla30'];
        $talla30 = 30;

        for ($i=1; $i <= $cantidadTalla30 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla30."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla30."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla30."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla32 = $_POST['talla32'];
        $talla32 = 32;

        for ($i=1; $i <= $cantidadTalla32 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla32."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla32."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla32."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla34 = $_POST['talla34'];
        $talla34 = 34;

        for ($i=1; $i <= $cantidadTalla34 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla34."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla34."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla34."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla36 = $_POST['talla36'];
        $talla36 = 36;

        for ($i=1; $i <= $cantidadTalla36 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla36."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla36."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla36."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTalla38 = $_POST['talla38'];
        $talla38 = 38;

        for ($i=1; $i <= $cantidadTalla38 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla38."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla38."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla38."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTallas = $_POST['tallas'];
        $tallas = S;

        for ($i=1; $i <= $cantidadTallas ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallas."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallas."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallas."',
            '".$key['referencia']."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTallam = $_POST['tallam'];
        $tallam = M;

        for ($i=1; $i <= $cantidadTallam ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallam."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallam."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallam."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTallal = $_POST['tallal'];
        $tallal = L;

        for ($i=1; $i <= $cantidadTallal ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallal."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallal."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallal."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTallaxl = $_POST['tallaxl'];
        $tallaxl = XL;

        for ($i=1; $i <= $cantidadTallaxl ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallaxl."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallaxl."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallaxl."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }

        $cantidadTallau = $_POST['tallau'];
        $tallau = U;

        for ($i=1; $i <= $cantidadTallau ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallau."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallau."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallau."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$_POST['id_inventario']."'


            )";
            $reg = $conexion->query($sql);


            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;
        }
        // echo "<hr>";

        // $cantidadTalla10 = $_POST['talla10'];
        // $talla10 = 10;

        // for ($i=1; $i <= $cantidadTalla10 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla10."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla10."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
            
            
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla10."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla12 = $_POST['talla12'];
        // $talla12 = 12;

        // for ($i=1; $i <= $cantidadTalla12 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla12."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla12."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla12."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla14 = $_POST['talla14'];
        // $talla14 = 14;

        // for ($i=1; $i <= $cantidadTalla14 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla14."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla14."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla14."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla16 = $_POST['talla16'];
        // $talla16 = 16;

        // for ($i=1; $i <= $cantidadTalla16 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla16."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla16."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla16."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla18 = $_POST['talla18'];
        // $talla18 = 18;

        // for ($i=1; $i <= $cantidadTalla18 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla18."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla18."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla18."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";


        // $cantidadTalla20 = $_POST['talla20'];
        // $talla20 = 20;

        // for ($i=1; $i <= $cantidadTalla20 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla20."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla20."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla20."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla26 = $_POST['talla26'];
        // $talla26 = 26;

        // for ($i=1; $i <= $cantidadTalla26 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla26."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla26."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla26."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla28 = $_POST['talla28'];
        // $talla28 = 28;

        // for ($i=1; $i <= $cantidadTalla28 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla28."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla28."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla28."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla30 = $_POST['talla30'];
        // $talla30 = 30;

        // for ($i=1; $i <= $cantidadTalla30 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla30."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla30."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla30."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla32 = $_POST['talla32'];
        // $talla32 = 32;

        // for ($i=1; $i <= $cantidadTalla32 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla32."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla32."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla32."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla34 = $_POST['talla34'];
        // $talla34 = 34;

        // for ($i=1; $i <= $cantidadTalla34 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla34."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla34."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla34."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla36 = $_POST['talla36'];
        // $talla36 = 36;

        // for ($i=1; $i <= $cantidadTalla36 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla36."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla36."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla36."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTalla38 = $_POST['talla38'];
        // $talla38 = 38;

        // for ($i=1; $i <= $cantidadTalla38 ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$talla38."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla38."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$talla38."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTallas = $_POST['tallas'];
        // $tallas = 's';

        // for ($i=1; $i <= $cantidadTallas ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$tallas."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallas."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$tallas."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTallam = $_POST['tallam'];
        // $tallam = 'm';

        // for ($i=1; $i <= $cantidadTallam ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$tallam."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallam."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$tallam."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTallal = $_POST['tallal'];
        // $tallal = 'l';

        // for ($i=1; $i <= $cantidadTallal ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$tallal."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallal."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$tallal."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTallaxl = $_POST['tallaxl'];
        // $tallaxl = 'xl';

        // for ($i=1; $i <= $cantidadTallaxl ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$tallaxl."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallaxl."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$tallaxl."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTallau = $_POST['tallau'];
        // $tallau = 'u';

        // for ($i=1; $i <= $cantidadTallau ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$tallau."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallau."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$tallau."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        // $cantidadTallaest = $_POST['tallaest'];
        // $tallaest = 'est';

        // for ($i=1; $i <= $cantidadTallaest ; $i++) { 
        //     echo "Marca:".$key['marca']."<br>";
        //     echo "REF: ".$key['referencia']."<br>";
        //     echo "Talla: ".$tallaest."<br>";
        //     echo "Color: ".$key['color']."<br>";
        //     echo "Codigo: ";
        //     $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallaest."".$color."".$maximo;


        //     echo "<br>";
        //     echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
        //     echo "<br>";
        

        //     echo $codigoBarras;

        //     echo "<br>";
        //     echo "<br>";
        //     $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
        //     VALUES (
        //     '".$tallaest."',
        //     '".$key['referencia']."',
        //     '".$key['descripcion']."',
        //     '".$key['marca']."',
        //     '".$key['tipo']."',
        //     '".$key['silueta']."',
        //     '".$key['tela']."',
        //     '".$key['categoria']."',
        //     '".$key['genero']."',
        //     '".$key['coleccion']."',
        //     '".$key['bodega']."',
        //     '".$key['ruta']."',
        //     '".$key['color']."',
        //     '".$fecha."',
        //     '".$fecha."',
        //     '".$key['precio']."',
        //     '".$_SESSION['id']."',
        //     'subido',
        //     '".$key['proveedor']."',
        //     '".$codigoBarras."',
        //     '".$_POST['id_inventario']."'


        //     )";
        //     $reg = $conexion->query($sql);
        //     $ultimoIdRegistrado = $conexion->lastInsertId()+1;
        //     $maximo++;
        // }

        // echo "<hr>";

        if ($reg) {
            $fecha = date('Y-m-d H:i:s');
            $sqlI = "UPDATE inventarios_productos SET impresion_codigo_barras = 'SI', fecha_impresion_codigos = '".$fecha."' WHERE id_inventario = ".$_POST['id_inventario'];
            $regI = $conexion->query($sqlI);
            
            echo "
            <script>
                alert('codigos Generados');
               location.href = ('../panel/modal/modalCodigosBarras.php?id_inventario=".$id_inventario."&descripcion=".$descripcion."&color=".$nombreColor."');
            </script>
            ";
        }
        
    }
    
    
}

else if ($accion == "generaNuevoTick") {
    $fecha = date('Y-m-d');
    // require '../codigo_barra/autoload.php';

    $sql = "SELECT * FROM codigos_barras_validados WHERE id_codigo = ".$_POST['id_codigo'];
    $reg = $conexion->query($sql)->fetchAll();
    foreach ($reg as $key) {

        // conversion de datos a id unicos
        // $id_inventario = $key['id_inventario'];
        $ref = $key['referencia'];
        $porciones = explode("-",$ref);
        $referencia = $porciones[0]; 
        $descripcion = $key['descripcion'];
        $nombreColor = $key['color'];
        $marca = $inventarios->verIdMarca($key['marca']);
        $silueta = $inventarios->verIdSilueta($key['silueta']);
        $categoria = $inventarios->verIdCategoria($key['categoria']);
        $tela = $inventarios->verIdTela($key['tela']);
        $genero = $inventarios->verIdGenero($key['genero']);
        $color = $inventarios->verIdColor($key['color']);

        // proceso de subida de codigos de barras a la base de datos
        $cantidad = $_POST['cantidad'];
        $talla = $_POST['talla'];
        $sqlMaximo = "SELECT id_codigo as maximo FROM codigos_barras_validados";
        // $sqlMaximo = "SELECT id_codigo as maximo FROM codigos_barras_validados order by id_codigo desc limit 1";
        $regMaximo = $conexion->query($sqlMaximo)->fetchAll();
        foreach ($regMaximo as $max) {
            $maximo = $max['maximo']+1;
        }
        echo "<table> ";
        for ($i=1; $i <= $cantidad ; $i++) { 

            $codigos = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla."".$color."".$maximo;
            $codigoBarras = str_replace ( "-", '', $codigos);
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$key['id_inventario']."'
            )";
            $reg = $conexion->query($sql);
            $ultimoIdRegistrado = $conexion->lastInsertId()+1;
            $maximo++;

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla."',
            '".$referencia."',
            '".$key['descripcion']."',
            '".$key['marca']."',
            '".$key['tipo']."',
            '".$key['silueta']."',
            '".$key['tela']."',
            '".$key['categoria']."',
            '".$key['genero']."',
            '".$key['coleccion']."',
            '".$key['bodega']."',
            '".$key['ruta']."',
            '".$key['color']."',
            '".$fecha."',
            '".$fecha."',
            '".$key['precio']."',
            '".$_SESSION['id']."',
            'subido',
            '".$key['proveedor']."',
            '".$codigoBarras."',
            '".$key['id_inventario']."'


            )";
            $reg = $conexion->query($sql);
            if ($reg) {
                echo "
                <script>
                    alert('Se ha generado el Codigo de impresion, proceda a imprimir desde ZEBRA');
                    location.href = '../panel/inventarios-codigos-barras.php';
                </script>
                ";
            }
            else
            {
                echo "no Registro";
            }

        }
        

        
        
    }
    
    
}

else{

}

