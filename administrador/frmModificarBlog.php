<?php

  $idCL=$_GET['numpost'];

  require 'conexion.php';
 
  $sql= "SELECT * FROM blog WHERE numpost='$idCL'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<?php include("template/cabeceraadmin.php");  ?>

<main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>


          <div class="container">
                <div class="row col-md-12">
                <div class="card2">
                      <div class="form">
                        <h3 style="text-align: center; color: #B50104;"> BLOG | Actualizaci&oacute;n de Articulos</h3>
                        <br>
                        <h3> Datos de los Productos </h3>
                            <form method="post" action="ModificacionBlog.php" enctype="multipart/form-data">
                                <p>
                                    <label>Id:</label>
                                    <input class="form-control" type="number" name="numpost" value=<?php echo $row['numpost']; ?> required>
                                </p>
                                <p>
                                    <label>Nombre:</label>
                                    <input class="form-control" type="text" name="titulopost" value=<?php echo $row['titulopost']; ?> required>
                                </p>
                                <p>
                                    <label>Descripción:</label>
                                    <input class="form-control" type="text" name="subtitulopost" value=<?php echo $row['subtitulopost']; ?>  required>
                                </p>
                                <p>
                                    <label>Precio:</label>
                                    <input class="form-control" type="text" name="contenidopost" value=<?php echo $row['contenidopost']; ?>  required>
                                </p>
                                <p>
                                    <label>Cantidad:</label>
                                    <input class="form-control" type="text" name="etiquetapost" value=<?php echo $row['etiquetapost']; ?>  required>
                                </p>
                                <p>
                                    <label>Fecha:</label>
                                    <input class="form-control" type="date" name="fecha" value=<?php echo $row['fecha']; ?>  required>
                                </p>
                                <p>
                                <img class="imgedit" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotopost']);?>" />
                                <label>Foto:</label>
                                    <input class="form-control" type="file" name="fotos" value=<?php echo base64_encode($row['fotopost']);?> >
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
            </div>
    </main>


<?php include("template/pieadmin.php");  ?>  