<?php

  $idCL=$_GET['id'];

  require 'conexion.php';
 
  $sql= "SELECT * FROM regclientes WHERE identificacion='$idCL'";
  $resultado = $mysqli->query($sql);
  $row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<?php include("template/cabeceraadmin.php");  ?>

<main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>


                        <div class="container">
                          <div class="row col-md-12">
                              <div class="card2">
	                            <h1 align="center">IMPORETROS M&J | Modificar Clientes <a href="inicio.php"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
	                            <br>
                                  
                                  <div class="form">
                                    <h3 style="text-align: center; color: #B50104;">Formulario de Actualizaci&oacute;n de Datos de Clientes </h3>
                                         <br>
                                         <h3> Datos Personales del Cliente </h3>
                                          <form method="post" action="ModificacionCliente.php">
                                            <p>
                                             <label>Identificaci&oacute;n:</label>
                                             <input class="form-control" type="number" name="identificacion" value=<?php echo $row['identificacion']; ?> required>
                                            </p>
                                            <p>
                                              <label>Nombres:</label>
                                              <input class="form-control" type="text" name="nombres" value=<?php echo $row['nombres']; ?> required>
                                            </p>
                                            <p>
                                              <label>Apellidos:</label>
                                              <input class="form-control" type="text" name="apellidos" value=<?php echo $row['apellidos']; ?> required>
                                            </p>
                                            <p>
                                            <label>Edad:</label>
                                                <input class="form-control" type="number" name="edad" value=<?php echo $row['edad']; ?> required>
                                              </p>
                                             <p>
                                               <label>Direcci&oacute;n:</label>
                                               <input class="form-control" type="text" name="direccion" value=<?php echo $row['direccion']; ?> required>
                                             </p>
                                             <p>
                                               <label>Tel&eacute;fono:</label>
                                               <input class="form-control" type="number" name="telefono" value=<?php echo $row['telefono']; ?> required>
                                             </p>
                                             <p>
                                               <label>Email:</label>
                                               <input class="form-control" type="Email" name="email" value=<?php echo $row['email']; ?> required>
                                             </p>
                                             <p>
                                              <img class="imgedit" src="data:proyectomodelo/jpeg;base64,<?php echo base64_encode($row['fotos']);?>" />
                                              <label>Foto:</label>
                                               <input class="form-control" type="file" name="fotos" value=<?php echo base64_encode($row['fotos']);?> >
                                             </p>
                                             <p>
                                             <input type="hidden" name="idCLM" value="<?php echo $idCL;?>">
                                             </p>        
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
