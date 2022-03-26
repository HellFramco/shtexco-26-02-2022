<?php include './librerias_js/pruebas-libreriasjs.php' ?>
<?php 
include '../modelo/redireccion.php';
    $id_venta= $_GET['id_venta'];
    require_once("../modelo/db.php");
$conexion = new Conexion();
$arreglo = array();
$i = 0;
$consulta = "SELECT * FROM ventas_globales WHERE id_venta = '".$id_venta."'";
$modules = $conexion->prepare($consulta);
$modules->execute();
$total = $modules->rowCount();
if($total > 0) {
    while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {

        
        $nombrecliente = $data['cliente'];
        $direccion_cliente = $data['direccion'];
        

        $consulta2 = "SELECT * FROM clientes WHERE nombre_cli = '".$nombrecliente."'";
        $modules2 = $conexion->prepare($consulta2);
        $modules2->execute();
        $total2 = $modules2->rowCount();
        if($total2 > 0) {
            while ($data2 = $modules2->fetch(PDO::FETCH_ASSOC)) {
        
 
        
        
                
                $cedula_cliente= $data2['identificacion_cli'];
          
                
                
                $TELEFONO_cliente = $data2['telefono'];
                $id_cliente = $data2['id'];
      
        
        
        
        
            }
        }


        $consulta3 = "SELECT * FROM clientes_direccion WHERE id_cliente = '".$id_cliente."' and direccion='".$direccion_cliente."'";
        $modules3 = $conexion->prepare($consulta3);
        $modules3->execute();
        $total3 = $modules3->rowCount();
        if($total3 > 0) {
            while ($data3 = $modules3->fetch(PDO::FETCH_ASSOC)) {
        
 
                $DEPARTAMENTO_cliente = $data3['departamento'];
                $ciudad_cliente = $data3['ciudad'];
        
        
            }
        }
        
        







    }
}

?>
<table cellspacing="0" cellpadding="1" border="1" align="center" style="text-align: center; width: 1000px;">
        <tr>
            <td>
                 <img src="../imagenes/logo.jpeg" alt="test alt attribute" width="100" height="50" border="0" />
            </td>
            <td>
                CALLE 17N #4-50 CIUDADELA DEL <br>
                CALZADO ZONA INDUSTRIAL <br>
                CUCUTA - NORTE DE SANTANDER <br>
                TEL: 3144237025 - 3112949753<br>
                NIT 900607480-3

            </td>
        </tr>
        <tr>
            <td>
                - DESTINATARIO
            </td>
            <td>
                ORDEN <?php echo $id_venta; ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
            <br>
            <br>
                <b>NOMBRE:</b> <?php echo $nombrecliente; ?> <br><br>
                <b>NIT O CC:</b> <?php echo $cedula_cliente; ?> <br><br>
                <b>DIRECCION:</b> <?php echo $direccion_cliente; ?> <br><br>
                <b>CIUDAD:</b> <?php echo $ciudad_cliente; ?> <br><br>
                <b>DEPARTAMENTO:</b> <?php echo $DEPARTAMENTO_cliente; ?> <br><br>
                <b>TELEFONO:</b> <?php echo $TELEFONO_cliente; ?> <br><br> 
            </td>

        </tr>

        <center>
            <tr>
           <td></td>
            <td>
                <br><br>
                <div id="imagen_<?php echo $id_venta; ?>"></div>
                      <script>
                      $("#imagen_<?php echo $id_venta; ?>").html('<img style="width: 200px;" src="../librerias/php-barcode/barcode.php?text='+<?php echo $id_venta; ?>+'&size=15&codetype=Code39&print=true"/>');
                      
                    </script>
            </td>
            <td></td>
        </tr>
        </center>
        

</table>

<script>
    print();
</script>