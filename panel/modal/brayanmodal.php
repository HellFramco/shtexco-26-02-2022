<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="myModalLabel">Asignar Inventario a Cargo Dama Denim Dry</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">


        <form class="form-row">
          <input type="hidden" id="id">
          <div class="form-group col-md-6">
            <label for="idd">Talla</label>
            <select id="estado" class="form-control">
              <option value="1">26</option>
              <option value="0">28</option>
            </select>

          </div>
          <div class="form-group col-md-6">
            <label for="idd">Color</label>
            <select id="estado" class="form-control">
              <option value="1">Rojo</option>
              <option value="0">Verde</option>
            </select>
          </div>

          <div class="form-group col-md-6">
            <label for="inputEmail4">Cantidad</label>
            <input type="text" class="form-control" id="Talla" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Cantidad">
          </div>


          <div class="form-row">
            <div class="form-group col-md-6" style="display: none;">

            </div>

          </div>
        </form>






      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="modificarProducto()">Guardar</button>


      </div>
    </div>
  </div>
</div>