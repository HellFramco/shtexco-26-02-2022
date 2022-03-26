<?php
require_once "db.php";
require_once 'datos-inventarios.php';
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');



$accion = $_POST['accion'];

if ($accion == "buscar_referencia") {

	require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM inventarios WHERE referencia = ".$_POST['referencia']." AND estado = 'existencia'
                    group by color ORDER BY id_inventario DESC";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        foreach ($modules as $key) {
        	echo "
        	<tr>
        		<td class=''>REFERENCIA<td>
        		<td class=''>DESCRIPCION<td>
        		<td class=''>COLOR<td>
        		<th class=''>TALLA 6</th>
				<th class=''>TALLA 8</th>
				<th class=''>TALLA 10</th>
				<th class=''>TALLA 12</th>
				<th class=''>TALLA 14</th>
				<th class=''>TALLA S</th>
				<th class=''>TALLA M</th>
				<th class=''>TALLA L</th>
				<th class=''>TALLA XL</th>
				<th class=''></th>

        	</tr>
        	<tr>
        		<td class='text-center'>".$key['referencia']."<td>
        		<td class='text-center'>".$key['descripcion']."<td>
        		<td class='text-center'>".$key['color']."<td>
        		<th class=''><input id='talla_6_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 6)."'/><br><strong id='valida_6_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_8_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 8)."'/><br><strong id='valida_8_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_10_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 10)."'/><br><strong id='valida_10_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_12_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 12)."'/><br><strong id='valida_12_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_14_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 14)."'/><br><strong id='valida_14_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_s_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 'S')."'/><br><strong id='valida_s_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_m_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 'M')."'/><br><strong id='valida_m_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_l_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 'L')."'/><br><strong id='valida_l_".$key['referencia']."'></strong></th>
				<th class=''><input id='talla_xl_".$key['referencia']."' placeholder='Existen: ".cantidadTallas($_POST['referencia'], 'XL')."'/><br><strong id='valida_xl_".$key['referencia']."'></strong></th>
				<th class=''><a class='btn btn-success' id='valProducto_".$key['referencia']."'>Apartar Productos</a></th>
				<script>
              		document.getElementById('valProducto_".$key['referencia']."').addEventListener('click', function(){
                    
                    // var talla_6_".$key['referencia']." = document.getElementById('talla_6_".$key['referencia']."').value
                    // var valida_6_".$key['referencia']." = document.getElementById('valida_6_".$key['referencia']."').value
                    // var talla_8_".$key['referencia']." = document.getElementById('talla_8_".$key['referencia']."').value
                    // var talla_10_".$key['referencia']." = document.getElementById('talla_10_".$key['referencia']."').value
                    // var talla_12_".$key['referencia']." = document.getElementById('talla_12_".$key['referencia']."').value
                    // var talla_14_".$key['referencia']." = document.getElementById('talla_14_".$key['referencia']."').value
                    // var talla_s_".$key['referencia']." = document.getElementById('talla_s_".$key['referencia']."').value
                    // var talla_m_".$key['referencia']." = document.getElementById('talla_m_".$key['referencia']."').value
                    // var talla_l_".$key['referencia']." = document.getElementById('talla_l_".$key['referencia']."').value
                    // var talla_xl_".$key['referencia']." = document.getElementById('talla_xl_".$key['referencia']."').value
                    
                    // if(talla_6_".$key['referencia']." > ".cantidadTallas($_POST['referencia'], 6)."){
                    // 	valida_6_".$key['referencia'].".innerHTML = 'la cantidad es mayor de la que existe.';
                    // }
                  
                  alert('productos apartados');
              		
		              });
		             
		          </script>
        	</tr>
        	
        	
        	";



        }
      

       }

else{

}