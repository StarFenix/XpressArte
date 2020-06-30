<?php 

	require_once "../../funcs/conexion.php";
	require_once "../../funcs/usuarios.php";

	$obj= new usuario();

	$pass=sha1($_POST['contrasena1']);
	$datos=array(
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['correo'],

		$_POST['contrasena1'],
		$_POST['contrasena2'],
		$_POST['c_p'],
		$_POST['calle_numero'],
		$pass
				);

	echo $obj->registroUsuario($datos);

 ?>