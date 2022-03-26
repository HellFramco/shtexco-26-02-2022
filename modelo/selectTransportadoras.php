<?php


        require_once("db.php");
        $conexion = new Conexion();
        $arreglo = array();
        $i = 0;
        $consulta = "SELECT * 
                    FROM transportadoras WHERE nombre_metodo = '".$_POST['metodo_pago']."'";
        /*
        $consulta = "SELECT cli.*, user.name as vendedor
                    FROM clientes cli
                    INNER JOIN user_secure user ON cli.usuarioId=user.id
                    ORDER BY id DESC";
        */
        $modules = $conexion->query($consulta)->fetchAll();
        echo "
        <p>
            Transportadora
        </p>
        <select name='transportadora' id='transportadora' class='form-control'>
        ";
        foreach ($modules as $key) {
            echo "
            <option value='".$key['nombre_transportadora']."'>".$key['nombre_transportadora']."</option>
            ";
        }
        echo "
        </select>
        ";
        
?>

<script>
    $('#transportadora').select2();
</script>
   
