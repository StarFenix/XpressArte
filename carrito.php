<!-- Modal -->
<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">
  <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #C13359;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h2 class="modal-title" align="center"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</h2>
      </div>
      <?php
        if(!empty($_SESSION['CARRITO'])){
      ?>
      <div class="modal-body">
        <div align="center">
        <table class="table table-striped">
          <tbody>
              <thead>
                <th scope="col"  class=" text-center" width="70%">Prenda</th>
                <th scope="col" class="text-center" width="20%">Total</th>
                <th scope="col" class="text-center"width="10%">Quitar</th> 
              </thead>
        
          
            <?php $TOTAL=0;?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$prenda){?>
            <tr>
              <td width="70%">
                <div align="center">
                  <img align="center"
                      src="vestidos/<?php echo $prenda['imagen_prenda'];?>" 
                      class="card-img-center" 
                      width="100%">
                </div>
              </td><center>
              
              <td class=" text-center" width="20%">
                <div align="center"><br><br>
                  <h5><b><em>$ <?php echo $prenda['precio']?></em></b></h5>
                </div>
              </td>
              <td class=" text-center" width="10%"><center>
                <br><br>
                <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($prenda['id'],COD,KEY);?>">
                    
                    <button class="btn btn-danger "
                                type="submit"                                
                name="btnAccion" 
                value="Eliminar"><b>x</b>
                    </button>
                </form>
              </td></center>
            </tr> 
          <?php $TOTAL=$TOTAL+($prenda['precio']);?>   
          <?php }?>
          <br>
          <div align="right">
            <tr>
              <td colspan="3" align="right"><h3><b>Total: </b></h3></td>
              <td align="right"><h3>$ <?php echo number_format($TOTAL,2)?></h3></td>
             
            </tr>
          </div>
        </tbody>
    </table>
    </div>
        <div align="right">
          <tr>
            <form action="pagar.php" method="post">
              <div class="alert alert-success" role="alert">
                        <div class="form-group">
                            <label for="my-input">Ingresa tu correo para continuar la compra </label>
                            <input id="email" name="email" class="form-control" type="email"
                            placeholder="Ingresa tu correo"
                            required
                            >
                        </div>
                        <small id="emailHelp"
                        class="form-text text-muted">
                        
                        </small>
                    </div>
              <button class="btn btn-success" 
                      type="submit" 
                      value="proceder" 
                      name="btnAccion">
                  Pagar
               </button>
             </form>
          </tr>
        </div>
      </div>
  
      <div class="modal-footer">
        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span>Cerrar</button>
      </div>
      <?php }else{ ?>
    <div class="alert alert-success">
        No hay productos en el carrito...
    </div>
    <?php } ?>
    </div>
  </div>
</div>
