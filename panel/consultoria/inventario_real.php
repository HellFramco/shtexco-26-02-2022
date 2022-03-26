<?php
session_start();
require_once '../../modelo/datosInventarios.php';
$datos = new Inventarios();
$color_existencia = 'green';
    $color_texto_existencia = 'white';
    $item = 0;
    $totalInventario = 0;
    $ticFalta = 0;
    # $_SESSION['ticFalta'] = $ticFalta;
?>
<style>
    .fila-registros:hover{
        background-color: gray;
    }

    .fila-registros:active{
        background-color: mediumseagreen;
    }
</style>
<div id="datos">
    <legend style="float: left; background-color: <?php echo $color_existencia; ?>; font-size: 20px; padding: 10px; color: <?php echo $color_texto_existencia; ?>; text-transform: uppercase;">Referencias Inventariadas = <?php echo $_SESSION['item']; ?></legend>
    <legend style="float: left; background-color: <?php echo $color_existencia; ?>; font-size: 20px; padding: 10px; color: <?php echo $color_texto_existencia; ?>; text-transform: uppercase;">Total Inventario = <?php echo $_SESSION['totalInventario']; ?></legend>
    <legend style="float: right; background-color: orange; font-size: 20px; padding: 10px; color: <?php echo $color_texto_existencia; ?>; text-transform: uppercase;">Referencias faltantes por ticket = <?php echo $_SESSION['ticFalta']; ?></legend>
</div>

