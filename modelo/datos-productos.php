<?php


class productos
{

    public function viewProductos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM productos ORDER BY id_producto DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_producto'] = $data['id_producto'];
                $arreglo[$i]['referencia'] = $data['referencia'];
                $arreglo[$i]['descripcion'] = $data['descripcion'];
                $arreglo[$i]['fecha'] = $data['fecha'];
                $arreglo[$i]['estado'] = $data['estado'];
                $arreglo[$i]['silueta'] = $data['silueta'];
                $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['marca'] = $data['marca'];
                // $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['categoria'] = $data['categoria'];
                $arreglo[$i]['precio'] = $data['precio'];
                $arreglo[$i]['proveedor'] = $data['proveedor'];
                // $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['genero'] = $data['genero'];
                $arreglo[$i]['color'] = $data['color'];
                $arreglo[$i]['coleccion'] = $data['coleccion'];
                $arreglo[$i]['tipo_inventario'] = $data['tipo_inventario'];
                $arreglo[$i]['bodega'] = $data['bodega'];
                $arreglo[$i]['ruta'] = $data['ruta'];
                // $arreglo[$i]['codigo_barras'] = $data['codigo_barras'];
                // $arreglo[$i][''] = $data[''];
                $i++;
            }
        }
        return $arreglo;
    }

    public function viewProductoReferencia($referencia)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * FROM productos WHERE referencia = ". $referencia;
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id_producto'] = $data['id_producto'];
                $arreglo[$i]['referencia'] = $data['referencia'];
                $arreglo[$i]['descripcion'] = $data['descripcion'];
                $arreglo[$i]['fecha'] = $data['fecha'];
                $arreglo[$i]['estado'] = $data['estado'];
                $arreglo[$i]['silueta'] = $data['silueta'];
                $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['marca'] = $data['marca'];
                // $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['categoria'] = $data['categoria'];
                $arreglo[$i]['precio'] = $data['precio'];
                $arreglo[$i]['proveedor'] = $data['proveedor'];
                // $arreglo[$i]['tela'] = $data['tela'];
                $arreglo[$i]['genero'] = $data['genero'];
                $arreglo[$i]['color'] = $data['color'];
                $arreglo[$i]['coleccion'] = $data['coleccion'];
                $arreglo[$i]['tipo_inventario'] = $data['tipo_inventario'];
                $arreglo[$i]['bodega'] = $data['bodega'];
                $arreglo[$i]['ruta'] = $data['ruta'];
                // $arreglo[$i]['codigo_barras'] = $data['codigo_barras'];
                // $arreglo[$i][''] = $data[''];
                $i++;
            }
        }
        return $arreglo;
    }



    public function viewProducto($id_producto)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $i = 0;
        $consulta = "SELECT * FROM productos WHERE id_producto = " . $id_producto;
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $$arreglo[$i]['id_producto'] = $data['id_producto'];
                $arreglo[$i]['referencia'] = $data['referencia'];
                $arreglo[$i]['descripcion'] = $data['descripcion'];
                $arreglo[$i]['fecha'] = $data['fecha'];
                $arreglo[$i]['estado'] = $data['estado'];
                $i++;
            }
        }
        return $arreglo;
    }

    public function mostrar_productos_select()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM productos ORDER BY id_producto DESC";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();

        if ($total > 0) {
            while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
                $arreglo[$i]['id'] = $data['id_producto'];
                $arreglo[$i]['referencia'] = $data['referencia'];
                $arreglo[$i]['descripcion'] = $data['descripcion'];

                $i++;
            }
        }
        return $arreglo;
    }

    // Esto son las opciones de marcas que existen desde la base de datos
    function select_marcas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM marcas ORDER BY nameMar asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nameMar'] ."'>". $key['nameMar'] ."</option>";
            }
        }

    }

    // Esto son las opciones de marcas que existen desde la base de datos
    function select_siluetas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM siluetas ORDER BY nameSil asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nameSil'] ."'>". $key['nameSil'] ."</option>";
            }
        }

    }

    // Esto son las opciones de tallas que existen desde la base de datos
    function select_tallas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM talla ORDER BY id DESC";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['valueApp'] ."'>". $key['valueApp'] ."</option>";
            }
        }

    }

    // Esto son las opciones de colores que existen desde la base de datos
    function select_color()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM color ORDER BY nameCol asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nameCol'] ."'>". $key['nameCol'] ."</option>";
            }
        }

    }

    // Esto trae el color exadecimal
        function color_hexa($color)
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM color WHERE nameCol = '".$color."'";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                $i = 1;
                $colores = $key['hexa'];
                $nombres = $key['nameCol'];
                $coloreXseparado = explode(',',$colores);
                $nombresXseparado = explode('/',$nombres);

                if(count($nombresXseparado) > 1){

                    for($i=0;$i < count($nombresXseparado); $i++){

                        if($nombresXseparado[$i] == 'HUESO' || $nombresXseparado[$i] == 'MARFIL' || $nombresXseparado[$i] == 'AMARILLO' || $nombresXseparado[$i] == 'AZUL CLARO' || $nombresXseparado[$i] == 'BLANCO'){

                            echo "<em style='background-color:".$coloreXseparado[$i]."; padding:2px 7px; border-radius:20%; font-size:12px; text-aling-center; color:#000000;'>".$nombresXseparado[$i]."</em>";

                        }else{

                            echo "<em style='background-color:".$coloreXseparado[$i]."; padding:2px 7px; border-radius:20%; font-size:12px; text-aling-center; color:#909090;'>".$nombresXseparado[$i]."</em>";

                        }
                        
                        echo "<br>";

                    }

                }else{

                    
                    if($key['nameCol'] == 'HUESO' || $key['nameCol'] == 'MARFIL' || $key['nameCol'] == 'AMARILLO' || $key['nameCol'] == 'AZUL CLARO' || $key['nameCol'] == 'BLANCO'){

                        echo "<em style='background-color:".$key['hexa']."; padding:2px 7px; border-radius:20%; font-size:12px; text-aling-center; color:#000000;'>".$key['nameCol']."</em>";

                    }else{

                        echo "<em style='background-color:".$key['hexa']."; padding:2px 7px; border-radius:20%; font-size:12px; text-aling-center; color:#ffffff;'>".$key['nameCol']."</em>";

                    }
                    
                    echo "<br>";

                }

            }
        }

        if($i==0){
            echo "<em style='background-color: #ffffff; padding:5px; border-radius:20%; font-size:12px; text-aling-center;'>".$color."</em>";
        }

    }

    // Esto son las opciones de categorias que existen desde la base de datos
    function select_categorias()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM categorias ORDER BY nameCat asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nameCat'] ."'>". $key['nameCat'] ."</option>";
            }
        }

    }

    // Esto son las opciones de telas que existen desde la base de datos
    function select_telas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM telas ORDER BY nameTel asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nameTel'] ."'>". $key['nameTel'] ."</option>";
            }
        }

    }

    // Esto son las opciones de proveedores que existen desde la base de datos
    function select_proveedores()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM proveedores ORDER BY nameProv asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nameProv'] ."'>". $key['nameProv'] ."</option>";
            }
        }

    }

    // Esto son las opciones de generos que existen desde la base de datos
    function select_generos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM generos ORDER BY nombre_genero ASC";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nombre_genero'] ."'>". $key['nombre_genero'] ."</option>";
            }
        }

    }

    // Esto son las opciones de colecciones que existen desde la base de datos
    function select_colecciones()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM colecciones ORDER BY nombre_coleccion asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nombre_coleccion'] ."'>". $key['nombre_coleccion'] ."</option>";
            }
        }

    }

    // Esto son las opciones de tipos_inventarios que existen desde la base de datos
    function select_tipos_inventarios()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM tipos_inventarios ORDER BY nombre asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nombre'] ."'>". $key['nombre'] ."</option>";
            }
        }

    }

    // Esto son las opciones de bodegas que existen desde la base de datos
    function select_bodegas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM bodegas ORDER BY nombre DESC";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['nombre'] ."'>". $key['nombre'] ."</option>";
            }
        }

    }

    // Esto son las opciones de rutas que existen desde la base de datos
    function select_rutas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM bodega_estante ORDER BY estante ASC";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['estante'] ."'>". $key['estante'] ."</option>";
            }
        }

    }

    // Esto es el conteo de inventario general
    function cantidadInventarioGeneral()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT count(id_inventario) as conteo from inventarios;";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo $key['conteo'];
            }
        }

    }

    // Esto es el conteo de referencias general
    function cantidadReferenciasGeneral()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT count(id_producto) as conteo from productos;";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo $key['conteo'];
            }
        }

    }

    // Esto es el conteo de referencias general
    function cantidadVentas()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT count(id_venta) as conteo from ventas;";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo $key['conteo'];
            }
        }

    }

    // mostrar el inventarios general sin desglosarlo, mostrando el dato de codigo de barras
    function viewInventarios()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM inventarios ORDER BY id_inventario asc";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;

    }

    // mostrar el inventarios general sin desglosarlo, mostrando el dato de codigo de barras
    function viewCodigosBarras()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM codigos_barras_validados ORDER BY id_codigo asc limit 10";
        $modules = $conexion->query($consulta)->fetchAll();

        return $modules;

    }
    
    public function verOrigenesProductos()
    {
        require_once 'db.php';
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;

        $consulta = "SELECT * FROM origenes_inventarios ORDER BY origen asc";
        $modules = $conexion->query($consulta)->fetchAll();



        if ($modules) {
            foreach ($modules as $key) {
                echo "<option value='". $key['origen'] ."'>". $key['origen'] ."</option>";
            }
        }

    }


}
