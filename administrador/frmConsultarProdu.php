<?php

  require 'conexion.php';

  $sql= "SELECT * FROM regproductos";
  $resultado = $mysqli->query($sql);
?>


<?php include("template/cabeceraadmin.php"); ?>



          <main class="page-content pt-2"> 
            <div id="overlay" class="overlay"></div>

                  <div class="container">
                    <div class="row col-md-12">
                        <div class="card2">
                        <h1 align="center">IMPORETROS M&J | Consultar Productos <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
                                  <div class="form">
                                    <h3 style="text-align: center; color: #B50104;">Listado de Productos</h3>
                                    <br>
                                     <table class="table table-sm table-hover table-bordered">
                                       <tr class="table-warning">
                                        <th scope="col">Editar</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Foto</th>
                                      </tr>
                                      <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <tr>
                                          <td><a href="frmModificarProdu.php?id=<?php echo $row['id'];?>"><img src="images/editar.png" width="40" height="40"></a></td>
                                          <td><a href="EliminacionProdu.php?id=<?php echo $row['id'];?>"><img src="images/eliminar.png" width="40" height="40"> </a></td>
                                          <td scope="row"><?php echo $row['id'];?></td>
                                          <td><?php echo $row['nombre'];?></td>
                                          <td><?php echo $row['descripcion'];?></td>
                                          <td><?php echo $row['precio'];?></td>
                                          <td><?php echo $row['cantidad'];?></td>
                                          <td><?php echo $row['fecha'];?></td>
                                          <td><img class="imgprodu" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>"/></td>
                                        </tr>
                                      <?php } ?>
                                    </table>
                              </div>
                        </div>
                    </div>
              </div>
      </main>


<?php include("template/pieadmin.php");  ?>          