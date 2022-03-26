<?php
class Inventarios
{

    
    public function verColor()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM color";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }
    public function verCategoria()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM categorias";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verGenero()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM generos";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verProvedor()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM proveedores";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTelas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM telas";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTipos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM tipos_inventarios";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verMarcas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM marcas";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioSoporte()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos order by referencia";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoVentaSoporte()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM ventas_globales order by fecha_venta";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    
    public function verVentaId($id)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM lista_productos_ventas WHERE id_venta = ".$id;
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function contarReferenciaVentaCancelada($id_inventario)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT COUNT(*) FROM lista_productos_ventas WHERE id_inventario = ".$id_inventario." AND fecha_ingreso > '2022-03-0 00:00:00' AND estado != 'CANCELADO'";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    
    public function referenciasXventass($id_inventario)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM lista_productos_ventas WHERE id_inventario = ".$id_inventario." AND fecha_ingreso > '2022-03-0 00:00:00' AND estado != 'CANCELADO'";
        $modules = $conexion->query($consulta)->fetchAll();
        
        return $modules;
    }

    public function coloresOpciones()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM color";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }
    
    public function verEstructuraProducto()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos order by fecha_ingreso_producto desc limit 10";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventario($estado)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE estado='".$estado."' order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioLimitado($estado, $limite)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE estado='".$estado."' order by id_inventario limit ".$limite;
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verInventarioPorCodigoBarra($codigo)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM codigos_barras_validados WHERE codigo_barra='".$codigo."'";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioGeneral()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verHistorialEntradaBodega()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM historial_entrada_bodega order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verHistorialRegistroInventario()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM historial_inventarios_productos order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verPesosInventarios($id_inventario)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$id_inventario." order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verInventarioTshirt()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT referencia, color, SUM(tallas)as suma_tallas, SUM(tallam)as suma_tallam, SUM(tallal)as suma_tallal, SUM(tallau)as suma_tallau, SUM(tallas + tallam + tallal + tallau)as total FROM `inventarios_productos` WHERE tipo = 't-shirt' and estado = 'existencia' GROUP by referencia, color;";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }



    public function verInventarioLimite($limite)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos order by id_inventario limit ".$limite;
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verInventarioBuscado($referencia)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE referencia like '".$referencia."%' and estado = 'existencia' order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verInventarioBuscadoInsumos($referencia)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE referencia like '".$referencia."%' order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verInventarioAuditor()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos order by id_inventario limit 10";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioVerificado($estado,$verificado)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE estado='".$estado."' AND verificado_bodega='".$verificado."' order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioRegistrado()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos where estado = 'existencia' order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioRegistradoInsumos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos where estado = 'subido' order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verTodoInventarioObservaciones()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM observaciones_inventarios order by id_inventario desc";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }


    public function verInventarioId($id)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios_productos WHERE id_inventario = ".$id." order by id_inventario";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;
    }

    public function verIdMarca($valor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM marcas WHERE nameMar = '".$valor."'";
        $modules = $conexion->query($consulta)->fetchAll();

        foreach ($modules as $key) {
            return $key['id'];
        }
    }

    public function verIdSilueta($valor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM siluetas WHERE nameSil = '".$valor."'";
        $modules = $conexion->query($consulta)->fetchAll();

        foreach ($modules as $key) {
            return $key['id'];
        }
    }

    public function verSiluetas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT nameSil FROM siluetas order by id";
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    public function verCategorias()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT nameCat FROM categorias order by id desc";
        $modules = $conexion->query($consulta)->fetchAll();
        return $modules;
    }

    public function sumaCantidadTallaSilueta($talla,$silueta,$tipo)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT sum(talla".$talla.") as suma FROM inventarios_productos WHERE silueta = '".$silueta."' AND tipo = '".$tipo."' and estado = 'existencia'";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['suma'];
        }
    }

    public function sumaCantidadCategoria($talla,$categoria,$tipo)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT sum(talla".$talla.") as suma FROM inventarios_productos WHERE categoria = '".$categoria."' AND tipo = '".$tipo."'";
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
            return $key['suma'];
        }
    }



    public function verIdColor($valor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM color WHERE namecol = '".$valor."'";
        $modules = $conexion->query($consulta)->fetchAll();

        foreach ($modules as $key) {
            return $key['id'];
        }
    }

    public function verIdTela($valor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM telas WHERE nameTel = '".$valor."'";
        $modules = $conexion->query($consulta)->fetchAll();

        foreach ($modules as $key) {
            return $key['id'];
        }
    }

    public function verIdCategoria($valor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM categorias WHERE nameCat = '".$valor."'";
        $modules = $conexion->query($consulta)->fetchAll();

        foreach ($modules as $key) {
            return $key['id'];
        }
    }

    public function verIdGenero($valor)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM generos WHERE nombre_genero = '".$valor."'";
        $modules = $conexion->query($consulta)->fetchAll();

        foreach ($modules as $key) {
            return $key['id_genero'];
        }
    }

    public function verlistadoPrendas($id_venta)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM lista_productos_ventas WHERE id_venta = ". $id_venta;
        $modules = $conexion->query($consulta)->fetchAll();


            return $modules;

    }

    public function VerRotulo($id_venta)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM ventas_globales WHERE id_venta = ". $id_venta;
        $modules = $conexion->query($consulta)->fetchAll();


            return $modules;

    }

    public function datosFacturaCobro($id_cobro)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM cobros_inventarios WHERE id_cobro = ". $id_cobro." limit 1";
        $modules = $conexion->query($consulta)->fetchAll();


            return $modules;

    }

    public function verTodasFacturasCobros()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM cobros_inventarios";
        $modules = $conexion->query($consulta)->fetchAll();


            return $modules;

    }

    public function verColores()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM color order by nameCol asc";
        $modules = $conexion->query($consulta)->fetchAll();


            return $modules;

    }

    public function verBodegas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM bodegas order by nombre asc";
        $modules = $conexion->query($consulta)->fetchAll();


            return $modules;

    }



}
