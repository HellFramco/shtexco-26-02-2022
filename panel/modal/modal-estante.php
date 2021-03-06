<!-- Modal para modificar  -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar Estante</h4>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" id="id">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="idd">Nombre</label>
              <input type="text" class="form-control" id="estante" placeholder="estante">
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Obervacion</label>
              <input type="text" class="form-control" id="observacion" placeholder="observacion">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="modificarEstante()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para crear-->
<div class="modal fade" id="myModal_crear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear Estante</h4>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" id="idu">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="idd">Nombre</label>
              <input type="text" class="form-control" id="estanteu" placeholder="nombre">
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Lugar</label>
              <input type="text" class="form-control" id="lugaru" placeholder="nombre">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="idd">Observaci??n</label>
              <input type="text" class="form-control" id="observacionu" placeholder="nombre">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="agregardatos()">Crear</button>
      </div>
    </div>
  </div>
</div>