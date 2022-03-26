<?php 
  session_start();
  require_once '../../modelo/datos-productos.php';
  
  $producto = new productos();
?>
<!-- <link rel="stylesheet" href="../../librerias/css/sb-admin-2.css"> -->
<!-- Modal para registrar productos -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignar Inventario a <?php echo @$_GET['descripcion']; ?></h4>
      </div>
      <div class="modal-body">
        <form id="datos">

          <input type="hidden" id="id">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="">Talla<strong id="val_talla"></strong></label>
              <select id="talla" class="form-control" name="talla" id="talla" required="">
                <option value="" disabled="">SELECCIONE</option>
                <?php $producto->select_tallas(); ?>
              </select>

              <!-- <label for="idd">Color<strong id="val_marca"></strong></label>
              <select id="color" class="form-control" name="color" id="color" required="">
                <option value="" disabled="">SELECCIONE</option>
                <?php $producto->select_color(); ?>
              </select> -->

              <label for="idd">Cantidad<strong id="val_cantidad"></strong></label>
              <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="cantidad" required="">
              <input type="hidden">
            </div>
            <div class="form-group col-md-6">
              

              
            </div>
            <div class="form-group col-md-6">
              
              
            </div>

            <input type="hidden" name="accion" value="nuevo">
            <input type="hidden" name="referencia" value="<?php echo $_GET['referencia']; ?>">
            <input type="hidden" name="marca" value="<?php echo $_GET['marca']; ?>">
            <input type="hidden" name="descripcion" value="<?php echo $_GET['descripcion']; ?>">
            <input type="hidden" name="silueta" value="<?php echo $_GET['silueta']; ?>">
            <input type="hidden" name="tela" value="<?php echo $_GET['tela']; ?>">
            <input type="hidden" name="proveedor" value="<?php echo $_GET['proveedor']; ?>">
            <input type="hidden" name="categoria" value="<?php echo $_GET['categoria']; ?>">
            <input type="hidden" name="precio" value="<?php echo $_GET['precio']; ?>">
            <input type="hidden" name="genero" value="<?php echo $_GET['genero']; ?>">
            <input type="hidden" name="color" id="color" value="<?php echo $_GET['color']; ?>">
            <input type="hidden" name="coleccion" id="coleccion" value="<?php echo $_GET['coleccion']; ?>">
            
            
          </div>

          <div class="form-row">
            
            
            
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div id="crear">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="window.close()">Cerrar</button>
          <button id="envio">Guardar</button>
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
<script src="../../controlador/modalNuevoInventario.js"></script>



