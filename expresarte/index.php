<!DOCTYPE html>
<html lang="en">
<head>
  <title>Xpress Arte</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="expresarte/css/css.css">
    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 75%;
    margin: auto;
  }
  </style>
  <style>
  .modal-header, h4, .close {
    background-color: #C13359;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #ffff;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #C13359!important;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" >
        <span class="glyphicon glyphicon-home">XpressArte</span>
      </a>
    </div>
    <ul class="nav navbar-nav">
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #C13359!important;" >Ropa <span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li><a href="#">Mujer</a></li>
          <li><a href="#">Hombre</a></li>
      
        </ul>
      </li>
      <li><a href="#">Telas</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" id="myBtn2"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#" id="myBtn" ><span class="glyphicon glyphicon-log-in"></span> Login</a>

      </li>
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping</a></li>

    </ul>
  </div>
</nav>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block" style="background-color:#C13359; border: none;" ><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          
        </div>
      </div>
    </div>
  </div>
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-user"></span> Registrarse</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nombres</label>
              <input type="text" class="form-control" id="usrname" placeholder=" Email o nombre">
               <label for="usrname"><span class=""></span> Apellidos</label>
              <input type="text" class="form-control" id="apellido" placeholder="Apellido materno + paterno">
               <label for="usrname"><span class=""></span> Correo</label>
              <input type="text" class="form-control" id="correo" placeholder="juanito_perez@example.com">
               <label for="usrname"><span class=""></span> Contraseña</label>
              <input type="password" class="form-control" id="contrasena1" placeholder="Contraseña">
               <label for="usrname"><span class=""></span> Vuelve a escribir la contraseña</label>
              <input type="password" class="form-control" id="contrasena2" placeholder="Vuelve a escribir tu contraseña">
               <label for="usrname"><span class=""></span> Código Postal</label>
              <input type="text" class="form-control" id="cp" placeholder="Código postal (5 dígitos)">
               <label for="usrname"><span class=""></span> Calle y número</label>
              <input type="text" class="form-control" id="calle" placeholder="Calle, numero y colonia">
             </div>
                  <button type="submit" class="btn btn-default btn-success btn-block" style="background-color:#C13359; border: none;" ><span class="glyphicon glyphicon-off"></span> Aceptar</button>
           </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal" style="text-align: center;width:100%";><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          
          
        </div>
      </div>
    </div>
  </div>
  
<br>
<div class="container">

<center>
   <img src="expresarte/img/logo.png">
</center>

</div>
<div class="container">
  
  <ul class="nav nav-pills nav-justified nav-tabs">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#030303;" href="#"><h3>WOMAN</h3></a>
       <div class="dropdown-menu">
      <a class="dropdown-item" style="color:#030303; text-align: center; " href="#"><h4>
Dresses</h4></a>
      <a class="dropdown-item" style="color:#030303;text-align: center;" href="#"><h4>Bags</h4>
      <a class="dropdown-item" style="color:#030303;text-align: center;"href="#"><h4>Shirt</h4></a>
    </div>
    </li>
       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:#030303;" href="#"><h3>MEN</h3></a>
       <div class="dropdown-menu">
      <a class="dropdown-item" style="color:#030303; text-align: center; " href="#"><h4>Shirt</h4></a>
      <a class="dropdown-item" style="color:#030303;text-align: center;" href="#"><h4>jeans</h4>
      <a class="dropdown-item" style="color:#030303;text-align: center;"href="#"><h4>jacket</h4></a>
    </div>
    </li>
    <li class="nav-item">
      <a class="nav-link"  style="color:#030303;"href="#"><h3>Accesories</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link "style="color:#030303;" href="#"><h3>Store Xpress Arte</h3></a>
    </li>
  </ul><br>

</div>
  
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
  <img class="img-fluid" src="expresarte/img/prendas.jpg" alt="Chania" width="50.5%" height="80%">                
  <img class="img-fluid" src="expresarte/img/telas.jpg" alt="Chania" width="48.5%"height="80%"> 
</div><br>
<div class="container text-center ">

<button type="button" class="btn btn-danger">Prenda</button> 
<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">+</a>
<button type="button" class="btn btn-danger">Tela </button>

  
</div>
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
<script>
$(document).ready(function(){
  $("#myBtn2").click(function(){
    $("#myModal1").modal();
  });
});
</script>
</body>
</html>
