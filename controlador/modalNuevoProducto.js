$(document).ready(function(){
                          $('#envio_nuevo_producto').click(function(){
                            var datos = $('#datos').serialize();
                            
                          

                          
                                var genero = document.getElementById('genero').value;
                                var val_genero_2 = document.getElementById('val_genero_2');
                                var referencia = document.getElementById('referencia').value;
                                var val_referencia = document.getElementById('val_referencia');
                                var bodega = document.getElementById('bodega').value;
                                var val_bodega = document.getElementById('val_bodega');
                                var precio = document.getElementById('precio').value;
                                var val_precio = document.getElementById('val_precio');
                                var val_bodega = document.getElementById('val_bodega');
                                var descripcion = document.getElementById('descripcion').value;
                                var marca = document.getElementById('marca').value;
                                var silueta = document.getElementById('silueta').value;
                                // var check_bodega_si = document.getElementById('check_bodega_si').value;
                                // var check_bodega_no = document.getElementById('check_bodega_no').value;

                                console.log(genero);
                                console.log(referencia);
                                console.log(bodega);
                                console.log(precio);
                                console.log(descripcion);
                                // alert(check_bodega);


                                if (genero == '') { 
                                  console.log('el genero esta vacio');
                                  val_genero_2.innerHTML = '<br><em style="color:crimson;">por favor Seleccione el genero.</em>'

                                }
                                if (genero.length > 0) { 
                                  val_genero_2.innerHTML = '';
                                  var silueta = document.getElementById('silueta').value;
                                  var marca = document.getElementById('marca').value;
                                  // var coleccion = document.getElementById('coleccion').value;
                                  var color = document.getElementById('color').value;

                                  
                                }

                                if (referencia == '') { 
                                  var val_referencia = document.getElementById('val_referencia');
                                  val_referencia.innerHTML = '<br><em style="color:crimson;">La referencia no puede estar vacia.</em>'
                                }
                                if (referencia == '0') { 
                                  var val_referencia = document.getElementById('val_referencia');
                                  val_referencia.innerHTML = '<br><em style="color:crimson;">La referencia no puede contener el valor 0.</em>'
                                }
                                if (referencia > 0) { 
                                  var val_referencia = document.getElementById('val_referencia');
                                  val_referencia.innerHTML = '';
                                }
                                if (referencia.length > 10) { 
                                  var val_referencia = document.getElementById('val_referencia');
                                  val_referencia.innerHTML = '<br><em style="color:crimson;">La referencia no puede ser mayor a 10 caracteres.</em>'
                                }
                                if (bodega == '') {
                                  val_bodega.innerHTML = '<br><em style="color:crimson;">Debes seleccionar una bodega.</em>';
                                }
                                


                                if (precio == '') { 
                                  val_precio.value = '<br><em style="color:crimson;">El campo de precio no puede estar vacio, verifique por favor.</em>';
                                  val_precio.innerHTML = '<br><em style="color:crimson;">El campo de precio no puede estar vacio, verifique por favor.</em>';
                                }
                                if (precio.length > 0) { 
                                  val_precio.innerHTML = '';
                                }
                                
                                if (genero.length > 0 && referencia.length > 0 && bodega.length > 0 && precio.length > 0) {
                                  val_referencia.innerHTML = '';
                                  val_genero.innerHTML = '';
                                  val_bodega.innerHTML = '';
                                  val_precio.innerHTML = '';
                                  
                                  console.log('Todos los campos estan llenos.');
                                  descripcion = marca + ' ' + silueta + 'REF: ' + referencia; 
                                  $.post({
                                      type: 'POST',
                                      url: '../modelo/productos.php',
                                      data: datos,
                                      success: function(r){
                                        $('#camp').html(r);
                                        
                                      
                                      }
                                    });

                                }
                                
                                
                                // // descripcion.value = silueta + ' ' + marca + ' REF: ' + referencia;

                                // if (genero.length > 0) {

                                //   var silueta = document.getElementById('silueta').value;
                                //   var marca = document.getElementById('marca').value;
                                //   var coleccion = document.getElementById('coleccion').value;

                                //  else {
                                //   var silueta = document.getElementById('silueta').value;
                                //   var marca = document.getElementById('marca').value;
                                //   var coleccion = document.getElementById('coleccion').value;

                                //  }

                                //   if (referencia == '') {
                                //   document.getElementById('referencia').style.borderColor = 'red';
                                //   document.getElementById('val_referencia').style.color = 'red';
                                //   document.getElementById('val_referencia').innerHTML = '<br>Este Campo es Necesario';
                                //   }
                                //   else if (referencia == '0') {
                                //     document.getElementById('referencia').style.borderColor = 'red';
                                //     document.getElementById('val_referencia').style.color = 'red';
                                //     document.getElementById('val_referencia').innerHTML = '<br>Este Campo no debe estar con un valor 0, verificar.';
                                //   }
                                //   else
                                //   {
                                //     document.getElementById('referencia').style.borderColor = 'gray';
                                //     document.getElementById('val_referencia').style.color = 'transparent';
                                //     document.getElementById('val_referencia').innerHTML = '';

                                //     if (precio == '') { val_precio.innerHTML = 'El valor no puede estar vacio'; }
                                //     else if(precio == 0){ val_precio.innerHTML = 'El valor no puede ser 0'; }
                                //   }
                                // }
                                // if ($genero.length > 0) {
                                //    var silueta = document.getElementById('silueta').value;
                                //    var marca = document.getElementById('marca').value;

                                //    if (referencia.length > 0 ) {
                                //    document.getElementById('referencia').style.borderColor = 'gray';
                                //    document.getElementById('val_referencia').innerHTML = '';

                                   
                                    //  $.post({
                                    //   type: 'POST',
                                    //   url: '../modelo/productos.php',
                                    //   data: datos,
                                    //   success: function(r){
                                    //     $('#camp').html(r);
                                        
                                      
                                    //   }
                                    // });


                                //   }

                                // }

                                // if (bodega.length > 0) {
                                //     var ruta = document.getElementById('ruta').value;

                                //   if (ruta.length > 0) {

                                //   }
                                //   else
                                //   {
                                //     alert('debes seleccionar una ruta en bodega');
                                //   }
                                // }

                                

                              
                              // if (referencia.length > 0 && descripcion.length > 0 && marca.length > 0 && silueta.length > 0) 
                              // {
                                  
                                                         
                              // }
                              // else{
                                                              
                              //   }

                              // $.post({
                              //     type: 'POST',
                              //     url: '../modelo/productos.php',
                              //     data: datos,
                              //     success: function(r){
                              //       $('#camp').html(r);
                                    
                                  
                              //     }
                              //  });


                            
                              return false;
                              
                            });

                          $('#genero').change(function(){
                           var genero = document.getElementById('genero').value;
                           var val_genero = document.getElementById('val_genero');
                           var campos_generados = document.getElementById('campos_generados');
                          

                              if (genero == '') { 
                                // val_genero.innerHTML = 'Debes de seleccionar El genero';
                                campos_generados.innerHTML = '<em style="color:crimson;">Debes de seleccionar El genero</em>';

                              }
                              else { 
                                $.post({
                                  type: 'POST',
                                  url: '../modelo/productos.php',
                                  data: {'accion':'campos_generados','genero':genero},
                                  success: function(r){
                                    $('#campos_generados').html(r);

                                  }
                                });
                              }


                            return false;
                          });

                          $('#bodega').change(function(){
                           var bodega = document.getElementById('bodega').value;
                           var val_bodega = document.getElementById('val_bodega');
                           if (bodega == '') { 
                                val_bodega.innerHTML = '<br><em style="color:crimson;">Debes de seleccionar una de Las bodegas existentes.</em>';
                            }
                            if (bodega == 'POR ASIGNAR') { 
                                bodega.innerHTML = 'POR ASIGNAR';
                            }
                            else
                            {
                              val_bodega.innerHTML = '';
                              $.post({
                                  type: 'POST',
                                  url: '../modelo/productos.php',
                                  data: {'accion':'campos_generados_bodega','bodega':bodega},
                                  success: function(r){
                                    $('#campos_generados_bodega').html(r);
                                    
                                    

                                  }
                                });
                              



                            return false;
                            }
                          });


                          $('#check_bodega_si').click(function(){
                            $('#espacio_check_bodega').slideDown();
                            // alert($('#check_bodega_si').val());
                          });
                          $('#check_bodega_no').click(function(){
                            $('#espacio_check_bodega').slideUp();
                            // alert($('#check_bodega_no').val());
                          });



                      });