<table border="1" width="100%">
    <tr style="text-transform: uppercase;">
        <th>Bodega</th>
        <th>Ruta</th>
        <th>tickets</th>
        <th>Referencia</th>
        <th>Descripcion</th>
        <th>Categoria</th>
        <th>Silueta</th>
        <th>Color</th>
        <th>talla 6</th>
        <th>talla 8</th>
        <th>talla 10</th>
        <th>talla 12</th>
        <th>talla 14</th>
        <th>talla 16</th>
        <th>talla 18</th>
        <th>talla 20</th>
        <th>talla 26</th>
        <th>talla 28</th>
        <th>talla 30</th>
        <th>talla 32</th>
        <th>talla 34</th>
        <th>talla 36</th>
        <th>talla 38</th>
        <th>talla s</th>
        <th>talla m</th>
        <th>talla l</th>
        <th>talla xl</th>
        <th>talla u</th>
        <th>talla est</th>
        <th>Total</th>
    </tr>
    <?php 
    
    foreach ($datos->verInventario() as $key) {
?>
<tr style="text-align: center;" class="fila-registros">
    <td><?php echo $key['bodega']; ?></td>
    <td><?php echo $key['ruta']; ?></td>
    <td><?php if($key['impresion_codigo_barras'] == 'SI'){ echo '<strong style="background-color: green; color: white; padding: 7px;">LISTOS</strong>'; }else{ echo '<strong style="background-color: orange; color: white; padding: 7px;">FALTAN</strong>'; } ?></td>
    <td><?php echo $key['referencia']; ?></td>
    <td><?php echo $key['descripcion']; ?></td>
    <td><?php echo $key['categoria']; ?></td>
    <td><?php echo $key['silueta']; ?></td>
    <td><?php echo $key['color']; ?></td>
    <td>
    	<?php if($key['talla6'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla6'].'</strong>'; }else{ echo $key['talla6']; } ?>
    		
    </td>
    <td>
    	<?php if($key['talla8'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla8'].'</strong>'; }else{ echo $key['talla8']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla10'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla10'].'</strong>'; }else{ echo $key['talla10']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla12'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla12'].'</strong>'; }else{ echo $key['talla12']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla14'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla14'].'</strong>'; }else{ echo $key['talla14']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla16'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla16'].'</strong>'; }else{ echo $key['talla16']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla18'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla18'].'</strong>'; }else{ echo $key['talla18']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla20'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla20'].'</strong>'; }else{ echo $key['talla20']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla26'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla26'].'</strong>'; }else{ echo $key['talla26']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla28'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla28'].'</strong>'; }else{ echo $key['talla28']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla30'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla30'].'</strong>'; }else{ echo $key['talla30']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla32'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla32'].'</strong>'; }else{ echo $key['talla32']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla34'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla34'].'</strong>'; }else{ echo $key['talla34']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla36'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 4px; border-radius: 50%;">'.$key['talla36'].'</strong>'; }else{ echo $key['talla36']; } ?>
   
    </td>
    <td>
    	<?php if($key['talla38'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['talla38'].'</strong>'; }else{ echo $key['talla38']; } ?>
   
    </td>
    <td>
    	<?php if($key['tallas'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['tallas'].'</strong>'; }else{ echo $key['tallas']; } ?>
   
    </td>
    <td>
    	<?php if($key['tallam'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['tallam'].'</strong>'; }else{ echo $key['tallam']; } ?>
   
    </td>
    <td>
    	<?php if($key['tallal'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['tallal'].'</strong>'; }else{ echo $key['tallal']; } ?>
   
    </td>
    <td>
    	<?php if($key['tallaxl'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['tallaxl'].'</strong>'; }else{ echo $key['tallaxl']; } ?>
   
    </td>
    <td>
    	<?php if($key['tallau'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['tallau'].'</strong>'; }else{ echo $key['tallau']; } ?>
   
    </td>
    <td>
    	<?php if($key['tallaest'] >= 1){ echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 3px; border-radius: 50%;">'.$key['tallaest'].'</strong>'; }else{ echo $key['tallaest']; } ?>
   
    </td>
    <td>
    	<?php 
    		$total = ($key['talla6'] + $key['talla8'] + $key['talla10'] + $key['talla12'] + $key['talla14'] + $key['talla16'] +$key['talla18'] + $key['talla20'] + $key['talla26'] + $key['talla28'] + $key['talla30'] +$key['talla32'] + $key['talla34'] + $key['talla36'] + $key['talla38'] + $key['tallas'] +$key['tallam'] + $key['tallal'] + $key['tallaxl'] + $key['tallau'] + $key['tallaest']); 
		    if ($total >= 1) {
		    	echo '<strong style="background-color: '.$color_existencia.'; color: '.$color_texto_existencia.'; padding: 4px; border-radius: 10%;">'.$total.'</strong>'; 

		    }
		    else{ echo $total; }
    	?>
    </td>
</tr>
<?php 
    $item = $item+1;
    $_SESSION['item'] = $item;
    $sumada6 = ($sumada6 + $key['talla6']);
    $sumada8 = ($sumada8 + $key['talla8']);
    $sumada10 = ($sumada10 + $key['talla10']);
    $sumada12 = ($sumada12 + $key['talla12']);
    $sumada14 = ($sumada14 + $key['talla14']);
    $sumada16 = ($sumada16 + $key['talla16']);
    $sumada18 = ($sumada18 + $key['talla18']);
    $sumada20 = ($sumada20 + $key['talla20']);
    $sumada26 = ($sumada26 + $key['talla26']);
    $sumada28 = ($sumada28 + $key['talla28']);
    $sumada30 = ($sumada30 + $key['talla30']);
    $sumada32 = ($sumada32 + $key['talla32']);
    $sumada34 = ($sumada34 + $key['talla34']);
    $sumada36 = ($sumada36 + $key['talla36']);
    $sumada38 = ($sumada38 + $key['talla38']);
    $sumadas = ($sumadas + $key['tallas']);
    $sumadam = ($sumadam + $key['tallam']);
    $sumadal = ($sumadal + $key['tallal']);
    $sumadaxl = ($sumadaxl + $key['tallaxl']);
    $sumadau = ($sumadau + $key['tallau']);
    $sumadaest = ($sumadestl + $key['talestxl']);
    if ($key['impresion_codigo_barras'] != 'SI') {
        $ticFalta = $ticFalta+1;
        $_SESSION['ticFalta'] = $ticFalta;
    }

    $totalInventario = $totalInventario+$total;
    $_SESSION['totalInventario'] = $totalInventario;

    }
    ?>
    <tr>
        <th>Bodega</th>
        <th>Ruta</th>
        <th>tickets</th>
        <th>Referencia</th>
        <th>Descripcion</th>
        <th>Categoria</th>
        <th>Silueta</th>
        <th>Color</th>
        <th><?php echo $sumada6; ?></th>
        <th><?php echo $sumada8; ?></th>
        <th><?php echo $sumada10; ?></th>
        <th><?php echo $sumada12; ?></th>
        <th><?php echo $sumada14; ?></th>
        <th><?php echo $sumada16; ?></th>
        <th><?php echo $sumada18; ?></th>
        <th><?php echo $sumada20; ?></th>
        <th><?php echo $sumada26; ?></th>
        <th><?php echo $sumada28; ?></th>
        <th><?php echo $sumada30; ?></th>
        <th><?php echo $sumada32; ?></th>
        <th><?php echo $sumada34; ?></th>
        <th><?php echo $sumada36; ?></th>
        <th><?php echo $sumada38; ?></th>
        <th><?php echo $sumadas; ?></th>
        <th><?php echo $sumadam; ?></th>
        <th><?php echo $sumadal; ?></th>
        <th><?php echo $sumadaxl; ?></th>
        <th><?php echo $sumadau; ?></th>
        <th><?php echo $sumadaest; ?></th>
        <th><?php echo $totalInventario; ?></th>
        
    </tr>
</table>

<div id="espacio_datos_calculados">
    <legend style="float: left; background-color: <?php echo $color_existencia; ?>; font-size: 20px; padding: 10px; color: <?php echo $color_texto_existencia; ?>; text-transform: uppercase;">Referencias Inventariadas = <?php echo $item; ?></legend>
    <legend style="float: left; background-color: <?php echo $color_existencia; ?>; font-size: 20px; padding: 10px; color: <?php echo $color_texto_existencia; ?>; text-transform: uppercase;">Total Inventario = <?php echo $totalInventario; ?></legend>
    <legend style="float: right; background-color: orange; font-size: 20px; padding: 10px; color: <?php echo $color_texto_existencia; ?>; text-transform: uppercase;">Referencias faltantes por ticket = <?php echo $ticFalta; ?></legend>
</div>




