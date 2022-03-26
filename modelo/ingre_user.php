<?php
session_start();
require_once("../modelo/db.php");




class usuario{


    public function logear($usuario, $contrasena){

       
        $conexion = new Conexion();


        $sql = "SELECT * FROM user_secure WHERE mmb = ? AND clv = ?";
        
        $reg = $conexion->prepare($sql);

        $reg->bindParam(1,$usuario);
        $reg->bindParam(2,$contrasena);

        $reg->execute();
        $consulta =$reg->fetchAll();
        $_SESSION["indicaciones_insumos"] = "
        <div style = 'font-size:16px;'>
            <p style='color: crimson;'>
                INDICACIONES:
            </p>
            <p style='color: crimson;'>
                LAS TALLAS IMPARES SON PARA USO DE LAS MARCAS REFERIDAS A CLIENTES DIRECTOS, ABOUT, MOST WANTED...
            </p>
            <em style='color: crimson;'>
                EJEMPLO: EL VALOR REGISTRADO PARA LA TALLA 6 SI ES ALGUNA MARCA CLIENTE SE TOMARA COMO TALLA 3
            </em>
        </div>
        ";
            if ($consulta) {
                
                foreach ($consulta as $key) {
                        $_SESSION["id"] = $key['id'];
                        // echo "<script>alert('".$_SESSION["id"]."')</script>";
                        $_SESSION["identificacion"] = $key['identificacion'];
                        $_SESSION["mmb"] = $key['mmb'];
                        $_SESSION["nombre"] = $key['nombre'];
                        $_SESSION["estado"] = $key['estado'];
                        $_SESSION["typeUser"] = $key['typeUser'];
                        $_SESSION["linea"] = $key['linea'];
                        $_SESSION["fecha_creacion_usuario"] = $key['fecha_creacion_usuario'];
                        $_SESSION["clv"] = $key['clv'];
                        
        
                        echo '
                    <script>
                        // alert("Bienvenido.");
                        location.href = "/panel";
                    </script>
                    ';
                    //    header('location: ../panel');
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


    }


}







/*
class usuario{


    public function logear($usuario, $contrasena){

        
        $conexion = new Conexion();


        $sql = "SELECT * FROM user_secure WHERE mmb = '".$usuario."' AND clv = '".$contrasena."'";
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


    }


}

























$user = $_POST['email'];
$pass = $_POST['password'];

*/

?>