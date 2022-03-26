<?php
require_once '../../modelo/datosPower.php';
$datos = new Datos();
?>
<table border="1">
    <tr>
        <th>categoria</th>
    </tr>
    <?php 
    foreach ($datos->categorias() as $key) {
?>
<tr>
    <td><?php echo $key['nameCat'] ?></td>
</tr>
<?php 
    }
    ?>
</table>


