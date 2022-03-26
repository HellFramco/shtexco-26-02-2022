

function modal_crear(){

    $('#nombreu').val("");
     $('#observacionu').val("");

}


function agregardatos() {


    estante = $('#estanteu').val();
    observacion = $('#observacionu').val();




    cadena = "estante=" + estante +
    
             "&observacion=" + observacion ;
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-estante.php?accion=registrar",
        data: cadena,
        success: function(r) {
      
            if (r == 1) {
                $('#tabla').load('../vista/componentes/fichasMostrar.php');
                alertify.success("Información registradaexitosamente.");
            } else {
                alertify.error("Error, no se pudo registrar...");
            }

        }
    });
}

function ifoproducto(datos) {

    d = datos.split('||');
    $('#id').val(d[0]);
    $('#estante').val(d[1]);
    $('#observacion').val(d[2]);



}

function modificarEstante() {



    id = $('#id').val();

    estante = $('#estante').val();
        observacion = $('#observacion').val();





        cadena = "id=" + id +
             "&estante=" + estante +

             "&observacion=" + observacion ;

    $.ajax({
        type: "POST",
        url: "../modelo/acciones-estante.php?accion=modificar",
        data: cadena,
        success: function(r) {

            if (r == 1) {
                //alert("Registro guardado exitosamente.");
                alertify.success("Registro guardado exitosamente.");
            } else {
                //alert("Error, no se pudo registrar la información.");
                alertify.error("Error, no se pudo actualizar la información.");
            }
        }
    });
}