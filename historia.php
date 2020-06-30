<?php
session_start();
include "expresarte/funcs/config.php";
include "expresarte/funcs/conexion.php";
require_once "expresarte/templates/cabecera_user.php";
?>
<body>
    
    <div id="demo">
    <div class="container marketing">
      <div class="col-md-7">
        <h1 class="featurette-heading"></h1>
      </div>
    </div>

    <div class="container marketing">
      
      <!-- START THE FEATURETTES -->
<br><br>
      <div class="row featurette">

        <div class="col-md-7"><br><br><br>
          <h2 class="featurette-heading" align="justify"><b>MISIÓN. </b><span class="text-muted">Permitirte crear tu propio estilo de prenda, </span>creando un diseño único y distinguido a tu alcance.</h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="expresarte/img/vest.jpg" width="400px" height="400px" 
          data-src="holder.js/500x500/auto">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5" >
          <h2 class="featurette-heading" align="justify"><b>VISIÓN. </b><span class="text-muted">Queremos ser una empresa de referencia,</span>que camina con el cambio de la tecnología y la sociedad, dando a conocer las posibilidades de los estándares y tecnologías libres. </h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="expresarte/img/web.png
          " width="600px" height="400px"
          data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
<br><br>
      <hr class="featurette-divider">
    </div>
    </div>
    !--TELAS-->
<!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #C13359;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center">Telas</h2>
        </div>
        <div class="modal-body">
     
    <?php
        $sentencia=$pdo->prepare("SELECT* FROM tela");
        $sentencia->execute();
        $listaTela=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
      ?>
      <?php 
        foreach($listaTela as $mostrar){ ?>
      <div class="col-sm-4"  >
      <div class="panel panel-default text-center" >
        <div class="panel-heading"  >
          <h5><?php echo $mostrar['nombre']?> </h5>
        </div>
        <div class="panel-body">
          <img 
            class="card-img-top" 
            src="telas/<?php echo $mostrar['imagen_tela'];?>" width="100%" height="25%"
            >
        </div>
        <div class="panel-footer">
          <h3>$<?php echo $mostrar['precio_metros']?></h3>
          <h5>Precio por metro</h5>

          <form action="" method="post">

                <input type="hidden" name="idtela" id="idtela" value="<?php echo openssl_encrypt($mostrar['cod_tela'],COD,KEY);?>">
                <input type="hidden" name="nombretela" id="nombretela" value="<?php echo openssl_encrypt($mostrar['nombre'],COD,KEY);?>">
                <input type="hidden" name="imagen_tela" id="imagen_tela" value="telas/<?php echo $mostrar['imagen_tela'];?>" width="100%" >
                <input type="hidden" name="preciotela" id="preciotela" value="<?php echo openssl_encrypt($mostrar['precio_metros'],COD,KEY);?>">
              </form>
        </div>
      </div>
   
        </div>
      
     
      <?php
    }
      ?>

      

       </div>
 
        <div class="modal-footer">
          <button type="button" 
                  class="btn btn-default" 
                  data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
<?php
require_once "expresarte/templates/footer.php";

?>
