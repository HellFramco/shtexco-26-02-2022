<?php 
    session_start();
    require '../modelo/datosInventarios.php';
    $inventarios = new Inventarios();

?>
<!DOCTYPE html>
<html lang="es">
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=windows-1252">
<TITLE>Factura de cobro</TITLE>
</HEAD>
<BODY>
<?php foreach($inventarios->datosFacturaCobro($_GET['id_cobro']) as $key){
?>

<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=24 >
<TD WIDTH=363  ALIGN=LEFT ><img src="../imagenes/logo.png" alt=""> <BR></TD>
<TD WIDTH=336  ALIGN=CENTER  BGCOLOR=#E0E0E0 ><B><FONT style=FONT-SIZE:12pt FACE="Arial Black" COLOR=#000000>Factura De Cobro No # <?php echo $key['id_cobro']; ?></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=22 >
<TD WIDTH=363  ALIGN=LEFT > <BR></TD><TD WIDTH=336  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#ffffff>.</FONT></B></TD>

</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=14 >
<TD WIDTH=321  ALIGN=LEFT > <BR></TD><TD WIDTH=412  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:8pt FACE="Arial" COLOR=#000000>Calle 17N #4-50 Ciudadela del calzado</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=12 >
<TD WIDTH=321  ALIGN=LEFT > <BR></TD><TD WIDTH=412  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:8pt FACE="Arial" COLOR=#000000>C&uacute;cuta - Norte de Santander.</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=14 >
<TD WIDTH=411  ALIGN=LEFT > <BR></TD><TD WIDTH=250  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:8pt FACE="Arial" COLOR=#000000>(037) 5943299 Ext. 102 - 3112949753</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=14 >
<TD WIDTH=411  ALIGN=LEFT > <BR></TD><TD WIDTH=250  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:8pt FACE="Arial" COLOR=#000000>contabilidad@hyhsas.com</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >

</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=25 >
<TD WIDTH=0  ALIGN=LEFT > <BR></TD><TD WIDTH=410  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:11pt FACE="Arial Black" COLOR=#000000>H - TEX S.A.S</FONT></TD>

</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=22 >
<TD WIDTH=0  ALIGN=LEFT > <BR></TD><TD WIDTH=45  ALIGN=LEFT  BGCOLOR=#FFFFFF ><B><FONT style=FONT-SIZE:11pt FACE="Arial Black" COLOR=#000000>Nit</FONT></B></TD>
<TD WIDTH=300  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:11pt FACE="Arial Black" COLOR=#000000>900607480</FONT></TD>
<TD WIDTH=599  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:11pt FACE="Arial Black" COLOR=#000000>3</FONT></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=2  ALIGN=LEFT > <BR></TD><TD WIDTH=64  ALIGN=LEFT  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>CLIENTE</FONT></B></TD>
<TD WIDTH=336  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['cliente']; ?></FONT></TD>
<TD WIDTH=345  ALIGN=LEFT  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>POR CONCEPTO DE</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=2  ALIGN=LEFT > <BR></TD><TD WIDTH=64  ALIGN=LEFT  BGCOLOR= ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=></FONT></B></TD>
<TD WIDTH=336  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
<TD WIDTH=345  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>COBRO</FONT></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=2  ALIGN=LEFT > <BR></TD><TD WIDTH=164  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=66  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=166  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=2  ALIGN=LEFT > <BR></TD><TD WIDTH=164  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
<TD WIDTH=66  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
<TD WIDTH=166  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=2  ALIGN=LEFT > <BR></TD><TD WIDTH=198  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>FECHA COBRO</FONT></B></TD>
<TD WIDTH=200  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=3  ALIGN=LEFT > <BR></TD><TD WIDTH=233  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>VENDEDOR</FONT></B></TD>
<TD WIDTH=110  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=2  ALIGN=LEFT > <BR></TD><TD WIDTH=198  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['fecha']; ?></FONT></TD>
<TD WIDTH=200  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
<TD WIDTH=3  ALIGN=LEFT > <BR></TD><TD WIDTH=233  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['usuario']; ?></FONT></TD>
<TD WIDTH=110  ALIGN=CENTER  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
</TR>
</TABLE>
<TABLE BORDER=1 width=100% CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<!-- <TD WIDTH=8  ALIGN=LEFT > <BR></TD> -->
<TD WIDTH=40  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>REF</FONT></B></TD>
<TD WIDTH=70  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>MARCA</FONT></B></TD>
<TD WIDTH=232  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>SILUETA</FONT></B></TD>
<!-- <TD WIDTH=42  ALIGN=LEFT  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>COLOR</FONT></B></TD> -->
<TD WIDTH=42  ALIGN=LEFT  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>CANTIDAD</FONT></B></TD>
<!-- <TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 6</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 8</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 10</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 12</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 14</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 16</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 18</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 20</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 26</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 28</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 30</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 32</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 34</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 36</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 38</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA S</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA M</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA L</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA XL</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA U</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA EST</FONT></B></TD> -->

<TD WIDTH=80  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>Valor Unitario</FONT></B></TD>


<TD WIDTH=109  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>Total</FONT></B></TD>
</TR>


<TR HEIGHT=15 >
<!-- <TD WIDTH=8  ALIGN=LEFT > <BR></TD> -->
<TD WIDTH=40  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['referencia']; ?></FONT></B></TD>
<TD WIDTH=70  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['marca']; ?></FONT></B></TD>
<TD WIDTH=232  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['silueta']; ?></FONT></B></TD>
<!-- <TD WIDTH=42  ALIGN=LEFT  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>COLOR</FONT></B></TD> -->
<TD WIDTH=42  ALIGN=LEFT  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['cantidad']; ?></FONT></B></TD>
<!-- <TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 6</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 8</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 10</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 12</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 14</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 16</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 18</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 20</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 26</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 28</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 30</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 32</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 34</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 36</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA 38</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA S</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA M</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA L</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA XL</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA U</FONT></B></TD>
<TD WIDTH=60  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TALLA EST</FONT></B></TD> -->

<TD WIDTH=80  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>
<?php foreach($inventarios->verInventarioId($key['id_inventario']) as $keyIn){
    echo $keyIn['precio'];
}
?>
</FONT></B></TD>


<TD WIDTH=109  ALIGN=CENTER  BGCOLOR=#E6E6E6 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['valor_cobro']; ?></FONT></B></TD>
</TR>
</TABLE>

<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >

<TR HEIGHT=20>
<TD WIDTH=9  ALIGN=LEFT > <BR></TD><TD WIDTH=40  ALIGN=CENTER  BGCOLOR=#F5ECFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>OBSERVACION: </FONT></TD>
</TR>
<TR>
	<TD WIDTH=1  ALIGN=LEFT > <BR></TD><TD WIDTH=400  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['observacion_detalle']; ?></FONT></B></TD>
</tr>
<tr>
	<TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</tr>
<!-- <tr>
<TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>SUBTOTAL</FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['valor_cobro']; ?></FONT></B></TD>
</TR> -->
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=451  ALIGN=LEFT > <BR></TD><TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>DESCUENTO</FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>0</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=17 >
<TD WIDTH=451  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=451  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
<TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=451  ALIGN=LEFT  BGCOLOR=#FFFFFF ><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></TD>
<TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>RETEIVA</FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>0</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=451  ALIGN=LEFT > <BR></TD><TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>RETEICA</FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>0</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=451  ALIGN=LEFT > <BR></TD><TD WIDTH=186  ALIGN=LEFT  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>TOTAL FACTURA</FONT></B></TD>
<TD WIDTH=109  ALIGN=RIGHT  BGCOLOR=#FFFFFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000><?php echo $key['valor_cobro']; ?></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=0  ALIGN=LEFT > <BR></TD><TD WIDTH=746  ALIGN=LEFT  BGCOLOR= ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#ffffff>.</FONT></B></TD>
<TD WIDTH=539  ALIGN=CENTER  BGCOLOR= ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=13 >
<TD WIDTH=186  ALIGN=LEFT > <BR></TD><TD WIDTH=539  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>46602.  Banco Davivienda CTA CTE 066169997526.</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=186  ALIGN=LEFT > <BR></TD><TD WIDTH=539  ALIGN=CENTER  BGCOLOR= ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>Despues de la fecha de vencimiento de esta factura de venta se causaran intereses por </FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=13 >
<TD WIDTH=186  ALIGN=LEFT > <BR></TD><TD WIDTH=539  ALIGN=CENTER  BGCOLOR=#000000 ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000>mora a la tasa maxima legal vigente.</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=14 >
<TD WIDTH=186  ALIGN=LEFT > <BR></TD><TD WIDTH=539  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:8pt FACE="Arial" COLOR=#000000>Esta Factura se asimila en todos sus efectos a la letra de cambio Art 774 del Codigo de Comercio</FONT></B></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=12 >
<TD WIDTH=186  ALIGN=LEFT > <BR></TD><TD WIDTH=539  ALIGN=CENTER  BGCOLOR=#F5ECFF ><FONT style=FONT-SIZE:7pt FACE="Arial" COLOR=#000000></FONT></TD>
</TR>
</TABLE>
<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 >
<TR HEIGHT=15 >
<TD WIDTH=3  ALIGN=LEFT > <BR></TD><TD WIDTH=738  ALIGN=CENTER  BGCOLOR=#F5ECFF ><B><FONT style=FONT-SIZE:9pt FACE="Arial" COLOR=#000000></FONT></B></TD>
</TR>
</TABLE>
<?php
} 
?>
<!-- <A HREF="#">Primero</A> <A HREF="#">Anterior</A> <A HREF="documentoPágina2.html">Siguiente</A> <A HREF="documentoPágina2.html">&Uacute;ltimo</A></BODY> -->
</HTML>
<script>
    print();
</script>