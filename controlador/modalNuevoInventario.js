$(document).ready(function(){
                          $('#envio').click(function(){
                            var datos = $('#datos').serialize();
                            
                            // validaciones de campos

                                // var talla = document.getElementById('talla').value;
                                // var color = document.getElementById('color').value;
                                // var cantidad = document.getElementById('cantidad').value;
                                // var codigo_barras = '';
                                

                                
                              

                              $.post({
                                  type: 'POST',
                                  url: '../../modelo/inventarios.php',
                                  data: datos,
                                  success: function(r){
                                    $('#camp').html(r);
                                    
                                    
                                    // setTimeout(function(){
                                    //   // alert('Creado');
                                    //   location.href = window.location;
                                    // }, 1000);
                                  }
                                });


                            // $('#enviar_adiccion').prop('disabled', true);
                            return false;
                          });

                      });
