<?php
session_start();
include "expresarte/funcs/config.php";
include "expresarte/funcs/conexion.php";
require_once 'expresarte/templates/cabecera_user.php';
?>


<div class="">
   <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="expresarte/img/1.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="expresarte/img/2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="expresarte/img/3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="expresarte/img/4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beautiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container">
  <h2>Xpress Arte</h2>
  <h3>"La gente va a mirar...haz que valga la pena" </h3>
  <p>para expresarte solo tienes que elegir tu prenda + la tela que representa tu estilo</p>
  <hr style="border-color:#C13359;">
<div class="row text-center">
  <div class="col-sm-4" style="text-align: center;width:41%;height: 41px;">
    <div class="thumbnail">
      <img src="expresarte/img/prendas.jpg" alt="Paris">
      <p><strong>Prendas</strong></p>
      <p>Escoge la prenda de tu preferencia</p>
      
    </div>
  </div>
  <div class="col-sm-4" style="text-align: center;width:18%;">
    <div class="thumbnail" >
      <img src="expresarte/img/+.png" alt="" >
      
    </div>
  </div>
  <div class="col-sm-4" style="text-align: center;width:41%;height: 41px;">
    <div class="thumbnail">
      <img src="expresarte/img/telas.jpg" alt="San Francisco">
      <p><strong>Telas</strong></p>
      <p>Escoge la tela que más te guste</p>
      

    </div>
  </div>
</div>

  
</div><br>

<br><br><br><br>
<div class="container">
  <div class="row">
    
  </div>
</div>
<div class="container">
  <hr style="border-color:#C13359;">
  <div class="row">
    <div class="col-sm-4">
      <img src="expresarte/img/logo.png">
      
    </div>
    <div class="col-sm-8">

      <h1></h1>
       <h2><strong>MISIÓN: </strong><div align="justify">Nuestra misión es permitirte crear tu propio estilo de prenda,
       creando un diseño único y distinguido a tu alcance.</div> </h2>
    </div>
  </div>
  <hr style="border-color:#C13359;">
</div>

<div class="container">
<h2 style="text-align: center;">Lo que dicen nuestros clientes</h2>
  <div id="myCarousel2" class="carousel slide text-center" data-ride="carousel2" >
    <!-- Indicators -->
    <ol class="carousel-indicators" >
      <li data-target="#myCarousel2" data-slide-to="0" class="active" style="background-color: #C13359; "></li>
      <li data-target="#myCarousel2" data-slide-to="1" style="background-color: #C13359;"></li>
      <li data-target="#myCarousel2" data-slide-to="2" style="background-color:#C13359;"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox"  >
      <div class="item active" >
        <h3>"Esta empresa es la mejor. Estoy muy satisfecho con el resultado!"<br><span>Michael Roe</span></h3>
      </div>
      <div class="item">
        <h3>"WOW!!"<br><span>John Doe, Salesman</span></h3>
      </div>
      <div class="item">
        <h3>"¿Podría ... ser más feliz con esta empresa?"<br><span>Chandler Bing</span></h3>
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left"style="color: #C13359;" aria-hidden="true"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"style="color: #C13359;" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>

<br>
<br>
<br>
<br><br>

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
require_once 'expresarte/templates/footer.php';
?>

