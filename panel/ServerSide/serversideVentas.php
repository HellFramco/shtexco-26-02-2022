<?php
require 'serverside.php';
$table_data->get('vistaAdministradorVentas_ventasGlobalesUserSecure','id_venta',array('id_venta', 'fecha_venta','id_usuario','estado','cliente','medio_pago','transportadora','cliente_aprobo','cartera_aprobo','alistamiento','despachada','imagen_comprobante_pago','id'));

?>