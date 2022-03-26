// Funcion buscar direcciones
function buscar_direcciones() {
    id_cliente = $('#cliente').val();
    cadena = "id_cliente=" + id_cliente;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-clientes-direcciones.php?accion=buscar",
        data: cadena,
        success: function(r) {

            document.getElementById('direccion_select').innerHTML = r;
            var div_direccion_select = document.getElementById('div_direccion_select');
            if (r == "") {
                direccion_select.disabled = true;
                alertify.error("Error, no se pudo encontrar una direcciónes...");
            } else {
                direccion_select.disabled = false;
            }

        }
    });
}
// Registrar nueva venta
function agregardatos() {

    id_cliente = $('#cliente').val();
    direccion_select = $('#direccion_select').val();
    transportadora = $('#transportadora').val();
    metodo_pago = $('#metodo_pago').val();

    cadena = "id_cliente=" + id_cliente +
        "&direccion_select=" + direccion_select +
        "&transportadora=" + transportadora +
        "&metodo_pago=" + metodo_pago;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-ventas.php?accion=registrar",
        data: cadena,
        success: function(r) {
            console.log(r);
            window.location = "https://localhost/htex2/v_ventas/ventas-detalles.php?id=" + r;

            if (r == 0) {
                alertify.error("Error, no se pudo registrar...");
            } else {
                $('#tabla').load('../vista/componentes/fichasMostrar.php?id_venta=' + r);
                alertify.success("Información registradaexitosamente.");
            }

        }
    });
}