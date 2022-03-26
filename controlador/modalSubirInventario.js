$('#envio_nuevo').click(function(){
                            var datos = $('#datos').serialize();
                            var referencia = document.getElementById('referenciaI').value;
                            var marca = document.getElementById('marcaI').value;
                            var descripcion = document.getElementById('descripcionI').value;
                            var silueta = document.getElementById('siluetaI').value;
                            var tela = document.getElementById('telaI').value;
                            var proveedor = document.getElementById('proveedorI').value;
                            var categoria = document.getElementById('categoriaI').value;
                            var precio = document.getElementById('precioI').value;
                            var genero = document.getElementById('generoI').value;
                            var color = document.getElementById('colorI').value;
                            var coleccion = document.getElementById('coleccionI').value;
                            var tipo_inventario = document.getElementById('tipo_inventarioI').value;
                            var bodega = document.getElementById('bodegaI').value;
                            var ruta = document.getElementById('rutaI').value;
                            var talla = document.getElementById('talla').value;
                            var cantidad = document.getElementById('cantidad').value;
                            var val_cantidad = document.getElementById('val_cantidad');
                            if (cantidad == '0') {
                              // alert('la cantidad no puede ser 0, verifique.');
                              val_cantidad.innerHTML = '<br><em style="color: crimson;">la cantidad No puede Ser cero, por favor verifique el valor.</em>';
                            }
                            else if (cantidad == '') {
                              // alert('la cantidad no puede ser 0, verifique.');
                              val_cantidad.innerHTML = '<br><em style="color: crimson;">la cantidad No puede estar vacia, por favor verifique el valor.</em>';
                            }
                            else
                            {
                              $.post({
                                  type: 'POST',
                                  url: '../modelo/inventarios.php',
                                  data: {
                                      'accion':'nuevo',
                                      'referencia':referencia,
                                      'marca':marca,
                                      'descripcion':descripcion,
                                      'silueta':silueta,
                                      'tela':tela,
                                      'proveedor':proveedor,
                                      'categoria':categoria,
                                      'precio':precio,
                                      'genero':genero,
                                      'color':color,
                                      'coleccion':coleccion,
                                      'tipo_inventario':tipo_inventario,
                                      'bodega':bodega,
                                      'ruta':ruta,
                                      'talla':talla,
                                      'cantidad':cantidad
                                    },
                                  success: function(r){
                                    $('#camp_nuevo').html(r);
                                    
                                    
                                    // setTimeout(function(){
                                    //   // alert('Creado');
                                    //   location.href = window.location;
                                    // }, 1000);
                                  }
                                });
                            }
                            

                                

                              


                            // $('#enviar_adiccion').prop('disabled', true);
                            return false;
                          });