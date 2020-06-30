<?php
session_start();
include "expresarte/funcs/config.php";
include "expresarte/funcs/conexion.php";
include "proceso_carrito.php";
require_once "expresarte/templates/cabecera_user.php";
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

<link rel="icon" href="favicon.ico">
  <center><h2>Catálogo de prendas</h2></center>
      <?php if($mensaje!=""){ ?>
      <div class="alert alert-success">
      <?php echo($mensaje);?>
        
        <a href="#" id="myBtn1" 
                    data-toggle="modal" 
                    data-target="#myModal3"class="badge badge-success">Ver carrito</a>
    
      </div>
      <?php } ?>
<br>
<div class="container1">
    <ul class="accordion">
      
  <li  width="25%" class="tabs">
    <div class="section-title">
      <h2>Pantalones</h2>
    </div>
    <div class="section-content">
    

 <?php
        $sentencia=$pdo->prepare("SELECT* FROM prenda_caballero where cod_prendas like 'p%'");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        print_r($listaProductos);
      ?>
      <?php 
        foreach($listaProductos as $prenda){ ?>
        <div class="col-4"style="padding:15px; ">
          <div class="card" >
            <img class="card-img-top" 
            src="vestidos/<?php echo $prenda['imagen_prenda'];?>" width="100%" 
            >
            <div class="card-body">
              <center><h5><b><?php echo $prenda['nombre'];?></b></h5><br>
              <h5 class="card-title">$ <?php echo $prenda['precio'];?></h5></center>
            <center>
              <form action="" method="post">

                <input type="hidden" name="id" id="id" value="
                <?php echo openssl_encrypt($prenda['cod_prendas'],COD,KEY);?>">
                <input type="hidden" name="imagen_prenda" id="imagen_prenda" value="<?php echo openssl_encrypt ($prenda['imagen_prenda'],COD,KEY);?>" width="100%" >
                <input type="hidden" name="nombre" id="nombre" value="
                <?php echo openssl_encrypt($prenda['nombre'],COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="
                <?php echo openssl_encrypt($prenda['precio'],COD,KEY);?>">

                <!--Cambiar a type="submit"-->
                <button  type="submit" 
                           class="btn btn-info" 
                          id="myBtn1"
                          name="btnAccion" 
                          value="Agregar" 
                          ><span class="glyphicon glyphicon-shopping-cart">Agregar</span>

                </button></center>
              </form>
            </div>
          </div>
        </div>
      <!---->
      <?php
        }
      ?>
</div>
</li>
<li width="25%" class="active">
        <div class="section-title">
            <h2>Chamarras</h2>
        </div>
        <div class="section-content" >
    
      <!---->
        <?php
        $sentencia=$pdo->prepare("SELECT* FROM prenda_caballero where cod_prendas like 'ch%'");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
      ?>
      <?php 
      
        foreach($listaProductos as $prenda){ ?>
        <div class="col-4"style="padding:15px; ">
          <div class="card" >
            <img class="card-img-top" 
            src="vestidos/<?php echo $prenda['imagen_prenda'];?>" width="100%" 
            >
            <div class="card-body">
              <center><h5><b><?php echo $prenda['nombre'];?></b></h5><br>
              <h5 class="card-title">$ <?php echo $prenda['precio'];?></h5></center>
            <center>
              <form action="" method="post">

                <input type="hidden" name="id" id="id" value="
                <?php echo openssl_encrypt($prenda['cod_prendas'],COD,KEY);?>">
                <input type="hidden" name="imagen_prenda" id="imagen_prenda" value="<?php echo openssl_encrypt ($prenda['imagen_prenda'],COD,KEY);?>" width="100%" >
                <input type="hidden" name="nombre" id="nombre" value="
                <?php echo openssl_encrypt($prenda['nombre'],COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="
                <?php echo openssl_encrypt($prenda['precio'],COD,KEY);?>">

                <!--Cambiar a type="submit"-->
                <button  type="submit" 
                           class="btn btn-info" 
                          id="myBtn1"
                          name="btnAccion" 
                          value="Agregar" 
                          ><span class="glyphicon glyphicon-shopping-cart">Agregar</span>

                </button></center>
              </form>
            </div>
          </div>
        </div>
      <!---->
      <?php
        }
      ?>
  
</div>
</li>
  <li width="25%">
    <div class="section-title">
      <h2>Camisas</h2>
    </div>
    <div class="section-content">

      <!---->
     <?php
        $sentencia=$pdo->prepare("SELECT* FROM prenda_caballero where cod_prendas like 'ca%'");
        $sentencia->execute();
        $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //print_r($listaProductos);
      ?>
      <?php 
        foreach($listaProductos as $prenda){ ?>
        <div class="col-4"style="padding:15px; ">
          <div class="card" >
            <img class="card-img-top" 
            src="vestidos/<?php echo $prenda['imagen_prenda'];?>" width="100%" 
            >
            <div class="card-body">
              <center><h5><b><?php echo $prenda['nombre'];?></b></h5><br>
              <h5 class="card-title">$ <?php echo $prenda['precio'];?></h5></center>
            <center>
              <form action="" method="post">

                <input type="hidden" name="id" id="id" value="
                <?php echo openssl_encrypt($prenda['cod_prendas'],COD,KEY);?>">
                <input type="hidden" name="imagen_prenda" id="imagen_prenda" value="<?php echo openssl_encrypt ($prenda['imagen_prenda'],COD,KEY);?>" width="100%" >
                <input type="hidden" name="nombre" id="nombre" value="
                <?php echo openssl_encrypt($prenda['nombre'],COD,KEY);?>">
                <input type="hidden" name="precio" id="precio" value="
                <?php echo openssl_encrypt($prenda['precio'],COD,KEY);?>">

                <!--Cambiar a type="submit"-->
                <button  type="submit" 
                           class="btn btn-info" 
                          id="myBtn1"
                          name="btnAccion" 
                          value="Agregar" 
                          ><span class="glyphicon glyphicon-shopping-cart">Agregar</span>

                </button></center>
              </form>
            </div>
          </div>
        </div>
      <!---->
      <?php
        }
      ?>

</div>
    </div>
  </li>
  
</ul>
</div>
 
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
<script type="text/javascript">
  var section = $('li');

function toggleAccordion() {
  section.removeClass('active');
  $(this).addClass('active');
}

section.on('click', toggleAccordion);

</script>


<br><br><br><br>
</body>
<?php
require_once "expresarte/templates/footer.php";

?>
