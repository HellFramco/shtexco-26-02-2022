<?php
require "departamentos.php";

$array = json_decode($departamentos, true);
$cont = 0;


echo "<option value='0'>Elegir opción</option>";
     


foreach ($array as $value) {

       // $cadena = "El nombre de la provincia es: '". $value['locationName'] ."', y su puntuación es: ". $value['departmentOrStateName'] ."},";
       
       
                
      echo "<option value='".$value['_id']."'>".$value['locationName']."/".$value['departmentOrStateName']. "</option>";
    $id = $value['_id'];
    $ciudad = $value['locationName'];
    $departamento= $value['departmentOrStateName'];
    


 $cont = $cont +1 ;
//echo $cont;
   
 }




?>

