<?php


$id_venta= $_GET['id_venta'];






// Include the main TCPDF library (search for installation path).
require_once('tcpdf/tcpdf_import.php');





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

        
        $nombrecliente = $data['cliente'];
        $direccion_cliente = $data['direccion'];
        

        $consulta2 = "SELECT * FROM clientes WHERE nombre_cli = '".$nombrecliente."'";
        $modules2 = $conexion->prepare($consulta2);
        $modules2->execute();
        $total2 = $modules2->rowCount();
        if($total2 > 0) {
            while ($data2 = $modules2->fetch(PDO::FETCH_ASSOC)) {
        
 
        
        
                
                $cedula_cliente= $data2['identificacion_cli'];
          
                
                
                $TELEFONO_cliente = $data2['telefono'];
                $id_cliente = $data2['id'];
      
        
        
        
        
            }
        }


        $consulta3 = "SELECT * FROM clientes_direccion WHERE id_cliente = '".$id_cliente."' and direccion='".$direccion_cliente."'";
        $modules3 = $conexion->prepare($consulta3);
        $modules3->execute();
        $total3 = $modules3->rowCount();
        if($total3 > 0) {
            while ($data3 = $modules3->fetch(PDO::FETCH_ASSOC)) {
        
 
                $DEPARTAMENTO_cliente = $data3['departamento'];
                $ciudad_cliente = $data3['ciudad'];
        
        
            }
        }
        
        







    }
}







// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

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

<br>
<table cellspacing="0" cellpadding="1" border="1" align="center">
        <tr>
            <td>
                 <img src="logo.jpeg" alt="test alt attribute" width="100" height="50" border="0" />
            </td>
            <td>
                CALLE 17N #4-50 CIUDADELA DEL <br>
                CALZADO ZONA INDUSTRIAL <br>
                CUCUTA - NORTE DE SANTANDER <br>
                TEL: 3144237025 - 3112949753<br>
                NIT 900607480-3

            </td>
        </tr>
        <tr>
            <td>
                DESTINATARIO
            </td>
            <td>
                ORDEN
            </td>
        </tr>
        <tr>
        <td colspan="2">
        <br>
        <br>
            <b>NOMBRE:</b> $nombrecliente <br><br>
            <b>NIT O CC:</b> $cedula_cliente <br><br>
            <b>DIRECCION:</b> $direccion_cliente <br><br>
            <b>CIUDAD:</b> $ciudad_cliente <br><br>
            <b>DEPARTAMENTO:</b> $DEPARTAMENTO_cliente <br><br>
            <b>TELEFONO:</b> $TELEFONO_cliente <br><br> 
        </td>

        </tr>
        

</table>

EOD;



$pdf->writeHTML($tbl, true, false, false, false, '');






// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('rotulo.pdf', 'I');

//============================================================+
// END OF FILE
//=============================

?>
