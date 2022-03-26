function agregaforminteraccion(datos) {
    d = datos.split('||');
    $('#cliente').val(d[0]);
    $('#cod_cliente').val(d[1]);
    $('#usuario').val(d[2]);
    $('#cod_usuario').val(d[3]);
    $('#registro').val(d[4]);
    $('#contacto').val('00-00-000');
    $('#observacion').val("");
}

function agregarinteraccion() {
    cod_cliente = $('#cod_cliente').val();
    cod_usuario = $('#cod_usuario').val();
    contacto = $('#contacto').val();
    observacion = $('#observacion').val();

    cadena = "cod_cliente=" + cod_cliente +
        "&cod_usuario=" + cod_usuario +
        "&contacto=" + contacto +
        "&observacion=" + observacion;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-interaccion.php",
        data: cadena,
        success: function(r) {
            console.log(r);
            if (r == 1) {
                alertify.success("Registro guardado exitosamente.");
            } else if (r == 2) {
                alertify.error("El campo observación no debe ser vacío.");
            } else if (r == 0) {
                alertify.error("Error, no se pudo registrar la información.");
            } else {
                alertify.error("Error...");
            }
        }
    });
}