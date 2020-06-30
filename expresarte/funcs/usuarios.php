<?php 

	class usuario{
		public function registroUsuario($datos){
			$c=new conexion();
			$conexion=$c->conexion();

			$sql="INSERT into usuario (nombre,
								apellido,
								correo,
								contrasena1,
								contrasena2,
								telefono,
								c_p,
								calle_numero)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]',
								'$datos[3]',
								'$datos[4]',
								'$datos[5]',
								'$datos[6]',
								'$datos[7]',";
			return mysqli_query($conexion,$sql);
		}
		public function loginUser($datos){
			$c=new conexion();
			$conexion=$c->conexion();
			$contrasena1=sha1($datos[1]);

			$_SESSION['usuario']=$datos[0];
			$_SESSION['iduser']=self::traeID($datos);

			$sql="SELECT * 
					from usuario 
				where correo='$datos[0]'
				and contrasena1='$contrasena1'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}
		public function traeID($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$contrasena1=sha1($datos[1]);

			$sql="SELECT id_usuario 
					from usuario
					where email='$datos[0]'
					and contrasena1='$contrasena1'"; 
			$result=mysqli_query($conexion,$sql);

			return mysqli_fetch_row($result)[0];
		}

		public function obtenDatosUsuario($idusuario){

			$c=new conectar();
			$conexion=$c->conexion();

			$sql="SELECT id_usuario,
							nombre,
							apellido,
							correo,
							contrasena1,
							contrasena2,
							telefono,
							c_p,
							calle_numero
					from usuario
					where id_usuario='$idusuario'";
			$result=mysqli_query($conexion,$sql);

			$ver=mysqli_fetch_row($result);

			$datos=array(
						'id_usuario' => $ver[0],
							'nombre' => $ver[1],
							'apellido' => $ver[2],
							'correo' => $ver[3],
							'contrasena1' => $ver[4],
							'contrasena2' => $ver[5],
							'telefono' => $ver[6],
							'c_p' => $ver[7],
							'calle_numero' => $ver[8]
						);

			return $datos;
		}

		public function actualizaUsuario($datos){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE usuario set nombre='$datos[1]',
									apellido='$datos[2]',
									correo='$datos[3]',
									contrasena1='$datos[4]',
									contrasena2='$datos[5]',
									telefono='$datos[6]',
									c_p='$datos[7],
									calle_numero='$datos[8]'
						where id_usuario='$datos[0]'";
			return mysqli_query($conexion,$sql);	
		}

		public function eliminaUsuario($idusuario){
			$c=new conectar();
			$conexion=$c->conexion();

			$sql="DELETE from usuario 
					where id_usuario='$idusuario'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>