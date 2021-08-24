<?php

  $idCL=$_GET['id'];

  require 'conexion.php';
 
  $sql= "SELECT * FROM regproductos WHERE id='$idCL'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<?php include("template/cabeceraadmin.php");  ?>

<main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
            
                    <div class="container">
                        <h1 align="center">IMPORETROS M&J | Modificar Productos <a href="inicio.php"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
                        <br>
                        <div class="row col-md-12">
                          <div class="card2">
                            <div class="form">
                              <h3 style="text-align: center; color: #B50104;">Formulario de Actualizaci&oacute;n de Productos </h3>
                              <br>
                              <h3> Datos de los Productos </h3>
                              <form method="post" action="ModificacionProdu.php" enctype="multipart/form-data">
                                <p>
                                  <label>Id:</label>
                                  <input class="form-control" type="number" name="id" value=<?php echo $row['id']; ?> required>
                                </p>
                                <p>
                                  <label>Nombre:</label>
                                  <input class="form-control" type="text" name="nombre" value=<?php echo $row['nombre']; ?> required>
                                </p>
                                <p>
                                  <label>Descripción:</label>
                                  <input class="form-control" type="text" name="descripcion" value=<?php echo $row['descripcion']; ?>  required>
                                </p>
                                <p>
                                  <label>Precio:</label>
                                  <input class="form-control" type="number" name="precio" value=<?php echo $row['precio']; ?>  required>
                                </p>
                                <p>
                                  <label>Cantidad:</label>
                                  <input class="form-control" type="text" name="cantidad" value=<?php echo $row['cantidad']; ?>  required>
                                </p>
                                <p>
                                  <label>Fecha:</label>
                                  <input class="form-control" type="date" name="fecha" value=<?php echo $row['fecha']; ?>  required>
                                </p>
                                <p>
                                <img class="imgedit" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>" />
                                <label>Foto:</label>
                                  <input class="form-control" type="file" name="fotos" value=<?php echo base64_encode($row['fotos']);?> >
                                  </p>
                                <p>
                                <input type="hidden" name="idCLM" value="<?php echo $idCL;?>">
                                </p>
                                <p></p>
                                <br>
                                <button class="btn btn-warning" type="submit" value="Enviar">Enviar</button>
                                <button class="btn btn-danger" type="reset" value="Restablecer">Resteblacer</button>            
                              </form>
                              </div>
                              </div>
                          </div>        
                </div>
            </main>


<?php include("template/pieadmin.php");  ?>  