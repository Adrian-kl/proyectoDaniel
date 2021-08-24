<?php

  require 'conexion.php';

  $sql= "SELECT * FROM blog";
  $resultado = $mysqli->query($sql);
  
?>

<?php include("template/cabecera.php");  ?>


<?php include("template/slider.php");  ?>

  

     

    <div class="container-fluid containerproduc">
      <div class="col-12 pt-5">
        <h1 align="center">IMPORETROS M&J | Blog <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a> </h1>
      </div>

      <br>
      <div class="row m-2 p-2">
         <h3 style="text-align: center; color: #B50104;">Articulos Recientes</h3>
         <br>

        <div class="col-9">
          <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>  
            <div class="cardblog mb-3">
                <img class="card-img imgblog" alt="..." src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotopost']);?>"/>
              <div class="card-body">
                <h2 class="card-text">Titulo: <?php echo $row['titulopost'];?></h2><hr>
                <h5 class="card-text">Subtitulo: <br> <?php echo $row['subtitulopost'];?></h5>
                <p class="card-text">Contenido:  <?php echo $row['contenidopost'];?></p>
                <div class=""><p class="etiquetas"><?php echo $row['etiquetapost'];?></p> <p class="etiquetas">Maquinaria Pesada</p></div>
                <p class="card-text"><?php echo $row['fecha'];?></p>

                <div class="">   
                  <a href="EliminacionBlog.php?numpost=<?php echo $row['numpost'];?>" class="btn btn-sm btn-primary">Eliminar</a>
                  <a href="template/articulo.php?numpost=<?php echo $row['numpost'];?>" class="btn btn-sm btn-warning">Ver más</a>
                </div>
              </div>
            </div>   
          <?php } ?>
        </div>

        <div class="col-3">
          <h3>Titulo1</h3>
          <div class="box-anuncios border p-5 m-3">
            <ul>
              <li>
                <h1> <?php echo $row['titulopost']; ?> </h1> 
                <p><?php echo $row['subtitulopost']; ?></p>
              </li>
            </ul>
          </div><hr>
          <h3>Titulo2</h3>
          <div class="box-anuncios border p-5 m-3">
            Api
          </div><hr>
          <h3>Titulo3</h3>
          <div class="box-anuncios border p-5 m-3">
            Anuncios
          </div>      
          <br>
        </div>


      </div>
    </div>

    <?php include("template/asesores.php");  ?>

<?php include("template/pie.php");  ?>