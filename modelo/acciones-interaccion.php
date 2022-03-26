<?php
date_default_timezone_set("America/Bogota");
require_once("db.php");
$conexion = new Conexion();

$cc = $_POST['cod_cliente'];
$cu = $_POST['cod_usuario'];
$freg = date('Y-m-d');
$cont = $_POST['contacto'];
if ($cont == "" || $cont == $freg) {
	$cont = date("Y-m-d", strtotime($freg . "+ 8 days"));
}
$obs = $_POST['observacion'];

if ($obs != "") {
	$sql = 'INSERT INTO clientes_interacciones (id_cliente, id_usuario, fecha_registro, fecha_contacto, observacion_interaccion) 
	        VALUES (?, ?, ?, ?, ?)';

	$reg = $conexion->prepare($sql);
	$reg->bindParam(1, $cc);
	$reg->bindParam(2, $cu);
	$reg->bindParam(3, $freg);
	$reg->bindParam(4, $cont);
	$reg->bindParam(5, $obs);

	$sqlUp = "UPDATE clientes 
	          SET fecha_contacto = '" . $cont . "', 
	              observacion_interaccion = '" . $obs . "' 
	          WHERE id = " . $cc;
	$actualizar = $conexion->prepare($sqlUp);

	//if($reg->execute() && $actualizar->execute()){
	if ($reg->execute()) {
		echo 1;
	} else {
		echo 0;
	}
} else {
	echo 2;
}
