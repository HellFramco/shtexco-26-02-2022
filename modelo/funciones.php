<?php

date_default_timezone_set("America/Bogota");

class misFunciones {

    private $cantact; // Cantidad clientes activos
    private $cantinac; // Cantidad clientes inactivos
    private $cantsinc; // Cantidad clientes sin compras

    private $cantactvend; // Cantidad clientes activos
    private $cantinacvend; // Cantidad clientes inactivos
    private $cantsincvend; // Cantidad clientes sin compras
    
    private $activo = array(); // Arreglo para clientes activos
    private $inactivo = array(); // Arreglo para clientes inactivos
    private $sincompra = array(); // Arreglo para clientes sin compras

    private $activoVend = array(); // Arreglo para clientes activos
    private $inactivoVend = array(); // Arreglo para clientes inactivos
    private $sincompraVend = array(); // Arreglo para clientes sin compras

    #Compras Cliente
    function comprasCliente($t){
        require_once("db.php");
        $conexion = new Conexion();
        $sql = 'SELECT count(id)as coun FROM orders_tags where cliente = '.$t;
        $c = $conexion->prepare($sql);
        $c->execute();
        while ($dc = $c->fetch(PDO::FETCH_ASSOC)) {
            $coun = $dc["coun"];
        }
        return $coun;
    }

    #Compras totale de cliente
    function comprasClienteTotales($t){
        require_once("db.php");
        $conexion = new Conexion();
        $c = $conexion->prepare('SELECT sum(total)as totales FROM orders_tags where cliente = '.$t);
        $c->execute();
        while ($dc = $c->fetch(PDO::FETCH_ASSOC)) {
            $coun = $dc["totales"];
        }
        return $coun;
    }

    #cantidad de Compras Cliente
    function cliente($t){
        require_once("db.php");
        $conexion = new Conexion();
        $c = $conexion->prepare('SELECT * FROM clientes where id = '.$t);
        $c->execute();
        while ($dc = $c->fetch(PDO::FETCH_ASSOC)) {
            $coun = $dc["nombre"].", Identificacion: ".$dc["identificacion"];
        }
        return $coun;
    }

    #cantidad de Compras Cliente
    function lineaVendedor($t){
        require_once("db.php");
        $conexion = new Conexion();
        $name="";
        $conexion = new Conexion();
        $c = $conexion->prepare('SELECT * FROM user_secure where id = '.$t);
        $c->execute();
        while ($dc = $c->fetch(PDO::FETCH_ASSOC)) {
            $name = $dc['name'];
        }
        return $name;
    }
    
    #Diferencia de fechas
    function difFechas($fecmin, $fecmax)
    {
        // Cálculo de fechas
        $dias = 0;
        $date1 = new DateTime($fecmin);
        $date2 = new DateTime($fecmax);
        $diff = $date1->diff($date2);
        $dias = $diff->days;
        return $dias;
    }

    #cantidad de Compras mes actual
    function comprasActuales($cli)
    {
        require_once("db.php");
        $conexion = new Conexion();

        $fechaActual = date('Y-m-d');
        $date3 = new DateTime($fechaActual);
        $mesact = $date3->format('m');
        $anioact = $date3->format('Y');
        /*
        if($mesact == 1){
            $mesant = 12;
            $anioant = $anioact-1;
        }
        else{
            $mesant = $mesact-1;
            $anioant = $anioact;
        }*/
        $sqlact = "SELECT count(id) as coun, sum(total) as suma
                    FROM orders_tags
                    WHERE (aprobado = 1 or cliente_acepto = 1)
                    AND cancelado = '0'
                    AND cliente = '".$cli."'
                    AND month(dateIn) = '".$mesact."'
                    AND year(dateIn) = ".$anioact;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        $filact = $venact->fetch(PDO::FETCH_ASSOC);
        return array($filact['coun'], $filact['suma']);
    }

