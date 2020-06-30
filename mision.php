<?php

include "conexion.php";
require_once "expresarte/templates/cabecera.php";
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
<?php
require_once "expresarte/templates/pie.php";

?>
