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
            echo $_POST['talla6'] = 0;
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
                    // alert('producto agregado');
                    location.href = 'orden-nueva-venta-2.php?cliente=".$_POST['id_cliente']."&id_venta=".$_POST['id_venta']."&lista=true';
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