function modal_subir_inventario(datos) {
    d = datos.split('||');
    console.log(d[1]);
    $('#referenciaI').val(d[1]);
    $('#marcaI').val(d[2]);
    $('#campo_titulo').val(d[3]);
    $('#descripcionI').val(d[3]);
    $('#siluetaI').val(d[4]);
    $('#telaI').val(d[5]);
    $('#categoriaI').val(d[6]);
    $('#proveedorI').val(d[7]);
    $('#colorI').val(d[8]);
    $('#coleccionI').val(d[9]);
    $('#tipo_inventarioI').val(d[10]);
    $('#bodegaI').val(d[11]);
    $('#precioI').val(d[13]);
    $('#generoI').val(d[15]);
    $('#rutaI').val(d[16]);
    
}