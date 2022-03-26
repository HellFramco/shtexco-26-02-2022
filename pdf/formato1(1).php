<?php


$color ="#B3E5FF";




$id_venta= $_GET['id_venta'];



$numero_linea = "LINEA 1";

$datos_tabla= "";


// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf_import.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);






$cantidad_prendas = 0 ;
$tipo_venta = "AL DETAL";
$total_pedido = 0;



require_once("../modelo/db.php");
$conexion = new Conexion();
$arreglo = array();
$i = 0;
$consulta = "SELECT * FROM ventas_globales WHERE id_venta = '".$id_venta."'";
$modules = $conexion->prepare($consulta);
$modules->execute();
$total = $modules->rowCount();
if($total > 0) {
    while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {

        
   
        $nombre_cliente = $data['cliente'];

        $direccion_cliente = $data['direccion'];

        $transportadora= $data['transportadora']; 

        $pago = $data['medio_pago'];

        $fecha  = $data['fecha_cliente_aprobo'];

        $vendedor = $data['usuario'];
    
        

        //*cliente
        $consulta2 = "SELECT * FROM clientes WHERE nombre_cli = '".$nombre_cliente."'";
        $modules2 = $conexion->prepare($consulta2);
        $modules2->execute();
        $total2 = $modules2->rowCount();
        if($total2 > 0) {
            while ($data2 = $modules2->fetch(PDO::FETCH_ASSOC)) {
        
 
                
                $correo_cliente= $data2['email'];
         
                $cedula_cliente= $data2['identificacion_cli'];
                
          
                $ciudad_cliente = $data2['ciudad'];

                $departamento_cliente = $data2['departamento'];
                

                $telefono_cliente = $data2['telefono'];


            
        
            }
        }
           //*cliente
     
           

            //venta
            $consulta3 = "SELECT * FROM lista_productos_ventas WHERE id_venta = '".$data['id_venta']."'";
            $modules3 = $conexion->prepare($consulta3);
            $modules3->execute();
            $total3 = $modules3->rowCount();
            if($total3 > 0) {
                while ($data3 = $modules3->fetch(PDO::FETCH_ASSOC)) {
                  $suma =  $data3['tallau']+$data3['talla6']+$data3['talla26']+$data3['tallas']+$data3['talla8']+$data3['talla28']+$data3['tallam']+$data3['talla10']+$data3['talla30']+$data3['tallal']+$data3['talla12']+$data3['talla32']+$data3['tallaxl']+$data3['talla14']+$data3['talla34']+$data3['talla16']+$data3['talla36']+$data3['talla18']+$data3['talla38'];
                  $cantidad_prendas = $cantidad_prendas  + $suma;
                  $total_pedido = $total_pedido + $data3['precio'];





$precio_unitario=0;

$ruta = "";

                  $consulta4 = "SELECT * FROM inventarios_productos WHERE referencia = '".$data3['referencia']."'";
                  $modules4 = $conexion->prepare($consulta4);
                  $modules4->execute();
                  $total4 = $modules4->rowCount();
                  if($total4 > 0) {
                      while ($data4 = $modules4->fetch(PDO::FETCH_ASSOC)) {
                            

                        $ruta =  $data4['ruta'];


                        $precio_unitario=$data4['precio'];

                                }
                            }


                       $dato1= $data3['tallau']+$data3['talla6']+$data3['talla26'];
                       $dato2= $data3['tallas']+$data3['talla8']+$data3['talla28'];
                       $dato3= $data3['tallam']+$data3['talla10']+$data3['talla30'];
                       $dato4= $data3['tallal']+$data3['talla12']+$data3['talla32'];
                       $dato5= $data3['tallaxl']+$data3['talla14']+$data3['talla34'];
                       $dato6= $data3['talla16']+$data3['talla36'];
                       $dato7= $data3['talla18']+$data3['talla38'];


                    $datos_tabla = $datos_tabla  . '
                    <tr>
                    <td>
                    <span style="font-size: xx-small;" >'.$data3['referencia'].'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$data3['descripcion'].'</span>
                    
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$ruta.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$data3['color'].'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato1.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato2.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato3.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato4.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato5.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato6.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$dato7.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$suma .'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$precio_unitario.'</span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" ></span>
                    </td>
                    <td>
                    <span style="font-size: xx-small;" >'.$data3['precio'].'</span>
                    </td>
                </tr>
            
                   ';
                    
                   
            
                }
            }
            //venta
            






    }
}















// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('HTEX');
$pdf->SetTitle('HTEX');
$pdf->SetSubject('TCPDF ');
$pdf->SetKeywords('TCPDF');

// set default header data


//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 0481', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 15);

// add a page
$pdf->AddPage();



$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------


 
$tbl = <<<EOD
<div align="center">
<img src="logo.jpeg" alt="test alt attribute" width="100" height="50" border="0" />
</div>
<br>
<table cellspacing="0" cellpadding="1" border="1" align="center">
    <tr>
            <td style="background-color:$color; font-size:10px">
            FECHA
            </td>
            <td style="background-color:$color;">
                TRANSPORTADORA
            </td>
            <td style="background-color:$color;">
                 PAGO
            </td>
    </tr>
    <tr>
        <td>
            $fecha 
        </td>
        <td>
            $transportadora
        </td>
        <td>
            $pago
        </td>
    
    </tr>
    <tr>
        <td colspan="3" style="background-color:$color;">
            VENDEDOR
        </td>
    </tr>
    <tr>
        <td colspan="3">
            $vendedor
        </td>
    </tr>


</table>

EOD;





$pdf->writeHTML($tbl, true, false, false, false, '');



$tbl = <<<EOD
<h3 align="center"> $numero_linea </h3>

EOD;



$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="1" align="center">
        <tr>
        <td colspan="3" style="background-color:$color;">
         CLIENTE 
        </td>
        </tr>
        <tr>
        <td colspan="3">
            NOMBRE
        </td>
        </tr>

        <tr>
        <td colspan="3">
            $nombre_cliente
        </td>
        </tr>
        <tr>
        <td style="background-color:$color;">
            CEDULA
        </td>
        <td style="background-color:$color;">
            TELEFONO
        </td>
        <td style="background-color:$color;">
             EMAIL
        </td>
        </tr>
        <tr>
            <td>
                $cedula_cliente 
            </td>
            <td>
                $telefono_cliente
            </td>
            <td>
                $correo_cliente
            </td>

        </tr>
        <tr>
                <td style="background-color:$color;">
                    CIUDAD
                </td>
                <td style="background-color:$color;">
                    DEPARTAMENTO
                </td>
            
        </tr>
        <tr>
            <td>
                 $ciudad_cliente
            </td>
            <td>
                 $departamento_cliente
            </td>
        
        </tr>
        <tr>
            <td colspan="3" style="background-color:$color;">
                DIRECCION
            </td>
        </tr>

        <tr>
            <td colspan="3">
                $direccion_cliente
            </td>
        </tr>


</table>





EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');



if($cantidad_prendas>7){
    $tipo_venta="AL MAYOR";
}

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="1" align="center" style="line-height: 80%;">
    <tr>
        <td rowspan="2" style="background-color:$color; font-size:10px">
 
        <span style="font-size: xx-small;"  >REF</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">DESCRIPCION</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">UBI</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">COLOR</span>
        </td>
        <td colspan="7 " style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">TALLAS</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">CANTIDAD</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">VALOR</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">DESCUENTO</span>
        </td>
        <td rowspan="2" style="background-color:$color; font-size:10px">
        <span style="font-size: xx-small;">TOTAL</span>
        </td>
     
    </tr>
    <tr>
     
        
        <td>
        <span style="font-size: xx-small;">U/6/26</span>
        </td>
        <td>

        <span style="font-size: xx-small;">S/8/28</span> 
        </td>
        <td>
        <span style="font-size: xx-small;">M/10/30</span>
        </td>
        <td>

        <span style="font-size: xx-small;">L/12/32</span>
        </td>
        <td>    

        <span style="font-size: xx-small;">XL/14/34</span>
        </td>
        <td>

        <span style="font-size: xx-small;">16/36</span>
        </td>
        <td>

        <span style="font-size: xx-small;">18/38</span>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
      
    </tr>
   $datos_tabla
</table>

<br>

<table cellspacing="0" cellpadding="1" border="1" align="center">
    <tr>
        <td>
             TOTAL DE PRENDAS   
        </td>
        <td>
             TIPO DE VENTA
        </td>
        <td>
            TOTAL PEDIDO
        </td>
    </tr>
    <tr>
        <td>
            $cantidad_prendas
        </td>
        <td>
            $tipo_venta
        </td>
        <td>
            $total_pedido$
        </td>
    </tr>
</table>

<br>
<br>

EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');



// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//=============================