<?php

  require 'conexion.php';

  $sql= "SELECT * FROM regproductos";
  $resultado = $mysqli->query($sql);
?>

<?php include("template/cabecera.php");  ?>



     <h1 align="center">IMPORETROS M&J | Bienvenidos <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a>
     </h1>

    <br>

    <div class="container containerproduc">
      <div class="row">
         <h3 style="text-align: center; color: #B50104;">Listado de Productos Registrados en el Sistema</h3>
         <br>

          <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <div class="col-3">

              <div class="card">
                <img class="card-img-top" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>"/>
                  <div class="card-body">
                    <div>
                      <h5 class="card-title">Producto: <?php echo $row['nombre'];?></h5>
                    </div>
                    <div>
                      <p class="card-text">Descripción: <br> <?php echo $row['descripcion'];?></p>
                    </div>
                    
                    
                    <p class="card-text">$ <?php echo $row['precio'];?></p>
                    <a href="EliminacionProdu.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-primary">Eliminar</a>
                    <p class="card-text">$ <?php echo $row['precio'];?></p><a href="frmModificarProdu.php?id=<?php echo $row['id'];?>" class="btn btn-sm btn-warning">Cotizar</a>
                  </div>
              </div>
            </div>
          
        <?php } ?>
    
      </div>
    </div>

<?php include("template/pie.php");  ?>