    #Compras clientes ACTIVOS, INACTIVOS y SIN COMPRAS
    function comprasClientes()
    {
        require_once("db.php");
        $conexion = new Conexion();
        $act=0;
        $inact=0;
        $sincom=0;
        $activo = array();
        $inactivo = array();
        $sincompra = array();
        $consulta = "SELECT cli.id, cli.nombre, cli.identificacion, cli.direccion, cli.telefono, cli.pais, cli.ciudad, cli.departamento, cli.email, ussec.name as vendedor, cli.dateIn, cli.medio_llegada, cli.tipo_cliente, cli.observacion, cli.clasificacion
                    FROM clientes cli
                    INNER JOIN user_secure ussec ON cli.usuarioId=ussec.id";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            // Cantidad de compras por cliente
            $sql = "SELECT count(id) as coun, sum(total) as sumatoria, min(dateIn) as minimo, max(dateIn) as maximo 
                    FROM orders_tags
                    WHERE (aprobado = 1 or cliente_acepto = 1)
                    AND cancelado = '0'
                    AND cliente = ".$data["id"];
            $ventas = $conexion->prepare($sql);
            $ventas->execute();
            $dataVentas = $ventas->fetch(PDO::FETCH_ASSOC);
            $cantidad_compras = $dataVentas['coun'];
            
            if ($cantidad_compras > 0) {
                $valor_compras = $dataVentas['sumatoria'];
                $fecmin = $dataVentas['minimo'];
                $fecmax = $dataVentas['maximo'];

                // Cálculo de fechas
                $dias = $this->difFechas($fecmin, $fecmax);
                $meses = $dias/30;

                // Cantidad de compras en el mes
                if ($meses < 1) {
                    $cantcommes = $cantidad_compras;
                    $valcommes = $valor_compras;
                } else {
                    $cantcommes = $cantidad_compras/$meses;
                    $valcommes = $valor_compras/$meses;
                }

                // Cantidad compras mes actual
                $res = $this->comprasActuales($data["id"]);
                $com_act = $res[0]; // Cantidad de compras actuales
                $sum_act = $res[1]; // Valor de las compras actuales

                // Estado
                if ($sum_act >= $valcommes) {
                    $activo[$act]['clasificacion'] = $data['clasificacion'];
                    $activo[$act]['id'] = $data['id'];
                    $activo[$act]['identificacion'] = $data['identificacion'];
                    $activo[$act]['nombre'] = $data['nombre'];
                    $activo[$act]['fecmin'] = $fecmin;
                    $activo[$act]['fecmax'] = $fecmax;
                    $activo[$act]['dias'] = $dias;
                    $activo[$act]['meses'] = $meses;
                    $activo[$act]['cantidad_compras'] = $cantidad_compras;
                    $activo[$act]['valor_compras'] = $valor_compras;
                    $activo[$act]['cantcommes'] = $cantcommes;
                    $activo[$act]['valcommes'] = $valcommes;
                    $activo[$act]['com_act'] = $com_act;
                    $activo[$act]['sum_act'] = $sum_act;
                    $activo[$act]['estado'] = "Activo";
                    $activo[$act]['observacion'] = $data['observacion'];
                    $activo[$act]['vendedor'] = $data['vendedor'];
                    $activo[$act]['telefono'] = $data['telefono'];
                    $activo[$act]['medio_llegada'] = $data['medio_llegada'];
                    $activo[$act]['tipo_cliente'] = $data['tipo_cliente'];
                    $activo[$act]['fecha_contacto'] = $data['fecha_contacto'];
                    $activo[$act]['observacion_interaccion'] = $data['observacion_interaccion'];
                    $act++;
                }
                else{
                    $inactivo[$inact]['clasificacion'] = $data['clasificacion'];
                    $inactivo[$inact]['id'] = $data['id'];
                    $inactivo[$inact]['identificacion'] = $data['identificacion'];
                    $inactivo[$inact]['nombre'] = $data['nombre'];
                    $inactivo[$inact]['fecmin'] = $fecmin;
                    $inactivo[$inact]['fecmax'] = $fecmax;
                    $inactivo[$inact]['dias'] = $dias;
                    $inactivo[$inact]['meses'] = $meses;
                    $inactivo[$inact]['cantidad_compras'] = $cantidad_compras;
                    $inactivo[$inact]['valor_compras'] = $valor_compras;
                    $inactivo[$inact]['cantcommes'] = $cantcommes;
                    $inactivo[$inact]['valcommes'] = $valcommes;
                    $inactivo[$inact]['com_act'] = $com_act;
                    $inactivo[$inact]['sum_act'] = $sum_act;
                    $inactivo[$inact]['estado'] = "Activo";
                    $inactivo[$inact]['observacion'] = $data['observacion'];
                    $inactivo[$inact]['vendedor'] = $data['vendedor'];
                    $inactivo[$inact]['telefono'] = $data['telefono'];
                    $inactivo[$inact]['medio_llegada'] = $data['medio_llegada'];
                    $inactivo[$inact]['tipo_cliente'] = $data['tipo_cliente'];
                    $inactivo[$inact]['fecha_contacto'] = $data['fecha_contacto'];
                    $inactivo[$inact]['observacion_interaccion'] = $data['observacion_interaccion'];
                    $inact++;
                }
            }
            else{
                $sincompra[$sincom]['clasificacion'] = $data['clasificacion'];
                $sincompra[$sincom]['id'] = $data['id'];
                $sincompra[$sincom]['identificacion'] = $data['identificacion'];
                $sincompra[$sincom]['nombre'] = $data['nombre'];
                $sincompra[$sincom]['fecmin'] = $fecmin;
                $sincompra[$sincom]['fecmax'] = $fecmax;
                $sincompra[$sincom]['dias'] = $dias;
                $sincompra[$sincom]['meses'] = $meses;
                $sincompra[$sincom]['cantidad_compras'] = $cantidad_compras;
                $sincompra[$sincom]['valor_compras'] = $valor_compras;
                $sincompra[$sincom]['cantcommes'] = $cantcommes;
                $sincompra[$sincom]['valcommes'] = $valcommes;
                $sincompra[$sincom]['com_act'] = $com_act;
                $sincompra[$sincom]['sum_act'] = $sum_act;
                $sincompra[$sincom]['estado'] = "Activo";
                $sincompra[$sincom]['observacion'] = $data['observacion'];
                $sincompra[$sincom]['vendedor'] = $data['vendedor'];
                $sincompra[$sincom]['telefono'] = $data['telefono'];
                $sincompra[$sincom]['medio_llegada'] = $data['medio_llegada'];
                $sincompra[$sincom]['tipo_cliente'] = $data['tipo_cliente'];
                $sincompra[$sincom]['fecha_contacto'] = $data['fecha_contacto'];
                $sincompra[$sincom]['observacion_interaccion'] = $data['observacion_interaccion'];
                $sincom++;
            }
        }
        $this->cantact = $act;
        $this->cantinac = $inact;
        $this->cantsinc = $sincom;
        $this->activo = $activo;
        $this->inactivo = $inactivo;
        $this->sincompra = $sincompra;
    }

    // Cantidad clientes totales
    public function cantidadClientes()
    {
        $this->comprasClientes();
        return array($this->cantact, $this->cantinact, $this->cantsinc);
    }

    // Arreglo clientes ACTIVOS
    public function arrActivos()
    {
        $this->comprasClientes();
        return $this->activo;
    }

    // Arreglo clientes INACTIVOS
    public function arrInactivos()
    {
        $this->comprasClientes();
        return $this->inactivo;
    }

    // Arreglo clientes SIN COMPRAS
    public function arrSincompras()
    {
        $this->comprasClientes();
        return $this->sincompra;
    }

    #Compras clientes ACTIVOS, INACTIVOS y SIN COMPRAS
    function comprasClientesVendedor($vend)
    {
        require_once("db.php");
        $conexion = new Conexion();
        $act=0;
        $inact=0;
        $sincom=0;
        $activo = array();
        $inactivo = array();
        $sincompra = array();
        $consulta = "SELECT cli.id, cli.nombre, cli.identificacion, cli.direccion, cli.telefono, cli.pais, cli.ciudad, cli.departamento, cli.email, ussec.name as vendedor, cli.dateIn, cli.medio_llegada, cli.tipo_cliente, cli.observacion, cli.clasificacion
                    FROM clientes cli
                    INNER JOIN user_secure ussec ON cli.usuarioId=ussec.id
                    WHERE usuarioId = '".$vend."'
                    ORDER BY cli.id DESC
                    LIMIT 100";
        $modules = $conexion->prepare($consulta);
        $modules->execute();
        $total = $modules->rowCount();
        while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
            // Cantidad de compras por cliente
            $sql = "SELECT count(id) as coun, sum(total) as sumatoria, min(dateIn) as minimo, max(dateIn) as maximo 
                    FROM orders_tags
                    WHERE (aprobado = 1 or cliente_acepto = 1)
                    AND cancelado = '0'
                    AND cliente = ".$data["id"];
            $ventas = $conexion->prepare($sql);
            $ventas->execute();
            $dataVentas = $ventas->fetch(PDO::FETCH_ASSOC);
            $cantidad_compras = $dataVentas['coun'];
            
            if ($cantidad_compras > 0) {
                $valor_compras = $dataVentas['sumatoria'];
                $fecmin = $dataVentas['minimo'];
                $fecmax = $dataVentas['maximo'];

                // Cálculo de fechas
                $dias = $this->difFechas($fecmin, $fecmax);
                $meses = $dias/30;

                // Cantidad de compras en el mes
                if ($meses < 1) {
                    $cantcommes = $cantidad_compras;
                    $valcommes = $valor_compras;
                } else {
                    $cantcommes = $cantidad_compras/$meses;
                    $valcommes = $valor_compras/$meses;
                }

                // Cantidad compras mes actual
                $res = $this->comprasActuales($data["id"]);
                $com_act = $res[0]; // Cantidad de compras actuales
                $sum_act = $res[1]; // Valor de las compras actuales

                // Estado
                if ($sum_act >= $valcommes) {
                    $activo[$act]['clasificacion'] = $data['clasificacion'];
                    $activo[$act]['id'] = $data['id'];
                    $activo[$act]['identificacion'] = $data['identificacion'];
                    $activo[$act]['nombre'] = $data['nombre'];
                    $activo[$act]['fecmin'] = $fecmin;
                    $activo[$act]['fecmax'] = $fecmax;
                    $activo[$act]['dias'] = $dias;
                    $activo[$act]['meses'] = $meses;
                    $activo[$act]['cantidad_compras'] = $cantidad_compras;
                    $activo[$act]['valor_compras'] = $valor_compras;
                    $activo[$act]['cantcommes'] = $cantcommes;
                    $activo[$act]['valcommes'] = $valcommes;
                    $activo[$act]['com_act'] = $com_act;
                    $activo[$act]['sum_act'] = $sum_act;
                    $activo[$act]['estado'] = "Activo";
                    $activo[$act]['observacion'] = $data['observacion'];
                    $activo[$act]['vendedor'] = $data['vendedor'];
                    $activo[$act]['telefono'] = $data['telefono'];
                    $activo[$act]['medio_llegada'] = $data['medio_llegada'];
                    $activo[$act]['tipo_cliente'] = $data['tipo_cliente'];
                    $activo[$act]['fecha_contacto'] = $data['fecha_contacto'];
                    $activo[$act]['observacion_interaccion'] = $data['observacion_interaccion'];
                    $act++;
                }
                else{
                    $inactivo[$inact]['clasificacion'] = $data['clasificacion'];
                    $inactivo[$inact]['id'] = $data['id'];
                    $inactivo[$inact]['identificacion'] = $data['identificacion'];
                    $inactivo[$inact]['nombre'] = $data['nombre'];
                    $inactivo[$inact]['fecmin'] = $fecmin;
                    $inactivo[$inact]['fecmax'] = $fecmax;
                    $inactivo[$inact]['dias'] = $dias;
                    $inactivo[$inact]['meses'] = $meses;
                    $inactivo[$inact]['cantidad_compras'] = $cantidad_compras;
                    $inactivo[$inact]['valor_compras'] = $valor_compras;
                    $inactivo[$inact]['cantcommes'] = $cantcommes;
                    $inactivo[$inact]['valcommes'] = $valcommes;
                    $inactivo[$inact]['com_act'] = $com_act;
                    $inactivo[$inact]['sum_act'] = $sum_act;
                    $inactivo[$inact]['estado'] = "Activo";
                    $inactivo[$inact]['observacion'] = $data['observacion'];
                    $inactivo[$inact]['vendedor'] = $data['vendedor'];
                    $inactivo[$inact]['telefono'] = $data['telefono'];
                    $inactivo[$inact]['medio_llegada'] = $data['medio_llegada'];
                    $inactivo[$inact]['tipo_cliente'] = $data['tipo_cliente'];
                    $inactivo[$inact]['fecha_contacto'] = $data['fecha_contacto'];
                    $inactivo[$inact]['observacion_interaccion'] = $data['observacion_interaccion'];
                    $inact++;
                }
            }
            else{
                $sincompra[$sincom]['clasificacion'] = $data['clasificacion'];
                $sincompra[$sincom]['id'] = $data['id'];
                $sincompra[$sincom]['identificacion'] = $data['identificacion'];
                $sincompra[$sincom]['nombre'] = $data['nombre'];
                $sincompra[$sincom]['fecmin'] = $fecmin;
                $sincompra[$sincom]['fecmax'] = $fecmax;
                $sincompra[$sincom]['dias'] = $dias;
                $sincompra[$sincom]['meses'] = $meses;
                $sincompra[$sincom]['cantidad_compras'] = $cantidad_compras;
                $sincompra[$sincom]['valor_compras'] = $valor_compras;
                $sincompra[$sincom]['cantcommes'] = $cantcommes;
                $sincompra[$sincom]['valcommes'] = $valcommes;
                $sincompra[$sincom]['com_act'] = $com_act;
                $sincompra[$sincom]['sum_act'] = $sum_act;
                $sincompra[$sincom]['estado'] = "Activo";
                $sincompra[$sincom]['observacion'] = $data['observacion'];
                $sincompra[$sincom]['vendedor'] = $data['vendedor'];
                $sincompra[$sincom]['telefono'] = $data['telefono'];
                $sincompra[$sincom]['medio_llegada'] = $data['medio_llegada'];
                $sincompra[$sincom]['tipo_cliente'] = $data['tipo_cliente'];
                $sincompra[$sincom]['fecha_contacto'] = $data['fecha_contacto'];
                $sincompra[$sincom]['observacion_interaccion'] = $data['observacion_interaccion'];
                $sincom++;
            }
        }
        $this->cantactvend = $act;
        $this->cantinacvend = $inact;
        $this->cantsincvend = $sincom;
        $this->activoVend = $activo;
        $this->inactivoVend = $inactivo;
        $this->sincompraVend = $sincompra;
    }

    // Cantidad clientes totales VENDEDOR
    public function cantidadClientesVend($vend)
    {
        $this->comprasClientesVendedor($vend);
        return array($this->cantact, $this->cantinact, $this->cantsinc);
    }

    // Arreglo clientes ACTIVOS VENDEDOR
    public function arrActivosVend($vend)
    {
        $this->comprasClientesVendedor($vend);
        return $this->activoVend;
    }

    // Arreglo clientes INACTIVOS VENDEDOR
    public function arrInactivosVend($vend)
    {
        $this->comprasClientesVendedor($vend);
        return $this->inactivoVend;
    }

    // Arreglo clientes SIN COMPRAS VENDEDOR
    public function arrSincomprasVend($vend)
    {
        $this->comprasClientesVendedor($vend);
        return $this->sincompraVend;
    }

    #funcion para seleccionar clientes en un select del formulario
    function selectClientes($id){
        require_once("db.php");
        $conexion = new Conexion();

        $fechaActual = date('Y-m-d');
        $date3 = new DateTime($fechaActual);
        $mesact = $date3->format('m');
        $anioact = $date3->format('Y');
        
        $sqlact = "SELECT * FROM clientes WHERE usuarioId = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        $filact = $venact->fetch(PDO::FETCH_ASSOC);
        foreach ($venact as $key) {
            echo "
                <option value='".$key['id']."'>".$key['nombre']." - ". $key['identificacion']."</option>
            ";
        }

    }

    function selectClientesAll(){
        require_once("db.php");
        $conexion = new Conexion();

        $fechaActual = date('Y-m-d');
        $date3 = new DateTime($fechaActual);
        $mesact = $date3->format('m');
        $anioact = $date3->format('Y');
        
        $sqlact = "SELECT * FROM clientes order by nombre asc ";
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        $filact = $venact->fetch(PDO::FETCH_ASSOC);
        foreach ($venact as $key) {
            echo "
                <option value='".$key['id']."'>".$key['nombre']." - ". $key['identificacion']."</option>
            ";
        }

    }

    function viewClientes($id){
        require_once("db.php");
        $conexion = new Conexion();
        
        $sqlact = "SELECT * FROM clientes WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo $key['nombre'].' - '.$key['identificacion'];
        
        }
    }

    function viewVendedor($id){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT * FROM user_secure WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo $key['name'];
        
        }
    }

    function viewReferencia($id){
        require_once("db.php");
        $conexion = new Conexion();
        
        $sqlact = "SELECT * FROM products WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo $key['codeProduct'];
        
        }
    }

    function viewIdColor($id){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT * FROM products WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){

            return $key['colorProduct'];
            
        
        }
    }

    function viewColor($id){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT * FROM app_color WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){

            return $key['nameApp'];
            
        
        }
    }

    function viewStock($id){
        require_once("db.php");
        $conexion = new Conexion();
        
        $sqlact = "SELECT * FROM app_inventario_cantidad WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo count(explode(',', $key['asignados']));
        
        }
    }

    function viewLecturas($id){
        require_once("db.php");
        $conexion = new Conexion(); 
        
        $sqlact = "SELECT * FROM app_inventario_cantidad WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo count(explode(',', $key['lecturas']));
        
        }
    }

    function viewStockVendido($id){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT * FROM app_inventario_cantidad WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo count(explode(',', $key['vendidos_ventas']));
        
        }
    }

    function viewStockReal($id){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT * FROM app_inventario_cantidad WHERE id = ".$id;
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo (count(explode(',', $key['lecturas']))) - (count(explode(',', $key['asignados'])));
        
        }
    }

    function viewStockRealGlobal($id){
        require_once("db.php");
        $conexion = new Conexion();
        
        $sqlact = "SELECT * FROM app_inventario_cantidad";
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            $asignados = count(explode(',', $key['asignados']));
            $lecturas = count(explode(',', $key['lecturas']));
            $suma += ($lecturas - $asignados);
            
        }
        echo $suma;
    }

    function totalReferencias(){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT count(codeProduct) as conteo FROM products";
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo $key['conteo'];
        
        }
    }

    function totalTallas(){
        require_once("db.php");
        $conexion = new Conexion();

        $sqlact = "SELECT count(id) as conteo FROM app_talla";
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo $key['conteo'];
        
        }
    }

    function totalColores(){
        require_once("db.php");
        $conexion = new Conexion();
        
        $sqlact = "SELECT count(id) as conteo FROM app_color";
        $venact = $conexion->prepare($sqlact);
        $venact->execute();
        
        while($key = $venact->fetch(PDO::FETCH_ASSOC)){
            echo $key['conteo'];
        
        }
    }
}