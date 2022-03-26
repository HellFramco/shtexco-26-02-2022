<?php
session_start();


	    require_once("../modelo/db.php");
        $conexion = new Conexion();


        $consultaPedidos = "SELECT id_venta, medio_pago, estado FROM ventas_globales WHERE medio_pago = 'CONTRAENTREGA' AND estado = 'APROBO CLIENTE'";
        $modulesPedidos = $conexion->query($consultaPedidos);
        foreach ($modulesPedidos as $key) {
            echo "
            <script>
                console.log('Pedido ".$key['id_venta']." ".$key['medio_pago']." ".$key['estado']." en Espera...');
            </script>
            ";
        }

               

       

      




?>