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
    $descripcion = $_POST['silueta']." ".$_POST['marca']." REF: ".$_POST['referencia'];
    $sql = "INSERT INTO inventarios_productos ( precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, reprogramacion)
            VALUES (
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
            '".$fecha."',
            '".$fecha."',
            '".$_POST['precio']."',
            '".$_POST['id_usuario']."',
            'subido',
            '".$_POST['proveedor']."',
            1

            )";
            
            
              $sql_historial = "INSERT INTO historial_inventarios_productos ( precio_mayor, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, talla6, talla8, talla10, talla12, talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, fecha_ingreso_producto, precio, id_usuario,estado, proveedor, reprogramacion)
            VALUES (
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
            '".$fecha."',
            '".$_POST['precio']."',
            '".$_POST['id_usuario']."',
            'subido',
            '".$_POST['proveedor']."',
            1

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
        
        $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();
    foreach ($reg as $key) {

        $talla6 = $_POST['talla6'] == ''?$key['peso_talla6'] + 0:$key['peso_talla6'] + $_POST['talla6'];
        $talla8 = $_POST['talla8'] == ''?$key['peso_talla8'] + 0:$key['peso_talla8'] + $_POST['talla8'];
        $talla10 = $_POST['talla10'] == ''?$key['peso_talla10'] + 0:$key['peso_talla10'] + $_POST['talla10'];
        $talla12 = $_POST['talla12'] == ''?$key['peso_talla12'] + 0:$key['peso_talla12'] + $_POST['talla12'];
        $talla14 = $_POST['talla14'] == ''?$key['peso_talla14'] + 0:$key['peso_talla14'] + $_POST['talla14'];
        $talla16 = $_POST['talla16'] == ''?$key['peso_talla16'] + 0:$key['peso_talla16'] + $_POST['talla16'];
        $talla18 = $_POST['talla18'] == ''?$key['peso_talla18'] + 0:$key['peso_talla18'] + $_POST['talla18'];
        $talla20 = $_POST['talla20'] == ''?$key['peso_talla20'] + 0:$key['peso_talla20'] + $_POST['talla20'];
        $talla26 = $_POST['talla26'] == ''?$key['peso_talla26'] + 0:$key['peso_talla26'] + $_POST['talla26'];
        $talla28 = $_POST['talla28'] == ''?$key['peso_talla28'] + 0:$key['peso_talla28'] + $_POST['talla28'];
        $talla30 = $_POST['talla30'] == ''?$key['peso_talla30'] + 0:$key['peso_talla30'] + $_POST['talla30'];
        $talla32 = $_POST['talla32'] == ''?$key['peso_talla32'] + 0:$key['peso_talla32'] + $_POST['talla32'];
        $talla34 = $_POST['talla34'] == ''?$key['peso_talla34'] + 0:$key['peso_talla34'] + $_POST['talla34'];
        $talla36 = $_POST['talla36'] == ''?$key['peso_talla36'] + 0:$key['peso_talla36'] + $_POST['talla36'];
        $talla38 = $_POST['talla38'] == ''?$key['peso_talla38'] + 0:$key['peso_talla38'] + $_POST['talla38'];
        $tallas = $_POST['tallas'] == ''?$key['peso_tallas'] + 0:$key['peso_tallas'] + $_POST['tallas'];
        $tallam = $_POST['tallam'] == ''?$key['peso_tallam'] + 0:$key['peso_tallam'] + $_POST['tallam'];
        $tallal = $_POST['tallal'] == ''?$key['peso_tallal'] + 0:$key['peso_tallal'] + $_POST['tallal'];
        $tallaxl = $_POST['tallaxl'] == ''?$key['peso_tallaxl'] + 0:$key['peso_tallaxl'] + $_POST['tallaxl'];
        $tallau = $_POST['tallau'] == ''?$key['peso_tallau'] + 0:$key['peso_tallau'] + $_POST['tallau'];
        $tallaest = $_POST['tallaest'] == ''?$key['peso_tallaest'] + 0:$key['peso_tallaest'] + $_POST['tallaest'];

        $sqlActualizaInventario = "UPDATE inventarios_productos SET peso_talla6 = '".$talla6."', peso_talla8='".$talla8."', peso_talla10 = '".$talla10."', peso_talla12 = '".$talla12."', peso_talla14 = '".$talla14."', peso_talla16 = '".$talla16."', peso_talla18 = '".$talla18."', peso_talla20 = '".$talla20."', peso_talla26 = '".$talla26."', peso_talla28 = '".$talla28."', peso_talla30 = '".$talla30."', peso_talla32 = '".$talla32."', peso_talla34 = '".$talla34."', peso_talla36 = '".$talla36."', peso_talla38 = '".$talla38."', peso_tallas = '".$tallas."', peso_tallam = '".$tallam."', peso_tallal = '".$tallal."', peso_tallaxl = '".$tallaxl."', peso_tallau = '".$tallau."', peso_tallaest = '".$tallaest."' WHERE id_inventario = ".$_POST['id_inventario'];
            $regActualiza = $conexion->query($sqlActualizaInventario);

            $sqlActualizaInventarioHistorial = "UPDATE historial_inventarios_productos SET peso_talla6 = '".$talla6."', peso_talla8='".$talla8."', peso_talla10 = '".$talla10."', peso_talla12 = '".$talla12."', peso_talla14 = '".$talla14."', peso_talla16 = '".$talla16."', peso_talla18 = '".$talla18."', peso_talla20 = '".$talla20."', peso_talla26 = '".$talla26."', peso_talla28 = '".$talla28."', peso_talla30 = '".$talla30."', peso_talla32 = '".$talla32."', peso_talla34 = '".$talla34."', peso_talla36 = '".$talla36."', peso_talla38 = '".$talla38."', peso_tallas = '".$tallas."', peso_tallam = '".$tallam."', peso_tallal = '".$tallal."', peso_tallaxl = '".$tallaxl."', peso_tallau = '".$tallau."', peso_tallaest = '".$tallaest."' WHERE id_inventario_producto = ".$_POST['id_inventario'];
            $regActualizaHistorial = $conexion->query($sqlActualizaInventarioHistorial);
        }
        if ($regActualiza) {
            echo "
            <script>
                // alert('Registrado');
                location.href = '../panel/modal/modalPesoInventario-1.php?id_inventario=".$_POST['id_inventario']."&descripcion=".$_POST['descripcion']."&color=".$_POST['color']."&peso_unidad=';
            </script>
            ";
        }
        else
        {
            echo "
                <script>
                    alert('No registrado, por favor verifique.');
                    location.href = '../panel/modal/modalPesoInventario-1.php?id_inventario=".$_POST['id_inventario']."&descripcion=".$_POST['descripcion']."&color=".$_POST['color']."&peso_unidad=';
                </script>
            ";
        }

        
    
}

