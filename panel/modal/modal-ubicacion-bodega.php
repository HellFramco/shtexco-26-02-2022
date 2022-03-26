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
              <select id="bodega"  class="form-control">
                             <?php
                $res1 = $bodega->mostrar_bodega_tabla();
                foreach ($res1 as $data1) {
                ?>
                    <?php echo "<option value='".$data1['id']."' > ".$data1['nombre']." </option>" ; ?>
                 <?php
                }
                ?>

              </select>
            </div>

              <div class="form-group col-md-6">
                <label for="idd">Estante</label>
              <select id="estante"  class="form-control">
                             <?php
                $res1 = $estante->mostrar_tabla_estante();
                foreach ($res1 as $data1) {

                ?>

                    <?php echo "<option value='".$data1['id']."' > ".$data1['nombre']." </option>" ; ?>
                 <?php
                }
                ?>

              </select>
            </div>
          </div>
              <div class="form-row">
 
            <div class="form-group col-md-6">
            <label for="idd">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" placeholder="ubicacion">
            </div>

              <div class="form-group col-md-6">
               
            </div>
          </div>


      </form>






      </div>
      <div class="modal-footer">

             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick="modificarUbicacion()">Guardar</button>

             
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
              <label for="idd">Bodega</label>
              <select id="bodegau"  class="form-control">
                             <?php
                $res1 = $bodega->mostrar_bodega_tabla();
                foreach ($res1 as $data1) {

                ?>

                    <?php echo "<option value='".$data1['id']."' > ".$data1['nombre']." </option>" ; ?>
                 <?php
                }
                ?>

              </select>
            </div>

              <div class="form-group col-md-6">
                <label for="idd">Estante</label>
              <select id="estanteu"  class="form-control">
                             <?php
                $res1 = $estante->mostrar_tabla_estante();
                foreach ($res1 as $data1) {

                ?>

                    <?php echo "<option value='".$data1['id']."' > ".$data1['nombre']." </option>" ; ?>
                 <?php
                }
                ?>

              </select>
            </div>
          </div>
              <div class="form-row">
 
            <div class="form-group col-md-6">
            <label for="idd">Ubicación</label>
            <input type="text" class="form-control" id="ubicacionu" placeholder="ubicacion">
            </div>

              <div class="form-group col-md-6">
               
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