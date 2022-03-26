<?php 
	if ($_POST['accion'] == 'buscar_referencia') {
		include '../modelo/redireccion.php';
		require_once '../modelo/datos-productos.php';
		require_once '../modelo/datos-inventarios.php';
		$producto = new productos();
?>
	
	<div class="col-sm-12" >
		
	</div>
	<table class="table table-sm table-bordered " id="dataTable" cellspacing="0">
                <thead style="text-align: center; font-size: 1em;">
                  <tr style="color:; text-transform: uppercase; font-size: 10px;">
                    <th colspan="1">
                      <div class="text-center">item</div>
                    </th>
                    <th colspan="1">
                      <div class="text-center">Referencia</div>
                    </th>
                    <th>
                      <div class="text-center">Descripcion</div>
                    </th>
                   
                    <th>
                      <div class="text-center">Color</div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    
                    
                    
                  </tr>
                </thead>
                <tfoot style="color:; text-transform: uppercase; font-size: 10px;">
                  <tr style="color:; text-transform: uppercase; font-size: 10px;">
                    <th colspan="1">
                      <div class="text-center">item</div>
                    </th>
                    <th colspan="1">
                      <div class="text-center">Referencia</div>
                    </th>
                    <th>
                      <div class="text-center">Descripcion</div>
                    </th>
                   
                    <th>
                      <div class="text-center">Color</div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    <th>
                      <div class="text-center"></div>
                    </th>
                    
                    
                    
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                  $res = $producto->viewProductoReferencia($_POST['referencia']);
                  foreach ($res as $data) {
                    $item = 1;
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
                  <form action="">
                  <div id="campo_<?php echo $item; ?>">
                    
                  </div>
                  </form>
                    <form action="">
                      <tr style="color:; text-transform: uppercase; font-size: 10px;">
                       <td width="10">
                          
                          <?php echo $item; ?>
                        </td>
                        <td width="10">
                          
                          <input type="text" value="<?php echo $data['referencia']; ?>" readonly name="referencia" id="referencia_<?php echo $item; ?>">
                        </td>
                        <td class="text-center">
                          <input type="text" value="<?php echo $data['descripcion']; ?>" readonly name="descripcion" id="descripcion_<?php echo $item; ?>">
                        </td>
                        
                        <td>
                          <input type="text" value="<?php echo $data['color']; ?>" readonly name="color" id="color_<?php echo $item; ?>">
                          <?php $producto->color_hexa($data['color']); ?>
                        </td>
                        <td style="text-align: center;">
                          <label for="">Talla6:</label> <input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 6) ?>" name="talla6_<?php echo $item; ?>" id="talla6_<?php echo $item; ?>"><label for="">Talla S:</label> <input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 'S') ?>" name="tallaS" id="tallaS">

                        </td>
                        <td style="text-align: center;">
                          <label for="">Talla 8:</label> <input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 8) ?>" name="talla8" id="talla8"> 
                          <label>Talla M:</label> <input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 'M') ?>" name="tallaM" id="tallaM">
                        </td>

                        <td style="text-align: center;">
                          <label for="">Talla 10: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 10) ?>" name="talla10" id="talla10">
                          <label for="">Talla L: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 'L') ?>" name="tallaL" id="tallaL">
                        </td>
                        <td style="text-align: center;">
                          <label for="">Talla 12: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 12) ?>" name="talla12" id="talla12">
                          <label for="">Talla XL: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 'XL') ?>" name="tallaXL" id="tallaXL">
                        </td>
                        <td style="text-align: center;">
                          <label for="">Talla 14: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 14) ?>" name="talla14" id="talla14">
                          <label for="">Talla 16:</label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 16) ?>" name="talla16" id="talla16">
                        </td>
                        
                        <td style="text-align: center;">
                          <label for="">Talla 18: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 18) ?>" name="talla18" id="talla18">
                          <label for="">Talla 20: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 20) ?>" name="talla20" id="talla20">
                        </td>
                        
                        

                        <td style="text-align: center;">
                          <label for="">Talla 26: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 26) ?>" name="talla26" id="talla26">
                          <label for="">Talla 28: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 28) ?>" name="talla28" id="talla28">
                        </td>

                   
                       
                        <td style="text-align: center;">
                          <label for="">Talla 30: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 30) ?>" name="talla30" id="talla30">
                          <label for="">Talla 32: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 32) ?>" name="talla32" id="talla32">
                        </td>
                        
                        <td style="text-align: center;">
                          <label for="">Talla 34: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 34) ?>" name="talla34" id="talla34">
                          <label for="">Talla 36: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 36) ?>" name="talla36" id="talla36">
                        </td>
                      
                        <td style="text-align: center;">
                          <label for="">Talla 38: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 38) ?>" name="talla38" id="talla38">
                          <label for="">Talla U: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 'U') ?>" name="tallaU" id="tallaU">
                        </td>
                        
                        
                        <td style="text-align: center;">
                          <label for="">Talla EST: </label><input type="text" placeholder="Quedan <?php echo cantidadTallas($data['referencia'], 'EST') ?>" name="tallaEST" id="tallaEST">
                        </td>

                        
                        <td>
                        	<a id="boton_<?php echo $item; ?>" class="btn btn-success">agregar</a>
                        	<script>
                        		document.getElementById('boton_<?php echo $item; ?>').addEventListener('click', function(){
                        			document.getElementById('talla6_<?php echo $item; ?>').value;
                        			document.getElementById('campo_<?php echo $item; ?>').innerHTML = '<h3>Agregado</h3>';
                        		});
                        	</script>
                        </td>
                        
                      </tr>

                    </form>
                  <?php
                  $item++;
                  }
                  ?>
                </tbody>
              </table>
<?php 
include './librerias_js/pruebas-libreriasjs.php';
}
else{ echo "No hay parametro para su busqueda"; }
?>