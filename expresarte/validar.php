<?php
include 'conexion.php';
session_start();



 
 $user=$_POST['correo1'];
 $password=$_POST['psw'];
$sql ="SELECT * FROM usuario where correo='$user'";
$result=$con->query($sql);
if ($result->num_rows>0) {
	
}
$row=$result->fetch_array(MYSQLI_ASSOC);

 if ($password==$row['contrasena1']) {

 	$_SESSION['loggedin']=true;
 	$_SESSION['user']=$user;
 	$_SESSION['start']=time();
 	$_SESSION['expire']=$_SESSION['start']+ (5*60);

  header('location: http://localhost/xpress/bienvenido.php');
 }
 else{
 	//alert("Error: Usuario o contraseña incorrectos");
 	header('location: http://localhost/xpress/index.php');

 }

mysqli_close($con);


?>