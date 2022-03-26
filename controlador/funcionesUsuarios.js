function agregardatos() {
    id = $('#id').val();
    identificacion = $('#identificacion').val();
    nombre = $('#nombre').val();
    tipo_usuario = $('#tipo_usuario').val();
    estado = $('#estado').val();
    correo = $('#correo').val();

    cadena = "id=" + id +
        "&identificacion=" + identificacion +
        "&correo=" + correo +
        "&nombre=" + nombre +
        "&tipo_usuario=" + tipo_usuario +
        "&estado=" + estado;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-usuario.php?accion=registrar",
        data: cadena,
        success: function(r) {
            console.log(r);
            if (r == 1) {
                $('#tabla').load('../v_admin/usuarios.php');
                alertify.success("Información registradaexitosamente.");
            } else if (r == 2) {
                alertify.error("Debe diligenciar todos los campos del formulario.");
            } else {
                alertify.error("Error, no se pudo registrar...");
            }

        }
    });
}

function agregarform(datos) {
    d = datos.split('||');
    $('#idu').val(d[0]);
    $('#identificacionu').val(d[1]);
    $('#nombreu').val(d[2]);
    $('#correou').val(d[3]);
    $('#tipo_usuariou').val(d[4]);
    $('#estadou').val(d[5]);
}

function modificarUsuario() {
    id = $('#idu').val();
    identificacion = $('#identificacionu').val();
    nombre = $('#nombreu').val();
    correo = $('#correou').val();
    tipo_usuario = $('#tipo_usuariou').val();
    estado = $('#estadou').val();

    console.log(id);
    console.log(identificacion);
    console.log(nombre);
    console.log(correo);
    console.log(tipo_usuario);
    console.log(estado);

    cadena = "id=" + id +
        "&identificacion=" + identificacion +
        "&nombre=" + nombre +
        "&correo=" + correo +
        "&tipo_usuario=" + tipo_usuario +
        "&estado=" + estado;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-usuario.php?accion=modificar",
        data: cadena,
        success: function(r) {
            console.log(r);
            if (r == 1) {
                //alert("Registro guardado exitosamente.");
                alertify.success("Registro guardado exitosamente.");
            } else if (r == 2) {
                alertify.error("Los campos no deben estar vacíos.");
            } else {
                //alert("Error, no se pudo registrar la información.");
                alertify.error("Error, no se pudo actualizar la información.");
            }
        }
    });
}

function modal_crear() {
    document.getElementById('crear').style.display = 'block';
    document.getElementById('modificar').style.display = 'none';
    document.getElementById('myModalLabel').innerHTML = "Crear Usuario";

    $('#id').val("");
    $('#nombre').val("");
    $('#tipo_usuario').val("");
    $('#estado').val("");
    $('#correo').val("");
}