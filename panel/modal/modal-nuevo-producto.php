<!-- Modal para registrar productos -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form id="datos">
        <h4 class="modal-title" id="myModalLabel">Nuevo producto</h4>

          <input type="hidden" id="id">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="genero">Genero <strong id="val_genero"></strong></label>
              <strong id="val_genero_2"></strong>
              <select class="form-control" name="genero" id="genero" required="">
                <option value="">SELECCIONE</option>
                <?php $producto->select_generos(); ?>
              </select>
              <div class="form-group col-md-12" id="campos_generados"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="">Referencia <em id="val_referencia"></em></label>
              <input type="text" name="referencia" class="form-control" id="referencia" placeholder="referencia" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Descripcion <strong id="val_descripcion"></strong></label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" required="" readonly="">
            </div>

            
            <div class="form-group col-md-6">
              <label for="idd">Categoria <strong id="val_silueta"></strong></label>
              <select id="categoria" class="form-control" name="categoria" id="categoria" required="">
                <option value="" disabled="">SELECCIONE</option>
                <?php $producto->select_categorias(); ?>
              </select>
            </div>
            
            <div class="form-group col-md-6">
              <label for="idd">Proveedor <strong id="val_silueta"></strong></label>
              <select id="proveedor" class="form-control" name="proveedor" id="proveedor" required="">
                <option value="" disabled="">SELECCIONE</option>
                <?php $producto->select_proveedores(); ?>
              </select>
            </div>
            
            <div class="form-group col-md-6">
              <label for="idd">Tela <strong id="val_silueta"></strong></label>
              <select id="tela" class="form-control" name="tela" id="tela" required="">
                <option value="" disabled="">SELECCIONE</option>
                <?php $producto->select_telas(); ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="check_bodega">Bodega <strong id="val_bodega"></strong></label>
              <br>
              <!-- <input type="radio" id="check_bodega_si" name="check_bodega" value="Si"> Asignar<br>
              <input type="radio" id="check_bodega_no" name="check_bodega" value="no"> no Asignar -->
              
              <div id="espacio_check_bodega" style="display:;">  
                <select id="bodega" class="form-control" name="bodega" id="bodega" required="">
                <option value="">SELECCIONE</option>
                <!-- <option value="POR ASIGNAR">POR ASIGNAR</option> -->
                <?php $producto->select_bodegas(); ?>
              </select>
              <div class="form-group col-md-12" id="campos_generados_bodega"></div> 
              </div>
            </div>
            
            
            <div class="form-group col-md-6">
              <label for="">Precio <em id="val_precio"></em></label>
              <input type="number" name="precio" class="form-control" id="precio" placeholder="precio" required="">
            </div>
            <input type="hidden" name="accion" value="nuevo">
          </div>

          <div class="form-row">
            
            
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div id="crear">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button id="envio_nuevo_producto">Guardar</button>
          <div id="camp"></div>
          <div id="val_campos"></div>
          <!-- <button type="button" class="btn btn-primary" onclick="agregardatos()">Crear</button> -->
        </div>
        <!-- <div id="modificar">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="modificarProducto()">Guardar</button>
        </div> -->

      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../controlador/modalNuevoProducto.js"></script>