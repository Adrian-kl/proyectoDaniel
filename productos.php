<?php

  require 'conexion.php';

  $sql= "SELECT * FROM regproductos";
  $resultado = $mysqli->query($sql);
?>

<?php include("template/cabecera.php");  ?>


        




     <h1 align="center">IMPORETROS M&J | Repuestos y refacciones <a href="index.php"><img src="images/logo_imporetros.png" width="40" height="40"></a>
     </h1>

    <br>

    <div class="containerproduc" id="row1">
      <div class="row align-content-start">
         <h3 style="text-align: center; color: #B50104;">Productos ImpoRetros</h3>
         <br>

          <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <div class="col-sm-3 pt-5">

              <div class="card">
                  <!-- Scrollable modal -->
                <img class="card-img h-100" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>"/>
                  <div class="card-body">
                    <h5 class="card-title">Producto: <?php echo $row['nombre'];?></h5>
                    <p class="card-text">Descripción: <br> <?php echo $row['descripcion'];?></p>
                    <p class="card-text">Precio:  <?php echo $row['precio'];?></p>
                    <a href="administrador/EliminacionProdu.php?id=<?php echo $row['id'];?>" class="btn btn-center btn-sm btn-primary">Eliminar</a>
                    <a href="template/carrito.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-warning">Cotizar</a>
                  </div>
              </div>
            </div>
          
        <?php } ?>
    
      </div>
    </div>


    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner cla1">
            <div class="carousel-item active">
              <img src="images/descuentos.png" height="100px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/descuentos.png" height="100px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/descuentos.png" height="100px" class="d-block w-100" alt="...">
            </div>
          </div>
    </div>

<?php include("template/pie.php");  ?>