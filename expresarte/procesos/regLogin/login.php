<?php 
	session_start();
	require_once "../../funcs/conexion.php";
	require_once "../../funcs/usuarios.php";

	$obj= new usuarios();

	$datos=array(
		$_POST['correo'],
	$_POST['contrasena1']
	);

	

	echo $obj->loginUser($datos);

 ?>