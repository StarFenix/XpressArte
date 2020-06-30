<?php 
require 'expresarte/funcs/funcs.php';
include'conexion.php'

$errors = array();
  if(!empty($_POST)){
    $nombre=$mysqli->real_escape_string($_POST['nombre']);
    $apellido=$mysqli->real_escape_string($_POST['apellido']);
    $correo=$mysqli->real_escape_string($_POST['correo']);
    $contrasena1=$mysqli->real_escape_string($_POST['contrasena1']);
    $contrasena2=$mysqli->real_escape_string($_POST['contrasena2']);
    $telefono=$mysqli->real_escape_string($_POST['telefono']);
    $cp=$mysqli->real_escape_string($_POST['cp']);
    $calle=$mysqli->real_escape_string($_POST['calle']);

    if(isNull($nombre, $apellido, $correo, $contrasena1, $contrasena2, $cp, $calle)){
      $errors[]="Debe llenar todos los campos";
    }
    if(!isEmail($correo)){
      $errors[]="Dirección de correo inválida";
    }
    if(!validaPassword($contrasena1, $contrasena2)){
      $errors[]="Las contraseñas no coinciden";
    }
    
    if(emailExiste($correo)){
      $errors[]="El email $correo ya existe";
    }
}
?>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header"style="background-color: #C13359;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-user"></span> Regístrate</h4>
        </div>
        <div class="modal-body">
          <form action="#"role="form" id="frmRegistro" method="POST">
            <div class="form-group">
              <label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombre(s)</label>
              <input type="text" class="form-control"name="nombre" id="nombre" placeholder=" Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>"required>
               <label for="apellido"><span class=""></span> Apellidos</label>
              <input type="text" class="form-control" name="apellido"id="apellido" placeholder="Apellido materno + paterno" value="<?php if(isset($apellido)) echo $apellido; ?>" required>
               <label for="correo"><span class=""></span> Correo</label>
              <input type="text" class="form-control" name="correo"id="correo" placeholder="juanito_perez@example.com" value="<?php if(isset($correo)) echo $correo; ?>"required>
               <label for="contrasena1"><span class=""></span> Contraseña</label>
              <input type="password" class="form-control" name="contrasena1"id="contrasena1" placeholder="Contraseña" value="<?php if(isset($contrasena1)) echo $contrasena1; ?>" required>
               <label for="contrasena2"><span class=""></span> Vuelve a escribir la contraseña</label>
              <input type="password" class="form-control"name="contrasena2" id="contrasena2" placeholder="Vuelve a escribir tu contraseña" value="<?php if(isset($contrasena2)) echo $contrasena2; ?>" required>
               <label for="telefono"><span class=""></span> Teléfono</label>
              <input type="number" class="form-control" name="telefono"id="telefono" placeholder="Ingresa tu número telefónico" value="<?php if(isset($telefono)) echo $telefono; ?>" required>
               <label for="cp"><span class=""></span> Código Postal</label>
              <input type="number" class="form-control" name="cp"id="cp" placeholder="Código postal (5 dígitos)" value="<?php if(isset($cp)) echo $cp; ?>" required>
               <label for="calle"><span class=""></span> Calle y número</label>
              <input type="text" class="form-control" name="calle"id="calle" placeholder="Calle, numero y colonia" value="<?php if(isset($calle)) echo $calle; ?>"  required>
             </div>
                  <button type="submit" value="Registrarse" name="registrarse" class="btn btn-default btn-success btn-block" style="background-color:#C13359; border: none;" ><span class="glyphicon glyphicon-off" ></span> Aceptar</button>
           </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal" style="text-align: center;width:100%";><span class="glyphicon glyphicon-remove" value="#"></span> Cancelar</button>
          
          </div>
      </div>
    </div>
  </div>
  
