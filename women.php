<?php
include "conexion.php";
require_once "expresarte/templates/cabecera.php";
?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

<div class="container1">
<ul>
  <li width="25%">
    <div class="section-title">
      <h2>Vestidos</h2>
    </div>
    <div class="section-content" >
          <?php 
    $sql="SELECT* FROM prenda_dama where cod_prendas like 'v%'
    
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
      <h2>Pantalones</h2>
    </div>
    <div class="section-content">
 
    <?php 
    $sql="SELECT* FROM prenda_dama where cod_prendas like 'p%'
    
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
      <h2>Blusas</h2>
    </div>
    <div class="section-content">

      <!---->
    <?php 
    $sql="SELECT* FROM prenda_dama where cod_prendas like 'b%'
    
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
