<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  //Paso de Variables 'POST' del Formulario Registro
  $nombre=$_POST['nombre'];
  $nombre= strtoupper($nombre);

  $correo=$_POST['correo'];
  $correo= strtoupper($correo);

  $cargo=$_POST['cargo'];
  $cargo= strtoupper($cargo);

  $ciudad=$_POST['ciudad'];
  $ciudad= strtoupper($ciudad);


  $telefono=$_POST['telefono'];


  $mensaje=$_POST['mensaje'];
  $mensaje= strtoupper($mensaje);



  $query="INSERT INTO contclient (nombre, correo, cargo, ciudad, telefono, mensaje) VALUES('$nombre', '$correo', '$cargo', '$ciudad', '$telefono', '$mensaje')";


?>

<?php include("template/cabeceraadmin.php");  ?>





      <main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
            
                <div class="row m-3">
                    <div class="form-group col-md-12">
                        <h1 align="center"> IMPORETROS M&J - Registro Cliente <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
                     	  <br>
                        <div class="respuestaMensaje p-3">
                      
                          <div class="form">
                                <h3 style="text-align: center; color: #B50104;">Muchas Gracias por tu Mensaje </h3>
                                    <br>
                                <h3> Estaremos en contacto lo mas pronto posible. </h3>
                              <form method="post" action="index.php" action="multipart/form-data">
                                <p class="full-width">
                                <?php
                                   $resultado=$mysqli->query($query);
                                   if($resultado>0){
                                     echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'>!Mensaje Enviado  Satisfactoriamente!</h1>";
                                   }else{
                                     echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'>¡Error al Enviar el empelado!</h1>";
                                   }
                                ?>
                                </p>
                                <p class="full-width">
                                    <button type="submit" class="btn btn-warning" value="Aceptar">Aceptar</button>      
                                </p>     
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
                       
                    

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