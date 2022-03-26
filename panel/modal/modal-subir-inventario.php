<!-- Modal para registrar productos -->
<div class="modal fade" id="nuevoInventario" tabindex="-1" role="dialog" aria-labelledby="nuevoInventario">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
        <h4 class="modal-title" id="myModalLabel">Asignar inventario a:<input type="" name="" readonly="" id="campo_titulo" class="form-control"></h4>
        <form id="datos">

            <input type="hidden" id="id">

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="">Talla<strong id="val_talla"></strong></label>
                <select id="talla" class="form-control" name="talla" id="talla" required="">
                  <option value="" disabled="">SELECCIONE</option>
                  <?php $producto->select_tallas(); ?>
                </select>

              </div>
              <div class="form-group col-md-6">

                <label for="idd">Cantidad<strong id="val_cantidad"></strong></label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="cantidad" required="">
                
                <em for="" id="val_cantidad"></em>
              </div>
              <div class="form-group col-md-6">



              </div>
              <div class="form-group col-md-6">


              </div>

              <input type="hidden" id="" name="accion" value="nuevo">
              <input type="hidden" id="referenciaI" name="referenciai">
              <input type="hidden" id="marcaI" name="marca">
              <input type="hidden" id="descripcionI" name="descripcion" >
              <input type="hidden" id="siluetaI" name="silueta" >
              <input type="hidden" id="telaI" name="tela" >
              <input type="hidden" id="proveedorI" name="proveedor" >
              <input type="hidden" id="categoriaI" name="categoria" >
              <input type="hidden" id="precioI" name="precio">
              <input type="hidden" id="generoI" name="genero">
              <input type="hidden" id="colorI" name="color" id="color">
              <input type="hidden" id="coleccionI" name="coleccion" id="coleccion">
              <input type="hidden" id="tipo_inventarioI" name="tipo_inventario" >
              <input type="hidden" id="bodegaI" name="bodega" >
              <input type="hidden" id="rutaI" name="ruta">


            </div>

            <div class="form-row">



            </div>
          </form>
      </div>
      <div class="modal-footer">
        <div id="crear">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button id="envio_nuevo">Guardar</button>
          <div id="camp_nuevo"></div>
          
          
        </div>
        
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../controlador/modalSubirInventario.js"></script>