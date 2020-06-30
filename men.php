<?php
include "conexion.php";
require_once "expresarte/templates/cabecera.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>


<div class="container1">
<ul>
  <li width="25%">
    <div class="section-title">
      <h2>Camisas</h2>
    </div>
    <div class="section-content" >
          <?php 
    $sql="SELECT* FROM prenda_caballero where cod_prendas like 'ca%'
    
";
    $result=mysqli_query($con,$sql);
    while($prenda=mysqli_fetch_array($result)){
   
    ?>
        <div class="col-4"style="padding:40px; ">
          <div class="card" >
            <img class="card-img-top" 
            src="vestidos/<?php echo $prenda['imagen_prenda'];?>" width="100%" 
            data-toogle="popover"
            data-trigger="hover"
            >
            <div class="card-body">
              <center><span><?php echo $prenda['nombre'];?></span>
              <h5 class="card-title">$ <?php echo $prenda['precio'];?></h5></center>
              
              
            </div>
          </div><center>
          <button  type="button" class="btn btn-info" id="myBtn1" data-toggle="modal" data-target="#myModal2">Ver Tela</button></td><br></center>
        </div>

      <!---->
      <?php
        }
      ?>

    
  
</div>


   
  </li>
  <li  width="25%" class="active">
    <div class="section-title">
      <h2>Chamarras</h2>
    </div>
    <div class="section-content">
 
    <?php 
    $sql="SELECT* FROM prenda_caballero where cod_prendas like 'ch%'
    
";
    $result=mysqli_query($con,$sql);
    while($prenda=mysqli_fetch_array($result)){
   
    ?>
        <div class="col-4"style="padding:40px; ">
          <div class="card" >
            <img class="card-img-top" 
            src="vestidos/<?php echo $prenda['imagen_prenda'];?>" width="100%" 
            data-toogle="popover"
            data-trigger="hover"
            >
            <div class="card-body">
              <center><span><?php echo $prenda['descripcion'];?></span>
              <h5 class="card-title">$ <?php echo $prenda['precio'];?></h5></center>
              
              
            </div>
          </div><center>
          <button  type="button" class="btn btn-info" id="myBtn1" data-toggle="modal" data-target="#myModal2">Ver Tela</button></td><br></center>
        </div>

      <!---->
      <?php
        }
      ?>
   

    </div>
  </li>
  <li width="25%">
    <div class="section-title">
      <h2>Pantalones</h2>
    </div>
    <div class="section-content">

      <!---->
    <?php 
    $sql="SELECT* FROM prenda_caballero where cod_prendas like 'p%'
    
";
    $result=mysqli_query($con,$sql);
    while($prenda=mysqli_fetch_array($result)){
   
    ?>
        <div class="col-4"style="padding:40px; " width="25%" >
          <div class="card" >
            <img class="card-img-top" 
            src="vestidos/<?php echo $prenda['imagen_prenda'];?>" width="100%" 
            data-toogle="popover"
            data-trigger="hover"
            >
            <div class="card-body">
             <center> <span><?php echo $prenda['descripcion'];?></span>
             <h5 class="card-title">$ <?php echo $prenda['precio'];?></h5></center>
              
              
            </div>
          </div><center>
          <button  type="button" class="btn btn-info" id="myBtn1" data-toggle="modal" data-target="#myModal2">Ver Tela</button></td><br></center>
        </div>

      <!---->
      <?php
        }
      ?>

</div>
    </div>
  </li>
  
</ul>
</div>
 <!--TELAS-->
<!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #C13359;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title" align="center">Telas</h2>
        </div>
        <div class="modal-body">
     
      <?php 
    $sql="SELECT* FROM tela 
";
    $result=mysqli_query($con,$sql);
    while($mostrar=mysqli_fetch_array($result)){
   
    ?>
    
      <div class="col-sm-4"  >
      <div class="panel panel-default text-center" >
        <div class="panel-heading"  >
          <h5><?php echo $mostrar['nombre']?> </h5>
        </div>
        <div class="panel-body">
          <img 
            class="card-img-top" 
            src="telas/<?php echo $mostrar['imagen_tela'];?>" width="100%" height="25%"
            data-toogle="popover"
            data-trigger="hover"
            
            >
        </div>
        <div class="panel-footer">
          <h3>$<?php echo $mostrar['precio_metros']?></h3>
          <h5>Precio por metro</h5>
          <button class="btn btn-lg" width="25%">Elegir</button>
        </div>
      </div>
   
        </div>
      
     
      <?php
    }
      ?>

   


     
         </div>
 
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>

</body>
</html>
<script type="text/javascript">
  var section = $('li');

function toggleAccordion() {
  section.removeClass('active');
  $(this).addClass('active');
}

section.on('click', toggleAccordion);

</script>
<br><br><br><br>
</body>
<?php
require_once "expresarte/templates/pie.php";

?>
