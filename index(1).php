<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Htex</title>

    <!-- Custom fonts for this template-->
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
                        <h1 class="login-title">Inicia Sesion</h1>
                        <form action="modelo/ingre_user.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="user" class="form-control" placeholder="email@example.com">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="pass" class="form-control" placeholder="ingresa tu conntraseña">
                            </div>
                            <input name="login" id="ingre" class="btn btn-block btn-primary" type="submit" value="Login">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="imagenes/principal-login2.jpg" alt="login image" class="login-img">
                </div>
            </div>
        </div>
    </main>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./librerias/js/sb-admin-2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- <script>
        function dirAdmin() {
            window.location = "v_admin";
        }

        function dirVendedor() {
            window.location = "rol-ventas";
        }

        function dirCartera() {
            window.location = "v_cartera";
        }

        function dirBodega() {
            window.location = "rol-bodega";
        }
        $("#ingre").click(function() {
            var user = $("#user").val();
            var pass = $("#pass").val();
            $("#ingre").css("background", "white");
            $.post("modelo/ingre_user.php", {
                user: user,
                pass: pass
            }, function(data) {
                var datatrim = $.trim(data);
                console.log(datatrim);
                if (datatrim == "1") {
                    $("#ingre").css('background-color', '#84EA95');
                    $("#ingre").html('Bienvenido Administrador');
                    var a = setTimeout("dirAdmin()", 2000);
                } else if (datatrim == "2") {
                    $("#ingre").css('background-color', '#84EA95');
                    $("#ingre").html('Bienvenido Vendedor');
                    var a = setTimeout("dirVendedor()", 2000);
                } else if (datatrim == "3") {
                    $("#ingre").css('background-color', '#84EA95');
                    $("#ingre").html('Bienvenido Cartera');
                    var a = setTimeout("dirCartera()", 2000);
                } else if (datatrim == "4") {
                    $("#ingre").css('background-color', '#84EA95');
                    $("#ingre").html('Bienvenido Bodega');
                    var a = setTimeout("dirBodega()", 2000);
                } else {
                    $("#ingre").css('background-color', '#EA8488');
                    $("#ingre").html('No Autorizado');

                }
            });
        })

        $(document).keypress(function(e) {
            if (e.which == 13) {
                $("#ingre").click();
            }
        });
    </script> -->

</body>

</html>