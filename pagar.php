<?php
  session_start();
  include "expresarte/funcs/config.php";
  include "expresarte/funcs/conexion.php";
  include "proceso_carrito.php";
  require_once "expresarte/templates/cabecera_user.php";
?>
<?php 
    if($_POST){

        $TOTAL=0;
        $sid=session_id();
        $Correo=$_POST['email'];

        foreach($_SESSION['CARRITO'] as $indice=>$prenda){  
        
            $TOTAL=$TOTAL+($prenda['precio']);
        }
        $sentencia=$pdo->prepare("INSERT INTO `tbllventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `Status`) 
        VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'Pendiente');");
       
       $sentencia->bindParam(":ClaveTransaccion",$sid);
       $sentencia->bindParam(":Correo",$Correo);
       $sentencia->bindParam(":Total",$TOTAL);
       
       $sentencia->execute();
       
       $idVenta=$pdo->lastInsertId();

       foreach($_SESSION['CARRITO']as $indice=>$prenda){ 
        $sentencia=$pdo->prepare("INSERT INTO `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIO_U`, `CANTIDAD`, `DESCARGADO`)
         VALUES (NULL, :IDVENTA, :IDPRODUCTO, :PRECIO_U, :CANTIDAD, '0'); ");

         $sentencia->bindParam(":IDVENTA",$idVenta);
         $sentencia->bindParam(":IDPRODUCTO",$prenda['id']);
         $sentencia->bindParam(":PRECIO_U",$prenda['precio']);
         $sentencia->bindParam(":CANTIDAD",$prenda['cantidad']);
         
         $sentencia->execute();
       }

       //echo "<h3>".$total."</h3>";
     }
?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<style>
 
    /* Media query for mobile viewport */
    @media screen and (max-width: 400px){
        #paypal-button-container{
            width: 100%;
        }
    }
 
    /* Media query for desktop viewport */
    @media screen and (min-width: 400px){
        #paypal-button-container{
            width: 250px;
            display: inline-block;
        }
    }
    
</style>
    <br>
    <div class="jumbotron text-center">
        <h1 class="display-4">¡Último paso!</h1>
        <hr class="my-4">
        <p class="lead">Estás a punto de pagar con paypal la cantidad de: </p>
           <h3><b>$ <?php echo number_format($TOTAL, 2); ?></b></h3>
            
        </p>
 <div id="paypal-button-container"></div>
        <p>...</p>
    </div>  
 
    <script>
    paypal.Button.render({
        env: 'sandbox',// sandbox | production 
        style:{
            label: 'checkout',// checkout | credit | pay | nuynow | generic
            size:  'responsive',// small | medium | large | responsive
            shape: 'pill',//pill | rect
            color: 'gold'// gold | blue | silver | black
        },
        client:{
            sandbox: 'AXK5EHk0t90XEQfdDhKLoyb3s9qNhhj_V9Dl8V1RQjWCGZUKM_Sawo27zGZ-__d7yRI8u6vJKFdMKEY3',
            production: 'AeB6GQzqJSTWcH5qjXNyf56ShzF0mnvc7EskEUY4sOJ5gisIbkMR4_4WTaHMBYYEY6iIIckv0pN55LGt'
        },

        payment: function(data, actions){
            return actions.payment.create({
                payment:{
                    transactions:[
                    {
                        amount: { TOTAL: '<?php echo $TOTAL; ?>', currency:'MXN'},
                        description:"Compra de prendas Xpress Arte por: $ <?php echo number_format($TOTAL,2); ?>",
                        custom:"<?php echo $sid; ?>#<?php echo openssl_encrypt($idVenta,COD,KEY); ?>"
                    }
                  ]
                }
            });
        },
        onAuthorize: function(data, actions){
            return actions.payment.execute().then(function(){
                console.log(data);
                window.location="verificador.php?paymentToken="+data.paymentToken+"&paymentID="+data.paymentID;
                //window.alert('Pago Completado');
            });
        }

    }, '#paypal-button-container');
</script>


<?php
require_once "expresarte/templates/pie.php";

?>