<?php
date_default_timezone_set('America/Bogota');
require_once "db.php";

$conexion = new Conexion();


$script_tz = date_default_timezone_get();
$fecha = date('Y-m-d', time());
$accion = $_GET['accion'];

// fecha de vencimiento
$fecha = date('Y-m-d');
$nuevafecha = strtotime ( '+7 day' , strtotime ( $fecha ) ) ;
$fecha_vencimiento = date ( 'Y-m-d' , $nuevafecha );

// 

if ($accion == "registrar") {


  
        // INSERT INTO `ventas_detalles`(`id_venta_detalle`, `venta_id`, `inventario_id`, `cantidad`, `precio_unitario`, `descuento`) VALUES ('','','','','','')
        
        

          
        
        $id_venta = $_POST['id_venta'];
        $id_inventario = $_POST['id_inventario'];
        $id = $_POST['id'];
        $tallas = $_POST['tallas'];
        $descuento = $_POST['descuento'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $color = $_POST['color'];
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $codigo_agrupacion =  substr(str_shuffle($permitted_chars), 0, 10);

        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 1;
        $consulta = "SELECT id_inventario FROM inventarios WHERE  estado='existencia' and referencia = ".$id." and inventarios.talla='".$tallas."' and inventarios.color='".$color."' ";


    

    
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
              
                if($i<=$cantidad){







                                    $sql = "UPDATE inventarios SET  estado = ? where  id_inventario=".$data['id_inventario']."";
                                     $reg = $conexion->prepare($sql);



                                        if ($reg->execute(array("apartado"))) {
                                        echo 1;
                                        } else {
                                        // print_r($result->errorInfo());
                                        echo 0;
                                        }






                    

                                $sql = "INSERT INTO `ventas_detalles`( `venta_id`, `inventario_id`, `cantidad`, `precio_unitario`, `descuento` , `id_agrupacion_producto`) VALUES (?,?,?,?,?,?)";
                                $reg = $conexion->prepare($sql);
                            


                                $reg->bindParam(1,$id_venta);
                                $reg->bindParam(2,$data['id_inventario']);
                                $reg->bindParam(3,$cantidad);
                                $reg->bindParam(4,$precio);
                                $reg->bindParam(5,$descuento);
                                $reg->bindParam(6,$codigo_agrupacion);
                                
                          
                               
                     
                            
                                
                                if ($reg->execute()) {
                                    echo 1;
                            
                                } else {
                                    print_r($reg->errorInfo());
                                    echo 0;
                                }




                  
                }
              
             $i++;
            }
        }


}
if ($accion == "buscar") {

 
     $id = $_POST['id'];

        $arreglo = array();
        $i = 0;



        
    //    $consulta = "SELECT  id_venta_detalle, referencia, talla.nameTal as talla, color.nameCol as color, ventas_detalles.cantidad as cantidad, ventas_detalles.precio_unitario as precio, ventas_detalles.descuento as descuento, (ventas_detalles.cantidad * ventas_detalles.precio_unitario) - ventas_detalles.descuento as total_result FROM inventarios, color, talla,ventas_detalles, productos where ventas_detalles.id_venta_detalle='".$id."' and ventas_detalles.inventario_id =inventarios.id_inventario and inventarios.color=color.id and inventarios.talla=talla.id and inventarios.referencia=productos.referencia;";

        $consulta = "SELECT referencia, talla, color, cantidad, ventas_detalles.precio_unitario, descuento, (ventas_detalles.precio_unitario * cantidad) - descuento as total, id_agrupacion_producto FROM ventas_detalles, inventarios where inventario_id=inventarios.id_inventario and ventas_detalles.venta_id='".$id."' group by referencia, talla, color, cantidad, ventas_detalles.precio_unitario, descuento, total , id_agrupacion_producto;";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
            echo "<td>".$data['id_agrupacion_producto']."</td>"."<td>".$data['referencia']."</td>"."<td>".$data['talla']."</td>"."<td>".$data['color']."</td>"."<td>".$data['cantidad']."</td>"."<td>".$data['precio_unitario']."</td>"."<td>".$data['descuento']."</td><td class='total'>".$data['total']."</td><td><button type='button' class='btn btn-danger' onclick=".'"eliminar_venta_detalle'."('".$data['id_agrupacion_producto']."')".'"'.">Eliminar</button></td>";
 
                echo "</tr>";
            }
        }
}

elseif ($accion == "modificar") {
    $id_venta = $_POST['id_venta'];
    $id_cliente = $_POST['id_cliente'];
    $id_vendedor = $_POST['id_vendedor'];
    $fecha_venta = $_POST['fecha_venta'];
    $estado_orden = $_POST['estado_orden'];
    $cliente_aprobo = $_POST['cliente_aprobo'];

   


    $sql = "UPDATE ventas SET 
                            id_cliente = ?,
                            id_vendedor = ?,
                            fecha_venta = ?,
                            estado_orden = ?,
                            cliente_aprobo = ?,
                            cartera_aprobo = ?,
                            fecha_vencimiento = ?,
                            despacho_aprobo = ?,
                            transportadora = ?,
                            numero_guia = ?,
                            codigo_barras = ?,
                            metodo_pago = ?,
                            total_venta = ?
                            where id_venta = ?";
    $reg = $conexion->prepare($sql);
    


    if ($reg->execute(array($id_cliente, $id_vendedor,$fecha_venta,$estado_orden,$cliente_aprobo,$cartera_aprobo,$fecha_vencimiento,$despacho_aprobo,$transportadora,$numero_guia,$codigo_barras,$metodo_pago,$total_venta,$id_venta))) {
        echo 1;
    } else {
        // print_r($result->errorInfo());
        echo 0;
    }
}
elseif ($accion == "eliminar") {
    $id = $_POST['id'];

   

    $conexion = new Conexion();
    $arreglo = array();
    $i = 1;
    $consulta = "SELECT id_inventario FROM inventarios, ventas_detalles WHERE inventarios.id_inventario=ventas_detalles.inventario_id and id_agrupacion_producto ='".$id."'";





    $modules = $conexion->prepare($consulta);
    $modules->execute();
    $total = $modules->rowCount();
    
    if ($total > 0) {
        while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {


            $sql = "UPDATE inventarios SET  estado = ? where  id_inventario=".$data['id_inventario']."";
            $reg = $conexion->prepare($sql);



               if ($reg->execute(array("existencia"))) {
               echo 1;
               } else {
               // print_r($result->errorInfo());
               echo 0;
               }



            
        }
    }


    $sql = "DELETE FROM `ventas_detalles` WHERE id_agrupacion_producto=?";
       
    $reg = $conexion->prepare($sql);
    


    if ($reg->execute(array($id))) {
        echo 1;
    } else {
        // print_r($result->errorInfo());
        echo 0;
    }
}
else{

}