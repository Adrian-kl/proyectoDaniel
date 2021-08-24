<?php

  require 'conexion.php';

  $sql= "SELECT * FROM blog";
  $resultado = $mysqli->query($sql);
?>


<?php include("template/cabeceraadmin.php"); ?>



          <main class="page-content pt-2"> 
            <div id="overlay" class="overlay"></div>


                  <div class="container">
                    <div class="row col-md-12">
                        <div class="card2">
                            
                            <div class="form">
                                    <h3 style="text-align: center; color: #B50104;">Articulos Registrados en el Sistema</h3>
                                    <br>
                                     <table class="table table-sm table-hover table-bordered">
                                       <tr class="table-warning">
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col"># POST</th>
                                        <th scope="col">Titulo</th>
                                        <th scope="col">Subtitulo</th>
                                        <th scope="col">Contenido</th>
                                        <th scope="col">Etiquetas</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Fotos</th>
                                      </tr>
                                      <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <tr>
                                          <td><a href="frmModificarBlog.php?numpost=<?php echo $row['numpost'];?>"><img src="images/editar.png" width="40" height="40"></a></td>
                                          <td><a href="EliminacionBlog.php?numpost=<?php echo $row['numpost'];?>"><img src="images/eliminar.png" width="40" height="40"> </a></td>
                                          <td scope="row"><?php echo $row['numpost'];?></td>
                                          <td><?php echo $row['titulopost'];?></td>
                                          <td><?php echo $row['subtitulopost'];?></td>
                                          <td><?php echo $row['contenidopost'];?></td>
                                          <td><?php echo $row['etiquetapost'];?></td>
                                          <td><?php echo $row['fecha'];?></td>
                                          <td><img class="imgprodu" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotopost']);?>"/></td>
                                        </tr>
                                      <?php } ?>
                                    </table>
                            </div>
                        </div>
                      </div>
                    </div>
      </main>


<?php include("template/pieadmin.php");  ?>