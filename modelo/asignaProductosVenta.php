<?php
require_once "db.php";
require_once 'datos-inventarios.php';
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];

if ($accion == "asignaProductosVenta") {

	require_once("db.php");
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

		// $fecha = date('Y-m-d');
		// $fechaVencimiento = strtotime($fecha."+ 10 days");
  //       $conexion = new Conexion();
  //       $arreglo = array();
  //       $i = 0;
  //       $consulta = "INSERT INTO ventas_globales(cliente, direccion, transportadora, medio_pago, fecha_venta, fecha_vencimiento, estado) VALUES('".$_POST['cliente']."','".$_POST['direccion']."','".$_POST['transportadora']."','".$_POST['metodo_pago']."','".$fecha."','".$fechaVencimiento."', 'CREADA')";
  //       $modules = $conexion->query($consulta);
        
  //       $ultimoID = $conexion->lastInsertId();

  //       $consultaCliente = "SELECT id FROM clientes WHERE nombre_cli = '".$_POST['cliente']."' limit 1";
  //       $cliente = $conexion->query($consultaCliente)->fetchAll();
  //       foreach ($cliente as $keyCliente) {
  //           $idCliente = $keyCliente['id'];
  //       }
        
        
  //       if ($modules) {
  //           echo "
  //               <script>
  //                   alert('Orden Iniciada');
  //                   location.href = 'orden-nueva-venta.php?cliente=".$idCliente."&id_venta=".$ultimoID."';
  //               </script>
  //           ";
  //       }
  //       else{
  //       	echo "
        		
  //       	";
  //       }



        
      

       }

else{

}