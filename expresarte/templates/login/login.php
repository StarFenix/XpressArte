<?php
include'conexion.php';
//$user=$_SESSION['user'];
?>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header" style="background-color: #C13359;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" name="frmLogin"  action="expresarte/validar.php" method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
              <input type="email" class="form-control" id="correo" name= "correo1"placeholder="Email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" name="psw" placeholder="Password" required>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Recordar</label>
            </div>
            <button type="submit" name="entrar" class="btn btn-default btn-success btn-block" style="background-color:#C13359; border: none;" ><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
          <p>¿No tienes cuenta? <a href="#" id="myBtn2" >Regístrate</a></p>
          
        </div>
      </div>
    </div>
  </div>
<!--------------------------------------------------------------------->

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
              <input type="text" class="form-control"name="nombre" id="nombre" placeholder=" Nombre" required>
               <label for="apellido"><span class=""></span> Apellidos</label>
              <input type="text" class="form-control" name="apellido"id="apellido" placeholder="Apellido materno + paterno" required>
               <label for="correo"><span class=""></span> Correo</label>
              <input type="text" class="form-control" name="correo"id="correo" placeholder="juanito_perez@example.com" required>
               <label for="contrasena1"><span class=""></span> Contraseña</label>
              <input type="password" class="form-control" name="contrasena1"id="contrasena1" placeholder="Contraseña" required>
               <label for="contrasena2"><span class=""></span> Vuelve a escribir la contraseña</label>
              <input type="password" class="form-control"name="contrasena2" id="contrasena2" placeholder="Vuelve a escribir tu contraseña" required>
               <label for="telefono"><span class=""></span> Teléfono</label>
              <input type="number" class="form-control" name="telefono"id="telefono" placeholder="Ingresa tu número telefónico" required>
               <label for="cp"><span class=""></span> Código Postal</label>
              <input type="number" class="form-control" name="cp"id="cp" placeholder="Código postal (5 dígitos)" required>
               <label for="calle"><span class=""></span> Calle y número</label>
              <input type="text" class="form-control" name="calle"id="calle" placeholder="Calle, numero y colonia" required>
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
  
