<?php
require_once '../modelo/datos-productos.php';
require_once '../modelo/datos-inventarios.php';
$producto = new productos();


?>
<?php
                  $res = $producto->viewProductos();
                  foreach ($res as $data) {
                    $datos = $data['id_producto'] . "||" .
                                $data['referencia'] . "||" .
                                $data['marca'] . "||" .
                                $data['descripcion'] . "||" .
                                $data['silueta'] . "||" .
                                $data['tela'] . "||" .
                                $data['categoria'] . "||" .
                                $data['proveedor']. "||" .
                                $data['color']. "||" .
                                $data['coleccion']. "||" .
                                $data['tipo_inventario']. "||" .
                                $data['bodega']. "||" .
                                $data['estado'] . "||" .
                                $data['precio']. "||" .
                                $data['fecha'] . "||" .
                                $data['genero'] . "||" .
                                $data['ruta'];
                                
                  ?>
                      <tr>
                        <!-- <td>
                                    <?php echo $data['id_producto']; ?>
                                </td> -->
                        <td>
                          <!-- <a href="inventarios.php?id_producto=<?php echo $data['referencia']; ?>"><?php echo $data['referencia']; ?></a> -->
                          <?php echo $data['referencia']; ?>
                        </td>
                        <td class="text-center">
                          <?php echo $data['descripcion']; ?>
                        </td>
                        <td>
                          <?php echo $data['marca']; ?>
                        </td>
                        <td>
                          <?php echo $data['tipo_inventario']; ?>
                        </td>
                        <td>
                          <?php echo $data['silueta']; ?>
                        </td>
                        <td>
                          <?php echo $data['tela']; ?>
                        </td>
                        <td>
                          <?php echo $data['categoria']; ?>
                        </td>
                        <td>
                          <?php echo $data['genero']; ?>
                        </td>
                        <!-- <td>
                          <?php echo $data['proveedor']; ?>
                        </td> -->
                        <td>
                          <?php echo $data['coleccion']; ?>
                        </td>
                        <td>
                          <?php echo $data['bodega']; ?>
                        </td>
                        <td>
                          <?php echo $data['ruta']; ?>
                        </td>
                        <!-- <td>
                          <div id="imagen_<?php echo $data['referencia']; ?>"></div>
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
                          <script>
                          
                            
                            $("#imagen_<?php echo $data['referencia']; ?>").html('<img src="../librerias/php-barcode/barcode.php?text='+<?php echo $data['ruta']; ?>+'&size=90&codetype=Code39&print=true"/>');
                            
                            
                          </script>
                          
                        </td> -->
                        <td>
                          <?php $producto->color_hexa($data['color']); ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 6) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 6) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 6) >= 10 and cantidadTallas($data['referencia'], 6) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 6) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 6) > 100 and cantidadTallas($data['referencia'], 6) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 6) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 8) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 8) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 8) >= 10 and cantidadTallas($data['referencia'], 8) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 8) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 8) > 100 and cantidadTallas($data['referencia'], 8) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 8) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 10) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 10) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 10) >= 10 and cantidadTallas($data['referencia'], 10) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 10) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 10) > 100 and cantidadTallas($data['referencia'], 10) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 10) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 12) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 12) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 12) >= 10 and cantidadTallas($data['referencia'], 12) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 12) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 12) > 100 and cantidadTallas($data['referencia'], 12) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 12) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 14) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 14) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 14) >= 10 and cantidadTallas($data['referencia'], 14) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 14) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 14) > 100 and cantidadTallas($data['referencia'], 14) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 14) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 16) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 16) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 16) >= 10 and cantidadTallas($data['referencia'], 16) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 16) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 16) > 100 and cantidadTallas($data['referencia'], 16) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 16) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 18) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 18) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 18) >= 10 and cantidadTallas($data['referencia'], 18) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 18) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 18) > 100 and cantidadTallas($data['referencia'], 18) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 18) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 20) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 20) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 20) >= 10 and cantidadTallas($data['referencia'], 20) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 20) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 20) > 100 and cantidadTallas($data['referencia'], 20) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 20) . "</strong>";
                          }
                          ?>
                        </td>
                        <!-- <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 22) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 22) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 22) >= 10 and cantidadTallas($data['referencia'], 22) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 22) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 22) > 100 and cantidadTallas($data['referencia'], 22) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 22) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 24) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 24) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 24) >= 10 and cantidadTallas($data['referencia'], 24) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 24) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 24) > 100 and cantidadTallas($data['referencia'], 24) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 24) . "</strong>";
                          }
                          ?>
                        </td> -->

                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 26) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 26) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 26) >= 10 and cantidadTallas($data['referencia'], 26) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 26) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 26) > 100 and cantidadTallas($data['referencia'], 26) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 26) . "</strong>";
                          }
                          ?>
                        </td>

                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 28) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 28) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 28) >= 10 and cantidadTallas($data['referencia'], 28) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 28) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 28) > 100 and cantidadTallas($data['referencia'], 28) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 28) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 30) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 30) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 30) >= 10 and cantidadTallas($data['referencia'], 30) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 30) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 30) > 100 and cantidadTallas($data['referencia'], 30) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 30) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 32) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 32) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 32) >= 10 and cantidadTallas($data['referencia'], 32) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 32) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 32) > 100 and cantidadTallas($data['referencia'], 32) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 32) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 34) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 34) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 34) >= 10 and cantidadTallas($data['referencia'], 34) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 34) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 34) > 100 and cantidadTallas($data['referencia'], 34) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 34) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 36) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 36) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 36) >= 10 and cantidadTallas($data['referencia'], 36) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 36) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 36) > 100 and cantidadTallas($data['referencia'], 36) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 36) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 38) < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 38) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 38) >= 10 and cantidadTallas($data['referencia'], 38) <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 38) . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 38) > 100 and cantidadTallas($data['referencia'], 38) <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 38) . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'S') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'S') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'S') >= 10 and cantidadTallas($data['referencia'], 'S') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'S') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'S') > 100 and cantidadTallas($data['referencia'], 'S') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'S') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'M') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'M') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'M') >= 10 and cantidadTallas($data['referencia'], 'M') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'M') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'M') > 100 and cantidadTallas($data['referencia'], 'M') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'M') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'L') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'L') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'L') >= 10 and cantidadTallas($data['referencia'], 'L') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'L') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'L') > 100 and cantidadTallas($data['referencia'], 'L') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'L') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'XL') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'XL') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'XL') >= 10 and cantidadTallas($data['referencia'], 'XL') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'XL') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'XL') > 100 and cantidadTallas($data['referencia'], 'XL') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'XL') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'U') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'U') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'U') >= 10 and cantidadTallas($data['referencia'], 'U') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'U') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'U') > 100 and cantidadTallas($data['referencia'], 'U') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'U') . "</strong>";
                          }
                          ?>
                        </td>
                        <td style="text-align: center;">
                          <?php
                          if (cantidadTallas($data['referencia'], 'EXT') < 10) {
                            echo "<strong style='color:red;'>" . cantidadTallas($data['referencia'], 'EXT') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'EXT') >= 10 and cantidadTallas($data['referencia'], 'EXT') <= 100) {
                            echo "<strong style='color:orange;'>" . cantidadTallas($data['referencia'], 'EXT') . "</strong>";
                          } elseif (cantidadTallas($data['referencia'], 'EXT') > 100 and cantidadTallas($data['referencia'], 'EXT') <= 1000) {
                            echo "<strong style='color:green;'>" . cantidadTallas($data['referencia'], 'EXT') . "</strong>";
                          }
                          ?>
                        </td>

                        <td>


                          <?php echo $estado = $data['estado'] = 1 ? 'Activo' : 'inactivo'; ?>
                        </td>
                        <td>
                          <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nombre_modal" onclick=""></button> -->

                          <a id="asigna_inventario_<?php echo $data['referencia']; ?>" id="btn-asignar" class="text-dark" data-toggle="modal" onclick="modal_subir_inventario('<?php echo $datos; ?>')" data-target="#nuevoInventario"><i class="fas fa-plus-circle fa-2x" title="Asigna inventario a <?php echo $data['descripcion']; ?>"></i></a>
                          
                          
                        </td>
                        <td><strong id="Verificar_<?php echo $data['referencia']; ?>">Verificar Inventario</strong></td>
                        <script>
                          document.getElementById('Verificar_<?php echo $data['referencia']; ?>').addEventListener('click', function(){
                            prompt('El inventario Se ha Validado, tiene alguna observacion, puede anotarla aqui.');
                          });
                        </script>
                      </tr>

                      <?php
                      }
                      ?>

                    