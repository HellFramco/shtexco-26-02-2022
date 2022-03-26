<?php
// require_once "redireccion.php";

require_once "db.php";

$conexion = new Conexion();
date_default_timezone_set('America/Bogota');






 
  // var_dump($_POST);
    $fecha = date('Y-m-d H:i:s');
    // $fechaVencimiento = strtotime($fecha."+ 10 days");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;


        $sel = "SELECT * from codigos_barras_validados where codigo_barra = ".$_POST['codigo'];
        $mod = $conexion->query($sel);
        foreach ($mod as $keyM) {
            $id_inventario = $keyM['id_inventario'];
        }

        $sel = "SELECT * from inventarios_productos where id_inventario = ".$id_inventario." limit 1";
        $mod = $conexion->query($sel);
        if ($mod) {
            foreach ($mod as $key) {
        ?>
        <table width="100%" border="1">
            <tr>
                <th>REFERENCIA</th>
                <th><strong style="color: blue;"><?php echo $key['referencia']; ?></th>
            </tr>
            <tr>
                <th>DATOS</th>
                <th><strong style="color: blue;">MARCA: <?php echo $key['marca']; ?> <br>
                    <strong style="color: blue;">CATEGORIA: <?php echo $key['categoria']; ?> <br>
                        <strong style="color: blue;">SILUETA: <?php echo $key['silueta']; ?> <br>
                            <strong style="color: blue;">COLOR: <?php echo $key['color']; ?> <br>
                                <strong style="color: blue;">ESTADO: <?php echo $key['estado']; ?> <br>
                                  <strong style="color: blue;">VERIFICADO: <?php echo $key['verificado']; ?> </th>
            </tr>
            <tr>
                <th>TALLA6</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla6']; ?></strong> DEFINIDO EN:  <strong style="color: green;"><?php echo $key['talla6D']; ?></th>
            </tr>
            <tr>
                <th>TALLA8</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla8']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla8D']; ?></th>
            </tr>
            <tr>
                <th>TALLA10</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla10']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla10D']; ?></th>
            </tr>
            <tr>
                <th>TALLA12</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla12']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla12D']; ?></th>
            </tr>
            <tr>
                <th>TALLA14</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla14']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla14D']; ?></th>
            </tr>
            <tr>
                <th>TALLA16</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla16']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla16D']; ?></th>
            </tr>
            <tr>
                <th>TALLA18</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla18']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla18D']; ?></th>
            </tr>
            <tr>
                <th>TALLA20</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla20']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla20D']; ?></th>
            </tr>
            <tr>
                <th>TALLA26</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla26']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla26D']; ?></th>
            </tr>
            <tr>
                <th>TALLA28</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla28']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla28D']; ?></th>
            </tr>
            <tr>
                <th>TALLA30</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla30']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla30D']; ?></th>
            </tr>
            <tr>
                <th>TALLA32</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla32']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla32D']; ?></th>
            </tr>
            <tr>
                <th>TALLA34</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla34']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla34D']; ?></th>
            </tr>
            <tr>
                <th>TALLA36</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla36']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla36D']; ?></th>
            </tr>
            <tr>
                <th>TALLA38</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla38']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['talla38D']; ?></th>
            </tr>
            <tr>
                <th>TALLA S</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['talla1s']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['tallasD']; ?></th>
            </tr>
            <tr>
                <th>TALLA M</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['tallam']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['tallamD']; ?></th>
            </tr>
            <tr>
                <th>TALLA l</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['tallal']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['tallalD']; ?></th>
            </tr>
            <tr>
                <th>TALLA XL</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['tallaxl']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['tallaxlD']; ?></th>
            </tr>
            <tr>
                <th>TALLA U</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['tallau']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['tallauD']; ?></th>
            </tr>
            <tr>
                <th>TALLA EST</th>
                <th><strong style="color: blue;">EXISTENCIA: <?php echo $key['tallaest']; ?></strong> DEFINIDO EN: <strong style="color: green;"><?php echo $key['tallaestD']; ?></th>
            </tr>
        </table>
        <?php
        }
        }
        else{
            echo "Esto no existe...";
        }
        

        


        

        
        



        
      

