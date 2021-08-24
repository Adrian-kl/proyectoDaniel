<?php
  //Conexion con la Base de Datos
  require 'conexion.php';

  $idCLM=$_POST['idCLM'];

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

  $fotos=$_POST['fotos'];

  $sql="UPDATE regclientes SET identificacion='$identificacion', nombres='$nombres', apellidos='$apellidos', edad='$edad',direccion='$direccion', telefono='$telefono', email='$email', fotos='$fotos' WHERE identificacion='$idCLM'";

?>


<?php include("template/cabeceraadmin.php");  ?>

<main class="page-content pt-2"> 

          <div id="overlay" class="overlay"></div>
            
              <div class="row">
	                      <h1 align="center">ImpoRetros M&J<a href="inicio.php"><img src="images/logo_imporetros.png" width="40" height="40"></a></h1>
	                   <br>
      
                        <div class="form">
                          <h3 style="text-align: center; color: #B50104;">Formulario de Modificaci&oacute;n de Clientes </h3>
                          <br>
                         <h3> Datos Personales del Cliente </h3>
                        <form method="post" action="inicio.php" action="multipart/form-data">
                          <p class="full-width">
                          <?php
                            $resultado=$mysqli->query($sql);
                           if($resultado>0){
                              echo "<h1><img src='images/iconok.ico' width='50' height='50'>!Cliente Actualizado Satisfactoriamente!</h1>";
                            }else{
                              echo "<h1><img src='images/iconwarning.png' width='50' height='50'>¡Error al Actualizar el Empleado!</h1>";
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
    </main>
    <?php include("template/pieadmin.php");  ?>    