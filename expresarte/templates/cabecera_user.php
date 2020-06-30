<?php
include 'carrito.php';
require_once "./conexion.php";
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Xpress Arte</title>
  <link rel="icon" href="favicon.ico">
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="expresarte/img/icono.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="expresarte/css/css.css">

    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
  }
  </style>
  <style>
  .modal-header, h4, .close {
    
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #C13359!important;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="bienvenido.php" >
        <span class="glyphicon glyphicon-home"><b>XpressArte</b></span>
      </a>
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
</div>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="nav navbar-nav">
    
      <li class="nav-item active"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #C13359!important;" >Ropa <span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li><a href="mujer.php">Mujer</a></li>
          <li><a href="hombre.php">Hombre</a></li>
      
        </ul>
      </li>
      <li><a href="#" id="myBtn5" data-toggle="modal" data-target="#myModal2">Telas</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
     <!-- <li><a href="#" id="myBtn2"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     
      <li><a href="#" id="myBtn" ><span class="glyphicon glyphicon-log-in"></span> Login</a>

      </li>-->
      <li><a href="#" id="myBtn3" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito(<?php 
        echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
        ?>)</a></li>
      <li class="dropdown" >
            <a href="#" style="color: cyan"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <b>Usuario: <?php echo $user ?> </b><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="expresarte/templates/login/logout.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
    </ul>
  </div>
</nav> 
<br>
<div class="container">
<br>
<center>
   <img src="expresarte/img/logo.png">
</center>

</div>
<div class="container">
  
  <ul class="nav nav-pills nav-justified nav-tabs">
    <li class="nav-item dropdown">
          <a style="color:#030303;" href="bienvenido.php"><h3>Inicio</h3></a>
    </li>
    <li class="nav-item dropdown">
      <a style="color:#030303;" href="mujer.php"><h3>Mujer</h3></a>
       
    </li>
       <li class="nav-item dropdown">
      <a style="color:#030303;" href="hombre.php"><h3>Hombre</h3></a>
       
    </li>
    
    <li class="nav-item">
      <a class="nav-link "style="color:#030303;" href="historia.php"><h3>Historia Xpress Arte</h3></a>
    </li>
  </ul><br>

</div>

