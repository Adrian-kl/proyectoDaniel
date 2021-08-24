<?php

  $idCL=$_GET['id'];
  

  require '../conexion.php';
 
  $sql= "SELECT * FROM regproductos WHERE id='$idCL'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);
  

?>

<?php include("cabecera.php");  ?>



            <div class='container-fluid'>
              <div class='row m-2 p-3'>
                <div class='col-6 border'>

                   <img class="imgCart col-12" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>" />
                  
                </div>
                <div class=' col-6'>

                  <div>
                    <h1> Producto: <?php echo $row['nombre']; ?> </h1>
                  </div>  
                  <hr>  
                  <br>           
                  <div>
                    
                    <h4>Precio: $ <?php echo $row['precio']; ?></h4>

                  </div>
                  <div>
                    <p class='title'> Ref: <?php echo $row['id']; ?> </p>
                    <p>Unidades: <?php echo $row['cantidad']; ?></p>
                    <p><?php echo $row['fecha']; ?></p>

                  </div>
                  <div>
                    
                    <h5> Descripción: <?php echo $row['descripcion']; ?> </h5>

                  </div>
                  <br>
                  <hr>
                  <div>
                      <button class="btn btn-warning" type="submit" value="Enviar">Cotizar</button>
                      <a href="../index.php"><button class="btn btn-danger">Volver</button> </a>
                  </div>
                  
                </div>
              </div>
            </div>

<?php


	$conexion=mysqli_connect("localhost","root","","imporetros") or
    die("Problemas con la conexión");

    $registros=mysqli_query($conexion,"select id,nombre,descripcion,precio,cantidad,fecha,fotos from regproductos where id='$_REQUEST[id]'") or die("Problemas en el select".mysqli_error($conexion));



    while($reg = mysqli_fetch_array($registros))
    {
    	echo "<div class='cardusuario p-5'>
                <div class='card' style='width: 18rem;''>
                    <img src='../images/editar.png' class='card-img-top' alt='...'>
                    <div class='card-body'>
                    <h5 class='card-title'>".$reg['nombre']."  ".$reg['descripcion']."</h5>
                    <p class='card-text'>".$reg['precio']."  ".$reg['cantidad']."</p>
                    <a href='#' class='btn btn-primary'>Cotizar Ahora</a>
                    </div>
                </div>
              </div>";
    
    }  


  mysqli_close($conexion);



?>

            


<?php include("pie.php");  ?>  