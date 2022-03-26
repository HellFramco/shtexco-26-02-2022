<?php


// Cargue de librerias
include("conexion.php");

// Accediendo Base de datos S-HTEX
$con=conectar();
$fecha = date('Y-m-d');


// Importando datos de HTEX
$sql1 = "SELECT * FROM ventas_globales WHERE medio_pago = 'CONTRAENTREGA' OR medio_pago = 'EFECTIVO'";
$query1 =mysqli_query($con,$sql1);

while ($stockPrimaryDB =mysqli_fetch_array($query1)){
    
    if($stockPrimaryDB[9] == 'APROBO CLIENTE'){

        $sql="UPDATE ventas_globales SET estado = 'APROBO CARTERA', fecha_cartera_aprobo = '".$fecha."', cartera_aprobo = 'SI' WHERE id_venta ='$stockPrimaryDB[0]'";
        $query=mysqli_query($con,$sql);

        if($query){
            echo 'Elpedido se actualizo';
            echo "<br>";
        }else{
            echo 'NO se actualizo';
            echo "<br>";
        }

    }

}

?>