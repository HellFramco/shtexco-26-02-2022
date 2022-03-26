
<html>
    <form action="" method="post">

            <label for="">PESO SIMULADO
                <input type="text" placeholder="" name="peso_simulado" value='<?php echo $peso_simulado; ?>'>
            </label>
            <br>    
            <label for="">CANTIDAD DE PRENDAS
                <input type="text" placeholder="" name="cantidad" value='<?php echo $cantidad_prendas; ?>'>
            </label>
            <BR>
            <label for="">PESO ENTRANTE
                <input type="text" placeholder="" name="peso_entrante" value='<?php echo $peso_entrante; ?>'>
            </label>
            
            
            <input type="submit" value="valida">
    </form>
</html>

<?php
if($_POST){
    
    $cantidad_prendas = $_POST['cantidad'];
    $peso_simulado = $_POST['peso_simulado'];
    $peso_unitario = ($peso_simulado / $cantidad_prendas);

    $peso_entrante = $_POST['peso_entrante'];

    
    $cantidad_pesada = ($peso_entrante / $peso_unitario);
    
    echo "El peso simulado es: ".$peso_simulado;
    echo "<br>la cantidad de prendas son: ".$cantidad_prendas;
    echo "<br>El peso de una prenda es: ".$peso_unitario;
    echo "<br>el peso entrante es: ".$peso_entrante;
    echo "<br>La cantidad de prendas que peso son: ".$cantidad_pesada;



}
?>