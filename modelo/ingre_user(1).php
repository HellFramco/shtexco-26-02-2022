<?php
session_start();
require_once("db.php");
$conexion = new Conexion();

$user = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM user_secure WHERE mmb = '".$user."' AND clv = '".$pass."'";
$consulta = $conexion->query($sql)->fetchAll();


    if ($consulta) {
        foreach ($consulta as $key) {
                $_SESSION["id"] = $key['id'];
                // echo "<script>alert('".$_SESSION["id"]."')</script>";
                $_SESSION["identificacion"] = $key['identificacion'];
                $_SESSION["mmb"] = $key['mmb'];
                $_SESSION["nombre"] = $key['nombre'];
                $_SESSION["estado"] = $key['estado'];
                $_SESSION["typeUser"] = $key['typeUser'];

                header('location: ../panel');
    }
                
    }
    else{
            echo '
            <script>
                alert("No eres usuario, vuelve a ingresar.");
                location.href = "../index.php";
            </script>
            ';
            } 

?>