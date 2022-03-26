<!-- modal para registro de clientes -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Venta</h4>
      </div>
      <div class="modal-body">
        <form>
          <input type="hidden" id="id">
          <div class="form-row">
            <!-- <div class="form-group col-md-6">
              <label for=""># VENTA</label>
              <input type="number" class="form-control" readonly="" id="id_venta" placeholder="">
            </div> -->
            <div class="form-group col-md-6">
              <label for="">CLIENTE</label>
              <select name="" id="id_cliente" class="form-control">
                <?php
                foreach ($clientes->viewClientes() as $cli) {
                  echo "<option value='" . $cli['id'] . "'>" . $cli['identificacion'] . " - " . $cli['nombre'] . "</option>";
                }
                ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">VENDEDOR</label>
              <select name="" id="id_vendedor" class="form-control">
                <?php
                foreach ($vendedores->viewVendedores() as $ven) {
                  echo "<option value='" . $ven['id'] . "'>" . $ven['identificacion'] . " - " . $ven['name'] . "</option>";
                }
                ?>
              </select>
            </div>
            <!-- <div class="form-group col-md-6">
              <label for="">FECHA DE VENTA</label>
              <input type="text" class="form-control" readonly="" id="fecha_venta" placeholder="">
            </div> -->
            <!-- <div class="form-group col-md-6">
              <label for="">ESTADO ORDEN</label>
              <select name="" id="estado_orden" class="form-control">
                <option value="1">FINALIZADA</option>
                <option value="0">EN ESPERA</option>
              </select>
            </div> -->
            <!-- <div class="form-group col-md-6">
              <label for="">CLIENTE APROBO</label>

              <select name="" id="cliente_aprobo" class="form-control">
       
             
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div> -->
            <!-- <div class="form-group col-md-6">
              <label for="">CARTERA APROBO</label>
              <select name="" id="cartera_aprobo" class="form-control">
       
             
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div> -->
            <!-- <div class="form-group col-md-6">
              <label for="">FECHA DE VENCIMIENTO</label>
              <input type="text" class="form-control" readonly="" id="fecha_vencimiento" placeholder="">
            </div> -->
            <!-- <div class="form-group col-md-6">
              <label for="">DESPACHADO</label>
              <select name="" id="despacho_aprobo" class="form-control">
       
             
                <option value="1">SI</option>
                <option value="0">NO</option>
              </select>
            </div> -->
            <div class="form-group col-md-6">
              <label for="">transportadora</label>
              <select name="" id="transportadora" class="form-control">
                <?php
                foreach ($transportadoras->viewTransportadoras() as $met) {
                  echo "<option value='" . $met['id_transportadora'] . "'>" . $met['nombre_transportadora'] . "</option>";
                }
                ?>
              </select>
            </div>
            <!-- <div class="form-group col-md-6">
              <label for="">numero_guia</label>
              <input type="text" class="form-control" id="numero_guia" placeholder="">
            </div> -->
            <!-- <div class="form-group col-md-6">
              <label for="">codigo_barras</label>
              <input type="text" class="form-control" id="codigo_barras" placeholder="">
            </div> -->
            <div class="form-group col-md-6">
              <label for="">metodo_pago</label>
              <select name="" id="metodo_pago" class="form-control">
                <?php
                foreach ($metodosPagos->viewMetodosPagos() as $met) {
                  echo "<option value='" . $met['id_metodo'] . "'>" . $met['nombre_metodo'] . "</option>";
                }
                ?>
              </select>
            </div>
            <!-- <div class="form-group col-md-6">
              <label for="">total_venta</label>
              <input type="text" class="form-control" id="total_venta" readonly="" placeholder="">
            </div> -->
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <div id="crear">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btn-agrega" onclick="agregarNuevaVenta()">Generar Venta</button>
        </div>
        <br><br>
        <div id="retorna-informacion"></div>
      </div>

    </div>
  </div>

</div>