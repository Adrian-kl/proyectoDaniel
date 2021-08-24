<?php

  require 'conexion.php';

  $sql= "SELECT * FROM regclientes";
  $resultado = $mysqli->query($sql);
?>


<?php include("template/cabeceraadmin.php");  ?>

<main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
                  <div class="container">
                    <div class="row col-md-12">
                        <div class="card2">
                        
                              <h1 align="center">IMPORETROS M&J | Consultar cliente <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
	                            <br>

                                  
                                      <h3 style="text-align: center; color: #B50104;">Listado de Clientes Registrados en el Sistema</h3>
                                      <br>
                                    <table class="table table-sm table-hover table-bordered">
                                        <thead class="table-dark">
                                          <th scope="col"> Editar </th>
                                          <th scope="col"> Eliminar </th>
                                          <th scope="col">Identificacion</th>
                                          <th scope="col">Nombres</th>
                                          <th scope="col">Apellidos</th>
                                          <th scope="col">Edad</th>
                                          <th scope="col">Direccion</th>
                                          <th scope="col">Telefono</th>
                                          <th scope="col">Email</th>
                                          <th scope="col">Foto</th>
                                        </thead>
                                      <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                                        <tbody>
                                          <td><a href="frmModificarCliente.php?id=<?php echo $row['identificacion'];?>"><img src="images/editar.png" width="20" height="20"> </a></td>
                                          <td><a href="EliminacionCliente.php?id=<?php echo $row['identificacion'];?>"><img src="images/eliminar.png" width="20" height="20"> </a></td>
                                          <td scope="row"><?php echo $row['identificacion'];?></td>
                                          <td><?php echo $row['nombres'];?></td>
                                          <td><?php echo $row['apellidos'];?></td>
                                          <td><?php echo $row['edad'];?></td>
                                          <td><?php echo $row['direccion'];?></td>
                                          <td><?php echo $row['telefono'];?></td>
                                          <td><?php echo $row['email'];?></td>
                                          <td><img class="imgcliente" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>"/></td>
                                        </tbody> 
                                      <?php } ?>
                                    </table>
                              </div>
                          </div>
                      </div>  

                            <div class="row">
                              <div class="form-group col-md-12"> 
                                  <a id="toggle-sidebar" class="btn btn-secondary rounded-0" href="#">
                                      <span>Cerar Menu Lateral</span>
                                  </a>
                                  <a id="pin-sidebar" class="btn btn-outline-secondary rounded-0" href="#">
                                      <span>Subir</span>
                                  </a>
                              </div>
                            </div>
                        <hr>
                              


                                <hr>
                                <div class="row ">
                                    <div class="form-group col-md-12">
                                        <small>Realizada <i class="fa fa-heart text-danger" aria-hidden="true"></i> por <span
                                class="text-secondary font-weight-bold">Diseño y Desarrollo
                                </span></small>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <a href="https://github.com/azouaoui-med" target="_blank"
                                             class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                                            <i class="fab fa-github" aria-hidden="true"></i>
                                        </a>
                                        <a href="https://twitter.com/azouaoui_med" target="_blank"
                                             class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="https://www.instagram.com/azouaoui_med/" target="_blank"
                                             class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                        <a href="https://www.linkedin.com/in/mohamed-azouaoui/" target="_blank"
                                             class="btn btn-sm bg-secondary shadow-sm rounded-0 text-light mr-3 mb-3">
                                            <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                    </div>
                </main>


<?php include("template/pieadmin.php");  ?>