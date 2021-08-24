<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  //Paso de Variables 'POST' del Formulario Registro
  $identificacion=$_POST['identificacion'];

  $nombres=$_POST['nombres'];
  $nombres= strtoupper($nombres);

  $apellidos=$_POST['apellidos'];
  $apellidos= strtoupper($apellidos);

  $edad=$_POST['edad'];


  $direccion=$_POST['direccion'];
  $direccion= strtoupper($direccion);


  $telefono=$_POST['telefono'];


  $email=$_POST['email'];

  $fotos= addslashes(file_get_contents($_FILES['fotos']['tmp_name']));



  $query="INSERT INTO regclientes (identificacion, nombres, apellidos, edad, direccion ,telefono, email, fotos) VALUES('$identificacion', '$nombres', '$apellidos', '$edad','$direccion', '$telefono', '$email', '$fotos')";


?>

<?php include("template/cabeceraadmin.php");  ?>





<main class="page-content pt-2"> 
          <div id="overlay" class="overlay"></div>
            
                            <div class="row">
                               <div class="form-group col-md-12">
                               <h1 align="center"> IMPORETROS M&J - Registro Cliente <a href="index.html"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
                                	<br>
                                <div class="contenedor">
                                  <div class="aspecto">
                                    <div class="barra">
                                      <a href="inicio.php"><img src="images/logo_imporetros.png" alt="logo_imporetros" height="80px"></a>
                                      <ul>
                                        <li>ImpoRetros M&J</li>
                                        <li>Número Único: 322-307-19-89</li>
                                        <li>Carrera 59 # 48 - 107 (Medellín - Barrio Triste)</li>
                                      </ul>
                                    </div>
                                    <div class="form">
                                      <h3 style="text-align: center; color: #B50104;">Formulario de Registro de Empleados </h3>
                                      <br>
                                      <h3> Datos Personales del Empleado </h3>
                                    <form method="post" action="inicio.php" action="multipart/form-data">
                                      <p class="full-width">
                                    
                                    <?php
                                       $resultado=$mysqli->query($query);
                                       if($resultado>0){
                                         echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'>!empleado Registrado Satisfactoriamente!</h1>";
                                       }else{
                                         echo "<h1><img src='images/logo_imporetros.png' width='50' height='50'>¡Error al Registrar el empelado!</h1>";
                                       }
                                    ?>
                                        </p>
                                        <p class="full-width">
                                          <button type="submit" value="Aceptar">Aceptar</button>      
                                        </p>     
                                     </form>
                                  </div>
                                </div>
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