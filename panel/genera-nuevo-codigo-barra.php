

<?php

include '../modelo/redireccion.php';
include '../modelo/datosInventarios.php';

$inventario = new Inventarios();
?>
<form action="../modelo/accionesProductos.php" method="post">
<table width="100%" class="table">
  <tr>
    <th></th>
    <th>Referencia</th>
    <th>Descripcion</th>
    <th>marca</th>
    <th>tipo</th>
    <th>silueta</th>
    <th>categoria</th>
    <th>color</th>
    <th>talla</th>
    <th></th>
    
  </tr>
  
  <?php
  if ($inventario->verInventarioPorCodigoBarra($_POST['id_codigo'])) {
  foreach ($inventario->verInventarioPorCodigoBarra($_POST['id_codigo']) as $key){
  ?>
  
  <tr>
    
    <th>
      <div id="imagen1_<?php echo $key['id_codigo']; ?>"></div>
      <script>
      $("#imagen1_<?php echo $key['id_codigo']; ?>").html('<img style="width: 200px;" src="../librerias/php-barcode/barcode.php?text='+<?php echo $key['codigo_barra']; ?>+'&size=90&codetype=Code39&print=true"/>');

      <?php echo $key['id_inventario'] = ''; ?>
    </script>

    </th>
    <th><input type="text" readonly="" name="referencia" value="<?php echo $key['referencia']; ?>"></th>
    <th><input type="text" readonly="" name="descripcion" value="<?php echo $key['descripcion']; ?>"></th>
    <th><input type="text" readonly="" name="marca" value="<?php echo $key['marca']; ?>"></th>
    <th><input type="text" readonly="" name="tipo" value="<?php echo $key['tipo']; ?>"></th>
    <th><input type="text" readonly="" name="silueta" value="<?php echo $key['silueta']; ?>"></th>
    <th><input type="text" readonly="" name="categoria" value="<?php echo $key['categoria']; ?>"></th>
    <th>
      <input type="text" readonly="" name="color" value="<?php echo $key['color']; ?>">
      <input type="hidden" readonly="" name="genero" value="<?php echo $key['genero']; ?>">
      <input type="hidden" readonly="" name="id_inventario" value="<?php echo $key['id_inventario']; ?>">
      <input type="hidden" readonly="" name="id_codigo" value="<?php echo $key['id_codigo']; ?>">
    </th>
    <th>
      <input type="text" name="talla" value="<?php echo $key['talla']; ?>">
      <input type="hidden" readonly="" name="accion" value="generaNuevoTick">
      <input type="hidden" readonly="" name="codigo_barra" value="<?php echo $key['codigo_barra']; ?>">
    </th>
    
    <td>
        <input type="number" required="" placeholder="cantidad" name="cantidad" id="cantidad">
    </td>
    <td>
      <input type="submit" class="btn-primary" value="Generar">
    </td>
  
  </tr>

  
  <?php
  }
  }
  else{
    echo "No se encuentran resultados.";
  }
   ?>
</table>
</form>
