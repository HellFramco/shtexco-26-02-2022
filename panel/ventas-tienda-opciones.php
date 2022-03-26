<?php 
require_once '../modelo/funcionesTienda.php';
$tienda = new Tiendas();

           
//echo $_GET['id'];

if(isset($_GET['id'])){
    $id = $_GET['id'];
  //  echo $id;
}

if(isset($_GET['option'])){

    switch ($_GET['option']) {
        case 'aprobar':
           echo "bien";
            $tienda->aprobarDespacho($_GET['id']);
            break;
        
        default:
            # code...
            break;
    }



}

?>