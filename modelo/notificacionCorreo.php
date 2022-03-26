<?php
	function notificaMovimiento($correo, $tit, $mens){
		$para      = $correo;
		$titulo    = $tit;
		$mensaje   = $mens;
		$cabeceras = 'From: soporte@htexsas.co' . "\r\n" .
		    'Reply-To: soporte@htexsas.co' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($para, $titulo, $mensaje, $cabeceras);
	}
?>