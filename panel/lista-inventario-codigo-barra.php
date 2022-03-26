<?php
include '../modelo/redireccion.php';
include '../modelo/datosInventarios.php';

$inventario = new Inventarios();
?>

<table width="100%" class="table">
  <tr>
    <th></th>
    <th>Referencia</th>
    <th>Descripcion</th>
    <th>marca</th>
    <th>tipo</th>
    <th>silueta</th>
    <th>tela</th>
    <th>categoria</th>
    <th>coleccion</th>
    <th>bodega</th>
    <th>ruta</th>
    <th>color</th>
    <th>proveedor</th>
    <th>talla</th>
  </tr>
  <?php
  if ($inventario->verInventarioPorCodigoBarra($_POST['codigo'])) {
  foreach ($inventario->verInventarioPorCodigoBarra($_POST['codigo']) as $key){
  ?>
  <tr>
    <th>
      <div id="imagen_<?php echo $key['id_codigo']; ?>"></div>
      <script>
      $("#imagen_<?php echo $key['id_codigo']; ?>").html('<img style="width: 200px;" src="../librerias/php-barcode/barcode.php?text='+<?php echo $key['codigo_barra']; ?>+'&size=90&codetype=Code39&print=true"/>');

      <?php echo $key['id_inventario'] = ''; ?>
    </script>
    </th>
    <th><?php echo $key['referencia']; ?></th>
    <th><?php echo $key['id_inventario']; ?></th>
    <th><?php echo $key['descripcion']; ?></th>
    <th><?php echo $key['marca']; ?></th>
    <th><?php echo $key['tipo']; ?></th>
    <th><?php echo $key['silueta']; ?></th>
    <th><?php echo $key['tela']; ?></th>
    <th><?php echo $key['categoria']; ?></th>
    <th><?php echo $key['coleccion']; ?></th>
    <th><?php echo $key['bodega']; ?></th>
    <th><?php echo $key['ruta']; ?></th>
    <th><?php echo $key['color']; ?></th>
    <th><?php echo $key['proveedor']; ?></th>
    <th><?php echo $key['talla']; ?></th>

  </tr>
  <?php
  }
  }
  else{
    echo "No se encuentran resultados.";
  }
   ?>
</table>