else if ($accion == "nuevaReprogramacion") {
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
                                         fecha_ingreso_producto,
                                         fecha_ingreso_inventario,
                                         precio,
                                         estado,
                                         id_usuario
                                         
                                    )
                                   VALUES
                                   (
                                   '".$key['proveedor']."',
                                   '".$key['referencia']."',
                                   ".$preconteoReferencias.",
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
                                    'subido',
                                    '".$_SESSION['id']."'
                                    )    
                                     ";
        $regActualiza = $conexion->query($sqlActualizaInventario);
        // echo $sqlActualizaInventario;
    if ($regActualiza) {
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

else if ($accion == "generaCodigosBarras") {
    $fecha = date('Y-m-d');
    // require '../codigo_barra/autoload.php';

    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();
    foreach ($reg as $key) {

        // conversion de datos a id unicos
        $id_inventario = $key['id_inventario'];
        $referencia = $key['referencia'];
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
        $talla6 = 6;
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla6."',
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


        }
        // echo " <table>";
        // echo "<hr>";

        $cantidadTalla8 = $_POST['talla8'];
        $talla8 = 8;

        for ($i=1; $i <= $cantidadTalla8 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla8."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla8."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla8."',
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

        $cantidadTalla10 = $_POST['talla10'];
        $talla10 = 10;

        for ($i=1; $i <= $cantidadTalla10 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla10."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla10."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla10."',
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

        $cantidadTalla12 = $_POST['talla12'];
        $talla12 = 12;

        for ($i=1; $i <= $cantidadTalla12 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla12."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla12."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla12."',
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

        $cantidadTalla14 = $_POST['talla14'];
        $talla14 = 14;

        for ($i=1; $i <= $cantidadTalla14 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla14."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla14."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla14."',
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

        $cantidadTalla16 = $_POST['talla16'];
        $talla16 = 16;

        for ($i=1; $i <= $cantidadTalla16 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla16."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla16."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla16."',
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

        $cantidadTalla18 = $_POST['talla18'];
        $talla18 = 18;

        for ($i=1; $i <= $cantidadTalla18 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla18."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla18."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla18."',
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

        $cantidadTalla20 = $_POST['talla20'];
        $talla20 = 20;

        for ($i=1; $i <= $cantidadTalla20 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla20."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla20."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla20."',
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

        $cantidadTalla26 = $_POST['talla26'];
        $talla26 = 26;

        for ($i=1; $i <= $cantidadTalla26 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla26."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla26."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla26."',
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

        $cantidadTalla28 = $_POST['talla28'];
        $talla28 = 28;

        for ($i=1; $i <= $cantidadTalla28 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla28."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla28."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla28."',
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

        $cantidadTalla30 = $_POST['talla30'];
        $talla30 = 30;

        for ($i=1; $i <= $cantidadTalla30 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla30."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla30."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla30."',
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

        $cantidadTalla32 = $_POST['talla32'];
        $talla32 = 32;

        for ($i=1; $i <= $cantidadTalla32 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla32."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla32."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla32."',
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

        $cantidadTalla34 = $_POST['talla34'];
        $talla34 = 34;

        for ($i=1; $i <= $cantidadTalla34 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla34."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla34."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla34."',
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

        $cantidadTalla36 = $_POST['talla36'];
        $talla36 = 36;

        for ($i=1; $i <= $cantidadTalla36 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla36."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla36."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla36."',
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

        $cantidadTalla38 = $_POST['talla38'];
        $talla38 = 38;

        for ($i=1; $i <= $cantidadTalla38 ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla38."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla38."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$talla38."',
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

        $cantidadTallas = $_POST['tallas'];
        $tallas = S;

        for ($i=1; $i <= $cantidadTallas ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallas."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallam."',
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

        $cantidadTallal = $_POST['tallal'];
        $tallal = L;

        for ($i=1; $i <= $cantidadTallal ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallal."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallal."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallal."',
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

        $cantidadTallaxl = $_POST['tallaxl'];
        $tallaxl = XL;

        for ($i=1; $i <= $cantidadTallaxl ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallaxl."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallaxl."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallaxl."',
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

        $cantidadTallau = $_POST['tallau'];
        $tallau = U;

        for ($i=1; $i <= $cantidadTallau ; $i++) { 

            
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$tallau."".$color."".$maximo;
            $sql = "INSERT INTO codigos_barras ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallu."',
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

            $sql = "INSERT INTO codigos_barras_validados ( talla, referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
            '".$tallau."',
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
            $sqlI = "UPDATE inventarios_productos SET impresion_codigo_barras = 'SI' WHERE id_inventario = ".$_POST['id_inventario'];
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



else{

}

