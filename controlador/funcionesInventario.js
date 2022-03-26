function modal_crear_inventario() {


    $('#idu').val("");
    $('#productou').val("");
    $('#tallau').val("");
    $('#coloru').val("");
    $('#marcau').val("");
    $('#siluetau').val("");
    $('#telau').val("");
    $('#categoriau').val("");
    $('#stocku').val("");
    $('#proveedoru').val("");
    $('#preciou').val("");
    $('#estadou').val("");
    $('#codigo_barrau').val("");
}

function agregardatos_inventario() {
    producto = $('#productou').val();
    talla = $('#tallau').val();
    color = $('#coloru').val();
    marca = $('#marcau').val();
    silueta = $('#siluetau').val();
    tela = $('#telau').val();
    categoria = $('#categoriau').val();
    stock = $('#stocku').val();
    proveedor = $('#proveedoru').val();
    precio = $('#preciou').val();

    estado = $('#estadou').val();
    codigo_barra = $('#codigo_barrau').val();

    cadena = "&producto=" + producto +

        "&talla=" + talla +
        "&color=" + color +
        "&marca=" + marca +
        "&silueta=" + silueta +
        "&tela=" + tela +
        "&categoria=" + categoria +
        "&stock=" + stock +
        "&proveedor=" + proveedor +
        "&precio=" + precio +

        "&codigo_barra=" + codigo_barra +
        "&estado=" + estado;
    $.ajax({
        type: "POST",
        url: "../modelo/acciones-inventario.php?accion=registrar",
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
    $('#producto').val(d[1]);
    $('#talla').val(d[2]);
    $('#color').val(d[3]);
    $('#marca').val(d[4]);
    $('#silueta').val(d[5]);
    $('#tela').val(d[6]);
    $('#categoria').val(d[7]);
    $('#stock').val(d[8]);
    $('#proveedor').val(d[9]);
    $('#precio').val(d[10]);
    $('#estado').val(d[11]);
    $('#codigo_barra').val(d[12]);

}



function modificar_inventario() {

    id = $('#id').val();
    producto = $('#producto').val();
    talla = $('#talla').val();
    color = $('#color').val();
    marca = $('#marca').val();
    silueta = $('#silueta').val();
    tela = $('#tela').val();
    categoria = $('#categoria').val();
    stock = $('#stock').val();
    proveedor = $('#proveedor').val();
    precio = $('#precio').val();
    tag = $('#tag').val();
    estado = $('#estado').val();
    codigo_barra = $('#codigo_barra').val();



    cadena = "id=" + id +
        "&producto=" + producto +

        "&talla=" + talla +
        "&color=" + color +
        "&marca=" + marca +
        "&silueta=" + silueta +
        "&tela=" + tela +
        "&categoria=" + categoria +
        "&stock=" + stock +
        "&proveedor=" + proveedor +
        "&precio=" + precio +
        "&tag=" + tag +
        "&codigo_barra=" + codigo_barra +
        "&estado=" + estado;

    $.ajax({
        type: "POST",

        url: "../modelo/acciones-inventario.php?accion=modificar",
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