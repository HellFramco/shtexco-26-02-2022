<!-- Modal para modificar -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Modificar producto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">


      <form>
        <input type="hidden" id="id">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Referencia</label>
              <input type="text" class="form-control" id="referencia"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="referencia">
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6" style="display: none;">
 
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Estado</label>
              <select id="estado" class="form-control">
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
              </select>
       
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



<!-- Modal para crear-->
<div class="modal fade" id="myModal_crear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crear producto</h4>
      </div>
      <div class="modal-body">


      <form>
        <input type="hidden" id="idu">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Referencia</label>
              <input type="text" class="form-control" id="referenciau"  onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="referencia">
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Nombre</label>
              <input type="text" class="form-control" id="nombreu" placeholder="nombre">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6" style="display: none;">
 
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Estado</label>
              <select id="estadou" class="form-control">
                  <option value="1">activo</option>
                  <option value="0">inactivo</option>
              </select>
       
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