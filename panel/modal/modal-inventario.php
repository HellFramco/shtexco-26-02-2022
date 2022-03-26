<!-- Modal crear-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar inventario</h4>
      </div>
      <div class="modal-body">

        <form>
          <input type="hidden" id="idu">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Producto</label>
              <select id="productou" class="form-control">
                <?php
                $res1 = $productos->mostrar_productos_select();
                foreach ($res1 as $data7) {
                ?>
                  <?php echo "<option value='" . $data7['referencia'] . "' > " . $data7['referencia'] . " - " . $data7['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Talla</label>
              <select id="tallau" class="form-control">
                <?php
                $res1 = $talla->mostrar_talla();
                foreach ($res1 as $data1) {
                ?>
                  <?php echo "<option value='" . $data1['id'] . "' > " . $data1['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Color</label>
              <select id="coloru" class="form-control">
                <?php
                $res2 = $color->mostrar_color();
                foreach ($res2 as $data2) {
                ?>
                  <?php echo "<option value='" . $data2['id'] . "' > " . $data2['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Marca</label>
              <select id="marcau" class="form-control">
                <?php
                $res2 = $marca->mostrar_marca();
                foreach ($res2 as $data3) {
                ?>
                  <?php echo "<option value='" . $data3['id'] . "' > " . $data3['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Silueta</label>
              <select id="siluetau" class="form-control">
                <?php
                $res2 = $silueta->mostrar_silueta();
                foreach ($res2 as $data4) {

                ?>

                  <?php echo "<option value='" . $data4['id'] . "' > " . $data4['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Tela</label>
              <select id="telau" class="form-control">
                <?php
                $res2 = $tela->mostrar_tela();
                foreach ($res2 as $data5) {

                ?>

                  <?php echo "<option value='" . $data5['id'] . "' > " . $data5['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Categoria</label>
              <select id="categoriau" class="form-control">
                <?php
                $res2 = $categoria->mostrar_categoria();
                foreach ($res2 as $data6) {

                ?>

                  <?php echo "<option value='" . $data6['id'] . "' > " . $data6['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Stock</label>
              <input type="text" class="form-control" id="stocku" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Stock">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Proveedor</label>
              <select id="proveedoru" class="form-control">

                <?php
                $res2 = $proveedores->mostrar_proveedores();
                foreach ($res2 as $data10) {

                ?>

                  <?php echo "<option value='" . $data10['id'] . "' > " . $data10['nombre'] . " </option>"; ?>
                <?php
                }
                ?>

              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Precio</label>
              <input type="text" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" id="preciou" placeholder="precio">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">

            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Estado</label>
              <select id="estadou" class="form-control">
                <option value="1">existencia</option>
                <option value="0">agotado</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Codigo de barra</label>
              <input type="text" class="form-control" id="codigo_barrau" placeholder="Codigo de barra">
            </div>
            <div class="form-group col-md-6">

            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">

            </div>
            <div class="form-group col-md-6">

            </div>
          </div>








        </form>






      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="agregardatos_inventario()">Crear</button>

      </div>
    </div>
  </div>
</div>





<!-- Modal Modificar -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar proasasducto</h4>
      </div>
      <div class="modal-body">


        <form>
          <input type="hidden" id="id">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">producto</label>
              <select id="producto" class="form-control">
                <?php
                $res1 = $productos->mostrar_productos_select();
                foreach ($res1 as $data7) {

                ?>

                  <?php echo "<option value='" . $data7['referencia'] . "' > " . $data7['nombre'] . " </option>"; ?>
                <?php
                }
                ?>

              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="idd">Talla</label>
              <select id="talla" class="form-control">
                <?php
                $res1 = $talla->mostrar_talla();
                foreach ($res1 as $data1) {

                ?>

                  <?php echo "<option value='" . $data1['id'] . "' > " . $data1['nombre'] . " </option>"; ?>
                <?php
                }
                ?>

              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Color</label>
              <select id="color" class="form-control">
                <?php
                $res2 = $color->mostrar_color();
                foreach ($res2 as $data2) {

                ?>

                  <?php echo "<option value='" . $data2['id'] . "' > " . $data2['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Marca</label>
              <select id="marca" class="form-control">
                <?php
                $res2 = $marca->mostrar_marca();
                foreach ($res2 as $data3) {

                ?>

                  <?php echo "<option value='" . $data3['id'] . "' > " . $data3['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Silueta</label>
              <select id="silueta" class="form-control">
                <?php
                $res2 = $silueta->mostrar_silueta();
                foreach ($res2 as $data4) {

                ?>

                  <?php echo "<option value='" . $data4['id'] . "' > " . $data4['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Tela</label>
              <select id="tela" class="form-control">
                <?php
                $res2 = $tela->mostrar_tela();
                foreach ($res2 as $data5) {

                ?>

                  <?php echo "<option value='" . $data5['id'] . "' > " . $data5['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Categoria</label>
              <select id="categoria" class="form-control">
                <?php
                $res2 = $categoria->mostrar_categoria();
                foreach ($res2 as $data6) {

                ?>

                  <?php echo "<option value='" . $data6['id'] . "' > " . $data6['nombre'] . " </option>"; ?>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Stock</label>
              <input type="text" class="form-control" id="stock" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Stock">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Proveedor</label>
              <select id="proveedor" class="form-control">

                <?php
                $res2 = $proveedores->mostrar_proveedores();
                foreach ($res2 as $data10) {

                ?>

                  <?php echo "<option value='" . $data10['id'] . "' > " . $data10['nombre'] . " </option>"; ?>
                <?php
                }
                ?>

              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Precio</label>
              <input type="text" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" id="precio" placeholder="precio">
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-6">

            </div>
            <div class="form-group col-md-6">
              <label for="inputEmail4">Estado</label>
              <select id="estado" class="form-control">
                <option value="1">existencia</option>
                <option value="0">agotado</option>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Codigo de barra</label>
              <input type="text" class="form-control" id="codigo_barra" placeholder="Codigo de barra">
            </div>
            <div class="form-group col-md-6">

            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">

            </div>
            <div class="form-group col-md-6">

            </div>
          </div>








        </form>






      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="modificar_inventario()">Guardar</button>


      </div>
    </div>
  </div>
</div>