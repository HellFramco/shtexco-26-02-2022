<?php
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_GET['accion'];

if ($accion == "registrar") {


    $script_tz = date_default_timezone_get();
$fecha = date('Y-m-d', time());  



  
    $id_producto = $_POST['producto'];
    $id_talla = $_POST['talla'];
    $id_color = $_POST['color'];
    $id_marca = $_POST['marca'];
    $id_silueta = $_POST['silueta'];
    $id_tela = $_POST['tela'];
    $id_categoria = $_POST['categoria'];
      $stock = $_POST['stock'];
    $id_proveedor = $_POST['proveedor'];
    $precio = $_POST['precio'];

    $estado_inventario = $_POST['estado'];
    $codigo_barras = $_POST['codigo_barra'];


    $sql = "INSERT INTO inventarios ( referencia, id_talla, id_color, id_marca, id_silueta, id_tela, id_categoria, stock, id_proveedor, precio_unitario,  fecha, estado, codigo_barras)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?, ?)";
    $reg = $conexion->prepare($sql);

    $reg->bindParam(1,$id_producto);
    $reg->bindParam(2,$id_talla);
    $reg->bindParam(3,$id_color);
    $reg->bindParam(4,$id_marca);
    $reg->bindParam(5,$id_silueta);
    $reg->bindParam(6,$id_tela);
    $reg->bindParam(7,$id_categoria);
    $reg->bindParam(8,$stock);
    $reg->bindParam(9,$id_proveedor);
    $reg->bindParam(10,$precio);
    $reg->bindParam(11,$fecha);
    $reg->bindParam(12,$estado_inventario);
    $reg->bindParam(13,$codigo_barras);


    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }
}
elseif ($accion == "modificar") {



  $id_inventario = $_POST['id'];
    $id_producto = $_POST['producto'];
    $id_talla = $_POST['talla'];
    $id_color = $_POST['color'];
    $id_marca = $_POST['marca'];
    $id_silueta = $_POST['silueta'];
    $id_tela = $_POST['tela'];
    $id_categoria = $_POST['categoria'];
      $stock = $_POST['stock'];
    $id_proveedor = $_POST['proveedor'];
    $precio = $_POST['precio'];

    $estado_inventario = $_POST['estado'];
    $codigo_barras = $_POST['codigo_barra'];






    $sql = "UPDATE `inventarios` SET referencia=?,id_talla=?,id_color=?,id_marca=?,id_silueta=?,id_tela=?,id_categoria=?,stock=?,id_proveedor=?,precio_unitario=?,estado=?,codigo_barras=? WHERE id_inventario=?";
    $reg = $conexion->prepare($sql);

    $reg->bindParam(1,$id_producto);
    $reg->bindParam(2,$id_talla);
    $reg->bindParam(3,$id_color);
    $reg->bindParam(4,$id_marca);
    $reg->bindParam(5,$id_silueta);
    $reg->bindParam(6,$id_tela);
    $reg->bindParam(7,$id_categoria);
    $reg->bindParam(8,$stock);
    $reg->bindParam(9,$id_proveedor);
    $reg->bindParam(10,$precio);



    $reg->bindParam(11,$estado_inventario);
     $reg->bindParam(12,$codigo_barras);

     $reg->bindParam(13,$id_inventario);

    if ($reg->execute()) {
        echo 1;
    } else {
        print_r($reg->errorInfo());
        echo 0;
    }



}
elseif ($accion == "buscar_talla") {

  $id_inventario = $_POST['id'];
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id_talla, nameTal FROM inventarios,talla WHERE referencia = '".$id_inventario."' and inventarios.id_talla=talla.id";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='".$data['id_talla']."'>".$data['nameTal']."</opton>";
 
                
            }
        }
       
}

elseif ($accion == "buscar_cantidad") {

      $id = $_POST['id'];
      $tallas = $_POST['tallas'];
      $color = $_POST['color'];
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id_inventario, stock, precio_unitario FROM inventarios  WHERE referencia = '".$id."' and inventarios.id_talla='".$tallas."' and  inventarios.id_color='".$color."'";

      
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            echo "0/".$data['id_inventario']."/".$data['stock']."/".$data['precio_unitario']."/";
 
                
            }
        }
       
}
elseif ($accion == "buscar_color") {

  $id_inventario = $_POST['id'];
  $talla = $_POST['tallas'];
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT id_color, nameCol FROM inventarios, color WHERE referencia ='".$id_inventario."' and inventarios.id_color=color.id and inventarios.id_talla='".$talla."'";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            echo "<option value='".$data['id_color']."'>".$data['nameCol']."</opton>";
 
                
            }
        }
       
}
else{

}