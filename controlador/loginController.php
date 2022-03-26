<?php
require_once("../modelo/ingre_user.php");
$option = "";
$correo = "";
$contrasena = "";
$v1=0; $v2=0; $v3= 0;


if(isset($_POST['email'])){
    if(strlen($_POST['email'])<50){
        $correo= $_POST['email'];
         $v1  =1;
    }

}

if(isset($_POST['password'])){
    if(strlen($_POST['password'])<25){
        $contrasena= $_POST['password'];
         $v2  =1;
    }
}


if(isset($_POST['option'])){
    if(strlen($_POST['option'])<10){
        $option= $_POST['option'];
         $v3  =1;
    }
}


if($v1==1 && $v2==1 && $v3==1){    
}else{$option = "error";}



switch ($option) {
    case 'logear':
       
        $usuario = new usuario ();
       $usuario -> logear($correo, $contrasena);
       
       
        break;
 
    case 'error':
        echo "
        <script>
            alert('no se ha establecido ningun parametro')
            location.href = '../index.php';
        </script>";
        break;       
    
    default:
        # code...
        break;
}

?>