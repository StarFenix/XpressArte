<?php
  session_start();
  include "expresarte/funcs/config.php";
  include "expresarte/funcs/conexion.php";
  include "proceso_carrito.php";
  require_once "expresarte/templates/cabecera_user.php";
  ?>
<?php
    //print_r($_GET);

    $ClientID="AXK5EHk0t90XEQfdDhKLoyb3s9qNhhj_V9Dl8V1RQjWCGZUKM_Sawo27zGZ-__d7yRI8u6vJKFdMKEY3";
    $Secret="EIBlx7RfmFYEufWhlGvPaFlh7JIbQYogYd87_htdTI0Zg7GJv8x-gxiiGKVbsfO9DWOLIY62HvzO1XLC";

        $Login=curl_init("https://api.sandbox.paypal.com/v1/payment-experience/web-profiles/XP-8YTH-NNP3-WSVN-3C76");

        curl_setopt($Login, CURLOPT_RETURNTRANSFER, TRUE);

        curl_setopt($Login, CURLOPT_USERPWD, $ClientID.":".$Secret);

        curl_setopt($Login, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

        $Respuesta=curl_exec($Login);
       
        $objRespuesta=json_decode($Respuesta);

        $AccessToken=$objRespuesta->access_token;
        //print_r($AccessToken);

        $venta=curl_init("https://api.sandbox.paypal.com/v1/payments/payment?count=10&start_index=0&sort_by=create_time&sort_order=desc".$_GET['paymentID']);

        curl_setopt($venta, CURLOPT_HTTPHEADER, array("Content-Type: application/json","Authorization: Bearer ".$AccessToken));

        curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

        $RespuestaVenta=curl_exec($venta);
        //print_r($RespuestaVenta);

        $objDatosTransaccion=json_decode($RespuestaVenta);

       // print_r($objDatosTransaccion->payer->payer_info->email);

        $state=$objDatosTransaccion->state;
        $email=$objDatosTransaccion->payer->payer_info->email;

        $total=$objDatosTransaccion->transactions[0]->amount->total;
        $currency=$objDatosTransaccion->transactions[0]->amount->currency;
        $custom=$objDatosTransaccion->transactions[0]->custom;

        $clave=explode("#",$custom);

        $sid=$clave[0];
        $claveVenta= openssl_decrypt($clave[1], COD, KEY);

        curl_close($venta);
        curl_close($Login);
        //echo $claveVenta;
        if($state=="approved"){
            $mensajePaypal="<h3>Tu pago ha sido aprobado</h3>";
            $sentencia=$pdo->prepare("UPDATE `tbllventas` 
                SET `PaypalDatos` = :PaypalDatos, `Status` = 'Aprobado' 
                WHERE `tbllventas`.`ID` = :ID;");

            $sentencia->bindParam(":ID", $claveVenta);
            $sentencia->bindParam(":PaypalDatos", $RespuestaVenta);
            $sentencia->execute();

            $sentencia=$pdo->prepare("UPDATE tbllventas SET Status = 'Completo'
                WHERE ClaveTransaccion=:ClaveTransaccion
                AND total=:total
                AND id=:ID");

            $sentencia->bindParam(':ClaveTransaccion', $sid);
            $sentencia->bindParam(':TOTAL', $TOTAL);
            $sentencia->bindParam(':ID', $claveVenta);
            $sentencia->execute();

            $completado=$sentencia->rowCount();

        }else{
            $mensajePaypal="<h3>Hay un problema con el pago :c</h3>";
        }
        //echo $mensajePaypal;
?>

<div class="jumbotron">
    <h1 class="display-4">¡Listo!</h1>
    <hr class="my-4">
    <p class="lead"><?php echo $mensajePaypal; ?></p>
    <p>Xpress Arte agradece tu compra</p>
    
    <p>
        <?php
            if($completado >=1){
                
                $sentencia=$pdo->prepare("SELECT * FROM tbldetalleventa, prenda 
                                        WHERE tbldetalleventa.IDPRODUCTO=prenda.cod_prendas
                                        AND tbldetalleventa.IDVENTA= :ID");

                $sentencia->bindParam(':ID', $claveVenta);
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                
                //print_r($listaProductos);
            }
        ?>
    </p>
</div>

<?php
require_once "expresarte/templates/pie.php";

?>
