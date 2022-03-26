<?php 
session_start();

if(isset($_SESSION["nombre"])){
    header('Location: panel/index.php');
}

?>
<!-- <img src="imagenes/DEV.png" width="50%" alt=""> -->
<!DOCTYPE html>
<html lang="en">

<head>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de Ventas</title>

    
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="imagenes/logo.png" alt="logo" class="logo">
                    </div>
                    <div class="login-wrapper my-auto">
                        <h1 class="login-title">Inicia sesion</h1>
                        <form action="controlador/loginController.php" method="post">
                            <input type="hidden" name="option" value="logear">
                            <div class="form-group">
                                <label for="email">Correo electronico</label>
                                <input type="email" name="email" id="user" class="form-control" placeholder="Correo electronico">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="pass" class="form-control" placeholder="Contraseña">
                            </div>
                            <input name="login" id="ingre" class="btn btn-block btn-primary" type="submit" value="Entrar">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="imagenes/principal-login2.jpg" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>



    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    
    <script src="./librerias/js/sb-admin-2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    

</body>

</html>