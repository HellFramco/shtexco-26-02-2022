<?php
require_once "redireccion.php";

require_once "db.php";

$conexion = new Conexion();
date_default_timezone_set('America/Bogota');






 
  // var_dump($_POST);
    $fecha = date('Y-m-d H:i:s');
    // $fechaVencimiento = strtotime($fecha."+ 10 days");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;


        $sel = "SELECT * from ventas_globales where id_venta = ".$_POST['id_venta'];
        $mod = $conexion->query($sel);
        foreach ($mod as $keyM) {
            echo $estado = $keyM['estado'];
        }


        

        
        if ($estado == 'ALISTAMIENTO') {
     
                $consulta = "UPDATE ventas_globales SET estado = 'APROBO DESPACHO', despachada = 'SI', fecha_despacho = '".$fecha."' WHERE id_venta = ".$_POST['id_venta']." AND alistamiento = 'SI' AND estado = 'ALISTAMIENTO'";
                $modules = $conexion->query($consulta);
                echo "
                    <script>
                        alert('lA VENTA AH SIDO DESPACHADA EXITOSAMENTE.');
                        location.href = '../panel/ventas-por-despachar.php';
                    </script>
                ";
        }
        else
        {
            echo "
                    <script>
                        alert('ESTA VENTA NO PUEDE SER DESPACHADA, PORQUE NO HA SIDO ALISTADA POR BODEGA.');
                        location.href = '../panel/ventas-por-despachar.php';
                    </script>
                ";
        }
        //     else{
        //       echo "
                
        //       ";
        //     }
        // }
        // else{
        //     echo "
        //         <script>
        //             alert('ESTA VENTA AUN NO AH SIDO ALISTADA POR BODEGA PARA DESPACHAR.');
        //             location.href = '../panel/ventas-por-despachar.php';
        //         </script>
        //     ";
        //     }
        // }
        



        
      

