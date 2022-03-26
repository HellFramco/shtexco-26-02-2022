<?php
session_start();
require_once "../modelo/db.php";
require_once '../modelo/datos-inventarios.php';
require_once '../modelo/datosInventarios.php';
$inventarios = new Inventarios();
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];

if ($accion == "actualizaInventarioPorBodega") {
        $sqlInv = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$_POST['id_inventario'];
        $consultando = $conexion->query($sqlInv)->fetchAll();
        foreach($consultando as $keyInv){
            $referencia = $keyInv['referencia'];
            $marca = $keyInv['marca'];
            $silueta = $keyInv['silueta'];
            $color = $keyInv['color'];
            $reprogramacion = $keyInv['reprogramacion'];
            $precio = $keyInv['precio'];
            $bodega = $keyInv['bodega'];
            $ruta = $keyInv['ruta'];
            $coleccion = $keyInv['coleccion'];
            $categoria = $keyInv['categoria'];
            $tela = $keyInv['tela'];
            $descripcion = $keyInv['descripcion'];
            $proveedor = $keyInv['proveedor'];
            $tipo = $keyInv['tipo'];
            $genero = $keyInv['genero'];
        }

        require_once("../modelo/db.php");
        $fecha = date('Y-m-d');    
        $talla6Generada = $_POST['talla6Subida'] - $_POST['talla6Ingreso'];
        $talla8Generada = $_POST['talla8Subida'] - $_POST['talla8Ingreso'];
        $talla10Generada = $_POST['talla10Subida'] - $_POST['talla10Ingreso'];
        $talla12Generada = $_POST['talla12Subida'] - $_POST['talla12Ingreso'];
        $talla14Generada = $_POST['talla14Subida'] - $_POST['talla14Ingreso'];
        $talla16Generada = $_POST['talla16Subida'] - $_POST['talla16Ingreso'];
        $talla18Generada = $_POST['talla18Subida'] - $_POST['talla18Ingreso'];
        $talla20Generada = $_POST['talla20Subida'] - $_POST['talla20Ingreso'];
        $talla26Generada = $_POST['talla26Subida'] - $_POST['talla26Ingreso'];
        $talla28Generada = $_POST['talla28Subida'] - $_POST['talla28Ingreso'];
        $talla30Generada = $_POST['talla30Subida'] - $_POST['talla30Ingreso'];
        $talla32Generada = $_POST['talla32Subida'] - $_POST['talla32Ingreso'];
        $talla34Generada = $_POST['talla34Subida'] - $_POST['talla34Ingreso'];
        $talla36Generada = $_POST['talla36Subida'] - $_POST['talla36Ingreso'];
        $talla38Generada = $_POST['talla38Subida'] - $_POST['talla38Ingreso'];
        $tallasGenerada = $_POST['tallasSubida'] - $_POST['tallasIngreso'];
        $tallamGenerada = $_POST['tallamSubida'] - $_POST['tallamIngreso'];
        $tallalGenerada = $_POST['tallalSubida'] - $_POST['tallalIngreso'];
        $tallaxlGenerada = $_POST['tallaxlSubida'] - $_POST['tallaxlIngreso'];
        $tallauGenerada = $_POST['tallauSubida'] - $_POST['tallauIngreso'];
        $tallaestGenerada = $_POST['tallaestSubida'] - $_POST['tallaestIngreso'];
        $usuario = $_SESSION['nombre'];
        $cliente = $_POST['cliente'];
        $sumaCantidad = $talla6Generada +
                        $talla8Generada +
                        $talla10Generada +
                        $talla12Generada +
                        $talla14Generada +
                        $talla16Generada +
                        $talla18Generada +
                        $talla20Generada +
                        $talla26Generada +
                        $talla28Generada +
                        $talla30Generada +
                        $talla32Generada +
                        $talla34Generada +
                        $talla36Generada +
                        $talla38Generada +
                        $tallasGenerada +
                        $tallamGenerada +
                        $tallalGenerada +
                        $tallaxlGenerada +
                        $tallauGenerada +
                        $tallaestGenerada;


        $sumaValorCobro = $sumaCantidad * $precio;

        // $insertCobro = "INSERT INTO cobros(tipo_cobro, fecha_cobro, valor_cobro, cliente_cobro, id_inventario,
        //                      cantidad, usuario) 
        //              VALUES('".$_POST['observacion']."','".$fecha."',".$sumaValorCobro.",'".$cliente."',".$_POST['id_inventario'].",".$sumaCantidad.",
        //                     '".$_SESSION['nombre']."')";
        // $modulesCobro = $conexion->query($insertCobro);

        $insertCobro = "INSERT INTO cobros_inventarios(observacion_detalle, id_inventario, observacion, talla6, talla8, talla10, talla12,
                             talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, 
                             talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, usuario, fecha, referencia, marca, silueta, color, cantidad, valor_cobro, cliente) 
                     VALUES('".$_POST['observacion_detalle']."',".$_POST['id_inventario'].",'".$_POST['observacion']."',".$talla6Generada.",".$talla8Generada.",".$talla10Generada.",".$talla12Generada.",
                            ".$talla14Generada.",".$talla16Generada.",".$talla18Generada.",".$talla20Generada.",".$talla26Generada.",".$talla28Generada.",".$talla30Generada.",
                            ".$talla32Generada.",".$talla34Generada.",".$talla36Generada.",".$talla38Generada.",".$tallasGenerada.",".$tallamGenerada.",".$tallalGenerada.",
                            ".$tallaxlGenerada.",".$tallauGenerada.",".$tallaestGenerada.",'".$usuario."','".$fecha."','".$referencia."','".$marca."','".$silueta."','".$color."',".$sumaCantidad.",".$sumaValorCobro.",'".$cliente."')";
        $modulesCobro = $conexion->query($insertCobro);
        $id_cobro = $conexion->lastInsertId();

        

        
        
        
        if ($modulesCobro) {
            $insertaObservacion = "INSERT INTO observaciones_inventarios(observacion_detalle, id_inventario, observacion, talla6, talla8, talla10, talla12,
                             talla14, talla16, talla18, talla20, talla26, talla28, talla30, talla32, talla34, talla36, 
                             talla38, tallas, tallam, tallal, tallaxl, tallau, tallaest, usuario, fecha, referencia, marca, silueta, color,reprogramacion) 
                     VALUES('".$_POST['observacion_detalle']."',".$_POST['id_inventario'].",'".$_POST['observacion']."',".$talla6Generada.",".$talla8Generada.",".$talla10Generada.",".$talla12Generada.",
                            ".$talla14Generada.",".$talla16Generada.",".$talla18Generada.",".$talla20Generada.",".$talla26Generada.",".$talla28Generada.",".$talla30Generada.",
                            ".$talla32Generada.",".$talla34Generada.",".$talla36Generada.",".$talla38Generada.",".$tallasGenerada.",".$tallamGenerada.",".$tallalGenerada.",
                            ".$tallaxlGenerada.",".$tallauGenerada.",".$tallaestGenerada.",'".$usuario."','".$fecha."','".$referencia."','".$marca."','".$silueta."','".$color."',".$reprogramacion.")";
            $modulesObservacion = $conexion->query($insertaObservacion);

            $actualizaInventario = "UPDATE inventarios_productos SET talla6 = ".$_POST['talla6Ingreso'].", talla8=".$_POST['talla8Ingreso'].", talla10=".$_POST['talla10Ingreso'].", talla12=".$_POST['talla12Ingreso'].",
                                talla14=".$_POST['talla14Ingreso'].", talla16=".$_POST['talla16Ingreso'].", talla18=".$_POST['talla18Ingreso'].", talla20=".$_POST['talla20Ingreso'].", talla26=".$_POST['talla26Ingreso'].", talla28=".$_POST['talla28Ingreso'].", talla30=".$_POST['talla30Ingreso'].", talla32=".$_POST['talla32Ingreso'].", talla34=".$_POST['talla34Ingreso'].", talla36=".$_POST['talla36Ingreso'].", 
                                talla38=".$_POST['talla38Ingreso'].", tallas=".$_POST['tallasIngreso'].", tallam=".$_POST['tallamIngreso'].", tallal=".$_POST['tallalIngreso'].", tallaxl=".$_POST['tallaxlIngreso'].", tallau=".$_POST['tallauIngreso'].", tallaest=".$_POST['tallaestIngreso'].", verificado_bodega = 'SI', estado ='EXISTENCIA', impresion_codigo_barras = 'SI' WHERE id_inventario = ".$_POST['id_inventario'];
            $modulesInventario = $conexion->query($actualizaInventario);

            $insertaHistorialEntrada = "INSERT INTO historial_entrada_bodega(tipo,genero,proveedor,descripcion,categoria,tela,bodega,ruta,coleccion,id_inventario_registrado, referencia,marca,silueta,color,reprogramacion,usuario,talla6,talla8,talla10,talla12,talla14,talla16,talla18,talla20,talla26,talla28,talla30,talla32,talla34,talla36,talla38,tallas,tallam,tallal,tallaxl,tallau,tallaest) 
            VALUES('".$tipo."','".$genero."','".$proveedor."','".$descripcion."','".$categoria."','".$tela."','".$bodega."','".$ruta."','".$coleccion."',".$_POST['id_inventario'].",'".$referencia."','".$marca."','".$silueta."','".$color."',".$reprogramacion.",'".$usuario."',".$_POST['talla6Ingreso'].",".$_POST['talla8Ingreso'].",".$_POST['talla10Ingreso'].",".$_POST['talla12Ingreso'].",".$_POST['talla14Ingreso'].",".$_POST['talla16Ingreso'].",".$_POST['talla18Ingreso'].",".$_POST['talla20Ingreso'].",".$_POST['talla26Ingreso'].", ".$_POST['talla28Ingreso'].", ".$_POST['talla30Ingreso'].", ".$_POST['talla32Ingreso'].", ".$_POST['talla34Ingreso'].", ".$_POST['talla36Ingreso'].",".$_POST['talla38Ingreso'].", ".$_POST['tallasIngreso'].", ".$_POST['tallamIngreso'].", ".$_POST['tallalIngreso'].", ".$_POST['tallaxlIngreso'].", ".$_POST['tallauIngreso'].", ".$_POST['tallaestIngreso'].")";
            $modulesHistorial = $conexion->query($insertaHistorialEntrada);

            echo "
                <script>
                    alert('se ha verificado el inventario');
                    window.open('factura-cobro.php?id_cobro=". $id_cobro ."&cliente=". $cliente."&fecha=". $fecha."','_blank');
                </script>
            ";
        }
        else{
          echo "
            
          ";
        }



        
      

       }

else{

}