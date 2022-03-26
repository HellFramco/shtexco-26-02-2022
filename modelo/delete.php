<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<?php
session_start();
require_once "db.php";
$conexion = new Conexion();
date_default_timezone_set('America/Bogota');


$accion = $_GET['accion'];

if ($accion == "eliminaCodigosImpresora") {
    $sql = "SELECT count(id_codigo) as conteo FROM codigos_barras;";       
    $reg = $conexion->query($sql)->fetchAll();
    $conteo = $reg[0][0];
    if ($conteo == 0) {
        echo "
            <script>
                alert('En la impresora no existen Tickets por verificar.');
                location.href = '../panel/inventarios-codigos-barras.php';
            </script>
            ";
    }

    else
    {
        $sql = "DELETE FROM codigos_barras;";       
        $reg = $conexion->query($sql);
        if ($reg) {
            echo "
            <script>
                alert('Se han verificado las impresiones y vaciado la impresora.');
                location.href = '../panel/inventarios-codigos-barras.php';
            </script>
            ";
        };
    }
    
}


else{

}

?>

