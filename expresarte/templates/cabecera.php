<?php
include'modalx.php';
include 'expresarte/templates/login/login.php';
include 'expresarte/templates/login/telas.php';
?>

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
  <style >
      @media screen and (max-width: 810px) {
    #section1  {
      margin-left: 150px;
    }
  }
</style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #C13359!important;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" >
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
    
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="background-color: #C13359!important;" >Ropa <span class="caret"></span></a>
        <ul class="dropdown-menu" >
          <li><a href="women.php">Mujer</a></li>
          <li><a href="men.php">Hombre</a></li>
      
        </ul>
      </li>
      <li><a href="#" id="myBtn5" data-toggle="modal" data-target="#myModal2">Telas</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
     <!-- <li><a href="#" id="myBtn2"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
     <li><a href="#" id="myBtn3" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</a></li>
      <li><a href="#" id="myBtn" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a>

      </li>
      

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
    </li>
       <li class="nav-item dropdown">
          <a style="color:#030303;" href="index.php"><h3>Inicio</h3></a>
    </li>
    <li class="nav-item dropdown">
      <a style="color:#030303;" href="women.php"><h3>Mujer</h3></a>
       
    </li>
       <li class="nav-item dropdown">
          <a style="color:#030303;" href="men.php"><h3>Hombre</h3></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link "style="color:#030303;" href="mision.php"><h3>Historia Xpress Arte</h3></a>
    </li>
  </ul><br>

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


<?php 

if (isset($_POST['registrarse'])) {
$f_name = $_POST["nombre"];
$l_name = $_POST["apellido"];
$email = $_POST['correo'];
$password = $_POST['contrasena1'];
$repassword = $_POST['contrasena2'];
$mobile = $_POST['telefono'];
$address1 = $_POST['cp'];
$address2 = $_POST['calle'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
  empty($mobile) || empty($address1) || empty($address2)){
    
    ?> <script>alert("****");</script> 
    <?php exit(); 
  } 
  else {

  
  if(strlen($password) < 9 ){
    ?> <script>alert("****");</script><?php 
        
  }
   if(strlen($repassword) < 9 ){
     ?> <script>alert("La contraseña es débil");</script><?php     
  }
  if($password != $repassword){
     ?> <script>alert("La contraseña no coincide");</script><?php   }
  
  if(!(strlen($mobile) == 10)){
     ?> <script>alert("El número debe contener 10 dígitos");</script><?php 
  }
  //existing email address in our database
  $sql = "SELECT id_usuario FROM usuario WHERE correo = '$email' LIMIT 1" ;
  $check_query = mysqli_query($con,$sql);
  $count_email = mysqli_num_rows($check_query);
  if($count_email > 0){
     ?> <script>alert("El email ya existe");</script><?php 
     exit();
  } 
  else {
  
    //$password = md5($password);
    $password = ($password);
    $sql = "INSERT INTO `usuario` 
    (`id_usuario`, `nombre`, `apellido`, `correo`, 
    `contrasena1`, `telefono`, `c_p`, `calle_numero`) 

    VALUES (NULL, '$f_name', '$l_name', '$email', 
    '$password', '$mobile', '$address1', '$address2')";
    $run_query = mysqli_query($con,$sql);
    if($run_query){
      ?> <script>alert("Registro exitoso :3");</script><?php 
    }
  }
  }
}
 //echo "sesion iniciada $username";
?>