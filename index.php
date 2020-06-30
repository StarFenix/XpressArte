<?php
require_once 'expresarte/templates/cabecera.php';
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
      
      <img class="featurette-image img-responsive center-block" src="expresarte/img/prendas.jpg" alt="Paris"
          data-src="holder.js/500x500/auto">

      <p><strong >Prendas</strong></p>
      <p>Escoge la prenda de tu preferencia</p>
      
    </div>
  </div>
  <div class="col-sm-4" style="text-align: center;width:18%;">
    <div class="thumbnail" >
      <img class="featurette-image img-responsive center-block" src="expresarte/img/+.png" alt="+"
      data-src="holder.js/500x500/auto">
    </div>
  </div>
  <div class="col-sm-4" style="text-align: center;width:41%;height: 41px;">
    <div class="thumbnail">
           <img class="featurette-image img-responsive center-block" src="expresarte/img/telas.jpg" alt="San Francisco"
      data-src="holder.js/500x500/auto">

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
    <div class="col-sm-8" id="section1">

      <h1></h1>
       <h2><strong>MISIÓN: </strong><div align="justify">Nuestra misión es permitirte crear tu propio estilo de prenda,
       creando un diseño único y distinguido a tu alcance.</div> </h2>
    </div>
  </div>
  <hr style="border-color:#C13359;">
</div>

<div class="container">
<h2 style="text-align: center;">
Lo que dicen nuestros clientes</h2>
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
        <h3>"One word... WOW!!"<br><span>John Doe, Salesman</span></h3>
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

<?php
require_once 'expresarte/templates/pie.php';
?>

