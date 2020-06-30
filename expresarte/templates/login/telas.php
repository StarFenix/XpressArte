<?php
include "expresarte/funcs/config.php";
include "expresarte/funcs/conexion.php";

?>
<!--TELAS-->
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