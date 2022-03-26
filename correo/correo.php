<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require 'vendor/phpmailer/phpmailer/src/SMTP.php';
//require 'vendor/phpmailer/phpmailer/src/Exception.php';


require 'vendor/autoload.php';





$color ="#B3E5FF";




$id_venta= $_GET['id_venta'];



$numero_linea = "";

$datos_tabla= "";








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
        
                $id_cliente = $data2['id'];
                
                $correo_cliente= $data2['email'];
         
                $cedula_cliente= $data2['identificacion_cli'];
                
          
                $ciudad_cliente = $data2['ciudad'];

                $departamento_cliente = $data2['departamento'];
                

                $telefono_cliente = $data2['telefono'];


            
        
            }
        }
           //*cliente
     
            $consulta4 = "SELECT * FROM user_secure WHERE id = ".$data['id_usuario']."";
           $modules4 = $conexion->prepare($consulta4);
           $modules4->execute();
           $total4 = $modules4->rowCount();
           if($total4 > 0) {
               while ($data4 = $modules4->fetch(PDO::FETCH_ASSOC)) {
           
                   $linea= $data4['linea'];
           
               }
           }

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






















//Load Composer's autoloader


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.shtex.co';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = TRUE;                                   //Enable SMTP authentication
    $mail->Username   = 'ventas@shtex.co';                     //SMTP username
    $mail->Password   = 'Y76Dar6P_rCw';                               //SMTP password
    $mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ventas@shtex.co', 'HTEX');
    $mail->addAddress($correo_cliente, $nombre_cliente);     //Add a recipient        


    //Attachments
     //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


     if($cantidad_prendas>7){
        $tipo_venta="AL MAYOR";
    }
    







              $tbl = '
              <div align="center">
              <img src="https://clientes.shtex.co/logo-main-black.png" alt="test alt attribute" width="100" height="50" border="0" />
              
              </div>
              <br>
              <table style="border-collapse: collapse; width: 100%; height: 17px;" border="1">
                  <tr>
                          <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';" >
                          FECHA
                          </td>
                          <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                              TRANSPORTADORA
                          </td>
                          <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                               PAGO
                          </td>
                  </tr>
                  <tr>
                      <td style="width: 33.3333%; height: 17px; text-align: center;">
                          '.$fecha .'
                      </td>
                      <td style="width: 33.3333%; height: 17px; text-align: center;">
                         '. $transportadora.'
                      </td>
                      <td style="width: 33.3333%; height: 17px; text-align: center;">
                         '. $pago.'
                      </td>
                  
                  </tr>
                  <tr>
                      <td colspan="3" style="width: 100%; height: 17px; text-align: center; background-color:'.$color.';">
                          VENDEDOR
                      </td>
                  </tr>
                  <tr>
                      <td colspan="3" style="width: 100%; height: 17px; text-align: center;">
                          '.$linea.'
                      </td>
                  </tr>
              
              
              </table>

             





              <table style="border-collapse: collapse; width: 100%; height: 17px;" border="1">
                      <tr>
                      <td colspan="3" style="width: 100%; height: 17px; text-align: center; background-color:'.$color.';">
                       CLIENTE 
                      </td>
                      </tr>
                      <tr>
                      <td colspan="3" style="width: 100%; height: 17px; text-align: center;">
                          NOMBRE
                      </td>
                      </tr>
              
                      <tr>
                      <td colspan="3" style="width: 100%; height: 17px; text-align: center;">
                          '.$nombre_cliente.'
                      </td>
                      </tr>
                      <tr>
                      <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                          CEDULA
                      </td>
                      <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                          TELEFONO
                      </td>
                      <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                           EMAIL
                      </td>
                      </tr>
                      <tr>
                          <td style="width: 33.3333%; height: 17px; text-align: center;">
                             '. $cedula_cliente .'
                          </td>
                          <td style="width: 33.3333%; height: 17px; text-align: center;">
                             '. $telefono_cliente.'
                          </td>
                          <td style="width: 33.3333%; height: 17px; text-align: center;">
                              '.$correo_cliente.'
                          </td>
              
                      </tr>
                      <tr>
                              <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                                  CIUDAD
                              </td>
                              <td style="width: 33.3333%; height: 17px; text-align: center; background-color:'.$color.';">
                                  DEPARTAMENTO
                              </td>
                          
                      </tr>
                      <tr>
                          <td style="width: 33.3333%; height: 17px; text-align: center;">
                             '.  $ciudad_cliente.'
                          </td>
                          <td style="width: 33.3333%; height: 17px; text-align: center;">
                               '.$departamento_cliente.'
                          </td>
                      
                      </tr>
                      <tr>
                          <td colspan="3" style="width: 100%; height: 17px; text-align: center; background-color:'.$color.';">
                              DIRECCION
                          </td>
                      </tr>
              
                      <tr>
                          <td colspan="3" style="width: 100%; height: 17px; text-align: center;">
                             '. $direccion_cliente.'
                          </td>
                      </tr>
              
              
              </table>
              


              <br>
              <br>




      <table style="border-collapse: collapse; width: 100%; height: 17px;" border="1">
      <tr>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
   
          <span style="font-size: xx-small;"  >REF</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">DESCRIPCION</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">UBI</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">COLOR</span>
          </td>
          <td colspan="7 " style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">TALLAS</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">CANTIDAD</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">VALOR</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
          <span style="font-size: xx-small;">DESCUENTO</span>
          </td>
          <td rowspan="2" style="background-color:'.$color.'; font-size:10px">
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

        
      </tr>
     '.$datos_tabla.'
  </table>
  
  <br>
  
  <table style="border-collapse: collapse; width: 100%; height: 17px;" border="1" >
      <tr>
          <td style="width: 33.3333%; height: 17px; text-align: center;">
               TOTAL DE PRENDAS   
          </td>
          <td style="width: 33.3333%; height: 17px; text-align: center;">
               TIPO DE VENTA
          </td>
          <td style="width: 33.3333%; height: 17px; text-align: center;"> 
              TOTAL PEDIDO
          </td>
      </tr>
      <tr>
          <td style="width: 33.3333%; height: 17px; text-align: center;">
             '. $cantidad_prendas.'
          </td>
          <td style="width: 33.3333%; height: 17px; text-align: center;">
             '. $tipo_venta.'
          </td>
          <td style="width: 33.3333%; height: 17px; text-align: center;">
             '. $total_pedido.'$
          </td>
      </tr>
  </table>
  
  <br>
  <br>


              
              ';
              
              
         
              
              
              
   







    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'ORDEN DE VENTA';
    $mail->Body    = $tbl;
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
    echo "
    <script>
      alert('Se ha enviado al cliente la previsualizacion de la venta');
      location.href = '../panel/orden-nueva-venta.php?cliente=".$id_cliente."&id_venta=".$id_venta."&lista=true';
    </script>
    ";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo $correo_cliente;

?>