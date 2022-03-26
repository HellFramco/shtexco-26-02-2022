<?php
class inventario
{

    public function viewInventarios()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT inv.id_inventario, 
                            inv.referencia, 
                            sil.nameSil as silueta, 
                            cat.nameCat as categoria, 
                            mar.nameMar as marca, 
                            col.nameCol as color, 
                            tal.nameTal as talla, 
                            tel.nameTel as tela, 
                            pro.id as proveedor, 
                            inv.stock, 
                            inv.precio_unitario, 
                            inv.fecha, 
                            inv.estado, 
                            inv.codigo_barras, 
                            sil.id as id_siluet, 
                            cat.id as id_categoria, 
                            mar.id as id_marcas, 
                            col.id as id_color, 
                            tal.id as id_tallas, 
                            tel.id as id_telas,
                            probod.bod_ubic_id
                     FROM inventarios inv 
                     INNER JOIN siluetas sil ON inv.id_silueta=sil.id 
                     INNER JOIN categorias cat ON inv.id_categoria=cat.id 
                     INNER JOIN marcas mar ON inv.id_marca=mar.id 
                     INNER JOIN color col ON inv.id_color=col.id 
                     INNER JOIN talla tal ON inv.id_talla=tal.id 
                     INNER JOIN telas tel ON inv.id_tela=tel.id 
                     INNER JOIN proveedores pro ON inv.id_proveedor=pro.id
                     INNER JOIN prodxbodega probod ON inv.id_inventario=probod.inventario_id
                     ORDER BY inv.referencia DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                // Información llaves foráneas
                $arreglo[$i]['id_categoria'] = $data['id_categoria'];
                $arreglo[$i]['id_siluetas'] = $data['id_siluet'];
                $arreglo[$i]['id_color'] = $data['id_color'];
                $arreglo[$i]['id_talla'] = $data['id_tallas'];
                $arreglo[$i]['id_marcas'] = $data['id_marcas'];
                $arreglo[$i]['id_telas'] = $data['id_telas'];
                // Información del inventario
                $arreglo[$i]['id_inventario'] = $data['id_inventario'];
                $arreglo[$i]['id_producto'] = $data['referencia'];
                $arreglo[$i]['stock'] = $data['stock'];
                $arreglo[$i]['precio'] = $data['precio_unitario'];
                $arreglo[$i]['categoria'] = $data['categoria'];
                $arreglo[$i]['silueta'] = $data['silueta'];
                $arreglo[$i]['color'] = $data['color'];
                $arreglo[$i]['talla'] = $data['talla'];
                $arreglo[$i]['marca'] = $data['marca'];
                $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['estado_inventario'] = $data['estado'];
                $arreglo[$i]['fecha_inventario'] = $data['fecha'];
                $arreglo[$i]['id_proveedor'] = $data['proveedor'];
                $arreglo[$i]['bod_ubic_id'] = $data['bod_ubic_id'];
                // Información código de barras
                $arreglo[$i]['codigo_barras'] = $data['codigo_barras'];
                $i++;
            }
        }
        return $arreglo;
    }

    public function viewInventario($id)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT inv.id_inventario, 
                            inv.referencia, 
                            sil.nameSil as silueta, 
                            cat.nameCat as categoria, 
                            mar.nameMar as marca, 
                            col.nameCol as color, 
                            tal.nameTal as talla, 
                            tel.nameTel as tela, 
                            pro.id as proveedor, 
                            inv.stock, 
                            inv.precio_unitario, 
                            inv.fecha, 
                            inv.estado, 
                            inv.codigo_barras, 
                            sil.id as id_siluet,
                            cat.id as id_categoria, 
                            mar.id as id_marcas, 
                            col.id as id_color, 
                            tal.id as id_tallas, 
                            tel.id as id_telas 
                     FROM inventarios inv 
                     INNER JOIN siluetas sil ON inv.id_silueta=sil.id 
                     INNER JOIN categorias cat ON inv.id_categoria=cat.id 
                     INNER JOIN marcas mar ON inv.id_marca=mar.id 
                     INNER JOIN color col ON inv.id_color=col.id 
                     INNER JOIN talla tal ON inv.id_talla=tal.id 
                     INNER JOIN telas tel ON inv.id_tela=tel.id
                     AND inv.referencia=:id
                     INNER JOIN proveedores pro ON inv.id_proveedor=pro.id 
                     ORDER BY inv.referencia DESC";

        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id", $id);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                // Información llaves foráneas
                $arreglo[$i]['id_categoria'] = $data['id_categoria'];
                $arreglo[$i]['id_siluetas'] = $data['id_siluet'];
                $arreglo[$i]['id_color'] = $data['id_color'];
                $arreglo[$i]['id_talla'] = $data['id_tallas'];
                $arreglo[$i]['id_marcas'] = $data['id_marcas'];
                $arreglo[$i]['id_telas'] = $data['id_telas'];
                // Información del inventario
                $arreglo[$i]['id_inventario'] = $data['id_inventario'];
                $arreglo[$i]['id_producto'] = $data['referencia'];
                $arreglo[$i]['stock'] = $data['stock'];
                $arreglo[$i]['precio'] = $data['precio_unitario'];
                $arreglo[$i]['categoria'] = $data['categoria'];
                $arreglo[$i]['silueta'] = $data['silueta'];
                $arreglo[$i]['color'] = $data['color'];
                $arreglo[$i]['talla'] = $data['talla'];
                $arreglo[$i]['marca'] = $data['marca'];
                $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['estado_inventario'] = $data['estado'];
                $arreglo[$i]['fecha_inventario'] = $data['fecha'];
                $arreglo[$i]['id_proveedor'] = $data['proveedor'];
                // Información código de barras
                $arreglo[$i]['codigo_barras'] = $data['codigo_barras'];
                $i++;
            }
        }
        return $arreglo;
    }
    // Identificar la ubicación del inventario en la bodega
    public function invUbicBodega($id_inv)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $ubic = "";

        $consulta = "SELECT inv.id_inventario,
                            bodubi.bodega_cod, 
                            bodubi.estante_cod, 
                            bodubi.ubicacion
                     FROM inventarios inv
                     INNER JOIN prodxbodega probod ON inv.id_inventario=probod.inventario_id
                     INNER JOIN bodega_ubicacion bodubi ON probod.bod_ubic_id=bodubi.id_bod_ubic
                     WHERE inv.id_inventario=:id_inv";

        $modules = $conexion->prepare($consulta);
        $modules->bindParam(":id_inv", $id_inv);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $ubic = $data['bodega_cod'] . "-" . $data['estante_cod'] . "-" . $data['ubicacion'];
            }
        }
        return $ubic;
    }
}