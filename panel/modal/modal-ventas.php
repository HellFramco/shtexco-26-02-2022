<!-- modal para registro de ventaas -->
<div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrar Venta</h4>
      </div>
      <div class="modal-body">

        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">VENDEDOR</label>
              <input type="text" class="form-control" readonly="" value="<?php echo $nombre; ?>" id="vendedor" placeholder="">
            </div>

            <div class="form-group col-md-6">
              <label for="">CLIENTE</label>
              <select name="" id="id_cliente" class="form-control">
                <?php
                $clientes = $misclientes->viewClientexVendedor($id_usuario);
                foreach ($clientes as $cli) {
                  echo "<option value='" . $cli['id'] . "'>" . $cli['identificacion'] . " - " . $cli['nombre'] . "</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">transportadora</label>
              <select name="" id="transportadora" class="form-control">
                <?php
                $transportadoras = $mistransportadoras->viewTransportadoras();
                foreach ($transportadoras as $tras) {
                  echo "<option value='" . $tras['id_transportadora'] . "'>" . $tras['nombre_transportadora'] . "</option>";
                }
                ?>
              </select>
            </div>

            <div class="form-group col-md-6">
              <label for="">metodo_pago</label>
              <select name="" id="metodo_pago" class="form-control">
                <?php
                $metodos = $mismetodosPagos->viewMetodosPagos();
                foreach ($metodos as $met) {
                  echo "<option value='" . $met['id_metodo'] . "'>" . $met['nombre_metodo'] . "</option>";
                }
                ?>
              </select>
            </div>
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div id="crear">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="agregardatos()">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</div>