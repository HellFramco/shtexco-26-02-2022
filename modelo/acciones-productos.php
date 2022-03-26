<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_GET['accion'];

if ($accion == "registrar") {


$script_tz = date_default_timezone_get();
$fecha = date('Y-m-d', time());  

    $id_producto = $_POST['id'];
    $referencia = $_POST['referencia'];
    $nombre = $_POST['nombre'];


    $estado = $_POST['estado'];


    $sql = "INSERT INTO productos ( referencia, nombre,  fecha, estado)
            VALUES (?,?,?,?)";
    $reg = $conexion->prepare($sql);

    $reg->bindParam(1,$referencia);
    $reg->bindParam(2,$nombre);

    $reg->bindParam(3,$fecha);
    $reg->bindParam(4,$estado);


    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {


    $id_producto = $_POST['id'];
    $referencia = $_POST['referencia'];
    $nombre = $_POST['nombre'];

    $estado = $_POST['estado'];


        $sql = "UPDATE productos SET referencia= ?,nombre= ?, estado= ? WHERE id_producto= ?";
    $reg = $conexion->prepare($sql);



    $reg->bindParam(1,$referencia);
    $reg->bindParam(2,$nombre);

    $reg->bindParam(3,$estado);
    $reg->bindParam(4,$id_producto);

  if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }


    else if ($accion == "generaCodigosBarras") {
    $fecha = date('Y-m-d');
    require '../codigo_barra/autoload.php';

    $sql = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
    $reg = $conexion->query($sql)->fetchAll();
    foreach ($reg as $key) { 

                $ref = $key['referencia'];
                $porciones = explode("-",$ref);
            	$referencia = $porciones[0];
    			

        $marca = $inventarios->verIdMarca($key['marca']);
        $silueta = $inventarios->verIdSilueta($key['silueta']);
        $categoria = $inventarios->verIdCategoria($key['categoria']);
        $tela = $inventarios->verIdTela($key['tela']);
        $genero = $inventarios->verIdGenero($key['genero']);
        $color = $inventarios->verIdColor($key['color']);

        $cantidadTalla6 = $_POST['talla6'];
        $talla6 = 6;

        $sqlMaximo = "SELECT max(id_codigo) as maximo FROM codigos_barras";
        $regMaximo = $conexion->query($sqlMaximo)->fetchAll();
        foreach ($regMaximo as $max) {
            $maximo = $max['maximo']+1;
        }

        for ($i=1; $i <= $cantidadTalla6 ; $i++) { 

            $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
        
          

            echo "Marca:".$key['marca']."<br>";
            echo "REF: ".$key['referencia']."<br>";
            echo "Talla: ".$talla6."<br>";
            echo "Color: ".$key['color']."<br>";
            echo "Codigo: ";
            $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;


            echo "<br>";
            echo $generator->getBarcode($codigoBarras, $generator::TYPE_CODABAR);
            echo "<br>";
        

            echo $codigoBarras;

            
            echo "<br>";
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla8 = $_POST['talla8'];
        $talla8 = 8;

        for ($i=1; $i <= $cantidadTalla8 ; $i++) { 
             echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla10 = $_POST['talla10'];
        $talla10 = 10;

        for ($i=1; $i <= $cantidadTalla10 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla12 = $_POST['talla12'];
        $talla12 = 12;

        for ($i=1; $i <= $cantidadTalla12 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla14 = $_POST['talla14'];
        $talla14 = 14;

        for ($i=1; $i <= $cantidadTalla14 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla16 = $_POST['talla16'];
        $talla16 = 16;

        for ($i=1; $i <= $cantidadTalla16 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla18 = $_POST['talla18'];
        $talla18 = 18;

        for ($i=1; $i <= $cantidadTalla18 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";


        $cantidadTalla20 = $_POST['talla20'];
        $talla20 = 20;

        for ($i=1; $i <= $cantidadTalla20 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla26 = $_POST['talla26'];
        $talla26 = 26;

        for ($i=1; $i <= $cantidadTalla26 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla28 = $_POST['talla28'];
        $talla28 = 28;

        for ($i=1; $i <= $cantidadTalla28 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla30 = $_POST['talla30'];
        $talla30 = 30;

        for ($i=1; $i <= $cantidadTalla30 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla32 = $_POST['talla32'];
        $talla32 = 32;

        for ($i=1; $i <= $cantidadTalla32 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla34 = $_POST['talla34'];
        $talla34 = 34;

        for ($i=1; $i <= $cantidadTalla34 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla36 = $_POST['talla36'];
        $talla36 = 36;

        for ($i=1; $i <= $cantidadTalla12 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTalla38 = $_POST['talla38'];
        $talla38 = 38;

        for ($i=1; $i <= $cantidadTalla38 ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTallas = $_POST['tallas'];
        $tallas = 's';

        for ($i=1; $i <= $cantidadTallas ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTallam = $_POST['tallam'];
        $tallam = 'm';

        for ($i=1; $i <= $cantidadTallam ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTallal = $_POST['tallal'];
        $tallal = 'l';

        for ($i=1; $i <= $cantidadTallal ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTallaxl = $_POST['tallaxl'];
        $tallaxl = 'xl';

        for ($i=1; $i <= $cantidadTallaxl ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTallau = $_POST['tallau'];
        $tallau = 'u';

        for ($i=1; $i <= $cantidadTallau ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        echo "<hr>";

        $cantidadTallaest = $_POST['tallaest'];
        $tallaest = 'est';

        for ($i=1; $i <= $cantidadTallaest ; $i++) { 
            echo $codigoBarras = $referencia."".$marca."".$silueta."".$categoria."".$genero."".$talla6."".$color."".$maximo;
            echo "<br>";
            $sql = "INSERT INTO codigos_barras ( referencia, descripcion, marca, tipo, silueta, tela, categoria, genero, coleccion, bodega, ruta, color, fecha_ingreso_producto, fecha_ingreso_inventario, precio, id_usuario,estado, proveedor, codigo_barra, id_inventario)
            VALUES (
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

        

        echo "<hr>";

        if ($reg) {


            echo "
            <script>
                alert('inventario Registrado');
                window.close();
            </script>
            ";
        }
        
    }
    
    
}
}
elseif ($accion == "eliminar") {

}
else{

}