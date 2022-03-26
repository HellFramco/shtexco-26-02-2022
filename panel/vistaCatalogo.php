<?php

require_once '../modelo/db.php';
$conexion = new Conexion();

$consulta = "SELECT * FROM inventarios_productos order by id_inventario";
$modules = $conexion->query($consulta)->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    
    <div>
        <?php
        foreach ($modules as $key) {
            if($key[114] == 1){
                //print_r($key['id_inventario']);1 054
        ?>
            <div style="page-break-before: always;display: flex;align-items: center;justify-content: center;object-fit: cover;">
                <img src="modal/imagenesReferencias/<?php echo $key['id_inventario'] ?>.jpg" style="width: 661px;height: 970px ;">
            </div>
        <?php
            }
        }
        ?>
        <!-- <img class='img' src='img/1.png' alt='' style='width: 100%;height: 100%;'>
        <div style='width: 50%;height: 20%;position: absolute;z-index:1;bottom: 40px;left:40px;text-align: center;'>
            <h1>PUSH UP</h1>
            <h5>REF. 1809</h5>
            <h6>AZUL MEDIO - STRECHT</h6>
            <h6>6-8-10-12-14-16</h6>
        </div> -->
    </div>
<script>

window.print();


</script>
</body>
</html>