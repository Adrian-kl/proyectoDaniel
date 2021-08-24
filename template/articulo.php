<?php

  $idCL=$_GET['numpost'];

  require '../conexion.php';
 
  $sql= "SELECT * FROM blog WHERE numpost='$idCL'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  

?>

<?php include("cabecera.php");  ?>


            <div class='container-fluid'>
              <div class='row m-2 p-3'>
                <div class='col-9 border'>

                   <img class="imgblog col-12" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotopost']);?>" />
                    <div class="contblog">
                      <div>                    
                        <p><?php echo $row['fecha']; ?></p>
                      </div>

                      <div>
                        <h1> <?php echo $row['titulopost']; ?> </h1>
                        <h4> <?php echo $row['subtitulopost']; ?></h4>
                        <p>Categorias: <?php echo $row['etiquetapost']; ?></p>
                      </div>  
                       <hr>  
                       <br>                               
                      <div>                        
                        <h5> Descripción: <?php echo $row['contenidopost']; ?> </h5>
                      </div>
                      <div class="btnblog">
                        <button class="btn btn-warning" type="submit" value="Enviar">Cotizar</button>
                        <a href="../index.php"><button class="btn btn-danger">Volver</button> </a>
                      </div>

                    </div>
                  
                </div>
                <div class='col-3'>

                  <div class="box-anuncios border p-5 m-3">
                    <ul>
                      <li><h1> <?php echo $row['titulopost']; ?> </h1> 
                         <p><?php echo $row['subtitulopost']; ?></p>
                      </li>
                    </ul>
                  </div>
                  <div class="box-anuncios border p-5 m-3">
                    Api
                  </div>
                  <div class="box-anuncios border p-5 m-3">
                    Anuncios
                  </div>      
                  <br>
                  <hr>
                           
                </div>
              </div>

            </div>




<?php


	$conexion=mysqli_connect("localhost","root","","imporetros") or
    die("Problemas con la conexión");

    $registros=mysqli_query($conexion,"select numpost,titulopost,subtitulopost,contenidopost,etiquetapost,fecha,fotopost from blog where numpost='$_REQUEST[numpost]'") or die("Problemas en el select".mysqli_error($conexion));


    while($reg = mysqli_fetch_array($registros))
    {
    	echo "<div class='cardusuario p-5'>
                <div class='card' style='width: 18rem;''>
                    <img src='static/img/proteger.png' class='card-img-top' alt='...'>
                    <div class='card-body'>
                    <h5 class='card-title'>".$reg['titulopost']."  ".$reg['subtitulopost']."</h5>
                    <p class='card-text'>".$reg['contenidopost']."  ".$reg['etiquetapost']."</p>
                    <a href='#' class='btn btn-primary'>Cotizar Ahora</a>
                    </div>
                </div>
              </div>";
    
    }  


mysqli_close($conexion);



?>

            


<?php include("pie.php");  ?>  