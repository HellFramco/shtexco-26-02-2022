<?php
session_start();
require_once '../modelo/val_ventas.php';
require_once '../modelo/funcionesClientes.php';
$clientes = new Clientes();
$cant = 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <style>
        .iti.iti--allow-dropdown {
            width: 100%;
        }
    </style>
 <script >window.resizeTo (1200,1000);</script>
</head>

<body id="page-top">
    <div id="contenedor_loading">
        <div id="loading"></div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        // include 'menu.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar --
                <?php
                // include 'top-bar.php';
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container">
                    <form id="datos">
                        <div class="row">

                            <div class="col-sm-12 text-center">
                                <br>
                                <br>
                                <br>
                                <h5>Nuevo Cliente</h5>
                                <hr>
                                <legend>Informacion Principal</legend><br>

                                <a id="veriCliente1" href="https://www.adres.gov.co/consulte-su-eps" target="_blank" class="btn btn-primary" title="con este boton verificas si el cliente es real, se validara directamente con la cedula en addres.">Verificar Cliente por Address</a>


                                <a id="veriCliente2" href="https://antecedentes.policia.gov.co:7005/WebJudicial/antecedentes.xhtml" target="_blank" class="btn btn-warning" title="con este boton verificas si el cliente es real, se validara directamente con la cedula en addres.">Verificar Cliente Por Pagina de La Policia</a>
                                <br>
                                <!-- <iframe src="https://www.adres.gov.co/consulte-su-eps" frameborder="0"></iframe> -->
                                <!-- <script>
                                                document.getElementById('veriCliente').addEventListener('click', function() {
                                                  window.open('nuevo-cliente.php', 'Nueva Venta', 'width=610,height=800, top=100, left=400, location=no');
                                                });
                                              </script> -->
                                <br>
                            </div>
                            <div class="col-sm-4">

                                <label for="">Tipo de documento</label>
                                <select class="form-control" name="tipo_documento" id="tipo_documento">
                                    <option selected="selected" value="CC">Cedula de Ciudadanía</option>
                                    <option value="TI">Tarjeta de Identidad</option>
                                    <option value="CE">Cedula de Extranjería</option>
                                    <option value="PA">Pasaporte</option>
                                    <option value="RC">Registro Civil</option>
                                    <option value="NU">No. Único de Id. Personal</option>
                                    <option value="AS">Adulto sin identificación</option>
                                    <option value="MS">Menor sin Identificación</option>
                                    <option value="CD">Carnet diplomático</option>
                                    <option value="CN">Certificado Nacido Vivo</option>
                                    <option value="SC">Salvo Conducto</option>
                                    <option value="PE">Per Especial Permanencia</option>
                                    <option value="NI">Numero Identificación Tributaria</option>
                                    <option value="PT">Permiso por Protección Temporal</option>
                                </select>
                                <br>

                            </div>
                            <div class="col-sm-4">

                                <label for="">Identificacion</label>
                                <input type="number" class="form-control" name="identificacion" id="identificacion">
                                <label for="" id="val_identificacion"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">tipo de cliente</label>
                                <select class="form-control" name="tipo_cliente" id="tipo_cliente">
                                    <option value="">SELECCIONE</option>
                                    <option value="DETAL">DETAL</option>
                                    <option value="MAYORISTA">MAYORISTA</option>
                                    <option value="MULTIMARKETING">MULTIMARKETING</option>
                                </select>
                                <label for="" id="val_tipo_cliente"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                                <label for="" id="val_nombre"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Correo</label>
                                <input type="mail" class="form-control" name="correo" id="correo">
                                <label for="" id="val_correo"></label>
                            </div>

                            <div class="col-sm-4">
                                <label for="">Fecha de nacimiento</label>
                                <input type="date" id="start" name="fecha_nacimiento" value="2018-07-22" min="1900-01-01" max="2018-12-31" class="form-control">
                            </div>

                        </div>
                        <hr>
                        <div class="row">

                            <div class="col-sm-12 text-center">


                                <legend>Informacion contacto</legend>
                            </div>
                            <div class="col-sm-4">
                                <label for="">direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion">
                                <label for="" id="val_direccion"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Telefono</label>
                                <input class="form-control" id="telefono" type="tel" name="telefono" />
                                <label for="" id="val_telefono"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">pais</label>
                                <select class="form-control" name="pais" id="pais">
                                    <option value="">SELECCIONE</option>
                                    <?php
                                    foreach ($clientes->seleccionarPais() as $key) {
                                    ?>
                                        <option value="<?php echo $key['nombre'] ?>"><?php echo $key['nombre'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="" id="val_pais"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Departamento</label>
                                <select class="form-control" name="departamento" id="departamento">
                                    <option value="">SELECCIONE</option>
                                    <?php
                                    foreach ($clientes->seleccionarDepartamento() as $key) {
                                    ?>
                                        <option value="<?php echo $key['departamento'] ?>"><?php echo $key['departamento'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="" id="val_departamento"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">ciudad</label>
                                <select class="form-control" name="ciudad" id="ciudad">
                                    <option value="">SELECCIONE</option>
                                    <?php
                                    foreach ($clientes->seleccionarCiudad() as $key) {
                                    ?>
                                        <option value="<?php echo $key['ciudad'] ?>"><?php echo $key['ciudad'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <label for="" id="val_ciudad"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">observacion</label>
                                <select class="form-control" name="observacion" id="observacion">
                                    <option value="">SELECCIONE</option>
                                    <option value="NINGUNA">NINGUNA</option>
                                    <option value="CLIENTE EXTRANJERO">CLIENTE EXTRANJERO</option>
                                    <option value="CLIENTE AMIGABLE">CLIENTE AMIGABLE</option>
                                    <option value="CLIENTE AMABLE">CLIENTE AMABLE</option>
                                    <option value="CLIENTE EFICIENTE">CLIENTE EFICIENTE</option>
                                    <option value="CLIENTE MODESTO">CLIENTE MODESTO</option>
                                    <option value="CLIENTE MAYOR DE EDAD">CLIENTE MAYOR DE EDAD</option>
                                    <option value="CLIENTE MENOR DE EDAD">CLIENTE MENOR DE EDAD</option>
                                </select>
                                <label for="" id="val_observacion"></label>
                            </div>

                        </div>
                        <hr>

                        <div class="row">

                            <div class="col-sm-12 text-center">


                                <legend>Informacion Social</legend>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Medio de Llegada</label>
                                <select class="form-control" name="medio_llegada" id="medio_llegada">
                                    <option value="">SELECCIONE</option>
                                    <option value="FACEBOOK">FACEBOOK</option>
                                    <option value="WHATSAPP">WHATSAPP</option>
                                    <option value="INSTAGRAM">INSTAGRAM</option>
                                    <option value="TIENDA">TIENDA</option>
                                    <option value="REFERIDO">REFERIDO</option>
                                </select>
                                <label for="" id="val_medio_llegada"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook">
                                <label for="" id="val_facebook"></label>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram">
                                <label for="" id="val_instagram"></label>
                            </div>
                            <div class="col-sm-4" style="display: none;">
                                <!-- <label for="">Clasificacion</label> -->
                                <select class="form-control" name="clasificacion" id="clasificacion">
                                    <option value="NINGUNA" selected="">SELECCIONE</option>


                                </select>
                                <label for="" id="val_clasificacion"></label>
                            </div>


                        </div>
                        <hr>
                        <div class="row">

                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4">
                                <input type="hidden" name="accion" value="registrar">
                                <label for=""></label>
                                <a class="btn btn-success" id="guardar">Guardar Cliente</a>
                                <label for="" id="val_envio"></label>
                            </div>
                            <div class="col-sm-4">

                            </div>



                        </div>
                        <hr>


                    </form>
                </div>


            </div>

            <!-- <?php
                    include '../inc/footer.php';
                    ?> -->


        </div>


    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- modal necesario para el funcionamiento del logout -->

    <!-- libreria necesaria para el funcionamiento de data table -->
    <?php include './librerias_js/pruebas-libreriasjs.php' ?>



    <script>
        window.onload = function() {
            var contenedor = document.getElementById("contenedor_loading");
            contenedor.style.visibility = "hidden";
            contenedor.style.opacity = "0";
        };
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        var identificacion = document.getElementById('identificacion');


        identificacion.addEventListener('keyup', function() {
            $.ajax({
                url: '../modelo/validaCliente.php', //ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                type: 'POST',
                dataType: 'html', //dataType: xml, json, script, o html
                data: {
                    'accion': 'validar',
                    'identificacion': identificacion.value
                }, //se evia el valor seleccionado en tu select
                success: function(result) {
                    // console.log('sincronizado cada 20 segundo');    
                    $("#val_identificacion").html(result); //si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                },
                error: function(jqXHR, status, error) {
                    alert("error");
                }
            });
        });

        identificacion.addEventListener('change', function() {
            $.ajax({
                url: '../modelo/validaCliente.php', //ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                type: 'POST',
                dataType: 'html', //dataType: xml, json, script, o html
                data: {
                    'accion': 'validar',
                    'identificacion': identificacion.value
                }, //se evia el valor seleccionado en tu select
                success: function(result) {
                    // console.log('sincronizado cada 20 segundo');    
                    $("#val_identificacion").html(result); //si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                },
                error: function(jqXHR, status, error) {
                    alert("error");
                }
            });
        });

        var guardar = document.getElementById('guardar');
        var tipo_cliente = document.getElementById('tipo_cliente');
        var val_tipo_cliente = document.getElementById('val_tipo_cliente');
        var nombre = document.getElementById('nombre');
        var correo = document.getElementById('correo');
        var direccion = document.getElementById('direccion');
        var val_direccion = document.getElementById('val_direccion');

        var val_nombre = document.getElementById('val_nombre');
        var val_correo = document.getElementById('val_correo');
        var val_envio = document.getElementById('val_envio');

        guardar.addEventListener('click', function() {
            if (identificacion.value.length == '') {
                val_identificacion.innerHTML = '<em style="color: crimson;">no puede ir vacio.</em>';
            }
            if (identificacion.value.length > 10) {
                val_identificacion.innerHTML = '<em style="color: crimson;">no puede Ser mayor a 10 digitos.</em>';
            }
            if (identificacion.value.length < 10) {
                val_identificacion.innerHTML = '<em style="color: crimson;">no puede Ser menor a 10 digitos.</em>';
            }
            if (tipo_cliente.value.length == '') {
                val_tipo_cliente.innerHTML = '<em style="color: crimson;">no puede ir vacio, seleccione...</em>';
            }
            if (nombre.value.length == '') {
                val_nombre.innerHTML = '<em style="color: crimson;">no puede ir vacio</em>';
            }
            if (correo.value.length == '') {
                val_correo.innerHTML = '<em style="color: crimson;">no puede ir vacio</em>';
            }
            if (direccion.value.length == '') {
                val_direccion.innerHTML = '<em style="color: crimson;">no puede ir vacio</em>';
            }
            if (telefono.value.length == '') {
                val_telefono.innerHTML = '<em style="color: crimson;">no puede ir vacio</em>';
            }
            if (pais.value.length == '') {
                val_pais.innerHTML = '<em style="color: crimson;">no puede ir vacio, seleccione...</em>';
            }
            if (departamento.value.length == '') {
                val_departamento.innerHTML = '<em style="color: crimson;">no puede ir vacio, seleccione...</em>';
            }
            if (ciudad.value.length == '') {
                val_ciudad.innerHTML = '<em style="color: crimson;">no puede ir vacio, seleccione...</em>';
            }
            if (observacion.value.length == '') {
                val_observacion.innerHTML = '<em style="color: crimson;">Puede agregar una observacion.</em>';
            }
            if (medio_llegada.value.length == '') {
                val_medio_llegada.innerHTML = '<em style="color: crimson;">no puede ir vacio, seleccione...</em>';
            }
            // if (facebook.value.length == '') { val_facebook.innerHTML = '<em style="color: crimson;">no puede ir vacio</em>'; facebook.value = 'NINGUNO';  }
            // if (instagram.value.length == '') { val_instagram.innerHTML = '<em style="color: crimson;">no puede ir vacio</em>'; instagram.value = 'NINGUNO'; }
            if (clasificacion.value.length == '') {
                val_clasificacion.innerHTML = '<em style="color: crimson;">no puede ir vacio, seleccione...</em>';
            }

            // validaciones si el campo tiene una cantidad de informacion
            if (identificacion.value.length > 0) {
                val_identificacion.innerHTML = '<em style="color: green;"></em>';
            }
            if (tipo_cliente.value.length > 0) {
                val_tipo_cliente.innerHTML = '<em style="color: green;"></em>';
            }
            if (nombre.value.length > 0) {
                val_nombre.innerHTML = '<em style="color: green;"></em>';
            }
            if (correo.value.length > 0) {
                val_correo.innerHTML = '<em style="color: green;"></em>';
            }
            if (direccion.value.length > 0) {
                val_direccion.innerHTML = '<em style="color: green;"></em>';
            }
            if (telefono.value.length > 0) {
                val_telefono.innerHTML = '<em style="color: green;"></em>';
            }
            if (pais.value.length > 0) {
                val_pais.innerHTML = '<em style="color: green;"></em>';
            }
            if (departamento.value.length > 0) {
                val_departamento.innerHTML = '<em style="color: green;"></em>';
            }
            if (ciudad.value.length > 0) {
                val_ciudad.innerHTML = '<em style="color: green;"></em>';
            }
            if (observacion.value.length > 0) {
                val_observacion.innerHTML = '<em style="color: green;"></em>';
            }
            if (medio_llegada.value.length > 0) {
                val_medio_llegada.innerHTML = '<em style="color: green;"></em>';
            }
            // if (facebook.value.length > 0) { val_facebook.innerHTML = '<em style="color: green;"></em>';  }
            // if (instagram.value.length > 0) { val_instagram.innerHTML = '<em style="color: green;"></em>';  }
            if (clasificacion.value.length > 0) {
                val_clasificacion.innerHTML = '<em style="color: green;"></em>';
            }

            if (identificacion.value.length > 0 && identificacion.value.length <= 10 && tipo_cliente.value.length > 0 && nombre.value.length > 0 && correo.value.length > 0 && direccion.value.length > 0 && telefono.value.length > 0 && pais.value.length > 0 && departamento.value.length > 0 && ciudad.value.length > 0 && observacion.value.length > 0 && medio_llegada.value.length > 0 && clasificacion.value.length > 0) {
                var confirmacion = confirm('Esta seguro de Registrar el cliente');
                if (confirmacion) {
                    var datos = $('#datos').serialize();

                    $.ajax({
                        url: '../modelo/acciones-clientes.php', //ruta de tu archivo php en el cual se hace la consulta y se obtendra el resultado 
                        type: 'POST',
                        dataType: 'html', //dataType: xml, json, script, o html
                        data: datos, //se evia el valor seleccionado en tu select
                        success: function(result) {

                            $("#val_envio").html(result); //si la peticion se realizo sin errores te regresara un valor y lo insetas en tu table html
                        },
                        error: function(jqXHR, status, error) {
                            alert("error");
                        }
                    });
                } else {
                    alert('no Registrado');
                }
            }
        });


        // guardar.addEventListener('click', function(){
        //     if (nombre.value == '') { val_nombre.innerHTML = 'Este campo no puede estar vacio.'; }
        // }
    </script>
    <script src="build/js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#telefono");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            preferredCountries: ['co', 'cl', 'ec', 'bo', 'mx', ],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>
    <script type="text/javascript">
		// Initialize our function when the document is ready for events.
		jQuery(document).ready(function(){
			// Listen for the input event.
			jQuery("#telefono").on('input', function (evt) {
				// Allow only numbers.
				jQuery(this).val(jQuery(this).val().replace(/[^0-9+]/g, ''));
			});
            jQuery("#identificacion").on('input', function (evt) {
				// Allow only numbers.
				jQuery(this).val(jQuery(this).val().replace(/[^0-9]/g, ''));
			});
		});
		</script>


</body>

</html>